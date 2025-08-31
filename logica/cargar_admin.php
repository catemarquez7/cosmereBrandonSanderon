<?php
include_once("../conf/conf.php");

if (isset($_POST['name']) and isset($_POST['user']) and isset($_POST['mail']) and isset($_POST['fecha'])  and isset($_POST['pass1']) and isset($_POST['pass2'])) {
    $nombre = $_POST['name'];
    $user = $_POST['user'];
    $mail = $_POST['mail'];
    $fecha_nac = $_POST['fecha']; // se guarda en texto plano
    $fecha = new DateTime($_POST['fecha']); // para comparar con la de hoy
    $hoy = new DateTime();
    $edad_minima = $hoy->modify("-16 years");
    $pass_uno = $_POST['pass1'];
    $pass_dos = $_POST['pass2'];


    if ($fecha <= $edad_minima) {
        $consulta_user = "SELECT user FROM usuarios WHERE user='$user'";
        $respuesta = mysqli_query($con, $consulta_user);
        if (mysqli_fetch_array($respuesta)) {
            header("Location: ../paginas/form_admin.php?user=error ");
            exit();
        } else {
            $consulta_mail = "SELECT mail FROM usuarios WHERE mail='$mail'";
            $respuesta = mysqli_query($con, $consulta_mail);
            if (mysqli_fetch_array($respuesta)) {
                header("Location: ../paginas/form_admin.php?mail=error ");
                exit();
            } else {
                if ($pass_uno == $pass_dos) {
                    $consulta = "INSERT INTO usuarios( nombre, user, fecha_nac, mail, pass, roles_id_roles, estados_id_estados) VALUES ('$nombre','$user','$fecha_nac','$mail', MD5('$pass_uno'), 1, 1)";
                    mysqli_query($con, $consulta);
                    header("Location: ../paginas/form_admin.php?reg=ok");
                    exit();
                } else {
                    header("Location: ../paginas/form_admin.php?pass=error ");
                    exit();
                }
            }
        }
    } else {
        header("Location: ../paginas/form_admin.php?edad=error");
    }
}
?>
