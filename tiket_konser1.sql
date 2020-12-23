/*
 Navicat Premium Data Transfer

 Source Server         : lokal
 Source Server Type    : MySQL
 Source Server Version : 100121
 Source Host           : localhost:3306
 Source Schema         : tiket_konser1

 Target Server Type    : MySQL
 Target Server Version : 100121
 File Encoding         : 65001

 Date: 24/12/2020 01:32:55
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for admin
-- ----------------------------
DROP TABLE IF EXISTS `admin`;
CREATE TABLE `admin`  (
  `id_admin` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_admin` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id_admin`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of admin
-- ----------------------------
INSERT INTO `admin` VALUES ('A2', 'Springfield', 'admin', 'admin');

-- ----------------------------
-- Table structure for event
-- ----------------------------
DROP TABLE IF EXISTS `event`;
CREATE TABLE `event`  (
  `id_event` int NOT NULL AUTO_INCREMENT,
  `nama_event` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal_event` date NOT NULL,
  `tempat_event` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `total_tiket` bigint NOT NULL,
  `harga_satuan` bigint NOT NULL,
  `deskripsi` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `gambar` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `data_dibuat` timestamp(0) NOT NULL DEFAULT CURRENT_TIMESTAMP(0) ON UPDATE CURRENT_TIMESTAMP(0),
  PRIMARY KEY (`id_event`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 6 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of event
-- ----------------------------
INSERT INTO `event` VALUES (1, 'Konser ke 1', '2020-01-01', 'Malang', 2000, 200000, 'Lorem Ipsum \"Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit...\" \"There is no one who loves pain itself,', 'konser1.jpg', '2020-12-18 11:34:17');
INSERT INTO `event` VALUES (2, 'Event konser 2', '2020-01-01', 'Surabaya', 1000, 500000, 'Lorem Ipsum \"Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit...\" \"There is no one who loves pain itself,', 'konser2.jpg', '2020-12-18 11:35:41');
INSERT INTO `event` VALUES (3, 'event konser 3', '2019-01-01', 'Tuban', 300, 1000000, 'Lorem Ipsum ', 'konser3.jpg', '2020-12-18 11:37:45');
INSERT INTO `event` VALUES (4, 'Event 4', '2020-01-01', 'Surabaya', 200, 100000, 'ewq', 'konser5.jpg', '2020-12-18 11:38:51');
INSERT INTO `event` VALUES (5, 'Konser 5', '2020-01-01', 'Jakarta', 1000, 200000, 'Lorem Ipsum \"Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit...\" \"There is no one who loves pain itself,', 'konser6.jpg', '2020-12-18 11:39:23');

-- ----------------------------
-- Table structure for pembayaran
-- ----------------------------
DROP TABLE IF EXISTS `pembayaran`;
CREATE TABLE `pembayaran`  (
  `id_bayar` int NOT NULL AUTO_INCREMENT,
  `id_user` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_event` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `data_dibuat` timestamp(0) NOT NULL DEFAULT CURRENT_TIMESTAMP(0) ON UPDATE CURRENT_TIMESTAMP(0),
  `jumlah_beli` int NOT NULL,
  `total_harga` int NOT NULL,
  `status` int NOT NULL,
  PRIMARY KEY (`id_bayar`) USING BTREE,
  INDEX `id_user`(`id_user`) USING BTREE,
  INDEX `id_event`(`id_event`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 4 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of pembayaran
-- ----------------------------
INSERT INTO `pembayaran` VALUES (2, '1', '3', '2020-12-18 13:48:37', 1, 1000000, 0);
INSERT INTO `pembayaran` VALUES (3, '1', '3', '2020-12-18 13:48:48', 4, 4000000, 1);

-- ----------------------------
-- Table structure for user
-- ----------------------------
DROP TABLE IF EXISTS `user`;
CREATE TABLE `user`  (
  `id_user` int NOT NULL AUTO_INCREMENT,
  `username` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_telp` int NOT NULL,
  PRIMARY KEY (`id_user`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 5 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of user
-- ----------------------------
INSERT INTO `user` VALUES (1, 'ade', 'ade', 'ade@ade', 'jalanan', 8123);
INSERT INTO `user` VALUES (2, 'ezo', 'ezo', 'ezo@es', 'kala', 213);
INSERT INTO `user` VALUES (4, 'ros', 'ros', 'ros@ros', 'Jalan', 812321);

SET FOREIGN_KEY_CHECKS = 1;
