-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 01, 2022 at 09:57 AM
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
-- Database: `tubes_213040052`
--

-- --------------------------------------------------------

--
-- Table structure for table `produk`
--

CREATE TABLE `produk` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `jenis` varchar(100) NOT NULL,
  `stok` varchar(2) NOT NULL,
  `harga` varchar(100) NOT NULL,
  `gambar` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `produk`
--

INSERT INTO `produk` (`id`, `nama`, `jenis`, `stok`, `harga`, `gambar`) VALUES
(1, 'Sweater Kucing', 'Sweater', '12', 'Rp 125.000,00.', 'sweater_kucing.jpg'),
(2, 'Sweater Polos Hitam', 'Sweater', '13', 'Rp 110.000,00.', 'sweater_polos_hitam.jpg'),
(3, 'Sweater Bermotif Hitam Putih Dan Biru', 'Sweater', '14', 'Rp 130.000,00.', 'sweater_print_motif.jpg'),
(4, 'Sweater Jepang', 'Sweater', '11', 'Rp 115.000,00.', 'sweater_japanese.jpg'),
(5, 'Topi Newsboy', 'Topi', '10', 'Rp 65.000,00.', 'topi-newsboy.jpg'),
(6, 'Topi Fedora', 'Topi', '9', 'Rp 55.000,00.', 'topi-fedora.jpg'),
(7, 'Baju Dota 2', 'Baju', '8', 'Rp 80.000,00.', 'baju_dota_2.jpg'),
(8, 'Baju Metallica ', 'Baju', '7', 'Rp 90.000,00.', 'baju_metallica.jpg\r\n'),
(9, 'Baju Polo Ralph Lauren', 'Baju', '15', 'Rp 100.000,00.', 'baju_polo_ralph_lauren_japan.jpg'),
(10, 'Baju Thrasher', 'Baju', '16', 'Rp 85.000,00.', 'baju_thrasher.jpg'),
(11, 'Kacamata Hitam', 'Kacamata', '17', 'Rp 45.000,00.', 'kacamata-hitam.jpg'),
(12, 'Kacamata Vintage', 'Kacamata', '18', 'Rp 55.000,00.', 'kacamata-vintage.jpg'),
(22, 'Bando Korea', 'Bando', '14', 'Rp 55.000,00.', 'bando-korea.jpg'),
(24, 'Bando Bunga', 'Bando', '21', 'Rp 65.000,00.', '6295d369160f3.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`) VALUES
(1, 'admin', '$2y$10$8IMai1Y6RzZeS3f7cS2nkutK9pwUPgG4UGuWD89xzHwfebCMzxo6O');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `produk`
--
ALTER TABLE `produk`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
