-- phpMyAdmin SQL Dump
-- version 2.10.3
-- http://www.phpmyadmin.net
-- 
-- Host: localhost
-- Generation Time: May 23, 2014 at 11:17 PM
-- Server version: 5.0.51
-- PHP Version: 5.2.6

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

-- 
-- Database: `dentalclinic`
-- 

-- --------------------------------------------------------

-- 
-- Table structure for table `calendar`
-- 

CREATE TABLE `calendar` (
  `date` date NOT NULL,
  `treatment` text NOT NULL,
  PRIMARY KEY  (`date`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- 
-- Dumping data for table `calendar`
-- 

INSERT INTO `calendar` VALUES ('2014-03-13', 'hahahaha');
INSERT INTO `calendar` VALUES ('2014-03-16', 'Gloyjai');
INSERT INTO `calendar` VALUES ('2014-03-20', 'Hello!!!!!!!!');
INSERT INTO `calendar` VALUES ('2014-03-21', 'Godzilla');

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

INSERT INTO `ci_sessions` VALUES ('4b691c2a52e124c44e6c2d3506b5d30f', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/34.0.1847.137 Safari/537.36', 1400817995, 'a:2:{s:9:"user_data";s:0:"";s:10:"patient_id";s:4:"test";}');
INSERT INTO `ci_sessions` VALUES ('00b96bb86fed46c88efd2449ad462389', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/35.0.1916.114 Safari/537.36', 1400825893, 'a:1:{s:7:"user_id";s:5:"admin";}');

-- --------------------------------------------------------

-- 
-- Table structure for table `clinic_user`
-- 

CREATE TABLE `clinic_user` (
  `userID` varchar(5) NOT NULL,
  `role` varchar(10) NOT NULL,
  `password` varchar(10) NOT NULL,
  `f_name` varchar(100) NOT NULL,
  `l_name` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `telNum` varchar(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- 
-- Dumping data for table `clinic_user`
-- 

INSERT INTO `clinic_user` VALUES ('test', 'test', '1234', 'xxxx', 'xxxx', 'xxxx', 'xxxx@xxx.com', '0000000000');
INSERT INTO `clinic_user` VALUES ('admin', 'admin', '1234', 'xxxx', 'xxxx', 'xxxx', 'xxxx@xxx.com', '0000000000');
INSERT INTO `clinic_user` VALUES ('denti', 'dentist', '1234', 'xxxx', 'xxxx', 'xxxx', 'xxxx@xxx.com', '0000000000');

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
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- 
-- Dumping data for table `patient`
-- 

INSERT INTO `patient` VALUES ('test', '1234', 'xxxx', 'xxxx', 21, 2, 'xxxx', 'xxxx', '0000000000', 'xxxx@xxx.com');

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
