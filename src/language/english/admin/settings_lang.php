<?php

/**
 * OAuth Plugin - Settings Language File (English)
 *
 * @package     CiSkeleton\Plugins
 * @subpackage  OAuth
 * @category    Admin
 * @author      Kader Bouyakoub <bkader[at]mail[dot]com>
 * @copyright   2018-present, Kader Bouyakoub
 * @license     Apache-2.0 — Apache License 2.0
 * @link        https://www.apache.org/licenses/LICENSE-2.0
 *
 * SPDX-License-Identifier: Apache-2.0
 */

// --------------------------------------------------------------------
// Page Titles:
$lang['settings_discord'] = 'Discord Settings';
$lang['settings_github'] = 'GitHub Settings';
$lang['settings_linkedin'] = 'LinkedIn Settings';
$lang['settings_microsoft'] = 'Microsoft Settings';

// --------------------------------------------------------------------
// Extra Users Settings & Common Lines:
$lang['allow_oauth'] = 'Third-party Login';
$lang['allow_oauth_tip'] = 'Allow users to log in with third-party providers.';
$lang['allow_oauth_required'] = 'Requires <a href="./users#allow_oauth">Third-party Login</a> to be enabled.';

// --------------------------------------------------------------------
// Discord:
$lang['discord_auth'] = 'Login with Discord';
$lang['discord_auth_tip'] = ['Allow users to log in with <a href="https://discord.com/developers/applications" target="_blank" rel="noopener noreferrer">Discord</a>.', $lang['allow_oauth_required']];
$lang['discord_client_id'] = 'Client ID';
$lang['discord_client_id_tip'] = 'Enter your Discord application client ID.';
$lang['discord_client_secret'] = 'Client Secret';
$lang['discord_client_secret_tip'] = 'Enter your Discord application secret key.';

// --------------------------------------------------------------------
// Facebook:
$lang['facebook_auth'] = 'Login with Facebook';
$lang['facebook_auth_tip'] = ['Allow users to log in with <a href="https://developers.facebook.com/apps/" target="_blank" rel="noopener noreferrer">Facebook</a>.', $lang['allow_oauth_required']];
$lang['facebook_app_secret'] = 'Client Secret';
$lang['facebook_app_secret_tip'] = 'Enter your Facebook application secret key.';

// --------------------------------------------------------------------
// GitHub:
$lang['github_auth'] = 'Login with GitHub';
$lang['github_auth_tip'] = ['Allow users to log in with <a href="https://github.com/settings/developers" target="_blank" rel="noopener noreferrer">GitHub</a>.', $lang['allow_oauth_required']];
$lang['github_client_id'] = 'Client ID';
$lang['github_client_id_tip'] = 'Enter your GitHub application client ID.';
$lang['github_client_secret'] = 'Client Secret';
$lang['github_client_secret_tip'] = 'Enter your GitHub application secret key.';

// --------------------------------------------------------------------
// Google:
$lang['google_auth'] = 'Login with Google';
$lang['google_auth_tip'] = ['Allow users to log in with <a href="https://console.cloud.google.com/" target="_blank" rel="noopener noreferrer">Google</a>.', $lang['allow_oauth_required']];
$lang['google_client_id'] = 'Client ID';
$lang['google_client_id_tip'] = 'Enter your Google application client ID.';
$lang['google_client_secret'] = 'Client Secret';
$lang['google_client_secret_tip'] = 'Enter your Google application secret key.';

// --------------------------------------------------------------------
// LinkedIn:
$lang['linkedin_auth'] = 'Login with LinkedIn';
$lang['linkedin_auth_tip'] = ['Allow users to log in with <a href="https://www.linkedin.com/developers/apps" target="_blank" rel="noopener noreferrer">LinkedIn</a>.', $lang['allow_oauth_required']];
$lang['linkedin_client_id'] = 'Client ID';
$lang['linkedin_client_id_tip'] = 'Enter your LinkedIn application client ID.';
$lang['linkedin_client_secret'] = 'Client Secret';
$lang['linkedin_client_secret_tip'] = 'Enter your LinkedIn application secret key.';

// --------------------------------------------------------------------
// Microsoft:
$lang['microsoft_auth'] = 'Login with Microsoft';
$lang['microsoft_auth_tip'] = ['Allow users to log in with <a href="https://portal.azure.com/#blade/Microsoft_AAD_RegisteredApps" target="_blank" rel="noopener noreferrer">Microsoft</a>.', $lang['allow_oauth_required']];
$lang['microsoft_client_id'] = 'Client ID';
$lang['microsoft_client_id_tip'] = 'Enter your Microsoft application client ID.';
$lang['microsoft_client_secret'] = 'Client Secret';
$lang['microsoft_client_secret_tip'] = 'Enter your Microsoft application secret key.';
$lang['microsoft_tenant_id'] = 'Tenant ID (optional)';
$lang['microsoft_tenant_id_tip'] = 'Restrict login to a specific Microsoft tenant (Azure AD directory). Leave empty to allow both personal Microsoft accounts and any Azure AD tenant.';
