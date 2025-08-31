<?php
session_start();
include_once("../componentes/header.php");
?>

<main class="blanquito letra" style="min-height: 100vh;">

    <div class="d-flex flex-grow-1" style="min-height: 100vh;">
        <?php include_once("../componentes/nav_admin.php"); ?>

        <div class="content flex-grow-1 p-4">
            <h3 class="pad">Creá una nueva cuenta de administrador:</h3>
            <div class="formulario1">
                <?php
                if (isset($_GET['user'])) {
                    print "<div class='alert alert-danger' role='alert'> Ese nombre de usuario ya esta en uso. </div>";
                }
                if (isset($_GET['mail'])) {
                    print "<div class='alert alert-danger' role='alert'> Ya existe una cuenta con ese mail. </div>";
                }
                if (isset($_GET['pass'])) {
                    print "<div class='alert alert-danger' role='alert'> Las contraseñas ingresadas no coinciden. </div>";
                }
                if (isset($_GET['edad'])) {
                    print "<div class='alert alert-danger' role='alert'> Debe ser mayor de 16 años para ingresar. </div>";
                }
                if (isset($_GET['reg'])) {
                    print "<div class='alert alert-success' role='alert' >El usuario se ha creado con exito. </div>";
                }
                ?>
                <h4 class="letra pad">Rellená el formulario:</h4>
                <form action="../logica/cargar_admin.php" method="POST" class="padding">
                    <div class="pad">
                        <label for="name">Nombre:</label>
                        <input type="text" name="name" id="name" placeholder="Ingrese su nombre" required>
                    </div>
                    <div class="pad">
                        <label for="user">Nombre:</label>
                        <input type="text" name="user" id="user" placeholder="Ingrese su user" required>
                    </div>
                    <div>
                        <label for="mail">Mail:</label>
                        <input type="email" name="mail" id="mail" placeholder="Ingrese su mail" required>
                    </div>
                    <div class="pad">
                        <label for="fecha">Fecha de nacimiento:</label>
                        <input type="date" name="fecha" id="fecha" placeholder="Ingrese su fecha de nacimiento" required>
                    </div>
                    <div>
                        <label for="pass1">Contraseña:</label>
                        <input type="password" name="pass1" id="pass1" placeholder="Ingrese su contraseña" required>
                    </div>
                    <div>
                        <label for="pass2">Contraseña nuevamente:</label>
                        <input type="password" name="pass2" id="pass2" placeholder="Ingrese su contraseña para reconfirmación" required>
                    </div>
                    <div>
                        <input type="submit" value="Enviar">
                    </div>
                </form>
            </div>
        </div>

    </div>
</main>

<?php
include_once("../componentes/footer.php");
?>