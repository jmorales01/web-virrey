
<?php

// Incluir la conexion a la base de datos
include("./administrador/config/bd.php");



// Seleccionar todo los libros
$sentenciaSQL = $conexion->prepare("select * from libro");
$sentenciaSQL->execute();
$listaLibros = $sentenciaSQL->fetchAll(PDO::FETCH_ASSOC);


?>















<!-- header de la pagina -->
<?php include("./template/header.php"); ?>



    <section class="fondo">
        <img src="./images/libreria-el-virrey.jpg" alt="">
    </section>

    <div class="title-explorador">
        <p><b>Explorador</b></p>
    </div>

    <section class="explorador">
        <div class="explorador-slider">
            <a href="#" class="link-ref">
                <!--Añadir el link de la referencia-->
                <div class="conteiner">
                    <div class="conteiner-img">
                        <img src="./icons/politica.svg" alt="">
                    </div>
                    <div class="container-desc">
                        <p class="content">Politica</p>
                    </div>
                </div>
            </a>
        </div>
        <div class="explorador-slider">
            <a href="#" class="link-ref">
                <!--Añadir el link de la referencia-->
                <div class="conteiner">
                    <div class="conteiner-img">
                        <img src="./icons/economi.svg" alt="">
                    </div>
                    <div class="container-desc">
                        <p class="content">Economia</p>
                    </div>
                </div>
            </a>
        </div>
        <div class="explorador-slider">
            <a href="#" class="link-ref">
                <!--Añadir el link de la referencia-->
                <div class="conteiner">
                    <div class="conteiner-img">
                        <img src="./icons/historia.svg" alt="">
                    </div>
                    <div class="container-desc">
                        <p class="content">Historia</p>
                    </div>
                </div>
            </a>
        </div>
        <div class="explorador-slider">
            <a href="#" class="link-ref">
                <!--Añadir el link de la referencia-->
                <div class="conteiner">
                    <div class="conteiner-img">
                        <img src="./icons/cine.svg" alt="">
                    </div>
                    <div class="container-desc">
                        <p class="content">Cine</p>
                    </div>
                </div>
            </a>
        </div>
        <div class="explorador-slider">
            <a href="#" class="link-ref">
                <!--Añadir el link de la referencia-->
                <div class="conteiner">
                    <div class="conteiner-img">
                        <img src="./icons/diseño.svg" alt="">
                    </div>
                    <div class="container-desc">
                        <p class="content">Diseño</p>
                    </div>
                </div>
            </a>
        </div>
        <div class="explorador-slider">
            <a href="#" class="link-ref">
                <!--Añadir el link de la referencia-->
                <div class="conteiner">
                    <div class="conteiner-img">
                        <img src="./icons/poesia.svg" alt="">
                    </div>
                    <div class="container-desc">
                        <p class="content">Poesia</p>
                    </div>
                </div>
            </a>
        </div>
        <div class="explorador-slider">
            <a href="#" class="link-ref">
                <!--Añadir el link de la referencia-->
                <div class="conteiner">
                    <div class="conteiner-img">
                        <img src="./icons/comics.svg" alt="">
                    </div>
                    <div class="container-desc">
                        <p class="content">Comics</p>
                    </div>
                </div>
            </a>
        </div>
        <div class="explorador-slider">
            <a href="#" class="link-ref">
                <!--Añadir el link de la referencia-->
                <div class="conteiner">
                    <div class="conteiner-img">
                        <img src="./icons/gastronomia.svg" alt="">
                    </div>
                    <div class="container-desc">
                        <p class="content">Gastronomia</p>
                    </div>
                </div>
            </a>
        </div>
    </section>

    <main>
        <div class="Carousel">
            <div class="titulo_carusel">
                <h3>POLITICA PERUANA</h3>
                <p></p> <!--Linea-->
            </div>
            <div class="slick-list" id="slick-list">
                <button class="slick-arrow slick-prev" id="button-prev" data-button="button-prev" onclick="app.processingButton(event)">
                    <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="chevron-left" class="svg-inline--fa fa-chevron-left fa-w-10" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512"><path fill="currentColor" d="M34.52 239.03L228.87 44.69c9.37-9.37 24.57-9.37 33.94 0l22.67 22.67c9.36 9.36 9.37 24.52.04 33.9L131.49 256l154.02 154.75c9.34 9.38 9.32 24.54-.04 33.9l-22.67 22.67c-9.37 9.37-24.57 9.37-33.94 0L34.52 272.97c-9.37-9.37-9.37-24.57 0-33.94z"></path></svg>
                </button>
                <div class="slick-track" id="track">
                    <?php
                    foreach($listaLibros as $libro) { ?>
                    <div class="slick">
                        <div>
                            <a href="/">
                                <picture>
                                    <img src="./img-libros/<?php echo $libro['imagen']; ?>" alt="Image">
                                </picture>
                                <div class="info_libro">
                                    <span class="info_libro_autor">Autor</span>
                                    <span class="info-libro_titulo"><?php echo $libro['nombre']; ?></span>
                                    <div class="info_libro_precio">
                                        <span>S/.<?php echo $libro['precio']; ?></span>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <?php } ?>
                </div>
                <button class="slick-arrow slick-next" id="button-next" data-button="button-next" onclick="app.processingButton(event)">
                    <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="chevron-right" class="svg-inline--fa fa-chevron-right fa-w-10" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512"><path fill="currentColor" d="M285.476 272.971L91.132 467.314c-9.373 9.373-24.569 9.373-33.941 0l-22.667-22.667c-9.357-9.357-9.375-24.522-.04-33.901L188.505 256 34.484 101.255c-9.335-9.379-9.317-24.544.04-33.901l22.667-22.667c9.373-9.373 24.569-9.373 33.941 0L285.475 239.03c9.373 9.372 9.373 24.568.001 33.941z"></path></svg>
                </button>
            </div>

            <div class="titulo_carusel">
                <h3>POLITICA PERUANA</h3>
                <p></p>
            </div>
            <div class="slick-list" id="slick-list">
                <button class="slick-arrow slick-prev" id="button-prev" data-button="button-prev" onclick="app.processingButton(event)">
                    <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="chevron-left" class="svg-inline--fa fa-chevron-left fa-w-10" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512"><path fill="currentColor" d="M34.52 239.03L228.87 44.69c9.37-9.37 24.57-9.37 33.94 0l22.67 22.67c9.36 9.36 9.37 24.52.04 33.9L131.49 256l154.02 154.75c9.34 9.38 9.32 24.54-.04 33.9l-22.67 22.67c-9.37 9.37-24.57 9.37-33.94 0L34.52 272.97c-9.37-9.37-9.37-24.57 0-33.94z"></path></svg>
                </button>
                <div class="slick-track" id="track">
                    <?php
                    foreach($listaLibros as $libro) { ?>
                    <div class="slick">
                        <div>
                            <a href="/">
                                <picture>
                                    <img src="./img-libros/<?php echo $libro['imagen']; ?>" alt="Image">
                                </picture>
                                <div class="info_libro">
                                    <span class="info_libro_autor">Autor</span>
                                    <span class="info-libro_titulo"><?php echo $libro['nombre']; ?></span>
                                    <div class="info_libro_precio">
                                        <span><?php echo $libro['precio']; ?></span>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <?php } ?>
                </div>
                <button class="slick-arrow slick-next" id="button-next" data-button="button-next" onclick="app.processingButton(event)">
                    <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="chevron-right" class="svg-inline--fa fa-chevron-right fa-w-10" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512"><path fill="currentColor" d="M285.476 272.971L91.132 467.314c-9.373 9.373-24.569 9.373-33.941 0l-22.667-22.667c-9.357-9.357-9.375-24.522-.04-33.901L188.505 256 34.484 101.255c-9.335-9.379-9.317-24.544.04-33.901l22.667-22.667c9.373-9.373 24.569-9.373 33.941 0L285.475 239.03c9.373 9.372 9.373 24.568.001 33.941z"></path></svg>
                </button>
            </div>

            <div class="titulo_carusel">
                <h3>POLITICA PERUANA</h3>
                <p></p>
            </div>
            <div class="slick-list" id="slick-list">
                <button class="slick-arrow slick-prev" id="button-prev" data-button="button-prev" onclick="app.processingButton(event)">
                    <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="chevron-left" class="svg-inline--fa fa-chevron-left fa-w-10" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512"><path fill="currentColor" d="M34.52 239.03L228.87 44.69c9.37-9.37 24.57-9.37 33.94 0l22.67 22.67c9.36 9.36 9.37 24.52.04 33.9L131.49 256l154.02 154.75c9.34 9.38 9.32 24.54-.04 33.9l-22.67 22.67c-9.37 9.37-24.57 9.37-33.94 0L34.52 272.97c-9.37-9.37-9.37-24.57 0-33.94z"></path></svg>
                </button>
                <div class="slick-track" id="track">
                    36<?php
                    foreach($listaLibros as $libro) { ?>
                    <div class="slick">
                        <div>
                            <a href="/">
                                <picture>
                                    <img src="./img-libros/<?php echo $libro['imagen']; ?>" alt="Image">
                                </picture>
                                <div class="info_libro">
                                    <span class="info_libro_autor">Autor</span>
                                    <span class="info-libro_titulo"><?php echo $libro['nombre']; ?></span>
                                    <div class="info_libro_precio">
                                        <span><?php echo $libro['precio']; ?></span>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <?php } ?>
                </div>
                <button class="slick-arrow slick-next" id="button-next" data-button="button-next" onclick="app.processingButton(event)">
                    <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="chevron-right" class="svg-inline--fa fa-chevron-right fa-w-10" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512"><path fill="currentColor" d="M285.476 272.971L91.132 467.314c-9.373 9.373-24.569 9.373-33.941 0l-22.667-22.667c-9.357-9.357-9.375-24.522-.04-33.901L188.505 256 34.484 101.255c-9.335-9.379-9.317-24.544.04-33.901l22.667-22.667c9.373-9.373 24.569-9.373 33.941 0L285.475 239.03c9.373 9.372 9.373 24.568.001 33.941z"></path></svg>
                </button>
            </div>

            <div class="titulo_carusel">
                <h3>POLITICA PERUANA</h3>
                <p></p>
            </div>
            <div class="slick-list" id="slick-list">
                <button class="slick-arrow slick-prev" id="button-prev" data-button="button-prev" onclick="app.processingButton(event)">
                    <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="chevron-left" class="svg-inline--fa fa-chevron-left fa-w-10" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512"><path fill="currentColor" d="M34.52 239.03L228.87 44.69c9.37-9.37 24.57-9.37 33.94 0l22.67 22.67c9.36 9.36 9.37 24.52.04 33.9L131.49 256l154.02 154.75c9.34 9.38 9.32 24.54-.04 33.9l-22.67 22.67c-9.37 9.37-24.57 9.37-33.94 0L34.52 272.97c-9.37-9.37-9.37-24.57 0-33.94z"></path></svg>
                </button>
                <div class="slick-track" id="track">
                    <?php
                    foreach($listaLibros as $libro) { ?>
                    <div class="slick">
                        <div>
                            <a href="/">
                                <picture>
                                    <img src="./img-libros/<?php echo $libro['imagen']; ?>" alt="Image">
                                </picture>
                                <div class="info_libro">
                                    <span class="info_libro_autor">Autor</span>
                                    <span class="info-libro_titulo"><?php echo $libro['nombre']; ?></span>
                                    <div class="info_libro_precio">
                                        <span><?php echo $libro['precio']; ?></span>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <?php } ?>
                </div>
                <button class="slick-arrow slick-next" id="button-next" data-button="button-next" onclick="app.processingButton(event)">
                    <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="chevron-right" class="svg-inline--fa fa-chevron-right fa-w-10" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512"><path fill="currentColor" d="M285.476 272.971L91.132 467.314c-9.373 9.373-24.569 9.373-33.941 0l-22.667-22.667c-9.357-9.357-9.375-24.522-.04-33.901L188.505 256 34.484 101.255c-9.335-9.379-9.317-24.544.04-33.901l22.667-22.667c9.373-9.373 24.569-9.373 33.941 0L285.475 239.03c9.373 9.372 9.373 24.568.001 33.941z"></path></svg>
                </button>
            </div>

            <div class="titulo_carusel">
                <h3>POLITICA PERUANA</h3>
                <p></p>
            </div>
            <div class="slick-list" id="slick-list">
                <button class="slick-arrow slick-prev" id="button-prev" data-button="button-prev" onclick="app.processingButton(event)">
                    <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="chevron-left" class="svg-inline--fa fa-chevron-left fa-w-10" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512"><path fill="currentColor" d="M34.52 239.03L228.87 44.69c9.37-9.37 24.57-9.37 33.94 0l22.67 22.67c9.36 9.36 9.37 24.52.04 33.9L131.49 256l154.02 154.75c9.34 9.38 9.32 24.54-.04 33.9l-22.67 22.67c-9.37 9.37-24.57 9.37-33.94 0L34.52 272.97c-9.37-9.37-9.37-24.57 0-33.94z"></path></svg>
                </button>
                <div class="slick-track" id="track">
                    <?php
                    foreach($listaLibros as $libro) { ?>
                    <div class="slick">
                        <div>
                            <a href="/">
                                <picture>
                                    <img src="./img-libros/<?php echo $libro['imagen']; ?>" alt="Image">
                                </picture>
                                <div class="info_libro">
                                    <span class="info_libro_autor">Autor</span>
                                    <span class="info-libro_titulo"><?php echo $libro['nombre']; ?></span>
                                    <div class="info_libro_precio">
                                        <span><?php echo $libro['precio']; ?></span>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <?php } ?>
                </div>
                <button class="slick-arrow slick-next" id="button-next" data-button="button-next" onclick="app.processingButton(event)">
                    <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="chevron-right" class="svg-inline--fa fa-chevron-right fa-w-10" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512"><path fill="currentColor" d="M285.476 272.971L91.132 467.314c-9.373 9.373-24.569 9.373-33.941 0l-22.667-22.667c-9.357-9.357-9.375-24.522-.04-33.901L188.505 256 34.484 101.255c-9.335-9.379-9.317-24.544.04-33.901l22.667-22.667c9.373-9.373 24.569-9.373 33.941 0L285.475 239.03c9.373 9.372 9.373 24.568.001 33.941z"></path></svg>
                </button>
            </div>

            <div class="titulo_carusel">
                <h3>POLITICA PERUANA</h3>
                <p></p>
            </div>
            <div class="slick-list" id="slick-list">
                <button class="slick-arrow slick-prev" id="button-prev" data-button="button-prev" onclick="app.processingButton(event)">
                    <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="chevron-left" class="svg-inline--fa fa-chevron-left fa-w-10" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512"><path fill="currentColor" d="M34.52 239.03L228.87 44.69c9.37-9.37 24.57-9.37 33.94 0l22.67 22.67c9.36 9.36 9.37 24.52.04 33.9L131.49 256l154.02 154.75c9.34 9.38 9.32 24.54-.04 33.9l-22.67 22.67c-9.37 9.37-24.57 9.37-33.94 0L34.52 272.97c-9.37-9.37-9.37-24.57 0-33.94z"></path></svg>
                </button>
                <div class="slick-track" id="track">
                    <?php
                    foreach($listaLibros as $libro) { ?>
                    <div class="slick">
                        <div>
                            <a href="/">
                                <picture>
                                    <img src="./img-libros/<?php echo $libro['imagen']; ?>" alt="Image">
                                </picture>
                                <div class="info_libro">
                                    <span class="info_libro_autor">Autor</span>
                                    <span class="info-libro_titulo"><?php echo $libro['nombre']; ?></span>
                                    <div class="info_libro_precio">
                                        <span><?php echo $libro['precio']; ?></span>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <?php } ?>
                </div>
                <button class="slick-arrow slick-next" id="button-next" data-button="button-next" onclick="app.processingButton(event)">
                    <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="chevron-right" class="svg-inline--fa fa-chevron-right fa-w-10" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512"><path fill="currentColor" d="M285.476 272.971L91.132 467.314c-9.373 9.373-24.569 9.373-33.941 0l-22.667-22.667c-9.357-9.357-9.375-24.522-.04-33.901L188.505 256 34.484 101.255c-9.335-9.379-9.317-24.544.04-33.901l22.667-22.667c9.373-9.373 24.569-9.373 33.941 0L285.475 239.03c9.373 9.372 9.373 24.568.001 33.941z"></path></svg>
                </button>
            </div>
        </div>
    </main>





<!-- js para el carosel -->
<script defer src="./script/main.js"></script>

<!-- Link para los estilos con CSS -->
<link rel="stylesheet" href="./estilos/styles.css">


<!-- footer de la pagina -->
<?php include("./template/footer.php"); ?>
