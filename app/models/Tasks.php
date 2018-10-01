<?php

namespace app\models;

use app\core\Model;

class Tasks extends Model 
{
	public function __construct(){
		parent::__construct();
	}

	public function list(){
		$sql = "SELECT * FROM tasks";
		$query = $this->db->query($sql);
		return $query->fetchALL(\PDO::FETCH_OBJ);
	}

	public function insert($name, $description, $deadline, $priority, $completed){
		$sql = "INSERT INTO tasks SET name = :name, description = :description, deadline = :deadline, priority = :priority, completed = :completed";
		$query = $this->db->prepare($sql);
		$query->bindValue(":name", $name);
		$query->bindValue(":description", $description);
		$query->bindValue(":deadline", $deadline);
		$query->bindValue(":priority", $priority);
		$query->bindValue(":completed", $completed);
		$query->execute();

		return $this->db->lastInsertId();
	}
}
