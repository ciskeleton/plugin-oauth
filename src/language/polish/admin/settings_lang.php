<?php

/**
 * OAuth Plugin - Settings Language File (Polish)
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
$lang['settings_discord'] = 'Ustawienia Discord';
$lang['settings_github'] = 'Ustawienia Github';
$lang['settings_linkedin'] = 'Ustawienia LinkedIn';
$lang['settings_microsoft'] = 'Ustawienia Microsoft';

// --------------------------------------------------------------------
// Extra Users Settings & Common Lines:
$lang['allow_oauth'] = 'Logowanie przez stronę trzecia';
$lang['allow_oauth_tip'] = 'Zezwól użytkownikom na logowanie się za pomocą dostawców zewnętrznych.';
$lang['allow_oauth_required'] = 'Wymaga włączenia <a href="./users#allow_oauth">Logowanie przez stronę trzecia</a>.';

// --------------------------------------------------------------------
// Discord:
$lang['discord_auth'] = 'Zaloguj się za pomocą Discorda';
$lang['discord_auth_tip'] = ['Zezwól użytkownikom na logowanie za pomocą <a href="https://discord.com/developers/applications" target="_blank" rel="noopener noreferrer">Discorda</a>.', $lang['allow_oauth_required']];
$lang['discord_client_id'] = 'ID klienta';
$lang['discord_client_id_tip'] = 'Wprowadź ID klienta aplikacji Discord.';
$lang['discord_client_secret'] = 'Sekret klienta';
$lang['discord_client_secret_tip'] = 'Wprowadź tajny klucz aplikacji Discord.';

// --------------------------------------------------------------------
// Facebook:
$lang['facebook_auth'] = 'Zaloguj się przez Facebook';
$lang['facebook_auth_tip'] = ['Pozwól użytkownikom logować się przez <a href="https://developers.facebook.com/apps/" target="_blank" rel="noopener noreferrer">Facebook</a>.', $lang['allow_oauth_required']];
$lang['facebook_app_secret'] = 'Sekret klienta';
$lang['facebook_app_secret_tip'] = 'Wprowadź tajny klucz aplikacji Facebook.';

// --------------------------------------------------------------------
// GitHub:
$lang['github_auth'] = 'Zaloguj się przez GitHub';
$lang['github_auth_tip'] = ['Pozwól użytkownikom logować się przez <a href="https://github.com/settings/developers" target="_blank" rel="noopener noreferrer">GitHub</a>.', $lang['allow_oauth_required']];
$lang['github_client_id'] = 'ID klienta';
$lang['github_client_id_tip'] = 'Wprowadź ID klienta aplikacji GitHub.';
$lang['github_client_secret'] = 'Sekret klienta';
$lang['github_client_secret_tip'] = 'Wprowadź tajny klucz aplikacji GitHub.';

// --------------------------------------------------------------------
// Google:
$lang['google_auth'] = 'Zaloguj się przez Google';
$lang['google_auth_tip'] = ['Pozwól użytkownikom logować się przez <a href="https://console.cloud.google.com/" target="_blank" rel="noopener noreferrer">Google</a>.', $lang['allow_oauth_required']];
$lang['google_client_id'] = 'ID klienta';
$lang['google_client_id_tip'] = 'Wprowadź ID klienta aplikacji Google.';
$lang['google_client_secret'] = 'Sekret klienta';
$lang['google_client_secret_tip'] = 'Wprowadź tajny klucz aplikacji Google.';

// --------------------------------------------------------------------
// LinkedIn:
$lang['linkedin_auth'] = 'Zaloguj się przez LinkedIn';
$lang['linkedin_auth_tip'] = ['Pozwól użytkownikom logować się przez <a href="https://www.linkedin.com/developers/apps" target="_blank" rel="noopener noreferrer">LinkedIn</a>.', $lang['allow_oauth_required']];
$lang['linkedin_client_id'] = 'ID klienta';
$lang['linkedin_client_id_tip'] = 'Wprowadź ID klienta aplikacji LinkedIn.';
$lang['linkedin_client_secret'] = 'Sekret klienta';
$lang['linkedin_client_secret_tip'] = 'Wprowadź tajny klucz aplikacji LinkedIn.';

// --------------------------------------------------------------------
// Microsoft:
$lang['microsoft_auth'] = 'Zaloguj się przez Microsoft';
$lang['microsoft_auth_tip'] = ['Pozwól użytkownikom logować się przez <a href="https://portal.azure.com/#blade/Microsoft_AAD_RegisteredApps" target="_blank" rel="noopener noreferrer">Microsoft</a>.', $lang['allow_oauth_required']];
$lang['microsoft_client_id'] = 'ID klienta';
$lang['microsoft_client_id_tip'] = 'Wprowadź ID klienta aplikacji Microsoft.';
$lang['microsoft_client_secret'] = 'Klucz tajny klienta';
$lang['microsoft_client_secret_tip'] = 'Wprowadź tajny klucz aplikacji Microsoft.';
$lang['microsoft_tenant_id'] = 'Identyfikator dzierżawy (opcjonalny)';
$lang['microsoft_tenant_id_tip'] = 'Ogranicza logowanie do określonego tenant-a Microsoft (katalog Azure AD). Pozostaw puste, aby zezwolić na konta osobiste Microsoft i wszystkie tenanty Azure AD.';
