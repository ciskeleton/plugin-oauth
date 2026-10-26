<?php

/**
 * OAuth Plugin - Settings Language File (French)
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
$lang['settings_discord'] = 'Paramètres Discord';
$lang['settings_github'] = 'Paramètres GitHub';
$lang['settings_linkedin'] = 'Paramètres LinkedIn';
$lang['settings_microsoft'] = 'Paramètres Microsoft';

// --------------------------------------------------------------------
// Extra Users Settings & Common Lines:
$lang['allow_oauth'] = 'Connexion via des tiers';
$lang['allow_oauth_tip'] = 'Autoriser les utilisateurs à se connecter avec des fournisseurs tiers.';
$lang['allow_oauth_required'] = 'Nécessite l’activation de la <a href="./users#allow_oauth">Connexion via des tiers</a>.';

// --------------------------------------------------------------------
// Discord:
$lang['discord_auth'] = 'Connexion avec Discord';
$lang['discord_auth_tip'] = ['Autoriser les utilisateurs à se connecter avec <a href="https://discord.com/developers/applications" target="_blank" rel="noopener noreferrer">Discord</a>.', $lang['allow_oauth_required']];
$lang['discord_client_id'] = 'ID Client';
$lang['discord_client_id_tip'] = 'Entrez l’ID client de votre application Discord.';
$lang['discord_client_secret'] = 'Clé Secrète';
$lang['discord_client_secret_tip'] = 'Entrez la clé secrète de votre application Discord.';

// --------------------------------------------------------------------
// Facebook:
$lang['facebook_auth'] = 'Connexion avec Facebook';
$lang['facebook_auth_tip'] = ['Autoriser les utilisateurs à se connecter avec <a href="https://developers.facebook.com/apps/" target="_blank" rel="noopener noreferrer">Facebook</a>.', $lang['allow_oauth_required']];
$lang['facebook_app_secret'] = 'Clé Secrète';
$lang['facebook_app_secret_tip'] = 'Entrez la clé secrète de votre application Facebook.';

// --------------------------------------------------------------------
// GitHub:
$lang['github_auth'] = 'Connexion avec GitHub';
$lang['github_auth_tip'] = ['Autoriser les utilisateurs à se connecter avec <a href="https://github.com/settings/developers" target="_blank" rel="noopener noreferrer">GitHub</a>.', $lang['allow_oauth_required']];
$lang['github_client_id'] = 'ID Client';
$lang['github_client_id_tip'] = 'Entrez l’ID client de votre application GitHub.';
$lang['github_client_secret'] = 'Clé Secrète';
$lang['github_client_secret_tip'] = 'Entrez la clé secrète de votre application GitHub.';

// --------------------------------------------------------------------
// Google:
$lang['google_auth'] = 'Connexion avec Google';
$lang['google_auth_tip'] = ['Autoriser les utilisateurs à se connecter avec <a href="https://console.cloud.google.com/" target="_blank" rel="noopener noreferrer">Google</a>.', $lang['allow_oauth_required']];
$lang['google_client_id'] = 'ID Client';
$lang['google_client_id_tip'] = 'Entrez l’ID client de votre application Google.';
$lang['google_client_secret'] = 'Clé Secrète';
$lang['google_client_secret_tip'] = 'Entrez la clé secrète de votre application Google.';

// --------------------------------------------------------------------
// LinkedIn:
$lang['linkedin_auth'] = 'Connexion avec LinkedIn';
$lang['linkedin_auth_tip'] = ['Autoriser les utilisateurs à se connecter avec <a href="https://www.linkedin.com/developers/apps" target="_blank" rel="noopener noreferrer">LinkedIn</a>.', $lang['allow_oauth_required']];
$lang['linkedin_client_id'] = 'ID Client';
$lang['linkedin_client_id_tip'] = 'Entrez l’ID client de votre application LinkedIn.';
$lang['linkedin_client_secret'] = 'Clé Secrète';
$lang['linkedin_client_secret_tip'] = 'Entrez la clé secrète de votre application LinkedIn.';

// --------------------------------------------------------------------
// Microsoft:
$lang['microsoft_auth'] = 'Connexion avec Microsoft';
$lang['microsoft_auth_tip'] = ['Autoriser les utilisateurs à se connecter avec <a href="https://portal.azure.com/#blade/Microsoft_AAD_RegisteredApps" target="_blank" rel="noopener noreferrer">Microsoft</a>.', $lang['allow_oauth_required']];
$lang['microsoft_client_id'] = 'ID Client';
$lang['microsoft_client_id_tip'] = 'Entrez l’ID client de votre application Microsoft.';
$lang['microsoft_client_secret'] = 'Clé Secrète';
$lang['microsoft_client_secret_tip'] = 'Entrez la clé secrète de votre application Microsoft.';
$lang['microsoft_tenant_id'] = 'ID du tenant (facultatif)';
$lang['microsoft_tenant_id_tip'] = 'Restreint la connexion à un tenant Microsoft spécifique (annuaire Azure AD). Laissez vide pour autoriser les comptes Microsoft personnels et tous les tenants Azure AD.';
