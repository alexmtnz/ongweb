-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 28-05-2016 a las 17:16:36
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
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `user`
--

INSERT INTO `user` (`id_user`, `email`, `dni`, `password`, `nombre`, `apellido1`, `apellido2`, `fechaNacimiento`, `numeroTelefono`, `karma`, `fechaRegistro`, `idDireccion`, `idLoginAlternativo`) VALUES
(1, 'prueba@prueba.com', 'asdd', '$1$un1.f83.$BSKpTiZE.1klII4DxHSqv0', 'asd1', 'asd2', 'asd3', '2016-05-11', 123321123, 1, '2016-05-25', 1, 1),
(3, 'miau', 'miau', 'miau', 'miau', 'miau', 'xd3', '2016-05-10', 123321123, 2, '2016-05-11', 1, 2),
(4, 'xdddd', 'xdddd', 'xdddd', 'xdddd', 'xdddd', 'xdddd', '0000-00-00', NULL, 0, '0000-00-00', NULL, NULL),
(5, '', '', '', '', '', NULL, '0000-00-00', NULL, 0, '0000-00-00', NULL, NULL),
(6, '', '', '', '', '', NULL, '0000-00-00', NULL, 0, '0000-00-00', NULL, NULL),
(7, 'xdddd', 'xdddd', 'xdddd', 'xdddd', 'xdddd', NULL, '0000-00-00', NULL, 0, '0000-00-00', NULL, NULL),
(8, 'xdddd', 'xdddd', 'xdddd', 'xdddd', 'xdddd', NULL, '0000-00-00', NULL, 0, '0000-00-00', NULL, NULL),
(9, 'xdddd', 'xdddd', 'xdddd', 'xdddd', 'xdddd', NULL, '0000-00-00', NULL, 0, '0000-00-00', NULL, NULL),
(10, 'xdddd', 'xdddd', 'xdddd', 'xdddd', 'xdddd', NULL, '0000-00-00', NULL, 0, '0000-00-00', NULL, NULL);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`),
  ADD UNIQUE KEY `idLoginAlternativo_UNIQUE` (`idLoginAlternativo`),
  ADD KEY `fk_Usuario_Direccion1_idx` (`idDireccion`),
  ADD KEY `fk_Usuario_LoginAlternativo1_idx` (`idLoginAlternativo`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
