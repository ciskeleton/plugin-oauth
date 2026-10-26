<?php

/**
 * OAuth Driver Library
 *
 * Central OAuth orchestrator responsible for:
 * - Provider discovery and initialization
 * - Runtime enablement checks
 * - OAuth callback handling
 * - CSRF/state validation
 * - User account provisioning and login
 *
 * Provider-specific logic is delegated to driver classes.
 *
 * @package     CiSkeleton\Plugins
 * @subpackage  OAuth
 * @author      Kader Bouyakoub <bkader[at]mail[dot]com>
 * @copyright   2018-present, Kader Bouyakoub
 * @license     Apache-2.0 — Apache License 2.0
 * @link        https://www.apache.org/licenses/LICENSE-2.0
 *
 * @property CI_Oauth_discord   $discord
 * @property CI_Oauth_facebook  $facebook
 * @property CI_Oauth_github    $github
 * @property CI_Oauth_google    $google
 * @property CI_Oauth_linkedin  $linkedin
 * @property CI_Oauth_microsoft $microsoft
 */

final class CI_Oauth extends CI_Driver_Library
{
	/**
	 * CI super-object.
	 *
	 * @var CI_Controller
	 */
	protected $ci;

	/**
	 * List of valid OAuth provider drivers.
	 *
	 * @var string[]
	 */
	protected $valid_drivers;

	/**
	 * Enabled and initialized OAuth providers.
	 *
	 * @var array<string,object>
	 */
	public $providers = [];

	/**
	 * Last user-facing status or error message.
	 *
	 * @var string
	 */
	public $message = '';

	/**
	 * Whether OAuth is enabled for the current request.
	 *
	 * @var bool
	 */
	public $enabled = false;

	/** @var CI_Oauth_discord */
	public $discord;

	/** @var CI_Oauth_facebook */
	public $facebook;

	/** @var CI_Oauth_github */
	public $github;

	/** @var CI_Oauth_google */
	public $google;

	/** @var CI_Oauth_linkedin */
	public $linkedin;

	/** @var CI_Oauth_microsoft */
	public $microsoft;

	// --------------------------------------------------------------------

	/**
	 * Class constructor.
	 *
	 * Determines OAuth availability for the current request,
	 * registers runtime hooks, and defers provider initialization
	 * until the framework `init` phase.
	 *
	 * @return void
	 */
	public function __construct()
	{
		$this->ci ??= CI_Controller::get_instance();

		// Merge plugin-defined providers with any custom providers registered
		// via the 'oauth_providers' filter. Custom providers must also be
		// registered with Autoloader::add_class().
		$this->valid_drivers = array_merge_unique(
			$this->ci->hooks->filter('oauth_providers', [], $this->ci),
			OAUTH_PROVIDERS
		);

		/**
		 * Determines whether OAuth is currently enabled and usable for this request.
		 *
		 * Conditions:
		 * 1. Site is online (not in maintenance mode)
		 * 2. Not running in demo mode
		 * 3. Not running in dashboard context
		 * 4. Request is interactive (not CLI, AJAX, or API)
		 * 5. OAuth is enabled in the configuration
		 * 6. User is not logged in
		 * 7. cURL is available on the server
		 * 8. Session SameSite cookie is not 'Strict'
		 */
		$this->enabled = (
			!CI_OFFLINE &&
			!CI_DEMO &&
			!CI_DASHBOARD &&
			!is_non_ui_request() &&
			$this->ci->config->item('allow_oauth') &&
			!$this->ci->user &&
			function_exists('curl_init') &&
			strtolower($this->ci->config->item('sess_samesite')) !== 'strict'
		);

		// Runtime OAuth Initialization
		$this->ci->hooks->once('init', fn() => $this->initialize());
	}

	// --------------------------------------------------------------------

	/**
	 * Runtime initialization.
	 *
	 * Initializes enabled OAuth providers, registers authentication
	 * flow handlers, and wires dashboard settings integration
	 * when applicable.
	 *
	 * This method is executed once during the `init` hook.
	 *
	 * @internal
	 * @return void
	 */
	private function initialize()
	{
		// Bail early if disabled.
		if (!$this->enabled) {
			return;
		}

		// Only initialize drivers if provider's auth is enabled.
		foreach ($this->valid_drivers as $driver) {
			// Load driver first.
			$this->$driver = $this->load_driver($driver);

			if ($this->ci->config->item("{$driver}_auth") && method_exists($this->$driver, 'initialize')) {
				$this->$driver->initialize($this->enabled);
			}
		}

		// Update enabled status and config item.
		$this->enabled = !empty($this->providers);
		$this->ci->config->set_item('allow_oauth', $this->enabled);

		// Skip the rest if not enabled.
		if (!$this->enabled) {
			return;
		}

		// Register listener to clear session data after user login.
		$this->ci->hooks->once('after_user_login', [$this, 'clear_session']);

		// Register OAuth Authentication Flow Handler
		$this->ci->hooks->once('do_oauth', fn($provider = null) => $this->do_oauth($provider));
	}

	// --------------------------------------------------------------------

	/**
	 * OAuth callback handler.
	 *
	 * Processes the OAuth authentication flow for a provider:
	 * - validates CSRF/state
	 * - exchanges authorization code
	 * - delegates authentication to provider driver
	 * - finalizes user login or registration
	 *
	 * @param  string|null $provider  OAuth provider name.
	 * @return void
	 */
	private function do_oauth($provider = null)
	{
		// OAuth disabled or not provider provided?
		if (empty($provider = sanitize_key($provider ?? ''))) {
			redirect('');
		}

		$this->ci->lang->load('oauth');

		// CSRF protection layer.
		if (!$this->check_state($provider, $this->ci->input->get('state'))) {
			$this->ci->hub->redirect->with($this->message, 'error', false)->to('');
		}

		// Case of Twitter
		if ($provider === 'twitter') {
			$args = [
				$this->ci->input->get('oauth_token', true),
				$this->ci->input->get('oauth_verifier', true)
			];
		}
		// Other providers share the same thing.
		else {
			$args[] = $this->ci->input->get('code', true);
		}

		// No arguments passed?
		if (empty($args = array_list_clean($args))) {
			redirect('');
		}

		// Failed login with provider?
		if (!$this->$provider(...$args)) {
			$this->ci->hub->redirect->with($this->message, 'error', false)->to('login');
		}

		// Successful login with provider
		$this->ci->hub->redirect->with($this->message, 'success', false)->to('');
	}

	// --------------------------------------------------------------------

	/**
	 * Unsets providers session data.
	 *
	 * @return void
	 */
	public function clear_session()
	{
		static $sess_keys = array_map(
			static fn($driver) => '__ci_oauth_'.$driver,
			$this->valid_drivers
		);

		$this->ci->session->unset($sess_keys, true);
	}

	// --------------------------------------------------------------------

	/**
	 * State checker used as a CSRF protection layer.
	 *
	 * @param  string $provider
	 * @param  string $state
	 * @return bool
	 */
	public function check_state($provider, $state)
	{
		// 1. Make sure the provider is valid.
		if (!isset($this->providers[$provider])) {
			$this->message = $this->ci->lang->line('error_unknown');
			return false;
		}
		// 2. The provider didn't really provide a sate? nothing to do...
		elseif (empty($sess_state = $this->ci->session->get('__ci_oauth_'.$provider))) {
			$this->message = ''; // reset message.
			return true;
		}
		// 3. The provided state is missing or wrong?
		elseif (empty($state) || !hash_equals($state, $sess_state)) {
			$this->message = $this->ci->lang->line('error_csrf');
			return false;
		}
		// Everything passed.
		else {
			$this->message = ''; // reset message.
			return true;
		}
	}

	// --------------------------------------------------------------------

	/**
	 * Finalizes OAuth authentication.
	 *
	 * Creates or retrieves the user account associated with
	 * the provider identity and performs a login if permitted.
	 *
	 * Intended to be called exclusively by provider drivers.
	 *
	 * @internal
	 * @param  array  $data      Normalized user profile data.
	 * @param  string $provider  OAuth provider identifier.
	 * @return bool
	 */
	public function _process($data, $provider)
	{
		// Failed to register user?
		if (!($guid = $this->ci->hub->users->create($data))) {
			$this->message = $this->ci->lang->line(['account_create_error', 'try_again_later']);
			return false;
		}

		// Get user from database.
		if (!($user = $this->ci->hub->users->get_by_id($guid))) {
			$this->message = $this->ci->lang->line(['account_create_error', 'try_again_later']);
			return false;
		}

		// User account enabled?
		if ($user->enabled === 1) {
			$status = $this->ci->hub->auth->quick_login($guid, null, $provider);
			$this->message = $this->ci->hub->auth->message;
			return $status;
		}

		$this->message = '';
		return true;
	}

	// --------------------------------------------------------------------

	/**
	 * Provider proxy dispatcher.
	 *
	 * Routes dynamic method calls to provider drivers and
	 * finalizes authentication if successful.
	 *
	 * @param  string $name  Provider name.
	 * @param  array  $args  Provider-specific arguments.
	 * @return bool
	 */
	public function __call($name, $args = [])
	{
		// Service disabled?
		if (!$this->enabled || !in_array($name, $this->valid_drivers)) {
			$this->message = $this->ci->lang->line(['error_unknown', 'try_again_later']);
			return false;
		} elseif (!$this->$name->_process(...$args)) {
			return false;
		} else {
			$this->clear_session();
			return true;
		}
	}

}
