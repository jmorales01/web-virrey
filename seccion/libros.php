<?php

// Recepcionando y validando el formulario
$txtID = 1002; //(int)(isset($_POST['txtID'])) ? $_POST['txtID'] : "";
//$txtNombre = (isset($_POST['txtNombre'])) ? $_POST['txtNombre'] : "";


// Incluir la conexion a la base de datos
include("../administrador/config/bd.php");



// Seleccionar un libro
$sentenciaSQL = $conexion->prepare("select * from libro l, autor a, editorial e, descripcion d  
                                        where l.idAutor  = a.idAutor and l.idEditorial = e.idEditorial and l.idDescripcion = d.idDescripcion 
                                        and idLibro = :id");
$sentenciaSQL->bindParam(':id', $txtID);
$sentenciaSQL->execute();
$libro = $sentenciaSQL->fetch(PDO::FETCH_LAZY);



// Filtrar los libros mas vendidos
$sql = "select nombreLibro, nombreAutor, precioLibro, imagenLibro , sum(cantidadDetalle) from libro l, detalleorde d, autor a 
            where l.idLibro = d.idLibro and l.idAutor = a.idAutor 
            group by nombreLibro, nombreAutor, precioLibro, imagenLibro
            order by sum(cantidadDetalle) desc  
            limit 5";

$sentenciaSQL = $conexion->prepare($sql);
$sentenciaSQL->execute();
$listaTop5 = $sentenciaSQL->fetchAll(PDO::FETCH_ASSOC);


?>


<!-- header de la pagina -->
<?php 

$ruta = "../images/";
include("../template/header.php"); 

?>




<main>
    <div class="recomendados">
        <div class="recomendados_title">
            <h3>Libros recomendados</h3>
        </div>

        <?php foreach ($listaTop5 as $top5) { ?>
        <div class="slick">
            <div>
                <a href="/">
                    <picture>
                        <img src="../img-libros/<?php echo $top5['imagenLibro']; ?>" alt="Image">
                    </picture>
                    <div class="info_libro">
                        <div>
                            <span class="info_libro_autor"><?php echo $top5['nombreAutor']; ?></span>
                        </div>
                        <div>
                            <span class="info-libro_titulo"><?php echo $top5['nombreLibro']; ?></span>
                        </div>
                        <div class="info_libro_precio">
                            <span>S/ <?php echo $top5['precioLibro']; ?></span>
                        </div>
                    </div>
                </a>
            </div>
        </div>
        <?php } ?>

    </div>


    <div class="conteiner_libro">
        <div class="encabezadoLibro">
            <div class="tituloLibro">
                <h2><?php echo $libro['nombreLibro']; ?></h2>
            </div>
            <div class="autorLibro">
                <p><?php echo $libro['nombreAutor']; ?></p>
            </div>
        </div>

        <div class="cuerpoLibro">
            <div class="portadaLibro">
                <img src="../img-libros/<?php echo $libro['imagenLibro']; ?>" alt="">
            </div>
            <div class="descripcionLibro">
                <div class="resumen">
                    <p>
                        <?php echo $libro['descripcionDescripcion']; ?>
                    </p>
                </div>
                <div class="datosLibro">
                    <p><?php echo $libro['nombreEditorial']; ?></p>
                    <p>2022</p>
                    <p>256 paginas</p>
                    <p><?php echo $libro['categoriaLibro']; ?></p>
                </div>
                <div class="estrellas">
                    <p>⭐⭐⭐⭐⭐</p>
                </div>
            </div>
        </div>

        <div class="conteiner_comentarios">
            <div class="comentarios_title">
                <p>Califica y comenta</p>
            </div>
            <div class="coment_user">
                <textarea name="annade_comentario" id="" cols="50" rows="5"></textarea>
                <input type="submit" value="Enviar">
            </div>
            <div class="puntaje">
                <form>
                    <p class="clasificacion">
                        <input id="radio1" type="radio" name="estrellas" value="5">
                        <label for="radio1">★</label>
                        <input id="radio2" type="radio" name="estrellas" value="4">
                        <label for="radio2">★</label>
                        <input id="radio3" type="radio" name="estrellas" value="3">
                        <label for="radio3">★</label>
                        <input id="radio4" type="radio" name="estrellas" value="2">
                        <label for="radio4">★</label>
                        <input id="radio5" type="radio" name="estrellas" value="1">
                        <label for="radio5">★</label>
                    </p>
                </form>
            </div>
            <p class="line"></p>

            <div class="comentario">
                <div class="Usuario">
                    <div class="user_comentario">
                        <div class="imagen_user">
                            <img src="/images/silueta_hombre.png" alt="">
                        </div>
                        <div class="datos_user">
                            <div class="nombre">
                                <p>Luis Quispe</p>
                            </div>
                            <div class="rango">
                                <p>Oro</p>
                            </div>
                        </div>
                    </div>
                    <div class="comentario_user">
                        <div class="calificacion">
                            <p>⭐⭐⭐</p>
                            <p>Publicado: 25 de diciembre del 2022</p>
                        </div>
                        <div class="comentario_text">
                            <p>
                                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Iste libero esse eligendi, eum
                                quod ad rerum voluptatem itaque ducimus quas velit fuga eius modi necessitatibus illum
                                illo! Accusamus, tenetur alias.
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <p class="line"></p>
            <div class="comentario">
                <div class="Usuario">
                    <div class="user_comentario">
                        <div class="imagen_user">
                            <img src="/images/silueta_hombre.png" alt="">
                        </div>
                        <div class="datos_user">
                            <div class="nombre">
                                <p>Luis Quispe</p>
                            </div>
                            <div class="rango">
                                <p>Oro</p>
                            </div>
                        </div>
                    </div>
                    <div class="comentario_user">
                        <div class="calificacion">
                            <p>⭐⭐⭐</p>
                            <p>Publicado: 25 de diciembre del 2022</p>
                        </div>
                        <div class="comentario_text">
                            <p>
                                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Iste libero esse eligendi, eum
                                quod ad rerum voluptatem itaque ducimus quas velit fuga eius modi necessitatibus illum
                                illo! Accusamus, tenetur alias.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <p class="line"></p>
            <div class="comentario">
                <div class="Usuario">
                    <div class="user_comentario">
                        <div class="imagen_user">
                            <img src="/images/silueta_hombre.png" alt="">
                        </div>
                        <div class="datos_user">
                            <div class="nombre">
                                <p>Luis Quispe</p>
                            </div>
                            <div class="rango">
                                <p>Oro</p>
                            </div>
                        </div>
                    </div>
                    <div class="comentario_user">
                        <div class="calificacion">
                            <p>⭐⭐⭐</p>
                            <p>Publicado: 25 de diciembre del 2022</p>
                        </div>
                        <div class="comentario_text">
                            <p>
                                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Iste libero esse eligendi, eum
                                quod ad rerum voluptatem itaque ducimus quas velit fuga eius modi necessitatibus illum
                                illo! Accusamus, tenetur alias.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <p class="line"></p>
            <div class="comentario">
                <div class="Usuario">
                    <div class="user_comentario">
                        <div class="imagen_user">
                            <img src="/images/silueta_hombre.png" alt="">
                        </div>
                        <div class="datos_user">
                            <div class="nombre">
                                <p>Luis Quispe</p>
                            </div>
                            <div class="rango">
                                <p>Oro</p>
                            </div>
                        </div>
                    </div>
                    <div class="comentario_user">
                        <div class="calificacion">
                            <p>⭐⭐⭐</p>
                            <p>Publicado: 25 de diciembre del 2022</p>
                        </div>
                        <div class="comentario_text">
                            <p>
                                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Iste libero esse eligendi, eum
                                quod ad rerum voluptatem itaque ducimus quas velit fuga eius modi necessitatibus illum
                                illo! Accusamus, tenetur alias.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <p class="line"></p>
            <div class="comentario">
                <div class="Usuario">
                    <div class="user_comentario">
                        <div class="imagen_user">
                            <img src="/images/silueta_hombre.png" alt="">
                        </div>
                        <div class="datos_user">
                            <div class="nombre">
                                <p>Luis Quispe</p>
                            </div>
                            <div class="rango">
                                <p>Oro</p>
                            </div>
                        </div>
                    </div>
                    <div class="comentario_user">
                        <div class="calificacion">
                            <p>⭐⭐⭐</p>
                            <p>Publicado: 25 de diciembre del 2022</p>
                        </div>
                        <div class="comentario_text">
                            <p>
                                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Iste libero esse eligendi, eum
                                quod ad rerum voluptatem itaque ducimus quas velit fuga eius modi necessitatibus illum
                                illo! Accusamus, tenetur alias.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>



<!-- estilos de esta hoja -->
<link rel="stylesheet" href="../estilos/libros.css">

<!-- footer de la pagina -->
<?php include("../template/footer.php"); ?>