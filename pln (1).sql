-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Aug 18, 2019 at 10:00 AM
-- Server version: 5.7.27-0ubuntu0.18.04.1
-- PHP Version: 5.6.40-5+ubuntu18.04.1+deb.sury.org+1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pln`
--

-- --------------------------------------------------------

--
-- Table structure for table `pln_evaluasi`
--

CREATE TABLE `pln_evaluasi` (
  `ID_EVALUASI` int(10) NOT NULL,
  `ID_USER` int(10) DEFAULT NULL,
  `KOMENTAR_TERBUKA` text,
  `PIC` varchar(100) DEFAULT NULL,
  `TINDAK_LANJUT` text,
  `SUDAH` text,
  `IN_PROGRESS` text,
  `BELUM` text,
  `LINK_FOTO` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `pln_evaluasi`
--

INSERT INTO `pln_evaluasi` (`ID_EVALUASI`, `ID_USER`, `KOMENTAR_TERBUKA`, `PIC`, `TINDAK_LANJUT`, `SUDAH`, `IN_PROGRESS`, `BELUM`, `LINK_FOTO`) VALUES
(1, 1, 'Makanan jam 12.30 sudah habis. Perlu dilakukan manajemen jumlah makanan karena kebetulan jumlah siswa sedang banyak. Tks.', 'PAK', '', '2019-08-15', '08/23/2019', '08/23/2019', 'CONGRATULATION.png.zip'),
(3, 1, 'penataan ruang makan perlu ditingkatkan terutama saat makan siang dibikin enak enak ya.', 'PAK', '', '2019-08-16', '', '', 'CONGRATULATION.png.zip'),
(4, 1, ' kapasitas ruang makan kurang memadai#', 'PAK', '', '2019-08-15', '2019-08-15', '2019-08-15', 'CONGRATULATION.png.zip'),
(5, 1, 'saya tidak menemukan cara masuk ke internet maupun intranet, terkait user name dan password', 'PAK', '', '2019-08-15', 'EHHE', 'EHHE', 'CONGRATULATION.png.zip'),
(6, 1, 'mengisi level1 ini sy menggunakan hotspot hp sy sendiri#-#', 'PAK', '', '2019-08-15', 'EHHE', 'EHHE', 'CONGRATULATION.png.zip'),
(7, 1, 'kurang fasilitas WIFI di ruang kelas#', 'PAK', '', '2019-08-16', '', '', 'CONGRATULATION.png.zip'),
(8, 1, 'tidak ada fasilitas WIFI di ruang kelas#', 'PAK', '', '2019-08-16', '', '', 'CONGRATULATION.png.zip'),
(9, 1, 'Kalo siang kadang AC ruangan terasa agak sedikit panas#', 'PAK', '', '2019-08-16', '', '', 'CONGRATULATION.png.zip'),
(10, 1, 'di mess tidak ada tempat sabun', 'PAK', '', '2019-08-16', '', '', 'CONGRATULATION.png.zip'),
(11, 1, 'AC diruang belajar (Srikandi) kurang dingin.', 'PAK', '', '2019-08-16', '', '', 'CONGRATULATION.png.zip'),
(12, 1, 'Service hotel kurang baik', 'PAK', '', '2019-08-09', '', '', 'CONGRATULATION.png.zip'),
(13, 1, 'sempat kekunci di kamar mandi perempuan krn kunci pintu keras dibuka', 'PAK', '', '2019-08-09', '', '', 'CONGRATULATION.png.zip'),
(14, 1, 'Untuk Wifi (intranet) tidak sampai ke ruang kelas Asesmen Peralatan Primer Gardu Induk', 'PAK', '', '2019-08-09', '', '', 'CONGRATULATION.png.zip'),
(15, 1, ' lengkapi fasilitas material kebersihan toilet', 'PAK', '', '2019-08-09', '', '', 'CONGRATULATION.png.zip'),
(16, 1, 'ada kendala di PMT 150kV GI Simulator yang sempat mengganggu proses pengujian keserempakan', 'LAB', '', '2019-08-09', '', '', 'CONGRATULATION.png.zip'),
(17, 1, 'alat simulasi praktek wairing APP TR dapat di Update dengan yang sedang di gunakan pada Unit.', 'LAB', '', '2019-08-09', '', '', 'CONGRATULATION.png.zip'),
(18, 1, 'Terlambatnya APD (wearpack & kacamata safety) sampai di lokasi# Telat membagikan wearpack dan peralatan safety lainnya', 'LAB', '', '2019-08-16', '', '', 'CONGRATULATION.png.zip'),
(19, 1, 'laser pointer sempat mati, sehingga ketika instruktur menunjuk layar , siswa tidak bisa melihat yang dimaksud', 'JAR', '', '2019-08-16', '', '', 'CONGRATULATION.png.zip'),
(20, 1, 'Fasilitas pembelajaran seperti spidol dan kertas yg habis, sehingga instruktur tidak dapat menjelaskan materi', 'JAR', '', '2019-08-16', '', '', 'CONGRATULATION.png.zip'),
(21, 1, 'hari pertama dan kedua suasana kelas, komunikasi 2 arah antara mentor dengan siswa belajar kurang terjalin. mentor menjelaskan dengan membaca materi secara keseluruhan namun kurang membangun feedback komunikasi pada siswa, sehingga suasana menjadi kurang menarik', 'JAR', '', '2019-08-16', '', '', 'CONGRATULATION.png.zip'),
(22, 1, '\"Tidak adanya perwakilan dari pihak udiklat yg menemani disana\n#Tidak ada staff udiklat yg datang ke Bali\"', 'JAR', '', '2019-08-16', '', '', 'CONGRATULATION.png.zip'),
(23, 1, 'Terlambatnya APD (wearpack & kacamata safety) sampai di lokasi# Telat membagikan wearpack dan peralatan safety lainnya', 'JAR', '', '2019-08-16', '', '', 'CONGRATULATION.png.zip'),
(24, 1, 'mohon contoh materi dapat di Update dengan yang sedang di gunakan pada Unit.', 'PMK', '', '2019-08-16', '2019-08-23', '2019-08-14', 'CONGRATULATION.png.zip'),
(25, 1, 'Materi pembelajaran perlu di revisi karena sudah lama dan disesuaikan dengan keadaan peralatan dan teknologi saat ini dan Metode jangan terlalu teks book', 'PMK', '', '2019-08-09', '2019-08-05', '2019-08-13', 'CONGRATULATION.png.zip');

-- --------------------------------------------------------

--
-- Table structure for table `pln_list`
--

CREATE TABLE `pln_list` (
  `ID_LIST` int(10) DEFAULT NULL,
  `SUDAH` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `pln_user`
--

CREATE TABLE `pln_user` (
  `ID_USER` int(10) NOT NULL,
  `USERNAME` varchar(200) DEFAULT NULL,
  `PASSWORD` varchar(200) DEFAULT NULL,
  `RULE` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `pln_user`
--

INSERT INTO `pln_user` (`ID_USER`, `USERNAME`, `PASSWORD`, `RULE`) VALUES
(1, 'admin', '123', 'admin'),
(2, 'user', '123', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pln_evaluasi`
--
ALTER TABLE `pln_evaluasi`
  ADD PRIMARY KEY (`ID_EVALUASI`);

--
-- Indexes for table `pln_user`
--
ALTER TABLE `pln_user`
  ADD PRIMARY KEY (`ID_USER`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pln_evaluasi`
--
ALTER TABLE `pln_evaluasi`
  MODIFY `ID_EVALUASI` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `pln_user`
--
ALTER TABLE `pln_user`
  MODIFY `ID_USER` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
