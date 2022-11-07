<!-- header de la pagina -->
<?php include("./template/variables.php"); ?>




<?php

// Recuperar datos de login 
session_start();
if ($_POST) {

    if (($_POST['usuario'] == "develoteca") && ($_POST["contrasenia"] == "sistema")) {
        $_SESSION['usuario'] = "ok";
        $_SESSION['nombreUsuario'] = "Develoteca";
        header('Location:./inicio.php');
    } else {
        $mensaje = "Error: El usuario o contraseña som incorrectos";
    }
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <link href="./style/login.css?<?=time()?>" rel="stylesheet" type="text/css" />
    <script src="../script/login.js?<?=time()?>" type="module"></script>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
    <main class="chico">
    <div class="login">
    <div class="imgVirrey">
        <img src="../images/logo1.png" alt="">
    </div>
    <div class="login-form">
        <h3>Inicio</h3>
        <!-- Validar para imprimir mensaje -->
        <?php if (isset($mensaje)) : ?>
            <div class="alert alert-danger" role="alert">
                <?php echo $mensaje; ?>
            </div>
        <?php endif; ?>
        <form method="POST" action="index.php" id="user-form" class="form">
            <div class="txtb">
                <label for="usuario">E-mail</label>
                <input type="email" class="form-control" id="user" placeholder="Usuario" required>
                <p id="errorUser" class=""></p>
            </div>
            <div class="txtb">
                <label for="contraseña">Contraseña</label>
                <input type="password" class="form-control" id="password" name="password" placeholder="Contraseña" required>
                <p id="errorPass" class=""></p>
            </div>
            <button type="submit" id="submit-btn" class="ingreso">
                Iniciar seccion
            </button>

            <div class="registrate">
                <a href="<?php echo $url . "/administrador/seccion/recuperar.php"; ?>">¿Olvidaste tu contraseña?</a>
            </div>
            <div class="registrate">
                ¿No tienes cuenta? <a href="<?php echo $url . "/administrador/seccion/registrate.php"; ?>"">Registrate</a>
            </div>
        </form>
    </div>
</div>
    </main>
</body>
</html>
