<?php

/**
 * OAuth Plugin - Settings Language File (Hungarian)
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
$lang['settings_discord'] = 'Discord beállítások';
$lang['settings_github'] = 'GitHub beállítások';
$lang['settings_linkedin'] = 'LinkedIn beállítások';
$lang['settings_microsoft'] = 'Microsoft beállítások';

// --------------------------------------------------------------------
// Extra Users Settings & Common Lines:
$lang['allow_oauth'] = 'Harmadik feles bejelentkezés';
$lang['allow_oauth_tip'] = 'Engedélyezze a felhasználóknak a bejelentkezést harmadik feles szolgáltatókkal jelentkezzenek be.';
$lang['allow_oauth_required'] = 'Megköveteli a <a href="./users#allow_oauth">Harmadik feles bejelentkezés</a> engedélyezését.';

// --------------------------------------------------------------------
// Discord:
$lang['discord_auth'] = 'Bejelentkezés Discorddal';
$lang['discord_auth_tip'] = ['Engedélyezze a felhasználóknak a bejelentkezést <a href="https://discord.com/developers/applications" target="_blank" rel="noopener noreferrer">Discorddal</a> jelentkezzenek be.', $lang['allow_oauth_required']];
$lang['discord_client_id'] = 'Kliens ID';
$lang['discord_client_id_tip'] = 'Adja meg a Discord alkalmazás kliens ID-jét.';
$lang['discord_client_secret'] = 'Kliens titok';
$lang['discord_client_secret_tip'] = 'Adja meg a Discord alkalmazás titkos kulcsát.';

// --------------------------------------------------------------------
// Facebook:
$lang['facebook_auth'] = 'Bejelentkezés Facebookkal';
$lang['facebook_auth_tip'] = ['Engedélyezze a felhasználóknak a bejelentkezést <a href="https://developers.facebook.com/apps/" target="_blank" rel="noopener noreferrer">Facebookkal</a> jelentkezzenek be.', $lang['allow_oauth_required']];
$lang['facebook_app_secret'] = 'Kliens titok';
$lang['facebook_app_secret_tip'] = 'Adja meg a Facebook alkalmazás titkos kulcsát.';

// --------------------------------------------------------------------
// GitHub:
$lang['github_auth'] = 'Bejelentkezés GitHubbal';
$lang['github_auth_tip'] = ['Engedélyezze a felhasználóknak a bejelentkezést <a href="https://github.com/settings/developers" target="_blank" rel="noopener noreferrer">GitHubbal</a> jelentkezzenek be.', $lang['allow_oauth_required']];
$lang['github_client_id'] = 'Kliens ID';
$lang['github_client_id_tip'] = 'Adja meg a GitHub alkalmazás kliens ID-jét.';
$lang['github_client_secret'] = 'Kliens titok';
$lang['github_client_secret_tip'] = 'Adja meg a GitHub alkalmazás titkos kulcsát.';

// --------------------------------------------------------------------
// Google:
$lang['google_auth'] = 'Bejelentkezés Google-lal';
$lang['google_auth_tip'] = ['Engedélyezze a felhasználóknak a bejelentkezést <a href="https://console.cloud.google.com/" target="_blank" rel="noopener noreferrer">Google-lal</a> jelentkezzenek be.', $lang['allow_oauth_required']];
$lang['google_client_id'] = 'Kliens ID';
$lang['google_client_id_tip'] = 'Adja meg a Google alkalmazás kliens ID-jét.';
$lang['google_client_secret'] = 'Kliens titok';
$lang['google_client_secret_tip'] = 'Adja meg a Google alkalmazás titkos kulcsát.';

// --------------------------------------------------------------------
// LinkedIn:
$lang['linkedin_auth'] = 'Bejelentkezés LinkedInnel';
$lang['linkedin_auth_tip'] = ['Engedélyezze a felhasználóknak a bejelentkezést <a href="https://www.linkedin.com/developers/apps" target="_blank" rel="noopener noreferrer">LinkedInnel</a> jelentkezzenek be.', $lang['allow_oauth_required']];
$lang['linkedin_client_id'] = 'Kliens ID';
$lang['linkedin_client_id_tip'] = 'Adja meg a LinkedIn alkalmazás kliens ID-ját.';
$lang['linkedin_client_secret'] = 'Kliens titok';
$lang['linkedin_client_secret_tip'] = 'Adja meg a LinkedIn alkalmazás titkos kulcsát.';

// --------------------------------------------------------------------
// Microsoft:
$lang['microsoft_auth'] = 'Bejelentkezés Microsofttal';
$lang['microsoft_auth_tip'] = ['Engedélyezze a felhasználóknak a bejelentkezést <a href="https://portal.azure.com/#blade/Microsoft_AAD_RegisteredApps" target="_blank" rel="noopener noreferrer">Microsofttal</a>.', $lang['allow_oauth_required']];
$lang['microsoft_client_id'] = 'Kliens ID';
$lang['microsoft_client_id_tip'] = 'Adja meg a Microsoft alkalmazás kliens ID-ját.';
$lang['microsoft_client_secret'] = 'Kliens titok';
$lang['microsoft_client_secret_tip'] = 'Adja meg a Microsoft alkalmazás titkos kulcsát.';
$lang['microsoft_tenant_id'] = 'Bérlőazonosító (opcionális)';
$lang['microsoft_tenant_id_tip'] = 'A bejelentkezést egy adott Microsoft bérlőre (Azure AD címtár) korlátozza. Hagyja üresen a személyes Microsoft-fiókok és az összes Azure AD bérlő engedélyezéséhez.';
