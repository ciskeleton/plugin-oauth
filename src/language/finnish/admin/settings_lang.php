<?php

/**
 * OAuth Plugin - Settings Language File (Finnish)
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
$lang['admin_settings_discord'] = 'Discord-asetukset';
$lang['admin_settings_github'] = 'GitHub-asetukset';
$lang['admin_settings_linkedin'] = 'LinkedIn-asetukset';
$lang['admin_settings_microsoft'] = 'Microsoft-asetukset';

// --------------------------------------------------------------------
// Extra Users Settings & Common Lines:
$lang['allow_oauth'] = 'Kolmannen kirjautuminen';
$lang['allow_oauth_tip'] = 'Salli käyttäjien kirjautumisen kolmansien tarjoajien kautta.';
$lang['allow_oauth_required'] = 'Vaatii <a href="./users#allow_oauth">Kolmannen kirjautuminen</a> käytössä.';

// --------------------------------------------------------------------
// Discord:
$lang['discord_auth'] = 'Kirjaudu Discordilla';
$lang['discord_auth_tip'] = ['Salli käyttäjien kirjautua <a href="https://discord.com/developers/applications" target="_blank" rel="noopener noreferrer">Discordilla</a>.', $lang['allow_oauth_required']];
$lang['discord_client_id'] = 'Asiakas-ID';
$lang['discord_client_id_tip'] = 'Syötä Discord-sovelluksesi asiakas-ID.';
$lang['discord_client_secret'] = 'Asiakassalaisuus';
$lang['discord_client_secret_tip'] = 'Syötä Discord-sovelluksesi salainen avain.';

// --------------------------------------------------------------------
// Facebook:
$lang['facebook_auth'] = 'Kirjaudu Facebookilla';
$lang['facebook_auth_tip'] = ['Salli käyttäjien kirjautua <a href="https://developers.facebook.com/apps/" target="_blank" rel="noopener noreferrer">Facebookilla</a>.', $lang['allow_oauth_required']];
$lang['facebook_app_secret'] = 'Asiakassalaisuus';
$lang['facebook_app_secret_tip'] = 'Syötä Facebook-sovelluksesi salainen avain.';

// --------------------------------------------------------------------
// GitHub:
$lang['github_auth'] = 'Kirjaudu GitHubilla';
$lang['github_auth_tip'] = ['Salli käyttäjien kirjautua <a href="https://github.com/settings/developers" target="_blank" rel="noopener noreferrer">GitHubilla</a>.', $lang['allow_oauth_required']];
$lang['github_client_id'] = 'Asiakas-ID';
$lang['github_client_id_tip'] = 'Syötä GitHub-sovelluksesi asiakas-ID.';
$lang['github_client_secret'] = 'Asiakassalaisuus';
$lang['github_client_secret_tip'] = 'Syötä GitHub-sovelluksesi salainen avain.';

// --------------------------------------------------------------------
// Google:
$lang['google_auth'] = 'Kirjaudu Googlella';
$lang['google_auth_tip'] = ['Salli käyttäjien kirjautua <a href="https://console.cloud.google.com/" target="_blank" rel="noopener noreferrer">Googlella</a>.', $lang['allow_oauth_required']];
$lang['google_client_id'] = 'Asiakas-ID';
$lang['google_client_id_tip'] = 'Syötä Google-sovelluksesi asiakas-ID.';
$lang['google_client_secret'] = 'Asiakassalaisuus';
$lang['google_client_secret_tip'] = 'Syötä Google-sovelluksesi salainen avain.';

// --------------------------------------------------------------------
// LinkedIn:
$lang['linkedin_auth'] = 'Kirjaudu LinkedInillä';
$lang['linkedin_auth_tip'] = ['Salli käyttäjien kirjautua <a href="https://www.linkedin.com/developers/apps" target="_blank" rel="noopener noreferrer">LinkedInillä</a>.', $lang['allow_oauth_required']];
$lang['linkedin_client_id'] = 'Asiakas-ID';
$lang['linkedin_client_id_tip'] = 'Syötä LinkedIn-sovelluksesi asiakas-ID.';
$lang['linkedin_client_secret'] = 'Asiakassalaisuus';
$lang['linkedin_client_secret_tip'] = 'Syötä LinkedIn-sovelluksesi salainen avain.';

// --------------------------------------------------------------------
// Microsoft:
$lang['microsoft_auth'] = 'Kirjaudu Microsoftilla';
$lang['microsoft_auth_tip'] = ['Salli käyttäjien kirjautua <a href="https://portal.azure.com/#blade/Microsoft_AAD_RegisteredApps" target="_blank" rel="noopener noreferrer">Microsoftilla</a>.', $lang['allow_oauth_required']];
$lang['microsoft_client_id'] = 'Asiakas-ID';
$lang['microsoft_client_id_tip'] = 'Syötä Microsoft-sovelluksesi asiakas-ID.';
$lang['microsoft_client_secret'] = 'Asiakkaan salaisuus';
$lang['microsoft_client_secret_tip'] = 'Syötä Microsoft-sovelluksesi salainen avain.';
$lang['microsoft_tenant_id'] = 'Tenant-tunnus (valinnainen)';
$lang['microsoft_tenant_id_tip'] = 'Rajoittaa kirjautumisen tiettyyn Microsoft-tenanttiin (Azure AD -hakemisto). Jätä tyhjäksi salliaksesi henkilökohtaiset Microsoft-tilit ja kaikki Azure AD -tenantit.';
