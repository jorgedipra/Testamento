-- phpMyAdmin SQL Dump
-- version 3.5.7
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 11-07-2013 a las 23:35:12
-- Versión del servidor: 5.5.8
-- Versión de PHP: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `testamento`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `abogados`
--

CREATE TABLE IF NOT EXISTS `abogados` (
  `AbgId` int(11) NOT NULL AUTO_INCREMENT,
  `AbgNombre` varchar(30) COLLATE utf8_bin DEFAULT NULL,
  `AbgTelefono` int(11) DEFAULT NULL,
  `AbgCorreo` varchar(100) COLLATE utf8_bin DEFAULT NULL,
  `AbgTargeta` varchar(100) COLLATE utf8_bin DEFAULT NULL,
  `AbgFoto` varchar(200) COLLATE utf8_bin DEFAULT NULL,
  `AbgPerfil` varchar(20000) COLLATE utf8_bin DEFAULT NULL,
  PRIMARY KEY (`AbgId`),
  UNIQUE KEY `AbgTargeta_UNIQUE` (`AbgTargeta`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `archivo`
--

CREATE TABLE IF NOT EXISTS `archivo` (
  `AchId` int(11) NOT NULL AUTO_INCREMENT,
  `AchNombre` varchar(100) COLLATE utf8_bin DEFAULT NULL,
  `AchDescripcion` longtext COLLATE utf8_bin,
  PRIMARY KEY (`AchId`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `beneficiario`
--

CREATE TABLE IF NOT EXISTS `beneficiario` (
  `BenId` int(11) NOT NULL AUTO_INCREMENT,
  `BenCedula` varchar(25) COLLATE utf8_bin DEFAULT NULL,
  `BenCorreo` varchar(100) COLLATE utf8_bin DEFAULT NULL,
  `BenNombre` varchar(50) COLLATE utf8_bin DEFAULT NULL,
  `BenTelefono` varchar(45) COLLATE utf8_bin DEFAULT NULL,
  PRIMARY KEY (`BenId`),
  UNIQUE KEY `BenCedula` (`BenCedula`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `beneficiarioarchivo`
--

CREATE TABLE IF NOT EXISTS `beneficiarioarchivo` (
  `BenId` int(11) DEFAULT NULL,
  `AchId` int(11) DEFAULT NULL,
  KEY `fkbene` (`BenId`),
  KEY `fkachi` (`AchId`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cuenta`
--

CREATE TABLE IF NOT EXISTS `cuenta` (
  `CntId` int(11) NOT NULL AUTO_INCREMENT,
  `CntNombre` varchar(50) COLLATE utf8_bin DEFAULT NULL,
  `CntEntregado` int(11) DEFAULT NULL,
  `CntClave` varchar(100) COLLATE utf8_bin DEFAULT NULL,
  PRIMARY KEY (`CntId`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cuentausuario`
--

CREATE TABLE IF NOT EXISTS `cuentausuario` (
  `CntId` int(11) DEFAULT NULL,
  `UsrId` int(11) DEFAULT NULL,
  KEY `fkcuenta` (`CntId`),
  KEY `fkach` (`UsrId`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pregunta`
--

CREATE TABLE IF NOT EXISTS `pregunta` (
  `PreId` int(11) NOT NULL AUTO_INCREMENT,
  `PreAsunto` varchar(100) COLLATE utf8_bin DEFAULT NULL,
  `PreDescripcion` longtext COLLATE utf8_bin,
  `PreCorreo` varchar(100) COLLATE utf8_bin DEFAULT NULL,
  PRIMARY KEY (`PreId`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipousuario`
--

CREATE TABLE IF NOT EXISTS `tipousuario` (
  `TpIdUsrd` int(11) NOT NULL AUTO_INCREMENT,
  `TpNombre` varchar(25) COLLATE utf8_bin DEFAULT NULL,
  PRIMARY KEY (`TpIdUsrd`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `tipousuario`
--

INSERT INTO `tipousuario` (`TpIdUsrd`, `TpNombre`) VALUES
(1, 'Cliente'),
(2, 'Administrador');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE IF NOT EXISTS `usuario` (
  `UsrId` int(11) NOT NULL AUTO_INCREMENT,
  `UsrNombre` varchar(25) COLLATE utf8_bin DEFAULT NULL,
  `UsrCorreo` varchar(200) COLLATE utf8_bin DEFAULT NULL,
  `UsrClave` varchar(8) COLLATE utf8_bin DEFAULT NULL,
  `UsrEdad` int(11) DEFAULT NULL,
  `UsrNick` varchar(25) COLLATE utf8_bin DEFAULT NULL,
  `TpIdUsrd` int(11) DEFAULT NULL,
  `UsrCorreo2` varchar(100) COLLATE utf8_bin DEFAULT NULL,
  PRIMARY KEY (`UsrId`),
  KEY `fktpuser` (`TpIdUsrd`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=2 ;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`UsrId`, `UsrNombre`, `UsrCorreo`, `UsrClave`, `UsrEdad`, `UsrNick`, `TpIdUsrd`, `UsrCorreo2`) VALUES
(1, 'Julian Ortiz', 'julecci@gmail.com', '123', 21, 'kractos', 1, 'jorgedipr@gmail.com');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarioarchivo`
--

CREATE TABLE IF NOT EXISTS `usuarioarchivo` (
  `AchId` int(11) DEFAULT NULL,
  `UsrId` int(11) DEFAULT NULL,
  KEY `fk_archi` (`AchId`),
  KEY `fk_user` (`UsrId`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `beneficiarioarchivo`
--
ALTER TABLE `beneficiarioarchivo`
  ADD CONSTRAINT `fkachi` FOREIGN KEY (`AchId`) REFERENCES `archivo` (`AchId`),
  ADD CONSTRAINT `fkbene` FOREIGN KEY (`BenId`) REFERENCES `beneficiario` (`BenId`);

--
-- Filtros para la tabla `cuentausuario`
--
ALTER TABLE `cuentausuario`
  ADD CONSTRAINT `fkach` FOREIGN KEY (`UsrId`) REFERENCES `usuario` (`UsrId`),
  ADD CONSTRAINT `fkcuenta` FOREIGN KEY (`CntId`) REFERENCES `cuenta` (`CntId`);

--
-- Filtros para la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD CONSTRAINT `fktpuser` FOREIGN KEY (`TpIdUsrd`) REFERENCES `tipousuario` (`TpIdUsrd`);

--
-- Filtros para la tabla `usuarioarchivo`
--
ALTER TABLE `usuarioarchivo`
  ADD CONSTRAINT `fk_archi` FOREIGN KEY (`AchId`) REFERENCES `archivo` (`AchId`),
  ADD CONSTRAINT `fk_user` FOREIGN KEY (`UsrId`) REFERENCES `usuario` (`UsrId`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
