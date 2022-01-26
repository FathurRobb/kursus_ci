-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 26, 2022 at 09:08 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kursus_ci`
--

-- --------------------------------------------------------

--
-- Table structure for table `barang`
--

CREATE TABLE `barang` (
  `kode_barang` varchar(20) NOT NULL,
  `nama_barang` varchar(100) NOT NULL,
  `harga_barang` int(11) NOT NULL,
  `deskripsi_barang` text NOT NULL,
  `foto_barang` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `barang`
--

INSERT INTO `barang` (`kode_barang`, `nama_barang`, `harga_barang`, `deskripsi_barang`, `foto_barang`) VALUES
('BR001', 'Indomie Kuah', 3000, 'Indomie Seleraku', ''),
('BR002', 'Luwak White Coffee', 1500, 'Kopi Nikmat nyaman di lambung', ''),
('br006', 'tas', 5555, 'aksesoris', ''),
('br007', 'bawang', 500, 'bawang putih', ''),
('BR009', 'roti', 3000, 'roti keju', ''),
('BR013', 'Lucky Numbers', 13, 'bisa', ''),
('br069', 'hak', 424576, 'hfghag', 'default.png'),
('BR099', 'kain katun', 200000, 'Buat gamis', 'BR099.png'),
('BR125', 'Indomie Goreng', 3000, 'Indomie Goreng Ayam bawang', 'BR125.jpg'),
('bt000', 'jahjkah', 7588, 'hjfgag', 'default.png');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `nama` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `username`, `password`, `nama`) VALUES
(1, 'admin', '$2y$10$gj9LIcJFyJ9hQZfNxJPzkuvB4cwL5vRPnSKOUmTVx5EDROL7r9MMe', 'Lionel Messi'),
(2, 'dur', '$2y$10$mV3IlaeNOxDFHKUYZS3miOfGbo9bmhluLy3sDfNbvPb1r6iRvkxMa', 'Abdurahman');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`kode_barang`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
