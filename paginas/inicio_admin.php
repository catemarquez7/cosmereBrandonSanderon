<?php
session_start();
include_once("../componentes/header.php");
?>

<main class="blanquito letra" style="min-height: 100vh;">

    <div class="d-flex" style="min-height: 100vh;">
        <?php include_once("../componentes/nav_admin.php"); ?>

        <div class="content flex-grow-1 p-4">
            <h3 class="pad">Bienvenido al panel de administrador.</h3>

            <h3 class="pad">☺️</h3>


        </div>

    </div>
</main>

<?php
include_once("../componentes/footer.php");
?>