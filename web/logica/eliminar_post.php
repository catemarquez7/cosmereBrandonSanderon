<?php
include_once("../conf/conf.php");

if (isset($_POST['id_post'])) {
    $id_post = $_POST['id_post'];

    $consulta = "DELETE FROM posts WHERE id_post = $id_post";
    $resultado = mysqli_query($con, $consulta);

    if ($resultado) {
        header("Location: ../paginas/posts.php?eliminado=ok");
        exit();
    } else {
        header("Location: ../paginas/posts.php?error=bd");
        exit();
    }
}
?>