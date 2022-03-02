-- --------------------------------------------------------
-- Host:                         localhost
-- Server version:               10.4.18-MariaDB - mariadb.org binary distribution
-- Server OS:                    Win64
-- HeidiSQL Version:             11.3.0.6295
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

-- Dumping structure for table db_hotel_adit.tb_fasilitas_hotel
CREATE TABLE IF NOT EXISTS `tb_fasilitas_hotel` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama_fasilitas` varchar(255) NOT NULL,
  `keterangan` varchar(255) NOT NULL,
  `nama_gambar` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8mb4;

-- Dumping data for table db_hotel_adit.tb_fasilitas_hotel: ~1 rows (approximately)
/*!40000 ALTER TABLE `tb_fasilitas_hotel` DISABLE KEYS */;
INSERT INTO `tb_fasilitas_hotel` (`id`, `nama_fasilitas`, `keterangan`, `nama_gambar`) VALUES
	(12, 'swiming', 'wegwrveragbv', 'spa.jpg');
/*!40000 ALTER TABLE `tb_fasilitas_hotel` ENABLE KEYS */;

-- Dumping structure for table db_hotel_adit.tb_fasilitas_kamar
CREATE TABLE IF NOT EXISTS `tb_fasilitas_kamar` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tipe_kamar` varchar(255) NOT NULL,
  `nama_fasilitas` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=32 DEFAULT CHARSET=utf8mb4;

-- Dumping data for table db_hotel_adit.tb_fasilitas_kamar: ~1 rows (approximately)
/*!40000 ALTER TABLE `tb_fasilitas_kamar` DISABLE KEYS */;
INSERT INTO `tb_fasilitas_kamar` (`id`, `tipe_kamar`, `nama_fasilitas`) VALUES
	(28, 'Standart Room', 'terdapat 1 televisi dan 1 buah twin bed serta 1 bathroom');
/*!40000 ALTER TABLE `tb_fasilitas_kamar` ENABLE KEYS */;

-- Dumping structure for table db_hotel_adit.tb_kamar
CREATE TABLE IF NOT EXISTS `tb_kamar` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tipe_kamar` varchar(100) DEFAULT NULL,
  `jumlah_kamar` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=61 DEFAULT CHARSET=utf8mb4;

-- Dumping data for table db_hotel_adit.tb_kamar: ~0 rows (approximately)
/*!40000 ALTER TABLE `tb_kamar` DISABLE KEYS */;
/*!40000 ALTER TABLE `tb_kamar` ENABLE KEYS */;

-- Dumping structure for table db_hotel_adit.tb_resepsionis
CREATE TABLE IF NOT EXISTS `tb_resepsionis` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama_pemesan` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `nomor_handphone` int(20) NOT NULL,
  `nama_tamu` varchar(255) NOT NULL,
  `tipe_kamar` varchar(255) NOT NULL,
  `tgl_check_in` date NOT NULL,
  `tgl_check_out` date NOT NULL,
  `jumlah_kamar` int(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=33 DEFAULT CHARSET=utf8mb4;

-- Dumping data for table db_hotel_adit.tb_resepsionis: ~6 rows (approximately)
/*!40000 ALTER TABLE `tb_resepsionis` DISABLE KEYS */;
INSERT INTO `tb_resepsionis` (`id`, `nama_pemesan`, `email`, `nomor_handphone`, `nama_tamu`, `tipe_kamar`, `tgl_check_in`, `tgl_check_out`, `jumlah_kamar`) VALUES
	(10, 'adit', 'ferarilima@yahoo.com', 888767, 'tradtyant', 'superior room', '2022-02-11', '2022-02-12', 2),
	(27, 'AV', 'aviono7@yahoo.com', 2147483647, 'AV', 'presidential room', '2022-02-24', '2022-02-25', 2),
	(28, 'Putri Zerista', 'putrizerista@gmail.com', 2147483647, 'Putri Zerista', 'presidential room', '2022-02-23', '2022-02-28', 1),
	(29, 'PA MAMAN', 'charlotte555@gmail.com', 2147483647, 'PA MAMAN', 'superior room', '2022-02-24', '2022-02-25', 3),
	(30, 'aergfbdsb', 'arberberab', 214534654, 'efbesfbteb', 'superior room', '2022-02-27', '2022-02-28', 1),
	(31, 'aergfbdsb', 'arberberab', 214534654, 'efbesfbteb', 'superior room', '2022-02-27', '2022-02-28', 1),
	(32, 'wrbvfsbrb', 'beberb', 1231244, 'sfabsfbs', 'luxury room', '2022-02-27', '2022-02-28', 2);
/*!40000 ALTER TABLE `tb_resepsionis` ENABLE KEYS */;

-- Dumping structure for table db_hotel_adit.users
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `level` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4;

-- Dumping data for table db_hotel_adit.users: ~0 rows (approximately)
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` (`id`, `username`, `password`, `level`) VALUES
	(1, 'admin', '123', 'Admin'),
	(2, 'resepsionis', 'rahasia', 'Resepsionis');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
