<?php

/**
 * OAuth Plugin - Settings Language File (Ukrainian)
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
$lang['settings_discord'] = 'Налаштування Discord';
$lang['settings_github'] = 'Налаштування GitHub';
$lang['settings_linkedin'] = 'Налаштування LinkedIn';
$lang['settings_microsoft'] = 'Microsoft Settings';

// --------------------------------------------------------------------
// Extra Users Settings & Common Lines:
$lang['allow_oauth'] = 'Вхід через треті сторони';
$lang['allow_oauth_tip'] = 'Дозволити користувачам входити через постачальників третіх сторін.';
$lang['allow_oauth_required'] = 'Вимагає увімкнення <a href="./users#allow_oauth">Входу через треті сторони</a>.';

// --------------------------------------------------------------------
// Discord:
$lang['discord_auth'] = 'Вхід через Discord';
$lang['discord_auth_tip'] = ['Дозволити користувачам входити через <a href="https://discord.com/developers/applications" target="_blank" rel="noopener noreferrer">Discord</a>.', $lang['allow_oauth_required']];
$lang['discord_client_id'] = 'ID клієнта';
$lang['discord_client_id_tip'] = 'Введіть ID клієнта вашої програми Discord.';
$lang['discord_client_secret'] = 'Секрет клієнта';
$lang['discord_client_secret_tip'] = 'Введіть секретний ключ вашої програми Discord.';

// --------------------------------------------------------------------
// Facebook:
$lang['facebook_auth'] = 'Вхід через Facebook';
$lang['facebook_auth_tip'] = ['Дозволити користувачам входити через <a href="https://developers.facebook.com/apps/" target="_blank" rel="noopener noreferrer">Facebook</a>.', $lang['allow_oauth_required']];
$lang['facebook_app_secret'] = 'Секрет клієнта';
$lang['facebook_app_secret_tip'] = 'Введіть секретний ключ вашої програми Facebook.';

// --------------------------------------------------------------------
// GitHub:
$lang['github_auth'] = 'Вхід через GitHub';
$lang['github_auth_tip'] = ['Дозволити користувачам входити через <a href="https://github.com/settings/developers" target="_blank" rel="noopener noreferrer">GitHub</a>.', $lang['allow_oauth_required']];
$lang['github_client_id'] = 'ID клієнта';
$lang['github_client_id_tip'] = 'Введіть ID клієнта вашої програми GitHub.';
$lang['github_client_secret'] = 'Секрет клієнта';
$lang['github_client_secret_tip'] = 'Введіть секретний ключ вашої програми GitHub.';

// --------------------------------------------------------------------
// Google:
$lang['google_auth'] = 'Вхід через Google';
$lang['google_auth_tip'] = ['Дозволити користувачам входити через <a href="https://console.cloud.google.com/" target="_blank" rel="noopener noreferrer">Google</a>.', $lang['allow_oauth_required']];
$lang['google_client_id'] = 'ID клієнта';
$lang['google_client_id_tip'] = 'Введіть ID клієнта вашої програми Google.';
$lang['google_client_secret'] = 'Секрет клієнта';
$lang['google_client_secret_tip'] = 'Введіть секретний ключ вашої програми Google.';

// --------------------------------------------------------------------
// LinkedIn:
$lang['linkedin_auth'] = 'Вхід через LinkedIn';
$lang['linkedin_auth_tip'] = ['Дозволити користувачам входити через <a href="https://www.linkedin.com/developers/apps" target="_blank" rel="noopener noreferrer">LinkedIn</a>.', $lang['allow_oauth_required']];
$lang['linkedin_client_id'] = 'ID клієнта';
$lang['linkedin_client_id_tip'] = 'Введіть ID клієнта вашої програми LinkedIn.';
$lang['linkedin_client_secret'] = 'Секрет клієнта';
$lang['linkedin_client_secret_tip'] = 'Введіть секретний ключ вашої програми LinkedIn.';

// --------------------------------------------------------------------
// Microsoft:
$lang['microsoft_auth'] = 'Вхід через Microsoft';
$lang['microsoft_auth_tip'] = ['Дозволити користувачам входити через <a href="https://portal.azure.com/#blade/Microsoft_AAD_RegisteredApps" target="_blank" rel="noopener noreferrer">Microsoft</a>.', $lang['allow_oauth_required']];
$lang['microsoft_client_id'] = 'ID клієнта';
$lang['microsoft_client_id_tip'] = 'Введіть ID клієнта вашої програми Microsoft.';
$lang['microsoft_client_secret'] = 'Секрет клієнта';
$lang['microsoft_client_secret_tip'] = 'Введіть секретний ключ вашої програми Microsoft.';
$lang['microsoft_tenant_id'] = 'Ідентифікатор орендаря (необов’язково)';
$lang['microsoft_tenant_id_tip'] = 'Обмежує вхід до певного орендаря Microsoft (каталог Azure AD). Залиште порожнім, щоб дозволити особисті облікові записи Microsoft та всіх орендарів Azure AD.';
