-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 20, 2022 at 09:10 AM
-- Server version: 5.6.16
-- PHP Version: 5.5.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `votingsystem`
--

-- --------------------------------------------------------

--
-- Table structure for table `authority`
--

CREATE TABLE IF NOT EXISTS `authority` (
  `name` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `authority`
--

INSERT INTO `authority` (`name`, `password`) VALUES
('Malay Mondal', 'Mondal123'),
('Debika karak', 'Karak123'),
('Sayan Debnath', 'debnath123');

-- --------------------------------------------------------

--
-- Table structure for table `booth2insert`
--

CREATE TABLE IF NOT EXISTS `booth2insert` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `vote` varchar(100) NOT NULL,
  `boothid` int(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 AUTO_INCREMENT=59 ;

--
-- Dumping data for table `booth2insert`
--

INSERT INTO `booth2insert` (`id`, `vote`, `boothid`) VALUES
(40, 'B', 2),
(41, 'I', 2),
(42, 'B', 2),
(43, 'S', 2),
(44, 'S', 2),
(45, 'I', 2),
(46, 'B', 2),
(47, 'B', 2),
(48, 'B', 2),
(49, 'B', 2),
(50, 'B', 2),
(51, 'B', 2),
(52, 'B', 2),
(53, 'B', 2),
(54, 'B', 2),
(55, 'B', 2),
(56, 'B', 2),
(57, 'B', 2),
(58, 'N', 2);

-- --------------------------------------------------------

--
-- Table structure for table `insertvote`
--

CREATE TABLE IF NOT EXISTS `insertvote` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `vote` varchar(100) NOT NULL,
  `boothid` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 AUTO_INCREMENT=27 ;

--
-- Dumping data for table `insertvote`
--

INSERT INTO `insertvote` (`id`, `vote`, `boothid`) VALUES
(4, 'I', '1'),
(5, 'S', '1'),
(6, 'N', '1'),
(7, 'B', '1'),
(8, 'S', '1'),
(9, 'N', '1'),
(10, 'S', '1'),
(13, 'B', '1'),
(14, 'B', '1'),
(15, 'B', '1'),
(16, 'B', '1'),
(17, 'I', '1'),
(18, 'I', '1'),
(19, 'I', '1'),
(20, 'I', '1'),
(21, 'I', '1'),
(22, 'I', '1'),
(23, 'I', '1'),
(24, 'I', '1'),
(25, 'I', '1'),
(26, 'I', '1');

-- --------------------------------------------------------

--
-- Table structure for table `voterregister`
--

CREATE TABLE IF NOT EXISTS `voterregister` (
  `name` varchar(100) NOT NULL,
  `voterid` int(10) NOT NULL AUTO_INCREMENT,
  `constitutionid` varchar(100) NOT NULL,
  `boothid` int(11) NOT NULL,
  `uniqueid` varchar(100) NOT NULL,
  `status` int(10) NOT NULL,
  PRIMARY KEY (`voterid`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 AUTO_INCREMENT=6294078 ;

--
-- Dumping data for table `voterregister`
--

INSERT INTO `voterregister` (`name`, `voterid`, `constitutionid`, `boothid`, `uniqueid`, `status`) VALUES
('ritam', 13332, '5202', 2, '2089843', 1),
('pritam', 13334, '5203', 2, '9954529', 1),
('malay', 13335, '5202', 2, '2889709', 1),
('debika', 13336, '5202', 2, '9754639', 1),
('abhijit', 13337, '5203', 2, '464477', 1),
('aditya', 13338, '5203', 2, '7648011', 1),
('dibya', 13339, '5202', 2, '2869262', 1),
('ashok', 13354, '4525', 2, '5631714', 1),
('rupam', 13356, '4525', 1, '1686706', 1),
('subhas', 6294011, '4225', 1, '4113464', 1),
('shreya', 6294012, '4226', 1, '7289734', 1),
('priya', 6294013, '4225', 1, '9791260', 1),
('sayan', 6294033, '4225', 1, '9659424', 1),
('ankan', 6294036, '4225', 1, '3598633', 1),
('ankita', 6294055, '4226', 1, '9662476', 1),
('riya', 6294077, '4226', 1, '4484253', 1);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
