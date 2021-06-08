<?php

require_once './vendor/autoload.php';

$google_client = new Google_Client();
$google_client->setAuthConfig('client_secret.json');
$google_client->setRedirectUri('http://localhost/ProjectUTS_Semester2/view/LoginGoogle/index.php');
$google_client->addScope('email');
$google_client->addScope('profile');
$google_client->addScope('https://www.googleapis.com/auth/user.birthday.read');

session_start();

?>