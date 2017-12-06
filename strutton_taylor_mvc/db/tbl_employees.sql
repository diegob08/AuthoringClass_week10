-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Nov 21, 2017 at 10:36 AM
-- Server version: 5.7.19
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_employees`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_employees`
--

DROP TABLE IF EXISTS `tbl_employees`;
CREATE TABLE IF NOT EXISTS `tbl_employees` (
  `emp_id` smallint(4) UNSIGNED NOT NULL AUTO_INCREMENT,
  `emp_fname` varchar(50) NOT NULL,
  `emp_lname` varchar(75) NOT NULL,
  `emp_job` varchar(25) NOT NULL,
  `emp_image` varchar(50) NOT NULL,
  `emp_thumb` varchar(50) NOT NULL,
  `emp_birthdate` varchar(50) NOT NULL,
  `emp_age` int(5) NOT NULL,
  `emp_phone` varchar(30) NOT NULL,
  `emp_email` varchar(150) NOT NULL,
  `emp_startdate` varchar(150) NOT NULL,
  PRIMARY KEY (`emp_id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_employees`
--

INSERT INTO `tbl_employees` (`emp_id`, `emp_fname`, `emp_lname`, `emp_job`, `emp_image`, `emp_thumb`, `emp_birthdate`, `emp_age`, `emp_phone`, `emp_email`, `emp_startdate`) VALUES
(1, 'Mary', 'Smith', 'Accounting', 'person1.jpg', 'person1th.jpg', 'June 13th, 1969', 50, '(226) 568-4526', 'Mary1969@gmail.com', 'September 1st, 2010'),
(2, 'Bob', 'Delgado', 'Sales', 'person2.jpg', 'person2th.jpg', 'September 9th, 1996', 21, '(519) 358-5495', 'b_delgado@gmail.com', 'October 29th, 2016'),
(3, 'Emily', 'Strange', 'Sales', 'person3.jpg', 'person3th.jpg', 'December 5th, 1957', 60, '(519) 461-2813', 'Emilystrange@gmail.com', 'April 5th, 2010'),
(4, 'Greg', 'Murphy', 'CEO', 'person4.jpg', 'person4th.jpg', 'April 2nd, 1988', 29, '(226) 235-7996', 'Greg_murphy@gmail.com', 'March 1st, 2010'),
(5, 'Wanda', 'Zymote', 'Accounting', 'person5.jpg', 'person5th.jpg', 'August 30th, 1975', 42, '(519) 801-8988', 'Wandazymote@gmail.com', 'November 25th, 2013');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
