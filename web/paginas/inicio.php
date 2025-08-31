<?php
session_start();
include_once("../componentes/header.php");
?>

<main>
    <section>
        <div class="container-fluid">
            <div class="row blanquito">
                <div class="col-1"></div>
                <div class="col-10 ">
                    <img class="padding" src="../img/inicio.png" alt="Foto de inicio" width="100%" height="90%">
                </div>
                <div class="col-1">
                    <?php
                    if (isset($_SESSION['user'])) {
                        $user = $_SESSION['user'];
                        $id_usuario = $_SESSION['id_usuarios'];
                    } else {
                        header("Location: login.php ");
                        exit;
                    }
                    ?>
                </div>
            </div>
            <div class="row azul">
                <div class="col-1"></div>
                <div class="col-10 ">
                    <h1 class="letra letrablanca padding">Adentrate en esta historia.</h1>
                    <div class="row padding">
                        <div class="col-6 padding">
                            <div class="card text-bg-dark margin">
                                <img src="../img/card1.png" class="card-img" alt="Imagen quiz">
                                <div class="card-img-overlay">
                                    <h2 class="card-title">Descubri tu Orden!</h2>
                                    <p class="card-text">Cada orden representa una forma distinta de ver el deber, la verdad y el honor.</p>
                                    <a href="https://www.brandonsanderson.com/pages/official-knights-radiant-order-quiz" class="btn btn-primary blancoletra azulboton" target="_blank">Ver más</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 padding">
                            <div class="card text-bg-dark margin">
                                <img src="../img/brandon.png" class="card-img" alt="Imagen Brandon Sanderson" width="320" height="340">
                                <div class="card-img-overlay">
                                    <h2 class="card-title">Proceso de escritura de Brandon.</h2>
                                    <p class="card-text">Enterate del progreso de escitura de los proyectos actuales de Brandon mediante sus Weekly Updates!</p>
                                    <a href="https://www.youtube.com/watch?v=QEiVt7yTFK0&list=PLSH_xM-KC3ZtQWHbMCohKqiwj4tXm-Hob" class="btn btn-primary blancoletra azulboton" target="_blank">Ver más</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-1"></div>

                </div>
            </div>
    </section>



</main>



<?php
include_once("../componentes/footer.php");
?>

