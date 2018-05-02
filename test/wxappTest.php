<?php
/**
 * Created by PhpStorm.
 * User: JoseChan
 * Date: 2017/6/20 0020
 * Time: 下午 5:37
 */

require "vendor/autoload.php";
$app_id = "wx22c6155dbb34babb";
$app_secret = "912439e68d84f6bdc1fa487d9d91c86a";
$wxapp_sdk = new \Wxapp\Wxapp($app_id,$app_secret);
$code = "003jzSmf1Hllpx0sdYlf1mKSmf1jzSmY";
$result = $wxapp_sdk->login($code);
var_dump($result);