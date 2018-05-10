/*
 Navicat MySQL Data Transfer

 Source Server         : localhost
 Source Server Type    : MySQL
 Source Server Version : 50722
 Source Host           : localhost:3306
 Source Schema         : qiaoqiaohua

 Target Server Type    : MySQL
 Target Server Version : 50722
 File Encoding         : 65001

 Date: 10/05/2018 15:15:27
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for comment
-- ----------------------------
DROP TABLE IF EXISTS `comment`;
CREATE TABLE `comment`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `articalid` int(11) NULL DEFAULT NULL,
  `from_id` int(11) NULL DEFAULT NULL,
  `text` varchar(200) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `ip` varchar(20) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `uptime` timestamp(0) NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP(0),
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 27 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of comment
-- ----------------------------
INSERT INTO `comment` VALUES (1, 1, 1, '1', '1', '2018-04-14 00:49:29');
INSERT INTO `comment` VALUES (2, 25, 149, 'regr', '211.101.61.87', '2018-04-14 00:52:06');
INSERT INTO `comment` VALUES (3, 24, 150, 'huihui', '211.101.61.87', '2018-04-14 00:54:45');
INSERT INTO `comment` VALUES (4, 27, 151, 'ahrugihreug', '211.101.61.87', '2018-04-14 00:58:49');
INSERT INTO `comment` VALUES (5, 27, 151, 'gregteg', '211.101.61.87', '2018-04-14 00:58:56');
INSERT INTO `comment` VALUES (6, 27, 151, '购房热会热', '211.101.61.87', '2018-04-14 00:59:02');
INSERT INTO `comment` VALUES (7, 27, 151, '购房热会热', '211.101.61.87', '2018-04-14 00:59:03');
INSERT INTO `comment` VALUES (8, 26, 151, '复燃而回归热', '211.101.61.87', '2018-04-14 00:59:12');
INSERT INTO `comment` VALUES (9, 27, 152, '苏光国', '211.101.61.87', '2018-04-14 00:59:54');
INSERT INTO `comment` VALUES (10, 27, 156, '9999', '211.101.61.87', '2018-04-14 01:08:10');
INSERT INTO `comment` VALUES (11, 26, 173, '埃及人防', '211.101.61.87', '2018-04-14 01:31:48');
INSERT INTO `comment` VALUES (12, 27, 173, 'ahruefihralifhraliuhuraliehugfliraehurgiregreg', '211.101.61.87', '2018-04-14 01:33:09');
INSERT INTO `comment` VALUES (13, 27, 173, '芙蓉湖', '211.101.61.87', '2018-04-14 01:33:51');
INSERT INTO `comment` VALUES (14, 27, 173, '安徽如热爱UI一腐恶奥拉夫', '211.101.61.87', '2018-04-14 01:33:59');
INSERT INTO `comment` VALUES (15, 27, 174, '傻逼sgg', '211.101.61.87', '2018-04-14 01:36:23');
INSERT INTO `comment` VALUES (16, 27, 175, '我是你的妹啊', '211.101.61.87', '2018-04-14 01:37:00');
INSERT INTO `comment` VALUES (17, 24, 186, 'rhug', '211.101.61.87', '2018-04-14 02:41:13');
INSERT INTO `comment` VALUES (18, 24, 186, 'harughurihlfahilashflihruraligfhuriag', '211.101.61.87', '2018-04-14 02:41:19');
INSERT INTO `comment` VALUES (19, 27, 187, '1222222222', '211.101.61.87', '2018-04-14 02:43:20');
INSERT INTO `comment` VALUES (20, 27, 187, '1222222222', '211.101.61.87', '2018-04-14 02:43:23');
INSERT INTO `comment` VALUES (21, 27, 187, 'hh', '211.101.61.87', '2018-04-14 02:45:00');
INSERT INTO `comment` VALUES (22, 27, 187, 'hh', '211.101.61.87', '2018-04-14 02:45:01');
INSERT INTO `comment` VALUES (23, 27, 185, '仍然个', '211.101.61.87', '2018-04-14 02:46:28');
INSERT INTO `comment` VALUES (24, 23, 186, 'are供热', '211.101.61.87', '2018-04-14 02:46:57');
INSERT INTO `comment` VALUES (25, 23, 186, '热一骨胡日恩爱老人俩二货', '211.101.61.87', '2018-04-14 02:47:05');
INSERT INTO `comment` VALUES (26, 27, 187, '啊啊人回复人安徽人福然后放入爱好了覅会让利润海峰让和覅挼hi法兰绒', '211.101.61.87', '2018-04-14 02:49:47');

-- ----------------------------
-- Table structure for mimi
-- ----------------------------
DROP TABLE IF EXISTS `mimi`;
CREATE TABLE `mimi`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `from_id` int(11) NOT NULL,
  `ip` varchar(30) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `city_name` varchar(10) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `title` varchar(300) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `uptime` timestamp(0) NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP(0),
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 28 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of mimi
-- ----------------------------
INSERT INTO `mimi` VALUES (2, 102, '', '北京', 'gregreg', '2018-04-09 22:16:29');
INSERT INTO `mimi` VALUES (3, 103, '211.101.61.87', '北京', 'abc', '2018-04-09 22:19:20');
INSERT INTO `mimi` VALUES (4, 103, '211.101.61.87', '北京', 'abc3424', '2018-04-09 22:19:51');
INSERT INTO `mimi` VALUES (5, 2, '211.101.61.87', '北京', 'hreugregreg', '2018-04-13 13:17:05');
INSERT INTO `mimi` VALUES (6, 2, '211.101.61.87', '北京', 'regreg', '2018-04-13 13:52:06');
INSERT INTO `mimi` VALUES (7, 8, '211.101.61.87', '北京', 'sgg', '2018-04-13 13:27:30');
INSERT INTO `mimi` VALUES (8, 8, '211.101.61.87', '北京', 'aregefgverg', '2018-04-13 13:52:11');
INSERT INTO `mimi` VALUES (9, 17, '211.101.61.87', '北京', 'egrgte', '2018-04-13 13:48:14');
INSERT INTO `mimi` VALUES (10, 17, '211.101.61.87', '北京', 'serhgtshgfgb', '2018-04-13 13:48:20');
INSERT INTO `mimi` VALUES (11, 17, '211.101.61.87', '北京', 'arnhfurenjfkr', '2018-04-13 13:48:25');
INSERT INTO `mimi` VALUES (12, 18, '211.101.61.87', '北京', 'sregnreghjrebg', '2018-04-13 13:48:49');
INSERT INTO `mimi` VALUES (13, 18, '211.101.61.87', '北京', 'rahugfirhuakfrhga', '2018-04-13 13:48:58');
INSERT INTO `mimi` VALUES (14, 18, '211.101.61.87', '北京', 'arfhuriahvfhjdbvjhraegreg', '2018-04-13 13:49:05');
INSERT INTO `mimi` VALUES (15, 18, '211.101.61.87', '北京', 'aregre', '2018-04-13 13:49:21');
INSERT INTO `mimi` VALUES (16, 18, '211.101.61.87', '北京', 'arnfhursavfdvhraeg', '2018-04-13 13:49:27');
INSERT INTO `mimi` VALUES (17, 18, '211.101.61.87', '北京', 'skndcjkvbraliufgrae', '2018-04-13 13:49:33');
INSERT INTO `mimi` VALUES (18, 18, '211.101.61.87', '北京', 'ankrjgnrak.sngjfkdnv', '2018-04-13 13:49:38');
INSERT INTO `mimi` VALUES (19, 16, '211.101.61.87', '北京', 'regregreg', '2018-04-13 13:51:01');
INSERT INTO `mimi` VALUES (20, 16, '211.101.61.87', '北京', 'ahweufhruekg', '2018-04-13 13:51:06');
INSERT INTO `mimi` VALUES (21, 16, '211.101.61.87', '北京', 'herauihfuriehvfv', '2018-04-13 13:51:12');
INSERT INTO `mimi` VALUES (22, 16, '211.101.61.87', '北京', '爱人是覅滑丝富华里阿双方还拉上发挥萨迪 ', '2018-04-13 16:24:39');
INSERT INTO `mimi` VALUES (23, 16, '211.101.61.87', '北京', '爱人合格我挼二夫人哈诶福然而福利绕回来风和日丽好福利然而回复里染黑了发货绕路分行', '2018-04-13 16:24:28');
INSERT INTO `mimi` VALUES (24, 138, '211.101.61.87', '北京', '123', '2018-04-13 16:30:42');
INSERT INTO `mimi` VALUES (25, 139, '211.101.61.87', '北京', '456', '2018-04-13 16:34:36');
INSERT INTO `mimi` VALUES (26, 140, '211.101.61.87', '北京', 'hello', '2018-04-13 16:35:12');
INSERT INTO `mimi` VALUES (27, 178, '', '北京', '123', '2018-04-13 17:50:43');

-- ----------------------------
-- Table structure for u_chat_msg
-- ----------------------------
DROP TABLE IF EXISTS `u_chat_msg`;
CREATE TABLE `u_chat_msg`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `from_id` int(11) NOT NULL,
  `to_id` int(11) NOT NULL,
  `content` varchar(150) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `ip` varchar(20) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `up_time` timestamp(0) NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP(0),
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 50 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of u_chat_msg
-- ----------------------------
INSERT INTO `u_chat_msg` VALUES (3, 2, 1, 'hello1å·', NULL, '2018-04-04 22:37:23');
INSERT INTO `u_chat_msg` VALUES (4, 1, 2, 'hello2hao', NULL, '2018-04-04 22:37:35');
INSERT INTO `u_chat_msg` VALUES (5, 1, 2, 'é˜¿è™Ž', NULL, '2018-04-04 22:37:55');
INSERT INTO `u_chat_msg` VALUES (6, 2, 1, 'arefreg', NULL, '2018-04-04 22:44:19');
INSERT INTO `u_chat_msg` VALUES (7, 1, 2, 'aregraeg', NULL, '2018-04-04 22:44:27');
INSERT INTO `u_chat_msg` VALUES (8, 1, 2, '苏光国', NULL, '2018-04-04 22:44:43');
INSERT INTO `u_chat_msg` VALUES (9, 2, 1, 'srrtg', NULL, '2018-04-04 22:53:46');
INSERT INTO `u_chat_msg` VALUES (10, 1, 2, 'regfreg', NULL, '2018-04-09 16:38:07');
INSERT INTO `u_chat_msg` VALUES (11, 1, 2, '1', NULL, '2018-04-09 16:38:10');
INSERT INTO `u_chat_msg` VALUES (12, 1, 2, '2', NULL, '2018-04-09 16:38:13');
INSERT INTO `u_chat_msg` VALUES (13, 1, 2, 'd', NULL, '2018-04-09 16:38:16');
INSERT INTO `u_chat_msg` VALUES (14, 1, 2, '2', NULL, '2018-04-09 16:38:20');
INSERT INTO `u_chat_msg` VALUES (15, 1, 2, '2', NULL, '2018-04-09 16:38:23');
INSERT INTO `u_chat_msg` VALUES (16, 1, 2, '2', NULL, '2018-04-09 16:38:30');
INSERT INTO `u_chat_msg` VALUES (17, 1, 2, '3', NULL, '2018-04-09 16:38:38');
INSERT INTO `u_chat_msg` VALUES (18, 3, 1, '2', NULL, '2018-04-09 16:40:27');
INSERT INTO `u_chat_msg` VALUES (19, 3, 1, '2', NULL, '2018-04-09 16:40:30');
INSERT INTO `u_chat_msg` VALUES (20, 3, 1, '3', NULL, '2018-04-09 16:40:33');
INSERT INTO `u_chat_msg` VALUES (21, 3, 1, '4', NULL, '2018-04-09 16:40:36');
INSERT INTO `u_chat_msg` VALUES (22, 3, 1, '5', NULL, '2018-04-09 16:40:39');
INSERT INTO `u_chat_msg` VALUES (23, 3, 1, '3', NULL, '2018-04-09 16:40:43');
INSERT INTO `u_chat_msg` VALUES (24, 3, 1, 'wew', NULL, '2018-04-09 16:40:51');
INSERT INTO `u_chat_msg` VALUES (25, 4, 1, '21', NULL, '2018-04-09 16:42:37');
INSERT INTO `u_chat_msg` VALUES (26, 4, 1, '2134', NULL, '2018-04-09 16:42:40');
INSERT INTO `u_chat_msg` VALUES (27, 4, 1, '213', NULL, '2018-04-09 16:42:44');
INSERT INTO `u_chat_msg` VALUES (28, 4, 1, '213214', NULL, '2018-04-09 16:42:47');
INSERT INTO `u_chat_msg` VALUES (29, 4, 1, '23434', NULL, '2018-04-09 16:42:51');
INSERT INTO `u_chat_msg` VALUES (30, 4, 1, '234324', NULL, '2018-04-09 16:42:55');
INSERT INTO `u_chat_msg` VALUES (31, 4, 1, '你好啊美女', NULL, '2018-04-09 16:43:02');
INSERT INTO `u_chat_msg` VALUES (32, 6, 5, 'rehfurefg', NULL, '2018-04-09 16:43:17');
INSERT INTO `u_chat_msg` VALUES (33, 6, 5, 'raegfreg', NULL, '2018-04-09 16:43:24');
INSERT INTO `u_chat_msg` VALUES (34, 6, 5, 'ergfreg', NULL, '2018-04-09 16:43:27');
INSERT INTO `u_chat_msg` VALUES (35, 6, 5, 'regreg', NULL, '2018-04-09 16:43:31');
INSERT INTO `u_chat_msg` VALUES (36, 6, 5, 'reagreg', NULL, '2018-04-09 16:43:35');
INSERT INTO `u_chat_msg` VALUES (37, 6, 5, 'regregre', NULL, '2018-04-09 16:43:39');
INSERT INTO `u_chat_msg` VALUES (38, 6, 5, 'asdhufrauif', NULL, '2018-04-09 16:43:43');
INSERT INTO `u_chat_msg` VALUES (39, 6, 5, 'reagregreg', NULL, '2018-04-09 16:43:47');
INSERT INTO `u_chat_msg` VALUES (40, 5, 6, 'frefre', NULL, '2018-04-09 16:44:03');
INSERT INTO `u_chat_msg` VALUES (41, 6, 5, 'aerfr', NULL, '2018-04-09 16:44:11');
INSERT INTO `u_chat_msg` VALUES (42, 5, 6, 'regregeg', NULL, '2018-04-09 16:44:17');
INSERT INTO `u_chat_msg` VALUES (43, 29, 28, '你好', NULL, '2018-04-09 17:23:02');
INSERT INTO `u_chat_msg` VALUES (44, 5, 3, '12333', NULL, '2018-04-13 13:21:14');
INSERT INTO `u_chat_msg` VALUES (45, 6, 3, '12412412', NULL, '2018-04-13 13:22:07');
INSERT INTO `u_chat_msg` VALUES (46, 1, 2, '233', NULL, '2018-04-13 13:23:56');
INSERT INTO `u_chat_msg` VALUES (47, 1, 2, '233', NULL, '2018-04-13 13:25:04');
INSERT INTO `u_chat_msg` VALUES (48, 1, 2, '233', NULL, '2018-04-13 13:25:32');
INSERT INTO `u_chat_msg` VALUES (49, 8, 3, 'aregregre', NULL, '2018-04-13 13:26:24');

SET FOREIGN_KEY_CHECKS = 1;
