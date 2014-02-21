-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Feb 21, 2014 at 09:40 PM
-- Server version: 5.5.27
-- PHP Version: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `Project`
--

-- --------------------------------------------------------

--
-- Table structure for table `master_detail`
--

CREATE TABLE IF NOT EXISTS `master_detail` (
  `Id` int(255) NOT NULL AUTO_INCREMENT,
  `user_id` int(255) NOT NULL,
  `Qualification` varchar(255) NOT NULL,
  `Year` year(4) NOT NULL,
  `University` varchar(11) NOT NULL,
  `Percentage` varchar(11) NOT NULL,
  `Division` varchar(11) NOT NULL,
  `Remark` varchar(11) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `master_detail`
--

INSERT INTO `master_detail` (`Id`, `user_id`, `Qualification`, `Year`, `University`, `Percentage`, `Division`, `Remark`) VALUES
(1, 11, 'Q', 2014, 'U', 'P', 'D', 'R');

-- --------------------------------------------------------

--
-- Table structure for table `master_details`
--

CREATE TABLE IF NOT EXISTS `master_details` (
  `sl_no` int(20) NOT NULL AUTO_INCREMENT,
  `user_id` int(55) NOT NULL,
  `year_of_passing` int(20) NOT NULL,
  `Exam` varchar(30) NOT NULL,
  `board` varchar(30) NOT NULL,
  `marks` int(20) NOT NULL,
  `class` varchar(30) NOT NULL,
  `remarks` varchar(100) NOT NULL,
  PRIMARY KEY (`sl_no`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `master_details`
--

INSERT INTO `master_details` (`sl_no`, `user_id`, `year_of_passing`, `Exam`, `board`, `marks`, `class`, `remarks`) VALUES
(1, 8, 2012, 'b-tech', 'wbut', 89, 'abcd', 'fghj'),
(4, 10, 2014, 'Intermediate', 'cbse', 109, 'PCM', 'first division'),
(6, 0, 2012, 'Intermediate', 'cbse', 45, 'PCM', 'first division'),
(7, 10, 2014, 'B-Tech', 'WBUT', 233, 'CSE', 'first division'),
(9, 2, 0, 'hello', 'hello', 0, 'hello', 'hello');

-- --------------------------------------------------------

--
-- Table structure for table `role`
--

CREATE TABLE IF NOT EXISTS `role` (
  `role_id` varchar(20) NOT NULL,
  `role` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `role`
--

INSERT INTO `role` (`role_id`, `role`) VALUES
('1', 'STUDENT'),
('2', 'FACULTY'),
('3', 'HOD'),
('4', 'PRINCIPLE');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `user_id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `pass1` varchar(255) NOT NULL,
  `batch` varchar(10) NOT NULL,
  `regitration_date` date NOT NULL,
  `role` varchar(255) NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=22 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `name`, `email`, `pass1`, `batch`, `regitration_date`, `role`) VALUES
(10, 'VIKRAM RAJ', 'vikramraj1991@gmail.com', 'b1b3773a05c0ed0176787a4f1574ff0075f7521e', '2010-2014', '2013-08-03', 'HOD'),
(15, 'hello', 'dk@gmail.com', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220', '2010-2014', '2013-10-23', 'hod'),
(16, 'sonu', 'sunu@gmail.com', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220', '2010', '2013-10-28', 'princple'),
(17, 'hie', 'hi@gmail.com', '8cb2237d0679ca88db6464eac60da96345513964', '2010-2014', '2013-11-04', ''),
(18, 'hello', 'hello@gmail.com', '8cb2237d0679ca88db6464eac60da96345513964', '2010-2014', '2013-11-04', 'HOD'),
(20, 'VIKRAM RAJ', '123w@gmail.com', 'b1b3773a05c0ed0176787a4f1574ff0075f7521e', '2010-2014', '2014-02-12', 'HOD'),
(21, 'virkam', 'raj.vikram013@gmail.com', '95794aafdc616a663ec81bee7675a639278f3aa3', '2010-2014', '2014-02-21', '');

-- --------------------------------------------------------

--
-- Table structure for table `user_role`
--

CREATE TABLE IF NOT EXISTS `user_role` (
  `user_id` varchar(10) NOT NULL,
  `role_id` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_role`
--

INSERT INTO `user_role` (`user_id`, `role_id`) VALUES
('10', 'STUDENT'),
('10', 'STUDENT'),
('11', 'FACULTY'),
('11', 'FACULTY');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
