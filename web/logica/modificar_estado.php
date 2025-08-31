<?php
include_once("../conf/conf.php");

if (isset($_POST['id_usuarios'])) {
    $id_usuario = $_POST['id_usuarios'];
    $consulta_inicial = "SELECT * FROM usuarios WHERE id_usuarios='$id_usuario'";
    $respuesta_inicial = mysqli_query($con, $consulta_inicial);
    $datos = mysqli_fetch_array($respuesta_inicial);
    $estado_inicial = $datos['estados_id_estados'];

    if ($estado_inicial == 1) {
        $consulta = "UPDATE usuarios SET estados_id_estados='2' WHERE id_usuarios='$id_usuario'";
        $respuesta = mysqli_query($con, $consulta);
        header("Location: ../paginas/usuarios.php?baneado=ok");
        exit();
    } else {
        $consulta = "UPDATE usuarios SET estados_id_estados='1' WHERE id_usuarios='$id_usuario'";
        $respuesta = mysqli_query($con, $consulta);
        header("Location: ../paginas/usuarios.php?activado=ok");
        exit();
    };
}
?>
