<!-- required readonly  -- Para que solo se pueda leer -->
<!-- required  -- Para pedir el input obligarorio -->
<!-- class:"img-thumbnail rounded"  -- Para poner un borde a las imagenes -->





<!-- header de la pagina -->
<?php include("../template/headerAdmin.php"); ?>

<?php

// Recepcionando y validando el formulario
$txtID = (int)(isset($_POST['txtID'])) ? $_POST['txtID'] : "";
$txtNombre = (isset($_POST['txtNombre'])) ? $_POST['txtNombre'] : "";
$txtAutor = (isset($_POST['txtAutor'])) ? $_POST['txtAutor'] : "";
$txtEditorial = (isset($_POST['txtEditorial'])) ? $_POST['txtEditorial'] : "";
$txtStock = (int)(isset($_POST['txtStock'])) ? $_POST['txtStock'] : "";
$txtPrecio = (float)(isset($_POST['txtPrecio'])) ? $_POST['txtPrecio'] : "";
$txtDescuento = (float)(isset($_POST['txtDescuento'])) ? $_POST['txtDescuento'] : "";
$txtDescripcion = (isset($_POST['txtDescripcion'])) ? $_POST['txtDescripcion'] : "";
$txtImagen = (isset($_FILES['txtImagen']['name'])) ? $_FILES['txtImagen']['name'] : "";
$accion = (isset($_POST['accion'])) ? $_POST['accion'] : "";

// Incluir la conexion a la base de datos
include("../config/bd.php");




switch ($accion) {
    case 'agregar':

        $sentenciaSQL = $conexion->prepare("INSERT INTO libro(nombre, idAutor, idEditorial, stock, precio, descuento, idDescripcion, imagen) 
        VALUES 
        (:nombre,:autor,:editorial,:stock,:precio,:descuento,:descripcion,:imagen);");

        // $sentenciaSQL->bindParam(':id', $txtID);
        $sentenciaSQL->bindParam(':nombre', $txtNombre);
        $sentenciaSQL->bindParam(':autor', $txtAutor);
        $sentenciaSQL->bindParam(':editorial', $txtEditorial);
        $sentenciaSQL->bindParam(':stock', $txtStock);
        $sentenciaSQL->bindParam(':precio', $txtPrecio);
        $sentenciaSQL->bindParam(':descuento', $txtDescuento);
        $sentenciaSQL->bindParam(':descripcion', $txtDescripcion);

        //############ GUARDAR IMAGEN EN LA CARPETA IMAGEN ############
        // objeto fecha
        $fecha = new DateTime();
        // Nommbre de la imagen, concatenado con fecha actual
        $nombreArchivo = ($txtImagen != "") ? $fecha->getTimestamp() . "_" . $_FILES['txtImagen']['name'] : "imagen.jpg";

        // Variable temporal para guardar imagen en su respectiva carpeta
        $tmpImagen = $_FILES["txtImagen"]["tmp_name"];

        // Validar si existe y mover
        if ($tmpImagen != "") {
            move_uploaded_file($tmpImagen, "../../img-libros/" . $nombreArchivo);
        }

        $sentenciaSQL->bindParam(':imagen', $nombreArchivo);
        $sentenciaSQL->execute();

        // Redireccionar a productos para que se limpie los inputs
        header("Location:productos.php");

        break;

    case 'modificar':

        // Modificar nombre
        $sentenciaSQL = $conexion->prepare("update libro set nombre = :nombre where idLibro = :id");
        $sentenciaSQL->bindParam(':nombre', $txtNombre);
        $sentenciaSQL->bindParam(':id', $txtID);
        $sentenciaSQL->execute();


        // ############ MODIFICAR IMAGEN DE LA CARPETA IMAGEN ############
        if ($txtImagen != "") {


            $fecha = new DateTime();
            // Nommbre de la imagen, concatenado con fecha actual
            $nombreArchivo = ($txtImagen != "") ? $fecha->getTimestamp() . "_" . $_FILES['txtImagen']['name'] : "imagen.jpg";
            // Variable temporal para guardar imagen en su respectiva carpeta
            $tmpImagen = $_FILES["txtImagen"]["tmp_name"];
            move_uploaded_file($tmpImagen, "../../img-libros/" . $nombreArchivo);


            //############ BORRAR IMAGEN DE LA CARPETA IMAGEN ############

            $sentenciaSQL = $conexion->prepare("select imagen from libro where idLibro = :id");
            $sentenciaSQL->bindParam(':id', $txtID);
            $sentenciaSQL->execute();
            $libroSelect = $sentenciaSQL->fetch(PDO::FETCH_LAZY);

            if (isset($libroSelect["imagen"]) && ($libroSelect["imagen"]) != "imagen.jpg") {

                // Validar si la imagen existe y borrar
                if (file_exists("../../img-libros/" . $libroSelect["imagen"])) {
                    unlink("../../img-libros/" . $libroSelect["imagen"]);
                }
            }

            $sentenciaSQL = $conexion->prepare("update libro set imagen = :imagen where idLibro = :id");
            $sentenciaSQL->bindParam(':imagen', $nombreArchivo);
            $sentenciaSQL->bindParam(':id', $txtID);
            $sentenciaSQL->execute();
        }

        // Redireccionar a productos para que se limpie los inputs
        header("Location:productos.php");

        break;

    case 'cancelar':
        header("Location:productos.php");
        break;

    case 'select':
        $sentenciaSQL = $conexion->prepare("select * from libro where idLibro = :id");
        $sentenciaSQL->bindParam(':id', $txtID);
        $sentenciaSQL->execute();
        $libroSelect = $sentenciaSQL->fetch(PDO::FETCH_LAZY);

        $txtID = $libroSelect['idLibro'];
        $txtNombre = $libroSelect['nombre'];
        $txtAutor = $libroSelect['idAutor'];
        $txtEditorial = $libroSelect['idEditorial'];
        $txtStock = $libroSelect['stock'];
        $txtPrecio = $libroSelect['precio'];
        $txtDescuento = $libroSelect['descuento'];
        $txtDescripcion = $libroSelect['idDescripcion'];
        $txtImagen = $libroSelect['imagen'];
        break;

    case 'delete':

        //############ BORRAR IMAGEN DE LA CARPETA IMAGEN ############

        $sentenciaSQL = $conexion->prepare("select imagen from libro where idLibro = :id");
        $sentenciaSQL->bindParam(':id', $txtID);
        $sentenciaSQL->execute();
        $libroSelect = $sentenciaSQL->fetch(PDO::FETCH_LAZY);

        if (isset($libroSelect["imagen"]) && ($libroSelect["imagen"]) != "imagen.jpg") {

            // Validar si la imagen existe y borrar
            if (file_exists("../../img-libros/" . $libroSelect["imagen"])) {
                unlink("../../img-libros/" . $libroSelect["imagen"]);
            }
        }

        $sentenciaSQL = $conexion->prepare("delete from libro where idLibro = :id");
        $sentenciaSQL->bindParam(':id', $txtID);
        $sentenciaSQL->execute();

        // Redireccionar a productos para que se limpie los inputs
        header("Location:productos.php");

        break;

    default:
        echo "No preciono nada";
        break;
}

// Seleccionar todo los libros
$sentenciaSQL = $conexion->prepare("select * from libro");
$sentenciaSQL->execute();
$listaLibros = $sentenciaSQL->fetchAll(PDO::FETCH_ASSOC);

?>



<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="container" id="advanced-search-form">
                <h2>Registrar nuevo producto</h2>
                <form>
                    <div class="form-group">
                        <label for="first-name">Id :</label>
                        <input type="text" class="form-control" value="<?php echo $txtID; ?>" name="txtID" id="txtID" placeholder="ID">
                    </div>
                    <div class="form-group">
                        <label for="last-name">Nombre :</label>
                        <input type="text" class="form-control" value="<?php echo $txtNombre; ?>" name="txtNombre" id="txtNombre" placeholder="Nombre del libro">
                    </div>
                    <div class="form-group">
                        <label for="country">Categoria :</label>
                        <input type="text" class="form-control" value="<?php echo $txtCategoria; ?>" name="txtCategoria" id="txtCategoria" placeholder="Categoria">
                    </div>
                    <div class="form-group">
                        <label for="country">Autor :</label>
                        <input type="text" class="form-control" value="<?php echo $txtAutor; ?>" name="txtAutor" id="txtAutor" placeholder="Autor">
                    </div>
                    <div class="form-group">
                        <label for="number">Editorial :</label>
                        <input type="text" class="form-control" value="<?php echo $txtEditorial; ?>" name="txtEditorial" id="txtEditorial" placeholder="Editorial">
                    </div>
                    <div class="form-group">
                        <label for="age">Stock :</label>
                        <input type="text" class="form-control" value="<?php echo $txtStock; ?>" name="txtStock" id="txtStock" placeholder="Stock">
                    </div>
                    <div class="form-group">
                        <label for="email">Precio :</label>
                        <input type="text" class="form-control" value="<?php echo $txtPrecio; ?>" name="txtPrecio" id="txtPrecio" placeholder="Precio">
                    </div>
                    <div class="form-group">
                        <label for="category">Descuento :</label>
                        <input type="text" class="form-control" value="<?php echo $txtDescuento; ?>" name="txtDescuento" id="txtDescuento" placeholder="Descuento">
                    </div>
                    <div class="form-group">
                        <label for="txtID">Imagen :</label>
                        <?php echo $txtImagen; ?>

                        <?php if ($txtImagen != "") { ?>
                            <img src="../../img-libros/<?php echo $txtImagen; ?>" width="50px" alt="">
                        <?php } ?>

                        <input type="file" class="form-control" name="txtImagen" id="txtImagen">
                    </div>
                    <div class="form-group">
                        <label for="exampleTextarea" class="form-label mt-4">Descripcion :</label>
                        <textarea class="form-control" value="<?php echo $txtDescripcion; ?>" name="txtDescripcion" id="txtDescripcion" placeholder="Descripcion" rows="3"></textarea>
                    </div>
                    <div class="clearfix"></div>
                    <div class="btn-group" role="group" aria-label="">
                        <button type="submit" name="accion" <?php echo ($accion == "select") ? "disabled" : ""; ?> value="agregar" class="btn btn-secondary" >Agregar</button>
                        <button type="submit" name="accion" <?php echo ($accion != "select") ? "disabled" : ""; ?> value="modificar" class="btn btn-primary">Modificar</button>
                        <button type="submit" name="accion" <?php echo ($accion != "select") ? "disabled" : ""; ?> value="cancelar" class="btn btn-danger">Cancelar</button>
                    </div>
                </form>
            </div>
        </div>



        <div class="col-md-12">
            <table class="table" id="table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nombre</th>
                        <th>Estock</th>
                        <th>Precio</th>
                        <th>Descuento</th>
                        <th>imagen</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>

                    <?php foreach ($listaLibros as $libro) { ?>
                        <tr>
                            <td><?php echo $libro['idLibro']; ?></td>
                            <td><?php echo $libro['nombre']; ?></td>
                            <td><?php echo $libro['stock']; ?></td>
                            <td><?php echo $libro['precio']; ?></td>
                            <td><?php echo $libro['descuento']; ?></td>
                            <td>
                                <img src="../../img-libros/<?php echo $libro['imagen']; ?>" width="50px" alt="">
                            </td>

                            <!-- botones de borrar y seleccionarr -->
                            <td>
                                <form method="POST">
                                    <input type="hidden" name="txtID" id="txtID" value="<?php echo $libro['idLibro']; ?>">
                                    <input type="submit" name="accion" value="select" class="btn btn-primary">
                                    <input type="submit" name="accion" value="delete" class="btn btn-danger">
                                </form>
                            </td>

                        </tr>
                    <?php } ?>

                </tbody>
            </table>
        </div>

    </div>
</div>




<!-- link a css y js -->
<link rel="stylesheet" href="../style/productos.css">



<!-- footer de la pagina -->
<?php include("../template/footerAdmin.php"); ?>