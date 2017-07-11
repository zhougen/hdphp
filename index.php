<?php 
header('Content-type: image/jpeg');
require(__DIR__ . '/vendor/autoload.php');
use Gregwar\Captcha\CaptchaBuilder;
$builder = new CaptchaBuilder;
$builder->build();
$builder->output();

 ?>