-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 29, 2017 at 03:39 PM
-- Server version: 5.6.21
-- PHP Version: 5.5.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `studio-ci`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_paket`
--

CREATE TABLE IF NOT EXISTS `tbl_paket` (
`id_paket` int(11) NOT NULL,
  `nm_paket` varchar(50) NOT NULL,
  `hg_paket` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_paket`
--

INSERT INTO `tbl_paket` (`id_paket`, `nm_paket`, `hg_paket`) VALUES
(1, 'Paket Standar (5 Alat Musik)', 40000),
(2, 'Paket Premium (7 Alat Musik)', 60000);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pendaftar`
--

CREATE TABLE IF NOT EXISTS `tbl_pendaftar` (
`id_pendaftar` int(11) NOT NULL,
  `nm_pendaftar` varchar(50) NOT NULL,
  `dt_pendaftar` date NOT NULL,
  `id_waktu` int(11) NOT NULL,
  `id_paket` int(11) NOT NULL,
  `st_pendaftar` enum('N','Y') NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_pendaftar`
--

INSERT INTO `tbl_pendaftar` (`id_pendaftar`, `nm_pendaftar`, `dt_pendaftar`, `id_waktu`, `id_paket`, `st_pendaftar`) VALUES
(3, 'Jack Ferguson, S.Ag', '2016-07-26', 3, 1, 'Y'),
(5, 'Nurandi Endil', '2016-09-10', 2, 2, 'Y');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pengguna`
--

CREATE TABLE IF NOT EXISTS `tbl_pengguna` (
`id_pengguna` int(11) NOT NULL,
  `nm_pengguna` varchar(10) NOT NULL,
  `pw_pengguna` varchar(32) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_pengguna`
--

INSERT INTO `tbl_pengguna` (`id_pengguna`, `nm_pengguna`, `pw_pengguna`) VALUES
(1, 'alfastudio', '0192023a7bbd73250516f069df18b500');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_waktu`
--

CREATE TABLE IF NOT EXISTS `tbl_waktu` (
`id_waktu` int(11) NOT NULL,
  `nm_waktu` varchar(10) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_waktu`
--

INSERT INTO `tbl_waktu` (`id_waktu`, `nm_waktu`) VALUES
(1, '10:00'),
(2, '11:00'),
(3, '12:00'),
(4, '13:00'),
(5, '14:00'),
(6, '15:00'),
(7, '16:00'),
(8, '17:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_paket`
--
ALTER TABLE `tbl_paket`
 ADD PRIMARY KEY (`id_paket`);

--
-- Indexes for table `tbl_pendaftar`
--
ALTER TABLE `tbl_pendaftar`
 ADD PRIMARY KEY (`id_pendaftar`);

--
-- Indexes for table `tbl_pengguna`
--
ALTER TABLE `tbl_pengguna`
 ADD PRIMARY KEY (`id_pengguna`);

--
-- Indexes for table `tbl_waktu`
--
ALTER TABLE `tbl_waktu`
 ADD PRIMARY KEY (`id_waktu`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_paket`
--
ALTER TABLE `tbl_paket`
MODIFY `id_paket` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tbl_pendaftar`
--
ALTER TABLE `tbl_pendaftar`
MODIFY `id_pendaftar` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `tbl_pengguna`
--
ALTER TABLE `tbl_pengguna`
MODIFY `id_pengguna` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tbl_waktu`
--
ALTER TABLE `tbl_waktu`
MODIFY `id_waktu` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
