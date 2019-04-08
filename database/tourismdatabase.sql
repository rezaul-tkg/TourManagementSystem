-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 07, 2017 at 08:16 PM
-- Server version: 5.5.32
-- PHP Version: 5.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `tourismdatabase`
--
CREATE DATABASE IF NOT EXISTS `tourismdatabase` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `tourismdatabase`;

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE IF NOT EXISTS `registration` (
  `userName` varchar(50) NOT NULL,
  `fullName` varchar(50) NOT NULL,
  `mobileNo` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  PRIMARY KEY (`userName`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`userName`, `fullName`, `mobileNo`, `email`, `password`) VALUES
('aslam', 'Md. Aslam Tauhid Reza', '01744909083', 'aslam@gmail.com', 'aslam'),
('iqbal', 'Md. Ikbal Hossain', '01738445291', 'ikbal@gmail.com', 'iqbal'),
('pias', 'Md. Pias Hossain', '01719539574', 'piascse@gmail,com', 'pias'),
('rezaul', 'Md. Rezaul karim', '01737334422', 'rezaul.tkg@gmail.com', 'rezaul'),
('salma', 'Mst. Nusrat Salma', '017********', 'nusrat@gmail.com', 'salma');

-- --------------------------------------------------------

--
-- Table structure for table `tourdata`
--

CREATE TABLE IF NOT EXISTS `tourdata` (
  `tourCode` varchar(50) NOT NULL,
  `userName` varchar(50) NOT NULL,
  `fullName` varchar(50) NOT NULL,
  `address` varchar(50) NOT NULL,
  `mobileNo` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `dLocation` varchar(50) NOT NULL,
  `startDate` varchar(50) NOT NULL,
  `endDate` varchar(50) NOT NULL,
  `buggetTK` varchar(50) NOT NULL,
  PRIMARY KEY (`tourCode`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tourdata`
--

INSERT INTO `tourdata` (`tourCode`, `userName`, `fullName`, `address`, `mobileNo`, `email`, `dLocation`, `startDate`, `endDate`, `buggetTK`) VALUES
('5555', 'rezaul', 'Md. Iqbal Hossain', 'West RazaBazar', '01738445291', 'iqbal@gmail.com', 'jaflong', '25-08-2018', '20-08-2017', '5555'),
('a1234', 'aslam', 'Md. Aslam Tauhid Reza', 'Farmgate', '01744909083', 'aslam@gmail.com', 'jaflong', '10-08-2017', '20-08-2017', '10000'),
('a1235', 'aslam', 'Md. Aslam Tauhid Reza', 'Farmgate', '01744909083', 'aslam@gmail.com', 'Syllhet', '25-08-2018', '30-08-2017', '20000'),
('bvbcvb', 'iqbal', 'Md. Iqbal Hossain', 'fdgdg', '01738445291', 'iqbal@gmail.com', 'coxs Bazar', '10-08-2017', '20-08-2017', '10000'),
('fsdf', 'rezaul', 'dfgdfgfdgfd', 'gdfgdfgfg', 'fdgfdgdf', 'gdfgdfgdf', 'gdfgg', 'fdgdfgdf', 'fdgfdg', 'sdffgg'),
('i123456', 'iqbal', 'Md. Iqbal Hossain', 'West RazaBazar', '01738445291', 'iqbal@gmail.com', 'coxs Bazar', '10-08-2017', '20-08-2017', '10000'),
('r1', 'rezaul', 'Md. Ikbal Hossain', 'Dhaka,Dhanmondi', '01719539574', 'ikbal@gmail.com', 'Ranggamati', '08-08-2017', '22-08-2017', '6000');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
