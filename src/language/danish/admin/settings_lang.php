<?php

/**
 * OAuth Plugin - Settings Language File (Danish)
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
$lang['settings_discord'] = 'Discord-indstillinger';
$lang['settings_github'] = 'GitHub-indstillinger';
$lang['settings_linkedin'] = 'LinkedIn-indstillinger';
$lang['settings_microsoft'] = 'Microsoft-indstillinger';

// --------------------------------------------------------------------
// Extra Users Settings & Common Lines:
$lang['allow_oauth'] = 'Tredjepartslogin';
$lang['allow_oauth_tip'] = 'Tillad brugere at logge ind med tredjepartsudbydere.';
$lang['allow_oauth_required'] = 'Kræver at <a href="./users#allow_oauth">Tredjepartslogin</a> er aktiveret.';

// --------------------------------------------------------------------
// Discord:
$lang['discord_auth'] = 'Log ind med Discord';
$lang['discord_auth_tip'] = ['Tillad brugere at logge ind med <a href="https://discord.com/developers/applications" target="_blank" rel="noopener noreferrer">Discord</a>.', $lang['allow_oauth_required']];
$lang['discord_client_id'] = 'Klient-ID';
$lang['discord_client_id_tip'] = 'Indtast dit Discord applikation klient-ID.';
$lang['discord_client_secret'] = 'Klient Hemmelighed';
$lang['discord_client_secret_tip'] = 'Indtast din Discord applikation hemmelige nøgle.';

// --------------------------------------------------------------------
// Facebook:
$lang['facebook_auth'] = 'Log ind med Facebook';
$lang['facebook_auth_tip'] = ['Tillad brugere at logge ind med <a href="https://developers.facebook.com/apps/" target="_blank" rel="noopener noreferrer">Facebook</a>.', $lang['allow_oauth_required']];
$lang['facebook_app_secret'] = 'Klient Hemmelighed';
$lang['facebook_app_secret_tip'] = 'Indtast din Facebook applikation hemmelige nøgle.';

// --------------------------------------------------------------------
// GitHub:
$lang['github_auth'] = 'Log ind med GitHub';
$lang['github_auth_tip'] = ['Tillad brugere at logge ind med <a href="https://github.com/settings/developers" target="_blank" rel="noopener noreferrer">GitHub</a>.', $lang['allow_oauth_required']];
$lang['github_client_id'] = 'Klient-ID';
$lang['github_client_id_tip'] = 'Indtast dit GitHub applikation klient-ID.';
$lang['github_client_secret'] = 'Klient Hemmelighed';
$lang['github_client_secret_tip'] = 'Indtast din GitHub applikation hemmelige nøgle.';

// --------------------------------------------------------------------
// Google:
$lang['google_auth'] = 'Log ind med Google';
$lang['google_auth_tip'] = ['Tillad brugere at logge ind med <a href="https://console.cloud.google.com/" target="_blank" rel="noopener noreferrer">Google</a>.', $lang['allow_oauth_required']];
$lang['google_client_id'] = 'Klient-ID';
$lang['google_client_id_tip'] = 'Indtast dit Google applikation klient-ID.';
$lang['google_client_secret'] = 'Klient Hemmelighed';
$lang['google_client_secret_tip'] = 'Indtast din Google applikation hemmelige nøgle.';

// --------------------------------------------------------------------
// LinkedIn:
$lang['linkedin_auth'] = 'Log ind med LinkedIn';
$lang['linkedin_auth_tip'] = ['Tillad brugere at logge ind med <a href="https://www.linkedin.com/developers/apps" target="_blank" rel="noopener noreferrer">LinkedIn</a>.', $lang['allow_oauth_required']];
$lang['linkedin_client_id'] = 'Klient-ID';
$lang['linkedin_client_id_tip'] = 'Indtast dit LinkedIn applikation klient-ID.';
$lang['linkedin_client_secret'] = 'Klient Hemmelighed';
$lang['linkedin_client_secret_tip'] = 'Indtast din LinkedIn applikation hemmelige nøgle.';

// --------------------------------------------------------------------
// Microsoft:
$lang['microsoft_auth'] = 'Log ind med Microsoft';
$lang['microsoft_auth_tip'] = ['Tillad brugere at logge ind med <a href="https://portal.azure.com/#blade/Microsoft_AAD_RegisteredApps" target="_blank" rel="noopener noreferrer">Microsoft</a>.', $lang['allow_oauth_required']];
$lang['microsoft_client_id'] = 'Klient-ID';
$lang['microsoft_client_id_tip'] = 'Indtast dit Microsoft applikation klient-ID.';
$lang['microsoft_client_secret'] = 'Klient-hemmelighed';
$lang['microsoft_client_secret_tip'] = 'Indtast din Microsoft applikation hemmelige nøgle.';
$lang['microsoft_tenant_id'] = 'Tenant-id (valgfrit)';
$lang['microsoft_tenant_id_tip'] = 'Begrænser login til en specifik Microsoft-tenant (Azure AD-mappe). Lad feltet være tomt for at tillade personlige Microsoft-konti og alle Azure AD-tenants.';
