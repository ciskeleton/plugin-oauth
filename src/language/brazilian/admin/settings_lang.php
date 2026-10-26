<?php

/**
 * OAuth Plugin - Settings Language File (Brazilian Portuguese)
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
$lang['settings_discord'] = 'Configurações do Discord';
$lang['settings_github'] = 'Configurações do Github';
$lang['settings_linkedin'] = 'Configurações do Linkedin';
$lang['settings_microsoft'] = 'Configurações do Microsoft';

// --------------------------------------------------------------------
// Extra Users Settings & Common Lines:
$lang['allow_oauth'] = 'Permitir Login de Terceiros';
$lang['allow_oauth_tip'] = 'Permitir que usuários entrem com  provedores de terceiros.';
$lang['allow_oauth_required'] = 'É necessário ativar o <a href="./users#allow_oauth">Permitir Login de Terceiros</a>.';

// --------------------------------------------------------------------
// Discord:
$lang['discord_auth'] = 'Entrar com Discord';
$lang['discord_auth_tip'] = ['Permitir que usuários entrem com a href="https://discord.com/developers/applications" target="_blank" rel="noopener noreferrer">Discord</a>.', $lang['allow_oauth_required']];
$lang['discord_client_id'] = 'ID do Cliente';
$lang['discord_client_id_tip'] = 'Digite o ID do cliente do aplicativo Discord.';
$lang['discord_client_secret'] = 'Segredo do Cliente';
$lang['discord_client_secret_tip'] = 'Digite o segredo do cliente do aplicativo Discord.';

// --------------------------------------------------------------------
// Facebook:
$lang['facebook_auth'] = 'Entrar com Facebook';
$lang['facebook_auth_tip'] = ['Permitir que usuários entrem com a href="https://developers.facebook.com/apps/" target="_blank" rel="noopener noreferrer">Facebook</a>.', $lang['allow_oauth_required']];
$lang['facebook_app_secret'] = 'Segredo do Cliente';
$lang['facebook_app_secret_tip'] = 'Digite o segredo do cliente do aplicativo Facebook.';

// --------------------------------------------------------------------
// GitHub:
$lang['github_auth'] = 'Entrar com GitHub';
$lang['github_auth_tip'] = ['Permitir que usuários entrem com a href="https://github.com/settings/developers" target="_blank" rel="noopener noreferrer">GitHub</a>.', $lang['allow_oauth_required']];
$lang['github_client_id'] = 'ID do Cliente';
$lang['github_client_id_tip'] = 'Digite o ID do cliente do aplicativo GitHub.';
$lang['github_client_secret'] = 'Segredo do Cliente';
$lang['github_client_secret_tip'] = 'Digite o segredo do cliente do aplicativo GitHub.';

// --------------------------------------------------------------------
// Google:
$lang['google_auth'] = 'Entrar com Google';
$lang['google_auth_tip'] = ['Permitir que usuários entrem com a href="https://console.cloud.google.com/" target="_blank" rel="noopener noreferrer">Google</a>.', $lang['allow_oauth_required']];
$lang['google_client_id'] = 'ID do Cliente';
$lang['google_client_id_tip'] = 'Digite o ID do cliente do aplicativo Google.';
$lang['google_client_secret'] = 'Segredo do Cliente';
$lang['google_client_secret_tip'] = 'Digite o segredo do cliente do aplicativo Google.';

// --------------------------------------------------------------------
// LinkedIn:
$lang['linkedin_auth'] = 'Entrar com LinkedIn';
$lang['linkedin_auth_tip'] = ['Permitir que usuários entrem com a href="https://www.linkedin.com/developers/apps" target="_blank" rel="noopener noreferrer">LinkedIn</a>.', $lang['allow_oauth_required']];
$lang['linkedin_client_id'] = 'ID do Cliente';
$lang['linkedin_client_id_tip'] = 'Digite o ID do cliente do aplicativo LinkedIn.';
$lang['linkedin_client_secret'] = 'Segredo do Cliente';
$lang['linkedin_client_secret_tip'] = 'Digite o segredo do cliente do aplicativo LinkedIn.';

// --------------------------------------------------------------------
// Microsoft:
$lang['microsoft_auth'] = 'Entrar com Microsoft';
$lang['microsoft_auth_tip'] = ['Permitir que usuários entrem com <a href="https://portal.azure.com/#blade/Microsoft_AAD_RegisteredApps" target="_blank" rel="noopener noreferrer">Microsoft</a>.', $lang['allow_oauth_required']];
$lang['microsoft_client_id'] = 'ID do Cliente';
$lang['microsoft_client_id_tip'] = 'Digite o ID do cliente da sua aplicação Microsoft.';
$lang['microsoft_client_secret'] = 'Segredo do Cliente';
$lang['microsoft_client_secret_tip'] = 'Digite a chave secreta da sua aplicação Microsoft.';
$lang['microsoft_tenant_id'] = 'ID do Tenant (opcional)';
$lang['microsoft_tenant_id_tip'] = 'Restringe o login a um tenant específico da Microsoft (diretório do Azure AD). Deixe em branco para permitir contas pessoais da Microsoft e qualquer tenant do Azure AD.';
