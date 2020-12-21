<?php

namespace app\controllers;
use core\Controller;

class MainController extends Controller {

    
    public function indexAction() {
        $data = $this->modelObject->getUsersInfo("SELECT * FROM users");
        $this->viewObject->render('Users list', $data);
    }
    
    
    public function filterAction() {
        $cond = file_get_contents('php://input');
        $this->modelObject->filter($cond);
    }
    
    public function searchAction() {
        
        $str_json = json_decode($_POST['json'], true);
        
        extract($str_json);

        $this->modelObject->search($where, $value);
    }
    

}
