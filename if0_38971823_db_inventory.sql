-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: sql310.infinityfree.com
-- Generation Time: May 20, 2025 at 11:38 AM
-- Server version: 10.6.19-MariaDB
-- PHP Version: 7.2.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `if0_38971823_db_inventory`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_inventory`
--

CREATE TABLE `tb_inventory` (
  `id` int(11) NOT NULL,
  `kode_barang` varchar(20) NOT NULL,
  `nama_barang` varchar(50) NOT NULL,
  `jumlah_barang` int(10) NOT NULL,
  `satuan_barang` varchar(20) NOT NULL,
  `harga_beli` double(20,2) NOT NULL,
  `status_barang` tinyint(1) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tb_inventory`
--

INSERT INTO `tb_inventory` (`id`, `kode_barang`, `nama_barang`, `jumlah_barang`, `satuan_barang`, `harga_beli`, `status_barang`) VALUES
(1, 'B1', 'Sarimie', 3, 'pcs', 3500.00, 1),
(2, 'B2', 'Indomie', 5, 'pcs', 3000.00, 1),
(3, 'B3', 'Supermie', 5, 'pcs', 3000.00, 1),
(4, 'B4', 'Pop Mie', 7, 'pcs', 5000.00, 1),
(5, 'B5', 'Le Minerale 500ml', 10, 'pcs', 2500.00, 1),
(6, 'B6', 'Pop Ice', 3, 'pcs', 2000.00, 1),
(7, 'B7', 'Fresh Tea', 4, 'pcs', 3000.00, 1),
(8, 'B8', 'Sampoerna Mild 12', 7, 'bungkus', 20000.00, 1),
(9, 'B9', 'Gudang Garam Kretek 12', 3, 'bungkus', 18000.00, 1),
(10, 'B10', 'Djarum Super', 9, 'bungkus', 18500.00, 1),
(11, 'B11', 'Djarum 76', 7, 'bungkus', 15000.00, 1),
(12, 'B12', 'Dji Sam Soe Kretek 12', 11, 'bungkus', 12500.00, 1),
(13, 'B13', 'Korek Gas', 4, 'pcs', 2000.00, 1),
(14, 'B14', 'Beras Putih', 15, 'kg', 12500.00, 1),
(15, 'B15', 'Beras Merah', 6, 'kg', 15000.00, 1),
(16, 'B16', 'Tali Tambang', 12, 'meter', 5000.00, 1),
(17, 'B17', 'Kabel NYA', 4, 'meter', 8000.00, 1),
(18, 'B18', 'Susu Formula', 5, 'pcs', 6000.00, 1),
(22, 'B19', 'testing123', 4, 'pcs', 1000.00, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_inventory`
--
ALTER TABLE `tb_inventory`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_inventory`
--
ALTER TABLE `tb_inventory`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
