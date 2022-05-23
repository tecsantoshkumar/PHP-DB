-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 23, 2022 at 06:45 PM
-- Server version: 5.5.8
-- PHP Version: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `db_connect`
--

-- --------------------------------------------------------

--
-- Table structure for table `table`
--

CREATE TABLE IF NOT EXISTS `table` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `name` text NOT NULL,
  `email` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `table`
--

INSERT INTO `table` (`id`, `name`, `email`) VALUES
(1, 'Electro-Tech Solution', 'electrotechsolution@gmail.com'),
(2, 'electro-tech', 'electrotechsolution@gmail.com'),
(3, 'electro-tech', 'electrotech6306@gmail.com'),
(4, 'electro-tech', 'admin@phpzag.com'),
(6, 'Santosh Kumar', 'rnd.engineer@suvatika.com'),
(7, 'Electro-Tech Solution', 'sk4809656@gmail.com');
