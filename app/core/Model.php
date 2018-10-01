<?php

namespace app\core;

abstract class Model{
    protected $db;
    
    public function __construct() {
        $this->db = new \PDO("mysql:dbname=".DBNAME.";host=".SERVER,USER,PASSWORD);
    }
}

