<?php
namespace app\controllers;

use app\core\Controller;
use app\models\Tasks;

class IndexController extends Controller{
    
   public function index(){
   		$tasks = new Tasks();
   		$data['tasks'] = $tasks->list();
   		$data['view'] = "tasks/index";
        $this->load("template", $data);
   }
}
