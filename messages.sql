-- phpMyAdmin SQL Dump
-- version 4.0.9
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 01, 2014 at 05:27 PM
-- Server version: 5.5.34
-- PHP Version: 5.4.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `test`
--

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE IF NOT EXISTS `messages` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  `message` varchar(200) NOT NULL,
  `email` varchar(40) NOT NULL,
  `date_posted` date NOT NULL,
  `is_approve` enum('Y','N') NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=54 ;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`id`, `name`, `message`, `email`, `date_posted`, `is_approve`) VALUES
(9, 'sdfssdfsdfsdf', 'sdf', 'gfddsf', '2013-11-25', 'N'),
(10, 'sdfssdfsdfsdf', 'sdf', 'gfddsf', '2013-11-25', 'N'),
(11, 'sdfssdfsdfsdf', 'sdf', 'gfddsf', '2013-11-25', 'N'),
(12, 'sdfssdfsdfsdf', 'sdf', 'gfddsf', '2013-11-25', 'N'),
(13, 'sdfssdfsdfsdf', 'sdf', 'gfddsf', '2013-11-25', 'N'),
(14, 'sdfssdfsdfsdf', 'sdf', 'gfddsf', '2013-11-25', 'N'),
(15, 'sdfssdfsdfsdf', 'sdf', 'gfddsf', '2013-11-25', 'N'),
(16, 'sdfssdfsdfsdf', 'sdf', 'gfddsf', '2013-11-25', 'N'),
(17, 'sdfssdfsdfsdf', 'sdf', 'gfddsf', '2013-11-25', 'N'),
(18, 'sdfssdfsdfsdf', 'sdf', 'gfddsf', '2013-11-25', 'N'),
(19, 'sdfssdfsdfsdf', 'sdf', 'gfddsf', '2013-11-25', 'N'),
(20, 'sdfssdfsdfsdf', 'sdf', 'gfddsf', '2013-11-25', 'N'),
(21, 'sdfssdfsdfsdf', 'sdf', 'gfddsf', '2013-11-25', 'N'),
(22, 'dsf', 'sdfdas', 'sdfsdf', '2013-11-25', 'N'),
(25, 'reterwerwe', 'sdfsdf', 'sdfsdf', '2013-11-25', 'N'),
(26, 'reterwerwe', 'sdfsdf', 'sdfsdf', '2013-11-25', 'N'),
(27, 'reterwerwe', 'sdfsdf', 'sdfsdf', '2013-11-25', 'N'),
(28, 'reterwerwe', 'sdfsdf', 'sdfsdf', '2013-11-25', 'N'),
(29, 'reterwerwe', 'sdfsdf', 'sdfsdf', '2013-11-25', 'N'),
(30, 'sdfsadf', 'sdfsdf', 'sdfsdf', '2013-11-25', 'N'),
(31, 'sdfsadf', 'sdfsdf', 'sdfsdf', '2013-11-25', 'N'),
(32, 'sdfsadf', 'sdfsdf', 'sdfsdf', '2013-11-25', 'N'),
(33, 'sdfsdf', 'werew', 'rtwretewrwe', '2013-11-25', 'N'),
(34, 'sdfsdf', 'werew', 'rtwretewrwe', '2013-11-25', 'N'),
(35, 'sdfsdf', 'werew', 'rtwretewrwe', '2013-11-25', 'N'),
(36, 'sdfsdf', 'werew', 'rtwretewrwe', '2013-11-25', 'Y');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
