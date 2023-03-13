<?php 
    require_once 'controllers/errorController.php';
    require_once 'config/parameters.php';
    /*
    define('DEFAULT_FOLDER', 'controllers/');
    define('DEFAULT_CONTROLLER','alumnoController');
    define('DEFAULT_ACTION','verAlumnos');
   */
    if(isset($_GET['controlador'])){
        $controller = $_GET['controlador'].'Controller';
    }elseif(!isset($_GET['controlador'])){
        $controller = DEFAULT_CONTROLLER;
    }else{
        mostrarError();
    }

    $action = DEFAULT_ACTION;
    if(isset($_GET['action'])){
        $action = $_GET['action'];
    }elseif(!isset($_GET['action'])){
        $action = DEFAULT_ACTION;
    }else{
        mostrarError();
    }

    $controlador = DEFAULT_FOLDER.$controller.'.php'; //se forma la ruta
    
    if(is_file($controlador)){
        require_once($controlador);
    }else{
        mostrarError();
    }

    if(is_callable($action)){
        $action();
    }else{
        mostrarError();
    }
?>