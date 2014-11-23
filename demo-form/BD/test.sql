/*
Navicat MySQL Data Transfer

Source Server         : LOCAL
Source Server Version : 50620
Source Host           : 127.0.0.1:3306
Source Database       : test

Target Server Type    : MYSQL
Target Server Version : 50620
File Encoding         : 65001

Date: 2014-11-23 01:57:29
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for usuario
-- ----------------------------
DROP TABLE IF EXISTS `usuario`;
CREATE TABLE `usuario` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nombre` varchar(255) DEFAULT NULL,
  `apellidos` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `estado` tinyint(3) unsigned DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=38 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of usuario
-- ----------------------------
INSERT INTO `usuario` VALUES ('1', 'Armando Enrique', 'Pisfil Puemape', 'armandoaepp@gmail.com', '1234', '1');
INSERT INTO `usuario` VALUES ('2', 'Enrique 1', 'Puemape 2', 'correo1', '1', '1');
INSERT INTO `usuario` VALUES ('3', 'Armando 2', 'Pisfil 2', 'correo2', '2', '1');
INSERT INTO `usuario` VALUES ('4', 'Enrique 2', 'Puemape 3', 'correo3', '3', '1');
INSERT INTO `usuario` VALUES ('5', 'Armando 3', 'Pisfil 3', 'correo4', '4', '1');
INSERT INTO `usuario` VALUES ('6', 'Enrique 3', 'Puemape 4', 'correo5', '5', '1');
INSERT INTO `usuario` VALUES ('7', 'Armando 4', 'Pisfil 4', 'correo6', '6', '1');
INSERT INTO `usuario` VALUES ('8', 'Enrique 4', 'Puemape 5', 'correo7', '7', '1');
INSERT INTO `usuario` VALUES ('9', 'Armando 5', 'Pisfil 5', 'correo8', '8', '1');
INSERT INTO `usuario` VALUES ('10', 'Enrique 5', 'Puemape 6', 'correo9', '9', '1');
INSERT INTO `usuario` VALUES ('11', 'Armando 6', 'Pisfil 6', 'correo10', '10', '1');
INSERT INTO `usuario` VALUES ('12', 'Enrique 6', 'Puemape 7', 'correo11', '11', '1');
INSERT INTO `usuario` VALUES ('13', 'Armando 7', 'Pisfil 7', 'correo12', '12', '1');
INSERT INTO `usuario` VALUES ('14', 'Enrique 7', 'Puemape 8', 'correo13', '13', '1');
INSERT INTO `usuario` VALUES ('15', 'Armando 8', 'Pisfil 8', 'correo14', '14', '1');
INSERT INTO `usuario` VALUES ('16', 'Enrique 8', 'Puemape 9', 'correo15', '15', '1');
INSERT INTO `usuario` VALUES ('17', 'Armando 9', 'Pisfil 9', 'correo16', '16', '1');
INSERT INTO `usuario` VALUES ('18', 'Enrique 9', 'Puemape 10', 'correo17', '17', '1');
INSERT INTO `usuario` VALUES ('19', 'Armando 10', 'Pisfil 10', 'correo18', '18', '1');
INSERT INTO `usuario` VALUES ('20', 'Enrique 10', 'Puemape 11', 'correo19', '19', '1');
INSERT INTO `usuario` VALUES ('21', 'Armando 11', 'Pisfil 11', 'correo20', '20', '1');
INSERT INTO `usuario` VALUES ('22', 'Enrique 11', 'Puemape 12', 'correo21', '21', '1');
INSERT INTO `usuario` VALUES ('23', 'Armando 12', 'Pisfil 12', 'correo22', '22', '1');
INSERT INTO `usuario` VALUES ('24', 'Enrique 12', 'Puemape 13', 'correo23', '23', '1');
INSERT INTO `usuario` VALUES ('25', 'Armando 13', 'Pisfil 13', 'correo24', '24', '1');
INSERT INTO `usuario` VALUES ('26', 'Enrique 13', 'Puemape 14', 'correo25', '25', '1');
INSERT INTO `usuario` VALUES ('27', 'Armando 14', 'Pisfil 14', 'correo26', '26', '1');
INSERT INTO `usuario` VALUES ('28', 'Enrique 14', 'Puemape 15', 'correo27', '27', '1');
INSERT INTO `usuario` VALUES ('29', 'Armando 15', 'Pisfil 15', 'correo28', '28', '1');
INSERT INTO `usuario` VALUES ('30', 'Enrique 15', 'Puemape 16', 'correo29', '29', '1');
INSERT INTO `usuario` VALUES ('31', 'Enrique 2', 'Puemape 3', 'correo30', '30', '1');
INSERT INTO `usuario` VALUES ('32', 'Armando 3', 'Pisfil 3', 'correo31', '31', '1');
INSERT INTO `usuario` VALUES ('33', 'Enrique 3', 'Puemape 4', 'correo32', '32', '1');
INSERT INTO `usuario` VALUES ('34', 'Armando 4', 'Pisfil 4', 'correo33', '33', '1');
INSERT INTO `usuario` VALUES ('35', 'Enrique 4', 'Puemape 5', 'correo34', '34', '1');
INSERT INTO `usuario` VALUES ('36', 'Armando 5', 'Pisfil 5', 'correo35', '35', '1');
INSERT INTO `usuario` VALUES ('37', 'Enrique 5', 'Puemape 6', 'correo36', '36', '1');
