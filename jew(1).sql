-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Feb 16, 2016 at 03:38 PM
-- Server version: 5.5.44-0ubuntu0.14.04.1
-- PHP Version: 5.5.9-1ubuntu4.11

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
  `register_user_name` varchar(45) NOT NULL,
  KEY `fk_buy_product1_idx` (`product_p_id`),
  KEY `fk_buy_register1_idx` (`register_user_name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `buy`
--

INSERT INTO `buy` (`total_amt`, `product_p_id`, `register_user_name`) VALUES
(3198, 'RRHR', 'Asma'),
(4797, 'RRHR', 'Asma'),
(6396, 'RRHR', 'Asma'),
(1499, 'RRBR', 'Asma'),
(5998, 'NNDN', 'Asma'),
(5997, 'NNBN', 'Asma'),
(749, 'ERGE', 'Asma'),
(3198, 'ERPE', 'Asma'),
(1599, 'ERPE', 'Asma'),
(3198, 'ERPE', 'Asma'),
(1499, 'RRBR', 'Asma'),
(3597, 'RRCR', 'Asma'),
(5198, 'NNDM', 'Asma'),
(11196, 'NNWH', 'Asma'),
(7995, 'ERPE', 'Asma'),
(1999, 'NNBN', 'Asma');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE IF NOT EXISTS `contact` (
  `email` varchar(45) NOT NULL,
  `subject` varchar(45) NOT NULL,
  `name` varchar(45) NOT NULL,
  `register_user_name` varchar(45) NOT NULL,
  PRIMARY KEY (`email`),
  KEY `fk_contact_register_idx` (`register_user_name`)
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
  `p_material` varchar(45) NOT NULL,
  PRIMARY KEY (`p_id`)
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
  `mobile` varchar(45) NOT NULL,
  `products_purchased` int(11) NOT NULL,
  PRIMARY KEY (`user_name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`user_name`, `password`, `age`, `email`, `address`, `mobile`, `products_purchased`) VALUES
('', '', 0, '', '', '', 0),
('Amit', 'amit', 21, 'amit@gmail.com', 'Rasayani', '1234', 0),
('Asma', 'asma', 21, 'siddikiasma@gmail.com', 'mumbai', '1234', 0),
('root', 'root', 21, 'siddikiasma@yahoo.in', 'ASDF', '123', 0);

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
