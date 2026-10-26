<?php

/**
 * OAuth Plugin - Settings Language File (Spanish)
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
$lang['settings_discord'] = 'Configuración de Discord';
$lang['settings_github'] = 'Configuración de Github';
$lang['settings_linkedin'] = 'Configuración de LinkedIn';
$lang['settings_microsoft'] = 'Configuración de Microsoft';

// --------------------------------------------------------------------
// Extra Users Settings & Common Lines:
$lang['allow_oauth'] = 'Inicio de sesión de terceros';
$lang['allow_oauth_tip'] = 'Permitir a los usuarios iniciar sesión con proveedores de terceros.';
$lang['allow_oauth_required'] = 'Es necesario activar el <a href="./users#allow_oauth">Inicio de sesión de terceros</a>.';

// --------------------------------------------------------------------
// Discord:
$lang['discord_auth'] = 'Iniciar sesión con Discord';
$lang['discord_auth_tip'] = ['Permitir a los usuarios iniciar sesión con <a href="https://discord.com/developers/applications" target="_blank" rel="noopener noreferrer">Discord</a>.', $lang['allow_oauth_required']];
$lang['discord_client_id'] = 'ID de Cliente';
$lang['discord_client_id_tip'] = 'Ingrese el ID de cliente de tu aplicación Discord.';
$lang['discord_client_secret'] = 'Clave Secreta';
$lang['discord_client_secret_tip'] = 'Ingrese la clave secreta de tu aplicación Discord.';

// --------------------------------------------------------------------
// Facebook:
$lang['facebook_app_secret'] = 'Clave Secreta';
$lang['facebook_app_secret_tip'] = 'Ingrese la clave secreta de tu aplicación Facebook.';
$lang['facebook_auth'] = 'Iniciar sesión con Facebook';
$lang['facebook_auth_tip'] = ['Permitir a los usuarios iniciar sesión con <a href="https://developers.facebook.com/apps/" target="_blank" rel="noopener noreferrer">Facebook</a>.', $lang['allow_oauth_required']];

// --------------------------------------------------------------------
// GitHub:
$lang['github_auth'] = 'Iniciar sesión con GitHub';
$lang['github_auth_tip'] = ['Permitir a los usuarios iniciar sesión con <a href="https://github.com/settings/developers" target="_blank" rel="noopener noreferrer">GitHub</a>.', $lang['allow_oauth_required']];
$lang['github_client_id'] = 'ID de Cliente';
$lang['github_client_id_tip'] = 'Ingrese el ID de cliente de tu aplicación GitHub.';
$lang['github_client_secret'] = 'Clave Secreta';
$lang['github_client_secret_tip'] = 'Ingrese la clave secreta de tu aplicación GitHub.';

// --------------------------------------------------------------------
// Google:
$lang['google_auth'] = 'Iniciar sesión con Google';
$lang['google_auth_tip'] = ['Permitir a los usuarios iniciar sesión con <a href="https://console.cloud.google.com/" target="_blank" rel="noopener noreferrer">Google</a>.', $lang['allow_oauth_required']];
$lang['google_client_id'] = 'ID de Cliente';
$lang['google_client_id_tip'] = 'Ingrese el ID de cliente de tu aplicación Google.';
$lang['google_client_secret'] = 'Clave Secreta';
$lang['google_client_secret_tip'] = 'Ingrese la clave secreta de tu aplicación Google.';

// --------------------------------------------------------------------
// LinkedIn:
$lang['linkedin_auth'] = 'Iniciar sesión con LinkedIn';
$lang['linkedin_auth_tip'] = ['Permitir a los usuarios iniciar sesión con <a href="https://www.linkedin.com/developers/apps" target="_blank" rel="noopener noreferrer">LinkedIn</a>.', $lang['allow_oauth_required']];
$lang['linkedin_client_id'] = 'ID de Cliente';
$lang['linkedin_client_id_tip'] = 'Ingrese el ID de cliente de tu aplicación LinkedIn.';
$lang['linkedin_client_secret'] = 'Clave Secreta';
$lang['linkedin_client_secret_tip'] = 'Ingrese la clave secreta de tu aplicación LinkedIn.';

// --------------------------------------------------------------------
// Microsoft:
$lang['microsoft_auth'] = 'Iniciar sesión con Microsoft';
$lang['microsoft_auth_tip'] = ['Permitir a los usuarios iniciar sesión con <a href="https://portal.azure.com/#blade/Microsoft_AAD_RegisteredApps" target="_blank" rel="noopener noreferrer">Microsoft</a>.', $lang['allow_oauth_required']];
$lang['microsoft_client_id'] = 'ID de Cliente';
$lang['microsoft_client_id_tip'] = 'Ingrese el ID de cliente de su aplicación Microsoft.';
$lang['microsoft_client_secret'] = 'Secreto de Cliente';
$lang['microsoft_client_secret_tip'] = 'Ingrese la clave secreta de su aplicación Microsoft.';
$lang['microsoft_tenant_id'] = 'ID del tenant (opcional)';
$lang['microsoft_tenant_id_tip'] = 'Restringe el inicio de sesión a un tenant específico de Microsoft (directorio Azure AD). Déjelo vacío para permitir cuentas personales de Microsoft y todos los tenants de Azure AD.';
