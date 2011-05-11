-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 26, 2011 at 04:05 PM
-- Server version: 5.1.53
-- PHP Version: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `cms_demo`
--

-- --------------------------------------------------------

--
-- Table structure for table `categorie`
--

CREATE TABLE IF NOT EXISTS `categorie` (
  `cat_id` int(11) NOT NULL AUTO_INCREMENT,
  `cat_title` varchar(12) NOT NULL,
  `cat_despription` varchar(100) NOT NULL,
  `sec_id` int(11) NOT NULL,
  PRIMARY KEY (`cat_id`),
  KEY `sec_id` (`sec_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=24 ;

--
-- Dumping data for table `categorie`
--

INSERT INTO `categorie` (`cat_id`, `cat_title`, `cat_despription`, `sec_id`) VALUES
(1, 'cat1', 'categorie 1', 0),
(2, 'cat2', 'categorie 2', 0),
(3, 'cat3', 'categorie 3', 0),
(4, 'cat4', 'categorie 4', 0),
(5, 'cat5', 'categorie 5', 0),
(6, 'cat6', 'categorie 6', 0),
(7, 'cat7', 'categorie 7', 0),
(8, 'cat8', 'categorie 8', 0),
(9, 'cat9', 'categorie 9', 0),
(10, 'cat10', 'categorie 10', 0),
(11, 'cat11', 'categorie 11', 0),
(12, 'cat12', 'categorie 12', 0),
(13, 'cat13', 'categorie 13', 0),
(14, 'cat14', 'categorie 14', 0),
(15, 'cat15', 'categorie 15', 0),
(16, 'cat16', 'categorie 16', 0),
(17, 'cat16', 'categorie 16', 0),
(18, 'cat16', 'categorie 16', 0),
(19, 'cat16', 'categorie 16', 0),
(20, 'cat17', 'categorie 17', 0),
(21, 'cat18', 'categorie 18', 0),
(22, 'cat19', 'categorie 19', 0),
(23, 'cat20', 'categorie 20', 0);
