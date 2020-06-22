<?php

require_once 'autoload.php';
require_once 'config/parametros.php';

function mostrar_error(){
    $error = new errorController();
    $error->index();
}

if(isset($_GET['controller'])){
    $nombre_controlador = $_GET['controller'].'Controller';
}elseif(!isset($_GET['controller']) && !isset($_GET['accion'])){
    $nombre_controlador = controller_default;
}else{
    mostrar_error();
    exit();
}

if(class_exists($nombre_controlador)){
   $controlador = new $nombre_controlador();
   if(isset($_GET['accion']) && method_exists($controlador, $_GET['accion'])){
       $accion = $_GET['accion'];
       $controlador->$accion();
       
   }elseif(!isset($_GET['controller']) && !isset($_GET['accion'])){
       $action_default = accion_default;
       $controlador->$action_default;
}else {
       mostrar_error();
   }
}else{
    mostrar_error();
}