<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

include_once("../conf/conf.php");
include_once("../componentes/header.php");

?>

<main class="blanquito">
    <p><br> <br></p>
    <div class="container-fluid">
        <div class="row ">
            <div class="col-2">
                <nav class="blanquito">
                    <ul class="menu">
                        <li class="menu"><a href="#mistborn1" class="letra link">Mistborn Era 1</a></li>
                        <li class="menu"><a href="#mistborn2" class="letra link">Mistborn Era 2</a></li>
                        <li class="menu"><a href="#archivo" class="letra link">Stormlight Archive</a></li>
                        <li class="menu"><a href="#standalones" class="letra link">Standalones</a></li>
                        <li class="menu"><a href="#secret" class="letra link">Proyectos Secretos</a></li>
                        <li class="menu"><a href="#antologia" class="letra link">Antología</a></li>
                    </ul>
                </nav>
            </div>
            <div class="col-9">
                <h1 class="letra">Todos los libros.</h1>
                <div class="row blanco padding">
                    <h5 class="letra pad subtitulo" id="mistborn1">Mistborn Era 1</h5>
                    <div class="col-4">
                        <?php
                        $id_libro = 3;
                        $consulta = "SELECT nombre, descripcion, fecha_publicacion, foto FROM libros WHERE id_libro=$id_libro";
                        $respuesta = mysqli_query($con, $consulta);
                        $libro = mysqli_fetch_assoc($respuesta);
                        $nombreArchivo = $libro['foto'];
                        $rutaArchivo = "/parcial2_web2/portadas/" . $nombreArchivo;
                        print "
                        <div class='card' style='width: 18rem;'>";
                        if ($libro['foto'] != NULL) {
                            print "
                            <figure>
                            <img src='$rutaArchivo' class='card-img-top' alt='Portada del libro'>
                            </figure>
                            ";
                        }
                        print "
                        <div class='card-body'>
                        <h5 class='card-title letra subtitulo'>$libro[nombre]</h5>
                        <h6 class='card-text letra'>Publicación: $libro[fecha_publicacion]</h6>
                        <p class='card-text letra'>$libro[descripcion]</p>
                        </div>
                        </div>
                    ";
                        ?>
                    </div>
                    <div class="col-4">
                        <?php
                        $id_libro = 4;
                        $consulta = "SELECT nombre, descripcion, fecha_publicacion, foto FROM libros WHERE id_libro=$id_libro";
                        $respuesta = mysqli_query($con, $consulta);
                        $libro = mysqli_fetch_assoc($respuesta);
                        $nombreArchivo = $libro['foto'];
                        $rutaArchivo = "/parcial2_web2/portadas/" . $nombreArchivo;
                        print "
                        <div class='card' style='width: 18rem;'>";
                        if ($libro['foto'] != NULL) {
                            print "
                            <figure>
                            <img src='$rutaArchivo' class='card-img-top' alt='Portada del libro'>
                            </figure>
                            ";
                        }
                        print "
                        <div class='card-body'>
                        <h5 class='card-title letra subtitulo'>$libro[nombre]</h5>
                        <h6 class='card-text letra'>Publicación: $libro[fecha_publicacion]</h6>
                        <p class='card-text letra'>$libro[descripcion]</p>
                        </div>
                        </div>
                    ";
                        ?>
                    </div>
                    <div class="col-4">
                        <?php
                        $id_libro = 5;
                        $consulta = "SELECT nombre, descripcion, fecha_publicacion, foto FROM libros WHERE id_libro=$id_libro";
                        $respuesta = mysqli_query($con, $consulta);
                        $libro = mysqli_fetch_assoc($respuesta);
                        $nombreArchivo = $libro['foto'];
                        $rutaArchivo = "/parcial2_web2/portadas/" . $nombreArchivo;
                        print "
                        <div class='card' style='width: 18rem;'>";
                        if ($libro['foto'] != NULL) {
                            print "
                            <figure>
                            <img src='$rutaArchivo' class='card-img-top' alt='Portada del libro'>
                            </figure>
                            ";
                        }
                        print "
                        <div class='card-body'>
                        <h5 class='card-title letra subtitulo'>$libro[nombre]</h5>
                        <h6 class='card-text letra'>Publicación: $libro[fecha_publicacion]</h6>
                        <p class='card-text letra'>$libro[descripcion]</p>
                        </div>
                        </div>
                    ";
                        ?>
                    </div>
                </div>
                <div class="row azul padding letrablanca">
                    <h5 class="letra pad subtitulo" id="mistborn2">Mistborn Era 2</h5>
                    <div class="col-4">
                        <?php
                        $id_libro = 6;
                        $consulta = "SELECT nombre, descripcion, fecha_publicacion, foto FROM libros WHERE id_libro=$id_libro";
                        $respuesta = mysqli_query($con, $consulta);
                        $libro = mysqli_fetch_assoc($respuesta);
                        $nombreArchivo = $libro['foto'];
                        $rutaArchivo = "/parcial2_web2/portadas/" . $nombreArchivo;
                        print "
                        <div class='card' style='width: 18rem;'>";
                        if ($libro['foto'] != NULL) {
                            print "
                            <figure>
                            <img src='$rutaArchivo' class='card-img-top' alt='Portada del libro'>
                            </figure>
                            ";
                        }
                        print "
                        <div class='card-body'>
                        <h5 class='card-title letra subtitulo'>$libro[nombre]</h5>
                        <h6 class='card-text letra'>Publicación: $libro[fecha_publicacion]</h6>
                        <p class='card-text letra'>$libro[descripcion]</p>
                        </div>
                        </div>
                    ";
                        ?>
                    </div>
                    <div class="col-4">
                        <?php
                        $id_libro = 7;
                        $consulta = "SELECT nombre, descripcion, fecha_publicacion, foto FROM libros WHERE id_libro=$id_libro";
                        $respuesta = mysqli_query($con, $consulta);
                        $libro = mysqli_fetch_assoc($respuesta);
                        $nombreArchivo = $libro['foto'];
                        $rutaArchivo = "/parcial2_web2/portadas/" . $nombreArchivo;
                        print "
                        <div class='card' style='width: 18rem;'>";
                        if ($libro['foto'] != NULL) {
                            print "
                            <figure>
                            <img src='$rutaArchivo' class='card-img-top' alt='Portada del libro'>
                            </figure>
                            ";
                        }
                        print "
                        <div class='card-body'>
                        <h5 class='card-title letra subtitulo'>$libro[nombre]</h5>
                        <h6 class='card-text letra'>Publicación: $libro[fecha_publicacion]</h6>
                        <p class='card-text letra'>$libro[descripcion]</p>
                        </div>
                        </div>
                    ";
                        ?>
                    </div>
                    <div class="col-4">
                        <?php
                        $id_libro = 8;
                        $consulta = "SELECT nombre, descripcion, fecha_publicacion, foto FROM libros WHERE id_libro=$id_libro";
                        $respuesta = mysqli_query($con, $consulta);
                        $libro = mysqli_fetch_assoc($respuesta);
                        $nombreArchivo = $libro['foto'];
                        $rutaArchivo = "/parcial2_web2/portadas/" . $nombreArchivo;
                        print "
                        <div class='card' style='width: 18rem;'>";
                        if ($libro['foto'] != NULL) {
                            print "
                            <figure>
                            <img src='$rutaArchivo' class='card-img-top' alt='Portada del libro'>
                            </figure>
                            ";
                        }
                        print "
                        <div class='card-body'>
                        <h5 class='card-title letra subtitulo'>$libro[nombre]</h5>
                        <h6 class='card-text letra'>Publicación: $libro[fecha_publicacion]</h6>
                        <p class='card-text letra'>$libro[descripcion]</p>
                        </div>
                        </div>
                    ";
                        ?>
                    </div>
                    <div class="col-4 pad">
                        <?php
                        $id_libro = 9;
                        $consulta = "SELECT nombre, descripcion, fecha_publicacion, foto FROM libros WHERE id_libro=$id_libro";
                        $respuesta = mysqli_query($con, $consulta);
                        $libro = mysqli_fetch_assoc($respuesta);
                        $nombreArchivo = $libro['foto'];
                        $rutaArchivo = "/parcial2_web2/portadas/" . $nombreArchivo;
                        print "
                        <div class='card' style='width: 18rem;'>";
                        if ($libro['foto'] != NULL) {
                            print "
                            <figure>
                            <img src='$rutaArchivo' class='card-img-top' alt='Portada del libro'>
                            </figure>
                            ";
                        }
                        print "
                        <div class='card-body'>
                        <h5 class='card-title letra subtitulo'>$libro[nombre]</h5>
                        <h6 class='card-text letra'>Publicación: $libro[fecha_publicacion]</h6>
                        <p class='card-text letra'>$libro[descripcion]</p>
                        </div>
                        </div>
                    ";
                        ?>
                    </div>
                </div>
                <div class="row blanco padding">
                    <h5 class="letra pad subtitulo" id="archivo">El Archivo de las Tormentas</h5>
                    <div class="col-4">
                        <?php
                        $id_libro = 10;
                        $consulta = "SELECT nombre, descripcion, fecha_publicacion, foto FROM libros WHERE id_libro=$id_libro";
                        $respuesta = mysqli_query($con, $consulta);
                        $libro = mysqli_fetch_assoc($respuesta);
                        $nombreArchivo = $libro['foto'];
                        $rutaArchivo = "/parcial2_web2/portadas/" . $nombreArchivo;
                        print "
                        <div class='card' style='width: 18rem;'>";
                        if ($libro['foto'] != NULL) {
                            print "
                            <figure>
                            <img src='$rutaArchivo' class='card-img-top' alt='Portada del libro'>
                            </figure>
                            ";
                        }
                        print "
                        <div class='card-body'>
                        <h5 class='card-title letra subtitulo'>$libro[nombre]</h5>
                        <h6 class='card-text letra'>Publicación: $libro[fecha_publicacion]</h6>
                        <p class='card-text letra'>$libro[descripcion]</p>
                        </div>
                        </div>
                    ";
                        ?>
                    </div>
                    <div class="col-4">
                        <?php
                        $id_libro = 11;
                        $consulta = "SELECT nombre, descripcion, fecha_publicacion, foto FROM libros WHERE id_libro=$id_libro";
                        $respuesta = mysqli_query($con, $consulta);
                        $libro = mysqli_fetch_assoc($respuesta);
                        $nombreArchivo = $libro['foto'];
                        $rutaArchivo = "/parcial2_web2/portadas/" . $nombreArchivo;
                        print "
                        <div class='card' style='width: 18rem;'>";
                        if ($libro['foto'] != NULL) {
                            print "
                            <figure>
                            <img src='$rutaArchivo' class='card-img-top' alt='Portada del libro'>
                            </figure>
                            ";
                        }
                        print "
                        <div class='card-body'>
                        <h5 class='card-title letra subtitulo'>$libro[nombre]</h5>
                        <h6 class='card-text letra'>Publicación: $libro[fecha_publicacion]</h6>
                        <p class='card-text letra'>$libro[descripcion]</p>
                        </div>
                        </div>
                    ";
                        ?>
                    </div>
                    <div class="col-4">
                        <?php
                        $id_libro = 12;
                        $consulta = "SELECT nombre, descripcion, fecha_publicacion, foto FROM libros WHERE id_libro=$id_libro";
                        $respuesta = mysqli_query($con, $consulta);
                        $libro = mysqli_fetch_assoc($respuesta);
                        $nombreArchivo = $libro['foto'];
                        $rutaArchivo = "/parcial2_web2/portadas/" . $nombreArchivo;
                        print "
                        <div class='card' style='width: 18rem;'>";
                        if ($libro['foto'] != NULL) {
                            print "
                            <figure>
                            <img src='$rutaArchivo' class='card-img-top' alt='Portada del libro'>
                            </figure>
                            ";
                        }
                        print "
                        <div class='card-body'>
                        <h5 class='card-title letra subtitulo'>$libro[nombre]</h5>
                        <h6 class='card-text letra'>Publicación: $libro[fecha_publicacion]</h6>
                        <p class='card-text letra'>$libro[descripcion]</p>
                        </div>
                        </div>
                    ";
                        ?>
                    </div>
                    <div class="col-4">
                        <?php
                        $id_libro = 13;
                        $consulta = "SELECT nombre, descripcion, fecha_publicacion, foto FROM libros WHERE id_libro=$id_libro";
                        $respuesta = mysqli_query($con, $consulta);
                        $libro = mysqli_fetch_assoc($respuesta);
                        $nombreArchivo = $libro['foto'];
                        $rutaArchivo = "/parcial2_web2/portadas/" . $nombreArchivo;
                        print "
                        <div class='card' style='width: 18rem;'>";
                        if ($libro['foto'] != NULL) {
                            print "
                            <figure>
                            <img src='$rutaArchivo' class='card-img-top pad' alt='Portada del libro'>
                            </figure>
                            ";
                        }
                        print "
                        <div class='card-body'>
                        <h5 class='card-title letra subtitulo'>$libro[nombre]</h5>
                        <h6 class='card-text letra'>Publicación: $libro[fecha_publicacion]</h6>
                        <p class='card-text letra'>$libro[descripcion]</p>
                        </div>
                        </div>
                    ";
                        ?>
                    </div>
                    <div class="col-4">
                        <?php
                        $id_libro = 14;
                        $consulta = "SELECT nombre, descripcion, fecha_publicacion, foto FROM libros WHERE id_libro=$id_libro";
                        $respuesta = mysqli_query($con, $consulta);
                        $libro = mysqli_fetch_assoc($respuesta);
                        $nombreArchivo = $libro['foto'];
                        $rutaArchivo = "/parcial2_web2/portadas/" . $nombreArchivo;
                        print "
                        <div class='card' style='width: 18rem;'>";
                        if ($libro['foto'] != NULL) {
                            print "
                            <figure>
                            <img src='$rutaArchivo' class='card-img-top' alt='Portada del libro'>
                            </figure>
                            ";
                        }
                        print "
                        <div class='card-body'>
                        <h5 class='card-title letra subtitulo'>$libro[nombre]</h5>
                        <h6 class='card-text letra'>Publicación: $libro[fecha_publicacion]</h6>
                        <p class='card-text letra'>$libro[descripcion]</p>
                        </div>
                        </div>
                    ";
                        ?>
                    </div>
                </div>
                <div class="row azul padding letrablanca">
                    <h5 class="letra pad subtitulo" id="standalones">Standalones</h5>
                    <div class="col-4">
                        <?php
                        $id_libro = 1;
                        $consulta = "SELECT nombre, descripcion, fecha_publicacion, foto FROM libros WHERE id_libro=$id_libro";
                        $respuesta = mysqli_query($con, $consulta);
                        $libro = mysqli_fetch_assoc($respuesta);
                        $nombreArchivo = $libro['foto'];
                        $rutaArchivo = "/parcial2_web2/portadas/" . $nombreArchivo;
                        print "
                        <div class='card' style='width: 18rem;'>";
                        if ($libro['foto'] != NULL) {
                            print "
                            <figure>
                            <img src='$rutaArchivo' class='card-img-top' alt='Portada del libro'>
                            </figure>
                            ";
                        }
                        print "
                        <div class='card-body'>
                        <h5 class='card-title letra subtitulo'>$libro[nombre]</h5>
                        <h6 class='card-text letra'>Publicación: $libro[fecha_publicacion]</h6>
                        <p class='card-text letra'>$libro[descripcion]</p>
                        </div>
                        </div>
                    ";
                        ?>
                    </div>
                    <div class="col-4">
                        <?php
                        $id_libro = 2;
                        $consulta = "SELECT nombre, descripcion, fecha_publicacion, foto FROM libros WHERE id_libro=$id_libro";
                        $respuesta = mysqli_query($con, $consulta);
                        $libro = mysqli_fetch_assoc($respuesta);
                        $nombreArchivo = $libro['foto'];
                        $rutaArchivo = "/parcial2_web2/portadas/" . $nombreArchivo;
                        print "
                        <div class='card' style='width: 18rem;'>";
                        if ($libro['foto'] != NULL) {
                            print "
                            <figure>
                            <img src='$rutaArchivo' class='card-img-top' alt='Portada del libro'>
                            </figure>
                            ";
                        }
                        print "
                        <div class='card-body'>
                        <h5 class='card-title letra subtitulo'>$libro[nombre]</h5>
                        <h6 class='card-text letra'>Publicación: $libro[fecha_publicacion]</h6>
                        <p class='card-text letra'>$libro[descripcion]</p>
                        </div>
                        </div>
                    ";
                        ?>
                    </div>
                </div>
                <div class="row blanco padding">
                    <h5 class="letra pad subtitulo" id="secret">Proyectos Secretos</h5>
                    <div class="col-4">
                        <?php
                        $id_libro = 16;
                        $consulta = "SELECT nombre, descripcion, fecha_publicacion, foto FROM libros WHERE id_libro=$id_libro";
                        $respuesta = mysqli_query($con, $consulta);
                        $libro = mysqli_fetch_assoc($respuesta);
                        $nombreArchivo = $libro['foto'];
                        $rutaArchivo = "/parcial2_web2/portadas/" . $nombreArchivo;
                        print "
                        <div class='card' style='width: 18rem;'>";
                        if ($libro['foto'] != NULL) {
                            print "
                            <figure>
                            <img src='$rutaArchivo' class='card-img-top' alt='Portada del libro'>
                            </figure>
                            ";
                        }
                        print "
                        <div class='card-body'>
                        <h5 class='card-title letra subtitulo'>$libro[nombre]</h5>
                        <h6 class='card-text letra'>Publicación: $libro[fecha_publicacion]</h6>
                        <p class='card-text letra'>$libro[descripcion]</p>
                        </div>
                        </div>
                    ";
                        ?>
                    </div>
                    <div class="col-4">
                        <?php
                        $id_libro = 17;
                        $consulta = "SELECT nombre, descripcion, fecha_publicacion, foto FROM libros WHERE id_libro=$id_libro";
                        $respuesta = mysqli_query($con, $consulta);
                        $libro = mysqli_fetch_assoc($respuesta);
                        $nombreArchivo = $libro['foto'];
                        $rutaArchivo = "/parcial2_web2/portadas/" . $nombreArchivo;
                        print "
                        <div class='card' style='width: 18rem;'>";
                        if ($libro['foto'] != NULL) {
                            print "
                            <figure>
                            <img src='$rutaArchivo' class='card-img-top' alt='Portada del libro'>
                            </figure>
                            ";
                        }
                        print "
                        <div class='card-body'>
                        <h5 class='card-title letra subtitulo'>$libro[nombre]</h5>
                        <h6 class='card-text letra'>Publicación: $libro[fecha_publicacion]</h6>
                        <p class='card-text letra'>$libro[descripcion]</p>
                        </div>
                        </div>
                    ";
                        ?>
                    </div>
                    <div class="col-4">
                        <?php
                        $id_libro = 18;
                        $consulta = "SELECT nombre, descripcion, fecha_publicacion, foto FROM libros WHERE id_libro=$id_libro";
                        $respuesta = mysqli_query($con, $consulta);
                        $libro = mysqli_fetch_assoc($respuesta);
                        $nombreArchivo = $libro['foto'];
                        $rutaArchivo = "/parcial2_web2/portadas/" . $nombreArchivo;
                        print "
                        <div class='card' style='width: 18rem;'>";
                        if ($libro['foto'] != NULL) {
                            print "
                            <figure>
                            <img src='$rutaArchivo' class='card-img-top' alt='Portada del libro'>
                            </figure>
                            ";
                        }
                        print "
                        <div class='card-body'>
                        <h5 class='card-title letra subtitulo'>$libro[nombre]</h5>
                        <h6 class='card-text letra'>Publicación: $libro[fecha_publicacion]</h6>
                        <p class='card-text letra'>$libro[descripcion]</p>
                        </div>
                        </div>
                    ";
                        ?>
                    </div>

                </div>
                <div class="row azul padding letrablanca">
                    <h5 class="letra pad subtitulo" id="antologia">Antología</h5>
                    <div class="col-4">
                        <?php
                        $id_libro = 15;
                        $consulta = "SELECT nombre, descripcion, fecha_publicacion, foto FROM libros WHERE id_libro=$id_libro";
                        $respuesta = mysqli_query($con, $consulta);
                        $libro = mysqli_fetch_assoc($respuesta);
                        $nombreArchivo = $libro['foto'];
                        $rutaArchivo = "/parcial2_web2/portadas/" . $nombreArchivo;
                        print "
                        <div class='card' style='width: 18rem;'>";
                        if ($libro['foto'] != NULL) {
                            print "
                            <figure>
                            <img src='$rutaArchivo' class='card-img-top' alt='Portada del libro'>
                            </figure>
                            ";
                        }
                        print "
                        <div class='card-body'>
                        <h5 class='card-title letra subtitulo'>$libro[nombre]</h5>
                        <h6 class='card-text letra'>Publicación: $libro[fecha_publicacion]</h6>
                        <p class='card-text letra'>$libro[descripcion]</p>
                        </div>
                        </div>
                    ";
                        ?>
                    </div>
                </div>
            </div>
            <div class="col-1"></div>
        </div>
    </div>
</main>





<?php
include_once("../componentes/footer.php");
?>