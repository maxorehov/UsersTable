<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace app\controllers;

use core\Controller;

class EditUserController extends Controller {
    
    public function indexAction() { 
        
        $id = $_GET['id'];
        $query = "SELECT * FROM users WHERE id = $id";
        $data = $this->modelObject->getUserInfo($query);
        $data['message'] = $_SESSION['message'];
        unset($_SESSION['message']);
        $this->viewObject->render('Edit User', $data);
    }
    
    public function editAction() {
        $id = $_POST['id'];
        $name = $_POST['name'];
        $last_name = $_POST['last-name'];
        $email = $_POST['email'];
        
        $this->modelObject->updateUserInfo($id, $name, $last_name, $email);
    }
    
    
}
