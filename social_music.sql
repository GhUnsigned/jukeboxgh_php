-- phpMyAdmin SQL Dump
-- version 3.4.11.1deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 12, 2013 at 11:10 PM
-- Server version: 5.5.29
-- PHP Version: 5.4.6-1ubuntu1.2

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `social_music`
--

-- --------------------------------------------------------

--
-- Table structure for table `artist`
--

CREATE TABLE IF NOT EXISTS `artist` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `genre` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `artist`
--

INSERT INTO `artist` (`id`, `name`, `genre`) VALUES
(1, 'Sarkodie', 'Hip Life'),
(2, 'Becca', 'Afro Pop'),
(3, 'Okyeame Kwame', 'Hip Life'),
(4, 'Jay-So', 'Hip Life'),
(5, 'Edem', 'hip life'),
(6, 'Edem', 'hip life');

-- --------------------------------------------------------

--
-- Table structure for table `subscription_tbl`
--

CREATE TABLE IF NOT EXISTS `subscription_tbl` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `artist_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `subscription_tbl`
--

INSERT INTO `subscription_tbl` (`id`, `user_id`, `artist_id`) VALUES
(1, 1, 1),
(2, 1, 6),
(3, 1, 1),
(4, 1, 2),
(5, 1, 4);

-- --------------------------------------------------------

--
-- Table structure for table `users_tbl`
--

CREATE TABLE IF NOT EXISTS `users_tbl` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `users_tbl`
--

INSERT INTO `users_tbl` (`id`, `email`, `password`) VALUES
(1, 'ketay99@gmail.com', 'admin'),
(2, 'ketay99@yahoo.com', 'admin'),
(3, 'mathias@gmail.com', 'admin');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
