-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 01-08-2014 a las 01:25:35
-- Versión del servidor: 5.6.16
-- Versión de PHP: 5.5.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `noticias`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `laboral`
--

CREATE TABLE IF NOT EXISTS `laboral` (
  `id` int(3) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(255) CHARACTER SET utf8 COLLATE utf8_spanish2_ci NOT NULL DEFAULT '',
  `subtitulo` text CHARACTER SET utf8 COLLATE utf8_spanish2_ci NOT NULL,
  `detalle` text CHARACTER SET utf8 COLLATE utf8_spanish2_ci NOT NULL,
  `foto` varchar(10000) CHARACTER SET utf8 COLLATE utf8_spanish2_ci NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=69 ;

--
-- Volcado de datos para la tabla `laboral`
--

INSERT INTO `laboral` (`id`, `titulo`, `subtitulo`, `detalle`, `foto`, `fecha`) VALUES
(59, 'Fabricación eje mecánico ', 'fabricación eje mecánico a minera manto verde para la reparación de camion defectuoso ', 'Lo mismo de arriba, pero este trabajo se realiza en la planta de mpc en caldera, luego es trasladada a la minera.', 'archivos/m1768deniserosenthal11.jpg', '2014-07-31 13:24:44'),
(60, 'Hola', 'adios', 'ya vamos alla', 'archivos/10001537_10153923208725048_802223345_n.jpg', '2014-07-31 13:28:17'),
(61, 'Fabricación ', 'manutención ', '', 'archivos/scarlett_johansson_hot_scarlettjohansson_body.jpg', '2014-07-31 13:32:59'),
(62, 'Denise Rosenthal', 'Hermosa', 'linda', 'archivos/10475094_678841832204402_364227000_n.jpg', '2014-07-31 14:08:12'),
(65, 'Reparacion eje', 'manto verde', 'reparacion de este ejee', 'archivos/aguila-1600x900.jpg', '2014-07-31 15:18:47'),
(67, 'Gonzalo Burgos', 'Buenaaa', 'Que pasaaaa ', 'archivos/aguila-122378.jpeg', '2014-07-31 16:12:32'),
(68, 'Hector Prieto', 'El rapero', 'Este es el que tiene el gorro atornillado al craneo jajajajaja', 'archivos/Scarlett-Johansson-Don-Jons-Addiction--27.jpg', '2014-07-31 19:55:30');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `social`
--

CREATE TABLE IF NOT EXISTS `social` (
  `id` int(3) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(255) CHARACTER SET utf8 COLLATE utf8_spanish2_ci NOT NULL DEFAULT '',
  `subtitulo` text CHARACTER SET utf8 COLLATE utf8_spanish2_ci NOT NULL,
  `detalle` text CHARACTER SET utf8 COLLATE utf8_spanish2_ci NOT NULL,
  `foto` varchar(10000) CHARACTER SET utf8 COLLATE utf8_spanish2_ci NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=69 ;

--
-- Volcado de datos para la tabla `social`
--

INSERT INTO `social` (`id`, `titulo`, `subtitulo`, `detalle`, `foto`, `fecha`) VALUES
(68, 'Aaliyah Love', 'Exquisites', 'mijitaaaa', 'archivos/Bsj3OnTIgAAN81u.jpg', '2014-07-31 20:40:37');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
