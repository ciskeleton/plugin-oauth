<?php

/**
 * Facebook OAuth
 *
 * Handles Facebook login.
 *
 * @package     CiSkeleton\Plugins
 * @subpackage  OAuth\Drivers
 * @category    Facebook
 * @author      Kader Bouyakoub <bkader[at]mail[dot]com>
 * @copyright   2018-present, Kader Bouyakoub
 * @license     Apache-2.0 — Apache License 2.0
 * @link        https://www.apache.org/licenses/LICENSE-2.0
 *
 * SPDX-License-Identifier: Apache-2.0
 */

final class CI_Oauth_facebook extends CI_Driver
{
	/**
	 * Provider OAuth app_id.
	 * @var string
	 */
	private $app_id;

	/**
	 * Provider OAuth app_secret.
	 * @var string
	 */
	private $app_secret;

	/**
	 * Provider OAuth redirect_uri.
	 * @var string
	 */
	private $redirect_uri;

	/**
	 * Provider OAuth access token endpoint.
	 * @var string
	 */
	private $access_token_url;

	/**
	 * Provider OAuth user info endpoint.
	 * @var string
	 */
	private $user_info_url;

	/**
	 * Flag to set this provider as enabled.
	 * @var bool
	 */
	public $enabled = false;

	/**
	 * Facebook SDK thing.
	 * @var string
	 */
	private $facebook_sdk = <<<JS
window.fbAsyncInit=function(){FB.init({appId:"%s",cookie:!0,xfbml:!0}),FB.AppEvents.logPageView()},function(e,t,n){var o,s=e.getElementsByTagName(t)[0];!e.getElementById(n)&&((o=e.createElement(t)).id=n,o.src="https://connect.facebook.net/en_US/sdk.js",s.parentNode.insertBefore(o,s))}(document,"script","facebook-jssdk");
JS;

	// --------------------------------------------------------------------

	/**
	 * Initialize class preferences.
	 *
	 * @param  bool $enabled
	 * @return void
	 */
	public function initialize($enabled)
	{
		// Provider globally or individually disabled?
		if (!(($this->enabled = $enabled) && $this->ci->config->item('facebook_auth', null, false))) {
			return;
		}
		// Missing client id?
		elseif (empty($this->app_id = $this->ci->config->item('facebook_app_id'))) {
			$this->enabled = false;
			return;
		}
		// Missing or invalid app secret?
		elseif (empty($this->app_secret = decrypt_data($this->ci->config->item('facebook_app_secret')))) {
			$this->enabled = false;
			return;
		}

		// Set things we need:
		$this->redirect_uri = $this->ci->url->site('oauth/facebook');
		$this->access_token_url = 'https://graph.facebook.com/v10.0/oauth/access_token';
		$this->user_info_url = 'https://graph.facebook.com/me?access_token=%s&fields=id,name,email';

		// CSRF protection token.
		if (empty($state = $this->ci->session->temp('__ci_oauth_facebook'))) {
			$this->ci->session->set_temp('__ci_oauth_facebook', $state = bin2hex(random_bytes(8)));
		};

		// Add provider to parent:
		$query = [
			'client_id' => $this->app_id,
			'redirect_uri' => $this->redirect_uri,
			'scope' => 'email,public_profile',
			'state' => $state
		];

		// Facebook app prompt.
		!is_mobile() || $query['display'] = 'touch';

		$this->_parent->providers['facebook'] = 'https://www.facebook.com/v10.0/dialog/oauth?'.http_build_query($query);

		// Add Facebook SDK Javascript
		CI_ADMIN || $this->ci->hub->assets->inline_js(sprintf($this->facebook_sdk, $this->app_id, 'facebook'));
	}

	// --------------------------------------------------------------------

	/**
	 * Exchanges Providers code for access token.
	 *
	 * @param  string $code
	 * @return string|null  Access token if successful, otherwise null.
	 */
	private function get_access_token($code)
	{
		$url = $this->access_token_url.'?'.http_build_query([
			'code' => $code,
			'client_id' => $this->app_id,
			'client_secret' => $this->app_secret,
			'redirect_uri' => $this->redirect_uri
		]);

		if ($content = @file_get_contents($url)) {
			$response = json_decode($content, true);

			return isset($response['access_token']) ? $response['access_token'] : null;
		}

		return null;
	}

	// --------------------------------------------------------------------

	/**
	 * Exchanges access token for user info.
	 *
	 * @param  string $access_token
	 * @return array  Array of user info
	 */
	private function get_user_info($access_token)
	{
		return json_decode(file_get_contents(sprintf($this->user_info_url, $access_token)), true);
	}

	// --------------------------------------------------------------------

	/**
	 * Process to user authentication.
	 *
	 * @param  string $code
	 * @return bool
	 */
	public function _process($code)
	{
		// Disabled?
		if (!$this->enabled) {
			return false;
		}
		// No authorization code received?
		elseif (empty($code)) {
			$this->_parent->message = $this->ci->lang->line('oauth_error_code');
			return false;
		}
		// No access code received?
		elseif (empty($access_token = $this->get_access_token($code))) {
			$this->_parent->message = $this->ci->lang->line('oauth_error_token');
			return false;
		}
		// No user info received?
		elseif (empty($info = $this->get_user_info($access_token))) {
			$this->_parent->message = $this->ci->lang->line('oauth_error_info');
			return false;
		}
		// Existing user? Login...
		elseif ($user = $this->ci->hub->users->get_by_email($info['email'])) {
			$status = $this->ci->hub->auth->quick_login($user, $user->language, 'facebook');
			$this->_parent->message = $this->ci->hub->auth->message;
			return $status;
		}
		// Registrations disabled?
		elseif (!$this->ci->config->item('allow_registration')) {
			$this->_parent->message = $this->ci->lang->line(['error_register_off', 'try_again_later']);
			return false;
		}
		// Process to account creation/login.
		else {
			$full_name = explode(' ', $info['name']);

			/**
			 * Let's now collect info we need.
			 * Note: user is enabled if they have a verified provider email.
			 */
			$data = [
				'username' => substr($info['email'], 0, strrpos($info['email'], '@')),
				'enabled' => $this->config->item('email_activation') ? 0 : 1,
				'email' => $info['email'],
				'last_name' => array_pop($full_name),
				'first_name' => implode(' ', $full_name)
			];

			// Let the parent handle the rest.
			return $this->_parent->_process($data, 'facebook');
		}
	}

}
