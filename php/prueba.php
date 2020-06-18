<?php
include("conectarBaseDatos.php");
$mysqli = conectar_bd();
//Existe un error 'connect_error, fallando asi el intento de conexion'
if(mysql->connect_errono){


    echo"Lo sentimos,este sitio web està experimentando problemas.";
    // Algo que no se deberìa de hacer en un sitio pùblico,
    aunque este ejemplo lo mostrara

    echo "<br>Error Fallo al conectarse a MySQL debido a: \n"<br>
    echo "<br>Errno:", $mysqli->connect_errno,"\n";
    echo "<br>Error:", $mysqli->connect_error,"\n";


    //Podria ser conveniente mostrar algo interesante.aunque nosotros simplemente saldremos
    exit;
}else{
    echo $mysqli;
    echo "<br><h1>Bienvenido</h1>";
}
mysql_close($mysqli);
?>

