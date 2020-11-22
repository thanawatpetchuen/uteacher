-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 22, 2020 at 09:31 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE `course` (
  `CourseID` char(5) NOT NULL,
  `CourseNAME` varchar(20) DEFAULT NULL,
  `grade` varchar(20) DEFAULT NULL,
  `Languages` varchar(20) DEFAULT NULL,
  `FacultyID` char(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `faculty`
--

CREATE TABLE `faculty` (
  `FacultyID` char(5) NOT NULL,
  `FacultyNAME` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `manager`
--

CREATE TABLE `manager` (
  `lists` char(4) NOT NULL,
  `CourseID` varchar(5) DEFAULT NULL,
  `CourseNAME` varchar(20) DEFAULT NULL,
  `UteacherID` char(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `uteacher`
--

CREATE TABLE `uteacher` (
  `UteacherID` int NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `UteacherNAME` varchar(20) DEFAULT NULL,
  `RANK` varchar(20) DEFAULT NULL,
  `Education` varchar(20) DEFAULT NULL,
  `FacultyID` char(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`CourseID`),
  ADD KEY `FacultyID` (`FacultyID`);

--
-- Indexes for table `faculty`
--
ALTER TABLE `faculty`
  ADD PRIMARY KEY (`FacultyID`);

--
-- Indexes for table `manager`
--
ALTER TABLE `manager`
  ADD PRIMARY KEY (`lists`),
  ADD KEY `CourseID` (`CourseID`),
  ADD KEY `UteacherID` (`UteacherID`);

--
-- Indexes for table `uteacher`
--
ALTER TABLE `uteacher`
  ADD KEY `FacultyID` (`FacultyID`);

--
-- Constraints for dumped tables
--
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
