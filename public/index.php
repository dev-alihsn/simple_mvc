<?php
    define('DS',DIRECTORY_SEPARATOR);
    define('ROOT',dirname(__DIR__));
    define('APP',ROOT.DS.'app');
    define('CONFING',APP.DS.'config');
    define('CONTROLLERS',APP.DS.'controllers');
    define('CORE',APP.DS.'core');
    define('MODELS',APP.DS.'models');
    define('VIEWS',APP.DS.'views');
    
    require_once("../app/config/config.php");
    require_once("../vendor/autoload.php");

    $app = new MVC\core\App();
?>