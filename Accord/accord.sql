-- phpMyAdmin SQL Dump
-- version 3.2.0.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 02, 2019 at 02:57 AM
-- Server version: 5.1.33
-- PHP Version: 5.3.0

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

--
-- Database: `accord`
--

-- --------------------------------------------------------

--
-- Table structure for table `chat`
--
Create database Accord;
Use Accord

CREATE TABLE IF NOT EXISTS `chat` (
  `chatid` int(255) NOT NULL AUTO_INCREMENT,
  `fromid` int(10) NOT NULL,
  `toid` int(10) NOT NULL,
  `message` longtext NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `status` varchar(1) NOT NULL,
  PRIMARY KEY (`chatid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `chat`
--


-- --------------------------------------------------------

--
-- Table structure for table `disrev`
--

CREATE TABLE IF NOT EXISTS `disrev` (
  `disrevid` mediumint(9) NOT NULL AUTO_INCREMENT,
  `fromid` int(10) NOT NULL,
  `toid` int(100) NOT NULL,
  `type` varchar(1) NOT NULL,
  `message` longtext NOT NULL,
  PRIMARY KEY (`disrevid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `disrev`
--


-- --------------------------------------------------------

--
-- Table structure for table `interest`
--

CREATE TABLE IF NOT EXISTS `interest` (
  `interestid` int(10) NOT NULL AUTO_INCREMENT,
  `intname` int(80) NOT NULL,
  PRIMARY KEY (`interestid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `interest`
--


-- --------------------------------------------------------

--
-- Table structure for table `loginstatus`
--

CREATE TABLE IF NOT EXISTS `loginstatus` (
  `userid` int(10) NOT NULL,
  PRIMARY KEY (`userid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `loginstatus`
--

INSERT INTO `loginstatus` (`userid`) VALUES
(1);

-- --------------------------------------------------------

--
-- Table structure for table `otherpro`
--

CREATE TABLE IF NOT EXISTS `otherpro` (
  `userid` int(10) NOT NULL,
  `mproid` text,
  `tproid` text,
  PRIMARY KEY (`userid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `otherpro`
--

INSERT INTO `otherpro` (`userid`, `mproid`, `tproid`) VALUES
(1, '35, 35, 36, 37, 38', '35, 35, , , , 39, 42'),
(7, NULL, '43');

-- --------------------------------------------------------

--
-- Table structure for table `projectmanagement`
--

CREATE TABLE IF NOT EXISTS `projectmanagement` (
  `projectid` int(100) NOT NULL AUTO_INCREMENT,
  `ownerid` int(10) NOT NULL,
  `institute` varchar(100) NOT NULL,
  `subint` mediumtext,
  `projname` varchar(60) NOT NULL,
  `description` longtext,
  `teammember` tinytext,
  `teammentor` tinytext,
  `type` varchar(1) NOT NULL,
  `ownership` varchar(1) NOT NULL,
  `ratings` float NOT NULL,
  `followers` longtext,
  PRIMARY KEY (`projectid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=44 ;

--
-- Dumping data for table `projectmanagement`
--

INSERT INTO `projectmanagement` (`projectid`, `ownerid`, `institute`, `subint`, `projname`, `description`, `teammember`, `teammentor`, `type`, `ownership`, `ratings`, `followers`) VALUES
(36, 1, 'abc', 'Django', 'banny1', '', NULL, '1', 'p', 'm', 0, NULL),
(37, 1, 'abc', 'Django', 'banny1', '', NULL, '1', 'p', 'm', 0, NULL),
(38, 1, 'abc', 'Django', 'banny', '', NULL, '1', 'p', 'm', 0, NULL),
(39, 1, 'abc', 'Django', 'project', '', NULL, '1', 'p', 'o', 0, NULL),
(40, 5, 'iit', NULL, 'bro', NULL, NULL, NULL, 'p', 'm', 4.5, NULL),
(41, 5, 'abc', NULL, 'test', NULL, NULL, NULL, 'p', 'm', 4.5, NULL),
(42, 1, 'abc', 'java', 'project', '', NULL, '1', 'p', 'o', 0, NULL),
(43, 7, 'abc', 'python', 'banny', '', NULL, '7', 'p', 'o', 0, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `projects`
--

CREATE TABLE IF NOT EXISTS `projects` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `Name` varchar(120) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `projects`
--

INSERT INTO `projects` (`id`, `Name`) VALUES
(1, 'Face S'),
(2, 'i am');

-- --------------------------------------------------------

--
-- Table structure for table `rating`
--

CREATE TABLE IF NOT EXISTS `rating` (
  `rateid` mediumint(9) NOT NULL,
  `fromid` int(10) NOT NULL,
  `toid` int(100) NOT NULL,
  `type` varchar(1) NOT NULL,
  `rates` int(1) NOT NULL,
  PRIMARY KEY (`rateid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rating`
--


-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE IF NOT EXISTS `registration` (
  `firstname` varchar(60) NOT NULL,
  `lastname` varchar(60) NOT NULL,
  `email` varchar(80) NOT NULL,
  `password` varchar(80) NOT NULL,
  `dob` varchar(10) NOT NULL,
  `phone` varchar(10) NOT NULL,
  `institute` varchar(80) NOT NULL,
  `profession` varchar(1) NOT NULL,
  `want` varchar(7) NOT NULL,
  `interestedin` longtext,
  `gender` varchar(1) NOT NULL,
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `followers` longtext,
  `following` longtext,
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`firstname`, `lastname`, `email`, `password`, `dob`, `phone`, `institute`, `profession`, `want`, `interestedin`, `gender`, `id`, `followers`, `following`) VALUES
('Banny', 'Vishwas', 'bannyvishwas2012@gmail.com', '123', '2019-02-04', '21312', 'abc', 's', 'p, r, a', 'Java, Python', 'm', 1, NULL, NULL),
('Prerana', 'k', 'pk@gmail.com', '123', '2019-02-12', '9999999999', 'abc', 's', 'p, r, a', 'Java, Python', 'f', 6, NULL, NULL),
('test', 'user', 'banny.swan@gmail.com', '123', '2019-02-26', '9999999999', 'bfhsdf', 't', 'p, r, a', 'Java, Python', 'm', 5, NULL, NULL),
('Ban', 'Stark', 'ban@ban.com', '123', '2019-02-25', '9999999999', 'abc', 't', 'p, r, a', 'Java, Python', 'm', 7, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `request`
--

CREATE TABLE IF NOT EXISTS `request` (
  `requestid` int(100) NOT NULL AUTO_INCREMENT,
  `from` int(10) NOT NULL,
  `to` int(100) NOT NULL,
  `type` varchar(1) NOT NULL,
  `status` varchar(1) NOT NULL,
  PRIMARY KEY (`requestid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `request`
--

