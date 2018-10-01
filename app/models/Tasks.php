<?php

namespace app\models;

use app\core\Model;

class Tasks extends Model 
{
	public function __construct(){
		parent::__construct();
	}

	public function list (){
		$sql = "SELECT * FROM tasks";
		$query = $this->db->query($sql);
		return $query->fetchALL(\PDO::FETCH_OBJ);
	}
}