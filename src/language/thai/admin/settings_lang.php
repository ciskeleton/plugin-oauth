<?php

/**
 * OAuth Plugin - Settings Language File (Thai)
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
$lang['settings_discord'] = 'การตั้งค่า Discord';
$lang['settings_github'] = 'การตั้งค่า GitHub';
$lang['settings_linkedin'] = 'การตั้งค่า LinkedIn';
$lang['settings_microsoft'] = 'การตั้งค่า Microsoft';

// --------------------------------------------------------------------
// Extra Users Settings & Common Lines:
$lang['allow_oauth'] = 'เข้าสู่ระบบผ่านบุคคลที่สาม';
$lang['allow_oauth_tip'] = 'อนุญาตให้ผู้ใช้เข้าสู่ระบบด้วยบัญชีจากผู้ให้บริการอื่น';
$lang['allow_oauth_required'] = 'ต้องเปิดใช้งาน <a href="./users#allow_oauth">การเข้าสู่ระบบบุคคลที่สาม</a>';

// --------------------------------------------------------------------
// Discord:
$lang['discord_auth'] = 'เข้าสู่ระบบด้วย Discord';
$lang['discord_auth_tip'] = ['อนุญาตให้ผู้ใช้เข้าสู่ระบบด้วย <a href="https://discord.com/developers/applications" target="_blank" rel="noopener noreferrer">Discord</a>.', $lang['allow_oauth_required']];
$lang['discord_client_id'] = 'รหัสไคลเอนต์';
$lang['discord_client_id_tip'] = 'กรอกรหัสไคลเอนต์ของแอปพลิเคชัน Discord ของคุณ';
$lang['discord_client_secret'] = 'คีย์ลับไคลเอนต์';
$lang['discord_client_secret_tip'] = 'กรอกคีย์ลับของแอปพลิเคชัน Discord ของคุณ';

// --------------------------------------------------------------------
// Facebook:
$lang['facebook_auth'] = 'เข้าสู่ระบบด้วย Facebook';
$lang['facebook_auth_tip'] = ['อนุญาตให้ผู้ใช้เข้าสู่ระบบด้วย <a href="https://developers.facebook.com/apps/" target="_blank" rel="noopener noreferrer">Facebook</a>.', $lang['allow_oauth_required']];
$lang['facebook_app_secret'] = 'คีย์ลับไคลเอนต์';
$lang['facebook_app_secret_tip'] = 'กรอกคีย์ลับของแอปพลิเคชัน Facebook ของคุณ';

// --------------------------------------------------------------------
// GitHub:
$lang['github_auth'] = 'เข้าสู่ระบบด้วย GitHub';
$lang['github_auth_tip'] = ['อนุญาตให้ผู้ใช้เข้าสู่ระบบด้วย <a href="https://github.com/settings/developers" target="_blank" rel="noopener noreferrer">GitHub</a>.', $lang['allow_oauth_required']];
$lang['github_client_id'] = 'รหัสไคลเอนต์';
$lang['github_client_id_tip'] = 'กรอกรหัสไคลเอนต์ของแอปพลิเคชัน GitHub ของคุณ';
$lang['github_client_secret'] = 'คีย์ลับไคลเอนต์';
$lang['github_client_secret_tip'] = 'กรอกคีย์ลับของแอปพลิเคชัน GitHub ของคุณ';

// --------------------------------------------------------------------
// Google:
$lang['google_auth'] = 'เข้าสู่ระบบด้วย Google';
$lang['google_auth_tip'] = ['อนุญาตให้ผู้ใช้เข้าสู่ระบบด้วย <a href="https://console.cloud.google.com/" target="_blank" rel="noopener noreferrer">Google</a>.', $lang['allow_oauth_required']];
$lang['google_client_id'] = 'รหัสไคลเอนต์';
$lang['google_client_id_tip'] = 'กรอกรหัสไคลเอนต์ของแอปพลิเคชัน Google ของคุณ';
$lang['google_client_secret'] = 'คีย์ลับไคลเอนต์';
$lang['google_client_secret_tip'] = 'กรอกคีย์ลับของแอปพลิเคชัน Google ของคุณ';

// --------------------------------------------------------------------
// LinkedIn:
$lang['linkedin_auth'] = 'เข้าสู่ระบบด้วย LinkedIn';
$lang['linkedin_auth_tip'] = ['อนุญาตให้ผู้ใช้เข้าสู่ระบบด้วย <a href="https://www.linkedin.com/developers/apps" target="_blank" rel="noopener noreferrer">LinkedIn</a>.', $lang['allow_oauth_required']];
$lang['linkedin_client_id'] = 'รหัสไคลเอนต์';
$lang['linkedin_client_id_tip'] = 'กรอกรหัสไคลเอนต์ของแอปพลิเคชัน LinkedIn ของคุณ';
$lang['linkedin_client_secret'] = 'คีย์ลับไคลเอนต์';
$lang['linkedin_client_secret_tip'] = 'กรอกคีย์ลับของแอปพลิเคชัน LinkedIn ของคุณ';

// --------------------------------------------------------------------
// Microsoft:
$lang['microsoft_auth'] = 'เข้าสู่ระบบด้วย Microsoft';
$lang['microsoft_auth_tip'] = ['อนุญาตให้ผู้ใช้เข้าสู่ระบบด้วย <a href="https://portal.azure.com/#blade/Microsoft_AAD_RegisteredApps" target="_blank" rel="noopener noreferrer">Microsoft</a>.', $lang['allow_oauth_required']];
$lang['microsoft_client_id'] = 'รหัสไคลเอนต์';
$lang['microsoft_client_id_tip'] = 'กรอกรหัสไคลเอนต์ของแอปพลิเคชัน Microsoft ของคุณ';
$lang['microsoft_client_secret'] = 'คีย์ลับไคลเอนต์';
$lang['microsoft_client_secret_tip'] = 'กรอกคีย์ลับของแอปพลิเคชัน Microsoft ของคุณ';
$lang['microsoft_tenant_id'] = 'รหัสผู้เช่า (ไม่บังคับ)';
$lang['microsoft_tenant_id_tip'] = 'จำกัดการเข้าสู่ระบบเฉพาะผู้เช่า Microsoft ที่ระบุ (ไดเรกทอรี Azure AD) เว้นว่างไว้เพื่ออนุญาตบัญชี Microsoft ส่วนบุคคลและผู้เช่า Azure AD ทั้งหมด';
