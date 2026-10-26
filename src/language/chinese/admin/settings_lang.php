<?php

/**
 * OAuth Plugin - Settings Language File (Simplified Chinese)
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
$lang['settings_discord'] = 'Discord 设置';
$lang['settings_github'] = 'GitHub 设置';
$lang['settings_linkedin'] = '领英设置';
$lang['settings_microsoft'] = '微软设置';

// --------------------------------------------------------------------
// Extra Users Settings & Common Lines:
$lang['allow_oauth'] = '允许第三方登录';
$lang['allow_oauth_tip'] = '允许用户使用第三方提供者登录。';
$lang['allow_oauth_required'] = '需要先启用<a href="./users#allow_oauth">允许第三方登录</a>。';

// --------------------------------------------------------------------
// Discord:
$lang['discord_auth'] = '使用 Discord 登录';
$lang['discord_auth_tip'] = ['允许用户使用 <a href="https://discord.com/developers/applications" target="_blank" rel="noopener noreferrer">Discord</a> 登录。', $lang['allow_oauth_required']];
$lang['discord_client_id'] = '客户端 ID';
$lang['discord_client_id_tip'] = '请输入 Discord 应用程序的客户端 ID。';
$lang['discord_client_secret'] = '客户端密钥';
$lang['discord_client_secret_tip'] = '请输入 Discord 应用程序的客户端密钥。';

// --------------------------------------------------------------------
// Facebook:
$lang['facebook_app_secret'] = '客户端密钥';
$lang['facebook_app_secret_tip'] = '请输入脸书应用程序的客户端密钥。';
$lang['facebook_auth'] = '使用脸书登录';
$lang['facebook_auth_tip'] = ['允许用户使用<a href="https://developers.facebook.com/apps/" target="_blank" rel="noopener noreferrer">脸书</a> 登录。', $lang['allow_oauth_required']];

// --------------------------------------------------------------------
// GitHub:
$lang['github_auth'] = '使用 GitHub 登录';
$lang['github_auth_tip'] = ['允许用户使用 <a href="https://github.com/settings/developers" target="_blank" rel="noopener noreferrer">GitHub</a> 登录。', $lang['allow_oauth_required']];
$lang['github_client_id'] = '客户端 ID';
$lang['github_client_id_tip'] = '请输入 GitHub 应用程序的客户端 ID。';
$lang['github_client_secret'] = '客户端密钥';
$lang['github_client_secret_tip'] = '请输入 GitHub 应用程序的客户端密钥。';

// --------------------------------------------------------------------
// Google:
$lang['google_auth'] = '使用谷歌登录';
$lang['google_auth_tip'] = ['允许用户使用<a href="https://console.cloud.google.com/" target="_blank" rel="noopener noreferrer">谷歌</a>登录。', $lang['allow_oauth_required']];
$lang['google_client_id'] = '客户端 ID';
$lang['google_client_id_tip'] = '请输入谷歌应用程序的客户端 ID。';
$lang['google_client_secret'] = '客户端密钥';
$lang['google_client_secret_tip'] = '请输入谷歌应用程序的客户端密钥。';

// --------------------------------------------------------------------
// LinkedIn:
$lang['linkedin_auth'] = '使用领英登录';
$lang['linkedin_auth_tip'] = ['允许用户使用<a href="https://www.linkedin.com/developers/apps" target="_blank" rel="noopener noreferrer">领英</a> 登录。', $lang['allow_oauth_required']];
$lang['linkedin_client_id'] = '客户端 ID';
$lang['linkedin_client_id_tip'] = '请输入领英应用程序的客户端 ID。';
$lang['linkedin_client_secret'] = '客户端密钥';
$lang['linkedin_client_secret_tip'] = '请输入领英应用程序的客户端密钥。';

// --------------------------------------------------------------------
// Microsoft:
$lang['microsoft_auth'] = '使用微软登录';
$lang['microsoft_auth_tip'] = ['允许用户使用 <a href="https://portal.azure.com/#blade/Microsoft_AAD_RegisteredApps" target="_blank" rel="noopener noreferrer">微软</a> 登录。', $lang['allow_oauth_required']];
$lang['microsoft_client_id'] = '客户端 ID';
$lang['microsoft_client_id_tip'] = '输入您的微软应用程序客户端 ID。';
$lang['microsoft_client_secret'] = '客户端密钥';
$lang['microsoft_client_secret_tip'] = '输入您的微软应用程序密钥。';
$lang['microsoft_tenant_id'] = '租户 ID（可选）';
$lang['microsoft_tenant_id_tip'] = '将登录限制为特定的微软租户（Azure AD 目录）。留空以允许个人微软帐户和所有 Azure AD 租户。';
