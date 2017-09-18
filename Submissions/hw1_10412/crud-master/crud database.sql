-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 13, 2017 at 08:07 AM
-- Server version: 10.1.26-MariaDB
-- PHP Version: 7.1.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `crud`
--

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `product_id` int(10) NOT NULL,
  `product_name` varchar(20) COLLATE utf8_bin NOT NULL,
  `description` varchar(100) COLLATE utf8_bin NOT NULL,
  `image` varchar(200) COLLATE utf8_bin NOT NULL,
  `price` int(10) NOT NULL,
  `quantity` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`product_id`, `product_name`, `description`, `image`, `price`, `quantity`) VALUES
(13, ' lamborghini veneno ', ' red ', ' http://nicecarsinfo.com/wp-content/uploads/2015/04/lambo_veneno-15-NCI.jpg ', 4500000, 20),
(14, 'lamborghini aventado', 'gray', 'https://i.ytimg.com/vi/DdaoD0CNLLE/maxresdefault.jpg', 8500000, 32),
(15, ' lamborghini gallard', ' yellow ', ' https://img.gta5-mods.com/q95/images/lamborghini-gallardo-lp570-4-superleggera-add-on-tunable/c3b1e6-GTA5Mod_LamborghiniGallardo_RmodCustoms%20(1).jpg ', 7500000, 12),
(16, ' lamborghini murciel', ' orange ', ' http://www.classicandperformancecar.com/uploads/cms_article/5001_5100/lamborghini-murcielago-buying-guide-and-review-2001-2010-5077_13153_640X470.jpg ', 8000000, 25),
(17, ' ford mustang ', ' blue ', ' http://static2.businessinsider.com/image/56abc10dc08a801b008bdd5c-1200/ford-shelby-mustang-gt350.jpg ', 7000, 800);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(10) NOT NULL,
  `id_name` varchar(10) COLLATE utf8_bin NOT NULL,
  `password` int(10) NOT NULL,
  `name` varchar(20) COLLATE utf8_bin NOT NULL,
  `sirname` varchar(20) COLLATE utf8_bin NOT NULL,
  `address` varchar(100) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `product_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(10) NOT NULL AUTO_INCREMENT;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
