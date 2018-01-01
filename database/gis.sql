-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               10.1.19-MariaDB - mariadb.org binary distribution
-- Server OS:                    Win32
-- HeidiSQL Version:             9.4.0.5125
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Dumping database structure for gis
DROP DATABASE IF EXISTS `gis`;
CREATE DATABASE IF NOT EXISTS `gis` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `gis`;

-- Dumping structure for table gis.objek
DROP TABLE IF EXISTS `objek`;
CREATE TABLE IF NOT EXISTS `objek` (
  `objek_id` int(11) NOT NULL AUTO_INCREMENT,
  `objek_nama` varchar(50) DEFAULT NULL,
  `objek_alamat` varchar(100) DEFAULT NULL,
  `objek_latitude` decimal(10,8) NOT NULL DEFAULT '0.00000000',
  `objek_longitude` decimal(11,8) NOT NULL DEFAULT '0.00000000',
  `objek_foto` varchar(100) DEFAULT NULL,
  `objek_kontak` varchar(100) DEFAULT NULL,
  `objek_jadwal` varchar(100) DEFAULT '0',
  PRIMARY KEY (`objek_id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

-- Dumping data for table gis.objek: ~9 rows (approximately)
DELETE FROM `objek`;
/*!40000 ALTER TABLE `objek` DISABLE KEYS */;
INSERT INTO `objek` (`objek_id`, `objek_nama`, `objek_alamat`, `objek_latitude`, `objek_longitude`, `objek_foto`, `objek_kontak`, `objek_jadwal`) VALUES
	(5, 'Tia Dental Care', 'JL. KH. Ahmad Dahlan no.131 Sukajadi, Pekanbaru, 28282', 0.51642600, 101.43781600, './images/lokasi/5ba9b65b616784dfea9a0e2904dd2f4c.JPG', '0821-7233-3444 / 0811-7521-909', 'Senin – Sabtu 	: 09.00 – 21.00\r\nMinggu	: 10.00 – 21.00\r\n'),
	(7, 'Ahli Gigi Irsya', 'Jl. Nenas No.73, Jadirejo, Sukajadi, Kota Pekanbaru, Riau 28121, Indonesia', 0.51000530, 101.44373260, './images/lokasi/6f3eaaae501f23d92e8aa993a630a9d7.jpg', '0812-6898-8177 ', 'Senin – Minggu : 08.00 – 22.00'),
	(8, 'Klinik Gigi Yassar', 'Jl. Sekolah, Meranti Pandak, Rumbai Pesisir, Kota Pekanbaru, Riau 28266, Indonesia', 0.56041500, 101.44411800, './images/lokasi/9c7c4f9ac54ad2f884aecfc110f167c6.png', '0761 556103', 'Senin – Sabtu : 09.00 – 21.00'),
	(9, 'Riona Dental Care', 'Jalan Bukit Barisan No. 18A, Tangkerang Timur, Tenayan Raya, Tengkerang Timur, Tenayan Raya, Pekanba', 0.49171400, 101.48618500, './images/lokasi/506e17c33c4cb07a3482626fe49f127c.jpg', '0822-8819-4282', 'Senin – Sabtu 	: 10.00 – 22.00\r\nMinggu/Libur 	: Dengan Perjanjian'),
	(10, 'Iwan Dental', 'Jalan Kapur No.15 Pekanbaru, Pekanbaru, Kp. Baru, Pekanbaru Kota, Kota Pekanbaru, Riau 28155, Indone', 0.53988500, 101.43100700, './images/lokasi/3c454580d0c69957da1306b711b18c86.jpg', '0813-6566-4639', 'Senin – Sabtu : 08.00 – 20.00'),
	(11, 'Amanda Dental House', 'Jalan Tengku Bey Komp. Bumi Sejahtera Blok B No. 14 28284, Simpang Tiga, Bukit Raya, Kota Pekanbaru,', 0.45866220, 101.46204340, './images/lokasi/3b30cf4c3316de78ee8f743007d99417.png', '0852-6521-3826', 'Senin – Sabtu : 13.00 – 17.00\r\nMinggu	: 09.00 – 17.00'),
	(12, 'Angkasa Dental Care (Sp.Pros)', 'Jl. Angkasa, Air Hitam, Payung Sekaki, Kota Pekanbaru, Riau 28291, Indonesia', 0.53125100, 101.42558500, './images/lokasi/1460180da5b2033cd23a6a2ae5f471b0.png', '0852-6767-7588', 'Senin – Sabtu : 09.00 – 21.00'),
	(13, 'M Clinic Skin Care And Dental Care', 'Jl. Surabaya Gg Wonosari I \r\nPekanbaru City, Riau 28126, Indonesia', 0.49698000, 101.45970700, './images/lokasi/f26e99b644348e5e7bbdf837c29bae56.png', '0852-6767-7588', 'Senin – Sabtu : 09.00 – 21.00'),
	(14, 'Afifah Dental Clinic (ADC)', 'Jl. Melati No.16, Simpang Baru, Tampan, Kota Pekanbaru, Riau 28292, Indonesia', 0.48972720, 101.37174450, './images/lokasi/7a22f9cafee4ccc19110d34631a1c253.jpg', '0821-7304-2671', 'Senin – Sabtu : 09.00 – 20.00');
/*!40000 ALTER TABLE `objek` ENABLE KEYS */;

-- Dumping structure for table gis.pengguna
DROP TABLE IF EXISTS `pengguna`;
CREATE TABLE IF NOT EXISTS `pengguna` (
  `pengguna_id` int(11) NOT NULL AUTO_INCREMENT,
  `pengguna_nama` varchar(50) NOT NULL,
  `pengguna_password` varchar(32) NOT NULL,
  PRIMARY KEY (`pengguna_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- Dumping data for table gis.pengguna: ~0 rows (approximately)
DELETE FROM `pengguna`;
/*!40000 ALTER TABLE `pengguna` DISABLE KEYS */;
INSERT INTO `pengguna` (`pengguna_id`, `pengguna_nama`, `pengguna_password`) VALUES
	(1, 'admin', 'admin');
/*!40000 ALTER TABLE `pengguna` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
