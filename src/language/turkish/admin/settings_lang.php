<?php

/**
 * OAuth Plugin - Settings Language File (Turkish)
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
$lang['settings_discord'] = 'Discord Ayarları';
$lang['settings_github'] = 'GitHub Ayarları';
$lang['settings_linkedin'] = 'LinkedIn Ayarları';
$lang['settings_microsoft'] = 'Microsoft Ayarları';

// --------------------------------------------------------------------
// Extra Users Settings & Common Lines:
$lang['allow_oauth'] = 'Üçüncü Taraf Girişi';
$lang['allow_oauth_tip'] = 'Kullanıcıların üçüncü taraf sağlayıcılarıyla giriş yapmalarına izin ver.';
$lang['allow_oauth_required'] = '<a href="./users#allow_oauth">Üçüncü Taraf Girişi</a> özelliğinin etkinleştirilmesi gerekir.';

// --------------------------------------------------------------------
// Discord:
$lang['discord_auth'] = 'Discord ile Giriş Yap';
$lang['discord_auth_tip'] = ['<a href="https://discord.com/developers/applications" target="_blank" rel="noopener noreferrer">Discord</a> ile giriş yapmaya izin ver.', $lang['allow_oauth_required']];
$lang['discord_client_id'] = 'İstemci Kimliği';
$lang['discord_client_id_tip'] = 'Discord uygulamanızın istemci kimliğini girin.';
$lang['discord_client_secret'] = 'İstemci Şifresi';
$lang['discord_client_secret_tip'] = 'Discord uygulamanızın gizli anahtarını girin.';

// --------------------------------------------------------------------
// Facebook:
$lang['facebook_auth'] = 'Facebook ile giriş';
$lang['facebook_auth_tip'] = ['Kullanıcıların <a href="https://developers.facebook.com/apps/" target="_blank" rel="noopener noreferrer">Facebook</a> ile giriş yapmasına izin ver.', $lang['allow_oauth_required']];
$lang['facebook_app_secret'] = 'İstemci Şifresi';
$lang['facebook_app_secret_tip'] = 'Facebook uygulamanızın gizli anahtarını girin.';

// --------------------------------------------------------------------
// GitHub:
$lang['github_auth'] = 'GitHub ile Giriş Yap';
$lang['github_auth_tip'] = ['<a href="https://github.com/settings/developers" target="_blank" rel="noopener noreferrer">GitHub</a> ile kullanıcıların giriş yapmasına izin ver.', $lang['allow_oauth_required']];
$lang['github_client_id'] = 'İstemci Kimliği';
$lang['github_client_id_tip'] = 'GitHub uygulamanızın istemci kimliğini girin.';
$lang['github_client_secret'] = 'İstemci Şifresi';
$lang['github_client_secret_tip'] = 'GitHub uygulamanızın gizli anahtarını girin.';

// --------------------------------------------------------------------
// Google:
$lang['google_auth'] = 'Google ile Giriş Yap';
$lang['google_auth_tip'] = ['<a href="https://console.cloud.google.com/" target="_blank" rel="noopener noreferrer">Google</a> ile kullanıcıların giriş yapmasına izin ver.', $lang['allow_oauth_required']];
$lang['google_client_id'] = 'İstemci Kimliği';
$lang['google_client_id_tip'] = 'Google uygulamanızın istemci kimliğini girin.';
$lang['google_client_secret'] = 'İstemci Şifresi';
$lang['google_client_secret_tip'] = 'Google uygulamanızın gizli anahtarını girin.';

// --------------------------------------------------------------------
// LinkedIn:
$lang['linkedin_auth'] = 'LinkedIn ile Giriş Yap';
$lang['linkedin_auth_tip'] = ['<a href="https://www.linkedin.com/developers/apps" target="_blank" rel="noopener noreferrer">LinkedIn</a> ile kullanıcıların giriş yapmasına izin ver.', $lang['allow_oauth_required']];
$lang['linkedin_client_id'] = 'İstemci Kimliği';
$lang['linkedin_client_id_tip'] = 'LinkedIn uygulamanızın istemci kimliğini girin.';
$lang['linkedin_client_secret'] = 'İstemci Şifresi';
$lang['linkedin_client_secret_tip'] = 'LinkedIn uygulamanızın gizli anahtarını girin.';

// --------------------------------------------------------------------
// Microsoft:
$lang['microsoft_auth'] = 'Microsoft ile Giriş Yap';
$lang['microsoft_auth_tip'] = ['Kullanıcıların <a href="https://portal.azure.com/#blade/Microsoft_AAD_RegisteredApps" target="_blank" rel="noopener noreferrer">Microsoft</a> ile giriş yapmasına izin ver.', $lang['allow_oauth_required']];
$lang['microsoft_client_id'] = 'İstemci Kimliği';
$lang['microsoft_client_id_tip'] = 'Microsoft uygulamanızın istemci kimliğini girin.';
$lang['microsoft_client_secret'] = 'İstemci Gizli Anahtarı';
$lang['microsoft_client_secret_tip'] = 'Microsoft uygulamanızın gizli anahtarını girin.';
$lang['microsoft_tenant_id'] = 'Kiracı Kimliği (isteğe bağlı)';
$lang['microsoft_tenant_id_tip'] = 'Girişi belirli bir Microsoft kiracısı (Azure AD dizini) ile sınırlar. Kişisel Microsoft hesaplarını ve tüm Azure AD kiracılarını izin vermek için boş bırakın.';
