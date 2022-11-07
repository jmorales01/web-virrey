<?php include("../template/variables.php"); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrate</title>
    <link href="../style/registrar.css" rel="stylesheet" type="text/css" />
    <script src="../../script/registrate.js" type="module"></script>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    <main class="grande">
        <div class="registrar">
            <div class="imgVirrey">
                <img src="../../images/logo1.png" alt="">
            </div>
            <div class="formularioRegistro">
                <form action="#" method="get" name="formDatosPersonales">
                    <div class="tituloFormulario">
                        <label for="Registrate">Registrate</label>
                    </div>
                    <div>
                        <label for="Nombre">Nombre</label>
                        <input type="text" class="form-control" id="nombre" placeholder="Escribe tu nombre" required />
                    </div>
                    <div>
                        <label for="Apellidos">Apellidos</label>
                        <input type="text" class="form-control" id="apellido" placeholder="Escribe tu apellido" required />
                    </div>
                    <div>
                        <label for="email">Email</label>
                        <input type="email" class="form-control" id="email" placeholder="Email" required />
                    </div>
                    <div>
                        <label for="contraseña">Contraseña</label>
                        <input type="password" class="form-control" id="contrasena1" placeholder="Contraseña" />
                    </div>
                    <div>
                        <label for="contraseña">Contraseña</label>
                        <input type="password" class="form-control" id="contrasena2" placeholder="Confirmar contraseña" />
                    </div>
                    <div class="buttonRegistrar">
                        <button id="btn-registro" type="submit"> Resgistrate</button>
                    </div>
                </form>
            </div>
        </div>
    </main>
</body>

</html>