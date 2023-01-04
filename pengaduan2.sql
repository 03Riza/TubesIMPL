-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 04, 2023 at 03:08 PM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 5.5.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pengaduan2`
--

-- --------------------------------------------------------

--
-- Table structure for table `pengaduan2`
--

CREATE TABLE `pengaduan2` (
  `id_pengaduan` int(11) NOT NULL,
  `tgl_pengaduan` date NOT NULL,
  `no_telpon` varchar(12) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `pengaduan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pengaduan2`
--

INSERT INTO `pengaduan2` (`id_pengaduan`, `tgl_pengaduan`, `no_telpon`, `nama`, `pengaduan`) VALUES
(1, '2023-01-04', '2147483647', 'Ucup', 'SALAH'),
(2, '0000-00-00', '0', '', ''),
(3, '0000-00-00', '2147483647', 'Ujang', 'BENAR'),
(4, '2023-01-04', '2147483647', 'Udin', 'SALAH'),
(5, '2023-01-04', '2147483647', 'Rodon', 'Salah dalam pemberian nama');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pengaduan2`
--
ALTER TABLE `pengaduan2`
  ADD PRIMARY KEY (`id_pengaduan`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pengaduan2`
--
ALTER TABLE `pengaduan2`
  MODIFY `id_pengaduan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
