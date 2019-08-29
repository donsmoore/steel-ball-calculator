/*
Navicat MySQL Data Transfer

Source Server         : LOCAL - MySQL
Source Server Version : 50621
Source Host           : localhost:3306
Source Database       : steel_bearing

Target Server Type    : MYSQL
Target Server Version : 50621
File Encoding         : 65001

Date: 2016-02-08 18:48:13
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `ron_material_list`
-- ----------------------------
DROP TABLE IF EXISTS `ron_material_list`;
CREATE TABLE `ron_material_list` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `material` varchar(50) DEFAULT NULL,
  `lbs_in3` decimal(10,6) DEFAULT NULL,
  `kg_m3` decimal(10,6) DEFAULT NULL,
  `page_link` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of ron_material_list
-- ----------------------------
INSERT INTO `ron_material_list` VALUES ('1', 'Chrome Steel', '0.283000', '0.007850', 'http://bearingballstore.com/index.php?main_page=index&cPath=1');
INSERT INTO `ron_material_list` VALUES ('2', 'Carbon Steel', '456.234000', '67.567800', 'http://bearingballstore.com/index.php?main_page=index&cPath=82');
INSERT INTO `ron_material_list` VALUES ('3', 'Soft Steel', '12.450000', '345.567500', 'http://bearingballstore.com/index.php?main_page=index&cPath=114');
INSERT INTO `ron_material_list` VALUES ('4', '316 Stainless', '456.430000', '567.560000', 'http://bearingballstore.com/index.php?main_page=index&cPath=63');
INSERT INTO `ron_material_list` VALUES ('5', '302 Stainless', '302.302000', '345.567800', 'http://bearingballstore.com/index.php?main_page=index&cPath=49');
INSERT INTO `ron_material_list` VALUES ('6', '440c Stainless', '23.234500', '3433.566600', 'http://bearingballstore.com/index.php?main_page=index&cPath=26');
INSERT INTO `ron_material_list` VALUES ('7', '420 Stainless', '4235.123140', '5666.777000', 'http://bearingballstore.com/index.php?main_page=index&cPath=41');
INSERT INTO `ron_material_list` VALUES ('8', 'Brass', '45.345000', '888.454500', 'http://bearingballstore.com/index.php?main_page=index&cPath=130');
INSERT INTO `ron_material_list` VALUES ('9', 'Aluminum', '234.234520', '99.560000', 'http://bearingballstore.com/index.php?main_page=index&cPath=242');
INSERT INTO `ron_material_list` VALUES ('10', 'Nylon', '23.567000', '456.343300', 'http://bearingballstore.com/index.php?main_page=index&cPath=142');
INSERT INTO `ron_material_list` VALUES ('11', 'Delrin', '234.768000', '6763.345600', 'http://bearingballstore.com/index.php?main_page=index&cPath=221');
INSERT INTO `ron_material_list` VALUES ('12', 'Silicon Nitride', '5678.546000', '233.776000', 'http://bearingballstore.com/index.php?main_page=index&cPath=215');
