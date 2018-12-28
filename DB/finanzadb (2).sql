-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 28-12-2018 a las 21:00:00
-- Versión del servidor: 10.1.25-MariaDB
-- Versión de PHP: 7.1.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `finanzadb`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tactivo`
--

CREATE TABLE `tactivo` (
  `id_activo` int(10) NOT NULL,
  `id_tipo` int(10) NOT NULL,
  `id_departamento` int(10) NOT NULL,
  `id_estado` int(10) NOT NULL,
  `id_usuario` int(10) NOT NULL,
  `id_encargado` int(10) NOT NULL,
  `id_proveedor` int(10) NOT NULL,
  `correlativo` varchar(50) NOT NULL,
  `fecha_adquisicion` date NOT NULL,
  `descripcion` varchar(200) NOT NULL,
  `estado` varchar(50) NOT NULL,
  `observaciones` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tcartera`
--

CREATE TABLE `tcartera` (
  `id_categoria` int(10) NOT NULL,
  `nombre` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tcartera`
--

INSERT INTO `tcartera` (`id_categoria`, `nombre`) VALUES
(1, 'A'),
(2, 'B'),
(3, 'c'),
(4, 'D');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tclasificacion`
--

CREATE TABLE `tclasificacion` (
  `id_clasificaion` int(10) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `correlativo` varchar(50) NOT NULL,
  `tiempo_depreciacion` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tclientes`
--

CREATE TABLE `tclientes` (
  `id_cliente` int(10) NOT NULL,
  `id_cartera` int(10) NOT NULL,
  `id_fiador` int(10) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `apellido` varchar(50) NOT NULL,
  `direccion` varchar(150) NOT NULL,
  `dui` varchar(20) NOT NULL,
  `nit` varchar(20) NOT NULL,
  `profecion` varchar(50) NOT NULL,
  `tipo_ingreso` varchar(50) NOT NULL,
  `salario` float NOT NULL,
  `telefono` varchar(20) NOT NULL,
  `celular` varchar(20) NOT NULL,
  `correo` varchar(40) NOT NULL,
  `observaciones` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tclientes`
--

INSERT INTO `tclientes` (`id_cliente`, `id_cartera`, `id_fiador`, `nombre`, `apellido`, `direccion`, `dui`, `nit`, `profecion`, `tipo_ingreso`, `salario`, `telefono`, `celular`, `correo`, `observaciones`) VALUES
(3, 4, 1, 'Jessica Abigail ', 'Rosales', 'Santo tomas abajo cantos los hernandez, apastepeque San vicente', '12832738-7', '1278-372883-827-8', '2783-7827', 'Remesa', 500, '2389-2898', '7787-8788', 'jessica@gmail.com', 'jksjkfjkdsh');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tdepartamento`
--

CREATE TABLE `tdepartamento` (
  `id_departamento` int(10) NOT NULL,
  `id_institucion` int(10) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `correlativo` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tdetalle_compra`
--

CREATE TABLE `tdetalle_compra` (
  `id_cliente` int(10) NOT NULL,
  `id_venta` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tdetalle_venta`
--

CREATE TABLE `tdetalle_venta` (
  `id_venta` int(10) NOT NULL,
  `id_producto` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `templeados`
--

CREATE TABLE `templeados` (
  `id_empleado` int(10) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `apellido` varchar(50) NOT NULL,
  `zona` varchar(20) NOT NULL,
  `dui` varchar(20) NOT NULL,
  `pass` varchar(30) NOT NULL,
  `nivel` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tencargado`
--

CREATE TABLE `tencargado` (
  `id_encargado` int(10) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `apellido` varchar(50) NOT NULL,
  `dui` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `testado`
--

CREATE TABLE `testado` (
  `id_estado` int(10) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `tipo_uso` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tfiador`
--

CREATE TABLE `tfiador` (
  `id_fiador` int(10) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `apellido` varchar(50) NOT NULL,
  `direccion` varchar(200) NOT NULL,
  `dui` varchar(15) NOT NULL,
  `nit` varchar(16) NOT NULL,
  `correo` varchar(30) NOT NULL,
  `profecion` varchar(40) NOT NULL,
  `salario` float NOT NULL,
  `telefono` varchar(15) NOT NULL,
  `celular` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tfiador`
--

INSERT INTO `tfiador` (`id_fiador`, `nombre`, `apellido`, `direccion`, `dui`, `nit`, `correo`, `profecion`, `salario`, `telefono`, `celular`) VALUES
(1, 'kevin', 'jovel', 'san sebas', '2838329', '3989283', 'kevin@gmail.com', 'estudiante', 500, '2233234', '777777');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tinstitucion`
--

CREATE TABLE `tinstitucion` (
  `id_institucion` int(10) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `correlativo` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tinventario`
--

CREATE TABLE `tinventario` (
  `id_inventario` int(10) NOT NULL,
  `cantidad` int(10) NOT NULL,
  `id_producto` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tpago`
--

CREATE TABLE `tpago` (
  `id_pago` int(10) NOT NULL,
  `id_venta` int(10) NOT NULL,
  `monto` float NOT NULL,
  `fecha` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tplan_pago`
--

CREATE TABLE `tplan_pago` (
  `id_plan` int(10) NOT NULL,
  `tasa` float NOT NULL,
  `cuotas` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tproducto`
--

CREATE TABLE `tproducto` (
  `id_producto` int(10) NOT NULL,
  `id_proveedor` int(10) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `descripcion` varchar(100) NOT NULL,
  `precio_compra` float NOT NULL,
  `precio_venta` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tproveedor`
--

CREATE TABLE `tproveedor` (
  `id_proveedor` int(10) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `direccion` varchar(100) NOT NULL,
  `telefono` varchar(30) NOT NULL,
  `representante` varchar(75) NOT NULL,
  `dui` varchar(20) NOT NULL,
  `nit` varchar(20) NOT NULL,
  `celular` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ttipo_activo`
--

CREATE TABLE `ttipo_activo` (
  `id_tipo` int(10) NOT NULL,
  `id_clasificacion` int(10) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `correlativo` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tventas`
--

CREATE TABLE `tventas` (
  `id_venta` int(10) NOT NULL,
  `id_plan` int(10) NOT NULL,
  `id_empleado` int(10) NOT NULL,
  `prestamo_original` float NOT NULL,
  `saldo_actual` float NOT NULL,
  `mora_acumulada` float NOT NULL,
  `intereses_acumulados` float NOT NULL,
  `estado` varchar(20) NOT NULL,
  `proximo_pago` date NOT NULL,
  `fecha` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `tactivo`
--
ALTER TABLE `tactivo`
  ADD PRIMARY KEY (`id_activo`),
  ADD KEY `fk_tipo` (`id_tipo`),
  ADD KEY `fk_departamento` (`id_departamento`),
  ADD KEY `fk_estado` (`id_estado`),
  ADD KEY `fk_usuario` (`id_usuario`),
  ADD KEY `fk_encargado` (`id_encargado`),
  ADD KEY `fk_proveedor` (`id_proveedor`);

--
-- Indices de la tabla `tcartera`
--
ALTER TABLE `tcartera`
  ADD PRIMARY KEY (`id_categoria`);

--
-- Indices de la tabla `tclasificacion`
--
ALTER TABLE `tclasificacion`
  ADD PRIMARY KEY (`id_clasificaion`);

--
-- Indices de la tabla `tclientes`
--
ALTER TABLE `tclientes`
  ADD PRIMARY KEY (`id_cliente`),
  ADD KEY `fk_cartera` (`id_cartera`),
  ADD KEY `fk_fiador` (`id_fiador`);

--
-- Indices de la tabla `tdepartamento`
--
ALTER TABLE `tdepartamento`
  ADD PRIMARY KEY (`id_departamento`),
  ADD KEY `fk_institucion` (`id_institucion`);

--
-- Indices de la tabla `tdetalle_compra`
--
ALTER TABLE `tdetalle_compra`
  ADD KEY `fk_cliente` (`id_cliente`),
  ADD KEY `fk_venta` (`id_venta`);

--
-- Indices de la tabla `tdetalle_venta`
--
ALTER TABLE `tdetalle_venta`
  ADD KEY `fk_ventas` (`id_venta`),
  ADD KEY `fk_producto` (`id_producto`);

--
-- Indices de la tabla `templeados`
--
ALTER TABLE `templeados`
  ADD PRIMARY KEY (`id_empleado`);

--
-- Indices de la tabla `tencargado`
--
ALTER TABLE `tencargado`
  ADD PRIMARY KEY (`id_encargado`);

--
-- Indices de la tabla `testado`
--
ALTER TABLE `testado`
  ADD PRIMARY KEY (`id_estado`);

--
-- Indices de la tabla `tfiador`
--
ALTER TABLE `tfiador`
  ADD PRIMARY KEY (`id_fiador`);

--
-- Indices de la tabla `tinstitucion`
--
ALTER TABLE `tinstitucion`
  ADD PRIMARY KEY (`id_institucion`);

--
-- Indices de la tabla `tinventario`
--
ALTER TABLE `tinventario`
  ADD PRIMARY KEY (`id_inventario`),
  ADD KEY `fk_productos` (`id_producto`);

--
-- Indices de la tabla `tpago`
--
ALTER TABLE `tpago`
  ADD PRIMARY KEY (`id_pago`),
  ADD KEY `fk_ventapro` (`id_venta`);

--
-- Indices de la tabla `tplan_pago`
--
ALTER TABLE `tplan_pago`
  ADD PRIMARY KEY (`id_plan`);

--
-- Indices de la tabla `tproducto`
--
ALTER TABLE `tproducto`
  ADD PRIMARY KEY (`id_producto`),
  ADD KEY `fk_proveedores` (`id_proveedor`);

--
-- Indices de la tabla `tproveedor`
--
ALTER TABLE `tproveedor`
  ADD PRIMARY KEY (`id_proveedor`);

--
-- Indices de la tabla `ttipo_activo`
--
ALTER TABLE `ttipo_activo`
  ADD PRIMARY KEY (`id_tipo`),
  ADD KEY `fk_clasificacion` (`id_clasificacion`);

--
-- Indices de la tabla `tventas`
--
ALTER TABLE `tventas`
  ADD PRIMARY KEY (`id_venta`),
  ADD KEY `id_plan` (`id_plan`),
  ADD KEY `fk_idempleado` (`id_empleado`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `tactivo`
--
ALTER TABLE `tactivo`
  MODIFY `id_activo` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `tcartera`
--
ALTER TABLE `tcartera`
  MODIFY `id_categoria` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT de la tabla `tclasificacion`
--
ALTER TABLE `tclasificacion`
  MODIFY `id_clasificaion` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `tclientes`
--
ALTER TABLE `tclientes`
  MODIFY `id_cliente` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `tdepartamento`
--
ALTER TABLE `tdepartamento`
  MODIFY `id_departamento` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `templeados`
--
ALTER TABLE `templeados`
  MODIFY `id_empleado` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `tencargado`
--
ALTER TABLE `tencargado`
  MODIFY `id_encargado` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `testado`
--
ALTER TABLE `testado`
  MODIFY `id_estado` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `tfiador`
--
ALTER TABLE `tfiador`
  MODIFY `id_fiador` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `tinstitucion`
--
ALTER TABLE `tinstitucion`
  MODIFY `id_institucion` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `tinventario`
--
ALTER TABLE `tinventario`
  MODIFY `id_inventario` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `tpago`
--
ALTER TABLE `tpago`
  MODIFY `id_pago` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `tplan_pago`
--
ALTER TABLE `tplan_pago`
  MODIFY `id_plan` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `tproducto`
--
ALTER TABLE `tproducto`
  MODIFY `id_producto` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `tproveedor`
--
ALTER TABLE `tproveedor`
  MODIFY `id_proveedor` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `ttipo_activo`
--
ALTER TABLE `ttipo_activo`
  MODIFY `id_tipo` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `tventas`
--
ALTER TABLE `tventas`
  MODIFY `id_venta` int(10) NOT NULL AUTO_INCREMENT;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `tactivo`
--
ALTER TABLE `tactivo`
  ADD CONSTRAINT `fk_departamento` FOREIGN KEY (`id_departamento`) REFERENCES `tdepartamento` (`id_departamento`),
  ADD CONSTRAINT `fk_encargado` FOREIGN KEY (`id_encargado`) REFERENCES `tencargado` (`id_encargado`),
  ADD CONSTRAINT `fk_estado` FOREIGN KEY (`id_estado`) REFERENCES `testado` (`id_estado`),
  ADD CONSTRAINT `fk_proveedor` FOREIGN KEY (`id_proveedor`) REFERENCES `tproveedor` (`id_proveedor`),
  ADD CONSTRAINT `fk_tipo` FOREIGN KEY (`id_tipo`) REFERENCES `ttipo_activo` (`id_tipo`),
  ADD CONSTRAINT `fk_usuario` FOREIGN KEY (`id_usuario`) REFERENCES `templeados` (`id_empleado`);

--
-- Filtros para la tabla `tclientes`
--
ALTER TABLE `tclientes`
  ADD CONSTRAINT `fk_cartera` FOREIGN KEY (`id_cartera`) REFERENCES `tcartera` (`id_categoria`),
  ADD CONSTRAINT `fk_fiador` FOREIGN KEY (`id_fiador`) REFERENCES `tfiador` (`id_fiador`);

--
-- Filtros para la tabla `tdepartamento`
--
ALTER TABLE `tdepartamento`
  ADD CONSTRAINT `fk_institucion` FOREIGN KEY (`id_institucion`) REFERENCES `tinstitucion` (`id_institucion`);

--
-- Filtros para la tabla `tdetalle_compra`
--
ALTER TABLE `tdetalle_compra`
  ADD CONSTRAINT `fk_cliente` FOREIGN KEY (`id_cliente`) REFERENCES `tclientes` (`id_cliente`),
  ADD CONSTRAINT `fk_venta` FOREIGN KEY (`id_venta`) REFERENCES `tventas` (`id_venta`);

--
-- Filtros para la tabla `tdetalle_venta`
--
ALTER TABLE `tdetalle_venta`
  ADD CONSTRAINT `fk_producto` FOREIGN KEY (`id_producto`) REFERENCES `tproducto` (`id_producto`),
  ADD CONSTRAINT `fk_ventas` FOREIGN KEY (`id_venta`) REFERENCES `tventas` (`id_venta`);

--
-- Filtros para la tabla `tinventario`
--
ALTER TABLE `tinventario`
  ADD CONSTRAINT `fk_productos` FOREIGN KEY (`id_producto`) REFERENCES `tproducto` (`id_producto`);

--
-- Filtros para la tabla `tpago`
--
ALTER TABLE `tpago`
  ADD CONSTRAINT `fk_ventapro` FOREIGN KEY (`id_venta`) REFERENCES `tventas` (`id_venta`);

--
-- Filtros para la tabla `tproducto`
--
ALTER TABLE `tproducto`
  ADD CONSTRAINT `fk_proveedores` FOREIGN KEY (`id_proveedor`) REFERENCES `tproveedor` (`id_proveedor`);

--
-- Filtros para la tabla `ttipo_activo`
--
ALTER TABLE `ttipo_activo`
  ADD CONSTRAINT `fk_clasificacion` FOREIGN KEY (`id_clasificacion`) REFERENCES `tclasificacion` (`id_clasificaion`);

--
-- Filtros para la tabla `tventas`
--
ALTER TABLE `tventas`
  ADD CONSTRAINT `fk_empleado` FOREIGN KEY (`id_empleado`) REFERENCES `templeados` (`id_empleado`),
  ADD CONSTRAINT `fk_plan` FOREIGN KEY (`id_plan`) REFERENCES `tplan_pago` (`id_plan`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
