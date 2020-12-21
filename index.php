<?php
require_once 'core/functions.php';

use core\Router;

spl_autoload_register(function($classname) {
    $class = str_replace('\\', '/', $classname);
    require_once "$class.php";
});


session_start();
$router = new Router();
$router->run();