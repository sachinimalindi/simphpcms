-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 26, 2011 at 04:07 PM
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
-- Table structure for table `section`
--

CREATE TABLE IF NOT EXISTS `section` (
  `sec_id` int(11) NOT NULL AUTO_INCREMENT,
  `sec_title` varchar(12) NOT NULL,
  `sec_url` varchar(25) NOT NULL,
  `sec_order` tinyint(2) NOT NULL,
  `sec_despription` varchar(100) NOT NULL,
  `cat_id` int(11) NOT NULL,
  PRIMARY KEY (`sec_id`),
  KEY `cat_id` (`cat_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `section`
--

INSERT INTO `section` (`sec_id`, `sec_title`, `sec_url`, `sec_order`, `sec_despription`, `cat_id`) VALUES
(1, 'Home', '', 1, 'home here', 0),
(2, 'Code', '', 2, 'code here', 0),
(3, 'Php', '', 3, 'php hhmm', 0),
(4, 'Mysql', '', 4, 'mysql tama etin', 0);
