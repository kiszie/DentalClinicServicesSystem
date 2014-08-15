-- phpMyAdmin SQL Dump
-- version 2.10.3
-- http://www.phpmyadmin.net
-- 
-- Host: localhost
-- Generation Time: Jun 18, 2014 at 12:13 PM
-- Server version: 5.0.51
-- PHP Version: 5.2.6

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

-- 
-- Database: `dentalclinic`
-- 

-- --------------------------------------------------------

-- 
-- Table structure for table `appointment`
-- 

CREATE TABLE `appointment` (
  `appointmentID` int(11) NOT NULL auto_increment,
  `patientID` varchar(100) NOT NULL,
  `userID` varchar(100) NOT NULL,
  `aDate` date NOT NULL,
  `startTime` time NOT NULL,
  `endTime` time NOT NULL,
  `treatment` varchar(100) NOT NULL,
  `description` varchar(100) NOT NULL,
  PRIMARY KEY  (`appointmentID`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

-- 
-- Dumping data for table `appointment`
-- 

INSERT INTO `appointment` VALUES (1, '1', 'test', '2014-06-08', '13:00:00', '13:30:00', 'Bridge', '-');
INSERT INTO `appointment` VALUES (2, 'P0003', 'test', '2014-06-09', '16:15:00', '16:45:00', 'Zeppline', '-');
INSERT INTO `appointment` VALUES (6, 'www', 'test', '2014-06-11', '18:00:00', '19:00:00', 'www', '-');
INSERT INTO `appointment` VALUES (7, 'tttt', 'test', '2014-06-13', '15:30:00', '16:00:00', 'tttt', 'tttt');
INSERT INTO `appointment` VALUES (8, 'P0001', '0', '2014-06-17', '14:00:00', '15:00:00', 'clean', '300 thb');
INSERT INTO `appointment` VALUES (9, 'P0002', '0', '2014-06-16', '11:45:00', '00:00:00', 'whitening', '400 THB');

-- --------------------------------------------------------

-- 
-- Table structure for table `ci_sessions`
-- 

CREATE TABLE `ci_sessions` (
  `session_id` varchar(40) NOT NULL default '0',
  `ip_address` varchar(45) NOT NULL default '0',
  `user_agent` varchar(120) NOT NULL,
  `last_activity` int(10) unsigned NOT NULL default '0',
  `user_data` text NOT NULL,
  PRIMARY KEY  (`session_id`),
  KEY `last_activity_idx` (`last_activity`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- 
-- Dumping data for table `ci_sessions`
-- 

INSERT INTO `ci_sessions` VALUES ('f02ebdf2d9db850723bf6c16c3cf6b7c', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/35.0.1916.153 Safari/537.36', 1402822152, 'a:2:{s:9:"user_data";s:0:"";s:7:"user_id";s:5:"admin";}');

-- --------------------------------------------------------

-- 
-- Table structure for table `clinic_user`
-- 

CREATE TABLE `clinic_user` (
  `userID` varchar(100) NOT NULL,
  `role` varchar(10) NOT NULL,
  `password` varchar(100) NOT NULL,
  `f_name` varchar(100) NOT NULL,
  `l_name` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `telNum` varchar(10) NOT NULL,
  PRIMARY KEY  (`userID`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- 
-- Dumping data for table `clinic_user`
-- 

INSERT INTO `clinic_user` VALUES ('test', 'test', '1234', 'xxxx', 'xxxx', 'xxxx', 'xxxx@xxx.com', '0000000000');
INSERT INTO `clinic_user` VALUES ('admin', 'admin', '1234', 'xxxx', 'xxxx', 'xxxx', 'xxxx@xxx.com', '0000000000');

-- --------------------------------------------------------

-- 
-- Table structure for table `patient`
-- 

CREATE TABLE `patient` (
  `patientID` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `Firstname` varchar(100) NOT NULL,
  `Surname` varchar(100) NOT NULL,
  `Age` int(2) NOT NULL,
  `Gender` int(2) NOT NULL,
  `Treatment` varchar(100) NOT NULL,
  `Address` varchar(100) NOT NULL,
  `Tel` varchar(10) NOT NULL,
  `Email` varchar(100) NOT NULL,
  PRIMARY KEY  (`patientID`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1;

-- 
-- Dumping data for table `patient`
-- 

INSERT INTO `patient` VALUES ('P0001', '1234', 'xxxx', 'xxxx', 21, 2, 'xxxx', 'xxxx', '0000000000', 'xxxx@xxx.com');
INSERT INTO `patient` VALUES ('P0002', '1234', 'xxxx', 'xxxx', 21, 2, 'xxxx', 'xxxx', '0000000000', 'xxxx@xxx.com');
INSERT INTO `patient` VALUES ('P0003', '1234', 'xxxx', 'xxxx', 21, 2, 'xxxx', 'xxxx', '0000000000', 'xxxx@xxx.com');

-- --------------------------------------------------------

-- 
-- Table structure for table `patient_appointement`
-- 

CREATE TABLE `patient_appointement` (
  `ID` int(11) NOT NULL auto_increment,
  `patientID` varchar(100) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `surname` varchar(100) NOT NULL,
  `treatment` varchar(100) NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  `dentist` varchar(100) NOT NULL,
  PRIMARY KEY  (`ID`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

-- 
-- Dumping data for table `patient_appointement`
-- 

INSERT INTO `patient_appointement` VALUES (1, 'P1234567', 'Baitarn', 'Baitarn', 'Tooth fairy', '2014-04-09', '00:00:13', 'Miss Bell');
