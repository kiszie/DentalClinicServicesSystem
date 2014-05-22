-- phpMyAdmin SQL Dump
-- version 2.10.3
-- http://www.phpmyadmin.net
-- 
-- Host: localhost
-- Generation Time: May 21, 2014 at 12:21 PM
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

INSERT INTO `ci_sessions` VALUES ('1643099628b5506e5ce965d2d20fefb8', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/34.0.1847.137 Safari/537.36', 1400645906, '');
INSERT INTO `ci_sessions` VALUES ('5fe252b1b2ce935d9d322e2b478d6030', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/34.0.1847.137 Safari/537.36', 1400575572, 'a:2:{s:9:"user_data";s:0:"";s:7:"user_id";s:5:"admin";}');

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

INSERT INTO `clinic_user` VALUES ('admin', 'officer', '1234', 'xxxx', 'xxxx', 'xxxx', 'xxxx', 'xxxx');
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
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- 
-- Dumping data for table `patient`
-- 

INSERT INTO `patient` VALUES ('HELLO', 'b59c67bf196a4758191e42f76670ceba', 'YUNRIM', 'PARK', 38, 0, 'DON''T KNOW YET', 'MOO1', '10101010', 'YUNRIM.PARK@GMAIL.COM');
INSERT INTO `patient` VALUES ('P0000001', '827ccb0eea8a706c4c34a16891f84e7b', 'Bug', 'Bunny', 5, 1, 'Carrot!', 'In the hole!', '1234567890', 'bug@g.com');
INSERT INTO `patient` VALUES ('P0000002', '6074c6aa3488f3c2dddff2a7ca821aab', 'Mickey', 'Mouse', 80, 1, 'Hello!!!', 'Disney land', '053201513', 'M@disney.com');
INSERT INTO `patient` VALUES ('P0000006', 'e1f6a14cd07069692017b53a8ae881f6', 'Jennifer', 'Lopez', 40, 2, '11111', '2', '1234567890', 'J@j.com');
INSERT INTO `patient` VALUES ('P0000007', '7e256a5897b995b39f7fc179a294723c', 'Minie', 'Mouse', 80, 2, '1111', '1', '1111', 'min@disney.com');
INSERT INTO `patient` VALUES ('test', '098f6bcd4621d373cade4e832627b4f6', 'xxxx', 'xxxx', 21, 1, 'xxxx', 'xxxx', '0000000000', 'xxxx@xxx.com');
INSERT INTO `patient` VALUES ('admin', '81dc9bdb52d04dc20036dbd8313ed055', 'xxxx', 'xxxx', 21, 1, 'xxxx', 'xxxx', '0000000000', 'xxxx@xxx.com');

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
