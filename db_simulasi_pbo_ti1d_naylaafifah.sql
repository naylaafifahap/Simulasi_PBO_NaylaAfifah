-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jun 18, 2026 at 06:50 AM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_simulasi_pbo_ti1d_naylaafifah`
--

-- --------------------------------------------------------

--
-- Table structure for table `tabel_pendaftaran`
--

CREATE TABLE `tabel_pendaftaran` (
  `id_pendaftaran` int NOT NULL,
  `nama_calon` varchar(100) COLLATE tis620_bin NOT NULL,
  `asal_sekolah` varchar(100) COLLATE tis620_bin NOT NULL,
  `nilai_ujian` decimal(5,2) NOT NULL,
  `biaya_pendaftaran_dasar` decimal(10,2) NOT NULL,
  `jalur_pendaftaran` enum('Reguler','Prestasi','Kedinasan') COLLATE tis620_bin NOT NULL,
  `pilihan_prodi` varchar(50) COLLATE tis620_bin DEFAULT NULL,
  `lokasi_kampus` varchar(50) COLLATE tis620_bin DEFAULT NULL,
  `jenis_prestasi` varchar(50) COLLATE tis620_bin DEFAULT NULL,
  `tingkat_prestasi` varchar(30) COLLATE tis620_bin DEFAULT NULL,
  `sk_ikatan_dinas` varchar(50) COLLATE tis620_bin DEFAULT NULL,
  `instansi_sponsor` varchar(100) COLLATE tis620_bin DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=tis620 COLLATE=tis620_bin;

--
-- Dumping data for table `tabel_pendaftaran`
--

INSERT INTO `tabel_pendaftaran` (`id_pendaftaran`, `nama_calon`, `asal_sekolah`, `nilai_ujian`, `biaya_pendaftaran_dasar`, `jalur_pendaftaran`, `pilihan_prodi`, `lokasi_kampus`, `jenis_prestasi`, `tingkat_prestasi`, `sk_ikatan_dinas`, `instansi_sponsor`) VALUES
(1, 'Ahmad Fauzi', 'SMAN 1 Jakarta', '85.50', '350000.00', 'Reguler', 'Teknik Informatika', 'Kampus Utama', NULL, NULL, NULL, NULL),
(2, 'Siti Aminah', 'SMAN 3 Bandung', '88.00', '350000.00', 'Reguler', 'Sistem Informasi', 'Kampus Utama', NULL, NULL, NULL, NULL),
(3, 'Budi Santoso', 'SMKN 2 Surabaya', '82.25', '350000.00', 'Reguler', 'Teknik Komputer', 'Kampus Batam', NULL, NULL, NULL, NULL),
(4, 'Dewi Lestari', 'SMAN 5 Yogyakarta', '90.00', '350000.00', 'Reguler', 'Sains Data', 'Kampus Utama', NULL, NULL, NULL, NULL),
(5, 'Eko Prasetyo', 'SMAN 1 Medan', '79.50', '350000.00', 'Reguler', 'Teknik Informatika', 'Kampus Batam', NULL, NULL, NULL, NULL),
(6, 'Fitriani', 'SMAN 2 Makassar', '86.75', '350000.00', 'Reguler', 'Sistem Informasi', 'Kampus Utama', NULL, NULL, NULL, NULL),
(7, 'Gilang Dirga', 'SMKN 1 Semarang', '81.00', '350000.00', 'Reguler', 'Teknik Komputer', 'Kampus Utama', NULL, NULL, NULL, NULL),
(8, 'Hendra Wijaya', 'SMAN 1 Solo', '92.00', '150000.00', 'Prestasi', NULL, NULL, 'Olimpiade Matematika', 'Nasional', NULL, NULL),
(9, 'Indah Permata', 'SMAN 8 Jakarta', '94.50', '150000.00', 'Prestasi', NULL, NULL, 'FLL Robotics', 'Internasional', NULL, NULL),
(10, 'Joko Widodo', 'SMAN 3 Solo', '89.00', '150000.00', 'Prestasi', NULL, NULL, 'Lomba Karya Ilmiah', 'Provinsi', NULL, NULL),
(11, 'Kevin Sanjaya', 'SMAN 1 Kudus', '85.00', '150000.00', 'Prestasi', NULL, NULL, 'Bulutangkis Tunggal', 'Nasional', NULL, NULL),
(12, 'Lesti Kejora', 'SMAN 1 Cianjur', '87.50', '150000.00', 'Prestasi', NULL, NULL, 'Menyanyi Solo', 'Nasional', NULL, NULL),
(13, 'Muhammad Ali', 'SMAN 4 Ambon', '88.20', '150000.00', 'Prestasi', NULL, NULL, 'Pencak Silat', 'Provinsi', NULL, NULL),
(14, 'Nadia Vega', 'SMAN 2 Padang', '91.10', '150000.00', 'Prestasi', NULL, NULL, 'Debat Bahasa Inggris', 'Nasional', NULL, NULL),
(15, 'Oki Setiana', 'SMAN 14 Jakarta', '84.00', '500000.00', 'Kedinasan', NULL, NULL, NULL, NULL, 'SK-990/IK/2026', 'Kementerian Kominfo'),
(16, 'Putra Perdana', 'SMAN 1 Denpasar', '86.50', '500000.00', 'Kedinasan', NULL, NULL, NULL, NULL, 'SK-112/BKN/2026', 'Badan Kepegawaian Negara'),
(17, 'Qori Sandioriva', 'SMAN 1 Banda Aceh', '83.00', '500000.00', 'Kedinasan', NULL, NULL, NULL, NULL, 'SK-554/DIS/2026', 'Dinas Pendidikan Daerah'),
(18, 'Rian Jombang', 'SMAN 2 Jombang', '80.00', '500000.00', 'Kedinasan', NULL, NULL, NULL, NULL, 'SK-202/KUM/2026', 'Kementerian Hukum dan HAM'),
(19, 'Sania Mirza', 'SMAN 7 Palembang', '87.80', '500000.00', 'Kedinasan', NULL, NULL, NULL, NULL, 'SK-771/PER/2026', 'Kementerian Perhubungan'),
(20, 'Taufik Hidayat', 'SMAN 1 Bandung', '85.90', '500000.00', 'Kedinasan', NULL, NULL, NULL, NULL, 'SK-309/SET/2026', 'Sekretariat Negara');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tabel_pendaftaran`
--
ALTER TABLE `tabel_pendaftaran`
  ADD PRIMARY KEY (`id_pendaftaran`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tabel_pendaftaran`
--
ALTER TABLE `tabel_pendaftaran`
  MODIFY `id_pendaftaran` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
