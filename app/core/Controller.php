<?php

namespace MVC\core;

class Controller {
    public function view($path,$params=[]){
        extract($params);
        require_once(VIEWS.DS.$path.'.php');
    }
}