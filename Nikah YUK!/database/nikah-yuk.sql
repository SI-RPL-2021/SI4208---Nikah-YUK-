-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 24, 2021 at 09:49 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `nikah-yuk`
--

-- --------------------------------------------------------

--
-- Table structure for table `testimoni`
--

CREATE TABLE `testimoni` (
  `id` int(11) NOT NULL,
  `name` varchar(222) NOT NULL,
  `message` text NOT NULL,
  `email` varchar(30) NOT NULL,
  `nilai` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `testimoni`
--

INSERT INTO `testimoni` (`id`, `name`, `message`, `email`, `nilai`) VALUES
(34, 'MARSHA &amp; DANIEL', 'Sempet ragu juga awalnya karena takutnya ga sesuai sama yang kita mau tapi ternyata sebagus itu gaun sama jas nya dibuat terimakasih banyak buat NIKAH-YUK!!!!', 'marsha@gmail.com', 5),
(35, 'SARAH &amp; JULIAN', 'Buat undangannya bagus banget sih desainnya unik harganya juga terjangkau banget buat aku dan yang pasti vendornya cepet seleseinnyaa', 'sarah@gmail.com', 5),
(36, 'MELISA &amp; RENDI', 'Mesen souvenirnya disini vendornya baik banget ga masalah kita minta ganti terus dan souvenirnya bagus banget temen temen pada bilang bagus juga', 'melisa@gmail', 5),
(37, 'RARA &amp; DIMAS', 'terimakasih yaaa nikah yukk seneng banget sama vendor dan pelayannnya sebagus itu next kalo ada yang mau nikah bakal aku suruh cek NIKAH-YUK!!', 'rara@gmail.com', 5),
(38, 'MELI &amp; RENALDI', 'Mesen makanannya disini vendornya baik banget ga masalah kita minta ganti terus dan makanannya enak banget temen temen pada bilang enak juga', 'meli@gmail.com', 5),
(40, 'Rini &amp; riko', 'puas sekali vendor nya ramah', 'rini@gmail.com', 5),
(41, 'Riko &amp; rani', 'lala', 'riko@gmail.com', 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone_number` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `phone_number`, `password`) VALUES
(21, 'Ardy Rikardo', 'ardyrikardo@365.telkomuniversity.ac.id', '082214741918', '123456'),
(25, 'Bonyfasius', 'bony@gmail.com', '082214741918', '456123'),
(30, 'Ardy Rikardo', 'info@sagconsulting.com', '022754108', '123456'),
(32, 'Ardy Rikardo', 'admin@jogja.id', '123456', '123456'),
(33, 'Ardy Rikardo', 'info@sagconsulting.com', '022754108', '789456'),
(34, 'naufal', 'naufal@gmail.com', '456789', '456123'),
(35, 'Mamah', 'mamah@gmail.com', '456789', '123456'),
(36, 'deva', 'deva@gmail.com', '456789', '123456'),
(37, 'bobon', 'bobon@gmail.com', '456789', '123456'),
(38, 'Ardy Rikardo', 'info@sagconsulting.com', '022754108', '456789'),
(39, 'lala', 'lala@gmail.com', '456123', '123456'),
(40, 'mama', 'mamah@gmail.com', '456789', '123456'),
(41, 'Cley', 'cleyapip@gmail.com', '082214741918', '123456'),
(42, 'Ramadhanu', 'dh0anu@gmail.com', '082214741918', '123456');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `testimoni`
--
ALTER TABLE `testimoni`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `testimoni`
--
ALTER TABLE `testimoni`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
