<?php

namespace MVC\core;
use Dcblogdev\PdoWrapper\Database;

class Model {

    public static function db(){
        $options = [
            //required
            'username' => USER,
            'database' => DB,
            //optional
            'password' => PASS,
            'type' => TYPE,
            'charset' => CHARSET,
            'host' => HOST,
            'port' => PORT
        ];
        
        return $db = new Database($options);
    }
}