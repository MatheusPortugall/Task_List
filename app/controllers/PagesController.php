<?php
namespace app\controllers;

use app\core\Controller;
use app\models\Tasks;

class PagesController extends Controller{
    
   public function index(){
   		$tasks = new Tasks();
   		$data['toView'] = $tasks->list();
   		$data['view'] = "list";
        $this->load("template", $data);
   }
   public function list(){
   		$data['view'] = "list";
        $this->load("template", $data);
   }

   public function save() {
   		$task = new Tasks();
   		$name         = $_POST['name'];
		$description  = $_POST['description'];
		$deadline     = $_POST['deadline'];
		$priority     = $_POST['priority'];
		$completed    = $_POST['completed'];

		$task->insert($name, $description, $deadline, $priority, $completed);

		header("location:" . URL_BASE ."pages/list");


   }
}