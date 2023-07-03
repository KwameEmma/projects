-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 29, 2021 at 12:35 PM
-- Server version: 10.1.29-MariaDB
-- PHP Version: 7.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `transcript_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `attended`
--

CREATE TABLE `attended` (
  `attendid` int(11) NOT NULL,
  `status` varchar(50) NOT NULL,
  `surname` varchar(100) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `others` varchar(100) NOT NULL,
  `newinedx` varchar(20) NOT NULL,
  `oldindex` varchar(20) NOT NULL,
  `programme` varchar(100) NOT NULL,
  `completion_year` varchar(50) NOT NULL,
  `certificate` varchar(50) NOT NULL,
  `student_type` varchar(50) NOT NULL,
  `cert_type` varchar(50) NOT NULL,
  `contact` varchar(10) NOT NULL,
  `email` varchar(50) NOT NULL,
  `organization_1` varchar(100) NOT NULL,
  `organization_2` varchar(100) NOT NULL,
  `staffsign` varchar(20) NOT NULL,
  `hodsign` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `hod`
--

CREATE TABLE `hod` (
  `hodid` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hod`
--

INSERT INTO `hod` (`hodid`, `username`, `password`) VALUES
(1, 'Asare Aikins', '2018'),
(2, 'Ansomaa Gifty', '2018');

-- --------------------------------------------------------

--
-- Table structure for table `request`
--

CREATE TABLE `request` (
  `reqid` int(11) NOT NULL,
  `status` varchar(50) NOT NULL,
  `surname` varchar(100) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `others` varchar(100) NOT NULL,
  `newindex` varchar(20) NOT NULL,
  `oldindex` varchar(20) NOT NULL,
  `completion_year` varchar(50) NOT NULL,
  `certificate` varchar(10) NOT NULL,
  `student_type` varchar(50) NOT NULL,
  `cert_type` varchar(50) NOT NULL,
  `contact` varchar(10) NOT NULL,
  `email` varchar(50) NOT NULL,
  `organization_1` varchar(100) NOT NULL,
  `organization_2` varchar(100) NOT NULL,
  `staffsign` varchar(20) NOT NULL,
  `hodsign` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `staffid` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`staffid`, `username`, `password`) VALUES
(2, 'Ansah Desmond', '2018'),
(3, 'Kissi Stephen', '2018'),
(4, 'Ansah Gifty', '2018');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `id` int(10) NOT NULL,
  `index_no` varchar(15) DEFAULT NULL,
  `first_name` varchar(25) DEFAULT NULL,
  `last_name` varchar(25) DEFAULT NULL,
  `email` varchar(25) DEFAULT NULL,
  `department` varchar(50) DEFAULT NULL,
  `faculty` varchar(50) NOT NULL,
  `course` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`id`, `index_no`, `first_name`, `last_name`, `email`, `department`, `faculty`, `course`) VALUES
(71, '04/2015/0808D', 'AMPONSAH', 'OBED', 'amponsah_obed@gmail.com', 'Purchasing and Supply', 'FBMS', ''),
(72, '04/2015/0809D', 'MICHAEL', 'OSEI ANANG', 'michael_osei@gmail.com', 'Accounting', 'FBMS', ''),
(73, '04/2015/0701D', 'GILBERT', 'ASMAH', 'gilbert_asmah@gmail.com', '27', '7', ''),
(74, '04/2014/0702D', 'EWURAMA', 'AMPOMAAH', 'ewura_ampomah@gmail.com', '27', '7', ''),
(75, '04/2015/0801D', 'NII', 'ARMAH', 'braniiblack@gmail.com', '20', '6', ''),
(76, '04/2015/1297D', 'EDITH', 'KLU SEWOR', 'edithklusewor@gmail.com', 'Computer Science Department', 'FAST', 'HND Computer Networking'),
(77, '04/2015/1293D', 'SALOMEY', 'SESU GAD', 'salomey_sesu@gmail.com', 'Computer Science Department', '7', 'HND Computer Science'),
(78, '04/2015/0835D', 'RICHMOND', 'SAKYI TABI', 'richmond_tabi@gmail.com', 'Computer Science Department', '6', 'HND Computer Science'),
(79, '04/2015/0832D', 'ISAAC', 'QUARSHIE', 'pemzymony@gmail.com', 'Fashion', 'FBMS', 'HND Fashion'),
(80, '04/2015/0802D', 'STEVEN', 'MANFO', 'pneumalogoss@gmail.com', '20', '6', '');

-- --------------------------------------------------------

--
-- Table structure for table `year1sem1`
--

CREATE TABLE `year1sem1` (
  `yearid` int(11) NOT NULL,
  `index_number` varchar(20) NOT NULL,
  `code` varchar(10) NOT NULL,
  `title` varchar(50) NOT NULL,
  `mark` varchar(10) NOT NULL,
  `grade` varchar(10) NOT NULL,
  `credit` varchar(10) NOT NULL,
  `gp` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `year1sem1`
--

INSERT INTO `year1sem1` (`yearid`, `index_number`, `code`, `title`, `mark`, `grade`, `credit`, `gp`) VALUES
(1, '04/2018/0808D', 'AFS102', 'African Studies', '81', 'A', '2', '9.00'),
(2, '04/2018/2500D', 'csd101', 'Routing and Switching', '80', 'A', '3', '3.80'),
(3, '04/2018/2223D', 'csd101', 'Data Communication and Telecommunication', '70', 'B+', '3', '3.80'),
(4, '04/2018/2500D', 'csd202', 'Technology Mathematics', '70', 'B', '3', '3.80'),
(5, '04/2018/2500D', 'csd102', 'Computer Hardware', '75', 'B+', '3', '3.80'),
(6, '04/2018/2500D', 'csd203', 'System Analysis and Design', '60', 'C', '3', '3.80'),
(7, '04/2018/2500D', 'csd302', 'Discrete Mathematics', '65', 'C+', '3', '3.80');

-- --------------------------------------------------------

--
-- Table structure for table `year1sem2`
--

CREATE TABLE `year1sem2` (
  `yearid` int(11) NOT NULL,
  `index_number` varchar(20) NOT NULL,
  `code` varchar(10) NOT NULL,
  `title` varchar(50) NOT NULL,
  `mark` varchar(10) NOT NULL,
  `grade` varchar(10) NOT NULL,
  `credit` varchar(10) NOT NULL,
  `gp` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `year2sem1`
--

CREATE TABLE `year2sem1` (
  `yearid` int(11) NOT NULL,
  `index_number` varchar(20) NOT NULL,
  `code` varchar(10) NOT NULL,
  `title` varchar(50) NOT NULL,
  `mark` varchar(10) NOT NULL,
  `grade` varchar(10) NOT NULL,
  `credit` varchar(10) NOT NULL,
  `gp` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `year2sem1`
--

INSERT INTO `year2sem1` (`yearid`, `index_number`, `code`, `title`, `mark`, `grade`, `credit`, `gp`) VALUES
(1, '04/2018/2500D', 'csd203', 'System Analysis and Design', '60', 'C', '3', '3.80'),
(2, '04/2018/2500D', 'csd302', 'Discrete Mathematics', '65', 'C+', '3', '3.80');

-- --------------------------------------------------------

--
-- Table structure for table `year2sem2`
--

CREATE TABLE `year2sem2` (
  `yearid` int(11) NOT NULL,
  `index_number` varchar(20) NOT NULL,
  `code` varchar(10) NOT NULL,
  `title` varchar(50) NOT NULL,
  `mark` varchar(10) NOT NULL,
  `grade` varchar(10) NOT NULL,
  `credit` varchar(10) NOT NULL,
  `gp` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `year3sem1`
--

CREATE TABLE `year3sem1` (
  `yearid` int(11) NOT NULL,
  `index_number` varchar(20) NOT NULL,
  `code` varchar(10) NOT NULL,
  `title` varchar(50) NOT NULL,
  `mark` varchar(10) NOT NULL,
  `grade` varchar(10) NOT NULL,
  `credit` varchar(10) NOT NULL,
  `gp` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `year3sem2`
--

CREATE TABLE `year3sem2` (
  `yearid` int(11) NOT NULL,
  `index_number` varchar(20) NOT NULL,
  `code` varchar(10) NOT NULL,
  `title` varchar(50) NOT NULL,
  `mark` varchar(10) NOT NULL,
  `grade` varchar(10) NOT NULL,
  `credit` varchar(10) NOT NULL,
  `gp` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `attended`
--
ALTER TABLE `attended`
  ADD PRIMARY KEY (`attendid`);

--
-- Indexes for table `hod`
--
ALTER TABLE `hod`
  ADD PRIMARY KEY (`hodid`);

--
-- Indexes for table `request`
--
ALTER TABLE `request`
  ADD PRIMARY KEY (`reqid`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`staffid`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`id`),
  ADD KEY `department_id` (`department`),
  ADD KEY `faculty_id` (`faculty`);

--
-- Indexes for table `year1sem1`
--
ALTER TABLE `year1sem1`
  ADD PRIMARY KEY (`yearid`);

--
-- Indexes for table `year1sem2`
--
ALTER TABLE `year1sem2`
  ADD PRIMARY KEY (`yearid`);

--
-- Indexes for table `year2sem1`
--
ALTER TABLE `year2sem1`
  ADD PRIMARY KEY (`yearid`);

--
-- Indexes for table `year2sem2`
--
ALTER TABLE `year2sem2`
  ADD PRIMARY KEY (`yearid`);

--
-- Indexes for table `year3sem1`
--
ALTER TABLE `year3sem1`
  ADD PRIMARY KEY (`yearid`);

--
-- Indexes for table `year3sem2`
--
ALTER TABLE `year3sem2`
  ADD PRIMARY KEY (`yearid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `attended`
--
ALTER TABLE `attended`
  MODIFY `attendid` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `hod`
--
ALTER TABLE `hod`
  MODIFY `hodid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `request`
--
ALTER TABLE `request`
  MODIFY `reqid` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `staff`
--
ALTER TABLE `staff`
  MODIFY `staffid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=81;

--
-- AUTO_INCREMENT for table `year1sem1`
--
ALTER TABLE `year1sem1`
  MODIFY `yearid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `year1sem2`
--
ALTER TABLE `year1sem2`
  MODIFY `yearid` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `year2sem1`
--
ALTER TABLE `year2sem1`
  MODIFY `yearid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `year2sem2`
--
ALTER TABLE `year2sem2`
  MODIFY `yearid` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `year3sem1`
--
ALTER TABLE `year3sem1`
  MODIFY `yearid` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `year3sem2`
--
ALTER TABLE `year3sem2`
  MODIFY `yearid` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
