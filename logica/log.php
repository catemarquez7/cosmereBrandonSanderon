<?php
session_start();
include_once("../conf/conf.php");

if (isset($_POST["user"]) and isset($_POST["pass_uno"])) {
    $user = $_POST["user"];
    $pass =  $_POST["pass_uno"];
    $consulta_log = "SELECT * FROM usuarios WHERE user='$user'";
    $respuesta = mysqli_query($con, $consulta_log);
    $datos = mysqli_fetch_array($respuesta);
    $actividad = $datos['estados_id_estados'];

    if ($datos == NULL) {
        header("Location: ../paginas/login.php?log=no");
        exit;
    }

    $okpass = $datos['pass'];
    if (MD5($pass) != $okpass) {
        header("Location: ../paginas/login.php?pass=no");
        exit;
    }

    if ($datos['roles_id_roles'] == 1) {
        $_SESSION['id_usuarios'] = $datos['id_usuarios'];
        $_SESSION['user'] = $datos['user'];
        $_SESSION['nombre'] = $datos['nombre'];
        $_SESSION['mail'] = $datos['mail'];
        $_SESSION['fecha_nac'] = $datos['fecha_nac'];
        $_SESSION['roles_id_roles'] = $datos['roles_id_roles'];
        $_SESSION['estados_id_estados'] = $datos['estados_id_estados'];

        header("Location: ../paginas/inicio_admin.php");
        exit;
    }

    if ($actividad == 2) {
        header("Location: ../paginas/login.php?act=no");
        exit;
    } else {
        $_SESSION['id_usuarios'] = $datos['id_usuarios'];
        $_SESSION['user'] = $datos['user'];
        $_SESSION['nombre'] = $datos['nombre'];
        $_SESSION['mail'] = $datos['mail'];
        $_SESSION['fecha_nac'] = $datos['fecha_nac'];
        $_SESSION['roles_id_roles'] = $datos['roles_id_roles'];
        $_SESSION['estados_id_estados'] = $datos['estados_id_estados'];
        header("Location: ../paginas/inicio.php ");
        exit;
    }
}

?>
