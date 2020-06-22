<?php

class usuarioController{
    public function index() {
        echo "Controlador de Usuario index";
    }
    public function registro(){
        require_once 'vistas/usuario/registro.php';
    }
    public function guardar(){
        var_dump($_POST);
    }
}