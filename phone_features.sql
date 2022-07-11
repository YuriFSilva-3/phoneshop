-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 11, 2022 at 07:28 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `phoneshop`
--

-- --------------------------------------------------------

--
-- Table structure for table `phone features`
--

CREATE TABLE `phone features` (
  `id` int(255) NOT NULL,
  `brand` varchar(255) NOT NULL,
  `screen` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `picture` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `phone features`
--

INSERT INTO `phone features` (`id`, `brand`, `screen`, `description`, `price`, `picture`) VALUES
(23, 'Samsung', '6&#39;&#39;', 'SamsungmobilephoneSamsungmobilephoneSamsungmobilephone', '1300', 'samsung2.jpg'),
(24, 'Samsung', '7&#39;&#39;', 'SamsungmobilephoneSamsungmobilephoneSamsungmobilephone', '1500', 'samsung3.jpg'),
(25, 'Samsung', '6&#39;&#39;', 'SamsungmobilephoneSamsungmobilephoneSamsungmobilephone', '1100', 'samsung4.jpg'),
(26, 'Samsung', '7\'\'', 'SamsungmobilephoneSamsungmobilephoneSamsungmobilephone', '900', 'samsung1.webp'),
(27, 'iPhone', '6&#39;&#39;', 'iPhonesmartphoneiPhonesmartphoneiPhonesmartphone', '1000', 'iphone1.jpg'),
(28, 'iPhone', '7&#39;&#39;', 'iPhonesmartphoneiPhonesmartphoneiPhonesmartphone', '1300', 'iphone2.jpg'),
(29, 'iPhone', '6&#39;&#39;', 'iPhonesmartphoneiPhonesmartphoneiPhonesmartphone', '1200', 'iphone3.avif'),
(30, 'iPhone', '7&#39;&#39;', 'iPhonesmartphoneiPhonesmartphoneiPhonesmartphone', '1100', 'iphone4.jpg'),
(31, 'Xiaomi', '6&#39;&#39;', 'XiaomismartphoneXiaomismartphoneXiaomismartphone', '1300', 'xiaomi1.jpg'),
(32, 'Xiaomi', '7&#39;&#39;', 'XiaomismartphoneXiaomismartphoneXiaomismartphone', '1200', 'xiaomi2.jpg'),
(33, 'Oppo', '6&#39;&#39;', 'OpposmartphoneOpposmartphoneOpposmartphone', '1300', 'oppo1.jpg'),
(34, 'Oppo', '7&#39;&#39;', 'OpposmartphoneOpposmartphoneOpposmartphone', '1100', 'oppo2.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `phone features`
--
ALTER TABLE `phone features`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `phone features`
--
ALTER TABLE `phone features`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
