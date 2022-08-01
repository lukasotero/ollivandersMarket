-- phpMyAdmin SQL Dump
-- version 5.3.0-dev+20220530.a2456aa9a3
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: May 31, 2022 at 07:52 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

--
-- Database: `ollivanders_market`
--
CREATE DATABASE IF NOT EXISTS `ollivanders_market` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `ollivanders_market`;

-- --------------------------------------------------------

--
-- Estructura para la tabla `categorias`
--

CREATE TABLE IF NOT EXISTS `categorias` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `nombre` varchar(255) CHARACTER SET utf8 NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4;

INSERT INTO `categorias` (`id`, `nombre`) VALUES
(1, 'Varitas'),
(2, 'Accesorios'),
(3, 'Indumentaria'),
(4, 'Libros');

-- --------------------------------------------------------

--
-- Estructura para la tabla `productos`
--

CREATE TABLE IF NOT EXISTS `productos` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `nombre` varchar(255) NOT NULL,
  `descripcion` text NOT NULL,
  `precio` float(10,2) NOT NULL,
  `id_categoria` int(10) UNSIGNED NOT NULL,
  `fecha_alta` datetime NOT NULL,
  `fecha_modificacion` datetime NOT NULL,
  `fecha_baja` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `id_categoria` (`id_categoria`)
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;

INSERT INTO `productos` (`id`, `nombre`, `descripcion`, `precio`, `id_categoria`, `fecha_alta`, `fecha_modificacion`, `fecha_baja`) VALUES
(1, 'Ron Weasley', 'Varita Ollivanders Original con caja', 59.99, 1, '2022-05-30 20:42:06', '2022-05-30 20:42:06', NULL),
(2, 'Voldemort', 'Varita Ollivander Original con caja', 59.99, 1, '2022-05-30 20:42:39', '2022-05-30 20:42:39', NULL),
(3, 'Nicolas Flamel', 'Varita Ollivander Original con caja', 59.99, 1, '2022-05-30 20:44:04', '2022-05-30 20:44:04', NULL),
(4, 'Narcisa Malfoy', 'Varita Ollivander Original con caja', 59.99, 1, '2022-05-30 20:56:30', '2022-05-30 20:56:30', NULL),
(5, 'Harry Potter', 'Varita Ollivander Original con caja', 59.99, 1, '2022-05-30 20:56:50', '2022-05-30 20:56:50', NULL),
(6, 'Sauco', 'Varita Ollivander Original con caja', 59.99, 1, '2022-05-30 20:57:08', '2022-05-30 20:57:08', NULL),
(7, 'Albus Dumbledore', 'Funko de Dumbledore', 29.99, 2, '2022-05-30 20:59:15', '2022-05-30 20:59:15', NULL),
(8, 'Harry Potter', 'Funko de Harry Potter', 21.99, 2, '2022-05-30 20:59:37', '2022-05-30 20:59:37', NULL),
(9, 'Tunica Ravenclaw', 'Tunica de Ravenclaw', 9.99, 3, '2022-05-30 21:00:15', '2022-05-30 21:00:15', NULL),
(10, 'Tunica Gryffindor', 'Tunica de Gryffindor', 14.99, 3, '2022-05-30 21:00:59', '2022-05-30 21:00:59', NULL),
(11, 'Tunica Slytherin', 'Tunica de Slytherin', 14.99, 3, '2022-05-30 21:01:24', '2022-05-30 21:01:24', NULL),
(12, 'Espectro Patronus', 'Funko de Espectro Patronus', 14.99, 2, '2022-05-30 21:02:19', '2022-05-30 21:02:19', NULL),
(13, 'Saga completa de Libros', 'Saga completa', 44.99, 4, '2022-05-30 21:06:09', '2022-05-30 21:06:09', NULL),
(14, 'Harry Potter y la Orden del Fenix', 'Libro de Harry Potter y la Orden del Fenix', 12.99, 4, '2022-05-30 21:06:38', '2022-05-30 21:06:38', NULL),
(15, 'Harry Potter y el misterio del principe', 'Libro de Harry Potter y el misterio del principe', 14.99, 4, '2022-05-30 21:07:02', '2022-05-30 21:07:02', NULL),
(16, 'Bufanda Gryffindor', 'Bufanda de Gryffindor', 14.99, 3, '2022-05-30 21:08:08', '2022-05-30 21:08:08', NULL),
(17, 'Collar Snitch Dorada', 'Collar Snitch Dorada con alas', 9.99, 2, '2022-05-30 21:09:05', '2022-05-30 21:09:05', NULL),
(18, 'Mapa del Merodeador', 'Mapa del Merodeador', 50.00, 2, '2022-05-30 21:09:34', '2022-05-30 21:09:34', NULL),
(19, 'Harry Potter y la piedra filosofal', 'Libro de Harry Potter y la piedra filosofal', 7.99, 4, '2022-05-30 21:35:42', '2022-05-30 21:35:42', NULL),
(20, 'Harry Potter y la cámara secreta', 'Libro de Harry Potter y la cámara secreta', 7.99, 4, '2022-05-30 21:36:16', '2022-05-30 21:36:16', NULL),
(21, 'Harry Potter y el prisionero de Azkaban', 'Libro de Harry Potter y el prisionero de Azkaban', 8.99, 4, '2022-05-30 21:36:42', '2022-05-30 21:36:42', NULL),
(22, 'Harry Potter y el cáliz de fuego', 'Libro de Harry Potter y el cáliz de fuego', 8.99, 4, '2022-05-30 21:36:57', '2022-05-30 21:36:57', NULL),
(23, 'Harry Potter y las reliquias de la Muerte', 'Libro de Harry Potter y las reliquias de la Muerte', 10.99, 4, '2022-05-30 21:37:24', '2022-05-30 21:37:24', NULL),
(24, 'Harry Potter y el legado maldito', 'Libro de Harry Potter y el legado maldito', 11.99, 4, '2022-05-30 21:37:45', '2022-05-30 21:37:45', NULL);

-- --------------------------------------------------------

--
-- Estructura de la tabla `tipo_usuarios`
--

CREATE TABLE IF NOT EXISTS `tipo_usuarios` (
  `id` tinyint(2) UNSIGNED NOT NULL AUTO_INCREMENT,
  `nombre` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4;

INSERT INTO `tipo_usuarios` (`id`, `nombre`) VALUES
(1, 'Administrador'),
(2, 'Comprador');

--
-- Estructura de la tabla `usuarios`
--

CREATE TABLE IF NOT EXISTS `usuarios` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `nombre` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `contrasena` text NOT NULL,
  `token` text NOT NULL,
  `id_tipo_usuario` tinyint(2) UNSIGNED NOT NULL,
  `fecha_alta` datetime NOT NULL,
  `fecha_modificacion` datetime NOT NULL,
  `fecha_baja` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`),
  KEY `id_tipo_usuario` (`id_tipo_usuario`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Constraints para la tabla `productos`
--
ALTER TABLE `productos`
  ADD CONSTRAINT `productos_ibfk_1`
  FOREIGN KEY (`id_categoria`)
  REFERENCES `categorias` (`id`)
  ON UPDATE CASCADE;

--
-- Constraints para la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD CONSTRAINT `usuarios_ibfk_1`
  FOREIGN KEY (`id_tipo_usuario`)
  REFERENCES `tipo_usuarios` (`id`)
  ON UPDATE CASCADE;
COMMIT;