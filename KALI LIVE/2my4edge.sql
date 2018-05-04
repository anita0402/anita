-- phpMyAdmin SQL Dump
-- version 2.11.6
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 21, 2017 at 07:24 AM
-- Server version: 5.0.51
-- PHP Version: 5.2.6

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `2my4edge`
--

-- --------------------------------------------------------

--
-- Table structure for table `sample`
--

CREATE TABLE `sample` (
  `id` int(4) NOT NULL auto_increment,
  `uimage` blob NOT NULL,
  `username` varchar(20) NOT NULL,
  `emailid` varchar(50) NOT NULL,
  `mobileno` text NOT NULL,
  `created` date NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=25 ;

--
-- Dumping data for table `sample`
--

INSERT INTO `sample` (`id`, `uimage`, `username`, `emailid`, `mobileno`, `created`) VALUES
(20, 0x50656e6775696e732e6a7067, 'Nivedita', 'khushal.mca.emax@gmail.com', '9817098170', '2017-04-16'),
(21, 0x4c69676874686f7573652e6a7067, 'Khushal', 'khushal.mca.emax@gmail.com', '8679837146', '2017-04-18'),
(22, 0x4a656c6c79666973682e6a7067, 'Khushal', 'khushal.mca.emax@gmail.com', '9817656777', '2017-04-18'),
(23, 0x4b6f616c612e6a7067, 'ashwani', 'ashwani123@gmail.com', '9817066376', '2017-04-21'),
(24, 0x54756c6970732e6a7067, 'khushal', 'nivedita@gmail.com', '9817098170', '2017-04-21');

-- --------------------------------------------------------

--
-- Table structure for table `tbstudent`
--

CREATE TABLE `tbstudent` (
  `id` int(4) NOT NULL auto_increment,
  `sname` varchar(30) NOT NULL,
  `sclass` varchar(10) NOT NULL,
  `saddress` varchar(100) NOT NULL,
  `simage` blob NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `tbstudent`
--

