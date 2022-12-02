
<?php

if (!empty($_POST["btnIngresar"])) {
    
    if (empty($_POST["user"]) and empty($_POST["password"])) {
        $mensaje = "Error: El usuario o contraseña som incorrectos";
    } else {
        $usuario = $_POST["user"];
        $clave = $_POST["password"];
        $sql = $conexion->query("select * from usuario where correoUsuario  = '$usuario' and contraseniaUsuario = '$clave'");
        if ($datos=$sql->) {
            header('Location:./seccion/perfil.php');
            echo 'Ingresar a la intranet';
        }else{
            $mensaje = "Error: acceso denegado";
        }
    }
}

?>