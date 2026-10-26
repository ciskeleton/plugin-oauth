<?php

/**
 * Discord OAuth
 *
 * Handles Discord login.
 *
 * @package     CiSkeleton\Plugins
 * @subpackage  OAuth\Drivers
 * @category    Discord
 * @author      Kader Bouyakoub <bkader[at]mail[dot]com>
 * @copyright   2018-present, Kader Bouyakoub
 * @license     Apache-2.0 — Apache License 2.0
 * @link        https://www.apache.org/licenses/LICENSE-2.0
 *
 * SPDX-License-Identifier: Apache-2.0
 */

final class CI_Oauth_discord extends CI_Driver
{
	/**
	 * User-Agent used with cURL request.
	 * @var string
	 */
	private const UA = 'CiSkeleton-Discord-OAuth';

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
		if (!(($this->enabled = $enabled) && $this->ci->config->item('discord_auth', null, false))) {
			return;
		}
		// Missing client id?
		elseif (empty($this->client_id = $this->ci->config->item('discord_client_id'))) {
			$this->enabled = false;
			return;
		}
		// Missing or invalid client secret?
		elseif (empty($this->client_secret = decrypt_data($this->ci->config->item('discord_client_secret')))) {
			$this->enabled = false;
			return;
		}

		// Set things we need:
		$this->redirect_uri = $this->ci->url->site('oauth/discord');
		$this->access_token_url = 'https://discord.com/api/oauth2/token';
		$this->user_info_url = 'https://discord.com/api/users/@me';

		// CSRF protection token.
		if (empty($state = $this->ci->session->temp('__ci_oauth_discord'))) {
			$this->ci->session->set_temp('__ci_oauth_discord', $state = bin2hex(random_bytes(8)));
		};

		// Add provider to parent:
		$this->_parent->providers['discord'] = 'https://discord.com/oauth2/authorize?'.http_build_query([
			'client_id' => $this->client_id,
			'redirect_uri' => $this->redirect_uri,
			'response_type' => 'code',
			'scope' => 'identify email',
			'state' => $state,
		]);
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
		$client = curl(['timeout' => 10])
			->set_headers([
				'Content-Type' => 'application/x-www-form-urlencoded',
				'User-Agent' => self::UA,
			], true)
			->post($this->access_token_url, [
				'grant_type' => 'authorization_code',
				'client_id' => $this->client_id,
				'client_secret' => $this->client_secret,
				'code' => $code,
				'redirect_uri' => $this->redirect_uri,
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
	 * Returns the user if found on database.
	 *
	 * @param  array $info
	 * @return mixed User object if found, else false.
	 */
	private function exists($info)
	{
		// Attempt to retrieve the user by Discord ID.
		$meta = $this->ci->db
			->where('name', 'discord_id')
			->where('value', $info['id'])
			->get('metadata')
			->row();

		// Fond? proceed...
		if ($meta) {
			return $this->ci->hub->users->get_by_id($meta->guid);
		}

		// Attempt to get user by email address
		return $this->ci->hub->users->get_by_email($info['email']);
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
		elseif ($user = $this->exists($info)) {
			// Store user id.
			(empty($user->discord_id) || $user->discord_id !== $info['id']) && $user->update('discord_id', $info['id']);
			$status = $this->ci->hub->auth->quick_login($user, $user->language, 'discord');
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
			$full_name = explode(' ', $info['global_name']);

			/**
			 * Let's now collect info we need.
			 * Note: user is enabled if they have a verified provider email.
			 */
			$data = [
				'username' => $info['username'],
				'enabled' => $info['verified'] ? 1 : 0,
				'email' => $info['email'],
				'last_name' => array_pop($full_name),
				'first_name' => implode(' ', $full_name),
			];

			// Set user language if defined.
			foreach ($this->ci->lang->active(true) as $folder => $details) {
				if ($details['locale'] === $info['locale'] || $details['code'] === $info['locale']) {
					$data['language'] = $folder;
					break;
				}
			}

			// Let the parent handle the rest.
			return $this->_parent->_process($data, 'discord');
		}
	}

}
