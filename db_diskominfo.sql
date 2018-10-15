-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 15, 2018 at 09:26 AM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_diskominfo`
--

-- --------------------------------------------------------

--
-- Table structure for table `pegawai`
--

CREATE TABLE `pegawai` (
  `nip` varchar(25) NOT NULL,
  `nama` varchar(35) NOT NULL,
  `jbt` varchar(35) NOT NULL,
  `pangkat` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pegawai`
--

INSERT INTO `pegawai` (`nip`, `nama`, `jbt`, `pangkat`) VALUES
('121', 'Ananda', 'IIIA', 'Eselon IV'),
('123', 'Rizki Ananda Pratama', 'IVAB', 'Eselon II');

-- --------------------------------------------------------

--
-- Table structure for table `tpp`
--

CREATE TABLE `tpp` (
  `id` int(11) NOT NULL,
  `nip` varchar(50) NOT NULL,
  `tppmax` int(11) NOT NULL,
  `tahun` year(4) NOT NULL,
  `bulan` varchar(2) NOT NULL,
  `jhk` int(11) NOT NULL,
  `hadir` int(11) NOT NULL,
  `izin` int(11) NOT NULL,
  `sakit` int(11) NOT NULL,
  `cuti` int(11) NOT NULL,
  `tas` int(11) NOT NULL,
  `terlambat` int(11) NOT NULL,
  `cepatpulang` int(11) NOT NULL,
  `uwas` int(11) NOT NULL,
  `upacara` int(11) NOT NULL,
  `wirid` int(11) NOT NULL,
  `apel` int(11) NOT NULL,
  `senam` int(11) NOT NULL,
  `skp` int(3) NOT NULL,
  `orientasip` int(3) NOT NULL,
  `integritas` int(3) NOT NULL,
  `kerjasama` int(3) NOT NULL,
  `kepemimpinan` int(3) NOT NULL,
  `lkh` int(11) NOT NULL,
  `sop` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tpp`
--

INSERT INTO `tpp` (`id`, `nip`, `tppmax`, `tahun`, `bulan`, `jhk`, `hadir`, `izin`, `sakit`, `cuti`, `tas`, `terlambat`, `cepatpulang`, `uwas`, `upacara`, `wirid`, `apel`, `senam`, `skp`, `orientasip`, `integritas`, `kerjasama`, `kepemimpinan`, `lkh`, `sop`) VALUES
(1, '121', 5000000, 2018, '7', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(2, '123', 30000000, 2002, '2', 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 100, 2, 2, 2, 2, 2, 2),
(3, '2', 2, 2002, '2', 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2),
(4, '121', 1, 2001, '1', 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pegawai`
--
ALTER TABLE `pegawai`
  ADD PRIMARY KEY (`nip`);

--
-- Indexes for table `tpp`
--
ALTER TABLE `tpp`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tpp`
--
ALTER TABLE `tpp`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
