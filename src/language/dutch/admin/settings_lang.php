<?php

/**
 * OAuth Plugin - Settings Language File (Dutch)
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
$lang['settings_discord'] = 'Discord-instellingen';
$lang['settings_github'] = 'GitHub-instellingen';
$lang['settings_linkedin'] = 'LinkedIn-instellingen';
$lang['settings_microsoft'] = 'Microsoft-instellingen';

// --------------------------------------------------------------------
// Extra Users Settings & Common Lines:
$lang['allow_oauth'] = 'Login via externe services';
$lang['allow_oauth_tip'] = 'Sta gebruikers toe om in te loggen met externe services.';
$lang['allow_oauth_required'] = 'Vereist dat <a href="./users#allow_oauth">Login via externe services</a> ingeschakeld is.';

// --------------------------------------------------------------------
// Discord:
$lang['discord_auth'] = 'Inloggen met Discord';
$lang['discord_auth_tip'] = ['Sta gebruikers toe om in te loggen met <a href="https://discord.com/developers/applications" target="_blank" rel="noopener noreferrer">Discord</a>.', $lang['allow_oauth_required']];
$lang['discord_client_id'] = 'Client-ID';
$lang['discord_client_id_tip'] = 'Voer uw Discord applicatie client-ID in.';
$lang['discord_client_secret'] = 'Client-Secret';
$lang['discord_client_secret_tip'] = 'Voer uw Discord applicatie geheime sleutel in.';

// --------------------------------------------------------------------
// Facebook:
$lang['facebook_auth'] = 'Inloggen met Facebook';
$lang['facebook_auth_tip'] = ['Sta gebruikers toe om in te loggen met <a href="https://developers.facebook.com/apps/" target="_blank" rel="noopener noreferrer">Facebook</a>.', $lang['allow_oauth_required']];
$lang['facebook_app_secret'] = 'Client-Secret';
$lang['facebook_app_secret_tip'] = 'Voer uw Facebook applicatie geheime sleutel in.';

// --------------------------------------------------------------------
// GitHub:
$lang['github_auth'] = 'Inloggen met GitHub';
$lang['github_auth_tip'] = ['Sta gebruikers toe om in te loggen met <a href="https://github.com/settings/developers" target="_blank" rel="noopener noreferrer">GitHub</a>.', $lang['allow_oauth_required']];
$lang['github_client_id'] = 'Client-ID';
$lang['github_client_id_tip'] = 'Voer uw GitHub applicatie client-ID in.';
$lang['github_client_secret'] = 'Client-Secret';
$lang['github_client_secret_tip'] = 'Voer uw GitHub applicatie geheime sleutel in.';

// --------------------------------------------------------------------
// Google:
$lang['google_auth'] = 'Inloggen met Google';
$lang['google_auth_tip'] = ['Sta gebruikers toe om in te loggen met <a href="https://console.cloud.google.com/" target="_blank" rel="noopener noreferrer">Google</a>.', $lang['allow_oauth_required']];
$lang['google_client_id'] = 'Client-ID';
$lang['google_client_id_tip'] = 'Voer uw Google applicatie client-ID in.';
$lang['google_client_secret'] = 'Client-Secret';
$lang['google_client_secret_tip'] = 'Voer uw Google applicatie geheime sleutel in.';

// --------------------------------------------------------------------
// LinkedIn:
$lang['linkedin_auth'] = 'Inloggen met LinkedIn';
$lang['linkedin_auth_tip'] = ['Sta gebruikers toe om in te loggen met <a href="https://www.linkedin.com/developers/apps" target="_blank" rel="noopener noreferrer">LinkedIn</a>.', $lang['allow_oauth_required']];
$lang['linkedin_client_id'] = 'Client-ID';
$lang['linkedin_client_id_tip'] = 'Voer uw LinkedIn applicatie client-ID in.';
$lang['linkedin_client_secret'] = 'Client-Secret';
$lang['linkedin_client_secret_tip'] = 'Voer uw LinkedIn applicatie geheime sleutel in.';

// --------------------------------------------------------------------
// Microsoft:
$lang['microsoft_auth'] = 'Inloggen met Microsoft';
$lang['microsoft_auth_tip'] = ['Sta gebruikers toe om in te loggen met <a href="https://portal.azure.com/#blade/Microsoft_AAD_RegisteredApps" target="_blank" rel="noopener noreferrer">Microsoft</a>.', $lang['allow_oauth_required']];
$lang['microsoft_client_id'] = 'Client-ID';
$lang['microsoft_client_id_tip'] = 'Voer uw Microsoft applicatie client-ID in.';
$lang['microsoft_client_secret'] = 'Client-Secret';
$lang['microsoft_client_secret_tip'] = 'Voer uw Microsoft applicatie geheime sleutel in.';
$lang['microsoft_tenant_id'] = 'Tenant-ID (optioneel)';
$lang['microsoft_tenant_id_tip'] = 'Beperkt aanmelden tot een specifieke Microsoft-tenant (Azure AD-directory). Laat leeg om persoonlijke Microsoft-accounts en alle Azure AD-tenants toe te staan.';
