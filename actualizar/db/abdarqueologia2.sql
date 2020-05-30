/*
 Navicat Premium Data Transfer

 Source Server         : mysql-3306
 Source Server Type    : MySQL
 Source Server Version : 50726
 Source Host           : localhost:3306
 Source Schema         : abdarqueologia

 Target Server Type    : MySQL
 Target Server Version : 50726
 File Encoding         : 65001

 Date: 19/04/2020 21:29:16
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for analisispastas
-- ----------------------------
DROP TABLE IF EXISTS `analisispastas`;
CREATE TABLE `analisispastas` (
  `IdAnalisisPastas` int(4) NOT NULL AUTO_INCREMENT,
  `NumAnalisisPasta` varchar(10) NOT NULL,
  `Fecha` date NOT NULL,
  `Cuadrante` varchar(20) NOT NULL,
  `Sitio` varchar(20) NOT NULL,
  `Patron` varchar(30) NOT NULL,
  `Utme` int(12) NOT NULL,
  `Utmn` int(12) NOT NULL,
  `Latitud` int(5) NOT NULL,
  `Analizo` varchar(40) NOT NULL,
  `Bolsa` varchar(10) NOT NULL,
  `Tipo` varchar(10) NOT NULL,
  `Tratamiento` varchar(100) NOT NULL,
  `Modificacion` varchar(100) NOT NULL,
  `FormasTratamientos` varchar(100) NOT NULL,
  `Peso` double NOT NULL,
  `TotalFragmentos` int(4) NOT NULL,
  `Observaciones` varchar(250) DEFAULT NULL,
  `Estado` varchar(255) NOT NULL,
  PRIMARY KEY (`IdAnalisisPastas`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of analisispastas
-- ----------------------------
BEGIN;
INSERT INTO `analisispastas` VALUES (1, '', '2019-10-02', 'ASXD', 'SDCV', 'SDC', 455, 1458, 565, 'SD', 'AS', 'AS', 'AS', 'ASD', 'AS', 2, 4, 'Café, un par de empanadas y la nueva temporada de American Horror Story. A veces ella me pregunta por qué me gustan las series y películas de terror. La respuesta es siempre la misma: no importa mucho el género, importa la historia y la forma de cont', 'inactivo');
INSERT INTO `analisispastas` VALUES (2, '', '2019-10-27', 'ASXDJ', 'AS', 'ZZ', 785, 147, 874, 'ZX', 'AS', 'AS', 'AS', 'ASD', 'AS', 0.58, 4, 'ASD', 'activo');
INSERT INTO `analisispastas` VALUES (3, '', '2019-10-27', 'ASXDJ', 'AS', 'ZZ', 785, 147, 874, 'ZX', 'AS', 'AS', 'AS', 'ASD', 'AS', 0.58, 4, 'ASD', 'activo');
INSERT INTO `analisispastas` VALUES (4, '', '2019-10-10', 'qwer', 'qwer', 'qwer', 23456, 123, 543, 'qer', 'q3', 'swer', 'sdf', '234t', 'sdre', 0.4, 2, 'ughufhsofhslslslsllslsllslsls', 'activo');
INSERT INTO `analisispastas` VALUES (5, '', '2019-10-10', 'qwer', 'qwer', 'qwer', 23456, 123, 543, 'qer', 'q3', 'swer', 'sdf', '234t', 'sdre', 0.4, 2, 'ughufhsofhslslslsllslsllslsls', 'activo');
INSERT INTO `analisispastas` VALUES (6, '', '2019-10-10', 'qwer', 'qwer', 'qwer', 23456, 123, 543, 'qer', 'q3', 'swer', 'sdf', '234t', 'sdre', 0.4, 2, 'ughufhsofhslslslsllslsllslsls', 'activo');
INSERT INTO `analisispastas` VALUES (7, '', '2019-10-03', 'gtre', 'sdf', 'dsa', 874, 54, 215, 'qwer', 'erty', 'hbvcxz', 'sdf', 'mnb', 'jhvcx', 4, 78, 'aZSDXCFGVBHNJKM', 'activo');
INSERT INTO `analisispastas` VALUES (8, '', '2019-10-03', 'gtre', 'sdf', 'dsa', 874, 54, 215, 'qwer', 'erty', 'hbvcxz', 'sdf', 'mnb', 'jhvcx', 4, 78, 'aZSDXCFGVBHNJKM', 'activo');
INSERT INTO `analisispastas` VALUES (9, '', '2019-10-30', 'ytre', 'qwer', 'asdfgh', 78, 88, 5545, 'sdfg', 'bhnjkm', 'omo', 'jjk', 'qwe', 'ytr', 2.4, 7, 'wert', 'activo');
INSERT INTO `analisispastas` VALUES (10, '77878', '2019-10-04', 'qwer', 'qwe', 'qwer', 787, 5564, 78678, 'qwer', 'qwer', 'qklelknql', 'wsjhjqk', 'qwe4', 'asdfg', 2.4, 7, '23er', 'activo');
COMMIT;

-- ----------------------------
-- Table structure for conteocolecciones
-- ----------------------------
DROP TABLE IF EXISTS `conteocolecciones`;
CREATE TABLE `conteocolecciones` (
  `idConteo` int(250) NOT NULL AUTO_INCREMENT,
  `Material` varchar(20) NOT NULL,
  `ConteoArti` int(100) NOT NULL,
  `Colecto` varchar(70) NOT NULL,
  `Fecha` date NOT NULL,
  `Hora` time(6) NOT NULL,
  `ObservaConteo` varchar(250) DEFAULT NULL,
  `IdAnalisisPastas` int(4) NOT NULL,
  `Estado` varchar(255) NOT NULL,
  PRIMARY KEY (`idConteo`),
  KEY `IdAnalisisPastas` (`IdAnalisisPastas`),
  CONSTRAINT `conteocolecciones_ibfk_1` FOREIGN KEY (`IdAnalisisPastas`) REFERENCES `analisispastas` (`IdAnalisisPastas`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of conteocolecciones
-- ----------------------------
BEGIN;
INSERT INTO `conteocolecciones` VALUES (1, 'Ceramico', 1, 'juan', '2019-11-07', '07:05:00.000000', 'Ob', 1, 'activo');
INSERT INTO `conteocolecciones` VALUES (2, 'Basalto', 1, 'Raúl', '2019-11-19', '05:20:00.000000', 'Ob2', 1, 'activo');
INSERT INTO `conteocolecciones` VALUES (3, 'Ceramico', 1, 'Viridiana', '2019-11-07', '07:05:00.000000', 'Ob', 1, 'activo');
INSERT INTO `conteocolecciones` VALUES (4, 'Ceramico', 1, 'Viridiana', '2019-11-07', '07:05:00.000000', 'Ob', 1, 'activo');
INSERT INTO `conteocolecciones` VALUES (8, '123', 123, '213', '2020-04-19', '21:04:00.000000', '                                132                                                                                                ', 10, 'activo');
COMMIT;

-- ----------------------------
-- Table structure for fotosap
-- ----------------------------
DROP TABLE IF EXISTS `fotosap`;
CREATE TABLE `fotosap` (
  `idImagen` int(6) NOT NULL AUTO_INCREMENT,
  `Foto` blob,
  `IdAnalisisPastas` int(4) DEFAULT NULL,
  PRIMARY KEY (`idImagen`),
  KEY `IdAnalisisPastas` (`IdAnalisisPastas`),
  CONSTRAINT `fotosap_ibfk_1` FOREIGN KEY (`IdAnalisisPastas`) REFERENCES `analisispastas` (`IdAnalisisPastas`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of fotosap
-- ----------------------------
BEGIN;
COMMIT;

-- ----------------------------
-- Table structure for usuarios
-- ----------------------------
DROP TABLE IF EXISTS `usuarios`;
CREATE TABLE `usuarios` (
  `idUsuario` int(250) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(30) NOT NULL,
  `apellido` varchar(30) NOT NULL,
  `contrasena` varchar(30) NOT NULL,
  `cargo` varchar(20) NOT NULL,
  `usuario` varchar(255) NOT NULL,
  PRIMARY KEY (`idUsuario`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of usuarios
-- ----------------------------
BEGIN;
INSERT INTO `usuarios` VALUES (1, 'Fernando', 'Ochoa', '12345', 'Arqueologo', 'prueba');
INSERT INTO `usuarios` VALUES (2, 'Daniela', 'Hernandez', '12345', 'Administrador', 'dany');
INSERT INTO `usuarios` VALUES (3, 'Francisco', 'Hernandez', '12345', 'Administrador', 'fran');
INSERT INTO `usuarios` VALUES (5, 'Luis', 'Guzman', '12345', 'Administrador', 'luis');
INSERT INTO `usuarios` VALUES (6, 'lola', 'lola', 'lola', 'Administrador', 'lola');
COMMIT;

SET FOREIGN_KEY_CHECKS = 1;
