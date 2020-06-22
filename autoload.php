<?php

function controllers_autoload($classname){
    include 'controladores/' . $classname . '.php';
}

spl_autoload_register('controllers_autoload');