<?php

/**
 * OAuth Plugin - Settings Language File (Greek)
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
$lang['settings_discord'] = 'Ρυθμίσεις Discord';
$lang['settings_github'] = 'Ρυθμίσεις GitHub';
$lang['settings_linkedin'] = 'Ρυθμίσεις LinkedIn';
$lang['settings_microsoft'] = 'Ρυθμίσεις Microsoft';

// --------------------------------------------------------------------
// Extra Users Settings & Common Lines:
$lang['allow_oauth'] = 'Σύνδεση Τρίτων Μερών';
$lang['allow_oauth_tip'] = 'Επιτρέψτε στους χρήστες να συνδεθούν μέσω παρόχους τρίτων.';
$lang['allow_oauth_required'] = 'Απαιτείται η <a href="./users#allow_oauth">Σύνδεση Τρίτων Μερών</a> να είναι ενεργοποιημένη.';

// --------------------------------------------------------------------
// Discord:
$lang['discord_auth'] = 'Σύνδεση με Discord';
$lang['discord_auth_tip'] = ['Επιτρέψτε στους χρήστες να συνδεθούν μέσω <a href="https://discord.com/developers/applications" target="_blank" rel="noopener noreferrer">Discord</a>.', $lang['allow_oauth_required']];
$lang['discord_client_id'] = 'Αναγνωριστικό Πελάτη';
$lang['discord_client_id_tip'] = 'Εισαγάγετε το αναγνωριστικό πελάτη της εφαρμογής σας στο Discord.';
$lang['discord_client_secret'] = 'Μυστικό Πελάτη';
$lang['discord_client_secret_tip'] = 'Εισαγάγετε το μυστικό κλειδί της εφαρμογής σας στο Discord.';

// --------------------------------------------------------------------
// Facebook:
$lang['facebook_auth'] = 'Σύνδεση με Facebook';
$lang['facebook_auth_tip'] = ['Επιτρέψτε στους χρήστες να συνδεθούν μέσω <a href="https://developers.facebook.com/apps/" target="_blank" rel="noopener noreferrer">Facebook</a>.', $lang['allow_oauth_required']];
$lang['facebook_app_secret'] = 'Μυστικό Πελάτη';
$lang['facebook_app_secret_tip'] = 'Εισαγάγετε το μυστικό κλειδί της εφαρμογής σας στο Facebook.';

// --------------------------------------------------------------------
// GitHub:
$lang['github_auth'] = 'Σύνδεση με GitHub';
$lang['github_auth_tip'] = ['Επιτρέψτε στους χρήστες να συνδεθούν μέσω <a href="https://github.com/settings/developers" target="_blank" rel="noopener noreferrer">GitHub</a>.', $lang['allow_oauth_required']];
$lang['github_client_id'] = 'Αναγνωριστικό Πελάτη';
$lang['github_client_id_tip'] = 'Εισαγάγετε το αναγνωριστικό πελάτη της εφαρμογής σας στο GitHub.';
$lang['github_client_secret'] = 'Μυστικό Πελάτη';
$lang['github_client_secret_tip'] = 'Εισαγάγετε το μυστικό κλειδί της εφαρμογής σας στο GitHub.';

// --------------------------------------------------------------------
// Google:
$lang['google_auth'] = 'Σύνδεση με Google';
$lang['google_auth_tip'] = ['Επιτρέψτε στους χρήστες να συνδεθούν μέσω <a href="https://console.cloud.google.com/" target="_blank" rel="noopener noreferrer">Google</a>.', $lang['allow_oauth_required']];
$lang['google_client_id'] = 'Αναγνωριστικό Πελάτη';
$lang['google_client_id_tip'] = 'Εισαγάγετε το αναγνωριστικό πελάτη της εφαρμογής σας στο Google.';
$lang['google_client_secret'] = 'Μυστικό Πελάτη';
$lang['google_client_secret_tip'] = 'Εισαγάγετε το μυστικό κλειδί της εφαρμογής σας στο Google.';

// --------------------------------------------------------------------
// LinkedIn:
$lang['linkedin_auth'] = 'Σύνδεση με LinkedIn';
$lang['linkedin_auth_tip'] = ['Επιτρέψτε στους χρήστες να συνδεθούν μέσω <a href="https://www.linkedin.com/developers/apps" target="_blank" rel="noopener noreferrer">LinkedIn</a>.', $lang['allow_oauth_required']];
$lang['linkedin_client_id'] = 'Αναγνωριστικό Πελάτη';
$lang['linkedin_client_id_tip'] = 'Εισαγάγετε το αναγνωριστικό πελάτη της εφαρμογής σας στο LinkedIn.';
$lang['linkedin_client_secret'] = 'Μυστικό Πελάτη';
$lang['linkedin_client_secret_tip'] = 'Εισαγάγετε το μυστικό κλειδί της εφαρμογής σας στο LinkedIn.';

// --------------------------------------------------------------------
// Microsoft:
$lang['microsoft_auth'] = 'Σύνδεση με Microsoft';
$lang['microsoft_auth_tip'] = ['Επιτρέψτε στους χρήστες να συνδεθούν μέσω <a href="https://portal.azure.com/#blade/Microsoft_AAD_RegisteredApps" target="_blank" rel="noopener noreferrer">Microsoft</a>.', $lang['allow_oauth_required']];
$lang['microsoft_client_id'] = 'ID Πελάτη';
$lang['microsoft_client_id_tip'] = 'Εισαγάγετε το ID πελάτη της εφαρμογής σας Microsoft.';
$lang['microsoft_client_secret'] = 'Μυστικό Πελάτη';
$lang['microsoft_client_secret_tip'] = 'Εισαγάγετε το μυστικό κλειδί της εφαρμογής σας Microsoft.';
$lang['microsoft_tenant_id'] = 'Αναγνωριστικό tenant (προαιρετικό)';
$lang['microsoft_tenant_id_tip'] = 'Περιορίζει τη σύνδεση σε συγκεκριμένο Microsoft tenant (κατάλογος Azure AD). Αφήστε το κενό για να επιτρέπονται προσωπικοί λογαριασμοί Microsoft και όλα τα Azure AD tenants.';
