/*
 Navicat Premium Data Transfer

 Source Server         : localhost
 Source Server Type    : MySQL
 Source Server Version : 100418
 Source Host           : localhost:3306
 Source Schema         : dbsheet

 Target Server Type    : MySQL
 Target Server Version : 100418
 File Encoding         : 65001

 Date: 15/07/2021 02:16:30
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for admins
-- ----------------------------
DROP TABLE IF EXISTS `admins`;
CREATE TABLE `admins`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `last_activity` datetime(6) NOT NULL,
  `user_id` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `logged_status` tinyint(1) NULL DEFAULT NULL,
  `update_status` tinyint(1) NULL DEFAULT NULL,
  `password` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  INDEX `last_activity_idx`(`last_activity`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 2 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of admins
-- ----------------------------
INSERT INTO `admins` VALUES (1, '2021-07-15 10:31:05.000000', 'tokyo03silk', 2, 2, '3ed34a491e88876c3917e565500e7d2b085bf6fa');

-- ----------------------------
-- Table structure for details
-- ----------------------------
DROP TABLE IF EXISTS `details`;
CREATE TABLE `details`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `product_id` int(11) NULL DEFAULT NULL,
  `back` decimal(11, 0) NULL DEFAULT NULL,
  `shoulder` decimal(11, 0) NULL DEFAULT NULL,
  `yuki` decimal(11, 0) NULL DEFAULT NULL,
  `shawl` decimal(11, 0) NULL DEFAULT NULL,
  `sleeve_width` decimal(11, 0) NULL DEFAULT NULL,
  `sleeve_length` decimal(11, 0) NULL DEFAULT NULL,
  `with_sleeves` decimal(11, 0) NULL DEFAULT NULL,
  `front_width` decimal(11, 0) NULL DEFAULT NULL,
  `back_width` decimal(11, 0) NULL DEFAULT NULL,
  `under_hood` decimal(11, 0) NULL DEFAULT NULL,
  `hug` decimal(11, 0) NULL DEFAULT NULL,
  `width` decimal(11, 0) NULL DEFAULT NULL,
  `carry_forward` decimal(11, 0) NULL DEFAULT NULL,
  `hips` decimal(11, 0) NULL DEFAULT NULL,
  `bust` decimal(11, 0) NULL DEFAULT NULL,
  `status` tinyint(1) NULL DEFAULT NULL,
  `admin_id` int(11) NULL DEFAULT NULL,
  `west` decimal(11, 0) NULL DEFAULT NULL,
  `height` decimal(11, 0) NULL DEFAULT NULL,
  `user_id` int(11) NULL DEFAULT NULL,
  `parent_id` int(11) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 19 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Table structure for family
-- ----------------------------
DROP TABLE IF EXISTS `family`;
CREATE TABLE `family`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `nick_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `birthday` date NULL DEFAULT NULL,
  `sex` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `content` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `user_id` int(11) NULL DEFAULT NULL,
  `status` tinyint(255) NULL DEFAULT 1,
  `admin_id` int(11) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 202 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of family
-- ----------------------------
INSERT INTO `family` VALUES (101, '池上太郎', 'いけがみたろう', '1976-01-01', '1', '長男', 1, 2, NULL);
INSERT INTO `family` VALUES (102, '池上花子', 'いけがみはなこ', '1976-01-02', '2', '長女', 1, 2, NULL);
INSERT INTO `family` VALUES (103, '大竹太郎', 'おおたけたろう', '1976-01-03', '1', '長女', 2, 2, NULL);
INSERT INTO `family` VALUES (104, '大竹花子', 'おおたけはなこ', '1976-01-04', '2', '孫', 2, 2, NULL);
INSERT INTO `family` VALUES (105, '大和田太郎', 'おおわだたろう', '1976-01-05', '1', '長男', 3, 2, NULL);
INSERT INTO `family` VALUES (106, '大和田花子', 'おおわだはなこ', '1976-01-06', '2', '長女', 3, 2, NULL);
INSERT INTO `family` VALUES (107, '古川太郎', 'ふるかわたろう', '1976-01-07', '1', '長男', 4, 2, NULL);
INSERT INTO `family` VALUES (108, '古川花子', 'ふるかわはなこ', '1976-01-08', '2', '長女', 4, 2, NULL);
INSERT INTO `family` VALUES (109, '中西太郎', 'なかにしたろう', '1976-01-09', '1', '長男', 5, 2, NULL);
INSERT INTO `family` VALUES (110, '中西花子', 'なかにしはなこ', '1976-01-10', '2', '長女', 5, 2, NULL);
INSERT INTO `family` VALUES (111, '上田太郎', 'うえだたろう', '1976-01-11', '1', '長男', 6, 2, NULL);
INSERT INTO `family` VALUES (112, '上田花子', 'うえだはなこ', '1976-01-12', '2', '長女', 6, 2, NULL);
INSERT INTO `family` VALUES (113, '宮本太郎', 'みやもとたろう', '1976-01-13', '1', '長男', 7, 2, NULL);
INSERT INTO `family` VALUES (114, '宮本花子', 'みやもとはなこ', '1976-01-14', '2', '長女', 7, 2, NULL);
INSERT INTO `family` VALUES (115, '山野太郎', 'やまのたろう', '1976-01-15', '1', '長男', 8, 2, NULL);
INSERT INTO `family` VALUES (116, '山野花子', 'やまのはなこ', '1976-01-16', '2', '長女', 8, 2, NULL);
INSERT INTO `family` VALUES (117, '島村太郎', 'しまむらたろう', '1976-01-17', '1', '長男', 9, 2, NULL);
INSERT INTO `family` VALUES (118, '島村花子', 'しまむらはなこ', '1976-01-18', '2', '長女', 9, 2, NULL);
INSERT INTO `family` VALUES (119, '滋賀太郎', 'しがたろう', '1976-01-19', '1', '長男', 10, 2, NULL);
INSERT INTO `family` VALUES (120, '滋賀花子', 'しがはなこ', '1976-01-20', '2', '孫', 10, 2, NULL);
INSERT INTO `family` VALUES (121, '熊田太郎', 'くまだたろう', '1976-01-21', '1', '長男', 11, 2, NULL);
INSERT INTO `family` VALUES (122, '熊田花子', 'くまだはなこ', '1976-01-22', '2', '長女', 11, 2, NULL);
INSERT INTO `family` VALUES (123, '高沢太郎', 'たかざわたろう', '1976-01-23', '1', '長男', 12, 2, NULL);
INSERT INTO `family` VALUES (124, '高沢花子', 'たかざわはなこ', '1976-01-24', '2', '長女', 12, 2, NULL);
INSERT INTO `family` VALUES (125, '黒岩太郎', 'くろいわたろう', '1976-01-25', '1', '長男', 13, 2, NULL);
INSERT INTO `family` VALUES (126, '黒岩花子', 'くろいわはなこ', '1976-01-26', '2', '長女', 13, 2, NULL);
INSERT INTO `family` VALUES (127, '山岸太郎', 'やまぎしたろう', '1976-01-27', '1', '長男', 14, 2, NULL);
INSERT INTO `family` VALUES (128, '山岸花子', 'やまぎしはなこ', '1976-01-28', '2', '長女', 14, 2, NULL);
INSERT INTO `family` VALUES (129, '小沢太郎', 'おざわたろう', '1976-01-29', '1', '長男', 15, 2, NULL);
INSERT INTO `family` VALUES (130, '小沢花子', 'おざわはなこ', '1976-02-01', '2', '長女', 15, 2, NULL);
INSERT INTO `family` VALUES (131, '田尻太郎', 'たじりたろう', '1976-02-02', '1', '長男', 16, 2, NULL);
INSERT INTO `family` VALUES (132, '田尻花子', 'たじりはなこ', '1976-02-03', '2', '長女', 16, 2, NULL);
INSERT INTO `family` VALUES (133, '中嶋太郎', 'なかじまたろう', '1976-02-04', '1', '長男', 17, 2, NULL);
INSERT INTO `family` VALUES (134, '中嶋花子', 'なかじまはなこ', '1976-02-05', '2', '長女', 17, 2, NULL);
INSERT INTO `family` VALUES (135, '松岡太郎', 'まつおかたろう', '1976-02-06', '1', '長男', 18, 2, NULL);
INSERT INTO `family` VALUES (136, '松岡花子', 'まつおかはなこ', '1976-02-07', '2', '長女', 18, 2, NULL);
INSERT INTO `family` VALUES (137, '吉澤太郎', 'よしざわたろう', '1976-02-08', '1', '長男', 19, 2, NULL);
INSERT INTO `family` VALUES (138, '吉澤花子', 'よしざわはなこ', '1976-02-09', '2', '長女', 19, 2, NULL);
INSERT INTO `family` VALUES (139, '西島太郎', 'にしじまたろう', '1976-02-10', '1', '長男', 20, 2, NULL);
INSERT INTO `family` VALUES (140, '西島花子', 'にしじまはなこ', '1976-02-11', '2', '長女', 20, 2, NULL);
INSERT INTO `family` VALUES (141, '高嶋太郎', 'たかしまたろう', '1976-02-12', '1', '長男', 21, 2, NULL);
INSERT INTO `family` VALUES (142, '高嶋花子', 'たかしまはなこ', '1976-02-13', '2', '長女', 21, 2, NULL);
INSERT INTO `family` VALUES (143, '村井太郎', 'むらいたろう', '1976-02-14', '1', '長男', 22, 2, NULL);
INSERT INTO `family` VALUES (144, '村井花子', 'むらいはなこ', '1976-02-15', '2', '長女', 22, 2, NULL);
INSERT INTO `family` VALUES (145, '黒崎太郎', 'くろさきたろう', '1976-02-16', '1', '長男', 23, 2, NULL);
INSERT INTO `family` VALUES (146, '黒崎花子', 'くろさきはなこ', '1976-02-17', '2', '長女', 23, 2, NULL);
INSERT INTO `family` VALUES (147, '的場太郎', 'まとばたろう', '1976-02-18', '1', '長男', 24, 2, NULL);
INSERT INTO `family` VALUES (148, '的場花子', 'まとばはなこ', '1976-02-19', '2', '長女', 24, 2, NULL);
INSERT INTO `family` VALUES (149, '羽田太郎', 'はたたろう', '1976-02-20', '1', '長男', 25, 2, NULL);
INSERT INTO `family` VALUES (150, '羽田花子', 'はたはなこ', '1976-02-21', '2', '長女', 25, 2, NULL);
INSERT INTO `family` VALUES (151, '井原太郎', 'いはらたろう', '1976-02-22', '1', '長男', 26, 2, NULL);
INSERT INTO `family` VALUES (152, '井原花子', 'いはらはなこ', '1976-02-23', '2', '長女', 26, 2, NULL);
INSERT INTO `family` VALUES (153, '会田太郎', 'あいだたろう', '1976-02-24', '1', '長男', 27, 2, NULL);
INSERT INTO `family` VALUES (154, '会田花子', 'あいだはなこ', '1976-02-25', '2', '長女', 27, 2, NULL);
INSERT INTO `family` VALUES (155, '中太郎', 'なかたろう', '1976-02-26', '1', '長男', 28, 2, NULL);
INSERT INTO `family` VALUES (156, '中花子', 'なかはなこ', '1976-02-27', '2', '長女', 28, 2, NULL);
INSERT INTO `family` VALUES (157, '大高太郎', 'おおたかたろう', '1976-02-28', '1', '長男', 29, 2, NULL);
INSERT INTO `family` VALUES (158, '大高花子', 'おおたかはなこ', '1976-03-01', '2', '長女', 29, 2, NULL);
INSERT INTO `family` VALUES (159, '重松太郎', 'しげまつたろう', '1976-03-02', '1', '長男', 30, 2, NULL);
INSERT INTO `family` VALUES (160, '重松花子', 'しげまつはなこ', '1976-03-03', '2', '長女', 30, 2, NULL);
INSERT INTO `family` VALUES (161, '志村太郎', 'しむらたろう', '1976-03-04', '1', '長男', 31, 2, NULL);
INSERT INTO `family` VALUES (162, '志村花子', 'しむらはなこ', '1976-03-05', '2', '長女', 31, 2, NULL);
INSERT INTO `family` VALUES (163, '江原太郎', 'えはらたろう', '1976-03-06', '1', '長男', 32, 2, NULL);
INSERT INTO `family` VALUES (164, '江原花子', 'えはらはなこ', '1976-03-07', '2', '長女', 32, 2, NULL);
INSERT INTO `family` VALUES (165, '吉田太郎', 'よしだたろう', '1976-03-08', '1', '長男', 33, 2, NULL);
INSERT INTO `family` VALUES (166, '吉田花子', 'よしだはなこ', '1976-03-09', '2', '長女', 33, 2, NULL);
INSERT INTO `family` VALUES (167, '森本太郎', 'もりもとたろう', '1976-03-10', '1', '長男', 34, 2, NULL);
INSERT INTO `family` VALUES (168, '森本花子', 'もりもとはなこ', '1976-03-11', '2', '長女', 34, 2, NULL);
INSERT INTO `family` VALUES (169, '杉浦太郎', 'すぎうらたろう', '1976-03-12', '1', '長男', 35, 2, NULL);
INSERT INTO `family` VALUES (170, '杉浦花子', 'すぎうらはなこ', '1976-03-13', '2', '長女', 35, 2, NULL);
INSERT INTO `family` VALUES (171, '岡山太郎', 'おかやまたろう', '1976-03-14', '1', '長男', 36, 2, NULL);
INSERT INTO `family` VALUES (172, '岡山花子', 'おかやまはなこ', '1976-03-15', '2', '長女', 36, 2, NULL);
INSERT INTO `family` VALUES (173, '寺崎太郎', 'てらさきたろう', '1976-03-16', '1', '長男', 37, 2, NULL);
INSERT INTO `family` VALUES (174, '寺崎花子', 'てらさきはなこ', '1976-03-17', '2', '長女', 37, 2, NULL);
INSERT INTO `family` VALUES (175, '青柳太郎', 'あおやぎたろう', '1976-03-18', '1', '長男', 38, 2, NULL);
INSERT INTO `family` VALUES (176, '青柳花子', 'あおやぎはなこ', '1976-03-19', '2', '長女', 38, 2, NULL);
INSERT INTO `family` VALUES (177, '榎本太郎', 'えのもとたろう', '1976-03-20', '1', '長男', 39, 2, NULL);
INSERT INTO `family` VALUES (178, '榎本花子', 'えのもとはなこ', '1976-03-21', '2', '長女', 39, 2, NULL);
INSERT INTO `family` VALUES (179, '岩下太郎', 'いわしたたろう', '1976-03-22', '1', '長男', 40, 2, NULL);
INSERT INTO `family` VALUES (180, '岩下花子', 'いわしたはなこ', '1976-03-23', '2', '長女', 40, 2, NULL);
INSERT INTO `family` VALUES (181, '堀井太郎', 'ほりいたろう', '1976-03-24', '1', '長男', 41, 2, NULL);
INSERT INTO `family` VALUES (182, '堀井花子', 'ほりいはなこ', '1976-03-25', '2', '長女', 41, 2, NULL);
INSERT INTO `family` VALUES (183, '平松太郎', 'ひらまつたろう', '1976-03-26', '1', '長男', 42, 2, NULL);
INSERT INTO `family` VALUES (184, '平松花子', 'ひらまつはなこ', '1976-03-27', '2', '長女', 42, 2, NULL);
INSERT INTO `family` VALUES (185, '森山太郎', 'もりやまたろう', '1976-03-28', '1', '長男', 43, 2, NULL);
INSERT INTO `family` VALUES (186, '森山花子', 'もりやまはなこ', '1976-03-29', '2', '長女', 43, 2, NULL);
INSERT INTO `family` VALUES (187, '大関太郎', 'おおぜきたろう', '1976-03-30', '1', '長男', 44, 2, NULL);
INSERT INTO `family` VALUES (188, '大関花子', 'おおぜきはなこ', '1976-04-01', '2', '長女', 44, 2, NULL);
INSERT INTO `family` VALUES (189, '有馬太郎', 'ありまたろう', '1976-04-02', '1', '長男', 45, 2, NULL);
INSERT INTO `family` VALUES (190, '有馬花子', 'ありまはなこ', '1976-04-03', '2', '長女', 45, 2, NULL);
INSERT INTO `family` VALUES (191, '緒方太郎', 'おかたたろう', '1976-04-04', '1', '長男', 46, 2, NULL);
INSERT INTO `family` VALUES (192, '緒方花子', 'おかたはなこ', '1976-04-05', '2', '長女', 46, 2, NULL);
INSERT INTO `family` VALUES (193, '朝倉太郎', 'あさくらたろう', '1976-04-06', '1', '長男', 47, 2, NULL);
INSERT INTO `family` VALUES (194, '朝倉花子', 'あさくらはなこ', '1976-04-07', '2', '長女', 47, 2, NULL);
INSERT INTO `family` VALUES (195, '寺岡太郎', 'てらおかたろう', '1976-04-08', '1', '長男', 48, 2, NULL);
INSERT INTO `family` VALUES (196, '寺岡花子', 'てらおかはなこ', '1976-04-09', '2', '長女', 48, 2, NULL);
INSERT INTO `family` VALUES (197, '篠崎太郎', 'しのざきたろう', '1976-04-10', '1', '長男', 49, 2, NULL);
INSERT INTO `family` VALUES (198, '篠崎花子', 'しのざきはなこ', '1976-04-11', '2', '長女', 49, 2, NULL);
INSERT INTO `family` VALUES (199, '和田太郎', 'わだたろう', '1976-04-12', '1', '長男', 50, 2, NULL);
INSERT INTO `family` VALUES (200, '和田花子', 'わだはなこ', '1976-04-13', '2', '長女', 50, 2, NULL);

-- ----------------------------
-- Table structure for products
-- ----------------------------
DROP TABLE IF EXISTS `products`;
CREATE TABLE `products`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NULL DEFAULT NULL,
  `date` date NULL DEFAULT NULL,
  `content` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `price` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `etc` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `status` tinyint(1) NULL DEFAULT 1,
  `admin_id` int(11) NULL DEFAULT NULL,
  `image` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `remark` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `delivery_date` date NULL DEFAULT NULL,
  `making` tinyint(1) NULL DEFAULT 1,
  `family_id` int(11) NULL DEFAULT NULL,
  `user_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 202 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of products
-- ----------------------------
INSERT INTO `products` VALUES (1, 1, '2000-01-01', '特殊加工あり', '2000', NULL, '訪問着', 2, 1, NULL, NULL, NULL, 1, NULL, '池上香音');
INSERT INTO `products` VALUES (2, 1, '2000-01-01', 'お直し', '32000', NULL, '振袖', 2, 1, NULL, NULL, NULL, 1, NULL, '池上香音');
INSERT INTO `products` VALUES (3, 1, '2020-01-01', '', '1200000', NULL, '浴衣', 2, 1, NULL, NULL, NULL, 1, NULL, '池上太郎');
INSERT INTO `products` VALUES (4, 1, '2020-01-01', '特殊加工あり', '40000', NULL, 'メンズ浴衣', 2, 1, NULL, NULL, NULL, 1, NULL, '池上花子');
INSERT INTO `products` VALUES (5, 2, '2019-03-04', '特殊加工あり', '761810', NULL, '訪問着', 2, 1, NULL, NULL, NULL, 1, NULL, '大竹凛');
INSERT INTO `products` VALUES (6, 2, '2019-03-04', '', '223595', NULL, '振袖', 2, 1, NULL, NULL, NULL, 1, NULL, '大竹凛');
INSERT INTO `products` VALUES (7, 2, '1999-12-31', '', '268340', NULL, '小物', 2, 1, NULL, NULL, NULL, 1, NULL, '大竹太郎');
INSERT INTO `products` VALUES (8, 2, '1999-12-31', '', '301642', NULL, 'メンズ浴衣', 2, 1, NULL, NULL, NULL, 1, NULL, '大竹花子');
INSERT INTO `products` VALUES (9, 3, '2000-01-01', '特殊加工あり', '108085', NULL, '訪問着', 2, 1, NULL, NULL, NULL, 1, NULL, '大和田雛');
INSERT INTO `products` VALUES (10, 3, '2000-01-01', 'お直し', '748894', NULL, '振袖', 2, 1, NULL, NULL, NULL, 1, NULL, '大和田雛');
INSERT INTO `products` VALUES (11, 3, '2020-01-01', '特殊加工あり', '733424', NULL, '浴衣', 2, 1, NULL, NULL, NULL, 1, NULL, '大和田太郎');
INSERT INTO `products` VALUES (12, 3, '2020-01-01', '', '530925', NULL, 'メンズ浴衣', 2, 1, NULL, NULL, NULL, 1, NULL, '大和田花子');
INSERT INTO `products` VALUES (13, 4, '2019-03-04', '', '773901', NULL, '訪問着', 2, 1, NULL, NULL, NULL, 1, NULL, '古川浩秋');
INSERT INTO `products` VALUES (14, 4, '2019-03-04', '', '542045', NULL, '振袖', 2, 1, NULL, NULL, NULL, 1, NULL, '古川太郎');
INSERT INTO `products` VALUES (15, 4, '1999-12-31', '', '404882', NULL, '浴衣', 2, 1, NULL, NULL, NULL, 1, NULL, '古川太郎');
INSERT INTO `products` VALUES (16, 4, '1999-12-31', '特殊加工あり', '664243', NULL, 'メンズ浴衣', 2, 1, NULL, NULL, NULL, 1, NULL, '古川花子');
INSERT INTO `products` VALUES (17, 5, '2000-01-01', 'お直し', '24071', NULL, '訪問着', 2, 1, NULL, NULL, NULL, 1, NULL, '中西淳子');
INSERT INTO `products` VALUES (18, 5, '2000-01-01', 'お直し', '69095', NULL, '振袖', 2, 1, NULL, NULL, NULL, 1, NULL, '中西淳子');
INSERT INTO `products` VALUES (19, 5, '2020-01-01', '特殊加工あり', '37011', NULL, '浴衣', 2, 1, NULL, NULL, NULL, 1, NULL, '中西太郎');
INSERT INTO `products` VALUES (20, 5, '2020-01-01', '', '741907', NULL, 'メンズ浴衣', 2, 1, NULL, NULL, NULL, 1, NULL, '中西花子');
INSERT INTO `products` VALUES (21, 6, '2019-03-04', '', '492070', NULL, '訪問着', 2, 1, NULL, NULL, NULL, 1, NULL, '上田晴花');
INSERT INTO `products` VALUES (22, 6, '2019-03-04', '', '676875', NULL, '振袖', 2, 1, NULL, NULL, NULL, 1, NULL, '上田晴花');
INSERT INTO `products` VALUES (23, 6, '1999-12-31', '', '928512', NULL, '浴衣', 2, 1, NULL, NULL, NULL, 1, NULL, '上田太郎');
INSERT INTO `products` VALUES (24, 6, '1999-12-31', '', '987961', NULL, '下駄', 2, 1, NULL, NULL, NULL, 1, NULL, '上田花子');
INSERT INTO `products` VALUES (25, 7, '2000-01-01', '', '341498', NULL, '訪問着', 2, 1, NULL, NULL, NULL, 1, NULL, '宮本貴美');
INSERT INTO `products` VALUES (26, 7, '2000-01-01', '', '581770', NULL, '振袖', 2, 1, NULL, NULL, NULL, 1, NULL, '宮本貴美');
INSERT INTO `products` VALUES (27, 7, '2020-01-01', '特殊加工あり', '168805', NULL, '浴衣', 2, 1, NULL, NULL, NULL, 1, NULL, '宮本太郎');
INSERT INTO `products` VALUES (28, 7, '2020-01-01', '特殊加工あり', '265234', NULL, 'メンズ浴衣', 2, 1, NULL, NULL, NULL, 1, NULL, '宮本花子');
INSERT INTO `products` VALUES (29, 8, '2013-11-11', 'お直し', '232989', NULL, '訪問着', 2, 1, NULL, NULL, NULL, 1, NULL, '山野琉那');
INSERT INTO `products` VALUES (30, 8, '2014-12-01', 'お直し', '260899', NULL, '振袖', 2, 1, NULL, NULL, NULL, 1, NULL, '山野琉那');
INSERT INTO `products` VALUES (31, 8, '2015-12-31', '特殊加工あり', '643913', NULL, '浴衣', 2, 1, NULL, NULL, NULL, 1, NULL, '山野太郎');
INSERT INTO `products` VALUES (32, 8, '2016-07-30', '特殊加工あり', '386181', NULL, 'メンズ浴衣', 2, 1, NULL, NULL, NULL, 1, NULL, '山野花子');
INSERT INTO `products` VALUES (33, 9, '2019-03-04', '特殊加工あり', '766804', NULL, '訪問着', 2, 1, NULL, NULL, NULL, 1, NULL, '島村俊樹');
INSERT INTO `products` VALUES (34, 9, '2019-03-04', '特殊加工あり', '3288', NULL, '振袖', 2, 1, NULL, NULL, NULL, 1, NULL, '島村俊樹');
INSERT INTO `products` VALUES (35, 9, '2013-11-11', '中古品', '518791', NULL, '浴衣', 2, 1, NULL, NULL, NULL, 1, NULL, '島村太郎');
INSERT INTO `products` VALUES (36, 9, '2014-12-01', '特殊加工あり', '468508', NULL, 'メンズ浴衣', 2, 1, NULL, NULL, NULL, 1, NULL, '島村花子');
INSERT INTO `products` VALUES (37, 10, '2015-12-31', '特殊加工あり', '21372', NULL, '訪問着', 2, 1, NULL, NULL, NULL, 1, NULL, '滋賀和花');
INSERT INTO `products` VALUES (38, 10, '2016-07-30', '特殊加工あり', '126333', NULL, '振袖', 2, 1, NULL, NULL, NULL, 1, NULL, '滋賀和花');
INSERT INTO `products` VALUES (39, 10, '1999-12-13', '特殊加工あり', '57080', NULL, '浴衣', 2, 1, NULL, NULL, NULL, 1, NULL, '滋賀太郎');
INSERT INTO `products` VALUES (40, 10, '1998-10-10', 'お直し', '88727', NULL, 'メンズ浴衣', 2, 1, NULL, NULL, NULL, 1, NULL, '滋賀花子');
INSERT INTO `products` VALUES (41, 11, '2000-01-01', 'お直し', '473369', NULL, '訪問着', 2, 1, NULL, NULL, NULL, 1, NULL, '熊田浩子');
INSERT INTO `products` VALUES (42, 11, '2000-01-01', '特殊加工あり', '485777', NULL, '振袖', 2, 1, NULL, NULL, NULL, 1, NULL, '熊田浩子');
INSERT INTO `products` VALUES (43, 11, '2020-01-01', '特殊加工あり', '392561', NULL, '浴衣', 2, 1, NULL, NULL, NULL, 1, NULL, '熊田太郎');
INSERT INTO `products` VALUES (44, 11, '2020-01-01', '特殊加工あり', '820711', NULL, 'メンズ浴衣', 2, 1, NULL, NULL, NULL, 1, NULL, '熊田花子');
INSERT INTO `products` VALUES (45, 12, '2013-11-11', '特殊加工あり', '932942', NULL, '訪問着', 2, 1, NULL, NULL, NULL, 1, NULL, '高沢麗子');
INSERT INTO `products` VALUES (46, 12, '2014-12-01', '特殊加工あり', '221586', NULL, '振袖', 2, 1, NULL, NULL, NULL, 1, NULL, '高沢麗子');
INSERT INTO `products` VALUES (47, 12, '2015-12-31', '特殊加工あり', '831964', NULL, '浴衣', 2, 1, NULL, NULL, NULL, 1, NULL, '高沢太郎');
INSERT INTO `products` VALUES (48, 12, '2016-07-30', '特殊加工あり', '434387', NULL, 'メンズ浴衣', 2, 1, NULL, NULL, NULL, 1, NULL, '高沢花子');
INSERT INTO `products` VALUES (49, 13, '2000-01-01', '', '421683', NULL, '帯', 2, 1, NULL, NULL, NULL, 1, NULL, '黒岩忍');
INSERT INTO `products` VALUES (50, 13, '2000-01-01', '', '582587', NULL, '振袖', 2, 1, NULL, NULL, NULL, 1, NULL, '黒岩忍');
INSERT INTO `products` VALUES (51, 13, '2020-01-01', '', '724334', NULL, '浴衣', 2, 1, NULL, NULL, NULL, 1, NULL, '黒岩太郎');
INSERT INTO `products` VALUES (52, 13, '2020-01-01', '', '445104', NULL, 'メンズ浴衣', 2, 1, NULL, NULL, NULL, 1, NULL, '黒岩花子');
INSERT INTO `products` VALUES (53, 14, '1990-12-12', '', '261510', NULL, '訪問着', 2, 1, NULL, NULL, NULL, 1, NULL, '山岸莉乃');
INSERT INTO `products` VALUES (54, 14, '1988-12-12', '', '63293', NULL, '振袖', 2, 1, NULL, NULL, NULL, 1, NULL, '山岸莉乃');
INSERT INTO `products` VALUES (55, 14, '2020-12-13', '特殊加工あり', '985152', NULL, '浴衣', 2, 1, NULL, NULL, NULL, 1, NULL, '山岸太郎');
INSERT INTO `products` VALUES (56, 14, '2018-10-19', '特殊加工あり', '984531', NULL, 'メンズ浴衣', 2, 1, NULL, NULL, NULL, 1, NULL, '山岸花子');
INSERT INTO `products` VALUES (57, 15, '2000-01-01', '特殊加工あり', '152139', NULL, '訪問着', 2, 1, NULL, NULL, NULL, 1, NULL, '小沢歩実');
INSERT INTO `products` VALUES (58, 15, '2000-01-01', '特殊加工あり', '477006', NULL, '振袖', 2, 1, NULL, NULL, NULL, 1, NULL, '小沢歩実');
INSERT INTO `products` VALUES (59, 15, '2020-01-01', 'お直し', '852363', NULL, '浴衣', 2, 1, NULL, NULL, NULL, 1, NULL, '小沢太郎');
INSERT INTO `products` VALUES (60, 15, '2020-01-01', 'お直し', '828039', NULL, 'メンズ浴衣', 2, 1, NULL, NULL, NULL, 1, NULL, '小沢花子');
INSERT INTO `products` VALUES (61, 16, '1988-12-12', 'お直し', '796402', NULL, '訪問着', 2, 1, NULL, NULL, NULL, 1, NULL, '田尻真依');
INSERT INTO `products` VALUES (62, 16, '2020-12-13', '特殊加工あり', '676215', NULL, '振袖', 2, 1, NULL, NULL, NULL, 1, NULL, '田尻真依');
INSERT INTO `products` VALUES (63, 16, '2018-10-19', '特殊加工あり', '436729', NULL, '浴衣', 2, 1, NULL, NULL, NULL, 1, NULL, '田尻太郎');
INSERT INTO `products` VALUES (64, 16, '2000-01-01', '', '691849', NULL, 'メンズ浴衣', 2, 1, NULL, NULL, NULL, 1, NULL, '田尻花子');
INSERT INTO `products` VALUES (65, 17, '1988-12-12', '', '618513', NULL, '訪問着', 2, 1, NULL, NULL, NULL, 1, NULL, '中嶋洋子');
INSERT INTO `products` VALUES (66, 17, '2020-12-13', '', '900042', NULL, '帯', 2, 1, NULL, NULL, NULL, 1, NULL, '中嶋洋子');
INSERT INTO `products` VALUES (67, 17, '2018-10-19', '', '628335', NULL, '浴衣', 2, 1, NULL, NULL, NULL, 1, NULL, '中嶋太郎');
INSERT INTO `products` VALUES (68, 17, '2000-01-01', '', '205257', NULL, 'メンズ浴衣', 2, 1, NULL, NULL, NULL, 1, NULL, '中嶋花子');
INSERT INTO `products` VALUES (69, 18, '2020-12-13', '', '112786', NULL, '訪問着', 2, 1, NULL, NULL, NULL, 1, NULL, '松岡勝美');
INSERT INTO `products` VALUES (70, 18, '2018-10-19', '', '544950', NULL, '振袖', 2, 1, NULL, NULL, NULL, 1, NULL, '松岡勝美');
INSERT INTO `products` VALUES (71, 18, '2000-01-01', '', '925608', NULL, '浴衣', 2, 1, NULL, NULL, NULL, 1, NULL, '松岡太郎');
INSERT INTO `products` VALUES (72, 18, '1988-12-12', '', '172970', NULL, 'メンズ浴衣', 2, 1, NULL, NULL, NULL, 1, NULL, '松岡花子');
INSERT INTO `products` VALUES (73, 19, '2000-01-01', '', '25017', NULL, '訪問着', 2, 1, NULL, NULL, NULL, 1, NULL, '吉澤桂子');
INSERT INTO `products` VALUES (74, 19, '1988-12-12', '', '87031', NULL, '振袖', 2, 1, NULL, NULL, NULL, 1, NULL, '吉澤桂子');
INSERT INTO `products` VALUES (75, 19, '2020-12-13', '', '11443', NULL, '浴衣', 2, 1, NULL, NULL, NULL, 1, NULL, '吉澤太郎');
INSERT INTO `products` VALUES (76, 19, '2018-10-19', '', '559178', NULL, 'メンズ浴衣', 2, 1, NULL, NULL, NULL, 1, NULL, '吉澤花子');
INSERT INTO `products` VALUES (77, 20, '2000-01-01', '', '366411', NULL, '訪問着', 2, 1, NULL, NULL, NULL, 1, NULL, '西島有里');
INSERT INTO `products` VALUES (78, 20, '2013-11-11', '', '419997', NULL, '振袖', 2, 1, NULL, NULL, NULL, 1, NULL, '西島有里');
INSERT INTO `products` VALUES (79, 20, '2014-12-01', '特殊加工あり', '806835', NULL, '浴衣', 2, 1, NULL, NULL, NULL, 1, NULL, '西島太郎');
INSERT INTO `products` VALUES (80, 20, '2015-12-31', '特殊加工あり', '610015', NULL, 'メンズ浴衣', 2, 1, NULL, NULL, NULL, 1, NULL, '西島花子');
INSERT INTO `products` VALUES (81, 21, '2016-07-30', '特殊加工あり', '757129', NULL, '訪問着', 2, 1, NULL, NULL, NULL, 1, NULL, '高嶋真理');
INSERT INTO `products` VALUES (82, 21, '2020-12-13', '特殊加工あり', '695331', NULL, 'バッグ', 2, 1, NULL, NULL, NULL, 1, NULL, '高嶋真理');
INSERT INTO `products` VALUES (83, 21, '2018-10-19', '特殊加工あり', '7311', NULL, '浴衣', 2, 1, NULL, NULL, NULL, 1, NULL, '高嶋太郎');
INSERT INTO `products` VALUES (84, 21, '2000-01-01', '特殊加工あり', '631835', NULL, 'メンズ浴衣', 2, 1, NULL, NULL, NULL, 1, NULL, '高嶋花子');
INSERT INTO `products` VALUES (85, 22, '1988-12-12', '特殊加工あり', '687563', NULL, '訪問着', 2, 1, NULL, NULL, NULL, 1, NULL, '村井新一');
INSERT INTO `products` VALUES (86, 22, '2014-12-01', '', '706948', NULL, '振袖', 2, 1, NULL, NULL, NULL, 1, NULL, '村井新一');
INSERT INTO `products` VALUES (87, 22, '2015-12-31', '', '388048', NULL, '浴衣', 2, 1, NULL, NULL, NULL, 1, NULL, '村井太郎');
INSERT INTO `products` VALUES (88, 22, '2016-07-30', '', '268279', NULL, 'メンズ浴衣', 2, 1, NULL, NULL, NULL, 1, NULL, '村井花子');
INSERT INTO `products` VALUES (89, 23, '2000-01-01', '', '255592', NULL, '訪問着', 2, 1, NULL, NULL, NULL, 1, NULL, '黒崎信子');
INSERT INTO `products` VALUES (90, 23, '2000-01-01', '', '894807', NULL, '振袖', 2, 1, NULL, NULL, NULL, 1, NULL, '黒崎信子');
INSERT INTO `products` VALUES (91, 23, '2020-01-01', '', '909978', NULL, '浴衣', 2, 1, NULL, NULL, NULL, 1, NULL, '黒崎太郎');
INSERT INTO `products` VALUES (92, 23, '2020-01-01', '', '463626', NULL, 'メンズ浴衣', 2, 1, NULL, NULL, NULL, 1, NULL, '黒崎花子');
INSERT INTO `products` VALUES (93, 24, '2000-01-01', '', '600364', NULL, '訪問着', 2, 1, NULL, NULL, NULL, 1, NULL, '的場実咲');
INSERT INTO `products` VALUES (94, 24, '2000-01-01', '', '588367', NULL, '振袖', 2, 1, NULL, NULL, NULL, 1, NULL, '的場実咲');
INSERT INTO `products` VALUES (95, 24, '2020-01-01', '', '618455', NULL, '浴衣', 2, 1, NULL, NULL, NULL, 1, NULL, '的場太郎');
INSERT INTO `products` VALUES (96, 24, '2020-01-01', '', '931623', NULL, 'メンズ浴衣', 2, 1, NULL, NULL, NULL, 1, NULL, '的場花子');
INSERT INTO `products` VALUES (97, 25, '2000-01-01', '', '724299', NULL, '訪問着', 2, 1, NULL, NULL, NULL, 1, NULL, '羽田心優');
INSERT INTO `products` VALUES (98, 25, '2000-01-01', '', '228243', NULL, '振袖', 2, 1, NULL, NULL, NULL, 1, NULL, '羽田心優');
INSERT INTO `products` VALUES (99, 25, '2020-01-01', '', '8780', NULL, '浴衣', 2, 1, NULL, NULL, NULL, 1, NULL, '羽田太郎');
INSERT INTO `products` VALUES (100, 25, '2020-01-01', '', '410382', NULL, 'メンズ浴衣', 2, 1, NULL, NULL, NULL, 1, NULL, '羽田花子');
INSERT INTO `products` VALUES (101, 26, '2015-12-31', '', '342235', NULL, '訪問着', 2, 1, NULL, NULL, NULL, 1, NULL, '井原冨美子');
INSERT INTO `products` VALUES (102, 26, '2016-07-30', '', '941260', NULL, '振袖', 2, 1, NULL, NULL, NULL, 1, NULL, '井原冨美子');
INSERT INTO `products` VALUES (103, 26, '2000-01-01', '特殊加工あり', '285987', NULL, '浴衣', 2, 1, NULL, NULL, NULL, 1, NULL, '井原太郎');
INSERT INTO `products` VALUES (104, 26, '2000-01-01', '特殊加工あり', '53237', NULL, 'メンズ浴衣', 2, 1, NULL, NULL, NULL, 1, NULL, '井原花子');
INSERT INTO `products` VALUES (105, 27, '2000-01-01', '特殊加工あり', '899806', NULL, '訪問着', 2, 1, NULL, NULL, NULL, 1, NULL, '会田今日子');
INSERT INTO `products` VALUES (106, 27, '2000-01-01', '特殊加工あり', '190846', NULL, '振袖', 2, 1, NULL, NULL, NULL, 1, NULL, '会田今日子');
INSERT INTO `products` VALUES (107, 27, '2020-01-01', '', '82767', NULL, '浴衣', 2, 1, NULL, NULL, NULL, 1, NULL, '会田太郎');
INSERT INTO `products` VALUES (108, 27, '2020-01-01', '', '717098', NULL, 'メンズ浴衣', 2, 1, NULL, NULL, NULL, 1, NULL, '会田花子');
INSERT INTO `products` VALUES (109, 28, '2015-12-31', '', '496115', NULL, '訪問着', 2, 1, NULL, NULL, NULL, 1, NULL, '中心菜');
INSERT INTO `products` VALUES (110, 28, '2016-07-30', '', '817265', NULL, '振袖', 2, 1, NULL, NULL, NULL, 1, NULL, '中心菜');
INSERT INTO `products` VALUES (111, 28, '2000-01-01', '', '61418', NULL, '浴衣', 2, 1, NULL, NULL, NULL, 1, NULL, '中太郎');
INSERT INTO `products` VALUES (112, 28, '2000-01-01', '', '37217', NULL, 'メンズ訪問着', 2, 1, NULL, NULL, NULL, 1, NULL, '中花子');
INSERT INTO `products` VALUES (113, 29, '2000-01-01', '', '625613', NULL, '訪問着', 2, 1, NULL, NULL, NULL, 1, NULL, '大高遼');
INSERT INTO `products` VALUES (114, 29, '2000-01-01', '', '739437', NULL, '振袖', 2, 1, NULL, NULL, NULL, 1, NULL, '大高遼');
INSERT INTO `products` VALUES (115, 29, '2020-01-01', '', '762373', NULL, '浴衣', 2, 1, NULL, NULL, NULL, 1, NULL, '大高太郎');
INSERT INTO `products` VALUES (116, 29, '2020-01-01', '特殊加工あり', '99530', NULL, 'メンズ浴衣', 2, 1, NULL, NULL, NULL, 1, NULL, '大高花子');
INSERT INTO `products` VALUES (117, 30, '2015-12-31', '特殊加工あり', '983287', NULL, '訪問着', 2, 1, NULL, NULL, NULL, 1, NULL, '重松義美');
INSERT INTO `products` VALUES (118, 30, '2016-07-30', '', '91710', NULL, '振袖', 2, 1, NULL, NULL, NULL, 1, NULL, '重松太郎');
INSERT INTO `products` VALUES (119, 30, '2018-01-19', '', '280199', NULL, '浴衣', 2, 1, NULL, NULL, NULL, 1, NULL, '重松太郎');
INSERT INTO `products` VALUES (120, 30, '1998-10-10', '', '841709', NULL, 'メンズ浴衣', 2, 1, NULL, NULL, NULL, 1, NULL, '重松花子');
INSERT INTO `products` VALUES (121, 31, '2000-01-01', '', '865518', NULL, '訪問着', 2, 1, NULL, NULL, NULL, 1, NULL, '志村潤');
INSERT INTO `products` VALUES (122, 31, '2000-01-01', '特殊加工あり', '608538', NULL, '振袖', 2, 1, NULL, NULL, NULL, 1, NULL, '志村潤');
INSERT INTO `products` VALUES (123, 31, '2020-01-01', '特殊加工あり', '939534', NULL, '浴衣', 2, 1, NULL, NULL, NULL, 1, NULL, '志村太郎');
INSERT INTO `products` VALUES (124, 31, '2020-01-01', '特殊加工あり', '83849', NULL, 'メンズ浴衣', 2, 1, NULL, NULL, NULL, 1, NULL, '志村花子');
INSERT INTO `products` VALUES (125, 32, '2015-12-31', 'お直し', '30606', NULL, '訪問着', 2, 1, NULL, NULL, NULL, 1, NULL, '江原真優');
INSERT INTO `products` VALUES (126, 32, '2016-07-30', 'お直し', '318151', NULL, '振袖', 2, 1, NULL, NULL, NULL, 1, NULL, '江原真優');
INSERT INTO `products` VALUES (127, 32, '2015-12-31', '特殊加工あり', '792584', NULL, '浴衣', 2, 1, NULL, NULL, NULL, 1, NULL, '江原太郎');
INSERT INTO `products` VALUES (128, 32, '2016-07-30', '特殊加工あり', '17691', NULL, 'メンズ浴衣', 2, 1, NULL, NULL, NULL, 1, NULL, '江原花子');
INSERT INTO `products` VALUES (129, 33, '2000-01-01', '特殊加工あり', '507637', NULL, '訪問着', 2, 1, NULL, NULL, NULL, 1, NULL, '吉田瑞稀');
INSERT INTO `products` VALUES (130, 33, '2000-01-01', '', '615535', NULL, '振袖', 2, 1, NULL, NULL, NULL, 1, NULL, '吉田瑞稀');
INSERT INTO `products` VALUES (131, 33, '2020-01-01', '特殊加工あり', '227599', NULL, '浴衣', 2, 1, NULL, NULL, NULL, 1, NULL, '吉田太郎');
INSERT INTO `products` VALUES (132, 33, '2020-01-01', '', '14869', NULL, 'メンズ浴衣', 2, 1, NULL, NULL, NULL, 1, NULL, '吉田花子');
INSERT INTO `products` VALUES (133, 34, '2000-01-01', '特殊加工あり', '938580', NULL, '訪問着', 2, 1, NULL, NULL, NULL, 1, NULL, '森本弘子');
INSERT INTO `products` VALUES (134, 34, '2000-01-01', '', '824989', NULL, '振袖', 2, 1, NULL, NULL, NULL, 1, NULL, '森本弘子');
INSERT INTO `products` VALUES (135, 34, '2020-01-01', '', '72858', NULL, '浴衣', 2, 1, NULL, NULL, NULL, 1, NULL, '森本太郎');
INSERT INTO `products` VALUES (136, 34, '2020-01-01', '', '346014', NULL, 'メンズ浴衣', 2, 1, NULL, NULL, NULL, 1, NULL, '森本花子');
INSERT INTO `products` VALUES (137, 35, '2000-01-01', '', '780039', NULL, '訪問着', 2, 1, NULL, NULL, NULL, 1, NULL, '杉浦和歌子');
INSERT INTO `products` VALUES (138, 35, '2000-01-01', '', '996632', NULL, '振袖', 2, 1, NULL, NULL, NULL, 1, NULL, '杉浦和歌子');
INSERT INTO `products` VALUES (139, 35, '2013-11-11', '', '772366', NULL, '浴衣', 2, 1, NULL, NULL, NULL, 1, NULL, '杉浦太郎');
INSERT INTO `products` VALUES (140, 35, '2014-12-01', '特殊加工あり', '70443', NULL, 'メンズ浴衣', 2, 1, NULL, NULL, NULL, 1, NULL, '杉浦花子');
INSERT INTO `products` VALUES (141, 36, '2015-12-31', '', '579788', NULL, '訪問着', 2, 1, NULL, NULL, NULL, 1, NULL, '岡山菜摘');
INSERT INTO `products` VALUES (142, 36, '2016-07-30', '', '995595', NULL, '振袖', 2, 1, NULL, NULL, NULL, 1, NULL, '岡山菜摘');
INSERT INTO `products` VALUES (143, 36, '2020-01-01', '', '933114', NULL, '浴衣', 2, 1, NULL, NULL, NULL, 1, NULL, '岡山太郎');
INSERT INTO `products` VALUES (144, 36, '2020-01-01', '', '800476', NULL, 'メンズ浴衣', 2, 1, NULL, NULL, NULL, 1, NULL, '岡山花子');
INSERT INTO `products` VALUES (145, 37, '2000-01-01', '', '421504', NULL, '訪問着', 2, 1, NULL, NULL, NULL, 1, NULL, '寺崎照夫');
INSERT INTO `products` VALUES (146, 37, '2013-11-11', 'お直し', '241732', NULL, '振袖', 2, 1, NULL, NULL, NULL, 1, NULL, '寺崎照夫');
INSERT INTO `products` VALUES (147, 37, '2014-12-01', 'お直し', '443943', NULL, '浴衣', 2, 1, NULL, NULL, NULL, 1, NULL, '寺崎太郎');
INSERT INTO `products` VALUES (148, 37, '2015-12-31', '', '536011', NULL, 'メンズ浴衣', 2, 1, NULL, NULL, NULL, 1, NULL, '寺崎花子');
INSERT INTO `products` VALUES (149, 38, '2016-07-30', '', '762447', NULL, '訪問着', 2, 1, NULL, NULL, NULL, 1, NULL, '青柳賢次');
INSERT INTO `products` VALUES (150, 38, '2000-01-01', '', '791003', NULL, '振袖', 2, 1, NULL, NULL, NULL, 1, NULL, '青柳賢次');
INSERT INTO `products` VALUES (151, 38, '2000-01-01', '', '325613', NULL, '浴衣', 2, 1, NULL, NULL, NULL, 1, NULL, '青柳太郎');
INSERT INTO `products` VALUES (152, 38, '2020-01-01', '', '768399', NULL, 'メンズ浴衣', 2, 1, NULL, NULL, NULL, 1, NULL, '青柳花子');
INSERT INTO `products` VALUES (153, 39, '2020-01-01', '', '818360', NULL, '訪問着', 2, 1, NULL, NULL, NULL, 1, NULL, '榎本勝昭');
INSERT INTO `products` VALUES (154, 39, '2014-12-01', '', '846021', NULL, '振袖', 2, 1, NULL, NULL, NULL, 1, NULL, '榎本勝昭');
INSERT INTO `products` VALUES (155, 39, '2015-12-31', '', '172332', NULL, '浴衣', 2, 1, NULL, NULL, NULL, 1, NULL, '榎本太郎');
INSERT INTO `products` VALUES (156, 39, '2016-07-30', '', '804065', NULL, 'メンズ浴衣', 2, 1, NULL, NULL, NULL, 1, NULL, '榎本花子');
INSERT INTO `products` VALUES (157, 40, '2015-12-31', '', '574892', NULL, '訪問着', 2, 1, NULL, NULL, NULL, 1, NULL, '岩下隆吾');
INSERT INTO `products` VALUES (158, 40, '2013-11-11', 'お直し', '911389', NULL, '振袖', 2, 1, NULL, NULL, NULL, 1, NULL, '岩下太郎');
INSERT INTO `products` VALUES (159, 40, '2014-12-01', '', '667324', NULL, '浴衣', 2, 1, NULL, NULL, NULL, 1, NULL, '岩下太郎');
INSERT INTO `products` VALUES (160, 40, '2015-12-31', '', '303970', NULL, 'メンズ浴衣', 2, 1, NULL, NULL, NULL, 1, NULL, '岩下花子');
INSERT INTO `products` VALUES (161, 41, '2000-01-01', '', '881209', NULL, '訪問着', 2, 1, NULL, NULL, NULL, 1, NULL, '堀井碧');
INSERT INTO `products` VALUES (162, 41, '2000-01-01', '中古品', '672862', NULL, '振袖', 2, 1, NULL, NULL, NULL, 1, NULL, '堀井碧');
INSERT INTO `products` VALUES (163, 41, '2020-01-01', '特殊加工あり', '464976', NULL, '浴衣', 2, 1, NULL, NULL, NULL, 1, NULL, '堀井太郎');
INSERT INTO `products` VALUES (164, 41, '2020-01-01', '', '611044', NULL, 'メンズ浴衣', 2, 1, NULL, NULL, NULL, 1, NULL, '堀井花子');
INSERT INTO `products` VALUES (165, 42, '2000-01-01', '', '719880', NULL, '訪問着', 2, 1, NULL, NULL, NULL, 1, NULL, '平松敬子');
INSERT INTO `products` VALUES (166, 42, '2020-01-01', '', '803248', NULL, '振袖', 2, 1, NULL, NULL, NULL, 1, NULL, '平松敬子');
INSERT INTO `products` VALUES (167, 42, '2020-01-01', '', '496053', NULL, '浴衣', 2, 1, NULL, NULL, NULL, 1, NULL, '平松太郎');
INSERT INTO `products` VALUES (168, 42, '2015-12-31', '', '343654', NULL, 'メンズ浴衣', 2, 1, NULL, NULL, NULL, 1, NULL, '平松花子');
INSERT INTO `products` VALUES (169, 43, '2013-11-11', '', '328493', NULL, '訪問着', 2, 1, NULL, NULL, NULL, 1, NULL, '森山浩重');
INSERT INTO `products` VALUES (170, 43, '2014-12-01', '', '454453', NULL, '振袖', 2, 1, NULL, NULL, NULL, 1, NULL, '森山浩重');
INSERT INTO `products` VALUES (171, 43, '2015-12-31', '', '4448', NULL, '浴衣', 2, 1, NULL, NULL, NULL, 1, NULL, '森山太郎');
INSERT INTO `products` VALUES (172, 43, '2016-07-30', '特殊加工あり', '569244', NULL, 'メンズ浴衣', 2, 1, NULL, NULL, NULL, 1, NULL, '森山花子');
INSERT INTO `products` VALUES (173, 44, '2000-01-01', '', '487600', NULL, '訪問着', 2, 1, NULL, NULL, NULL, 1, NULL, '大関香苗');
INSERT INTO `products` VALUES (174, 44, '2000-01-01', '', '420470', NULL, '振袖', 2, 1, NULL, NULL, NULL, 1, NULL, '大関香苗');
INSERT INTO `products` VALUES (175, 44, '2020-01-01', '', '704807', NULL, '浴衣', 2, 1, NULL, NULL, NULL, 1, NULL, '大関太郎');
INSERT INTO `products` VALUES (176, 44, '2020-01-01', '', '784897', NULL, 'メンズ浴衣', 2, 1, NULL, NULL, NULL, 1, NULL, '大関花子');
INSERT INTO `products` VALUES (177, 45, '2013-11-11', '', '480103', NULL, '訪問着', 2, 1, NULL, NULL, NULL, 1, NULL, '有馬重雄');
INSERT INTO `products` VALUES (178, 45, '2014-12-01', '', '242788', NULL, '振袖', 2, 1, NULL, NULL, NULL, 1, NULL, '有馬重雄');
INSERT INTO `products` VALUES (179, 45, '2015-12-31', '特殊加工あり', '417721', NULL, '浴衣', 2, 1, NULL, NULL, NULL, 1, NULL, '有馬太郎');
INSERT INTO `products` VALUES (180, 45, '2016-07-30', '特殊加工あり', '547706', NULL, 'メンズ浴衣', 2, 1, NULL, NULL, NULL, 1, NULL, '有馬花子');
INSERT INTO `products` VALUES (181, 46, '2000-01-01', '特殊加工あり', '373633', NULL, '訪問着', 2, 1, NULL, NULL, NULL, 1, NULL, '緒方帆香');
INSERT INTO `products` VALUES (182, 46, '2000-01-01', '特殊加工あり', '344757', NULL, '振袖', 2, 1, NULL, NULL, NULL, 1, NULL, '緒方帆香');
INSERT INTO `products` VALUES (183, 46, '2020-01-01', '', '906921', NULL, '浴衣', 2, 1, NULL, NULL, NULL, 1, NULL, '緒方太郎');
INSERT INTO `products` VALUES (184, 46, '2020-01-01', '', '632291', NULL, 'メンズ浴衣', 2, 1, NULL, NULL, NULL, 1, NULL, '緒方花子');
INSERT INTO `products` VALUES (185, 47, '2013-11-11', '', '763252', NULL, '訪問着', 2, 1, NULL, NULL, NULL, 1, NULL, '朝倉紗良');
INSERT INTO `products` VALUES (186, 47, '2014-12-01', '特殊加工あり', '540670', NULL, '振袖', 2, 1, NULL, NULL, NULL, 1, NULL, '朝倉太郎');
INSERT INTO `products` VALUES (187, 47, '2015-12-31', '特殊加工あり', '760228', NULL, '浴衣', 2, 1, NULL, NULL, NULL, 1, NULL, '朝倉太郎');
INSERT INTO `products` VALUES (188, 47, '2016-07-30', '', '544003', NULL, 'メンズ浴衣', 2, 1, NULL, NULL, NULL, 1, NULL, '朝倉花子');
INSERT INTO `products` VALUES (189, 48, '2000-01-01', '', '428223', NULL, '訪問着', 2, 1, NULL, NULL, NULL, 1, NULL, '寺岡雪子');
INSERT INTO `products` VALUES (190, 48, '2020-01-01', '', '689279', NULL, '振袖', 2, 1, NULL, NULL, NULL, 1, NULL, '寺岡雪子');
INSERT INTO `products` VALUES (191, 48, '2014-12-01', '', '935047', NULL, '浴衣', 2, 1, NULL, NULL, NULL, 1, NULL, '寺岡太郎');
INSERT INTO `products` VALUES (192, 48, '2015-12-31', '', '982658', NULL, 'メンズ浴衣', 2, 1, NULL, NULL, NULL, 1, NULL, '寺岡花子');
INSERT INTO `products` VALUES (193, 49, '2014-12-01', '', '788858', NULL, '訪問着', 2, 1, NULL, NULL, NULL, 1, NULL, '篠崎正勝');
INSERT INTO `products` VALUES (194, 49, '2015-12-31', '', '527444', NULL, '振袖', 2, 1, NULL, NULL, NULL, 1, NULL, '篠崎正勝');
INSERT INTO `products` VALUES (195, 49, '2014-12-01', '', '700390', NULL, '浴衣', 2, 1, NULL, NULL, NULL, 1, NULL, '篠崎正勝');
INSERT INTO `products` VALUES (196, 49, '2015-12-31', '', '74242', NULL, 'メンズ浴衣', 2, 1, NULL, NULL, NULL, 1, NULL, '篠崎花子');
INSERT INTO `products` VALUES (197, 50, '2000-01-01', '', '242261', NULL, '訪問着', 2, 1, NULL, NULL, NULL, 1, NULL, '和田徳美');
INSERT INTO `products` VALUES (198, 50, '2000-01-01', '', '498625', NULL, '振袖', 2, 1, NULL, NULL, NULL, 1, NULL, '和田花子');
INSERT INTO `products` VALUES (199, 50, '2020-01-01', '', '148367', NULL, '浴衣', 2, 1, NULL, NULL, NULL, 1, NULL, '和田太郎');
INSERT INTO `products` VALUES (200, 50, '2020-01-01', '', '306818', NULL, 'メンズ浴衣', 2, 1, NULL, NULL, NULL, 1, NULL, '和田花子');

-- ----------------------------
-- Table structure for users
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(128) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL COMMENT 'login email',
  `name` varchar(128) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL COMMENT 'full name of user',
  `mobile` varchar(20) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `phone1` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `sex` tinyint(1) NULL DEFAULT NULL,
  `class` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `post_code` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `address` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `birthday` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `nick_name` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `created_at` datetime(0) NULL DEFAULT NULL,
  `status` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT '1',
  `admin_id` int(11) NULL DEFAULT NULL,
  `address1` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `address2` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `phone2` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `phone3` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `phone4` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `hobby` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT '',
  `habit` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT '',
  `customer` tinyint(1) NULL DEFAULT 1,
  `age` int(11) NULL DEFAULT NULL,
  `color` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `etc` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `body` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 52 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of users
-- ----------------------------
INSERT INTO `users` VALUES (1, 'odtfcmgsykanon484@ivbjhmco.vkh', '池上香音', '09031568977', '0944188841', 2, NULL, '864-0027', '熊本県荒尾市蔵満2-7-5 蔵満フォレスト309', '1984-08-10', 'いけがみかのん', NULL, '2', 1, NULL, NULL, NULL, NULL, NULL, '歌舞伎', '着付', 2, NULL, NULL, NULL, NULL);
INSERT INTO `users` VALUES (2, 'rin60314@fyapov.hbm', '大竹凛', '08051389110', '0995875329', 2, NULL, '891-0507', '鹿児島県指宿市山川入船町1-8-20 リバーサイド山川入船町100', '1987-04-07', 'おおたけりん', NULL, '2', 1, NULL, NULL, NULL, NULL, NULL, '能', '和裁', 2, NULL, NULL, NULL, NULL);
INSERT INTO `users` VALUES (3, 'aoowada@hjxpqdi.vdi', '大和田雛', '08022885889', '0763977789', 2, NULL, '930-0154', '富山県富山市平岡4-6 ', '1963-04-14', 'おおわだひな', NULL, '2', 1, NULL, NULL, NULL, NULL, NULL, '文楽', '茶道', 2, NULL, NULL, NULL, NULL);
INSERT INTO `users` VALUES (4, 'hiroaki_furukawa@ealdudlo.bxxcf.ci', '古川浩秋', '08059705626', '0664625731', 1, NULL, '577-0012', '大阪府東大阪市長田東4-1 ', '1960-07-23', 'ふるかわひろあき', NULL, '2', 1, NULL, NULL, NULL, NULL, NULL, '落語', '華道', 1, NULL, NULL, NULL, NULL);
INSERT INTO `users` VALUES (5, 'nndpjdwhq=gmvsejunko907@njssiakq.pxo', '中西淳子', '09044848882', '0896058578', 2, NULL, '795-0046', '愛媛県大洲市春賀3-16 春賀の杜416', '1943-10-31', 'なかにしじゅんこ', NULL, '2', 1, NULL, NULL, NULL, NULL, NULL, '美術・工芸品', '三味線', 2, NULL, NULL, NULL, NULL);
INSERT INTO `users` VALUES (6, 'haruka_ueda@qtolncibdi.hmxoa.kh', '上田晴花', '09075574753', '0192069102', 2, NULL, '023-0856', '岩手県奥州市水沢西上野町3-7-16 水沢西上野町コート105', '1948-09-05', 'うえだはるか', NULL, '2', 1, NULL, NULL, NULL, NULL, NULL, '歌舞伎', '琴', 2, NULL, NULL, NULL, NULL);
INSERT INTO `users` VALUES (7, 'phtvcokimi82374@qgqiufmsal.ez', '宮本貴美', '08032341696', '018312861', 2, NULL, '018-3156', '秋田県能代市二ツ井町下野川端1-20-11 二ツ井町下野川端ハウス403', '1971-11-07', 'みやもときみ', NULL, '2', 1, NULL, NULL, NULL, NULL, NULL, '能', '着付', 2, NULL, NULL, NULL, NULL);
INSERT INTO `users` VALUES (8, 'runa14035@qpfb.bqztx.mzg', '山野琉那', '09098649227', '0836751115', 2, NULL, '744-0006', '山口県下松市旗岡1-8 旗岡フォレスト418', '1964-10-15', 'やまのるな', NULL, '2', 1, NULL, NULL, NULL, NULL, NULL, '文楽', '和裁', 2, NULL, NULL, NULL, NULL);
INSERT INTO `users` VALUES (9, 'toshiki3394@krxyyctmuh.sil.acf', '島村俊樹', '08036351211', '0894149202', 1, NULL, '792-0033', '愛媛県新居浜市横水町4-10-20 ', '1983-03-04', 'しまむらとしき', NULL, '2', 1, NULL, NULL, NULL, NULL, NULL, '落語', '茶道', 2, NULL, NULL, NULL, NULL);
INSERT INTO `users` VALUES (10, 'Nodoka_Shiga@gkxn.yg', '滋賀和花', '08025192770', '0891711750', 2, NULL, '796-0071', '愛媛県八幡浜市新町3-9-8 ', '1974-11-03', 'しがのどか', NULL, '2', 1, NULL, NULL, NULL, NULL, NULL, '美術・工芸品', '華道', 2, NULL, NULL, NULL, NULL);
INSERT INTO `users` VALUES (11, 'hirokokumada@cinisao.lir', '熊田浩子', '08033663240', '0977943650', 2, NULL, '879-3301', '大分県佐伯市宇目小野市2-12-14 ', '1944-11-11', 'くまだひろこ', NULL, '2', 1, NULL, NULL, NULL, NULL, NULL, '歌舞伎', '三味線', 2, NULL, NULL, NULL, NULL);
INSERT INTO `users` VALUES (12, 'reiko_takazawa@cmzv.oj', '高沢麗子', '08052359434', '0609793877', 2, NULL, '573-0066', '大阪府枚方市伊加賀西町1-3-8 ', '1963-09-17', 'たかざわれいこ', NULL, '2', 1, NULL, NULL, NULL, NULL, NULL, '能', '琴', 1, NULL, NULL, NULL, NULL);
INSERT INTO `users` VALUES (13, 'idqtdhjfyrshinobu90789@ehtlikib.cm', '黒岩忍', '08080571069', '0578373578', 2, NULL, '501-0102', '岐阜県岐阜市一日市場北町2-12 一日市場北町ステージ415', '1983-06-06', 'くろいわしのぶ', NULL, '2', 1, NULL, NULL, NULL, NULL, NULL, '文楽', '着付', 2, NULL, NULL, NULL, NULL);
INSERT INTO `users` VALUES (14, 'oyamagishi@kvcjdqzl.oj.ooz', '山岸莉乃', '08065887629', '0880083974', 2, NULL, '781-1335', '高知県高岡郡越知町長者1-5-19 ', '1949-08-06', 'やまぎしりの', NULL, '2', 1, NULL, NULL, NULL, NULL, NULL, '落語', '和裁', 2, NULL, NULL, NULL, NULL);
INSERT INTO `users` VALUES (15, 'iozawa@ynynqtxhjg.bkd.gpo', '小沢歩実', '08097370116', '0444326517', 2, NULL, '220-0002', '神奈川県横浜市西区南軽井沢4-17 ', '1962-08-14', 'おざわあゆみ', NULL, '2', 1, NULL, NULL, NULL, NULL, NULL, '美術・工芸品', '茶道', 2, NULL, NULL, NULL, NULL);
INSERT INTO `users` VALUES (16, 'Mai_Tajiri@erxvp.tje', '田尻真依', '08092015056', '0892589105', 2, NULL, '799-2308', '愛媛県今治市菊間町中川2-4-11 ', '1951-05-10', 'たじりまい', NULL, '2', 1, NULL, NULL, NULL, NULL, NULL, '歌舞伎', '華道', 2, NULL, NULL, NULL, NULL);
INSERT INTO `users` VALUES (17, 'youko20075@dhbjgpkp.dhy', '中嶋洋子', '08095917263', '0725017449', 2, NULL, '569-0013', '大阪府高槻市野田1-13 ', '1980-07-07', 'なかじまようこ', NULL, '2', 1, NULL, NULL, NULL, NULL, NULL, '能', '三味線', 2, NULL, NULL, NULL, NULL);
INSERT INTO `users` VALUES (18, 'katsumi_matsuoka@qqkpaty.sy', '松岡勝美', '08062470343', '0977118321', 1, NULL, '872-0518', '大分県宇佐市安心院町今井2-6-12 ', '1963-08-31', 'まつおかかつみ', NULL, '2', 1, NULL, NULL, NULL, NULL, NULL, '文楽', '琴', 2, NULL, NULL, NULL, NULL);
INSERT INTO `users` VALUES (19, 'oyoshizawa@mbdsombof.qdp', '吉澤桂子', '08011667921', '0557326781', 2, NULL, '400-1503', '山梨県甲府市心経寺町3-16-15 ', '1955-12-17', 'よしざわけいこ', NULL, '2', 1, NULL, NULL, NULL, NULL, NULL, '落語', '着付', 2, NULL, NULL, NULL, NULL);
INSERT INTO `users` VALUES (20, 'gbpwa=foyuri38759@wubjzogk.la', '西島有里', '08079092154', '0856901120', 2, NULL, '697-0056', '島根県浜田市原町4-3-8 ', '1944-07-15', 'にしじまゆり', NULL, '2', 1, NULL, NULL, NULL, NULL, NULL, '美術・工芸品', '和裁', 2, NULL, NULL, NULL, NULL);
INSERT INTO `users` VALUES (21, 'Mari_Takashima@tzsu.gya.jpo', '高嶋真理', '09060077851', '058590104', 2, NULL, '500-8283', '岐阜県岐阜市茜部野瀬4-2-17 ダイヤモンド茜部野瀬101', '1987-08-16', 'たかしままり', NULL, '2', 1, NULL, NULL, NULL, NULL, NULL, '歌舞伎', '茶道', 2, NULL, NULL, NULL, NULL);
INSERT INTO `users` VALUES (22, 'shinichimurai@nbgpn.fwx', '村井新一', '09041156985', '0947762527', 1, NULL, '811-1311', '福岡県福岡市南区横手3-17-19 ', '1985-11-03', 'むらいしんいち', NULL, '2', 1, NULL, NULL, NULL, NULL, NULL, '能', '華道', 2, NULL, NULL, NULL, NULL);
INSERT INTO `users` VALUES (23, 'nobuko140@rtrsrqvqfm.iadxk.ooe', '黒崎信子', '08075685473', '0267382538', 2, NULL, '399-0036', '長野県松本市村井町南1-7-12 ', '1989-02-19', 'くろざきのぶこ', NULL, '2', 1, NULL, NULL, NULL, NULL, NULL, '文楽', '三味線', 2, NULL, NULL, NULL, NULL);
INSERT INTO `users` VALUES (24, 'misaki_matoba@gloxlmudx.zmd.mze', '的場実咲', '09078240611', '0242236253', 2, NULL, '969-3537', '福島県喜多方市塩川町四奈川1-19 ', '1985-05-14', 'まとばみさき', NULL, '2', 1, NULL, NULL, NULL, NULL, NULL, '落語', '琴', 2, NULL, NULL, NULL, NULL);
INSERT INTO `users` VALUES (25, 'Miyu_Hata@nkve.es.mw', '羽田心優', '09067728883', '0173453411', 2, NULL, '036-0163', '青森県平川市苗生松下東田1-17-20 ', '1976-12-19', 'はたみゆ', NULL, '2', 1, NULL, NULL, NULL, NULL, NULL, '美術・工芸品', '着付', 1, NULL, NULL, NULL, NULL);
INSERT INTO `users` VALUES (26, 'svjmyeifumiko19311@whlyupytis.pdo', '井原冨美子', '09017498844', '0112468778', 2, NULL, '041-0406', '北海道函館市女那川町4-5-1 女那川町アパート402', '1952-06-26', 'いはらふみこ', NULL, '2', 1, NULL, NULL, NULL, NULL, NULL, '歌舞伎', '和裁', 2, NULL, NULL, NULL, NULL);
INSERT INTO `users` VALUES (27, 'kyouko50492@sfmdjt.yrnk.lr', '会田今日子', '09094634971', '0848092094', 2, NULL, '737-0833', '広島県呉市晴海町1-15 晴海町ハウス309', '1981-06-18', 'あいだきょうこ', NULL, '2', 1, NULL, NULL, NULL, NULL, NULL, '能', '茶道', 2, NULL, NULL, NULL, NULL);
INSERT INTO `users` VALUES (28, 'anaka@jqnmkqbatr.uwei.zrb', '中心菜', '09067932065', '0191617064', 2, NULL, '028-7113', '岩手県八幡平市平笠3-2 ダイヤモンド平笠408', '1975-07-04', 'なかここな', NULL, '2', 1, NULL, NULL, NULL, NULL, NULL, '文楽', '華道', 2, NULL, NULL, NULL, NULL);
INSERT INTO `users` VALUES (29, 'haruka_oodaka@mkdl.tt', '大高遼', '09081411360', '0487637569', 2, NULL, '362-0035', '埼玉県上尾市仲町1-6-20 ', '1962-08-19', 'おおだかはるか', NULL, '2', 1, NULL, NULL, NULL, NULL, NULL, '落語', '三味線', 2, NULL, NULL, NULL, NULL);
INSERT INTO `users` VALUES (30, 'yoshimishigematsu@dlkugca.iat', '重松義美', '08095743409', '0173469350', 2, NULL, '035-0085', '青森県むつ市大湊浜町3-6-3 大湊浜町荘201', '1970-05-25', 'しげまつよしみ', NULL, '2', 1, NULL, NULL, NULL, NULL, NULL, '美術・工芸品', '琴', 2, NULL, NULL, NULL, NULL);
INSERT INTO `users` VALUES (31, 'jun218@bavaw.xzb.om', '志村潤', '09027263219', '0951166104', 1, NULL, '853-0604', '長崎県五島市三井楽町貝津4-4-16 スイート三井楽町貝津207', '1952-02-05', 'しむらじゅん', NULL, '2', 1, NULL, NULL, NULL, NULL, NULL, '歌舞伎', '着付', 2, NULL, NULL, NULL, NULL);
INSERT INTO `users` VALUES (32, 'mayu49290@lbwtkjbm.coj', '江原真優', '09025239897', '097236417', 2, NULL, '871-0104', '大分県中津市三光諫山1-8 ', '1982-10-31', 'えばらまゆ', NULL, '2', 1, NULL, NULL, NULL, NULL, NULL, '能', '和裁', 2, NULL, NULL, NULL, NULL);
INSERT INTO `users` VALUES (33, 'mizuki_yoshida@duwms.mma', '吉田瑞稀', '08061608674', '0881159658', 2, NULL, '779-4801', '徳島県三好市井川町旭町3-5-20 プレイス井川町旭町305', '1970-06-01', 'よしだみずき', NULL, '2', 1, NULL, NULL, NULL, NULL, NULL, '文楽', '茶道', 2, NULL, NULL, NULL, NULL);
INSERT INTO `users` VALUES (34, 'hiroko49416@avdrbylyfw.mfz.xmh', '森本弘子', '09026728144', '046072102', 2, NULL, '350-0255', '埼玉県坂戸市成願寺1-13 ', '1964-02-16', 'もりもとひろこ', NULL, '2', 1, NULL, NULL, NULL, NULL, NULL, '落語', '華道', 2, NULL, NULL, NULL, NULL);
INSERT INTO `users` VALUES (35, 'wakako_sugiura@ijlxz.hus.lj', '杉浦和歌子', '09071699967', '0285967183', 2, NULL, '320-0054', '栃木県宇都宮市東戸祭1-9-1 東戸祭フォレスト219', '1970-01-16', 'すぎうらわかこ', NULL, '2', 1, NULL, NULL, NULL, NULL, NULL, '美術・工芸品', '三味線', 2, NULL, NULL, NULL, NULL);
INSERT INTO `users` VALUES (36, 'a-sfegnatsumi535@oonng.dn', '岡山菜摘', '09068365110', '0440859139', 2, NULL, '252-0306', '神奈川県相模原市南区栄町2-20-4 ', '1944-10-11', 'おかやまなつみ', NULL, '2', 1, NULL, NULL, NULL, NULL, NULL, '歌舞伎', '琴', 2, NULL, NULL, NULL, NULL);
INSERT INTO `users` VALUES (37, 'teruo2082@yogt.mrf', '寺崎照夫', '09099852060', '0876924885', 1, NULL, '761-4141', '香川県小豆郡土庄町馬越3-5 馬越ヒル112', '1974-02-28', 'てらさきてるお', NULL, '2', 1, NULL, NULL, NULL, NULL, NULL, '能', '着付', 2, NULL, NULL, NULL, NULL);
INSERT INTO `users` VALUES (38, 'kenji35345@zqmp.gu.bk', '青柳賢次', '09033911818', '0174217615', 1, NULL, '038-2704', '青森県西津軽郡鰺ヶ沢町湯舟町1-3-1 湯舟町マンション302', '1946-10-27', 'あおやぎけんじ', NULL, '2', 1, NULL, NULL, NULL, NULL, NULL, '文楽', '和裁', 2, NULL, NULL, NULL, NULL);
INSERT INTO `users` VALUES (39, 'katsuaki5631@fozlv.ox.jep', '榎本勝昭', '09030798747', '0240210179', 1, NULL, '969-0401', '福島県岩瀬郡鏡石町大池2-12-2 ', '1973-10-25', 'えのもとかつあき', NULL, '2', 1, NULL, NULL, NULL, NULL, NULL, '落語', '茶道', 2, NULL, NULL, NULL, NULL);
INSERT INTO `users` VALUES (40, 'ryuugo338@rwhc.hj', '岩下隆吾', '09051772930', '0763940087', 1, NULL, '939-2465', '富山県富山市八尾町尾久4-8 ', '1976-08-02', 'いわしたりゅうご', NULL, '2', 1, NULL, NULL, NULL, NULL, NULL, '美術・工芸品', '華道', 2, NULL, NULL, NULL, NULL);
INSERT INTO `users` VALUES (41, 'ihorii@esdngvjhyw.vhn', '堀井碧', '08081859551', '0263786130', 2, NULL, '392-0005', '長野県諏訪市岡村1-3-2 ', '1968-01-08', 'ほりいみどり', NULL, '2', 1, NULL, NULL, NULL, NULL, NULL, '歌舞伎', '三味線', 1, NULL, NULL, NULL, NULL);
INSERT INTO `users` VALUES (42, 'keiko513@fozpscjpah.isos.id', '平松敬子', '08088391933', '0877930386', 2, NULL, '767-0013', '香川県三豊市高瀬町下麻3-5-7 ', '1958-02-25', 'ひらまつけいこ', NULL, '2', 1, NULL, NULL, NULL, NULL, NULL, '能', '琴', 2, NULL, NULL, NULL, NULL);
INSERT INTO `users` VALUES (43, 'hiroshige75079@kkxrnouv.pfp', '森山浩重', '08023162301', '0979875534', 1, NULL, '879-2114', '大分県大分市大平4-11-16 大平コート204', '1962-11-01', 'もりやまひろしげ', NULL, '2', 1, NULL, NULL, NULL, NULL, NULL, '文楽', '着付', 2, NULL, NULL, NULL, NULL);
INSERT INTO `users` VALUES (44, 'eoozeki@aviymxdyo.tc', '大関香苗', '08026508754', '058691841', 2, NULL, '440-0871', '愛知県豊橋市新吉町3-7-17 ', '1961-05-15', 'おおぜきかなえ', NULL, '2', 1, NULL, NULL, NULL, NULL, NULL, '落語', '和裁', 2, NULL, NULL, NULL, NULL);
INSERT INTO `users` VALUES (45, 'shigeo1318@dplnadufc.rvu', '有馬重雄', '09082299806', '0884111323', 1, NULL, '770-0934', '徳島県徳島市秋田町1-14-16 ', '1963-04-18', 'ありましげお', NULL, '2', 1, NULL, NULL, NULL, NULL, NULL, '美術・工芸品', '茶道', 2, NULL, NULL, NULL, NULL);
INSERT INTO `users` VALUES (46, 'mzpq-tgvalgmhomhonoka306@iouh.nb.vl', '緒方帆香', '08040859890', '0649113914', 2, NULL, '531-0062', '大阪府大阪市北区長柄中1-2-20 プレシャス長柄中312', '1986-12-16', 'おかたほのか', NULL, '2', 1, NULL, NULL, NULL, NULL, NULL, '歌舞伎', '華道', 2, NULL, NULL, NULL, NULL);
INSERT INTO `users` VALUES (47, 'sara336@ahledofk.bein.cz', '朝倉紗良', '08097981297', '0942764333', 2, NULL, '848-0102', '佐賀県伊万里市波多津町畑津2-18 波多津町畑津フォレスト204', '1979-11-10', 'あさくらさら', NULL, '2', 1, NULL, NULL, NULL, NULL, NULL, '能', '三味線', 2, NULL, NULL, NULL, NULL);
INSERT INTO `users` VALUES (48, 'Yukiko_Teraoka@vmapyjovg.gam', '寺岡雪子', '08072714791', '0776833130', 2, NULL, '602-0054', '京都府京都市上京区飛鳥井町2-8-17 タワー飛鳥井町117', '1976-04-11', 'てらおかゆきこ', NULL, '2', 1, NULL, NULL, NULL, NULL, NULL, '文楽', '琴', 2, NULL, NULL, NULL, NULL);
INSERT INTO `users` VALUES (49, 'masakatsu331@zquruiqgnr.ake', '篠崎正勝', '09026088535', '0498009263', 1, NULL, '277-0086', '千葉県柏市永楽台3-10-5 ', '1954-04-10', 'しのざきまさかつ', NULL, '2', 1, NULL, NULL, NULL, NULL, NULL, '落語', '着付', 1, NULL, NULL, NULL, NULL);
INSERT INTO `users` VALUES (50, 'tokumi_wada@gszjlwplx.lom', '和田徳美', '09090144273', '023501176', 2, NULL, '990-0053', '山形県山形市薬師町3-2-19 ', '1978-05-20', 'わだとくみ', NULL, '2', 1, NULL, NULL, NULL, NULL, NULL, '美術・工芸品', '和裁', 2, NULL, NULL, NULL, NULL);

SET FOREIGN_KEY_CHECKS = 1;
