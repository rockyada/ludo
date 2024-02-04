<?php
$WEBSITE_URL				=	env("APP_URL");
return [
	'ALLOWED_TAGS_XSS'   	=> '<iframe><a><strong><b><p><br><i><font><img><h1><h2><h3><h4><h5><h6><span><div><em><table><ul><li><section><thead><tbody><tr><td><figure><article>',
	'DS'     				=> '/',
	'ROOT'     				=> base_path(),
	'APP_PATH'     			=> app_path(),

	"WEBSITE_URL"                           =>  $WEBSITE_URL,

	"USER_IMAGE_PATH"						=>	$WEBSITE_URL.'public/uploads/user-image/',
	"USER_IMAGE_ROOT_PATH"					=>	"public/uploads/user-image/",

	"USER_KYC_IMAGE_PATH"					=>	$WEBSITE_URL.'public/uploads/user-kyc-image/',
	"USER_KYC_IMAGE_ROOT_PATH"				=>	"public/uploads/user-kyc-image/",

	"GAMES_IMAGE_PATH"					    =>	$WEBSITE_URL.'public/uploads/games-image/',
	"GAMES_IMAGE_ROOT_PATH"				    =>	"uploads/games-image/",

	"BATTLES_PATH"					        =>	$WEBSITE_URL.'public/uploads/battles-image/',
	"BATTLES_ROOT_PATH"				        =>	"uploads/battles-image/",

	"SEO_PAGE_IMAGE_IMAGE_PATH"		 		=>	$WEBSITE_URL.'public/uploads/sep-image/',
	"SEO_PAGE_IMAGE_ROOT_PATH"				=>	"public/uploads/sep-image/",

	'MESSAGE' => [
		'INACTIVE_MEMBER_STAFF' => "You can't login in site panel, please contact to site admin!",
	],

	'GENDER' => [
		'1' 	=> "Men",
		'2' 	=> "Women",
		'0' 	=> "Other",
	],

	'PLAYERS' => [
		'PLAYERS_TITLE' 	=> "Player",
		'PLAYERS_TITLES' 	=> "All Players",
	],

	'PAYMENTS' => [
		'PAYMENTS_TITLE' 	=> "Payment",
		'PAYMENTS_TITLES' 	=> "Payments Received",
	],

	'APPROVED_KYC' => [
		'APPROVED_KYC_TITLE' 	=> "KYC",
		'APPROVED_KYC_TITLES' 	=> "APPROVED KYC",
	],

	'PENDING_KYC' => [
		'PENDING_KYC_TITLE' 	=> "KYC",
		'PENDING_KYC_TITLES' 	=> "PENDING KYC",
	],

	'NEW_BATTLES' => [
		'NEW_BATTLES_TITLES' 	=> "New Battles",
	],

	'BATTLES_RESULT' => [
		'BATTLES_RESULT_TITLE' 	    => "Battles",
		'BATTLES_RESULT_TITLES' 	=> "Battles Result",
	],

	'BATTLES_DISPUTE' => [
		'BATTLES_DISPUTE_TITLE' 	=> "Battles Dispute",
	],

	'GAMES' => [
		'GAMES_TITLE' 	=> "Game",
		'GAMES_TITLES' 	=> "All Games",
	],

	'WITHDAW_REQUEST' => [
		'WITHDAW_REQUEST_TITLE' 	=> "Withdraw Request",
		'WITHDAW_REQUEST_TITLES' 	=> "All Withdraw Requests",
	],

	'SEO' => [
		'SEO_TITLE' 	=> "Seo pages",
	],

	'CMS_MANAGER' => [
		'CMS_PAGES_TITLE' 	=> "Cms Pages",
		'CMS_PAGE_TITLE' 	=> "Cms Page",
		'VIEW_PAGE' 		=> "View Page",
	],

	'EMAIL_TEMPLATES' => [
		'EMAIL_TEMPLATES_TITLE' => "Email Templates",
		'EMAIL_TEMPLATE_TITLE' 	=> "Email Template",
	],

	'EMAIL_LOGS' => [
		'EMAIL_LOGS_TITLE' 		=> "Email Logs",
		'EMAIL_DETAIL_TITLE' 	=> "Email Detail",
	],

	'ACL' => [
		'ACLS_TITLE' => "Acl",
		'ACL_TITLE' => "Acl Management",
	],

	'SETTING' => [
		'SETTINGS_TITLE' 	=> "Settings",
		'SETTING_TITLE' 	=> "Setting",
	],

	'DESIGNATION' => [
		'DESIGNATIONS_TITLE' 	=> "Roles",
		'DESIGNATION_TITLE' 	=> "Role",
	],

	'DEPARTMENT' => [
		'DEPARTMENTS_TITLE' 	=> "Roles",
		'DEPARTMENT_TITLE' 		=> "Role",
	],

	'STAFF' => [
		'STAFFS_TITLE' 		=> "Staff's",
		'STAFF_TITLE' 		=> "Staff",
	],

	'SITE_TITLE' => "Ludo Batting",

	'ROLE_ID' => [
		'ADMIN_ID' 					=> 1,
		'SUPER_ADMIN_ROLE_ID' 		=> 1,
		'CUSTOMER_ROLE_ID' 			=> 2,
		'STAFF_ROLE_ID' 			=> 3,
	],
	
	'SETTING_FILE_PATH'	=> base_path() . "/" .'config'."/". 'settings.php',

	'WEBSITE_ADMIN_URL' => base_path() . "/" .'adminpnlx',

];
