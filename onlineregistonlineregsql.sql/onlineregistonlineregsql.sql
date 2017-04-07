-- phpMyAdmin SQL Dump
-- version 2.10.1
-- http://www.phpmyadmin.net
-- 
-- Host: localhost
-- Generation Time: Apr 30, 2015 at 02:25 PM
-- Server version: 5.0.45
-- PHP Version: 5.2.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

-- 
-- Database: `onlinereg`
-- 

-- --------------------------------------------------------

-- 
-- Table structure for table `admindetails`
-- 

CREATE TABLE `admindetails` (
  `name` varchar(20) NOT NULL,
  `faculty_id` varchar(15) NOT NULL,
  `date_of_join` varchar(15) NOT NULL,
  `user_name` varchar(15) NOT NULL,
  PRIMARY KEY  (`faculty_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- 
-- Dumping data for table `admindetails`
-- 

INSERT INTO `admindetails` (`name`, `faculty_id`, `date_of_join`, `user_name`) VALUES 
('MANOJ KUMAR', 'GECTCS001', '12-03-2015', 'examplus');

-- --------------------------------------------------------

-- 
-- Table structure for table `allocation`
-- 

CREATE TABLE `allocation` (
  `enrollment_id` varchar(12) NOT NULL,
  `department` varchar(6) NOT NULL,
  `room_no` varchar(8) NOT NULL,
  `series` varchar(2) NOT NULL,
  `number` int(4) NOT NULL,
  PRIMARY KEY  (`enrollment_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- 
-- Dumping data for table `allocation`
-- 

INSERT INTO `allocation` (`enrollment_id`, `department`, `room_no`, `series`, `number`) VALUES 
('ETAGGCS023', 'CSE', '1', 'B', 1),
('ETAKECS004', 'CSE', '1', 'A', 1),
('ETALECS001', 'CSE', '1', 'B', 2),
('ETALECS002', 'CSE', '1', 'B', 3),
('ETALECS004', 'CSE', '1', 'B', 4),
('ETALECS005', 'CSE', '1', 'B', 5),
('ETAMECS001', 'CSE', '1', 'A', 2),
('ETAMECS002', 'CSE', '1', 'A', 3),
('ETAMECS003', 'CSE', '1', 'A', 4),
('ETAMECS065', 'CSE', '1', 'A', 5),
('ETMAECS004', 'CSE', '2', 'A', 1);

-- --------------------------------------------------------

-- 
-- Table structure for table `attendance`
-- 

CREATE TABLE `attendance` (
  `department` varchar(30) NOT NULL,
  `room_no` varchar(30) NOT NULL,
  `name` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- 
-- Dumping data for table `attendance`
-- 

INSERT INTO `attendance` (`department`, `room_no`, `name`) VALUES 
('CSE', '', '(www.entrance-exam.net)-TCS Aptitude Questions.pdf'),
('CSE', '', '(www.entrance-exam.net)-TCS Aptitude Questions.pdf'),
('CSE', '', '(www.entrance-exam.net)-TCS Aptitude Questions.pdf'),
('CSE', '', '542c7d410cf27e39fa93e9ab.pdf'),
('CSE', '212', '542c7d410cf27e39fa93e9ab.pdf'),
('CSE', '88', '542c7d410cf27e39fa93e9ab.pdf'),
('CSE', '1', 'chapter3.pdf');

-- --------------------------------------------------------

-- 
-- Table structure for table `documents`
-- 

CREATE TABLE `documents` (
  `semester` varchar(30) NOT NULL,
  `department` varchar(30) NOT NULL,
  `name` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- 
-- Dumping data for table `documents`
-- 

INSERT INTO `documents` (`semester`, `department`, `name`) VALUES 
('S1 & S2', 'CSE', 'New Microsoft Office Word Document.docx'),
('S1 & S2', 'CSE', 'New Microsoft Office Word Document.docx'),
('S1 & S2', 'CSE', 'srs.pdf'),
('S1 & S2', 'CSE', 'srs.pdf'),
('S1 & S2', 'CSE', 'New Text Document.txt'),
('S1 & S2', 'CSE', 'New Text Document.txt'),
('S4', 'CSE', 'dataflow diagrm.png'),
('S6', 'CSE', 'compiller.pdf'),
('S6', 'CSE', 'ER-Diagram-Hotel-Management.JPG'),
('S5', 'CSE', 'chapter3.pdf'),
('S6', 'CSE', 'Normalization.pdf'),
('S6', 'CSE', '110 LR and SLR Parsing.pdf'),
('S6', 'CSE', 'lec12-sum.pdf'),
('S6', 'CSE', '(www.entrance-exam.net)-TCS Aptitude Questions.pdf');

-- --------------------------------------------------------

-- 
-- Table structure for table `examdate`
-- 

CREATE TABLE `examdate` (
  `class` varchar(8) NOT NULL,
  `start_date` varchar(15) NOT NULL,
  `department` varchar(10) NOT NULL,
  PRIMARY KEY  (`class`,`start_date`,`department`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- 
-- Dumping data for table `examdate`
-- 

INSERT INTO `examdate` (`class`, `start_date`, `department`) VALUES 
('S1&S2', '18-05-2015', 'CHE'),
('S1&S2', '18-05-2015', 'CSE'),
('S1&S2', '22-04-2015', 'CHE'),
('S1&S2', '28-04-2015', 'CHE'),
('S1&S2', '28-04-2015', 'CSE'),
('S1&S2', '4-05-2015', 'CHE'),
('S3_CHE', '27-04-2015', 'CHE'),
('S3_CHE', '28-04-2015', 'CHE'),
('S3_CHE', '4-05-2015', 'CHE'),
('S4_CHE', '18-05-2015', 'CHE'),
('S4_CHE', '28-04-2015', 'CHE'),
('S4_CHE', '4-05-2015', 'CHE'),
('S6_CSE', '27-04-2015', 'CSE');

-- --------------------------------------------------------

-- 
-- Table structure for table `examregistration`
-- 

CREATE TABLE `examregistration` (
  `enrollment_no` varchar(15) NOT NULL,
  `semester` varchar(8) NOT NULL,
  `reg1` varchar(8) default NULL,
  `reg2` varchar(8) default NULL,
  `reg3` varchar(8) default NULL,
  `reg4` varchar(8) default NULL,
  `reg5` varchar(8) default NULL,
  `reg6` varchar(8) default NULL,
  `reg7` varchar(8) default NULL,
  `reg8` varchar(8) default NULL,
  PRIMARY KEY  (`enrollment_no`,`semester`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- 
-- Dumping data for table `examregistration`
-- 

INSERT INTO `examregistration` (`enrollment_no`, `semester`, `reg1`, `reg2`, `reg3`, `reg4`, `reg5`, `reg6`, `reg7`, `reg8`) VALUES 
('ETACS066', 'S1&S2', 'EN09101', '', 'EN09103', '', '', '', 'EN09107', ''),
('ETAGGCS34', 'S1&S2', 'EN001', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('ETAGGCS55', 'S1&S2', 'EN001', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('ETAKECS004', 'S1&S2', 'EN001', 'EN002', '', '', 'EN005', '', '', ''),
('ETALECH007', 'S8', NULL, NULL, 'CH09603', NULL, NULL, NULL, NULL, NULL),
('ETALECH037', 'S8', NULL, 'CH09602', NULL, NULL, NULL, NULL, NULL, NULL),
('ETAMECH001', 'S6', 'CH09601', 'CH09602', 'CH09603', 'CH09604', 'CH09605', 'CH09Lxx', '0', '0'),
('ETAMECH002', 'S6', 'CH09601', 'CH09602', 'CH09603', 'CH09604', 'CH09605', 'CH09Lxx', '0', '0'),
('ETAMECH003', 'S6', 'CH09601', 'CH09602', 'CH09603', 'CH09604', 'CH09605', 'CH09Lxx', '0', '0'),
('ETAMECH004', 'S6', 'CH09601', 'CH09602', 'CH09603', 'CH09604', 'CH09605', 'CH09Lxx', '0', '0'),
('ETAMECH005', 'S6', 'CH09601', 'CH09602', 'CH09603', 'CH09604', 'CH09605', 'CH09Lxx', '0', '0'),
('ETAMECH006', 'S6', 'CH09601', 'CH09602', 'CH09603', 'CH09604', 'CH09605', 'CH09Lxx', '0', '0'),
('ETAMECH007', 'S6', 'CH09601', 'CH09602', 'CH09603', 'CH09604', 'CH09605', 'CH09Lxx', '0', '0'),
('ETAMECH008', 'S6', 'CH09601', 'CH09602', 'CH09603', 'CH09604', 'CH09605', 'CH09Lxx', '0', '0'),
('ETAMECH009', 'S6', 'CH09601', 'CH09602', 'CH09603', 'CH09604', 'CH09605', 'CH09Lxx', '0', '0'),
('ETAMECH010', 'S6', 'CH09601', 'CH09602', 'CH09603', 'CH09604', 'CH09605', 'CH09Lxx', NULL, NULL),
('ETAMECS001', 'S3', 'CS301', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('ETAMECS002', 'S3', 'CS301', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('ETAMECS003', 'S3', 'CS301', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('ETAMECS004', 'S3', 'CS301', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('ETAMECS005', 'S3', 'CS301', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('ETAMECS006', 'S3', 'CS301', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('ETAMECS007', 'S3', 'CS301', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('ETAMECS008', 'S3', 'CS301', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('ETAMECS009', 'S3', 'CS301', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('ETAMECS010', 'S3', 'CS301', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('ETAMECS037', 'S3', 'CS301', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('ETAMECS039', 'S3', 'CS301', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('ETAMECS065', 'S6', 'CS09601', 'CS09602', 'CS09603', 'CS09604', 'CS09605', 'CS09606', '0', '0'),
('ETAMECS067', 'S3', 'CS301', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('ETAMEPE001', 'S6', 'PE09601', 'PE09602', 'PE09603', 'PE09604', 'PE09605', 'PE09606', NULL, NULL),
('ETAMEPE002', 'S6', 'PE09601', 'PE09602', 'PE09603', 'PE09604', 'PE09605', 'PE09606', NULL, NULL),
('ETAMEPE003', 'S6', 'PE09601', 'PE09602', 'PE09603', 'PE09604', 'PE09605', 'PE09606', NULL, NULL),
('ETAMEPE004', 'S6', 'PE09601', 'PE09602', 'PE09603', 'PE09604', 'PE09605', 'PE09606', NULL, NULL),
('ETAMEPE005', 'S6', 'PE09601', 'PE09602', 'PE09603', 'PE09604', 'PE09605', 'PE09606', NULL, NULL),
('ETAMEPE006', 'S6', 'PE09601', 'PE09602', 'PE09603', 'PE09604', 'PE09605', 'PE09606', NULL, NULL),
('ETAMEPE007', 'S6', 'PE09601', 'PE09602', 'PE09603', 'PE09604', 'PE09605', 'PE09606', NULL, NULL),
('ETAMEPE008', 'S6', 'PE09601', 'PE09602', 'PE09603', 'PE09604', 'PE09605', 'PE09606', NULL, NULL);

-- --------------------------------------------------------

-- 
-- Table structure for table `faculty`
-- 

CREATE TABLE `faculty` (
  `faculty_id` varchar(20) NOT NULL,
  `name` varchar(20) NOT NULL,
  `designation` varchar(20) NOT NULL,
  `department` varchar(20) NOT NULL,
  `age` varchar(10) NOT NULL,
  `address` varchar(30) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `contact_no` varchar(10) NOT NULL,
  `email_id` varchar(30) NOT NULL,
  `status` varchar(5) NOT NULL default '0',
  PRIMARY KEY  (`faculty_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- 
-- Dumping data for table `faculty`
-- 

INSERT INTO `faculty` (`faculty_id`, `name`, `designation`, `department`, `age`, `address`, `gender`, `contact_no`, `email_id`, `status`) VALUES 
('GECTCH001', 'DR. V.O. REJINI', 'PROFESSOR', 'CHE', '40', 'Thrissur dist,kerala', 'Female', '9446412158', 'rejinivo@gmail.com', '0'),
('GECTCH002', 'DR.P.A.SOLOMON', 'PROFESSOR', 'CHE', '40', 'Thrissur dist,kerala', 'Male', '9447865261', 'pasolomon@gmail.com', '0'),
('GECTCH003', 'DR.RENJANADEVI.B', 'ASSOCIATE PROFESSOR', 'CHE', '35', 'Thrissur dist,kerala', 'Female', '9495053118', 'renjanab@gmail.com', '0'),
('GECTCH004', 'DR.MANJU M.S.', 'ASSISTANT PROFESSOR', 'CHE', '35', 'Thrissur dist,kerala', 'Female', '9995894962', 'manjupradeep@gectcr.ac.in', '1'),
('GECTCH005', 'MRS. ANJANA R', 'ASSISTANT PROFESSOR', 'CHE', '35', 'Thrissur dist,kerala', 'Female', '9446024544', 'anjan.rnair@gmail.com', '1'),
('GECTCH006', 'MR.MANILAL A M', 'ASSISTANT PROFESSOR', 'CHE', '35', 'Thrissur dist,kerala', 'Male', '0903791035', 'manilalam@gectcr.ac.in', '1'),
('GECTCH007', 'MRS PADMAVATHY K S', 'ASSISTANT PROFESSOR', 'CHE', '40', 'Thrissur dist,kerala', 'Female', '9495419660', 'padma426@rediffmail.com', '1'),
('GECTCH008', 'MRS.PRASEETHA P NAIR', 'ASSISTANT PROFESSOR', 'CHE', '35', 'Thrissur dist,kerala', 'Female', '9656221371', 'praseetha@gectcr.ac.in', '1'),
('GECTCH009', 'MR. SUBIN POULOSE', 'ASSISTANT PROFESSOR', 'CHE', '35', 'Thrissur dist,kerala', 'Male', '9020400601', 'subin2882@gmail.com', '1'),
('GECTCH010', 'MRS SAJEENABEEVI.B', 'ASSISTANT PROFESSOR', 'CHE', '40', 'Thrissur dist,kerala', 'Female', '9446317516', 'sajeenanazer@gmail.com', '1'),
('GECTCH011', 'MR. MANOJ.N', 'ASSISTANT PROFESSOR', 'CHE', '35', 'Thrissur dist,kerala', 'Male', '9447610049', 'manojn_91@yahoo.co.in', '1'),
('GECTCH012', 'MRS. FASNABI.P.A', 'ASSISTANT PROFESSOR', 'CHE', '35', 'Thrissur dist,kerala', 'Female', '9495464599', 'fasna_salah@yahoo.co.in', '1'),
('GECTCH013', 'MR. AJEESH K. N', 'ASSISTANT PROFESSOR', 'CHE', '35', 'Thrissur dist,kerala', 'Male', '9446506099', 'ajeesh_kn2000@yahoo.com', '0'),
('GECTCH014', 'MRS. HASEENA P. V', 'ASSISTANT PROFESSOR', 'CHE', '35', 'Thrissur dist,kerala', 'Female', '9495634446', 'haseenapv2000@yahoo.co.in', '0'),
('GECTCH015', 'MR.SOURABH SAHADEV', 'ASSISTANT PROFESSOR', 'CHE', '40', 'Thrissur dist,kerala', 'Male', '9446274128', 'saurabhsdev@gmail.com', '0'),
('GECTCS001', 'MANOJ KUMAR K V', 'PROFESSOR', 'CSE', '40', 'THRISSUR DIST,KERALA,INDIA', 'Male', '0487232358', 'kvm.kumar@yahoo.com', '0'),
('GECTCS002', 'VIPIN KUMAR K S', 'ASSISTANT PROFESSOR', 'CSE', '35', 'THRISSUR DIST,KERALA,INDIA', 'Male', '9288139331', 'vipin.kumar.k.s@gmail.com', '1'),
('GECTCS003', 'SHIBILY JOSEPH', 'ASSISTANT PROFESSOR', 'CSE', '35', 'THRISSUR DIST,KERALA,INDIA', 'Female', '9495948482', 'shibilyj@gmail.com', '0'),
('GECTCS004', 'AJAY JAMES', 'ASSISTANT PROFESSOR', 'CSE', '35', 'THRISSUR DIST,KERALA,INDIA', 'Male', '9747291957', 'ajay@gectcr.ac.in', '0'),
('GECTCS005', 'ANISH ABRAHAM', 'ASSISTANT PROFESSOR', 'CSE', '35', 'THRISSUR DIST,KERALA,INDIA', 'Male', '9447129261', 'anish3338@gmail.com', '0'),
('GECTCS006', 'EZUDHEEN P', 'ASSISTANT PROFESSOR', 'CSE', '35', 'THRISSUR DIST,KERALA,INDIA', 'Male', '9895398985', 'ezudheen@gmail.com', '0'),
('GECTCS007', 'MUMTHAS O Y', 'ASSISTANT PROFESSOR', 'CSE', '35', 'THRISSUR DIST,KERALA,INDIA', 'Female', '9895651971', 'mumthasoy@gmail.com', '0'),
('GECTCS008', 'RAHAMATHULLA K', 'ASSISTANT PROFESSOR', 'CSE', '35', 'THRISSUR DIST,KERALA,INDIA', 'Male', '9446622225', 'rahamathulla@gmail.com', '0'),
('GECTCS009', 'BABY SYLA', 'ASSISTANT PROFESSOR', 'CSE', '35', 'THRISSUR DIST,KERALA,INDIA', 'Female', '8547060768', 'sylabavakutty@gmail.com', '0'),
('GECTCS010', 'HELEN K J', 'ASSOCIATE PROFESSOR', 'CSE', '35', 'THRISSUR DIST,KERALA,INDIA', 'Female', '9446352699', 'helenkj28@gmail.com', '0'),
('GECTCS011', 'SMINESH C.N', 'ASSOCIATE PROFESSOR', 'CSE', '39', 'THRISSUR DIST,KERALA,INDIA', 'Male', '9496715356', 'smineshcn@gmail.com', '0'),
('GECTCS012', 'JAYASREE M', 'ASSOCIATE PROFESSOR', 'CSE', '35', 'THRISSUR DIST,KERALA,INDIA', 'Female', '9446480296', 'jayasree_mm@yahoo.com', '0'),
('GECTCS013', 'BISNA N D', 'ASSISTANT PROFESSOR', 'CSE', '29', 'THRISSUR DIST,KERALA,INDIA', 'Female', '9656966641', 'bisveena@yahoo.com', '0'),
('GECTPE001', 'M. PARAMESWARAN', 'PROFESSOR', 'PDE', '35', 'THRISSSUR,KERALA,INDIA', 'Male', '9961882327', 'parameswaran62@gmail.com', '0'),
('GECTPE002', 'P.V.GOPINADHAN', 'PROFESSOR', 'PDE', '40', 'THRISSSUR,KERALA,INDIA', 'Male', '9446083353', 'gopi84prod@yahoo.com', '0'),
('GECTPE003', 'MARY C. KURIAN', 'PROFESSOR', 'PDE', '32', 'THRISSSUR,KERALA,INDIA', 'female', '9446068828', 'maryckurien@gmail.com', '0'),
('GECTPE004', 'N. JAYASREE', 'ASSOCIATE PROFESSOR', 'PDE', '40', 'THRISSSUR,KERALA,INDIA', 'female', '9446548005', 'jayasreen@gmail.com', '0'),
('GECTPE005', 'DR. HARIS NADUTHODI', 'ASSOCIATE PROFESSOR', 'PDE', '38', 'THRISSSUR,KERALA,INDIA', 'Male', '9744380131', 'haris@gmail.com', '0'),
('GECTPE006', 'MANJITH KUMAR B', 'ASSOCIATE PROFESSOR', 'PDE', '36', 'THRISSSUR,KERALA,INDIA', 'Male', '8547411090', 'manjithkumar_b@hotmail.com', '0'),
('GECTPE007', 'DR. SHALIJ P.R', 'ASSOCIATE PROFESSOR', 'PDE', '40', 'THRISSSUR,KERALA,INDIA', 'Male', '9288186806', 'shalijpe@gmail.com', '0'),
('GECTPE008', 'DR. SATISH K. P.', 'ASSOCIATE PROFESSOR', 'PDE', '45', 'THRISSSUR,KERALA,INDIA', 'Male', '9446301317', 'satishkp@gmail.com', '0'),
('GECTPE009', 'DR.BOBY K. GEORGE', 'ASSISTANT PROFESSOR', 'PDE', '40', 'THRISSSUR,KERALA,INDIA', 'Male', '9656148275', 'boby@gmail.com', '0'),
('GECTPE010', 'SUJATHA I', 'ASSISTANT PROFESSOR', 'PDE', '39', 'THRISSSUR,KERALA,INDIA', 'female', '9846177441', 'sujathaindiranair@gmail.com', '0'),
('GECTPE011', 'SUNIL D.T', 'ASSISTANT PROFESSOR', 'PDE', '33', 'THRISSSUR,KERALA,INDIA', 'Male', '9495628278', 'dtsunil@gmail.com', '0'),
('GECTPE012', 'ANJANA SASIDARAN', 'ASSISTANT PROFESSOR', 'PDE', '29', 'THRISSSUR,KERALA,INDIA', 'Female', '9548766212', 'anjanasasidaran@gmail.com', '0'),
('GECTPE013', 'MENON K', 'ASSISTANT PROFESSOR', 'PDE', '35', 'THRISSSUR,KERALA,INDIA', 'Male', '8564128756', 'menonk@gmail.com', '0'),
('GECTPE014', 'KUMAR P P', 'ASSISTANT PROFESSOR', 'PDE', '40', 'THRISSSUR,KERALA,INDIA', 'Male', '7856412300', 'kumarp@gmail.com', '0'),
('GECTPE015', 'LOVECY THOMAS', 'ASSISTANT PROFESSOR', 'PDE', '24', 'THRISSSUR,KERALA,INDIA', 'Female', '9995642231', 'lovecythomas@gmail.com', '0'),
('GECTPE016', 'FOUSIYA N A', 'ASSISTANT PROFESSOR', 'PDE', '40', 'THRISSSUR,KERALA,INDIA', 'Female', '9548766210', 'fousiyaaa@gmail.com', '0'),
('GECTPE017', 'PRASANTH P', 'ASSISTANT PROFESSOR', 'PDE', '35', 'THRISSSUR,KERALA,INDIA', 'Male', '9446352694', 'prasanthp@gmail.com', '0'),
('GECTPE018', 'SHRAVAN T S', 'ASSISTANT PROFESSOR', 'PDE', '38', 'THRISSSUR,KERALA,INDIA', 'Male', '9446274182', 'shravants@gmail.com', '0'),
('GECTPE019', 'ABIN DAS', 'ASSISTANT PROFESSOR', 'PDE', '42', 'THRISSSUR,KERALA,INDIA', 'Male', '8564128765', 'abindas@gmail.com', '0');

-- --------------------------------------------------------

-- 
-- Table structure for table `facultyallocation`
-- 

CREATE TABLE `facultyallocation` (
  `faculty_id` varchar(20) NOT NULL,
  `department` varchar(10) NOT NULL,
  `room_no` varchar(10) NOT NULL,
  `date` date NOT NULL,
  `time` varchar(5) default NULL,
  PRIMARY KEY  (`faculty_id`,`date`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- 
-- Dumping data for table `facultyallocation`
-- 

INSERT INTO `facultyallocation` (`faculty_id`, `department`, `room_no`, `date`, `time`) VALUES 
('GECTCH004', 'CHE', '1', '0000-00-00', 'FN'),
('GECTCH004', 'CHE', '4', '2015-04-05', 'FN'),
('GECTCH005', 'CHE', '1', '0000-00-00', 'AN'),
('GECTCH005', 'CHE', '4', '2015-04-05', 'AN'),
('GECTCH006', 'CHE', '4', '0000-00-00', 'FN'),
('GECTCH006', 'CHE', '5', '2015-04-05', 'FN'),
('GECTCH007', 'CHE', '4', '0000-00-00', 'AN'),
('GECTCH007', 'CHE', '5', '2015-04-05', 'AN'),
('GECTCH008', 'CHE', '5', '0000-00-00', 'FN'),
('GECTCH008', 'CHE', '2', '2015-04-05', 'FN'),
('GECTCH009', 'CHE', '5', '0000-00-00', 'AN'),
('GECTCH009', 'CHE', '2', '2015-04-05', 'AN'),
('GECTCH010', 'CHE', '2', '0000-00-00', 'FN'),
('GECTCH010', 'CHE', '3', '2015-04-05', 'FN'),
('GECTCH011', 'CHE', '2', '0000-00-00', 'AN'),
('GECTCH011', 'CHE', '3', '2015-04-05', 'AN'),
('GECTCH012', 'CHE', '3', '0000-00-00', 'FN'),
('GECTCH012', 'CHE', '1', '2015-05-21', '0'),
('GECTCH013', 'CHE', '3', '0000-00-00', 'AN'),
('GECTCH014', 'CHE', '1', '2015-04-05', 'FN'),
('GECTCH015', 'CHE', '1', '2015-04-05', 'AN'),
('GECTCS002', 'CHE', '1', '2015-05-21', '0');

-- --------------------------------------------------------

-- 
-- Table structure for table `login`
-- 

CREATE TABLE `login` (
  `user_name` varchar(10) NOT NULL,
  `password` varchar(20) NOT NULL,
  PRIMARY KEY  (`user_name`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- 
-- Dumping data for table `login`
-- 

INSERT INTO `login` (`user_name`, `password`) VALUES 
('DEFYYU', 'FGBGJM'),
('ETACS066', 'B13CSL03'),
('ETAMECH001', 'B12CH101'),
('ETAMECH002', 'B12CH102'),
('ETAMECH003', 'B12CH103'),
('ETAMECH004', 'B12CH104'),
('ETAMECH005', 'B12CH105'),
('ETAMECH006', 'B12CH106'),
('ETAMECH007', 'B12CH107'),
('ETAMECH008', 'B12CH108'),
('ETAMECH009', 'B12CH109'),
('ETAMECH010', 'B12CH110'),
('ETAMECH011', 'B12CH111'),
('ETAMECH012', 'B12CH112'),
('ETAMECH013', 'B12CH113'),
('ETAMECH014', 'B12CH114'),
('ETAMECH015', 'B12CH115'),
('ETAMECH016', 'B12CH116'),
('ETAMECH017', 'B12CH117'),
('ETAMECH018', 'B12CH118'),
('ETAMECH019', 'B12CH119'),
('ETAMECH020', 'B12CH120'),
('ETAMECH021', 'B12CH121'),
('ETAMECH022', 'B12CH122'),
('ETAMECH023', 'B12CH123'),
('ETAMECH024', 'B12CH124'),
('ETAMECH025', 'B12CH125'),
('ETAMECH026', 'B12CH126'),
('ETAMECH027', 'B12CH127'),
('ETAMECH028', 'B12CH1288'),
('ETAMECH029', 'B12CH129'),
('ETAMECH030', 'B12CH130'),
('ETAMECS065', 'B13CSL04'),
('examplus', 'GECTCS001'),
('GECTCH001', 'PROFESSOR'),
('GECTCH002', 'PROFESSOR'),
('GECTCH003', 'ASSOCIATE PROFESSOR'),
('GECTCH004', 'ASSISTANT PROFESSOR'),
('GECTCH005', 'ASSISTANT PROFESSOR'),
('GECTCH006', 'ASSISTANT PROFESSOR'),
('GECTCH007', 'ASSISTANT PROFESSOR'),
('GECTCH008', 'ASSISTANT PROFESSOR'),
('GECTCH009', 'ASSISTANT PROFESSOR'),
('GECTCH010', 'ASSISTANT PROFESSOR'),
('GECTCH011', 'ASSISTANT PROFESSOR'),
('GECTCH012', 'ASSISTANT PROFESSOR'),
('GECTCH013', 'ASSISTANT PROFESSOR'),
('GECTCH014', 'ASSISTANT PROFESSOR'),
('GECTCH015', 'ASSISTANT PROFESSOR'),
('GECTCS001', 'PROFESSOR'),
('GECTCS002', 'ASSISTANT PROFESSOR'),
('GECTCS003', 'ASSISTANT PROFESSOR'),
('GECTCS004', 'ASSISTANT PROFESSOR'),
('GECTCS005', 'ASSISTANT PROFESSOR'),
('GECTCS006', 'ASSISTANT PROFESSOR'),
('GECTCS007', 'ASSISTANT PROFESSOR'),
('GECTCS008', 'ASSISTANT PROFESSOR'),
('GECTCS009', 'ASSISTANT PROFESSOR'),
('GECTCS010', 'ASSOCIATE PROFESSOR'),
('GECTCS011', 'ASSOCIATE PROFESSOR'),
('GECTCS012', 'ASSOCIATE PROFESSOR'),
('GECTCS013', 'ASSISTANT PROFESSOR'),
('GECTCS031', 'PROFESSOR'),
('GECTPE001', 'ASSISTANT PROFESSOR'),
('GECTPE002', 'ASSISTANT PROFESSOR');

-- --------------------------------------------------------

-- 
-- Table structure for table `marks`
-- 

CREATE TABLE `marks` (
  `semester` varchar(30) NOT NULL,
  `department` varchar(30) NOT NULL,
  `name` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- 
-- Dumping data for table `marks`
-- 

INSERT INTO `marks` (`semester`, `department`, `name`) VALUES 
('S1 & S2', 'CSE', 'New Text Document.txt'),
('S4', 'CSE', 'L-3_Introduction of RDBMS.pdf'),
('S6', 'CSE', 'Normalization.pdf'),
('S6', 'CSE', 'CS 09 605 Computer Graphics MAY 2012.pdf'),
('S3', 'CSE', 'LR parser - Wikipedia, the free encyclopedia.htm');

-- --------------------------------------------------------

-- 
-- Table structure for table `room`
-- 

CREATE TABLE `room` (
  `department` varchar(5) NOT NULL,
  `floor_no` int(5) NOT NULL,
  `room_no` varchar(10) NOT NULL,
  `max_seats` varchar(10) NOT NULL,
  `min_invigilators` varchar(10) NOT NULL,
  `fillA` int(20) NOT NULL,
  `fillB` int(20) NOT NULL,
  PRIMARY KEY  (`department`,`room_no`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- 
-- Dumping data for table `room`
-- 

INSERT INTO `room` (`department`, `floor_no`, `room_no`, `max_seats`, `min_invigilators`, `fillA`, `fillB`) VALUES 
('CHE', 0, '1', '20', '2', 10, 8),
('CHE', 0, '2', '20', '2', 0, 0),
('CHE', 0, '3', '20', '2', 0, 0),
('CHE', 0, '4', '20', '2', 0, 0),
('CHE', 1, '5', '20', '2', 0, 0),
('CSE', 0, '1', '20', '2', 0, 0),
('CSE', 0, '2', '20', '2', 0, 0),
('CSE', 0, '3', '20', '2', 0, 0),
('CSE', 0, '4', '20', '2', 0, 0),
('CSE', 1, '5', '20', '2', 0, 0),
('CSE', 1, '6', '20', '2', 0, 0),
('CSE', 2, '7', '20', '2', 0, 0),
('PDE', 0, '1', '20', '2', 0, 0),
('PDE', 0, '2', '20', '2', 0, 0),
('PDE', 0, '3', '20', '2', 0, 0),
('PDE', 1, '4', '20', '2', 0, 0),
('PDE', 1, '5', '20', '2', 0, 0);

-- --------------------------------------------------------

-- 
-- Table structure for table `s1&s2`
-- 

CREATE TABLE `s1&s2` (
  `sub_code` varchar(15) NOT NULL,
  `sub_name` varchar(70) NOT NULL,
  PRIMARY KEY  (`sub_code`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- 
-- Dumping data for table `s1&s2`
-- 

INSERT INTO `s1&s2` (`sub_code`, `sub_name`) VALUES 
('EN09101', 'ENGINEERING MATHEMATICS I'),
('EN09102', 'ENGINEERING MATHEMATICS II'),
('EN09103', 'ENGINEERING PHYSICS'),
('EN09104', 'ENGINEERING CHEMISTRY'),
('EN09105', 'ENGINEERING MECHANICS'),
('EN09106', 'BASICS OF CIVIL AND MECHANICAL ENGG.'),
('EN09107', 'BASICS OF ELECTRICAL,ELECTRONICS & COMMUNICATION ENGG.'),
('EN09108', 'ENGINEERING GRAPHICS');

-- --------------------------------------------------------

-- 
-- Table structure for table `s3_che`
-- 

CREATE TABLE `s3_che` (
  `sub_code` varchar(15) NOT NULL,
  `sub_name` varchar(75) NOT NULL,
  PRIMARY KEY  (`sub_code`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- 
-- Dumping data for table `s3_che`
-- 

INSERT INTO `s3_che` (`sub_code`, `sub_name`) VALUES 
('CH09303', 'CHEMICAL PROCESS PRINCIPLES'),
('CH09304', 'ORGANIC CHEMISTRY'),
('CH09305', 'CHEMICAL ENGINEERING THERMODYNAMICS I'),
('CH09306', 'MATERIAL SCIENCE & ENGINEERING'),
('EN09301', 'ENGINEERING MATHEMATICS III'),
('EN09302', 'HUMANITIES AND COMMUNICATION SKILLS');

-- --------------------------------------------------------

-- 
-- Table structure for table `s3_cse`
-- 

CREATE TABLE `s3_cse` (
  `sub_code` varchar(15) NOT NULL,
  `sub_name` varchar(75) NOT NULL,
  PRIMARY KEY  (`sub_code`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- 
-- Dumping data for table `s3_cse`
-- 

INSERT INTO `s3_cse` (`sub_code`, `sub_name`) VALUES 
('CS09302', 'DATA STRUCTURES'),
('CS09303', 'DISCRETE COMPUTATIONAL STRUCTURES'),
('CS09305', 'ELECTRONIC CIRCUITS'),
('CS09306', 'SWITCHING THEORY AND LOGIC DESIGN'),
('EN09301', 'ENGINEERING MATHEMATICS III'),
('EN09304', 'HUMANITIES AND COMMUNICATION SKILLS');

-- --------------------------------------------------------

-- 
-- Table structure for table `s3_pde`
-- 

CREATE TABLE `s3_pde` (
  `sub_code` varchar(15) NOT NULL,
  `sub_name` varchar(75) NOT NULL,
  PRIMARY KEY  (`sub_code`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- 
-- Dumping data for table `s3_pde`
-- 

INSERT INTO `s3_pde` (`sub_code`, `sub_name`) VALUES 
('EN09301', 'ENGINEERING MATHEMATICS II'),
('EN09304', 'HILS'),
('PE09302', 'ABCDH'),
('PE09303', 'YIODWB'),
('PE09305', 'HUYTR'),
('PE09306', 'HJKLO');

-- --------------------------------------------------------

-- 
-- Table structure for table `s4_che`
-- 

CREATE TABLE `s4_che` (
  `sub_code` varchar(15) NOT NULL,
  `sub_name` varchar(75) NOT NULL,
  PRIMARY KEY  (`sub_code`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- 
-- Dumping data for table `s4_che`
-- 

INSERT INTO `s4_che` (`sub_code`, `sub_name`) VALUES 
('CH09403', 'FLUID AND PARTICLE MECHANICS'),
('CH09404', 'PHYSICAL AND ANALYTICAL CHEMISTRY'),
('CH09405', 'CHEMICAL ENGINEERING THERMODYNAMICS  II'),
('CH09406', 'PARTICLE TECHNOLOGY'),
('EN09401A', 'ENGINEERING MATHEMATICS IV'),
('EN09402', 'ENVIRONMENTAL SCIENCE');

-- --------------------------------------------------------

-- 
-- Table structure for table `s4_cse`
-- 

CREATE TABLE `s4_cse` (
  `sub_code` varchar(15) NOT NULL,
  `sub_name` varchar(75) NOT NULL,
  PRIMARY KEY  (`sub_code`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- 
-- Dumping data for table `s4_cse`
-- 

INSERT INTO `s4_cse` (`sub_code`, `sub_name`) VALUES 
('CS09403', 'COMPUTER ORGANIZATION AND DESIGN'),
('CS09404', 'PROGRAMMING PARADIGMS'),
('CS09405', 'SYSTEMS PROGRAMMING'),
('CS09406', 'MICROPROCESSOR BASED DESIGN'),
('EN09401B', 'ENGINEERING MATHEMATICS IV'),
('EN09402', 'ENVIRONMENTAL STUDIES');

-- --------------------------------------------------------

-- 
-- Table structure for table `s4_pde`
-- 

CREATE TABLE `s4_pde` (
  `sub_code` varchar(15) NOT NULL,
  `sub_name` varchar(75) NOT NULL,
  PRIMARY KEY  (`sub_code`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- 
-- Dumping data for table `s4_pde`
-- 

INSERT INTO `s4_pde` (`sub_code`, `sub_name`) VALUES 
('EN09401A', 'ENGINEERING MATHEMATICS IV'),
('EN09402', 'ENVIRONMENTAL STUDIES'),
('PE09403', 'MIIHWDW'),
('PE09404', 'HKSDWKDW'),
('PE09405', 'HJLLS'),
('PE09406', 'BNMSXS');

-- --------------------------------------------------------

-- 
-- Table structure for table `s5_che`
-- 

CREATE TABLE `s5_che` (
  `sub_code` varchar(15) NOT NULL,
  `sub_name` varchar(75) NOT NULL,
  PRIMARY KEY  (`sub_code`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- 
-- Dumping data for table `s5_che`
-- 

INSERT INTO `s5_che` (`sub_code`, `sub_name`) VALUES 
('CH09501', 'CHEMICAL REACTION ENGINEERING'),
('CH09502', 'PETROLEUM REFINERY ENGINEERING & PETROCHEMICALS'),
('CH09503', 'PROCESS HEAT TRANSFER'),
('CH09504', 'MASS TRANSFER OPERATIONS I'),
('CH09505', 'ENVIRONMENTAL ENGINEERING'),
('CH09506', 'PROCESS INSTRUMENTATION'),
('PE09501', 'BMAGJJA'),
('PE09502', 'RYUI'),
('PE09503', 'GJSXATXA'),
('PE09504', 'FHJKK'),
('PE09505', 'GJSS'),
('PE09506', 'DETYIO');

-- --------------------------------------------------------

-- 
-- Table structure for table `s5_cse`
-- 

CREATE TABLE `s5_cse` (
  `sub_code` varchar(15) NOT NULL,
  `sub_name` varchar(75) NOT NULL,
  PRIMARY KEY  (`sub_code`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- 
-- Dumping data for table `s5_cse`
-- 

INSERT INTO `s5_cse` (`sub_code`, `sub_name`) VALUES 
('CS09501', 'SOFTWARE ARCHITECTURE AND PROJECT MANAGEMENT'),
('CS09502', 'INDUSTRIAL ECONOMICS AND PRINCIPLES OF MANAGEMENT'),
('CS09503', 'SIGNAL PROCESSING'),
('CS09504', 'OPERATING SYSTEMS'),
('CS09505', 'DIGITAL DATA COMMUNICATION'),
('CS09506', 'THEORY OF COMPUTATION');

-- --------------------------------------------------------

-- 
-- Table structure for table `s5_pde`
-- 

CREATE TABLE `s5_pde` (
  `sub_code` varchar(15) NOT NULL,
  `sub_name` varchar(75) NOT NULL,
  PRIMARY KEY  (`sub_code`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- 
-- Dumping data for table `s5_pde`
-- 


-- --------------------------------------------------------

-- 
-- Table structure for table `s6_che`
-- 

CREATE TABLE `s6_che` (
  `sub_code` varchar(15) NOT NULL,
  `sub_name` varchar(75) NOT NULL,
  PRIMARY KEY  (`sub_code`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- 
-- Dumping data for table `s6_che`
-- 

INSERT INTO `s6_che` (`sub_code`, `sub_name`) VALUES 
('CH09601', 'CHEMICAL PROCESS INDUSTRIES'),
('CH09602', 'PROCESS DYNAMICS & CONTROL'),
('CH09603', 'MASS TRANSFER OPERATIONS II'),
('CH09604', 'ECONOMICS AND MANAGEMENT OF CHEMICAL INDUSTRIES'),
('CH09605', 'ENERGY ENGINEERING'),
('CH09Lxx', 'ELECTIVE I');

-- --------------------------------------------------------

-- 
-- Table structure for table `s6_cse`
-- 

CREATE TABLE `s6_cse` (
  `sub_code` varchar(15) NOT NULL,
  `sub_name` varchar(75) NOT NULL,
  PRIMARY KEY  (`sub_code`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- 
-- Dumping data for table `s6_cse`
-- 

INSERT INTO `s6_cse` (`sub_code`, `sub_name`) VALUES 
('CS09601', 'EMBEDDED SYSTEMS'),
('CS09602', 'COMPILER DESIGN'),
('CS09603', 'COMPUTER NETWORKS'),
('CS09604', 'DATABASE MANAGEMENT SYSTEMS'),
('CS09605', 'COMPUTER GRAPHICS'),
('CS09606', 'ELECTIVE I');

-- --------------------------------------------------------

-- 
-- Table structure for table `s6_pde`
-- 

CREATE TABLE `s6_pde` (
  `sub_code` varchar(15) NOT NULL,
  `sub_name` varchar(75) NOT NULL,
  PRIMARY KEY  (`sub_code`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- 
-- Dumping data for table `s6_pde`
-- 

INSERT INTO `s6_pde` (`sub_code`, `sub_name`) VALUES 
('PE09601', 'YIWGQ'),
('PE09602', 'VNKDSDS'),
('PE09603', 'GSWSW'),
('PE09604', 'GSWSWS'),
('PE09605', 'VSWWSW'),
('PE09606', 'QWQYU');

-- --------------------------------------------------------

-- 
-- Table structure for table `s7_che`
-- 

CREATE TABLE `s7_che` (
  `sub_code` varchar(15) NOT NULL,
  `sub_name` varchar(75) NOT NULL,
  PRIMARY KEY  (`sub_code`,`sub_name`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- 
-- Dumping data for table `s7_che`
-- 

INSERT INTO `s7_che` (`sub_code`, `sub_name`) VALUES 
('CH09701', 'CHEMICAL ENGINEERING DESIGN & DRAWING'),
('CH09702', 'TRANSPORT PHENOMENA'),
('CH09703', 'SAFETY ENGINEERING IN PROCESS PLANS'),
('CH09704', 'BIOCHEMICAL ENGINEERING'),
('CH09Lxx', 'ELECTIVE II'),
('CH09Lxx', 'ELECTIVE III');

-- --------------------------------------------------------

-- 
-- Table structure for table `s7_cse`
-- 

CREATE TABLE `s7_cse` (
  `sub_code` varchar(15) NOT NULL,
  `sub_name` varchar(75) NOT NULL,
  PRIMARY KEY  (`sub_code`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- 
-- Dumping data for table `s7_cse`
-- 

INSERT INTO `s7_cse` (`sub_code`, `sub_name`) VALUES 
('CS09701', 'WIRELESS NETWORKS AND MOBILE COMMUNICATION SYSTEMS'),
('CS09702', 'DESIGN AND ANALYSIS OF ALGORITHMS'),
('CS09703', 'INTERNET TECHNOLOGY'),
('CS09704', 'CRYPTOGRAPHY AND NETWORK SECUIRITY'),
('CS09705', 'ELECTIVE II'),
('CS09706', 'ELECTIVE III');

-- --------------------------------------------------------

-- 
-- Table structure for table `s7_pde`
-- 

CREATE TABLE `s7_pde` (
  `sub_code` varchar(15) NOT NULL,
  `sub_name` varchar(75) NOT NULL,
  PRIMARY KEY  (`sub_code`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- 
-- Dumping data for table `s7_pde`
-- 

INSERT INTO `s7_pde` (`sub_code`, `sub_name`) VALUES 
('PE09701', 'YUWGWG'),
('PE09702', 'QWER'),
('PE09703', 'QWEEE'),
('PE09704', 'JKLSDS'),
('PE09705', 'HJKL'),
('PE09706', 'ELECTIVE III');

-- --------------------------------------------------------

-- 
-- Table structure for table `s8_che`
-- 

CREATE TABLE `s8_che` (
  `sub_code` varchar(15) NOT NULL,
  `sub_name` varchar(75) NOT NULL,
  PRIMARY KEY  (`sub_code`,`sub_name`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- 
-- Dumping data for table `s8_che`
-- 

INSERT INTO `s8_che` (`sub_code`, `sub_name`) VALUES 
('CH09801', 'CHEMICAL ENGINEERING DESIGN & DRAWING II'),
('CH09802', 'OPTIMIZATION OF CHEMICAL PROCESSES'),
('CH09Lxx', 'ELECTIVE IV'),
('CH09Lxx', 'ELECTIVE V');

-- --------------------------------------------------------

-- 
-- Table structure for table `s8_cse`
-- 

CREATE TABLE `s8_cse` (
  `sub_code` varchar(15) NOT NULL,
  `sub_name` varchar(75) NOT NULL,
  PRIMARY KEY  (`sub_code`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- 
-- Dumping data for table `s8_cse`
-- 

INSERT INTO `s8_cse` (`sub_code`, `sub_name`) VALUES 
('CS09801', 'COMPUTER ARCHITECTURE AND PARALLEL PROCESSING'),
('CS09802', 'DATA MINING AND WAREHOUSING'),
('CS09803', 'ELECTIVE IV'),
('CS09804', 'ELECTIVE V');

-- --------------------------------------------------------

-- 
-- Table structure for table `s8_pde`
-- 

CREATE TABLE `s8_pde` (
  `sub_code` varchar(15) NOT NULL,
  `sub_name` varchar(75) NOT NULL,
  PRIMARY KEY  (`sub_code`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- 
-- Dumping data for table `s8_pde`
-- 

INSERT INTO `s8_pde` (`sub_code`, `sub_name`) VALUES 
('', ''),
('PE09801', 'GHJKK'),
('PE09802', 'HSTYW'),
('PE09803', 'GSJKWWH'),
('PE09804', 'ELECTIVE V');

-- --------------------------------------------------------

-- 
-- Table structure for table `studentdetails`
-- 

CREATE TABLE `studentdetails` (
  `name` varchar(20) NOT NULL,
  `enrollment_no` varchar(15) NOT NULL,
  `admission_no` varchar(15) NOT NULL,
  `acadamic_year` varchar(15) NOT NULL,
  `department` varchar(5) NOT NULL,
  `semester` varchar(5) NOT NULL,
  `address` varchar(50) NOT NULL,
  `date_of_birth` varchar(15) NOT NULL,
  `gender` varchar(7) NOT NULL,
  `contact_no` varchar(12) NOT NULL,
  `email_id` varchar(25) NOT NULL,
  PRIMARY KEY  (`enrollment_no`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- 
-- Dumping data for table `studentdetails`
-- 

INSERT INTO `studentdetails` (`name`, `enrollment_no`, `admission_no`, `acadamic_year`, `department`, `semester`, `address`, `date_of_birth`, `gender`, `contact_no`, `email_id`) VALUES 
('FGG', 'DEFYYU', 'FGBGJM', '2012-2016', 'CHE', 'S6', 'TY', '4-mar-1992', 'Male', '9874561230', 'ddd@gmail.com'),
('AMBILY BABY', 'ETALECH001', 'B11CH101', '2011-2015', 'CHE', 'S8', 'THRISSUR DIST,KERALA,INDIA', '14-nov-1993', 'FEMALE', '9744970785', 'ambilybaby@gmail.com'),
('ANSA PAULY', 'ETALECH002', 'B11CH102', '2011-2015', 'CHE', 'S8', 'THRISSUR DIST,KERALA,INDIA', '16-sep-1992', 'FEMALE', '9744081084', 'ansapauly@gmail.com'),
('AMRUTHA RAJAN', 'ETALECH003', 'B11CH103', '2011-2015', 'CHE', 'S8', 'THRISSUR DIST,KERALA,INDIA', '16-nov-1992', 'FEMALE', '9747084451', 'amrutharajan@gmail.com'),
('ANI THOMAS', 'ETALECH004', 'B11CH104', '2011-2015', 'CHE', 'S8', 'THRISSUR DIST, KERALA,INDIA', '12-oct-1993', 'FEMALE', '9946039380', 'anithomas@gmail.com'),
('ANIL NAIR', 'ETALECH005', 'B11CH105', '2011-2015', 'CHE', 'S8', 'THRISSUR DIST, KERALA, INDIA', '14-mar-1993', 'MALE', '9037004374', 'anilnair@gmail.com'),
('ANOOP P', 'ETALECH006', 'B11CH106', '2011-2015', 'CHE', 'S8', 'THRISSUR DIST, KERALA, INDIA', '1-aug-1993', 'MALE', '9947974778', 'anoopp@gmail.com'),
('ANTONY M', 'ETALECH007', 'B11CH107', '2011-2015', 'CHE', 'S8', 'THRISSUR DIST, KERALA, INDIA', '16-may-1993', 'MALE', '9847009928', 'antonym@gmail.com'),
('CHRISTOPHER BABU', 'ETALECH008', 'B11CH108', '2011-2015', 'CHE', 'S8', 'THRISSUR DIST, KERALA, INDIA', '18-mar-1993', 'MALE', '9809570427', 'christopherbabu@gmail.com'),
('DEEPAK G', 'ETALECH009', 'B11CH109', '2011-2015', 'CHE', 'S8', 'THRISSUR DIST, KERALA, INDIA', '19-feb-1993', 'MALE', '9745823700', 'deepakg@gmail.com'),
('DEVIKA N', 'ETALECH010', 'B11CH110', '2011-2015', 'CHE', 'S8', 'THRISSUR DIST, KERALA, INDIA', '13-sep-1993', 'FEMALE', '9809570427', 'devikan@gmail.com'),
('DILEEP B', 'ETALECH011', 'B11CH111', '2011-2015', 'CHE', 'S8', 'THRISSUR DIST, KERALA, INDIA', '15-sep-1993', 'MALE', '9846126634', 'dileepb@gmail.com'),
('EMY PAULSON', 'ETALECH012', 'B11CH112', '2011-2015', 'CHE', 'S8', 'THRISSUR DIST, KERALA, INDIA', '7-oct-1993', 'FEMALE', '9495853588', 'emypaulson@gmail.com'),
('GAYATHRI CN', 'ETALECH013', 'B11CH113', '2011-2015', 'CHE', 'S8', 'THRISSUR DIDT, KERALA, INDIA', '15-nov-1993', 'FEMALE', '9849709687', 'gayathricn@gmail.com'),
('GAYATHRI R', 'ETALECH014', 'B11CH114', '2011-2015', 'CHE', 'S8', 'THRISSUR DIST, KERALA, INDIA', '14-jun-1993', 'FEMALE', '9847622274', 'gayathrir@gmail.com'),
('GOKUL ANIL', 'ETALECH015', 'B11CH115', '2011-2015', 'CHE', 'S8', 'THRISSUR DIST, KERALA, INDIA', '11-apr-1993', 'MALE', '9446587919', 'gokulanil@gmail.com'),
('JAYAN BABU', 'ETALECH016', 'B11CH116', '2011-2015', 'CHE', 'S8', 'THRISSUR DIST, KERALA, INDIA', '15-dec-1993', 'MALE', '9894415415', 'jayanbabu@gmail.com'),
('JASMIN VARGHESE', 'ETALECH017', 'B11CH117', '2011-2015', 'CHE', 'S8', 'THRISSUR DIST, KERAKA, INDIA', '18-oct-1993', 'FEMALE', '9388552279', 'jasminvarghese@gmail.com'),
('JEEVA CHANDRAN', 'ETALECH018', 'B11CH118', '2011-2015', 'CHE', 'S8', 'THRISSUR DIST, KERALA, INDIA', '12-jul-1992', 'FEMALE', '9840923071', 'jeevachandran@gmail.com'),
('JINTO PAUL', 'ETALECH019', 'B11CH119', '2011-2015', 'CHE', 'S8', 'THRISSUR DIST, KERALA, INDIA', '2-may-1993', 'MALE', '9745509928', 'jintopaul@gmail.com'),
('JOBY MATHEW', 'ETALECH020', 'B11CH120', '2011-2015', 'CHE', 'S8', 'THRISSUR DIST,KERALA,INDIA', '17-jun-1992', 'MALE', '9447616163', 'jobymathew@gmail.com'),
('KRISHNA M', 'ETALECH021', 'B11CH121', '2011-2015', 'CHE', 'S8', 'THRISSUR DIST,KERALA,INDIA', '11-jun-1993', 'FEMALE', '9845375348', 'krishnam@gmail.com'),
('KRISHIKESH M NAIR', 'ETALECH022', 'B11CH122', '2011-2015', 'CHE', 'S8', 'THRISSUR DIST,KERALA,INDIA', '13-sep-1992', 'MALE', '9941984185', 'krishikseh@gmail.com'),
('MANJU PAUL', 'ETALECH023', 'B11CH123', '2011-2015', 'CHE', 'S8', 'THRISSUR DIST,KERALA,INDIA', '15-aug-1995', 'FEMALE', '9840781914', 'manjupaul@gmail.com'),
('MEGNA VIJAYAN', 'ETALECH024', 'B11CH124', '2011-2015', 'CHE', 'S8', 'THRISSUR DIST,KERALA,INDIA', '14-oct-1992', 'FEMALE', '9447657499', 'meghnavijayan@gmail.com'),
('NASAR NAVAS', 'ETALECH025', 'B11CH125', '2011-2015', 'CHE', 'S8', 'THRISSUR DIST,KERALA,INDIA', '16-aug-1993', 'MALE', '9495025395', 'nasarnavas@gmail.com'),
('ORMA VASUDEVAN', 'ETALECH026', 'B11CH126', '2011-2015', 'CHE', 'S8', 'THRISSUR DIST,KERALA,INDIA', '18-jul-1993', 'MALE', '9899942682', 'ormavasudevan@gmail.com'),
('PARAVATHY PS', 'ETALECH027', 'B11CH127', '2011-2015', 'CHE', 'S8', 'THRISSUR DIST,KERALA,INDIA', '13-apr-1993', 'FEMALE', '9940022597', 'paravathyps@gmail.com'),
('RAMESH RAJ', 'ETALeCH028', 'B11CH128', '2011-2015', 'CHE', 'S8', 'THRISSUR DIST,KERALA,INDIA', '1-jan-1994', 'MALE', '9946134375', 'rameshraj@gmail.com'),
('RAGAV KUMAR', 'ETALECH029', 'B11CH129', '2011-2015', 'CHE', 'S8', 'THRISSUR DIST,KERALA,INDIA', '16-apr-1993', 'MALE', '9840629384', 'ragavkumar@gmail.com'),
('SANKAR S', 'ETALECH030', 'B11CH130', '2011-2015', 'CHE', 'S8', 'THRISSUR DIST,KERALA,INDIA', '25-jun-1993', 'MALE', '9790708247', 'sankars@gmail.com'),
('ARAVIND U', 'ETALEPE001', 'B11PE101', '2011-2015', 'PDE', 'S8', 'THRISSUR DIST, KERALA, INDIA', '2-feb-1994', 'MALE', '9840403643', 'aravindu@gmail.com'),
('ARJUN S', 'ETALEPE002', 'B11PE102', '2011-2015', 'PDE', 'S8', 'THRISSUR DIST, KERALA, INDIA', '20-jan-1993', 'MALE', '9746254708', 'arjuns@gmail.com'),
('ASWATHY E', 'ETALEPE003', 'B11PE103', '2011-2015', 'PDE', 'S8', 'THRISSUR DIST, KERALA, INDIA', '18-apr-1994', 'FEMALE', '9744489458', 'aswathye@gmail.com'),
('ASWIN P', 'ETALEPE004', 'B11PE104', '2011-2015', 'PDE', 'S8', 'THRISSUR DIST, KERALA, INDIA', '15-jun-1993', 'MALE', '9846889758', 'aswinp@gmail.com'),
('GOPIKA G', 'ETALEPE005', 'B11PE105', '2011-2015', 'PDE', 'S8', 'THRISSUR DIST, KERALA, INDIA', '12-may-1994', 'FEMALE', '9846121973', 'gopikag@gmail.com'),
('HARITHA PRINCE', 'ETALEPE006', 'B11PE106', '2011-2015', 'PDE', 'S8', 'THRISSUR DIST, KERALA, INDIA', '14-mar-1993', 'FEMALE', '9874563218', 'harithaprince@gmail.com'),
('JENY TJ', 'ETALEPE007', 'B11PE107', '2011-2015', 'PDE', 'S8', 'THRISSUR DIST, KERALA, INDIA', '15-feb-1993', 'FEMALE', '9746056427', 'jenytj@gmail.com'),
('JITHIN T', 'ETALEPE008', 'B11PE108', '2011-2015', 'PDE', 'S8', 'THRISSUR DIST, KERALA, INDIA', '14-sep-1994', 'MALE', '9496175609', 'jithint@gmail.com'),
('MIDHUNLAL PS', 'ETALEPE009', 'B11PE109', '2011-2015', 'PDE', 'S8', 'THRISSUR DIST, KERALA, INDIA', '8-feb-1993', 'MALE', '9447316001', 'midhunlalps@gmail.com'),
('MOHAMMAD CN', 'ETALEPE010', 'B11PE110', '2011-2015', 'PDE', 'S8', 'THRISSIR DIST, KERALA, INDIA', '14-mar-1994', 'MALE', '9941983886', 'mohammadcn@gmail.com'),
('NITHIN VIJAY', 'ETALEPE011', 'B11PE111', '2011-2015', 'PDE', 'S8', 'THRISSUR DIST, KERALA, INDIA', '10-jan-1993', 'MALE', '9884336939', 'nithinvijay@gmail.com'),
('NIKHIL ANTONY', 'ETALEPE012', 'B11PE112', '2011-2015', 'PDE', 'S8', 'THRISSUR DIST, KERALA, INDIA', '11-may-1994', 'MALE', '9952044141', 'nikhilantony@gmail.com'),
('NITHEESH VIJAY', 'ETALEPE013', 'B11PE113', '2011-2015', 'PDE', 'S8', 'THRISSUR DIST, KERALA, INDIA', '15-jun-1993', 'MALE', '9388801000', 'nitheeshvijay@gmail.com'),
('NITHYA A', 'ETALEPE014', 'B11PE114', '2011-2015', 'PDE', 'S8', 'THRISSUR DIST, KERALA, INDIA', '19-aug-1994', 'FEMALE', '9633537641', 'nithyaa@gmail.com'),
('NIVEDHITHA PK', 'ETALEPE015', 'B11PE115', '2011-2015', 'PDE', 'S8', 'THRISSUR DIST, KERALA, INDIA', '11-mar-1994', 'FEMALE', '9447834993', 'nivedhithapk@gmail.com'),
('NOORUL KK', 'ETALEPE016', 'B11PE116', '2011-2015', 'PDE', 'S8', 'THRISSUR DIST, KERALA, INDIA', '6-feb-1993', 'MALE', '9377412904', 'noorulkk@gmail.com'),
('PRANAV AV', 'ETALEPE017', 'B11PE117', '2011-2015', 'PDE', 'S8', 'THRISSUR DIST, KERALA, INDIA', '12-apr-1994', 'MALE', '9946275560', 'pranavav@gmail.com'),
('PRASAD VM', 'ETALEPE018', 'B11PE118', '2011-2015', 'PDE', 'S8', 'THRISSUR DIST, KERALA, INDIA', '17-may-1993', 'MALE', '9387837187', 'prasadvm@gmail.com'),
('PRAVEEN PRADEEP', 'ETALEPE019', 'B11PE119', '2011-2015', 'PDE', 'S8', 'THRISSUR DIST, KERALA, INDIA', '7-jun-1994', 'MALE', '9048323703', 'praveenpradeep@gmail.com'),
('PRAVEEN S', 'ETALEPE020', 'B11PE120', '2011-2015', 'PDE', 'S8', 'THRISSUR DIST, KERALA, INDIA', '15-nov-1993', 'MALE', '9447061752', 'praveens@gmail.com'),
('RAHUL CU', 'ETALEPE021', 'B11PE121', '2011-2015', 'PDE', 'S8', 'THRISSUR DIST, KERALA, INDIA', '13-apr-1993', 'MALE', '9048374819', 'rahulcu@gmail.com'),
('RAHUL P', 'ETALEPE022', 'B11PE122', '2011-2015', 'PDE', 'S8', 'THRISSUR DIST, KERALA, INDIA', '16-dec-1994', 'MALE', '9447055770', 'rahulp@gmail.com'),
('RAHUL RAJEEV', 'ETALEPE023', 'B11PE123', '2011-2015', 'PDE', 'S8', 'THRISSUR DIST, KERALA, INDIA', '7-jan-1994', 'MALE', '9846083353', 'rahulrajeev@gmail.com'),
('RAMESH BABU', 'ETALEPE024', 'B11PE124', '2011-2015', 'PDE', 'S8', 'THRISSUR DIST, KERALA, INDIA', '18-apr-1993', 'MALE', '9447712977', 'rameshbabu@gmail.com'),
('RATHEESH CT', 'ETALEPE025', 'B11PE125', '2011-2015', 'PDE', 'S8', 'THRISSUR DIST, KERALA, INDIA', '10-jun-1994', 'MALE', '9946039380', 'ratheeshct@gmail.com'),
('ROHITH K', 'ETALEPE026', 'B11PE126', '2011-2015', 'PDE', 'S8', 'THRISSUR DIST, KERALA, INDIA', '11-jan-1994', 'MALE', '9446303011', 'rohithk@gmail.com'),
('SAGAR BABY', 'ETALEPE027', 'B11PE127', '2011-2015', 'PDE', 'S8', 'THRISSUR DIST,KERALA,INDIA', '15-jul-1994', 'MALE', '9847374561', 'sagarbaby@gmail.com'),
('SAJI CHERIYAN', 'ETALEPE028', 'B11PE128', '2011-2015', 'PDE', 'S8', 'THRISSUR DIST,KERALA,INDIA', '15-jul-1993', 'MALE', '9846277052', 'sajicheriyan@gmail.com'),
('SAJAY GOPAL', 'ETALEPE029', 'B11PE129', '2011-2015', 'PDE', 'S8', 'THRISSUR DIST,KERALA,INDIA', '16-apr-1994', 'MALE', '9446869919', 'sanjaygopal@gmail.com'),
('SARATH BABU', 'ETALEPE030', 'B11PE130', '2011-2015', 'PDE', 'S8', 'THRISSUR DIST,KERALA,INDIA', '18-nov-1993', 'MALE', '9840200802', 'sarathbabu@gmail.com'),
('AISWARYA MOORTHI', 'ETAMECH001', 'B12CH101', '2012-2016', 'CHE', 'S6', 'THRISSUR DIST,KERALA,INDIA', '17-apr-1994', 'FEMALE', '7894561230', 'amoorthi@gmail.com'),
('AJITH K', 'ETAMECH002', 'B12CH102', '2012-2016', 'CHE', 'S6', 'THRISSUR DIST,KERALA,INDIA', '18-apr-1994', 'MALE', '7777454520', 'ajithk@gmail.com'),
('ACHIL MELITT', 'ETAMECH003', 'B12CH103', '2012-2016', 'CHE', 'S6', 'THRISSUR DIST,KERALA,INDIA', '17-nov-1992', 'MALE', '8989635241', 'achilmtt@gmail.com'),
('AKHINLAL S', 'ETAMECH004', 'B12CH104', '2012-2016', 'CHE', 'S6', 'THRISSUR DIST,KERALA,INDIA', '12-jul-1994', 'MALE', '7898456512', 'akhinlal@gmail.com'),
('AKSHAYA P', 'ETAMECH005', 'B12CH105', '2012-2016', 'CHE', 'S6', 'THRISSUR DIST,KERALA,INDIA', '9-jun-1993', 'FEMALE', '9846610123', 'akshayap@gmail.com'),
('ALBIN SUNNY', 'ETAMECH006', 'B12CH106', '2012-2016', 'CHE', 'S6', 'THRISSUR DIST,KERALA,INDIA', '4-aug-1993', 'MALE', '9846610111', 'albinsunny@gmail.com'),
('ALBINCE PALICARA', 'ETAMECH007', 'B12CH107', '2012-2016', 'CHE', 'S6', 'THRISSUR DIST,KERALA,INDIA', '11-jul-1993', 'MALE', '9845510120', 'albincepali@gmail.com'),
('BADHHRA HRISHIKESH', 'ETAMECH008', 'B12CH108', '2012-2016', 'CHE', 'S6', 'THRISSUR DIST,KERALA,INDIA', '25-feb-1994', 'FEMALE', '9845301245', 'bdhrahrishi@gmail.com'),
('BIBIN KS', 'ETAMECH009', 'B12CH109', '2012-2016', 'CHE', 'S6', 'THRISSUR DIST,KERALA,INDIA', '15-oct-1994', 'MALE', '9845657898', 'bibinks@gmail.com'),
('CHALAMBA', 'ETAMECH010', 'B12CH110', '2012-2016', 'CHE', 'S6', 'THRISSUR DIST,KERALA,INDIA', '30-aug-1993', 'MALE', '7894445615', 'chalamba@gmail.com'),
('CHINNAN OP', 'ETAMECH011', 'B12CH111', '2012-2016', 'CHE', 'S6', 'THRISSUR DIST,KERALA,INDIA', '18-jul-1993', 'MALE', '9638527410', 'chinnan@gmail.com'),
('JITHIN P', 'ETAMECH012', 'B12CH112', '2012-2016', 'CHE', 'S6', 'THRISSUR DIST,KERALA,INDIA', '13-may-1992', 'MALE', '7531598920', 'jithinp@gmail.com'),
('JITH KR', 'ETAMECH013', 'B12CH113', '2012-2016', 'CHE', 'S6', 'THRISSUR DIST,KERALA,INDIA', '15-nov-1994', 'MALE', '8520147963', 'jithkr@gmail.com'),
('JITHESH VIJAYAKUMAR', 'ETAMECH014', 'B12CH114', '2012-2016', 'CHE', 'S6', 'THRISSUR DIST,KERALA,INDIA', '15-may-1993', 'MALE', '9845644201', 'jitheshvij@gmail.com'),
('JOHN SUNNY', 'ETAMECH015', 'B12CH115', '2012-2016', 'CHE', 'S6', 'THRISSUR DIST,KERALA,INDIA', '6-jul-1994', 'MALE', '98745623120', 'sunnyjohn@gmail.com'),
('KALABHA VINOD', 'ETAMECH016', 'B12CH116', '2012-2016', 'CHE', 'S6', 'THRISSUR DIST,KERALA,INDIA', '5-jul-1992', 'MALE', '9872581472', 'kalabhavinod@gmail.com'),
('KARTHY VASUUDEV', 'ETAMECH017', 'B12CH117', '2012-2016', 'CHE', 'S6', 'THRISSUR DIST,KERALA,INDIA', '11-nov-1995', 'FEMALE', '8745213265', 'karthyvasudev@gmail.com'),
('KARHIK NAIR', 'ETAMECH018', 'B12CH118', '2012-2016', 'CHE', 'S6', 'THRISSUR DIST,KERALA,INDIA', '4-feb-1994', 'MALE', '8520025896', 'karthiknair@gmail.com'),
('LAKSHMI', 'ETAMECH019', 'B12CH119', '2012-2016', 'CHE', 'S6', 'THRISSUR DIST,KERALA,INDIA', '16-aug-1993', 'FEMALE', '7541268930', 'lakshmi@gmail.com'),
('LINDA PAUL', 'ETAMECH020', 'B12CH120', '2012-2016', 'CHE', 'S6', 'THRISSUR DIST,KERALA,INDIA', '19-nov-1994', 'FEMALE', '7586958412', 'lindapaul@gmail.com'),
('LISSA PAULY', 'ETAMECH021', 'B12CH121', '2012-2016', 'CHE', 'S6', 'THRISSUR DIST,KERALA,INDIA', '30-dec-1994', 'FEMALE', '9966330022', 'lissa@gmail.com'),
('MANASI NAIR', 'ETAMECH022', 'B12CH122', '2012-2016', 'CHE', 'S6', 'THRISSUR DIST,KERALA,INDIA', '13-mar-1994', 'FEMALE', '7845659832', 'manasy@gmail.com'),
('MANU MOHAN', 'ETAMECH023', 'B12CH123', '2012-2016', 'CHE', 'S6', 'THRISSUR DIST,KERALA,INDIA', '12-aug-1992', 'MALE', '9512314789', 'manumohan@gmail.com'),
('MEERA VARGEESE', 'ETAMECH024', 'B12CH124', '2012-2016', 'CHE', 'S6', 'THRISSUR DIST,KERALA,INDIA', '24-apr-1994', 'FEMALE', '8461034789', 'meeravarheese@gmail.com'),
('MEGHA RUBY', 'ETAMECH025', 'B12CH125', '2012-2016', 'CHE', 'S6', 'THRISSUR DIST,KERALA,INDIA', '14-apr-1993', 'FEMALE', '74185296302', 'megharuby@gmail.com'),
('NAMITHA VB', 'ETAMECH026', 'B12CH126', '2012-2016', 'CHE', 'S6', 'THRISSUR DIST,KERALA,INDIA', '23-may-1993', 'FEMALE', '8547963210', 'namithavb@gmail.com'),
('NAMRATHA MENON', 'ETAMECH027', 'B12CH127', '2012-2016', 'CHE', 'S6', 'THRISSUR DIST,KERALA,INDIA', '22-feb-1992', 'FEMALE', '8541203678', 'namrathamenon@gmail.com'),
('TAPAN T', 'ETAMECH028', 'B12CH128', '2012-2016', 'CHE', 'S6', 'THRISSUR DIST,KERALA,INDIA', '13-sep-1993', 'MALE', '7410009998', 'tapan@gmail.com'),
('VIPIN MONDY', 'ETAMECH029', 'B12CH129', '2012-2016', 'CHE', 'S6', 'THRISSUR DIST,KERALA,INDIA', '15-oct-1993', 'MALE', '7772589634', 'vipinmondy@gmail.com'),
('VIPIN DAS', 'ETAMECH030', 'B12CH130', '2012-2016', 'CHE', 'S6', 'THRISSUR DIST,KERALA,INDIA', '25-may-1994', 'MALE', '85274196378', 'vipindas@gmail.com'),
('ARYA A A', 'ETAMECS065', 'B13CSL04', '2012-2016', 'CSE', 'S6', 'ALIPARAMBIL', '14-apr-1992', 'Female', '9539293807', 'ariyaasokan@gmail.com'),
('AKASHCHAND V', 'ETAMEPE001', 'B12PE101', '2012-2016', 'PDE', 'S6', 'THRISSUR DIST,KERALA,INDIA', '5-feb-1994', 'MALE', '9380739691', 'akashchand@gmail.com'),
('ANISHAD TA', 'ETAMEPE002', 'B12PE102', '2012-2016', 'PDE', 'S6', 'THRISSUR DIST,KERALA,INDIA', '5-apr-1994', 'MALE', '9840365002', 'anishad@gmail.com'),
('ALBIN ANTO', 'ETAMEPE003', 'B12PE103', '2012-2016', 'PDE', 'S6', 'THRISSUR DIST,KERALA,INDIA', '18-dec-1994', 'MALE', '9840078510', 'albinanto@gmail.com'),
('ALOK GS', 'ETAMEPE004', 'B12PE104', '2012-2016', 'PDE', 'S6', 'THRISSUR DIST,KERALA,INDIA', '19-dec-1994', 'MALE', '9841059690', 'alokgs@gmail.com'),
('BINTO ANTONY', 'ETAMEPE005', 'B12PE105', '2012-2016', 'PDE', 'S6', 'THRISSUR DIST,KERALA,INDIA', '14-nov-1995', 'MALE', '9442653783', 'bintoantony@gmail.com'),
('CHAND DT', 'ETAMEPE006', 'B12PE106', '2012-2016', 'PDE', 'S6', 'THRISSUR DIST,KERALA,INDIA', '10-nov-1995', 'MALE', '9841059690', 'chanddt@gmail.com'),
('GOUTHAM NAIR', 'ETAMEPE007', 'B12PE107', '2012-2016', 'PDE', 'S6', 'THRISSUR DIST,KERALA,INDIA', '16-oct-1994', 'MALE', '9840747396', 'gouthamnair@gmail.com'),
('GOUTHAM PS', 'ETAMEPE008', 'B12PE108', '2012-2016', 'PDE', 'S6', 'THRISSUR DIST,KERALA,INDIA', '17-nov-1995', 'MALE', '9847209189', 'gouthamps@gmail.com'),
('JOSE KUMAR P', 'ETAMEPE009', 'B12PE109', '2012-2016', 'PDE', 'S6', 'THRISSUR DIST,KERALA,INDIA', '18-oct-1994', 'MALE', '9446239134', 'josekumarp@gmail.com'),
('GEORGE VARGHESE', 'ETAMEPE010', 'B12PE110', '2012-2016', 'PDE', 'S6', 'THRISSUR DIST,KERALA,INDIA', '14-sep-1995', 'MALE', '9495190647', 'georgevarghese@gmail.com'),
('KARTHIK PAUL', 'ETAMEPE011', 'B12PE111', '2012-2016', 'PDE', 'S6', 'THRISSUR DIST,KERALA,INDIA', '12-jul-1994', 'MALE', '9447617621', 'karthikpaul@gmail.com'),
('KIRAN VASUDEVAN', 'ETAMEPE012', 'B12PE112', '2012-2016', 'PDE', 'S6', 'THRISSUR DIST,KERALA,INDIA', '4-sep-1995', 'MALE', '9744830447', 'kiranvasudevan@gmail.com'),
('PRATHAP PK', 'ETAMEPE013', 'B12PE113', '2012-2016', 'PDE', 'S6', 'THRISSUR DIST,KERALA,INDIA', '14-mar-1995', 'MALE', '9840296892', 'prathappk@gmail.com'),
('PRADEEP NAIR', 'ETAMEPE014', 'B12PE114', '2011-2015', 'PDE', 'S6', 'THRISSUR DIST,KERALA,INDIA', '4-jul-1994', 'MALE', '9241033189', 'pradeepnair@gmail.com'),
('RAVAN KUMAR', 'ETAMEPE015', 'B12PE115', '2012-2016', 'PDE', 'S6', 'THRISSUR DIST,KERALA,INDIA', '7-mar-1995', 'MALE', '9731268434', 'ravankumar@gmail.com'),
('REJOY DG', 'ETAMEPE016', 'B12PE116', '2012-2016', 'PDE', 'S6', 'THRISSUR DIST,KERALA,INDIA', '3-mar-1995', 'MALE', '9846277783', 'rejoydg@gmail.com'),
('RANJITH CN', 'ETAMEPE017', 'B12PE117', '2012-2016', 'PDE', 'S6', 'THRISSUR DIST,KERALA,INDIA', '9-dec-1995', 'MALE', '9941310813', 'ranjithcn@gmail.com'),
('SHUHAIB C', 'ETAMEPE018', 'B12PE118', '2012-2016', 'PDE', 'S6', 'THRISSUR DIST,KERALA,INDIA', '17-aug-1994', 'MALE', '9846224249', 'shuhaibc@gmail.com'),
('SOORAJ PN', 'ETAMEPE019', 'B12PE119', '2012-2016', 'PDE', 'S6', 'THRISSUR DIST,KERALA,INDIA', '9-jan-1994', 'MALE', '9840573277', 'soorajpn@gmail.com'),
('SOORAJ K', 'ETAMEPE020', 'B12PE120', '2012-2016', 'PDE', 'S6', 'THRISSUR DIST,KERALA,INDIA', '2-feb-1995', 'MALE', '9747203785', 'soorajk@gmail.com'),
('VAISHAK MENON', 'ETAMEPE021', 'B12PE121', '2012-2016', 'PDE', 'S6', 'THRISSUR DIST,KERALA,INDIA', '10-nov-1994', 'MALE', '9343484436', 'vaishakmenon@gmail.com'),
('VIJAY G', 'ETAMEPE022', 'B12PE122', '2012-2016', 'PDE', 'S6', 'THRISSUR DIST,KERALA,INDIA', '1-jan-1994', 'MALE', '9846615885', 'vijayg@gmail.com'),
('VINAY R', 'ETAMEPE023', 'B12PE123', '2012-2016', 'PDE', 'S6', 'THRISSUR DIST,KERALA,INDIA', '30-aug-1995', 'MALE', '9446355116', 'vinayr@gmail.com'),
('VINOD NAIR', 'ETAMEPE024', 'B12PE124', '2012-2016', 'PDE', 'S6', 'THRISSUR DIST,KERALA,INDIA', '27-sep-1994', 'MALE', '9446142493', 'vinodnair@gmail.com'),
('VIBIN MS', 'ETAMEPE025', 'B12PE125', '2012-2016', 'PDE', 'S6', 'THRISSUR DIST,KERALA,INDIA', '28-dec-1995', 'MALE', '9995024432', 'vibinms@gmail.com'),
('VIBIN CHANDRAN', 'ETAMEPE026', 'B12PE126', '2012-2016', 'PDE', 'S6', 'THRISSUR DIST,KERALA,INDIA', '31-nov-1994', 'MALE', '9995455309', 'vipinchandran@gmail.ocm'),
('VISHNU ANAND', 'ETAMEPE027', 'B12PE127', '2012-2016', 'PDE', 'S6', 'THRISSUR DIST,KERALA,INDIA', '26-sep-1995', 'MALE', '9884049343', 'vishnuanand@gmail.com'),
('VISHNU KURUP', 'ETAMEPE028', 'B12PE128', '2012-2016', 'PDE', 'S6', 'THRISSUR DIST,KERALA,INDIA', '25-oct-1994', 'MALE', '9846110647', 'vishnukurup@gmail.com'),
('VISHNUPRIYA PN', 'ETAMEPE029', 'B12PE129', '2012-2016', 'PDE', 'S6', 'THRISSUR DIST,KERALA,INDIA', '23-aug-1994', 'MALE', '9486955896', 'vishnupriyapn@gmail.com'),
('VIVEK PRASAD', 'ETAMEPE030', 'B12PE130', '2012-2016', 'PDE', 'S6', 'THRISSUR DIST,KERALA,INDIA', '21-dec-1994', 'MALE', '9446517919', 'vivekprasad@gmail.com'),
('ANAGA PALERI', 'ETANECH001', 'B13CH101', '2013-2017', 'CHE', 'S4', 'THRISSUR DIST,KERALA,INDIA', '11-jul-1994', 'MALE', '9747225427', 'anagapaleri@gmail.com'),
('ANATHA KV', 'ETANECH002', 'B13CH102', '2013-2017', 'CHE', 'S4', 'THRISSUR DIST,KERALA,INDIA', '9-aug-1995', 'FEMALE', '8162284700', 'anatha@gmail.com'),
('ANSIL HASSAN', 'ETANECH003', 'B13CH103', '2013-2017', 'CHE', 'S4', 'THRISSUR DIST,KERALA,INDIA', '8-jun-1995', 'MALE', '9544000271', 'ansilhassan@gmail.com'),
('ANIRUDH PS', 'ETANECH004', 'B13CH104', '2013-2017', 'CHE', 'S4', 'THRISSUR DIST,KERALA,INDIA', '11-mar-1995', 'MALE', '9746348566', 'anirudhps@gmail.com'),
('ATHUL SHIBU', 'ETANECH005', 'B13CH105', '2013-2017', 'CHE', 'S4', 'THRISSUR DIST,KERALA,INDIA', '9-jan-1995', 'MALE', '9427478656', 'athulshibu@gmail.com'),
('DANISHRA KAREEM', 'ETANECH006', 'B13CH106', '2013-2017', 'CHE', 'S4', 'THRISSUR DIST,KERALA,INDIA', '10-mar-1994', 'FEMALE', '9727166609', 'kareeemdani@gmail.com'),
('DEEPTHY J', 'ETANECH007', 'B13CH107', '2013-2017', 'CHE', 'S4', 'THRISSUR DIST,KERALA,INDIA', '12-feb-1994', 'FEMALE', '9995082517', 'deepthyj@gmail.com'),
('DEEPTHY K', 'ETANECH008', 'B13CH108', '2013-2017', 'CHE', 'S4', 'THRISSUR DIST,KERALA,INDIA', '9-may-1995', 'FEMALE', '9495072992', 'deepthyk@gmail.com'),
('FATHIMA BV', 'ETANECH009', 'B13CH109', '2013-2017', 'CHE', 'S4', 'THRISSUR DIST,KERALA,INDIA', '15-feb-1994', 'FEMALE', '9447142706', 'fathimabv@gmail.com'),
('FAHIDHA JAMAL', 'ETANECH010', 'B13CH110', '2013-2017', 'CHE', 'S4', 'THRISSUR DIST,KERALA,INDIA', '10-aug-1995', 'FEMALE', '9884014746', 'fahidhakamal@gmail.com'),
('GIRISH THATTIL', 'ETANECH011', 'B13CH111', '2013-2017', 'CHE', 'S4', 'THRISSUR DIST, KERALA,INDIA', '15-aug-1994', 'MALE', '9408507463', 'girishthattil@gmail.com'),
('GOKUL V', 'ETANECH012', 'B13CH112', '2013-2017', 'CHE', 'S4', 'THRISSUR DIST,KERALA,INDIA', '11-oct-1995', 'MALE', '9637127684', 'gokulv@gmail.com'),
('HIMA P', 'ETANECH013', 'B13CH113', '2013-2017', 'CHE', 'S4', 'THRISSUR DIST,KERALA,INDIA', '11-jul-1995', 'MALE', '9947333755', 'hmap@gmail.com'),
('INDULEKHA P', 'ETANECH014', 'B13CH114', '2013-2017', 'CHE', 'S4', 'THRISSUR DIST,KERALA,INDIA', '10-jun-1995', 'FEMALE', '9840963509', 'indulehka@gmail.com'),
('JAGAN BABU', 'ETANECH015', 'B13CH115', '2013-2017', 'CHE', 'S4', 'THRISSUR DIST,KERALA,INDIA', '11-aug-1993', 'MALE', '9940033819', 'jaganbabu@gmail.com'),
('MANU MOHANDAS', 'ETANECH016', 'B13CH116', '2013-2017', 'CHE', 'S4', 'THRISSUR DIST,KERALA,INDIA', '14-jun-1995', 'MALE', '9990999845', 'manudas@gmail.com'),
('MIDHUN S', 'ETANECH017', 'B13CH117', '2013-2017', 'CHE', 'S4', 'THRISSUR DIST,KERALA,INDIA', '16-sep-1995', 'MALE', '9961207060', 'midhuns@gmail.com'),
('MINJU P', 'ETANECH018', 'B13CH118', '2013-2017', 'CHE', 'S4', 'THRISSUR DIST,KERALA,INDIA', '11-jun-1996', 'FEMALE', '9656652652', 'minjup@gmail.com'),
('MRINALINI GOVIND', 'ETANECH019', 'B13CH119', '2013-2017', 'CHE', 'S4', 'THRISSUR DIST,KERALA,INDIA', '15-jun-1996', 'FEMALE', '9920537978', 'mrinalini@gmail.com'),
('NAWAF KT', 'ETANECH020', 'B13CH120', '2013-2017', 'CHE', 'S4', 'THRISSUR DIST,KERALA,INDIA', '7-sep-1995', 'MALE', '9995152511', 'nawafkt@gmail.com'),
('NITHEESH KRISHNAN', 'ETANECH021', 'B13CH121', '2013-2017', 'CHE', 'S4', 'THRISSUR DIST,KERALA,INDIA', '15-sep-1995', 'MALE', '9099926946', 'niteesh@gmail.com'),
('NITHIN THOPPIL', 'ETANECH022', 'B13CH122', '2013-2017', 'CHE', 'S4', 'THRISSUR DIST,KERALA,INDIA', '12-may-1995', 'MALE', '9037723201', 'nithinthoppil@gmail.com'),
('RINOY KULANGARA', 'ETANECH023', 'B13CH123', '2013-2017', 'CHE', 'S4', 'THRISSUR DIST,KERALA,INDIA', '10-sep-1994', 'MALE', '9847272970', 'rinoy@gmail.com'),
('RESHMA GEORGE', 'ETANECH024', 'B13CH124', '2013-2017', 'CHE', 'S4', 'THRISSUR DIST,KERALA,INDIA', '13-nov-1995', 'MALE', '9961474104', 'reshmageorge@gmail.com'),
('RINU ROY', 'ETANECH025', 'B13CH125', '2013-2017', 'CHE', 'S4', 'THRISSSUR DIST,KERALA,INDIA', '10-oct-1995', 'MALE', '9995524834', 'rinuroy@gmail.com'),
('SHAMMEMA CP', 'ETANECH026', 'B13CH126', '2013-2017', 'CHE', 'S4', 'THRISSUR DIST,KERALA,INDIA', '15-nov-1996', 'FEMALE', '9961070984', 'shammemecp@gmail.com'),
('SHERIN JOSE', 'ETANECH027', 'B13CH127', '2013-2017', 'CHE', 'S4', 'THRISSUR DIST,KERALA,INDIA', '18-jun-1995', 'FEMALE', '9495636726', 'sherinjose@gmail.com'),
('SOORAJ V', 'ETANECH028', 'B13CH028', '2013-2017', 'CHE', 'S4', 'THRISSUR DIST,KERALA,INDIA', '17-jun-1995', 'MALE', '9387494373', 'soorajv@gmail.com'),
('SREDHA S', 'ETANECH029', 'B13CH129', '2013-2017', 'CHE', 'S4', 'THRISSUR DIST,KERALA,INDIA', '15-sep-1995', 'MALE', '9249764126', 'sredhas@gmail.com'),
('SREEDEEP TS', 'ETANECH030', 'B13CH130', '2013-2017', 'CHE', 'S4', 'THRISSUR DIST,KERALA,INDIA', '17-oct-1996', 'MALE', '9895634305', 'sreedeep@gmail.com'),
('ACHUTH RAM', 'ETANEPE001', 'B13PE101', '2013-2017', 'PDE', 'S4', 'THRISSUR DIST,KERALA,INDIA', '15-oct-1996', 'MALE', '9995527691', 'achuthram@gmail.com'),
('ANANDARAJ T', 'ETANEPE002', 'B13PE102', '2013-2017', 'PDE', 'S4', 'THRISSUR DIST,KERALA,INDIA', '13-oct-1995', 'MALE', '9845612320', 'anadaraj@gmail.com'),
('ANIL KUMAR', 'ETANEPE003', 'B13PE103', '2013-2017', 'PDE', 'S4', 'THRISSUR DIST,KERALA,INDIA', '16-nov-1996', 'MALE', '9813242316', 'anilkumar@gmail.com'),
('BHARATH K', 'ETANEPE004', 'B13PE104', '2013-2017', 'PDE', 'S4', 'THRISSUR DIST,KERALA,INDIA', '12-nov-1994', 'MALE', '9995527692', 'bharathk@gmail.com'),
('BHAMA PD', 'ETANEPE005', 'B13PE105', '2013-2017', 'PDE', 'S4', 'THRISSUR DIST,KERALA,INDIA', '17-jul-1996', 'FEMALE', '9815677894', 'bhamapd@gmail.com'),
('BHARATHY S', 'ETANEPE006', 'B13PE106', '2013-2017', 'PDE', 'S4', 'THRISSUR DIST,KERALA,INDIA', '13-aug-1996', 'FEMALE', '9845632515', 'bharathys@gmail.com'),
('CHARUTHA K', 'ETANEPE007', 'B13PE107', '2013-2017', 'PDE', 'S4', 'THRISSUR DIST,KERALA,INDIA', '10-nov-1996', 'FEMALE', '9548424823', 'charuthak@gmail.com'),
('DILJO ANTONY', 'ETANEPE008', 'B13PE108', '2013-2017', 'PDE', 'S4', 'THRISSUR DIST,KERALA,INDIA', '16-oct-1996', 'MALE', '9514878945', 'diljoantonu@gmail.com'),
('DIJIN PS', 'ETANEPE009', 'B13PE109', '2013-2017', 'PDE', 'S4', 'THRISSUR DIST,KERALA,INDIA', '14-aug-1996', 'MALE', '7485961234', 'dijinps@gmail.com'),
('DIYAS', 'ETANEPE010', 'B13PE110', '2013-2017', 'PDE', 'S4', 'THRISSUR DIST,KERALA,INDIA', '13-nov-1997', 'MALE', '7849563255', 'diyas@gmail.com'),
('EDWIN KURIAN', 'ETANEPE011', 'B13PE111', '2013-2017', 'PDE', 'S4', 'THRISSUR DIST,KERALA,INDIA', '17-sep-1996', 'MALE', '7514875963', 'edwinkurian@gmail.com'),
('FIJIN PK', 'ETANEPE012', 'B13PE112', '2013-2017', 'PDE', 'S4', 'THRISSUR DIST,KERALA,INDIA', '14-sep-1995', 'MALE', '7845123698', 'fijinpk@gmail.com'),
('FIJO PL', 'ETANEPE013', 'B13PE113', '2013-2017', 'PDE', 'S4', 'THRISSUR DIST,KERALA,INDIA', '16-aug-1996', 'MALE', '7894561232', 'fijopl@gmail.com'),
('FIJJON VARGEESE', 'ETANEPE014', 'B13PE114', '2013-2017', 'PDE', 'S4', 'THRISSUR DIST,KERALA,INDIA', '18-nov-1996', 'MALE', '9547123059', 'fijjonvv@gmail.com'),
('GIREESH KUMAR', 'ETANEPE015', 'B13PE115', '2013-2017', 'PDE', 'S4', 'THRISSUR DIST,KERALA,INDIA', '15-nov-1995', 'MALE', '9847493290', 'gkumar@gmail.com'),
('GOVIND RA', 'ETANEPE016', 'B13PE116', '2013-2017', 'PDE', 'S4', 'THRISSUR DIST,KERALA,INDIA', '15-nov-1996', 'MALE', '9961693153', 'govindra@gmail.com'),
('JAYRAM PS', 'ETANEPE017', 'B13PE117', '2013-2017', 'PDE', 'S4', 'THRISSUR DIST,KERALA,INDIA', '16-oct-1996', 'MALE', '9845632105', 'jayramps@gmail.com'),
('JAGADHI PO', 'ETANEPE018', 'B13PE118', '2013-2017', 'PDE', 'S4', 'THRISSUR DIST,KERALA,INDIA', '17-oct-1995', 'MALE', '8520000002', 'jagadippo@gmail.com'),
('JAYAN SABU', 'ETANEPE019', 'B13PE119', '2013-2017', 'PDE', 'S4', 'THRISSUR DIST,KERALA,INDIA', '14-sep-1995', 'MALE', '7410369852', 'jayansabu@gmail.com'),
('KAMEER ASLAM', 'ETANEPE020', 'B13PE120', '2013-2017', 'PDE', 'S4', 'THRISSUR DIST,KERALA,INDIA', '18-nov-1996', 'MALE', '9510263487', 'kameeraslam@gmail.com'),
('KANISH TG', 'ETANEPE021', 'B13PE121', '2013-2017', 'PDE', 'S4', 'THRISSUR DIST,KERALA,INDIA', '16-oct-1996', 'MALE', '7531594874', 'kanishtg@gmail.com'),
('KANAK RANV', 'ETANEPE022', 'B13PE122', '2013-2017', 'PDE', 'S4', 'THRISSUR DIST,KERALA,INDIA', '16-dec-1996', 'MALE', '7531594872', 'kanakranv@gmail.com'),
('LAKSHMAN NAIR', 'ETANEPE023', 'B13PE123', '2013-2017', 'PDE', 'S4', 'THRISSUR DIST,KERALA,INDIA', '16-oct-1996', 'MALE', '9846610121', 'nairlaksman@gmail.com'),
('LIJO MATHEW', 'ETANEPE024', 'B13PE124', '2013-2017', 'PDE', 'S4', 'THRISSUR DIST,KERALA,INDIA', '19-oct-1997', 'MALE', '9548732165', 'lijomathew@gmail.com'),
('MANU  SANJU', 'ETANEPE025', 'B13PE125', '2013-2017', 'PDE', 'S4', 'THRISSUR DIST,KERALA,INDIA', '16-nov-1996', 'MALE', '7403542185', 'manusanju@gmail.com'),
('MOHAN DAS', 'ETANEPE026', 'B13PE126', '2013-2017', 'PDE', 'S4', 'THRISSUR DIST,KERALA,INDIA', '17-dec-1996', 'MALE', '94006436221', 'mohandas@gmail.com'),
('NIKESH RS', 'ETANEPE027', 'B13PE127', '2013-2017', 'PDE', 'S4', 'THRISSUR DIST,KERALA,INDIA', '15-sep-1996', 'MALE', '9400738885', 'nikeshrs@gmail.com'),
('PRAN S', 'ETANEPE028', 'B13PE128', '2013-2017', 'PDE', 'S4', 'THRISSUR DIST,KERALA,INDIA', '15-nov-1996', 'MALE', '9407896321', 'prans@gmail.com'),
('RIYAS RAFEEQ', 'ETANEPE029', 'B13PE129', '2013-2017', 'PDE', 'S4', 'THRISSUR DIST,KERALA,INDIA', '17-nov-1996', 'MALE', '9549527679', 'riyasraff@gmail.com'),
('TINTO KURIAN', 'ETANEPE030', 'B13PE130', '2013-2017', 'PDE', 'S4', 'THRISSUR DIST,KERALA,INDIA', '17-nov-1996', 'MALE', '9961693152', 'tintokurian@gmail.com'),
('ANJALI P', 'ETAOECH001', 'B14CH101', '2014-2018', 'CHE', 'S1&S2', 'THRISSUR DIST,KERALA,INDIA', '16-may-1996', 'FEMALE', '9387423093', 'anjalip@gmail.com'),
('ANJU S', 'ETAOECH002', 'B14CH102', '2014-2018', 'CHE', 'S1&S2', 'THRISSUR DIST,KERALA,INDIA', '13-may-1995', 'FEMALE', '9946214240', 'anjus@gmail.com'),
('ANU NAIR', 'ETAOECH003', 'B13CH103', '2014-2018', 'CHE', 'S1&S2', 'THRISSUR DIST,KERALA,INDIA', '12-jun-1995', 'FEMALE', '9846724674', 'anunair@gmail.com'),
('ANUPA A', 'ETAOECH004', 'B14CH104', '2014-2018', 'CHE', 'S1&S2', 'THRISSUR DIST,KERALA,INDIA', '16-apr-1996', 'FEMALE', '9095633672', 'anupaa@gmail.com'),
('ANUPAMA KA', 'ETAOECH005', 'B14CH105', '2014-2018', 'CHE', 'S1&S2', 'THRISSUR DIST,KERALA,INDIA', '9-apr-1996', 'FEMALE', '9895593775', 'anupamaka@gmail.com'),
('APARNA S', 'ETAOECH006', 'B14CH106', '2014-2018', 'CHE', 'S1&S2', 'THRISSUR DIST,KERALA,INDIA', '15-jun-1996', 'FEMALE', '9846938178', 'aparnas@gmail.com'),
('ARCHANA R', 'ETAOECH007', 'B14CH107', '2014-2018', 'CHE', 'S1&S2', 'THRISSUR DIST,KERALA,INDIA', '16-may-1996', 'FEMALE', '9847638749', 'archanar@gmail.com'),
('ARYA TN', 'ETAOECH008', 'B14CH108', '2014-2018', 'CHE', 'S1&S2', 'THRISSUR DIST,KERALA,INDIA', '17-apr-1996', 'FEMALE', '9895040507', 'aryatn@gmail.com'),
('ASHA S', 'ETAOECH009', 'B14CH109', '2014-2018', 'CHE', 'S1&S2', 'THRISSUR DIST,KERALA,INDIA', '19-may-1996', 'FEMALE', '9846319660', 'ashats@gmail.com'),
('ASHIMA SABU', 'ETAOECH010', 'B14CH110', '2014-2018', 'CHE', 'S1&S2', 'THRISSUR DIST,KERALA,INDIA', '18-may-1996', 'FEMALE', '9349430655', 'ashimasabu@gmail.com'),
('ASHNA BASHEER', 'ETAOECH011', 'B14CH111', '2014-2018', 'CHE', 'S1&S2', 'THRISSUR DIST,KERALA,INDIA', '14-aug-1997', 'FEMALE', '9995152513', 'ashnabasheer@gmail.com'),
('DEVIKA V', 'ETAOECH012', 'B14CH112', '2014-2018', 'CHE', 'S1&S2', 'THRISSUR DIST,KERALA,INDIA', '14-mar-1996', 'FEMALE', '9744868482', 'devikav@gmail.com'),
('DEVIPRIYA MR', 'ETAOECH013', 'B14CH113', '2014-2018', 'CHE', 'S1&S2', 'THRISSUR DIST,KERALA,INDIA', '16-feb-1997', 'FEMALE', '9786161516', 'devipriya@gmail.com'),
('DIVYALAKSHMI OP', 'ETAOECH014', 'B14CH114', '2014-2018', 'CHE', 'S1&S2', 'THRISSUR DIST,KERALA,INDIA', '17-jun-1997', 'FEMALE', '9745827315', 'divyalakshmiop@gmail.com'),
('DHANALAKSHMI PS', 'ETAOECH015', 'B14CH115', '2014-2018', 'CHE', 'S1&S2', 'THRISSUR DIST,KERALA,INDIA', '28-aug-1997', 'FEMALE', '9995998015', 'dhanalakshmips@gmail.com'),
('DRISHYA SASI', 'ETAOECH016', 'B14CH116', '2014-2018', 'CHE', 'S1&S2', 'THRISSUR DIST,KERALA,INDIA', '26-oct-1996', 'FEMALE', '9884115645', 'drishyasasi@gmail.com'),
('JISA PO', 'ETAOECH017', 'B14CH117', '2014-2018', 'CHE', 'S1&S2', 'THRISSUR DIST,KERALA,INDIA', '24-jul-1996', 'MALE', '9840018559', 'jisapo@gmail.com'),
('LAKSHMI SASIDARAN', 'ETAOECH018', 'B14CH118', '2014-2018', 'CHE', 'S1&S2', 'THRISSUR DIST,KERALA,INDIA', '27-oct-1995', 'FEMALE', '9495331891', 'lakshmisasi@gmail.com'),
('MIDHU KI', 'ETAOECH019', 'B14CH119', '2014-2018', 'CHE', 'S1&S2', 'THRISSUR DIST,KERALA,INDIA', '18-jun-1996', 'FEMALE', '9745827316', 'midhuki@gmail.com'),
('NAYANA BENNY', 'ETAOECH020', 'B14CH120', '2014-2018', 'CHE', 'S1&S2', 'THRISSUR DIST,KERALA,INDIA', '27-mar-1996', 'FEMALE', '9962581218', 'nayanabenny@gmail.com'),
('NEETHU DAS', 'ETAOECH021', 'B14CH121', '2014-2018', 'CHE', 'S1&S2', 'THRISSUR DIST,KERALA,INDIA', '25-apr-1996', 'FEMALE', '9048141919', 'neethudas@gmail.com'),
('NISHMA NAIR', 'ETAOECH022', 'B14CH122', '2014-2018', 'CHE', 'S1&S2', 'THRISSUR DIST,KERALA,INDIA', '30-sep-1996', 'FEMALE', '9962559920', 'nishmanair@gmail.com'),
('PARVATHY NAIR', 'ETAOECH023', 'B14CH123', '2014-2018', 'CHE', 'S1&S2', 'THRISSUR DIST,KERALA,INDIA', '21-sep-1996', 'FEMALE', '9962559921', 'parvathynair@gmail.com'),
('POOJA SADANANDHAN', 'ETAOECH024', 'B14CH124', '2014-2018', 'CHE', 'S1&S2', 'THRISSUR DIST,KERALA,INDIA', '23-apr-1996', 'FEMALE', '9727548737', 'poojasadan@gmail.com'),
('PRINCY MU', 'ETAOECH025', 'B14CH125', '2014-2018', 'CHE', 'S1&S2', 'THRISSUR DIST,KERALA,INDIA', '27-jun-1996', 'FEMALE', '9946369269', 'princymu@gmail.com'),
('RAJALAKSHMI S', 'ETAOECH026', 'B14CH126', '2014-2018', 'CHE', 'S1&S2', 'THRISSUR DIST,KERALA,INDIA', '6-mar-1996', 'FEMALE', '9995811722', 'rajalakshmis@gmail.com'),
('REENU WINSON', 'ETAOECH027', 'B14CH127', '2014-2018', 'CHE', 'S1&S2', 'THRISSUR DIST,KERALA,INDIA', '27-mar-1997', 'FEMALE', '9995297824', 'reeenuwinson@gmail.com'),
('REMYA KS', 'ETAOECH028', 'B14CH128', '2014-2018', 'CHE', 'S1&S2', 'THRISSUR DIST,KERALA,INDIA', '17-jul-1997', 'FEMALE', '9446429259', 'remyaks@gmail.com'),
('SHINY RAJAN', 'ETAOECH029', 'B14CH129', '2014-2018', 'CHE', 'S1&S2', 'THRISSUR DIST,KERALA,INDIA', '28-mar-1997', 'FEMALE', '9744820484', 'shinyrajan@gmail.com'),
('SNEHA SURESH', 'ETAOECH030', 'B14CH130', '2014-2018', 'CHE', 'S1&S2', 'THRISSUT DIST,KERALA,INDIA', '17-sep-1997', 'FEMALE', '9746121548', 'snehasuresh@gmail.com'),
('AADITH TS', 'ETAOEPE001', 'B14PE101', '2014-2018', 'PDE', 'S1&S2', 'THRISSUR DIST,KERALA,INDIA', '17-dec-1997', 'MALE', '9746245628', 'aaadithts@gmail.com'),
('ABEESH PS', 'ETAOEPE002', 'B14PE102', '2014-2018', 'PDE', 'S1&S2', 'THRISSUR DIST,KERALA,INDIA', '15-nov-1996', 'MALE', '9547125963', 'abeeshps@gmail.com'),
('ABIJITH OD', 'ETAOEPE003', 'B14PE103', '2014-2018', 'PDE', 'S1&S2', 'THRISSUR DIST,KERALA,INDIA', '18-nov-1996', 'MALE', '9526320154', 'abijithod@gmail.com'),
('AJMAL NAVAS', 'ETAOEPE004', 'B14PE104', '2013-2017', 'PDE', 'S1&S2', 'THRISSUR DIST,KERALA,INDIA', '17-oct-1996', 'MALE', '9446586919', 'ajmalnavas@gmail.com'),
('HARIKRISHNAN PS', 'ETAOEPE005', 'B14PE105', '2014-2018', 'PDE', 'S1&S2', 'THRISSUR DIST,KERALA,INDIA', '15-nov-1997', 'MALE', '9846610150', 'krishnahari@gmaiil.com'),
('HASHIM PL', 'ETAOEPE006', 'B14PE106', '2014-2018', 'PDE', 'S1&S2', 'THRISSUR DIST,KERALA,INDIA', '17-sep-1996', 'MALE', '9809400203', 'hashimpl@gmail.com'),
('ISMAIL IRQSA', 'ETAOEPE007', 'B14PE107', '2014-2018', 'PDE', 'S1&S2', 'THRISSUR DIST,KERALA,INDIA', '17-nov-1997', 'MALE', '9447271842', 'ismail@gmail.com'),
('IVIN JOSE', 'ETAOEPE008', 'B14PE108', '2014-2018', 'PDE', 'S1&S2', 'THRISSUR DIST,KERALA,INDIA', '18-dec-1996', 'MALE', '9846770641', 'ivinjose@gmail.com'),
('JINAS THOMAS', 'ETAOEPE009', 'B14PE109', '2014-2018', 'PDE', 'S1&S2', 'THRISSUR DIST,KERALA,INDIA', '18-dec-1996', 'MALE', '9447917199', 'jinasqw@gmail.com'),
('JISHNU PK', 'ETAOEPE010', 'B14PE110', '2014-2018', 'PDE', 'S1&S2', 'THRISSUR DIST,KERALA,INDIA', '17-oct-1997', 'MALE', '9946862905', 'jishu@gmail.com'),
('JOMON TOBY', 'ETAOEPE011', 'B14PE111', '2014-2018', 'PDE', 'S1&S2', 'THRISSUR DIST,KERALA,INDIA', '17-nov-1996', 'MALE', '9447021909', 'jomontoby@gmail.com'),
('KARNAN DAS', 'ETAOEPE012', 'B14PE112', '2014-2018', 'PDE', 'S1&S2', 'THRISSUR DIST,KERALA,INDIA', '16-dec-1997', 'MALE', '9845759307', 'karnandas@gmail.com'),
('MILJO SUNNY', 'ETAOEPE013', 'B14PE113', '2014-2018', 'PDE', 'S1&S2', 'THRISSUR DIST,KERALA,INDIA', '18-oct-1997', 'MALE', '9449834618', 'mijlo@gmail.com'),
('NITHIN LAL', 'ETAOEPE014', 'B14PE114', '2014-2018', 'PDE', 'S1&S2', 'THRISSUR DIST,KERALA,INDIA', '17-nov-1997', 'MALE', '9633024315', 'nithinlal@gmail.com'),
('NELVIN STALIN', 'ETAOEPE015', 'B14PE115', '2014-2018', 'PDE', 'S1&S2', 'THRISSUR DIST,KERALA,INDIA', '19-nov-1996', 'MALE', '9495633403', 'nelvinstalin@gmail.com'),
('RAHUL PS', 'ETAOEPE016', 'B14PE116', '2014-2018', 'PDE', 'S1&S2', 'THRISSUR DIST,KERALA,INDIA', '17-dec-1996', 'MALE', '9349969404', 'rahulps@gmail.com'),
('RITHUL LAL', 'ETAOEPE017', 'B14PE117', '2014-2018', 'PDE', 'S1&S2', 'THRISSUR DIST,KERALA,INDIA', '18-dec-1996', 'MALE', '9846586419', 'rithullal@gmail.com'),
('ROBIN K NAIR', 'ETAOEPE018', 'B14PE118', '2014-2018', 'PDE', 'S1&S2', 'THRISSUR DIST,KERALA,INDIA', '16-nov-1996', 'MALE', '9999959592', 'robinknair@gmail.com'),
('SHABEER PO', 'ETAOEPE019', 'B14PE119', '2014-2018', 'PDE', 'S1&S2', 'THRISSUR DIST,KERALA,INDIA', '16-mar-1997', 'MALE', '9586326598', 'opshaberr@gmail.com'),
('SHAMEER PS', 'ETAOEPE020', 'B14PE120', '2014-2018', 'PDE', 'S1&S2', 'THRISSUR DIST,KERALA,INDIA', '14-mar-1996', 'MALE', '9995959681', 'shameerps@gmail.com'),
('SHAKEER PK', 'ETAOEPE021', 'B14PE121', '2014-2018', 'PDE', 'S1&S2', 'THRISSUR DIST,KERALA,INDIA', '18-jan-1997', 'MALE', '9744671426', 'shakeerpk@gmail.com'),
('SHINS PK', 'ETAOEPE022', 'B14PE122', '2014-2018', 'PDE', 'S1&S2', 'THRISSUR DIST,KERALA,INDIA', '19-jan-1997', 'MALE', '9486862213', 'shinaaspk@gmail.com'),
('SOLOMON PL', 'ETAOEPE023', 'B14PE123', '2014-2018', 'PDE', 'S1&S2', 'THRISSUR DIST,KERALA,INDIA', '19-jan-1997', 'MALE', '9886533704', 'solomonpl@gmail.com'),
('SWALITH KAREEM', 'ETAOEPE024', 'B14PE124', '2014-2018', 'PDE', 'S1&S2', 'THRISSUR DIST,KERALA,INDIA', '18-feb-1997', 'MALE', '9946145750', 'swalithkreem@gmail.com'),
('THASFIN MP', 'ETAOEPE025', 'B14PE125', '2014-2018', 'PDE', 'S1&S2', 'THRISSUR DIST,KERALA,INDIA', '19-feb-1996', 'MALE', '9539627178', 'thasfin@gmail.com'),
('VIPIN P', 'ETAOEPE026', 'B14PE126', '2014-2018', 'PDE', 'S1&S2', 'THRISSUR DIST,KERALA,INDIA', '18-may-1997', 'MALE', '9443581652', 'vipinp@gmail.com'),
('SHYAMJITH', 'ETAOEPE027', 'B14PE127', '2014-2018', 'PDE', 'S1&S2', 'THRISSUR DIST,KERALA,INDIA', '18-aug-1996', 'MALE', '9447486403', 'shyamjith@gmail.com'),
('SARATH PU', 'ETAOEPE028', 'B14PE128', '2014-2018', 'PDE', 'S1&S2', 'THRISSUR DIST,KERALA,INDIA', '18-jun-1996', 'MALE', '9605551379', 'sarathpu@gmail.com'),
('SREERAG KS', 'ETAOEPE029', 'B14PE129', '2014-2018', 'PDE', 'S1&S2', 'THRISSUR DIST,KERALA,INDIA', '16-sep-1997', 'MALE', '9952033840', 'sreeragks@gmail.com'),
('SHIVASANKARAN', 'ETAOEPE030', 'B14PE130', '2014-2018', 'PDE', 'S1&S2', 'THRISSUR DIST,KERALA,INDIA', '15-aug-1996', 'MALE', '9727548738', 'sivasankaran@gmail.com');

-- --------------------------------------------------------

-- 
-- Table structure for table `syllabus`
-- 

CREATE TABLE `syllabus` (
  `code` varchar(10) NOT NULL,
  `1` varchar(7) NOT NULL,
  `2` varchar(7) NOT NULL,
  `3` varchar(7) NOT NULL,
  `4` varchar(7) NOT NULL,
  `5` varchar(7) default NULL,
  `6` varchar(7) default NULL,
  `7` varchar(7) default NULL,
  `8` varchar(7) default NULL,
  `9` varchar(7) default NULL,
  `10` varchar(7) default NULL,
  PRIMARY KEY  (`code`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- 
-- Dumping data for table `syllabus`
-- 

INSERT INTO `syllabus` (`code`, `1`, `2`, `3`, `4`, `5`, `6`, `7`, `8`, `9`, `10`) VALUES 
('S1&S2', 'EN09101', 'EN09102', 'EN09103', 'EN09104', 'EN09105', 'EN09106', 'EN09107', 'EN09108', '0', '0'),
('S3_CHE', 'EN09301', 'EN09302', 'CH09303', 'CH09304', 'CH09305', 'CH09306', '0', '0', '0', '0'),
('S3_CSE', 'EN09301', 'CS09302', 'CS09303', 'EN09304', 'CS09305', 'CS09306', '0', '0', '0', '0'),
('S3_PDE', 'EN09301', 'PE09302', 'PE09303', 'EN09304', 'PE09305', 'PE09306', '0', '0', '0', '0'),
('S4_CHE', 'EN09401', 'EN09402', 'CH09403', 'CH09404', 'CH09405', 'CH09406', '0', '0', '0', '0'),
('S4_CSE', 'EN09401', 'EN09402', 'CS09403', 'CS09404', 'CS09405', 'CS09406', '0', '0', '0', '0'),
('S4_PDE', 'EN09401', 'EN09402', 'PE09403', 'PE09404', 'PE09405', 'PE09406', '0', '0', '0', '0'),
('S5_CHE', 'CH09501', 'CH09502', 'CH09503', 'CH09504', 'CH09505', 'CH09506', '0', '0', '0', '0'),
('S5_CSE', 'CS09501', 'CS09502', 'CS09503', 'CS09504', 'CS09505', 'CS09506', '0', '0', '0', '0'),
('S6_CHE', 'CH09601', 'CH09602', 'CH09603', 'CH09604', 'CH09605', 'CH09Lxx', '0', '0', '0', '0'),
('S6_CSE', 'CS09601', 'CS09602', 'CS09603', 'CS09604', 'CS09605', 'CS09606', '0', '0', '0', '0'),
('S6_PDE', 'PE09601', 'PE09602', 'PE09603', 'PE09604', 'PE09605', 'PE09606', '0', '0', '0', '0'),
('S7_CHE', 'CH09701', 'CH09702', 'CH09703', 'CH09704', 'CH09Lxx', 'CH09Lxx', '0', '0', '0', '0'),
('S7_CSE', 'CS09701', 'CS09702', 'CS09703', 'CS09704', 'CS09705', 'CS09706', '0', '0', '0', '0'),
('S7_PDE', 'PE09701', 'PE09702', 'PE09703', 'PE09704', 'PE09705', 'PE09706', '0', '0', '0', '0'),
('S8_CHE', 'CH09801', 'CH09802', 'CH09Lxx', 'CH09Lxx', '', '', '0', '0', '0', '0'),
('S8_CSE', 'CS09801', 'CS09802', 'CS09803', 'CS09804', '', '', '0', '0', '0', '0'),
('S8_PDE', 'PE09801', 'PE09802', 'PE09803', 'PE09804', '', '', '0', '0', '0', '0');

-- --------------------------------------------------------

-- 
-- Table structure for table `timetable`
-- 

CREATE TABLE `timetable` (
  `class` varchar(10) NOT NULL,
  `department` varchar(8) NOT NULL,
  `semester` varchar(6) NOT NULL,
  `day1_fn` varchar(8) NOT NULL,
  `day1_an` varchar(8) NOT NULL,
  `day2_fn` varchar(8) NOT NULL,
  `day2_an` varchar(8) NOT NULL,
  `day3_fn` varchar(8) NOT NULL,
  `day3_an` varchar(8) NOT NULL,
  `day4_fn` varchar(8) default NULL,
  `day4_an` varchar(8) default NULL,
  `start_date` varchar(20) NOT NULL,
  PRIMARY KEY  (`class`,`department`,`start_date`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- 
-- Dumping data for table `timetable`
-- 

INSERT INTO `timetable` (`class`, `department`, `semester`, `day1_fn`, `day1_an`, `day2_fn`, `day2_an`, `day3_fn`, `day3_an`, `day4_fn`, `day4_an`, `start_date`) VALUES 
('S1&S2', 'CHE', 'S1&S2', 'EN09101', 'EN09102', 'EN09103', 'EN09104', 'EN09105', 'EN09106', 'EN09107', 'EN09108', '04-05-2015'),
('S1&S2', 'CHE', 'S1&S2', 'EN001', 'EN002', 'EN003', 'EN004', 'EN005', 'EN006', 'EN007', 'EN008', '18-05-2015'),
('S1&S2', 'CHE', 'S1&S2', 'EN09101', 'EN09102', 'EN09103', 'EN09104', 'EN09105', 'EN09106', 'EN09107', 'EN09108', '22-04-2015'),
('S1&S2', 'CHE', 'S1&S2', 'EN09101', 'EN09102', 'EN09103', 'EN09104', 'EN09105', 'EN09106', 'EN09107', 'EN09108', '28-04-2015'),
('S1&S2', 'CSE', 'S1&S2', 'EN09101', 'EN09102', 'EN09103', 'EN09104', 'EN09105', 'EN09106', 'EN09107', 'EN09108', '28-04-2015'),
('S3_CHE', 'CHE', 'S3', 'EN09301', 'EN09302', 'CH09303', 'CH09304', 'CH09305', 'CH09306', '0', '0', '4-05-2015'),
('S4_CHE', 'CHE', 'S4', 'EN09401', 'EN09402', 'CH09403', 'CH09404', 'CH09405', 'CH09406', '0', '0', '04-05-2015'),
('S4_CHE', 'CHE', 'S4', 'EN09401', 'EN09402', 'CH09403', 'CH09404', 'CH09405', 'CH09406', '0', '0', '18-05-2015'),
('S4_CHE', 'CHE', 'S4', 'EN09401', 'EN09402', 'CH09403', 'CH09404', 'CH09405', 'CH09406', '0', '0', '28-04-2015'),
('S6_CSE', 'CSE', 'S6', 'CS09601', 'CS09602', 'CS09603', 'CS09604', 'CS09605', 'CS09606', '0', '0', '27-04-2015');

-- --------------------------------------------------------

-- 
-- Table structure for table `university`
-- 

CREATE TABLE `university` (
  `examcode` varchar(15) NOT NULL,
  `examdate` date NOT NULL,
  PRIMARY KEY  (`examcode`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- 
-- Dumping data for table `university`
-- 

INSERT INTO `university` (`examcode`, `examdate`) VALUES 
('CH09601', '2015-05-21'),
('CS301', '2015-04-22'),
('EN001', '2015-04-22'),
('PD301', '2015-04-22'),
('PE09601', '2015-05-21');
