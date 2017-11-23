/*
Navicat MySQL Data Transfer

Source Server         : 127.0.0.1
Source Server Version : 50553
Source Host           : localhost:3306
Source Database       : false

Target Server Type    : MYSQL
Target Server Version : 50553
File Encoding         : 65001

Date: 2017-11-22 17:59:25
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `ft_admin`
-- ----------------------------
DROP TABLE IF EXISTS `ft_admin`;
CREATE TABLE `ft_admin` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT COMMENT '账号ID',
  `user_name` char(255) COLLATE utf8_bin NOT NULL COMMENT '账号',
  `password` char(255) COLLATE utf8_bin NOT NULL COMMENT '密码',
  `head_portrait` varchar(255) COLLATE utf8_bin DEFAULT NULL COMMENT '头像',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- ----------------------------
-- Records of ft_admin
-- ----------------------------
INSERT INTO `ft_admin` VALUES ('1', 'admin', 'e10adc3949ba59abbe56e057f20f883e', '');
