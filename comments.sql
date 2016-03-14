-- phpMyAdmin SQL Dump
-- version 4.1.6
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 11, 2014 at 06:25 PM
-- Server version: 5.5.36
-- PHP Version: 5.4.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `comment`
--

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE IF NOT EXISTS `comments` (
  `comment_id` int(4) NOT NULL AUTO_INCREMENT,
  `comment` varchar(90) NOT NULL,
  `name` varchar(30) NOT NULL,
  PRIMARY KEY (`comment_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=38 ;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`comment_id`, `comment`, `name`) VALUES
(1, 'Wow, this picture makes you look great.', 'Aaryan Gupta '),
(3, 'Thx for your sharing.....', 'Maria Stefani'),
(6, 'Wow, great picture. The photographer must be so talented and good looking.', 'Priya'),
(23, 'This is a comment..', 'Jalal'),
(29, 'I want to be a good teacher.', 'Maryam'),
(35, 'Hello World!...', 'Ahmad'),
(36, 'Hello World!..Hello World!..Hello World!..Hello World!..Hello World!..', 'Ali'),
(37, 'Hello World!..Hello World!..Hello World!..Hello World!..Hello World!..', 'Ali');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
