-- phpMyAdmin SQL Dump
-- version 3.3.9.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Feb 18, 2012 at 05:18 PM
-- Server version: 5.5.9
-- PHP Version: 5.3.6

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `vote_table`
--

-- --------------------------------------------------------

--
-- Table structure for table `candidates_table`
--

CREATE TABLE `candidates_table` (
  `candidate_name` varchar(40) NOT NULL,
  `num_of_votes` int(4) NOT NULL,
  `image_url` varchar(100) NOT NULL,
  PRIMARY KEY (`candidate_name`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `candidates_table`
--

INSERT INTO `candidates_table` VALUES('Calvin', 0, 'calvin.gif');
INSERT INTO `candidates_table` VALUES('Princess Peach', 0, 'peach.jpg');
INSERT INTO `candidates_table` VALUES('Sonic the Hedgehog', 0, 'sonic.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `vote_table`
--

CREATE TABLE `vote_table` (
  `voter_id` int(4) NOT NULL AUTO_INCREMENT,
  `voted_yn` varchar(6) NOT NULL,
  `candidate` varchar(25) NOT NULL,
  PRIMARY KEY (`voter_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `vote_table`
--

