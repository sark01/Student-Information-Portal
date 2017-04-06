-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 03, 2017 at 08:45 AM
-- Server version: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `webdlab`
--

-- --------------------------------------------------------

--
-- Table structure for table `aregistration`
--

CREATE TABLE `aregistration` (
  `firstname` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `dateofbirth` date NOT NULL,
  `gender` varchar(100) NOT NULL,
  `department` varchar(100) NOT NULL,
  `rollno` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `registrationno` varchar(100) NOT NULL,
  `programme` varchar(100) NOT NULL,
  `tenp` varchar(100) NOT NULL,
  `twelvep` varchar(100) NOT NULL,
  `sem` varchar(100) NOT NULL,
  `mob` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `aregistration`
--

INSERT INTO `aregistration` (`firstname`, `lastname`, `dateofbirth`, `gender`, `department`, `rollno`, `email`, `password`, `registrationno`, `programme`, `tenp`, `twelvep`, `sem`, `mob`, `address`, `username`) VALUES
('pooja', 'yadav', '2017-02-08', 'Female', 'Information Technology', '14/IT/51', 'pooja@gmail.com', 'dfe00e25c5098720597d35d26051ff2eb6ef01a9', '20140550', 'B.Tech', '89', '90', 'Sixth Semester', '8676767867', 'NIT Durgapur', 'poojadv'),
('INDRANEEL', 'SARKAR', '1996-02-18', 'Male', 'Information Technology', '14/IT/21', 'indraneel.sarkar96@gmail.com', 'c63aa3e7a745ff32dcaba6442d829a3c410a0d85', '20140327', 'B.Tech', '90', '90', 'Sixth Semester', '9007990445', 'ROOM NO. 213, HALL 1, NIT DURGAPUR, r213', 'indraneel'),
('Shahzer', 'Husain', '2017-03-22', 'Male', 'Information Technology', '14/IT/30', 'abc@gef.com', '6ffb1c8311f534db6cd8e970553448a58d11f207', '20140390', 'B.Tech', '88', '88', 'Sixth Semester', '7076302485', 'sjasdhasdj', 'shahzer12');

-- --------------------------------------------------------

--
-- Table structure for table `sregistration`
--

CREATE TABLE `sregistration` (
  `firstname` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `dateofbirth` date NOT NULL,
  `gender` text NOT NULL,
  `department` varchar(100) NOT NULL,
  `rollno` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `registrationno` varchar(100) NOT NULL,
  `programme` varchar(100) NOT NULL,
  `tenp` varchar(100) NOT NULL,
  `twelvep` varchar(100) NOT NULL,
  `sem` varchar(100) NOT NULL,
  `mob` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `activate` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sregistration`
--

INSERT INTO `sregistration` (`firstname`, `lastname`, `dateofbirth`, `gender`, `department`, `rollno`, `email`, `password`, `registrationno`, `programme`, `tenp`, `twelvep`, `sem`, `mob`, `address`, `username`, `activate`) VALUES
('INDRANEEL', 'SARKAR', '2017-03-03', 'Male', 'Information Technology', '14/IT/21', 'indraneel.sarkar96@gmail.com', 'c63aa3e7a745ff32dcaba6442d829a3c410a0d85', '20140327', 'B.Tech', '90', '90', 'Sixth Semester', '9007990445', 'ROOM NO. 213, HALL 1, NIT DURGAPUR', 'indraneel', 1),
('Shahzer', 'Husain', '2017-03-22', 'Male', 'Information Technology', '14/IT/30', 'abc@gef.com', '6ffb1c8311f534db6cd8e970553448a58d11f207', '20140390', 'B.Tech', '88', '88', 'Sixth Semester', '1234567890', 'dfgdfedw', 'shahzer12', 1),
('Bapi', 'Sarkar', '2017-03-09', 'Male', 'Information Technology', '14/IT/22', 'bapi_sins@gmail.com', '71a6caa73aa0255818016c2e7c5ce528f3b5755a', '20140327', 'B.Tech', '90', '90', 'Sixth Semester', '9831227346', 'iijsgusjngojniving', 'bapi', 1),
('Kunal', 'Sutradhar', '2017-03-09', 'Male', 'Metallurgical And Materials Engineering', '14/MME/09', 'baba_da@gmail.com', 'b78b647728101ba462182b4c7e5b2ca57b9f5a99', '20140318', 'B.Tech', '100', '100', 'Sixth Semester', '9007990445', 'aslfjnadgnadgnqpegn', 'baba', 1),
('Sagnik', 'Chatterjee', '2017-03-15', 'Male', 'Computer Science Engineering', '14/CSE/53', 'kjbdjavjnga@gmail.com', 'd0ebf9cf7b23bc4c96ec5c015d2c0b95bbc64e75', '20140335', 'B.Tech', '99', '99', 'Sixth Semester', '9007990445', 'ajbfojaofjcnaofneq', 'sag', 1),
('Chogyal', 'Bhutia', '1992-01-10', 'Male', 'Information Technology', '14/IT/31', 'chogyal.bhutia@gmail.com', 'f7c3bc1d808e04732adf679965ccc34ca7ae3441', '20140397', 'B.Tech', '50', '50', 'Sixth Semester', '1245786395', 'wkjhowfwggwrg', 'chogyal062', 1),
('Sumanta', 'Ghosh', '2017-03-10', 'Male', 'Electrical Engineering', '14/EE/52', 'sghosh@gmail.com', 'faec870d2ad389c81281d5355ffcd61528137118', '20140332', 'B.Tech', '100', '100', 'Sixth Semester', '1234567891', 'ojjnlfnknfonfpijaef', 'sghosh', 1),
('iajfnijaf', 'kjndfjwng', '2017-03-10', 'Male', 'Information Technology', '14/IT/54', 'kngogoidsohd@gmail.com', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220', '20140524', 'B.Tech', '23', '23', 'Sixth Semester', '9065191956', 'sldgnagd', '1234', 1),
('ihbdihabi', 'ihabdibdi', '2017-03-01', 'Male', 'Electronics And Communication Engi', '14/ECE/51', 'aibdjob@gmail.com', '12dea96fec20593566ab75692c9949596833adc9', '20140589', 'B.Tech', '50', '50', 'Sixth Semester', '9285256462', 'BXjbvdnbndojnsdh', 'user', 1),
('Obffbjd', 'Jnondskc', '2017-03-09', 'Male', 'Electrical Engineering', '14/EE/59', 'lakngoln@gmail.com', '12dea96fec20593566ab75692c9949596833adc9', '20140318', 'B.Tech', '25', '25', 'Sixth Semester', '9007554654', 'jndlvnsdkbdfb', 'user', 1);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
