<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
$config["google_key"] = 'AIzaSyA1F-p0YGdeqzEA5V49WbFOqAxn1Rj-1T4';
$config["REMOTE_SOCKET_GOOGLE"] = 'https://android.googleapis.com/gcm/send';
$config["PASS_PHRASE"] = "12345678";
$config["REMOTE_SOCKET_APPLE"] = 'ssl://gateway.push.apple.com:2195';
$config['pagination_limit'] = 10;
$config["pem"] = '\assets\files\ck.pem';
$config["admin_emails"] = "farhan.bashir2002@gmail.com";
$config['default_email'] = "admin@payment.com";
$config["allowed_calls_without_token"] = array("login","forgetPassword","signup","getSecurityQuestions","startup","imageTest","test");
$config["receiption_phone"] = "026731111";
$config["android_notification_title"] = "The-Woo";
$config["product_image_base"] = './assets/img/products/';
$config["store_image_base"] = './assets/img/stores/';
$config["user_image_base"] = './assets/img/users/';
$config["order_signature_image_base"] = './assets/img/orders/signature/';
$config["order_recipts_image_base"] = './assets/img/orders/recipts/';