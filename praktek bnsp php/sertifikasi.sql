-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 04, 2025 at 01:25 PM
-- Server version: 10.1.29-MariaDB
-- PHP Version: 7.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sertifikasi`
--

-- --------------------------------------------------------

--
-- Table structure for table `peserta`
--

CREATE TABLE `peserta` (
  `id_peserta` int(11) NOT NULL,
  `kd_skema` varchar(10) NOT NULL,
  `nm_peserta` varchar(50) NOT NULL,
  `jekel` enum('L','P') NOT NULL,
  `alamat` text NOT NULL,
  `no_hp` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `peserta`
--

INSERT INTO `peserta` (`id_peserta`, `kd_skema`, `nm_peserta`, `jekel`, `alamat`, `no_hp`) VALUES
(210511054, 'SKM01', 'RIZAL TRILAKSANA', 'L', 'CIREBON', '0896654332'),
(210511054, 'SKM02', 'NEIFA', 'P', 'GARUT', '0896732242'),
(21076344, 'SKM03', 'DYAH', 'P', 'DUKU PUNTANG', '08965774443'),
(2108833, 'SKM04', 'SEPTIAN', 'L', 'BANDUNG', '0895844455');

-- --------------------------------------------------------

--
-- Table structure for table `tabel skema`
--

CREATE TABLE `tabel skema` (
  `kd_skema` varchar(10) NOT NULL,
  `nm_skema` varchar(50) NOT NULL,
  `jenis` varchar(20) NOT NULL,
  `jumlah unit` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tabel skema`
--

INSERT INTO `tabel skema` (`kd_skema`, `nm_skema`, `jenis`, `jumlah unit`) VALUES
('SKM01', 'JUNIOR WEB DEVELOPER', 'KKNI', 6),
('SKM02', 'DIGITAL MARKETING', 'KLASTER', 10),
('SKM03', 'DESAINER MULTIMEDIA MUDA', 'KKNI', 10),
('SKM04', 'NETWORK ADMINISTRATOR MUDA', 'KKNI', 5);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
