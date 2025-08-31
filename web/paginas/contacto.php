<?php
session_start();
include_once("../componentes/header.php");
?>

<main>
    <section>
        <div class="container-fluid">
            <div class="row azul">
                <div class="col-1"></div>
                <div class="col-10">
                    <h2 class="letra letrablanca padding">Contactanos!</h2>
                    <div class="blanquito formulario">
                        <h4 class="letra padd">Rellená el formulario:</h4>
                        <form action="datos_contacto.php" method="POST">
                            <div>
                                <label for="nom">Nombre completo:</label>
                                <input type="text" name="nom" id="nom" placeholder="Ingrese su nombre" required>
                            </div>
                            <div>
                                <label for="mail">Correo:</label>
                                <input type="email" name="mail" id="mail" placeholder="Ingrese su correo" required>
                            </div>
                            <div>
                                <label for="info">Envie su consulta:</label>
                                <textarea name="info" id="info" cols="50" rows="5"></textarea>
                            </div>
                            <div>
                                <input type="submit" value="Enviar">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-1"></div>
            <div class="row blanquito">
                <div class="col-1"></div>
                <div class="col-10">
                    <p class="letra parrafo letrablanca">Tené en cuenta lo siguiente:
                        <br> <br>
                        1. Si escribís para solicitar White Sand o Aether of Night, ya no los estamos distribuyendo por correo electrónico. White Sand se envía mediante un enlace en los boletines que ocasionalmente mandamos a los suscriptores. Aether of Night puede solicitarse en The 17th Shard.
                        <br> <br>
                        2. Si tenés una pregunta, por favor revisá las Preguntas Frecuentes (FAQ) antes de enviar un correo. Si tu pregunta no está respondida allí, cada tanto seleccionamos algunas, añadimos las respuestas al FAQ y anunciamos la actualización en el blog. Si buscás respuestas profundas o teorías sobre el Cosmere, lo mejor es visitar The 17th Shard, el foro oficial de fans de Brandon.
                        <br> <br>
                        3. Si tu consulta es sobre los derechos de publicación o disponibilidad de alguna de las obras de Brandon, no uses este formulario. En su lugar, contactá a su agente Joshua Bilmes aquí: Joshua@wfulagent.com.
                        <br> <br>
                        4. Brandon intenta responder todo el correo de sus lectores, pero el tiempo que dedica a responder correos es tiempo que no dedica a escribir, así que a veces se le acumula bastante. ¡Puede tardar varios meses en contestar! Y a veces está tan ocupado que no puede responder en absoluto.
                        <br> <br>
                        5. Al enviarle un correo a Brandon, le das permiso para publicar el texto de tu mensaje (sin divulgar tu nombre completo ni dirección) en su blog. Esto lo hace muy raramente, y usualmente porque considera que la pregunta es interesante y que a otros les gustaría leer la respuesta. Puede debatir contigo, pero nunca se burlará de vos.
                        <br> <br>
                        6. Tomamos tu privacidad en serio. Tu dirección de correo electrónico no será divulgada a terceros. (Administramos la base de datos mediante MailChimp, pero solo nosotros vemos las direcciones). Si querés que los asistentes de Brandon eliminen tu correo de la lista, solo tenés que pedirlo.
                        <br> <br>
                        7. Para consultas de prensa o medios, por favor escribí a: publicity@dragonsteel.com
                    </p>
                </div>
                <div class="col-1"></div>
            </div>

        </div>
    </section>
</main>



<?php
include_once("../componentes/footer.php");
?>