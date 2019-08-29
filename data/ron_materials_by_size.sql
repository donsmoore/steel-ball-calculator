/*
Navicat MySQL Data Transfer

Source Server         : LOCAL - MySQL
Source Server Version : 50621
Source Host           : localhost:3306
Source Database       : steel_bearing

Target Server Type    : MYSQL
Target Server Version : 50621
File Encoding         : 65001

Date: 2016-02-08 18:48:22
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `ron_materials_by_size`
-- ----------------------------
DROP TABLE IF EXISTS `ron_materials_by_size`;
CREATE TABLE `ron_materials_by_size` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `material_id` int(11) DEFAULT NULL,
  `size_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=182 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of ron_materials_by_size
-- ----------------------------
INSERT INTO `ron_materials_by_size` VALUES ('2', '1', '30');
INSERT INTO `ron_materials_by_size` VALUES ('3', '2', '30');
INSERT INTO `ron_materials_by_size` VALUES ('4', '3', '30');
INSERT INTO `ron_materials_by_size` VALUES ('5', '4', '30');
INSERT INTO `ron_materials_by_size` VALUES ('6', '5', '30');
INSERT INTO `ron_materials_by_size` VALUES ('7', '6', '30');
INSERT INTO `ron_materials_by_size` VALUES ('8', '7', '30');
INSERT INTO `ron_materials_by_size` VALUES ('9', '8', '30');
INSERT INTO `ron_materials_by_size` VALUES ('11', '10', '30');
INSERT INTO `ron_materials_by_size` VALUES ('12', '11', '30');
INSERT INTO `ron_materials_by_size` VALUES ('13', '12', '30');
INSERT INTO `ron_materials_by_size` VALUES ('16', '5', '26');
INSERT INTO `ron_materials_by_size` VALUES ('17', '1', '26');
INSERT INTO `ron_materials_by_size` VALUES ('18', '1', '38');
INSERT INTO `ron_materials_by_size` VALUES ('19', '1', '40');
INSERT INTO `ron_materials_by_size` VALUES ('20', '1', '7');
INSERT INTO `ron_materials_by_size` VALUES ('21', '1', '22');
INSERT INTO `ron_materials_by_size` VALUES ('22', '1', '23');
INSERT INTO `ron_materials_by_size` VALUES ('23', '1', '8');
INSERT INTO `ron_materials_by_size` VALUES ('24', '1', '24');
INSERT INTO `ron_materials_by_size` VALUES ('25', '1', '25');
INSERT INTO `ron_materials_by_size` VALUES ('26', '1', '9');
INSERT INTO `ron_materials_by_size` VALUES ('27', '1', '28');
INSERT INTO `ron_materials_by_size` VALUES ('28', '1', '11');
INSERT INTO `ron_materials_by_size` VALUES ('29', '1', '12');
INSERT INTO `ron_materials_by_size` VALUES ('30', '1', '13');
INSERT INTO `ron_materials_by_size` VALUES ('31', '1', '31');
INSERT INTO `ron_materials_by_size` VALUES ('32', '1', '32');
INSERT INTO `ron_materials_by_size` VALUES ('33', '1', '14');
INSERT INTO `ron_materials_by_size` VALUES ('34', '1', '33');
INSERT INTO `ron_materials_by_size` VALUES ('35', '1', '34');
INSERT INTO `ron_materials_by_size` VALUES ('36', '1', '15');
INSERT INTO `ron_materials_by_size` VALUES ('37', '1', '35');
INSERT INTO `ron_materials_by_size` VALUES ('38', '1', '36');
INSERT INTO `ron_materials_by_size` VALUES ('39', '1', '37');
INSERT INTO `ron_materials_by_size` VALUES ('40', '1', '16');
INSERT INTO `ron_materials_by_size` VALUES ('41', '1', '17');
INSERT INTO `ron_materials_by_size` VALUES ('42', '1', '39');
INSERT INTO `ron_materials_by_size` VALUES ('43', '1', '41');
INSERT INTO `ron_materials_by_size` VALUES ('44', '1', '42');
INSERT INTO `ron_materials_by_size` VALUES ('45', '1', '18');
INSERT INTO `ron_materials_by_size` VALUES ('46', '1', '43');
INSERT INTO `ron_materials_by_size` VALUES ('47', '1', '19');
INSERT INTO `ron_materials_by_size` VALUES ('48', '1', '44');
INSERT INTO `ron_materials_by_size` VALUES ('49', '1', '45');
INSERT INTO `ron_materials_by_size` VALUES ('50', '1', '20');
INSERT INTO `ron_materials_by_size` VALUES ('51', '1', '46');
INSERT INTO `ron_materials_by_size` VALUES ('52', '1', '47');
INSERT INTO `ron_materials_by_size` VALUES ('53', '1', '48');
INSERT INTO `ron_materials_by_size` VALUES ('54', '1', '49');
INSERT INTO `ron_materials_by_size` VALUES ('55', '1', '50');
INSERT INTO `ron_materials_by_size` VALUES ('56', '1', '51');
INSERT INTO `ron_materials_by_size` VALUES ('57', '1', '52');
INSERT INTO `ron_materials_by_size` VALUES ('58', '1', '53');
INSERT INTO `ron_materials_by_size` VALUES ('59', '1', '54');
INSERT INTO `ron_materials_by_size` VALUES ('60', '1', '55');
INSERT INTO `ron_materials_by_size` VALUES ('61', '1', '56');
INSERT INTO `ron_materials_by_size` VALUES ('62', '1', '57');
INSERT INTO `ron_materials_by_size` VALUES ('63', '1', '58');
INSERT INTO `ron_materials_by_size` VALUES ('64', '1', '59');
INSERT INTO `ron_materials_by_size` VALUES ('65', '1', '60');
INSERT INTO `ron_materials_by_size` VALUES ('66', '1', '61');
INSERT INTO `ron_materials_by_size` VALUES ('67', '1', '62');
INSERT INTO `ron_materials_by_size` VALUES ('68', '1', '63');
INSERT INTO `ron_materials_by_size` VALUES ('69', '1', '64');
INSERT INTO `ron_materials_by_size` VALUES ('70', '1', '21');
INSERT INTO `ron_materials_by_size` VALUES ('71', '1', '65');
INSERT INTO `ron_materials_by_size` VALUES ('72', '1', '27');
INSERT INTO `ron_materials_by_size` VALUES ('73', '2', '26');
INSERT INTO `ron_materials_by_size` VALUES ('74', '2', '27');
INSERT INTO `ron_materials_by_size` VALUES ('75', '2', '28');
INSERT INTO `ron_materials_by_size` VALUES ('76', '2', '29');
INSERT INTO `ron_materials_by_size` VALUES ('77', '2', '32');
INSERT INTO `ron_materials_by_size` VALUES ('78', '2', '34');
INSERT INTO `ron_materials_by_size` VALUES ('79', '2', '36');
INSERT INTO `ron_materials_by_size` VALUES ('80', '2', '38');
INSERT INTO `ron_materials_by_size` VALUES ('81', '2', '40');
INSERT INTO `ron_materials_by_size` VALUES ('82', '2', '42');
INSERT INTO `ron_materials_by_size` VALUES ('83', '2', '46');
INSERT INTO `ron_materials_by_size` VALUES ('84', '2', '47');
INSERT INTO `ron_materials_by_size` VALUES ('85', '2', '48');
INSERT INTO `ron_materials_by_size` VALUES ('86', '2', '50');
INSERT INTO `ron_materials_by_size` VALUES ('87', '2', '54');
INSERT INTO `ron_materials_by_size` VALUES ('88', '3', '32');
INSERT INTO `ron_materials_by_size` VALUES ('89', '3', '34');
INSERT INTO `ron_materials_by_size` VALUES ('90', '3', '36');
INSERT INTO `ron_materials_by_size` VALUES ('91', '3', '38');
INSERT INTO `ron_materials_by_size` VALUES ('92', '3', '39');
INSERT INTO `ron_materials_by_size` VALUES ('93', '3', '40');
INSERT INTO `ron_materials_by_size` VALUES ('94', '3', '44');
INSERT INTO `ron_materials_by_size` VALUES ('95', '3', '42');
INSERT INTO `ron_materials_by_size` VALUES ('96', '3', '46');
INSERT INTO `ron_materials_by_size` VALUES ('97', '3', '50');
INSERT INTO `ron_materials_by_size` VALUES ('98', '3', '52');
INSERT INTO `ron_materials_by_size` VALUES ('99', '3', '54');
INSERT INTO `ron_materials_by_size` VALUES ('100', '3', '58');
INSERT INTO `ron_materials_by_size` VALUES ('101', '4', '7');
INSERT INTO `ron_materials_by_size` VALUES ('102', '4', '24');
INSERT INTO `ron_materials_by_size` VALUES ('103', '4', '26');
INSERT INTO `ron_materials_by_size` VALUES ('104', '4', '27');
INSERT INTO `ron_materials_by_size` VALUES ('105', '4', '28');
INSERT INTO `ron_materials_by_size` VALUES ('106', '4', '32');
INSERT INTO `ron_materials_by_size` VALUES ('107', '4', '34');
INSERT INTO `ron_materials_by_size` VALUES ('108', '4', '38');
INSERT INTO `ron_materials_by_size` VALUES ('109', '4', '40');
INSERT INTO `ron_materials_by_size` VALUES ('110', '4', '42');
INSERT INTO `ron_materials_by_size` VALUES ('111', '4', '44');
INSERT INTO `ron_materials_by_size` VALUES ('112', '4', '46');
INSERT INTO `ron_materials_by_size` VALUES ('113', '4', '48');
INSERT INTO `ron_materials_by_size` VALUES ('114', '4', '50');
INSERT INTO `ron_materials_by_size` VALUES ('115', '4', '54');
INSERT INTO `ron_materials_by_size` VALUES ('116', '4', '55');
INSERT INTO `ron_materials_by_size` VALUES ('117', '4', '57');
INSERT INTO `ron_materials_by_size` VALUES ('118', '4', '58');
INSERT INTO `ron_materials_by_size` VALUES ('119', '5', '22');
INSERT INTO `ron_materials_by_size` VALUES ('120', '5', '24');
INSERT INTO `ron_materials_by_size` VALUES ('121', '5', '27');
INSERT INTO `ron_materials_by_size` VALUES ('122', '5', '28');
INSERT INTO `ron_materials_by_size` VALUES ('123', '5', '34');
INSERT INTO `ron_materials_by_size` VALUES ('124', '5', '36');
INSERT INTO `ron_materials_by_size` VALUES ('125', '5', '38');
INSERT INTO `ron_materials_by_size` VALUES ('126', '5', '40');
INSERT INTO `ron_materials_by_size` VALUES ('127', '5', '42');
INSERT INTO `ron_materials_by_size` VALUES ('128', '5', '46');
INSERT INTO `ron_materials_by_size` VALUES ('129', '5', '50');
INSERT INTO `ron_materials_by_size` VALUES ('130', '6', '22');
INSERT INTO `ron_materials_by_size` VALUES ('131', '6', '26');
INSERT INTO `ron_materials_by_size` VALUES ('132', '6', '28');
INSERT INTO `ron_materials_by_size` VALUES ('133', '6', '32');
INSERT INTO `ron_materials_by_size` VALUES ('134', '6', '34');
INSERT INTO `ron_materials_by_size` VALUES ('135', '6', '38');
INSERT INTO `ron_materials_by_size` VALUES ('136', '6', '40');
INSERT INTO `ron_materials_by_size` VALUES ('137', '6', '42');
INSERT INTO `ron_materials_by_size` VALUES ('138', '6', '46');
INSERT INTO `ron_materials_by_size` VALUES ('139', '6', '50');
INSERT INTO `ron_materials_by_size` VALUES ('140', '7', '22');
INSERT INTO `ron_materials_by_size` VALUES ('141', '7', '26');
INSERT INTO `ron_materials_by_size` VALUES ('142', '7', '28');
INSERT INTO `ron_materials_by_size` VALUES ('143', '7', '32');
INSERT INTO `ron_materials_by_size` VALUES ('144', '7', '34');
INSERT INTO `ron_materials_by_size` VALUES ('145', '7', '38');
INSERT INTO `ron_materials_by_size` VALUES ('146', '7', '40');
INSERT INTO `ron_materials_by_size` VALUES ('147', '7', '42');
INSERT INTO `ron_materials_by_size` VALUES ('148', '7', '46');
INSERT INTO `ron_materials_by_size` VALUES ('149', '7', '50');
INSERT INTO `ron_materials_by_size` VALUES ('150', '8', '27');
INSERT INTO `ron_materials_by_size` VALUES ('151', '8', '28');
INSERT INTO `ron_materials_by_size` VALUES ('152', '8', '34');
INSERT INTO `ron_materials_by_size` VALUES ('153', '8', '38');
INSERT INTO `ron_materials_by_size` VALUES ('154', '8', '40');
INSERT INTO `ron_materials_by_size` VALUES ('155', '8', '42');
INSERT INTO `ron_materials_by_size` VALUES ('156', '8', '46');
INSERT INTO `ron_materials_by_size` VALUES ('157', '8', '54');
INSERT INTO `ron_materials_by_size` VALUES ('158', '8', '58');
INSERT INTO `ron_materials_by_size` VALUES ('159', '9', '38');
INSERT INTO `ron_materials_by_size` VALUES ('160', '9', '46');
INSERT INTO `ron_materials_by_size` VALUES ('161', '10', '26');
INSERT INTO `ron_materials_by_size` VALUES ('162', '10', '28');
INSERT INTO `ron_materials_by_size` VALUES ('163', '10', '34');
INSERT INTO `ron_materials_by_size` VALUES ('164', '10', '36');
INSERT INTO `ron_materials_by_size` VALUES ('165', '10', '38');
INSERT INTO `ron_materials_by_size` VALUES ('166', '10', '41');
INSERT INTO `ron_materials_by_size` VALUES ('167', '10', '40');
INSERT INTO `ron_materials_by_size` VALUES ('168', '10', '39');
INSERT INTO `ron_materials_by_size` VALUES ('169', '10', '42');
INSERT INTO `ron_materials_by_size` VALUES ('170', '10', '46');
INSERT INTO `ron_materials_by_size` VALUES ('171', '11', '26');
INSERT INTO `ron_materials_by_size` VALUES ('172', '11', '32');
INSERT INTO `ron_materials_by_size` VALUES ('173', '11', '34');
INSERT INTO `ron_materials_by_size` VALUES ('174', '11', '38');
INSERT INTO `ron_materials_by_size` VALUES ('175', '11', '39');
INSERT INTO `ron_materials_by_size` VALUES ('176', '11', '40');
INSERT INTO `ron_materials_by_size` VALUES ('177', '11', '42');
INSERT INTO `ron_materials_by_size` VALUES ('178', '12', '26');
INSERT INTO `ron_materials_by_size` VALUES ('179', '12', '27');
INSERT INTO `ron_materials_by_size` VALUES ('180', '12', '28');
INSERT INTO `ron_materials_by_size` VALUES ('181', '12', '29');
