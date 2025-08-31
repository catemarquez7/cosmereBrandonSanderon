<?php
session_start();
include_once("../conf/conf.php");
include_once("../componentes/header.php");
?>


<main class="blanquito">
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
                    <img src=" ../img/perfil.jpg" alt="Perfil" width="200" height="auto" class="rounded-circle me-2">
                </figure>
            </div>
            <div class="col-2"></div>
        </div>
        <div class="row azul align-items-center letra letrablanca" style="min-height: 90vh; padding-bottom: 40px;">
            <div class="col-2"></div>
            <div class="col-8">
                <h3 class="pad mar">Tus reseñas:</h3>
                <?php
                $user = $_SESSION['user'];
                $id_usuario = $_SESSION['id_usuarios'];
                $consulta = "SELECT * FROM posts WHERE usuarios_id_usuarios='$id_usuario' ORDER BY id_post DESC; ";
                $respuesta = mysqli_query($con, $consulta);

                while ($posts = mysqli_fetch_assoc($respuesta)) {
                    $id_libro = $posts['libros_id_libro'];
                    $texto = $posts['texto'];
                    $consulta_libro = "SELECT nombre, foto FROM libros WHERE id_libro = $id_libro";
                    $respuesta_libro = mysqli_query($con, $consulta_libro);
                    $libro = mysqli_fetch_assoc($respuesta_libro);

                    print "<div class='card mb-4 card-post w-75 mx-auto'>
                                    <div class='row g-0'>
                                        <div class='col-md-4'>
                                            <img src='../portadas/{$libro['foto']}' class='img-fluid rounded-start' alt='Portada del libro'>
                                        </div>
                                        <div class='col-md-8'>
                                            <div class='card-body'>
                                                <h5 class='card-title'>{$libro['nombre']}</h5>
                                                <h6>@$user</h6>
                                                <p class='card-text'>{$texto}</p>
                                            </div>
                                        </div>
                                    </div>";

                    if (!empty($posts['archivo'])) {
                        print "<div class='row g-0 blanquito'>
                                        <figure class='text-center'>
                                            <img src='../archivos/{$posts['archivo']}' alt='Imagen cargada por el usuario' class='padding mt-3' style='max-width: 250px; height: auto;'>
                                        </figure>
                                </div>";
                    }
                    print "</div>";
                }
                ?>
            </div>
            <div class="col-2"></div>
        </div>
    </div>

</main>

<?php
include_once("../componentes/footer.php");
?>