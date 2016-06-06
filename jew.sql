-- phpMyAdmin SQL Dump
-- version 4.2.6deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jun 06, 2016 at 02:45 AM
-- Server version: 5.5.40-0ubuntu1
-- PHP Version: 5.5.12-2ubuntu4.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `jew`
--

-- --------------------------------------------------------

--
-- Table structure for table `buy`
--

CREATE TABLE IF NOT EXISTS `buy` (
  `total_amt` int(11) NOT NULL,
  `product_p_id` varchar(45) NOT NULL,
  `register_user_name` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE IF NOT EXISTS `contact` (
  `email` varchar(45) NOT NULL,
  `subject` varchar(45) NOT NULL,
  `name` varchar(45) NOT NULL,
  `register_user_name` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`email`, `subject`, `name`, `register_user_name`) VALUES
('siddikiasma@gmail.com', ' asdf', 'Asma', 'Asma');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE IF NOT EXISTS `product` (
  `p_id` varchar(45) NOT NULL,
  `p_name` varchar(45) NOT NULL,
  `p_price` int(11) NOT NULL,
  `p_type` varchar(45) NOT NULL,
  `p_material` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`p_id`, `p_name`, `p_price`, `p_type`, `p_material`) VALUES
('BDB', 'Diamond Bracelet', 1149, 'Bracelet', 'Diamond'),
('BPB', 'Platinum Bracelet', 1799, 'Bracelet', 'Platinum'),
('BSB', 'Silver Bracelet', 999, 'Bracelet', 'Silver'),
('ECR', 'couple ring', 250, 'Ring', 'platinum'),
('EDR', 'Diamond Ring', 399, 'Ring', 'Diamond, White Gold'),
('EPR', 'Platinum Ring', 799, 'Ring', 'Platinum'),
('ERBC', 'Bridal earings', 999, 'Earings', 'White Gold'),
('ERGE', 'Bridal earings', 749, 'Earings', 'Gold'),
('ERPE', 'Bridal earings', 1599, 'Earings', 'Platinum'),
('ERSD', 'SIngle Diamond Ear Tops', 899, 'Ear Tops', 'Diamond'),
('HDR', 'Diamond Ring', 749, 'Ring', 'Diamond'),
('HLB', 'Heart Band', 1199, 'Bands', 'Platinum'),
('HSR', 'SIlver Rings', 699, 'Ring', 'Silver'),
('NNBN', 'Beads Necklace', 1999, 'Necklace', 'White Gold'),
('NNDM', 'Diamond Necklace', 2599, 'Necklace', 'Diamond'),
('NNDN', 'Designer Necklace', 2999, 'Necklace', 'Platinum'),
('NNWH', 'White Gold and Diamond Necklace', 2799, 'Necklace', 'White Gold, Diamond'),
('RRBR', 'Bride''s Ring', 1499, 'Ring', 'White Gold, Diamond'),
('RRCR', 'Gold Ring', 1199, 'Ring', 'Gold'),
('RRHR', 'Heart Ring', 1599, 'Ring', 'White Gold, Diamond'),
('RRPL', 'Platinum Collection', 2199, 'Ring', 'Platinum');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE IF NOT EXISTS `register` (
  `user_name` varchar(45) NOT NULL,
  `password` varchar(45) NOT NULL,
  `age` int(11) NOT NULL,
  `email` varchar(45) NOT NULL,
  `address` varchar(45) NOT NULL,
  `mobile` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`user_name`, `password`, `age`, `email`, `address`, `mobile`) VALUES
('amit', 'amit', 21, 'amitpatil', 'dshgbdskjhksj', '8979789888'),
('Asma', 'asma', 21, 'siddikiasma@gmail.com', 'mumbai', '1234'),
('root', 'root', 21, 'siddikiasma@yahoo.in', 'ASDF', '123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `buy`
--
ALTER TABLE `buy`
 ADD KEY `fk_buy_product1_idx` (`product_p_id`), ADD KEY `fk_buy_register1_idx` (`register_user_name`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
 ADD PRIMARY KEY (`email`), ADD KEY `fk_contact_register_idx` (`register_user_name`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
 ADD PRIMARY KEY (`p_id`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
 ADD PRIMARY KEY (`user_name`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `buy`
--
ALTER TABLE `buy`
ADD CONSTRAINT `fk_buy_product1` FOREIGN KEY (`product_p_id`) REFERENCES `product` (`p_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
ADD CONSTRAINT `fk_buy_register1` FOREIGN KEY (`register_user_name`) REFERENCES `register` (`user_name`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `contact`
--
ALTER TABLE `contact`
ADD CONSTRAINT `fk_contact_register` FOREIGN KEY (`register_user_name`) REFERENCES `register` (`user_name`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
