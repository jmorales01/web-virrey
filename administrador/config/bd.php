<?php

// Variables para la conexion a la base de datos
$host = "localhost";
$bd = "libreria_virrey";
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


?>