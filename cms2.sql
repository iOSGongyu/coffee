/*
Navicat MySQL Data Transfer

Source Server         : eryun
Source Server Version : 50622
Source Host           : 112.124.109.87:3306
Source Database       : cms2

Target Server Type    : MYSQL
Target Server Version : 50622
File Encoding         : 65001

Date: 2017-10-31 20:21:29
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for sucai_admin
-- ----------------------------
DROP TABLE IF EXISTS `sucai_admin`;
CREATE TABLE `sucai_admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user` varchar(50) DEFAULT NULL,
  `passwd` char(32) DEFAULT NULL,
  `role` varchar(50) DEFAULT NULL,
  `roleName` varchar(50) DEFAULT NULL COMMENT '管理权限名字',
  `createTime` int(11) DEFAULT NULL,
  `modifyTime` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of sucai_admin
-- ----------------------------
INSERT INTO `sucai_admin` VALUES ('3', 'admin', '0d7aaae371d622793246c719c55f1f7f', '0', '超级管理员', '1494991897', '1494991897');

-- ----------------------------
-- Table structure for sucai_adtype
-- ----------------------------
DROP TABLE IF EXISTS `sucai_adtype`;
CREATE TABLE `sucai_adtype` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `adType` varchar(40) NOT NULL,
  `createTime` int(11) NOT NULL,
  `modifyTime` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of sucai_adtype
-- ----------------------------

-- ----------------------------
-- Table structure for sucai_agent
-- ----------------------------
DROP TABLE IF EXISTS `sucai_agent`;
CREATE TABLE `sucai_agent` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT '主键',
  `regional` varchar(30) CHARACTER SET utf8 NOT NULL,
  `telephone` char(11) NOT NULL,
  `agentname` varchar(30) NOT NULL,
  `password` char(32) NOT NULL,
  `wechat` varchar(30) NOT NULL,
  `wechatSlogan` varchar(50) NOT NULL,
  `realname` varchar(30) NOT NULL,
  `sex` tinyint(4) NOT NULL,
  `idNo` varchar(20) NOT NULL,
  `idImgFace` varchar(255) NOT NULL,
  `idImgBack` varchar(255) NOT NULL,
  `invitedCode` varchar(50) NOT NULL,
  `regTime` int(11) NOT NULL,
  `modifyTime` int(11) NOT NULL,
  `email` varchar(50) CHARACTER SET utf8 NOT NULL,
  `location` varchar(100) CHARACTER SET utf8 NOT NULL,
  `headImg` varchar(255) DEFAULT NULL,
  `level` int(11) NOT NULL DEFAULT '0',
  `mobileHeadImg` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of sucai_agent
-- ----------------------------

-- ----------------------------
-- Table structure for sucai_brand
-- ----------------------------
DROP TABLE IF EXISTS `sucai_brand`;
CREATE TABLE `sucai_brand` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `brandName` varchar(100) NOT NULL,
  `createTime` int(11) NOT NULL,
  `type` int(11) NOT NULL DEFAULT '1',
  `unionId` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of sucai_brand
-- ----------------------------

-- ----------------------------
-- Table structure for sucai_case
-- ----------------------------
DROP TABLE IF EXISTS `sucai_case`;
CREATE TABLE `sucai_case` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `describe` varchar(255) NOT NULL,
  `detail` text,
  `type` int(11) NOT NULL,
  `img` varchar(255) NOT NULL,
  `is_show` int(2) NOT NULL,
  `createTime` int(11) NOT NULL,
  `categoryId` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of sucai_case
-- ----------------------------
INSERT INTO `sucai_case` VALUES ('1', '二当家的，你好。', '二当家的，你好。', '&lt;a href=&quot;http://www.erdangjiade.com&quot;&gt;二当家的&lt;/a&gt;', '0', '2017-10-24/59ef496e1839a.jpg', '0', '1508854126', '31');
INSERT INTO `sucai_case` VALUES ('2', 'Thinkphp集成paypal在线支付源码', '二当家的，你好。', '二当家的，你好。二当家的，你好。&lt;a href=&quot;http://www.erdangjiade.com/php/971.html&quot;&gt;Thinkphp集成paypal在线支付源码&lt;/a&gt;\r\n                    \r\n                ', '0', '2017-10-24/59ef499f179da.jpg', '0', '1508854175', '31');
INSERT INTO `sucai_case` VALUES ('3', '', '', '\r\n                    \r\n                ', '0', '2017-10-18/59e7715cdcfc7.jpg', '0', '1508340060', '31');
INSERT INTO `sucai_case` VALUES ('4', '', '', '认为热污染仍的&amp;nbsp;', '0', '2017-10-18/59e7717b6bf32.jpg', '0', '1508340091', '33');

-- ----------------------------
-- Table structure for sucai_category
-- ----------------------------
DROP TABLE IF EXISTS `sucai_category`;
CREATE TABLE `sucai_category` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `CategoryName` varchar(100) CHARACTER SET utf8 NOT NULL,
  `IsShowNav` tinyint(1) NOT NULL,
  `time` int(11) DEFAULT NULL,
  `isCase` int(2) DEFAULT NULL COMMENT '0,新闻\n1.案例',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=53 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of sucai_category
-- ----------------------------
INSERT INTO `sucai_category` VALUES ('28', '千助新闻', '0', '1463625722', '0');
INSERT INTO `sucai_category` VALUES ('29', '行业动态', '1', '1463625737', '0');
INSERT INTO `sucai_category` VALUES ('30', '经验之谈', '1', '1463625754', '0');
INSERT INTO `sucai_category` VALUES ('31', '教育', '1', '1463625771', '1');
INSERT INTO `sucai_category` VALUES ('32', '旅游', '1', '1463625777', '1');
INSERT INTO `sucai_category` VALUES ('33', '房产', '1', '1463625782', '1');
INSERT INTO `sucai_category` VALUES ('34', '金融', '1', '1463625790', '1');
INSERT INTO `sucai_category` VALUES ('35', '科技', '1', '1463625795', '1');
INSERT INTO `sucai_category` VALUES ('36', '医疗', '1', '1463625799', '1');
INSERT INTO `sucai_category` VALUES ('40', '其他', '1', '1463625826', '1');
INSERT INTO `sucai_category` VALUES ('41', '首页', '1', '1463986100', '2');
INSERT INTO `sucai_category` VALUES ('42', '业务', '1', '1463986122', '2');
INSERT INTO `sucai_category` VALUES ('43', '案例', '1', '1463986128', '2');
INSERT INTO `sucai_category` VALUES ('44', '客户', '1', '1463986137', '2');
INSERT INTO `sucai_category` VALUES ('45', '品质', '1', '1463986148', '2');
INSERT INTO `sucai_category` VALUES ('46', '增值', '1', '1463986157', '2');
INSERT INTO `sucai_category` VALUES ('47', '关于', '1', '1463986164', '2');
INSERT INTO `sucai_category` VALUES ('48', '联系', '1', '1463986171', '2');
INSERT INTO `sucai_category` VALUES ('49', '', '1', '1502850349', '1');
INSERT INTO `sucai_category` VALUES ('50', '12121', '1', '1502850356', '1');
INSERT INTO `sucai_category` VALUES ('51', '对对对', '1', '1508413815', '2');
INSERT INTO `sucai_category` VALUES ('52', '对对对', '1', '1508413820', '2');

-- ----------------------------
-- Table structure for sucai_district
-- ----------------------------
DROP TABLE IF EXISTS `sucai_district`;
CREATE TABLE `sucai_district` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `businessDistrictName` varchar(40) NOT NULL,
  `categoryId` int(11) NOT NULL,
  `businessImg` varchar(100) CHARACTER SET latin1 NOT NULL,
  `businessBigImg` varchar(100) CHARACTER SET latin1 NOT NULL,
  `businessInfo` text NOT NULL,
  `createTime` int(11) NOT NULL,
  `describe` varchar(100) NOT NULL,
  `modifyTime` int(11) DEFAULT NULL,
  `agentNum` int(11) NOT NULL DEFAULT '0',
  `roseNum` int(11) NOT NULL DEFAULT '0',
  `rangeNum` int(11) NOT NULL DEFAULT '0',
  `releaseNum` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of sucai_district
-- ----------------------------

-- ----------------------------
-- Table structure for sucai_images
-- ----------------------------
DROP TABLE IF EXISTS `sucai_images`;
CREATE TABLE `sucai_images` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `image_url` varchar(255) DEFAULT NULL,
  `modify_time` int(11) DEFAULT NULL,
  `create_time` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id_UNIQUE` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of sucai_images
-- ----------------------------
INSERT INTO `sucai_images` VALUES ('1', '2016-05-23/57427cbf94fb7.jpg', null, '1463975103');
INSERT INTO `sucai_images` VALUES ('2', '2016-05-23/57429dc1c1eab.jpg', null, '1463983553');
INSERT INTO `sucai_images` VALUES ('3', '2016-05-23/57429e64a08ca.jpg', null, '1463983716');

-- ----------------------------
-- Table structure for sucai_invitationcode
-- ----------------------------
DROP TABLE IF EXISTS `sucai_invitationcode`;
CREATE TABLE `sucai_invitationcode` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `invitation_code` varchar(45) DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `create_time` int(11) DEFAULT NULL,
  `modify_time` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='代理商注册邀请码';

-- ----------------------------
-- Records of sucai_invitationcode
-- ----------------------------

-- ----------------------------
-- Table structure for sucai_message
-- ----------------------------
DROP TABLE IF EXISTS `sucai_message`;
CREATE TABLE `sucai_message` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `telephone` char(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `details` text NOT NULL,
  `createTime` int(11) NOT NULL,
  `type` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of sucai_message
-- ----------------------------

-- ----------------------------
-- Table structure for sucai_news
-- ----------------------------
DROP TABLE IF EXISTS `sucai_news`;
CREATE TABLE `sucai_news` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(100) DEFAULT NULL,
  `details` text NOT NULL,
  `createTime` int(11) DEFAULT NULL,
  `newsImg` varchar(100) CHARACTER SET latin1 NOT NULL,
  `type` tinyint(4) NOT NULL DEFAULT '1',
  `describe` text NOT NULL,
  `categoryId` int(11) NOT NULL,
  `clickNum` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of sucai_news
-- ----------------------------
INSERT INTO `sucai_news` VALUES ('6', 'fasdfasdfasdf', 'dddddddddddddddddfffffffwwwwww', '1508854336', '2016-09-23/57e48bdedabdf.png', '1', 'sadsad', '28', '111');
INSERT INTO `sucai_news` VALUES ('7', '', '\r\n                ', '1504271179', '', '1', '', '28', '0');

-- ----------------------------
-- Table structure for sucai_news_content
-- ----------------------------
DROP TABLE IF EXISTS `sucai_news_content`;
CREATE TABLE `sucai_news_content` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `newsId` int(8) DEFAULT NULL,
  `content` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of sucai_news_content
-- ----------------------------

-- ----------------------------
-- Table structure for sucai_news_user
-- ----------------------------
DROP TABLE IF EXISTS `sucai_news_user`;
CREATE TABLE `sucai_news_user` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'primary key',
  `username` varchar(30) NOT NULL COMMENT 'user name',
  `nickname` varchar(30) DEFAULT NULL COMMENT '昵称',
  `registertime` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `modifytime` timestamp NULL DEFAULT NULL,
  `icon` varchar(100) DEFAULT NULL,
  `password` varchar(32) NOT NULL,
  `email` varchar(32) NOT NULL,
  `ischeck` tinyint(1) unsigned zerofill DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of sucai_news_user
-- ----------------------------

-- ----------------------------
-- Table structure for sucai_order
-- ----------------------------
DROP TABLE IF EXISTS `sucai_order`;
CREATE TABLE `sucai_order` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `orderNo` varchar(32) DEFAULT NULL,
  `adTypeId` int(11) NOT NULL,
  `packageId` int(11) NOT NULL,
  `userId` varchar(11) DEFAULT NULL,
  `orderName` varchar(60) CHARACTER SET utf8 NOT NULL,
  `location` varchar(60) CHARACTER SET utf8 NOT NULL,
  `remark` varchar(255) CHARACTER SET utf8 NOT NULL,
  `createTime` int(11) NOT NULL,
  `modifyTime` int(11) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '0',
  `agentId` int(11) DEFAULT NULL,
  `regional` varchar(45) CHARACTER SET utf8 NOT NULL,
  `trade_no` varchar(255) DEFAULT NULL,
  `backupId` int(11) NOT NULL COMMENT '授权编号',
  PRIMARY KEY (`id`),
  UNIQUE KEY `orderNo` (`orderNo`) USING BTREE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of sucai_order
-- ----------------------------

-- ----------------------------
-- Table structure for sucai_package
-- ----------------------------
DROP TABLE IF EXISTS `sucai_package`;
CREATE TABLE `sucai_package` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `packagename` varchar(30) CHARACTER SET utf8 NOT NULL,
  `createTime` int(11) NOT NULL,
  `modifyTime` int(11) DEFAULT NULL,
  `price` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of sucai_package
-- ----------------------------

-- ----------------------------
-- Table structure for sucai_seo
-- ----------------------------
DROP TABLE IF EXISTS `sucai_seo`;
CREATE TABLE `sucai_seo` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `alias` varchar(255) NOT NULL,
  `title` varchar(100) NOT NULL COMMENT 'seo标题',
  `keywords` varchar(255) NOT NULL COMMENT 'Seo关键字',
  `desc` varchar(255) NOT NULL COMMENT 'Seo描述',
  `createTime` int(11) NOT NULL COMMENT '创建时间',
  `modifyTime` int(11) NOT NULL COMMENT '最后一次修改时间',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8 COMMENT='麦粉吧SEO表';

-- ----------------------------
-- Records of sucai_seo
-- ----------------------------
INSERT INTO `sucai_seo` VALUES ('1', 'index', '首页', '首页', '首页', '1463551666', '0');
INSERT INTO `sucai_seo` VALUES ('2', 'case', '????????????1111', '????????????', '????????????', '1463552170', '0');
INSERT INTO `sucai_seo` VALUES ('3', 'casedetail', '案例详情', '案例详情', '案例详情', '1463552223', '0');
INSERT INTO `sucai_seo` VALUES ('4', 'service', '服务范围', '服务范围', '服务范围', '1463552272', '0');
INSERT INTO `sucai_seo` VALUES ('5', 'news', '新闻观点', '新闻观点', '新闻观点', '1463552453', '0');
INSERT INTO `sucai_seo` VALUES ('6', 'newsDetail', '新闻观点详情', '新闻观点详情', '新闻观点详情', '1463552484', '0');
INSERT INTO `sucai_seo` VALUES ('7', 'client', '服务客户', '服务客户', '服务客户', '1463552521', '0');
INSERT INTO `sucai_seo` VALUES ('8', 'about', '关于我们', '关于我们', '关于我们', '1463552542', '0');

-- ----------------------------
-- Table structure for sucai_style
-- ----------------------------
DROP TABLE IF EXISTS `sucai_style`;
CREATE TABLE `sucai_style` (
  `id` int(255) NOT NULL,
  `type` int(255) DEFAULT NULL,
  `style` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of sucai_style
-- ----------------------------

-- ----------------------------
-- Table structure for sucai_tag
-- ----------------------------
DROP TABLE IF EXISTS `sucai_tag`;
CREATE TABLE `sucai_tag` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tagName` varchar(255) NOT NULL,
  `caseId` int(11) NOT NULL,
  `createTime` int(11) NOT NULL,
  `type` int(2) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of sucai_tag
-- ----------------------------
INSERT INTO `sucai_tag` VALUES ('1', '22', '1', '1463642270', '0');
INSERT INTO `sucai_tag` VALUES ('2', '33', '1', '1463642326', '0');
INSERT INTO `sucai_tag` VALUES ('4', '33', '1', '1463642365', '0');
INSERT INTO `sucai_tag` VALUES ('7', '2', '2', '1463971497', '0');
INSERT INTO `sucai_tag` VALUES ('8', '222', '2', '1463971500', '0');
INSERT INTO `sucai_tag` VALUES ('9', '蓝色', '1', '1463980098', '1');
INSERT INTO `sucai_tag` VALUES ('10', '欧美风格', '1', '1463980107', '1');
INSERT INTO `sucai_tag` VALUES ('11', '国有企业', '1', '1463980125', '1');
INSERT INTO `sucai_tag` VALUES ('12', '天宸', '2', '1463983598', '1');
INSERT INTO `sucai_tag` VALUES ('13', '中环球船务', '3', '1463983728', '1');
INSERT INTO `sucai_tag` VALUES ('14', '&lt;script&gt;alert(\'gg);&lt;/script&gt;', '1', '1464336155', '1');

-- ----------------------------
-- Table structure for sucai_test
-- ----------------------------
DROP TABLE IF EXISTS `sucai_test`;
CREATE TABLE `sucai_test` (
  `id` int(10) unsigned zerofill NOT NULL AUTO_INCREMENT COMMENT '自增Id',
  `name` varchar(25) DEFAULT NULL,
  `passwd` varchar(32) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of sucai_test
-- ----------------------------

-- ----------------------------
-- Table structure for sucai_union
-- ----------------------------
DROP TABLE IF EXISTS `sucai_union`;
CREATE TABLE `sucai_union` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `districtId` int(11) NOT NULL,
  `publicName` varchar(100) NOT NULL,
  `createTime` int(11) NOT NULL,
  `modifyTime` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of sucai_union
-- ----------------------------

-- ----------------------------
-- Table structure for sucai_user
-- ----------------------------
DROP TABLE IF EXISTS `sucai_user`;
CREATE TABLE `sucai_user` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT '自增主键',
  `account` varchar(20) CHARACTER SET utf16 NOT NULL DEFAULT '' COMMENT '用户账号',
  `username` varchar(30) NOT NULL DEFAULT '' COMMENT '用户名',
  `sex` tinyint(4) NOT NULL DEFAULT '1' COMMENT '1 男性 2 女性 0 未知',
  `telephone` char(11) NOT NULL DEFAULT '' COMMENT '手机号码',
  `email` varchar(50) NOT NULL DEFAULT '' COMMENT '用户邮箱',
  `location` varchar(80) NOT NULL DEFAULT '' COMMENT '用户地区',
  `password` char(32) NOT NULL DEFAULT '' COMMENT '用户密码',
  `regTime` int(11) unsigned NOT NULL DEFAULT '0' COMMENT '注册时间',
  `modifyTime` int(11) unsigned NOT NULL DEFAULT '0' COMMENT '修改时间',
  `score` int(11) DEFAULT NULL,
  `headimg` varchar(255) CHARACTER SET latin1 DEFAULT NULL,
  `mobileHeadImg` varchar(255) CHARACTER SET latin1 DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of sucai_user
-- ----------------------------

-- ----------------------------
-- Table structure for sucai_usercode
-- ----------------------------
DROP TABLE IF EXISTS `sucai_usercode`;
CREATE TABLE `sucai_usercode` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `uid` int(11) DEFAULT NULL,
  `type` int(11) DEFAULT NULL,
  `code` varchar(45) DEFAULT NULL,
  `telephone` char(11) DEFAULT NULL,
  `sendTime` int(11) DEFAULT NULL,
  `status` tinyint(2) DEFAULT '1',
  `remark` varchar(45) DEFAULT NULL,
  `createTime` int(11) DEFAULT NULL,
  `modifyTime` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id_UNIQUE` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='验证码表';

-- ----------------------------
-- Records of sucai_usercode
-- ----------------------------

-- ----------------------------
-- Table structure for sucai_userscore
-- ----------------------------
DROP TABLE IF EXISTS `sucai_userscore`;
CREATE TABLE `sucai_userscore` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `uid` int(11) DEFAULT NULL COMMENT '用户ID',
  `total` int(11) DEFAULT NULL COMMENT '总积分',
  `remark` varchar(100) DEFAULT NULL COMMENT '备注',
  `createTime` int(11) DEFAULT NULL COMMENT '创建时间',
  `modifyTime` int(11) DEFAULT NULL COMMENT '最后一次修改时间',
  PRIMARY KEY (`id`),
  UNIQUE KEY `id_UNIQUE` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='用户总积分表';

-- ----------------------------
-- Records of sucai_userscore
-- ----------------------------

-- ----------------------------
-- Table structure for sucai_userscorelog
-- ----------------------------
DROP TABLE IF EXISTS `sucai_userscorelog`;
CREATE TABLE `sucai_userscorelog` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `uid` int(11) DEFAULT NULL COMMENT '用户ID',
  `score` int(11) DEFAULT NULL COMMENT '分值',
  `remark` varchar(255) DEFAULT NULL COMMENT '备注',
  `createTime` int(11) DEFAULT NULL COMMENT '创建时间',
  `modifyTime` int(11) DEFAULT NULL COMMENT '最后一次修改时间',
  PRIMARY KEY (`id`),
  UNIQUE KEY `id_UNIQUE` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='用户积分纪录表';

-- ----------------------------
-- Records of sucai_userscorelog
-- ----------------------------
