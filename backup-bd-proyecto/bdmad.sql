-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 06-07-2021 a las 05:24:36
-- Versión del servidor: 10.1.38-MariaDB
-- Versión de PHP: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `bdmad`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tblfactura`
--

CREATE TABLE `tblfactura` (
  `pk_id_factura` varchar(20) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `fk_id_identificacion_2` bigint(12) NOT NULL,
  `hora_factura` time NOT NULL,
  `fecha_factura` time NOT NULL,
  `tipo_pago` varchar(20) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `nombre_producto` int(5) NOT NULL,
  `marca` varchar(20) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `iva_producto` decimal(12,3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tblloggin`
--

CREATE TABLE `tblloggin` (
  `pk_nick_loggin` varchar(100) NOT NULL,
  `password` varchar(20) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tblloggin`
--

INSERT INTO `tblloggin` (`pk_nick_loggin`, `password`) VALUES
('adar_ing_aponte@hotmail.es', '1234AA'),
('cobriza@gmail.com', '12345'),
('lolitaperez@gmail.com', 'lolitaperez'),
('mariamucia@gmail.com', '12345'),
('pacoperez@gmail.com', '12345'),
('tutoaponte@outlok.es', '123456');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tblmiscelenea`
--

CREATE TABLE `tblmiscelenea` (
  `pk_nit_m` varchar(12) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `razon_social` varchar(20) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `tipo_empresa` varchar(20) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `nombre_representante_legal` varchar(20) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `apellidos_representante_legal` varchar(20) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `identificacion_representante` bigint(12) NOT NULL,
  `telefono_empresa` varchar(20) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `email` varchar(100) NOT NULL,
  `direccion_empresa` varchar(100) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tblmiscelenea`
--

INSERT INTO `tblmiscelenea` (`pk_nit_m`, `razon_social`, `tipo_empresa`, `nombre_representante_legal`, `apellidos_representante_legal`, `identificacion_representante`, `telefono_empresa`, `email`, `direccion_empresa`) VALUES
('26941992', 'MISCELANEA Y ACCESOR', 'NATURAL', 'DAISY', 'RODRIGUEZ', 26941992, '3003607658', 'MISCELANEA&ACCESORIOSDAISY@GMAIL.COM', 'CARRERA 19B #16C-57');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tblpedido`
--

CREATE TABLE `tblpedido` (
  `pk_id_pedido` varchar(20) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `fk_id_factura_2` varchar(20) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `fk_nit_p2` varchar(12) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `fecha_pedido` date NOT NULL,
  `fecha_entrega` date NOT NULL,
  `nombre_producto` varchar(12) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `descripcion_producto` varchar(100) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `cantidad_producto` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tblpedidoproducto`
--

CREATE TABLE `tblpedidoproducto` (
  `fk_id_pedido_1` varchar(20) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `fk_id_producto_2` varchar(12) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tblproducto`
--

CREATE TABLE `tblproducto` (
  `pk_id_producto` varchar(12) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `fk_nit_m` varchar(12) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `precio` decimal(12,3) NOT NULL,
  `marca` varchar(20) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `promocion_aplicar` varchar(2) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `categoria` varchar(20) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `devolucion_aplicar` varchar(2) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `cantidad` int(5) NOT NULL,
  `fecha_ingreso` date NOT NULL,
  `fecha_salida` date NOT NULL,
  `impuesto` decimal(12,3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tblproductodevolucion`
--

CREATE TABLE `tblproductodevolucion` (
  `fk_id_factura_1` varchar(20) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `ente_devolucion` varchar(100) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `descripcion_devolucion` varchar(100) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tblproductofactura`
--

CREATE TABLE `tblproductofactura` (
  `fk_id_factura_3` varchar(20) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `fk_id_producto_4` varchar(12) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tblproductoproveedores`
--

CREATE TABLE `tblproductoproveedores` (
  `fk_producto_3` varchar(12) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `fk_nit_p1` varchar(12) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tblpromocion`
--

CREATE TABLE `tblpromocion` (
  `pk_id_promocion` varchar(20) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `fk_id_producto` varchar(12) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `fecha_inicial` date NOT NULL,
  `fecha_final` date NOT NULL,
  `descuento_promocion` int(3) NOT NULL,
  `precio_promocion` decimal(12,3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tblproveedor`
--

CREATE TABLE `tblproveedor` (
  `pk_nit_p` varchar(9) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `digito_verificacion` varchar(1) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `razon_social` varchar(20) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `tipo_empresa` varchar(20) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `telefono_empresa` varchar(20) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `ciudad` varchar(20) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `direccion` varchar(20) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `email` varchar(20) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tblusuario`
--

CREATE TABLE `tblusuario` (
  `id_identificacion` bigint(12) NOT NULL,
  `fk_nit_m1` varchar(12) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `fk_nick_loggin_1` varchar(100) NOT NULL,
  `nombre` varchar(20) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `apellido` varchar(20) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `telefono` varchar(20) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `direccion` varchar(20) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `email` varchar(100) NOT NULL,
  `fecha_registro` date NOT NULL,
  `hora_registro` time NOT NULL,
  `edad` int(3) NOT NULL,
  `rol` varchar(20) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tblusuario`
--

INSERT INTO `tblusuario` (`id_identificacion`, `fk_nit_m1`, `fk_nick_loggin_1`, `nombre`, `apellido`, `telefono`, `direccion`, `email`, `fecha_registro`, `hora_registro`, `edad`, `rol`) VALUES
(454545, '26941992', 'cobriza@gmail.com', 'cobriza', 'fragozo', '323132122', 'Alfrente de la casa', 'cobriza@gmail.com', '2021-07-04', '18:18:20', 92, 'administrador'),
(15172059, '26941992', 'adar_ing_aponte@hotmail.es', 'Alejandro', 'aponte rodriguez', '3103524024', 'Calle 69 sur #95A-41', 'adar_ing_aponte@hotmail.es', '2021-06-20', '16:55:23', 40, 'cliente'),
(74856214, '26941992', 'mariamucia@gmail.com', 'maria', 'murcia', '3453221344', 'la 23 ', 'mariamucia@gmail.com', '2021-07-04', '14:37:52', 35, 'cliente'),
(142578654, '26941992', 'pacoperez@gmail.com', 'paco', 'perez', '324123456', 'dangond', 'pacoperez@gmail.com', '2021-07-04', '14:34:55', 25, 'cliente'),
(1065598062, '26941992', 'tutoaponte@outlok.es', 'eduardo', 'aponte', '3206207768', 'cra 11 # 16-17', 'tutoaponte@outlok.es', '2021-06-28', '22:14:48', 28, 'administrador');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `tblfactura`
--
ALTER TABLE `tblfactura`
  ADD PRIMARY KEY (`pk_id_factura`),
  ADD KEY `fk_id_identificacion_2` (`fk_id_identificacion_2`);

--
-- Indices de la tabla `tblloggin`
--
ALTER TABLE `tblloggin`
  ADD PRIMARY KEY (`pk_nick_loggin`);

--
-- Indices de la tabla `tblmiscelenea`
--
ALTER TABLE `tblmiscelenea`
  ADD PRIMARY KEY (`pk_nit_m`);

--
-- Indices de la tabla `tblpedido`
--
ALTER TABLE `tblpedido`
  ADD PRIMARY KEY (`pk_id_pedido`),
  ADD KEY `fk_id_factura_2` (`fk_id_factura_2`),
  ADD KEY `fk_nit_p2` (`fk_nit_p2`);

--
-- Indices de la tabla `tblpedidoproducto`
--
ALTER TABLE `tblpedidoproducto`
  ADD KEY `fk_id_pedido_1` (`fk_id_pedido_1`),
  ADD KEY `fk_id_producto_2` (`fk_id_producto_2`);

--
-- Indices de la tabla `tblproducto`
--
ALTER TABLE `tblproducto`
  ADD PRIMARY KEY (`pk_id_producto`),
  ADD KEY `fk_nit_m` (`fk_nit_m`);

--
-- Indices de la tabla `tblproductodevolucion`
--
ALTER TABLE `tblproductodevolucion`
  ADD KEY `fk_id_factura_1` (`fk_id_factura_1`);

--
-- Indices de la tabla `tblproductofactura`
--
ALTER TABLE `tblproductofactura`
  ADD KEY `fk_id_factura_3` (`fk_id_factura_3`),
  ADD KEY `fk_id_producto_4` (`fk_id_producto_4`);

--
-- Indices de la tabla `tblproductoproveedores`
--
ALTER TABLE `tblproductoproveedores`
  ADD KEY `fk_producto_3` (`fk_producto_3`),
  ADD KEY `fk_nit_p1` (`fk_nit_p1`);

--
-- Indices de la tabla `tblpromocion`
--
ALTER TABLE `tblpromocion`
  ADD PRIMARY KEY (`pk_id_promocion`),
  ADD KEY `fk_id_producto` (`fk_id_producto`);

--
-- Indices de la tabla `tblproveedor`
--
ALTER TABLE `tblproveedor`
  ADD PRIMARY KEY (`pk_nit_p`);

--
-- Indices de la tabla `tblusuario`
--
ALTER TABLE `tblusuario`
  ADD PRIMARY KEY (`id_identificacion`),
  ADD KEY `fk_nit_m1` (`fk_nit_m1`),
  ADD KEY `fk_nick_loggin_1` (`fk_nick_loggin_1`);

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `tblfactura`
--
ALTER TABLE `tblfactura`
  ADD CONSTRAINT `fk_id_identificacion_2` FOREIGN KEY (`fk_id_identificacion_2`) REFERENCES `tblusuario` (`id_identificacion`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `tblpedido`
--
ALTER TABLE `tblpedido`
  ADD CONSTRAINT `fk_id_factura_2` FOREIGN KEY (`fk_id_factura_2`) REFERENCES `tblfactura` (`pk_id_factura`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_nit_p2` FOREIGN KEY (`fk_nit_p2`) REFERENCES `tblproveedor` (`pk_nit_p`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `tblpedidoproducto`
--
ALTER TABLE `tblpedidoproducto`
  ADD CONSTRAINT `fk_id_pedido_1` FOREIGN KEY (`fk_id_pedido_1`) REFERENCES `tblpedido` (`pk_id_pedido`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_id_producto_2` FOREIGN KEY (`fk_id_producto_2`) REFERENCES `tblproducto` (`pk_id_producto`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `tblproducto`
--
ALTER TABLE `tblproducto`
  ADD CONSTRAINT `fk_nit_m` FOREIGN KEY (`fk_nit_m`) REFERENCES `tblmiscelenea` (`pk_nit_m`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `tblproductodevolucion`
--
ALTER TABLE `tblproductodevolucion`
  ADD CONSTRAINT `fk_id_factura_1` FOREIGN KEY (`fk_id_factura_1`) REFERENCES `tblfactura` (`pk_id_factura`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `tblproductofactura`
--
ALTER TABLE `tblproductofactura`
  ADD CONSTRAINT `fk_id_factura_3` FOREIGN KEY (`fk_id_factura_3`) REFERENCES `tblfactura` (`pk_id_factura`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_id_producto_4` FOREIGN KEY (`fk_id_producto_4`) REFERENCES `tblproducto` (`pk_id_producto`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `tblproductoproveedores`
--
ALTER TABLE `tblproductoproveedores`
  ADD CONSTRAINT `fk_nit_p1` FOREIGN KEY (`fk_nit_p1`) REFERENCES `tblproveedor` (`pk_nit_p`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_producto_3` FOREIGN KEY (`fk_producto_3`) REFERENCES `tblproducto` (`pk_id_producto`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `tblpromocion`
--
ALTER TABLE `tblpromocion`
  ADD CONSTRAINT `fk_id_producto` FOREIGN KEY (`fk_id_producto`) REFERENCES `tblproducto` (`pk_id_producto`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `tblusuario`
--
ALTER TABLE `tblusuario`
  ADD CONSTRAINT `fk_nick_loggin_1` FOREIGN KEY (`fk_nick_loggin_1`) REFERENCES `tblloggin` (`pk_nick_loggin`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_nit_m1` FOREIGN KEY (`fk_nit_m1`) REFERENCES `tblmiscelenea` (`pk_nit_m`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
