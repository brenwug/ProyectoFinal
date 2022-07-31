-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 31-07-2022 a las 21:56:01
-- Versión del servidor: 10.4.24-MariaDB
-- Versión de PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `cacproyecto`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `localidades`
--

CREATE TABLE `localidades` (
  `idLocalidad` int(11) NOT NULL,
  `nombre` varchar(40) NOT NULL,
  `idProvincia` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `localidades`
--

INSERT INTO `localidades` (`idLocalidad`, `nombre`, `idProvincia`) VALUES
(1, 'Moreno', 3),
(2, 'Guaymallen', 4),
(3, 'Cafayate', 1),
(4, 'Cruz Alta', 1),
(5, 'Quilmes', 3),
(6, 'Berazategui', 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pedidos`
--

CREATE TABLE `pedidos` (
  `idpedido` int(11) NOT NULL,
  `nombre` varchar(40) NOT NULL,
  `apellido` varchar(40) NOT NULL,
  `usuario` varchar(20) NOT NULL,
  `mail` varchar(30) NOT NULL,
  `lugarentrega` varchar(80) NOT NULL,
  `localidad` int(11) NOT NULL,
  `codpostal` varchar(9) NOT NULL,
  `formadepago` varchar(10) NOT NULL,
  `tarjtitular` varchar(40) NOT NULL,
  `tarjnumero` bigint(16) NOT NULL,
  `tarjvto` varchar(10) NOT NULL,
  `tarjclave` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `pedidos`
--

INSERT INTO `pedidos` (`idpedido`, `nombre`, `apellido`, `usuario`, `mail`, `lugarentrega`, `localidad`, `codpostal`, `formadepago`, `tarjtitular`, `tarjnumero`, `tarjvto`, `tarjclave`) VALUES
(2, 'Marta', 'Rodriguez', 'psuarez', 'pedro@gmail.com', 'Av. Jujuy 123', 5, '1835', 'on', 'Marta Rodriguez', 1234567, '0922', 789),
(3, 'Juana', 'Garcia', 'jgarcia', 'jgarcia@gmail.com', 'Rivadavia 111', 1, '1234', 'o', 'Juana Garcia', 2147483647, 'sdf', 1245),
(4, 'Matias', 'Sanchez', 'msanchez', 'msanchez@gmail.com', 'Av. Rivadavia 32556', 1, '1233', 'o', 'Matias Sanchez', 2147483647, '0422', 124),
(5, 'Maria', 'Rosales', 'mrosales', 'mrosales@gmail.com', 'Jujuy 323', 1, '3433', 'o', 'María Rosales', 2147483647, '0422', 314),
(6, 'Sandra', 'Chiclana', 'schiclana', 'sandrachiclana@gmail.com', 'Av. Rivadavia 32556', 1, '1233', 'o', 'Sandra Chiclana', 2147483647, '0422', 124),
(7, 'Julieta', 'Berutti', 'juliberutti', 'juliberutti@gmail.com', 'Lavalle 3222', 1, '1233', 'o', 'Julieta Berutti', 2147483647, '0422', 124),
(8, 'Micaela', 'Ortiz', 'mortiz', 'micaortiz@gmail.com', 'Lavalle 3222', 1, '1233', 'o', 'Micaela Ortiz', 2147483647, '0422', 124),
(9, 'Marcelo', 'Carmona', 'mcarmona', 'mcarmona@gmail.com', 'Av. La Plata 2233 ', 1, '1882', 'o', 'Marcelo Carmona', 33, '33', 33),
(10, 'Facundo', 'Sileo', 'fsileo', 'fsileo@gmail.com', 'Av. La Plata 556', 1, '1884', 'checkedVal', 'Facundo Sileo', 1234, '0422', 423),
(11, 'Brenda', 'Benitez', 'bbenitez', 'bbenitez@hotmail.com', 'Av. Cabildo 4555', 1, '1223', 'checkedVal', 'Brenda Benitez', 1234, '0422', 423),
(12, 'Jesus', 'Rodriguez', 'jrodriguez', 'jrodriguez@gmail.com', 'Av. Cabildo 333', 1, '1223', 'checkedVal', 'Jesus Rodriguez', 123456, '0422', 325),
(13, 'Beatriz', 'Perez', 'bperez', 'bperez@gmail.com', 'Laprida 232', 2, '1554', 'mercado', 'Beatriz Perez', 1234, '0422', 325),
(14, 'Ernesto', 'Rodriguez', 'erodriguez', 'erodriguez@gmail.com', 'Av. Cabildo 4555', 1, '1223', 'null', 'Ernesto Rodriguez', 123, '0422', 123),
(15, 'Hernan', 'Zapata', 'hzapata', 'hzapata@gmail.com', 'Av. Cabildo 4555', 2, '1223', 'tarjeta', 'Hernan Zapata', 123, '0422', 123),
(28, 'Ariel', 'Paso', 'apaso', 'apaso@gmail.com', 'Laprida 232', 3, '1255', 'mercado', 'Ariel Paso', 3333, '3333', 333),
(29, 'Paola', 'French', 'pfrench', 'pfrench@gmail.com', 'Laprida 232', 3, '1234', 'tarjeta', 'Paola French', 333, '3333', 333),
(30, 'Romina', 'Estevez', 'restevez', 'restevez@gmail.com', 'Av La Plata 321', 1, '1882', 'on', '111', 111, '0122', 123),
(31, 'Juana', 'Robledo', 'jrobledo', 'jrobledo@gmail.com', 'Av. Santa Fe 123', 1, '123', 'on', 'sdf', 222, '222', 22),
(32, 'Pablo', 'Porta', 'porta', 'porta@gmail.com', 'Av La Plata 321', 1, '123', 'on', '123', 123, '123', 123),
(33, 'juan', 'Zaneti', 'juan@gmail.com', 'juan@gmail.com', 'calle viva 1234', 1, '1780', 'on', 'Abel Zaneti', 11111111, '0822', 11111),
(34, 'juan', 'Zaneti', 'juan@gmail.com', 'juan@gmail.com', 'calle viva 1234', 1, '1780', 'on', 'Abel Zaneti', 11111111, '0822', 11111),
(35, 'Lucia', 'Vazquez', 'prueba@gmail.com', 'prueba@gmail.com', 'Av. Jujuy', 1, '1435', 'on', 'Lucia Vazquez', 4517888822223212, '0822', 1234);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `provincias`
--

CREATE TABLE `provincias` (
  `idprovincia` int(11) NOT NULL,
  `nombre` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `provincias`
--

INSERT INTO `provincias` (`idprovincia`, `nombre`) VALUES
(1, 'Tucumán'),
(2, 'Salta'),
(3, 'Buenos Aires'),
(4, 'Mendoza'),
(5, 'Neuquen'),
(6, 'Entre Ríos');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `idusuarios` int(11) NOT NULL,
  `usuario` varchar(20) NOT NULL,
  `clave` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`idusuarios`, `usuario`, `clave`) VALUES
(1, 'juan@gmail.com', '909090'),
(2, 'pedro@gmail.com', '808080'),
(3, 'jgarcia@gmail.com', '111'),
(4, 'msanchez@gmail.com', '111'),
(5, 'mrosales@gmail.com', '111'),
(6, 'sandrachiclana@gmail', '111'),
(7, 'juliberutti@gmail.co', 'eeee'),
(8, 'micaortiz@gmail.com', 'Codocodo1234'),
(9, 'mcarmona@gmail.com', 'Codo1234'),
(10, 'sarasa@gmail.com', 'Codo1234'),
(11, 'bbenitez@hotmail.com', 'Codo1234'),
(12, 'jrodriguez@gmail.com', 'Codo1234'),
(13, 'bperez@gmail.com', 'Codo1234'),
(34, 'erodriguez@gmail.com', 'Codo1234'),
(35, 'prueba@gmail.com', 'prueba123'),
(36, 'dnsfnlff@gmail.com', '12345678A$aa'),
(39, 'aaaaa@gmail.com', 'Aa#12345'),
(41, 'bbbbb@gmail.com', 'Aaaaa12345$'),
(44, 'harrypotter@gmail.co', 'dghjggAA12#'),
(45, 'pearson@gmail.com', 'Zapato123'),
(49, 'millo@gmail.com', 'AAAsssx23$');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `localidades`
--
ALTER TABLE `localidades`
  ADD PRIMARY KEY (`idLocalidad`);

--
-- Indices de la tabla `pedidos`
--
ALTER TABLE `pedidos`
  ADD PRIMARY KEY (`idpedido`),
  ADD KEY `localidad` (`localidad`);

--
-- Indices de la tabla `provincias`
--
ALTER TABLE `provincias`
  ADD PRIMARY KEY (`idprovincia`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`idusuarios`),
  ADD UNIQUE KEY `usuario` (`usuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `localidades`
--
ALTER TABLE `localidades`
  MODIFY `idLocalidad` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `pedidos`
--
ALTER TABLE `pedidos`
  MODIFY `idpedido` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT de la tabla `provincias`
--
ALTER TABLE `provincias`
  MODIFY `idprovincia` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `idusuarios` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `localidades`
--
ALTER TABLE `localidades`
  ADD CONSTRAINT `localidades_ibfk_1` FOREIGN KEY (`idProvincia`) REFERENCES `provincias` (`idprovincia`);

--
-- Filtros para la tabla `pedidos`
--
ALTER TABLE `pedidos`
  ADD CONSTRAINT `pedidos_ibfk_1` FOREIGN KEY (`localidad`) REFERENCES `localidades` (`idLocalidad`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
