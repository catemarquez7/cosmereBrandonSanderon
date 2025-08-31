<?php
session_start();
include_once("../componentes/header.php");
?>

<main class="blanquito letra" style="min-height: 100vh;">

    <div class="d-flex" style="min-height: 100vh;">
        <?php include_once("../componentes/nav_admin.php"); ?>

        <div class="content flex-grow-1 p-4">
            <h3 class="pad">Agregá un nuevo libro.</h3>
            <div class="formulario1">
                <?php
                if (isset($_GET['titulo'])) {
                    print "<div class='alert alert-danger' role='alert' >
            Ese libro ya se encuentra registrado. </div>";
                }
                if (isset($_GET['carga'])) {
                    print "<div class='alert alert-success' role='alert' >
            El libro se ha cargado correctamente. </div>";
                }
                ?>
                <h4 class="letra pad">Rellená el formulario:</h4>
                <form action="../logica/cargar_libro.php" method="POST" class="padding">
                    <div class="pad">
                        <label for="titulo">Titulo:</label>
                        <input type="text" name="titulo" id="titulo" placeholder="Ingrese el titulo del libro" required>
                    </div>
                    <div class="pad">
                        <label for="text">Sinopsis:</label>
                        <textarea name="text" id="text" placeholder="Ingrese la sinopsis" cols="50" rows="5" maxlength="310" required></textarea>
                    </div>
                    <div class="pad">
                        <label for="fecha">Fecha de publicación:</label>
                        <input type="date" name="fecha" id="fecha" placeholder="Ingrese la fecha de publicación" required>
                    </div>
                    <div class="pad">
                        <label for="portada">Cargá la portada del libro:</label>
                        <input type="file" name="portada" id="portada" accept="image/jpeg, image/png" required>

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