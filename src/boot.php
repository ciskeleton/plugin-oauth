<?php

/**
 * OAuth Plugin Bootstrap
 *
 * Declares OAuth providers, registers autoload mappings,
 * and wires plugin lifecycle hooks (boot, activate, deactivate).
 *
 * Runtime behavior, authentication flow, and provider logic
 * are handled entirely by the `CI_Oauth` driver.
 *
 * @package     CiSkeleton\Plugins
 * @subpackage  OAuth
 * @category    Bootstrap
 * @author      Kader Bouyakoub <bkader[at]mail[dot]com>
 * @copyright   2018-present, Kader Bouyakoub
 * @license     Apache-2.0 — Apache License 2.0
 * @link        https://www.apache.org/licenses/LICENSE-2.0
 *
 * SPDX-License-Identifier: Apache-2.0
 */

// Single source of true providers.
const OAUTH_PROVIDERS = [
	'discord',
	'facebook',
	'github',
	'google',
	'linkedin',
	'microsoft',
];

/**
 * Register Classes
 *
 * Used out of any hook so that 'Autoloader' throws exception for
 * missing class files (only throws if 'CI_DEBUG' is set to true)
 */
(static function () {
	Autoloader::add_class('CI_Oauth', __DIR__.'/libraries/Oauth/Oauth.php');
	foreach (OAUTH_PROVIDERS as $provider) {
		Autoloader::add_class(
			"CI_Oauth_{$provider}",
			__DIR__."/libraries/Oauth/drivers/Oauth_{$provider}.php"
		);
	}
})();

// --------------------------------------------------------------------
// Plugin Boot, Activate, and Deactivate Hooks
// --------------------------------------------------------------------

/**
 * Plugin Boot Hook
 *
 * Registers provider plugin lifecycle hooks, dashboard settings integration,
 * and runtime initialization via hooks.
 */
once_action('plugin_boot_oauth', static function () {
	// Ensure OAuth driver accepts no configuration.
	once_filter('no_config_libs', static fn($libs) => ['oauth', ...$libs]);

	/**
	 * OAuth callback routes.
	 *
	 * Registers routes for each enabled OAuth provider. Triggered via
	 * the 'pre_routes' hook, ensuring routes are declared after all
	 * route files are loaded but before mapping.
	 */
	once_action('pre_routes', static function () {
		$providers = implode('|', OAUTH_PROVIDERS);
		Route::get("oauth/({$providers})", 'auth/index/$1');
	});

	/**
	 * Plugin Activate Hook
	 *
	 * Inserts options required for this plugin to work.
	 */
	once_action('plugin_activate_oauth', static function ($ci) {
		$ci->config->persist([
			// Allow OAuth
			'allow_oauth' => false,

			// Discord:
			'discord_auth' => false,
			'discord_client_id' => null,
			'discord_client_secret' => null,

			// Facebook:
			'facebook_auth' => false,
			'facebook_app_secret' => null,

			// GitHub:
			'github_auth' => false,
			'github_client_id' => null,
			'github_client_secret' => null,

			// Google:
			'google_auth' => false,
			'google_client_id' => null,
			'google_client_secret' => null,

			// LinkedIn:
			'linkedin_auth' => false,
			'linkedin_client_id' => null,
			'linkedin_client_secret' => null,

			// Microsoft:
			'microsoft_auth' => false,
			'microsoft_client_id' => null,
			'microsoft_client_secret' => null,
			'microsoft_tenant_id' => null,
		]);
	});

	/**
	 * Plugin Deactivate Hook
	 *
	 * Removes plugin's settings from options table.
	 */
	once_action('plugin_deactivate_oauth', static function ($ci) {
		$ci->config->delete([
			// Allow OAuth
			'allow_oauth',

			// Discord.
			'discord_auth',
			'discord_client_id',
			'discord_client_secret',

			// Facebook
			'facebook_auth',
			'facebook_app_secret',

			// GitHub
			'github_auth',
			'github_client_id',
			'github_client_secret',

			// Google
			'google_auth',
			'google_client_id',
			'google_client_secret',

			// LinkedIn
			'linkedin_auth',
			'linkedin_client_id',
			'linkedin_client_secret',

			// Microsoft
			'microsoft_auth',
			'microsoft_client_id',
			'microsoft_client_secret',
			'microsoft_tenant_id',
		]);
	});
});
