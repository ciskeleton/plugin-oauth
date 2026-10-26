<?php

/**
 * Microsoft OAuth
 *
 * Handles Microsoft login.
 *
 * @package     CiSkeleton\Plugins
 * @subpackage  OAuth\Drivers
 * @category    Microsoft
 * @author      Kader Bouyakoub <bkader[at]mail[dot]com>
 * @copyright   2018-present, Kader Bouyakoub
 * @license     Apache-2.0 — Apache License 2.0
 * @link        https://www.apache.org/licenses/LICENSE-2.0
 *
 * SPDX-License-Identifier: Apache-2.0
 */

final class CI_Oauth_microsoft extends CI_Driver
{
	/**
	 * User-Agent used with cURL request.
	 * @var string
	 */
	private const UA = 'CiSkeleton-Microsoft-OAuth';

	/**
	 * Provider OAuth client_id.
	 * @var string
	 */
	private $client_id;

	/**
	 * Provider OAuth client_secret.
	 * @var string
	 */
	private $client_secret;

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
		if (!(($this->enabled = $enabled) && $this->ci->config->item('microsoft_auth', null, false))) {
			return;
		}
		// Missing client id?
		elseif (empty($this->client_id = $this->ci->config->item('microsoft_client_id'))) {
			$this->enabled = false;
			return;
		}
		// Missing or invalid client secret?
		elseif (empty($this->client_secret = decrypt_data($this->ci->config->item('microsoft_client_secret')))) {
			$this->enabled = false;
			return;
		}

		// Optional Microsoft Tenant ID.
		$tenant = trim($this->ci->config->item('microsoft_tenant_id') ?: 'common');

		// Set things we need:
		$this->redirect_uri = $this->ci->url->site('oauth/microsoft');
		$this->access_token_url = "https://login.microsoftonline.com/{$tenant}/oauth2/v2.0/token";
		$this->user_info_url = 'https://graph.microsoft.com/v1.0/me';

		// CSRF protection token.
		if (empty($state = $this->ci->session->temp('__ci_oauth_microsoft'))) {
			$this->ci->session->set_temp('__ci_oauth_microsoft', $state = bin2hex(random_bytes(8)));
		};

		// Add provider to parent:
		$this->_parent->providers['microsoft'] =
			'https://login.microsoftonline.com/'
			.$tenant
			.'/oauth2/v2.0/authorize?'
			.http_build_query([
				'response_type' => 'code',
				'client_id' => $this->client_id,
				'redirect_uri' => $this->redirect_uri,
				'scope' => 'openid email profile User.Read',
				'state' => $state,
				'response_mode' => 'query',
			]);
	}

	// --------------------------------------------------------------------

	/**
	 * Exchanges Providers code for access token.
	 *
	 * @param  string  $code
	 * @return mixed   Access token if successful, otherwise null.
	 */
	private function get_access_token($code)
	{
		$client = curl(['timeout' => 10])
			->set_headers([
				'Content-Type' => 'application/x-www-form-urlencoded',
				'User-Agent' => self::UA,
			], true)
			->post($this->access_token_url, [
				'grant_type' => 'authorization_code',
				'code' => $code,
				'client_id' => $this->client_id,
				'client_secret' => $this->client_secret,
				'redirect_uri' => $this->redirect_uri,
				'scope' => 'openid email profile User.Read',
			]);

		if (!$client->is_success()) {
			return null;
		}

		$response = json_decode($client->get_response(), true);
		return $response['access_token'] ?? null;
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
		$client = curl(['timeout' => 10])
			->set_headers([
				'Authorization' => 'Bearer '.$access_token,
				'User-Agent' => self::UA,
			], true)
			->get($this->user_info_url);

		if (!$client->is_success()) {
			return null;
		}

		return json_decode($client->get_response(), true) ?: null;
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

		// Extract email from Microsoft response
		$email = strtolower($info['mail'] ?? $info['userPrincipalName'] ?? $info['preferredUsername'] ?? '');
		
		if (empty($email)) {
			$this->_parent->message = $this->ci->lang->line('oauth_error_info');
			return false;
		}

		// Existing user? Login...
		elseif ($user = $this->ci->hub->users->get_by_email($email)) {
			$status = $this->ci->hub->auth->quick_login($user, $user->language, 'microsoft');
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
			/**
			 * Let's now collect info we need.
			 * Note: user is enabled if they have a verified provider email.
			 */
			$data = [
				'username' => sanitize_username(explode('@', $email)[0], true),
				'enabled' => 1, // Microsoft accounts are verified by default
				'email' => $email,
				'first_name' => $info['givenName'] ?? '',
				'last_name' => $info['surname'] ?? ''
			];

			// Let the parent handle the rest.
			return $this->_parent->_process($data, 'microsoft');
		}
	}

}
