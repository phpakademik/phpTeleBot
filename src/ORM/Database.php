<?php 

namespace App\ORM;

use PDO;
use function Env\env;

class Database{

	public $pdo;

	public function __construct()
	{
		$this->pdo = $this->connect();
	}

	public function connect(){
		return PDO('');
	}
	
}