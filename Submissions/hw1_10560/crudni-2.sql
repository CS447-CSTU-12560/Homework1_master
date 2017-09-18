-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Sep 09, 2017 at 11:22 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 7.0.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `crudni`
--

-- --------------------------------------------------------

--
-- Table structure for table `item`
--

CREATE TABLE `item` (
  `Id` int(11) NOT NULL,
  `Name_Item` varchar(40) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL DEFAULT 'NOT NULL',
  `Price` int(250) NOT NULL,
  `Quality` int(250) NOT NULL,
  `Picture` varchar(250) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL DEFAULT 'NOT NULL',
  `Info` varchar(100) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL DEFAULT 'NOT NULL'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `item`
--

INSERT INTO `item` (`Id`, `Name_Item`, `Price`, `Quality`, `Picture`, `Info`) VALUES
(2, 'reqre', 132, 32, 'https://scontent.fbkk8-1.fna.fbcdn.net/v/t1.0-9/21463339_1736969489649293_5907523437861605596_n.jpg?oh=3e8a66aeb68bd4213c909c883fffd89c&oe=5A5EB0D7', 'fdsafda');

-- --------------------------------------------------------

--
-- Table structure for table `Login`
--

CREATE TABLE `Login` (
  `Id` varchar(20) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL DEFAULT 'NOT NULL',
  `Password` varchar(20) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL DEFAULT 'NOT NULL',
  `first_name` varchar(50) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL DEFAULT 'NOT NULL',
  `last_name` varchar(50) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL DEFAULT 'NOT NULL',
  `address` varchar(100) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL DEFAULT 'NOT NULL'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Login`
--

INSERT INTO `Login` (`Id`, `Password`, `first_name`, `last_name`, `address`) VALUES
('north155', '029333439', 'Siraprapa', 'Singkham', '499 Prempree Rangsit-nakornayok54 Patumthani 12130 ');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `item`
--
ALTER TABLE `item`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `Login`
--
ALTER TABLE `Login`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `item`
--
ALTER TABLE `item`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
