<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>


<?php
$nombre = $_POST!['nombre'];
$email = $_POST!['email'];
$telefono = $_POST!['telefono'];
$celular = $_POST!['celular'];
$mensaje = $_POST!['mensaje'];

echo "Su nombre:" .$nombre ."<br>";
echo "Su email:" .$email ."<br>";
echo "Su telefono:" .$telefono ."<br>";
echo "mensaje:" .$celular ."<br>";

$resultado = verificaDatos($nombre, $email);
if($resultado){
    echo"<br>Bienvenido";
    {else{
        echo"<br> Datos incorrectos"
    }
    function verificarDatos($nombre, $email){
        if($nombre=="Gustavo" && $email=="g@gmail.com"){
            return true;
        }else{
            return false;
        }
        }
        ?>
    }
}
</body>
</html>

