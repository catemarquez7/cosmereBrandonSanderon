<?php
session_start();
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

include_once("../conf/conf.php");

if (isset($_POST["id_libro"]) and isset($_POST["comentario"])) {
    $id_libro = $_POST["id_libro"];
    $comentario = $_POST["comentario"];
    $nombre = null;

    $user = $_SESSION['user'];
    $id_usuario = $_SESSION['id_usuarios'];


    if (isset($_FILES["archivo"]) and $_FILES["archivo"]["error"] === 0) {
        $archivo = $_FILES['archivo']['tmp_name'];
        $nombre = time() . ".jpg";
        move_uploaded_file($archivo, "../archivos/$nombre");
    }

    if ($nombre == NULL) {
        $consulta = "INSERT INTO posts(texto, libros_id_libro, usuarios_id_usuarios) VALUES ('$comentario','$id_libro','$id_usuario')";
    } else {
        $consulta = "INSERT INTO posts(texto, libros_id_libro, usuarios_id_usuarios, archivo) VALUES ('$comentario','$id_libro','$id', '$nombre')";
    }

    mysqli_query($con, $consulta);

    header("Location: ../paginas/foro.php ");
}
