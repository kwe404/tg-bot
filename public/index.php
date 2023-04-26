<?php
// https: //api.telegram.org/bot6267775736:AAHS0MdLFG0q86a2vQxOUc3Gu3tDmeQRGiY/getUpdates

require_once '../vendor/autoload.php';

ini_set('error_reporting', E_ALL);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);

define("TG_TOKEN", "6267775736:AAHS0MdLFG0q86a2vQxOUc3Gu3tDmeQRGiY");


$user_id = 751639920;
$textMessage = 'Привет!';



$sendMessage = new \App\SendMessage();
$sendMessage->token = TG_TOKEN;
$sendMessage->user_id = $user_id;
$sendMessage->SendMessage($textMessage);

