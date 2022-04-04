-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 04, 2022 at 07:20 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dilla`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_033`
--

CREATE TABLE `tbl_033` (
  `id` int(11) NOT NULL,
  `nama` varchar(80) NOT NULL,
  `nisn` int(10) NOT NULL,
  `jenis_kelamin` varchar(2) NOT NULL,
  `asal_sekolah` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_033`
--

INSERT INTO `tbl_033` (`id`, `nama`, `nisn`, `jenis_kelamin`, `asal_sekolah`) VALUES
(1, 'Maulida Ulva', 1002367188, 'P', 'SMPN 1 Jombang'),
(2, 'Achmad Ghufron', 1002344573, 'L', 'SMPN 2 Indrayala');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_033`
--
ALTER TABLE `tbl_033`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_033`
--
ALTER TABLE `tbl_033`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
