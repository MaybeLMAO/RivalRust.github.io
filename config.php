<?php

	/**
	 * config.php
	 * @author     Fabian Tomischka <fabian@fabito.net>
	 * @copyright  2022 Fabito Media
	 */

return [

	/*
	|--------------------------------------------------------------------------
	| Website information
	|--------------------------------------------------------------------------
	|
	| The title and description is used in the header part (hero) of the website.
	| Include your server name in the title to improve SEO results. The welcome text
	| is put in front of the title
	|
	*/

	'welcome' => 'Welcome to',

	'title' => 'Fabito Rust',

	'description' => 'Your favourite server template, enjoy your time',

	/*
	|--------------------------------------------------------------------------
	| Logo and background image
	|--------------------------------------------------------------------------
	|
	| You can change your server logo here. Uplaod your logo into the img folder
	| and replace the file name here, or rename it to the logo.png default. If
	| logo is empty, it will display the title instead of the logo. Background
	| image should not be left empty. The logo needs to have a height of 75px,
	| while the width does not matter.
	|
	| IMPORTANT: If you do not have a logo with the same sizes (e.g. 75x75)
	| you need to manually change the width in the CSS code. Search for
	| .navbar-rust .navbar-logo-container in the style.css file and replace
	| the width with your logo's width.
	|
	*/

	'logo' => 'logo.webp',

	'backgroundImage' => 'background.webp',

	/*
	|--------------------------------------------------------------------------
	| Servers
	|--------------------------------------------------------------------------
	|
	| You can add a list of available servers here. By default, we try to get
	| all the information directly from the rust server. For each new server you want
	| to add just copy a batch of the existing lines and add them to the list.
	| If you do not set the BattleMetrics link, the button will not be shown.
	| Store link will display a button (if set) for a link to buy VIP status
	| for that specific server. Links need to start with the protocol (https://)
	|
	| IMPORTANT: By default the BattleMetrics API is activated. To get data from the battlemetrics API
	| you need to set the battlemetricsId of your server. It is located in the URL in your browser
	| if you view the server on BattleMetrics. Read more about the used APIs for data below
	|
	*/

	'servers' => [

		[
			'ip' => 'mars.projectnova.gg',
			'port' => 28015,
			'storeLink' => 'https://vip.projectnova.gg/',
			'battlemetricsId' => '8113868',
			'battlemetricsLink' => 'https://www.battlemetrics.com/servers/rust/8113868',
		],

	],

	/*
	|--------------------------------------------------------------------------
	| Data API
	|--------------------------------------------------------------------------
	|
	| This website has 2 different ways of gaining information for your server. One is
	| the BattleMetrics API, and another one is SourceQuery. SourceQuery is directly connecting
	| to your server (and requires the sockets extension and open ports if you use it).
	|
	| By default we use the BattleMetrics API so the website can work on most webhostings. However,
	| if you want to support tags (as shown ingame in the serverlist, the blue information) you need to
	| use the SourceQuery option. BattleMetrics supports a maximum of 15 servers.
	|
	| Options: battlemetrics, sourcequery
	|
	*/

	'api' => 'battlemetrics',

	/*
	|--------------------------------------------------------------------------
	| Last wiped information
	|--------------------------------------------------------------------------
	|
	| If last wiped is enabled, servers do show a just wiped banner if they have
	| recently been wiped. Set the hours passed since wipe until the banner is
	| hidden again.
	|
	*/

	'lastWiped' => [

		'enabled' => 'yes',

		'text' => 'Just Wiped',

		'hoursPassed' => 24,

	],

	/*
	|--------------------------------------------------------------------------
	| Store settings
	|--------------------------------------------------------------------------
	|
	| If the store is enabled, it will show a link and a text to your shop to
	| buy VIP packages or kits from. Set store enabled to yes or no to show
	| or hide everything. The link needs to start with the protocol (https://)
	|
	*/

	'store' => [

		'enabled' => 'yes',

		'heading' => 'Shop',

		'navigation' => 'Shop',

		'button' => 'Visit Shop',

		'message' => 'Do you enjoy our servers? Help us by buying a VIP package from our store! Perks include: <ul><li>Queue Skip</li><li>Priority Support</li><li>and much more!</li></ul>',

		'link' => 'https://rust.facepunch.com/',

	],

	/*
	|--------------------------------------------------------------------------
	| Discord settings
	|--------------------------------------------------------------------------
	|
	| If inviteLink is set, a button in the navigation will show up as a
	| Call-To-Action for users to join your discord server. It will disappear
	| if you remove the link. The link needs to start with the protocol (https://)
	|
	*/

	'discord' => [

		'inviteLink' => 'https://discord.gg',

		'text' => 'Join Discord',

	],

	/*
	|--------------------------------------------------------------------------
	| Social links
	|--------------------------------------------------------------------------
	|
	| Social links are only displayed if not empty. If entered, they will show
	| up with an icon for the specific platform. All links need to start with
	| their protocol (https://)
	|
	*/

	'socials' => [

		'enabled' => 'yes',

		'links' => [
			'steam'     => '',
			'youtube'   => '',
			'twitch'    => '',
			'twitter'   => '',
			'instagram' => '',
			'facebook'  => '',
			'vk'        => '',
			'tiktok'	=> '',
		],

	],

	/*
	|--------------------------------------------------------------------------
	| Rules
	|--------------------------------------------------------------------------
	|
	| If enabled, it will show your server rules on the bottom of the page.
	| Feel free to add any new rules you feel applicable to your server, they
	| will automatically show up on the page. If you want a new line within your
	| text, you can use a <br> (HTML for new line) to start a new line. This will
	| display a new line on the website.
	|
	*/

	'rules' => [

		'enabled' => 'yes',

		'heading' => 'Rules',

		'navigation' => 'Rules',

		'rules' => [

			[
				'title' => 'Cheating or Scripting',
				'text' => 'Do not use any third-party paid or free programs which provide an unfair advantage in-game. This includes scripts which can perform any action that is otherwise not possible to be performed ingame.',
			],
			[
				'title' => 'Ban evasion',
				'text' => 'Do not do anything to bypass a ban on our server(s). Do not try to join with a different account if you were banned, sit it out. Any try to do so will result in additional bans.',
			],
			[
				'title' => 'Bug abuse',
				'text' => 'Do not try to use any unfair advantages which were not intentially possible within the game. This includes but is not limited to accessing unaccessible areas and creating graphic errors or using graphical adjustments.',
			],
			[
				'title' => 'Harrassment & toxic behavior',
				'text' => 'Do not insult other players via text chat or any other applicable communication channel. We want a friendly and comfortable place for everyone on our server(s). Not following this rule will result into temporary or permanent restrictions, in extreme cases bans.',
			],

		],

	],

	/*
	|--------------------------------------------------------------------------
	| Staff
	|--------------------------------------------------------------------------
	|
	| To improve credibility of your server, you can add a list of staff members
	| here. If avatar is left empty, it will display a default image instead. Upload
	| staff avatars to the img folder and add the filename. Dimensions are 180x180 px.
	| Link can be left empty and it will only show up as normal text. If you input a
	| link, the name of the staff member will be linked to the URL. Link has to start
	| with the protocol (https://).
	|
	*/

	'staff' => [

		'enabled' => 'yes',

		'heading' => 'Staff',

		'navigation' => 'Staff',

		'members' => [

			[
				'name' => 'Fabian',
				'rank' => 'Owner',
				'avatar' => '',
				'link' => '',
			],
			[
				'name' => 'Maria',
				'rank' => 'Admin',
				'avatar' => '',
				'link' => '',
			],
			[
				'name' => 'Kevin',
				'rank' => 'Mod',
				'avatar' => '',
				'link' => '',
			],

		],

	],

	/*
	|--------------------------------------------------------------------------
	| FAQ
	|--------------------------------------------------------------------------
	|
	| If enabled, it will show your server FAQ on the page.
	| Feel free to add any new faq entries you feel applicable to your server, they
	| will automatically show up on the page. If you want a new line within your
	| text, you can use a <br> (HTML for new line) to start a new line. This will
	| display a new line on the website.
	|
	| Disabled by default, enable by setting enabled to yes
	|
	*/

	'faq' => [

		'enabled' => 'no',

		'heading' => 'Favourite Asked Questions',

		'navigation' => 'FAQ',

		'entries' => [

			[
				'title' => 'Wipe Times',
				'text' => 'This is an informational part where you can put information about your wipe times.',
			],
			[
				'title' => 'Server Information',
				'text' => 'If you want to show any additional server information, you can put them here. You can disable FAQ by setting enabled to no if you do not require it.',
			],

		],

	],

	/*
	|--------------------------------------------------------------------------
	| Additional navigation
	|--------------------------------------------------------------------------
	|
	| In case you need to add additional links to your navigation which are not
	| there by default, you can add them directly via this list. Make sure that
	| all links start with the protocol (https://) as they will redirect away
	| from the current host. Additional links will only show if enabled is set to yes.
	|
	*/

	'navigation' => [

		'enabled' => 'no',

		'links' => [

			[
				'text' => 'Example 1',
				'link' => 'https://rust.facepunch.com/',
			],
			[
				'text' => 'Example 2',
				'link' => 'https://rust.facepunch.com/',
			],

		],

	],

	/*
	|--------------------------------------------------------------------------
	| Statistics
	|--------------------------------------------------------------------------
	|
	| The statistics module is an extra module for the outpost template. It is a separate
	| product and can be purchased on the same marketplace where you purchased this website
	| template from. It automatically integrates with the template once it is setup and
	| will show up in the navigation.
	|
	*/

	'statistics' => [

		'navigation' => 'Stats',

	],

    /*
    |--------------------------------------------------------------------------
    | Language
    |--------------------------------------------------------------------------
    |
    | The language used on the website. Only change this if your primary content
    | is not in english.
    |
    */

	'language' => 'en',

];