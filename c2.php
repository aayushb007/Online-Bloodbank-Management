<?php 
session_start();
$captcha_num = rand(1000, 9999);
$_SESSION['code'] = $captcha_num;
$captcha_num = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890abcdefghijklmnopqrstuvwxyz';
$captcha_num = substr(str_shuffle($captcha_num), 0, 6);
$_SESSION["code"] = $captcha_num;

$font_size = 30;
$img_width = 70;
$img_height = 40;
header('Content-type: image/jpeg');


 ?>


