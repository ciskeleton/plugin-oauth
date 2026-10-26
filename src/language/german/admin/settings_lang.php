<?php

/**
 * OAuth Plugin - Settings Language File (German)
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
$lang['settings_discord'] = 'Discord-Einstellungen';
$lang['settings_github'] = 'Github-Einstellungen';
$lang['settings_linkedin'] = 'LinkedIn-Einstellungen';
$lang['settings_microsoft'] = 'Microsoft-Einstellungen';

// --------------------------------------------------------------------
// Extra Users Settings & Common Lines:
$lang['allow_oauth'] = 'Anmeldung über Drittanbieter';
$lang['allow_oauth_tip'] = 'Erlauben Sie Benutzern, sich mit Drittanbieter-Anbietern anzumelden.';
$lang['allow_oauth_required'] = '<a href="./users#allow_oauth">Anmeldung über Drittanbieter</a> muss aktiviert sein.';

// --------------------------------------------------------------------
// Discord:
$lang['discord_auth'] = 'Mit Discord anmelden';
$lang['discord_auth_tip'] = ['Erlauben Sie Benutzern, sich mit <a href="https://discord.com/developers/applications" target="_blank" rel="noopener noreferrer">Discord</a> anzumelden.', $lang['allow_oauth_required']];
$lang['discord_client_id'] = 'Client-ID';
$lang['discord_client_id_tip'] = 'Geben Sie die Client-ID Ihrer Discord-Anwendung ein.';
$lang['discord_client_secret'] = 'Geheimschlüssel';
$lang['discord_client_secret_tip'] = 'Geben Sie den Geheimschlüssel Ihrer Discord-Anwendung ein.';

// --------------------------------------------------------------------
// Facebook:
$lang['facebook_auth'] = 'Mit Facebook anmelden';
$lang['facebook_auth_tip'] = ['Erlauben Sie Benutzern, sich mit <a href="https://developers.facebook.com/apps/" target="_blank" rel="noopener noreferrer">Facebook</a> anzumelden.', $lang['allow_oauth_required']];
$lang['facebook_app_secret'] = 'Geheimschlüssel';
$lang['facebook_app_secret_tip'] = 'Geben Sie den Geheimschlüssel Ihrer Facebook-Anwendung ein.';

// --------------------------------------------------------------------
// GitHub:
$lang['github_auth'] = 'Mit GitHub anmelden';
$lang['github_auth_tip'] = ['Erlauben Sie Benutzern, sich mit <a href="https://github.com/settings/developers" target="_blank" rel="noopener noreferrer">GitHub</a> anzumelden.', $lang['allow_oauth_required']];
$lang['github_client_id'] = 'Client-ID';
$lang['github_client_id_tip'] = 'Geben Sie die Client-ID Ihrer GitHub-Anwendung ein.';
$lang['github_client_secret'] = 'Geheimschlüssel';
$lang['github_client_secret_tip'] = 'Geben Sie den Geheimschlüssel Ihrer GitHub-Anwendung ein.';

// --------------------------------------------------------------------
// Google:
$lang['google_auth'] = 'Mit Google anmelden';
$lang['google_auth_tip'] = ['Erlauben Sie Benutzern, sich mit <a href="https://console.cloud.google.com/" target="_blank" rel="noopener noreferrer">Google</a> anzumelden.', $lang['allow_oauth_required']];
$lang['google_client_id'] = 'Client-ID';
$lang['google_client_id_tip'] = 'Geben Sie die Client-ID Ihrer Google-Anwendung ein.';
$lang['google_client_secret'] = 'Geheimschlüssel';
$lang['google_client_secret_tip'] = 'Geben Sie den Geheimschlüssel Ihrer Google-Anwendung ein.';

// --------------------------------------------------------------------
// LinkedIn:
$lang['linkedin_auth'] = 'Mit LinkedIn anmelden';
$lang['linkedin_auth_tip'] = ['Erlauben Sie Benutzern, sich mit <a href="https://www.linkedin.com/developers/apps" target="_blank" rel="noopener noreferrer">LinkedIn</a> anzumelden.', $lang['allow_oauth_required']];
$lang['linkedin_client_id'] = 'Client-ID';
$lang['linkedin_client_id_tip'] = 'Geben Sie die Client-ID Ihrer LinkedIn-Anwendung ein.';
$lang['linkedin_client_secret'] = 'Geheimschlüssel';
$lang['linkedin_client_secret_tip'] = 'Geben Sie den Geheimschlüssel Ihrer LinkedIn-Anwendung ein.';

// --------------------------------------------------------------------
// Microsoft:
$lang['microsoft_auth'] = 'Mit Microsoft anmelden';
$lang['microsoft_auth_tip'] = ['Erlauben Sie Benutzern, sich mit <a href="https://portal.azure.com/#blade/Microsoft_AAD_RegisteredApps" target="_blank" rel="noopener noreferrer">Microsoft</a> anzumelden.', $lang['allow_oauth_required']];
$lang['microsoft_client_id'] = 'Client-ID';
$lang['microsoft_client_id_tip'] = 'Geben Sie die Client-ID Ihrer Microsoft-Anwendung ein.';
$lang['microsoft_client_secret'] = 'Client-Secret';
$lang['microsoft_client_secret_tip'] = 'Geben Sie den geheimen Schlüssel Ihrer Microsoft-Anwendung ein.';
$lang['microsoft_tenant_id'] = 'Mandanten-ID (optional)';
$lang['microsoft_tenant_id_tip'] = 'Beschränkt die Anmeldung auf einen bestimmten Microsoft-Mandanten (Azure AD-Verzeichnis). Leer lassen, um persönliche Microsoft-Konten und alle Azure AD-Mandanten zuzulassen.';
