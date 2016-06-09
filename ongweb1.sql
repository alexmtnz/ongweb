-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 09-06-2016 a las 21:40:20
-- Versión del servidor: 5.6.26
-- Versión de PHP: 5.6.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `ongweb`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comentario`
--

CREATE TABLE IF NOT EXISTS `comentario` (
  `id_comentario` int(11) NOT NULL,
  `comentario` text NOT NULL,
  `date_created` datetime NOT NULL,
  `id_parent` int(11) NOT NULL DEFAULT '0',
  `id_propuestacampana` int(11) NOT NULL,
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `comentario`
--

INSERT INTO `comentario` (`id_comentario`, `comentario`, `date_created`, `id_parent`, `id_propuestacampana`, `id_user`) VALUES
(1, 'hola amigos esto me gusta', '2016-06-08 00:00:00', 0, 1, 1),
(2, 'esto mola', '2016-06-16 00:00:00', 1, 1, 1),
(3, 'xd respuesta 2 to the infinite', '2016-06-09 06:22:22', 2, 1, 1),
(4, 'asdasdasdasdsa', '2016-06-22 00:00:00', 1, 1, 1),
(5, '2', '0000-00-00 00:00:00', 2, 1, 1),
(6, 'No sabes lo que dices tio', '0000-00-00 00:00:00', 3, 1, 1),
(7, 'Banear a este tio', '0000-00-00 00:00:00', 3, 1, 1),
(8, 'Tu si que sabes cabron', '2016-06-09 20:06:22', 5, 1, 1),
(9, 'asdasdasda', '2016-06-09 20:06:01', 0, 1, 1),
(10, 'asdasdasda', '2016-06-09 20:06:08', 0, 1, 1),
(11, 'ey', '2016-06-09 20:06:14', 0, 1, 1),
(12, 'xD', '2016-06-09 20:06:44', 2, 1, 1),
(13, 'Pero que me estas container', '2016-06-09 20:06:25', 12, 1, 1),
(14, 'vayaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa', '2016-06-09 20:06:18', 0, 2, 1),
(15, 'callate tonto', '2016-06-09 20:06:33', 14, 2, 1),
(16, 'Reported', '2016-06-09 20:06:47', 15, 2, 1),
(17, 'Esto es espan', '2016-06-09 20:06:01', 16, 2, 1),
(18, 'Yo quiero donar todo mi puto dinero', '2016-06-09 20:06:11', 0, 2, 1),
(19, 'vaya fumao', '2016-06-09 20:06:45', 3, 1, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comentario_historial`
--

CREATE TABLE IF NOT EXISTS `comentario_historial` (
  `id_comentario_historial` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `date_created` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `propuestacampana`
--

CREATE TABLE IF NOT EXISTS `propuestacampana` (
  `id_propuestacampana` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `nombre` text NOT NULL,
  `descripcion` text NOT NULL,
  `creacion` datetime NOT NULL,
  `iscampana` tinyint(4) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `propuestacampana`
--

INSERT INTO `propuestacampana` (`id_propuestacampana`, `id_user`, `nombre`, `descripcion`, `creacion`, `iscampana`) VALUES
(1, 1, 'propuesta1', 'DESCRIPCIONNNN PROPUESTA 1 AHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHH', '2016-05-28 00:00:00', 0),
(2, 2, 'xd1', 'xd2', '2016-05-29 00:00:00', 0),
(3, 1, 'xd2', 'xd2', '2016-05-29 00:00:00', 0),
(4, 4, 'xd3', 'xd2', '2016-05-29 00:00:00', 0),
(5, 1, 'xd4', 'xd2', '2016-05-29 00:00:00', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id_user` int(11) NOT NULL,
  `email` varchar(40) NOT NULL,
  `dni` char(9) NOT NULL,
  `password` varchar(45) NOT NULL,
  `nombre` varchar(45) NOT NULL,
  `apellido1` varchar(45) NOT NULL,
  `apellido2` varchar(45) DEFAULT NULL,
  `fechaNacimiento` date NOT NULL,
  `numeroTelefono` int(9) DEFAULT NULL,
  `karma` int(3) NOT NULL,
  `fechaRegistro` date NOT NULL,
  `idDireccion` int(11) DEFAULT NULL,
  `idLoginAlternativo` int(11) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `user`
--

INSERT INTO `user` (`id_user`, `email`, `dni`, `password`, `nombre`, `apellido1`, `apellido2`, `fechaNacimiento`, `numeroTelefono`, `karma`, `fechaRegistro`, `idDireccion`, `idLoginAlternativo`) VALUES
(1, 'prueba@prueba.com', 'asdd', '34819d7beeabb9260a5c854bc85b3e44', 'asd1', 'asd2', 'asd3', '2016-05-11', 123321123, 181, '2016-05-25', 1, 1),
(3, 'miau', 'miau', 'miau', 'miau', 'miau', 'xd3', '2016-05-10', 123321123, 2, '2016-05-11', 1, 2),
(4, 'xdddd', 'xdddd', 'xdddd', 'xdddd', 'xdddd', 'xdddd', '0000-00-00', NULL, 0, '0000-00-00', NULL, NULL),
(5, '', '', '', '', '', NULL, '0000-00-00', NULL, 0, '0000-00-00', NULL, NULL),
(6, '', '', '', '', '', NULL, '0000-00-00', NULL, 0, '0000-00-00', NULL, NULL),
(7, 'xdddd', 'xdddd', 'xdddd', 'xdddd', 'xdddd', NULL, '0000-00-00', NULL, 0, '0000-00-00', NULL, NULL),
(8, 'xdddd', 'xdddd', 'xdddd', 'xdddd', 'xdddd', NULL, '0000-00-00', NULL, 0, '0000-00-00', NULL, NULL),
(9, 'xdddd', 'xdddd', 'xdddd', 'xdddd', 'xdddd', NULL, '0000-00-00', NULL, 0, '0000-00-00', NULL, NULL),
(10, 'xdddd', 'xdddd', 'xdddd', 'xdddd', 'xdddd', NULL, '0000-00-00', NULL, 0, '0000-00-00', NULL, NULL),
(17, 'issinatour90@gmail.com', '', 'ed311374b13fdedb3d2b206127180e35', 'issam', 'natour', 'muñoz', '1993-10-09', 123321123, 0, '0000-00-00', NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `voto_propuesta`
--

CREATE TABLE IF NOT EXISTS `voto_propuesta` (
  `id_voto_propuesta` int(11) NOT NULL,
  `id_propuesta` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `date_created` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=39 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `voto_propuesta`
--

INSERT INTO `voto_propuesta` (`id_voto_propuesta`, `id_propuesta`, `id_user`, `date_created`) VALUES
(1, 1, 1, '2016-05-22 00:00:00'),
(36, 2, 1, '2016-05-29 21:59:57'),
(37, 4, 1, '2016-05-30 14:53:36'),
(38, 4, 1, '2016-05-30 14:53:36');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `comentario`
--
ALTER TABLE `comentario`
  ADD PRIMARY KEY (`id_comentario`);

--
-- Indices de la tabla `comentario_historial`
--
ALTER TABLE `comentario_historial`
  ADD PRIMARY KEY (`id_comentario_historial`);

--
-- Indices de la tabla `propuestacampana`
--
ALTER TABLE `propuestacampana`
  ADD PRIMARY KEY (`id_propuestacampana`);

--
-- Indices de la tabla `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`),
  ADD UNIQUE KEY `idLoginAlternativo_UNIQUE` (`idLoginAlternativo`),
  ADD KEY `fk_Usuario_Direccion1_idx` (`idDireccion`),
  ADD KEY `fk_Usuario_LoginAlternativo1_idx` (`idLoginAlternativo`);

--
-- Indices de la tabla `voto_propuesta`
--
ALTER TABLE `voto_propuesta`
  ADD PRIMARY KEY (`id_voto_propuesta`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `comentario`
--
ALTER TABLE `comentario`
  MODIFY `id_comentario` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT de la tabla `comentario_historial`
--
ALTER TABLE `comentario_historial`
  MODIFY `id_comentario_historial` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `propuestacampana`
--
ALTER TABLE `propuestacampana`
  MODIFY `id_propuestacampana` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT de la tabla `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT de la tabla `voto_propuesta`
--
ALTER TABLE `voto_propuesta`
  MODIFY `id_voto_propuesta` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=39;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
