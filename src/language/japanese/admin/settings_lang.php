<?php

/**
 * OAuth Plugin - Settings Language File (Japanese)
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
$lang['settings_discord'] = 'ディスコード設定';
$lang['settings_github'] = 'ギットハブ設定';
$lang['settings_linkedin'] = 'リンクトイン設定';
$lang['settings_microsoft'] = 'マイクロソフト設定';

// --------------------------------------------------------------------
// Extra Users Settings & Common Lines:
$lang['allow_oauth'] = 'サードパーティログイン';
$lang['allow_oauth_tip'] = 'ユーザーがサードパーティプロバイダでログインできるようにします。';
$lang['allow_oauth_required'] = '<a href="./users#allow_oauth">サードパーティログイン</a>を有効にする必要があります。';

// --------------------------------------------------------------------
// Discord:
$lang['discord_auth'] = 'ディスコードでログイン';
$lang['discord_auth_tip'] = ['<a href="https://discord.com/developers/applications" target="_blank" rel="noopener noreferrer">ディスコード</a>でユーザーがログインできるようにします。', $lang['allow_oauth_required']];
$lang['discord_client_id'] = 'クライアントID';
$lang['discord_client_id_tip'] = 'ディスコードアプリケーションのクライアントIDを入力してください。';
$lang['discord_client_secret'] = 'クライアントシークレット';
$lang['discord_client_secret_tip'] = 'ディスコードアプリケーションのクライアントシークレットを入力してください。';

// --------------------------------------------------------------------
// Facebook:
$lang['facebook_auth'] = 'フェイスブックでログイン';
$lang['facebook_auth_tip'] = ['<a href="https://developers.facebook.com/apps/" target="_blank" rel="noopener noreferrer">フェイスブック</a>でユーザーがログインできるようにします。', $lang['allow_oauth_required']];
$lang['facebook_app_secret'] = 'クライアントシークレット';
$lang['facebook_app_secret_tip'] = 'フェイスブックアプリケーションのクライアントシークレットを入力してください。';

// --------------------------------------------------------------------
// GitHub:
$lang['github_auth'] = 'ギットハブでログイン';
$lang['github_auth_tip'] = ['<a href="https://github.com/settings/developers" target="_blank" rel="noopener noreferrer">ギットハブ</a>でユーザーがログインできるようにします。', $lang['allow_oauth_required']];
$lang['github_client_id'] = 'クライアントID';
$lang['github_client_id_tip'] = 'ギットハブアプリケーションのクライアントIDを入力してください。';
$lang['github_client_secret'] = 'クライアントシークレット';
$lang['github_client_secret_tip'] = 'ギットハブアプリケーションのクライアントシークレットを入力してください。';

// --------------------------------------------------------------------
// Google:
$lang['google_auth'] = 'グーグルでログイン';
$lang['google_auth_tip'] = ['<a href="https://console.cloud.google.com/" target="_blank" rel="noopener noreferrer">グーグル</a>でユーザーがログインできるようにします。', $lang['allow_oauth_required']];
$lang['google_client_id'] = 'クライアントID';
$lang['google_client_id_tip'] = 'グーグルアプリケーションのクライアントIDを入力してください。';
$lang['google_client_secret'] = 'クライアントシークレット';
$lang['google_client_secret_tip'] = 'グーグルアプリケーションのクライアントシークレットを入力してください。';

// --------------------------------------------------------------------
// LinkedIn:
$lang['linkedin_auth'] = 'リンクトインでログイン';
$lang['linkedin_auth_tip'] = ['<a href="https://www.linkedin.com/developers/apps" target="_blank" rel="noopener noreferrer">リンクトイン</a>でユーザーがログインできるようにします。', $lang['allow_oauth_required']];
$lang['linkedin_client_id'] = 'クライアントID';
$lang['linkedin_client_id_tip'] = 'リンクトインアプリケーションのクライアントIDを入力してください。';
$lang['linkedin_client_secret'] = 'クライアントシークレット';
$lang['linkedin_client_secret_tip'] = 'リンクトインアプリケーションのクライアントシークレットを入力してください。';

// --------------------------------------------------------------------
// Microsoft:
$lang['microsoft_auth'] = 'マイクロソフトでログイン';
$lang['microsoft_auth_tip'] = ['<a href="https://portal.azure.com/#blade/Microsoft_AAD_RegisteredApps" target="_blank" rel="noopener noreferrer">マイクロソフト</a>でユーザーがログインできるようにします。', $lang['allow_oauth_required']];
$lang['microsoft_client_id'] = 'クライアントID';
$lang['microsoft_client_id_tip'] = 'マイクロソフトアプリケーションのクライアントIDを入力してください。';
$lang['microsoft_client_secret'] = 'クライアントシークレット';
$lang['microsoft_client_secret_tip'] = 'マイクロソフトアプリケーションのシークレットキーを入力してください。';
$lang['microsoft_tenant_id'] = 'テナント ID（任意）';
$lang['microsoft_tenant_id_tip'] = 'ログインを特定のマイクロソフトテナント（Azure AD ディレクトリ）に制限します。空欄にすると、個人用マイクロソフトアカウントおよびすべての Azure AD テナントが許可されます。';
