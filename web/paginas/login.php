<?php
include_once("../componentes/header.php");
?>

<main class="form-signin w-100 m-auto letra azul">
    <div class="container">
        <div class="row align-items-center" style="min-height: 90vh; padding-bottom: 80px;">
            <div class="col-12">
                <h3 class="fw-normal letra letrablanca">Bienvenido al Cosmere.</h3>
            </div>
            <div class="col-3"></div>
            <div class="col-6">
                <form action="../logica/log.php" method="post" class="p-4">
                    <h4 class="fw-normal letra letrablanca">Iniciá sesión:</h4>
                    <?php
                    if (isset($_GET['log'])) {
                        print "<div class='alert alert-danger' role='alert' >
            No se encuentra registrado. </div>";
                    }
                    if (isset($_GET['pass'])) {
                        print "<div class='alert alert-danger' role='alert' >
            Su contraseña es incorrecta. </div>";
                    }
                    if (isset($_GET['act'])) {
                        print "<div class='alert alert-danger' role='alert' >
            Su usuario se encuentra baneado de la comunidad. </div>";
                    }
                    if (isset($_GET['reg'])) {
                        print "<div class='alert alert-success' role='alert' >
            Su usuario se ha creado con exito. </div>";
                    }
                    ?>
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control padding" id="floatingInput" placeholder="user123" name="user">
                        <label for="floatingInput">User</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="password" class="form-control" id="floatingPassword" placeholder="Contraseña" name="pass_uno">
                        <label for="floatingPassword">Contraseña</label>
                    </div>
                    <div class="mb-3">
                        <a href=" ../paginas/registro.php" class="letrablanca">Registrate si aún no creaste una cuenta. </a>
                    </div>
                    <input class="btn btn-primary w-100 py-2 padding letrablanca" type="submit" value="Ingresa">
                </form>
            </div>
            <div class="col-3"></div>
        </div>
    </div>
</main>

<?php
include_once("../componentes/footer.php");
?>