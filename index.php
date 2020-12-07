<?php

use controllers\adminController;

    define('HOST','localhost');

    define('BASE','http://localhost/Projetos/API-The-Cleveland-Museum/home');
    define('TITLE', 'The Cleveland Museum of Art');
    define('ROUTE_JS', 'scripts/scripts.js');
    define('ROUTE_CSS', 'styles/styles.css');
    
    require 'vendor/autoload.php';

    $autoload = function($class){
        include($class.'.php');
    };

    spl_autoload_register($autoload);

    $adminController = new \controllers\adminController();
    
    Router::get('/home',function() use ($adminController){
        $adminController->index();
    });
    
    Router::get('/home/art',function() use ($adminController){
        if(isset($_GET['id'])){
            $adminController->art();
        }else{
            header("location: ../home");
        }
    });

?>