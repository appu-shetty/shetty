-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 05, 2020 at 05:53 AM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `weblab064`
--

-- --------------------------------------------------------

--
-- Table structure for table `student1`
--

CREATE TABLE `student1` (
  `ID` int(11) NOT NULL,
  `USN` varchar(12) NOT NULL,
  `NAME` varchar(50) NOT NULL,
  `MARKS` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `student1`
--

INSERT INTO `student1` (`ID`, `USN`, `NAME`, `MARKS`) VALUES
(1, '4MW17CS031', 'GANPAT PATEL', 85),
(2, '4MW17CS064', 'RAUNAK CHOUDHARY', 95),
(3, '4MW17CS011', 'ASHUTOSH KUMAR', 65),
(4, '4MW17CS029', 'FAHEEM AHMAD', 92),
(5, '4MW17CS058', 'PRANAV R NAYAK', 80),
(6, '4MW17CS077', 'VIGHNESH SHETTY', 60),
(7, '4MW17CS052', 'SHUBHAM POOJARY', 72),
(8, '4MW17CS076', 'SAURABH SHETTY', 74);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `student1`
--
ALTER TABLE `student1`
  ADD PRIMARY KEY (`ID`) USING BTREE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
