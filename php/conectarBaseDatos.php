<?php
function conectar_bd(){
    $servidor "localhost";
    $usuario= "root";
    $contasena= "";
    $nombrebd= "innovaraWeb";

    //Conectarse a y seleccionear una base de datos MySQL llamada innovaraweb
    //Nombre de host: 127.0.0.1, nombre de usuario: tu usuario,
    //contraseña: tu contraseña, bd: innovaraweb


    $mysqli = new mysqli($servidor, $usuario, $contrasena. $nombrebd);
    return $mysqli;
}