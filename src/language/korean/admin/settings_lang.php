<?php

/**
 * OAuth Plugin - Settings Language File (Korean)
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
$lang['settings_discord'] = '디스코드 설정';
$lang['settings_github'] = '깃허브 설정';
$lang['settings_linkedin'] = '링크드인 설정';
$lang['settings_microsoft'] = '마이크로소프트 설정';

// --------------------------------------------------------------------
// Extra Users Settings & Common Lines:
$lang['allow_oauth'] = '타사 으로 로그인';
$lang['allow_oauth_tip'] = '사용자가 타사 제공업체로 로그인할 수 있도록 허용합니다.';
$lang['allow_oauth_required'] = '<a href="./users#allow_oauth">타사 로그인</a>을 활성화해야 합니다.';

// --------------------------------------------------------------------
// Discord:
$lang['discord_auth'] = '디스코드 으로 로그인';
$lang['discord_auth_tip'] = ['사용자가 <a href="https://discord.com/developers/applications" target="_blank" rel="noopener noreferrer">디스코드</a>를 통해 로그인할 수 있도록 합니다.', $lang['allow_oauth_required']];
$lang['discord_client_id'] = '클라이언트 ID';
$lang['discord_client_id_tip'] = '디스코드 애플리케이션 클라이언트 ID를 입력하세요.';
$lang['discord_client_secret'] = '클라이언트 시크릿';
$lang['discord_client_secret_tip'] = '디스코드 애플리케이션 시크릿 키를 입력하세요.';

// --------------------------------------------------------------------
// Facebook:
$lang['facebook_auth'] = '페이스북 으로 로그인';
$lang['facebook_auth_tip'] = ['사용자가 <a href="https://developers.facebook.com/apps/" target="_blank" rel="noopener noreferrer">페이스북</a>를 통해 로그인할 수 있도록 합니다.', $lang['allow_oauth_required']];
$lang['facebook_app_secret'] = '클라이언트 시크릿';
$lang['facebook_app_secret_tip'] = '페이스북 애플리케이션 시크릿 키를 입력하세요.';

// --------------------------------------------------------------------
// GitHub:
$lang['github_auth'] = '깃허브 으로 로그인';
$lang['github_auth_tip'] = ['사용자가 <a href="https://github.com/settings/developers" target="_blank" rel="noopener noreferrer">깃허브</a>를 통해 로그인할 수 있도록 합니다.', $lang['allow_oauth_required']];
$lang['github_client_id'] = '클라이언트 ID';
$lang['github_client_id_tip'] = '깃허브 애플리케이션 클라이언트 ID를 입력하세요.';
$lang['github_client_secret'] = '클라이언트 시크릿';
$lang['github_client_secret_tip'] = '깃허브 애플리케이션 시크릿 키를 입력하세요.';

// --------------------------------------------------------------------
// Google:
$lang['google_auth'] = '구글 으로 로그인';
$lang['google_auth_tip'] = ['사용자가 <a href="https://console.cloud.google.com/" target="_blank" rel="noopener noreferrer">구글</a>를 통해 로그인할 수 있도록 합니다.', $lang['allow_oauth_required']];
$lang['google_client_id'] = '클라이언트 ID';
$lang['google_client_id_tip'] = '구글 애플리케이션 클라이언트 ID를 입력하세요.';
$lang['google_client_secret'] = '클라이언트 시크릿';
$lang['google_client_secret_tip'] = '구글 애플리케이션 시크릿 키를 입력하세요.';

// --------------------------------------------------------------------
// LinkedIn:
$lang['linkedin_auth'] = '링크드인 으로 로그인';
$lang['linkedin_auth_tip'] = ['사용자가 <a href="https://www.linkedin.com/developers/apps" target="_blank" rel="noopener noreferrer">링크드인</a>를 통해 로그인할 수 있도록 합니다.', $lang['allow_oauth_required']];
$lang['linkedin_client_id'] = '클라이언트 ID';
$lang['linkedin_client_id_tip'] = '링크드인 애플리케이션 클라이언트 ID를 입력하세요.';
$lang['linkedin_client_secret'] = '클라이언트 시크릿';
$lang['linkedin_client_secret_tip'] = '링크드인 애플리케이션 시크릿 키를 입력하세요.';

// --------------------------------------------------------------------
// Microsoft:
$lang['microsoft_auth'] = '마이크로소프트 으로 으로 로그인';
$lang['microsoft_auth_tip'] = ['사용자가 <a href="https://portal.azure.com/#blade/Microsoft_AAD_RegisteredApps" target="_blank" rel="noopener noreferrer">마이크로소프트</a>를 통해 로그인할 수 있도록 합니다.', $lang['allow_oauth_required']];
$lang['microsoft_client_id'] = '클라이언트 ID';
$lang['microsoft_client_id_tip'] = '마이크로소프트 애플리케이션 클라이언트 ID를 입력하세요.';
$lang['microsoft_client_secret'] = '클라이언트 시크릿';
$lang['microsoft_client_secret_tip'] = '마이크로소프트 애플리케이션 비밀 키를 입력하세요.';
$lang['microsoft_tenant_id'] = '테넌트 ID (선택 사항)';
$lang['microsoft_tenant_id_tip'] = '로그인을 특정 마이크로소프트 테넌트(Azure AD 디렉터리)로 제한합니다. 비워 두면 개인 마이크로소프트 계정과 모든 Azure AD 테넌트가 허용됩니다.';
