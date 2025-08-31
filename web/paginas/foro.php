<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
include_once("../conf/conf.php");
include_once("../componentes/header.php");
?>

<main class="azul">
    <div class="container letra">
        <br><br>
        <?php
        $user = $_SESSION['user'];
        $id_usuario = $_SESSION['id_usuarios'];
        print "<h2 class='letra letrablanca'><a href=perfil.php?usuario=$id_usuario >@$user</a>, dejá tu reseña!</h2>";
        ?>
        <br>
        <div class="row justify-content-center">
            <div class="col-md-8">

                <!-- formulario -->
                <div class="blanquito padding margin borde mb-5">
                    <?php
                    $consulta = "SELECT id_libro, nombre FROM libros";
                    $resultado = mysqli_query($con, $consulta);
                    ?>
                    <form action="../logica/post.php" method="post" enctype="multipart/form-data" class="mb-3">
                        <label for="libro">Seleccioná el libro:</label>
                        <select name="id_libro" id="libro" required class="form-select mb-3">
                            <option value="">Elegí el libro que querés reseñar</option>
                            <?php
                            while ($libro = mysqli_fetch_assoc($resultado)) {
                                echo "<option value='{$libro['id_libro']}'>{$libro['nombre']}</option>";
                            }
                            ?>
                        </select>

                        <label for="exampleFormControlTextarea1" class="form-label">Compartí tu opinión:</label>
                        <textarea class="form-control mb-3" id="exampleFormControlTextarea1" rows="3" name="comentario" required></textarea>

                        <input type="file" name="archivo" id="archivo" class="form-control mb-3">

                        <input type="submit" value="Publicar" class="btn btn-primary w-100">
                    </form>
                </div>

                <!-- posts -->

                <div class="letrablanca">
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

                        print "<div class='card mb-4 card-post'>
                                    <div class='row g-0'>
                                        <div class='col-md-4'>
                                            <img src='../portadas/{$libro['foto']}' class='img-fluid rounded-start' alt='Portada del libro'>
                                        </div>
                                        <div class='col-md-8'>
                                            <div class='card-body'>
                                                <h5 class='card-title'>{$libro['nombre']}</h5>
                                                <h6>@{$user_post['user']}</h6>
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

            </div>
        </div>

        <div style="height: 80px;"></div>
    </div>

</main>

<?php
include_once("../componentes/footer.php");
?>