-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Nov 12, 2022 at 12:28 PM
-- Server version: 5.7.36
-- PHP Version: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rent_a_car`
--

-- --------------------------------------------------------

--
-- Table structure for table `cars_table`
--

DROP TABLE IF EXISTS `cars_table`;
CREATE TABLE IF NOT EXISTS `cars_table` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `number` varchar(50) NOT NULL,
  `rate` int(11) NOT NULL,
  `color` varchar(30) NOT NULL,
  `insurence` varchar(30) NOT NULL,
  `car_condition` varchar(50) NOT NULL,
  `isBooked` tinyint(1) NOT NULL DEFAULT '0',
  `fileName` text NOT NULL,
  `model_year` int(11) NOT NULL,
  `sellerId` int(11) NOT NULL,
  `place` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cars_table`
--

INSERT INTO `cars_table` (`id`, `name`, `number`, `rate`, `color`, `insurence`, `car_condition`, `isBooked`, `fileName`, `model_year`, `sellerId`, `place`) VALUES
(4, 'Swift', 'KL 10 v 1234', 5000, 'Red', 'asgdhslkag', 'Super', 0, '1668248440.jpg', 2012, 1, 'idukki'),
(6, 'Bolero', 'KL 10 v o743', 1000, 'White', '17/10/2001', 'not bad', 1, '1668250308.jpeg', 2022, 1, 'kottayam');

-- --------------------------------------------------------

--
-- Table structure for table `payments_table`
--

DROP TABLE IF EXISTS `payments_table`;
CREATE TABLE IF NOT EXISTS `payments_table` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `userId` int(11) NOT NULL,
  `carId` int(11) NOT NULL,
  `date` date NOT NULL,
  `rate` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `payments_table`
--

INSERT INTO `payments_table` (`id`, `userId`, `carId`, `date`, `rate`) VALUES
(1, 9, 4, '2022-11-02', 5000),
(3, 9, 4, '2022-11-30', 5000),
(4, 9, 6, '2022-11-12', 1000),
(5, 9, 6, '2022-11-12', 1000),
(6, 9, 6, '2022-11-12', 1000);

-- --------------------------------------------------------

--
-- Table structure for table `seller_details`
--

DROP TABLE IF EXISTS `seller_details`;
CREATE TABLE IF NOT EXISTS `seller_details` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `shopAddress` text NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` varchar(30) NOT NULL,
  `password` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `seller_details`
--

INSERT INTO `seller_details` (`id`, `name`, `shopAddress`, `email`, `phone`, `password`) VALUES
(1, 'abinTheSeller', 'dflkfksytiugjsdagla hseqbfch', 'abin@seller.com', '1234567890', '5ebe2294ecd0e0f08eab7690d2a6ee69'),
(3, 'CQ5wcBNZ5p', 'OEFkeB66Qf', 'xyvrr@lafi.com', '079871', 'c491bca188f8b398f1ec6388a609cda5');

-- --------------------------------------------------------

--
-- Table structure for table `user_details`
--

DROP TABLE IF EXISTS `user_details`;
CREATE TABLE IF NOT EXISTS `user_details` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `address` text NOT NULL,
  `licence` varchar(30) NOT NULL,
  `password` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_details`
--

INSERT INTO `user_details` (`id`, `name`, `email`, `phone`, `address`, `licence`, `password`) VALUES
(1, '', 'test@gmail.com', '1234567890', 'no address', '1234567', 'secret'),
(4, '', 'huug2@3o5o.com', '376766', 'xW44hJ73DN', 't2QXz65nIi', 'MaHCftU5Fr'),
(6, '', 'huug2@3o5o.com', '376766', 'xW44hJ73DN', 't2QXz65nIi', '8d35da6c402133ad8d2339b893064c24'),
(7, '', 'huug2@3o5o.com', '376766', 'xW44hJ73DN', 't2QXz65nIi', '8d35da6c402133ad8d2339b893064c24'),
(8, '', '2qmfi@opyn.com', '863941', '3w780NlQ1W', 'KPvCIc3fTR', 'adb309941df5537395ee6339564712da'),
(9, 'Abin', 'abin@gmail.com', '42359873', 'adjflsakdjf', '523453', '5ebe2294ecd0e0f08eab7690d2a6ee69');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
