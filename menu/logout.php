<?php

require '../config.php';

session_unset();

$_SESSION['score'] = 0;
$_SESSION['facebook_access_token'] = NULL;

// Redirect to index.php.
header('Location: ' . '../index.php');

?>