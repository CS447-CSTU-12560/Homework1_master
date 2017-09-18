-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 13, 2017 at 03:00 PM
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
-- Database: `os2`
--

-- --------------------------------------------------------

--
-- Table structure for table `account`
--

CREATE TABLE `account` (
  `username` varchar(24) NOT NULL,
  `password` varchar(24) NOT NULL,
  `name` text NOT NULL,
  `surname` text NOT NULL,
  `address` text NOT NULL,
  `phone` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `account`
--

INSERT INTO `account` (`username`, `password`, `name`, `surname`, `address`, `phone`) VALUES
('admin', 'password', 'Thiti', 'Chuenbubpha', 'M2-207\r\nThammasat University\r\nKlongneung Klongluang Phatumthani\r\n12121', '0949852145');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `productname` varchar(24) NOT NULL,
  `description` text NOT NULL,
  `picture` text NOT NULL,
  `price` int(11) NOT NULL,
  `amount` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`productname`, `description`, `picture`, `price`, `amount`) VALUES
('Apple ', 'Apple is fruit', 'http://dreamicus.com/data/apple/apple-06.jpg', 25, 100),
('Bread', 'Bread is Bread', 'https://www.panerabread.com/foundation/menu/details/sourdough-bread-loaf.jpg/_jcr_content/renditions/sourdough-bread-loaf.desktop.jpeg', 10, 30),
('Cherry', 'Cherry is fruit', 'https://upload.wikimedia.org/wikipedia/commons/b/bb/Cherry_Stella444.jpg', 20, 100),
('Lays', 'Lays is snack', 'https://s-media-cache-ak0.pinimg.com/originals/14/fb/f5/14fbf589a2f366f1c3c38a217bf04876.gif', 20, 100),
('Milk', 'Milk is Milk', 'http://taxclinic.mof.go.th/images/products/M_02.jpg', 15, 100),
('Nam  tip', 'Nam tip is drinking water', 'https://f.ptcdn.info/572/037/000/ny3pb47yqk10OKlTTEc-o.jpg', 7, 100),
('Noodle', 'Noodle is Noodle', 'http://www.willowandthyme.com/wp-content/uploads/2015/03/thai-soup-fw.jpg', 35, 50),
('Pizza', 'Pizza is Pizza', 'https://eatpizzafresca.com/images/pepperoni_pizza.jpg?crc=4023861219', 199, 5),
('watermelon', 'Watermelon is fruit', 'https://draxe.com/wp-content/uploads/2015/05/bigstock-Sliced-Ripe-Watermelon-72055993.jpg', 60, 100);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `account`
--
ALTER TABLE `account`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`productname`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
