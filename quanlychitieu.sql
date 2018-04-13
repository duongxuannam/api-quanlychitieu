/*
Navicat MySQL Data Transfer

Source Server         : nammmmmmmmm
Source Server Version : 50505
Source Host           : localhost:3306
Source Database       : quanlychitieu

Target Server Type    : MYSQL
Target Server Version : 50505
File Encoding         : 65001

Date: 2017-11-24 16:54:45
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for chi
-- ----------------------------
DROP TABLE IF EXISTS `chi`;
CREATE TABLE `chi` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Ngay` date NOT NULL,
  `Tien` decimal(10,0) NOT NULL,
  `GhiChu` text NOT NULL,
  `IDTaiKhoan` int(11) NOT NULL,
  `TenLoaiChi` text,
  `VoiAi` text,
  PRIMARY KEY (`ID`),
  KEY `IDTaiKhoan` (`IDTaiKhoan`),
  CONSTRAINT `chi_ibfk_2` FOREIGN KEY (`IDTaiKhoan`) REFERENCES `taikhoan` (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of chi
-- ----------------------------
INSERT INTO `chi` VALUES ('19', '2017-10-31', '111', 'test', '2', 'Ăn uống', 'Ba mẹ');
INSERT INTO `chi` VALUES ('24', '2017-11-22', '111', 'asa', '17', 'Ăn uống', 'Ba mẹ');
INSERT INTO `chi` VALUES ('26', '2017-11-15', '312312', '32131', '1', 'Ăn uống', 'Ba mẹ');

-- ----------------------------
-- Table structure for chiase
-- ----------------------------
DROP TABLE IF EXISTS `chiase`;
CREATE TABLE `chiase` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `IDChiaSe` int(11) NOT NULL,
  `IDDuocChiaSe` int(11) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=54 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of chiase
-- ----------------------------
INSERT INTO `chiase` VALUES ('47', '1', '3');
INSERT INTO `chiase` VALUES ('49', '1', '4');
INSERT INTO `chiase` VALUES ('51', '17', '1');
INSERT INTO `chiase` VALUES ('53', '1', '17');

-- ----------------------------
-- Table structure for kehoach
-- ----------------------------
DROP TABLE IF EXISTS `kehoach`;
CREATE TABLE `kehoach` (
  `ID` int(11) NOT NULL,
  `IDThu` int(11) DEFAULT NULL,
  `IDChi` int(11) DEFAULT NULL,
  `IDTaiKhoan` int(11) NOT NULL,
  PRIMARY KEY (`ID`),
  KEY `IDThu` (`IDThu`),
  KEY `IDChi` (`IDChi`),
  KEY `IDTaiKhoan` (`IDTaiKhoan`),
  CONSTRAINT `kehoach_ibfk_1` FOREIGN KEY (`IDThu`) REFERENCES `thu` (`ID`),
  CONSTRAINT `kehoach_ibfk_2` FOREIGN KEY (`IDChi`) REFERENCES `chi` (`ID`),
  CONSTRAINT `kehoach_ibfk_3` FOREIGN KEY (`IDTaiKhoan`) REFERENCES `taikhoan` (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of kehoach
-- ----------------------------

-- ----------------------------
-- Table structure for taikhoan
-- ----------------------------
DROP TABLE IF EXISTS `taikhoan`;
CREATE TABLE `taikhoan` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Email` text NOT NULL,
  `MatKhau` text NOT NULL,
  `TenHienThi` text,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of taikhoan
-- ----------------------------
INSERT INTO `taikhoan` VALUES ('1', 'sieunhan@gmail.com', 'namdaica', 'SieuNhan');
INSERT INTO `taikhoan` VALUES ('2', '1@gmail.com', '1', 'Test');
INSERT INTO `taikhoan` VALUES ('3', '2@gmail.com', '1', 'Test2');
INSERT INTO `taikhoan` VALUES ('4', 'ahii@gmail.com', 'matkhaune', 'siêu nhân dũng cảm');
INSERT INTO `taikhoan` VALUES ('5', 'testlan1@gmail.com', '123', 'testlan1');
INSERT INTO `taikhoan` VALUES ('11', 'sieunhan4@gmail.com', '123', 'sieunhan');
INSERT INTO `taikhoan` VALUES ('13', '12112@gmail.com', '123', 'okok');
INSERT INTO `taikhoan` VALUES ('14', 'testlann@gmail.com', '123', 'test lần n');
INSERT INTO `taikhoan` VALUES ('15', 'testn+1@gmail.com', '123321', 'test lần n + 1');
INSERT INTO `taikhoan` VALUES ('16', '321', '123', '123');
INSERT INTO `taikhoan` VALUES ('17', 'lol@gmail.com', 'namdaica', 'nam dep trai');
INSERT INTO `taikhoan` VALUES ('18', 'adasda@da.com', '123321', '´tesst');

-- ----------------------------
-- Table structure for thu
-- ----------------------------
DROP TABLE IF EXISTS `thu`;
CREATE TABLE `thu` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `GhiChu` text,
  `Tien` decimal(10,0) NOT NULL,
  `Ngay` date NOT NULL,
  `IDTaiKhoan` int(11) NOT NULL,
  `TenLoaiThu` text NOT NULL,
  `VoiAi` text NOT NULL,
  PRIMARY KEY (`ID`),
  KEY `IDTaiKhoan` (`IDTaiKhoan`),
  CONSTRAINT `thu_ibfk_2` FOREIGN KEY (`IDTaiKhoan`) REFERENCES `taikhoan` (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=46 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of thu
-- ----------------------------
INSERT INTO `thu` VALUES ('23', 'okokok', '312312', '2017-11-03', '2', 'Hóa đơn và tiện ích', 'Người yêu');
INSERT INTO `thu` VALUES ('25', 'test lan 1', '1111', '2017-11-12', '1', 'Mua sắm', 'Người yêu');
INSERT INTO `thu` VALUES ('26', 'tet lan 2', '2222', '2017-11-13', '1', 'Ăn uống', 'Khác');
INSERT INTO `thu` VALUES ('28', 'test lần 1', '111', '2017-11-12', '2', 'Giải trí', 'Bạn bè');
INSERT INTO `thu` VALUES ('34', 'fjsh', '8995', '2017-11-21', '2', 'Mua sắm', 'Người yêu');
INSERT INTO `thu` VALUES ('35', '321312', '3123', '2017-11-13', '1', 'Ăn uống', 'Ba mẹ');
INSERT INTO `thu` VALUES ('36', '1111', '111111', '2017-11-17', '3', 'Ăn uống', 'Ba mẹ');
INSERT INTO `thu` VALUES ('42', 'jjf', '665', '2017-11-18', '1', 'Ăn uống', 'Ba mẹ');
INSERT INTO `thu` VALUES ('44', 'hhh', '96', '2017-11-18', '1', 'Hóa đơn và tiện ích', 'Ba mẹ');
INSERT INTO `thu` VALUES ('45', 'djjs', '695', '2017-11-18', '17', 'Ăn uống', 'Ba mẹ');

-- ----------------------------
-- Procedure structure for thongKe
-- ----------------------------
DROP PROCEDURE IF EXISTS `thongKe`;
DELIMITER ;;
CREATE DEFINER=`root`@`localhost` PROCEDURE `thongKe`(IN id INT(11), IN homnay text)
BEGIN 
DECLARE tongsoluotthu INT(11) DEFAULT 0;
DECLARE tongsotienthu INT(11) DEFAULT 0;
DECLARE thulonnhat INT(11) DEFAULT 0;
DECLARE tongsoluotchi INT(11) DEFAULT 0;
DECLARE tongsotienchi INT(11) DEFAULT 0;
DECLARE chilonnhat INT(11) DEFAULT 0;
DECLARE tongsoluot INT(11) DEFAULT 0;
DECLARE thuhomnay INT(11) DEFAULT 0;
DECLARE soluotthuhomnay INT(11) DEFAULT 0;
DECLARE chihomnay INT(11) DEFAULT 0;
DECLARE soluotchihomnay INT(11) DEFAULT 0;

SELECT COUNT(thu.Tien) INTO tongsoluotthu FROM thu where thu.IDTaiKhoan =id;
SELECT Sum(thu.Tien) INTO tongsotienthu FROM thu where thu.IDTaiKhoan =id;
SELECT Max(thu.Tien) INTO thulonnhat FROM thu where  thu.IDTaiKhoan =id;
SELECT COUNT(chi.Tien) into tongsoluotchi FROM chi where  chi.IDTaiKhoan =id;
SELECT Sum(chi.Tien) into tongsotienchi FROM chi where  chi.IDTaiKhoan =id;
SELECT Max(chi.Tien) into chilonnhat FROM chi where  chi.IDTaiKhoan =id;
SELECT Max(thu.Tien) into thuhomnay FROM thu WHERE thu.Ngay = homnay and thu.IDTaiKhoan =id;
SELECT Max(chi.Tien) into chihomnay FROM chi WHERE chi.Ngay = homnay and chi.IDTaiKhoan =id;
SELECT COUNT(thu.Tien) into soluotthuhomnay FROM thu WHERE thu.Ngay = homnay and thu.IDTaiKhoan =id;
SELECT COUNT(chi.Tien) into soluotchihomnay FROM chi WHERE chi.Ngay = homnay and chi.IDTaiKhoan =id;

set tongsoluot = tongsoluotchi + tongsoluotthu;
SELECT  tongsoluotthu, tongsoluotchi, tongsoluot, tongsotienthu, tongsotienchi, thulonnhat, chilonnhat, thuhomnay, chihomnay,soluotthuhomnay , soluotchihomnay;

END
;;
DELIMITER ;
