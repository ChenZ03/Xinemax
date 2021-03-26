-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 25, 2020 at 03:25 PM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `xinemax`
--

-- --------------------------------------------------------

--
-- Table structure for table `bilik`
--

CREATE TABLE `bilik` (
  `noBilik` int(10) NOT NULL,
  `bilanganTempatDuduk` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bilik`
--

INSERT INTO `bilik` (`noBilik`, `bilanganTempatDuduk`) VALUES
(1, 50),
(2, 50),
(3, 50),
(4, 50),
(5, 50),
(6, 50),
(7, 50),
(8, 50);

-- --------------------------------------------------------

--
-- Table structure for table `pengguna`
--

CREATE TABLE `pengguna` (
  `idPengguna` varchar(25) NOT NULL,
  `nama` varchar(25) NOT NULL,
  `kataLaluan` varchar(25) NOT NULL,
  `telefon` varchar(25) DEFAULT NULL,
  `jenis` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pengguna`
--

INSERT INTO `pengguna` (`idPengguna`, `nama`, `kataLaluan`, `telefon`, `jenis`) VALUES
('D3638', 'Lee Weng Hong', '1234567', '0182334122', 'pekerja'),
('E3211', 'main', 'testcase', '0124445578', 'pekerja'),
('E4441', 'Teaq', '123', '0113234451', 'pekerja'),
('F7001', 'Chen Zhung', 'ytg6544', '0165217456', 'pengurus');

-- --------------------------------------------------------

--
-- Table structure for table `telefon`
--

CREATE TABLE `telefon` (
  `telefon` varchar(25) NOT NULL,
  `nama` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `telefon`
--

INSERT INTO `telefon` (`telefon`, `nama`) VALUES
('011-3234451', 'Teaq'),
('0124445578', 'main'),
('0165217456', 'Chen Zhung'),
('0182334122', 'Lee Weng Hong');

-- --------------------------------------------------------

--
-- Table structure for table `tiket`
--

CREATE TABLE `tiket` (
  `idTiket` varchar(10) NOT NULL,
  `tarikhJualan` date NOT NULL,
  `bilangan` int(10) NOT NULL,
  `jumlahHarga` int(10) NOT NULL,
  `idWayang` varchar(10) NOT NULL,
  `idKedudukan` varchar(255) NOT NULL,
  `masaTayang` varchar(255) NOT NULL,
  `idPengguna` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tiket`
--

INSERT INTO `tiket` (`idTiket`, `tarikhJualan`, `bilangan`, `jumlahHarga`, `idWayang`, `idKedudukan`, `masaTayang`, `idPengguna`) VALUES
('G983', '2020-05-25', 2, 22, 'H6879', 'A06 A07', '2020-05-28', 'E3211');

-- --------------------------------------------------------

--
-- Table structure for table `wayang`
--

CREATE TABLE `wayang` (
  `idWayang` varchar(25) NOT NULL,
  `namaWayang` varchar(50) NOT NULL,
  `masaWayangan` time(2) NOT NULL,
  `noBilik` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `wayang`
--

INSERT INTO `wayang` (`idWayang`, `namaWayang`, `masaWayangan`, `noBilik`) VALUES
('H1679', 'Jurassic World : Fallen Kingdom', '02:10:00.00', 7),
('H2379', 'Sonic the Hedgehog', '01:40:00.00', 8),
('H2679', 'Ip man 4', '01:45:00.00', 4),
('H6579', 'Alita - Battle Angel', '02:02:00.00', 2),
('H6619', 'John Wick - Keanu Reeves', '01:45:00.00', 5),
('H6679', 'Avengers : Endgame', '03:02:00.00', 1),
('H6782', 'Jumanji : Welcome to the Jungle', '01:59:00.00', 6),
('H6879', 'Hobbs & Shaw', '02:16:00.00', 3);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bilik`
--
ALTER TABLE `bilik`
  ADD PRIMARY KEY (`noBilik`);

--
-- Indexes for table `pengguna`
--
ALTER TABLE `pengguna`
  ADD PRIMARY KEY (`idPengguna`);

--
-- Indexes for table `telefon`
--
ALTER TABLE `telefon`
  ADD PRIMARY KEY (`telefon`);

--
-- Indexes for table `tiket`
--
ALTER TABLE `tiket`
  ADD PRIMARY KEY (`idTiket`);

--
-- Indexes for table `wayang`
--
ALTER TABLE `wayang`
  ADD PRIMARY KEY (`idWayang`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
