<?php 
include 'vendor/autoload.php';

use App\Api;
use App\Command;

$api = new Api('5551662847:AAFK5dQLivBJLTacEA-XLUBy5NjbKFZ3E-s');
$update = json_decode(file_get_contents('php://input'));
$message = $update->message;
$mid = $message->message_id;
$cid = $message->chat->id;
$tx = $message->text;



$command = new Command();
$command->handle = $tx;
$key = $api->keyboard->resize([
        ['salom','salom']
    ]);

$command->start(function(Api $bot){
    return $api->sendMessage();
});