<?php

/**
 * OAuth Plugin - Settings Language File (Indonesian)
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
$lang['settings_discord'] = 'Pengaturan Discord';
$lang['settings_github'] = 'Pengaturan Github';
$lang['settings_linkedin'] = 'Pengaturan LinkedIn';
$lang['settings_microsoft'] = 'Pengaturan Microsoft';

// --------------------------------------------------------------------
// Extra Users Settings & Common Lines:
$lang['allow_oauth'] = 'Login Pihak Ketiga';
$lang['allow_oauth_tip'] = 'Izinkan pengguna untuk login dengan penyedia pihak ketiga.';
$lang['allow_oauth_required'] = 'Anda harus mengaktifkan <a href="./users#allow_oauth">Login Pihak Ketiga</a>.';

// --------------------------------------------------------------------
// Discord:
$lang['discord_auth'] = 'Masuk dengan Discord';
$lang['discord_auth_tip'] = ['Izinkan pengguna untuk masuk dengan <a href="https://discord.com/developers/applications" target="_blank" rel="noopener noreferrer">Discord</a>.', $lang['allow_oauth_required']];
$lang['discord_client_id'] = 'ID Klien';
$lang['discord_client_id_tip'] = 'Masukkan ID klien aplikasi Discord Anda.';
$lang['discord_client_secret'] = 'Kunci Rahasia';
$lang['discord_client_secret_tip'] = 'Masukkan kunci rahasia aplikasi Discord Anda.';

// --------------------------------------------------------------------
// Facebook:
$lang['facebook_auth'] = 'Masuk dengan Facebook';
$lang['facebook_auth_tip'] = ['Izinkan pengguna untuk masuk dengan <a href="https://developers.facebook.com/apps/" target="_blank" rel="noopener noreferrer">Facebook</a>.', $lang['allow_oauth_required']];
$lang['facebook_app_secret'] = 'Kunci Rahasia';
$lang['facebook_app_secret_tip'] = 'Masukkan kunci rahasia aplikasi Facebook Anda.';

// --------------------------------------------------------------------
// GitHub:
$lang['github_auth'] = 'Masuk dengan GitHub';
$lang['github_auth_tip'] = ['Izinkan pengguna untuk masuk dengan <a href="https://github.com/settings/developers" target="_blank" rel="noopener noreferrer">GitHub</a>.', $lang['allow_oauth_required']];
$lang['github_client_id'] = 'ID Klien';
$lang['github_client_id_tip'] = 'Masukkan ID klien aplikasi GitHub Anda.';
$lang['github_client_secret'] = 'Kunci Rahasia';
$lang['github_client_secret_tip'] = 'Masukkan kunci rahasia aplikasi GitHub Anda.';

// --------------------------------------------------------------------
// Google:
$lang['google_auth'] = 'Masuk dengan Google';
$lang['google_auth_tip'] = ['Izinkan pengguna untuk masuk dengan <a href="https://console.cloud.google.com/" target="_blank" rel="noopener noreferrer">Google</a>.', $lang['allow_oauth_required']];
$lang['google_client_id'] = 'ID Klien';
$lang['google_client_id_tip'] = 'Masukkan ID klien aplikasi Google Anda.';
$lang['google_client_secret'] = 'Kunci Rahasia';
$lang['google_client_secret_tip'] = 'Masukkan kunci rahasia aplikasi Google Anda.';

// --------------------------------------------------------------------
// LinkedIn:
$lang['linkedin_auth'] = 'Masuk dengan LinkedIn';
$lang['linkedin_auth_tip'] = ['Izinkan pengguna untuk masuk dengan <a href="https://www.linkedin.com/developers/apps" target="_blank" rel="noopener noreferrer">LinkedIn</a>.', $lang['allow_oauth_required']];
$lang['linkedin_client_id'] = 'ID Klien';
$lang['linkedin_client_id_tip'] = 'Masukkan ID klien aplikasi LinkedIn Anda.';
$lang['linkedin_client_secret'] = 'Kunci Rahasia';
$lang['linkedin_client_secret_tip'] = 'Masukkan kunci rahasia aplikasi LinkedIn Anda.';

// --------------------------------------------------------------------
// Microsoft:
$lang['microsoft_auth'] = 'Masuk dengan Microsoft';
$lang['microsoft_auth_tip'] = ['Izinkan pengguna untuk masuk dengan<a href="https://portal.azure.com/#blade/Microsoft_AAD_RegisteredApps" target="_blank" rel="noopener noreferrer">Microsoft</a>.', $lang['allow_oauth_required']];
$lang['microsoft_client_id'] = 'ID Klien';
$lang['microsoft_client_id_tip'] = 'Masukkan ID klien aplikasi Microsoft Anda.';
$lang['microsoft_client_secret'] = 'Rahasia Klien';
$lang['microsoft_client_secret_tip'] = 'Masukkan kunci rahasia aplikasi Microsoft Anda.';
$lang['microsoft_tenant_id'] = 'ID Tenant (opsional)';
$lang['microsoft_tenant_id_tip'] = 'Membatasi login ke tenant Microsoft tertentu (direktori Azure AD). Biarkan kosong untuk mengizinkan akun Microsoft pribadi dan semua tenant Azure AD.';
