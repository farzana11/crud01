-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 25, 2014 at 09:59 AM
-- Server version: 5.5.40-0ubuntu0.14.04.1
-- PHP Version: 5.5.9-1ubuntu4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `crud01`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `track` varchar(255) NOT NULL,
  `first_name` text NOT NULL,
  `last_name` text NOT NULL,
  `father_name` text NOT NULL,
  `mother_name` text NOT NULL,
  `phone_number` int(40) NOT NULL,
  `email_address` varchar(50) NOT NULL,
  `alternative_email` varchar(50) NOT NULL,
  `national_id_number` int(50) NOT NULL,
  `birth_certificate_no` int(49) NOT NULL,
  `present_address` varchar(70) NOT NULL,
  `permanent_address` varchar(70) NOT NULL,
  `village` varchar(60) NOT NULL,
  `post_office` varchar(50) NOT NULL,
  `police_station` varchar(50) NOT NULL,
  `district` varchar(30) NOT NULL,
  `education_qualification` varchar(50) NOT NULL,
  `university` text NOT NULL,
  `subject` varchar(40) NOT NULL,
  `result` varchar(50) NOT NULL,
  `passing_year` int(24) NOT NULL,
  `career_objective` varchar(50) NOT NULL,
  `job_experience` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
