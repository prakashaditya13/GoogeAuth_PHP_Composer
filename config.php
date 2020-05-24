<?php 
require_once 'vendor/autoload.php';

$google_client = new Google_Client();

$google_client->setClientId('993332767922-r5rfftj2re1dp7e8gnv4qiujtpmr8kb0.apps.googleusercontent.com');
$google_client->setClientSecret('YjpRIF1aLmWStznG7atVTz4X');
$google_client->setRedirectUri('http://localhost/google-sign-in/index.php');
$google_client->addScope('email');
$google_client->addScope('profile');
session_start();
?>