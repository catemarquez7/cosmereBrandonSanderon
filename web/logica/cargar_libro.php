<?php
include_once("../conf/conf.php");


if (isset($_POST["titulo"]) and isset($_POST["text"]) and isset($_POST["fecha"]) and isset($_POST["portada"])) {
    $titulo = $_POST["titulo"];
    $sinopsis = $_POST["text"];
    $fecha = $_POST["fecha"];

    $consulta_titulo = "SELECT nombre FROM libros WHERE nombre='$titulo'";
    $respuesta = mysqli_query($con, $consulta_titulo);
    $libro = mysqli_fetch_array($respuesta);


    $archivo = $_FILES['portada']['tmp_name'];
    $nombre = time() . ".jpg";
    move_uploaded_file($archivo, "../portadas/$nombre");




    if ($libro != NULL) {
        header("Location: ../paginas/form_libro.php?titulo=no");
        exit();
    } else {
        $agregar = "INSERT INTO libros(nombre, descripcion, fecha_publicacion, foto) VALUES ('$titulo','$sinopsis','$fecha','$nombre')";
        $consulta = mysqli_query($con, $agregar);
        header("Location: ../paginas/form_libro.php?carga=ok");
    }
}
