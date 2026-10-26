<?php

/**
 * OAuth Plugin - Settings Language File (Croatian)
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
$lang['settings_discord'] = 'Discord postavke';
$lang['settings_github'] = 'GitHub postavke';
$lang['settings_linkedin'] = 'LinkedIn postavke';
$lang['settings_microsoft'] = 'Microsoft postavke';

// --------------------------------------------------------------------
// Extra Users Settings & Common Lines:
$lang['allow_oauth'] = 'Prijava treće strane';
$lang['allow_oauth_tip'] = 'Dozvoli korisnicima da se prijavljuju s pružateljima treće strane.';
$lang['allow_oauth_required'] = 'Zahtijeva <a href="./users#allow_oauth">Prijavu treće strane</a> da bude omogućena.';

// --------------------------------------------------------------------
// Discord:
$lang['discord_auth'] = 'Prijava s Discordom';
$lang['discord_auth_tip'] = ['Dozvoli korisnicima da se prijave s <a href="https://discord.com/developers/applications" target="_blank" rel="noopener noreferrer">Discordom</a>.', $lang['allow_oauth_required']];
$lang['discord_client_id'] = 'ID klijenta';
$lang['discord_client_id_tip'] = 'Unesite ID klijenta vaše Discord aplikacije.';
$lang['discord_client_secret'] = 'Tajna klijenta';
$lang['discord_client_secret_tip'] = 'Unesite tajni ključ vaše Discord aplikacije.';

// --------------------------------------------------------------------
// Facebook:
$lang['facebook_auth'] = 'Prijava s Facebookom';
$lang['facebook_auth_tip'] = ['Dozvoli korisnicima da se prijave s <a href="https://developers.facebook.com/apps/" target="_blank" rel="noopener noreferrer">Facebookom</a>.', $lang['allow_oauth_required']];
$lang['facebook_app_secret'] = 'Tajna klijenta';
$lang['facebook_app_secret_tip'] = 'Unesite tajni ključ vaše Facebook aplikacije.';

// --------------------------------------------------------------------
// GitHub:
$lang['github_auth'] = 'Prijava s GitHubom';
$lang['github_auth_tip'] = ['Dozvoli korisnicima da se prijave s <a href="https://github.com/settings/developers" target="_blank" rel="noopener noreferrer">GitHubom</a>.', $lang['allow_oauth_required']];
$lang['github_client_id'] = 'ID klijenta';
$lang['github_client_id_tip'] = 'Unesite ID klijenta vaše GitHub aplikacije.';
$lang['github_client_secret'] = 'Tajna klijenta';
$lang['github_client_secret_tip'] = 'Unesite tajni ključ vaše GitHub aplikacije.';

// --------------------------------------------------------------------
// Google:
$lang['google_auth'] = 'Prijava s Googleom';
$lang['google_auth_tip'] = ['Dozvoli korisnicima da se prijave s <a href="https://console.cloud.google.com/" target="_blank" rel="noopener noreferrer">Googleom</a>.', $lang['allow_oauth_required']];
$lang['google_client_id'] = 'ID klijenta';
$lang['google_client_id_tip'] = 'Unesite ID klijenta vaše Google aplikacije.';
$lang['google_client_secret'] = 'Tajna klijenta';
$lang['google_client_secret_tip'] = 'Unesite tajni ključ vaše Google aplikacije.';

// --------------------------------------------------------------------
// LinkedIn:
$lang['linkedin_auth'] = 'Prijava s LinkedInom';
$lang['linkedin_auth_tip'] = ['Dozvoli korisnicima da se prijave s <a href="https://www.linkedin.com/developers/apps" target="_blank" rel="noopener noreferrer">LinkedInom</a>.', $lang['allow_oauth_required']];
$lang['linkedin_client_id'] = 'ID klijenta';
$lang['linkedin_client_id_tip'] = 'Unesite ID klijenta vaše LinkedIn aplikacije.';
$lang['linkedin_client_secret'] = 'Tajna klijenta';
$lang['linkedin_client_secret_tip'] = 'Unesite tajni ključ vaše LinkedIn aplikacije.';

// --------------------------------------------------------------------
// Microsoft:
$lang['microsoft_auth'] = 'Prijava s Microsoftom';
$lang['microsoft_auth_tip'] = ['Dozvoli korisnicima da se prijave s <a href="https://portal.azure.com/#blade/Microsoft_AAD_RegisteredApps" target="_blank" rel="noopener noreferrer">Microsoftom</a>.', $lang['allow_oauth_required']];
$lang['microsoft_client_id'] = 'ID klijenta';
$lang['microsoft_client_id_tip'] = 'Unesite ID klijenta vaše Microsoft aplikacije.';
$lang['microsoft_client_secret'] = 'Tajna klijenta';
$lang['microsoft_client_secret_tip'] = 'Unesite tajni ključ vaše Microsoft aplikacije.';
$lang['microsoft_tenant_id'] = 'ID tenant-a (neobavezno)';
$lang['microsoft_tenant_id_tip'] = 'Ograničava prijavu na određeni Microsoft tenant (Azure AD direktorij). Ostavite prazno za dopuštanje osobnih Microsoft računa i svih Azure AD tenant-a.';
