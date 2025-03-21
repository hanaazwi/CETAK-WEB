-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 21, 2025 at 03:59 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `data_pasien`
--

-- --------------------------------------------------------

--
-- Table structure for table `pasien`
--

CREATE TABLE `pasien` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `kelamin` varchar(12) NOT NULL,
  `alamat` text NOT NULL,
  `tanggal_daftar` date NOT NULL,
  `nik` varchar(20) NOT NULL,
  `usia` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pasien`
--

INSERT INTO `pasien` (`id`, `nama`, `kelamin`, `alamat`, `tanggal_daftar`, `nik`, `usia`) VALUES
(123456, 'ALBIRRU HAYZA ARASY', 'Perempuan', 'Jl. Jaksa Agung Suprapto I/70 RT:02 /RW:02 Samaan Klojen Malang', '2021-10-20', '12345678901112', '(66th 9bln 2hr)'),
(149875, 'ALBIRRU HAYZA ARASY', 'Perempuan', 'Jl. Jaksa Agung Suprapto I/70 RT:02 /RW:02 Samaan Klojen Malang', '2021-10-20', '12345678901112', '(66th 9bln 2hr)'),
(654321, 'ALBIRRU HAYZA ARASY', 'Perempuan', 'Jl. Jaksa Agung Suprapto I/70 RT:02 /RW:02 Samaan Klojen Malang', '2021-10-20', '12345678901112', '(66th 9bln 2hr)'),
(777777, 'TN, ABDUL CHOLIQ\r\n', 'Laki-laki', 'CANGAR RT01 RW01 BULUKERTO BUMIAJI BATU', '2025-02-02', '3579021504580001', '(66th 9bln 2hr)'),
(888888, 'TN, ABDUL CHOLIQ\r\n', 'Laki-laki', 'CANGAR RT01 RW01 BULUKERTO BUMIAJI BATU', '2025-02-02', '3579021504580001', '(66th 9bln 2hr)'),
(999999, 'TN, ABDUL CHOLIQ\r\n', 'Laki-laki', 'CANGAR RT01 RW01 BULUKERTO BUMIAJI BATU', '2025-02-02', '3579021504580001', '(66th 9bln 2hr)');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pasien`
--
ALTER TABLE `pasien`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pasien`
--
ALTER TABLE `pasien`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1010103;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
