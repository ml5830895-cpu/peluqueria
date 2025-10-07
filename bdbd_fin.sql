-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 12-06-2023 a las 07:30:49
-- Versión del servidor: 10.1.38-MariaDB
-- Versión de PHP: 5.6.40

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `bdbd_fin`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `citas`
--

CREATE TABLE `citas` (
  `id_citas` int(20) NOT NULL,
  `id_usuario` smallint(3) NOT NULL,
  `id_servicio` int(10) NOT NULL,
  `estado_cita` int(10) NOT NULL,
  `fecha_cita` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `citas`
--

INSERT INTO `citas` (`id_citas`, `id_usuario`, `id_servicio`, `estado_cita`, `fecha_cita`) VALUES
(1, 22, 2, 1, '2023-06-13'),
(2, 26, 1, 1, '2023-06-20'),
(3, 22, 3, 1, '2023-06-14'),
(4, 22, 4, 1, '2023-07-23');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tabla_estado`
--

CREATE TABLE `tabla_estado` (
  `estado` int(10) NOT NULL,
  `nombre_estado` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tabla_estado`
--

INSERT INTO `tabla_estado` (`estado`, `nombre_estado`) VALUES
(1, 'Activo'),
(2, 'Inactivo');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tabla_estado_cita`
--

CREATE TABLE `tabla_estado_cita` (
  `estado_cita` int(10) NOT NULL,
  `nombre_estado_cita` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tabla_estado_cita`
--

INSERT INTO `tabla_estado_cita` (`estado_cita`, `nombre_estado_cita`) VALUES
(1, 'Pendiente'),
(2, 'Realizada'),
(3, 'Cancelada');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tabla_rol`
--

CREATE TABLE `tabla_rol` (
  `rol` int(10) NOT NULL,
  `nombre_rol` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tabla_rol`
--

INSERT INTO `tabla_rol` (`rol`, `nombre_rol`) VALUES
(1, 'usuario'),
(2, 'admin');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tabla_servicio`
--

CREATE TABLE `tabla_servicio` (
  `id_servicio` int(10) NOT NULL,
  `nombre_servicio` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tabla_servicio`
--

INSERT INTO `tabla_servicio` (`id_servicio`, `nombre_servicio`) VALUES
(1, 'Peluqueada'),
(2, 'Maquillaje'),
(3, 'Depilacion'),
(4, 'Manicura');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `id_usuario` smallint(3) NOT NULL,
  `usuario` varchar(40) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `password` varchar(40) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `Correo` varchar(50) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `rol` int(10) NOT NULL,
  `estado` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish2_ci;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id_usuario`, `usuario`, `password`, `Correo`, `rol`, `estado`) VALUES
(21, 'admin', '123', 'asas@dasd.co', 2, 1),
(22, 'user', '123', 'prueba@da.com', 1, 1),
(25, 'miguel', '12345678', 'miguel@gmail.com', 1, 1),
(26, 'saray', '123', 'sara@gmia.co', 1, 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `citas`
--
ALTER TABLE `citas`
  ADD PRIMARY KEY (`id_citas`),
  ADD KEY `id_usuario` (`id_usuario`),
  ADD KEY `estado_cita` (`estado_cita`),
  ADD KEY `id_servicio` (`id_servicio`);

--
-- Indices de la tabla `tabla_estado`
--
ALTER TABLE `tabla_estado`
  ADD PRIMARY KEY (`estado`);

--
-- Indices de la tabla `tabla_estado_cita`
--
ALTER TABLE `tabla_estado_cita`
  ADD PRIMARY KEY (`estado_cita`);

--
-- Indices de la tabla `tabla_rol`
--
ALTER TABLE `tabla_rol`
  ADD PRIMARY KEY (`rol`);

--
-- Indices de la tabla `tabla_servicio`
--
ALTER TABLE `tabla_servicio`
  ADD PRIMARY KEY (`id_servicio`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id_usuario`),
  ADD UNIQUE KEY `Correo` (`Correo`,`usuario`,`password`),
  ADD KEY `rol` (`rol`,`estado`),
  ADD KEY `estado` (`estado`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `citas`
--
ALTER TABLE `citas`
  MODIFY `id_citas` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `tabla_estado`
--
ALTER TABLE `tabla_estado`
  MODIFY `estado` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `tabla_estado_cita`
--
ALTER TABLE `tabla_estado_cita`
  MODIFY `estado_cita` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `tabla_rol`
--
ALTER TABLE `tabla_rol`
  MODIFY `rol` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `tabla_servicio`
--
ALTER TABLE `tabla_servicio`
  MODIFY `id_servicio` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id_usuario` smallint(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `citas`
--
ALTER TABLE `citas`
  ADD CONSTRAINT `citas_ibfk_1` FOREIGN KEY (`id_usuario`) REFERENCES `usuario` (`id_usuario`),
  ADD CONSTRAINT `citas_ibfk_2` FOREIGN KEY (`estado_cita`) REFERENCES `tabla_estado_cita` (`estado_cita`),
  ADD CONSTRAINT `citas_ibfk_3` FOREIGN KEY (`id_servicio`) REFERENCES `tabla_servicio` (`id_servicio`);

--
-- Filtros para la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD CONSTRAINT `usuario_ibfk_1` FOREIGN KEY (`estado`) REFERENCES `tabla_estado` (`estado`),
  ADD CONSTRAINT `usuario_ibfk_2` FOREIGN KEY (`rol`) REFERENCES `tabla_rol` (`rol`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
