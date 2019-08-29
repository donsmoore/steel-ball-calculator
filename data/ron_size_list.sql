/*
Navicat MySQL Data Transfer

Source Server         : LOCAL - MySQL
Source Server Version : 50621
Source Host           : localhost:3306
Source Database       : steel_bearing

Target Server Type    : MYSQL
Target Server Version : 50621
File Encoding         : 65001

Date: 2016-02-08 18:48:31
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `ron_size_list`
-- ----------------------------
DROP TABLE IF EXISTS `ron_size_list`;
CREATE TABLE `ron_size_list` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fraction_in` varchar(20) DEFAULT NULL,
  `decimal_in` decimal(12,6) DEFAULT NULL,
  `millimeters` decimal(10,5) DEFAULT NULL,
  `one_ball_weight_ounce` decimal(16,10) DEFAULT NULL,
  `one_ball_weight_gram` decimal(16,10) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=66 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of ron_size_list
-- ----------------------------
INSERT INTO `ron_size_list` VALUES ('7', null, '0.039370', '1.00000', '0.0001446938', '0.0041020000');
INSERT INTO `ron_size_list` VALUES ('8', null, '0.078740', '2.00000', '0.0011574092', '0.0328120000');
INSERT INTO `ron_size_list` VALUES ('9', null, '0.118110', '3.00000', '0.0039069440', '0.1107600000');
INSERT INTO `ron_size_list` VALUES ('10', null, '0.157480', '4.00000', '0.0092587095', '0.2624800000');
INSERT INTO `ron_size_list` VALUES ('11', null, '0.196850', '5.00000', '0.0180842548', '0.5126800000');
INSERT INTO `ron_size_list` VALUES ('12', null, '0.236220', '6.00000', '0.0312499084', '0.8859200000');
INSERT INTO `ron_size_list` VALUES ('13', null, '0.275591', '7.00000', '0.0496248206', '1.4068400000');
INSERT INTO `ron_size_list` VALUES ('14', null, '0.314961', '8.00000', '0.0740753000', '2.1000000000');
INSERT INTO `ron_size_list` VALUES ('15', null, '0.393701', '10.00000', '0.1446599877', '4.1010416667');
INSERT INTO `ron_size_list` VALUES ('16', null, '0.511811', '13.00000', '0.3178381506', '9.0105600000');
INSERT INTO `ron_size_list` VALUES ('17', null, '0.551181', '14.00000', '0.3970378367', '11.2558333333');
INSERT INTO `ron_size_list` VALUES ('18', null, '0.787402', '20.00000', '1.1574205272', '32.8123200000');
INSERT INTO `ron_size_list` VALUES ('19', null, '0.866142', '22.00000', '1.5403137403', '43.6671600000');
INSERT INTO `ron_size_list` VALUES ('20', null, '0.984252', '25.00000', '2.2609237844', '64.0961111111');
INSERT INTO `ron_size_list` VALUES ('21', null, '3.937010', '100.00000', '144.6775659000', '4101.5400000000');
INSERT INTO `ron_size_list` VALUES ('22', '1/16&quot;', '0.062500', '1.58750', '0.0005800480', '0.0164439900');
INSERT INTO `ron_size_list` VALUES ('23', '5/64&quot;', '0.078125', '1.98438', '0.0011301777', '0.0320400000');
INSERT INTO `ron_size_list` VALUES ('24', '3/32&quot;', '0.093750', '2.38125', '0.0019576610', '0.0554984670');
INSERT INTO `ron_size_list` VALUES ('25', '7/64&quot;', '0.109375', '2.77813', '0.0031026977', '0.0879600000');
INSERT INTO `ron_size_list` VALUES ('26', '1/8&quot;', '0.125000', '3.17500', '0.0046403820', '0.1315519220');
INSERT INTO `ron_size_list` VALUES ('27', '5/32&quot;', '0.156250', '3.96875', '0.0090632460', '0.2569373480');
INSERT INTO `ron_size_list` VALUES ('28', '3/16&quot;', '0.187500', '4.76250', '0.0156612880', '0.4439877370');
INSERT INTO `ron_size_list` VALUES ('29', '7/32&quot;', '0.218750', '5.55625', '0.0248695460', '0.7050360830');
INSERT INTO `ron_size_list` VALUES ('30', '1/4&quot;', '0.250000', '6.35000', '0.0371230540', '1.0524153780');
INSERT INTO `ron_size_list` VALUES ('31', '9/32&quot;', '0.281250', '7.14375', '0.0528568480', '1.4984586140');
INSERT INTO `ron_size_list` VALUES ('32', '5/16&quot;', '0.312500', '7.93750', '0.0725059650', '2.0554987840');
INSERT INTO `ron_size_list` VALUES ('33', '11/32&quot;', '0.343750', '8.73125', '0.0965054390', '2.7358688820');
INSERT INTO `ron_size_list` VALUES ('34', '3/8&quot;', '0.375000', '9.52500', '0.1252903070', '3.5519018990');
INSERT INTO `ron_size_list` VALUES ('35', '13/32&quot;', '0.406250', '10.31875', '0.1592956050', '4.5159308290');
INSERT INTO `ron_size_list` VALUES ('36', '7/16&quot;', '0.437500', '11.11250', '0.1989563670', '5.6402886640');
INSERT INTO `ron_size_list` VALUES ('37', '15/32&quot;', '0.468750', '11.90625', '0.2447076310', '6.9373083970');
INSERT INTO `ron_size_list` VALUES ('38', '1/2&quot;', '0.500000', '12.70000', '0.2969844320', '8.4193230210');
INSERT INTO `ron_size_list` VALUES ('39', '9/16&quot;', '0.562500', '14.28750', '0.4228547860', '11.9876689100');
INSERT INTO `ron_size_list` VALUES ('40', '5/8&quot;', '0.625000', '15.87500', '0.5800477180', '16.4439902800');
INSERT INTO `ron_size_list` VALUES ('41', '11/16&quot;', '0.687500', '17.46250', '0.7720435130', '21.8869510600');
INSERT INTO `ron_size_list` VALUES ('42', '3/4&quot;', '0.750000', '19.05000', '1.0023224570', '28.4152152000');
INSERT INTO `ron_size_list` VALUES ('43', '13/16&quot;', '0.812500', '20.63750', '1.2743648360', '36.1274466400');
INSERT INTO `ron_size_list` VALUES ('44', '7/8&quot;', '0.875000', '22.22500', '1.5916509380', '45.1223093200');
INSERT INTO `ron_size_list` VALUES ('45', '15/16&quot;', '0.937500', '23.81250', '1.9576610480', '55.4984671800');
INSERT INTO `ron_size_list` VALUES ('46', '1&quot;', '1.000000', '25.40000', '2.3758754530', '67.3545841700');
INSERT INTO `ron_size_list` VALUES ('47', '1 1/16&quot;', '1.062500', '26.98750', '2.8497744390', '80.7893242200');
INSERT INTO `ron_size_list` VALUES ('48', '1 1/8&quot;', '1.125000', '28.57500', '3.3828382910', '95.9013512900');
INSERT INTO `ron_size_list` VALUES ('49', '1 3/16&quot;', '1.187500', '30.16250', '3.9785472980', '112.7893293000');
INSERT INTO `ron_size_list` VALUES ('50', '1 1/4&quot;', '1.250000', '31.75000', '4.6403817440', '131.5519222000');
INSERT INTO `ron_size_list` VALUES ('51', '1 5/16&quot;', '1.312500', '33.33750', '5.3718219160', '152.2877939000');
INSERT INTO `ron_size_list` VALUES ('52', '1 3/8&quot;', '1.375000', '34.92500', '6.1763481010', '175.0956085000');
INSERT INTO `ron_size_list` VALUES ('53', '1 7/16&quot;', '1.437500', '36.51250', '7.0574405850', '200.0740297000');
INSERT INTO `ron_size_list` VALUES ('54', '1 1/2&quot;', '1.500000', '38.10000', '8.0185796540', '227.3217216000');
INSERT INTO `ron_size_list` VALUES ('55', '1 5/8&quot;', '1.625000', '41.27500', '10.1949186900', '289.0195731000');
INSERT INTO `ron_size_list` VALUES ('56', '1 3/4&quot;', '1.750000', '44.45000', '12.7332075100', '360.9784745000');
INSERT INTO `ron_size_list` VALUES ('57', '1 7/8&quot;', '1.875000', '47.62500', '15.6612883900', '443.9877374000');
INSERT INTO `ron_size_list` VALUES ('58', '2&quot;', '2.000000', '50.80000', '19.0070036200', '538.8366733000');
INSERT INTO `ron_size_list` VALUES ('59', '2 1/4&quot;', '2.250000', '57.15000', '27.0627063300', '767.2108103000');
INSERT INTO `ron_size_list` VALUES ('60', '2 1/2&quot;', '2.500000', '63.50000', '37.1230539500', '1052.4153780000');
INSERT INTO `ron_size_list` VALUES ('61', '2 3/4&quot;', '2.750000', '69.85000', '49.4107848100', '1400.7648680000');
INSERT INTO `ron_size_list` VALUES ('62', '2 7/8\"', '2.875000', '73.02500', null, null);
INSERT INTO `ron_size_list` VALUES ('63', '3&quot;', '3.000000', '76.20000', '64.1486372300', '1818.5737730000');
INSERT INTO `ron_size_list` VALUES ('64', '3 1/2&quot;', '3.500000', '88.90000', '101.6503871000', '2881.7400000000');
INSERT INTO `ron_size_list` VALUES ('65', '4&quot;', '4.000000', '101.60000', '151.7344750000', '4301.6000000000');
