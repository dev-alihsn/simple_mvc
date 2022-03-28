<?php

namespace MVC\controllers;
use MVC\core\Controller;

class HomeController extends Controller {
    function index(){
        $this->view('home',['title' => 'welcome sir']);
    }
}