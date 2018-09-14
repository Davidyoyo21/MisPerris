-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 14-09-2018 a las 17:04:52
-- Versión del servidor: 5.5.24-log
-- Versión de PHP: 5.4.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `misperris`
--
CREATE DATABASE `misperris` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `misperris`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ciudades`
--

CREATE TABLE IF NOT EXISTS `ciudades` (
  `idciudades` int(11) NOT NULL,
  `nombre` varchar(75) DEFAULT NULL,
  `regiones_idregiones` int(11) NOT NULL,
  PRIMARY KEY (`idciudades`),
  KEY `fk_ciudades_regiones_idx` (`regiones_idregiones`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `ciudades`
--

INSERT INTO `ciudades` (`idciudades`, `nombre`, `regiones_idregiones`) VALUES
(13, 'Arica', 1),
(14, 'Iquique', 2),
(15, 'Pozo Almonte', 2),
(16, 'Calama', 3),
(17, 'Tocopilla', 3),
(18, 'Caldera', 4),
(19, 'Tierra Amarrilla', 4),
(20, 'Ovalle', 5),
(21, 'Salamanca', 5),
(22, 'Quintero', 6),
(23, 'Los Andes', 6),
(24, 'Pichilemu', 7),
(25, 'Peumo', 7),
(26, 'Longavi', 8),
(27, 'Parral', 8),
(28, 'Los Angeles', 9),
(29, 'Coihueco', 9),
(30, 'Angol', 10),
(31, 'Pucon', 10),
(32, 'Los Lagos', 11),
(33, 'Panguipuli', 11),
(34, 'Frutillar', 12),
(35, 'Osorno', 12);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `formulario`
--

CREATE TABLE IF NOT EXISTS `formulario` (
  `idformulario` int(11) NOT NULL,
  `nombre_completo` varchar(75) DEFAULT NULL,
  `run` varchar(45) DEFAULT NULL,
  `correo` varchar(45) DEFAULT NULL,
  `fecha_nac` date DEFAULT NULL,
  `telefono` int(11) DEFAULT NULL,
  `tipo_vivienda_idtipo_vivienda` int(11) NOT NULL,
  `ciudades_idciudades` int(11) NOT NULL,
  `regiones_idregiones` int(11) NOT NULL,
  PRIMARY KEY (`idformulario`),
  KEY `fk_formulario_tipo_vivienda1_idx` (`tipo_vivienda_idtipo_vivienda`),
  KEY `fk_formulario_ciudades1_idx` (`ciudades_idciudades`),
  KEY `fk_formulario_regiones1_idx` (`regiones_idregiones`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `formulario`
--

INSERT INTO `formulario` (`idformulario`, `nombre_completo`, `run`, `correo`, `fecha_nac`, `telefono`, `tipo_vivienda_idtipo_vivienda`, `ciudades_idciudades`, `regiones_idregiones`) VALUES
(1, 'pepito pepon', '18.659.562-9', 'asdadas@gmail.com', '1999-08-12', 2546125, 2, 23, 0),
(2, 'danilo jaja', '20.333.925-5', 'qweqweqwe@gmail.com', '1996-09-18', 5986457, 3, 30, 0),
(3, 'jajaja jajajaj', '12.354.368-8', 'kkkkkkkk@gmail.com', '1999-10-21', 5986498, 4, 24, 0),
(4, 'popo', '12.666.777-9', 'cacacacaca@gmail.com', '1998-10-15', 5986458, 3, 25, 7),
(5, 'pipi', '12.333.111-1', 'pppppppppp@gmail.com', '1997-10-24', 3698965, 4, 33, 11),
(8, 'edu', '1654', 'edu', '1996-08-15', 2343543, 3, 28, 9);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `login`
--

CREATE TABLE IF NOT EXISTS `login` (
  `idlogin` int(11) NOT NULL,
  `usuario` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  PRIMARY KEY (`idlogin`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `login`
--

INSERT INTO `login` (`idlogin`, `usuario`, `password`) VALUES
(1, 'asdasd', 'perris');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `perro`
--

CREATE TABLE IF NOT EXISTS `perro` (
  `idperro` int(3) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(50) COLLATE utf8_latvian_ci NOT NULL,
  `edad` int(2) NOT NULL,
  `raza` varchar(50) COLLATE utf8_latvian_ci NOT NULL,
  `estatura` int(3) NOT NULL,
  PRIMARY KEY (`idperro`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_latvian_ci AUTO_INCREMENT=8 ;

--
-- Volcado de datos para la tabla `perro`
--

INSERT INTO `perro` (`idperro`, `nombre`, `edad`, `raza`, `estatura`) VALUES
(1, 'asdas', 12, 'chihuahua', 2),
(2, 'zxczx', 22, 'kkkkk', 80),
(3, 'tercero', 33, 'devioh', 999),
(4, 'cuarto hokage', 44, 'dead', 444),
(5, 'quinto', 55, 'kkkkkkkk', 106),
(6, 'sexto', 66, 'asdasd', 666),
(7, 'hhjhjh', 66, 'bnnn', 9);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `regiones`
--

CREATE TABLE IF NOT EXISTS `regiones` (
  `idregiones` int(11) NOT NULL,
  `nombre` varchar(75) DEFAULT NULL,
  PRIMARY KEY (`idregiones`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `regiones`
--

INSERT INTO `regiones` (`idregiones`, `nombre`) VALUES
(1, 'Tarapaca'),
(2, 'Antofagasta'),
(3, 'Atacama'),
(4, 'Valparaiso'),
(5, 'O''Higgins'),
(6, 'Curico'),
(7, 'Concepcion'),
(8, 'Cautin'),
(9, 'Valdivia'),
(10, 'Chiloe'),
(11, 'Magallanes'),
(12, 'Santiago');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_vivienda`
--

CREATE TABLE IF NOT EXISTS `tipo_vivienda` (
  `idtipo_vivienda` int(11) NOT NULL,
  `nombre` varchar(75) DEFAULT NULL,
  PRIMARY KEY (`idtipo_vivienda`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tipo_vivienda`
--

INSERT INTO `tipo_vivienda` (`idtipo_vivienda`, `nombre`) VALUES
(1, 'Casa con Patio Grande'),
(2, 'Casa con Patio Pequeño'),
(3, 'Casa sin Patio'),
(4, 'Departamento');

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `ciudades`
--
ALTER TABLE `ciudades`
  ADD CONSTRAINT `fk_ciudades_regiones` FOREIGN KEY (`regiones_idregiones`) REFERENCES `regiones` (`idregiones`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `formulario`
--
ALTER TABLE `formulario`
  ADD CONSTRAINT `fk_formulario_ciudades1` FOREIGN KEY (`ciudades_idciudades`) REFERENCES `ciudades` (`idciudades`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_formulario_regiones1` FOREIGN KEY (`regiones_idregiones`) REFERENCES `regiones` (`idregiones`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_formulario_tipo_vivienda1` FOREIGN KEY (`tipo_vivienda_idtipo_vivienda`) REFERENCES `tipo_vivienda` (`idtipo_vivienda`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
