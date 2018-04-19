-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Apr 19, 2018 at 11:18 
-- Server version: 10.1.21-MariaDB
-- PHP Version: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `arsip_surat`
--

-- --------------------------------------------------------

--
-- Table structure for table `tdisposisi`
--

CREATE TABLE `tdisposisi` (
  `no_disposisi` int(15) NOT NULL,
  `no_agenda` int(15) NOT NULL,
  `no_surat` int(15) NOT NULL,
  `kepada` varchar(30) NOT NULL,
  `keterangan` varchar(30) NOT NULL,
  `status_surat` varchar(30) NOT NULL,
  `tanggapan` varchar(30) NOT NULL,
  `waktu` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `tdisposisi`
--

INSERT INTO `tdisposisi` (`no_disposisi`, `no_agenda`, `no_surat`, `kepada`, `keterangan`, `status_surat`, `tanggapan`, `waktu`) VALUES
(422, 444444, 2, '3', 'test', '0', 'ttdd', '2018-03-28 16:03:32'),
(582, 0, 0, '1', 'TEST', '0', 'test', '2018-03-28 16:01:44'),
(902, 444444, 2, '1', 'test', '0', 'ttdd', '2018-03-28 16:03:32'),
(958, 444444, 2, '2', 'fghhh', '0', 'fddss', '2018-03-28 16:05:02'),
(1112, 444444, 2, '3', 'fghhh', '0', 'fddss', '2018-03-28 16:05:02'),
(1275, 34, 34, '3', 'gfdg', '0', 'fdgfd', '2018-03-28 16:05:32'),
(1400, 0, 0, '3', 'TEST', '0', 'test', '2018-03-28 16:01:44'),
(1487, 34, 34, '2', 'gfdg', '0', 'fdgfd', '2018-03-28 16:05:32'),
(1609, 2, 1, '2', 'PHK', '0', 'DISETUJUI', '2018-03-28 16:52:40'),
(1728, 0, 0, '2', 'TEST', '0', 'test', '2018-03-28 16:01:44');

-- --------------------------------------------------------

--
-- Table structure for table `tpetugas`
--

CREATE TABLE `tpetugas` (
  `id` int(15) NOT NULL,
  `username` varchar(50) NOT NULL,
  `nama_depan` varchar(30) NOT NULL,
  `nama_belakang` varchar(30) NOT NULL,
  `password` varchar(255) NOT NULL,
  `hak` varchar(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tpetugas`
--

INSERT INTO `tpetugas` (`id`, `username`, `nama_depan`, `nama_belakang`, `password`, `hak`) VALUES
(1, 'andro', 'Joviandro', 'Marbun', '7032baa472380762dfd2692fe007dcef', '1'),
(2, 'fahrizal', 'Fahrizal', 'Syarip', '9bc4f09334d45dd89d0ff6db20f90a46', '2'),
(3, 'jovvi', 'andro', 'marbun', '8ecd2e9c8a66c5dd112e99dabc677d3c', '1'),
(4, 'test1', 'test2', 'test3', '5a105e8b9d40e1329780d62ea2265d8a', '3'),
(5, 'admin', 'ADMIN', 'ADMIN', '21232f297a57a5a743894a0e4a801fc3', '1'),
(6, 'asd', 'asdsa', 'sad', 'dd', '1'),
(7, 'asd', 'asdsa', 'sad', 'dd', '1'),
(8, 'asdsssss', 'asdsa', 'sad', 'dd', '1'),
(9, '1', 'asdsa', 'sad', 'dd', '1');

-- --------------------------------------------------------

--
-- Table structure for table `tsuratkeluar`
--

CREATE TABLE `tsuratkeluar` (
  `no_agenda` int(15) NOT NULL,
  `id` int(15) NOT NULL,
  `jenis_surat` varchar(30) NOT NULL,
  `tanggal_kirim` varchar(12) NOT NULL,
  `no_surat` varchar(30) NOT NULL,
  `pengirim` varchar(30) NOT NULL,
  `perihal` varchar(30) NOT NULL,
  `nama_file` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tsuratkeluar`
--

INSERT INTO `tsuratkeluar` (`no_agenda`, `id`, `jenis_surat`, `tanggal_kirim`, `no_surat`, `pengirim`, `perihal`, `nama_file`) VALUES
(4876, 2, 'TEST', '03/29/2018', '999', 'TEST', 'TEST', '');

-- --------------------------------------------------------

--
-- Table structure for table `tsuratmasuk`
--

CREATE TABLE `tsuratmasuk` (
  `id` int(9) NOT NULL,
  `no_agenda` int(15) NOT NULL,
  `jenis_surat` varchar(30) NOT NULL,
  `tanggal_kirim` varchar(12) NOT NULL,
  `tanggal_terima` varchar(12) NOT NULL,
  `no_surat` varchar(30) NOT NULL,
  `pengirim` varchar(30) NOT NULL,
  `perihal` varchar(30) NOT NULL,
  `nama_file` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tsuratmasuk`
--

INSERT INTO `tsuratmasuk` (`id`, `no_agenda`, `jenis_surat`, `tanggal_kirim`, `tanggal_terima`, `no_surat`, `pengirim`, `perihal`, `nama_file`) VALUES
(2, 6667, 'sadsad', '03/30/2018', '03/31/2018', '777', 'TEST', 'test', ''),
(3, 1, 'RESMI', '03/28/2018', '03/29/2018', '100', 'JOVIANDRO', 'CUTI', ''),
(4, 2, 'PHK', '03/28/2018', '03/29/2018', '1', 'HRD', 'PHK', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tdisposisi`
--
ALTER TABLE `tdisposisi`
  ADD PRIMARY KEY (`no_disposisi`);

--
-- Indexes for table `tpetugas`
--
ALTER TABLE `tpetugas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tsuratkeluar`
--
ALTER TABLE `tsuratkeluar`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tsuratmasuk`
--
ALTER TABLE `tsuratmasuk`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tpetugas`
--
ALTER TABLE `tpetugas`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `tsuratkeluar`
--
ALTER TABLE `tsuratkeluar`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tsuratmasuk`
--
ALTER TABLE `tsuratmasuk`
  MODIFY `id` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
