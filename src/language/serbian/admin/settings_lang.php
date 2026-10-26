<?php

/**
 * OAuth Plugin - Settings Language File (Serbian - Latin)
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
$lang['settings_discord'] = 'Podešavanja Discord';
$lang['settings_github'] = 'Podešavanja GitHub';
$lang['settings_linkedin'] = 'Podešavanja LinkedIn';
$lang['settings_microsoft'] = 'Microsoft podešavanja';

// --------------------------------------------------------------------
// Extra Users Settings & Common Lines:
$lang['allow_oauth'] = 'Prijava preko treća lica';
$lang['allow_oauth_tip'] = 'Dozvolite korisnicima da se prijave sa pružaoca usluga.';
$lang['allow_oauth_required'] = 'Zahteva se da bude omogućena <a href="./users#allow_oauth">Prijava preko treća lica</a>.';

// --------------------------------------------------------------------
// Discord:
$lang['discord_auth'] = 'Prijava preko Discord';
$lang['discord_auth_tip'] = ['Dozvoljava korisnicima da se prijave preko <a href="https://discord.com/developers/applications" target="_blank" rel="noopener noreferrer">Discord</a>.', $lang['allow_oauth_required']];
$lang['discord_client_id'] = 'ID Klijenta';
$lang['discord_client_id_tip'] = 'Unesite ID klijenta vaše Discord aplikacije.';
$lang['discord_client_secret'] = 'Tajni Ključ Klijenta';
$lang['discord_client_secret_tip'] = 'Unesite tajni ključ klijenta vaše Discord aplikacije.';

// --------------------------------------------------------------------
// Facebook:
$lang['facebook_auth'] = 'Prijava preko Facebook';
$lang['facebook_auth_tip'] = ['Dozvolite korisnicima da se prijave sa <a href="https://developers.facebook.com/apps/" target="_blank" rel="noopener noreferrer">Facebook</a>.', $lang['allow_oauth_required']];
$lang['facebook_app_secret'] = 'Tajni Ključ Klijenta';
$lang['facebook_app_secret_tip'] = 'Unesite tajni ključ vaše Facebook aplikacije.';

// --------------------------------------------------------------------
// GitHub:
$lang['github_auth'] = 'Prijava preko GitHub';
$lang['github_auth_tip'] = ['Dozvolite korisnicima da se prijave sa <a href="https://github.com/settings/developers" target="_blank" rel="noopener noreferrer">GitHub</a>.', $lang['allow_oauth_required']];
$lang['github_client_id'] = 'ID Klijenta';
$lang['github_client_id_tip'] = 'Unesite ID klijenta vaše GitHub aplikacije.';
$lang['github_client_secret'] = 'Tajni Ključ Klijenta';
$lang['github_client_secret_tip'] = 'Unesite tajni ključ vaše GitHub aplikacije.';

// --------------------------------------------------------------------
// Google:
$lang['google_auth'] = 'Prijava preko Google';
$lang['google_auth_tip'] = ['Dozvolite korisnicima da se prijave sa <a href="https://console.cloud.google.com/" target="_blank" rel="noopener noreferrer">Google</a>.', $lang['allow_oauth_required']];
$lang['google_client_id'] = 'ID Klijenta';
$lang['google_client_id_tip'] = 'Unesite ID klijenta vaše Google aplikacije.';
$lang['google_client_secret'] = 'Tajni Ključ Klijenta';
$lang['google_client_secret_tip'] = 'Unesite tajni ključ vaše Google aplikacije.';

// --------------------------------------------------------------------
// LinkedIn:
$lang['linkedin_auth'] = 'Prijava preko LinkedIn';
$lang['linkedin_auth_tip'] = ['Dozvolite korisnicima da se prijave sa <a href="https://www.linkedin.com/developers/apps" target="_blank" rel="noopener noreferrer">LinkedIn</a>.', $lang['allow_oauth_required']];
$lang['linkedin_client_id'] = 'ID Klijenta';
$lang['linkedin_client_id_tip'] = 'Unesite ID klijenta vaše LinkedIn aplikacije.';
$lang['linkedin_client_secret'] = 'Tajni Ključ Klijenta';
$lang['linkedin_client_secret_tip'] = 'Unesite tajni ključ vaše LinkedIn aplikacije.';

// --------------------------------------------------------------------
// Microsoft:
$lang['microsoft_auth'] = 'Prijava preko Microsoftom';
$lang['microsoft_auth_tip'] = ['Dozvolite korisnicima da se prijave sa <a href="https://portal.azure.com/#blade/Microsoft_AAD_RegisteredApps" target="_blank" rel="noopener noreferrer">Microsoft</a>.', $lang['allow_oauth_required']];
$lang['microsoft_client_id'] = 'ID Klijenta';
$lang['microsoft_client_id_tip'] = 'Unesite ID klijenta vaše Microsoft aplikacije.';
$lang['microsoft_client_secret'] = 'Tajna Klijenta';
$lang['microsoft_client_secret_tip'] = 'Unesite tajni ključ vaše Microsoft aplikacije.';
$lang['microsoft_tenant_id'] = 'ID zakupca (opciono)';
$lang['microsoft_tenant_id_tip'] = 'Ograničava prijavu na određenog Microsoft zakupca (Azure AD direktorijum). Ostavite prazno da biste dozvolili lične Microsoft naloge i sve Azure AD zakupce.';
