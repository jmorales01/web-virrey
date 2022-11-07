
<?php
$url = "http://" . $_SERVER['HTTP_HOST'] . "/projectLibrary"
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Link del CSS -->
    <link rel="stylesheet" href="../estilos/formato.css">
    <link rel="stylesheet" href="./style/perfilUsuario.css">

    <!-- Link de los iconos de AWESOME -->
    <script src="https://kit.fontawesome.com/a7dde7e9e1.js" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Abyssinica+SIL&display=swap" rel="stylesheet">

    <!-- Link de BOOTSTRAP -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <title>Perfil usuario</title>
</head>

<body>
    <header>
        <nav class="nav">
            <div class="search-nav">
                <ul class="panel">
                    <li class="icon">
                        <a href="/index.html">
                            <img src="../images/logo1.png" alt="">
                        </a>
                    </li>
                    <li class="search">
                        <div class="buscar">
                            <input type="search" placeholder="Buscar...">
                            <a href="/buscador.html"><button type="submit"><i class="fa-sharp fa-solid fa-magnifying-glass"></i></button></a>
                        </div>
                    </li>
                    <li class="shop">
                        <a href="/ubicacion.html"><button type="submit"><i class="fa-solid fa-location-dot"></i></button></a>
                        <a href="/carrito.html"><button type="submit"><i class="fa-sharp fa-solid fa-cart-plus"></i></button></a>
                        <a href="/login.html"><button type="submit"><i class="fa-solid fa-user-plus"></i></button></a>
                    </li>
                </ul>
            </div>
            <ul class="categoria">
                <li><a href="">Juvenil</a></li>
                <li><a href="">Ficcion</a></li>
                <li><a href="">Empresa</a></li>
                <li><a href="">Salud y bienestar</a></li>
                <li><a href="">Varios</a></li>
                <li><a href="">Reservas</a></li>
            </ul>
        </nav>
    </header>

    <main>
        <div class="container py-5">

            <div class="row m-3 p-2 perfilNombres" style="background-color: #fff;">
                <div class="col-sm-12 col-md-1 imgUser">
                    <i class="bi bi-person-bounding-box"></i>
                </div>
                <div class="col-sm-1 col-md-1"></div>
                <div class="col-sm-12 col-md-9 align-self-end">
                    <p class="tituloNombre">Luis Angel</p>
                    <p class="tituloApellido">Todale Vrid</p>
                </div>
            </div>

            <div class="row m-5">

                <div class="col-md-6 p-5 infoPersonal" style="background-color: #fff;">
                    <h3>Informacion personal</h3>

                    <label class="form-label" for="disabledInput">DNI</label>
                    <div class="row">
                        <div class="col-md-8">
                            <input class="form-control" id="disabledInput" value="Luis Suarez" type="text" placeholder="Disabled input here..." disabled="">
                        </div>
                        <div class="col-md-2">
                            <p class="editText"><a href=""><i class="bi bi-pencil-square"></i></a></p>
                        </div>
                    </div>

                    <label class="form-label" for="disabledInput">Nombre Completo</label>
                    <div class="row">
                        <div class="col-md-8">
                            <input class="form-control" id="disabledInput" value="Luis Suarez" type="text" placeholder="Disabled input here..." disabled="">
                        </div>
                        <div class="col-md-2">
                            <p class="editText"><a href=""><i class="bi bi-pencil-square"></i></a></p>
                        </div>
                    </div>

                    <label class="form-label" for="disabledInput">Correo electronico</label>
                    <div class="row">
                        <div class="col-md-8">
                            <input class="form-control" id="disabledInput" value="Luis Suarez" type="text" placeholder="Disabled input here..." disabled="">
                        </div>
                        <div class="col-md-2">
                            <p class="editText"><a href=""><i class="bi bi-pencil-square"></i></a></p>
                        </div>
                    </div>

                    <label class="form-label" for="disabledInput">Celular</label>
                    <div class="row">
                        <div class="col-md-8">
                            <input class="form-control" id="disabledInput" value="Luis Suarez" type="text" placeholder="Disabled input here..." disabled="">
                        </div>
                        <div class="col-md-2">
                            <p class="editText"><a href=""><i class="bi bi-pencil-square"></i></a></p>
                        </div>
                    </div>

                    <label class="form-label" for="disabledInput">Direccion</label>
                    <div class="row">
                        <div class="col-md-8">
                            <input class="form-control" id="disabledInput" value="Luis Suarez" type="text" placeholder="Disabled input here..." disabled="">
                        </div>
                        <div class="col-md-2">
                            <p class="editText"><a href=""><i class="bi bi-pencil-square"></i></a></p>
                        </div>
                    </div>

                    <div class="linkCambiar">
                        <a href="<?php echo $url . "/administrador/seccion/cambiar.php"; ?>">Cambiar contraseña</a>
                    </div>
                </div>


                <div class="col-md-5 offset-md-1 p-5" style="background-color: #fff;">
                    <div class="row">
                        <div class="col-md-12 pedidos">
                            <h3>Pedisos pendientes</h3>
                            <div class="list-group pedidosRecientes mt-4">
                                <a href="#" class="list-group-item list-group-item-action flex-column align-items-start bg-secondary">
                                    <div class="d-flex w-100 justify-content-between">
                                        <h5 class="mb-1">N°: 122444322</h5>
                                        <small>5 noviembre 2022</small>
                                    </div>
                                    <div>
                                        <label for="">Estado :</label>
                                        <input type="text" value="Enviado" disabled="">
                                    </div>
                                </a>
                                <a href="#" class="list-group-item list-group-item-action flex-column align-items-start p-4">
                                    <div class="progress">
                                        <div class="progress-bar" role="progressbar" style="width: 30%;" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100">Creado</div>
                                        <div class="progress-bar bg-success" role="progressbar" style="width: 30%;" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100">Enviado</div>
                                        <div class="progress-bar bg-info" role="progressbar" style="width: 0%;" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </a>
                            </div>
                            <div class="list-group pedidosRecientes mt-4">
                                <a href="#" class="list-group-item list-group-item-action flex-column align-items-start bg-secondary">
                                    <div class="d-flex w-100 justify-content-between">
                                        <h5 class="mb-1">N°: 122444322</h5>
                                        <small>5 noviembre 2022</small>
                                    </div>
                                    <div>
                                        <label for="">Estado :</label>
                                        <input type="text" value="Entregado" disabled="">
                                    </div>
                                </a>
                                <a href="#" class="list-group-item list-group-item-action flex-column align-items-start p-4">
                                    <div class="progress">
                                        <div class="progress-bar" role="progressbar" style="width: 30%;" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100">Creado</div>
                                        <div class="progress-bar bg-success" role="progressbar" style="width: 30%;" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100">Enviado</div>
                                        <div class="progress-bar bg-info" role="progressbar" style="width: 40%;" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">Entregado</div>
                                    </div>
                                </a>
                            </div>
                            <div class="list-group pedidosRecientes mt-4">
                                <a href="#" class="list-group-item list-group-item-action flex-column align-items-start bg-secondary">
                                    <div class="d-flex w-100 justify-content-between">
                                        <h5 class="mb-1">N°: 122444322</h5>
                                        <small>5 noviembre 2022</small>
                                    </div>
                                    <div>
                                        <label for="">Estado :</label>
                                        <input type="text" value="Entregado" disabled="">
                                    </div>
                                </a>
                                <a href="#" class="list-group-item list-group-item-action flex-column align-items-start p-4">
                                    <div class="progress">
                                        <div class="progress-bar" role="progressbar" style="width: 30%;" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100">Creado</div>
                                        <div class="progress-bar bg-success" role="progressbar" style="width: 30%;" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100">Enviado</div>
                                        <div class="progress-bar bg-info" role="progressbar" style="width: 40%;" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">Entregado</div>
                                    </div>
                                </a>
                            </div>

                        </div>
                    </div>
                </div>

            </div>

        </div>
    </main>

    <footer>
        <section class="footer">
            <div class="bloque">
                <div class="images_logo">
                    <a href="/index.html" class="">
                        <img src="/Trabajo Final/Parte02/Image/virreylogo.png" alt="">
                    </a>
                </div>
                <div class="footer_primer_bloque">
                    <div class="title_footer">
                        <p>VISITA NUESTRAS REDES</p>
                    </div>
                    <ul class="redes_sociales">
                        <li><a href="https://web.facebook.com/libreriaelvirrey/?_rdc=1&_rdr"><span><i class="fa-brands fa-facebook"></i></span></a></li>
                        <li><a href="https://www.instagram.com/libreriaelvirrey/?fbclid=IwAR3B9gsRmx-noRrkBd_JUqTz99KMvBRAafe3YHtDur-hP-vpq3Bm22y-Z8A"><span><i class="fa-brands fa-instagram"></i></span></a></li>
                        <li><a href="https://twitter.com/elvirreylibros?fbclid=IwAR0c2z-eFyVrIhR0TrwjtVY6kZ5A-CtwcxLvZYZ0m9Oc0Ezh9oHQWrdGR48"><span><i class="fa-brands fa-twitter"></i></span></a></li>
                        <li><a href=""><span><i class="fa-brands fa-linkedin-in"></i></span></a></li>
                    </ul>
                </div>
            </div>
            <div class="bloque">
                <div class="footer_segundo_bloque">
                    <div class="sobre_nosotros">
                        <div class="title_footer">
                            <p>SOBRE NOSOTROS</p>
                        </div>
                        <ul class="quienes_somos">
                            <li><a href="/QuienesSomos.html">Quienes somos</a></li>
                        </ul>
                    </div>
                    <div class="medios_pago">
                        <div class="title_footer">
                            <p>MEDIOS DE PAGO</p>
                        </div>
                        <ul class="icon_medio_pago">
                            <li><a href=""><span><i class="fa-brands fa-cc-visa"></i></span></a></li>
                            <li><a href=""><span><i class="fa-brands fa-cc-mastercard"></i></span></a></li>
                            <li><a href=""><span><i class="fa-brands fa-cc-amex"></i></span></a></li>
                            <li><a href=""><span><i class="fa-solid fa-money-bill-1-wave"></i></span></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="bloque">
                <div class="footer_tercer_bloque">
                    <div class="title_footer">
                        <p>POLITICAS</p>
                    </div>
                    <ul class="politicas">
                        <li><a href="">Politicas de privacidad</a></li>
                        <li><a href="">Politicas de cookis</a></li>
                        <li><a href="">Terminos y condiciones</a></li>
                        <li><a href="/PreguntasFrecuentes.html">Preguntas frecuentes</a></li>
                    </ul>
                </div>
            </div>
            <div class="bloque">
                <div class="footer_cuarto_bloque">
                    <div class="title_footer">
                        <p>CONTACTANOS</p>
                    </div>
                    <ul class="contactos">
                        <li><a href="">+51 982 310 245</a></li>
                        <li><a href="">info@elvirrey.com</a></li>
                        <li><a href="">(01) 644 9191</a></li>
                    </ul>
                </div>
            </div>
            <div class="bloque">
                <div class="footer_quinto_bloque">
                    <div class="title_footer">
                        <p>MIS PEDIDOS</p>
                    </div>
                    <ul class="pedidos">
                        <li><a href="">Mi pedido</a></li>
                        <li><a href="">Mi deseos</a></li>
                    </ul>
                </div>
            </div>
        </section>
        <section class="derechos_reservados">
            <div class="derechos_reservados_contenedor">
                <p>2022 Libreria el virrey &#169; todos los derechos reservados</p>
            </div>
        </section>
    </footer>
</body>

</html>