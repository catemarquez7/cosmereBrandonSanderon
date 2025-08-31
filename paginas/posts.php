<?php
session_start();
include_once("../conf/conf.php");
include_once("../componentes/header.php");
?>

<main class="blanquito letra" style="min-height: 100vh;">

    <div class="d-flex" style="min-height: 100vh;">
        <?php include_once("../componentes/nav_admin.php"); ?>

        <div class="content flex-grow-1 p-4">
            <h3 class="pad">Panel de publicaciones.</h3>
            <div class="row">
                <div class="col-2"></div>
                <div class="col-8">
                    <?php
                    if (isset($_GET['eliminado'])) {
                        print "<div class='alert alert-success' role='alert' >La publicación ha sido eliminada. </div>";
                    }
                    ?>
                    <?php
                    $consulta = "SELECT * FROM posts ORDER BY id_post DESC;";
                    $respuesta = mysqli_query($con, $consulta);

                    while ($posts = mysqli_fetch_assoc($respuesta)) {
                        $id_libro = $posts['libros_id_libro'];
                        $texto = $posts['texto'];
                        $id_usuario = $posts['usuarios_id_usuarios'];
                        $consulta_libro = "SELECT nombre, foto FROM libros WHERE id_libro = $id_libro";
                        $respuesta_libro = mysqli_query($con, $consulta_libro);
                        $libro = mysqli_fetch_assoc($respuesta_libro);
                        $consulta_user = "SELECT user FROM usuarios WHERE id_usuarios = $id_usuario";
                        $respuesta_usuario = mysqli_query($con, $consulta_user);
                        $user_post = mysqli_fetch_assoc($respuesta_usuario);

                        print "<div class='card mb-4 card-post mx-auto' style='max-width: 650px;'>
                                    <div class='row g-0'>
                                        <div class='col-md-4'>
                                            <img src='../portadas/{$libro['foto']}' class='img-fluid rounded-start' alt='Portada del libro'>
                                        </div>
                                        <div class='col-md-8'>
                                            <div class='card-body'>
                                                <h5 class='card-title'>{$libro['nombre']}</h5>
                                                <h6>@{$user_post['user']}</h6>
                                                <p class='card-text'>{$texto}</p>
                                            <form action='../logica/eliminar_post.php' method='POST' class='mt-3'>
                                                <input type='hidden' name='id_post' value='{$posts['id_post']}'>
                                                <button type='submit' class='btn btn-danger btn-sm'>Eliminar</button>
                                            </form>
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

    </div>
</main>

<?php
include_once("../componentes/footer.php");
?>