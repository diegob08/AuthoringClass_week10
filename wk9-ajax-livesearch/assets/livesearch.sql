-- phpMyAdmin SQL Dump
-- version 3.3.9.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Oct 24, 2013 at 09:16 AM
-- Server version: 5.5.9
-- PHP Version: 5.3.6

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `livesearch`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_customers`
--

CREATE TABLE `tbl_customers` (
  `customer_id` smallint(4) unsigned NOT NULL AUTO_INCREMENT,
  `customer_lastname` varchar(35) NOT NULL,
  `customer_firstname` varchar(35) NOT NULL,
  `customer_city` varchar(30) NOT NULL,
  `customer_age` varchar(5) NOT NULL,
  `customer_job` varchar(30) NOT NULL,
  `customer_photo` varchar(125) NOT NULL,
  PRIMARY KEY (`customer_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `tbl_customers`
--

INSERT INTO `tbl_customers` VALUES(1, 'Hendrix', 'Jimmy', 'Seattle', '27', 'Lead Guitarist', 'images/img1.jpg');
INSERT INTO `tbl_customers` VALUES(2, 'Vaughan', 'Stevie Ray ', 'Dallas', '36', 'Lead Guitarist', 'images/img2.jpg');
INSERT INTO `tbl_customers` VALUES(3, 'Page', 'Jimmy', 'London', '69', 'Lead Guitarist', 'images/img3.jpg');
INSERT INTO `tbl_customers` VALUES(4, 'Gilmour', 'David', 'Grantchester', '67', 'Lead Guitarist', 'images/img4.jpg');
