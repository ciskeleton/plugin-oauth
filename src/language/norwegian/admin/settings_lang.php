<?php

/**
 * OAuth Plugin - Settings Language File (Norwegian)
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
$lang['settings_discord'] = 'Discord-innstillinger';
$lang['settings_github'] = 'GitHub-innstillinger';
$lang['settings_linkedin'] = 'LinkedIn-innstillinger';
$lang['settings_microsoft'] = 'Microsoft-innstillinger';

// --------------------------------------------------------------------
// Extra Users Settings & Common Lines:
$lang['allow_oauth'] = 'Tredjepartsinnlogging';
$lang['allow_oauth_tip'] = 'Tillat brukere å logge inn med tredjepartsleverandører.';
$lang['allow_oauth_required'] = 'Krever at <a href="./users#allow_oauth">Tredjepartsinnlogging</a> er aktivert.';

// --------------------------------------------------------------------
// Discord:
$lang['discord_auth'] = 'Logg inn med Discord';
$lang['discord_auth_tip'] = ['Tillat brukere å logge inn med <a href="https://discord.com/developers/applications" target="_blank" rel="noopener noreferrer">Discord</a>.', $lang['allow_oauth_required']];
$lang['discord_client_id'] = 'Klient-ID';
$lang['discord_client_id_tip'] = 'Skriv inn din Discord-applikasjons klient-ID.';
$lang['discord_client_secret'] = 'Klient-hemmelighet';
$lang['discord_client_secret_tip'] = 'Skriv inn din Discord-applikasjons hemmelige nøkkel.';

// --------------------------------------------------------------------
// Facebook:
$lang['facebook_auth'] = 'Logg inn med Facebook';
$lang['facebook_auth_tip'] = ['Tillat brukere å logge inn med <a href="https://developers.facebook.com/apps/" target="_blank" rel="noopener noreferrer">Facebook</a>.', $lang['allow_oauth_required']];
$lang['facebook_app_secret'] = 'Klient-hemmelighet';
$lang['facebook_app_secret_tip'] = 'Skriv inn din Facebook-applikasjons hemmelige nøkkel.';

// --------------------------------------------------------------------
// GitHub:
$lang['github_auth'] = 'Logg inn med GitHub';
$lang['github_auth_tip'] = ['Tillat brukere å logge inn med <a href="https://github.com/settings/developers" target="_blank" rel="noopener noreferrer">GitHub</a>.', $lang['allow_oauth_required']];
$lang['github_client_id'] = 'Klient-ID';
$lang['github_client_id_tip'] = 'Skriv inn din GitHub-applikasjons klient-ID.';
$lang['github_client_secret'] = 'Klient-hemmelighet';
$lang['github_client_secret_tip'] = 'Skriv inn din GitHub-applikasjons hemmelige nøkkel.';

// --------------------------------------------------------------------
// Google:
$lang['google_auth'] = 'Logg inn med Google';
$lang['google_auth_tip'] = ['Tillat brukere å logge inn med <a href="https://console.cloud.google.com/" target="_blank" rel="noopener noreferrer">Google</a>.', $lang['allow_oauth_required']];
$lang['google_client_id'] = 'Klient-ID';
$lang['google_client_id_tip'] = 'Skriv inn din Google-applikasjons klient-ID.';
$lang['google_client_secret'] = 'Klient-hemmelighet';
$lang['google_client_secret_tip'] = 'Skriv inn din Google-applikasjons hemmelige nøkkel.';

// --------------------------------------------------------------------
// LinkedIn:
$lang['linkedin_auth'] = 'Logg inn med LinkedIn';
$lang['linkedin_auth_tip'] = ['Tillat brukere å logge inn med <a href="https://www.linkedin.com/developers/apps" target="_blank" rel="noopener noreferrer">LinkedIn</a>.', $lang['allow_oauth_required']];
$lang['linkedin_client_id'] = 'Klient-ID';
$lang['linkedin_client_id_tip'] = 'Skriv inn din LinkedIn-applikasjons klient-ID.';
$lang['linkedin_client_secret'] = 'Klient-hemmelighet';
$lang['linkedin_client_secret_tip'] = 'Skriv inn din LinkedIn-applikasjons hemmelige nøkkel.';

// --------------------------------------------------------------------
// Microsoft:
$lang['microsoft_auth'] = 'Logg inn med Microsoft';
$lang['microsoft_auth_tip'] = ['Tillat brukere å logge inn med <a href="https://portal.azure.com/#blade/Microsoft_AAD_RegisteredApps" target="_blank" rel="noopener noreferrer">Microsoft</a>.', $lang['allow_oauth_required']];
$lang['microsoft_client_id'] = 'Klient-ID';
$lang['microsoft_client_id_tip'] = 'Skriv inn din Microsoft applikasjons klient-ID.';
$lang['microsoft_client_secret'] = 'Klient-hemmelighet';
$lang['microsoft_client_secret_tip'] = 'Skriv inn din Microsoft applikasjons hemmelige nøkkel.';
$lang['microsoft_tenant_id'] = 'Tenant-ID (valgfritt)';
$lang['microsoft_tenant_id_tip'] = 'Begrenser pålogging til en bestemt Microsoft-tenant (Azure AD-katalog). La stå tomt for å tillate personlige Microsoft-kontoer og alle Azure AD-tenants.';
