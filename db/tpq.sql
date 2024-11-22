-- --------------------------------------------------------
-- Host:                         localhost
-- Server version:               11.3.2-MariaDB-log - mariadb.org binary distribution
-- Server OS:                    Win64
-- HeidiSQL Version:             12.8.0.6908
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Dumping database structure for tpq
CREATE DATABASE IF NOT EXISTS `tpq` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci */;
USE `tpq`;

-- Dumping structure for table tpq.m_tingkatan
DROP TABLE IF EXISTS `m_tingkatan`;
CREATE TABLE IF NOT EXISTS `m_tingkatan` (
  `ID_TINGKATAN` varchar(50) NOT NULL,
  `NAMA_TINGKATAN` varchar(50) DEFAULT NULL,
  `DESKRIPSI` text DEFAULT NULL,
  `STATUS` varchar(50) DEFAULT '1',
  `INPUT_OLEH` varchar(50) DEFAULT NULL,
  `INPUT_TANGGAL` datetime DEFAULT NULL,
  PRIMARY KEY (`ID_TINGKATAN`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Dumping data for table tpq.m_tingkatan: ~3 rows (approximately)
REPLACE INTO `m_tingkatan` (`ID_TINGKATAN`, `NAMA_TINGKATAN`, `DESKRIPSI`, `STATUS`, `INPUT_OLEH`, `INPUT_TANGGAL`) VALUES
	('TKT-202411-001', 'IQRO\'', '', '1', 'husniaditya', '2024-11-14 19:57:59'),
	('TKT-202411-002', 'Al-Quran', '', '1', 'husniaditya', '2024-11-14 10:39:05');

-- Dumping structure for table tpq.m_user
DROP TABLE IF EXISTS `m_user`;
CREATE TABLE IF NOT EXISTS `m_user` (
  `ID_USER` varchar(50) NOT NULL,
  `USERNAME` varchar(50) DEFAULT NULL,
  `USER_PASSWORD` varchar(200) DEFAULT NULL,
  `NAMA` varchar(50) DEFAULT NULL,
  `EMAIL` text DEFAULT NULL,
  `AKSES` varchar(50) DEFAULT NULL,
  `STATUS` varchar(50) DEFAULT '1',
  `INPUT_OLEH` varchar(50) DEFAULT NULL,
  `INPUT_TANGGAL` datetime DEFAULT NULL,
  PRIMARY KEY (`ID_USER`),
  UNIQUE KEY `USERNAME` (`USERNAME`),
  KEY `EMAIL` (`EMAIL`(768))
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Dumping data for table tpq.m_user: ~3 rows (approximately)
REPLACE INTO `m_user` (`ID_USER`, `USERNAME`, `USER_PASSWORD`, `NAMA`, `EMAIL`, `AKSES`, `STATUS`, `INPUT_OLEH`, `INPUT_TANGGAL`) VALUES
	('USR-202411-001', 'husniaditya', '$2y$12$NMxDXU77/MPLgD44nkvdB.jPdB.n5kJLWcYGe8lxBoBiGyk/Jeysu', 'Husni Aditya A', 'husni.aditya@mail.com', 'Admin', '1', 'husniaditya', '2024-11-15 19:30:06'),
	('USR-202411-002', 'Andre', '$2y$12$3j9NS4hYuNv/yNl7DAYEFe6i.lZFhf4It8Stgz7ce0v.F2tG/4h1y', 'Andri Sugianto', 'andri.sugianto@mail.com', 'Admin', '1', 'husniaditya', '2024-11-16 09:10:55'),
	('USR-202411-003', 'Muhammad_amin', '$2y$12$PV4YszQstka2TQNqXfzOQOqd3hjPqbpkTnvxKilxgN5xwwzXuYV9i', 'Ustadz Muhammad Amin', 'nurulqalbi@mail.com', 'Ustadz/Asatidz', '1', 'husniaditya', '2024-11-18 20:25:37');

-- Dumping structure for table tpq.t_anggota
DROP TABLE IF EXISTS `t_anggota`;
CREATE TABLE IF NOT EXISTS `t_anggota` (
  `ID_ANGGOTA` varchar(50) NOT NULL,
  `ID_TINGKATAN` varchar(50) DEFAULT NULL,
  `NAMA_ANGGOTA` varchar(50) DEFAULT NULL,
  `ALAMAT` text DEFAULT NULL,
  `TEMPAT_LAHIR` varchar(50) DEFAULT NULL,
  `TANGGAL_LAHIR` date DEFAULT NULL,
  `JK` varchar(50) DEFAULT NULL,
  `ORANG_TUA` varchar(50) DEFAULT NULL,
  `PEKERJAAN` varchar(50) DEFAULT NULL,
  `DEPARTEMEN` varchar(50) DEFAULT NULL,
  `HANDPHONE` varchar(50) DEFAULT NULL,
  `TANGGAL_BERGABUNG` date DEFAULT NULL,
  `TANGGAL_KELUAR` date DEFAULT NULL,
  `STATUS_ANGGOTA` varchar(50) DEFAULT '1',
  `STATUS` varchar(50) DEFAULT '1',
  `INPUT_OLEH` varchar(50) DEFAULT NULL,
  `INPUT_TANGGAL` datetime DEFAULT NULL,
  PRIMARY KEY (`ID_ANGGOTA`),
  KEY `ID_TINGKATAN` (`ID_TINGKATAN`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Dumping data for table tpq.t_anggota: ~66 rows (approximately)
REPLACE INTO `t_anggota` (`ID_ANGGOTA`, `ID_TINGKATAN`, `NAMA_ANGGOTA`, `ALAMAT`, `TEMPAT_LAHIR`, `TANGGAL_LAHIR`, `JK`, `ORANG_TUA`, `PEKERJAAN`, `DEPARTEMEN`, `HANDPHONE`, `TANGGAL_BERGABUNG`, `TANGGAL_KELUAR`, `STATUS_ANGGOTA`, `STATUS`, `INPUT_OLEH`, `INPUT_TANGGAL`) VALUES
	('TPQ-202411-001', 'TKT-202411-001', 'Haviz Dwi Handoko', 'Perumahan IC Complex No.52', 'Cilacap', '2010-10-13', 'L', 'Dartoyo', 'Driver', 'PT.MS1', '087702739xxx', '2024-11-14', NULL, '1', '1', 'husniaditya', '2024-11-15 15:02:42'),
	('TPQ-202411-002', 'TKT-202411-001', 'Syafa Andika Putra Pratama', 'Perumahan IC Complex No.26', 'Blitar', NULL, 'L', 'Ahmad Alfianur', 'Driver', 'EMU', '082149095454', '2024-11-14', NULL, '1', '1', 'upload', '2024-11-14 00:00:00'),
	('TPQ-202411-003', 'TKT-202411-001', 'Muhammad Andika', 'Perumahan Staff H.58', 'Sampit', NULL, 'L', 'Joniyus', 'Staff', 'LAND', '081251135993', '2024-11-14', NULL, '1', '1', 'upload', '2024-11-14 00:00:00'),
	('TPQ-202411-004', 'TKT-202411-001', 'Muhammad Iqbal Kurniawan', 'Perumahan IC Complex No.42', 'Bangkal', NULL, 'L', 'Setiawan', 'Karyawan', 'EMU', '', '2024-11-14', NULL, '1', '1', 'upload', '2024-11-14 00:00:00'),
	('TPQ-202411-005', 'TKT-202411-001', 'Dika Aditya', 'Perumahan IC Complex No.', 'Sampit', NULL, 'L', 'Daryanto', 'Security', 'RO', '', '2024-11-14', NULL, '1', '1', 'upload', '2024-11-14 00:00:00'),
	('TPQ-202411-006', 'TKT-202411-001', 'Devansyah Maulana', 'Perumahan IC Complex No.', 'Bangkal', NULL, 'L', 'Irman', 'Driver', 'RO', '081250517149', '2024-11-14', NULL, '1', '1', 'upload', '2024-11-14 00:00:00'),
	('TPQ-202411-007', 'TKT-202411-001', 'Kafila Satya', 'Perumahan Staff H.36', 'Sulawesi', NULL, 'L', 'Isman ', 'FC', 'PT.MS1', '', '2024-11-14', NULL, '1', '1', 'upload', '2024-11-14 00:00:00'),
	('TPQ-202411-008', 'TKT-202411-001', 'Muhammad Fachry Akbar', 'Perumahan Staff E.34', 'Bekasi', NULL, 'L', 'Muhammad Taufiq', 'Staff', 'RO', '0811528678', '2024-11-14', NULL, '1', '1', 'upload', '2024-11-14 00:00:00'),
	('TPQ-202411-009', 'TKT-202411-001', 'Muhammad Farel Ardiansyah', 'Perumahan Staff E.34', 'Medan', NULL, 'L', 'Muhammad Taufiq', 'Staff', 'RO', '0811528678', '2024-11-14', NULL, '1', '1', 'upload', '2024-11-14 00:00:00'),
	('TPQ-202411-010', 'TKT-202411-001', 'Gemael Emeraldy Dharma Wibawa', 'Perumahan Staff E.36', 'Jogjakarta', NULL, 'L', 'Maskarebet', 'Staff', 'EMU', '081332795990', '2024-11-14', NULL, '1', '1', 'upload', '2024-11-14 00:00:00'),
	('TPQ-202411-011', 'TKT-202411-001', 'Erlangga Yoga Pratama', 'Perumahan Staff H21', 'Purbalingga', NULL, 'L', 'Alisun', 'Staff', 'EMU', '081350283829', '2024-11-14', NULL, '1', '1', 'upload', '2024-11-14 00:00:00'),
	('TPQ-202411-012', 'TKT-202411-001', 'Muhammad Diki Djakwan', 'Mess Manager No. D07', 'Pangkalambun', NULL, 'L', 'Toto Sugiarto', 'DM', 'PT.MS1', '081291372270', '2024-11-14', NULL, '1', '1', 'upload', '2024-11-14 00:00:00'),
	('TPQ-202411-013', 'TKT-202411-001', 'Aldi Khairul ikhsan', 'Perumahan Staff E.33', 'Sampit', NULL, 'L', 'Suhardi', 'Staff', 'Workshop', '085252962323', '2024-11-14', NULL, '1', '1', 'upload', '2024-11-14 00:00:00'),
	('TPQ-202411-014', 'TKT-202411-001', 'Muhammad Naja', 'Perumahan Staff H.42', 'Pangkalambun', NULL, 'L', 'Rahmat', 'Mekanik', 'Workshop', '', '2024-11-14', NULL, '1', '1', 'upload', '2024-11-14 00:00:00'),
	('TPQ-202411-015', 'TKT-202411-001', 'Muhammad Hafizh Badali', 'Perumahan Staff H.31', 'Sampit', NULL, 'L', 'Rusdi', 'FC', 'PT.MS1', '', '2024-11-14', NULL, '1', '1', 'upload', '2024-11-14 00:00:00'),
	('TPQ-202411-016', 'TKT-202411-001', 'Hagia Avicena Adhanibras', 'Perumahan Staff E.58', 'Sampit', NULL, 'L', 'Ahmad Hasanuddin', 'Staff', 'EMU', '081333017883', '2024-11-14', NULL, '1', '1', 'upload', '2024-11-14 00:00:00'),
	('TPQ-202411-017', 'TKT-202411-001', 'Akhdan Maarif', 'Perumahan IC Complex No.60', 'Sampit', NULL, 'L', 'Akhmad Amin', 'Driver', 'PT.MS1', '', '2024-11-14', NULL, '1', '1', 'upload', '2024-11-14 00:00:00'),
	('TPQ-202411-018', 'TKT-202411-001', 'Muhammad Messi Alexander ', 'Perumahan PT.MS POM 1 No 67', 'Sampit', NULL, 'L', 'Zulkarnain', 'Karyawan', 'PT.MS POM 1', '085247849376', '2024-11-14', NULL, '1', '1', 'upload', '2024-11-14 00:00:00'),
	('TPQ-202411-019', 'TKT-202411-001', 'Jean Kim Prasaja', 'Perumahan Staff E.52', 'Sampit', NULL, 'L', 'Sigit Setiawan', 'Staff', 'PT.MS', '082255307173', '2024-11-14', NULL, '1', '1', 'upload', '2024-11-14 00:00:00'),
	('TPQ-202411-020', 'TKT-202411-001', 'Radityas Javas Narariya', 'Perumahan Staff H.87', 'Sampit', NULL, 'L', 'Nova Salasia', 'Staff', 'EMU', '085752499470', '2024-11-14', NULL, '1', '1', 'upload', '2024-11-14 00:00:00'),
	('TPQ-202411-021', 'TKT-202411-001', 'Muhammad Al Azka', 'Perumahan Staff H.58', 'Sampit', NULL, 'L', 'Joniyus', 'Staff', 'Land', '081251135993', '2024-11-14', NULL, '1', '1', 'upload', '2024-11-14 00:00:00'),
	('TPQ-202411-022', 'TKT-202411-001', 'Sakha Nandana R', 'Perumahan Staff H128', 'Sampit', NULL, 'L', 'Indar Fiana', 'Staff', 'Medical', '', '2024-11-14', NULL, '1', '1', 'upload', '2024-11-14 00:00:00'),
	('TPQ-202411-023', 'TKT-202411-001', 'Muhammad Alfath Musyaffa', 'Perumahan Staff H35', 'Sampit', NULL, 'L', 'Oudi Prasetyo', 'Staff', 'PT.MS1', '085393818598', '2024-11-14', NULL, '1', '1', 'upload', '2024-11-14 00:00:00'),
	('TPQ-202411-024', 'TKT-202411-001', 'Ahmad Febrian', 'Perumahan Staff E.70', 'Sampit', NULL, 'L', 'Abdul Majid', 'Staff', 'PT.MS1', '', '2024-11-14', NULL, '1', '1', 'upload', '2024-11-14 00:00:00'),
	('TPQ-202411-025', 'TKT-202411-001', 'Muhammad Khairani', 'Perumahan Mill No 98', 'Sampit', NULL, 'L', 'Kasyanto', 'Karyawan', 'PT.MS1', '', '2024-11-14', NULL, '1', '1', 'upload', '2024-11-14 00:00:00'),
	('TPQ-202411-026', 'TKT-202411-001', 'Dzaky Agil F', 'Perumahan Staff H.60', 'Magelang', NULL, 'L', 'Muji Raharjo', 'Staff', 'RO', '', '2024-11-14', NULL, '1', '1', 'upload', '2024-11-14 00:00:00'),
	('TPQ-202411-027', 'TKT-202411-001', 'Muhammad Al-Aqsa Kurniawan', '', 'Sampit', NULL, 'L', 'Helmi', 'Mekanik', 'CWS', '', '2024-11-14', NULL, '1', '1', 'upload', '2024-11-14 00:00:00'),
	('TPQ-202411-028', 'TKT-202411-001', 'Rimba Muhammad Mukti', '', 'Sampit', NULL, 'L', 'Eko', 'Karyawan', 'PT.MS POM1', '', '2024-11-14', NULL, '1', '1', 'upload', '2024-11-14 00:00:00'),
	('TPQ-202411-029', 'TKT-202411-001', 'Arjuna', 'Perumahan Staff E.44', 'KOTIM', NULL, 'L', 'Jumanto', 'Mekanik', 'CWS', '', '2024-11-14', NULL, '1', '1', 'upload', '2024-11-14 00:00:00'),
	('TPQ-202411-030', 'TKT-202411-001', 'Aqila Syalsabila', 'Perumahan IC Complex No.60', 'Pangkalambun', NULL, 'P', 'Akhmad Amin', 'Driver', 'PT.MS1', '', '2024-11-14', NULL, '1', '1', 'upload', '2024-11-14 00:00:00'),
	('TPQ-202411-031', 'TKT-202411-001', 'Farhah Zarira Qaila', 'Perumahan Staff E.94', 'Sampit', NULL, 'P', 'Fauzianoor', 'Staff', 'RO', '085752411712', '2024-11-14', NULL, '1', '1', 'upload', '2024-11-14 00:00:00'),
	('TPQ-202411-032', 'TKT-202411-001', 'Eliza Syahirah Fairuz', 'Perumahan Staff E.94', 'Sampit', NULL, 'P', 'Fauzianoor', 'Staff', 'RO', '085752411712', '2024-11-14', NULL, '1', '1', 'upload', '2024-11-14 00:00:00'),
	('TPQ-202411-033', 'TKT-202411-001', 'Aurel Liya Aizah', 'Perumahan Staff E.53', 'Sragen', NULL, 'P', 'Ade', 'Medical', 'Klinik', '085255338197', '2024-11-14', NULL, '1', '1', 'upload', '2024-11-14 00:00:00'),
	('TPQ-202411-034', 'TKT-202411-001', 'Iqlima Athiya Taqiy', 'Perumahan Staff H.41', 'Sampit', NULL, 'P', 'Herry Warsidik', 'Staff', 'PT.MS1', '082165194530', '2024-11-14', NULL, '1', '1', 'upload', '2024-11-14 00:00:00'),
	('TPQ-202411-035', 'TKT-202411-001', 'Calista Zevana Jouli', 'Perumahan Staff E.41', 'Cilacap', NULL, 'P', 'Abdul Manaf', 'Mekanik', 'Workshop', '', '2024-11-14', NULL, '1', '1', 'upload', '2024-11-14 00:00:00'),
	('TPQ-202411-036', 'TKT-202411-001', 'Calea Avissa Natalyhasiolan', 'Perumahan Staff E.41', 'Cilacap', NULL, 'P', 'Abdul Manaf', 'Mekanik', 'Workshop', '', '2024-11-14', NULL, '1', '1', 'upload', '2024-11-14 00:00:00'),
	('TPQ-202411-037', 'TKT-202411-001', 'Reva Leticia Rahmadani', 'Perumahan Staff H.11', 'Sragen', NULL, 'P', 'Sumardi', 'Mekanik', 'Workshop', '081231318840', '2024-11-14', NULL, '1', '1', 'upload', '2024-11-14 00:00:00'),
	('TPQ-202411-038', 'TKT-202411-001', 'Nurbaiti', 'Perumahan IC Complex No.17', 'Sampit', NULL, 'P', 'Jurisetiawan', 'Driver', 'PT.MS1', '081248657118', '2024-11-14', NULL, '1', '1', 'upload', '2024-11-14 00:00:00'),
	('TPQ-202411-039', 'TKT-202411-001', 'Maya Afrilia Pratiwi', 'Perumahan IC Complex No.', '', NULL, 'P', 'Daryanto', 'Security', 'RO', '', '2024-11-14', NULL, '1', '1', 'upload', '2024-11-14 00:00:00'),
	('TPQ-202411-040', 'TKT-202411-001', 'Azzahra Syifa Salsabila', 'Perumahan Staff H.24', 'Sembuluh', NULL, 'P', 'Joni', 'Staff', 'RO', '08115230207', '2024-11-14', NULL, '1', '1', 'upload', '2024-11-14 00:00:00'),
	('TPQ-202411-041', 'TKT-202411-001', 'Framesti Firmadani', 'Perumahan Guru H.127', 'Sampit', NULL, 'P', 'Pujiyono', 'Guru', 'BB01', '085246804335', '2024-11-14', NULL, '1', '1', 'upload', '2024-11-14 00:00:00'),
	('TPQ-202411-042', 'TKT-202411-001', 'Fadilah Friska Ramadani', 'Perumahan IC Complex No.31', 'Malang', NULL, 'P', 'Agung Andriansyah', 'Operator', 'PT.MS1', '', '2024-11-14', NULL, '1', '1', 'upload', '2024-11-14 00:00:00'),
	('TPQ-202411-043', 'TKT-202411-001', 'Wilma Maesarah', 'Perumahan Staff H.37', 'Pengembur', NULL, 'P', 'Mashar', 'Staff', 'EMU', '085251651665', '2024-11-14', NULL, '1', '1', 'upload', '2024-11-14 00:00:00'),
	('TPQ-202411-044', 'TKT-202411-001', 'Putri Pertiwi', 'Perumahan IC Complex No.', 'Madiun', NULL, 'P', 'Suminto', 'Driver', 'RO', '085252158004', '2024-11-14', NULL, '1', '1', 'upload', '2024-11-14 00:00:00'),
	('TPQ-202411-045', 'TKT-202411-001', 'Wina Andiani', 'Perumahan IC Complex No.37', 'Bangkal', NULL, 'P', 'Idhar Kholid', 'Security', 'PT.MS1', '', '2024-11-14', NULL, '1', '1', 'upload', '2024-11-14 00:00:00'),
	('TPQ-202411-046', 'TKT-202411-001', 'Ayu Nina Munajah', 'Perumahan Staff H.', 'Sampit', NULL, 'P', 'Nanang', 'Driver', 'PT.MS1', '085251773318', '2024-11-14', NULL, '1', '1', 'upload', '2024-11-14 00:00:00'),
	('TPQ-202411-047', 'TKT-202411-001', 'Aida Zaskia', 'Perumahan IC Complex No 27', 'Sampit', NULL, 'P', 'Suriansyah', 'Security', 'RO', '085313969196', '2024-11-14', NULL, '1', '1', 'upload', '2024-11-14 00:00:00'),
	('TPQ-202411-048', 'TKT-202411-001', 'Novia Intan Lailatul Ula', 'Perumahan PT.MS POM1 No:14', 'Pekalongan', NULL, 'P', 'Muji', 'Karyawan', 'PT.MS POM1', '085313969196', '2024-11-14', NULL, '1', '1', 'upload', '2024-11-14 00:00:00'),
	('TPQ-202411-049', 'TKT-202411-001', 'Nashroh Adilla', 'Perumahan PT.MS POM1 ', 'Medan', NULL, 'P', 'Eka', 'Staff', 'MCW', '082276264382', '2024-11-14', NULL, '1', '1', 'upload', '2024-11-14 00:00:00'),
	('TPQ-202411-050', 'TKT-202411-001', 'Safira Khairunnisa', 'Perumahan PT.MS POM1 ', 'Medan', NULL, 'P', 'Eka', 'Staff', 'MCW', '082276264382', '2024-11-14', NULL, '1', '1', 'upload', '2024-11-14 00:00:00'),
	('TPQ-202411-051', 'TKT-202411-001', 'Ayunda Vee Syifa', 'Perumahan Staff H.87', 'Malang', NULL, 'P', 'Nova Salasia', 'Staff', 'EMU', '085752499470', '2024-11-14', NULL, '1', '1', 'upload', '2024-11-14 00:00:00'),
	('TPQ-202411-052', 'TKT-202411-001', 'Nurrizka Amelia', '', '', NULL, 'P', 'Suhardi', '', '', '', '2024-11-14', NULL, '1', '1', 'upload', '2024-11-14 00:00:00'),
	('TPQ-202411-053', 'TKT-202411-001', 'Rajwa Shafa Qurrotul \'Ain', 'Perumahan Staff H.43', 'Sampit', NULL, 'P', 'Bahrul Fauzi', 'Mekanik', 'CWS', '', '2024-11-14', NULL, '1', '1', 'upload', '2024-11-14 00:00:00'),
	('TPQ-202411-054', 'TKT-202411-001', 'Nadhira Khansa Azzahra', 'Perumahan Staff H.43', 'Sampit', NULL, 'P', 'Bahrul Fauzi', 'Mekanik', 'CWS', '', '2024-11-14', NULL, '1', '1', 'upload', '2024-11-14 00:00:00'),
	('TPQ-202411-055', 'TKT-202411-001', 'Alifah Nur Leilani', 'Perumahan Staff H.35', 'Sampit', NULL, 'P', 'Oudi Prasetyo', 'Staff', 'PT.MS 1', '085393818598', '2024-11-14', NULL, '1', '1', 'upload', '2024-11-14 00:00:00'),
	('TPQ-202411-056', 'TKT-202411-001', 'Desi Ratna Maulin', 'Perumahan Staff E.70', 'Sampit', NULL, 'P', 'Abdul Majid', 'Staff', 'PT.MS 1', '', '2024-11-14', NULL, '1', '1', 'upload', '2024-11-14 00:00:00'),
	('TPQ-202411-057', 'TKT-202411-001', 'Ralindya Naiza Ayu', 'Perumahan Staff E.45', 'Surakarta', NULL, 'P', 'Moch.Dasrial', 'Staff', 'RO', '', '2024-11-14', NULL, '1', '1', 'upload', '2024-11-14 00:00:00'),
	('TPQ-202411-058', 'TKT-202411-001', 'Nur Khafizah', 'Perumahan Staff H.61', 'Sampit', NULL, 'P', '', '', '', '082353357280', '2024-11-14', NULL, '1', '1', 'upload', '2024-11-14 00:00:00'),
	('TPQ-202411-059', 'TKT-202411-001', 'Khaira Lubna', '', '', NULL, 'P', '', '', '', '', '2024-11-14', NULL, '1', '1', 'upload', '2024-11-14 00:00:00'),
	('TPQ-202411-060', 'TKT-202411-001', 'Aqila Rahma', 'Perumahan Staff E.77', 'Surabaya', NULL, 'P', 'Rahmad SG', 'Staff', 'RO', '', '2024-11-14', NULL, '1', '1', 'upload', '2024-11-14 00:00:00'),
	('TPQ-202411-061', 'TKT-202411-001', 'Aira Maulida', '', 'Sampit', NULL, 'P', 'Dino', 'Mekanik', 'CWS', '', '2024-11-14', NULL, '1', '1', 'upload', '2024-11-14 00:00:00'),
	('TPQ-202411-062', 'TKT-202411-001', 'Husna', '', 'Sampit', NULL, 'P', 'Dino', 'Mekanik', 'CWS', '', '2024-11-14', NULL, '1', '1', 'upload', '2024-11-14 00:00:00'),
	('TPQ-202411-063', 'TKT-202411-001', 'Adelia Risma', '', 'Sampit', NULL, 'P', 'Delima wati', '', '', '', '2024-11-14', NULL, '1', '1', 'upload', '2024-11-14 00:00:00'),
	('TPQ-202411-064', 'TKT-202411-001', 'Olifia Affara Aruna', '', '', NULL, 'P', '', '', '', '', '2024-11-14', NULL, '1', '1', 'upload', '2024-11-14 00:00:00'),
	('TPQ-202411-065', 'TKT-202411-001', 'Afifa Fitri Sudadi', '', '', NULL, 'P', 'Sudadi', 'Mekanik', 'CWS', '', '2024-11-14', NULL, '1', '1', 'upload', '2024-11-14 00:00:00'),
	('TPQ-202411-066', 'TKT-202411-001', 'Zhafira', '', '', NULL, 'P', 'Ilman', 'Staff', 'PT.MS1', '', '2024-11-14', NULL, '1', '1', 'upload', '2024-11-14 00:00:00'),
	('TPQ-202411-067', 'TKT-202411-001', 'Ibrahim', 'perumah staff PT.MS1 E96', 'KOTIM', '2019-02-09', 'L', 'Andri Sugianto', 'Swasta', 'Sustainability', '082255525282', '2023-12-28', NULL, '1', '1', 'husniaditya', '2024-11-18 20:31:51');

-- Dumping structure for table tpq.t_iuran
DROP TABLE IF EXISTS `t_iuran`;
CREATE TABLE IF NOT EXISTS `t_iuran` (
  `ID_IURAN` varchar(50) NOT NULL,
  `ID_ANGGOTA` varchar(50) DEFAULT NULL,
  `TGL_IURAN` date DEFAULT NULL,
  `DK` varchar(50) DEFAULT NULL,
  `JUMLAH` int(11) DEFAULT NULL,
  `KETERANGAN` varchar(200) DEFAULT NULL,
  `STATUS` varchar(50) DEFAULT '1',
  `INPUT_OLEH` varchar(50) DEFAULT NULL,
  `INPUT_TANGGAL` datetime DEFAULT NULL,
  PRIMARY KEY (`ID_IURAN`),
  KEY `ID_ANGGOTA` (`ID_ANGGOTA`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Dumping data for table tpq.t_iuran: ~6 rows (approximately)
REPLACE INTO `t_iuran` (`ID_IURAN`, `ID_ANGGOTA`, `TGL_IURAN`, `DK`, `JUMLAH`, `KETERANGAN`, `STATUS`, `INPUT_OLEH`, `INPUT_TANGGAL`) VALUES
	('IUR-202411-001', 'TPQ-202411-011', '2024-11-21', 'K', -50000, '  ', '1', 'husniaditya', '2024-11-22 13:09:40'),
	('IUR-202411-002', 'TPQ-202411-012', '2024-11-21', 'D', 50000, NULL, '0', 'husniaditya', '2024-11-21 19:32:14'),
	('IUR-202411-003', 'TPQ-202411-011', '2024-11-22', 'D', 50000, NULL, '1', 'husniaditya', '2024-11-21 19:32:14'),
	('IUR-202411-004', 'TPQ-202411-012', '2024-11-21', 'D', 50000, NULL, '1', 'husniaditya', '2024-11-21 19:32:14'),
	('IUR-202411-005', 'TPQ-202411-063', '2024-11-22', 'D', 50000, 'iuran bulanan', '1', 'husniaditya', '2024-11-22 12:51:19'),
	('IUR-202411-006', 'TPQ-202411-061', '2024-11-22', 'K', -50000, '', '1', 'husniaditya', '2024-11-22 12:54:46'),
	('IUR-202411-007', 'TPQ-202411-011', '2024-11-22', 'D', 50000, '', '1', 'husniaditya', '2024-11-22 13:24:40'),
	('IUR-202411-008', 'TPQ-202411-020', '2024-11-22', 'D', 50000, '', '1', 'husniaditya', '2024-11-22 13:25:46');

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
