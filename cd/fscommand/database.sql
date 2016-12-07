-- phpMyAdmin SQL Dump
-- version 2.11.6
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Feb 12, 2012 at 01:42 PM
-- Server version: 5.0.51
-- PHP Version: 5.2.6

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `ched`
--
CREATE DATABASE `ched` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `ched`;

-- --------------------------------------------------------

--
-- Table structure for table `announcement_tbl`
--

CREATE TABLE `announcement_tbl` (
  `announcement_id` int(5) NOT NULL auto_increment,
  `announcement_header` varchar(200) NOT NULL,
  `announcement_text` longtext NOT NULL,
  `announcement_date` date NOT NULL,
  PRIMARY KEY  (`announcement_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `announcement_tbl`
--


-- --------------------------------------------------------

--
-- Table structure for table `app_tbl`
--

CREATE TABLE `app_tbl` (
  `APP_ID` int(11) NOT NULL auto_increment,
  `GRANT_ID` tinyint(2) NOT NULL,
  `APP_FIRSTNAME` varchar(65) NOT NULL,
  `APP_MIDNAME` varchar(65) NOT NULL,
  `APP_LASTNAME` varchar(65) NOT NULL,
  `APP_BDAY` date NOT NULL,
  `APP_BPLACE` varchar(100) NOT NULL,
  `APP_CSTAT` varchar(12) NOT NULL,
  `APP_GENDER` varchar(6) NOT NULL,
  `APP_CITI` varchar(20) NOT NULL,
  `APP_RELI` varchar(20) NOT NULL,
  `APP_MAILADD` varchar(100) NOT NULL,
  `APP_CONGDIST` tinyint(1) NOT NULL,
  `APP_PERMADD` varchar(100) NOT NULL,
  `APP_HSNAM` varchar(100) NOT NULL,
  `APP_HSADD` varchar(100) NOT NULL,
  `APP_HSTYP` varchar(20) NOT NULL,
  `APP_HSYR` varchar(1) NOT NULL,
  `APP_HSRANK` varchar(2) NOT NULL,
  `APP_GWA` double NOT NULL,
  `APP_NCAESCR` double NOT NULL,
  `APP_NCAEDATE` date NOT NULL,
  `APP_GRADDATE` date NOT NULL,
  `APP_FATSTAT` varchar(8) NOT NULL,
  `APP_FATFIRSTNAME` varchar(65) NOT NULL,
  `APP_FATMIDNAME` varchar(65) NOT NULL,
  `APP_FATLASTNAME` varchar(65) NOT NULL,
  `APP_MOTSTAT` varchar(8) NOT NULL,
  `APP_MOTFIRSTNAME` varchar(65) NOT NULL,
  `APP_MOTMIDNAME` varchar(65) NOT NULL,
  `APP_MOTLASTNAME` varchar(65) NOT NULL,
  `APP_FATADD` varchar(100) NOT NULL,
  `APP_FATJOB` varchar(30) NOT NULL,
  `APP_MOTADD` varchar(100) NOT NULL,
  `APP_MOTJOB` varchar(30) NOT NULL,
  `APP_SIBNO` tinyint(2) NOT NULL,
  `APP_HEIPREF` int(3) NOT NULL,
  `APP_COURSEFACTOR` varchar(100) NOT NULL,
  `APP_AITR` double NOT NULL,
  `APP_CONTACT` varchar(30) NOT NULL,
  `APP_EMAILADD` varchar(35) NOT NULL,
  `APP_CONFREJ` tinyint(1) NOT NULL,
  `APP_RANKCAL` float NOT NULL,
  `APP_DATEAPP` date NOT NULL,
  `APP_APPROVE` int(1) NOT NULL default '0',
  PRIMARY KEY  (`APP_ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `app_tbl`
--

INSERT INTO `app_tbl` (`APP_ID`, `GRANT_ID`, `APP_FIRSTNAME`, `APP_MIDNAME`, `APP_LASTNAME`, `APP_BDAY`, `APP_BPLACE`, `APP_CSTAT`, `APP_GENDER`, `APP_CITI`, `APP_RELI`, `APP_MAILADD`, `APP_CONGDIST`, `APP_PERMADD`, `APP_HSNAM`, `APP_HSADD`, `APP_HSTYP`, `APP_HSYR`, `APP_HSRANK`, `APP_GWA`, `APP_NCAESCR`, `APP_NCAEDATE`, `APP_GRADDATE`, `APP_FATSTAT`, `APP_FATFIRSTNAME`, `APP_FATMIDNAME`, `APP_FATLASTNAME`, `APP_MOTSTAT`, `APP_MOTFIRSTNAME`, `APP_MOTMIDNAME`, `APP_MOTLASTNAME`, `APP_FATADD`, `APP_FATJOB`, `APP_MOTADD`, `APP_MOTJOB`, `APP_SIBNO`, `APP_HEIPREF`, `APP_COURSEFACTOR`, `APP_AITR`, `APP_CONTACT`, `APP_EMAILADD`, `APP_CONFREJ`, `APP_RANKCAL`, `APP_DATEAPP`, `APP_APPROVE`) VALUES
(2, 1, 'roniel', 'bacolongan', 'GAMATA', '1995-02-16', 'Guiuan eastern samar', 'Single', 'MALE', 'Filipino', 'CATHOLIC', '220 carolina st. brgy. 13, guiuan, eastern samar', 1, 'caibaan, tacloban', 'SISTERS OF MARY', 'guiuan eastern samar', 'Public', '4', '1', 90, 92, '2012-02-16', '2012-02-16', 'Living', 'jose', 'daiz', 'gamata', 'Living', 'alodia', 'dagamina', 'bacolongan', 'GUIUAN eastern samar', 'businessman', 'guiuan, eastern samar', 'GOVT EMPLOYEE', 5, 1, 'I want to be a computer science,', 200000, '09157482123', 'roniel_44@yahoo.com', 1, 20064.3, '2012-02-16', 1),
(3, 2, 'mary christine', 'garcia', 'aruta', '1990-02-16', 'cagayan valley', 'Single', 'MALE', 'Filipino', '', 'CAIBAAN, tacloban city', 1, 'TACLOBAN', 'guiuan national high school', 'guiuan eastern samar', 'Public', '4', '', 89, 89, '2012-02-16', '2012-02-16', 'Living', 'juan', 'cruz', 'nebrija', 'Living', 'arnila', 'tan', 'bandoy', 'guiuan, eastern samar', 'driving teacher', 'tacloban', 'housewife', 5, 1, '', 130000, '09157482123', 'gilann@yahoo.com', 1, 34062.8, '2012-02-16', 1);

-- --------------------------------------------------------

--
-- Table structure for table `audittrail_tbl`
--

CREATE TABLE `audittrail_tbl` (
  `audittrail_id` int(8) NOT NULL auto_increment,
  `audittrail_username` varchar(30) NOT NULL,
  `audittrail_activity` varchar(50) NOT NULL,
  `audittrail_time` datetime NOT NULL,
  PRIMARY KEY  (`audittrail_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=66 ;

--
-- Dumping data for table `audittrail_tbl`
--

INSERT INTO `audittrail_tbl` (`audittrail_id`, `audittrail_username`, `audittrail_activity`, `audittrail_time`) VALUES
(1, 'edusupervisor', 'Log-In', '2012-02-16 14:54:31'),
(2, 'edusupervisor', 'Confirmed an Application for Ranking', '2012-02-16 14:55:51'),
(3, '', 'Add an Award No', '2012-02-16 15:03:45'),
(4, '', 'Add an Award No', '2012-02-16 15:03:49'),
(5, '', 'Add an Award No', '2012-02-16 15:03:54'),
(6, '', 'Add an Award No', '2012-02-16 15:03:58'),
(7, '', 'Add an Award No', '2012-02-16 15:04:02'),
(8, '', 'Add an Award No', '2012-02-16 15:04:52'),
(9, '', 'Add an Award No', '2012-02-16 15:05:33'),
(10, '', 'Add an Award No', '2012-02-16 15:05:36'),
(11, '', 'Add an Award No', '2012-02-16 15:05:41'),
(12, 'edusupervisor', 'Approved an Scholarship', '2012-02-16 15:08:42'),
(13, 'edusupervisor', 'Approved an Scholarship', '2012-02-16 15:13:35'),
(14, '', 'Viewed Reports', '2012-02-16 15:14:59'),
(15, 'edusupervisor', 'Log-Out', '2012-02-16 15:15:39'),
(16, 'sc_sti', 'Log-In', '2012-02-16 15:16:07'),
(17, 'SC_STI', 'Viewed List Of Scholars', '2012-02-16 15:16:10'),
(18, 'SC_STI', 'Viewed List Of Scholars', '2012-02-16 15:16:15'),
(19, 'edusupervisor', 'Log-In', '2012-02-16 15:16:48'),
(20, 'edusupervisor', 'Confirmed an Application for Ranking', '2012-02-16 15:20:36'),
(21, 'edusupervisor', 'Approved an Scholarship', '2012-02-16 15:21:14'),
(22, 'edusupervisor', 'Log-Out', '2012-02-16 15:21:29'),
(23, 'sc_sti', 'Log-In', '2012-02-16 15:21:52'),
(24, 'SC_STI', 'Viewed List Of Scholars', '2012-02-16 15:21:55'),
(25, 'SC_STI', 'Viewed List Of Scholars', '2012-02-16 15:26:24'),
(26, 'SC_STI', 'Viewed List Of Scholars', '2012-02-16 15:27:43'),
(27, 'SC_STI', 'Viewed List Of Scholars', '2012-02-16 15:27:49'),
(28, 'SC_STI', 'Viewed List Of Scholars', '2012-02-16 15:28:06'),
(29, 'SC_STI', 'Viewed List Of Scholars', '2012-02-16 15:28:08'),
(30, 'sc_sti', 'Log-In', '2012-02-16 15:29:14'),
(31, 'SC_STI', 'Viewed Reports', '2012-02-16 15:29:21'),
(32, 'SC_STI', 'Viewed Reports', '2012-02-16 15:29:31'),
(33, 'SC_STI', 'Log-Out', '2012-02-16 15:29:44'),
(34, 'edusupervisor', 'Log-In', '2012-02-16 15:30:49'),
(35, 'edusupervisor', 'Log-Out', '2012-02-16 15:33:01'),
(36, 'sc_sti', 'Log-In', '2012-02-16 15:33:14'),
(37, 'SC_STI', 'Viewed List Of Scholars', '2012-02-16 15:33:17'),
(38, '', 'Viewed Reports', '2012-02-16 15:33:19'),
(39, '', 'Viewed Reports', '2012-02-16 15:33:25'),
(40, '', 'Viewed Reports', '2012-02-16 15:33:35'),
(41, '', 'Viewed Reports', '2012-02-16 15:33:49'),
(42, '', 'Viewed Reports', '2012-02-16 15:33:54'),
(43, '', 'Viewed Reports', '2012-02-16 15:34:00'),
(44, '', 'Viewed Reports', '2012-02-16 15:34:05'),
(45, '', 'Viewed Reports', '2012-02-16 15:34:11'),
(46, '', 'Viewed Reports', '2012-02-16 15:34:12'),
(47, '', 'Viewed Reports', '2012-02-16 15:34:21'),
(48, '', 'Viewed Reports', '2012-02-16 15:34:58'),
(49, 'SC_STI', 'Viewed List Of Scholars', '2012-02-16 15:35:00'),
(50, 'SC_STI', 'Viewed List Of Scholars', '2012-02-16 15:35:03'),
(51, '', 'Viewed Reports', '2012-02-16 15:35:44'),
(52, '', 'Viewed Reports', '2012-02-16 15:35:49'),
(53, 'SC_STI', 'Log-Out', '2012-02-16 15:35:51'),
(54, 'lnu_sc', 'Log-In', '2012-02-16 15:36:30'),
(55, '', 'Viewed Reports', '2012-02-16 15:36:33'),
(56, '', 'Viewed Reports', '2012-02-16 15:36:41'),
(57, '', 'Viewed Reports', '2012-02-16 15:36:46'),
(58, 'lnu_sc', 'Log-Out', '2012-02-16 15:36:48'),
(59, 'director', 'Log-In', '2012-02-16 15:37:47'),
(60, 'director', 'Viewed Reports', '2012-02-16 15:38:22'),
(61, 'director', 'Viewed Reports', '2012-02-16 15:38:31'),
(62, 'director', 'Log-Out', '2012-02-16 15:38:37'),
(63, 'edusupervisor', 'Log-In', '2012-02-16 15:43:22'),
(64, 'edusupervisor', 'Confirmed an Application for Ranking', '2012-02-16 15:44:16'),
(65, 'edusupervisor', 'Approved an Scholarship', '2012-02-16 15:44:34');

-- --------------------------------------------------------

--
-- Table structure for table `awardno_tbl`
--

CREATE TABLE `awardno_tbl` (
  `AWARDNO_ID` int(8) NOT NULL auto_increment,
  `AWARDNO_AWARD` varchar(30) NOT NULL,
  `GRANT_ID` int(3) NOT NULL,
  `AWARDNO_AVAILABILITY` int(1) NOT NULL,
  PRIMARY KEY  (`AWARDNO_ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `awardno_tbl`
--

INSERT INTO `awardno_tbl` (`AWARDNO_ID`, `AWARDNO_AWARD`, `GRANT_ID`, `AWARDNO_AVAILABILITY`) VALUES
(1, 'FM-20011-AA1', 1, 1),
(2, 'FM-20011-AA2', 1, 1),
(3, 'FM-20011-AA3', 1, 0),
(4, 'FM-20011-AA4', 1, 0),
(5, 'FM-20011-AA5', 1, 0),
(6, 'FM-20011-AA6', 1, 0),
(7, 'HM-20011-AA1', 2, 1),
(8, 'HM-20011-AA2', 2, 0),
(9, 'HM-20011-AA3', 2, 0);

-- --------------------------------------------------------

--
-- Table structure for table `beneficiary_tbl`
--

CREATE TABLE `beneficiary_tbl` (
  `BENEFICIARY_ID` int(11) NOT NULL auto_increment,
  `BENEFICIARY_nam1` varchar(65) NOT NULL,
  `BENEFICIARY_nam2` varchar(65) NOT NULL,
  `BENEFICIARY_nam3` varchar(65) NOT NULL,
  `BENEFICIARY_GENDER` varchar(6) NOT NULL,
  `GRANT_ID` int(3) NOT NULL,
  `PROG_ID` int(6) NOT NULL,
  `BENEFICIARY_YRLVL` int(1) NOT NULL,
  `BENEFICIARY_AWARDNO` varchar(20) NOT NULL,
  `BENEFICIARY_GRANTEFFECTIVITY` date NOT NULL,
  `BENE_SCHOOLYREFFEC` varchar(10) NOT NULL,
  `BENEFICIARY_CONTACTNO` varchar(20) NOT NULL,
  `BENEFICIARY_STAT` varchar(50) NOT NULL,
  `BENEFICIARY_WAIVECTR` tinyint(1) NOT NULL,
  `HEI_ID` int(11) NOT NULL,
  `BENEFICIARY_MAILADD` varchar(200) NOT NULL,
  `BENE_CONGDIST` tinyint(1) NOT NULL,
  `BENE_EMAILADD` varchar(100) NOT NULL,
  PRIMARY KEY  (`BENEFICIARY_ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `beneficiary_tbl`
--

INSERT INTO `beneficiary_tbl` (`BENEFICIARY_ID`, `BENEFICIARY_nam1`, `BENEFICIARY_nam2`, `BENEFICIARY_nam3`, `BENEFICIARY_GENDER`, `GRANT_ID`, `PROG_ID`, `BENEFICIARY_YRLVL`, `BENEFICIARY_AWARDNO`, `BENEFICIARY_GRANTEFFECTIVITY`, `BENE_SCHOOLYREFFEC`, `BENEFICIARY_CONTACTNO`, `BENEFICIARY_STAT`, `BENEFICIARY_WAIVECTR`, `HEI_ID`, `BENEFICIARY_MAILADD`, `BENE_CONGDIST`, `BENE_EMAILADD`) VALUES
(1, 'roniel', 'bacolongan', 'GAMATA', 'MALE', 1, 1, 1, 'FM-20011-AA2', '2012-02-16', '2011-2012', '09157482123', 'ENROLLED', 0, 1, '220 carolina st. brgy. 13, guiuan, eastern samar', 1, 'roniel44@gmail.com'),
(2, 'mary christine', 'garcia', 'aruta', 'MALE', 2, 0, 0, 'HM-20011-AA1', '2012-02-16', '2011-2012', '09157482123', 'NEW', 0, 0, 'CAIBAAN, tacloban city', 1, 'gilann@yahoo.com');

-- --------------------------------------------------------

--
-- Table structure for table `contactcontent_tbl`
--

CREATE TABLE `contactcontent_tbl` (
  `contactcontent_id` tinyint(1) NOT NULL auto_increment,
  `contactcontent_txt` longtext NOT NULL,
  PRIMARY KEY  (`contactcontent_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `contactcontent_tbl`
--

INSERT INTO `contactcontent_tbl` (`contactcontent_id`, `contactcontent_txt`) VALUES
(1, '			<b></b><br><div style="text-align: center;"><font style="font-family: courier new;" size="4"><span style="font-weight: bold;">Antonio Lim</span></font><br><span style="font-style: italic; font-family: courier new;">antoniolim@yahoo.com</span><br></div><div style="text-align: center;">Education Supervisor<br></div><br><div style="text-align: center;"><font style="font-family: courier new; font-weight: bold;" size="3">Dr. Libertad P. Garcia</font><br>Acting Director, Office of the Director IV<br>&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;<br>&nbsp;&nbsp;&nbsp; <span style="font-style: italic;">cor. Real Street and Calanipawan Road,</span><br style="font-style: italic;"><span style="font-style: italic;">&nbsp;&nbsp;&nbsp; Sagkahan, Tacloban City</span><br style="font-style: italic;"><span style="font-style: italic;">&nbsp;&nbsp;&nbsp; Telefax. # +63 (053) 523-40-34</span><br style="font-style: italic;"><span style="font-style: italic;">&nbsp;&nbsp;&nbsp; Tel. # +63 (053) 523-7437 / 7288 </span><br>\r\n\r\n\r\n			\r\n			\r\n			\r\n			\r\n			\r\n			\r\n			\r\n			</div>\r\n			\r\n			');

-- --------------------------------------------------------

--
-- Table structure for table `coordinator_tbl`
--

CREATE TABLE `coordinator_tbl` (
  `SC_USERNAM` varchar(30) NOT NULL,
  `SC_PASS` varchar(30) NOT NULL,
  `SC_NAM3` varchar(30) NOT NULL,
  `SC_NAM2` varchar(30) NOT NULL,
  `SC_NAM1` varchar(30) NOT NULL,
  `HEI_ID` int(8) NOT NULL auto_increment,
  PRIMARY KEY  (`HEI_ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `coordinator_tbl`
--

INSERT INTO `coordinator_tbl` (`SC_USERNAM`, `SC_PASS`, `SC_NAM3`, `SC_NAM2`, `SC_NAM1`, `HEI_ID`) VALUES
('SC_STI', '123456', 'Nevaliza', 'Oscar', 'Tan', 1),
('ACLC_SC', '123456', 'De Veyra', 'Hanopol', 'Lourd', 2),
('ESSUMAINSC', '123456', 'Bandoy', 'Christine', 'Mary', 3),
('evsutac_scoor', '123456', 'Clemente', 'W', 'George', 4),
('lnu_sc', '123456', 'Talacay', 'Lozada', 'Noel', 5);

-- --------------------------------------------------------

--
-- Table structure for table `director_tbl`
--

CREATE TABLE `director_tbl` (
  `directorID` int(1) NOT NULL auto_increment,
  `directorUsername` varchar(30) default NULL,
  `directorPassword` varchar(30) default NULL,
  `directorFullname` varchar(65) NOT NULL,
  PRIMARY KEY  (`directorID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `director_tbl`
--

INSERT INTO `director_tbl` (`directorID`, `directorUsername`, `directorPassword`, `directorFullname`) VALUES
(1, 'director', '123456', 'Director Libertad Garcia');

-- --------------------------------------------------------

--
-- Table structure for table `edusupervisor`
--

CREATE TABLE `edusupervisor` (
  `edusupervisorID` int(1) NOT NULL auto_increment,
  `edusupervisorUsername` varchar(30) default NULL,
  `edusupervisorPassword` varchar(30) default NULL,
  `edusupervisorNAM3` varchar(35) NOT NULL,
  `edusupervisorNAM2` varchar(35) NOT NULL,
  `edusupervisorNAM1` varchar(35) NOT NULL,
  PRIMARY KEY  (`edusupervisorID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `edusupervisor`
--

INSERT INTO `edusupervisor` (`edusupervisorID`, `edusupervisorUsername`, `edusupervisorPassword`, `edusupervisorNAM3`, `edusupervisorNAM2`, `edusupervisorNAM1`) VALUES
(1, 'edusupervisor', '112112', 'Lim', 'M', 'Antonio');

-- --------------------------------------------------------

--
-- Table structure for table `faqcontenttbl`
--

CREATE TABLE `faqcontenttbl` (
  `faqID` tinyint(1) NOT NULL auto_increment,
  `faqCONTENT` longtext NOT NULL,
  PRIMARY KEY  (`faqID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `faqcontenttbl`
--

INSERT INTO `faqcontenttbl` (`faqID`, `faqCONTENT`) VALUES
(1, '<span style="font-weight: bold;">Frequently Answered Questions</span><br><div style="text-align: left;"><ol><li><span style="font-weight: normal;"><span style="font-weight: bold;">How do I Pre-register? - You can Pre-register at the Front of the system.</span></span></li><li><span style="font-weight: normal;"><span style="font-weight: bold;">When can I receive the e-mail? - after your Pre-registration, the system will decide.<br></span></span></li></ol></div>\r\n\r\n\r\n\r\n\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `frontmaincontent_tbl`
--

CREATE TABLE `frontmaincontent_tbl` (
  `frontmaincontent_id` tinyint(1) NOT NULL auto_increment,
  `frontmaincontent_txt` longtext NOT NULL,
  PRIMARY KEY  (`frontmaincontent_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `frontmaincontent_tbl`
--

INSERT INTO `frontmaincontent_tbl` (`frontmaincontent_id`, `frontmaincontent_txt`) VALUES
(1, '<font style="font-family: times new roman;" size="2"><font size="4"><center><b>Commission on Higher Education</b>\r\n<b>(CHED)</b></center></font></font><br style="font-family: comic sans ms;"><font size="2"><span style="font-family: georgia;"><br><span style="font-style: italic;">The</span> </span><font size="3"><b style="font-family: georgia;">Commission on Higher Education</b></font><span style="font-family: georgia; font-style: italic;"><span style="font-weight: bold;"> </span>was created on May 18, 1994&nbsp;through the passage of Republic Act No. \r\n7722, or the Higher Education Act of 1994. CHED, an attached agency to \r\nthe Office of the President for administrative purposes, is headed by \r\na&nbsp;chairman and four commissioners, each having a term of office of four \r\nyears. The&nbsp;Commission </span><b style="font-family: georgia; font-style: italic;">En Banc\r\n</b><span style="font-family: georgia; font-style: italic;">\r\n&nbsp;acts as a collegial body in formulating plans, policies and \r\nstrategies&nbsp;relating to higher education and the operation of CHED. The \r\ncreation of CHED was part of a broad agenda of reforms on the \r\ncountryâ€™s&nbsp;education system outlined by the Congressional Commission on \r\nEducation </span><b style="font-family: georgia; font-style: italic;">(EDCOM)</b><span style="font-family: georgia; font-style: italic;">\r\n&nbsp;in&nbsp;1992. Part of the reforms was the trifocalization of the education \r\nsector into three&nbsp;governing bodies: the CHED for tertiary and&nbsp;graduate \r\neducation, the Department of Education </span><b style="font-family: georgia; font-style: italic;">(DepEd)</b><span style="font-family: georgia; font-style: italic;">\r\n&nbsp;for basic education and the&nbsp;Technical Education and Skills Development Authority </span><b style="font-family: georgia; font-style: italic;">(TESDA)</b><span style="font-family: georgia; font-style: italic;">\r\n&nbsp;for technical-vocational&nbsp;and middle-level education.</span></font><br><font size="2">\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n				\r\n				\r\n				\r\n				\r\n				\r\n				\r\n				</font>\r\n				\r\n				\r\n				\r\n				\r\n				\r\n				\r\n				\r\n				\r\n				');

-- --------------------------------------------------------

--
-- Table structure for table `grade_tbl`
--

CREATE TABLE `grade_tbl` (
  `GRADE_ID` int(11) NOT NULL auto_increment,
  `schoolyr_yr` varchar(10) NOT NULL,
  `GRADE_SCHOOLYR` tinyint(1) NOT NULL,
  `GRADE_SEM` tinyint(1) NOT NULL,
  `GRADE_SUBJ` varchar(50) NOT NULL,
  `GRADE_REQ` varchar(20) NOT NULL,
  `GRADE_UNIT` tinyint(1) NOT NULL,
  `GRADE_GRADE` float NOT NULL,
  `BENEFICIARY_ID` int(8) NOT NULL,
  PRIMARY KEY  (`GRADE_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `grade_tbl`
--


-- --------------------------------------------------------

--
-- Table structure for table `grant_tbl`
--

CREATE TABLE `grant_tbl` (
  `GRANT_ID` int(3) NOT NULL auto_increment,
  `GRANT_CODE` varchar(30) NOT NULL,
  `GRANT_CAT` varchar(45) NOT NULL,
  `GRANT_FULLNAM` varchar(60) default NULL,
  `GRANT_DESCRIPTION` longtext,
  `GRANT_SHORTNAM` varchar(30) default NULL,
  `GRANT_MERITDESCINT` int(6) default NULL,
  PRIMARY KEY  (`GRANT_ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `grant_tbl`
--

INSERT INTO `grant_tbl` (`GRANT_ID`, `GRANT_CODE`, `GRANT_CAT`, `GRANT_FULLNAM`, `GRANT_DESCRIPTION`, `GRANT_SHORTNAM`, `GRANT_MERITDESCINT`) VALUES
(1, 'FULL', 'SCHOLARSHIP', 'Full-Merit - 15,000.00/sem', 'This program is for bright Filipinos students who got the highest scores in the NCAE and must belong to the top ten of the gruduating class.', 'Full-Merit', 15000),
(2, 'HALF', 'SCHOLARSHIP', 'Half-Merit Scholarship', 'This program is for bright Filipinos students who got a percentile NCAE rating score of 85 - 89.', 'Half-Merit', 7500),
(3, 'SNPLP', 'STUDENT LOAN', 'STUDENT LOAN PROGRAM', 'STUDENT LOAN PROGRAM', 'STUDENT LOAN PROGRAM', 7500),
(4, 'DND-CHED-PASUC', 'GRANT-IN-AID', 'DND-CHED-PASUC STUDY GRANT PROGRAM', 'This grant program is intended for dependents of killed-in-action(KIA), battle related.', 'DND-CHED-PASUC/2500 per sem', 2500),
(5, 'OPAPP', 'GRANT-IN-AID', 'OPAPP-CHED STUDY GRANT PROGRAM FOR REBEL RETURNESS', 'This grant-program is intended for former rebels and the legitimized dependents which expands the access to college opportunities', 'OPAPP/5000 per sem', 5000),
(6, 'CHED- STGPFCD/S', 'GRANT-IN-AID', 'CHED SPECIAL STUDY GRANT PROGRAM FOR CONGRESSIONAL DISTRICT/', 'This grant-program is intended for the contituents for congressmen, party list representatives and senators', 'CHED- STGPFCD/S', 0),
(7, 'Grant in aid', 'GRANT-IN-AID', 'STUDY GRANT PROGRAM FOR SOLO PARENTS AND THEIR DEPENDENTS', 'This program is intended or all solo parents and their children', 'GRANT IN AID/6000', 6000);

-- --------------------------------------------------------

--
-- Table structure for table `hei_program_tbl`
--

CREATE TABLE `hei_program_tbl` (
  `HEI_PROGRAM_ID` int(8) NOT NULL auto_increment,
  `HEI_ID` int(8) NOT NULL,
  `PROG_ID` int(11) NOT NULL,
  `HEI_PROG_TUITION` int(8) NOT NULL,
  `HEI_PROG_STAT` varchar(10) NOT NULL,
  PRIMARY KEY  (`HEI_PROGRAM_ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `hei_program_tbl`
--

INSERT INTO `hei_program_tbl` (`HEI_PROGRAM_ID`, `HEI_ID`, `PROG_ID`, `HEI_PROG_TUITION`, `HEI_PROG_STAT`) VALUES
(1, 1, 1, 4000, 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `hei_tbl`
--

CREATE TABLE `hei_tbl` (
  `HEI_ID` int(8) NOT NULL auto_increment,
  `HEI_NAM` varchar(100) NOT NULL,
  `HEITYPE_ID` int(3) NOT NULL,
  `HEI_MUN` varchar(30) NOT NULL,
  `HEI_PROV` varchar(30) NOT NULL,
  `HEI_ACRONAM` varchar(20) NOT NULL,
  `HEI_TELNUM` varchar(20) NOT NULL,
  PRIMARY KEY  (`HEI_ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `hei_tbl`
--

INSERT INTO `hei_tbl` (`HEI_ID`, `HEI_NAM`, `HEITYPE_ID`, `HEI_MUN`, `HEI_PROV`, `HEI_ACRONAM`, `HEI_TELNUM`) VALUES
(1, 'STI - College - Tacloban Branch', 3, 'Tacloban City', 'Leyte', 'STI - Tacloban', '221-5531 (23)'),
(2, 'AMA Computer Learning Center', 3, 'Tacloban City', 'Leyte', 'ACLC', '513-3213'),
(3, 'Eastern Samar State University - Main Campus', 1, 'Borangan', 'Silangang Samar', 'ESSU - Main', '999-1231'),
(4, 'Eastern Visayas State University', 1, 'Tacloban', 'Leyte', 'EVSU-Tacloban', '321 â€“ 3229'),
(5, 'Leyte Normal University', 1, 'Tacloban', 'Leyte', 'LNU', '321 â€“ 3768');

-- --------------------------------------------------------

--
-- Table structure for table `heitype_tbl`
--

CREATE TABLE `heitype_tbl` (
  `HEITYPE_ID` int(3) NOT NULL auto_increment,
  `HEITYPE_NAM` varchar(30) NOT NULL,
  `HEITYPE_DESC` varchar(65) NOT NULL,
  PRIMARY KEY  (`HEITYPE_ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `heitype_tbl`
--

INSERT INTO `heitype_tbl` (`HEITYPE_ID`, `HEITYPE_NAM`, `HEITYPE_DESC`) VALUES
(1, 'Public1', 'Public, funded by the National Government'),
(2, 'Public2', 'Public, funded by a Local Government'),
(3, 'Private1', 'Private SECTARIAN.'),
(4, 'Private2', 'Private Non-Sectarian stock.'),
(5, 'Private3', 'Private Non-Sectarian non-stock');

-- --------------------------------------------------------

--
-- Table structure for table `hstype_tbl`
--

CREATE TABLE `hstype_tbl` (
  `HSTYPE_ID` int(3) NOT NULL auto_increment,
  `HSTYPE_NAM` varchar(30) NOT NULL,
  `HSTYPE_DESC` varchar(30) NOT NULL,
  PRIMARY KEY  (`HSTYPE_ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `hstype_tbl`
--

INSERT INTO `hstype_tbl` (`HSTYPE_ID`, `HSTYPE_NAM`, `HSTYPE_DESC`) VALUES
(1, 'Public General High School', 'Public General High School'),
(2, 'Public Vocational/Trade High S', 'Public Vocational/Trade High S');

-- --------------------------------------------------------

--
-- Table structure for table `mate_columns`
--

CREATE TABLE `mate_columns` (
  `id` mediumint(8) unsigned NOT NULL auto_increment,
  `mate_user_id` varchar(75) collate utf8_unicode_ci NOT NULL,
  `mate_var_prefix` varchar(100) collate utf8_unicode_ci NOT NULL,
  `mate_column` varchar(75) collate utf8_unicode_ci NOT NULL,
  `hidden` varchar(3) collate utf8_unicode_ci NOT NULL default 'No',
  `order_num` mediumint(4) unsigned NOT NULL,
  `date_updated` datetime NOT NULL,
  PRIMARY KEY  (`id`),
  KEY `mate_user_id` (`mate_user_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=3 ;

--
-- Dumping data for table `mate_columns`
--

INSERT INTO `mate_columns` (`id`, `mate_user_id`, `mate_var_prefix`, `mate_column`, `hidden`, `order_num`, `date_updated`) VALUES
(1, '0aa9f4fdc0abac12bc58d92a610fdd9a', 'id-StuFAP', 'email', 'Yes', 0, '2011-04-11 10:36:18'),
(2, '0aa9f4fdc0abac12bc58d92a610fdd9a', 'id-StuFAP', 'Example', 'No', 0, '2011-04-11 11:00:26');

-- --------------------------------------------------------

--
-- Table structure for table `missioncontenttbl`
--

CREATE TABLE `missioncontenttbl` (
  `missionID` tinyint(1) NOT NULL auto_increment,
  `missionCONTENT` longtext NOT NULL,
  PRIMARY KEY  (`missionID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `missioncontenttbl`
--

INSERT INTO `missioncontenttbl` (`missionID`, `missionCONTENT`) VALUES
(1, '<!--[if gte mso 9]><xml>\r\n <w:WordDocument>\r\n  <w:View>Normal</w:View>\r\n  <w:Zoom>0</w:Zoom>\r\n  <w:TrackMoves/>\r\n  <w:TrackFormatting/>\r\n  <w:PunctuationKerning/>\r\n  <w:ValidateAgainstSchemas/>\r\n  <w:SaveIfXMLInvalid>false</w:SaveIfXMLInvalid>\r\n  <w:IgnoreMixedContent>false</w:IgnoreMixedContent>\r\n  <w:AlwaysShowPlaceholderText>false</w:AlwaysShowPlaceholderText>\r\n  <w:DoNotPromoteQF/>\r\n  <w:LidThemeOther>EN-US</w:LidThemeOther>\r\n  <w:LidThemeAsian>X-NONE</w:LidThemeAsian>\r\n  <w:LidThemeComplexScript>X-NONE</w:LidThemeComplexScript>\r\n  <w:Compatibility>\r\n   <w:BreakWrappedTables/>\r\n   <w:SnapToGridInCell/>\r\n   <w:WrapTextWithPunct/>\r\n   <w:UseAsianBreakRules/>\r\n   <w:DontGrowAutofit/>\r\n   <w:SplitPgBreakAndParaMark/>\r\n   <w:DontVertAlignCellWithSp/>\r\n   <w:DontBreakConstrainedForcedTables/>\r\n   <w:DontVertAlignInTxbx/>\r\n   <w:Word11KerningPairs/>\r\n   <w:CachedColBalance/>\r\n  </w:Compatibility>\r\n  <m:mathPr>\r\n   <m:mathFont m:val="Cambria Math"/>\r\n   <m:brkBin m:val="before"/>\r\n   <m:brkBinSub m:val="&#45;-"/>\r\n   <m:smallFrac m:val="off"/>\r\n   <m:dispDef/>\r\n   <m:lMargin m:val="0"/>\r\n   <m:rMargin m:val="0"/>\r\n   <m:defJc m:val="centerGroup"/>\r\n   <m:wrapIndent m:val="1440"/>\r\n   <m:intLim m:val="subSup"/>\r\n   <m:naryLim m:val="undOvr"/>\r\n  </m:mathPr></w:WordDocument>\r\n</xml><![endif]--><!--[if gte mso 9]><xml>\r\n <w:LatentStyles DefLockedState="false" DefUnhideWhenUsed="true"\r\n  DefSemiHidden="true" DefQFormat="false" DefPriority="99"\r\n  LatentStyleCount="267">\r\n  <w:LsdException Locked="false" Priority="0" SemiHidden="false"\r\n   UnhideWhenUsed="false" QFormat="true" Name="Normal"/>\r\n  <w:LsdException Locked="false" Priority="9" SemiHidden="false"\r\n   UnhideWhenUsed="false" QFormat="true" Name="heading 1"/>\r\n  <w:LsdException Locked="false" Priority="9" QFormat="true" Name="heading 2"/>\r\n  <w:LsdException Locked="false" Priority="9" QFormat="true" Name="heading 3"/>\r\n  <w:LsdException Locked="false" Priority="9" QFormat="true" Name="heading 4"/>\r\n  <w:LsdException Locked="false" Priority="9" QFormat="true" Name="heading 5"/>\r\n  <w:LsdException Locked="false" Priority="9" QFormat="true" Name="heading 6"/>\r\n  <w:LsdException Locked="false" Priority="9" QFormat="true" Name="heading 7"/>\r\n  <w:LsdException Locked="false" Priority="9" QFormat="true" Name="heading 8"/>\r\n  <w:LsdException Locked="false" Priority="9" QFormat="true" Name="heading 9"/>\r\n  <w:LsdException Locked="false" Priority="39" Name="toc 1"/>\r\n  <w:LsdException Locked="false" Priority="39" Name="toc 2"/>\r\n  <w:LsdException Locked="false" Priority="39" Name="toc 3"/>\r\n  <w:LsdException Locked="false" Priority="39" Name="toc 4"/>\r\n  <w:LsdException Locked="false" Priority="39" Name="toc 5"/>\r\n  <w:LsdException Locked="false" Priority="39" Name="toc 6"/>\r\n  <w:LsdException Locked="false" Priority="39" Name="toc 7"/>\r\n  <w:LsdException Locked="false" Priority="39" Name="toc 8"/>\r\n  <w:LsdException Locked="false" Priority="39" Name="toc 9"/>\r\n  <w:LsdException Locked="false" Priority="35" QFormat="true" Name="caption"/>\r\n  <w:LsdException Locked="false" Priority="10" SemiHidden="false"\r\n   UnhideWhenUsed="false" QFormat="true" Name="Title"/>\r\n  <w:LsdException Locked="false" Priority="1" Name="Default Paragraph Font"/>\r\n  <w:LsdException Locked="false" Priority="11" SemiHidden="false"\r\n   UnhideWhenUsed="false" QFormat="true" Name="Subtitle"/>\r\n  <w:LsdException Locked="false" Priority="22" SemiHidden="false"\r\n   UnhideWhenUsed="false" QFormat="true" Name="Strong"/>\r\n  <w:LsdException Locked="false" Priority="20" SemiHidden="false"\r\n   UnhideWhenUsed="false" QFormat="true" Name="Emphasis"/>\r\n  <w:LsdException Locked="false" Priority="59" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Table Grid"/>\r\n  <w:LsdException Locked="false" UnhideWhenUsed="false" Name="Placeholder Text"/>\r\n  <w:LsdException Locked="false" Priority="1" SemiHidden="false"\r\n   UnhideWhenUsed="false" QFormat="true" Name="No Spacing"/>\r\n  <w:LsdException Locked="false" Priority="60" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Light Shading"/>\r\n  <w:LsdException Locked="false" Priority="61" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Light List"/>\r\n  <w:LsdException Locked="false" Priority="62" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Light Grid"/>\r\n  <w:LsdException Locked="false" Priority="63" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Medium Shading 1"/>\r\n  <w:LsdException Locked="false" Priority="64" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Medium Shading 2"/>\r\n  <w:LsdException Locked="false" Priority="65" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Medium List 1"/>\r\n  <w:LsdException Locked="false" Priority="66" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Medium List 2"/>\r\n  <w:LsdException Locked="false" Priority="67" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Medium Grid 1"/>\r\n  <w:LsdException Locked="false" Priority="68" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Medium Grid 2"/>\r\n  <w:LsdException Locked="false" Priority="69" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Medium Grid 3"/>\r\n  <w:LsdException Locked="false" Priority="70" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Dark List"/>\r\n  <w:LsdException Locked="false" Priority="71" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Colorful Shading"/>\r\n  <w:LsdException Locked="false" Priority="72" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Colorful List"/>\r\n  <w:LsdException Locked="false" Priority="73" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Colorful Grid"/>\r\n  <w:LsdException Locked="false" Priority="60" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Light Shading Accent 1"/>\r\n  <w:LsdException Locked="false" Priority="61" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Light List Accent 1"/>\r\n  <w:LsdException Locked="false" Priority="62" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Light Grid Accent 1"/>\r\n  <w:LsdException Locked="false" Priority="63" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Medium Shading 1 Accent 1"/>\r\n  <w:LsdException Locked="false" Priority="64" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Medium Shading 2 Accent 1"/>\r\n  <w:LsdException Locked="false" Priority="65" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Medium List 1 Accent 1"/>\r\n  <w:LsdException Locked="false" UnhideWhenUsed="false" Name="Revision"/>\r\n  <w:LsdException Locked="false" Priority="34" SemiHidden="false"\r\n   UnhideWhenUsed="false" QFormat="true" Name="List Paragraph"/>\r\n  <w:LsdException Locked="false" Priority="29" SemiHidden="false"\r\n   UnhideWhenUsed="false" QFormat="true" Name="Quote"/>\r\n  <w:LsdException Locked="false" Priority="30" SemiHidden="false"\r\n   UnhideWhenUsed="false" QFormat="true" Name="Intense Quote"/>\r\n  <w:LsdException Locked="false" Priority="66" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Medium List 2 Accent 1"/>\r\n  <w:LsdException Locked="false" Priority="67" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Medium Grid 1 Accent 1"/>\r\n  <w:LsdException Locked="false" Priority="68" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Medium Grid 2 Accent 1"/>\r\n  <w:LsdException Locked="false" Priority="69" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Medium Grid 3 Accent 1"/>\r\n  <w:LsdException Locked="false" Priority="70" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Dark List Accent 1"/>\r\n  <w:LsdException Locked="false" Priority="71" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Colorful Shading Accent 1"/>\r\n  <w:LsdException Locked="false" Priority="72" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Colorful List Accent 1"/>\r\n  <w:LsdException Locked="false" Priority="73" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Colorful Grid Accent 1"/>\r\n  <w:LsdException Locked="false" Priority="60" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Light Shading Accent 2"/>\r\n  <w:LsdException Locked="false" Priority="61" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Light List Accent 2"/>\r\n  <w:LsdException Locked="false" Priority="62" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Light Grid Accent 2"/>\r\n  <w:LsdException Locked="false" Priority="63" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Medium Shading 1 Accent 2"/>\r\n  <w:LsdException Locked="false" Priority="64" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Medium Shading 2 Accent 2"/>\r\n  <w:LsdException Locked="false" Priority="65" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Medium List 1 Accent 2"/>\r\n  <w:LsdException Locked="false" Priority="66" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Medium List 2 Accent 2"/>\r\n  <w:LsdException Locked="false" Priority="67" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Medium Grid 1 Accent 2"/>\r\n  <w:LsdException Locked="false" Priority="68" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Medium Grid 2 Accent 2"/>\r\n  <w:LsdException Locked="false" Priority="69" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Medium Grid 3 Accent 2"/>\r\n  <w:LsdException Locked="false" Priority="70" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Dark List Accent 2"/>\r\n  <w:LsdException Locked="false" Priority="71" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Colorful Shading Accent 2"/>\r\n  <w:LsdException Locked="false" Priority="72" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Colorful List Accent 2"/>\r\n  <w:LsdException Locked="false" Priority="73" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Colorful Grid Accent 2"/>\r\n  <w:LsdException Locked="false" Priority="60" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Light Shading Accent 3"/>\r\n  <w:LsdException Locked="false" Priority="61" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Light List Accent 3"/>\r\n  <w:LsdException Locked="false" Priority="62" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Light Grid Accent 3"/>\r\n  <w:LsdException Locked="false" Priority="63" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Medium Shading 1 Accent 3"/>\r\n  <w:LsdException Locked="false" Priority="64" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Medium Shading 2 Accent 3"/>\r\n  <w:LsdException Locked="false" Priority="65" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Medium List 1 Accent 3"/>\r\n  <w:LsdException Locked="false" Priority="66" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Medium List 2 Accent 3"/>\r\n  <w:LsdException Locked="false" Priority="67" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Medium Grid 1 Accent 3"/>\r\n  <w:LsdException Locked="false" Priority="68" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Medium Grid 2 Accent 3"/>\r\n  <w:LsdException Locked="false" Priority="69" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Medium Grid 3 Accent 3"/>\r\n  <w:LsdException Locked="false" Priority="70" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Dark List Accent 3"/>\r\n  <w:LsdException Locked="false" Priority="71" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Colorful Shading Accent 3"/>\r\n  <w:LsdException Locked="false" Priority="72" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Colorful List Accent 3"/>\r\n  <w:LsdException Locked="false" Priority="73" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Colorful Grid Accent 3"/>\r\n  <w:LsdException Locked="false" Priority="60" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Light Shading Accent 4"/>\r\n  <w:LsdException Locked="false" Priority="61" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Light List Accent 4"/>\r\n  <w:LsdException Locked="false" Priority="62" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Light Grid Accent 4"/>\r\n  <w:LsdException Locked="false" Priority="63" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Medium Shading 1 Accent 4"/>\r\n  <w:LsdException Locked="false" Priority="64" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Medium Shading 2 Accent 4"/>\r\n  <w:LsdException Locked="false" Priority="65" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Medium List 1 Accent 4"/>\r\n  <w:LsdException Locked="false" Priority="66" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Medium List 2 Accent 4"/>\r\n  <w:LsdException Locked="false" Priority="67" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Medium Grid 1 Accent 4"/>\r\n  <w:LsdException Locked="false" Priority="68" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Medium Grid 2 Accent 4"/>\r\n  <w:LsdException Locked="false" Priority="69" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Medium Grid 3 Accent 4"/>\r\n  <w:LsdException Locked="false" Priority="70" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Dark List Accent 4"/>\r\n  <w:LsdException Locked="false" Priority="71" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Colorful Shading Accent 4"/>\r\n  <w:LsdException Locked="false" Priority="72" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Colorful List Accent 4"/>\r\n  <w:LsdException Locked="false" Priority="73" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Colorful Grid Accent 4"/>\r\n  <w:LsdException Locked="false" Priority="60" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Light Shading Accent 5"/>\r\n  <w:LsdException Locked="false" Priority="61" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Light List Accent 5"/>\r\n  <w:LsdException Locked="false" Priority="62" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Light Grid Accent 5"/>\r\n  <w:LsdException Locked="false" Priority="63" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Medium Shading 1 Accent 5"/>\r\n  <w:LsdException Locked="false" Priority="64" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Medium Shading 2 Accent 5"/>\r\n  <w:LsdException Locked="false" Priority="65" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Medium List 1 Accent 5"/>\r\n  <w:LsdException Locked="false" Priority="66" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Medium List 2 Accent 5"/>\r\n  <w:LsdException Locked="false" Priority="67" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Medium Grid 1 Accent 5"/>\r\n  <w:LsdException Locked="false" Priority="68" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Medium Grid 2 Accent 5"/>\r\n  <w:LsdException Locked="false" Priority="69" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Medium Grid 3 Accent 5"/>\r\n  <w:LsdException Locked="false" Priority="70" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Dark List Accent 5"/>\r\n  <w:LsdException Locked="false" Priority="71" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Colorful Shading Accent 5"/>\r\n  <w:LsdException Locked="false" Priority="72" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Colorful List Accent 5"/>\r\n  <w:LsdException Locked="false" Priority="73" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Colorful Grid Accent 5"/>\r\n  <w:LsdException Locked="false" Priority="60" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Light Shading Accent 6"/>\r\n  <w:LsdException Locked="false" Priority="61" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Light List Accent 6"/>\r\n  <w:LsdException Locked="false" Priority="62" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Light Grid Accent 6"/>\r\n  <w:LsdException Locked="false" Priority="63" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Medium Shading 1 Accent 6"/>\r\n  <w:LsdException Locked="false" Priority="64" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Medium Shading 2 Accent 6"/>\r\n  <w:LsdException Locked="false" Priority="65" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Medium List 1 Accent 6"/>\r\n  <w:LsdException Locked="false" Priority="66" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Medium List 2 Accent 6"/>\r\n  <w:LsdException Locked="false" Priority="67" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Medium Grid 1 Accent 6"/>\r\n  <w:LsdException Locked="false" Priority="68" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Medium Grid 2 Accent 6"/>\r\n  <w:LsdException Locked="false" Priority="69" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Medium Grid 3 Accent 6"/>\r\n  <w:LsdException Locked="false" Priority="70" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Dark List Accent 6"/>\r\n  <w:LsdException Locked="false" Priority="71" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Colorful Shading Accent 6"/>\r\n  <w:LsdException Locked="false" Priority="72" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Colorful List Accent 6"/>\r\n  <w:LsdException Locked="false" Priority="73" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Colorful Grid Accent 6"/>\r\n  <w:LsdException Locked="false" Priority="19" SemiHidden="false"\r\n   UnhideWhenUsed="false" QFormat="true" Name="Subtle Emphasis"/>\r\n  <w:LsdException Locked="false" Priority="21" SemiHidden="false"\r\n   UnhideWhenUsed="false" QFormat="true" Name="Intense Emphasis"/>\r\n  <w:LsdException Locked="false" Priority="31" SemiHidden="false"\r\n   UnhideWhenUsed="false" QFormat="true" Name="Subtle Reference"/>\r\n  <w:LsdException Locked="false" Priority="32" SemiHidden="false"\r\n   UnhideWhenUsed="false" QFormat="true" Name="Intense Reference"/>\r\n  <w:LsdException Locked="false" Priority="33" SemiHidden="false"\r\n   UnhideWhenUsed="false" QFormat="true" Name="Book Title"/>\r\n  <w:LsdException Locked="false" Priority="37" Name="Bibliography"/>\r\n  <w:LsdException Locked="false" Priority="39" QFormat="true" Name="TOC Heading"/>\r\n </w:LatentStyles>\r\n</xml><![endif]--><!--[if gte mso 10]>\r\n<style>\r\n /* Style Definitions */\r\n table.MsoNormalTable\r\n	{mso-style-name:"Table Normal";\r\n	mso-tstyle-rowband-size:0;\r\n	mso-tstyle-colband-size:0;\r\n	mso-style-noshow:yes;\r\n	mso-style-priority:99;\r\n	mso-style-qformat:yes;\r\n	mso-style-parent:"";\r\n	mso-padding-alt:0in 5.4pt 0in 5.4pt;\r\n	mso-para-margin-top:0in;\r\n	mso-para-margin-right:0in;\r\n	mso-para-margin-bottom:10.0pt;\r\n	mso-para-margin-left:0in;\r\n	line-height:115%;\r\n	mso-pagination:widow-orphan;\r\n	font-size:11.0pt;\r\n	font-family:"Calibri","sans-serif";\r\n	mso-ascii-font-family:Calibri;\r\n	mso-ascii-theme-font:minor-latin;\r\n	mso-fareast-font-family:"Times New Roman";\r\n	mso-fareast-theme-font:minor-fareast;\r\n	mso-hansi-font-family:Calibri;\r\n	mso-hansi-theme-font:minor-latin;\r\n	mso-bidi-font-family:"Times New Roman";\r\n	mso-bidi-theme-font:minor-bidi;}\r\n</style>\r\n<![endif]-->\r\n\r\n<p style="font-family: comic sans ms; font-weight: bold;" class="MsoNormal"><font size="4">Mission</font></p>\r\n\r\n<p style="font-style: italic;" class="MsoNormal">To provide a Dynamic and Facilitative Leadership in the\r\nEducation and Integral Development of Individuals through Relevant. Accessible\r\nand Quality Higher Education Responsive to Socio â€“ Economic Challenges in a\r\nDiverse and Globalized Society.</p>\r\n\r\n<p class="MsoNormal">&nbsp;</p>\r\n\r\n<p style="font-family: comic sans ms; font-weight: bold;" class="MsoNormal"><font size="4">Vision</font></p>\r\n\r\n<p style="font-style: italic;" class="MsoNormal">A humane, Morally<span style="mso-spacerun:yes">&nbsp;\r\n</span>Upright,<span style="mso-spacerun:yes">&nbsp; </span>Professionally\r\nCompetent, Globally Competitive Citizenry who are Prime<span style="mso-spacerun:yes">&nbsp; </span>Movers in the Nationâ€™s Socio â€“ Economic and\r\nSustainable Development.</p>\r\n\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `payment_tbl`
--

CREATE TABLE `payment_tbl` (
  `PAYMENT_ID` int(11) NOT NULL auto_increment,
  `PAYMENT_TUITION` float NOT NULL,
  `PAYMENT_ALLOWANCE` float NOT NULL,
  `BENEFICIARY_ID` int(11) NOT NULL,
  `PAYMENT_BILL` float NOT NULL,
  `PAYMENT_DATE` date NOT NULL,
  `PAYMENT_SEM` tinyint(1) NOT NULL,
  `schoolyr_yr` varchar(10) NOT NULL,
  `PAYMENT_STATUS` varchar(10) NOT NULL,
  PRIMARY KEY  (`PAYMENT_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `payment_tbl`
--


-- --------------------------------------------------------

--
-- Table structure for table `paymentrecords_tbl`
--

CREATE TABLE `paymentrecords_tbl` (
  `PAYMENTRECORDS_ID` int(8) NOT NULL auto_increment,
  `PAYMENT_ID` int(8) NOT NULL,
  `PAYMENTRECORDS_DATE` timestamp NOT NULL default CURRENT_TIMESTAMP on update CURRENT_TIMESTAMP,
  PRIMARY KEY  (`PAYMENTRECORDS_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `paymentrecords_tbl`
--


-- --------------------------------------------------------

--
-- Table structure for table `prereg_tbl`
--

CREATE TABLE `prereg_tbl` (
  `PREREG_ID` int(8) NOT NULL auto_increment,
  `PREREG_FIRSTNAME` varchar(65) default NULL,
  `PREREG_MIDNAME` varchar(65) default NULL,
  `PREREG_LASTNAME` varchar(65) default NULL,
  `PREREG_BDAY` date NOT NULL,
  `PREREG_GWA` tinyint(3) default NULL,
  `PREREG_NCAE` tinyint(3) default NULL,
  `PREREG_AITR` double NOT NULL,
  `PREREG_CONTACT` varchar(30) NOT NULL,
  `PREREG_EMAILADD` varchar(35) NOT NULL,
  `GRANT_ID` tinyint(2) NOT NULL,
  `PREREG_DBLCHCK` tinyint(1) NOT NULL,
  PRIMARY KEY  (`PREREG_ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `prereg_tbl`
--

INSERT INTO `prereg_tbl` (`PREREG_ID`, `PREREG_FIRSTNAME`, `PREREG_MIDNAME`, `PREREG_LASTNAME`, `PREREG_BDAY`, `PREREG_GWA`, `PREREG_NCAE`, `PREREG_AITR`, `PREREG_CONTACT`, `PREREG_EMAILADD`, `GRANT_ID`, `PREREG_DBLCHCK`) VALUES
(1, 'roniel', 'bacolongan', 'GAMATA', '1995-02-16', 90, 92, 200000, '09157482123', 'roniel_44@yahoo.com', 1, 1),
(2, 'mary christine', 'garcia', 'aruta', '1990-02-16', 89, 89, 130000, '09157482123', 'gilann@yahoo.com', 2, 1);

-- --------------------------------------------------------

--
-- Table structure for table `progclass_tbl`
--

CREATE TABLE `progclass_tbl` (
  `PROGCLASS_ID` int(3) NOT NULL auto_increment,
  `PROGCLASS_NAM` varchar(30) NOT NULL,
  `PROGCLASS_DESC` varchar(65) NOT NULL,
  PRIMARY KEY  (`PROGCLASS_ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `progclass_tbl`
--

INSERT INTO `progclass_tbl` (`PROGCLASS_ID`, `PROGCLASS_NAM`, `PROGCLASS_DESC`) VALUES
(1, 'Certificate', ''),
(2, 'Diploma', 'e.g. Diploma in Information Technology'),
(3, 'Bachelor', 'e.g. Bachelor of Laws'),
(4, 'Bachelor of Science', 'e.g. BS Computer Science'),
(5, 'Bachelor of Arts', 'e.g. AB Humanities'),
(6, 'Master', 'e.g. Master of Business Administration'),
(7, 'Master of Arts', ''),
(8, 'Master of Science', '');

-- --------------------------------------------------------

--
-- Table structure for table `program_tbl`
--

CREATE TABLE `program_tbl` (
  `PROG_ID` int(11) NOT NULL auto_increment,
  `PROG_CODE` varchar(20) NOT NULL,
  `PROG_NAM` longtext NOT NULL,
  `PROGCLASS_ID` int(3) NOT NULL,
  `PROG_YRS` int(1) NOT NULL,
  `PROG_DISC` varchar(50) NOT NULL,
  PRIMARY KEY  (`PROG_ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `program_tbl`
--

INSERT INTO `program_tbl` (`PROG_ID`, `PROG_CODE`, `PROG_NAM`, `PROGCLASS_ID`, `PROG_YRS`, `PROG_DISC`) VALUES
(1, 'BSCS', 'Bachelor Of Science In Computer Science', 4, 4, 'IT'),
(2, 'BSCOE', 'Bachelor Of Science In Computer Engineering', 4, 5, 'IT'),
(3, 'BSIT', 'Bachelor Of Science In Information Technology', 4, 4, 'IT'),
(4, 'BSMgt', 'Bachelor Of Science In Management', 4, 4, 'BUSINESS');

-- --------------------------------------------------------

--
-- Table structure for table `schoolyr_tbl`
--

CREATE TABLE `schoolyr_tbl` (
  `schoolyr_id` tinyint(4) NOT NULL auto_increment,
  `schoolyr_yr` varchar(10) NOT NULL,
  PRIMARY KEY  (`schoolyr_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=33 ;

--
-- Dumping data for table `schoolyr_tbl`
--

INSERT INTO `schoolyr_tbl` (`schoolyr_id`, `schoolyr_yr`) VALUES
(21, '2011-2012'),
(29, '2012-2013'),
(30, '2013-2014'),
(31, '2014-2015'),
(32, '2015-2016');

-- --------------------------------------------------------

--
-- Table structure for table `sitemap_tbl`
--

CREATE TABLE `sitemap_tbl` (
  `sitemap_ID` int(3) NOT NULL auto_increment,
  `sitemap_PHOTO` varchar(65) NOT NULL,
  PRIMARY KEY  (`sitemap_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `sitemap_tbl`
--


-- --------------------------------------------------------

--
-- Table structure for table `sponsor_tbl`
--

CREATE TABLE `sponsor_tbl` (
  `sponsor_ID` int(8) NOT NULL auto_increment,
  `sponsor_title` varchar(30) NOT NULL,
  `sponsor_nam1` varchar(35) NOT NULL,
  `sponsor_nam2` varchar(35) NOT NULL,
  `sponsor_nam3` varchar(35) NOT NULL,
  `org_nam` varchar(65) NOT NULL,
  PRIMARY KEY  (`sponsor_ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `sponsor_tbl`
--

INSERT INTO `sponsor_tbl` (`sponsor_ID`, `sponsor_title`, `sponsor_nam1`, `sponsor_nam2`, `sponsor_nam3`, `org_nam`) VALUES
(1, 'Senator', 'Bong', 'Alvarez', 'Revilla', 'Senator Revilla Foundation'),
(2, 'Honorable', 'Anne', 'Ty', 'Tang', 'Anti-Tang Party List'),
(3, 'Sen.', 'Juan', 'Dela', 'Cruz', 'Juan Dela Cruz Foundation');

-- --------------------------------------------------------

--
-- Table structure for table `stufap`
--

CREATE TABLE `stufap` (
  `id` mediumint(8) unsigned NOT NULL auto_increment,
  `first_name` varchar(100) collate utf8_unicode_ci NOT NULL default '',
  `last_name` varchar(100) collate utf8_unicode_ci NOT NULL default '',
  `HEI_NAM` varchar(65) collate utf8_unicode_ci NOT NULL,
  `PROG_NAM` varchar(65) collate utf8_unicode_ci NOT NULL,
  `email` varchar(200) collate utf8_unicode_ci NOT NULL default '',
  `GRANT_STARTDATE` datetime NOT NULL,
  `Example` varchar(34) collate utf8_unicode_ci NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

--
-- Dumping data for table `stufap`
--

INSERT INTO `stufap` (`id`, `first_name`, `last_name`, `HEI_NAM`, `PROG_NAM`, `email`, `GRANT_STARTDATE`, `Example`) VALUES
(1, 'Juan', 'Cruz', 'STI', 'BS Computer Science', 'juancruz@yahoo.com', '2011-04-29 10:37:51', '');

-- --------------------------------------------------------

--
-- Table structure for table `sysadmin`
--

CREATE TABLE `sysadmin` (
  `adminID` int(1) NOT NULL auto_increment,
  `adminUsername` varchar(30) default NULL,
  `adminPassword` varchar(30) default NULL,
  `adminFullname` varchar(65) NOT NULL,
  PRIMARY KEY  (`adminID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `sysadmin`
--

INSERT INTO `sysadmin` (`adminID`, `adminUsername`, `adminPassword`, `adminFullname`) VALUES
(1, 'admin', '123456', 'Roniel');

-- --------------------------------------------------------

--
-- Table structure for table `upload`
--

CREATE TABLE `upload` (
  `id` int(11) NOT NULL auto_increment,
  `name` varchar(30) NOT NULL,
  `type` varchar(30) NOT NULL,
  `size` int(11) NOT NULL,
  `content` mediumblob NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `upload`
--

