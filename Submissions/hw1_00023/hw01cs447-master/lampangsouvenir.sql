-- phpMyAdmin SQL Dump
-- version 4.7.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Sep 13, 2017 at 01:50 PM
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
-- Database: `lampangsouvenir`
--

-- --------------------------------------------------------

--
-- Table structure for table `lpstore`
--

CREATE TABLE `lpstore` (
  `idproduct` int(20) NOT NULL,
  `nameproduct` varchar(300) NOT NULL,
  `imgproduct` varchar(400) NOT NULL,
  `description` varchar(700) NOT NULL,
  `price` double NOT NULL,
  `countproduct` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `lpstore`
--

INSERT INTO `lpstore` (`idproduct`, `nameproduct`, `imgproduct`, `description`, `price`, `countproduct`) VALUES
(1, 'ข้าวแต๋น', 'rice tan11.jpg\r\n', 'ข้าวแต๋น เป็นขนมที่นิยมทำกันในเทศกาลปีใหม่เมือง หรือสงกรานต์ งานปอยลูกแก้ว และงานปอยหลวง ปัจจุบัน นิยมผสมน้ำแตงโมลงในข้าวเหนียวที่นึ่งแล้ว ก่อนนำมากดลงพิมพ์ เพื่อเพิ่มกลิ่นหอมและความหวานอร่อย \r\n', 100, 50),
(2, 'น้ำพริกหนุ่ม', 'nampicnum.jpeg', 'น้ำพริกหนุ่ม คือน้ำพริก อาหารพื้นบ้านล้านนาที่รู้จักกันทั่วไป ทำจากพริกชนิดหนึ่งที่เรียกว่าพริกหนุ่มอาจจะใช้พริกหนุ่มที่แก่จัดหรือยังไม่แก่จัดก็ได้แต่ส่วนมากใช้พริกหนุ่มที่ยังไม่แก่จัด หอม และกระเทียม นำมาย่างและโขลกส่วนผสมและเกลือ รับประทานกับแคบหมู ผัก ข้าวเหนียว บางสูตรใส่ปลาร้าสับ และกะปิห่อใบตองย่างไฟ บางสูตรใส่น้ำปลากับเกลือ ', 230, 45),
(3, 'น้ำพริกอ่อง', 'nampicaoo.jpeg', 'น้ำพริกอ่อง เป็นน้ำพริกซึ่งนิยมรับประทานกันในภาคเหนือของประเทศไทย โดยเฉพาะเมื่อมีงานบุญหรืองานออกรับแขกบ้านแขกเมืองจะต้องมีอาหารชนิดนี้อยู่ในสำรับขันโตก ', 150, 30),
(4, 'แคปหมู', '1.-pork-rind.jpg', 'แคปหมูคือ หนังหมูหรือหนังหมูติดมันทอดให้พองและกรอบ เป็นอาหารที่ปรากฏในทุกภูมิภาคของโลก มักใช้รับประทานเป็นเครื่องเคียงอาหารอื่น ๆ เช่น น้ำพริก ก๋วยเตี๋ยว น้ำเงี้ยว ฯลฯ หรือเป็นส่วนผสมประกอบอาหารอื่น ๆ เช่น พวกน้ำพริกหรือแกง ถ้าใช้หนังสัตว์อื่น จะเปลี่ยนไปเรียกชื่อตามสัตว์นั้น ๆ เช่น แคบควาย ทำจากหนังกระบือ แต่ถ้าทำจากหนังโค จะเรียก หนังพอง', 136, 60),
(5, 'แหนม', '1248019144.jpg', 'แหนม คือชื่ออาหารอย่างหนึ่ง ทำด้วยเนื้อสัตว์ เช่น หมู หมักให้เปรี้ยวด้วยข้าว น้ำตาล เกลือ และดินประสิว รสชาติเปรี้ยวนั้นเกิดจากเชื้อจุลินทรีย์กลุ่มแล็กโตบาซิลลัสที่ก่อตัวจากการหมัก แหนมมีหลายชนิด เช่น แหนมเนื้อหมู หูหมู แหนมซี่โครง แหนมที่ทำไว้นานเกินไปจะมีกลิ่นเปรี้ยวมากและมีเมือกไม่น่ารับประทาน นอกจากนี้ แหนมเป็นอาหารดิบ อาจมีพยาธิและแบคทีเรียควรปรุงให้สุกก่อนบริโภค ถ้าไว้ในอุณหภูมิห้อง จะเก็บได้ประมาณ 1 สัปดาห์ แต่ถ้าไว้ในตู้เย็น จะเก็บได้ราว 1 เดือน ภาคเหนือเรียกแหนมว่า จิ้นส้ม ', 250, 62);

-- --------------------------------------------------------

--
-- Table structure for table `useraccount`
--

CREATE TABLE `useraccount` (
  `username` varchar(100) NOT NULL,
  `password` varchar(32) NOT NULL,
  `userfname` varchar(100) NOT NULL,
  `userlname` varchar(100) NOT NULL,
  `address` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `useraccount`
--

INSERT INTO `useraccount` (`username`, `password`, `userfname`, `userlname`, `address`) VALUES
('poop', 'q1', 'Siriyaporn', 'ninlakan', 'eeeew');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `lpstore`
--
ALTER TABLE `lpstore`
  ADD PRIMARY KEY (`idproduct`);

--
-- Indexes for table `useraccount`
--
ALTER TABLE `useraccount`
  ADD PRIMARY KEY (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `lpstore`
--
ALTER TABLE `lpstore`
  MODIFY `idproduct` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
