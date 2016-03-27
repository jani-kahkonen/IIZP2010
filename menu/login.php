<?php

require '../config.php';

try
{
	$accessToken = $helper->getAccessToken();
	
	$response = $fb->get('/me?fields=id,name', $accessToken);
}
catch(Facebook\Exceptions\FacebookResponseException $e)
{
	echo 'Graph returned an error: ' . $e->getMessage();	exit;
}
catch(Facebook\Exceptions\FacebookSDKException $e)
{
	echo 'Facebook SDK returned an error: ' . $e->getMessage();	exit;
}

if (isset($accessToken))
{
	$_SESSION['facebook_access_token'] = (string) $accessToken;
}

$user = $response->getGraphUser();

$profile = $user->getName();

$profileInfo = explode(" ", $profile);
$_SESSION['fbFname'] = $profileInfo[0];
$_SESSION['fbLname'] = $profileInfo[1];

// Redirect to index.php.
header('Location: ' . $helper->getLoginUrl($indexUrl));

?>