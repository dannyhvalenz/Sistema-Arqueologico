-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 24-02-2020 a las 04:11:16
-- Versión del servidor: 10.1.40-MariaDB
-- Versión de PHP: 7.1.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `abdarqueologia`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `analisispastas`
--

CREATE TABLE `analisispastas` (
  `IdAnalisisPastas` int(4) NOT NULL,
  `NumAnalisisPasta` varchar(10) NOT NULL,
  `Fecha` date DEFAULT NULL,
  `Cuadrante` varchar(20) DEFAULT NULL,
  `Sitio` varchar(20) DEFAULT NULL,
  `Patron` varchar(30) DEFAULT NULL,
  `Utme` int(12) DEFAULT NULL,
  `Utmn` int(12) DEFAULT NULL,
  `Latitud` int(5) DEFAULT NULL,
  `Analizo` varchar(40) DEFAULT NULL,
  `Bolsa` varchar(10) DEFAULT NULL,
  `Tipo` varchar(10) DEFAULT NULL,
  `Tratamiento` varchar(100) DEFAULT NULL,
  `Modificacion` varchar(100) DEFAULT NULL,
  `FormasTratamientos` varchar(100) DEFAULT NULL,
  `Peso` double DEFAULT NULL,
  `TotalFragmentos` int(4) DEFAULT NULL,
  `Observaciones` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `analisispastas`
--

INSERT INTO `analisispastas` (`IdAnalisisPastas`, `NumAnalisisPasta`, `Fecha`, `Cuadrante`, `Sitio`, `Patron`, `Utme`, `Utmn`, `Latitud`, `Analizo`, `Bolsa`, `Tipo`, `Tratamiento`, `Modificacion`, `FormasTratamientos`, `Peso`, `TotalFragmentos`, `Observaciones`) VALUES
(1, '', '2019-10-02', 'ASXD', 'SDCV', 'SDC', 455, 1458, 565, 'SD', 'AS', 'AS', 'AS', 'ASD', 'AS', 2, 4, 'Café, un par de empanadas y la nueva temporada de American Horror Story. A veces ella me pregunta por qué me gustan las series y películas de terror. La respuesta es siempre la misma: no importa mucho el género, importa la historia y la forma de cont'),
(2, '', '2019-10-27', 'ASXDJ', 'AS', 'ZZ', 785, 147, 874, 'ZX', 'AS', 'AS', 'AS', 'ASD', 'AS', 0.58, 4, 'ASD'),
(3, '', '2019-10-27', 'ASXDJ', 'AS', 'ZZ', 785, 147, 874, 'ZX', 'AS', 'AS', 'AS', 'ASD', 'AS', 0.58, 4, 'ASD'),
(4, '', '2019-10-10', 'qwer', 'qwer', 'qwer', 23456, 123, 543, 'qer', 'q3', 'swer', 'sdf', '234t', 'sdre', 0.4, 2, 'ughufhsofhslslslsllslsllslsls'),
(5, '', '2019-10-10', 'qwer', 'qwer', 'qwer', 23456, 123, 543, 'qer', 'q3', 'swer', 'sdf', '234t', 'sdre', 0.4, 2, 'ughufhsofhslslslsllslsllslsls'),
(6, '', '2019-10-10', 'qwer', 'qwer', 'qwer', 23456, 123, 543, 'qer', 'q3', 'swer', 'sdf', '234t', 'sdre', 0.4, 2, 'ughufhsofhslslslsllslsllslsls'),
(7, '', '2019-10-03', 'gtre', 'sdf', 'dsa', 874, 54, 215, 'qwer', 'erty', 'hbvcxz', 'sdf', 'mnb', 'jhvcx', 4, 78, 'aZSDXCFGVBHNJKM'),
(8, '', '2019-10-03', 'gtre', 'sdf', 'dsa', 874, 54, 215, 'qwer', 'erty', 'hbvcxz', 'sdf', 'mnb', 'jhvcx', 4, 78, 'aZSDXCFGVBHNJKM'),
(9, '', '2019-10-30', 'ytre', 'qwer', 'asdfgh', 78, 88, 5545, 'sdfg', 'bhnjkm', 'omo', 'jjk', 'qwe', 'ytr', 2.4, 7, 'wert'),
(10, '77878', '2019-10-04', 'qwer', 'qwe', 'qwer', 787, 5564, 78678, 'qwer', 'qwer', 'qklelknql', 'wsjhjqk', 'qwe4', 'asdfg', 2.4, 7, '23er');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `conteocolecciones`
--

CREATE TABLE `conteocolecciones` (
  `idConteo` int(250) NOT NULL,
  `Material` varchar(20) DEFAULT NULL,
  `ConteoArti` int(100) DEFAULT NULL,
  `Colecto` varchar(70) DEFAULT NULL,
  `Fecha` date DEFAULT NULL,
  `Hora` time(6) DEFAULT NULL,
  `ObservaConteo` varchar(250) DEFAULT NULL,
  `IdAnalisisPastas` int(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `conteocolecciones`
--

INSERT INTO `conteocolecciones` (`idConteo`, `Material`, `ConteoArti`, `Colecto`, `Fecha`, `Hora`, `ObservaConteo`, `IdAnalisisPastas`) VALUES
(1, 'Ceramico', 1, 'Viridiana', '2019-11-07', '07:05:00.000000', 'Ob', 1),
(2, 'Basalto', 1, 'Raúl', '2019-11-19', '05:20:00.000000', 'Ob2', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `fotosap`
--

CREATE TABLE `fotosap` (
  `idImagen` int(6) NOT NULL,
  `Foto` blob,
  `IdAnalisisPastas` int(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `idUsuario` int(250) NOT NULL,
  `Nombre` varchar(30) DEFAULT NULL,
  `Apellido` varchar(30) DEFAULT NULL,
  `Contrasena` varchar(30) DEFAULT NULL,
  `Cargo` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`idUsuario`, `Nombre`, `Apellido`, `Contrasena`, `Cargo`) VALUES
(1, 'Prueba', 'apellido', '123', 'abc'),
(2, NULL, NULL, 'ñkñlkjokj´pkj+pki]1', NULL);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `analisispastas`
--
ALTER TABLE `analisispastas`
  ADD PRIMARY KEY (`IdAnalisisPastas`);

--
-- Indices de la tabla `conteocolecciones`
--
ALTER TABLE `conteocolecciones`
  ADD PRIMARY KEY (`idConteo`),
  ADD KEY `IdAnalisisPastas` (`IdAnalisisPastas`);

--
-- Indices de la tabla `fotosap`
--
ALTER TABLE `fotosap`
  ADD PRIMARY KEY (`idImagen`),
  ADD KEY `IdAnalisisPastas` (`IdAnalisisPastas`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`idUsuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `analisispastas`
--
ALTER TABLE `analisispastas`
  MODIFY `IdAnalisisPastas` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `conteocolecciones`
--
ALTER TABLE `conteocolecciones`
  MODIFY `idConteo` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `fotosap`
--
ALTER TABLE `fotosap`
  MODIFY `idImagen` int(6) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `idUsuario` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `conteocolecciones`
--
ALTER TABLE `conteocolecciones`
  ADD CONSTRAINT `conteocolecciones_ibfk_1` FOREIGN KEY (`IdAnalisisPastas`) REFERENCES `analisispastas` (`IdAnalisisPastas`);

--
-- Filtros para la tabla `fotosap`
--
ALTER TABLE `fotosap`
  ADD CONSTRAINT `fotosap_ibfk_1` FOREIGN KEY (`IdAnalisisPastas`) REFERENCES `analisispastas` (`IdAnalisisPastas`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
