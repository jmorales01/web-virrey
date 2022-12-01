<?php

include("./bd.php");


function userExists($user, $pass)
{

    $querys = $conexion->prepare('SELECT * FROM usuarios WHERE username = :user AND password = :pass');
    $query->execute(['user' => $user, 'pass' => $md5pass]);

    if ($query->rowCount()) {
        return true;
    } else {
        return false;
    }
}

function setUser($user)
{
    $query = $conexion->prepare('SELECT * FROM usuarios WHERE username = :user');
    $query->execute(['user' => $user]);

    foreach ($query as $currentUser) {
        $this->nombre = $currentUser['nombre'];
        $this->username = $currentUser['username'];
    }
}

function getNombre()
{
    return $this->nombre;
}

?>