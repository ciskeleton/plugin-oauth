<?php

/**
 * OAuth Plugin - Settings Language File (Lithuanian)
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
$lang['settings_discord'] = 'Discord Nustatymai';
$lang['settings_github'] = 'GitHub Nustatymai';
$lang['settings_linkedin'] = 'LinkedIn Nustatymai';
$lang['settings_microsoft'] = 'Microsoft nustatymai';

// --------------------------------------------------------------------
// Extra Users Settings & Common Lines:
$lang['allow_oauth'] = 'Trečių šalių prisijungimai';
$lang['allow_oauth_tip'] = 'Leisti vartotojams prisijungti su trečių šalių teikėjų paslaugymo tiekėjais.';
$lang['allow_oauth_required'] = 'Reikalauja, kad būtų įjungta <a href="./users#allow_oauth">Trečių šalių prisijungimai</a>.';

// --------------------------------------------------------------------
// Discord:
$lang['discord_auth'] = 'Prisijungti su Discord';
$lang['discord_auth_tip'] = ['Leisti vartotojams prisijungti su <a href="https://discord.com/developers/applications" target="_blank" rel="noopener noreferrer">Discord</a>.', $lang['allow_oauth_required']];
$lang['discord_client_id'] = 'Kliento ID';
$lang['discord_client_id_tip'] = 'Įveskite savo Discord programos kliento ID.';
$lang['discord_client_secret'] = 'Kliento Slaptažodis';
$lang['discord_client_secret_tip'] = 'Įveskite savo Discord programos slaptąjį raktą.';

// --------------------------------------------------------------------
// Facebook:
$lang['facebook_auth'] = 'Prisijungti su Facebook';
$lang['facebook_auth_tip'] = ['Leisti vartotojams prisijungti su <a href="https://developers.facebook.com/apps/" target="_blank" rel="noopener noreferrer">Facebook</a>.', $lang['allow_oauth_required']];
$lang['facebook_app_secret'] = 'Kliento Slaptažodis';
$lang['facebook_app_secret_tip'] = 'Įveskite savo Facebook programos slaptąjį raktą.';

// --------------------------------------------------------------------
// GitHub:
$lang['github_auth'] = 'Prisijungti su GitHub';
$lang['github_auth_tip'] = ['Leisti vartotojams prisijungti su <a href="https://github.com/settings/developers" target="_blank" rel="noopener noreferrer">GitHub</a>.', $lang['allow_oauth_required']];
$lang['github_client_id'] = 'Kliento ID';
$lang['github_client_id_tip'] = 'Įveskite savo GitHub programos kliento ID.';
$lang['github_client_secret'] = 'Kliento Slaptažodis';
$lang['github_client_secret_tip'] = 'Įveskite savo GitHub programos slaptąjį raktą.';

// --------------------------------------------------------------------
// Google:
$lang['google_auth'] = 'Prisijungti su Google';
$lang['google_auth_tip'] = ['Leisti vartotojams prisijungti su <a href="https://console.cloud.google.com/" target="_blank" rel="noopener noreferrer">Google</a>.', $lang['allow_oauth_required']];
$lang['google_client_id'] = 'Kliento ID';
$lang['google_client_id_tip'] = 'Įveskite savo Google programos kliento ID.';
$lang['google_client_secret'] = 'Kliento Slaptažodis';
$lang['google_client_secret_tip'] = 'Įveskite savo Google programos slaptąjį raktą.';

// --------------------------------------------------------------------
// LinkedIn:
$lang['linkedin_auth'] = 'Prisijungti su LinkedIn';
$lang['linkedin_auth_tip'] = ['Leisti vartotojams prisijungti su <a href="https://www.linkedin.com/developers/apps" target="_blank" rel="noopener noreferrer">LinkedIn</a>.', $lang['allow_oauth_required']];
$lang['linkedin_client_id'] = 'Kliento ID';
$lang['linkedin_client_id_tip'] = 'Įveskite savo LinkedIn programos kliento ID.';
$lang['linkedin_client_secret'] = 'Kliento Slaptažodis';
$lang['linkedin_client_secret_tip'] = 'Įveskite savo LinkedIn programos slaptąjį raktą.';

// --------------------------------------------------------------------
// Microsoft:
$lang['microsoft_auth'] = 'Prisijungti su Microsoft';
$lang['microsoft_auth_tip'] = ['Leisti vartotojams prisijungti su <a href="https://portal.azure.com/#blade/Microsoft_AAD_RegisteredApps" target="_blank" rel="noopener noreferrer">Microsoft</a>.', $lang['allow_oauth_required']];
$lang['microsoft_client_id'] = 'Kliento ID';
$lang['microsoft_client_id_tip'] = 'Įveskite savo Microsoft programos kliento ID.';
$lang['microsoft_client_secret'] = 'Kliento paslaptis';
$lang['microsoft_client_secret_tip'] = 'Įveskite savo Microsoft programos slaptąjį raktą.';
$lang['microsoft_tenant_id'] = 'Nuomininko ID (nebūtina)';
$lang['microsoft_tenant_id_tip'] = 'Apriboja prisijungimą prie konkretaus Microsoft nuomininko (Azure AD katalogo). Palikite tuščią, kad būtų leidžiamos asmeninės Microsoft paskyros ir visi Azure AD nuomininkai.';
