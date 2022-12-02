<!-- header de la pagina -->
<?php include("../template/headerAdmin.php"); ?>


<?php

$user = $_GET["user"];

// Incluir la conexion a la base de datos
include("../../config/db.php");

// Seleccionar un libro
$consultaSQL = $conexion->prepare("select * from usuario where idUsuario = :id");
$consultaSQL->bindParam(':id', $user);
$consultaSQL->execute();
$usuarios = $consultaSQL->fetch(PDO::FETCH_LAZY);

?>


<div class="container">
    <div class="row">

        <div class="col-md-12">

            <div class="card">
                <img src="../image/libreria virrey.jpg" class="card-img-top" alt="...">
                <div class="card-body">

                    <div class="row">
                        
                        <div class="col-md-7">
                            <div class="card m-3">
                                <div class="card-body">
                                    <form>
                                        <fieldset>
                                            <div class="form-group">
                                                <fieldset disabled="">
                                                    <label class="form-label" for="disabledInput">DNI :</label>
                                                    <input class="form-control" id="disabledInput" type="text" value="<?php echo $usuarios["dniUsuario"] ?>" disabled="">
                                                </fieldset>
                                            </div>
                                            <div class="form-group">
                                                <fieldset disabled="">
                                                    <label class="form-label" for="disabledInput">Nombre :</label>
                                                    <input class="form-control" id="disabledInput" type="text" value="<?php echo $usuarios["nombreUsuario"] ?>" disabled="">
                                                </fieldset>
                                            </div>
                                            <div class="form-group">
                                                <fieldset disabled="">
                                                    <label class="form-label" for="disabledInput">Apellido :</label>
                                                    <input class="form-control" id="disabledInput" type="text" value="<?php echo $usuarios["apellidoUsuario"] ?>" disabled="">
                                                </fieldset>
                                            </div>
                                            <div class="form-group">
                                                <fieldset disabled="">
                                                    <label class="form-label" for="disabledInput">Direccion :</label>
                                                    <input class="form-control" id="disabledInput" type="text" value="<?php echo $usuarios["direccionUsuario"] ?>" disabled="">
                                                </fieldset>
                                            </div>
                                            <div class="form-group">
                                                <fieldset disabled="">
                                                    <label class="form-label" for="disabledInput">Correo :</label>
                                                    <input class="form-control" id="disabledInput" type="text" value="<?php echo $usuarios["correoUsuario"] ?>" disabled="">
                                                </fieldset>
                                            </div>
                                            <div class="form-group">
                                                <fieldset disabled="">
                                                    <label class="form-label" for="disabledInput">Telefono :</label>
                                                    <input class="form-control" id="disabledInput" type="text" value="<?php echo $usuarios["telefonoUsuario"] ?>" disabled="">
                                                </fieldset>
                                            </div>
                                            <div class="form-group">
                                                <fieldset disabled="">
                                                    <label class="form-label" for="disabledInput">Celular :</label>
                                                    <input class="form-control" id="disabledInput" type="text" value="<?php echo $usuarios["celularUsuario"] ?>" disabled="">
                                                </fieldset>
                                            </div>
                                            <div class="form-group">
                                                <fieldset disabled="">
                                                    <label class="form-label" for="disabledInput">Cargo :</label>
                                                    <input class="form-control" id="disabledInput" type="text" value="<?php echo $usuarios["cargoUsuario"] ?>" disabled="">
                                                </fieldset>
                                            </div>
                                            <div class="form-group">
                                                <fieldset disabled="">
                                                    <label class="form-label" for="disabledInput">Fecha creacion :</label>
                                                    <input class="form-control" id="disabledInput" type="text" value="<?php echo $usuarios["fechaCreadoUsuario"] ?>" disabled="">
                                                </fieldset>
                                            </div>
                                            <div class="btn-group" style="margin: auto;">
                                                <button type="button" class="btn btn-warning"><i class="bi bi-pencil-square"></i>Editar</button>
                                                <button type="submit" class="btn btn-primary"><i class="bi bi-box-arrow-down"></i>Guardar</button>
                                            </div>
                                        </fieldset>
                                    </form>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-5">
                            <div class="card text-white bg-secondary m-3">
                                <h3 class="card-header">Datos</h3>
                                <div class="card-body">
                                    <h5 class="card-title"><?php echo $usuarios["cargoUsuario"] ?></h5>
                                    <h6 class="card-subtitle"><?php echo $usuarios["nombreUsuario"]." ".$usuarios["apellidoUsuario"] ?></h6>
                                </div>
                                <img src="../../img-usuario/<?php echo $usuarios["imageUsuario"] ?>" alt="">
                                <div class="card-body">
                                    <p class="card-text">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Qui eligendi vel repellat ut dolore eius consequatur, sapiente, facere impedit consectetur, voluptates mollitia. Assumenda quidem velit voluptate natus non soluta maxime!</p>
                                </div>
                                <div class="card-body">
                                    <a href="#" class="card-link"><i class="bi bi-envelope"></i>correo</a>
                                    <a href="#" class="card-link"><i class="bi bi-whatsapp"></i>whatsapp</a>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>
            </div>

        </div>

    </div>
</div>





<!-- link a los css y js -->
<link rel="stylesheet" href="../style/perfil.css">


<!-- footer de la pagina -->
<?php include("../template/footerAdmin.php"); ?>