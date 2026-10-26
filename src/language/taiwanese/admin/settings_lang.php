<?php

/**
 * OAuth Plugin - Settings Language File (Traditional Chinese)
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
$lang['settings_discord'] = 'Discord 設定';
$lang['settings_github'] = 'GitHub 設定';
$lang['settings_linkedin'] = '領英設定';
$lang['settings_microsoft'] = '微軟設定';

// --------------------------------------------------------------------
// Extra Users Settings & Common Lines:
$lang['allow_oauth'] = '允許第三方登錄';
$lang['allow_oauth_tip'] = '允許用戶使用第三方提供者登錄。';
$lang['allow_oauth_required'] = '需要先啟用<a href="./users#allow_oauth">允許第三方登錄</a>。';

// --------------------------------------------------------------------
// Discord:
$lang['discord_auth'] = '使用 Discord 登錄';
$lang['discord_auth_tip'] = ['允許用戶使用 <a href="https://discord.com/developers/applications" target="_blank" rel="noopener noreferrer">Discord</a> 登錄。', $lang['allow_oauth_required']];
$lang['discord_client_id'] = '客戶端 ID';
$lang['discord_client_id_tip'] = '請輸入 Discord 應用程序的客戶端 ID。';
$lang['discord_client_secret'] = '客戶端密鑰';
$lang['discord_client_secret_tip'] = '請輸入 Discord 應用程序的客戶端密鑰。';

// --------------------------------------------------------------------
// Facebook:
$lang['facebook_auth'] = '使用臉書登錄';
$lang['facebook_auth_tip'] = ['允許用戶使用 <a href="https://developers.facebook.com/apps/" target="_blank" rel="noopener noreferrer">臉書</a> 登錄。', $lang['allow_oauth_required']];
$lang['facebook_app_secret'] = '客戶端密鑰';
$lang['facebook_app_secret_tip'] = '請輸入臉書應用程序的客戶端密鑰。';

// --------------------------------------------------------------------
// GitHub:
$lang['github_auth'] = '使用 GitHub 登錄';
$lang['github_auth_tip'] = ['允許用戶使用 <a href="https://github.com/settings/developers" target="_blank" rel="noopener noreferrer">GitHub</a> 登錄。', $lang['allow_oauth_required']];
$lang['github_client_id'] = '客戶端 ID';
$lang['github_client_id_tip'] = '請輸入 GitHub 應用程序的客戶端 ID。';
$lang['github_client_secret'] = '客戶端密鑰';
$lang['github_client_secret_tip'] = '請輸入 GitHub 應用程序的客戶端密鑰。';

// --------------------------------------------------------------------
// Google:
$lang['google_auth'] = '使用谷歌登錄';
$lang['google_auth_tip'] = ['允許用戶使用<a href="https://console.cloud.google.com/" target="_blank" rel="noopener noreferrer">谷歌</a> 登錄。', $lang['allow_oauth_required']];
$lang['google_client_id'] = '客戶端 ID';
$lang['google_client_id_tip'] = '請輸入谷歌應用程序的客戶端 ID。';
$lang['google_client_secret'] = '客戶端密鑰';
$lang['google_client_secret_tip'] = '請輸入谷歌應用程序的客戶端密鑰。';

// --------------------------------------------------------------------
// LinkedIn:
$lang['linkedin_auth'] = '使用領英登錄';
$lang['linkedin_auth_tip'] = ['允許用戶使用<a href="https://www.linkedin.com/developers/apps" target="_blank" rel="noopener noreferrer">領英</a>。', $lang['allow_oauth_required']];
$lang['linkedin_client_id'] = '客戶端 ID';
$lang['linkedin_client_id_tip'] = '請輸入領英應用程序的客戶端 ID。';
$lang['linkedin_client_secret'] = '客戶端密鑰';
$lang['linkedin_client_secret_tip'] = '請輸入領英應用程序的客戶端密鑰。';

// --------------------------------------------------------------------
// Microsoft:
$lang['microsoft_auth'] = '使用微軟登錄';
$lang['microsoft_auth_tip'] = ['允許使用者使用 <a href="https://portal.azure.com/#blade/Microsoft_AAD_RegisteredApps" target="_blank" rel="noopener noreferrer">微軟</a> 登錄。', $lang['allow_oauth_required']];
$lang['microsoft_client_id'] = '用戶端 ID';
$lang['microsoft_client_id_tip'] = '輸入您的微軟應用程式用戶端 ID。';
$lang['microsoft_client_secret'] = '用戶端密鑰';
$lang['microsoft_client_secret_tip'] = '輸入您的微軟應用程式密鑰。';
$lang['microsoft_tenant_id'] = '租用戶 ID（選用）';
$lang['microsoft_tenant_id_tip'] = '將登入限制為特定的微軟租用戶（Azure AD 目錄）。留空可允許個人微軟帳戶與所有 Azure AD 租用戶。';
