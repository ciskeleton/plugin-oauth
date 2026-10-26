<?php

/**
 * OAuth Plugin - Settings Language File (Bulgarian)
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
$lang['settings_discord'] = 'Настройки на Discord';
$lang['settings_github'] = 'Настройки на GitHub';
$lang['settings_linkedin'] = 'Настройки на LinkedIn';
$lang['settings_microsoft'] = 'Настройки на Microsoft';

// --------------------------------------------------------------------
// Extra Users Settings & Common Lines:
$lang['allow_oauth'] = 'Вход чрез трети страни';
$lang['allow_oauth_tip'] = 'Позволете на потребителите да влизат с външни доставчици.';
$lang['allow_oauth_required'] = 'Необходимо е да бъде активиран <a href="./users#allow_oauth">Вход чрез трети страни</a>.';

// --------------------------------------------------------------------
// Discord:
$lang['discord_auth'] = 'Вход с Discord';
$lang['discord_auth_tip'] = ['Позволете на потребителите да влизат с <a href="https://discord.com/developers/applications" target="_blank" rel="noopener noreferrer">Discord</a>.', $lang['allow_oauth_required']];
$lang['discord_client_id'] = 'ID на клиента';
$lang['discord_client_id_tip'] = 'Въведете ID на клиента на вашето Discord приложение.';
$lang['discord_client_secret'] = 'Таен ключ на клиента';
$lang['discord_client_secret_tip'] = 'Въведете таен ключ на вашето Discord приложение.';

// --------------------------------------------------------------------
// Facebook:
$lang['facebook_auth'] = 'Вход с Facebook';
$lang['facebook_auth_tip'] = ['Позволете на потребителите да влизат с <a href="https://developers.facebook.com/apps/" target="_blank" rel="noopener noreferrer">Facebook</a>.', $lang['allow_oauth_required']];
$lang['facebook_app_secret'] = 'Таен ключ на клиента';
$lang['facebook_app_secret_tip'] = 'Въведете таен ключ на вашето Facebook приложение.';

// --------------------------------------------------------------------
// GitHub:
$lang['github_auth'] = 'Вход с GitHub';
$lang['github_auth_tip'] = ['Позволете на потребителите да влизат с <a href="https://github.com/settings/developers" target="_blank" rel="noopener noreferrer">GitHub</a>.', $lang['allow_oauth_required']];
$lang['github_client_id'] = 'ID на клиента';
$lang['github_client_id_tip'] = 'Въведете ID на клиента на вашето GitHub приложение.';
$lang['github_client_secret'] = 'Таен ключ на клиента';
$lang['github_client_secret_tip'] = 'Въведете таен ключ на вашето GitHub приложение.';

// --------------------------------------------------------------------
// Google:
$lang['google_auth'] = 'Вход с Google';
$lang['google_auth_tip'] = ['Позволете на потребителите да влизат с <a href="https://console.cloud.google.com/" target="_blank" rel="noopener noreferrer">Google</a>.', $lang['allow_oauth_required']];
$lang['google_client_id'] = 'ID на клиента';
$lang['google_client_id_tip'] = 'Въведете ID на клиента на вашето Google приложение.';
$lang['google_client_secret'] = 'Таен ключ на клиента';
$lang['google_client_secret_tip'] = 'Въведете таен ключ на вашето Google приложение.';

// --------------------------------------------------------------------
// LinkedIn:
$lang['linkedin_auth'] = 'Вход с LinkedIn';
$lang['linkedin_auth_tip'] = ['Позволете на потребителите да влизат с <a href="https://www.linkedin.com/developers/apps" target="_blank" rel="noopener noreferrer">LinkedIn</a>.', $lang['allow_oauth_required']];
$lang['linkedin_client_id'] = 'ID на клиента';
$lang['linkedin_client_id_tip'] = 'Въведете ID на клиента на вашето LinkedIn приложение.';
$lang['linkedin_client_secret'] = 'Таен ключ на клиента';
$lang['linkedin_client_secret_tip'] = 'Въведете таен ключ на вашето LinkedIn приложение.';

// --------------------------------------------------------------------
// Microsoft:
$lang['microsoft_auth'] = 'Вход с Microsoft';
$lang['microsoft_auth_tip'] = ['Позволете на потребителите да влизат с <a href="https://portal.azure.com/#blade/Microsoft_AAD_RegisteredApps" target="_blank" rel="noopener noreferrer">Microsoft</a>.', $lang['allow_oauth_required']];
$lang['microsoft_client_id'] = 'Идентификатор на клиента';
$lang['microsoft_client_id_tip'] = 'Въведете идентификатора на клиента на вашето Microsoft приложение.';
$lang['microsoft_client_secret'] = 'Таен ключ на клиента';
$lang['microsoft_client_secret_tip'] = 'Въведете тайния ключ на вашето Microsoft приложение.';
$lang['microsoft_tenant_id'] = 'Идентификатор на наемателя (по избор)';
$lang['microsoft_tenant_id_tip'] = 'Ограничава влизането до конкретен Microsoft наемател (директория Azure AD). Оставете празно, за да разрешите лични Microsoft акаунти и всички Azure AD наематели.';
