<?php

/**
 * OAuth Plugin - Settings Language File (Slovenian)
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
$lang['settings_discord'] = 'Nastavitve Discord';
$lang['settings_github'] = 'Nastavitve GitHub';
$lang['settings_linkedin'] = 'Nastavitve LinkedIn';
$lang['settings_microsoft'] = 'Microsoft nastavitve';

// --------------------------------------------------------------------
// Extra Users Settings & Common Lines:
$lang['allow_oauth'] = 'Prijava tretjih oseb';
$lang['allow_oauth_tip'] = 'Dovoli uporabnikom, da se prijavijo z ponudniki tretjih oseb.';
$lang['allow_oauth_required'] = 'Zahteva omogočeno <a href="./users#allow_oauth">Prijava tretjih oseb</a>.';

// --------------------------------------------------------------------
// Discord:
$lang['discord_auth'] = 'Prijava z Discordom';
$lang['discord_auth_tip'] = ['Dovoli uporabnikom prijavo z <a href="https://discord.com/developers/applications" target="_blank" rel="noopener noreferrer">Discordom</a>.', $lang['allow_oauth_required']];
$lang['discord_client_id'] = 'ID odjemalca';
$lang['discord_client_id_tip'] = 'Vnesite ID odjemalca vaše Discord aplikacije.';
$lang['discord_client_secret'] = 'Skrivni ključ';
$lang['discord_client_secret_tip'] = 'Vnesite skrivni ključ vaše Discord aplikacije.';

// --------------------------------------------------------------------
// Facebook:
$lang['facebook_app_secret'] = 'Skrivni ključ';
$lang['facebook_app_secret_tip'] = 'Vnesite skrivni ključ vaše Facebook aplikacije.';
$lang['facebook_auth'] = 'Prijava z Facebookom';
$lang['facebook_auth_tip'] = ['Dovoli uporabnikom prijavo z <a href="https://developers.facebook.com/apps/" target="_blank" rel="noopener noreferrer">Facebookom</a>.', $lang['allow_oauth_required']];

// --------------------------------------------------------------------
// GitHub:
$lang['github_auth'] = 'Prijava z GitHubom';
$lang['github_auth_tip'] = ['Dovoli uporabnikom prijavo z <a href="https://github.com/settings/developers" target="_blank" rel="noopener noreferrer">GitHubom</a>.', $lang['allow_oauth_required']];
$lang['github_client_id'] = 'ID odjemalca';
$lang['github_client_id_tip'] = 'Vnesite ID odjemalca vaše GitHub aplikacije.';
$lang['github_client_secret'] = 'Skrivni ključ';
$lang['github_client_secret_tip'] = 'Vnesite skrivni ključ vaše GitHub aplikacije.';

// --------------------------------------------------------------------
// Google:
$lang['google_auth'] = 'Prijava z Googlem';
$lang['google_auth_tip'] = ['Dovoli uporabnikom prijavo z <a href="https://console.cloud.google.com/" target="_blank" rel="noopener noreferrer">Googlem</a>.', $lang['allow_oauth_required']];
$lang['google_client_id'] = 'ID odjemalca';
$lang['google_client_id_tip'] = 'Vnesite ID odjemalca vaše Google aplikacije.';
$lang['google_client_secret'] = 'Skrivni ključ';
$lang['google_client_secret_tip'] = 'Vnesite skrivni ključ vaše Google aplikacije.';

// --------------------------------------------------------------------
// LinkedIn:
$lang['linkedin_auth'] = 'Prijava z LinkedInom';
$lang['linkedin_auth_tip'] = ['Dovoli uporabnikom prijavo z <a href="https://www.linkedin.com/developers/apps" target="_blank" rel="noopener noreferrer">LinkedInom</a>.', $lang['allow_oauth_required']];
$lang['linkedin_client_id'] = 'ID odjemalca';
$lang['linkedin_client_id_tip'] = 'Vnesite ID odjemalca vaše LinkedIn aplikacije.';
$lang['linkedin_client_secret'] = 'Skrivni ključ';
$lang['linkedin_client_secret_tip'] = 'Vnesite skrivni ključ vaše LinkedIn aplikacije.';

// --------------------------------------------------------------------
// Microsoft:
$lang['microsoft_auth'] = 'Prijava z Microsoftom';
$lang['microsoft_auth_tip'] = ['Dovoli uporabnikom prijavo z <a href="https://portal.azure.com/#blade/Microsoft_AAD_RegisteredApps" target="_blank" rel="noopener noreferrer">Microsoftom</a>.', $lang['allow_oauth_required']];
$lang['microsoft_client_id'] = 'ID odjemalca';
$lang['microsoft_client_id_tip'] = 'Vnesite ID odjemalca vaše Microsoft aplikacije.';
$lang['microsoft_client_secret'] = 'Skrivnost odjemalca';
$lang['microsoft_client_secret_tip'] = 'Vnesite skrivni ključ vaše Microsoft aplikacije.';
$lang['microsoft_tenant_id'] = 'ID najemnika (neobvezno)';
$lang['microsoft_tenant_id_tip'] = 'Omeji prijavo na določenega Microsoft najemnika (imenik Azure AD). Pustite prazno za dovoljenje osebnih Microsoft računov in vseh Azure AD najemnikov.';
