<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace core;




class View {
    public $route;
    public $view;
    public $layout = 'default';
    
    public function __construct($route) {
        $this->route = $route;
        $this->view = lcfirst($this->route['controller']) . '/' . $this->route['action'];
    }
    
    public function render($title, $data = []) {
        ob_start();
        require_once 'app/views/' . $this->view . '.php';
        $content = ob_get_clean();
        require_once 'app/views/layout/' . $this->layout . '.php';
    }
    
    public function redirect($url) {
        header('Location: ' . $url);
    }
}
