<!-- Link a la pagina principal -->
<?php
$url = "http://" . $_SERVER['HTTP_HOST'] . "/projectLibrary"
?>





<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Librería el Virrey</title>


    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <!-- Bootstrap icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">

    <!-- Icons de awesome-->
    <script src="https://kit.fontawesome.com/a7dde7e9e1.js" crossorigin="anonymous"></script>

    <!-- Graficos con Chart.js -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.9.1/chart.min.js" integrity="sha512-ElRFoEQdI5Ht6kZvyzXhYG9NqjtkmlkfYk0wr6wHxU9JEHakS7UJZNeml5ALk+8IKlU6jDgMabC3vkumRokgJA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <!--  Datatables  -->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs4/dt-1.10.20/datatables.min.css" />

    <!--  extension responsive  -->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/responsive/2.2.3/css/responsive.dataTables.min.css">

    <!--  Validar las utilidades  -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Abyssinica+SIL&display=swap" rel="stylesheet">
    
    <!-- Estilos de CSS -->
    <style>
        /* VARIABLES DEFINIDAS CON LOS RECURSOS */
        :root {
            --white-black: #F4F6F8;
            --secundary-color: #efe6dd;
            --orange-color: #E59866;
            --oran-color: #F89C37;
            --brow-color: #331803;
            --red-black: #900C3F;
            --red-color: #C70039;
            --font-size: 1.8rem;
            --font-family: 'Abyssinica SIL', serif;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        html {
            font-size: 62.5%;
            background-color: var(--white-black);
        }

        body {
            width: 100%;
            display: flex;
            flex-direction: column;
            min-height: 100vh;
            margin: auto;
            background-color: var(--primary-color);
            font-family: var(--font-family);
        }

        a {
            color: #fff;
            text-decoration: none;
        }

        .espacio{
            height: 15rem;
            width: 100%;
        }

        /**
        * La barra de navegacion de las paginas webs
        * donde estara el logo, el buscador,
        * el login, el carrito
        */

        header {
            top: 0;
            left: 0;
            width: 100%;
            position: fixed;
            z-index: 10;
        }

        .search-nav {
            width: 100%;
            height: 7rem;
            background-color: #F5CBA7;
            display: flex;
            justify-content: stretch;
            align-items: center;
        }

        .search-nav .ul {
            width: 100%;
            display: flex;
            justify-content: stretch;
            align-items: center;
        }

        .search-nav .ul li {
            list-style: none;
        }

        /* Logo de la empresa */
        .icon {
            width: 25%;
            padding-left: 3rem;
        }

        .icon img {
            width: 70%;
        }

        /* Buscador */
        .search {
            height: 4rem;
            width: 50%;
            display: flex;
            flex-direction: row;
        }

        .search form {
            width: 100%;
        }

        .buscar input {
            height: 100%;
            font-size: 1.6rem;
            padding-left: 1rem;
        }

        .search button {
            height: 100%;
            margin-left: 10px;
            background-color: var(--brow-color);
            color: #fff;
            font-size: 1.6rem;
        }

        /* Botones mapas, carrito y login */
        .shop {
            width: 25%;
            text-align: right;
            margin-right: 3rem;
        }

        .shop a {
            height: 4rem;
            display: inline-block;
            justify-content: center;
            align-items: center;
            border: none;
            background-color: transparent;
            margin: 0 4%;
            font-size: 1.8rem;
            color: var(--brow-color);
            text-decoration: none;
        }

        .shop a i {
            font-size: 3rem;
            cursor: pointer;
            margin-right: .5rem;
            color: var(--brow-color);
        }

        .shop a i:hover {
            color: var(--brow-color);
            opacity: .5;
        }

        nav .categoria {
            height: 4rem;
            width: 100%;
            background-color: rgba(0, 0, 0, 0.8);
        }

        .categoria li a {
            color: #fff;
            font-size: 1.5rem;
            letter-spacing: 2px;
            font-weight: 800;
        }



        @media (max-width: 850px) {

            .shop a {
                font-size: 1rem;
            }

            .shop a i {
                font-size: 1.5rem;
            }

            nav .categoria {
                display: flex;
                flex-direction: column;
                height: 18rem;
            }

            .categoria li a {
                font-size: 1.4rem;
            }

            .espacio{
                height: 20rem;
            }
        }



        /**
        * Diseño del footer con 5 bloques
        * y sus imagenes
        */

        footer .row {
            background-color: #F5CBA7;
            width: 100%;
            margin-top: 100px;
            text-align: center;
        }

        footer .col{
            display: flex;
            justify-content: center;
            text-align: center;
            
        }

        .title_footer {
            color: #000;
            font-weight: 600;
            margin: 10px 0;
        }

        .title_footer p {
            font-size: 1.4rem;
            text-align: center;
        }

        footer a {
            font-size: 15px;
            font-style: italic;
            text-decoration: none;
            color: var(--brow-color);
        }

        footer a:hover {
            text-decoration: none;
            color: var(--brow-color);
        }

        /* logo de la empresa */
        .images_logo {
            width: 90%;
            margin: 50px auto;
            background-color: #fff;
            padding: 10px;
            text-align: center;
        }

        .images_logo a img {
            width: 100%;
            text-align: center;
        }


        li {
            list-style: none;
        }

        .derechos {
            display: flex;
            justify-content: space-around;
        }

        .derechos ul {
            display: flex;
            justify-content: center;
        }

        .derechos ul li {
            margin-right: 20px;
        }

        .derechos p {
            font-size: 15px;
            font-style: oblique;
        }

        .derechos ul li a i {
            font-size: 25px;
        }
    </style>

</head>

<body>

    <header>
        <nav class="nav">
            <div class="search-nav">
                <ul class="ul">
                    <li class="icon">
                        <a href="<?php echo $url ?>">
                            <img src="../images/logo1.png" alt="">
                        </a>
                    </li>
                    <li class="search">
                        <form class="d-flex buscar">
                            <input class="form-control me-sm-2" type="text" placeholder="Search">
                            <button class="btn btn-secondary my-2 my-sm-0" type="submit">Buscar</button>
                        </form>
                    </li>
                    <li class="shop">
                        <a href="<?php echo $url . "/seccion/ubicacion.php" ?>"><i class="fa-solid fa-location-dot"></i></a>
                        <a href="<?php echo $url . "/seccion/carrito.php" ?>"><i class="fa-sharp fa-solid fa-cart-plus"></i></a>
                        <a href="<?php echo $url . "/administrador/index.php" ?>"><i class="bi bi-person-circle"></i> Iniciar sesion</i></a>
                    </li>
                </ul>
            </div>
            <ul class="nav nav-pills nav-fill categoria">
                <li class="nav-item">
                    <a class="nav-link" href="#">Juvenil</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Ficcion</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Empresa</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Salud y bienestar</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Varios</a>
                </li>
            </ul>
        </nav>
    </header>
    <div class="espacio"></div>