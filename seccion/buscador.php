

<!-- header de la pagina -->
<?php 

$ruta = "../images/";
include("../template/header.php"); 

?>



<main>
    <h2>Game of thrones</h2>
    <p class="cant_resultado">Resultado (23)</p>
    <div class="conteiner_search">
        <div class="conteiner_filtro">
            <h3>FILTRO</h3>
            <p class="line"></p>
            <div class="categoria_conteiner">
                <h4>CATEGORIA</h4>
                <ul class="list_categoria">
                    <li>
                        <input type="checkbox" name="categoria[]" id="Arte" value="Arte">
                        <label for="Arte">Arte</label>
                    </li>
                    <li>
                        <input type="checkbox" name="categoria[]" id="historia" value="Historia y Cultura">
                        <label for="historia">Historia y Cultura</label>
                    </li>
                    <li>
                        <input type="checkbox" name="categoria[]" id="comic" value="Comic">
                        <label for="comic">Comic</label>
                    </li>
                </ul>
                <div class="button_search">
                    <button type="submit" class="search_categoria">Buscar</button>
                </div>
            </div>
            <p class="line"></p>
            <div class="autor_conteiner">
                <h4>AUTOR</h4>
                <ul class="list_autor">
                    <li>
                        <input type="checkbox" name="autor[]" id="autor1" value="Pablo Neruda">
                        <label for="autor1">Pablo Neruda</label>
                    </li>
                    <li>
                        <input type="checkbox" name="autor[]" id="autor2" value="Cesar Vallejo">
                        <label for="autor2">Cesar Vallejo</label>
                    </li>
                    <li>
                        <input type="checkbox" name="autor[]" id="autor3" value="Wong">
                        <label for="autor3">Wong</label>
                    </li>
                </ul>
                <div class="button_search">
                    <button type="submit" class="search_autor">Buscar</button>
                </div>
            </div>
            <p class="line"></p>
            <div class="editorial_conteiner">
                <h4>EDITORIAL</h4>
                <ul class="list_editorial">
                    <li>
                        <input type="checkbox" name="editorial[]" id="editorial1" value="editorial1">
                        <label for="editorial1">editorial1</label>
                    </li>
                    <li>
                        <input type="checkbox" name="editorial[]" id="editorial2" value="editorial2">
                        <label for="editorial2">editorial2</label>
                    </li>
                    <li>
                        <input type="checkbox" name="editorial[]" id="editorial3" value="editorial3">
                        <label for="editorial3">editorial3</label>
                    </li>
                </ul>
                <div class="button_search">
                    <button type="submit" class="search_editorial">Buscar</button>
                </div>
            </div>
        </div>
        <div class="conteiner_resultado">
            <div class="conteiner_libros">
                <div class="slick">
                    <div>
                        <a href="/libros.html">
                            <picture>
                                <img src="/img-libros/1.jpg" alt="Image">
                            </picture>
                            <div class="info_libro">
                                <div>
                                    <span class="info_libro_autor">Nombre Completo del Autor</span>
                                </div>
                                <div>
                                    <span class="info-libro_titulo">Titulo de el libro bien Grande con Muchos de</span>
                                </div>
                                <div class="info_libro_precio">
                                    <span>S/ 200.30</span>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="slick">
                    <div>
                        <a href="/libros.html">
                            <picture>
                                <img src="/img-libros/2.jpg" alt="Image">
                            </picture>
                            <div class="info_libro">
                                <div>
                                    <span class="info_libro_autor">Nombre Completo del Autor</span>
                                </div>
                                <div>
                                    <span class="info-libro_titulo">Titulo de el libro bien Grande con Muchos de</span>
                                </div>
                                <div class="info_libro_precio">
                                    <span>S/ 200.30</span>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="slick">
                    <div>
                        <a href="/libros.html">
                            <picture>
                                <img src="/img-libros/3.jpg" alt="Image">
                            </picture>
                            <div class="info_libro">
                                <div>
                                    <span class="info_libro_autor">Nombre Completo del Autor</span>
                                </div>
                                <div>
                                    <span class="info-libro_titulo">Titulo de el libro bien Grande con Muchos de</span>
                                </div>
                                <div class="info_libro_precio">
                                    <span>S/ 200.30</span>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="slick">
                    <div>
                        <a href="/libros.html">
                            <picture>
                                <img src="/img-libros/4.jpg" alt="Image">
                            </picture>
                            <div class="info_libro">
                                <div>
                                    <span class="info_libro_autor">Nombre Completo del Autor</span>
                                </div>
                                <div>
                                    <span class="info-libro_titulo">Titulo de el libro bien Grande con Muchos de</span>
                                </div>
                                <div class="info_libro_precio">
                                    <span>S/ 200.30</span>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="slick">
                    <div>
                        <a href="/libros.html">
                            <picture>
                                <img src="/img-libros/5.jpg" alt="Image">
                            </picture>
                            <div class="info_libro">
                                <div>
                                    <span class="info_libro_autor">Nombre Completo del Autor</span>
                                </div>
                                <div>
                                    <span class="info-libro_titulo">Titulo de el libro bien Grande con Muchos de</span>
                                </div>
                                <div class="info_libro_precio">
                                    <span>S/ 200.30</span>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="slick">
                    <div>
                        <a href="/libros.html">
                            <picture>
                                <img src="/img-libros/6.png" alt="Image">
                            </picture>
                            <div class="info_libro">
                                <div>
                                    <span class="info_libro_autor">Nombre Completo del Autor</span>
                                </div>
                                <div>
                                    <span class="info-libro_titulo">Titulo de el libro bien Grande con Muchos de</span>
                                </div>
                                <div class="info_libro_precio">
                                    <span>S/ 200.30</span>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="slick">
                    <div>
                        <a href="/libros.html">
                            <picture>
                                <img src="/img-libros/7.jpg" alt="Image">
                            </picture>
                            <div class="info_libro">
                                <div>
                                    <span class="info_libro_autor">Nombre Completo del Autor</span>
                                </div>
                                <div>
                                    <span class="info-libro_titulo">Titulo de el libro bien Grande con Muchos de</span>
                                </div>
                                <div class="info_libro_precio">
                                    <span>S/ 200.30</span>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="slick">
                    <div>
                        <a href="/">
                            <picture>
                                <img src="/img-libros/8.png" alt="Image">
                            </picture>
                            <div class="info_libro">
                                <div>
                                    <span class="info_libro_autor">Nombre Completo del Autor</span>
                                </div>
                                <div>
                                    <span class="info-libro_titulo">Titulo de el libro bien Grande con Muchos de</span>
                                </div>
                                <div class="info_libro_precio">
                                    <span>S/ 200.30</span>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="slick">
                    <div>
                        <a href="/">
                            <picture>
                                <img src="/img-libros/9.jpg" alt="Image">
                            </picture>
                            <div class="info_libro">
                                <div>
                                    <span class="info_libro_autor">Nombre Completo del Autor</span>
                                </div>
                                <div>
                                    <span class="info-libro_titulo">Titulo de el libro bien Grande con Muchos de</span>
                                </div>
                                <div class="info_libro_precio">
                                    <span>S/ 200.30</span>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="slick">
                    <div>
                        <a href="/">
                            <picture>
                                <img src="/img-libros/10.png" alt="Image">
                            </picture>
                            <div class="info_libro">
                                <div>
                                    <span class="info_libro_autor">Nombre Completo del Autor</span>
                                </div>
                                <div>
                                    <span class="info-libro_titulo">Titulo de el libro bien Grande con Muchos de</span>
                                </div>
                                <div class="info_libro_precio">
                                    <span>S/ 200.30</span>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="slick">
                    <div>
                        <a href="/">
                            <picture>
                                <img src="/img-libros/11.jpg" alt="Image">
                            </picture>
                            <div class="info_libro">
                                <div>
                                    <span class="info_libro_autor">Nombre Completo del Autor</span>
                                </div>
                                <div>
                                    <span class="info-libro_titulo">Titulo de el libro bien Grande con Muchos de</span>
                                </div>
                                <div class="info_libro_precio">
                                    <span>S/ 200.30</span>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="slick">
                    <div>
                        <a href="/">
                            <picture>
                                <img src="/img-libros/12.png" alt="Image">
                            </picture>
                            <div class="info_libro">
                                <div>
                                    <span class="info_libro_autor">Nombre Completo del Autor</span>
                                </div>
                                <div>
                                    <span class="info-libro_titulo">Titulo de el libro bien Grande con Muchos de</span>
                                </div>
                                <div class="info_libro_precio">
                                    <span>S/ 200.30</span>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="slick">
                    <div>
                        <a href="/">
                            <picture>
                                <img src="/img-libros/13.png" alt="Image">
                            </picture>
                            <div class="info_libro">
                                <div>
                                    <span class="info_libro_autor">Nombre Completo del Autor</span>
                                </div>
                                <div>
                                    <span class="info-libro_titulo">Titulo de el libro bien Grande con Muchos de</span>
                                </div>
                                <div class="info_libro_precio">
                                    <span>S/ 200.30</span>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="slick">
                    <div>
                        <a href="/">
                            <picture>
                                <img src="/img-libros/14.jpg" alt="Image">
                            </picture>
                            <div class="info_libro">
                                <div>
                                    <span class="info_libro_autor">Nombre Completo del Autor</span>
                                </div>
                                <div>
                                    <span class="info-libro_titulo">Titulo de el libro bien Grande con Muchos de</span>
                                </div>
                                <div class="info_libro_precio">
                                    <span>S/ 200.30</span>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="slick">
                    <div>
                        <a href="/">
                            <picture>
                                <img src="/img-libros/15.jpg" alt="Image">
                            </picture>
                            <div class="info_libro">
                                <div>
                                    <span class="info_libro_autor">Nombre Completo del Autor</span>
                                </div>
                                <div>
                                    <span class="info-libro_titulo">Titulo de el libro bien Grande con Muchos de</span>
                                </div>
                                <div class="info_libro_precio">
                                    <span>S/ 200.30</span>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="slick">
                    <div>
                        <a href="/">
                            <picture>
                                <img src="/img-libros/4.jpg" alt="Image">
                            </picture>
                            <div class="info_libro">
                                <div>
                                    <span class="info_libro_autor">Nombre Completo del Autor</span>
                                </div>
                                <div>
                                    <span class="info-libro_titulo">Titulo de el libro bien Grande con Muchos de</span>
                                </div>
                                <div class="info_libro_precio">
                                    <span>S/ 200.30</span>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="slick">
                    <div>
                        <a href="/">
                            <picture>
                                <img src="/img-libros/5.jpg" alt="Image">
                            </picture>
                            <div class="info_libro">
                                <div>
                                    <span class="info_libro_autor">Nombre Completo del Autor</span>
                                </div>
                                <div>
                                    <span class="info-libro_titulo">Titulo de el libro bien Grande con Muchos de</span>
                                </div>
                                <div class="info_libro_precio">
                                    <span>S/ 200.30</span>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>



<!-- estilos de esta hoja -->
<link rel="stylesheet" href="../estilos/buscador.css">

<!-- footer de la pagina -->
<?php include("../template/footer.php"); ?>



