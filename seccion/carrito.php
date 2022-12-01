<!-- header de la pagina -->
<?php 

$ruta = "../images/";
include("../template/header.php"); 

?>




<main>
    <div class="conteiner_car">
        <div class="conteiner_car_items">
            <p class="cant_items_car">Micarrito( 2 )</p>
            <div class="items_car">
                <p class="items_car_title">Libreria el virrey</p>
                <p class="line_top"></p>
                <ul class="title_items">
                    <li>Productos</li>
                    <li>Cantidad</li>
                    <li>Subtotal</li>
                </ul>
                <p class="line_bottom"></p>
                <div class="list_items">
                    <div class="product_item">
                        <div class="description_products">
                            <img src="../img-libros/1.jpg" alt="">
                            <div class="description_book">
                                <p class="name_book">Plata como cancha</p>
                                <p class="name_autor">Cesar Acuña</p>
                            </div>
                        </div>
                        <div class="cant_item">
                            <button id="btnResta">-</button>
                            <input id="inpuCant" type="text" value="1">
                            <button id="btnSuma">+</button>
                        </div>
                        <div class="subtotal">
                            <p>S/. 15.34</p>
                            <p class="descuento">- S/. 3.12</p>
                        </div>
                        <span class="delete_icon"><i class="fa-solid fa-trash"></i></span>
                    </div>
                    <div class="product_item">
                        <div class="description_products">
                            <img src="../img-libros/2.jpg" alt="">
                            <div class="description_book">
                                <p class="name_book">Plata como cancha</p>
                                <p class="name_autor">Cesar Acuña</p>
                            </div>
                        </div>
                        <div class="cant_item">
                            <button>-</button>
                            <input type="text" value="3">
                            <button>+</button>
                        </div>
                        <div class="subtotal">
                            <p>S/. 15.34</p>
                            <p class="descuento">- S/. 3.12</p>
                        </div>
                        <span class="delete_icon"><i class="fa-solid fa-trash"></i></span>
                    </div>
                    <div class="product_item">
                        <div class="description_products">
                            <img src="../img-libros/3.jpg" alt="">
                            <div class="description_book">
                                <p class="name_book">Plata como cancha</p>
                                <p class="name_autor">Cesar Acuña</p>
                            </div>
                        </div>
                        <div class="cant_item">
                            <button>-</button>
                            <input type="text" value="3">
                            <button>+</button>
                        </div>
                        <div class="subtotal">
                            <p>S/. 15.34</p>
                            <p class="descuento">- S/. 3.12</p>
                        </div>
                        <span class="delete_icon"><i class="fa-solid fa-trash"></i></span>
                    </div>
                    <div class="product_item">
                        <div class="description_products">
                            <img src="../img-libros/4.jpg" alt="">
                            <div class="description_book">
                                <p class="name_book">Plata como cancha</p>
                                <p class="name_autor">Cesar Acuña</p>
                            </div>
                        </div>
                        <div class="cant_item">
                            <button>-</button>
                            <input type="text" value="3">
                            <button>+</button>
                        </div>
                        <div class="subtotal">
                            <p>S/. 15.34</p>
                            <p class="descuento">- S/. 3.12</p>
                        </div>
                        <span class="delete_icon"><i class="fa-solid fa-trash"></i></span>
                    </div>
                </div>
            </div>
        </div>
        <div class="conteiner_subtotal">
            <h4>Resumen de compra</h4>
            <p class="line"></p>
            <div class="sub_total">
                <span>Subtotal</span>
                <span>S/. 12.45</span>
            </div>
            <div class="descuento">
                <span>Descuento</span>
                <span>- S/. 12.5</span>
            </div>
            <p class="line"></p>
            <div class="total">
                <span>TOTAL</span>
                <span>S/. 100</span>
            </div>
            <button type="submit" class="enviar_subtotal">Ir a pagar</button>
        </div>
    </div>
</main>




<!-- estilos de esta hoja -->
<link rel="stylesheet" href="../estilos/carrito.css">

<!-- footer de la pagina -->
<?php include("../template/footer.php"); ?>

