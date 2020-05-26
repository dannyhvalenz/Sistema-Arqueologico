-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 26-05-2020 a las 21:18:17
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
-- Estructura de tabla para la tabla `admins`
--

CREATE TABLE `admins` (
  `idAdmin` int(11) NOT NULL,
  `Nombreadmin` varchar(30) NOT NULL,
  `contrasena` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `admins`
--

INSERT INTO `admins` (`idAdmin`, `Nombreadmin`, `contrasena`) VALUES
(1, 'Admin', '123');

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
  `Observaciones` varchar(250) DEFAULT NULL,
  `Estado` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `analisispastas`
--

INSERT INTO `analisispastas` (`IdAnalisisPastas`, `NumAnalisisPasta`, `Fecha`, `Cuadrante`, `Sitio`, `Patron`, `Utme`, `Utmn`, `Latitud`, `Analizo`, `Bolsa`, `Tipo`, `Tratamiento`, `Modificacion`, `FormasTratamientos`, `Peso`, `TotalFragmentos`, `Observaciones`, `Estado`) VALUES
(1, '100', '2019-10-02', 'ASXDJ', 'AS', 'ZZ', 785, 147, 874, 'ZX', 'AS', 'AS', 'AS', 'ASD', 'AS', 0.58, 17, '        ASDw2777888', 'activo'),
(2, '100', '2019-10-27', 'ASXDJ', 'AS', 'ZZ', 785, 147, 874, 'ZX', 'AS', 'AS', 'AS', 'ASD', 'AS', 0.58, 4, '              ASDw277', 'activo'),
(3, '', '2019-10-27', 'ASXDJ', 'AS', 'ZZ', 785, 147, 874, 'ZX', 'AS', 'AS', 'AS', 'ASD', 'AS', 0.58, 5, '       ASDw2', 'activo'),
(4, '', '2019-10-10', 'qwer', 'qwer', 'qwer', 23456, 123, 543, 'qer', 'q3', 'swer', 'sdf', '234t', 'sdre', 0.4, 2, ' ughufhsofhslslslsllslsllslsls', 'activo'),
(5, '100', '2019-10-10', 'qwer', 'qwer', 'qwer', 23456, 123, 543, 'qer', 'q333333333', 'swer', 'sdf', '234t', 'sdre', 0.4, 2, 'ughufhsofhslslslsllslsllslsls', 'activo'),
(6, '100', '2019-10-10', 'qwer', 'qwer', 'qwer', 23456, 123, 543, 'qer', 'q3', 'swer', 'sdf', '234t', 'sdre', 1.4, 2, 'ughufhsofhslslslsllslsllslsls', 'activo'),
(7, '', '2019-10-03', 'gtre', 'sdf', 'dsa', 874, 54, 215, 'qwer', 'erty', '', 'sdf', 'mnb', 'jhvcx', 4, 78, 'aZSDXCFGVBHNJKM', 'activo'),
(8, '100', '2019-10-03', 'gtre', 'sdf', 'dsa', 874, 54, 215, 'qwer', '1333333333', 'hbvcxz', 'sdf', 'mnb', 'jhvcx', 4.22, 78, 'aZSDXCFGVBHNJKM', 'activo'),
(9, '100', '2019-10-30', 'ytre', 'qwer', 'asdfgh', 78, 88, 5545, 'sdfg', '1', 'omo', 'jjk', 'qwe', 'ytr', 6.4, 7, 'werteeeeeeeeeeeeeeeeeeee', 'activo'),
(10, '77878', '2019-10-04', 'qwer', 'qwe', 'qwer', 787, 5564, 78678, 'qwer', 'qwer', 'qklelknql', 'wsjhjqk', 'qwe4', 'asdfg', 2.4, 7, '23er', 'activo'),
(11, '', '2020-03-20', 'Cuadrante', 'Sitio', 'Patron', 4, 4, 4, 'Nadie', '4', 'Tipo4', 'Trata', 'No hay', 'Formas', 4, 16, 'No hay', 'activo'),
(12, '100', '2019-05-30', 'C4', 'C0.01', 'Aislado', 276097, 2032883, 332, 'Carlos Andres Lopez Berrio', '1', 'B03', 'Erosionado', 'No presenta', 'Cuerpo', 2, 1, 'NO hay', 'activo'),
(25, '100', '2020-03-20', 'CUAa', 'Sitio', 'insnisnsn', 2, 4596, 12, '958', '1', 'eeeeeeeeee', 'Tra', 'jninom', 'kmom', 55, 55, 'momomo', 'activo'),
(26, '100', '2020-03-20', 'CUAa', 'Sitio', 'insnisnsn', 2, 4596, 12, '958', '1', 'ININi', 'Tra', 'jninom', 'kmom', 55, 55, 'momomo', 'activo'),
(27, '100', '2020-03-28', 'cuadrante', 'sitio', 'patron', 2, 5, 6, '8', '16', '13', 'Tratamiento', 'ModificaciÃ³n', 'formas', 5, 2, 'Observaciones', 'activo'),
(28, '100', '2019-10-02', 'ASXD', 'SDCV', 'SDC', 455, 1458, 565, 'SD', '2', 'AS', 'AS', 'ASD', 'AS', 2, 4, 'Prueba de observaciones', 'activo'),
(29, '100', '2020-04-24', 'eee', 'eee', 'eeee', 25, 27, 17, 'Leo', 'bola', 'Tipo', 'Trata', 'Modif', 'Formas', 0.042, 4, 'Obser', 'activo'),
(30, '100', '2020-04-21', 'Saul', 'Saul', 'Saul', 7, 7, 7, 'Sul', 'Bolsa', 'Saul', 'Saul', 'Saul', 'Saul', 4, 4, 'Saul', 'activo'),
(31, '100', '2020-04-30', 'leo', 'leo', 'leo', 4, 5, 5, 'Leonardo', 'Leoo', 'Leo', 'leo', 'leo', 'leo', 0.0016, 4, 'Leo', 'activo'),
(32, '100', '2020-05-01', 'Monse', 'Monse', 'Monse', 6, 7, 5, 'Monse', 'Monse', 'Monse', 'Monse', 'Monse', 'Monse', 0.0009, 4, 'Monse', 'activo'),
(33, '100', '0000-00-00', '', '', '', 0, 0, 0, '', '', '', '', '', '', 0, 0, '', 'inactivo'),
(34, '100', '0000-00-00', '', '', '', 0, 0, 0, '', '', '', '', '', '', 0, 0, '', 'inactivo'),
(35, '100', '0000-00-00', '', '', '', 0, 0, 0, '', '', '', '', '', '', 0, 0, '', 'inactivo'),
(36, '100', '0000-00-00', '', '', '', 0, 0, 0, '', '', '', '', '', '', 0, 0, '', 'inactivo'),
(37, '100', '0000-00-00', '', '', '', 0, 0, 0, '', '', '', '', '', '', 0, 0, '', 'inactivo'),
(38, '100', '0000-00-00', '', '', '', 0, 0, 0, '', '', '', '', '', '', 0, 0, '', 'inactivo'),
(39, '100', '2020-05-27', 'Cuadrante Imagenes', 'SitiosIma', 'imagen', 1589, 165, 15897, 'LeonardoIMa', 'bolson', 'imagen', 'Trata', 'Mod', 'Formasss', 0.0144, 4, 'Obser', 'activo'),
(40, '100', '2020-05-22', 'Imagenes', 'Sito', 'pat', 1654, 5478, 8745, 'analista', 'imagenes', 'tip', 'image', 'modif', 'forma', 0.029, 4, 'Observaciones', 'activo'),
(41, '100', '2020-04-30', 'di', 'sis', 'ksisk', 4, 4, 27, 'a', 'A', 'a', 'a', 'a', 'a', 0.0029, 12, 'Obser', 'activo'),
(42, '100', '2020-05-07', 'C', 's', 'www', 7, 19, 13, 'lkjhtrewq', 'sdfghj', 'dfvc', 'wdcxs', 'efff', 'dds', 0.00018, 11, 'lkjuhygtfrds', 'activo'),
(43, '100', '2020-04-09', 'imagenes', 'ksnns', 'ainsisni', 32, 51, 52, 'imagenes', 'bolsa', 'jsoojd', 'jdoowjmsl', 'onondibx', 'hudibibjk d', 0.0007, 3, 'dndibani', 'activo'),
(44, '100', '2019-12-11', 'cua', 'sisi', 'onsns', 14, 10, 12, 'Anal', 'jnnnlNJNJD', 'JSJSO', 'SISISJ', 'nnosoinsoi', 'inodnois', 0.0002, 11, 'qinhsinisn', 'activo'),
(45, '100', '2020-05-15', 'eww', 'sdsd', 'dssdd', 10, 9, 9, 'sd', '5', '56', '446', '5464', '4456', 531841, 555, '545466', 'activo'),
(46, '100', '2020-05-28', 'ew', 'weww', 'ewwew', 9, 12, 7, 'kkkkk', 'kk', 'jj', 'jjjjjjjjjjjjjjjjjjj', 'jjjjjjjjjjjj', 'jjjjjjjj', 0.00035, 4, 'qwertyuio', 'activo'),
(47, '100', '2020-05-13', 'wwwwwwwwww', 'wwee', 'wewe', 4, 3, 5, 'wdwdw', 'cwdcc', 'wdxw', 'wsd', 'dcxw', 'dxwd', 0.00013, 12, 'wdwdw', 'activo'),
(48, '100', '2020-05-03', 'es', 'es', 'es', 8, 23, 133, 'Esca', 'bols', 'ojwoj', 'jdji', 'jijind', 'inidni', 0.0006, 27, 'Obse', 'activo'),
(49, '100', '2020-05-14', 'eew', 'wcew', 'add', 15, 12, 18, 'aweawee', 'wewaew', 'eaweawe', 'ewewew', 'aasdaad', 'wdqqdd', 0.00042, 19, 'hola', NULL),
(50, '100', '2020-05-08', 'wed', 'dadw', 'wdqw', 14, 19, 12, 'asdfghjk', 'sdfghjk', 'sdfrgthyjk', 'sdfghj', 'asdfghjk', 'sdfgthy', 0.00027, 1452, 'holiwis', 'activo'),
(51, '100', '2020-05-29', 'wd', 'wd', 'sq', 30, 23, 19, 'ann', 'asss', 'qsq', 'sssq', 'dwdA', 'DDDDDDDDDDDDDDDW', 0.00038, 33, ' SW', 'inactivo'),
(52, '100', '2020-05-20', 'sd', 'asds', 'ds', 4545, 4545, 17, 'sderftghjkl', 'asdfghjk', 'sxdcfvgbhn', 'qwerty', 'ertyh', 'ertgyh', 0.00041, 9961, 'kopk', 'inactivo'),
(53, '100', '2020-05-09', 'ejem', 'eemp', 'ejemplo', 5, 4, 4, 'ejemplo', 'jemlp', 'ejeml', 'ejem', 'ejem', 'ejem', 0.00015, 4, 'ejem', 'activo'),
(54, '100', '2020-05-28', 'ejem', 'ejem', 'ejem', 9, 15, 18, 'ejm', 'ejem', 'ejem', 'ejem', 'ejem', 'ejem', 0.00037, 7, 'jemuuu', 'activo'),
(55, '100', '2020-02-02', 'ninin', 'kndinwin', 'mdememd', 4, 11, 13, 'ijsdi', 'dndnwi', 'dkiwdnixns', 'niwidiwjdjow', 'ooow', 'ojmoeo', 0.0004, 33, 'oko', 'activo'),
(56, '100', '2022-02-02', 'dskbcie', 'kidcndinc', 'kndk', 17, 18, 15, 'kwndi', 'dnni', 'dnwibixn', 'dnwindin', 'dniwnidwni', 'neininci', 0.00021, 15, 'dnienincw', 'inactivo'),
(57, '100', '0000-00-00', '', '', '', 0, 0, 0, '', '', '', '', '', '', 0, 0, '', 'inactivo'),
(58, '100', '0000-00-00', '', '', '', 0, 0, 0, '', '', '', '', '', '', 0, 0, '', 'inactivo'),
(59, '100', '0000-00-00', '', '', '', 0, 0, 0, '', '', '', '', '', '', 0, 0, '', 'inactivo'),
(60, '100', '2022-02-04', 'ckid', 'n cninics', 'jec n', 11, 14, 22, 'wndinwi', 'diubibcwi', 'nbsis', 'cnsinsa', 'k dk w', 's nbis', 0.00031, 24, 'wn ix', 'activo'),
(61, '100', '2020-05-15', 'esdrftgyhuj', 'wsedrftgyhujk', 'swdefghyjk', 15, 11, 16, 'dkj is', 'ertyuioiuj', 'dj dn is', 'cidbubsui', 'dnswwihn', 'ninidnwi', 0.00028, 15, ' we4r5t6yui', 'activo'),
(62, '100', '0000-00-00', '', '', '', 0, 0, 0, '', '', '', '', '', '', 0, 0, '', 'inactivo'),
(63, '100', '0000-00-00', '', '', '', 0, 0, 0, '', '', '', '', '', '', 0, 0, '', 'inactivo'),
(64, '100', '2020-05-14', 'we', 'wer', 'qwer', 1, 8, 7, 'efe', 'efe', 'efe', 'efe', 'efef', 'efefe', 0.00017, 1, 'efeffe', 'activo'),
(65, '100', '0000-00-00', '', '', '', 0, 0, 0, '', '', '', '', '', '', 0, 0, '', 'inactivo'),
(66, '100', '0000-00-00', '', '', '', 0, 0, 0, '', '', '', '', '', '', 0, 0, '', 'inactivo'),
(67, '100', '2020-05-21', 'ads', 'sddw', 'defw', 12, 13, 12, 'efefw', 'efwww', 'dwdw', 'dwxw', 'dwwd', 'dww', 0.00019, 5, 'alan we', 'activo'),
(68, '100', '0000-00-00', '', '', '', 0, 0, 0, '', '', '', '', '', '', 0, 0, '', 'inactivo'),
(69, '100', '0000-00-00', '', '', '', 0, 0, 0, '', '', '', '', '', '', 0, 0, '', 'inactivo'),
(70, '100', '0000-00-00', '', '', '', 0, 0, 0, '', '', '', '', '', '', 0, 0, '', 'inactivo'),
(71, '100', '0000-00-00', '', '', '', 0, 0, 0, '', '', '', '', '', '', 0, 0, '', 'inactivo'),
(72, '100', '0000-00-00', '', '', '', 0, 0, 0, '', '', '', '', '', '', 0, 0, '', 'inactivo'),
(73, '100', '0000-00-00', '', '', '', 0, 0, 0, '', '', '', '', '', '', 0, 0, '', 'inactivo'),
(74, '100', '2020-05-16', 'ejemp', 'ijii', 'ninei', 6, 10, 9, 'jbjue', 'swww', 'iwiwi', 'ieihei', 'ijiejhe', 'iene', 0.00015, 14, 'oloooooooooooooo', 'activo'),
(75, '100', '0000-00-00', '', '', '', 0, 0, 0, '', '', '', '', '', '', 0, 0, '', 'inactivo'),
(76, '100', '0000-00-00', '', '', '', 0, 0, 0, '', '', '', '', '', '', 0, 0, '', 'inactivo'),
(77, '100', '0000-00-00', '', '', '', 0, 0, 0, '', '', '', '', '', '', 0, 0, '', 'inactivo'),
(78, '100', '2020-05-14', 'qwe', 'werf', '2wer', 7, 16, 32, 'qwsedfrg', 'qw.sedf', 'wedfv', 'wedrfg', 'wedrf', 'wedrf', 0.00052, 37, '3 imagenes', 'activo'),
(79, '100', '0000-00-00', '', '', '', 0, 0, 0, '', '', '', '', '', '', 0, 0, '', 'inactivo'),
(80, '100', '0000-00-00', '', '', '', 0, 0, 0, '', '', '', '', '', '', 0, 0, '', 'inactivo'),
(81, '100', '2020-05-06', 'gh', 'jub', 'ubi', 55, 21, 14, 'ertyuik', 'fghjkl', 'ghj', 'ghjk', 'ghjk', 'hjkb', 0.00041, 21, 'erctvybunim', 'activo'),
(82, '100', '0000-00-00', '', '', '', 0, 0, 0, '', '', '', '', '', '', 0, 0, '', 'inactivo'),
(83, '100', '0000-00-00', '', '', '', 0, 0, 0, '', '', '', '', '', '', 0, 0, '', 'inactivo'),
(84, '100', '0000-00-00', '', '', '', 0, 0, 0, '', '', '', '', '', '', 0, 0, '', 'inactivo'),
(85, '100', '2020-05-05', 'gvbnj', 'hbuhbub', 'uybubu', 19, 26, 25, 'jn  j ninin', 'innmini', 'inini', 'ninini', 'inini', 'ninini', 0.00032, 18, 'nininiininiinni', 'activo'),
(86, '100', '2020-05-05', 'ertyuio', 'WWUWUWU', 'NSISISIISIB', 16, 18, 21, 'UVEUEUWB', 'ERFG', 'RTINEIENIE', 'EBUUBBSKKAKJKJ', 'ENJIINSNS', 'EUBEUBEB', 0.00033, 12, 'inwiwniwin', 'activo'),
(87, '100', '2020-05-13', 'eeef', 'eee', 'efe', 12, 9, 6, 'eererererer', 'eeettee', 'etreef', 'etete', 'dsr', 'fdddd', 0.00042, 25, 'ertgyhujikl', 'activo'),
(88, '100', '2020-04-29', 'asdfghjk', 'sdfghjk', 'SDFGHJK', 2, 7, 9, 'wsedrftgh', 'wsedrftg', 'ertgy', 'edrftgyhj', 'edrftg', 'werftg', 0.00029, 15, 'wertyuikol', 'activo'),
(89, '100', '0000-00-00', '', '', '', 0, 0, 0, '', '', '', '', '', '', 0, 0, '', 'activo'),
(90, '100', '2020-05-12', 'qwedrfgthyjk', 'sdfghj', 'sdfghjk', 9, 13, 7, 'retyu', 'sdfghj', 'fghj', 'dfghjk', 'dfghjk', 'frgthjk', 0.00026, 14, 'ertyyyyy', 'activo'),
(91, '100', '0000-00-00', '', '', '', 0, 0, 0, '', '', '', '', '', '', 0, 0, '', 'activo'),
(92, '100', '2020-05-28', 'sdefrtghyjuk', 'sdefrgthyjukl.-', 'sdfgthyjk', 10, 7, 6, 'ertyujkilÃ±', 'sdfghjk', 'dfghj', 'sdfghjkl.s', 'dertyu', 'werty', 0.00001, 2, 'fghjkl', 'activo'),
(93, '100', '2020-05-14', 'dfg', 'derftghy', 'sdefrgth', 8, 15, 23, 'drff', 'fdsa', 'sdfgh', 'sdfrtgyhjk', 'awsedrftgh', 'sdefrtg', 0.00016, 14, 'wer5t6yuiolÃ±', 'activo'),
(94, '100', '2020-02-02', 'edfgh', 'bjbjbj', 'njj j', 8, 2, 2, 'wef', 'wed', 'edd', 'deee', 'ee', 'eede', 0.00017, 1, 'wed', 'activo'),
(95, '100', '2020-05-20', 'w3ert', 'we', 'wer', 4, 1, 11, 'dfghjkl', 'aswertyj', 'sdfr', 'asdefrtgyhjuk', 'sdfghj', 'sdfg', 0.00025, 9, 'rtyuikloÃ±', 'activo'),
(96, '100', '2020-05-06', 'asdf', 'sdfg', 'sdfg', 4, 11, 8, 'ytrew', 'tyjklw', 'wwwwwwww', 'ertytree', 'rewertytrew', 'wertr', 0.00007, 14, 'frtyuikl', 'activo'),
(97, '100', '2020-05-24', 'sdf', 'sdfg', 'dfg', 3, 8, 4, 'ghjk', 'sdfg', 'dfg', 'sdfg', 'dfgh', 'fgh', 0.0002, 4, 'fdes', 'activo'),
(98, '100', '2020-01-01', 'werfg', 'hbbhh', 'hj bhjhj', 1, 2, 8, 'wef', 'wedf', 'edfv', 'wedf', 'edf', 'wedrf', 0.00007, 5, 'erftgwwwwwwrwwwrrw', 'activo'),
(99, '100', '2021-02-03', 'ddf', 'dfd', 'efe', 9, 9, 4, 'tyuiol', 'fghj', 'fghj', 'fghjm', 'fgh', 'fghj', 0.00009, 15, 'rtyhujikolpÃ±o', 'activo'),
(100, '100', '2020-05-22', 'swdefg', 'werfg', 'wefg', 3, 3, 3, 'rtyhujk', 'ghjk', 'ghjkl', 'fghjk', 'fghj', 'hj', 0.00017, 11, 'gtre3w', 'activo'),
(101, '100', '2020-05-08', 'qw', 'eqwe', 'qwe', 13, 10, 10, 'hytrew', 'qwerfg', 'wedfg', 'sdf', 'sdf', 'sdf', 0.00015, 8, '101', 'activo'),
(102, '100', '0000-00-00', '', '', '', 0, 0, 0, '', '', '', '', '', '', 0, 0, '', 'inactivo'),
(103, '100', '0000-00-00', '', '', '', 0, 0, 0, '', '', '', '', '', '', 0, 0, '', 'inactivo'),
(104, '100', '0000-00-00', '', '', '', 0, 0, 0, '', '', '', '', '', '', 0, 0, '', 'inactivo'),
(105, '100', '0000-00-00', '', '', '', 0, 0, 0, '', '', '', '', '', '', 0, 0, '', 'activo'),
(106, '100', '0000-00-00', '', '', '', 0, 0, 0, '', '', '', '', '', '', 0, 0, '', 'activo'),
(107, '100', '0000-00-00', '', '', '', 0, 0, 0, '', '', '', '', '', '', 0, 0, '', 'activo'),
(108, '100', '0000-00-00', '', '', '', 0, 0, 0, '', '', '', '', '', '', 0, 0, '', 'activo'),
(109, '100', '0000-00-00', '', '', '', 0, 0, 0, '', '', '', '', '', '', 0, 0, '', 'activo'),
(110, '100', '0000-00-00', '', '', '', 0, 0, 0, '', '', '', '', '', '', 0, 0, '', 'activo'),
(111, '100', '0000-00-00', '', '', '', 0, 0, 0, '', '', '', '', '', '', 0, 0, '', 'activo'),
(112, '100', '0000-00-00', '', '', '', 0, 0, 0, '', '', '', '', '', '', 0, 0, '', 'inactivo'),
(113, '100', '0000-00-00', '', '', '', 0, 0, 0, '', '', '', '', '', '', 0, 0, '', 'activo'),
(114, '100', '2020-05-09', 'qe', 'qweq', 'qwsedrfgthj', 9, 13, 10, 'dfghjkl', 'sdfghj', 'dfgh', 'sdfgh', 'asdfgh', 'dfghj', 0.00025, 12, 'qwertyuikl', 'activo'),
(115, '100', '0000-00-00', '', '', '', 0, 0, 0, '', '', '', '', '', '', 0, 0, '', 'activo'),
(116, '100', '0000-00-00', '', '', '', 0, 0, 0, '', '', '', '', '', '', 0, 0, '', 'inactivo'),
(117, '100', '0000-00-00', '', '', '', 0, 0, 0, '', '', '', '', '', '', 0, 0, '', 'inactivo'),
(118, '100', '0000-00-00', '', '', '', 0, 0, 0, '', '', '', '', '', '', 0, 0, '', 'inactivo'),
(119, '100', '2020-05-08', 'wer', '', '', 0, 0, 0, '', '', '', '', '', '', 0, 0, '', 'inactivo'),
(120, '100', '2020-05-15', 'werft', 'werfq', 'wef', 13, 15, 5, 'ip', 'wefv', 'werf', 'qwerfg', 'werfg', 'werfg', 0.00044, 35, 'werfg', 'activo'),
(121, '100', '2020-01-01', 'qwer', 'qwer', 'qwer', 7, 9, 8, 'oi', 'imgporfa', 'we', 'we', 'qwed', 'qwed', 0.00015, 16, 'ertyhjk', 'activo'),
(122, '100', '2020-05-13', 'y6t5r4e3wqq', 'wertyui', 'qwerty', 9, 18, 5, 'fdsa', 'qw', 'wq', 'wq', 'w', 'w', 0.0002, 18, 'kjhgfdsa', 'activo'),
(123, '100', '2020-05-13', 'ssdfg', 'sdfgbn', 'fghn', 22, 13, 3, 'kjhgfds', 'sdfghjk', 'wertghj', 'swdefg', 'defg', 'fg', 0.00015, 17, 'jhgfd', 'activo'),
(124, '100', '2020-05-14', 'qwqqq', 'qqqq', 'qqqq', 11, 11, 14, 'qwqqqq', 'qqq', 'qqqq', 'qqq', 'qqqqq', 'qqq', 0.0005, 2, 'ewwwwwww', 'activo'),
(125, '100', '2020-05-16', 'asdfga', 'sdfga', 'sdfg', 10, 12, 10, 'sa', 'sdfg', 'erfg', 'wedfrg', 'edfr', 'edfrg', 0.00013, 10, 'gfds', 'activo'),
(126, '100', '2020-05-14', 'qwe', 'qwer', 'wef', 11, 10, 2, 'ert', 'qwd', 'de', 'jhgfd', 'hbbbbbbb', 'bbbbbbbbb', 0.0003, 4, 'imagenesprueba', 'activo'),
(127, '100', '2020-05-22', 'swdfgh', 'defrghd', 'fgh', 10, 5, 13, 'jhgf', 'qwqqw', 'qwwq', 'aaaaaaaaaaa', 'aaaaaaa', 'aaaaa', 0.00027, 13, 'eeeee', 'activo'),
(128, '100', '2020-05-18', 'werty', 'rftghyj', 'fgh', 6, 8, 1, 'gfds', 'sdfg', 'fgh', 'fgh', 'fg', 'gh', 0.00012, 18, '  sssss hulk', 'activo'),
(129, '100', '2020-05-15', 'qqwqw', 'qwqwq', 'qwqwq', 4, 3, 3, 'erg', 'gggg', 'ggg', 'ggg', 'ggg', 'gggg', 0.0002, 6, ' lllll', 'activo'),
(130, '100', '2020-05-16', 'www', 'wwww', 'www', 14, 6, 7, 'gfdsa', 'asdf', 'fd', 'dfg', 'dfgvb', 'fff', 0.0003, 4, 'axis', 'activo'),
(131, '100', '2020-05-15', 'qw', 'wq', 'wqw', 5, 3, 2, 'pruebaAnalisis', '14', 'ee', 'qw', 'qw', 'qw', 0.00003, 4, 'prueba analsiisis', 'activo'),
(132, '100', '2020-05-14', 'we', 'ww', 'qw', 7, 14, 8, 'qwer', 'zdzd', 'zczxc', 'cscsc', 'sfsfs', 'fsfssd', 0.00035, 25, 'qwe', 'activo'),
(133, '100', '0000-00-00', '', '', '', 0, 0, 0, '', '', '', '', '', '', 0, 0, '', 'inactivo'),
(134, '100', '0000-00-00', '', '', '', 0, 0, 0, '', '', '', '', '', '', 0, 0, '', 'inactivo'),
(135, '100', '0000-00-00', '', '', '', 0, 0, 0, '', '', '', '', '', '', 0, 0, '', 'inactivo'),
(137, '100', '2020-05-22', 'qw', 'qws', 'qws', 10, 14, 7, 'xzzx', 'zxzxzx', 'xzxzxz', 'zxzz', 'zzxzx', 'zxxzxz', 0.0001, 13, 'xzzx137', 'activo'),
(138, '100', '2020-05-27', 'qw', 'qwe', 'qwe', 11, 15, 3, 'qaZ', 'aaa', 'aaaa', 'aaaa', 'aaaaa', 'aaa', 0.00033, 20, '137', 'activo'),
(139, '100', '2020-06-03', 'wq', 'qw', 'qw', 7, 13, 12, 'aaa', 'aaaaaa', 'aaaaaaa', 'aaaaaaaaaa', 'qqqwqw', 'qwqwq', 0.00014, 11, '139', 'activo'),
(140, '100', '0000-00-00', '', '', '', 0, 0, 0, '', '', '', '', '', '', 0, 0, '', 'activo'),
(141, '100', '2020-05-20', 'we', 'wer', 'wer', 4, 3, 3, 'hgfds', 'qwsd', 'qwsed', 'wsedf', 'wedf', 'wedf', 0.00002, 14, 'hhh', 'activo'),
(142, '100', '2020-05-21', 'w', 'ss', 'eee', 1, 5, 3, 'jhgfds', 'asd', 'dfv', 'sdc', 'sdcs', 'x', 0.00004, 3, 'cami', 'activo'),
(143, '100', '2020-06-04', 'rf', 'gttyt', 'yttyy', 5, 4, 3, 'Ã±lkj', 'hjjh', 'hj', 'jhg', 'hhh', 'hy', 0.00004, 3, '.,mjh', 'activo'),
(144, '100', '2020-05-22', 'qwsd', 'wsd', 'sd', 2, 3, 3, 'tfds', 'asd', 'sd', 'sdf', 'sdf', 'sdcf', 0.00012, 25, 'gfds', 'activo'),
(145, '100', '2020-05-15', 'asd', 'sd', 'asd', 13, 2, 3, 'jj', 'hnnhnhnh', 'hnhn', 'hhnhhh', 'hhhn', 'hnhn', 0.00002, 4, 'jh', 'activo'),
(146, '100', '2020-05-20', 'erg', 'wsd', 'sd', 4, 8, 4, 'kkk', 'hgfd', 'sd', 'as', 'ssss', 'sss', 0.00004, 0, 'tgtttttttttttttttttttttttttttt', 'activo');

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
  `IdAnalisisPastas` int(4) DEFAULT NULL,
  `Estado` varchar(9) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `conteocolecciones`
--

INSERT INTO `conteocolecciones` (`idConteo`, `Material`, `ConteoArti`, `Colecto`, `Fecha`, `Hora`, `ObservaConteo`, `IdAnalisisPastas`, `Estado`) VALUES
(1, 'Basalto', 1, 'coleccion', '2020-04-28', '10:09:00.000000', '                                ob                                                ', 7, 'activo'),
(2, 'ow', 6, 'ubi', '2020-05-31', '13:01:00.000000', '                                uber                        ', 1, 'activo'),
(4, 'Basalto', 1, 'coleccion', '2020-04-28', '10:09:00.000000', '                                                                ob                                                ', 5, 'activo'),
(5, 'ow', 6, 'ubi', '2020-05-31', '13:01:00.000000', '                                                                                                uber                                                                        ', 6, 'activo'),
(6, 'ejemplo', 11, 'Leo', '2020-05-25', '13:02:00.000000', 'hola                        ', 25, 'activo'),
(7, 'Basalto 8', 5, 'Leo', '2020-05-06', '13:00:00.000000', 'ninguna                        ', 12, 'activo'),
(8, 'Basalto', 1, 'coleccion', '2020-04-28', '10:09:00.000000', 'ob', 1, 'activo');

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
  `nombre` varchar(30) NOT NULL,
  `apellido` varchar(30) NOT NULL,
  `usuario` varchar(20) NOT NULL,
  `contrasena` varchar(30) NOT NULL,
  `cargo` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`idUsuario`, `nombre`, `apellido`, `usuario`, `contrasena`, `cargo`) VALUES
(2, 'Usuario78', 'User Urss', 'Usuario8', '1234', 'Arqueologo'),
(3, 'Rafael', 'Vela Ortega', 'Raf', 'abc123', 'Arqueologo'),
(4, 'Leonardo', 'Galicia', 'Leo', '159', 'Administrador'),
(5, 'Orlando', 'Martz', 'Usuario6', '123abc', 'Arqueologo'),
(6, 'Armando', 'Artillo', 'Usuario5', '1568', 'Arqueologo'),
(7, 'Dora', 'La Exploradora', 'Botas', '1234', 'Arqueologo'),
(8, 'Fidu', 'Hola', 'Usuario4', '1519', 'Arqueologo'),
(9, 'Hugo', 'Valdez', 'Usuario3', '123', 'Arqueologo'),
(10, 'Prueba2', 'Prueba2', 'Usuario2', '123', 'Administrador'),
(11, 'Quin', 'Ti', 'usuario1', 'qq', 'Arqueologo'),
(13, 'Leonardo', 'Galicia', 'Saul', '1234', 'Arqueologo'),
(14, 'Liz', 'Hrz', 'liz', '159', 'Arqueologo'),
(15, 'Riquelme', 'Mendoza', 'rique', '123', 'Administrador'),
(16, 'Gibrann', 'Ejemplo', 'gibrann', '12345', 'Arqueologo'),
(17, 'Usuario3', 'e', 'ee', 'ee', 'Arqueologo');

-- --------------------------------------------------------

--
-- Estructura Stand-in para la vista `vistafecha`
-- (Véase abajo para la vista actual)
--
CREATE TABLE `vistafecha` (
`IdAnalisisPastas` int(4)
,`DATE_FORMAT(Fecha, "%d/%m/%Y")` varchar(10)
,`Cuadrante` varchar(20)
,`Sitio` varchar(20)
,`Patron` varchar(30)
,`Utme` int(12)
,`Utmn` int(12)
,`Latitud` int(5)
,`Analizo` varchar(40)
,`Bolsa` varchar(10)
,`Tipo` varchar(10)
,`Tratamiento` varchar(100)
,`Modificacion` varchar(100)
,`FormasTratamientos` varchar(100)
,`Peso` double
,`TotalFragmentos` int(4)
,`Observaciones` varchar(250)
,`Estado` varchar(15)
);

-- --------------------------------------------------------

--
-- Estructura Stand-in para la vista `vista_analisis`
-- (Véase abajo para la vista actual)
--
CREATE TABLE `vista_analisis` (
`IdAnalisisPastas` int(4)
,`NumAnalisisPasta` varchar(10)
,`Fecha` date
,`Cuadrante` varchar(20)
,`Sitio` varchar(20)
,`Patron` varchar(30)
,`Utme` int(12)
,`Utmn` int(12)
,`Latitud` int(5)
,`Analizo` varchar(40)
,`Bolsa` varchar(10)
,`Tipo` varchar(10)
,`Tratamiento` varchar(100)
,`Modificacion` varchar(100)
,`FormasTratamientos` varchar(100)
,`Peso` double
,`TotalFragmentos` int(4)
,`Observaciones` varchar(250)
,`Estado` varchar(15)
);

-- --------------------------------------------------------

--
-- Estructura Stand-in para la vista `vista_analisis2`
-- (Véase abajo para la vista actual)
--
CREATE TABLE `vista_analisis2` (
`NumAnalisisPasta` varchar(10)
,`DATE_FORMAT(Fecha, "%d/%m/%Y")` varchar(10)
,`Cuadrante` varchar(20)
,`Sitio` varchar(20)
,`Patron` varchar(30)
,`Utme` int(12)
,`Utmn` int(12)
,`Latitud` int(5)
,`Analizo` varchar(40)
,`Bolsa` varchar(10)
,`Tipo` varchar(10)
,`Tratamiento` varchar(100)
,`Modificacion` varchar(100)
,`FormasTratamientos` varchar(100)
,`Peso` double
,`TotalFragmentos` int(4)
,`Observaciones` varchar(250)
);

-- --------------------------------------------------------

--
-- Estructura Stand-in para la vista `vista_conteo`
-- (Véase abajo para la vista actual)
--
CREATE TABLE `vista_conteo` (
`idConteo` int(250)
,`Utme` int(12)
,`Utmn` int(12)
,`Latitud` int(5)
,`Bolsa` varchar(10)
,`Material` varchar(20)
,`ConteoArti` int(100)
,`Patron` varchar(30)
,`Colecto` varchar(70)
,`Fecha` date
,`Hora` time(6)
,`Analizo` varchar(40)
,`ObservaConteo` varchar(250)
,`IdAnalisisPastas` int(4)
);

-- --------------------------------------------------------

--
-- Estructura Stand-in para la vista `vista_conteo2`
-- (Véase abajo para la vista actual)
--
CREATE TABLE `vista_conteo2` (
`Utme` int(12)
,`Utmn` int(12)
,`Latitud` int(5)
,`Bolsa` varchar(10)
,`Material` varchar(20)
,`ConteoArti` int(100)
,`Patron` varchar(30)
,`Colecto` varchar(70)
,`Fecha` date
,`Hora` time(6)
,`Analizo` varchar(40)
,`ObservaConteo` varchar(250)
,`IdAnalisisPastas` int(4)
);

-- --------------------------------------------------------

--
-- Estructura Stand-in para la vista `vista_conteo3`
-- (Véase abajo para la vista actual)
--
CREATE TABLE `vista_conteo3` (
`idConteo` int(250)
,`Material` varchar(20)
,`ConteoArti` int(100)
,`Colecto` varchar(70)
,`Fecha` date
,`Hora` time(6)
,`ObservaConteo` varchar(250)
);

-- --------------------------------------------------------

--
-- Estructura para la vista `vistafecha`
--
DROP TABLE IF EXISTS `vistafecha`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `vistafecha`  AS  select `analisispastas`.`IdAnalisisPastas` AS `IdAnalisisPastas`,date_format(`analisispastas`.`Fecha`,'%d/%m/%Y') AS `DATE_FORMAT(Fecha, "%d/%m/%Y")`,`analisispastas`.`Cuadrante` AS `Cuadrante`,`analisispastas`.`Sitio` AS `Sitio`,`analisispastas`.`Patron` AS `Patron`,`analisispastas`.`Utme` AS `Utme`,`analisispastas`.`Utmn` AS `Utmn`,`analisispastas`.`Latitud` AS `Latitud`,`analisispastas`.`Analizo` AS `Analizo`,`analisispastas`.`Bolsa` AS `Bolsa`,`analisispastas`.`Tipo` AS `Tipo`,`analisispastas`.`Tratamiento` AS `Tratamiento`,`analisispastas`.`Modificacion` AS `Modificacion`,`analisispastas`.`FormasTratamientos` AS `FormasTratamientos`,`analisispastas`.`Peso` AS `Peso`,`analisispastas`.`TotalFragmentos` AS `TotalFragmentos`,`analisispastas`.`Observaciones` AS `Observaciones`,`analisispastas`.`Estado` AS `Estado` from `analisispastas` where (`analisispastas`.`Estado` = 'activo') ;

-- --------------------------------------------------------

--
-- Estructura para la vista `vista_analisis`
--
DROP TABLE IF EXISTS `vista_analisis`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `vista_analisis`  AS  select `analisispastas`.`IdAnalisisPastas` AS `IdAnalisisPastas`,`analisispastas`.`NumAnalisisPasta` AS `NumAnalisisPasta`,`analisispastas`.`Fecha` AS `Fecha`,`analisispastas`.`Cuadrante` AS `Cuadrante`,`analisispastas`.`Sitio` AS `Sitio`,`analisispastas`.`Patron` AS `Patron`,`analisispastas`.`Utme` AS `Utme`,`analisispastas`.`Utmn` AS `Utmn`,`analisispastas`.`Latitud` AS `Latitud`,`analisispastas`.`Analizo` AS `Analizo`,`analisispastas`.`Bolsa` AS `Bolsa`,`analisispastas`.`Tipo` AS `Tipo`,`analisispastas`.`Tratamiento` AS `Tratamiento`,`analisispastas`.`Modificacion` AS `Modificacion`,`analisispastas`.`FormasTratamientos` AS `FormasTratamientos`,`analisispastas`.`Peso` AS `Peso`,`analisispastas`.`TotalFragmentos` AS `TotalFragmentos`,`analisispastas`.`Observaciones` AS `Observaciones`,`analisispastas`.`Estado` AS `Estado` from `analisispastas` where (`analisispastas`.`Estado` = 'activo') ;

-- --------------------------------------------------------

--
-- Estructura para la vista `vista_analisis2`
--
DROP TABLE IF EXISTS `vista_analisis2`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `vista_analisis2`  AS  select `analisispastas`.`NumAnalisisPasta` AS `NumAnalisisPasta`,date_format(`analisispastas`.`Fecha`,'%d/%m/%Y') AS `DATE_FORMAT(Fecha, "%d/%m/%Y")`,`analisispastas`.`Cuadrante` AS `Cuadrante`,`analisispastas`.`Sitio` AS `Sitio`,`analisispastas`.`Patron` AS `Patron`,`analisispastas`.`Utme` AS `Utme`,`analisispastas`.`Utmn` AS `Utmn`,`analisispastas`.`Latitud` AS `Latitud`,`analisispastas`.`Analizo` AS `Analizo`,`analisispastas`.`Bolsa` AS `Bolsa`,`analisispastas`.`Tipo` AS `Tipo`,`analisispastas`.`Tratamiento` AS `Tratamiento`,`analisispastas`.`Modificacion` AS `Modificacion`,`analisispastas`.`FormasTratamientos` AS `FormasTratamientos`,`analisispastas`.`Peso` AS `Peso`,`analisispastas`.`TotalFragmentos` AS `TotalFragmentos`,`analisispastas`.`Observaciones` AS `Observaciones` from (`analisispastas` join `conteocolecciones` on((`analisispastas`.`IdAnalisisPastas` = `conteocolecciones`.`IdAnalisisPastas`))) where (`analisispastas`.`Estado` = 'activo') ;

-- --------------------------------------------------------

--
-- Estructura para la vista `vista_conteo`
--
DROP TABLE IF EXISTS `vista_conteo`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `vista_conteo`  AS  select `c`.`idConteo` AS `idConteo`,`a`.`Utme` AS `Utme`,`a`.`Utmn` AS `Utmn`,`a`.`Latitud` AS `Latitud`,`a`.`Bolsa` AS `Bolsa`,`c`.`Material` AS `Material`,`c`.`ConteoArti` AS `ConteoArti`,`a`.`Patron` AS `Patron`,`c`.`Colecto` AS `Colecto`,`c`.`Fecha` AS `Fecha`,`c`.`Hora` AS `Hora`,`a`.`Analizo` AS `Analizo`,`c`.`ObservaConteo` AS `ObservaConteo`,`a`.`IdAnalisisPastas` AS `IdAnalisisPastas` from (`conteocolecciones` `c` join `analisispastas` `a` on((`a`.`IdAnalisisPastas` = `c`.`IdAnalisisPastas`))) where (`c`.`Estado` = 'activo') ;

-- --------------------------------------------------------

--
-- Estructura para la vista `vista_conteo2`
--
DROP TABLE IF EXISTS `vista_conteo2`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `vista_conteo2`  AS  select `a`.`Utme` AS `Utme`,`a`.`Utmn` AS `Utmn`,`a`.`Latitud` AS `Latitud`,`a`.`Bolsa` AS `Bolsa`,`c`.`Material` AS `Material`,`c`.`ConteoArti` AS `ConteoArti`,`a`.`Patron` AS `Patron`,`c`.`Colecto` AS `Colecto`,`c`.`Fecha` AS `Fecha`,`c`.`Hora` AS `Hora`,`a`.`Analizo` AS `Analizo`,`c`.`ObservaConteo` AS `ObservaConteo`,`c`.`IdAnalisisPastas` AS `IdAnalisisPastas` from (`conteocolecciones` `c` join `analisispastas` `a` on((`a`.`IdAnalisisPastas` = `c`.`IdAnalisisPastas`))) where (`c`.`Estado` = 'activo') ;

-- --------------------------------------------------------

--
-- Estructura para la vista `vista_conteo3`
--
DROP TABLE IF EXISTS `vista_conteo3`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `vista_conteo3`  AS  select `conteocolecciones`.`idConteo` AS `idConteo`,`conteocolecciones`.`Material` AS `Material`,`conteocolecciones`.`ConteoArti` AS `ConteoArti`,`conteocolecciones`.`Colecto` AS `Colecto`,`conteocolecciones`.`Fecha` AS `Fecha`,`conteocolecciones`.`Hora` AS `Hora`,`conteocolecciones`.`ObservaConteo` AS `ObservaConteo` from `conteocolecciones` where (`conteocolecciones`.`Estado` = 'activo') ;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`idAdmin`);

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
-- AUTO_INCREMENT de la tabla `admins`
--
ALTER TABLE `admins`
  MODIFY `idAdmin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `analisispastas`
--
ALTER TABLE `analisispastas`
  MODIFY `IdAnalisisPastas` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=147;

--
-- AUTO_INCREMENT de la tabla `conteocolecciones`
--
ALTER TABLE `conteocolecciones`
  MODIFY `idConteo` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `fotosap`
--
ALTER TABLE `fotosap`
  MODIFY `idImagen` int(6) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `idUsuario` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

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
