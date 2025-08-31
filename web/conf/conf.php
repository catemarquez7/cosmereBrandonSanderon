<?php
$servidor = "localhost";
$usuario = "root" ;
$pass = "" ;
$bd = "Cosmere" ;
$puerto = "3306";
$con = mysqli_connect($servidor,$usuario,$pass,$bd,$puerto);
if (!$con) {
    die("Error de conexión: " . mysqli_connect_error());
}
?>