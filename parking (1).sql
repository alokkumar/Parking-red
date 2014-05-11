-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 05, 2014 at 10:00 AM
-- Server version: 5.5.36
-- PHP Version: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `parking`
--

-- --------------------------------------------------------

--
-- Table structure for table `2wheeler`
--

CREATE TABLE IF NOT EXISTS `2wheeler` (
  `id` int(4) NOT NULL AUTO_INCREMENT,
  `slot` int(5) NOT NULL,
  `name` varchar(50) NOT NULL,
  `vehicleno` varchar(50) NOT NULL,
  `wing` varchar(50) NOT NULL,
  `qtrno` varchar(50) NOT NULL,
  `start` varchar(15) NOT NULL,
  `end` varchar(15) NOT NULL,
  `booktime` varchar(15) NOT NULL,
  `type` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=19 ;

-- --------------------------------------------------------

--
-- Table structure for table `4wheeler`
--

CREATE TABLE IF NOT EXISTS `4wheeler` (
  `id` int(4) NOT NULL AUTO_INCREMENT,
  `slot` int(5) NOT NULL,
  `name` varchar(50) NOT NULL,
  `vehicleno` varchar(50) NOT NULL,
  `wing` varchar(50) NOT NULL,
  `qtrno` varchar(50) NOT NULL,
  `start` varchar(15) NOT NULL,
  `end` varchar(15) NOT NULL,
  `booktime` varchar(15) NOT NULL,
  `type` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=24 ;
