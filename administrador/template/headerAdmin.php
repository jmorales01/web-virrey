<!-- Link a la pagina principal -->
<?php
$url = "http://" . $_SERVER['HTTP_HOST'] . "/projectLibrary"
?>


<?php
/*
session_start();
if (!isset($_SESSION['usuario'])) {
    header('Location:./index.php');
}else{

    if ($_SESSION['usuario'] == "ok") {
        $nombreUsuario = $_SESSION["nombreUsuario"];
    }
}
*/

?>

<!doctype html>
<html lang="en">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <!-- Bootstrap icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">

    <!-- Icons de awesome-->
    <script src="https://kit.fontawesome.com/a7dde7e9e1.js" crossorigin="anonymous"></script>

    <!-- Graficos con Chart.js -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.9.1/chart.min.js" integrity="sha512-ElRFoEQdI5Ht6kZvyzXhYG9NqjtkmlkfYk0wr6wHxU9JEHakS7UJZNeml5ALk+8IKlU6jDgMabC3vkumRokgJA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <!-- datatable con JQuery -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap5.min.css">


    <style>
        /* VARIABLES DEFINIDAS CON LOS RECURSOS */
        :root {
            --white-black: #F4F6F8;
            --secundary-color: #efe6dd;
            --orange-color: #F89C37;
            --brow-color: #331803;
            --red-black: #900C3F;
            --red-color: #C70039;
            --font-family: 'Abyssinica SIL', serif;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body{
            background-color: var(--white-black);
        }

        .dropdown {
            margin-right: 50px;
        }

        main {
            margin-top: 100px;
            margin-bottom: 30px;
            min-height: calc(100vh - 100px - 160px);
        }

        footer {
            width: 100%;
            height: 50px;
        }

        footer div {
            height: 100%;
            color: #fff;
            display: flex;
            justify-content: center;
            align-items: center;
        }


    </style>

</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="<?php echo $url . "/administrador/index.php"; ?>">
                <img src="../image/logo1.png" alt="logo" width="180px" style="background-color: #fff; padding: 8px;">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-center" id="navbarScroll">
                <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" dropdownrole="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="bi bi-file-earmark-plus-fill" style="font-size: 25px; margin: 3px;"></i>
                            Agregar
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="<?php echo $url . "/administrador/seccion/productos.php"; ?>">Libros</a></li>
                            <li><a class="dropdown-item" href="#">Autores</a></li>
                            <li><a class="dropdown-item" href="#">Editorial</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="bi bi-bar-chart-fill" style="font-size: 25px; margin: 3px;"></i>
                            Reportes
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="<?php echo $url . "/administrador/seccion/repInventario.php"; ?>">Inventario</a></li>
                            <li><a class="dropdown-item" href="<?php echo $url . "/administrador/seccion/repVentas.php"; ?>">Ventas</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="bi bi-person-fill" style="font-size: 25px; margin: 3px;"></i>
                            Usuario
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="<?php echo $url . "/administrador/seccion/perfil.php"; ?>">Perfil</a></li>
                            <li><a class="dropdown-item" href="<?php echo $url . "/administrador/seccion/cambiar.php"; ?>">Cambiar contraseña</a></li>
                            <li><a class="dropdown-item" href="<?php echo $url . "/administrador/seccion/recuperar.php"; ?>">Recuperar contraseña</a></li>
                            <li><a class="dropdown-item" href="<?php echo $url ?>">Cerrar</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <main>