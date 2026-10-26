<?php

/**
 * OAuth Plugin - Settings Language File (Arabic)
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
$lang['settings_discord'] = 'إعدادات ديسكورد';
$lang['settings_github'] = 'إعدادات جت هاب';
$lang['settings_linkedin'] = 'إعدادات لينكد إن';
$lang['settings_microsoft'] = 'إعدادات مايكروسوفت';

// --------------------------------------------------------------------
// Extra Users Settings & Common Lines:
$lang['allow_oauth'] = 'تسجيل الدخول عبر أطراف خارجية';
$lang['allow_oauth_tip'] = 'السماح للمستخدمين بتسجيل الدخول عبر أطراف خارجية.';
$lang['allow_oauth_required'] = 'يتطلب تفعيل <a href="./users#allow_oauth">تسجيل الدخول عبر أطراف خارجية</a>.';

// --------------------------------------------------------------------
// Discord:
$lang['discord_auth'] = 'تسجيل الدخول عبر ديسكورد';
$lang['discord_auth_tip'] = ['السماح للمستخدمين بتسجيل الدخول عبر <a href="https://discord.com/developers/applications" target="_blank" rel="noopener noreferrer">ديسكورد</a>.', $lang['allow_oauth_required']];
$lang['discord_client_id'] = 'معرف العميل';
$lang['discord_client_id_tip'] = 'أدخل معرف العميل لتطبيق ديسكورد.';
$lang['discord_client_secret'] = 'الرمز السري';
$lang['discord_client_secret_tip'] = 'أدخل الرمز السري لتطبيق ديسكورد.';

// --------------------------------------------------------------------
// Facebook:
$lang['facebook_auth'] = 'تسجيل الدخول عبر فيسبوك';
$lang['facebook_auth_tip'] = ['السماح للمستخدمين بتسجيل الدخول عبر <a href="https://developers.facebook.com/apps/" target="_blank" rel="noopener noreferrer">فيسبوك</a>.', $lang['allow_oauth_required']];
$lang['facebook_app_secret'] = 'الرمز السري';
$lang['facebook_app_secret_tip'] = 'أدخل الرمز السري لتطبيق فيسبوك.';

// --------------------------------------------------------------------
// GitHub:
$lang['github_auth'] = 'تسجيل الدخول عبر جيت هاب';
$lang['github_auth_tip'] = ['السماح للمستخدمين بتسجيل الدخول عبر <a href="https://github.com/settings/developers" target="_blank" rel="noopener noreferrer">جيت هاب</a>.', $lang['allow_oauth_required']];
$lang['github_client_id'] = 'معرف العميل';
$lang['github_client_id_tip'] = 'أدخل معرف العميل لتطبيق جيت هاب.';
$lang['github_client_secret'] = 'الرمز السري';
$lang['github_client_secret_tip'] = 'أدخل الرمز السري لتطبيق جيت هاب.';

// --------------------------------------------------------------------
// Google:
$lang['google_auth'] = 'تسجيل الدخول عبر جوجل';
$lang['google_auth_tip'] = ['السماح للمستخدمين بتسجيل الدخول عبر <a href="https://console.cloud.google.com/" target="_blank" rel="noopener noreferrer">جوجل</a>.', $lang['allow_oauth_required']];
$lang['google_client_id'] = 'معرف العميل';
$lang['google_client_id_tip'] = 'أدخل معرف العميل لتطبيق جوجل.';
$lang['google_client_secret'] = 'الرمز السري';
$lang['google_client_secret_tip'] = 'أدخل الرمز السري لتطبيق جوجل.';

// --------------------------------------------------------------------
// LinkedIn:
$lang['linkedin_auth'] = 'تسجيل الدخول عبر لينكدإن';
$lang['linkedin_auth_tip'] = ['السماح للمستخدمين بتسجيل الدخول عبر <a href="https://www.linkedin.com/developers/apps" target="_blank" rel="noopener noreferrer">لينكدإن</a>.', $lang['allow_oauth_required']];
$lang['linkedin_client_id'] = 'معرف العميل';
$lang['linkedin_client_id_tip'] = 'أدخل معرف العميل لتطبيق لينكدإن.';
$lang['linkedin_client_secret'] = 'الرمز السري';
$lang['linkedin_client_secret_tip'] = 'أدخل الرمز السري لتطبيق لينكدإن.';

// --------------------------------------------------------------------
// Microsoft:
$lang['microsoft_auth'] = 'تسجيل الدخول عبر مايكروسوفت';
$lang['microsoft_auth_tip'] = ['اسمح للمستخدمين بتسجيل الدخول باستخدام <a href="https://portal.azure.com/#blade/Microsoft_AAD_RegisteredApps" target="_blank" rel="noopener noreferrer">مايكروسوفت</a>.', $lang['allow_oauth_required']];
$lang['microsoft_client_id'] = 'معرف العميل';
$lang['microsoft_client_id_tip'] = 'أدخل معرف العميل لتطبيق مايكروسوفت.';
$lang['microsoft_client_secret'] = 'الرمز السري';
$lang['microsoft_client_secret_tip'] = 'أدخل الرمز السري لتطبيق مايكروسوفت.';
$lang['microsoft_tenant_id'] = 'معرّف المستأجر (اختياري)';
$lang['microsoft_tenant_id_tip'] = 'تقييد تسجيل الدخول إلى مستأجر مايكروسوفت محدد (دليل Azure AD). اتركه فارغًا للسماح بحسابات مايكروسوفت الشخصية وجميع مستأجري Azure AD.';
