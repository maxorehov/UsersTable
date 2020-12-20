<?php

namespace app\controllers;
use core\Controller;

class MainController extends Controller {

    
    public function indexAction() {
        $data = $this->modelObject->getUsersInfo("SELECT * FROM users");
        $this->viewObject->render('Users list', $data);
    }
    

}
