-- phpMyAdmin SQL Dump
-- version 4.8.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 02, 2022 at 08:04 PM
-- Server version: 10.1.33-MariaDB
-- PHP Version: 7.2.6

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
  `newindex` varchar(20) NOT NULL,
  `oldindex` varchar(20) NOT NULL,
  `programme` varchar(100) NOT NULL,
  `completion_year` varchar(50) NOT NULL,
  `certificate` varchar(50) NOT NULL,
  `student_type` varchar(50) NOT NULL,
  `cert_type` varchar(50) NOT NULL,
  `contact` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `organization_1` text NOT NULL,
  `organization_2` text NOT NULL,
  `staffsign` varchar(50) NOT NULL,
  `hodsign` varchar(50) NOT NULL,
  `faculty` varchar(50) NOT NULL,
  `course` varchar(50) NOT NULL,
  `department` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `attended`
--

INSERT INTO `attended` (`attendid`, `status`, `surname`, `firstname`, `others`, `newindex`, `oldindex`, `programme`, `completion_year`, `certificate`, `student_type`, `cert_type`, `contact`, `email`, `organization_1`, `organization_2`, `staffsign`, `hodsign`, `faculty`, `course`, `department`) VALUES
(1, 'Current Student', 'Wayoe', 'Priscilla', 'Dede', '04/2018/2500D', '', 'HND Computer Science', '2021', 'HND Computer Network Management ', 'morning', 'Second Class Upper', '+233 20 329 5506', 'dedewayo@gmail.com', 'KNUST', 'Legon', 'HOD Academics Affairs', 'HOD Student Services', 'Faculty of Applied Science ', 'Computer Network Management', 'Computer Science'),
(3, 'Current Student', 'Frimpong', 'Christabel', 'Asante', '04/2018/2467D', '', 'HND Computer Network Management', '2021', 'HND Computer Network Management ', 'morning', 'Second Class Upper', '+233 26 072 9712', 'chrissy@gmail.com', 'KNUST ', 'Legon', 'HOD Academics Affairs', '', 'Faculty of Applied Science', 'HND Computer Network Management', 'Computer Science Department'),
(4, 'Current Student', 'Frimpong', 'christabel', '', '04/2018/2467D', '', 'computer network management', '2021', 'HND Computer Network Management ', 'morning', 'second class upper', '+233 26 072 9712', 'christabel0420182467d@ktu.ed.gh', '08875-prono streeet', 'BN-0956-543', '', '', 'Faculty of Applied Science', 'HND Computer Network Management', 'Computer Science Department'),
(5, 'Current Student', 'frimpong', 'christabel', '', '04/2018/2467D', '', 'HND Computer Network Management', '2021', 'No', 'morning', 'second class upper', '+233 26 072 9712', 'christabel0420182467d@ktu.ed.gh', '', '', '', '', 'Faculty of Applied Science', 'HND Computer Network Management', 'Computer Science Department');

-- --------------------------------------------------------

--
-- Table structure for table `hod`
--

CREATE TABLE `hod` (
  `hodid` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(10) NOT NULL,
  `department` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hod`
--

INSERT INTO `hod` (`hodid`, `username`, `password`, `department`) VALUES
(1, 'Asare Aikins', '0000', 'HOD Student Services'),
(2, 'Ansomaa Gifty', '1234', 'HOD Student Services');

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

--
-- Dumping data for table `request`
--

INSERT INTO `request` (`reqid`, `status`, `surname`, `firstname`, `others`, `newindex`, `oldindex`, `completion_year`, `certificate`, `student_type`, `cert_type`, `contact`, `email`, `organization_1`, `organization_2`, `staffsign`, `hodsign`) VALUES
(1, 'pending', 'Kwame', 'Emma', '', '04/2018/2501D', '', '2021', 'First', 'Morning', 'HND', '0261319047', 'emma@gmail.com', 'jhaefinb', 'jnjaenfijn', 'staff', 'hod');

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `staffid` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(10) NOT NULL,
  `department` varchar(30) NOT NULL,
  `role` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`staffid`, `username`, `password`, `department`, `role`) VALUES
(2, 'Ansah Desmond', '3333', 'Computer Science', ''),
(3, 'Kissi Stephen', '0000', 'Fashion', ''),
(4, 'Ansah Gifty', '1234', 'Purchasing and Supply', ''),
(5, 'Gifty Asiedu', '1234', 'department', 'staff'),
(6, 'Seth Frimpong', '1234', 'department', 'staff');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `id` int(10) NOT NULL,
  `index_no` varchar(15) DEFAULT NULL,
  `first_name` varchar(25) DEFAULT NULL,
  `last_name` varchar(25) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `department` varchar(50) DEFAULT NULL,
  `faculty` varchar(50) NOT NULL,
  `course` varchar(50) NOT NULL,
  `contact` varchar(20) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `address` varchar(50) NOT NULL,
  `password` varchar(20) NOT NULL,
  `fullname` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`id`, `index_no`, `first_name`, `last_name`, `email`, `department`, `faculty`, `course`, `contact`, `gender`, `address`, `password`, `fullname`) VALUES
(71, '04/2015/0808D', 'AMPONSAH', 'OBED', 'amponsah_obed@gmail.com', 'Purchasing and Supply', 'FBMS', 'HND Purchasing & supply', '', '', '', '04/2015/0808D', ''),
(72, '04/2015/0809D', 'MICHAEL', 'OSEI ANANG', 'michael_osei@gmail.com', 'Accounting', 'FBMS', 'BTECH ACCOUNTING', '', '', '', '04/2015/0809D', ''),
(73, '04/2015/0701D', 'GILBERT', 'ASMAH', 'gilbert_asmah@gmail.com', '27', 'FOE', '', '', '', '', '04/2015/0701D', ''),
(74, '04/2014/0702D', 'EWURAMA', 'AMPOMAAH', 'ewura_ampomah@gmail.com', '27', 'FOE', '', '', '', '', '04/2014/0702D', ''),
(75, '04/2015/0801D', 'NII', 'ARMAH', 'braniiblack@gmail.com', '20', 'FBNE', 'BTEC PROCUREMENT', '', '', '', '04/2015/0801D', ''),
(76, '04/2015/1297D', 'EDITH', 'KLU SEWOR', 'edithklusewor@gmail.com', 'Computer Science Department', 'FAST', 'HND Computer Networking', '', '', '', '04/2015/1297D', ''),
(77, '04/2015/1293D', 'SALOMEY', 'SESU GAD', 'salomey_sesu@gmail.com', 'Computer Science Department', 'FAST', 'HND Computer Science', '', '', '', '04/2015/1293D', ''),
(78, '04/2015/0835D', 'RICHMOND', 'SAKYI TABI', 'richmond_tabi@gmail.com', 'Computer Science Department', '6', 'HND Computer Science', '', '', '', '04/2015/0835D', ''),
(79, '04/2015/0832D', 'ISAAC', 'QUARSHIE', 'pemzymony@gmail.com', 'Fashion', 'FBMS', 'HND Fashion', '', '', '', '04/2015/0832D', ''),
(80, '04/2015/0802D', 'STEVEN', 'MANFO', 'pneumalogoss@gmail.com', '20', '6', '', '', '', '', '04/2015/0802D\r\n', ''),
(81, '04/2018/2500D', 'Priscilla ', 'Dede Wayoe', 'priscilla0420182500d@ktu.edu.gh', 'Computer Science', 'Faculty of Applied Science ', 'Computer Network Management', '+233 20 329 5506', 'Female', 'Pantang', '1234', ''),
(82, '04/2018/2467D', 'Frimpong', 'Christabel Asantewaa', 'christabel0420182467d@ktu.ed.gh', 'Computer Science Department', 'Faculty of Applied Science', 'HND Computer Network Management', '+233 26 072 9712', 'Female', 'Tema', '04/2018/2475D\r\n', ''),
(83, '04/2018/2565D', 'Nicholas', 'Incoom', 'nicholas0420182565d@ktu.edu.gh', 'Computer Science Department', 'Faculty of Applied Science', 'HND Computer Network Management', '', 'Male', 'Kasoa', '04/2018/2488D', ''),
(84, '04/2018/2544D', 'Frimpong', 'Seth Bekoe', 'seth0420182544d@ktu.edu.gh', 'Computer Science', 'Faculty of Applied Science', 'HND Computer Network Management', '05452233651', 'Male', 'Kumasi', '04/2018/2353d', '');

-- --------------------------------------------------------

--
-- Table structure for table `year1sem1`
--

CREATE TABLE `year1sem1` (
  `yearid` int(11) NOT NULL,
  `index_no` varchar(20) NOT NULL,
  `code` varchar(10) NOT NULL,
  `title` varchar(50) NOT NULL,
  `mark` varchar(10) NOT NULL,
  `grade` varchar(10) NOT NULL,
  `credit` varchar(10) NOT NULL,
  `gpa` varchar(10) NOT NULL,
  `cgpa` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `year1sem1`
--

INSERT INTO `year1sem1` (`yearid`, `index_no`, `code`, `title`, `mark`, `grade`, `credit`, `gpa`, `cgpa`) VALUES
(1, '04/2018/0808D', 'AFS102', 'African Studies', '81', 'A', '2', '3.80', '3.82'),
(8, '04/2018/2500D', 'AFS101', 'African Studies I', '10.5', 'A+', '2', '3.50', '3.55'),
(9, '04/2018/2500D', 'COS101', 'Communication Skills I', '12.5', 'A+', '2', '3.50', '3.55'),
(10, '04/2018/2500D', 'CSD109', 'Computer Hardware', '9.5', 'B', '3', '3.50', '3.55'),
(11, '04/2018/2500D', 'CSD119', 'Introduction to Computer Science & IT', '9.0', 'B', '3', '3.50', '3.55'),
(12, '04/2018/2500D', 'CSD121', 'Introduction to Structured Programming', '15.0', 'A+', '3', '3.50', '3.55'),
(13, '04/2018/2500D', 'CSD127', 'Introduction to Networking & Telecommunication', '13.5', 'B+', '3', '3.50', '3.55'),
(16, '04/2018/2467D', 'COS101', 'COMMUNICATION SKILLS I', '75', 'B+', '2', '8.00', ''),
(17, '04/2018/2467D', 'AFS101', 'AFRICAN STUDIES I', '74', 'B', '2', '7.00', ''),
(22, '04/2018/2467D', 'CSD119', 'INTRODUCTION TO COMPUTER SCIENCE & IT', '74', 'B', '3', '10.50', ''),
(23, '04/2018/2467D', 'CSD 109', 'COMPUTER HARDWARE', '82', 'A', '3', '13.50', ''),
(26, '04/2018/2467D', 'CSD 127', 'INTRODUCTION TO NETWORKING &TELECOMMUNICATION', '72', 'B', '3', '10.50', ''),
(27, '04/2018/2467D', 'CSD 121', 'INTRODUCTION TO STRUCTURED PROGRAMMING', '89', 'A+', '3', '15.00', ''),
(29, '04/2018/2467D', 'CSD 141', 'TECHNOLOGY MATHEMATICS', '82', 'A', '3', '13.50', '');

-- --------------------------------------------------------

--
-- Table structure for table `year1sem2`
--

CREATE TABLE `year1sem2` (
  `yearid` int(11) NOT NULL,
  `index_no` varchar(20) NOT NULL,
  `code` varchar(10) NOT NULL,
  `title` varchar(50) NOT NULL,
  `mark` varchar(10) NOT NULL,
  `grade` varchar(10) NOT NULL,
  `credit` varchar(10) NOT NULL,
  `gpa` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `year1sem2`
--

INSERT INTO `year1sem2` (`yearid`, `index_no`, `code`, `title`, `mark`, `grade`, `credit`, `gpa`) VALUES
(1, '04/2018/0321D', 'csd301', 'Programming in VB.Net', '85', 'A+', '3', '3.20'),
(2, '04/2018/2532D', 'csd302', 'Programming in VB.Net', '50', 'C', '3', '2.50'),
(5, '04/2018/2500D', 'AFS102', 'African Studies II', '15.0', 'A+', '2', '3.45'),
(6, '04/2018/2500D', 'COS102', 'Communication Skills II', '14.5', 'A', '2', '3.45'),
(7, '04/2018/2500D', 'CSD106', 'Programming With Visual Basic', '15', 'A', '3', '3.45'),
(8, '04/2018/2500D', 'CSD114', 'Data Communication and Computer Networking', '10.5', 'C+', '3', '3.45'),
(9, '04/2018/2500D', 'CSD116', 'Discrete Mathematics And Applications', '12', 'C+', '3', '3.45'),
(10, '04/2018/2500D', 'CSD118', 'Basic Electronics', '12.5', 'B', '3', '3.45'),
(11, '04/2018/2500D', 'INA102', 'Industrial Attachment', '13.5', 'B+', '2', '3.45'),
(12, '04/2018/2467D', 'AFS102', 'AFRICAN STUDIES II', '78', 'B+', '2', '8.00'),
(13, '04/2018/2467D', 'COS102', 'COMMUNICATION SKILLS II', '75', 'B+', '2', '8.00'),
(16, '04/2018/2467D', 'CSD106', 'PROGRAMMING WITH VISUAL BASIC', '83', 'A', '3', '13.50'),
(17, '04/2018/2467D', 'CSD114', 'DATA COMMUNICATION & COMPUTER NETWORKING', '79', 'B+', '3', '12.00'),
(18, '04/2018/2467D', 'CSD 116', 'DISCRETE MATHEMATICS & APPLICATIONS', '86', 'A+', '3', '15.00'),
(19, '04/2018/2467D', 'CSD118', 'BASIC ELECTRONICS', '79', 'B+', '3', '13.50'),
(21, '04/2018/2467D', 'INA102', 'INDUSTRIAL ATTACHMENT', '86', 'A+', '2', '10.00');

-- --------------------------------------------------------

--
-- Table structure for table `year2sem1`
--

CREATE TABLE `year2sem1` (
  `yearid` int(11) NOT NULL,
  `index_no` varchar(20) NOT NULL,
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

INSERT INTO `year2sem1` (`yearid`, `index_no`, `code`, `title`, `mark`, `grade`, `credit`, `gp`) VALUES
(1, '04/2018/2500D', 'CSD123', 'COMPUTER ORGANISATION & ARCHITECTURE', '15', 'B+', '3', '3.46'),
(2, '04/2018/2500D', 'CSD201', 'Database Concepts and Technologies', '16', 'B+', '3', '3.46'),
(3, '04/2018/2500D', 'CSD207', 'System Analysis and Design I', '17', 'B+', '3', '3.46'),
(4, '04/2018/2500D', 'CSD211', 'Data Structures and Algorithms I', '18', 'B+', '3', '3.46'),
(5, '04/2018/2500D', 'CSD221', 'NETWORK MANAGEMENT & MONITORING', '15', 'B+', '3', '3.46'),
(6, '04/2018/2500D', 'CSD231', 'Programming with Java I', '19', 'A+', '3', '3.46'),
(7, '04/2018/2467D', 'CSD123', 'COMPUTER ORGANIZATION & STRUCTURE', '76', 'B+', '3', '12.00'),
(9, '04/2018/2467D', 'CSD 201', 'DATABASECONCEPT & TECHNOLOGIES I', '74', 'B', '3', '10.50'),
(11, '04/2018/2467D', 'CSD 207', 'SYSTEM ANALYSIS & DESIGN I', '83', 'B', '3', '13.50'),
(12, '04/2018/2467D', 'CSD211', 'DATA STRUCTURE & ALGORITHM', '83', 'B', '3', '13.50'),
(14, '04/2018/2467D', 'CSD221', 'NETWORK MANAGEMENT & MONITORING', '86', 'A+', '3', '13.50'),
(16, '04/2018/2467D', 'CSD231', 'PROGRAMMING WITH JAVA I', '86', 'A+', '3', '15.00');

-- --------------------------------------------------------

--
-- Table structure for table `year2sem2`
--

CREATE TABLE `year2sem2` (
  `yearid` int(11) NOT NULL,
  `index_no` varchar(20) NOT NULL,
  `code` varchar(10) NOT NULL,
  `title` varchar(50) NOT NULL,
  `mark` varchar(10) NOT NULL,
  `grade` varchar(10) NOT NULL,
  `credit` varchar(10) NOT NULL,
  `gp` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `year2sem2`
--

INSERT INTO `year2sem2` (`yearid`, `index_no`, `code`, `title`, `mark`, `grade`, `credit`, `gp`) VALUES
(1, '04/2018/2500D', 'CSD224', 'Routing and Switching Technology', '19', 'A+', '3', '3.66'),
(2, '04/2018/2500D', 'CSD232', 'PROGRAMMING WITH JAVA II', '20', 'A+', '3', '3.66'),
(3, '04/2018/2500D', 'CSD234', 'Research Methods', '18', 'A', '3', '3.66'),
(4, '04/2018/2500D', 'CSD236', 'Distributed Computing', '20', 'A+', '3', '3.66'),
(5, '04/2018/2500D', 'CSD244', 'Operating System and Open Source', '16', 'C+', '3', '3.66'),
(6, '04/2018/2500D', 'CSD248', 'Network Maintenance', '16', 'B', '3', '3.66'),
(7, '04/2018/2500D', 'INA202', 'Industrial Attachment', '18', 'B+', '3', '3.66'),
(10, '04/2018/2467D', 'CSD224', 'ROUTING & SWITCHING', '74', 'B', '3', '10.50'),
(11, '04/2018/2467D', 'CSD232', 'PROGRAMMING WITH JAVA II', '77', 'B+', '3', '12.00'),
(12, '04/2018/2467D', 'CSD234', 'RESEARCH METHODS', '73', 'B', '2', '7.00'),
(13, '04/2018/2467D', 'CSD236', 'DISTRIBUTED COMPUTING', '77', 'B+', '3', '12.00'),
(14, '04/2018/2467D', 'CSD244', 'OPERATING SYSTEM & OPEN SOURCE', '77', 'B+', '3', '12.00'),
(15, '04/2018/2467D', 'CSD 248', 'NETWORK MAINTENANCE', '81', 'A', '3', '13.50'),
(16, '04/2018/2467D', 'INA202', 'INDUSTRIAL ATTACHMENT', '86', 'A+', '2', '10.00');

-- --------------------------------------------------------

--
-- Table structure for table `year3sem1`
--

CREATE TABLE `year3sem1` (
  `yearid` int(11) NOT NULL,
  `index_no` varchar(20) NOT NULL,
  `code` varchar(10) NOT NULL,
  `title` varchar(50) NOT NULL,
  `mark` varchar(10) NOT NULL,
  `grade` varchar(10) NOT NULL,
  `credit` varchar(10) NOT NULL,
  `gp` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `year3sem1`
--

INSERT INTO `year3sem1` (`yearid`, `index_no`, `code`, `title`, `mark`, `grade`, `credit`, `gp`) VALUES
(1, '04/2018/2500D', 'CSD233', 'Social, Legal and Ethical Issues in Computing', '18', 'A+', '3', '3.67'),
(2, '04/2018/2500D', 'CSD307', 'Operations Research I', '18', 'A+', '3', '3.67'),
(3, '04/2018/2500D', 'CSD313', 'Server Concepts', '16', 'C', '3', '3.67'),
(4, '04/2018/2500D', 'CSD317', 'System Administration', '19', 'A+', '3', '3.67'),
(5, '04/2018/2500D', 'CSD319', 'IT AND THE CONTEMPORARY MANAGER (ENTREPRENEURSHIP)', '18', 'A', '3', '3.67'),
(6, '04/2018/2467D', 'CSD233', 'SOCIAL,LEGAL&ETHICAL ISSUES IN COMPUTING', '81', 'A', '3', '13.50'),
(7, '04/2018/2467D', 'CSD307', 'OPERATION RESEARCH', '70', 'B', '3', '10.50'),
(8, '04/2018/2467D', 'CSD313', 'SERVER CONCEPTS', '88', 'A+', '3', '15.00'),
(9, '04/2018/2467D', 'CSD317', 'SYSTEM ADMINISTRATION', '77', 'B+', '3', '12.00'),
(10, '04/2018/2467D', 'CSD319', 'IT & THE CONTEMPORARY MANAGER(ENTREPRENUERSHIP)', '86', 'A+', '2', '10.00');

-- --------------------------------------------------------

--
-- Table structure for table `year3sem2`
--

CREATE TABLE `year3sem2` (
  `yearid` int(11) NOT NULL,
  `index_no` varchar(20) NOT NULL,
  `code` varchar(10) NOT NULL,
  `title` varchar(50) NOT NULL,
  `mark` varchar(10) NOT NULL,
  `grade` varchar(10) NOT NULL,
  `credit` varchar(10) NOT NULL,
  `gp` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `year3sem2`
--

INSERT INTO `year3sem2` (`yearid`, `index_no`, `code`, `title`, `mark`, `grade`, `credit`, `gp`) VALUES
(1, '04/2018/2500D', 'csd205', 'Human and Computer Interaction', '70', 'B', '3', '3.52'),
(2, '04/2018/2500D', 'csd304', 'Information Security', '85', 'A', '3', '3.52'),
(3, '04/2018/2500D', 'CSD306', 'Information Systems and Management', '15.0', 'A+', '3', '3.66'),
(4, '04/2018/2500D', 'CSD314', 'Project II', '14.5', 'B', '3', '3.66'),
(5, '04/2018/2500D', 'CSD322', 'Network and Information Security', '13.5', 'C+', '3', '3.66'),
(6, '04/2018/2500D', 'CSD318', 'IT Project Management', '12.0', 'C', '3', '3.66'),
(7, '04/2018/2467D', 'CSD306', 'INFORMATION SYSTEM & MANAGEMENT', '-', '-', '3', '-'),
(8, '04/2018/2467D', 'CSD314', 'PROJECT', '-', '-', '4', '-'),
(9, '04/2018/2467D', 'CSD318', 'IT PROJECT MANAGEMENT', '-', '-', '3', '-'),
(10, '04/2018/2467D', 'CSD320', 'HUMAN COMPUTER INTERACTION', '-', '-', '3', '-'),
(11, '04/2018/2467D', 'CSD322', 'INTERNET TECHNOLOGY', '-', '-', '3', '-'),
(12, '04/2018/2467D', 'CSD326', 'NETWORK & INFORMATION SECURITY', '-', '-', '3', '-');

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
  MODIFY `attendid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `hod`
--
ALTER TABLE `hod`
  MODIFY `hodid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `request`
--
ALTER TABLE `request`
  MODIFY `reqid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `staff`
--
ALTER TABLE `staff`
  MODIFY `staffid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=85;

--
-- AUTO_INCREMENT for table `year1sem1`
--
ALTER TABLE `year1sem1`
  MODIFY `yearid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `year1sem2`
--
ALTER TABLE `year1sem2`
  MODIFY `yearid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `year2sem1`
--
ALTER TABLE `year2sem1`
  MODIFY `yearid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `year2sem2`
--
ALTER TABLE `year2sem2`
  MODIFY `yearid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `year3sem1`
--
ALTER TABLE `year3sem1`
  MODIFY `yearid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `year3sem2`
--
ALTER TABLE `year3sem2`
  MODIFY `yearid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
