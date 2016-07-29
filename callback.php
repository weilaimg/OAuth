<?php 
require_once('function.php');
require_once('Connect2.1/qqConnectAPI.php');

//请求AccessToken

$oauth = new Oauth();
$accesstoken = $oauth -> qq_callback();

$debug ($accesstoken);


 ?>