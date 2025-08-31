<?php
session_start();
include_once("../componentes/header.php");
?>

<main class="blanquito letra" style="min-height: 100vh;">
    <div class="d-flex flex-grow-1" style="min-height: 100vh;">
        <?php include_once("../componentes/nav_admin.php"); ?>
        <div class="container-fluid">

            <div class="row align-items-center" style="min-height: 60vh;">
                <div class="col-2"></div>
                <div class="col-4 marco">
                    <?php
                    $user = $_SESSION['user'];
                    $id_usuario = $_SESSION['id_usuarios'];
                    $nombre = $_SESSION['nombre'];
                    $mail = $_SESSION['mail'];
                    $fecha_nac = $_SESSION['fecha_nac'];

                    print "<h3 class='letra mar'><a href=perfil.php?usuario=$id_usuario >@$user</a></h3>";
                    print "<ul class='lista mar'>
                <li class='letra pad fw-normal'>Nombre: $nombre</li>
                <li class='letra pad fw-normal'>User: @$user</li>
                <li class='letra pad fw-normal'>Mail: $mail</li>
                <li class='letra pad fw-normal'>Fecha de nacimiento: $fecha_nac</li>
                </ul>";
                    ?>
                </div>
                <div class="col-4">
                    <figure class="d-flex justify-content-center align-items-center">
                        <img src=" ../img/perfil_admin.jpg" alt="Perfil" width="200" height="auto" class="rounded-circle me-2">
                    </figure>
                </div>
                <div class="col-2"></div>
            </div>
        </div>
    </div>

</main>

<?php
include_once("../componentes/footer.php");
?>