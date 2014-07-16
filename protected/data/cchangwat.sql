/*
Navicat MySQL Data Transfer

Source Server         : localhost_3306-appserv
Source Server Version : 50051
Source Host           : localhost:3306
Source Database       : hdc

Target Server Type    : MYSQL
Target Server Version : 50051
File Encoding         : 65001

Date: 2014-07-16 14:45:50
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `cchangwat`
-- ----------------------------
DROP TABLE IF EXISTS `cchangwat`;
CREATE TABLE `cchangwat` (
  `changwatcode` varchar(2) NOT NULL,
  `changwatname` varchar(255) default NULL,
  `zonecode` varchar(2) default NULL,
  PRIMARY KEY  (`changwatcode`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of cchangwat
-- ----------------------------
INSERT INTO `cchangwat` VALUES ('10', 'กรุงเทพมหานคร', '00');
INSERT INTO `cchangwat` VALUES ('11', 'สมุทรปราการ', '03');
INSERT INTO `cchangwat` VALUES ('12', 'นนทบุรี', '01');
INSERT INTO `cchangwat` VALUES ('13', 'ปทุมธานี', '01');
INSERT INTO `cchangwat` VALUES ('14', 'พระนครศรีอยุธยา', '01');
INSERT INTO `cchangwat` VALUES ('15', 'อ่างทอง', '02');
INSERT INTO `cchangwat` VALUES ('16', 'ลพบุรี', '02');
INSERT INTO `cchangwat` VALUES ('17', 'สิงห์บุรี', '02');
INSERT INTO `cchangwat` VALUES ('18', 'ชัยนาท', '02');
INSERT INTO `cchangwat` VALUES ('19', 'สระบุรี', '01');
INSERT INTO `cchangwat` VALUES ('20', 'ชลบุรี', '09');
INSERT INTO `cchangwat` VALUES ('21', 'ระยอง', '09');
INSERT INTO `cchangwat` VALUES ('22', 'จันทบุรี', '09');
INSERT INTO `cchangwat` VALUES ('23', 'ตราด', '09');
INSERT INTO `cchangwat` VALUES ('24', 'ฉะเชิงเทรา', '03');
INSERT INTO `cchangwat` VALUES ('25', 'ปราจีนบุรี', '03');
INSERT INTO `cchangwat` VALUES ('26', 'นครนายก', '03');
INSERT INTO `cchangwat` VALUES ('27', 'สระแก้ว', '03');
INSERT INTO `cchangwat` VALUES ('30', 'นครราชสีมา', '14');
INSERT INTO `cchangwat` VALUES ('31', 'บุรีรัมย์', '14');
INSERT INTO `cchangwat` VALUES ('32', 'สุรินทร์', '14');
INSERT INTO `cchangwat` VALUES ('33', 'ศรีสะเกษ', '13');
INSERT INTO `cchangwat` VALUES ('34', 'อุบลราชธานี', '13');
INSERT INTO `cchangwat` VALUES ('35', 'ยโสธร', '13');
INSERT INTO `cchangwat` VALUES ('36', 'ชัยภูมิ', '14');
INSERT INTO `cchangwat` VALUES ('37', 'อำนาจเจริญ', '13');
INSERT INTO `cchangwat` VALUES ('38', 'บึงกาฬ', '10');
INSERT INTO `cchangwat` VALUES ('39', 'หนองบัวลำภู', '10');
INSERT INTO `cchangwat` VALUES ('40', 'ขอนแก่น', '12');
INSERT INTO `cchangwat` VALUES ('41', 'อุดรธานี', '10');
INSERT INTO `cchangwat` VALUES ('42', 'เลย', '10');
INSERT INTO `cchangwat` VALUES ('43', 'หนองคาย', '10');
INSERT INTO `cchangwat` VALUES ('44', 'มหาสารคาม', '12');
INSERT INTO `cchangwat` VALUES ('45', 'ร้อยเอ็ด', '12');
INSERT INTO `cchangwat` VALUES ('46', 'กาฬสินธุ์', '12');
INSERT INTO `cchangwat` VALUES ('47', 'สกลนคร', '11');
INSERT INTO `cchangwat` VALUES ('48', 'นครพนม', '11');
INSERT INTO `cchangwat` VALUES ('49', 'มุกดาหาร', '11');
INSERT INTO `cchangwat` VALUES ('50', 'เชียงใหม่', '15');
INSERT INTO `cchangwat` VALUES ('51', 'ลำพูน', '15');
INSERT INTO `cchangwat` VALUES ('52', 'ลำปาง', '15');
INSERT INTO `cchangwat` VALUES ('53', 'อุตรดิตถ์', '17');
INSERT INTO `cchangwat` VALUES ('54', 'แพร่', '16');
INSERT INTO `cchangwat` VALUES ('55', 'น่าน', '16');
INSERT INTO `cchangwat` VALUES ('56', 'พะเยา', '16');
INSERT INTO `cchangwat` VALUES ('57', 'เชียงราย', '16');
INSERT INTO `cchangwat` VALUES ('58', 'แม่ฮ่องสอน', '15');
INSERT INTO `cchangwat` VALUES ('60', 'นครสวรรค์', '18');
INSERT INTO `cchangwat` VALUES ('61', 'อุทัยธานี', '18');
INSERT INTO `cchangwat` VALUES ('62', 'กำแพงเพชร', '18');
INSERT INTO `cchangwat` VALUES ('63', 'ตาก', '17');
INSERT INTO `cchangwat` VALUES ('64', 'สุโขทัย', '17');
INSERT INTO `cchangwat` VALUES ('65', 'พิษณุโลก', '17');
INSERT INTO `cchangwat` VALUES ('66', 'พิจิตร', '18');
INSERT INTO `cchangwat` VALUES ('67', 'เพชรบูรณ์', '17');
INSERT INTO `cchangwat` VALUES ('70', 'ราชบุรี', '04');
INSERT INTO `cchangwat` VALUES ('71', 'กาญจนบุรี', '04');
INSERT INTO `cchangwat` VALUES ('72', 'สุพรรณบุรี', '04');
INSERT INTO `cchangwat` VALUES ('73', 'นครปฐม', '04');
INSERT INTO `cchangwat` VALUES ('74', 'สมุทรสาคร', '05');
INSERT INTO `cchangwat` VALUES ('75', 'สมุทรสงคราม', '05');
INSERT INTO `cchangwat` VALUES ('76', 'เพชรบุรี', '05');
INSERT INTO `cchangwat` VALUES ('77', 'ประจวบคีรีขันธ์', '05');
INSERT INTO `cchangwat` VALUES ('80', 'นครศรีธรรมราช', '06');
INSERT INTO `cchangwat` VALUES ('81', 'กระบี่', '07');
INSERT INTO `cchangwat` VALUES ('82', 'พังงา', '07');
INSERT INTO `cchangwat` VALUES ('83', 'ภูเก็ต', '07');
INSERT INTO `cchangwat` VALUES ('84', 'สุราษฎร์ธานี', '06');
INSERT INTO `cchangwat` VALUES ('85', 'ระนอง', '07');
INSERT INTO `cchangwat` VALUES ('86', 'ชุมพร', '06');
INSERT INTO `cchangwat` VALUES ('90', 'สงขลา', '08');
INSERT INTO `cchangwat` VALUES ('91', 'สตูล', '08');
INSERT INTO `cchangwat` VALUES ('92', 'ตรัง', '07');
INSERT INTO `cchangwat` VALUES ('93', 'พัทลุง', '06');
INSERT INTO `cchangwat` VALUES ('94', 'ปัตตานี', '08');
INSERT INTO `cchangwat` VALUES ('95', 'ยะลา', '08');
INSERT INTO `cchangwat` VALUES ('96', 'นราธิวาส', '08');
