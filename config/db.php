<?php

// Variables para la conexion a la base de datos
$host = "localhost";
$bd = "libreriaVirrey";
$usuario = "root";
$contrasenia = "";

try {
    $conexion = new PDO("mysql:host=$host; dbname=$bd",$usuario,$contrasenia);

    if ($conexion) {
        //echo "Conectado correctamente";
    }
} catch ( Exception $ex) {
    echo $ex->getMessage();
}


function conect(&$msg){
    
    $cn = mysqli_connect("localhost","root","");
    if (!$cn) {
        echo "Error en la conexion $ex";
        return false;
    }

    $bd = mysqli_select_db($cn,"libreria_virrey");

    if (!$bd) {
        echo "Error, base de datos no existe";
        mysqli_close($cn);
        return false;
    }

    return $cn;
}

function say($cad){
    echo $cad;
}

?>