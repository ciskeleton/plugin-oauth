<?php

/**
 * Plugin Information File
 *
 * Provides metadata for the OAuth Authentication plugin, allowing the
 * plugin manager and marketplace to identify, display, and manage it.
 *
 * @package     CiSkeleton\Plugins
 * @subpackage  OAuth
 * @category    Metadata
 * @author      Kader Bouyakoub <bkader[at]mail[dot]com>
 * @copyright   2018-present, Kader Bouyakoub
 * @license     Apache-2.0 — Apache License 2.0
 * @link        https://www.apache.org/licenses/LICENSE-2.0
 *
 * SPDX-License-Identifier: Apache-2.0
 */

return [
	// Info
	'name' => 'OAuth Authentication',
	'description' => 'Enables third-party authentication using OAuth providers such as Google, Facebook, GitHub, Discord, and LinkedIn.',
	'version' => '0.0.1',
	'version_id' => 1,
	'repository' => 'https://github.com/ciskeleton/plugin-oauth',

	// Presentation.
	'icon' => 'fab:openid',
	'icon_fg' => '#ffffff',
	'icon_bg' => '#2185d0',

	// Author.
	'author' => [
		'name' => Platform::AUTHOR,
		'url' => Platform::AUTHOR_URL,
	],

	// License.
	'license' => [
		'name' => 'Apache 2.0',
		'url' => 'https://www.apache.org/licenses/LICENSE-2.0',
	],

	// Translations.
	'translations' => [
		// Arabic
		'arabic' => [
			'name' => 'مصادقة OAuth',
			'description' => 'تمكّن المصادقة عبر جهات خارجية باستخدام موفّري OAuth مثل جوجل وفيسبوك وجيت هاب وديسكورد ولينكدإن.',
		],

		// Armenian
		'armenian' => [
			'name' => 'OAuth նույնականացում',
			'description' => 'Միացնում է երրորդ կողմի նույնականացումը՝ օգտագործելով OAuth մատակարարներ, ինչպիսիք են Google, Facebook, GitHub, Discord և LinkedIn։',
		],

		// Azerbaijani
		'azerbaijani' => [
			'name' => 'OAuth ilə autentifikasiya',
			'description' => 'Google, Facebook, GitHub, Discord və LinkedIn kimi OAuth provayderlərindən istifadə etməklə üçüncü tərəf autentifikasiyasını təmin edir.',
		],

		// Bengali
		'bengali' => [
			'name' => 'OAuth প্রমাণীকরণ',
			'description' => 'Google, Facebook, GitHub, Discord এবং LinkedIn-এর মতো OAuth প্রদানকারীদের ব্যবহার করে তৃতীয় পক্ষের প্রমাণীকরণ সক্রিয় করে।',
		],

		// Brazilian Portuguese
		'brazilian' => [
			'name' => 'Autenticação OAuth',
			'description' => 'Ativa a autenticação de terceiros usando provedores OAuth como Google, Facebook, GitHub, Discord e LinkedIn.',
		],

		// Bulgarian
		'bulgarian' => [
			'name' => 'OAuth удостоверяване',
			'description' => 'Позволява удостоверяване чрез трети страни, използвайки OAuth доставчици като Google, Facebook, GitHub, Discord и LinkedIn.',
		],

		// Catalan
		'catalan' => [
			'name' => 'Autenticació OAuth',
			'description' => 'Permet l’autenticació de tercers mitjançant proveïdors OAuth com Google, Facebook, GitHub, Discord i LinkedIn.',
		],

		// Simplified Chinese
		'chinese' => [
			'name' => 'OAuth 身份验证',
			'description' => '通过 Google、Facebook、GitHub、Discord 和 LinkedIn 等 OAuth 提供商启用第三方身份验证。',
		],

		// Croatian
		'croatian' => [
			'name' => 'OAuth autentifikacija',
			'description' => 'Omogućuje autentifikaciju trećih strana putem OAuth pružatelja kao što su Google, Facebook, GitHub, Discord i LinkedIn.',
		],

		// Czech
		'czech' => [
			'name' => 'Ověřování OAuth',
			'description' => 'Umožňuje ověřování třetích stran pomocí poskytovatelů OAuth, jako jsou Google, Facebook, GitHub, Discord a LinkedIn.',
		],

		// Danish
		'danish' => [
			'name' => 'OAuth-godkendelse',
			'description' => 'Muliggør tredjepartsautentificering ved hjælp af OAuth-udbydere som Google, Facebook, GitHub, Discord og LinkedIn.',
		],

		// Dutch
		'dutch' => [
			'name' => 'OAuth-authenticatie',
			'description' => 'Maakt authenticatie via derden mogelijk met OAuth-providers zoals Google, Facebook, GitHub, Discord en LinkedIn.',
		],

		// Estonian
		'estonian' => [
			'name' => 'OAuth autentimine',
			'description' => 'Võimaldab kolmanda osapoole autentimist OAuth teenusepakkujate abil, nagu Google, Facebook, GitHub, Discord ja LinkedIn.',
		],

		// Filipino
		'filipino' => [
			'name' => 'Pagpapatotoo ng OAuth',
			'description' => 'Pinapagana ang pagpapatunay ng third-party gamit ang mga OAuth provider tulad ng Google, Facebook, GitHub, Discord, at LinkedIn.',
		],

		// Finnish
		'finnish' => [
			'name' => 'OAuth-todennus',
			'description' => 'Mahdollistaa kolmannen osapuolen todennuksen OAuth-palveluntarjoajien, kuten Googlen, Facebookin, GitHubin, Discordin ja LinkedInin, avulla.',
		],

		// French
		'french' => [
			'name' => 'Authentification OAuth',
			'description' => 'Permet l’authentification via des services tiers utilisant des fournisseurs OAuth tels que Google, Facebook, GitHub, Discord et LinkedIn.',
		],

		// Georgian
		'georgian' => [
			'name' => 'OAuth ავთენტიფიკაცია',
			'description' => 'რთავს მესამე მხარის ავთენტიფიკაციას OAuth პროვაიდერების გამოყენებით, როგორიცაა Google, Facebook, GitHub, Discord და LinkedIn.',
		],

		// German
		'german' => [
			'name' => 'OAuth-Authentifizierung',
			'description' => 'Ermöglicht die Authentifizierung über Drittanbieter mithilfe von OAuth-Anbietern wie Google, Facebook, GitHub, Discord und LinkedIn.',
		],

		// Greek
		'greek' => [
			'name' => 'Έλεγχος ταυτότητας OAuth',
			'description' => 'Ενεργοποιεί την αυθεντικοποίηση μέσω τρίτων χρησιμοποιώντας παρόχους OAuth όπως το Google, το Facebook, το GitHub, το Discord και το LinkedIn.',
		],

		// Hindi
		'hindi' => [
			'name' => 'OAuth प्रमाणीकरण',
			'description' => 'Google, Facebook, GitHub, Discord और LinkedIn जैसे OAuth प्रदाताओं का उपयोग करके तृतीय-पक्ष प्रमाणीकरण सक्षम करता है।',
		],

		// Hungarian
		'hungarian' => [
			'name' => 'OAuth hitelesítés',
			'description' => 'Lehetővé teszi a harmadik fél általi hitelesítést olyan OAuth-szolgáltatókon keresztül, mint a Google, a Facebook, a GitHub, a Discord és a LinkedIn.',
		],

		// Indonesian
		'indonesian' => [
			'name' => 'Otentikasi OAuth',
			'description' => 'Mengaktifkan autentikasi pihak ketiga menggunakan penyedia OAuth seperti Google, Facebook, GitHub, Discord, dan LinkedIn.',
		],

		// Italian
		'italian' => [
			'name' => 'Autenticazione OAuth',
			'description' => 'Abilita l’autenticazione tramite terze parti utilizzando provider OAuth come Google, Facebook, GitHub, Discord e LinkedIn.',
		],

		// Japanese
		'japanese' => [
			'name' => 'OAuth認証',
			'description' => 'Google、Facebook、GitHub、Discord、LinkedIn などの OAuth プロバイダーを使用したサードパーティ認証を有効にします。',
		],

		// Khmer
		'khmer' => [
			'name' => 'ការផ្ទៀងផ្ទាត់ភាពត្រឹមត្រូវតាមរយៈ OAuth',
			'description' => 'អនុញ្ញាតឱ្យមានការផ្ទៀងផ្ទាត់ភាពត្រឹមត្រូវដោយភាគីទីបី ដោយប្រើប្រាស់អ្នកផ្តល់សេវា OAuth ដូចជា Google, Facebook, GitHub, Discord និង LinkedIn។',
		],

		// Korean
		'korean' => [
			'name' => 'OAuth 인증',
			'description' => 'Google, Facebook, GitHub, Discord 및 LinkedIn과 같은 OAuth 제공자를 사용하여 타사 인증을 활성화합니다.',
		],

		// Latvian
		'latvian' => [
			'name' => 'OAuth autentifikācija',
			'description' => 'Iespējo trešo pušu autentifikāciju, izmantojot OAuth nodrošinātājus, piemēram, Google, Facebook, GitHub, Discord un LinkedIn.',
		],

		// Lithuanian
		'lithuanian' => [
			'name' => 'OAuth autentifikavimas',
			'description' => 'Leidžia trečiųjų šalių autentifikavimą naudojant OAuth teikėjus, tokius kaip Google, Facebook, GitHub, Discord ir LinkedIn.',
		],

		// Malay
		'malay' => [
			'name' => 'Pengesahan OAuth',
			'description' => 'Mendayakan pengesahan pihak ketiga menggunakan penyedia OAuth seperti Google, Facebook, GitHub, Discord dan LinkedIn.',
		],

		// Marathi
		'marathi' => [
			'name' => 'OAuth प्रमाणीकरण',
			'description' => 'Google, Facebook, GitHub, Discord आणि LinkedIn सारख्या OAuth प्रदात्यांचा वापर करून तृतीय-पक्ष प्रमाणीकरण सक्षम करते.',
		],

		// Norwegian
		'norwegian' => [
			'name' => 'OAuth-autentisering',
			'description' => 'Aktiverer tredjepartsautentisering ved bruk av OAuth-leverandører som Google, Facebook, GitHub, Discord og LinkedIn.',
		],

		// Persian
		'persian' => [
			'name' => 'احراز هویت OAuth',
			'description' => 'امکان احراز هویت از طریق سرویس‌های شخص ثالث با استفاده از ارائه‌دهندگان OAuth مانند Google، Facebook، GitHub، Discord و LinkedIn را فراهم می‌کند.',
		],

		// Polish
		'polish' => [
			'name' => 'Uwierzytelnianie OAuth',
			'description' => 'Umożliwia uwierzytelnianie za pomocą zewnętrznych dostawców OAuth, takich jak Google, Facebook, GitHub, Discord i LinkedIn.',
		],

		// European Portuguese
		'portuguese' => [
			'name' => 'Autenticação OAuth',
			'description' => 'Permite a autenticação de terceiros através de fornecedores OAuth como o Google, Facebook, GitHub, Discord e LinkedIn.',
		],

		// Romanian
		'romanian' => [
			'name' => 'Autentificare OAuth',
			'description' => 'Permite autentificarea prin terți folosind furnizori OAuth precum Google, Facebook, GitHub, Discord și LinkedIn.',
		],

		// Russian
		'russian' => [
			'name' => 'Аутентификация OAuth',
			'description' => 'Обеспечивает аутентификацию через сторонние сервисы с использованием провайдеров OAuth, таких как Google, Facebook, GitHub, Discord и LinkedIn.',
		],

		// Serbian (Latin)
		'serbian' => [
			'name' => 'OAuth autentifikacija',
			'description' => 'Omogućava autentifikaciju putem trećih strana korišćenjem OAuth provajdera kao što su Google, Facebook, GitHub, Discord i LinkedIn.',
		],

		// Slovak
		'slovak' => [
			'name' => 'Overovanie OAuth',
			'description' => 'Umožňuje overovanie tretími stranami pomocou OAuth poskytovateľov, ako sú Google, Facebook, GitHub, Discord a LinkedIn.',
		],

		// Slovenian
		'slovenian' => [
			'name' => 'OAuth overenie',
			'description' => 'Omogoča avtentikacijo tretjih oseb z uporabo ponudnikov OAuth, kot so Google, Facebook, GitHub, Discord in LinkedIn.',
		],

		// Spanish
		'spanish' => [
			'name' => 'Autenticación OAuth',
			'description' => 'Permite la autenticación de terceros mediante proveedores OAuth como Google, Facebook, GitHub, Discord y LinkedIn.',
		],

		// Swahili
		'swahili' => [
			'name' => 'Uthibitishaji wa OAuth',
			'description' => 'Huwezesha uthibitishaji wa wahusika wengine kwa kutumia watoa huduma wa OAuth kama Google, Facebook, GitHub, Discord na LinkedIn.',
		],

		// Swedish
		'swedish' => [
			'name' => 'OAuth-autentisering',
			'description' => 'Möjliggör autentisering via tredje part med hjälp av OAuth-leverantörer som Google, Facebook, GitHub, Discord och LinkedIn.',
		],

		// Traditional Chinese
		'taiwanese' => [
			'name' => 'OAuth 身份驗證',
			'description' => '透過 Google、Facebook、GitHub、Discord 和 LinkedIn 等 OAuth 提供者啟用第三方驗證。',
		],

		// Tamil
		'tamil' => [
			'name' => 'OAuth அங்கீகாரம்',
			'description' => 'Google, Facebook, GitHub, Discord மற்றும் LinkedIn போன்ற OAuth வழங்குநர்களைப் பயன்படுத்தி மூன்றாம் தரப்பு அங்கீகாரத்தை இயக்கு.',
		],

		// Thai
		'thai' => [
			'name' => 'การตรวจสอบสิทธิ์ OAuth',
			'description' => 'เปิดใช้งานการยืนยันตัวตนผ่านบุคคลที่สามโดยใช้ผู้ให้บริการ OAuth เช่น Google, Facebook, GitHub, Discord และ LinkedIn',
		],

		// Turkish
		'turkish' => [
			'name' => 'OAuth kimlik doğrulaması',
			'description' => 'Google, Facebook, GitHub, Discord ve LinkedIn gibi OAuth sağlayıcılarını kullanarak üçüncü taraf kimlik doğrulamasını etkinleştirir.',
		],

		// Ukrainian
		'ukrainian' => [
			'name' => 'Автентифікація OAuth',
			'description' => 'Забезпечує автентифікацію через сторонні сервіси з використанням постачальників OAuth, таких як Google, Facebook, GitHub, Discord та LinkedIn.',
		],

		// Urdu
		'urdu' => [
			'name' => 'OAuth تصدیق',
			'description' => 'Google، Facebook، GitHub، Discord اور LinkedIn جیسے OAuth فراہم کنندگان کے ذریعے تیسرے فریق کی تصدیق فعال کرتا ہے۔',
		],

		// Vietnamese
		'vietnamese' => [
			'name' => 'Xác thực OAuth',
			'description' => 'Kích hoạt xác thực bên thứ ba bằng cách sử dụng các nhà cung cấp OAuth như Google, Facebook, GitHub, Discord và LinkedIn.',
		],
	],
];
