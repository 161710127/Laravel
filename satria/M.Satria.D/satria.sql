-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 27, 2017 at 02:52 PM
-- Server version: 5.6.24
-- PHP Version: 5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `satria`
--

-- --------------------------------------------------------

--
-- Table structure for table `hasil`
--

CREATE TABLE IF NOT EXISTS `hasil` (
  `id` int(11) NOT NULL,
  `pendaftar_id` int(11) NOT NULL,
  `jurusan_id` int(11) NOT NULL,
  `nilai_tpa` varchar(55) NOT NULL,
  `nilai_wawancara` varchar(55) NOT NULL,
  `nilai_uan` varchar(55) NOT NULL,
  `nilai_minat` varchar(55) NOT NULL,
  `nilai_rata` varchar(55) NOT NULL,
  `penguji_id` int(11) NOT NULL,
  `tahun_ajaran` varchar(55) NOT NULL,
  `keterangan` varchar(55) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hasil`
--

INSERT INTO `hasil` (`id`, `pendaftar_id`, `jurusan_id`, `nilai_tpa`, `nilai_wawancara`, `nilai_uan`, `nilai_minat`, `nilai_rata`, `penguji_id`, `tahun_ajaran`, `keterangan`) VALUES
(2, 2, 2, '78', '78', '78', '78', '78', 2, '2017', 'Anda Lulus');

-- --------------------------------------------------------

--
-- Table structure for table `jurusan`
--

CREATE TABLE IF NOT EXISTS `jurusan` (
  `id` int(11) NOT NULL,
  `nama` varchar(55) NOT NULL,
  `nilai_lulus` varchar(55) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jurusan`
--

INSERT INTO `jurusan` (`id`, `nama`, `nilai_lulus`) VALUES
(2, 'TKR', '80');

-- --------------------------------------------------------

--
-- Table structure for table `kepsek`
--

CREATE TABLE IF NOT EXISTS `kepsek` (
  `id` int(11) NOT NULL,
  `nip` varchar(55) NOT NULL,
  `nama` varchar(55) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kepsek`
--

INSERT INTO `kepsek` (`id`, `nip`, `nama`) VALUES
(1, '7639855', 'Muhammad luthfi alman faluthi');

-- --------------------------------------------------------

--
-- Table structure for table `pendaftar`
--

CREATE TABLE IF NOT EXISTS `pendaftar` (
  `id` int(11) NOT NULL,
  `nama` varchar(55) NOT NULL,
  `tempat_lahir` varchar(55) NOT NULL,
  `tanggal_lahir` date DEFAULT NULL,
  `jenis_kelamin` varchar(55) NOT NULL,
  `agama` varchar(55) NOT NULL,
  `phone` varchar(55) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pendaftar`
--

INSERT INTO `pendaftar` (`id`, `nama`, `tempat_lahir`, `tanggal_lahir`, `jenis_kelamin`, `agama`, `phone`) VALUES
(2, 'satria', 'bandung', '2000-09-22', 'Laki - laki', 'Islam', '083764644');

-- --------------------------------------------------------

--
-- Table structure for table `penguji`
--

CREATE TABLE IF NOT EXISTS `penguji` (
  `id` int(11) NOT NULL,
  `nama` varchar(55) NOT NULL,
  `jabatan` varchar(55) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `penguji`
--

INSERT INTO `penguji` (`id`, `nama`, `jabatan`) VALUES
(2, 'Angga Nur Aprizal', 'OB');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `hasil`
--
ALTER TABLE `hasil`
  ADD PRIMARY KEY (`id`), ADD KEY `pendaftar_id` (`pendaftar_id`), ADD KEY `jurusan_id` (`jurusan_id`), ADD KEY `penguji_id` (`penguji_id`);

--
-- Indexes for table `jurusan`
--
ALTER TABLE `jurusan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kepsek`
--
ALTER TABLE `kepsek`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pendaftar`
--
ALTER TABLE `pendaftar`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `penguji`
--
ALTER TABLE `penguji`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `hasil`
--
ALTER TABLE `hasil`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `jurusan`
--
ALTER TABLE `jurusan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `kepsek`
--
ALTER TABLE `kepsek`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `pendaftar`
--
ALTER TABLE `pendaftar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `penguji`
--
ALTER TABLE `penguji`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `hasil`
--
ALTER TABLE `hasil`
ADD CONSTRAINT `hasil_ibfk_1` FOREIGN KEY (`pendaftar_id`) REFERENCES `pendaftar` (`id`),
ADD CONSTRAINT `hasil_ibfk_2` FOREIGN KEY (`jurusan_id`) REFERENCES `jurusan` (`id`),
ADD CONSTRAINT `hasil_ibfk_3` FOREIGN KEY (`penguji_id`) REFERENCES `penguji` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
