-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 26, 2020 at 12:49 PM
-- Server version: 5.6.11
-- PHP Version: 5.5.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `stucrud`
--
CREATE DATABASE IF NOT EXISTS `stucrud` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `stucrud`;

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE IF NOT EXISTS `students` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `age` int(10) NOT NULL,
  `roll` int(10) NOT NULL,
  `address` varchar(100) NOT NULL,
  `mobile` varchar(12) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `name`, `age`, `roll`, `address`, `mobile`) VALUES
(1, 'Nawab Abdullah', 25, 17, 'Uposhohor', '1730980003'),
(2, 'Al Akram Chowdhury', 25, 160101062, 'Sylhet', '01730980000'),
(3, 'Hani Mohammad', 20, 2010, 'West London', '44412546'),
(4, 'Developer Army', 25, 16010112, 'Sylhet', '25648'),
(5, 'Nawab BeBi', 19, 17, 'London', '44425645'),
(6, 'Akram Chowdhury', 25, 16010, 'Sylhet', '4442564511'),
(7, 'Abdullah Bin Rahman', 23, 10102010, 'Saudi Arab', '01610252514');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `email` varchar(80) NOT NULL,
  `password` varchar(80) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`) VALUES
(1, 'Akram', 'developeraakram@gmail.com', '123456'),
(2, 'Nawab Abdullah', 'xyz@gmail.com', '1234'),
(4, 'Developer Army', 'abc@gmai.com', '789'),
(5, 'Hani Mohammad', 'hani@gmail.com', '123');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
