-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 03, 2020 at 11:29 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mahasiswa`
--

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `mhsNIM` int(11) NOT NULL,
  `mhsNama` varchar(50) NOT NULL,
  `mhsIPK` float NOT NULL,
  `mhsTelp` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mahasiswa`
--

INSERT INTO `mahasiswa` (`mhsNIM`, `mhsNama`, `mhsIPK`, `mhsTelp`) VALUES
(1708561031, 'Lanang', 4, '085737436909'),
(1708561033, 'I Gede Erwin Winata Pratama', 5.6, '081339673994'),
(1708561035, 'mba', 5.6, '081339673994'),
(1708561039, 'Ni Made dinda Pratiwi', 0, '081777666555'),
(1708561040, 'asdasdas', 4, '1231231231'),
(1708561044, 'OHO', 3, '081777444555'),
(1708561055, 'Gusde', 0, '0891748'),
(1708561067, 'I Gede Erwin Winata Pratama', 3.4, '123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`mhsNIM`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
