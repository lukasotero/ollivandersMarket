SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

--
-- Database: `ollivanders_market`
--
CREATE DATABASE `ollivanders_market` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `ollivanders_market`;

-- --------------------------------------------------------

--
-- Estructura para la tabla `categoria`
--
CREATE TABLE `categoria` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `nombre` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5;

INSERT INTO `categoria` (`id`, `nombre`) VALUES
(1, 'Varitas'),
(2, 'Accesorios'),
(3, 'Indumentaria'),
(4, 'Libros');

-- --------------------------------------------------------

--
-- Estructura para la tabla `producto`
--
CREATE TABLE `producto` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `nombre` varchar(255) NOT NULL,
  `descripcion` text NOT NULL,
  `precio` float(10,2) NOT NULL,
  `id_categoria` int(10) UNSIGNED NOT NULL,
  `fecha_alta` datetime NOT NULL,
  `fecha_modificacion` datetime NOT NULL,
  `fecha_baja` datetime NULL,
  PRIMARY KEY (`id`),
  KEY `id_categoria` (`id_categoria`)
) ENGINE=InnoDB AUTO_INCREMENT=25 ROW_FORMAT=DYNAMIC;

INSERT INTO `producto` (`id`, `nombre`, `descripcion`, `precio`, `id_categoria`, `fecha_alta`, `fecha_modificacion`, `fecha_baja`) VALUES
(1, 'Ron Weasley', 'Varita Ollivanders Original con caja', 59.99, 1, '2022-01-01 00:00:00', '2022-01-01 00:00:00', NULL),
(2, 'Voldemort', 'Varita Ollivander Original con caja', 59.99, 1, '2022-01-01 00:00:00', '2022-01-01 00:00:00', NULL),
(3, 'Nicolas Flamel', 'Varita Ollivander Original con caja', 59.99, 1, '2022-01-01 00:00:00', '2022-01-01 00:00:00', NULL),
(4, 'Narcisa Malfoy', 'Varita Ollivander Original con caja', 59.99, 1, '2022-01-01 00:00:00', '2022-01-01 00:00:00', NULL),
(5, 'Harry Potter', 'Varita Ollivander Original con caja', 59.99, 1, '2022-01-01 00:00:00', '2022-01-01 00:00:00', NULL),
(6, 'Sauco', 'Varita Ollivander Original con caja', 59.99, 1, '2022-01-01 00:00:00', '2022-01-01 00:00:00', NULL),
(7, 'Albus Dumbledore', 'Funko de Dumbledore', 29.99, 2, '2022-01-01 00:00:00', '2022-01-01 00:00:00', NULL),
(8, 'Harry Potter', 'Funko de Harry Potter', 21.99, 2, '2022-01-01 00:00:00', '2022-01-01 00:00:00', NULL),
(9, 'Tunica Ravenclaw', 'Tunica de Ravenclaw', 9.99, 3, '2022-01-01 00:00:00', '2022-01-01 00:00:00', NULL),
(10, 'Tunica Gryffindor', 'Tunica de Gryffindor', 14.99, 3, '2022-01-01 00:00:00', '2022-01-01 00:00:00', NULL),
(11, 'Tunica Slytherin', 'Tunica de Slytherin', 14.99, 3, '2022-01-01 00:00:00', '2022-01-01 00:00:00', NULL),
(12, 'Espectro Patronus', 'Funko de Espectro Patronus', 14.99, 2, '2022-01-01 00:00:00', '2022-01-01 00:00:00', NULL),
(13, 'Saga completa de Libros', 'Saga completa', 44.99, 4, '2022-01-01 00:00:00', '2022-01-01 00:00:00', NULL),
(14, 'Harry Potter y la Orden del Fenix', 'Libro de Harry Potter y la Orden del Fenix', 12.99, 4, '2022-01-01 00:00:00', '2022-01-01 00:00:00', NULL),
(15, 'Harry Potter y el misterio del principe', 'Libro de Harry Potter y el misterio del principe', 14.99, 4, '2022-01-01 00:00:00', '2022-01-01 00:00:00', NULL),
(16, 'Bufanda Gryffindor', 'Bufanda de Gryffindor', 14.99, 3, '2022-01-01 00:00:00', '2022-01-01 00:00:00', NULL),
(17, 'Collar Snitch Dorada', 'Collar Snitch Dorada con alas', 9.99, 2, '2022-01-01 00:00:00', '2022-01-01 00:00:00', NULL),
(18, 'Mapa del Merodeador', 'Mapa del Merodeador', 50.00, 2, '2022-01-01 00:00:00', '2022-01-01 00:00:00', NULL),
(19, 'Harry Potter y la piedra filosofal', 'Libro de Harry Potter y la piedra filosofal', 7.99, 4, '2022-01-01 00:00:00', '2022-01-01 00:00:00', NULL),
(20, 'Harry Potter y la cámara secreta', 'Libro de Harry Potter y la cámara secreta', 7.99, 4, '2022-01-01 00:00:00', '2022-01-01 00:00:00', NULL),
(21, 'Harry Potter y el prisionero de Azkaban', 'Libro de Harry Potter y el prisionero de Azkaban', 8.99, 4, '2022-01-01 00:00:00', '2022-01-01 00:00:00', NULL),
(22, 'Harry Potter y el cáliz de fuego', 'Libro de Harry Potter y el cáliz de fuego', 8.99, 4, '2022-01-01 00:00:00', '2022-01-01 00:00:00', NULL),
(23, 'Harry Potter y las reliquias de la Muerte', 'Libro de Harry Potter y las reliquias de la Muerte', 10.99, 4, '2022-01-01 00:00:00', '2022-01-01 00:00:00', NULL),
(24, 'Harry Potter y el legado maldito', 'Libro de Harry Potter y el legado maldito', 11.99, 4, '2022-01-01 00:00:00', '2022-01-01 00:00:00', NULL);

-- --------------------------------------------------------

--
-- Estructura de la tabla `tipo_usuario`
--
CREATE TABLE `tipo_usuario` (
  `id` int(2) UNSIGNED NOT NULL AUTO_INCREMENT,
  `nombre` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3;

INSERT INTO `tipo_usuario` (`id`, `nombre`) VALUES
(1, 'Administrador'),
(2, 'Comprador');

--
-- Estructura de la tabla `usuario`
--
CREATE TABLE `usuario` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `nombre` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` text NOT NULL,
  `id_tipo_usuario` int(10) UNSIGNED NOT NULL,
  `fecha_alta` datetime NOT NULL,
  `fecha_modificacion` datetime NOT NULL,
  `fecha_baja` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`),
  KEY `id_tipo_usuario` (`id_tipo_usuario`)
) ENGINE=InnoDB AUTO_INCREMENT=2;

INSERT INTO `usuario` (`id`, `nombre`, `email`, `password`, `id_tipo_usuario`, `fecha_alta`, `fecha_modificacion`, `fecha_baja`) VALUES
  (1, 'admin', 'admin@gmail.com', 'admin', 1, '2022-01-01 00:00:00', '2022-01-01 00:00:00', NULL);

--
-- Constraints para la tabla `producto`
--
ALTER TABLE `producto`
  ADD CONSTRAINT `producto_ibfk_1`
  FOREIGN KEY (`id_categoria`)
  REFERENCES `categoria` (`id`)
  ON UPDATE CASCADE;

--
-- Constraints para la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD CONSTRAINT `usuario_ibfk_1`
  FOREIGN KEY (`id_tipo_usuario`)
  REFERENCES `tipo_usuario` (`id`)
  ON UPDATE CASCADE;
COMMIT;