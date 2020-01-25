-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 25, 2020 at 12:08 PM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mvc`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `Username` varchar(20) NOT NULL,
  `Password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `Username`, `Password`) VALUES
(1, 'admin', 'admin123'),
(4, 'admin1', 'admin1123'),
(5, 'admin2', 'admin2123');

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE `course` (
  `Courseid` int(11) NOT NULL,
  `Course_name` varchar(30) NOT NULL,
  `Dept_name` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`Courseid`, `Course_name`, `Dept_name`) VALUES
(1, 'Btech', 'CSE'),
(3, 'BTech', 'ECE'),
(4, 'BTech', 'Mechanical'),
(5, 'BTech', 'Civil');

-- --------------------------------------------------------

--
-- Table structure for table `result`
--

CREATE TABLE `result` (
  `Res_id` int(11) NOT NULL,
  `RegisterNo` varchar(20) NOT NULL,
  `Sid` int(11) NOT NULL,
  `Course` varchar(20) NOT NULL,
  `Name` varchar(30) NOT NULL,
  `Subject` varchar(30) NOT NULL,
  `Result` varchar(20) NOT NULL,
  `Credits` varchar(20) NOT NULL,
  `TotalGPA` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `result`
--

INSERT INTO `result` (`Res_id`, `RegisterNo`, `Sid`, `Course`, `Name`, `Subject`, `Result`, `Credits`, `TotalGPA`) VALUES
(1, '1121', 14, '110', 'Joncy Mariam John', 'Datastructures', 'Passed', '4', '7.6'),
(2, '1121', 14, '110', 'Joncy Mariam John', 'Datastructures', 'Passed', '4', '7.6');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `Sid` int(11) NOT NULL,
  `RegisterNo` varchar(10) NOT NULL,
  `Name` varchar(20) NOT NULL,
  `Mobile` bigint(20) NOT NULL,
  `Department` varchar(20) NOT NULL,
  `Course` varchar(20) NOT NULL,
  `Email` varchar(30) NOT NULL,
  `SemesterNo` int(11) NOT NULL,
  `Year` int(11) NOT NULL,
  `Username` varchar(20) NOT NULL,
  `Password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`Sid`, `RegisterNo`, `Name`, `Mobile`, `Department`, `Course`, `Email`, `SemesterNo`, `Year`, `Username`, `Password`) VALUES
(14, '1121', 'Joncy Mariam John', 9846463219, 'CSE', 'BTech', 'joncymariam@gmail.com', 1, 2020, 'joncy', 'joncy123'),
(15, '1123', 'Jeseena L', 9483920134, 'CSE', 'BTech', 'jeseenal@gmail.com', 1, 2020, 'jeseena', 'jeseena123');

-- --------------------------------------------------------

--
-- Table structure for table `subject`
--

CREATE TABLE `subject` (
  `subid` int(11) NOT NULL,
  `course` varchar(20) NOT NULL,
  `department` varchar(20) NOT NULL,
  `subjectname` varchar(30) NOT NULL,
  `subjectcode` varchar(10) NOT NULL,
  `semester` varchar(10) NOT NULL,
  `credits` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subject`
--

INSERT INTO `subject` (`subid`, `course`, `department`, `subjectname`, `subjectcode`, `semester`, `credits`) VALUES
(1, 'BTech', 'CSE', 'Datastructures', '101', '1', 4),
(2, 'BTech', 'CSE', 'OOPS', '102', '1', 5);

-- --------------------------------------------------------

--
-- Table structure for table `superadmin`
--

CREATE TABLE `superadmin` (
  `id` int(11) NOT NULL,
  `Username` varchar(20) NOT NULL,
  `Password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `superadmin`
--

INSERT INTO `superadmin` (`id`, `Username`, `Password`) VALUES
(1, 'superadmin', 'superadmin');

-- --------------------------------------------------------

--
-- Table structure for table `timetable`
--

CREATE TABLE `timetable` (
  `timetableid` int(11) NOT NULL,
  `Day` varchar(10) NOT NULL,
  `Department` varchar(20) NOT NULL,
  `Hour1` varchar(20) NOT NULL,
  `Hour2` varchar(20) NOT NULL,
  `Hour3` varchar(20) NOT NULL,
  `Hour4` varchar(20) NOT NULL,
  `Adminid` int(11) NOT NULL,
  `SemesterNo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `timetable`
--

INSERT INTO `timetable` (`timetableid`, `Day`, `Department`, `Hour1`, `Hour2`, `Hour3`, `Hour4`, `Adminid`, `SemesterNo`) VALUES
(1, 'Monday', 'CSE', 'OOPS', 'Datastructures', 'CP', 'EE', 1, 1),
(3, 'Tuesday', 'CSE', 'Mathematics', 'ADA', 'OOPS', 'CP', 1, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`Courseid`);

--
-- Indexes for table `result`
--
ALTER TABLE `result`
  ADD PRIMARY KEY (`Res_id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`Sid`);

--
-- Indexes for table `subject`
--
ALTER TABLE `subject`
  ADD PRIMARY KEY (`subid`);

--
-- Indexes for table `superadmin`
--
ALTER TABLE `superadmin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `timetable`
--
ALTER TABLE `timetable`
  ADD PRIMARY KEY (`timetableid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `course`
--
ALTER TABLE `course`
  MODIFY `Courseid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `result`
--
ALTER TABLE `result`
  MODIFY `Res_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `Sid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `subject`
--
ALTER TABLE `subject`
  MODIFY `subid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `superadmin`
--
ALTER TABLE `superadmin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `timetable`
--
ALTER TABLE `timetable`
  MODIFY `timetableid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
