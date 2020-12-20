<?php


namespace core;


class Controller {
    protected $route;
    protected $controller;
    protected $action;
    public $viewObject;
    public $modelObject;


    public function __construct($route) {
        $this->route = $route;
        $this->controller = $route['controller'];
        $this->action = $route['action'];
        $this->viewObject = new View($route);
        $this->modelObject = new Model();
    }
    

}
