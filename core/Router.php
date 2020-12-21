<?php

namespace core;

class Router {
    
    protected $routes = [];
    protected $route = [];
    
    public function __construct() {
        $routes = require 'config/routes.php';
        foreach ($routes as $pattern => $route) {
            $this->add($pattern, $route);
        }
    }
    
    public function add($pattern, $route) {
        $this->routes[$pattern] = $route;
    }
    
    public function matchRoute() {
        $url = trim($_SERVER['REQUEST_URI'], '/');
        foreach ($this->routes as $pattern => $route) {
            if (preg_match($pattern, $url, $matches)) {
                $this->route = $route;
                return true;
            }
        }
        return false;
    }
    
    public function run() {
        if ($this->matchRoute()) {
            $controller = 'app\controllers\\' . $this->route['controller'] . 'Controller';
            if (class_exists($controller)) {
                $action = $this->route['action'] . 'Action';
                if (method_exists($controller, $action)) {
                    $controllerObject = new $controller($this->route);
                    $controllerObject->$action();
                } else {
                    echo "Action $action не найден!";
                }
            } else {
                echo "Контроллер $controller не найден!";
            }
        }
    }
}

