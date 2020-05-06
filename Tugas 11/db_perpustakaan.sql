-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 06, 2020 at 04:47 PM
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
-- Database: `db_perpustakaan`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_perpustakaan`
--

CREATE TABLE `tbl_perpustakaan` (
  `no` varchar(11) NOT NULL,
  `judul` varchar(50) NOT NULL,
  `pengarang` varchar(50) NOT NULL,
  `tahun` varchar(12) NOT NULL,
  `jenis` varchar(20) NOT NULL,
  `penerbit` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_perpustakaan`
--

INSERT INTO `tbl_perpustakaan` (`no`, `judul`, `pengarang`, `tahun`, `jenis`, `penerbit`) VALUES
('1', 'Tipografi dalam Desain Grafis', 'Danton Sihombing', '2017', 'Komputer', 'Gramedia'),
('10', 'Rustic Modern', 'Chase Reynolds', '2017', 'Komputer', 'Periplus'),
('2', 'Art Design Vintage', 'Luthfi Hasan', '2016', 'Komputer', 'Gramedia'),
('3', 'Cosmos', 'Carl Sagan', '2016', 'Sains', 'Gramedia'),
('4', 'The Selfish Gene', 'Richard Dawkins', '1976', 'Sains', 'Oxford University Press'),
('5', 'Synthetic Design', 'Michael Haverkamp', '2012', 'Komputer', 'Birkhauser based'),
('6', 'Genome: The Autobiography of a Species In 23 Chapt', 'Matt Ridley', '2006', 'Sains', 'HarperCollins'),
('7', 'The Thinking Hand', 'Juhanni Pallasmaa', '2009', 'Komputer', 'John Wiley'),
('8', 'On the Origin of Species', 'Charles Darwin', '1859', 'Sains', 'John Murray'),
('9', 'A Brief History of Time', 'Stephen Hawking', '1988', 'Sains', 'Bantam Dell Publishing Group');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_perpustakaan`
--
ALTER TABLE `tbl_perpustakaan`
  ADD PRIMARY KEY (`no`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
