<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cambiar</title>

    <!-- Link del css y el js -->
    <link href="../style/login.css" rel="stylesheet" type="text/css" />
    <script src="../../script/cambiarContraseña.js" type="module"></script>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    <main>
        <div class="login">
            <div class="imgVirrey">
                <img src="../../images/logo1.png" alt="">
            </div>
            <div class="login-form">
                <h3>Cambiar contraseña</h3>
                <!-- Validar para imprimir mensaje -->
                <?php if (isset($mensaje)) : ?>
                    <div class="alert alert-danger" role="alert">
                        <?php echo $mensaje; ?>
                    </div>
                <?php endif; ?>
                <form method="POST" action="#">
                    <div class="form-group">
                        <label for="exampleInputPassword1" class="form-label mt-4">Contraseña actual</label>
                        <input type="password" class="form-control" id="passActual" placeholder="Password">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1" class="form-label">Contraseña nueva</label>
                        <input type="password" class="form-control" id="passNuevo" placeholder="Password">
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control" id="confirmPass" placeholder="Password">
                        <small id="emailHelp" class="form-text text-muted">Confirma la nueva contraseña.</small>
                    </div>
                    <div class="d-grid gap-2 conteinerCambiar">
                        <button class="btn btn-lg btn-primary" id="btnCambiar" type="button">Cambiar contraseña</button>
                    </div>
                </form>
            </div>
        </div>
    </main>
</body>

</html>