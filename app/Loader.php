<?php
//carga todas las clases principales

//esta funcion carga las clases requeridas mandando el nombre de la clase por parametro
//https://www.php.net/manual/es/function.spl-autoload-register.php

spl_autoload_register(function ($nombreClase){

    require_once 'core/'.$nombreClase.'.php';
});



$app = new App;
?>