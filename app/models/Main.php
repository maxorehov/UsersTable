<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Main
 *
 * @author max
 */

namespace app\models;

use core\Model;


class Main extends Model {
    
    public function __construct() {
        parent::__construct();
        
        echo $this->pdo;
    }
}
