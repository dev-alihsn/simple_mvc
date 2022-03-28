<?php

    namespace MVC\core;

    class App {

        private $controller = 'HomeController';
        private $method = 'index';
        private $params = [];

        public function __construct(){
            $this->url();
            $this->render();
        }

        private function url(){
            if(!empty($_SERVER['QUERY_STRING'])){
                $url = explode('/',$_SERVER['QUERY_STRING']);
                $this->controller = isset($url[0]) ? ucfirst($url[0]) . 'Controller': 'HomeController';
                $this->method = isset($url[1]) ? ucfirst($url[1]): 'index';
                unset($url[0],$url[1]);
                $this->params = array_values($url);
            }
        }

        private function render(){
            $controller = 'MVC\controllers\\' . $this->controller;
            if(class_exists($controller)){

                if(method_exists($controller,$this->method)){
                    call_user_func_array([new $controller,$this->method],$this->params);
                }
            }
        }

    }