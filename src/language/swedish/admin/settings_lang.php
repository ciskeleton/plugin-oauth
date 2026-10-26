<?php

/**
 * OAuth Plugin - Settings Language File (Swedish)
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
$lang['settings_discord'] = 'Discord-inställningar';
$lang['settings_github'] = 'GitHub-inställningar';
$lang['settings_linkedin'] = 'LinkedIn-inställningar';
$lang['settings_microsoft'] = 'Microsoft-inställningar';

// --------------------------------------------------------------------
// Extra Users Settings & Common Lines:
$lang['allow_oauth'] = 'Tredjepartsinloggning';
$lang['allow_oauth_tip'] = 'Tillåt användare att logga in med tredjepartsleverantörer.';
$lang['allow_oauth_required'] = 'Kräver att <a href="./users#allow_oauth">Tredjepartsinloggning</a> är aktiverat.';

// --------------------------------------------------------------------
// Discord:
$lang['discord_auth'] = 'Logga in med Discord';
$lang['discord_auth_tip'] = ['Tillåt användare att logga in med <a href="https://discord.com/developers/applications" target="_blank" rel="noopener noreferrer">Discord</a>.', $lang['allow_oauth_required']];
$lang['discord_client_id'] = 'Klient-ID';
$lang['discord_client_id_tip'] = 'Ange ditt Discord programs klient-ID.';
$lang['discord_client_secret'] = 'Klienthemlighet';
$lang['discord_client_secret_tip'] = 'Ange din Discord programs hemliga nyckel.';

// --------------------------------------------------------------------
// Facebook:
$lang['facebook_auth'] = 'Logga in med Facebook';
$lang['facebook_auth_tip'] = ['Tillåt användare att logga in med <a href="https://developers.facebook.com/apps/" target="_blank" rel="noopener noreferrer">Facebook</a>.', $lang['allow_oauth_required']];
$lang['facebook_app_secret'] = 'Klienthemlighet';
$lang['facebook_app_secret_tip'] = 'Ange din Facebook programs hemliga nyckel.';

// --------------------------------------------------------------------
// GitHub:
$lang['github_auth'] = 'Logga in med GitHub';
$lang['github_auth_tip'] = ['Tillåt användare att logga in med <a href="https://github.com/settings/developers" target="_blank" rel="noopener noreferrer">GitHub</a>.', $lang['allow_oauth_required']];
$lang['github_client_id'] = 'Klient-ID';
$lang['github_client_id_tip'] = 'Ange ditt GitHub programs klient-ID.';
$lang['github_client_secret'] = 'Klienthemlighet';
$lang['github_client_secret_tip'] = 'Ange din GitHub programs hemliga nyckel.';

// --------------------------------------------------------------------
// Google:
$lang['google_auth'] = 'Logga in med Google';
$lang['google_auth_tip'] = ['Tillåt användare att logga in med <a href="https://console.cloud.google.com/" target="_blank" rel="noopener noreferrer">Google</a>.', $lang['allow_oauth_required']];
$lang['google_client_id'] = 'Klient-ID';
$lang['google_client_id_tip'] = 'Ange ditt Google programs klient-ID.';
$lang['google_client_secret'] = 'Klienthemlighet';
$lang['google_client_secret_tip'] = 'Ange din Google programs hemliga nyckel.';

// --------------------------------------------------------------------
// LinkedIn:
$lang['linkedin_auth'] = 'Logga in med LinkedIn';
$lang['linkedin_auth_tip'] = ['Tillåt användare att logga in med <a href="https://www.linkedin.com/developers/apps" target="_blank" rel="noopener noreferrer">LinkedIn</a>.', $lang['allow_oauth_required']];
$lang['linkedin_client_id'] = 'Klient-ID';
$lang['linkedin_client_id_tip'] = 'Ange ditt LinkedIn programs klient-ID.';
$lang['linkedin_client_secret'] = 'Klienthemlighet';
$lang['linkedin_client_secret_tip'] = 'Ange din LinkedIn programs hemliga nyckel.';

// --------------------------------------------------------------------
// Microsoft:
$lang['microsoft_auth'] = 'Logga in med Microsoft';
$lang['microsoft_auth_tip'] = ['Tillåt användare att logga in med <a href="https://portal.azure.com/#blade/Microsoft_AAD_RegisteredApps" target="_blank" rel="noopener noreferrer">Microsoft</a>.', $lang['allow_oauth_required']];
$lang['microsoft_client_id'] = 'Klient-ID';
$lang['microsoft_client_id_tip'] = 'Ange ditt Microsoft programs klient-ID.';
$lang['microsoft_client_secret'] = 'Klient-hemlighet';
$lang['microsoft_client_secret_tip'] = 'Ange ditt Microsoft programs hemliga nyckel.';
$lang['microsoft_tenant_id'] = 'Tenant-ID (valfritt)';
$lang['microsoft_tenant_id_tip'] = 'Begränsar inloggning till en specifik Microsoft-tenant (Azure AD-katalog). Lämna tomt för att tillåta personliga Microsoft-konton och alla Azure AD-tenants.';
