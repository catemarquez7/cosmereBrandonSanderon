<?php
include_once("../conf/conf.php");

if (isset($_POST['id_usuarios'])) {
    $id_usuario = $_POST['id_usuarios'];

    $consulta = "DELETE FROM usuarios WHERE id_usuarios = $id_usuario";
    $resultado = mysqli_query($con, $consulta);

    if ($resultado) {
        header("Location: ../paginas/usuarios.php?eliminado=ok");
        exit();
    } else {
        header("Location: ../paginas/usuarios.php?error=bd");
        exit();
    }
}
?>
