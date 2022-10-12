<?php 


namespace Telegram;


class Keyboard
{
	public function inline(array $buttons)
	{
		return json_encode([
			'inline_keyboard'=>$buttons
		]);
	}
	public function resize(array $buttons)
	{
		return json_encode([
			'resize_keyboard'=>true,
			'keyboard'=>$buttons,
		]);	
	}
}