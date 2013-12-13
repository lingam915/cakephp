-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 03, 2013 at 11:13 AM
-- Server version: 5.5.24-log
-- PHP Version: 5.3.13

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `xyz`
--

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

CREATE TABLE IF NOT EXISTS `department` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `course_name` text NOT NULL,
  `details` text NOT NULL,
  `fees` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `department`
--

INSERT INTO `department` (`id`, `course_name`, `details`, `fees`) VALUES
(1, 'computer science', 'only for computers students', '500'),
(2, 'mathematics', 'its a short period course', '800'),
(3, 'physics', 'its only for electrical and electronics students', '700'),
(4, 'chemistry', 'only for chemistry students', '900'),
(5, 'Arts', 'only for arts students', '500');

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE IF NOT EXISTS `students` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` text NOT NULL,
  `password` text NOT NULL,
  `email` text NOT NULL,
  `cources` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `username`, `password`, `email`, `cources`) VALUES
(2, 'lingam', 'lingam', 'itlingam@gmail.com', 'maths'),
(3, 'raja', 'raja', 'raja@gmail.com', 'computer'),
(4, 'ewtrrtyrty', 'etretgfjhfg', 'wertre@gmail.com', 'chemistry'),
(5, 'rajesh', 'rajeshdurai', 'rajesh@gmail.com', 'computer'),
(6, 'fdhgrfh', 'reytruyt', 'reytr44uy7@gmail.com', 'physics'),
(7, 'dcghrtu', 'rftguiouyo', 'tyiy@yahoo.com', 'arts'),
(8, 'fyhrtuyrtu', 'trhjtrujyt', 'rgtfuj@yahoo.com', 'chemistry'),
(10, 'hfgyhf', 'hfdh', 'dfsyhr', 'chemistry');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `role` varchar(20) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `role`, `created`, `modified`) VALUES
(1, 'lingam', '8867164dd96b4820efea1f42839de8f6f48938ee', 'admin', '2013-12-03 09:59:36', '2013-12-03 09:59:36');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
