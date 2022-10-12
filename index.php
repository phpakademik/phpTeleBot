<?php 
include 'vendor/autoload.php';

use Telegram\Api;

$api = new Api('5551662847:AAFK5dQLivBJLTacEA-XLUBy5NjbKFZ3E-s');
$update = json_decode(file_get_contents('php://input'));
$message = $update->message;
$mid = $message->message_id;
$cid = $message->chat->id;
$tx = $message->text;

$key = $api->keyboard->resize([
        ['salom','salom']
    ]);


if ($tx == '/start') {
    $api->sendMessage($cid,'salom ishladi bratan',['reply_markup'=>$key]);
}
