<?php

/**
 * Plugin Settings Extension
 *
 * Defines settings section that are required by the plugin.
 *
 * @package     CiSkeleton\Plugins
 * @subpackage  OAuth
 * @category    Config
 * @author      Kader Bouyakoub <bkader[at]mail[dot]com>
 * @copyright   2018-present, Kader Bouyakoub
 * @license     Apache-2.0 — Apache License 2.0
 * @link        https://www.apache.org/licenses/LICENSE-2.0
 *
 * SPDX-License-Identifier: Apache-2.0
 */

// --------------------------------------------------------
// Extend users settings
// --------------------------------------------------------
$config['settings']['users']['fields']['allow_oauth'] = [
	'type' => 'dropdown',
	'default' => 'false',
	'options' => [
		'true' => 'lang:yes',
		'false' => 'lang:no',
	],
];

// --------------------------------------------------------
// Extend Google settings
// --------------------------------------------------------
$config['settings']['google']['fields']['google_auth'] = [
	'type' => 'dropdown',
	'default' => 'false',
	'options' => [
		'true' => 'lang:yes',
		'false' => 'lang:no',
	],
];
$config['settings']['google']['fields']['google_client_id'] = [
	'type' => 'text',
	'rules' => 'trim',
];
$config['settings']['google']['fields']['google_client_secret'] = [
	'type' => 'password',
	'rules' => 'trim',
];

// --------------------------------------------------------
// Extend Facebook settings
// --------------------------------------------------------
$config['settings']['facebook']['fields']['facebook_auth'] = [
	'type' => 'dropdown',
	'default' => 'false',
	'options' => [
		'true' => 'lang:yes',
		'false' => 'lang:no',
	],
];
$config['settings']['facebook']['fields']['facebook_app_secret'] = [
	'type' => 'password',
	'rules' => 'trim',
];

// --------------------------------------------------------
// Add Discord settings
// --------------------------------------------------------
$config['settings']['discord'] = [
	'title' => 'settings_discord',
	'label' => 'discord',
	'icon' => 'fab:discord',
	'fields' => [

		'discord_auth' => [
			'type' => 'dropdown',
			'default' => 'false',
			'options' => [
				'true' => 'lang:yes',
				'false' => 'lang:no',
			],
		],

		'discord_client_id' => [
			'type' => 'text',
			'rules' => 'trim',
		],

		'discord_client_secret' => [
			'type' => 'password',
			'rules' => 'trim',
		],

	],
];

// --------------------------------------------------------
// Add GitHub settings
// --------------------------------------------------------
$config['settings']['github'] = [
	'title' => 'settings_github',
	'label' => 'github',
	'icon' => 'fab:github',
	'fields' => [

		'github_auth' => [
			'type' => 'dropdown',
			'default' => 'false',
			'options' => [
				'true' => 'lang:yes',
				'false' => 'lang:no',
			],
		],

		'github_client_id' => [
			'type' => 'text',
			'rules' => 'trim',
		],

		'github_client_secret' => [
			'type' => 'password',
			'rules' => 'trim',
		],

	],
];

// --------------------------------------------------------
// Add LinkedIn settings
// --------------------------------------------------------
$config['settings']['linkedin'] = [
	'title' => 'settings_linkedin',
	'label' => 'linkedin',
	'icon' => 'fab:linkedin',
	'fields' => [

		'linkedin_auth' => [
			'type' => 'dropdown',
			'default' => 'false',
			'options' => [
				'true' => 'lang:yes',
				'false' => 'lang:no',
			],
		],

		'linkedin_client_id' => [
			'type' => 'text',
			'rules' => 'trim',
		],

		'linkedin_client_secret' => [
			'type' => 'password',
			'rules' => 'trim',
		],

	],
];

// --------------------------------------------------------
// Add Microsoft settings
// --------------------------------------------------------
$config['settings']['microsoft'] = [
	'title' => 'settings_microsoft',
	'label' => 'microsoft',
	'icon' => 'fab:microsoft',
	'fields' => [

		'microsoft_auth' => [
			'type' => 'dropdown',
			'default' => 'false',
			'options' => [
				'true' => 'lang:yes',
				'false' => 'lang:no',
			],
		],

		'microsoft_client_id' => [
			'type' => 'text',
			'rules' => 'trim',
		],

		'microsoft_client_secret' => [
			'type' => 'password',
			'rules' => 'trim',
		],

		'microsoft_tenant_id' => [
			'type' => 'text',
			'rules' => 'trim',
		],

	],
];
