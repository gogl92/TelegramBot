<?php
error_reporting(-1);
ini_set("allow_url_fopen", true);
require('vendor/TelegramBot/telegram-bot-api.php');
$token = '78672244:AAFd8OluDw3djVWqpJipl7YSBKVo9Zd-XqY';
$bot = new telegram_bot($token);
$me = "15553194";
//$file = "logo.jpg";
$bot->set_webhook('https://www.promoshots.com.mx/TelegramBot/vendor/TelegramBot/78672244:AAFd8OluDw3djVWqpJipl7YSBKVo9Zd-XqY.php'); //Your url
$bot->get_user_profile_photos("");