<?php
session_start();
include_once("../conf/conf.php");
include_once("../componentes/header.php");
?>

<main class="blanquito letra" style="min-height: 100vh;">

    <div class="d-flex" style="min-height: 100vh;">
        <?php include_once("../componentes/nav_admin.php"); ?>

        <div class="content flex-grow-1 p-4">
            <h3 class="pad">Panel de usuarios.</h3>
            <div class="row pad">
                <div class="col-1"></div>
                <div class="col-10">
                    <?php
                    if (isset($_GET['eliminado'])) {
                        print "<div class='alert alert-success' role='alert' >El usuario ha sido eliminado. </div>";
                    }
                    if (isset($_GET['baneado'])) {
                        print "<div class='alert alert-success' role='alert' >El usuario ha sido baneado. </div>";
                    }
                    if (isset($_GET['activado'])) {
                        print "<div class='alert alert-success' role='alert' >El usuario ha sido activado. </div>";
                    }
                    $consulta = "SELECT * FROM usuarios ORDER BY id_usuarios DESC;";
                    $respuesta = mysqli_query($con, $consulta);

                    while ($usuarios = mysqli_fetch_assoc($respuesta)) {

                        $id_usuario = $usuarios['id_usuarios'];
                        $nombre = $usuarios['nombre'];
                        $user = $usuarios['user'];
                        $mail = $usuarios['mail'];
                        $rol_num = $usuarios['roles_id_roles'];
                        $estado_num = $usuarios['estados_id_estados'];



                        if ($rol_num == 2) {
                            $rol = "Usuario";
                        } else {
                            $rol = "Administrador";
                        }

                        if ($estado_num == 1) {
                            $estado = "Activo";
                        } else {
                            $estado = "Baneado";
                        }


                        print "<div class='card user-card'>
                        <div class='user-card-body'>
                            <img src='../img/perfil.jpg' alt='Foto de perfil' class='user-avatar'>
                            <div class='user-info'>
                                <p class='user-name'>$nombre</p>
                                <p class='user-info'>@$user</p>
                                <p class='user-info'>$mail</p>
                                <p class='user-info'>Rol: $rol</p>
                                <p class='user-info'>Estado: $estado</p>

                            </div>
                            ";
                        if ($estado_num == 1) {
                            print "<form action='../logica/modificar_estado.php' method='POST' class='mt-3'>
                                <input type='hidden' name='id_usuarios' value='{$usuarios['id_usuarios']}'>
                                <button type='submit' class='btn btn-warning btn-sm'>Banear</button>
                                </form> ";
                        } else {
                            print "<form action='../logica/modificar_estado.php' method='POST' class='mt-3'>
                                <input type='hidden' name='id_usuarios' value='{$usuarios['id_usuarios']}'>
                                <button type='submit' class='btn btn-warning btn-sm'>Activar</button>
                                </form>";
                        };
                        print "<form action='../logica/eliminar_usuario.php' method='POST' class='mt-3'>
                            <input type='hidden' name='id_usuarios' value='{$usuarios['id_usuarios']}'>
                            <button type='submit' class='btn btn-danger btn-sm'>Eliminar</button>
                            </form>
                        </div>
                        </div>";
                    }

                    ?>

                </div>
                <div class="col-1"></div>
            </div>

        </div>

    </div>
</main>

<?php
include_once("../componentes/footer.php");
?>