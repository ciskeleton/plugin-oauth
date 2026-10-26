<?php

/**
 * OAuth Plugin - Settings Language File (Romanian)
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
$lang['settings_discord'] = 'Setări Discord';
$lang['settings_github'] = 'Setări GitHub';
$lang['settings_linkedin'] = 'Setări LinkedIn';
$lang['settings_microsoft'] = 'Setări Microsoft';

// --------------------------------------------------------------------
// Extra Users Settings & Common Lines:
$lang['allow_oauth'] = 'Autentificare terță parte';
$lang['allow_oauth_tip'] = 'Permiteți utilizatorilor să se autentifice cu furnizori terți.';
$lang['allow_oauth_required'] = 'Necesită activarea <a href="./users#allow_oauth">Autentificării terță parte</a>.';

// --------------------------------------------------------------------
// Discord:
$lang['discord_auth'] = 'Autentificare cu Discord';
$lang['discord_auth_tip'] = ['Permiteți utilizatorilor să se autentifice cu <a href="https://discord.com/developers/applications" target="_blank" rel="noopener noreferrer">Discord</a>.', $lang['allow_oauth_required']];
$lang['discord_client_id'] = 'ID Client';
$lang['discord_client_id_tip'] = 'Introduceți ID-ul de client al aplicației dvs. Discord.';
$lang['discord_client_secret'] = 'Secret Client';
$lang['discord_client_secret_tip'] = 'Introduceți cheia secretă a aplicației dvs. Discord.';

// --------------------------------------------------------------------
// Facebook:
$lang['facebook_auth'] = 'Autentificare cu Facebook';
$lang['facebook_auth_tip'] = ['Permiteți utilizatorilor să se autentifice cu <a href="https://developers.facebook.com/apps/" target="_blank" rel="noopener noreferrer">Facebook</a>.', $lang['allow_oauth_required']];
$lang['facebook_app_secret'] = 'Secret Client';
$lang['facebook_app_secret_tip'] = 'Introduceți cheia secretă a aplicației dvs. Facebook.';

// --------------------------------------------------------------------
// GitHub:
$lang['github_auth'] = 'Autentificare cu GitHub';
$lang['github_auth_tip'] = ['Permiteți utilizatorilor să se autentifice cu <a href="https://github.com/settings/developers" target="_blank" rel="noopener noreferrer">GitHub</a>.', $lang['allow_oauth_required']];
$lang['github_client_id'] = 'ID Client';
$lang['github_client_id_tip'] = 'Introduceți ID-ul de client al aplicației dvs. GitHub.';
$lang['github_client_secret'] = 'Secret Client';
$lang['github_client_secret_tip'] = 'Introduceți cheia secretă a aplicației dvs. GitHub.';

// --------------------------------------------------------------------
// Google:
$lang['google_auth'] = 'Autentificare cu Google';
$lang['google_auth_tip'] = ['Permiteți utilizatorilor să se autentifice cu <a href="https://console.cloud.google.com/" target="_blank" rel="noopener noreferrer">Google</a>.', $lang['allow_oauth_required']];
$lang['google_client_id'] = 'ID Client';
$lang['google_client_id_tip'] = 'Introduceți ID-ul de client al aplicației dvs. Google.';
$lang['google_client_secret'] = 'Secret Client';
$lang['google_client_secret_tip'] = 'Introduceți cheia secretă a aplicației dvs. Google.';

// --------------------------------------------------------------------
// LinkedIn:
$lang['linkedin_auth'] = 'Autentificare cu LinkedIn';
$lang['linkedin_auth_tip'] = ['Permiteți utilizatorilor să se autentifice cu <a href="https://www.linkedin.com/developers/apps" target="_blank" rel="noopener noreferrer">LinkedIn</a>.', $lang['allow_oauth_required']];
$lang['linkedin_client_id'] = 'ID Client';
$lang['linkedin_client_id_tip'] = 'Introduceți ID-ul de client al aplicației dvs. LinkedIn.';
$lang['linkedin_client_secret'] = 'Secret Client';
$lang['linkedin_client_secret_tip'] = 'Introduceți cheia secretă a aplicației dvs. LinkedIn.';

// --------------------------------------------------------------------
// Microsoft:
$lang['microsoft_auth'] = 'Autentificare cu Microsoft';
$lang['microsoft_auth_tip'] = ['Permitețiți utilizatorilor să se autentifice cu <a href="https://portal.azure.com/#blade/Microsoft_AAD_RegisteredApps" target="_blank" rel="noopener noreferrer">Microsoft</a>.', $lang['allow_oauth_required']];
$lang['microsoft_client_id'] = 'ID Client';
$lang['microsoft_client_id_tip'] = 'Introduceți ID-ul client al aplicației Microsoft.';
$lang['microsoft_client_secret'] = 'Secret Client';
$lang['microsoft_client_secret_tip'] = 'Introduceți cheia secretă a aplicației Microsoft.';
$lang['microsoft_tenant_id'] = 'ID tenant (opțional)';
$lang['microsoft_tenant_id_tip'] = 'Restricționează autentificarea la un tenant Microsoft specific (director Azure AD). Lăsați gol pentru a permite conturi Microsoft personale și toți tenant-ii Azure AD.';
