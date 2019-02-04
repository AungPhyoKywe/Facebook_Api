<?php



session_start();


require './vendor/autoload.php';


$fb=new Facebook\Facebook([ 

'app_id'=>'1621344364716699',

'app_secret'=>'842a542f36fbcae636815e0eed8282d5',
'default_grap_version'=>'v2.7'






]);

$helper=$fb->getRedirectLoginHelper();
$login=$helper->getLoginUrl("http://localhost/fb_login/");

print_r($login);









?>