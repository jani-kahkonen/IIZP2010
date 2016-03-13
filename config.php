<?php

require_once __DIR__ . '/vendor/autoload.php';

session_start();

$fb = new Facebook\Facebook([
	'app_id' => getenv('FACEBOOK_APP_ID'),
	'app_secret' => getenv('FACEBOOK_SECRET'),
	'default_graph_version' => 'v2.2',
]);

$helper = $fb->getRedirectLoginHelper();
 
$permissions = ['email'];

$indexUrl	=	'https://frozen-dawn-78713.herokuapp.com/index.php';

$loginUrl	=	'https://frozen-dawn-78713.herokuapp.com/menu/login.php';

$logoutUrl	=	'https://frozen-dawn-78713.herokuapp.com/menu/logout.php';

$accessToken =	$_SESSION['facebook_access_token'];

?>