-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Versi server:                 5.7.33 - MySQL Community Server (GPL)
-- OS Server:                    Win64
-- HeidiSQL Versi:               11.2.0.6213
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Membuang struktur basisdata untuk data_perangkat
CREATE DATABASE IF NOT EXISTS `data_perangkat` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `data_perangkat`;

-- membuang struktur untuk table data_perangkat.access_point
CREATE TABLE IF NOT EXISTS `access_point` (
  `id_ap` int(11) NOT NULL AUTO_INCREMENT,
  `merk_ap` varchar(20) NOT NULL,
  `tipe` varchar(20) NOT NULL,
  `nama_ap` varchar(100) NOT NULL,
  `letak` varchar(100) NOT NULL,
  `tahun` int(4) NOT NULL,
  PRIMARY KEY (`id_ap`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Pengeluaran data tidak dipilih.

-- membuang struktur untuk table data_perangkat.cctv_pemko
CREATE TABLE IF NOT EXISTS `cctv_pemko` (
  `id_cctv` int(11) NOT NULL AUTO_INCREMENT,
  `merk_cctv` varchar(20) NOT NULL,
  `tipe` varchar(20) NOT NULL,
  `letak` varchar(100) NOT NULL,
  `tahun` int(4) NOT NULL,
  PRIMARY KEY (`id_cctv`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Pengeluaran data tidak dipilih.

-- membuang struktur untuk table data_perangkat.data_server
CREATE TABLE IF NOT EXISTS `data_server` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Pengeluaran data tidak dipilih.

-- membuang struktur untuk table data_perangkat.nvr_cctv
CREATE TABLE IF NOT EXISTS `nvr_cctv` (
  `id_nvr` int(11) NOT NULL AUTO_INCREMENT,
  `merk_nvr` varchar(20) NOT NULL,
  `video_ch` int(2) NOT NULL,
  `hardisk` varchar(20) NOT NULL,
  `penggunaan` varchar(100) NOT NULL,
  `tahun` int(4) NOT NULL,
  PRIMARY KEY (`id_nvr`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Pengeluaran data tidak dipilih.

-- membuang struktur untuk table data_perangkat.perangkat_jaringan
CREATE TABLE IF NOT EXISTS `perangkat_jaringan` (
  `id_jaringan` int(11) NOT NULL AUTO_INCREMENT,
  `merk_perangkat` varchar(20) NOT NULL,
  `cpu` varchar(20) NOT NULL,
  `ram` varchar(20) NOT NULL,
  `lan_port` int(4) NOT NULL,
  `tahun` int(4) NOT NULL,
  PRIMARY KEY (`id_jaringan`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Pengeluaran data tidak dipilih.

-- membuang struktur untuk table data_perangkat.user
CREATE TABLE IF NOT EXISTS `user` (
  `id_user` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `telp` int(18) NOT NULL,
  `level` enum('admin','user','','') NOT NULL,
  PRIMARY KEY (`id_user`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Pengeluaran data tidak dipilih.

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
