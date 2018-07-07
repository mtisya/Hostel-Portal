-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 21, 2017 at 01:50 PM
-- Server version: 5.5.32
-- PHP Version: 5.4.19

--
-- Author: Mutisya Sammy
-- Titlle:Programmer
-- Email:samtih2010@gmail.com
-- Mobile: +254714795773
--
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `tumhostel`
--
CREATE DATABASE IF NOT EXISTS `tumhostel` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE tumhostel;

-- --------------------------------------------------------

--
-- Table structure for table `accounts`
--

CREATE TABLE IF NOT EXISTS `accounts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cash_in` varchar(50) NOT NULL,
  `date` date NOT NULL,
  `amount` int(11) NOT NULL,
  `paid_for` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) TYPE=InnoDB  AUTO_INCREMENT=5673 ;

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE IF NOT EXISTS `course` (
  `id` int(11) NOT NULL,
  `coursecode` varchar(30) NOT NULL,
  `coursename` varchar(30) NOT NULL,
  PRIMARY KEY (`coursecode`)
) TYPE=InnoDB;

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

CREATE TABLE IF NOT EXISTS `department` (
  `code` int(11) NOT NULL,
  `departmentname` varchar(50) NOT NULL,
  `schoolname` varchar(50) NOT NULL,
  PRIMARY KEY (`code`)
) TYPE=InnoDB;

-- --------------------------------------------------------

--
-- Table structure for table `hostel`
--

CREATE TABLE IF NOT EXISTS `hostel` (
  `hostelid` int(11) NOT NULL,
  `hostelname` varchar(50) NOT NULL,
  `capacity` int(11) NOT NULL,
  `location` varchar(50) NOT NULL,
  `gender` set('male','female') NOT NULL,
  PRIMARY KEY (`hostelid`)
) TYPE=InnoDB;

-- --------------------------------------------------------

--
-- Table structure for table `payments`
--

CREATE TABLE IF NOT EXISTS `payments` (
  `username` varchar(50) NOT NULL,
  `studentid` varchar(50) NOT NULL,
  `mpesa_id` varchar(50) NOT NULL,
  `verified` set('1','0') NOT NULL,
  `amount` decimal(10,0) NOT NULL,
  `paymentdate` date NOT NULL,
  `receipt_num` varchar(50) NOT NULL,
  PRIMARY KEY (`mpesa_id`),
  KEY `studentid` (`studentid`),
  KEY `studentid_2` (`studentid`),
  KEY `username` (`username`)
) TYPE=InnoDB;

-- --------------------------------------------------------

--
-- Table structure for table `profilepicture`
--

CREATE TABLE IF NOT EXISTS `profilepicture` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `image` blob NOT NULL,
  `username` varchar(50) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `username` (`username`)
) TYPE=InnoDB  AUTO_INCREMENT=273 ;

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE IF NOT EXISTS `register` (
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  PRIMARY KEY (`username`)
) TYPE=InnoDB;

-- --------------------------------------------------------

--
-- Table structure for table `room`
--

CREATE TABLE IF NOT EXISTS `room` (
  `roomno` int(11) NOT NULL,
  `capacity` int(11) NOT NULL,
  `hostelname` varchar(50) NOT NULL,
  PRIMARY KEY (`roomno`)
) TYPE=InnoDB;

-- --------------------------------------------------------

--
-- Table structure for table `room_alloc`
--

CREATE TABLE IF NOT EXISTS `room_alloc` (
  `student` varchar(50) NOT NULL,
  `hname` varchar(50) NOT NULL,
  `semester` int(11) NOT NULL,
  `year` varchar(20) NOT NULL,
  `room` int(11) NOT NULL,
  PRIMARY KEY (`student`),
  KEY `room` (`room`)
) TYPE=InnoDB;

-- --------------------------------------------------------

--
-- Table structure for table `school`
--

CREATE TABLE IF NOT EXISTS `school` (
  `id` int(11) NOT NULL,
  `schoolname` varchar(50) NOT NULL,
  `departments` set('CIT','EEE','MECH','ENERGY') NOT NULL,
  PRIMARY KEY (`id`)
) TYPE=InnoDB;

-- --------------------------------------------------------

--
-- Table structure for table `session`
--

CREATE TABLE IF NOT EXISTS `session` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `year` varchar(20) NOT NULL,
  `sem` enum('1','2','3') NOT NULL,
  PRIMARY KEY (`id`)
) TYPE=InnoDB  AUTO_INCREMENT=18 ;

-- --------------------------------------------------------

--
-- Table structure for table `signup`
--

CREATE TABLE IF NOT EXISTS `signup` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) TYPE=InnoDB  AUTO_INCREMENT=16 ;

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE IF NOT EXISTS `student` (
  `studentid` varchar(20) NOT NULL,
  `fname` text NOT NULL,
  `lname` text NOT NULL,
  `course` varchar(50) NOT NULL,
  `gender` set('male','female') NOT NULL,
  `mobile` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `status` set('on','off') NOT NULL,
  PRIMARY KEY (`studentid`)
) TYPE=InnoDB;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `salt` varchar(50) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `user` (`username`)
) TYPE=InnoDB  AUTO_INCREMENT=19 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
