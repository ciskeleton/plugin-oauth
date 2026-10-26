<?php

/**
 * OAuth Plugin - Settings Language File (Italian)
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
$lang['settings_discord'] = 'Impostazioni Discord';
$lang['settings_github'] = 'Impostazioni Github';
$lang['settings_linkedin'] = 'Impostazioni LinkedIn';
$lang['settings_microsoft'] = 'Impostazioni Microsoft';

// --------------------------------------------------------------------
// Extra Users Settings & Common Lines:
$lang['allow_oauth'] = 'Accesso tramite terze parti';
$lang['allow_oauth_tip'] = 'Consenti agli utenti di accedere con fornitori di terze parti.';
$lang['allow_oauth_required'] = 'È necessario abilitare l’<a href="./users#allow_oauth">Accesso tramite terze parti</a>.';

// --------------------------------------------------------------------
// Discord:
$lang['discord_auth'] = 'Accedi con Discord';
$lang['discord_auth_tip'] = ['Consenti agli utenti di accedere con <a href="https://discord.com/developers/applications" target="_blank" rel="noopener noreferrer">Discord</a>.', $lang['allow_oauth_required']];
$lang['discord_client_id'] = 'ID Cliente';
$lang['discord_client_id_tip'] = 'Inserisci l’ID client della tua applicazione Discord.';
$lang['discord_client_secret'] = 'Chiave Segreta';
$lang['discord_client_secret_tip'] = 'Inserisci la chiave segreta della tua applicazione Discord.';

// --------------------------------------------------------------------
// Facebook:
$lang['facebook_auth'] = 'Accedi con Facebook';
$lang['facebook_auth_tip'] = ['Consenti agli utenti di accedere con <a href="https://developers.facebook.com/apps/" target="_blank" rel="noopener noreferrer">Facebook</a>.', $lang['allow_oauth_required']];
$lang['facebook_app_secret'] = 'Chiave Segreta';
$lang['facebook_app_secret_tip'] = 'Inserisci la chiave segreta della tua applicazione Facebook.';

// --------------------------------------------------------------------
// GitHub:
$lang['github_auth'] = 'Accedi con GitHub';
$lang['github_auth_tip'] = ['Consenti agli utenti di accedere con <a href="https://github.com/settings/developers" target="_blank" rel="noopener noreferrer">GitHub</a>.', $lang['allow_oauth_required']];
$lang['github_client_id'] = 'ID Cliente';
$lang['github_client_id_tip'] = 'Inserisci l’ID client della tua applicazione GitHub.';
$lang['github_client_secret'] = 'Chiave Segreta';
$lang['github_client_secret_tip'] = 'Inserisci la chiave segreta della tua applicazione GitHub.';

// --------------------------------------------------------------------
// Google:
$lang['google_auth'] = 'Accedi con Google';
$lang['google_auth_tip'] = ['Consenti agli utenti di accedere con <a href="https://console.cloud.google.com/" target="_blank" rel="noopener noreferrer">Google</a>.', $lang['allow_oauth_required']];
$lang['google_client_id'] = 'ID Cliente';
$lang['google_client_id_tip'] = 'Inserisci l’ID client della tua applicazione Google.';
$lang['google_client_secret'] = 'Chiave Segreta';
$lang['google_client_secret_tip'] = 'Inserisci la chiave segreta della tua applicazione Google.';

// --------------------------------------------------------------------
// LinkedIn:
$lang['linkedin_auth'] = 'Accedi con LinkedIn';
$lang['linkedin_auth_tip'] = ['Consenti agli utenti di accedere con <a href="https://www.linkedin.com/developers/apps" target="_blank" rel="noopener noreferrer">LinkedIn</a>.', $lang['allow_oauth_required']];
$lang['linkedin_client_id'] = 'ID Cliente';
$lang['linkedin_client_id_tip'] = 'Inserisci l’ID client della tua applicazione LinkedIn.';
$lang['linkedin_client_secret'] = 'Chiave Segreta';
$lang['linkedin_client_secret_tip'] = 'Inserisci la chiave segreta della tua applicazione LinkedIn.';

// --------------------------------------------------------------------
// Microsoft:
$lang['microsoft_auth'] = 'Accedi con Microsoft';
$lang['microsoft_auth_tip'] = ['Consenti agli utenti di accedere con <a href="https://portal.azure.com/#blade/Microsoft_AAD_RegisteredApps" target="_blank" rel="noopener noreferrer">Microsoft</a>.', $lang['allow_oauth_required']];
$lang['microsoft_client_id'] = 'ID Cliente';
$lang['microsoft_client_id_tip'] = 'Inserisci l’ID client della tua applicazione Microsoft.';
$lang['microsoft_client_secret'] = 'Chiave Segreta';
$lang['microsoft_client_secret_tip'] = 'Inserisci la chiave segreta della tua applicazione Microsoft.';
$lang['microsoft_tenant_id'] = 'ID tenant (opzionale)';
$lang['microsoft_tenant_id_tip'] = 'Limita l’accesso a uno specifico tenant Microsoft (directory Azure AD). Lascia vuoto per consentire account Microsoft personali e tutti i tenant Azure AD.';
