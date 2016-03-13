<?php

require '../config.php';

try
{
	$accessToken = $helper->getAccessToken();
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

header('Location: ' . $helper->getLoginUrl($indexUrl));

?>