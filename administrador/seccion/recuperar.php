<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recuperar</title>

    <!-- Link del css y el js -->
    <link href="../style/login.css" rel="stylesheet" type="text/css" />

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
                <h3>Recuperar contraseña</h3>
                <!-- Validar para imprimir mensaje -->
                <?php if (isset($mensaje)) : ?>
                    <div class="alert alert-danger" role="alert">
                        <?php echo $mensaje; ?>
                    </div>
                <?php endif; ?>
                <form method="POST" action="#">
                    <div class="form-group">
                        <label for="exampleInputEmail1" class="form-label mt-4 has-success">Email address</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                        <small id="emailHelp" class="form-text text-muted">Ingrese un correo activo.</small>
                    </div>
                    <div class="alert alert-dismissible alert-secondary">
                        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                        <strong>Revice su correo !</strong> En los siguientes minutos le llegara la contraseña a su correo.
                    </div>
                    <div class="d-grid gap-2 btnRecuperar">
                        <button class="btn btn-lg btn-primary" type="button">Enviar</button>
                    </div>
                </form>
            </div>
        </div>
    </main>
</body>

</html>