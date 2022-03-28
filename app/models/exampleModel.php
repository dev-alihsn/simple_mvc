<?php

namespace MVC\models;

use MVC\core\Model;

class exampleModel extends Model{

    public function GetUesers(){
        $data = Model::db()->run("SELECT * FROM users")->fetchAll();
        return $data;
    }
}