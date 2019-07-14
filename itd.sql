-- phpMyAdmin SQL Dump
-- version 3.1.3.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 16, 2015 at 02:53 PM
-- Server version: 5.1.33
-- PHP Version: 5.2.9

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

--
-- Database: `itdefence`
--

-- --------------------------------------------------------

--
-- Table structure for table `todo`
--

CREATE TABLE IF NOT EXISTS `todo` (
  `id` int(50) NOT NULL AUTO_INCREMENT,
  `task` varchar(50) NOT NULL,
  `current_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `scheduled_time` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=51 ;

--
-- Dumping data for table `todo`
--

INSERT INTO `todo` (`id`, `task`, `current_time`, `scheduled_time`) VALUES
(1, 'clean house', '2015-11-12 02:51:34', '11:52'),
(49, 'fishing', '2015-11-16 10:27:47', '2015-11-16 02:43:00'),
(50, 'pecking', '2015-11-16 14:42:13', '2015-11-16 02:43:07');
