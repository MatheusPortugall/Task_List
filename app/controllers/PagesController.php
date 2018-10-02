<?php
namespace app\controllers;

use app\core\Controller;
use app\models\Tasks;

class PagesController extends Controller{
    
   public function index(){
   		$tasks = new Tasks();
   		$data['tasks'] = $tasks->list();
   		$data['view'] = "tasks/index";
        $this->load("template", $data);
   }
   public function data(){
   		$data['view'] = "tasks/index";
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

   public function register(){
   		$data['view'] = "tasks/register";
      $this->load("template", $data);
   }

   public function edit($id){
      $tasks = new Tasks();
      $data['task'] = $tasks->getTasks($id);
      $data['view'] = "tasks/edit";
      $this->load("template", $data);
   
 }
}