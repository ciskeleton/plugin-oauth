<?php

/**
 * OAuth Plugin - Settings Language File (Estonian)
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
$lang['settings_discord'] = 'Discordi seaded';
$lang['settings_github'] = 'GitHubi seaded';
$lang['settings_linkedin'] = 'LinkedIni seaded';
$lang['settings_microsoft'] = 'Microsofti seaded';

// --------------------------------------------------------------------
// Extra Users Settings & Common Lines:
$lang['allow_oauth'] = 'Kolmanda osapoole sisselogimine';
$lang['allow_oauth_tip'] = 'Luba kasutajatel sisse logida kolmanda osapoole teenusepakkujatega.';
$lang['allow_oauth_required'] = 'Nõuab, et <a href="./users#allow_oauth">Kolmanda osapoole sisselogimine</a> oleks lubatud.';

// --------------------------------------------------------------------
// Discord:
$lang['discord_auth'] = 'Logi sisse Discordiga';
$lang['discord_auth_tip'] = ['Luba kasutajatel sisse logida teenusega <a href="https://discord.com/developers/applications" target="_blank" rel="noopener noreferrer">Discord</a>.', $lang['allow_oauth_required']];
$lang['discord_client_id'] = 'Kliendi ID';
$lang['discord_client_id_tip'] = 'Sisestage oma Discordi rakenduse kliendi ID.';
$lang['discord_client_secret'] = 'Kliendi saladus';
$lang['discord_client_secret_tip'] = 'Sisestage oma Discordi rakenduse salajane võti.';

// --------------------------------------------------------------------
// Facebook:
$lang['facebook_auth'] = 'Logi sisse Facebookiga';
$lang['facebook_auth_tip'] = ['Luba kasutajatel sisse logida teenusega <a href="https://developers.facebook.com/apps/" target="_blank" rel="noopener noreferrer">Facebook</a>.', $lang['allow_oauth_required']];
$lang['facebook_app_secret'] = 'Kliendi saladus';
$lang['facebook_app_secret_tip'] = 'Sisestage oma Facebooki rakenduse salajane võti.';

// --------------------------------------------------------------------
// GitHub:
$lang['github_auth'] = 'Logi sisse GitHubiga';
$lang['github_auth_tip'] = ['Luba kasutajatel sisse logida teenusega <a href="https://github.com/settings/developers" target="_blank" rel="noopener noreferrer">GitHub</a>.', $lang['allow_oauth_required']];
$lang['github_client_id'] = 'Kliendi ID';
$lang['github_client_id_tip'] = 'Sisestage oma GitHubi rakenduse kliendi ID.';
$lang['github_client_secret'] = 'Kliendi saladus';
$lang['github_client_secret_tip'] = 'Sisestage oma GitHubi rakenduse salajane võti.';

// --------------------------------------------------------------------
// Google:
$lang['google_auth'] = 'Logi sisse Googleiga';
$lang['google_auth_tip'] = ['Luba kasutajatel sisse logida teenusega <a href="https://console.cloud.google.com/" target="_blank" rel="noopener noreferrer">Google</a>.', $lang['allow_oauth_required']];
$lang['google_client_id'] = 'Kliendi ID';
$lang['google_client_id_tip'] = 'Sisestage oma Googlei rakenduse kliendi ID.';
$lang['google_client_secret'] = 'Kliendi saladus';
$lang['google_client_secret_tip'] = 'Sisestage oma Googlei rakenduse salajane võti.';

// --------------------------------------------------------------------
// LinkedIn:
$lang['linkedin_auth'] = 'Logi sisse LinkedIniga';
$lang['linkedin_auth_tip'] = ['Luba kasutajatel sisse logida teenusega <a href="https://www.linkedin.com/developers/apps" target="_blank" rel="noopener noreferrer">LinkedIn</a>.', $lang['allow_oauth_required']];
$lang['linkedin_client_id'] = 'Kliendi ID';
$lang['linkedin_client_id_tip'] = 'Sisestage oma LinkedIni rakenduse kliendi ID.';
$lang['linkedin_client_secret'] = 'Kliendi saladus';
$lang['linkedin_client_secret_tip'] = 'Sisestage oma LinkedIni rakenduse salajane võti.';

// --------------------------------------------------------------------
// Microsoft:
$lang['microsoft_auth'] = 'Logi sisse Microsoftiga';
$lang['microsoft_auth_tip'] = ['Luba kasutajatel sisse logida teenusega <a href="https://portal.azure.com/#blade/Microsoft_AAD_RegisteredApps" target="_blank" rel="noopener noreferrer">Microsoft</a>.', $lang['allow_oauth_required']];
$lang['microsoft_client_id'] = 'Kliendi ID';
$lang['microsoft_client_id_tip'] = 'Sisestage oma Microsofti rakenduse kliendi ID.';
$lang['microsoft_client_secret'] = 'Kliendi saladus';
$lang['microsoft_client_secret_tip'] = 'Sisestage oma Microsofti rakenduse salajane võti.';
$lang['microsoft_tenant_id'] = 'Rentniku ID (valikuline)';
$lang['microsoft_tenant_id_tip'] = 'Piirake sisselogimist kindla Microsofti rentnikuga (Azure AD kataloog). Jätke tühjaks, et lubada nii isiklikud Microsofti kontod kui ka kõik Azure AD rentnikud.';
