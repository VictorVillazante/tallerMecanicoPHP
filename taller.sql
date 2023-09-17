-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 26-05-2020 a las 16:46:58
-- Versión del servidor: 10.4.11-MariaDB
-- Versión de PHP: 7.4.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `taller`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cliente`
--

CREATE TABLE `cliente` (
  `idcliente` int(11) NOT NULL,
  `nombres` varchar(45) DEFAULT NULL,
  `apellidos` varchar(45) DEFAULT NULL,
  `correo` varchar(100) DEFAULT NULL,
  `celular` int(11) DEFAULT NULL,
  `direccion` varchar(100) DEFAULT NULL,
  `usuario` varchar(45) DEFAULT NULL,
  `contraseña` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `cliente`
--

INSERT INTO `cliente` (`idcliente`, `nombres`, `apellidos`, `correo`, `celular`, `direccion`, `usuario`, `contraseña`) VALUES
(1, 'Juan Jose', 'Perez Camacho', 'jj@gmail.com', 23456745, 'Universidad de WordPress 321', 'juan_jose', 'jj123'),
(2, 'Juan Jose', 'Perez Camacho', 'jj@gmail.com', 78458934, 'Universidad de WordPress 321', NULL, NULL),
(3, 'Maria Jose', 'Perez Camacho', 'mj@gmail.com', 78458934, 'Universidad de WordPress 321', NULL, NULL),
(4, 'Maria Jose', 'Perez Camacho', 'mj@gmail.com', 78458934, 'Universidad de WordPress 321', NULL, NULL),
(5, 'Maria Jose', 'Perez Camacho', 'mj@gmail.com', 78458934, 'Universidad de WordPress 321', NULL, NULL),
(6, 'Gonzalo', 'Rodriguez Martinez', 'g.rodriguez@gmail.com', 73456789, 'calle 1 de obrajes', 'g_rodriguez', 'gr123'),
(7, 'Victor', 'Villazante Bernabe', 'v_villazante@gmail.com', 78458934, 'calle 60 zona chasquipampa', 'v_villazante', 'vv123');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `mecanico`
--

CREATE TABLE `mecanico` (
  `idmecanico` int(11) NOT NULL,
  `usuario` varchar(45) DEFAULT NULL,
  `contraseña` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `mecanico`
--

INSERT INTO `mecanico` (`idmecanico`, `usuario`, `contraseña`) VALUES
(1, 'usuario1', '123');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pedido`
--

CREATE TABLE `pedido` (
  `idpedido` int(11) NOT NULL,
  `fecha` datetime DEFAULT NULL,
  `cliente_idcliente` int(11) NOT NULL,
  `servicios_idservicios` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `pedido`
--

INSERT INTO `pedido` (`idpedido`, `fecha`, `cliente_idcliente`, `servicios_idservicios`) VALUES
(1, '2020-05-25 22:00:00', 6, 1),
(2, '2020-05-28 08:00:00', 6, 2),
(3, '2020-05-30 08:00:00', 6, 2),
(4, '2020-05-30 08:30:00', 6, 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `servicios`
--

CREATE TABLE `servicios` (
  `idservicios` int(11) NOT NULL,
  `nombre` varchar(45) DEFAULT NULL,
  `precio` varchar(45) DEFAULT NULL,
  `tipo_servicio_idtipo_servicio` int(11) NOT NULL,
  `activo` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `servicios`
--

INSERT INTO `servicios` (`idservicios`, `nombre`, `precio`, `tipo_servicio_idtipo_servicio`, `activo`) VALUES
(1, 'Cambio de llantas delanteras', '150', 1, 0),
(2, 'inflado de llantas', '2', 1, 0),
(3, 'parchado de llantas', '200', 1, 1),
(4, 'venta de llanta', '400', 1, 1),
(5, 'lavado de auto', '40', 2, 0),
(6, 'encerado de auto', '80', 2, 0),
(7, 'lavado de fundas', '40', 2, 1),
(8, 'lavado de motor', '40', 2, 1),
(9, 'cambio de chasis', '600', 3, 1),
(10, 'venta de chasis', '2000', 3, 1),
(11, 'pintado de auto', '3000', 3, 1),
(12, 'colocado de parachoques', '200', 3, 1),
(13, 'venta de motor', '2500', 4, 1),
(14, 'mantenimiento de motor', '100', 4, 1),
(15, 'cargado de motor', '400', 4, 1),
(16, 'cambio de liquidos', '500', 4, 1),
(17, 'Limpiado cojines', '100', 3, 1),
(18, 'Limpiado cojines', '100', 3, 1),
(19, 'Limpiado cojines', '100', 3, 1),
(20, 'Lavado de llantas', '10', 2, 0),
(21, 'limpia parabrisas', '10', 2, 1),
(22, 'Pintado de auto 2', '800', 3, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_servicio`
--

CREATE TABLE `tipo_servicio` (
  `idtipo_servicio` int(11) NOT NULL,
  `nombre` varchar(45) DEFAULT NULL,
  `imagen` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tipo_servicio`
--

INSERT INTO `tipo_servicio` (`idtipo_servicio`, `nombre`, `imagen`) VALUES
(1, 'llantas', 'llantas.png'),
(2, 'matenimiento', 'mantenimiento.jpg'),
(3, 'chapeado', 'chapeado.png'),
(4, 'motores', 'motores.png');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`idcliente`);

--
-- Indices de la tabla `mecanico`
--
ALTER TABLE `mecanico`
  ADD PRIMARY KEY (`idmecanico`);

--
-- Indices de la tabla `pedido`
--
ALTER TABLE `pedido`
  ADD PRIMARY KEY (`idpedido`),
  ADD KEY `fk_pedido_cliente1_idx` (`cliente_idcliente`),
  ADD KEY `fk_pedido_servicios1_idx` (`servicios_idservicios`);

--
-- Indices de la tabla `servicios`
--
ALTER TABLE `servicios`
  ADD PRIMARY KEY (`idservicios`),
  ADD KEY `fk_servicios_tipo_servicio1_idx` (`tipo_servicio_idtipo_servicio`);

--
-- Indices de la tabla `tipo_servicio`
--
ALTER TABLE `tipo_servicio`
  ADD PRIMARY KEY (`idtipo_servicio`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `cliente`
--
ALTER TABLE `cliente`
  MODIFY `idcliente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `mecanico`
--
ALTER TABLE `mecanico`
  MODIFY `idmecanico` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `pedido`
--
ALTER TABLE `pedido`
  MODIFY `idpedido` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `servicios`
--
ALTER TABLE `servicios`
  MODIFY `idservicios` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT de la tabla `tipo_servicio`
--
ALTER TABLE `tipo_servicio`
  MODIFY `idtipo_servicio` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `pedido`
--
ALTER TABLE `pedido`
  ADD CONSTRAINT `fk_pedido_cliente1` FOREIGN KEY (`cliente_idcliente`) REFERENCES `cliente` (`idcliente`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_pedido_servicios1` FOREIGN KEY (`servicios_idservicios`) REFERENCES `servicios` (`idservicios`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `servicios`
--
ALTER TABLE `servicios`
  ADD CONSTRAINT `fk_servicios_tipo_servicio1` FOREIGN KEY (`tipo_servicio_idtipo_servicio`) REFERENCES `tipo_servicio` (`idtipo_servicio`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
