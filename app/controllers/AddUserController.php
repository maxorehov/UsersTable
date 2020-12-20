<?php


namespace app\controllers;
use core\Controller;


class AddUserController extends Controller {
    
    public function indexAction() {
        $data['message'] = $_SESSION['message'];
        unset($_SESSION['message']);
        $this->viewObject->render('Add User', $data);
    }
    
    public function addAction() {
        
        $name = $_POST['name'];
        $last_name = $_POST['last-name'];
        $email = $_POST['email'];
        $this->modelObject->addUser($name, $last_name, $email);
        
    }
}
