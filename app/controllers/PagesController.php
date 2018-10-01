<?php
namespace app\controllers;

use app\core\Controller;
use app\models\Tasks;

class PagesController extends Controller{
    
   public function index(){
   		$tasks = new Tasks();
   		$data['toView'] = $tasks->list();
   		$data['view'] = "register";
        $this->load("template", $data);
   }
   public function list(){
   		$data['view'] = "list";
        $this->load("template", $data);
   }
}