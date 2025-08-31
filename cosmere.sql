-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Aug 04, 2025 at 12:09 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cosmere`
--

-- --------------------------------------------------------

--
-- Table structure for table `estados`
--

CREATE TABLE `estados` (
  `id_estados` int(11) NOT NULL,
  `tipo_estado` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `estados`
--

INSERT INTO `estados` (`id_estados`, `tipo_estado`) VALUES
(1, 'activo'),
(2, 'baneado');

-- --------------------------------------------------------

--
-- Table structure for table `libros`
--

CREATE TABLE `libros` (
  `id_libro` int(11) NOT NULL,
  `nombre` varchar(45) NOT NULL,
  `descripcion` varchar(350) NOT NULL,
  `fecha_publicacion` date NOT NULL,
  `foto` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `libros`
--

INSERT INTO `libros` (`id_libro`, `nombre`, `descripcion`, `fecha_publicacion`, `foto`) VALUES
(1, 'Elantris', 'Una ciudad divina ha caído en ruina, y quienes alguna vez ascendían como dioses ahora son malditos. Tres personajes luchan por descubrir la verdad detrás del colapso mientras fuerzas políticas y religiosas amenazan con aplastar lo que queda.', '2005-04-21', '13.jpg'),
(2, 'Warbreaker', 'Dos princesas son enviadas a un reino gobernado por dioses resucitados. Su destino se entrelaza con una magia que utiliza el “Aliento” humano como fuente de poder, y con un dios que empieza a cuestionar su existencia.', '2009-06-09', '14.jpg'),
(3, 'El Imperio Final', 'Un mundo gobernado por un tirano inmortal vive bajo cenizas y opresión. Una joven ladrona descubre que posee un raro poder mágico. Junto a un grupo de rebeldes, planea lo impensable: derrocar al Lord Legislador.', '2006-07-07', '2.jpg'),
(4, 'El Pozo de la Ascencion', 'Tras un gran cambio en el poder, gobernar se vuelve más difícil que rebelarse. Las ciudades enfrentan guerras, intrigas políticas y amenazas invisibles. La magia empieza a actuar de formas inesperadas.', '2007-08-21', '1.jpg'),
(5, 'El Heroe de las Eras', 'El equilibrio del mundo empieza a quebrarse mientras una fuerza antigua se libera. Los protagonistas deben descubrir secretos perdidos para salvar todo lo que conocen. Es el fin... o el renacimiento.', '2008-10-14', '3.jpg'),
(6, 'Aleación de Ley', 'Treinta años después, en una sociedad moderna, un noble justiciero mezcla balas y magia. Acompañado por su sarcástico compañero, enfrenta mafias, corrupción y un nuevo tipo de amenaza. El pasado aún tiene secretos que contar.', '2011-11-08', '6.jpg'),
(7, 'Sombras de Identidad', 'Mientras crece el caos político y religioso, surgen crímenes inexplicables. El héroe debe enfrentar no solo enemigos externos, sino dudas sobre su identidad y propósito. Nuevas verdades sacuden los cimientos de la ciudad.', '2015-10-06', '5.jpg'),
(8, 'Brazales de Duelo', 'Una antigua leyenda sobre una fuente de poder podría cambiar el mundo. Viajes, descubrimientos y revelaciones profundas llevan a los protagonistas más allá de lo que imaginaron. La historia conecta con algo mucho mayor.', '2016-01-26', '7.jpg'),
(9, 'El metal perdido', 'El caos se aproxima mientras amenazas ocultas resurgen con más fuerza que nunca. Los protagonistas deben enfrentarse no solo a enemigos, sino a verdades que cambian todo lo que creían saber. El destino del mundo y su conexión con fuerzas cósmicas se define en un último y explosivo acto.', '2022-11-15', '4.jpg'),
(10, 'El camino de los reyes', 'En un mundo azotado por tormentas, guerreros, eruditos y esclavos luchan con su pasado y su destino. Las antiguas órdenes de los Caballeros Radiantes han caído… pero algo empieza a despertarse. Cada personaje busca su verdad en medio de la guerra y la traición.', '2010-08-31', '8.jpg'),
(11, 'Palabras radiantes', 'Los misterios del pasado y los poderes dormidos comienzan a revelarse. Las alianzas tambalean mientras enemigos internos y externos se fortalecen. La verdad no es lo que parecía, y la luz puede nacer de la oscuridad.', '2014-03-04', '10.jpg'),
(12, 'Juramentada', 'El peso del liderazgo y las antiguas promesas caen sobre quienes deben proteger el mundo. Conocer la verdad puede ser tan peligroso como ignorarla. El conflicto se expande más allá de las fronteras físicas y morales.', '2017-11-14', '11.jpg'),
(13, 'El Ritmo de la Guerra', 'Mientras la guerra entra en una nueva fase, los Radiantes enfrentan amenazas invisibles y divisiones internas. Las investigaciones científicas y mágicas chocan con fuerzas antiguas. La batalla ya no es solo de espadas: es de voluntades.', '2020-11-17', '12.jpg'),
(14, 'Viento y Verdad', 'La conclusión del primer arco reúne a todos los personajes en una lucha decisiva. Antiguos juramentos serán puestos a prueba y el destino del mundo penderá de un hilo. La verdad se alza… como una tormenta final.', '2024-12-06', '9.jpg'),
(15, 'Arcanum Ilimitado', 'Una antología que reúne historias cortas ambientadas en distintos mundos del Cosmere. Cada relato expande la magia y la mitología de los planetas, mostrando personajes y momentos clave. Es el complemento ideal para quienes quieren profundizar más allá de las sagas principales.', '2016-11-22', '15.jpg'),
(16, 'Trenza del mar Esmeralda', 'Tress es una chica común que vive en una isla, soñando con aventuras mientras recolecta tazas. Cuando alguien que ama está en peligro, se embarca en un viaje por mares de esporas mágicas. Es una travesía encantadora, divertida y valiente, al estilo de un cuento de hadas irreverente.', '2023-01-01', '16.jpg'),
(17, 'Yumi y el pintor de pesadillas', 'Dos almas de mundos opuestos quedan conectadas de forma inesperada. Una joven devota y un artista solitario deben cooperar para enfrentar fuerzas oscuras y encontrar sentido a sus realidades. Es una historia de amor, arte y sacrificio, con la sensibilidad de un cuento lírico.', '2023-07-01', '18.jpg'),
(18, 'El hombre iluminado', 'En un planeta bañado por un sol constante, la supervivencia depende de moverse sin cesar. Un fugitivo llega allí escapando de su pasado, pero lo que encuentra puede cambiar mucho más que su destino. Es una historia veloz, llena de acción, con conexiones profundas al corazón del Cosmere.', '2023-10-19', '17.jpg'),

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id_post` int(11) NOT NULL,
  `texto` varchar(300) NOT NULL,
  `libros_id_libro` int(11) NOT NULL,
  `usuarios_id_usuarios` int(11) NOT NULL,
  `archivo` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id_post`, `texto`, `libros_id_libro`, `usuarios_id_usuarios`, `archivo`) VALUES
(16, 'me encantó cómo Sanderson juega con el concepto del color y la respiración como magia. los personajes son súper distintos entre sí, y el giro final es espectacular', 2, 2, NULL),
(17, 'LO AMO la mejor conclusion para este arco del archivo\r\n\r\n', 14, 3, NULL),
(20, 'Un cierre potente para la saga de Wax y Wayne que mezcla acción, misterio y ese mundo steampunk que tanto engancha. No solo hay peleas épicas, sino también mucha intriga política y desarrollo de personajes.', 9, 2, NULL),
(21, 'El inicio de una historia enorme con personajes complejos y un mundo brutalmente bien construido. Te atrapa con sus tormentas, magia y las luchas internas que hacen que quieras seguir leyendo sin parar.', 10, 4, NULL),
(22, 'Una aventura fresca y con onda de cuento clásico, donde una chica busca su lugar en un mundo lleno de magia y peligros. Tiene ese toque dulce y oscuro que te hace sentir parte del viaje desde la primera página.', 16, 7, NULL),
(23, 'El cierre épico de la trilogía de Mistborn que no decepciona: mezcla giros inesperados, revelaciones profundas y una acción que te mantiene pegado hasta el final. Además, muestra cómo cambian los héroes cuando todo está en juego.', 5, 2, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id_roles` int(11) NOT NULL,
  `tipo_rol` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id_roles`, `tipo_rol`) VALUES
(1, 'admin'),
(2, 'usuario');

-- --------------------------------------------------------

--
-- Table structure for table `usuarios`
--

CREATE TABLE `usuarios` (
  `id_usuarios` int(11) NOT NULL,
  `nombre` varchar(45) NOT NULL,
  `user` varchar(20) NOT NULL,
  `fecha_nac` date NOT NULL,
  `mail` varchar(45) NOT NULL,
  `pass` varchar(45) NOT NULL,
  `roles_id_roles` int(11) NOT NULL,
  `estados_id_estados` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `usuarios`
--

INSERT INTO `usuarios` (`id_usuarios`, `nombre`, `user`, `fecha_nac`, `mail`, `pass`, `roles_id_roles`, `estados_id_estados`) VALUES
(2, 'Caterina', 'cate', '2005-02-07', 'cate@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 2, 1),
(3, 'Vicky', 'vickyycm', '2006-05-11', 'vicky@gmail.com', 'b59c67bf196a4758191e42f76670ceba', 2, 2),
(4, 'Camila', 'camojcius', '2005-05-20', 'cam@gmail.com', '934b535800b1cba8f96a5d72f72f1611', 2, 1),
(5, 'Paula', 'admin', '1999-08-01', 'admin@davinci.edu.ar', '21232f297a57a5a743894a0e4a801fc3', 1, 1),
(6, 'Marcela', 'marce1', '1988-02-20', 'marce@davinci.edu.ar', 'e00cf25ad42683b3df678c61f42c6bda', 1, 1),
(7, 'Nicolas', 'nicolino', '2004-10-07', 'nico@gmail.com', '2be9bd7a3434f7038ca27d1918de58bd', 2, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `estados`
--
ALTER TABLE `estados`
  ADD PRIMARY KEY (`id_estados`);

--
-- Indexes for table `libros`
--
ALTER TABLE `libros`
  ADD PRIMARY KEY (`id_libro`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id_post`,`libros_id_libro`,`usuarios_id_usuarios`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id_roles`);

--
-- Indexes for table `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id_usuarios`),
  ADD KEY `fk_usuarios_roles` (`roles_id_roles`),
  ADD KEY `fk_usuarios_estados1` (`estados_id_estados`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `estados`
--
ALTER TABLE `estados`
  MODIFY `id_estados` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `libros`
--
ALTER TABLE `libros`
  MODIFY `id_libro` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id_post` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id_roles` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id_usuarios` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `usuarios`
--
ALTER TABLE `usuarios`
  ADD CONSTRAINT `fk_usuarios_estados1` FOREIGN KEY (`estados_id_estados`) REFERENCES `estados` (`id_estados`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_usuarios_roles` FOREIGN KEY (`roles_id_roles`) REFERENCES `roles` (`id_roles`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
