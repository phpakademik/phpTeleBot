# Assalomu alekum 
## phpTeleBot kutubxonasini ishlatayotganingizdan xursandman bu kutubxona Telegram uchun bot yaratishda yordam berish uchun yozdim 
##  1-bosqich o'rnatish


```
git clone https://github.com/phpakademik/phpTeleBot.git
cd phpTeleBot
composer update 
```

## Bot tokenini qo'yish


```php
<?php
include 'vendor/autoload.php';

use Telegram\Api;

$api = new Api('Token');

```

## Botga xabar yuborish

```php

<?php 
include 'vendor/autoload.php';

use Telegram\Api;

$api = new Api('5551662847:AAFK5dQLivBJLTacEA-XLUBy5NjbKFZ3E-s');
$update = json_decode(file_get_contents('php://input'));
$message = $update->message;
$mid = $message->message_id;
$chat_id = $message->chat->id;
$text = $message->text;

if ($text == '/start') {
    $api->sendMessage($chat_id,'salom ishladi bratan');
}

```

## Botga rasm video dokument yuboramiz

```php

<?php 
include 'vendor/autoload.php';

use Telegram\Api;

$api = new Api('5551662847:AAFK5dQLivBJLTacEA-XLUBy5NjbKFZ3E-s');
$update = json_decode(file_get_contents('php://input'));
$message = $update->message;
$mid = $message->message_id;
$chat_id = $message->chat->id;
$text = $message->text;

if ($text == '/start') {
    $api->sendMessage($chat_id,'salom ishladi bratan');
}
else if($text == '/photo')
{
    $api->sendPhoto($chat_id,'PHOTO_url','rasm uchun matn');
}
else if($text == '/video')
{
    $api->sendVideo($chat_id,'VIDEO_url');
}
else if($text == '/document')
{
    $api->sendDocument($chat_id,'DOCUMENT_url','');
}
```
# qolgani tez kunda
