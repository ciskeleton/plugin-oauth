<?php

/**
 * OAuth Plugin - Settings Language File (Czech)
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
$lang['settings_discord'] = 'Nastavení Discordu';
$lang['settings_github'] = 'Nastavení GitHubu';
$lang['settings_linkedin'] = 'Nastavení LinkedInu';
$lang['settings_microsoft'] = 'Nastavení Microsoft';

// --------------------------------------------------------------------
// Extra Users Settings & Common Lines:
$lang['allow_oauth'] = 'Přihlášení přes třetí strany';
$lang['allow_oauth_tip'] = 'Umožněte uživatelům přihlášení přes služeb třetích stran.';
$lang['allow_oauth_required'] = 'Je nutné povolit <a href="./users#allow_oauth">Přihlášení přes třetí strany</a>.';

// --------------------------------------------------------------------
// Discord:
$lang['discord_auth'] = 'Přihlášení přes Discord';
$lang['discord_auth_tip'] = ['Umožněte uživatelům přihlášení přes <a href="https://discord.com/developers/applications" target="_blank" rel="noopener noreferrer">Discordu</a>.', $lang['allow_oauth_required']];
$lang['discord_client_id'] = 'ID klienta';
$lang['discord_client_id_tip'] = 'Zadejte ID klienta vaší Discord aplikace.';
$lang['discord_client_secret'] = 'Tajný klíč klienta';
$lang['discord_client_secret_tip'] = 'Zadejte tajný klíč klienta vaší Discord aplikace.';

// --------------------------------------------------------------------
// Facebook:
$lang['facebook_auth'] = 'Přihlášení přes Facebook';
$lang['facebook_auth_tip'] = ['Umožněte uživatelům přihlášení přes <a href="https://developers.facebook.com/apps/" target="_blank" rel="noopener noreferrer">Facebooku</a>.', $lang['allow_oauth_required']];
$lang['facebook_app_secret'] = 'Tajný klíč klienta';
$lang['facebook_app_secret_tip'] = 'Zadejte tajný klíč klienta vaší Facebook aplikace.';

// --------------------------------------------------------------------
// GitHub:
$lang['github_auth'] = 'Přihlášení přes GitHub';
$lang['github_auth_tip'] = ['Umožněte uživatelům přihlášení přes <a href="https://github.com/settings/developers" target="_blank" rel="noopener noreferrer">GitHubu</a>.', $lang['allow_oauth_required']];
$lang['github_client_id'] = 'ID klienta';
$lang['github_client_id_tip'] = 'Zadejte ID klienta vaší GitHub aplikace.';
$lang['github_client_secret'] = 'Tajný klíč klienta';
$lang['github_client_secret_tip'] = 'Zadejte tajný klíč klienta vaší GitHub aplikace.';

// --------------------------------------------------------------------
// Google:
$lang['google_auth'] = 'Přihlášení přes Google';
$lang['google_auth_tip'] = ['Umožněte uživatelům přihlášení přes <a href="https://console.cloud.google.com/" target="_blank" rel="noopener noreferrer">Google</a>.', $lang['allow_oauth_required']];
$lang['google_client_id'] = 'ID klienta';
$lang['google_client_id_tip'] = 'Zadejte ID klienta vaší Google aplikace.';
$lang['google_client_secret'] = 'Tajný klíč klienta';
$lang['google_client_secret_tip'] = 'Zadejte tajný klíč klienta vaší Google aplikace.';

// --------------------------------------------------------------------
// LinkedIn:
$lang['linkedin_auth'] = 'Přihlášení přes LinkedIn';
$lang['linkedin_auth_tip'] = ['Umožněte uživatelům přihlášení přes <a href="https://www.linkedin.com/developers/apps" target="_blank" rel="noopener noreferrer">LinkedIn</a>.', $lang['allow_oauth_required']];
$lang['linkedin_client_id'] = 'ID klienta';
$lang['linkedin_client_id_tip'] = 'Zadejte ID klienta vaší LinkedIn aplikace.';
$lang['linkedin_client_secret'] = 'Tajný klíč klienta';
$lang['linkedin_client_secret_tip'] = 'Zadejte tajný klíč klienta vaší LinkedIn aplikace.';

// --------------------------------------------------------------------
// Microsoft:
$lang['microsoft_auth'] = 'Přihlášení přes Microsoft';
$lang['microsoft_auth_tip'] = ['Umožněte uživatelům přihlášení přes <a href="https://portal.azure.com/#blade/Microsoft_AAD_RegisteredApps" target="_blank" rel="noopener noreferrer">Microsoft</a>.', $lang['allow_oauth_required']];
$lang['microsoft_client_id'] = 'ID klienta';
$lang['microsoft_client_id_tip'] = 'Zadejte ID klienta vaší Microsoft aplikace.';
$lang['microsoft_client_secret'] = 'Tajný klíč klienta';
$lang['microsoft_client_secret_tip'] = 'Zadejte tajný klíč vaší Microsoft aplikace.';
$lang['microsoft_tenant_id'] = 'ID tenanta (volitelné)';
$lang['microsoft_tenant_id_tip'] = 'Omezí přihlášení na konkrétní Microsoft tenant (adresář Azure AD). Ponechte prázdné pro povolení osobních Microsoft účtů a všech tenantů Azure AD.';
