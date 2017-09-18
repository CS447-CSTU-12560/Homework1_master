-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 13, 2017 at 04:48 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `os2_store`
--

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `Username` varchar(100) NOT NULL,
  `Pass` varchar(100) DEFAULT NULL,
  `rePass` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`Username`, `Pass`, `rePass`) VALUES
('admin', '1111', '1111');

-- --------------------------------------------------------

--
-- Table structure for table `os2_store`
--

CREATE TABLE `os2_store` (
  `id` int(6) UNSIGNED NOT NULL,
  `nameItem` varchar(30) NOT NULL,
  `item_Info` varchar(300) NOT NULL,
  `pice_In_stock` varchar(50) DEFAULT NULL,
  `item_Pic` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `os2_store`
--

INSERT INTO `os2_store` (`id`, `nameItem`, `item_Info`, `pice_In_stock`, `item_Pic`) VALUES
(4, 'Apple', 'Fruit', '2', 'https://staticdelivery.nexusmods.com/mods/110/images/74627-0-1459502036.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`Username`);

--
-- Indexes for table `os2_store`
--
ALTER TABLE `os2_store`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `os2_store`
--
ALTER TABLE `os2_store`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
