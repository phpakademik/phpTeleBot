<?php 

namespace App;


class Command{

	public $handle;

	public function on(string $command, $callback){
		if ($this->handle == $command) {
			return $callback();
		}
		return null;
	}
	public function start($callback){
		return $this->on('/start',$callback);
	}
	public function help($callback){
		return $this->on('/help',$callback);
	}
}