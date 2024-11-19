<?php 

namespace App\ORM;

use App\ORM\Database;

class Query extends Database
{
	public $sql = "";

	public function select($columns = []){
		if((string)$columns == '*')
		{
			$sql .=  "SELECT * ";
		}else{
			foreach ($columns as $column) {
				$col .= $column.", "
			}
		}
		return $this;
	}
	
	public function insert(string $tableName, array $params){
		$sql = "INSERT INTO {$tablename} () VALUES ()";

		return $this;
	}

	public function delete(){

		return $this;
	}

	public function from(string $tableName){
		$sql .= " WHERE {$tableName}";
		return $this;
	}

	public function where(string $column, string $operator, string $value){
		$sql .= " WHERE {$column} {$operator} {$value}";
		return $this;
	}

	public function andWhere(string $column, string $operator, string $value){
		$sql .= " AND WHERE {$column} {$operator} {$value}";
		return $this;
	}

	public function orWhere(string $column, string $operator, string $value){
		$sql .= " OR WHERE {$column} {$operator} {$value}";
		return $this;
	}

	public function like(){

	}



	public function one(){

	}

	public function all(){

	}

}