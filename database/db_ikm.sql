-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 30, 2022 at 12:33 PM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 5.5.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_ikm`
--

-- --------------------------------------------------------

--
-- Table structure for table `ikm`
--

CREATE TABLE `ikm` (
  `id_ikm` int(5) NOT NULL,
  `puas` int(5) NOT NULL,
  `cukup` int(5) NOT NULL,
  `kurang` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ikm`
--

INSERT INTO `ikm` (`id_ikm`, `puas`, `cukup`, `kurang`) VALUES
(1, 1, 1, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ikm`
--
ALTER TABLE `ikm`
  ADD PRIMARY KEY (`id_ikm`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ikm`
--
ALTER TABLE `ikm`
  MODIFY `id_ikm` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
