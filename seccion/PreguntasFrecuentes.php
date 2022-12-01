
<!-- header de la pagina -->
<?php 

$ruta = "../images/";
include("../template/header.php"); 

?>



<main>
    <div class="contenedor">
        <div class="title_questions">
            <h1>Preguntas frecuentes a Libreria El Virrey</h1>
        </div>
        <div class="conteiner_body_questions">
            <div class="questions_conteiner">
                <div class="question">
                    <p>¿Cuáles son los métodos de pago?</p>
                    <span><i id="icon" class="fa-solid fa-plus"></i></span>
                </div>
                <div class="response">
                    <p class="line_response"></p>
                    <p class="response_info">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Eaque id sunt nostrum, molestiae
                        excepturi eum, facere est assumenda nihil saepe nisi maiores ab non delectus deleniti!
                        Perferendis facilis doloribus sed?
                    </p>
                </div>
                <p class="line_question"></p>
            </div>
            <div class="questions_conteiner">
                <div class="question">
                    <p>¿Cuánto tiempo demora en llegar mi pedido?</p>
                    <span><i class="fa-solid fa-plus"></i></span>
                </div>
                <div class="response">
                    <p class="line_response"></p>
                    <p class="response_info">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Eaque id sunt nostrum, molestiae
                        excepturi eum, facere est assumenda nihil saepe nisi maiores ab non delectus deleniti!
                        Perferendis facilis doloribus sed?
                    </p>
                </div>
                <p class="line_question"></p>
            </div>
            <div class="questions_conteiner">
                <div class="question">
                    <p>¿Puedo anular mi compra?</p>
                    <span><i class="fa-solid fa-plus"></i></span>
                </div>
                <div class="response">
                    <p class="line_response"></p>
                    <p class="response_info">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Eaque id sunt nostrum, molestiae
                        excepturi eum, facere est assumenda nihil saepe nisi maiores ab non delectus deleniti!
                        Perferendis facilis doloribus sed?
                    </p>
                </div>
                <p class="line_question"></p>
            </div>
            <div class="questions_conteiner">
                <div class="question">
                    <p>¿Dónde puedo consultar el estado de mi pedido?</p>
                    <span><i class="fa-solid fa-plus"></i></span>
                </div>
                <div class="response">
                    <p class="line_response"></p>
                    <p class="response_info">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Eaque id sunt nostrum, molestiae
                        excepturi eum, facere est assumenda nihil saepe nisi maiores ab non delectus deleniti!
                        Perferendis facilis doloribus sed?
                    </p>
                </div>
                <p class="line_question"></p>
            </div>
            <div class="questions_conteiner">
                <div class="question">
                    <p>¿Puedo cambiar el nombre de la persona que recogerá mi compra?</p>
                    <span><i class="fa-solid fa-plus"></i></span>
                </div>
                <div class="response">
                    <p class="line_response"></p>
                    <p class="response_info">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Eaque id sunt nostrum, molestiae
                        excepturi eum, facere est assumenda nihil saepe nisi maiores ab non delectus deleniti!
                        Perferendis facilis doloribus sed?
                    </p>
                </div>
                <p class="line_question"></p>
            </div>
            <div class="questions_conteiner">
                <div class="question">
                    <p>¿Puedo cambiar lafecha de entrega de mi pedido?</p>
                    <span><i class="fa-solid fa-plus"></i></span>
                </div>
                <div class="response">
                    <p class="line_response"></p>
                    <p class="response_info">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Eaque id sunt nostrum, molestiae
                        excepturi eum, facere est assumenda nihil saepe nisi maiores ab non delectus deleniti!
                        Perferendis facilis doloribus sed?
                    </p>
                </div>
                <p class="line_question"></p>
            </div>
            <div class="questions_conteiner">
                <div class="question">
                    <p>¿Realizan envíos a provincias?</p>
                    <span><i class="fa-solid fa-plus"></i></span>
                </div>
                <div class="response">
                    <p class="line_response"></p>
                    <p class="response_info">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Eaque id sunt nostrum, molestiae
                        excepturi eum, facere est assumenda nihil saepe nisi maiores ab non delectus deleniti!
                        Perferendis facilis doloribus sed?
                    </p>
                </div>
                <p class="line_question"></p>
            </div>
        </div>
        <div class="question_enter">
            <p>Ingrese su pregunta :</p>
            <input type="text" name="question_txt">
            <button type="submit" name="question_submit">Enviar</button>
        </div>
    </div>
</main>




<!-- estilos de esta hoja -->
<link rel="stylesheet" href="../estilos/preguntasFrecuentes.css">

<!-- footer de la pagina -->
<?php include("../template/footer.php"); ?>
