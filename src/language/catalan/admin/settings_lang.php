<?php

/**
 * OAuth Plugin - Settings Language File (Catalan)
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
$lang['settings_discord'] = 'Configuració de Discord';
$lang['settings_github'] = 'Configuració de GitHub';
$lang['settings_linkedin'] = 'Configuració de LinkedIn';
$lang['settings_microsoft'] = 'Configuració de Microsoft';

// --------------------------------------------------------------------
// Extra Users Settings & Common Lines:
$lang['allow_oauth'] = 'Inici de Sessió de Tercers';
$lang['allow_oauth_tip'] = 'Permet als usuaris iniciar sessió amb proveïdors de tercers.';
$lang['allow_oauth_required'] = 'Requereix que <a href="./users#allow_oauth">Inici de Sessió de Tercers</a> estigui activat.';

// --------------------------------------------------------------------
// Discord:
$lang['discord_auth'] = 'Iniciar sessió amb Discord';
$lang['discord_auth_tip'] = ['Permet als usuaris iniciar sessió amb <a href="https://discord.com/developers/applications" target="_blank" rel="noopener noreferrer">Discord</a>.', $lang['allow_oauth_required']];
$lang['discord_client_id'] = 'ID de Client';
$lang['discord_client_id_tip'] = 'Introduïu el vostre ID de client d’aplicació de Discord.';
$lang['discord_client_secret'] = 'Secret de Client';
$lang['discord_client_secret_tip'] = 'Introduïu la vostra clau secreta d’aplicació de Discord.';

// --------------------------------------------------------------------
// Facebook:
$lang['facebook_auth'] = 'Iniciar sessió amb Facebook';
$lang['facebook_auth_tip'] = ['Permet als usuaris iniciar sessió amb <a href="https://developers.facebook.com/apps/" target="_blank" rel="noopener noreferrer">Facebook</a>.', $lang['allow_oauth_required']];
$lang['facebook_app_secret'] = 'Secret de Client';
$lang['facebook_app_secret_tip'] = 'Introduïu la vostra clau secreta d’aplicació de Facebook.';

// --------------------------------------------------------------------
// GitHub:
$lang['github_auth'] = 'Iniciar sessió amb GitHub';
$lang['github_auth_tip'] = ['Permet als usuaris iniciar sessió amb <a href="https://github.com/settings/developers" target="_blank" rel="noopener noreferrer">GitHub</a>.', $lang['allow_oauth_required']];
$lang['github_client_id'] = 'ID de Client';
$lang['github_client_id_tip'] = 'Introduïu el vostre ID de client d’aplicació de GitHub.';
$lang['github_client_secret'] = 'Secret de Client';
$lang['github_client_secret_tip'] = 'Introduïu la vostra clau secreta d’aplicació de GitHub.';

// --------------------------------------------------------------------
// Google:
$lang['google_auth'] = 'Iniciar sessió amb Google';
$lang['google_auth_tip'] = ['Permet als usuaris iniciar sessió amb <a href="https://console.cloud.google.com/" target="_blank" rel="noopener noreferrer">Google</a>.', $lang['allow_oauth_required']];
$lang['google_client_id'] = 'ID de Client';
$lang['google_client_id_tip'] = 'Introduïu el vostre ID de client d’aplicació de Google.';
$lang['google_client_secret'] = 'Secret de Client';
$lang['google_client_secret_tip'] = 'Introduïu la vostra clau secreta d’aplicació de Google.';

// --------------------------------------------------------------------
// LinkedIn:
$lang['linkedin_auth'] = 'Iniciar sessió amb LinkedIn';
$lang['linkedin_auth_tip'] = ['Permet als usuaris iniciar sessió amb <a href="https://www.linkedin.com/developers/apps" target="_blank" rel="noopener noreferrer">LinkedIn</a>.', $lang['allow_oauth_required']];
$lang['linkedin_client_id'] = 'ID de Client';
$lang['linkedin_client_id_tip'] = 'Introduïu el vostre ID de client d’aplicació de LinkedIn.';
$lang['linkedin_client_secret'] = 'Secret de Client';
$lang['linkedin_client_secret_tip'] = 'Introduïu la vostra clau secreta d’aplicació de LinkedIn.';

// --------------------------------------------------------------------
// Microsoft:
$lang['microsoft_auth'] = 'Iniciar sessió amb Microsoft';
$lang['microsoft_auth_tip'] = ['Permet als usuaris iniciar sessió amb <a href="https://portal.azure.com/#blade/Microsoft_AAD_RegisteredApps" target="_blank" rel="noopener noreferrer">Microsoft</a>.', $lang['allow_oauth_required']];
$lang['microsoft_client_id'] = 'ID de client';
$lang['microsoft_client_id_tip'] = 'Introduïu l’ID de client de la vostra aplicació Microsoft.';
$lang['microsoft_client_secret'] = 'Secret del client';
$lang['microsoft_client_secret_tip'] = 'Introduïu la clau secreta de la vostra aplicació Microsoft.';
$lang['microsoft_tenant_id'] = 'ID del tenant (opcional)';
$lang['microsoft_tenant_id_tip'] = 'Restringeix l’inici de sessió a un tenant específic de Microsoft (directori Azure AD). Deixeu-ho buit per permetre comptes personals de Microsoft i qualsevol tenant d’Azure AD.';
