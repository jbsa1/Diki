-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 11, 2021 at 10:46 PM
-- Server version: 10.4.16-MariaDB
-- PHP Version: 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `diki`
--

-- --------------------------------------------------------

--
-- Table structure for table `inputcont`
--

CREATE TABLE `inputcont` (
  `idcontainer` varchar(12) NOT NULL,
  `owner` varchar(50) DEFAULT NULL,
  `timestamp` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `inputcont`
--

INSERT INTO `inputcont` (`idcontainer`, `owner`, `timestamp`) VALUES
('TEST-1234567', 'Januar', '2021-08-11 21:34:30'),
('TSET-121234', 'Jaf', '2021-08-11 21:34:54');

-- --------------------------------------------------------

--
-- Table structure for table `plugging`
--

CREATE TABLE `plugging` (
  `no` int(11) NOT NULL,
  `owner` varchar(50) DEFAULT NULL,
  `idcontainer` varchar(11) DEFAULT NULL,
  `type` char(10) DEFAULT NULL,
  `size` varchar(20) NOT NULL,
  `mulai` datetime DEFAULT NULL,
  `selesai` datetime DEFAULT NULL,
  `remarks` varchar(50) DEFAULT NULL,
  `timestamp` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `plugging`
--

INSERT INTO `plugging` (`no`, `owner`, `idcontainer`, `type`, `size`, `mulai`, `selesai`, `remarks`, `timestamp`) VALUES
(1, 'Januar', 'TEST-123456', 'truk', 'cilik gyet', '2021-08-12 21:36:00', '2021-08-11 22:43:00', 'kentekan bensin', '2021-08-11 21:43:27');

-- --------------------------------------------------------

--
-- Table structure for table `striping`
--

CREATE TABLE `striping` (
  `no` int(11) NOT NULL,
  `plat` varchar(10) DEFAULT NULL,
  `idContainer` varchar(11) DEFAULT NULL,
  `owner` varchar(50) DEFAULT NULL,
  `driver` varchar(20) NOT NULL,
  `trucking` varchar(20) NOT NULL,
  `tanggal` datetime DEFAULT NULL,
  `remarks` varchar(50) DEFAULT NULL,
  `timestamp` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `striping`
--

INSERT INTO `striping` (`no`, `plat`, `idContainer`, `owner`, `driver`, `trucking`, `tanggal`, `remarks`, `timestamp`) VALUES
(1, 'L 1234 WS', 'TEST-123456', 'Januar', 'Mukidi', '', '2021-08-11 21:41:00', 'ngedukno barang', '2021-08-11 21:41:09'),
(2, 'L 1234 WS', 'TSET-121234', 'Jaf', 'Budi', 'Sayurbox', '2021-08-11 22:44:00', 'ngedukno barang', '2021-08-11 22:44:56');

-- --------------------------------------------------------

--
-- Table structure for table `stuffing`
--

CREATE TABLE `stuffing` (
  `no` int(11) NOT NULL,
  `owner` varchar(50) DEFAULT NULL,
  `driver` varchar(20) NOT NULL,
  `trucking` varchar(20) NOT NULL,
  `idContainer` varchar(11) DEFAULT NULL,
  `plat` varchar(10) DEFAULT NULL,
  `tanggal` datetime DEFAULT NULL,
  `remarks` varchar(50) DEFAULT NULL,
  `timestamp` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `stuffing`
--

INSERT INTO `stuffing` (`no`, `owner`, `driver`, `trucking`, `idContainer`, `plat`, `tanggal`, `remarks`, `timestamp`) VALUES
(1, 'Jaf', 'Budi', '', 'TSET-121234', 'L 1234 WS', '2021-08-11 21:39:00', 'munggahno barang', '2021-08-11 21:40:40'),
(2, 'Januar', 'Mukidi', 'Sayurbox', 'TEST-123456', 'L 1234 WS', '2021-08-11 22:44:00', 'munggahno barang', '2021-08-11 22:44:22');

-- --------------------------------------------------------

--
-- Table structure for table `stuffingcon`
--

CREATE TABLE `stuffingcon` (
  `no` int(11) NOT NULL,
  `owner` varchar(50) DEFAULT NULL,
  `contAsal` varchar(11) DEFAULT NULL,
  `contTujuan` varchar(11) DEFAULT NULL,
  `tanggal` datetime DEFAULT NULL,
  `remarks` varchar(50) DEFAULT NULL,
  `timestamp` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `stuffingcon`
--

INSERT INTO `stuffingcon` (`no`, `owner`, `contAsal`, `contTujuan`, `tanggal`, `remarks`, `timestamp`) VALUES
(1, 'Januar', 'TEST-123456', 'TSET-121234', '2021-08-11 21:39:00', 'pindahin barang karena ban bocor', '2021-08-11 21:39:38');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `inputcont`
--
ALTER TABLE `inputcont`
  ADD PRIMARY KEY (`idcontainer`);

--
-- Indexes for table `plugging`
--
ALTER TABLE `plugging`
  ADD PRIMARY KEY (`no`);

--
-- Indexes for table `striping`
--
ALTER TABLE `striping`
  ADD PRIMARY KEY (`no`);

--
-- Indexes for table `stuffing`
--
ALTER TABLE `stuffing`
  ADD PRIMARY KEY (`no`);

--
-- Indexes for table `stuffingcon`
--
ALTER TABLE `stuffingcon`
  ADD PRIMARY KEY (`no`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `plugging`
--
ALTER TABLE `plugging`
  MODIFY `no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `striping`
--
ALTER TABLE `striping`
  MODIFY `no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `stuffing`
--
ALTER TABLE `stuffing`
  MODIFY `no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `stuffingcon`
--
ALTER TABLE `stuffingcon`
  MODIFY `no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
