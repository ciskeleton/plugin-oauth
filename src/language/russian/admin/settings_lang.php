<?php

/**
 * OAuth Plugin - Settings Language File (Russian)
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
$lang['settings_discord'] = 'Настройки Дискорд';
$lang['settings_github'] = 'Настройки ГитХаб';
$lang['settings_linkedin'] = 'Настройки ЛинкедИн';
$lang['settings_microsoft'] = 'Настройки Майкрософт';

// --------------------------------------------------------------------
// Extra Users Settings & Common Lines:
$lang['allow_oauth'] = 'Авторизация через третьи лица';
$lang['allow_oauth_tip'] = 'Разрешить пользователям входить через сторонних провайдеров.';
$lang['allow_oauth_required'] = 'Требуется включить <a href="./users#allow_oauth">Авторизация через третьи лица</a>.';

// --------------------------------------------------------------------
// Discord:
$lang['discord_auth'] = 'Войти через Дискорд';
$lang['discord_auth_tip'] = ['Разрешить пользователям входить через <a href="https://discord.com/developers/applications" target="_blank" rel="noopener noreferrer">Дискорд</a>.', $lang['allow_oauth_required']];
$lang['discord_client_id'] = 'ID клиента';
$lang['discord_client_id_tip'] = 'Введите ID клиента вашего приложения Дискорд.';
$lang['discord_client_secret'] = 'Секретный ключ';
$lang['discord_client_secret_tip'] = 'Введите секретный ключ вашего приложения Дискорд.';

// --------------------------------------------------------------------
// Facebook:
$lang['facebook_auth'] = 'Войти через Фейсбук';
$lang['facebook_auth_tip'] = ['Разрешить пользователям входить через <a href="https://developers.facebook.com/apps/" target="_blank" rel="noopener noreferrer">Фейсбук</a>.', $lang['allow_oauth_required']];
$lang['facebook_app_secret'] = 'Секретный ключ';
$lang['facebook_app_secret_tip'] = 'Введите секретный ключ вашего приложения Фейсбук.';

// --------------------------------------------------------------------
// GitHub:
$lang['github_auth'] = 'Войти через ГитХаб';
$lang['github_auth_tip'] = ['Разрешить пользователям входить через <a href="https://github.com/settings/developers" target="_blank" rel="noopener noreferrer">ГитХаб</a>.', $lang['allow_oauth_required']];
$lang['github_client_id'] = 'ID клиента';
$lang['github_client_id_tip'] = 'Введите ID клиента вашего приложения ГитХаб.';
$lang['github_client_secret'] = 'Секретный ключ';
$lang['github_client_secret_tip'] = 'Введите секретный ключ вашего приложения ГитХаб.';

// --------------------------------------------------------------------
// Google:
$lang['google_auth'] = 'Войти через Гугл';
$lang['google_auth_tip'] = ['Разрешить пользователям входить через <a href="https://console.cloud.google.com/" target="_blank" rel="noopener noreferrer">Гугл</a>.', $lang['allow_oauth_required']];
$lang['google_client_id'] = 'ID клиента';
$lang['google_client_id_tip'] = 'Введите ID клиента вашего приложения Гугл.';
$lang['google_client_secret'] = 'Секретный ключ';
$lang['google_client_secret_tip'] = 'Введите секретный ключ вашего приложения Гугл.';

// --------------------------------------------------------------------
// LinkedIn:
$lang['linkedin_auth'] = 'Войти через ЛинкедИн';
$lang['linkedin_auth_tip'] = ['Разрешить пользователям входить через <a href="https://www.linkedin.com/developers/apps" target="_blank" rel="noopener noreferrer">ЛинкедИн</a>.', $lang['allow_oauth_required']];
$lang['linkedin_client_id'] = 'ID клиента';
$lang['linkedin_client_id_tip'] = 'Введите ID клиента вашего приложения ЛинкедИн.';
$lang['linkedin_client_secret'] = 'Секретный ключ';
$lang['linkedin_client_secret_tip'] = 'Введите секретный ключ вашего приложения ЛинкедИн.';

// --------------------------------------------------------------------
// Microsoft:
$lang['microsoft_auth'] = 'Войти через Майкрософт';
$lang['microsoft_auth_tip'] = ['Разрешить пользователям входить через <a href="https://portal.azure.com/#blade/Microsoft_AAD_RegisteredApps" target="_blank" rel="noopener noreferrer">Майкрософт</a>.', $lang['allow_oauth_required']];
$lang['microsoft_client_id'] = 'ID клиента';
$lang['microsoft_client_id_tip'] = 'Введите ID клиента вашего приложения Майкрософт.';
$lang['microsoft_client_secret'] = 'Секрет клиента';
$lang['microsoft_client_secret_tip'] = 'Введите секретный ключ вашего приложения Майкрософт.';
$lang['microsoft_tenant_id'] = 'Идентификатор арендатора (необязательно)';
$lang['microsoft_tenant_id_tip'] = 'Ограничивает вход конкретным арендатором Майкрософт (каталог Azure AD). Оставьте пустым, чтобы разрешить личные учетные записи Майкрософт и всех арендаторов Azure AD.';
