-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 17, 2014 at 11:21 AM
-- Server version: 5.5.32
-- PHP Version: 5.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `milkdb`
--
CREATE DATABASE IF NOT EXISTS `milkdb` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `milkdb`;

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `username` varchar(55) NOT NULL,
  `password` varchar(22) NOT NULL,
  `admin_id` int(11) NOT NULL,
  PRIMARY KEY (`admin_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`username`, `password`, `admin_id`) VALUES
('Elisha', '0000', 2622500),
('Ezekiel', '1234', 27155004);

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE IF NOT EXISTS `categories` (
  `category_id` varchar(11) NOT NULL,
  PRIMARY KEY (`category_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`category_id`) VALUES
(''),
('Crates'),
('Fresh'),
('Lala');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE IF NOT EXISTS `customer` (
  `#` int(11) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(26) NOT NULL,
  `last_name` varchar(26) NOT NULL,
  `customer_id` int(8) NOT NULL,
  `telephone` int(10) NOT NULL,
  `location` varchar(26) NOT NULL,
  `email` varchar(26) NOT NULL,
  `username` varchar(26) NOT NULL,
  `password` varchar(25) NOT NULL,
  PRIMARY KEY (`customer_id`),
  UNIQUE KEY `#` (`#`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`#`, `first_name`, `last_name`, `customer_id`, `telephone`, `location`, `email`, `username`, `password`) VALUES
(1, 'ezekiel', 'momanyi', 27155004, 712419855, 'kisii', 'momezekiel@yahoo.com', 'mom', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE IF NOT EXISTS `employee` (
  `#` int(11) NOT NULL,
  `employee_id` int(8) NOT NULL,
  `first_name` varchar(26) NOT NULL,
  `last_name` varchar(26) NOT NULL,
  `mobile` int(11) NOT NULL,
  `email` varchar(26) NOT NULL,
  PRIMARY KEY (`employee_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE IF NOT EXISTS `orders` (
  `#` int(11) NOT NULL AUTO_INCREMENT,
  `order_id` int(11) NOT NULL,
  `order_date` date NOT NULL,
  `delivery_date` date NOT NULL,
  `total_cost` int(11) NOT NULL,
  `mobile` int(10) NOT NULL,
  `employeeid_fk` int(8) NOT NULL,
  `customerid_fk` int(8) NOT NULL,
  PRIMARY KEY (`order_id`),
  UNIQUE KEY `#` (`#`),
  KEY `employeeid_fk` (`employeeid_fk`),
  KEY `customerid_fk` (`customerid_fk`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `ordertest`
--

CREATE TABLE IF NOT EXISTS `ordertest` (
  `customerid_fk` int(11) NOT NULL,
  `product_code` int(11) NOT NULL,
  `quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ordertest`
--

INSERT INTO `ordertest` (`customerid_fk`, `product_code`, `quantity`) VALUES
(0, 0, 0),
(0, 0, 0),
(0, 0, 0),
(0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `order_details`
--

CREATE TABLE IF NOT EXISTS `order_details` (
  `#` int(11) NOT NULL AUTO_INCREMENT,
  `orderid_fk` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `productid_fk` int(11) NOT NULL,
  PRIMARY KEY (`#`),
  KEY `orderid_fk` (`orderid_fk`),
  KEY `productid_fk` (`productid_fk`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE IF NOT EXISTS `products` (
  `#` int(11) NOT NULL AUTO_INCREMENT,
  `product_name` varchar(26) NOT NULL,
  `product_code` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `price_per_unity` int(11) NOT NULL,
  `categoryid_fk` varchar(11) NOT NULL,
  `customerid_fk` int(8) NOT NULL,
  PRIMARY KEY (`product_code`),
  UNIQUE KEY `#` (`#`),
  KEY `categoryid_fk` (`categoryid_fk`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `stoke`
--

CREATE TABLE IF NOT EXISTS `stoke` (
  `product_id` int(11) NOT NULL AUTO_INCREMENT,
  `product_name` varchar(26) NOT NULL,
  `product_code` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `price_per_unit` double NOT NULL,
  `date_updated` date NOT NULL,
  `admin_id` int(11) NOT NULL,
  `categoryid_fk` varchar(11) NOT NULL,
  PRIMARY KEY (`product_id`),
  KEY `admin_id` (`admin_id`),
  KEY `categoryid_fk` (`categoryid_fk`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=18 ;

--
-- Dumping data for table `stoke`
--

INSERT INTO `stoke` (`product_id`, `product_name`, `product_code`, `quantity`, `price_per_unit`, `date_updated`, `admin_id`, `categoryid_fk`) VALUES
(3, 'yourghurt', 1, 10, 45, '2014-03-09', 27155004, 'Fresh'),
(14, 'cool nature', 7, 1, 25, '2014-03-12', 0, 'Lala'),
(16, 'fanta', 1, 10, 3, '2014-03-13', 0, 'Fresh'),
(17, 'molo', 22, 22, 22, '2014-03-15', 0, 'Crates');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `first_name` varchar(26) NOT NULL,
  `last_name` varchar(26) NOT NULL,
  `username` varchar(26) NOT NULL,
  `location` varchar(26) NOT NULL,
  `email` varchar(26) NOT NULL,
  `password` varchar(50) NOT NULL,
  `mobile` int(10) NOT NULL,
  `useid` int(8) NOT NULL,
  PRIMARY KEY (`useid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`first_name`, `last_name`, `username`, `location`, `email`, `password`, `mobile`, `useid`) VALUES
('ezekiel', 'momanyi', 'mom', 'msa', 'momezekiel@yahoo.com', '1234', 712419855, 27155004);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`employeeid_fk`) REFERENCES `employee` (`employee_id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `orders_ibfk_2` FOREIGN KEY (`customerid_fk`) REFERENCES `customer` (`customer_id`) ON UPDATE CASCADE;

--
-- Constraints for table `order_details`
--
ALTER TABLE `order_details`
  ADD CONSTRAINT `order_details_ibfk_1` FOREIGN KEY (`orderid_fk`) REFERENCES `orders` (`order_id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `order_details_ibfk_2` FOREIGN KEY (`productid_fk`) REFERENCES `products` (`product_code`) ON UPDATE CASCADE;

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_ibfk_1` FOREIGN KEY (`categoryid_fk`) REFERENCES `categories` (`category_id`) ON UPDATE CASCADE;

--
-- Constraints for table `stoke`
--
ALTER TABLE `stoke`
  ADD CONSTRAINT `stoke_ibfk_3` FOREIGN KEY (`categoryid_fk`) REFERENCES `categories` (`category_id`) ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
