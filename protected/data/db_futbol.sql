-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 12-11-2013 a las 17:16:40
-- Versión del servidor: 5.5.32
-- Versión de PHP: 5.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `db_futbol_1`
--
CREATE DATABASE IF NOT EXISTS `db_futbol_1` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `db_futbol_1`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `anotacion`
--

CREATE TABLE IF NOT EXISTS `anotacion` (
  `id_anotacion` int(11) NOT NULL AUTO_INCREMENT,
  `minuto` int(11) NOT NULL,
  `segundo` int(11) NOT NULL,
  `id_encuentro` int(11) NOT NULL,
  `id_equipo` int(11) NOT NULL,
  `id_tipo_anotacion` int(11) NOT NULL,
  PRIMARY KEY (`id_anotacion`),
  KEY `id_encuentro` (`id_encuentro`),
  KEY `id_equipo` (`id_equipo`),
  KEY `id_tipo_anotacion` (`id_tipo_anotacion`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Volcado de datos para la tabla `anotacion`
--

INSERT INTO `anotacion` (`id_anotacion`, `minuto`, `segundo`, `id_encuentro`, `id_equipo`, `id_tipo_anotacion`) VALUES
(1, 56, 8, 1, 1, 1),
(2, 75, 10, 1, 4, 1),
(3, 40, 50, 2, 3, 2),
(4, 60, 0, 2, 2, 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `encuentro`
--

CREATE TABLE IF NOT EXISTS `encuentro` (
  `id_encuentro` int(11) NOT NULL AUTO_INCREMENT,
  `fecha_hora` datetime NOT NULL,
  `asistentes` int(11) NOT NULL,
  `id_estadio` int(11) NOT NULL,
  `id_equipo_local` int(11) NOT NULL,
  `id_equipo_visitante` int(11) NOT NULL,
  PRIMARY KEY (`id_encuentro`),
  KEY `id_estadio` (`id_estadio`),
  KEY `id_equipo_local` (`id_equipo_local`),
  KEY `id_equipo_visitante` (`id_equipo_visitante`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `encuentro`
--

INSERT INTO `encuentro` (`id_encuentro`, `fecha_hora`, `asistentes`, `id_estadio`, `id_equipo_local`, `id_equipo_visitante`) VALUES
(1, '2013-10-01 15:00:00', 20000, 1, 1, 4),
(2, '2013-10-02 15:00:00', 35000, 3, 3, 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `equipo`
--

CREATE TABLE IF NOT EXISTS `equipo` (
  `id_equipo` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(100) NOT NULL,
  `estrellas` int(11) NOT NULL,
  `fundacion` int(11) NOT NULL,
  `imagen` varchar(100) NOT NULL,
  `comentario` text,
  PRIMARY KEY (`id_equipo`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Volcado de datos para la tabla `equipo`
--

INSERT INTO `equipo` (`id_equipo`, `nombre`, `estrellas`, `fundacion`, `imagen`, `comentario`) VALUES
(1, 'sociedad anonima deportiva america de cali', 13, 1927, 'C:\\xampp\\htdocs\\cartelera\\imagenes\\america de cali', 'MAS QUE UN EQUIPO UNA PASIÓN. LA A ME ENSEÑO A AMARTE, LA B A NO ABANDONARTE.\r\nAPODOS:la mechita,los escarlatas, los diablos rojos,el rojaso, la pasión de un pueblo.\r\nDATOS:ni los 16 años en la lista clinton, ni las deudas con la dian pudieron con la institución,los únicos pentacampeones, los únicos que han llegado a ser segundos en el ranking mundial.\r\nHINCHADA:su barra brava Baron Rojo Sur es considerada la hinchada de los cantos. ademas es alida de la barra de independiente por ser los diablos rojos del continente americano.'),
(2, 'club atletico independiente', 14, 1904, 'C:\\xampp\\htdocs\\cartelera\\imagenes\\club atletico independiente', 'APODOS:El Rojo, El Diablo, Diablos Rojos, Rey de Copas\r\n\r\nHINCHADA: su barra brava se denomina La Barra del Rojo, ademas es aliada de la barra del America de Cali por ser los diablos rojos del continente americano.'),
(3, 'club atletico boca juniors', 30, 1905, 'C:\\xampp\\htdocs\\cartelera\\imagenes\\club atletico boca juniors', 'APODOS: Xenenzes, Bosteros, Azul y Oro, La Mitad más Uno\r\n\r\nHINCHADA:su barra brava es denominada La 12'),
(4, 'club deportivo atletico huila', 0, 1980, 'C:\\xampp\\htdocs\\cartelera\\imagenes\\club deportivo atletico huila', 'APODOS:Opitas, Bambuqueros, El Barcino, Huilenses\r\n\r\nHINCHADA:su barra brava se denomina Alta Tension Neiva');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estadio`
--

CREATE TABLE IF NOT EXISTS `estadio` (
  `id_estadio` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id_estadio`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Volcado de datos para la tabla `estadio`
--

INSERT INTO `estadio` (`id_estadio`, `nombre`) VALUES
(1, 'pascual guerrero'),
(2, 'guillermo plazas alcid'),
(3, 'la bombonera'),
(4, 'libertadores de america');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `evento`
--

CREATE TABLE IF NOT EXISTS `evento` (
  `id_evento` int(11) NOT NULL AUTO_INCREMENT,
  `descripcion` varchar(100) NOT NULL,
  `imagen` varchar(500) NOT NULL,
  PRIMARY KEY (`id_evento`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Volcado de datos para la tabla `evento`
--

INSERT INTO `evento` (`id_evento`, `descripcion`, `imagen`) VALUES
(1, 'Falta', 'images/patada'),
(2, 'Gol', ''),
(3, 'Fuera de juego', ''),
(4, 'Tiro libre', ''),
(5, 'Penalti', ''),
(6, 'Saque de banda', ''),
(7, 'Saque de meta', ''),
(8, 'Saque de esquina', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `exl`
--

CREATE TABLE IF NOT EXISTS `exl` (
  `id_exl` int(11) NOT NULL AUTO_INCREMENT,
  `id_equipo` int(11) NOT NULL,
  `id_liga` int(11) NOT NULL,
  PRIMARY KEY (`id_exl`),
  KEY `id_equipo` (`id_equipo`),
  KEY `id_liga` (`id_liga`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Volcado de datos para la tabla `exl`
--

INSERT INTO `exl` (`id_exl`, `id_equipo`, `id_liga`) VALUES
(1, 1, 2),
(2, 2, 3),
(3, 4, 1),
(4, 3, 4);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `liga`
--

CREATE TABLE IF NOT EXISTS `liga` (
  `id_liga` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(80) DEFAULT NULL,
  PRIMARY KEY (`id_liga`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Volcado de datos para la tabla `liga`
--

INSERT INTO `liga` (`id_liga`, `nombre`) VALUES
(1, 'postobon'),
(2, 'torneo postobon'),
(3, 'primera b nacional'),
(4, 'nietos recuperados');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `narracion`
--

CREATE TABLE IF NOT EXISTS `narracion` (
  `id_narracion` int(11) NOT NULL AUTO_INCREMENT,
  `cod_encuentro` int(11) NOT NULL,
  `cod_evento` int(11) NOT NULL,
  `comentario` varchar(900) NOT NULL,
  `tiempo` time NOT NULL,
  PRIMARY KEY (`id_narracion`),
  KEY `idx_encuentro_idx` (`cod_encuentro`),
  KEY `idx_evento_idx` (`cod_evento`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Volcado de datos para la tabla `narracion`
--

INSERT INTO `narracion` (`id_narracion`, `cod_encuentro`, `cod_evento`, `comentario`, `tiempo`) VALUES
(13, 1, 1, 'falta ggggggggggggggggggggggggg', '12:09:00'),
(12, 1, 4, 'ooo', '09:30:00'),
(11, 1, 2, 'gol', '09:11:00'),
(10, 1, 5, 'zapate', '08:55:00'),
(9, 1, 2, 'del chiguiro benitez', '04:41:00'),
(8, 1, 1, 'del pulpo', '00:00:01'),
(14, 1, 1, 'Se conoce como software1 al equipamiento lÃ³gico o soporte lÃ³gico de un sistema informÃ¡tico, que comprende el conjunto de los componentes lÃ³gicos necesarios que hacen posible la realizaciÃ³n de tareas especÃ­ficas, en contraposiciÃ³n a los componentes fÃ­sicos que son llamados hardware. Los componentes lÃ³gicos incluyen, entre muchos otros, las aplicaciones informÃ¡ticas; tales como el procesador de texto, que permite al usuario realizar todas las tareas concernientes a la ediciÃ³n de textos; el llamado software de sistema, tal como el sistema operativo, que bÃ¡sicamente permite al resto de los programas funcionar adecuadamente, facilitando tambiÃ©n la interacciÃ³n entre los componentes fÃ­sicos y el resto de las aplicaciones, y proporcionando una interfaz con el usuario. El anglicismo "software" es el mÃ¡s ampliamente difundido al referirse a este concepto, especialmente en la jerga ', '12:57:00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_anotacion`
--

CREATE TABLE IF NOT EXISTS `tipo_anotacion` (
  `id_tipo_anotacion` int(11) NOT NULL AUTO_INCREMENT,
  `descripcion` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id_tipo_anotacion`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Volcado de datos para la tabla `tipo_anotacion`
--

INSERT INTO `tipo_anotacion` (`id_tipo_anotacion`, `descripcion`) VALUES
(1, 'jugada'),
(2, 'tiro libre'),
(3, 'penalty'),
(4, 'tiro de esquina'),
(5, 'autogol');

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `anotacion`
--
ALTER TABLE `anotacion`
  ADD CONSTRAINT `anotacion_ibfk_1` FOREIGN KEY (`id_encuentro`) REFERENCES `encuentro` (`id_encuentro`),
  ADD CONSTRAINT `anotacion_ibfk_2` FOREIGN KEY (`id_equipo`) REFERENCES `equipo` (`id_equipo`),
  ADD CONSTRAINT `anotacion_ibfk_3` FOREIGN KEY (`id_tipo_anotacion`) REFERENCES `tipo_anotacion` (`id_tipo_anotacion`);

--
-- Filtros para la tabla `encuentro`
--
ALTER TABLE `encuentro`
  ADD CONSTRAINT `encuentro_ibfk_1` FOREIGN KEY (`id_estadio`) REFERENCES `estadio` (`id_estadio`),
  ADD CONSTRAINT `encuentro_ibfk_2` FOREIGN KEY (`id_equipo_local`) REFERENCES `equipo` (`id_equipo`),
  ADD CONSTRAINT `encuentro_ibfk_3` FOREIGN KEY (`id_equipo_visitante`) REFERENCES `equipo` (`id_equipo`);

--
-- Filtros para la tabla `exl`
--
ALTER TABLE `exl`
  ADD CONSTRAINT `exl_ibfk_1` FOREIGN KEY (`id_equipo`) REFERENCES `equipo` (`id_equipo`),
  ADD CONSTRAINT `exl_ibfk_2` FOREIGN KEY (`id_liga`) REFERENCES `liga` (`id_liga`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
