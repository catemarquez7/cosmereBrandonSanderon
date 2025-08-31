<?php
include_once("../componentes/header.php");
?>
<main class="form-signin w-100 m-auto letra azul">
    <div class="container">
        <div class="row align-items-center" style="height: 95vh;">
            <div class="col-3"></div>
            <div class="col-6">
                <form action="../logica/reg.php" method="post">
                    <h4 class="fw-normal letra padding letrablanca">Registrate</h4>
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
                        print "<div class='alert alert-success' role='alert' >Su usuario se ha creado con exito. </div>";
                    }
                    ?>
                    <div class="form-floating">
                        <input type="text" class="form-control" id="floatingInput" placeholder="Nombre" name="nombre">
                        <label for="floatingInput">Nombre</label>
                    </div>
                    <br>
                    <div class="form-floating">
                        <input type="text" class="form-control" id="floatingInput" placeholder="User" name="user">
                        <label for="floatingInput">Nombre de usuario</label>
                    </div>
                    <br>
                    <div class="form-floating">
                        <input type="email" class="form-control" id="floatingInput" placeholder="nombre@ejemplo.com" name="mail">
                        <label for="floatingInput">Correo electrónico</label>
                    </div>
                    <br>
                    <div class="form-floating">
                        <input type="date" class="form-control" id="floatingInput" name="fecha_nac">
                        <label for="floatingInput">Fecha de nacimiento</label>
                    </div>
                    <br>
                    <div class="form-floating">
                        <input type="password" class="form-control" id="floatingPassword" placeholder="Contraseña" name="pass_uno">
                        <label for="floatingPassword">Contraseña</label>
                    </div>
                    <br>
                    <div class="form-floating">
                        <input type="password" class="form-control" id="floatingPassword" placeholder="Repetir contraseña" name="pass_dos">
                        <label for="floatingPassword">Repetir contraseña</label>
                    </div>
                    <br>
                    <input class="btn btn-primary w-100 py-2 padding letrablanca" type="submit" value="Registrate">
                </form>
            </div>
            <div class="col-3"></div>
        </div>
    </div>
</main>




<?php
include_once("../componentes/footer.php");
?>