-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Apr 07, 2019 at 11:24 PM
-- Server version: 5.7.24
-- PHP Version: 7.2.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kneady`
--

-- --------------------------------------------------------

--
-- Table structure for table `wedding`
--

DROP TABLE IF EXISTS `wedding`;
CREATE TABLE IF NOT EXISTS `wedding` (
  `customer_no` int(15) NOT NULL AUTO_INCREMENT,
  `customer_name` varchar(40) NOT NULL,
  `customer_email` varchar(25) NOT NULL,
  `customer_phone` int(11) NOT NULL,
  `product_type` enum('Traditional Wedding Cake','Modern Wedding Cake','Square Wedding Cake','Hexagonal Wedding Cake','?Round Wedding Cake','Sheet Cake','Fake Cake') NOT NULL,
  `product_quantity` int(5) NOT NULL,
  `product_description` varchar(500) NOT NULL,
  PRIMARY KEY (`customer_no`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `wedding`
--

INSERT INTO `wedding` (`customer_no`, `customer_name`, `customer_email`, `customer_phone`, `product_type`, `product_quantity`, `product_description`) VALUES
(9, 'Mike Whelan', 'whelano07@hotmail.com', 858171154, 'Sheet Cake', 2, 'blah blah');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
