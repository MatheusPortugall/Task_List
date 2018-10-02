<?php
namespace app\controllers;

use app\core\Controller;

class IndexController extends Controller{
    
   public function index(){
   		$data['view'] = "tasks/index";
        $this->load("template", $data);
   }
}
