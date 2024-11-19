<?php 
include 'vendor/autoload.php';

use App\Command;

$command = new Command;
$command->handle = '/start';
global $txt;
$txt = 'test';

$command->on('/start',function(){
	print_r($txt);
});

