-- phpMyAdmin SQL Dump
-- version 4.6.0
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 17-11-2016 a las 14:29:41
-- Versión del servidor: 5.7.12
-- Versión de PHP: 5.6.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `jobexpress`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `acceso`
--

CREATE TABLE `acceso` (
  `IdAcceso` int(11) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Clave` varchar(100) NOT NULL,
  `Rol` int(11) DEFAULT NULL,
  `IdUsuario` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `acceso`
--

INSERT INTO `acceso` (`IdAcceso`, `Email`, `Clave`, `Rol`, `IdUsuario`) VALUES
(1, 'lageishaflorimon@hotmail.com', 'iluminada', 1, 1),
(2, 'anthony@gmail.com', '123456', 1, 4),
(3, 'tony@gmail.com', 'anthony123', 1, 5),
(4, 'milkacastillogoris@hotmail.com', '123456', 1, 6),
(5, 'anthony1@gmail.com', '123456', 1, 8),
(6, 'luis@gmail.com', '12345', 1, 9),
(7, 'luisjose@gmail.com', '12345', 1, 11);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `accesoempresa`
--

CREATE TABLE `accesoempresa` (
  `Idacceso` int(11) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Clave` varchar(100) NOT NULL,
  `Rol` int(11) DEFAULT NULL,
  `IdEmpresa` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `accesoempresa`
--

INSERT INTO `accesoempresa` (`Idacceso`, `Email`, `Clave`, `Rol`, `IdEmpresa`) VALUES
(1, 'mipanchito@gmail.com', '123456', 2, 1),
(2, 'empresa01@gmail.com', '1234', 2, 4);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `anuncio`
--

CREATE TABLE `anuncio` (
  `IdAnuncio` int(11) NOT NULL,
  `Nombre` varchar(30) DEFAULT NULL,
  `Requisitos` varchar(100) DEFAULT NULL,
  `NivelAcademico` varchar(70) DEFAULT NULL,
  `EdadMaxima` int(11) DEFAULT NULL,
  `Horario` varchar(30) DEFAULT NULL,
  `Salario` decimal(13,2) DEFAULT NULL,
  `Comentario` varchar(100) DEFAULT NULL,
  `IdEmpresa` int(11) DEFAULT NULL,
  `Descripcion` varchar(400) DEFAULT NULL,
  `Fecha` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empresa`
--

CREATE TABLE `empresa` (
  `IdEmpresa` int(11) NOT NULL,
  `Nombre` varchar(25) NOT NULL,
  `Rnc` int(11) NOT NULL,
  `Direccion` varchar(100) NOT NULL,
  `Provincia` int(11) DEFAULT NULL,
  `Dedicacion` varchar(100) NOT NULL,
  `PaginaWeb` varchar(50) NOT NULL,
  `Logo` varchar(200) NOT NULL,
  `PersonaContacto` varchar(30) DEFAULT NULL,
  `TelefonoContacto` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `empresa`
--

INSERT INTO `empresa` (`IdEmpresa`, `Nombre`, `Rnc`, `Direccion`, `Provincia`, `Dedicacion`, `PaginaWeb`, `Logo`, `PersonaContacto`, `TelefonoContacto`) VALUES
(1, 'Mi Empresa', 123123, 'poray', 1, 'mantenimiento', 'www.webmia.com', '', 'tony', 809233223),
(4, 'MiEmpresamia', 123453, 'poray', 1, 'desarrollo', 'www.webmia.com', '', 'tony', 2147483647);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `provincia`
--

CREATE TABLE `provincia` (
  `IdProvincia` int(11) NOT NULL,
  `Nombre` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `provincia`
--

INSERT INTO `provincia` (`IdProvincia`, `Nombre`) VALUES
(1, 'Azua'),
(2, 'Bahoruco'),
(3, 'Barahona'),
(4, 'Dajabón'),
(5, 'Distrito Nacional'),
(6, 'Duarte'),
(7, 'Elías Piña'),
(8, 'El Seibo'),
(9, 'Espaillat'),
(10, 'Hato Mayor'),
(11, 'Hermanas Mirabal'),
(12, 'Independencia'),
(13, 'La Altagracia'),
(14, 'La Romana'),
(15, 'La Vega'),
(16, 'María Trinidad Sánchez'),
(17, 'Monseñor Nouel'),
(18, 'Monte Cristi'),
(19, 'Monte Plata'),
(20, 'Pedernales'),
(21, 'Peravia'),
(22, 'Puerto Plata'),
(23, 'Samaná'),
(24, 'Sánchez Ramírez'),
(25, 'San Cristóbal'),
(26, 'San José de Ocoa'),
(27, 'San Juan'),
(28, 'San Pedro de Macorís'),
(29, 'Santiago'),
(30, 'Santiago Rodríguez'),
(31, 'Santo Domingo'),
(32, 'Valverde');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `provincias`
--

CREATE TABLE `provincias` (
  `provincia_id` int(11) NOT NULL,
  `nombre` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `provincias`
--

INSERT INTO `provincias` (`provincia_id`, `nombre`) VALUES
(1, 'Azua'),
(2, 'Bahoruco'),
(3, 'Barahona'),
(4, 'Dajabón'),
(5, 'Distrito Nacional'),
(6, 'Duarte'),
(7, 'Elías Piña'),
(8, 'El Seibo'),
(9, 'Espaillat'),
(10, 'Hato Mayor'),
(11, 'Hermanas Mirabal'),
(12, 'Independencia'),
(13, 'La Altagracia'),
(14, 'La Romana'),
(15, 'La Vega'),
(16, 'María Trinidad Sánchez'),
(17, 'Monseñor Nouel'),
(18, 'Monte Cristi'),
(19, 'Monte Plata'),
(20, 'Pedernales'),
(21, 'Peravia'),
(22, 'Puerto Plata'),
(23, 'Samaná'),
(24, 'Sánchez Ramírez'),
(25, 'San Cristóbal'),
(26, 'San José de Ocoa'),
(27, 'San Juan'),
(28, 'San Pedro de Macorís'),
(29, 'Santiago'),
(30, 'Santiago Rodríguez'),
(31, 'Santo Domingo'),
(32, 'Valverde');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rol`
--

CREATE TABLE `rol` (
  `IdRol` int(11) NOT NULL,
  `Nombre` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `rol`
--

INSERT INTO `rol` (`IdRol`, `Nombre`) VALUES
(1, 'Usuario'),
(2, 'Empresa'),
(3, 'Administrador');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sexo`
--

CREATE TABLE `sexo` (
  `IdSexo` int(11) NOT NULL,
  `Nombre` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `sexo`
--

INSERT INTO `sexo` (`IdSexo`, `Nombre`) VALUES
(1, 'Masculino'),
(2, 'Femenino');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `solicitudanuncio`
--

CREATE TABLE `solicitudanuncio` (
  `IdSolicitud` int(11) NOT NULL,
  `IdUsuario` int(11) DEFAULT NULL,
  `IdAnuncio` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `IdUsuario` int(11) NOT NULL,
  `PrimerNombre` varchar(15) NOT NULL,
  `SegundoNombre` varchar(15) NOT NULL,
  `PrimerApellido` varchar(15) NOT NULL,
  `SegundoApellido` varchar(15) NOT NULL,
  `NoCedula` int(11) NOT NULL,
  `IdSexo` int(11) DEFAULT NULL,
  `Foto` varchar(200) DEFAULT NULL,
  `Direccion` varchar(100) NOT NULL,
  `Provincia` int(11) DEFAULT NULL,
  `FechaNacimiemto` date DEFAULT NULL,
  `NivelAcademico` varchar(20) DEFAULT NULL,
  `Laborando` char(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`IdUsuario`, `PrimerNombre`, `SegundoNombre`, `PrimerApellido`, `SegundoApellido`, `NoCedula`, `IdSexo`, `Foto`, `Direccion`, `Provincia`, `FechaNacimiemto`, `NivelAcademico`, `Laborando`) VALUES
(1, 'Mariela', 'Steysi', 'Florimon', 'Rodriguez', 45637210, 2, 'dfsdfssf', 'elfactor', 1, '2014-06-13', 'ingeniera', 'S'),
(4, 'anthony', 'salvador', 'labour', 'perez', 12341231, 1, '', 'poray', 1, '2016-07-05', 'no', NULL),
(5, 'anthony', 'salvador', 'labour', 'perez', 119024925, 1, 'foto.png', 'avenida independencia', 1, '1994-11-11', 'no', 's'),
(6, 'milka', 'sharmin', 'castillo', 'goris', 10203022, 2, '', 'nagua', 1, '1997-02-15', 'no', NULL),
(7, 'milka', 'sharmin', 'castillo', 'goris', 1203102, 2, '', 'nagua', 1, '1996-05-03', 'no', NULL),
(8, 'antho', 'salvador', 'labour', 'perez', 12312313, 1, 'imagenes/', 'poray', 1, '1994-04-16', 'si', NULL),
(9, 'luis', 'jose', 'luis', 'manon', 234132, 1, 'imagenes/foto.png', 'poray', 1, '1995-03-16', 'no', NULL),
(11, 'luis', 'jose', 'luis', 'manon', 2147483, 1, 'imagenes/13343002_1204494346227612_5490530854279073780_n.jpg', 'poray', 1, '1995-03-16', 'bachiller', 's');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `acceso`
--
ALTER TABLE `acceso`
  ADD PRIMARY KEY (`IdAcceso`),
  ADD UNIQUE KEY `Email` (`Email`),
  ADD KEY `Rol` (`Rol`),
  ADD KEY `IdUsuario` (`IdUsuario`);

--
-- Indices de la tabla `accesoempresa`
--
ALTER TABLE `accesoempresa`
  ADD PRIMARY KEY (`Idacceso`),
  ADD UNIQUE KEY `Email` (`Email`),
  ADD KEY `Rol` (`Rol`),
  ADD KEY `IdEmpresa` (`IdEmpresa`);

--
-- Indices de la tabla `anuncio`
--
ALTER TABLE `anuncio`
  ADD PRIMARY KEY (`IdAnuncio`),
  ADD KEY `IdEmpresa` (`IdEmpresa`);

--
-- Indices de la tabla `empresa`
--
ALTER TABLE `empresa`
  ADD PRIMARY KEY (`IdEmpresa`),
  ADD UNIQUE KEY `Nombre` (`Nombre`),
  ADD UNIQUE KEY `Rnc` (`Rnc`),
  ADD KEY `Provincia` (`Provincia`);

--
-- Indices de la tabla `provincia`
--
ALTER TABLE `provincia`
  ADD PRIMARY KEY (`IdProvincia`);

--
-- Indices de la tabla `provincias`
--
ALTER TABLE `provincias`
  ADD PRIMARY KEY (`provincia_id`);

--
-- Indices de la tabla `rol`
--
ALTER TABLE `rol`
  ADD PRIMARY KEY (`IdRol`);

--
-- Indices de la tabla `sexo`
--
ALTER TABLE `sexo`
  ADD PRIMARY KEY (`IdSexo`);

--
-- Indices de la tabla `solicitudanuncio`
--
ALTER TABLE `solicitudanuncio`
  ADD PRIMARY KEY (`IdSolicitud`),
  ADD KEY `IdUsuario` (`IdUsuario`),
  ADD KEY `IdAnuncio` (`IdAnuncio`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`IdUsuario`),
  ADD UNIQUE KEY `NoCedula` (`NoCedula`),
  ADD KEY `IdSexo` (`IdSexo`),
  ADD KEY `Provincia` (`Provincia`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `acceso`
--
ALTER TABLE `acceso`
  MODIFY `IdAcceso` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT de la tabla `accesoempresa`
--
ALTER TABLE `accesoempresa`
  MODIFY `Idacceso` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `anuncio`
--
ALTER TABLE `anuncio`
  MODIFY `IdAnuncio` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `empresa`
--
ALTER TABLE `empresa`
  MODIFY `IdEmpresa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT de la tabla `provincia`
--
ALTER TABLE `provincia`
  MODIFY `IdProvincia` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;
--
-- AUTO_INCREMENT de la tabla `provincias`
--
ALTER TABLE `provincias`
  MODIFY `provincia_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;
--
-- AUTO_INCREMENT de la tabla `rol`
--
ALTER TABLE `rol`
  MODIFY `IdRol` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `sexo`
--
ALTER TABLE `sexo`
  MODIFY `IdSexo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `solicitudanuncio`
--
ALTER TABLE `solicitudanuncio`
  MODIFY `IdSolicitud` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `IdUsuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `acceso`
--
ALTER TABLE `acceso`
  ADD CONSTRAINT `acceso_ibfk_1` FOREIGN KEY (`Rol`) REFERENCES `rol` (`IdRol`),
  ADD CONSTRAINT `acceso_ibfk_2` FOREIGN KEY (`IdUsuario`) REFERENCES `usuario` (`IdUsuario`);

--
-- Filtros para la tabla `accesoempresa`
--
ALTER TABLE `accesoempresa`
  ADD CONSTRAINT `accesoempresa_ibfk_1` FOREIGN KEY (`Rol`) REFERENCES `rol` (`IdRol`),
  ADD CONSTRAINT `accesoempresa_ibfk_2` FOREIGN KEY (`IdEmpresa`) REFERENCES `empresa` (`IdEmpresa`);

--
-- Filtros para la tabla `anuncio`
--
ALTER TABLE `anuncio`
  ADD CONSTRAINT `anuncio_ibfk_1` FOREIGN KEY (`IdEmpresa`) REFERENCES `empresa` (`IdEmpresa`);

--
-- Filtros para la tabla `empresa`
--
ALTER TABLE `empresa`
  ADD CONSTRAINT `empresa_ibfk_1` FOREIGN KEY (`Provincia`) REFERENCES `provincias` (`provincia_id`);

--
-- Filtros para la tabla `solicitudanuncio`
--
ALTER TABLE `solicitudanuncio`
  ADD CONSTRAINT `solicitudanuncio_ibfk_1` FOREIGN KEY (`IdUsuario`) REFERENCES `usuario` (`IdUsuario`),
  ADD CONSTRAINT `solicitudanuncio_ibfk_2` FOREIGN KEY (`IdAnuncio`) REFERENCES `anuncio` (`IdAnuncio`);

--
-- Filtros para la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD CONSTRAINT `usuario_ibfk_1` FOREIGN KEY (`IdSexo`) REFERENCES `sexo` (`IdSexo`),
  ADD CONSTRAINT `usuario_ibfk_2` FOREIGN KEY (`Provincia`) REFERENCES `provincias` (`provincia_id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
