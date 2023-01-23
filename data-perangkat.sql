-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Versi server:                 8.0.30 - MySQL Community Server - GPL
-- OS Server:                    Win64
-- HeidiSQL Versi:               12.1.0.6537
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Membuang struktur basisdata untuk data_perangkat
DROP DATABASE IF EXISTS `data_perangkat`;
CREATE DATABASE IF NOT EXISTS `data_perangkat` /*!40100 DEFAULT CHARACTER SET latin1 */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `data_perangkat`;

-- membuang struktur untuk table data_perangkat.access_point
DROP TABLE IF EXISTS `access_point`;
CREATE TABLE IF NOT EXISTS `access_point` (
  `id` int NOT NULL AUTO_INCREMENT,
  `merk_ap` varchar(20) NOT NULL,
  `tipe` varchar(20) NOT NULL,
  `nama_ap` varchar(100) NOT NULL,
  `letak` varchar(100) NOT NULL,
  `tahun` varchar(5) NOT NULL DEFAULT '',
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Pengeluaran data tidak dipilih.

-- membuang struktur untuk table data_perangkat.cctv_pemko
DROP TABLE IF EXISTS `cctv_pemko`;
CREATE TABLE IF NOT EXISTS `cctv_pemko` (
  `id` int NOT NULL AUTO_INCREMENT,
  `merk_cctv` varchar(20) NOT NULL,
  `tipe` varchar(20) NOT NULL,
  `letak` varchar(100) NOT NULL,
  `tahun` varchar(5) NOT NULL DEFAULT '',
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Pengeluaran data tidak dipilih.

-- membuang struktur untuk table data_perangkat.data_server
DROP TABLE IF EXISTS `data_server`;
CREATE TABLE IF NOT EXISTS `data_server` (
  `id` int NOT NULL AUTO_INCREMENT,
  `merk_server` varchar(20) DEFAULT NULL,
  `jenis` varchar(20) DEFAULT NULL,
  `hardisk` varchar(10) DEFAULT NULL,
  `ram` varchar(10) DEFAULT NULL,
  `processor` varchar(10) DEFAULT NULL,
  `os` varchar(10) DEFAULT NULL,
  `tahun` varchar(5) DEFAULT '',
  `penggunaan` varchar(100) DEFAULT 'Tidak ada data',
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Pengeluaran data tidak dipilih.

-- membuang struktur untuk table data_perangkat.nvr_cctv
DROP TABLE IF EXISTS `nvr_cctv`;
CREATE TABLE IF NOT EXISTS `nvr_cctv` (
  `id` int NOT NULL AUTO_INCREMENT,
  `merk_nvr` varchar(20) NOT NULL,
  `video_ch` varchar(50) NOT NULL DEFAULT '',
  `hardisk` varchar(20) NOT NULL,
  `penggunaan` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `tahun` varchar(5) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL DEFAULT '',
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Pengeluaran data tidak dipilih.

-- membuang struktur untuk table data_perangkat.perangkat_jaringan
DROP TABLE IF EXISTS `perangkat_jaringan`;
CREATE TABLE IF NOT EXISTS `perangkat_jaringan` (
  `id` int NOT NULL AUTO_INCREMENT,
  `merk_perangkat` varchar(20) NOT NULL,
  `cpu` varchar(20) NOT NULL,
  `ram` varchar(20) NOT NULL,
  `lan_port` int NOT NULL,
  `tahun` int NOT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Pengeluaran data tidak dipilih.

-- membuang struktur untuk table data_perangkat.user
DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `id` int NOT NULL AUTO_INCREMENT,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `telp` int NOT NULL,
  `level` enum('admin','user','') CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Pengeluaran data tidak dipilih.

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
