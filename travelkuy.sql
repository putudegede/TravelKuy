-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 17, 2021 at 03:50 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `travelkuy`
--

-- --------------------------------------------------------

--
-- Table structure for table `history`
--

CREATE TABLE `history` (
  `id` int(11) NOT NULL,
  `jenis` varchar(254) NOT NULL,
  `masuk` varchar(254) NOT NULL,
  `keluar` varchar(254) DEFAULT NULL,
  `harga` varchar(254) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `history`
--

INSERT INTO `history` (`id`, `jenis`, `masuk`, `keluar`, `harga`) VALUES
(9, 'Royal Trawas Kepak Sayap Mbak Puan', '2021-08-15', '2021-08-16', '200000'),
(10, 'Blessing Redbull Head Hills', '2021-08-15', '2021-08-16', '200000'),
(18, 'Stasiun Gubeng', '2021-08-18', NULL, '200000');

-- --------------------------------------------------------

--
-- Table structure for table `penginapan`
--

CREATE TABLE `penginapan` (
  `id` int(11) NOT NULL,
  `gambarHotel` varchar(254) DEFAULT NULL,
  `namaHotel` varchar(254) NOT NULL,
  `alamatHotel` varchar(254) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `penginapan`
--

INSERT INTO `penginapan` (`id`, `gambarHotel`, `namaHotel`, `alamatHotel`) VALUES
(1, 'oyo.jpg', 'OYO Insyaallah Syariah', 'Genteng 56 Surabaya'),
(2, 'pintumerah.jpg', 'Pintu Merah Sentosa Anti Grebek Satpol', 'Puri Cahaya 57 Surabaya'),
(3, 'royal.jpg', 'Royal Trawas Kepak Sayap Mbak Puan', 'Sendi Pacet'),
(4, 'blessing.jpg', 'Blessing Redbull Head Hills', 'Sendi Pacet');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `date_created` timestamp NOT NULL DEFAULT current_timestamp(),
  `date_updated` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `email`, `password`, `date_created`, `date_updated`) VALUES
(2, 'putu', 'putugedearik.0023@gmail.com', '$2y$10$vWIO3DiL31f9EH6M3NIn3uO6xD4tee.NRgbuAyaDFdWgbN.5RPSYW', '2021-08-01 18:58:28', '2021-08-01 18:58:28'),
(3, 'adi', 'adinovianto@gmail.com', '$2y$10$ncKP.Ls7X045YswB6iZ4Uu0.FcXjM3h2Q33mLV2Bo7WvoS2vzZq/e', '2021-08-01 19:10:03', '2021-08-01 19:10:03'),
(4, 'Wildan', 'wildanabdullo@gmail.com', '$2y$10$lZfyk/kWPETO6L.FLNqpkeAivAq4JIKqwtJPqHkhcUT9401DX/yIG', '2021-08-02 18:19:29', '2021-08-02 18:19:29'),
(5, 'Adriyan', 'adriyan@gmail.com', '$2y$10$hUlGDPmPPf5jt51KPeQRyOfk1ElyXqGMWwbCZ.zx9puOR63vqmPbC', '2021-08-02 18:35:47', '2021-08-02 18:35:47'),
(6, '121', 'putugedearik.0023@gmail.com', '$2y$10$AGJqspMUDwsySEydxwKyEOR.ptMesE1wnx3EjKPbbW3TTDF5jdbKK', '2021-08-17 13:28:27', '2021-08-17 13:28:27');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `history`
--
ALTER TABLE `history`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `penginapan`
--
ALTER TABLE `penginapan`
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
-- AUTO_INCREMENT for table `history`
--
ALTER TABLE `history`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `penginapan`
--
ALTER TABLE `penginapan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
