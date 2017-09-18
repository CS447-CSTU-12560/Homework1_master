-- phpMyAdmin SQL Dump
-- version 4.7.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Sep 04, 2017 at 06:57 PM
-- Server version: 5.7.19-log
-- PHP Version: 7.1.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `os2_webapp`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `prod_id` int(10) UNSIGNED NOT NULL,
  `name` varchar(50) NOT NULL COMMENT 'ชื่อ',
  `detail` varchar(200) NOT NULL COMMENT 'คำบรรยาย',
  `picture` varchar(100) DEFAULT NULL COMMENT 'รูปภาพ',
  `price` int(10) UNSIGNED NOT NULL COMMENT 'ราคา',
  `piece` int(10) UNSIGNED NOT NULL COMMENT 'จำนวนชิ้นสินค้าที่มีอยู่'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(10) NOT NULL,
  `username` varchar(20) NOT NULL COMMENT 'ชื่อผู้ใช้',
  `password` varchar(20) NOT NULL COMMENT 'รหัสผ่าน',
  `firstname` varchar(20) NOT NULL COMMENT 'ชื่อจริง',
  `lastname` varchar(20) NOT NULL COMMENT 'นามสกุล',
  `address` varchar(100) NOT NULL COMMENT 'ที่อยู่'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `username`, `password`, `firstname`, `lastname`, `address`) VALUES
(0, 'admin', 'asdf', 'Ayuth', 'Mangmesap', 'Thammasat University');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`prod_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD KEY `user_id` (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `prod_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;COMMIT;

ALTER TABLE products ALTER COLUMN picture SET DEFAULT NULL ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

CREATE TABLE IF NOT EXISTS `ci_sessions` (
        `id` varchar(128) NOT NULL,
        `ip_address` varchar(45) NOT NULL,
        `timestamp` int(10) unsigned DEFAULT 0 NOT NULL,
        `data` blob NOT NULL,
        KEY `ci_sessions_timestamp` (`timestamp`)
);