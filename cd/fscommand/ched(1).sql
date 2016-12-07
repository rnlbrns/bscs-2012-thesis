-- phpMyAdmin SQL Dump
-- version 3.4.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Feb 08, 2012 at 02:17 PM
-- Server version: 5.5.20
-- PHP Version: 5.3.9

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `ched`
--

-- --------------------------------------------------------

--
-- Table structure for table `announcement_tbl`
--

CREATE TABLE IF NOT EXISTS `announcement_tbl` (
  `announcement_id` int(5) NOT NULL AUTO_INCREMENT,
  `announcement_header` varchar(200) NOT NULL,
  `announcement_text` longtext NOT NULL,
  `announcement_date` date NOT NULL,
  PRIMARY KEY (`announcement_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `announcement_tbl`
--

INSERT INTO `announcement_tbl` (`announcement_id`, `announcement_header`, `announcement_text`, `announcement_date`) VALUES
(1, 'Please Submit your reports', 'The Reports Will Contain the grades and the billing statements of each scholar.<br>', '2012-01-31'),
(2, 'Please Submit your reports and the grades', 'The grades of the scholars will be submitted<br>', '2012-01-31');

-- --------------------------------------------------------

--
-- Table structure for table `app_tbl`
--

CREATE TABLE IF NOT EXISTS `app_tbl` (
  `APP_ID` int(11) NOT NULL AUTO_INCREMENT,
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
  `APP_APPROVE` int(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`APP_ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=52 ;

--
-- Dumping data for table `app_tbl`
--

INSERT INTO `app_tbl` (`APP_ID`, `GRANT_ID`, `APP_FIRSTNAME`, `APP_MIDNAME`, `APP_LASTNAME`, `APP_BDAY`, `APP_BPLACE`, `APP_CSTAT`, `APP_GENDER`, `APP_CITI`, `APP_RELI`, `APP_MAILADD`, `APP_CONGDIST`, `APP_PERMADD`, `APP_HSNAM`, `APP_HSADD`, `APP_HSTYP`, `APP_HSYR`, `APP_HSRANK`, `APP_GWA`, `APP_NCAESCR`, `APP_NCAEDATE`, `APP_GRADDATE`, `APP_FATSTAT`, `APP_FATFIRSTNAME`, `APP_FATMIDNAME`, `APP_FATLASTNAME`, `APP_MOTSTAT`, `APP_MOTFIRSTNAME`, `APP_MOTMIDNAME`, `APP_MOTLASTNAME`, `APP_FATADD`, `APP_FATJOB`, `APP_MOTADD`, `APP_MOTJOB`, `APP_SIBNO`, `APP_HEIPREF`, `APP_COURSEFACTOR`, `APP_AITR`, `APP_CONTACT`, `APP_EMAILADD`, `APP_CONFREJ`, `APP_RANKCAL`, `APP_DATEAPP`, `APP_APPROVE`) VALUES
(1, 1, 'abegail', 'opana', 'quiambao', '1993-02-05', 'naval, biliran', 'Single', 'Female', 'Filipino', 'roman catholic', 'sagkahan, real st., tacloban city', 2, 'naval, biliran', 'naval national high school', 'naval, biliran', 'Public', '4', '2', 99, 90, '2011-04-12', '2011-04-06', 'Living', 'george', 'MENESES', 'quiambao', 'Living', 'helen', 'ABAD', 'opana', 'CALBAYOG, SAMAR', 'GOVERNMENT EMPLOYEE', 'naval, biliran', 'cashier', 2, 1, '', 30000, '09132131231', 'roniel_44@yahoo.com', 1, 60036, '2011-12-08', 1),
(2, 1, 'jennise', 'robredillo', 'pasudag', '1995-12-07', 'guiuan, eastern samar', 'Single', 'Female', 'Filipino', 'roman catholic', 'sagkahan, real st., tacloban city', 4, 'manicani, eastern samar', 'lnhs', 'guiuan, eastern samar', 'Public', '4', '3', 99, 99, '2011-12-17', '2011-12-30', 'Living', 'GABRIEL', 'MENESES', 'pasudag', 'Living', 'KAYE', 'ABAD', 'robredillo', 'CALBAYOG, SAMAR', 'GOVERNMENT EMPLOYEE', 'guiuan, eastern samar', 'RESTAURANT CASHIER', 4, 1, '', 160000, '09132131231', 'roniel_44@yahoo.com', 1, 60039.6, '2011-12-10', 1),
(3, 2, 'john', 'monroe', 'mompil', '1997-12-19', 'guiuan, eastern samar', 'Single', 'Male', 'Filipino', 'roman catholic', 'tacloban, leyte', 5, 'manicani, eastern samar', 'naval national high school', 'naval, biliran', 'Public', '1', '13', 99, 99, '2011-12-27', '2011-12-29', 'Living', 'GABRIEL', 'MENESES', 'MIRANDA', 'Living', 'maria', 'ABAD', 'CONTRERAS', 'CALBAYOG, SAMAR', 'GOVERNMENT EMPLOYEE', 'guiuan, eastern samar', 'RESTAURANT CASHIER', 5, 1, '', 99999, '09132131231', 'roniel_44@yahoo.com', 1, 60039.6, '2011-12-12', 1),
(4, 1, 'aristotle', 'gloc', 'pollisco', '1996-02-09', 'QUEZON CITY', 'Single', 'Male', 'Filipino', 'roman catholic', 'CALBAYOG, WESTERN SAMAR', 1, 'CALBAYOG, WESTERN SAMAR', 'CALBAYOG NATIONAL HIGH SCHOOL', 'CALBAYOG, WESTERN SAMAR', 'Public', '1', '1', 99, 99, '2011-03-10', '2011-03-15', 'Living', 'GABRIEL', 'MENESES', 'pollisco', 'Living', 'KAYE', 'roa', 'gloc', 'CALBAYOG, SAMAR', '', 'guiuan, eastern samar', 'RESTAURANT CASHIER', 6, 1, '', 120000, '09132131231', 'roniel_44@yahoo.com', 1, 60039.6, '2011-12-13', 1),
(5, 1, 'marshall', 'eminem', 'mathers', '1992-10-27', 'dolores, eastern samar', 'Single', 'Male', 'Filipino', 'catholic', 'dolores, eastern samar', 2, 'dolores, eastern samar', 'dnhs', 'dolores, eastern samar', 'Public', '4', '1', 99, 99, '2011-01-05', '2011-04-01', 'Living', 'george', 'stregan', 'mathers', 'Living', 'anastacia', 'ling', 'eminem', 'manila, philippines', 'construction worker', 'dolores, eastern samar', 'teacher', 5, 1, 'very good school', 150000, '09278182812', 'roniel_44@yahoo.com', 1, 60039.6, '2011-12-19', 1),
(6, 1, 'marie', 'forteza', 'estaron', '1996-02-02', 'dolores, eastern samar', 'Single', 'Male', 'Filipino', 'catholic', 'sagkahan, tacloban city', 6, 'dolores, eastern samar', 'dolores,eastern samar', '', 'Public', '4', '1', 99, 99, '2011-02-03', '2011-04-07', 'Living', 'JOSE', 'picardo', 'estaron', 'Living', 'lisa', 'dela cruz', 'forteza', 'dolores, eastern samar', 'construction worker', 'manlurip tacloban city', 'teacher', 5, 1, 'good corse', 123000, '09278182812', 'roniel_44@yahoo.com', 1, 60039.6, '2011-12-29', 1),
(7, 7, 'jon', 'bon', 'jovi', '1998-03-13', 'dolores, eastern samar', 'Single', 'Male', 'Filipino', 'pagan', 'dolores, eastern samar', 5, 'dolores, eastern samar', 'dnhs', 'dolores, eastern samar', 'Public', '4', '1', 99, 99, '2012-03-06', '2012-04-12', 'Living', 'JOSE', 'picardo', 'jovi', 'Living', 'sarah', 'geronimo', 'von', 'dolores, eastern samar', 'singer', 'manlurip tacloban city', 'teacher', 5, 1, '', 150000, '09278182812', 'roniel_44@yahoo.com', 1, 60039.6, '2012-01-04', 0),
(9, 1, 'kurt', 'rizal', 'cobain', '1998-01-10', 'dolores, eastern samar', 'Single', 'Male', 'Filipino', 'pagan', 'sagkahan, tacloban city', 1, 'manlurip, tacloban city', 'stecil', 'tacloban city', 'Public', '4', '1', 99, 99, '2012-03-06', '2012-04-28', 'Living', 'JOSE', 'picardo', 'malkovich', 'Living', 'anastacia', 'geronimo', 'forteza', 'dolores, eastern samar', 'carpenter', 'manlurip tacloban city', 'teacher', 5, 1, 'Good', 123000, '09278182812', 'roniel_44@yahoo.com', 1, 60039.6, '2012-01-04', 1),
(10, 2, 'Freddie', 'montano', 'tirazona', '1992-07-06', 'VnG tacloban,city', 'Single', 'MALE', 'Filipino', 'catholic', 'VnG tacloban,city', 1, 'VnG tacloban,city', 'stecil', 'tacloban city', 'Public', '4', '1', 99, 99, '2012-03-07', '2012-01-19', 'Deceased', 'ferdinand', 'espiritu', 'tirazona', 'Living', 'cynthia', 'opana', 'tirazona', 'VnG tacloban,city', 'seaman', 'VnG tacloban,city', 'government employee', 4, 1, 'I wanna be a computer scientist', 150000, '09278182812', 'roniel_44@yahoo.com', 0, 0, '2012-01-11', 0),
(11, 3, 'Lilibelle', 'sabus', 'aruta', '1992-02-17', 'borongan, eastern samar', 'Single', 'MALE', 'Filipino', '', 'alang alang leyte', 2, 'alang alang leyte', 'alang alang national high school', 'alang alang leyte', 'Public', '4', '', 99, 99, '2012-01-04', '2012-03-14', 'Living', 'john', 'lloyd', 'aruta', 'Living', 'bea', 'alonzo', 'sabus', 'alang alang leyte', 'cook', 'alang alang leyte', 'teacher', 5, 1, '', 150000, '1092000', 'lilibellearuta@yahoo.com', 0, 0, '2012-01-01', 0),
(12, 1, 'juan', 'dela', 'cruz', '1992-01-11', 'borongan, eastern samar', 'Single', 'MALE', 'Filipino', 'roman catholic', '770 real street, tacloban, leyte', 2, 'dolores, eastern samar', 'dolores national high school', 'alang alang leyte', 'Public', '4', '1', 99, 99, '2012-01-19', '2012-04-24', 'Living', 'JOSE', 'picardo', 'cruz', 'Living', 'cynthia', 'geronimo', 'dela', 'VnG tacloban,city', 'musician', 'alang alang leyte', 'sewer', 2, 1, '', 10000, '09278182812', 'roniel_44@yahoo.com', 1, 60039.6, '2012-01-25', 1),
(13, 1, 'mary christine', 'abuedo', 'bandoy', '1991-12-15', 'guiuan, eastern samar', 'Single', 'FEMALE', 'Filipino', 'roman catholic', 'guiuan, eastern samar', 1, 'tacloban city', 'gnhs', 'tacloban city', 'Public', '4', '5', 89, 90, '2008-02-05', '2008-04-02', 'Living', 'francisco', 'salas', 'bandoy', 'Living', 'esther', 'abuedo', 'bandoy', 'guiuan, eastern samar', 'govt employee', 'tacloban city', 'sewer', 4, 1, '', 150000, '09107365795', 'marychristineb@yahoo.com', 0, 0, '2012-01-27', 0),
(14, 1, 'claudine', 'bandoy', 'espinosa', '1992-10-17', 'tacloban city, leyte', 'Single', 'FEMALE', 'Filipino', 'roman catholic', 'sagkahan, tacloban city', 1, 'tacloban city', 'gnhs', '', 'Public', '4', '5', 87, 88, '2009-01-14', '2009-03-26', 'Living', 'reynaldo', 'lopez', 'espinosa', 'Living', 'maritess', 'abuedo', 'bandoy', 'VnG tacloban,city', 'govt employee', 'guiuan', 'businesswoman', 3, 1, '', 20000, '09083142803', 'claudine_espinosa@yahoo.com', 0, 0, '2012-01-27', 0),
(15, 1, 'krista', 'abria', 'aniceto', '1989-12-21', 'VnG tacloban,city', 'Single', 'FEMALE', 'Filipino', 'catholic', 'VnG tacloban,city', 1, 'VnG tacloban,city', 'lnhs', 'tacloban city', 'Public', '4', '7', 87, 88, '2008-03-11', '2008-04-23', 'Living', 'edilberto', 'tan', 'aniceto', 'Living', 'mina', 'abria', 'aniceto', 'VnG tacloban,city', 'seaman', 'VnG tacloban,city', 'teacher', 5, 1, '', 150000, '09278182812', 'kristaaniceto@yahoo.com', 0, 0, '2012-01-27', 0),
(16, 1, 'roseann', 'gilhang', 'bajado', '1990-12-01', 'villareal samar', 'Single', 'FEMALE', 'Filipino', 'catholic', 'tacloban city', 1, 'villareal samar', 'sisters of mary', 'cebu city', 'Public', '4', '7', 87, 88, '2008-01-09', '2008-04-03', 'Living', 'rudy', 'picardo', 'bajado', 'Living', 'anastacia', 'gilhang', 'bajado', 'villareal samr', 'seaman', 'villareal samar', 'sewer', 5, 1, '', 18000, '09083142803', 'roseannbajado@yahoo.com', 0, 0, '2012-01-27', 0),
(17, 1, 'james louie', 'jones', 'montano', '1991-01-27', 'tacloban,city', 'Single', 'MALE', 'Filipino', 'roman catholic', 'tacloban,city', 1, 'tacloban,city', 'st therese', 'tacloban,city', 'Public', '4', '7', 86, 88, '2008-01-24', '2008-03-26', 'Living', 'mike', 'picardo', 'montano', 'Living', 'sarah', 'forteza', 'montano', 'tacloban,city', 'govt employee', 'tacloban,city', 'ofw', 5, 1, '', 18000, '09083142803', 'jamesmontano@yahoo.com', 0, 0, '2012-01-27', 0),
(18, 1, 'david john', 'tan', 'serdoncillo', '1990-04-27', 'tacloban,city', 'Single', 'MALE', 'Filipino', 'roman catholic', 'tacloban city', 1, 'tacloban city', 'st therese', 'tacloban city', 'Public', '4', '5', 87, 99, '2008-02-06', '2008-03-18', 'Living', 'JOSE', 'salas', 'serdoncillo', 'Living', 'bea', 'tan', 'serdoncillo', 'manlurip tacloban city', 'govt employee', 'manlurip tacloban city', 'businesswoman', 3, 1, '', 150000, '09107365795', 'davidserdoncillo@yahoo.com', 0, 0, '2012-01-27', 0),
(19, 1, 'brian', 'gonzaga', 'delantar', '1988-01-27', 'tacloban,city', 'Single', 'MALE', 'Filipino', 'roman catholic', 'tacloban,city', 1, 'tacloban city', 'sacred heart', 'tacloban city', 'Public', '4', '5', 87, 90, '2006-01-25', '2006-03-22', 'Living', 'rudy', 'picardo', 'delantar', 'Living', 'angela', 'abria', 'delantar', 'tacloban,city', 'judge', 'tacloban,city', 'businesswoman', 3, 1, '', 18000, '09278182812', 'rouelbrian@yahoo.com', 0, 0, '2012-01-27', 0),
(20, 1, 'jane', 'caranyagan', 'malindog', '1993-01-29', 'guiuan, eastern samar', 'Single', 'FEMALE', 'Filipino', 'roman catholic', 'guiuan, eastern samar', 1, 'tacloban city', 'smag', 'guiuan', 'Public', '4', '7', 86, 88, '2007-01-17', '2007-03-22', 'Living', 'reynaldo', 'lopez', 'malindog', 'Living', 'cynthia', 'caranyagan', 'malindog', 'guiuan, eastern samar', 'seaman', 'guiuan', '', 3, 1, '', 18000, '09278182812', 'janemalindog@yahoo.com', 0, 0, '2012-01-27', 0),
(21, 1, 'jim', 'opana', 'garcia', '1991-02-14', 'tacloban,city', 'Single', 'MALE', 'Filipino', 'roman catholic', 'tacloban city', 1, 'tacloban city', 'lnhs', 'tacloban city', 'Public', '4', '7', 87, 88, '2008-01-09', '2008-03-19', 'Living', 'reynaldo', 'estaron', 'garcia', 'Living', 'angela', 'opana', 'garcia', 'tacloban,city', 'businessman', 'tacloban city', 'businesswoman', 0, 1, '', 150000, '09278182812', 'ilovegreen@yahoo.com', 0, 0, '2012-01-27', 0),
(22, 1, 'johannes', 'terre', 'gaduena', '1988-01-27', 'tanauan leyte', 'Single', 'MALE', 'Filipino', 'roman catholic', 'tanauan leyte', 1, 'tanauan leyte', 'lnhs', 'tacloban city', 'Public', '4', '5', 86, 99, '2006-01-03', '2006-03-21', 'Living', 'rudy', 'lopez', 'gaduena', 'Living', 'anastacia', 'terre', 'gaduena', 'tanauan leyte', 'govt employee', 'tanauan leyte', 'government employee', 5, 1, '', 20000, '09123456565', 'tpgaduena@yahoo.com', 0, 0, '2012-01-27', 0),
(23, 1, 'zeny', 'TRUMPO', 'GAMATA', '1988-01-27', 'tacloban,city', 'Single', 'MALE', 'Filipino', 'roman catholic', 'tacloban city', 1, 'tacloban city', 'gnhs', 'tacloban city', 'Public', '4', '7', 86, 88, '2006-01-18', '2006-03-16', 'Living', 'JOSE', 'lopez', 'gamata', 'Living', 'lisa', 'trumpo', 'gamata', 'tacloban,city', 'seaman', 'tacloban city', 'ofw', 5, 1, '', 20000, '09107365795', 'zenygamata@yahoo.com', 0, 0, '2012-01-27', 0),
(24, 1, 'athena', 'chan', 'remulta', '1991-03-24', 'borongan, eastern samar', 'Single', 'MALE', 'Filipino', 'roman catholic', 'tacloban city', 1, 'tacloban city', 'st therese', 'tacloban city', 'Public', '4', '7', 87, 88, '2005-01-05', '2005-03-23', 'Living', 'mike', 'estaron', 'remulta', 'Living', 'bea', 'chan', 'remulta', 'tacloban,city', 'engineer', 'tacloban city', 'teacher', 5, 1, '', 18000, '09278182812', 'remultaa@yahoo.com', 0, 0, '2012-01-27', 0),
(25, 2, 'jimmy', 'lumactod', 'ablay', '1988-06-01', 'guiuan, eastern samar', 'Single', 'MALE', 'Filipino', 'roman catholic', 'tacloban city', 1, 'tacloban city', 'gnhs', 'guiuan', 'Public', '4', '5', 86, 88, '2007-02-14', '2007-03-15', 'Living', 'juanito', 'gagatiga', 'ablay', 'Living', 'gregoria', 'lumactod ', 'ABLAY', 'guiuan, eastern samar', 'sewer', 'guiuan', 'government employee', 5, 1, '', 18000, '09128509827', 'jimmyablay@yahoo.com', 0, 0, '2012-01-27', 0),
(26, 1, 'MYLENE', 'DELANTAR', 'ATREGENIO', '1991-05-24', 'guiuan, eastern samar', 'Single', 'FEMALE', 'Filipino', 'roman catholic', 'tacloban city', 1, 'tacloban city', 'gnhs', 'guiuan', 'Public', '4', '5', 86, 88, '2007-01-10', '2007-03-28', 'Living', 'rudy', 'lopez', 'atregenio', 'Living', 'lisa', 'delantar', 'atregenio', 'tacloban,city', 'govt employee', 'tacloban city', 'government employee', 0, 1, '', 18000, '09083142803', 'myleneatregenio@yahoo.com', 0, 0, '2012-01-27', 0),
(27, 1, 'joseph', 'tan', 'biggel', '1991-01-26', 'tacloban,city', 'Single', 'MALE', 'Filipino', 'roman catholic', 'tacloban city', 1, 'tacloban city', 'sacred heart', 'tacloban city', 'Public', '4', '7', 86, 89, '2008-01-15', '2008-03-19', 'Living', 'JOSE', 'lopez', 'biggel', 'Living', 'angela', 'lopez', 'biggel', 'tacloban,city', 'seaman', 'tacloban city', 'ofw', 5, 1, '', 20000, '09107365795', 'josephbiggel@yahoo.com', 0, 0, '2012-01-27', 0),
(28, 1, 'ivan cris', 'caranyagan', 'destajo', '1991-01-22', 'tacloban,city', 'Single', 'MALE', 'Filipino', 'roman catholic', 'tacloban city', 1, 'tacloban city', 'lnhs', 'tacloban city', 'Public', '4', '5', 86, 88, '2007-01-10', '2007-03-30', 'Living', 'edilberto', 'lopez', 'destajo', 'Living', 'angela', 'caranyagan', 'destajo', 'tacloban,city', 'seaman', 'tacloban city', 'businesswoman', 2, 1, '', 20000, '09278182812', 'idestajo@yahoo.com', 0, 0, '2012-01-27', 0),
(29, 1, 'juvy', 'naing', 'sabijon', '1992-10-07', 'tacloban,city', 'Single', 'FEMALE', 'Filipino', 'roman catholic', 'tacloban city', 1, 'tacloban city', 'gnhs', 'guiuan', 'Public', '4', '5', 87, 88, '2009-01-13', '2009-03-12', 'Living', 'juanito', 'lopez', 'sabijon', 'Living', 'maritess', 'naing', 'sabijon', 'tacloban,city', 'businessman', 'tacloban city', 'businesswoman', 5, 1, '', 18000, '09278182812', 'juvysabijon@yahoo.com', 0, 0, '2012-01-27', 0),
(30, 1, 'ARNILA', 'bandoy', 'ancla', '1988-02-23', 'tacloban,city', 'Single', 'MALE', 'Filipino', 'catholic', 'tacloban city', 1, 'tacloban city', 'lnhs', 'tacloban city', 'Public', '4', '5', 89, 90, '2006-01-18', '2006-03-22', 'Living', 'francisco', 'salas', 'ancla', 'Living', 'esther', 'bandoy', 'ancla', 'tacloban,city', 'govt employee', 'tacloban city', 'teacher', 5, 1, '', 20000, '09062093133', 'arnilaancla@yahoo.com', 0, 0, '2012-01-27', 0),
(31, 3, 'agnes', 'pacheco', 'delatonga', '1989-03-14', 'tanauan leyte', 'Single', 'FEMALE', 'Filipino', 'roman catholic', 'tanauan leyte', 1, 'tacloban city', 'st therese', 'tacloban city', 'Public', '4', '7', 86, 88, '2005-01-05', '2005-03-22', 'Living', 'george', 'lopez', 'delatonga', 'Living', 'esther', 'pacheco', 'delatonga', 'tanauan leyte', 'engineer', 'tanauan leyte', 'businesswoman', 5, 1, '', 20000, '09083142803', 'agnesdelatonga@yahoo.com', 0, 0, '2012-01-27', 0),
(32, 1, 'enchong', 'tan', 'dee', '1988-11-06', 'manila', 'Single', 'MALE', 'Filipino', 'roman catholic', 'tacloban city', 1, 'tacloban city', 'sacred heart', 'tacloban city', 'Public', '4', '7', 87, 90, '2006-01-18', '2006-04-03', 'Living', 'rudy', 'estaron', 'dee', 'Living', 'cynthia', 'tan', 'dee', 'tacloban,city', 'businessman', 'tacloban city', 'government employee', 3, 1, '', 20000, '09123456565', 'enchongdee@yahoo.com', 0, 0, '2012-01-27', 0),
(33, 1, 'warley', 'chan', 'gagatiga', '1991-01-26', 'guiuan, eastern samar', 'Single', 'MALE', 'Filipino', 'roman catholic', 'sagkahan, tacloban city', 1, 'tacloban city', 'gnhs', 'guiuan', 'Public', '4', '7', 86, 88, '2007-01-16', '2007-03-07', 'Living', 'rudy', 'lopez', 'gagatiga', 'Living', 'rica', 'chan', 'gagtiga', 'tacloban,city', 'govt employee', 'tacloban city', 'teacher', 5, 1, '', 20000, '09083142803', 'warleyg@yahoo.com', 0, 0, '2012-01-27', 0),
(34, 2, 'lourdes', 'basario', 'cablao', '1991-01-01', 'guiuan, eastern samar', 'Single', 'FEMALE', 'Filipino', 'roman catholic', 'tacloban city', 1, 'tacloban city', 'gnhs', 'guiuan', 'Public', '4', '1', 87, 90, '2007-01-02', '2008-03-19', 'Living', 'john', 'picardo', 'cablao', 'Living', 'mina', 'basario', 'cablao', 'tacloban,city', 'seaman', 'tacloban city', 'ofw', 5, 1, '', 18000, '09083142803', 'malourdesc@yahoo.com', 0, 0, '2012-01-27', 0),
(35, 1, 'elizabeth', 'cablao', 'danas', '1991-05-27', 'guiuan, eastern samar', 'Single', 'MALE', 'Filipino', 'roman catholic', 'tacloban city', 1, 'tacloban city', 'st therese', 'tacloban city', 'Public', '4', '7', 86, 88, '2007-01-10', '2007-03-21', 'Living', 'JOSE', 'salas', 'danas', 'Living', 'esther', 'cablao', 'danas', 'tacloban,city', 'businessman', 'tacloban city', 'ofw', 3, 1, '', 20000, '09083142803', 'elizabethdanas@yahoo.com', 0, 0, '2012-01-27', 0),
(36, 2, 'genevive', 'abuyen', 'quiza', '1991-03-20', 'guiuan, eastern samar', 'Single', 'FEMALE', 'Filipino', 'roman catholic', 'tacloban city', 1, 'tanauan leyte', 'gnhs', 'guiuan', 'Public', '4', '7', 87, 90, '2007-01-04', '2007-03-20', 'Living', 'reynaldo', 'lopez', 'abuyen', 'Living', 'rica', 'quiza', 'abuyen', 'tacloban,city', 'businessman', 'tacloban city', 'government employee', 5, 1, '', 18000, '09278182812', 'geneviveabuyen@yahoo.com', 0, 0, '2012-01-27', 0),
(37, 1, 'vic', 'cablao', 'cruz', '1991-11-10', 'guiuan, eastern samar', 'Single', 'MALE', 'Filipino', 'roman catholic', 'tacloban city', 1, 'tacloban city', 'gnhs', 'guiuan', 'Public', '4', '5', 86, 88, '2007-01-09', '2007-03-28', 'Living', 'rudy', 'estaron', 'cablao', 'Living', 'gregoria', 'cruz', 'cablao', 'tacloban,city', 'businessman', 'tacloban city', 'teacher', 5, 1, '', 20000, '09083142803', 'vicjaysoncablao@yahoo.com', 0, 0, '2012-01-27', 0),
(38, 3, 'violady', 'cascayan', 'quino', '1991-04-11', 'guiuan, eastern samar', 'Single', 'FEMALE', 'Filipino', 'roman catholic', 'tacloban city', 1, 'tacloban city', 'gnhs', 'guiuan', 'Public', '4', '1', 88, 90, '2007-02-01', '2007-03-12', 'Living', 'rudy', 'estaron', 'quino', 'Living', 'angela', 'cascayan', 'quino', 'tacloban,city', 'seaman', 'tacloban city', 'government employee', 5, 1, '', 18000, '09083142803', 'jingquino@yahoo.com', 0, 0, '2012-01-27', 0),
(39, 1, 'loncey', 'marasigan', 'molina', '1991-12-14', 'guiuan, eastern samar', 'Single', 'MALE', 'Filipino', 'roman catholic', 'tacloban city', 1, 'tacloban city', 'gnhs', 'guiuan', 'Public', '4', '7', 87, 90, '2007-02-01', '2007-03-15', 'Living', 'edilberto', 'picardo', 'molina', 'Living', 'gregoria', 'marasigan', 'molina', 'tacloban,city', 'engineer', 'tacloban city', 'teacher', 3, 1, '', 18000, '09123456565', 'lon_z14@yahoo.com', 1, 56462.4, '2012-01-27', 1),
(40, 1, 'marlon', 'naing', 'PADULLON', '1991-01-15', 'guiuan, eastern samar', 'Single', 'MALE', 'Filipino', 'roman catholic', 'tacloban city', 1, 'tanauan leyte', 'gnhs', 'guiuan', 'Public', '4', '5', 87, 90, '2007-01-09', '2007-03-30', 'Living', 'reynaldo', 'salas', 'PADULLON', 'Living', 'maritess', 'naing', 'PADULLON', 'tacloban,city', 'businessman', 'tacloban city', 'government employee', 3, 1, '', 20000, '09123456565', 'horsyyow@yahoo.com', 0, 0, '2012-01-27', 0),
(41, 3, 'HIGINA VINA', 'LIMBOY', 'CABLAO', '1992-03-25', 'guiuan, eastern samar', 'Single', 'FEMALE', 'Filipino', 'roman catholic', 'tacloban city', 1, 'tacloban city', 'smag', 'guiuan', 'Public', '4', '5', 87, 90, '2010-01-11', '2010-03-17', 'Living', 'nick', 'estaron', 'cablao', 'Living', 'priscilla', 'limboy', 'cablao', 'tacloban,city', 'musician', 'tacloban city', 'government employee', 2, 1, '', 20000, '09083142803', 'vinacablao@yahoo.com', 0, 0, '2012-01-27', 0),
(42, 1, 'james', 'garcia', 'macapugas', '1992-02-24', 'borongan, eastern samar', 'Single', 'MALE', 'Filipino', 'catholic', 'tacloban city', 1, 'tacloban city', 'smag', 'guiuan', 'Public', '4', '7', 86, 88, '2010-01-12', '2010-03-16', 'Living', 'rudy', 'lopez', 'macapugas', 'Living', 'rica', 'garcia', 'macapugas', 'tacloban,city', 'businessman', 'tacloban city', 'doctor', 5, 1, '', 20000, '09107365795', 'jamesmacapugas@yahoo.com', 0, 0, '2012-01-27', 0),
(43, 3, 'manilyn', 'palce', 'ty', '1991-04-10', 'guiuan, eastern samar', 'Single', 'FEMALE', 'Filipino', 'roman catholic', 'tacloban city', 1, 'tacloban city', 'gnhs', 'guiuan', 'Public', '4', '7', 86, 90, '2008-01-08', '2008-03-26', 'Living', 'reynaldo', 'lopez', 'palce', 'Living', 'angela', 'ty', 'palce', 'tacloban,city', 'businessman', 'tacloban city', 'government employee', 3, 1, '', 18000, '09278182812', 'manilynp@yahoo.com', 0, 0, '2012-01-27', 0),
(44, 1, 'rey joseph', 'bandoy', 'espinosa', '1992-05-02', 'guiuan, eastern samar', 'Single', 'MALE', 'Filipino', 'catholic', 'tacloban city', 1, 'VnG tacloban,city', 'lnhs', 'tacloban city', 'Public', '4', '5', 89, 88, '2009-01-06', '2009-03-18', 'Living', 'rudy', 'estaron', 'espinosa', 'Living', 'maritess', 'abuedo', 'espinosa', 'tacloban,city', 'govt employee', 'tacloban city', 'ofw', 3, 1, '', 18000, '09107365795', 'reyjosephe@yahoo.com', 0, 0, '2012-01-27', 0),
(45, 1, 'reymund', 'bacha', 'canlu', '1991-07-20', 'sagkahan tacloban city', 'Single', 'MALE', 'Filipino', 'roman catholic', 'tacloban city', 1, 'tacloban city', 'asian development foundation college', 'sagkahan tacloban city', 'Public', '4', '2', 92, 97, '2007-01-18', '2007-01-18', 'Living', 'galion', 'sabusa', 'canlu', 'Living', 'gina ', 'garuna', 'bacolongan', 'sagkahan tacloban city', 'carpenter', 'sagkahan tacloban city', 'teacher', 2, 1, 'good', 2000, '24345654', 'reymund@yahoo.com', 1, 0, '2012-01-28', 0),
(46, 1, 'eugene', 'jiruyo', 'tarumba', '1991-07-29', 'sagkahan tacloban city', 'Single', 'MALE', 'Filipino', 'roman catholic', 'sagkahan, tacloban city', 1, 'sagkahan tacloban city', 'sagkahan national highschool', 'sagkahan tacloban city', 'Public', '4', '2', 98, 98, '2003-01-15', '2012-01-11', 'Living', 'gerone', 'kanabi', 'TARUMBA', 'Living', 'YUNA', 'forteza', 'TENORIO', 'sagkahan tacloban city', 'cook', 'sagkahan tacloban city', 'teacher', 4, 1, 'GOOD', 170000, '3455654325', 'eugene@yahoo.com', 0, 0, '2012-01-28', 0),
(47, 1, 'jiona', 'viruna', 'canlas', '1990-06-28', 'sagkahan tacloban city', 'Single', 'MALE', 'Filipino', 'roman catholic', 'sagkahan tacloban city', 1, 'sagkahan tacloban city', 'Leyte national high school', 'benigno aquino st. tacloban city', 'Public', '4', '', 80, 85, '2009-01-08', '2008-01-17', 'Living', 'jerone', 'ryuma', 'canlas', 'Living', 'constancia', 'abuedo', 'perte', 'sagkahan tacloban city', 'bouncer', 'sagkahan tacloban city', 'teacher', 2, 1, 'nice!', 190000, '876544567876543456', 'canlas@yahoo.om', 0, 0, '2012-01-28', 0),
(48, 1, 'geomelyn', 'garuna', 'bernal', '1990-01-28', 'san jose tacloban city', 'Single', 'MALE', 'Filipino', 'roman catholic', 'san jose tacloban city', 1, 'san jose tacloban city', 'stecil', 'kasssel tacloban city', 'Private', '4', '', 87, 86, '2006-01-12', '2007-01-11', 'Living', 'david', 'salas', 'bernal', 'Living', 'rose', 'finum', 'fenta', 'san jose tacloban city', 'carpenter', 'san jose tacloban city', 'physical therapist', 2, 1, 'it is very nice!', 190000, '123456756543454', 'garuna@yahoo.com', 0, 0, '2012-01-28', 0),
(49, 1, 'karla', 'loste', 'garcia', '1992-12-12', '', 'Single', 'MALE', 'Filipino', '', '', 1, '', '', '', 'Public', '4', '1', 93, 92, '2008-01-08', '2008-03-29', 'Living', 'edilberto', 'topeja', 'garcia', 'Living', 'marie', 'lumbres', 'loste', 'pasay, manila', 'seaman', 'llorente, eastern samar', 'none', 5, 5, '', 190000, '09083142803', 'roniel_44@yahoo.com', 0, 0, '2012-01-29', 0),
(50, 2, 'ronelyn', 'bandoy', 'dagamina', '1990-07-14', 'Guiuan eastern samar', 'Single', 'MALE', 'Filipino', 'Roman catholic', 'vng tacloban city', 1, 'TACLOBAN city', 'CNHS', 'tACLOBAN city', 'Public', '4', '4', 88, 88, '2008-01-31', '2008-03-31', 'Living', 'alfredo', 'ramirez', 'bandoy', 'Living', 'arnila', 'dagamina', 'bandoy', 'tacloban', 'businessman', 'tacloban', 'teacher', 3, 1, '', 200000, '09107887567', 'ronelynbandoy@yahoo.com', 0, 0, '2012-01-31', 0),
(51, 2, 'faith', 'SY', 'Luna', '1991-02-01', 'cagayan valley', 'Single', 'FEMALE', 'Filipino', 'roman catholic', 'vng tacloban city', 1, 'TACLOBAN city', 'SISTERS OF MARY', 'tACLOBAN city', 'Public', '4', '4', 85, 89, '2008-02-01', '2008-03-17', 'Living', 'alfredo', 'daiz', 'luna', 'Living', 'celia', 'sy', 'luna', 'tacloban', 'instructor', 'tacloban', 'botanist', 4, 1, '', 130000, '09187664556', 'faithluna@yahoo.com', 0, 0, '2012-02-01', 0);

-- --------------------------------------------------------

--
-- Table structure for table `audittrail_tbl`
--

CREATE TABLE IF NOT EXISTS `audittrail_tbl` (
  `audittrail_id` int(8) NOT NULL AUTO_INCREMENT,
  `audittrail_username` varchar(30) NOT NULL,
  `audittrail_activity` varchar(50) NOT NULL,
  `audittrail_time` datetime NOT NULL,
  PRIMARY KEY (`audittrail_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `audittrail_tbl`
--

INSERT INTO `audittrail_tbl` (`audittrail_id`, `audittrail_username`, `audittrail_activity`, `audittrail_time`) VALUES
(1, 'director', 'Log-In', '2012-02-08 22:16:58'),
(2, 'director', 'Log-Out', '2012-02-08 22:17:07');

-- --------------------------------------------------------

--
-- Table structure for table `awardno_tbl`
--

CREATE TABLE IF NOT EXISTS `awardno_tbl` (
  `AWARDNO_ID` int(8) NOT NULL AUTO_INCREMENT,
  `AWARDNO_AWARD` varchar(30) NOT NULL,
  `GRANT_ID` int(3) NOT NULL,
  `AWARDNO_AVAILABILITY` int(1) NOT NULL,
  PRIMARY KEY (`AWARDNO_ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `awardno_tbl`
--

INSERT INTO `awardno_tbl` (`AWARDNO_ID`, `AWARDNO_AWARD`, `GRANT_ID`, `AWARDNO_AVAILABILITY`) VALUES
(1, 'FM-2011-001', 1, 1),
(2, 'FM-2011-002', 1, 0),
(3, 'FM-2011-003', 1, 0),
(4, 'HM-2011-001', 2, 0);

-- --------------------------------------------------------

--
-- Table structure for table `beneficiary_tbl`
--

CREATE TABLE IF NOT EXISTS `beneficiary_tbl` (
  `BENEFICIARY_ID` int(11) NOT NULL AUTO_INCREMENT,
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
  PRIMARY KEY (`BENEFICIARY_ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=297 ;

--
-- Dumping data for table `beneficiary_tbl`
--

INSERT INTO `beneficiary_tbl` (`BENEFICIARY_ID`, `BENEFICIARY_nam1`, `BENEFICIARY_nam2`, `BENEFICIARY_nam3`, `BENEFICIARY_GENDER`, `GRANT_ID`, `PROG_ID`, `BENEFICIARY_YRLVL`, `BENEFICIARY_AWARDNO`, `BENEFICIARY_GRANTEFFECTIVITY`, `BENE_SCHOOLYREFFEC`, `BENEFICIARY_CONTACTNO`, `BENEFICIARY_STAT`, `BENEFICIARY_WAIVECTR`, `HEI_ID`, `BENEFICIARY_MAILADD`, `BENE_CONGDIST`) VALUES
(1, 'Roniel', 'Bacolongan', 'Bernas', 'MALE', 1, 1, 4, 'FM-1001', '0000-00-00', '2010-2011', '09157400449', 'Enrolled', 0, 1, 'Dolores, Eastern Samar', 1),
(2, 'Jerry John', 'Crodua', 'Cahanap', 'MALE', 2, 1, 1, 'FM - 1007', '2008-06-03', '2010-2011', '09190291928', 'Enrolled', 3, 1, 'Dolores, Eastern Samar', 2),
(13, 'abegail', 'opana', 'quiambao', 'FEMALE', 1, 1, 1, 'FM-2210', '0000-00-00', '2010-2011', '09132131231', 'ENROLLED', 0, 1, 'sagkahan, real st., tacloban ', 3),
(14, 'jennise', 'robredillo', 'pasudag', 'FEMALE', 1, 1, 1, 'fm-1009a1', '0000-00-00', '2010-2011', '09132131231', 'Recommended for Waive', 0, 1, 'sagkahan, real st., tacloban city', 4),
(15, 'john', 'monroe', 'mompil', 'MALE', 1, 1, 1, 'HM-10001', '0000-00-00', '2010-2011', '09132131231', 'Waived', 0, 1, 'tacloban, leyte', 5),
(17, 'marie', 'forteza', 'estaron', 'FEMALE', 1, 1, 1, 'FM-2000', '2011-12-29', '2010-2011', '09278182812', 'ENROLLED', 7, 1, 'sagkahan, tacloban city', 1),
(18, 'marshall', 'eminem', 'mathers', 'MALE', 1, 0, 0, 'FM-1003', '2012-01-03', '2010-2011', '09278182812', 'NEW', 0, 0, 'dolores, eastern samar', 2),
(19, 'kurt', 'rizal', 'cobain', 'MALE', 1, 0, 0, 'FM-2011', '2012-01-07', '2011-2012', '09278182812', 'NEW', 0, 0, 'sagkahan, tacloban city', 0),
(20, 'George', 'Jose', 'Estregan', 'MALE', 1, 1, 1, '', '0000-00-00', '', '09124556777', 'ENROLLED', 0, 1, 'Tacloban City', 1),
(21, 'Trixie', 'Espineda', 'Amable', 'FEMALE', 2, 2, 2, '', '0000-00-00', '', '09126787887', 'ENROLLED', 0, 1, 'V & G Tacloban City', 2),
(22, 'Steve', 'Bandoy', 'Machica', 'MALE', 3, 3, 3, '', '0000-00-00', '', '09107678909', 'ENROLLED', 0, 1, 'Tacloban City', 4),
(23, 'Gina', 'Alonzo', 'Tan', 'FEMALE', 1, 1, 1, '', '0000-00-00', '', '09123454434', 'ENROLLED', 0, 1, 'Tacloban City', 1),
(24, 'Faye', 'Lee', 'Romero', 'FEMALE', 2, 2, 2, '', '0000-00-00', '', '09187794554', 'ENROLLED', 0, 1, 'V & G Tacloban City', 2),
(25, 'Terresa', 'Yu', 'Bond', 'Female', 3, 3, 3, '', '0000-00-00', '', '09176545676', 'Enrolled', 0, 1, 'Tacloban City', 3),
(26, 'Garth', 'Abria', 'Acerden', 'MALE', 4, 1, 4, '', '0000-00-00', '', '09186754565', 'ENROLLED', 0, 1, 'Tacloban City', 4),
(27, 'Sophia', 'Famroda', 'Geronimo', 'FEMALE', 5, 2, 1, '', '0000-00-00', '', '09176780089', 'ENROLLED', 0, 1, 'Tacloban City', 5),
(28, 'Reymond', 'Rodriguez', 'Israel', 'MALE', 6, 3, 2, '', '0000-00-00', '', '09126679099', 'Enrolled', 0, 1, 'Tacloban City', 6),
(29, 'Lydia', 'Far', 'East', 'FEMALE', 1, 1, 3, '', '0000-00-00', '', '09177784565', 'Enrolled', 0, 1, 'Tacloban City', 1),
(30, 'Jane', 'Lee', 'Abria', 'Female', 2, 2, 4, '', '0000-00-00', '', '09124432332', 'Enrolled', 0, 1, 'Tacloban City', 2),
(31, 'Rose', 'Santamaria', 'Dee', 'Female', 3, 3, 1, '', '0000-00-00', '', '09187776675', 'Enrolled', 0, 1, 'Tacloban City', 3),
(32, 'Leslie', 'Tan', 'Tamayo', 'Female', 4, 1, 2, '', '0000-00-00', '', '09187789876', 'Enrolled', 0, 1, 'Tacloban City', 4),
(33, 'Angelo', 'Del Barrio', 'Picasso', 'MALE', 1, 1, 4, 'FM-1001', '0000-00-00', '2010-2011', '09157400449', 'Enrolled', 0, 1, 'Dolores, Eastern Samar', 1),
(34, 'Jamela', 'Bandoy', 'Ancla', 'FEMALE', 2, 1, 1, 'FM - 1007', '2008-06-03', '2010-2011', '09190291928', 'Enrolled', 3, 1, 'Dolores, Eastern Samar', 2),
(35, 'Jane', 'Opana', 'Raj', 'FEMALE', 1, 1, 1, 'FM-2210', '0000-00-00', '2010-2011', '09132131231', 'ENROLLED', 0, 1, 'sagkahan, real st., tacloban ', 3),
(36, 'Belle', 'Alonzo', 'Curtiz', 'FEMALE', 1, 1, 1, 'fm-1009a1', '0000-00-00', '2010-2011', '09132131231', 'ENROLLED', 0, 1, 'sagkahan, real st., tacloban city', 4),
(37, 'Erwin', 'Montano', 'Benites', 'MALE', 1, 1, 1, 'HM-10001', '0000-00-00', '2010-2011', '09132131231', 'ENROLLED', 0, 1, 'tacloban, leyte', 5),
(39, 'Marimar', 'Forte', 'Escalon', 'FEMALE', 1, 1, 1, 'FM-2000', '2011-12-29', '2010-2011', '09278182812', 'Enrolled', 7, 1, 'sagkahan, tacloban city', 1),
(40, 'marifel', 'gayoso', 'duran', 'MALE', 1, 0, 0, 'FM-1003', '2012-01-03', '2010-2011', '09278182812', 'NEW', 0, 0, 'dolores, eastern samar', 2),
(41, 'mark', 'tan', 'copacobana', 'MALE', 1, 0, 0, 'FM-2011', '2012-01-07', '2011-2012', '09278182812', 'NEW', 0, 0, 'sagkahan, tacloban city', 0),
(43, 'Barbette', 'Magalona', 'Badocdoc', 'FEMALE', 2, 2, 2, '', '0000-00-00', '', '09126787887', 'ENROLLED', 0, 1, 'V & G Tacloban City', 2),
(45, 'Gemma', 'Alonzo', 'Balo', 'FEMALE', 1, 1, 1, '', '0000-00-00', '', '09123454434', 'ENROLLED', 0, 1, 'Tacloban City', 1),
(46, 'Mylene', 'Abucejo', 'Lumactod', 'FEMALE', 2, 2, 2, '', '0000-00-00', '', '09187794554', 'ENROLLED', 0, 1, 'V & G Tacloban City', 2),
(47, 'Tricia', 'Frando', 'lanuevo', 'Female', 3, 3, 3, '', '0000-00-00', '', '09176545676', 'Enrolled', 0, 1, 'Tacloban City', 3),
(48, 'Ryan', 'Ang', 'Duran', 'MALE', 4, 1, 4, '', '0000-00-00', '', '09186754565', 'ENROLLED', 0, 1, 'Tacloban City', 4),
(49, 'Diana', 'Merize', 'Laput', 'FEMALE', 5, 2, 1, '', '0000-00-00', '', '09176780089', 'ENROLLED', 0, 1, 'Tacloban City', 5),
(50, 'Tom', 'Colleney', 'Abuda', 'MALE', 6, 3, 2, '', '0000-00-00', '', '09126679099', 'Enrolled', 0, 1, 'Tacloban City', 6),
(51, 'Lena', 'Dee', 'Ancla', 'FEMALE', 1, 1, 3, '', '0000-00-00', '', '09177784565', 'Enrolled', 0, 1, 'Tacloban City', 1),
(52, 'Mai', 'Trumpo', 'Asunsion', 'Female', 2, 2, 4, '', '0000-00-00', '', '09124432332', 'Enrolled', 0, 1, 'Tacloban City', 2),
(53, 'Rosela', 'Santa', 'Domingo', 'Female', 3, 3, 1, '', '0000-00-00', '', '09187776675', 'Enrolled', 0, 1, 'Tacloban City', 3),
(54, 'Leann', 'Tanego', 'Tresman', 'Female', 4, 1, 2, '', '0000-00-00', '', '09187789876', 'Enrolled', 0, 1, 'Tacloban City', 4),
(65, 'Aiza', 'Lakambini', 'Sacan', 'FEMALE', 2, 2, 2, '', '0000-00-00', '', '09126787887', 'ENROLLED', 2, 1, 'V & G Tacloban City', 2),
(79, 'Feibei', 'Hensey', 'Pastoril', 'FEMALE', 1, 1, 1, 'FM-2210', '0000-00-00', '2010-2011', '09132131231', 'ENROLLED', 0, 1, 'sagkahan, real st., tacloban ', 3),
(91, 'Rina Cassandre', 'Guarino', 'Pacheco', 'Female', 3, 3, 3, '', '0000-00-00', '', '09176545676', 'Enrolled', 0, 1, 'Tacloban City', 3),
(99, 'Jose', 'Balicat', 'Cabanatan', 'MALE', 5, 1, 2, '', '0000-00-00', '', '0912727123', 'ENROLLED', 0, 1, 'Manlurip, Tacloban City', 4),
(109, 'Leonard', 'Robin', 'Del Rosario', 'MALE', 1, 0, 0, 'FM-2011', '2012-01-07', '2011-2012', '09278182812', 'NEW', 0, 0, 'sagkahan, tacloban city', 0),
(137, 'Mariel Danya', 'Uy', 'Crodua', 'Female', 3, 3, 3, '', '0000-00-00', '', '09176545676', 'Enrolled', 0, 1, 'Tacloban City', 3),
(154, 'Francisco', 'Nuevas', 'Florentino', 'MALE', 1, 1, 1, '', '0000-00-00', '', '09124556777', 'ENROLLED', 0, 1, 'Tacloban City', 2),
(169, 'Katrina', 'Pigol', 'Baldonaza', 'FEMALE', 1, 1, 1, 'FM-2210', '0000-00-00', '2010-2011', '09132131231', 'ENROLLED', 0, 1, 'sagkahan, real st., tacloban ', 3),
(175, 'Jeffree', 'Hurado', 'Padula', 'MALE', 1, 0, 0, 'FM-2011', '2012-01-07', '2011-2012', '09278182812', 'NEW', 0, 0, 'sagkahan, tacloban city', 1),
(176, 'Kingsley', 'Kinto', 'Padilla', 'MALE', 1, 1, 1, '', '0000-00-00', '', '09124556777', 'ENROLLED', 0, 1, 'Tacloban City', 2),
(177, 'Samantha', 'Empanada', 'Dagami', 'FEMALE', 2, 2, 2, '', '0000-00-00', '', '09126787887', 'ENROLLED', 2, 1, 'V & G Tacloban City', 2),
(181, 'Ciara', 'Alopa', 'Natividad', 'FEMALE', 3, 3, 3, '', '0000-00-00', '', '09176545676', 'Enrolled', 0, 1, 'Tacloban City', 3),
(183, 'Maria Juana', 'Cannabis', 'Sativa', 'FEMALE', 5, 2, 1, '', '0000-00-00', '', '09176780089', 'ENROLLED', 0, 1, 'Tacloban City', 5),
(189, 'Zeny', 'Gamat', 'Arniba', 'FEMALE', 5, 2, 1, '', '0000-00-00', '', '09176780089', 'ENROLLED', 0, 1, 'Tacloban City', 5),
(195, 'Albero', 'Santos', 'Del Rio', 'MALE', 1, 1, 4, 'FM-1001', '0000-00-00', '2010-2011', '09157400449', 'Enrolled', 0, 2, 'Dolores, Eastern Samar', 1),
(196, 'Fatima', 'Go', 'Santos', 'FEMALE', 2, 1, 4, 'FM-1001', '0000-00-00', '2010-2011', '09157400449', 'Enrolled', 0, 2, 'Dolores, Eastern Samar', 1),
(197, 'Feibei', 'Hensey', 'Pastoril', 'FEMALE', 1, 1, 1, 'FM-2210', '0000-00-00', '2010-2011', '09132131231', 'New', 0, 2, 'sagkahan, real st., tacloban ', 3),
(198, 'Brianna', 'Abing', 'Delantar', 'FEMALE', 1, 1, 1, 'fm-1009a1', '0000-00-00', '2010-2011', '09132131231', 'Recommended for Waive', 0, 2, 'sagkahan, real st., tacloban city', 4),
(199, 'Marlon', 'Pollisco', 'Magalona', 'MALE', 1, 1, 1, 'HM-10001', '0000-00-00', '2010-2011', '09132131231', 'Waived', 0, 2, 'tacloban, leyte', 5),
(200, 'Andrew', 'Bonifacio', 'Espirito', 'MALE', 1, 3, 1, 'FM-2001', '2011-12-13', '2010-2011', '09132131231', 'NEW', 0, 2, 'CALBAYOG, WESTERN SAMAR', 6),
(201, 'Alessandra', 'Garcia', 'Corrado', 'FEMALE', 1, 1, 1, 'FM-2000', '2011-12-29', '2010-2011', '09278182812', 'Enrolled', 7, 2, 'sagkahan, tacloban city', 1),
(202, 'Leody', 'Robin', 'Del Rosario', 'MALE', 1, 3, 0, 'FM-1003', '2012-01-03', '2010-2011', '09278182812', 'ENROLLED', 0, 2, 'dolores, eastern samar', 2),
(203, 'Leonard', 'Robin', 'Del Rosario', 'MALE', 1, 2, 0, 'FM-2011', '2012-01-07', '2011-2012', '09278182812', 'ENROLLED', 0, 2, 'sagkahan, tacloban city', 2),
(204, 'Francisco', 'Nuevas', 'Florentino', 'MALE', 1, 1, 1, '', '0000-00-00', '', '09124556777', 'ENROLLED', 0, 2, 'Tacloban City', 2),
(205, 'Aiza', 'Lakambini', 'Sacan', 'FEMALE', 2, 2, 2, '', '0000-00-00', '', '09126787887', 'ENROLLED', 2, 2, 'V & G Tacloban City', 2),
(206, 'Sean', 'Ong', 'General', 'MALE', 3, 3, 3, '', '0000-00-00', '', '09107678909', 'ENROLLED', 0, 2, 'Tacloban City', 4),
(207, 'Vina', 'Padul', 'Malindog', 'FEMALE', 1, 1, 1, '', '0000-00-00', '', '09123454434', 'ENROLLED', 0, 2, 'Tacloban City', 1),
(208, 'Yolanda', 'Koi', 'Reyes', 'FEMALE', 2, 2, 2, '', '0000-00-00', '', '09187794554', 'ENROLLED', 0, 2, 'V & G Tacloban City', 2),
(209, 'Mariel Danya', 'Uy', 'Crodua', 'Female', 3, 3, 3, '', '0000-00-00', '', '09176545676', 'Enrolled', 0, 2, 'Tacloban City', 3),
(210, 'Joey', 'Cahanap', 'Amateo', 'MALE', 4, 1, 4, '', '0000-00-00', '', '09186754565', 'ENROLLED', 0, 2, 'Tacloban City', 4),
(211, 'Shana Mae', 'Figueroa', 'Gonzales', 'FEMALE', 5, 2, 1, '', '0000-00-00', '', '09176780089', 'ENROLLED', 0, 2, 'Tacloban City', 5),
(212, 'Carlos Luis', 'Avanzado', 'Rodriguez', 'MALE', 6, 3, 2, '', '0000-00-00', '', '09126679099', 'Enrolled', 0, 2, 'Tacloban City', 6),
(213, 'Helen', 'Codiamat', 'Balena', 'FEMALE', 1, 1, 3, '', '0000-00-00', '', '09177784565', 'Enrolled', 0, 2, 'Tacloban City', 1),
(214, 'Grace', 'Tejero', 'Martin', 'Female', 2, 2, 4, '', '0000-00-00', '', '09124432332', 'Enrolled', 0, 2, 'Tacloban City', 2),
(215, 'Rosanna', 'Roces', 'Ong', 'Female', 3, 3, 1, '', '0000-00-00', '', '09187776675', 'Enrolled', 0, 2, 'Tacloban City', 3),
(216, 'Jansen', 'Ang', 'Tangkad', 'Female', 4, 1, 2, '', '0000-00-00', '', '09187789876', 'Enrolled', 0, 2, 'Tacloban City', 4),
(217, 'Mark Ericson', 'Del Bacud', 'Martin', 'MALE', 1, 1, 4, 'FM-1001', '0000-00-00', '2010-2011', '09157400449', 'Enrolled', 0, 2, 'Dolores, Eastern Samar', 1),
(218, 'Sheena', 'Halili', 'Gonzales', 'FEMALE', 2, 1, 1, 'FM - 1007', '2008-06-03', '2010-2011', '09190291928', 'Enrolled', 0, 2, 'Dolores, Eastern Samar', 2),
(219, 'Katrina', 'Pigol', 'Baldonaza', 'FEMALE', 1, 1, 1, 'FM-2210', '0000-00-00', '2010-2011', '09132131231', 'New', 0, 2, 'sagkahan, real st., tacloban ', 3),
(220, 'Carlene', 'Henley', 'Baducduc', 'FEMALE', 1, 1, 1, 'fm-1009a1', '0000-00-00', '2010-2011', '09132131231', 'Recommended for Waive', 0, 2, 'sagkahan, real st., tacloban city', 4),
(221, 'Sherwing Jhon', 'Anosa', 'Aruta', 'MALE', 1, 1, 1, 'HM-10001', '0000-00-00', '2010-2011', '09132131231', 'Waived', 0, 2, 'tacloban, leyte', 5),
(222, 'Jack', 'Bacho', 'Sabus', 'MALE', 1, 3, 1, 'FM-2001', '2011-12-13', '2010-2011', '09132131231', 'NEW', 0, 2, 'CALBAYOG, WESTERN SAMAR', 6),
(223, 'Sharleney', 'Estaron', 'Minos', 'FEMALE', 1, 1, 1, 'FM-2000', '2011-12-29', '2010-2011', '09278182812', 'Enrolled', 7, 2, 'sagkahan, tacloban city', 1),
(224, 'Mikee', 'Pedrosa', 'Arendayen', 'MALE', 1, 2, 0, 'FM-1003', '2012-01-03', '2010-2011', '09278182812', 'NEW', 0, 2, 'dolores, eastern samar', 2),
(225, 'Jeffree', 'Hurado', 'Padula', 'MALE', 1, 2, 0, 'FM-2011', '2012-01-07', '2011-2012', '09278182812', 'NEW', 0, 2, 'sagkahan, tacloban city', 1),
(226, 'Kingsley', 'Kinto', 'Padilla', 'MALE', 1, 1, 1, '', '0000-00-00', '', '09124556777', 'ENROLLED', 0, 2, 'Tacloban City', 2),
(227, 'Samantha', 'Empanada', 'Dagami', 'FEMALE', 2, 2, 2, '', '0000-00-00', '', '09126787887', 'ENROLLED', 2, 1, 'V & G Tacloban City', 2),
(228, 'Howard', 'Alonzo', 'Montano', 'MALE', 3, 3, 3, '', '0000-00-00', '', '09107678909', 'ENROLLED', 0, 2, 'Tacloban City', 4),
(229, 'Zarlene', 'Ramirez', 'Crisando', 'FEMALE', 1, 1, 1, '', '0000-00-00', '', '09123454434', 'ENROLLED', 0, 2, 'Tacloban City', 1),
(230, 'Tina Marie', 'Capon', 'Calzado', 'FEMALE', 2, 2, 2, '', '0000-00-00', '', '09187794554', 'ENROLLED', 0, 2, 'V & G Tacloban City', 2),
(231, 'Ciara', 'Alopa', 'Natividad', 'FEMALE', 3, 3, 3, '', '0000-00-00', '', '09176545676', 'Enrolled', 0, 1, 'Tacloban City', 3),
(232, 'Johnny Boy', 'Los Santos', 'Koronel', 'MALE', 4, 1, 4, '', '0000-00-00', '', '09186754565', 'ENROLLED', 0, 2, 'Tacloban City', 4),
(233, 'Maria Juana', 'Cannabis', 'Sativa', 'FEMALE', 5, 2, 1, '', '0000-00-00', '', '09176780089', 'ENROLLED', 0, 2, 'Tacloban City', 5),
(234, 'Pedro', 'Sendong', 'Real', 'MALE', 6, 3, 2, '', '0000-00-00', '', '09126679099', 'Enrolled', 0, 2, 'Tacloban City', 6),
(235, 'Marichu', 'Guarino', 'Ty', 'FEMALE', 1, 1, 3, '', '0000-00-00', '', '09177784565', 'Enrolled', 0, 2, 'Tacloban City', 1),
(236, 'Mikaela', 'Cahilo', 'Vizconde', 'Female', 2, 2, 4, '', '0000-00-00', '', '09124432332', 'Enrolled', 0, 2, 'Tacloban City', 2),
(237, 'Janice', 'Rivera', 'De Belen', 'Female', 3, 3, 1, '', '0000-00-00', '', '09187776675', 'Enrolled', 0, 2, 'Tacloban City', 3),
(238, 'Rose Anne', 'Impechmen', 'Corona', 'Female', 4, 1, 2, '', '0000-00-00', '', '09187789876', 'Enrolled', 0, 2, 'Tacloban City', 4),
(239, 'Zeny', 'Gamat', 'Arniba', 'FEMALE', 5, 2, 1, '', '0000-00-00', '', '09176780089', 'ENROLLED', 0, 2, 'Tacloban City', 5),
(240, 'Marinelle', 'Rosas', 'Cubilla', 'MALE', 6, 3, 2, '', '0000-00-00', '', '09126679099', 'Enrolled', 0, 2, 'Tacloban City', 6),
(241, 'Maelyn', 'Jaca', 'Perol', 'FEMALE', 1, 1, 3, '', '0000-00-00', '', '09177784565', 'Enrolled', 0, 2, 'Tacloban City', 1),
(242, 'Jennifer', 'Gabut', 'Cecista', 'Female', 2, 2, 4, '', '0000-00-00', '', '09124432332', 'Enrolled', 0, 2, 'Tacloban City', 2),
(243, 'Jessa Ivie', 'Regolodong', 'Quitorio', 'Female', 3, 3, 1, '', '0000-00-00', '', '09187776675', 'Enrolled', 0, 2, 'Tacloban City', 3),
(244, 'April', 'Arles', 'Garol', 'Female', 4, 1, 2, '', '0000-00-00', '', '09187789876', 'Enrolled', 0, 2, 'Tacloban City', 4),
(245, 'Michael Jim', 'Garcia', 'Opana', 'MALE', 1, 1, 4, 'FM-1001', '0000-00-00', '2010-2011', '09157400449', 'ENROLLED', 0, 3, 'Dolores, Eastern Samar', 1),
(246, 'Ivan Cris', 'Destajo', 'Bacud', 'MALE', 2, 1, 1, 'FM - 1007', '2008-06-03', '2010-2011', '09190291928', 'ENROLLED', 3, 3, 'Dolores, Eastern Samar', 2),
(247, 'Leif Mathew', 'Lelina', 'Mina', 'MALE', 1, 1, 1, 'FM-2210', '0000-00-00', '2010-2011', '09132131231', 'ENROLLED', 0, 3, 'sagkahan, real st., tacloban ', 3),
(248, 'Lilibelle', 'Aruta', 'Sabus', 'FEMALE', 1, 1, 1, 'fm-1009a1', '0000-00-00', '2010-2011', '09132131231', 'ENROLLED', 0, 3, 'sagkahan, real st., tacloban city', 4),
(249, 'Rose Ann', 'Bajado', 'Gilhang', 'FEMALE', 1, 1, 1, 'HM-10001', '0000-00-00', '2010-2011', '09132131231', 'ENROLLED', 3, 3, 'tacloban, leyte', 5),
(250, 'Alexander', 'Hipe', 'Basul', 'MALE', 1, 3, 1, 'FM-2001', '2011-12-13', '2010-2011', '09132131231', 'ENROLLED', 0, 3, 'CALBAYOG, WESTERN SAMAR', 6),
(251, 'Jeff', 'Marmita', 'de Veyra', 'MALE', 1, 1, 1, 'FM-2000', '2011-12-29', '2010-2011', '09278182812', 'ENROLLED', 7, 3, 'sagkahan, tacloban city', 1),
(252, 'Janeth', 'Sister', 'Alcaraz', 'FEMALE', 1, 1, 0, 'FM-1003', '2012-01-03', '2010-2011', '09278182812', 'ENROLLED', 0, 3, 'dolores, eastern samar', 2),
(253, 'Leah Jane', 'Majamis', 'Capon', 'FEMALE', 1, 1, 0, 'FM-2011', '2012-01-07', '2011-2012', '09278182812', 'ENROLLED', 0, 3, 'sagkahan, tacloban city', 2),
(254, 'Assunta', 'Bella', 'De Rossie', 'MALE', 1, 1, 1, '', '0000-00-00', '', '09124556777', 'ENROLLED', 0, 3, 'Tacloban City', 2),
(255, 'Zenyda', 'Bertos', 'Del Monte', 'FEMALE', 2, 2, 2, '', '0000-00-00', '', '09126787887', 'ENROLLED', 2, 3, 'V & G Tacloban City', 2),
(256, 'Noli', 'Regolo', 'Cojuangco', 'MALE', 3, 3, 3, '', '0000-00-00', '', '09107678909', 'ENROLLED', 0, 2, 'Tacloban City', 4),
(257, 'Bien', 'De Castro', 'Magtulo', 'FEMALE', 1, 1, 1, '', '0000-00-00', '', '09123454434', 'ENROLLED', 0, 3, 'Tacloban City', 1),
(258, 'Minnie', 'Kerno', 'Dosdos', 'FEMALE', 2, 2, 2, '', '0000-00-00', '', '09187794554', 'ENROLLED', 0, 3, 'V & G Tacloban City', 2),
(259, 'Janelle', 'Remulta', 'Manahan', 'Female', 3, 3, 3, '', '0000-00-00', '', '09176545676', 'Enrolled', 0, 3, 'Tacloban City', 3),
(260, 'Antonio', 'Bacsal', 'Eclera', 'MALE', 4, 1, 4, '', '0000-00-00', '', '09186754565', 'ENROLLED', 0, 3, 'Tacloban City', 4),
(261, 'Alodia', 'Fini', 'Marteja', 'FEMALE', 5, 2, 1, '', '0000-00-00', '', '09176780089', 'ENROLLED', 0, 3, 'Tacloban City', 5),
(262, 'Dindin', 'Dantes', 'Donoz', 'MALE', 6, 3, 2, '', '0000-00-00', '', '09126679099', 'Enrolled', 0, 3, 'Tacloban City', 6),
(263, 'Elena Mae', 'Balen', 'Codiamat', 'FEMALE', 1, 1, 3, '', '0000-00-00', '', '09177784565', 'ENROLLED', 0, 3, 'Tacloban City', 1),
(264, 'Marlyn Grace', 'Tejero', 'Pelino', 'Female', 2, 2, 4, '', '0000-00-00', '', '09124432332', 'ENROLLED', 0, 3, 'Tacloban City', 2),
(265, 'Maia', 'Ordon', 'Valencia', 'Female', 3, 3, 1, '', '0000-00-00', '', '09187776675', 'ENROLLED', 0, 3, 'Tacloban City', 3),
(266, 'Jouanna Marie', 'Taga', 'Pandakan', 'Female', 4, 1, 2, '', '0000-00-00', '', '09187789876', 'ENROLLED', 0, 3, 'Tacloban City', 4),
(267, 'Rouel Joseph', 'Morallos', 'Rumeri', 'MALE', 1, 1, 4, 'FM-1001', '0000-00-00', '2010-2011', '09157400449', 'ENROLLED', 0, 3, 'Dolores, Eastern Samar', 1),
(268, 'Katalina', 'San Jose', 'Acebuche', 'FEMALE', 2, 1, 1, 'FM - 1007', '2008-06-03', '2010-2011', '09190291928', 'ENROLLED', 0, 3, 'Dolores, Eastern Samar', 2),
(269, 'Marta', 'Guardiado', 'Naonos', 'FEMALE', 1, 1, 1, 'FM-2210', '0000-00-00', '2010-2011', '09132131231', 'ENROLLED', 0, 3, 'sagkahan, real st., tacloban ', 3),
(270, 'Stiffany', 'Bakal', 'Madilim', 'FEMALE', 1, 1, 1, 'fm-1009a1', '0000-00-00', '2010-2011', '09132131231', 'ENROLLED', 0, 3, 'sagkahan, real st., tacloban city', 4),
(271, 'Markus', 'Delonhe', 'Matador', 'MALE', 1, 1, 1, 'HM-10001', '0000-00-00', '2010-2011', '09132131231', 'ENROLLED', 0, 3, 'tacloban, leyte', 5),
(272, 'John', 'Jose', 'Matados', 'MALE', 1, 3, 1, 'FM-2001', '2011-12-13', '2010-2011', '09132131231', 'ENROLLED', 0, 3, 'CALBAYOG, WESTERN SAMAR', 6),
(273, 'Ronald', 'Killua', 'Kurapika', 'FEMALE', 1, 1, 1, 'FM-2000', '2011-12-29', '2010-2011', '09278182812', 'ENROLLED', 7, 3, 'sagkahan, tacloban city', 1),
(274, 'Martin Juan', 'Olat', 'Sabusap', 'MALE', 1, 1, 0, 'FM-1003', '2012-01-03', '2010-2011', '09278182812', 'ENROLLED', 0, 3, 'dolores, eastern samar', 2),
(275, 'Angelo', 'Cainto', 'Dimasalang', 'MALE', 1, 1, 0, 'FM-2011', '2012-01-07', '2011-2012', '09278182812', 'ENROLLED', 0, 3, 'sagkahan, tacloban city', 1),
(276, 'Tony', 'Quaiambo', 'Pasay', 'MALE', 1, 1, 1, '', '0000-00-00', '', '09124556777', 'ENROLLED', 0, 3, 'Tacloban City', 2),
(277, 'Marco', 'Kial', 'Alkadama', 'FEMALE', 2, 2, 2, '', '0000-00-00', '', '09126787887', 'ENROLLED', 0, 3, 'V & G Tacloban City', 2),
(278, 'Peter Jones', 'Potacio', 'Degodor', 'MALE', 3, 3, 3, '', '0000-00-00', '', '09107678909', 'ENROLLED', 0, 0, 'Tacloban City', 4),
(279, 'Yoko', 'Santa Cruz', 'Ono', 'FEMALE', 1, 1, 1, '', '0000-00-00', '', '09123454434', 'ENROLLED', 0, 3, 'Tacloban City', 1),
(280, 'Dolly', 'Arpeta', 'Parton', 'FEMALE', 2, 2, 2, '', '0000-00-00', '', '09187794554', 'ENROLLED', 0, 3, 'V & G Tacloban City', 2),
(281, 'Mary Belle', 'Hakuna', 'Arpon', 'FEMALE', 3, 3, 3, '', '0000-00-00', '', '09176545676', 'ENROLLED', 0, 3, 'Tacloban City', 3),
(282, 'John Lennon', 'Taret', 'Reymundo', 'MALE', 4, 1, 4, '', '0000-00-00', '', '09186754565', 'ENROLLED', 0, 3, 'Tacloban City', 4),
(283, 'Giselle', 'Tayni', 'Zibua', 'FEMALE', 5, 2, 1, '', '0000-00-00', '', '09176780089', 'ENROLLED', 0, 3, 'Tacloban City', 5),
(284, 'Alexis', 'Jordias', 'Kornin', 'MALE', 6, 3, 2, '', '0000-00-00', '', '09126679099', 'ENROLLED', 0, 3, 'Tacloban City', 6),
(285, 'Quinee', 'Destajo', 'Crizano', 'FEMALE', 1, 1, 3, '', '0000-00-00', '', '09177784565', 'ENROLLED', 0, 3, 'Tacloban City', 1),
(286, 'Crizalyn', 'Picardal', 'Rivera', 'Female', 2, 2, 4, '', '0000-00-00', '', '09124432332', 'ENROLLED', 0, 3, 'Tacloban City', 2),
(287, 'Antonia', 'Cremilin', 'Banelo', 'Female', 3, 3, 1, '', '0000-00-00', '', '09187776675', 'ENROLLED', 0, 3, 'Tacloban City', 3),
(288, 'Alexia', 'Tresmojeres', 'Decena', 'Female', 4, 1, 2, '', '0000-00-00', '', '09187789876', 'ENROLLED', 0, 3, 'Tacloban City', 4),
(289, 'Tifanny', 'Mojeres', 'Jacinto', 'FEMALE', 5, 2, 1, '', '0000-00-00', '', '09176780089', 'ENROLLED', 0, 3, 'Tacloban City', 5),
(290, 'Benidict', 'Lacdao', 'Forteza', 'MALE', 6, 3, 2, '', '0000-00-00', '', '09126679099', 'ENROLLED', 0, 3, 'Tacloban City', 6),
(291, 'Barbie', 'Quijano', 'Romuar', 'FEMALE', 1, 1, 3, '', '0000-00-00', '', '09177784565', 'ENROLLED', 0, 3, 'Tacloban City', 1),
(292, 'loncey', 'marasigan', 'molina', 'MALE', 1, 0, 0, '', '2012-02-02', '2005-2006', '09123456565', 'NEW', 0, 0, 'tacloban city', 0),
(293, 'juan', 'dela', 'cruz', 'MALE', 1, 0, 0, 'FM-2011-001', '2012-02-04', '2011-2012', '09278182812', 'NEW', 0, 0, '770 real street, tacloban, leyte', 0),
(294, 'juan', 'dela', 'cruz', 'MALE', 1, 0, 0, 'FM-2011-001', '2012-02-04', '2005-2006', '09278182812', 'NEW', 0, 0, '770 real street, tacloban, leyte', 0),
(295, 'juan', 'dela', 'cruz', 'MALE', 1, 0, 0, 'FM-2011-001', '2012-02-04', '2005-2006', '09278182812', 'NEW', 0, 0, '770 real street, tacloban, leyte', 0),
(296, 'juan', 'dela', 'cruz', 'MALE', 1, 0, 0, 'FM-2011-001', '2012-02-04', '2005-2006', '09278182812', 'NEW', 0, 0, '770 real street, tacloban, leyte', 0);

-- --------------------------------------------------------

--
-- Table structure for table `contactcontent_tbl`
--

CREATE TABLE IF NOT EXISTS `contactcontent_tbl` (
  `contactcontent_id` tinyint(1) NOT NULL AUTO_INCREMENT,
  `contactcontent_txt` longtext NOT NULL,
  PRIMARY KEY (`contactcontent_id`)
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

CREATE TABLE IF NOT EXISTS `coordinator_tbl` (
  `SC_USERNAM` varchar(30) NOT NULL,
  `SC_PASS` varchar(30) NOT NULL,
  `SC_NAM3` varchar(30) NOT NULL,
  `SC_NAM2` varchar(30) NOT NULL,
  `SC_NAM1` varchar(30) NOT NULL,
  `HEI_ID` int(8) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`HEI_ID`)
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

CREATE TABLE IF NOT EXISTS `director_tbl` (
  `directorID` int(1) NOT NULL AUTO_INCREMENT,
  `directorUsername` varchar(30) DEFAULT NULL,
  `directorPassword` varchar(30) DEFAULT NULL,
  `directorFullname` varchar(65) NOT NULL,
  PRIMARY KEY (`directorID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `director_tbl`
--

INSERT INTO `director_tbl` (`directorID`, `directorUsername`, `directorPassword`, `directorFullname`) VALUES
(1, 'director', 'password', 'Director Libertad Garcia');

-- --------------------------------------------------------

--
-- Table structure for table `edusupervisor`
--

CREATE TABLE IF NOT EXISTS `edusupervisor` (
  `edusupervisorID` int(1) NOT NULL AUTO_INCREMENT,
  `edusupervisorUsername` varchar(30) DEFAULT NULL,
  `edusupervisorPassword` varchar(30) DEFAULT NULL,
  `edusupervisorNAM3` varchar(35) NOT NULL,
  `edusupervisorNAM2` varchar(35) NOT NULL,
  `edusupervisorNAM1` varchar(35) NOT NULL,
  PRIMARY KEY (`edusupervisorID`)
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

CREATE TABLE IF NOT EXISTS `faqcontenttbl` (
  `faqID` tinyint(1) NOT NULL AUTO_INCREMENT,
  `faqCONTENT` longtext NOT NULL,
  PRIMARY KEY (`faqID`)
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

CREATE TABLE IF NOT EXISTS `frontmaincontent_tbl` (
  `frontmaincontent_id` tinyint(1) NOT NULL AUTO_INCREMENT,
  `frontmaincontent_txt` longtext NOT NULL,
  PRIMARY KEY (`frontmaincontent_id`)
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

CREATE TABLE IF NOT EXISTS `grade_tbl` (
  `GRADE_ID` int(11) NOT NULL AUTO_INCREMENT,
  `schoolyr_yr` varchar(10) NOT NULL,
  `GRADE_SCHOOLYR` tinyint(1) NOT NULL,
  `GRADE_SEM` tinyint(1) NOT NULL,
  `GRADE_SUBJ` varchar(50) NOT NULL,
  `GRADE_REQ` varchar(20) NOT NULL,
  `GRADE_UNIT` tinyint(1) NOT NULL,
  `GRADE_GRADE` float NOT NULL,
  `BENEFICIARY_ID` int(8) NOT NULL,
  PRIMARY KEY (`GRADE_ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Dumping data for table `grade_tbl`
--

INSERT INTO `grade_tbl` (`GRADE_ID`, `schoolyr_yr`, `GRADE_SCHOOLYR`, `GRADE_SEM`, `GRADE_SUBJ`, `GRADE_REQ`, `GRADE_UNIT`, `GRADE_GRADE`, `BENEFICIARY_ID`) VALUES
(1, '2011-2012', 1, 1, 'Physics 1', 'Major', 4, 3.5, 17),
(2, '2011-2012', 1, 1, 'Computer Programming 1', 'Major', 4, 4, 17),
(3, '2011-2012', 1, 1, 'Physical Education 1', 'Minor', 1, 3, 14),
(4, '2011-2012', 1, 1, 'Algebra', 'Minor', 2, 3, 14),
(5, '2011-2012', 1, 1, 'Data Structures', 'Major', 4, 3, 14),
(6, '2011-2012', 1, 1, 'Math Plus', 'Major', 1, 1, 14),
(7, '2011-2012', 1, 1, 'Professional Ethics', 'Minor', 1, 3, 14),
(8, '2011-2012', 1, 1, 'Computer Programming 1', 'Minor', 3, 3, 14),
(9, '2011-2012', 1, 1, 'BASIC CONCEPTS', 'Major', 4, 4, 2),
(10, '2005-2006', 1, 1, 'COMPUTER PROGRAMMING 1', 'Major', 4, 4, 2),
(11, '2011-2012', 1, 1, 'Probability and Statistics', 'Minor', 2, 3, 17),
(12, '2011-2012', 1, 1, 'Programming 1', 'Major', 4, 2, 17),
(13, '2011-2012', 1, 1, 'Physical Education 1', 'Minor', 1, 1, 17);

-- --------------------------------------------------------

--
-- Table structure for table `grant_tbl`
--

CREATE TABLE IF NOT EXISTS `grant_tbl` (
  `GRANT_ID` int(3) NOT NULL AUTO_INCREMENT,
  `GRANT_CODE` varchar(30) NOT NULL,
  `GRANT_CAT` varchar(45) NOT NULL,
  `GRANT_FULLNAM` varchar(60) DEFAULT NULL,
  `GRANT_DESCRIPTION` longtext,
  `GRANT_SHORTNAM` varchar(30) DEFAULT NULL,
  `GRANT_MERITDESCINT` int(6) DEFAULT NULL,
  PRIMARY KEY (`GRANT_ID`)
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
-- Table structure for table `heitype_tbl`
--

CREATE TABLE IF NOT EXISTS `heitype_tbl` (
  `HEITYPE_ID` int(3) NOT NULL AUTO_INCREMENT,
  `HEITYPE_NAM` varchar(30) NOT NULL,
  `HEITYPE_DESC` varchar(65) NOT NULL,
  PRIMARY KEY (`HEITYPE_ID`)
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
-- Table structure for table `hei_program_tbl`
--

CREATE TABLE IF NOT EXISTS `hei_program_tbl` (
  `HEI_PROGRAM_ID` int(8) NOT NULL AUTO_INCREMENT,
  `HEI_ID` int(8) NOT NULL,
  `PROG_ID` int(11) NOT NULL,
  `HEI_PROG_TUITION` int(8) NOT NULL,
  `HEI_PROG_STAT` varchar(10) NOT NULL,
  PRIMARY KEY (`HEI_PROGRAM_ID`)
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

CREATE TABLE IF NOT EXISTS `hei_tbl` (
  `HEI_ID` int(8) NOT NULL AUTO_INCREMENT,
  `HEI_NAM` varchar(100) NOT NULL,
  `HEITYPE_ID` int(3) NOT NULL,
  `HEI_MUN` varchar(30) NOT NULL,
  `HEI_PROV` varchar(30) NOT NULL,
  `HEI_ACRONAM` varchar(20) NOT NULL,
  `HEI_TELNUM` varchar(20) NOT NULL,
  PRIMARY KEY (`HEI_ID`)
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
-- Table structure for table `hstype_tbl`
--

CREATE TABLE IF NOT EXISTS `hstype_tbl` (
  `HSTYPE_ID` int(3) NOT NULL AUTO_INCREMENT,
  `HSTYPE_NAM` varchar(30) NOT NULL,
  `HSTYPE_DESC` varchar(30) NOT NULL,
  PRIMARY KEY (`HSTYPE_ID`)
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

CREATE TABLE IF NOT EXISTS `mate_columns` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `mate_user_id` varchar(75) COLLATE utf8_unicode_ci NOT NULL,
  `mate_var_prefix` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `mate_column` varchar(75) COLLATE utf8_unicode_ci NOT NULL,
  `hidden` varchar(3) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'No',
  `order_num` mediumint(4) unsigned NOT NULL,
  `date_updated` datetime NOT NULL,
  PRIMARY KEY (`id`),
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

CREATE TABLE IF NOT EXISTS `missioncontenttbl` (
  `missionID` tinyint(1) NOT NULL AUTO_INCREMENT,
  `missionCONTENT` longtext NOT NULL,
  PRIMARY KEY (`missionID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `missioncontenttbl`
--

INSERT INTO `missioncontenttbl` (`missionID`, `missionCONTENT`) VALUES
(1, '<!--[if gte mso 9]><xml>\r\n <w:WordDocument>\r\n  <w:View>Normal</w:View>\r\n  <w:Zoom>0</w:Zoom>\r\n  <w:TrackMoves/>\r\n  <w:TrackFormatting/>\r\n  <w:PunctuationKerning/>\r\n  <w:ValidateAgainstSchemas/>\r\n  <w:SaveIfXMLInvalid>false</w:SaveIfXMLInvalid>\r\n  <w:IgnoreMixedContent>false</w:IgnoreMixedContent>\r\n  <w:AlwaysShowPlaceholderText>false</w:AlwaysShowPlaceholderText>\r\n  <w:DoNotPromoteQF/>\r\n  <w:LidThemeOther>EN-US</w:LidThemeOther>\r\n  <w:LidThemeAsian>X-NONE</w:LidThemeAsian>\r\n  <w:LidThemeComplexScript>X-NONE</w:LidThemeComplexScript>\r\n  <w:Compatibility>\r\n   <w:BreakWrappedTables/>\r\n   <w:SnapToGridInCell/>\r\n   <w:WrapTextWithPunct/>\r\n   <w:UseAsianBreakRules/>\r\n   <w:DontGrowAutofit/>\r\n   <w:SplitPgBreakAndParaMark/>\r\n   <w:DontVertAlignCellWithSp/>\r\n   <w:DontBreakConstrainedForcedTables/>\r\n   <w:DontVertAlignInTxbx/>\r\n   <w:Word11KerningPairs/>\r\n   <w:CachedColBalance/>\r\n  </w:Compatibility>\r\n  <m:mathPr>\r\n   <m:mathFont m:val="Cambria Math"/>\r\n   <m:brkBin m:val="before"/>\r\n   <m:brkBinSub m:val="&#45;-"/>\r\n   <m:smallFrac m:val="off"/>\r\n   <m:dispDef/>\r\n   <m:lMargin m:val="0"/>\r\n   <m:rMargin m:val="0"/>\r\n   <m:defJc m:val="centerGroup"/>\r\n   <m:wrapIndent m:val="1440"/>\r\n   <m:intLim m:val="subSup"/>\r\n   <m:naryLim m:val="undOvr"/>\r\n  </m:mathPr></w:WordDocument>\r\n</xml><![endif]--><!--[if gte mso 9]><xml>\r\n <w:LatentStyles DefLockedState="false" DefUnhideWhenUsed="true"\r\n  DefSemiHidden="true" DefQFormat="false" DefPriority="99"\r\n  LatentStyleCount="267">\r\n  <w:LsdException Locked="false" Priority="0" SemiHidden="false"\r\n   UnhideWhenUsed="false" QFormat="true" Name="Normal"/>\r\n  <w:LsdException Locked="false" Priority="9" SemiHidden="false"\r\n   UnhideWhenUsed="false" QFormat="true" Name="heading 1"/>\r\n  <w:LsdException Locked="false" Priority="9" QFormat="true" Name="heading 2"/>\r\n  <w:LsdException Locked="false" Priority="9" QFormat="true" Name="heading 3"/>\r\n  <w:LsdException Locked="false" Priority="9" QFormat="true" Name="heading 4"/>\r\n  <w:LsdException Locked="false" Priority="9" QFormat="true" Name="heading 5"/>\r\n  <w:LsdException Locked="false" Priority="9" QFormat="true" Name="heading 6"/>\r\n  <w:LsdException Locked="false" Priority="9" QFormat="true" Name="heading 7"/>\r\n  <w:LsdException Locked="false" Priority="9" QFormat="true" Name="heading 8"/>\r\n  <w:LsdException Locked="false" Priority="9" QFormat="true" Name="heading 9"/>\r\n  <w:LsdException Locked="false" Priority="39" Name="toc 1"/>\r\n  <w:LsdException Locked="false" Priority="39" Name="toc 2"/>\r\n  <w:LsdException Locked="false" Priority="39" Name="toc 3"/>\r\n  <w:LsdException Locked="false" Priority="39" Name="toc 4"/>\r\n  <w:LsdException Locked="false" Priority="39" Name="toc 5"/>\r\n  <w:LsdException Locked="false" Priority="39" Name="toc 6"/>\r\n  <w:LsdException Locked="false" Priority="39" Name="toc 7"/>\r\n  <w:LsdException Locked="false" Priority="39" Name="toc 8"/>\r\n  <w:LsdException Locked="false" Priority="39" Name="toc 9"/>\r\n  <w:LsdException Locked="false" Priority="35" QFormat="true" Name="caption"/>\r\n  <w:LsdException Locked="false" Priority="10" SemiHidden="false"\r\n   UnhideWhenUsed="false" QFormat="true" Name="Title"/>\r\n  <w:LsdException Locked="false" Priority="1" Name="Default Paragraph Font"/>\r\n  <w:LsdException Locked="false" Priority="11" SemiHidden="false"\r\n   UnhideWhenUsed="false" QFormat="true" Name="Subtitle"/>\r\n  <w:LsdException Locked="false" Priority="22" SemiHidden="false"\r\n   UnhideWhenUsed="false" QFormat="true" Name="Strong"/>\r\n  <w:LsdException Locked="false" Priority="20" SemiHidden="false"\r\n   UnhideWhenUsed="false" QFormat="true" Name="Emphasis"/>\r\n  <w:LsdException Locked="false" Priority="59" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Table Grid"/>\r\n  <w:LsdException Locked="false" UnhideWhenUsed="false" Name="Placeholder Text"/>\r\n  <w:LsdException Locked="false" Priority="1" SemiHidden="false"\r\n   UnhideWhenUsed="false" QFormat="true" Name="No Spacing"/>\r\n  <w:LsdException Locked="false" Priority="60" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Light Shading"/>\r\n  <w:LsdException Locked="false" Priority="61" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Light List"/>\r\n  <w:LsdException Locked="false" Priority="62" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Light Grid"/>\r\n  <w:LsdException Locked="false" Priority="63" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Medium Shading 1"/>\r\n  <w:LsdException Locked="false" Priority="64" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Medium Shading 2"/>\r\n  <w:LsdException Locked="false" Priority="65" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Medium List 1"/>\r\n  <w:LsdException Locked="false" Priority="66" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Medium List 2"/>\r\n  <w:LsdException Locked="false" Priority="67" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Medium Grid 1"/>\r\n  <w:LsdException Locked="false" Priority="68" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Medium Grid 2"/>\r\n  <w:LsdException Locked="false" Priority="69" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Medium Grid 3"/>\r\n  <w:LsdException Locked="false" Priority="70" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Dark List"/>\r\n  <w:LsdException Locked="false" Priority="71" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Colorful Shading"/>\r\n  <w:LsdException Locked="false" Priority="72" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Colorful List"/>\r\n  <w:LsdException Locked="false" Priority="73" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Colorful Grid"/>\r\n  <w:LsdException Locked="false" Priority="60" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Light Shading Accent 1"/>\r\n  <w:LsdException Locked="false" Priority="61" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Light List Accent 1"/>\r\n  <w:LsdException Locked="false" Priority="62" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Light Grid Accent 1"/>\r\n  <w:LsdException Locked="false" Priority="63" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Medium Shading 1 Accent 1"/>\r\n  <w:LsdException Locked="false" Priority="64" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Medium Shading 2 Accent 1"/>\r\n  <w:LsdException Locked="false" Priority="65" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Medium List 1 Accent 1"/>\r\n  <w:LsdException Locked="false" UnhideWhenUsed="false" Name="Revision"/>\r\n  <w:LsdException Locked="false" Priority="34" SemiHidden="false"\r\n   UnhideWhenUsed="false" QFormat="true" Name="List Paragraph"/>\r\n  <w:LsdException Locked="false" Priority="29" SemiHidden="false"\r\n   UnhideWhenUsed="false" QFormat="true" Name="Quote"/>\r\n  <w:LsdException Locked="false" Priority="30" SemiHidden="false"\r\n   UnhideWhenUsed="false" QFormat="true" Name="Intense Quote"/>\r\n  <w:LsdException Locked="false" Priority="66" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Medium List 2 Accent 1"/>\r\n  <w:LsdException Locked="false" Priority="67" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Medium Grid 1 Accent 1"/>\r\n  <w:LsdException Locked="false" Priority="68" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Medium Grid 2 Accent 1"/>\r\n  <w:LsdException Locked="false" Priority="69" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Medium Grid 3 Accent 1"/>\r\n  <w:LsdException Locked="false" Priority="70" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Dark List Accent 1"/>\r\n  <w:LsdException Locked="false" Priority="71" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Colorful Shading Accent 1"/>\r\n  <w:LsdException Locked="false" Priority="72" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Colorful List Accent 1"/>\r\n  <w:LsdException Locked="false" Priority="73" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Colorful Grid Accent 1"/>\r\n  <w:LsdException Locked="false" Priority="60" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Light Shading Accent 2"/>\r\n  <w:LsdException Locked="false" Priority="61" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Light List Accent 2"/>\r\n  <w:LsdException Locked="false" Priority="62" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Light Grid Accent 2"/>\r\n  <w:LsdException Locked="false" Priority="63" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Medium Shading 1 Accent 2"/>\r\n  <w:LsdException Locked="false" Priority="64" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Medium Shading 2 Accent 2"/>\r\n  <w:LsdException Locked="false" Priority="65" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Medium List 1 Accent 2"/>\r\n  <w:LsdException Locked="false" Priority="66" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Medium List 2 Accent 2"/>\r\n  <w:LsdException Locked="false" Priority="67" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Medium Grid 1 Accent 2"/>\r\n  <w:LsdException Locked="false" Priority="68" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Medium Grid 2 Accent 2"/>\r\n  <w:LsdException Locked="false" Priority="69" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Medium Grid 3 Accent 2"/>\r\n  <w:LsdException Locked="false" Priority="70" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Dark List Accent 2"/>\r\n  <w:LsdException Locked="false" Priority="71" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Colorful Shading Accent 2"/>\r\n  <w:LsdException Locked="false" Priority="72" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Colorful List Accent 2"/>\r\n  <w:LsdException Locked="false" Priority="73" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Colorful Grid Accent 2"/>\r\n  <w:LsdException Locked="false" Priority="60" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Light Shading Accent 3"/>\r\n  <w:LsdException Locked="false" Priority="61" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Light List Accent 3"/>\r\n  <w:LsdException Locked="false" Priority="62" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Light Grid Accent 3"/>\r\n  <w:LsdException Locked="false" Priority="63" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Medium Shading 1 Accent 3"/>\r\n  <w:LsdException Locked="false" Priority="64" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Medium Shading 2 Accent 3"/>\r\n  <w:LsdException Locked="false" Priority="65" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Medium List 1 Accent 3"/>\r\n  <w:LsdException Locked="false" Priority="66" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Medium List 2 Accent 3"/>\r\n  <w:LsdException Locked="false" Priority="67" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Medium Grid 1 Accent 3"/>\r\n  <w:LsdException Locked="false" Priority="68" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Medium Grid 2 Accent 3"/>\r\n  <w:LsdException Locked="false" Priority="69" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Medium Grid 3 Accent 3"/>\r\n  <w:LsdException Locked="false" Priority="70" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Dark List Accent 3"/>\r\n  <w:LsdException Locked="false" Priority="71" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Colorful Shading Accent 3"/>\r\n  <w:LsdException Locked="false" Priority="72" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Colorful List Accent 3"/>\r\n  <w:LsdException Locked="false" Priority="73" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Colorful Grid Accent 3"/>\r\n  <w:LsdException Locked="false" Priority="60" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Light Shading Accent 4"/>\r\n  <w:LsdException Locked="false" Priority="61" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Light List Accent 4"/>\r\n  <w:LsdException Locked="false" Priority="62" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Light Grid Accent 4"/>\r\n  <w:LsdException Locked="false" Priority="63" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Medium Shading 1 Accent 4"/>\r\n  <w:LsdException Locked="false" Priority="64" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Medium Shading 2 Accent 4"/>\r\n  <w:LsdException Locked="false" Priority="65" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Medium List 1 Accent 4"/>\r\n  <w:LsdException Locked="false" Priority="66" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Medium List 2 Accent 4"/>\r\n  <w:LsdException Locked="false" Priority="67" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Medium Grid 1 Accent 4"/>\r\n  <w:LsdException Locked="false" Priority="68" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Medium Grid 2 Accent 4"/>\r\n  <w:LsdException Locked="false" Priority="69" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Medium Grid 3 Accent 4"/>\r\n  <w:LsdException Locked="false" Priority="70" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Dark List Accent 4"/>\r\n  <w:LsdException Locked="false" Priority="71" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Colorful Shading Accent 4"/>\r\n  <w:LsdException Locked="false" Priority="72" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Colorful List Accent 4"/>\r\n  <w:LsdException Locked="false" Priority="73" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Colorful Grid Accent 4"/>\r\n  <w:LsdException Locked="false" Priority="60" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Light Shading Accent 5"/>\r\n  <w:LsdException Locked="false" Priority="61" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Light List Accent 5"/>\r\n  <w:LsdException Locked="false" Priority="62" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Light Grid Accent 5"/>\r\n  <w:LsdException Locked="false" Priority="63" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Medium Shading 1 Accent 5"/>\r\n  <w:LsdException Locked="false" Priority="64" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Medium Shading 2 Accent 5"/>\r\n  <w:LsdException Locked="false" Priority="65" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Medium List 1 Accent 5"/>\r\n  <w:LsdException Locked="false" Priority="66" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Medium List 2 Accent 5"/>\r\n  <w:LsdException Locked="false" Priority="67" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Medium Grid 1 Accent 5"/>\r\n  <w:LsdException Locked="false" Priority="68" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Medium Grid 2 Accent 5"/>\r\n  <w:LsdException Locked="false" Priority="69" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Medium Grid 3 Accent 5"/>\r\n  <w:LsdException Locked="false" Priority="70" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Dark List Accent 5"/>\r\n  <w:LsdException Locked="false" Priority="71" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Colorful Shading Accent 5"/>\r\n  <w:LsdException Locked="false" Priority="72" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Colorful List Accent 5"/>\r\n  <w:LsdException Locked="false" Priority="73" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Colorful Grid Accent 5"/>\r\n  <w:LsdException Locked="false" Priority="60" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Light Shading Accent 6"/>\r\n  <w:LsdException Locked="false" Priority="61" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Light List Accent 6"/>\r\n  <w:LsdException Locked="false" Priority="62" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Light Grid Accent 6"/>\r\n  <w:LsdException Locked="false" Priority="63" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Medium Shading 1 Accent 6"/>\r\n  <w:LsdException Locked="false" Priority="64" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Medium Shading 2 Accent 6"/>\r\n  <w:LsdException Locked="false" Priority="65" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Medium List 1 Accent 6"/>\r\n  <w:LsdException Locked="false" Priority="66" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Medium List 2 Accent 6"/>\r\n  <w:LsdException Locked="false" Priority="67" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Medium Grid 1 Accent 6"/>\r\n  <w:LsdException Locked="false" Priority="68" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Medium Grid 2 Accent 6"/>\r\n  <w:LsdException Locked="false" Priority="69" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Medium Grid 3 Accent 6"/>\r\n  <w:LsdException Locked="false" Priority="70" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Dark List Accent 6"/>\r\n  <w:LsdException Locked="false" Priority="71" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Colorful Shading Accent 6"/>\r\n  <w:LsdException Locked="false" Priority="72" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Colorful List Accent 6"/>\r\n  <w:LsdException Locked="false" Priority="73" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Colorful Grid Accent 6"/>\r\n  <w:LsdException Locked="false" Priority="19" SemiHidden="false"\r\n   UnhideWhenUsed="false" QFormat="true" Name="Subtle Emphasis"/>\r\n  <w:LsdException Locked="false" Priority="21" SemiHidden="false"\r\n   UnhideWhenUsed="false" QFormat="true" Name="Intense Emphasis"/>\r\n  <w:LsdException Locked="false" Priority="31" SemiHidden="false"\r\n   UnhideWhenUsed="false" QFormat="true" Name="Subtle Reference"/>\r\n  <w:LsdException Locked="false" Priority="32" SemiHidden="false"\r\n   UnhideWhenUsed="false" QFormat="true" Name="Intense Reference"/>\r\n  <w:LsdException Locked="false" Priority="33" SemiHidden="false"\r\n   UnhideWhenUsed="false" QFormat="true" Name="Book Title"/>\r\n  <w:LsdException Locked="false" Priority="37" Name="Bibliography"/>\r\n  <w:LsdException Locked="false" Priority="39" QFormat="true" Name="TOC Heading"/>\r\n </w:LatentStyles>\r\n</xml><![endif]--><!--[if gte mso 10]>\r\n<style>\r\n /* Style Definitions */\r\n table.MsoNormalTable\r\n	{mso-style-name:"Table Normal";\r\n	mso-tstyle-rowband-size:0;\r\n	mso-tstyle-colband-size:0;\r\n	mso-style-noshow:yes;\r\n	mso-style-priority:99;\r\n	mso-style-qformat:yes;\r\n	mso-style-parent:"";\r\n	mso-padding-alt:0in 5.4pt 0in 5.4pt;\r\n	mso-para-margin-top:0in;\r\n	mso-para-margin-right:0in;\r\n	mso-para-margin-bottom:10.0pt;\r\n	mso-para-margin-left:0in;\r\n	line-height:115%;\r\n	mso-pagination:widow-orphan;\r\n	font-size:11.0pt;\r\n	font-family:"Calibri","sans-serif";\r\n	mso-ascii-font-family:Calibri;\r\n	mso-ascii-theme-font:minor-latin;\r\n	mso-fareast-font-family:"Times New Roman";\r\n	mso-fareast-theme-font:minor-fareast;\r\n	mso-hansi-font-family:Calibri;\r\n	mso-hansi-theme-font:minor-latin;\r\n	mso-bidi-font-family:"Times New Roman";\r\n	mso-bidi-theme-font:minor-bidi;}\r\n</style>\r\n<![endif]-->\r\n\r\n<p style="font-family: comic sans ms; font-weight: bold;" class="MsoNormal"><font size="4">Mission</font></p>\r\n\r\n<p style="font-style: italic;" class="MsoNormal">To provide a Dynamic and Facilitative Leadership in the\r\nEducation and Integral Development of Individuals through Relevant. Accessible\r\nand Quality Higher Education Responsive to Socio â€“ Economic Challenges in a\r\nDiverse and Globalized Society.</p>\r\n\r\n<p class="MsoNormal">&nbsp;</p>\r\n\r\n<p style="font-family: comic sans ms; font-weight: bold;" class="MsoNormal"><font size="4">Vision</font></p>\r\n\r\n<p style="font-style: italic;" class="MsoNormal">A humane, Morally<span style="mso-spacerun:yes">&nbsp;\r\n</span>Upright,<span style="mso-spacerun:yes">&nbsp; </span>Professionally\r\nCompetent, Globally Competitive Citizenry who are Prime<span style="mso-spacerun:yes">&nbsp; </span>Movers in the Nationâ€™s Socio â€“ Economic and\r\nSustainable Development.</p>\r\n\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `paymentrecords_tbl`
--

CREATE TABLE IF NOT EXISTS `paymentrecords_tbl` (
  `PAYMENTRECORDS_ID` int(8) NOT NULL AUTO_INCREMENT,
  `PAYMENT_ID` int(8) NOT NULL,
  `PAYMENTRECORDS_DATE` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`PAYMENTRECORDS_ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `paymentrecords_tbl`
--

INSERT INTO `paymentrecords_tbl` (`PAYMENTRECORDS_ID`, `PAYMENT_ID`, `PAYMENTRECORDS_DATE`) VALUES
(1, 1, '2012-02-03 01:15:24');

-- --------------------------------------------------------

--
-- Table structure for table `payment_tbl`
--

CREATE TABLE IF NOT EXISTS `payment_tbl` (
  `PAYMENT_ID` int(11) NOT NULL AUTO_INCREMENT,
  `PAYMENT_TUITION` float NOT NULL,
  `PAYMENT_ALLOWANCE` float NOT NULL,
  `BENEFICIARY_ID` int(11) NOT NULL,
  `PAYMENT_BILL` float NOT NULL,
  `PAYMENT_DATE` date NOT NULL,
  `PAYMENT_SEM` tinyint(1) NOT NULL,
  `schoolyr_yr` varchar(10) NOT NULL,
  `PAYMENT_STATUS` varchar(10) NOT NULL,
  PRIMARY KEY (`PAYMENT_ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `payment_tbl`
--

INSERT INTO `payment_tbl` (`PAYMENT_ID`, `PAYMENT_TUITION`, `PAYMENT_ALLOWANCE`, `BENEFICIARY_ID`, `PAYMENT_BILL`, `PAYMENT_DATE`, `PAYMENT_SEM`, `schoolyr_yr`, `PAYMENT_STATUS`) VALUES
(1, 0, 7500, 231, 7500, '2012-02-02', 1, '2006-2007', 'SENT');

-- --------------------------------------------------------

--
-- Table structure for table `prereg_tbl`
--

CREATE TABLE IF NOT EXISTS `prereg_tbl` (
  `PREREG_ID` int(8) NOT NULL AUTO_INCREMENT,
  `PREREG_FIRSTNAME` varchar(65) DEFAULT NULL,
  `PREREG_MIDNAME` varchar(65) DEFAULT NULL,
  `PREREG_LASTNAME` varchar(65) DEFAULT NULL,
  `PREREG_BDAY` date NOT NULL,
  `PREREG_GWA` tinyint(3) DEFAULT NULL,
  `PREREG_NCAE` tinyint(3) DEFAULT NULL,
  `PREREG_AITR` double NOT NULL,
  `PREREG_CONTACT` varchar(30) NOT NULL,
  `PREREG_EMAILADD` varchar(35) NOT NULL,
  `GRANT_ID` tinyint(2) NOT NULL,
  `PREREG_DBLCHCK` tinyint(1) NOT NULL,
  PRIMARY KEY (`PREREG_ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=58 ;

--
-- Dumping data for table `prereg_tbl`
--

INSERT INTO `prereg_tbl` (`PREREG_ID`, `PREREG_FIRSTNAME`, `PREREG_MIDNAME`, `PREREG_LASTNAME`, `PREREG_BDAY`, `PREREG_GWA`, `PREREG_NCAE`, `PREREG_AITR`, `PREREG_CONTACT`, `PREREG_EMAILADD`, `GRANT_ID`, `PREREG_DBLCHCK`) VALUES
(1, 'abegail', 'opana', 'quiambao', '1993-02-05', 99, 90, 30000, '09132131231', 'roniel_44@yahoo.com', 1, 1),
(2, 'jennise', 'robredillo', 'pasudag', '1995-12-07', 99, 99, 160000, '09132131231', 'roniel_44@yahoo.com', 1, 1),
(3, 'jennise', 'robredillo', 'pasudag', '1995-12-07', 99, 99, 160000, '09132131231', 'roniel_44@yahoo.com', 1, 0),
(4, 'john', 'monroe', 'mompil', '1997-12-19', 99, 99, 99999, '09132131231', 'roniel_44@yahoo.com', 1, 1),
(5, 'aristotle', 'gloc', 'pollisco', '1996-02-09', 99, 99, 120000, '09132131231', 'roniel_44@yahoo.com', 1, 1),
(6, 'marshall', 'eminem', 'mathers', '1992-10-27', 99, 99, 150000, '09278182812', 'roniel_44@yahoo.com', 1, 1),
(7, 'marie', 'forteza', 'estaron', '1996-02-02', 99, 99, 123000, '09278182812', 'roniel_44@yahoo.com', 1, 1),
(8, 'jon', 'bon', 'jovi', '1998-03-13', 99, 99, 150000, '09278182812', 'roniel_44@yahoo.com', 1, 1),
(9, 'kurt', 'rizal', 'cobain', '1998-01-10', 99, 99, 123000, '09278182812', 'roniel_44@yahoo.com', 1, 1),
(10, 'mary christine', 'abuedo', 'bandoy', '1996-03-07', 99, 99, 150000, '09278182812', 'roniel_44@yahoo.com', 1, 0),
(11, 'Freddie', 'montano', 'tirazona', '1992-07-06', 99, 99, 150000, '09278182812', 'roniel_44@yahoo.com', 1, 1),
(12, 'mary christine', 'abuedo', 'bandoy', '1991-12-15', 89, 90, 150000, '09107365795', 'marychristineb@yahoo.com', 2, 0),
(13, 'Lilibelle', 'sabus', 'aruta', '1992-02-17', 99, 99, 150000, '1092000', 'lilibellearuta@yahoo.com', 1, 1),
(14, 'juan', 'dela', 'cruz', '1992-01-11', 99, 99, 150000, '09278182812', 'roniel_44@yahoo.com', 1, 1),
(15, 'mary christine', 'abuedo', 'bandoy', '1991-12-15', 89, 90, 150000, '09107365795', 'marychristineb@yahoo.com', 2, 1),
(16, 'claudine', 'bandoy', 'espinosa', '1992-10-17', 87, 88, 20000, '09083142803', 'claudine_espinosa@yahoo.com', 2, 1),
(17, 'krista', 'abria', 'aniceto', '1989-12-21', 87, 88, 150000, '09278182812', 'kristaaniceto@yahoo.com', 2, 1),
(18, 'roseann', 'gilhang', 'bajado', '1990-12-01', 87, 88, 18000, '09083142803', 'roseannbajado@yahoo.com', 2, 1),
(19, 'james louie', 'jones', 'montano', '1991-01-27', 86, 88, 18000, '09083142803', 'jamesmontano@yahoo.com', 2, 1),
(20, 'david john', 'tan', 'serdoncillo', '1990-04-27', 87, 99, 150000, '09107365795', 'davidserdoncillo@yahoo.com', 2, 1),
(21, 'brian', 'gonzaga', 'delantar', '1988-01-27', 87, 90, 18000, '09278182812', 'rouelbrian@yahoo.com', 2, 1),
(22, 'jane', 'caranyagan', 'malindog', '1993-01-29', 86, 88, 18000, '09278182812', 'janemalindog@yahoo.com', 2, 1),
(23, 'jim', 'opana', 'garcia', '1991-02-14', 87, 88, 150000, '09278182812', 'ilovegreen@yahoo.com', 2, 1),
(24, 'johannes', 'terre', 'gaduena', '1988-01-27', 86, 99, 20000, '09123456565', 'tpgaduena@yahoo.com', 2, 1),
(25, 'zeny', 'TRUMPO', 'GAMATA', '1988-01-27', 86, 88, 20000, '09107365795', 'zenygamata@yahoo.com', 2, 1),
(26, 'athena', 'chan', 'remulta', '1991-03-24', 87, 88, 18000, '09278182812', 'remultaa@yahoo.com', 2, 1),
(27, 'jimmy', 'lumactod', 'ablay', '1988-06-01', 86, 88, 18000, '09128509827', 'jimmyablay@yahoo.com', 2, 1),
(28, 'MYLENE', 'DELANTAR', 'ATREGENIO', '1991-05-24', 86, 88, 18000, '09083142803', 'myleneatregenio@yahoo.com', 2, 1),
(29, 'joseph', 'tan', 'biggel', '1991-01-26', 86, 89, 20000, '09107365795', 'josephbiggel@yahoo.com', 2, 1),
(30, 'ivan cris', 'caranyagan', 'destajo', '1991-01-22', 86, 88, 20000, '09278182812', 'idestajo@yahoo.com', 2, 1),
(31, 'juvy', 'naing', 'sabijon', '1992-10-07', 87, 88, 18000, '09278182812', 'juvysabijon@yahoo.com', 2, 1),
(32, 'ARNILA', 'bandoy', 'ancla', '1988-02-23', 89, 90, 20000, '09062093133', 'arnilaancla@yahoo.com', 2, 1),
(33, 'agnes', 'pacheco', 'delatonga', '1989-03-14', 86, 88, 20000, '09083142803', 'agnesdelatonga@yahoo.com', 2, 1),
(34, 'enchong', 'tan', 'dee', '1988-11-06', 87, 90, 20000, '09123456565', 'enchongdee@yahoo.com', 2, 1),
(35, 'warley', 'chan', 'gagatiga', '1991-01-26', 86, 88, 20000, '09083142803', 'warleyg@yahoo.com', 2, 1),
(36, 'lourdes', 'basario', 'cablao', '1991-01-01', 87, 90, 18000, '09083142803', 'malourdesc@yahoo.com', 2, 1),
(37, 'elizabeth', 'cablao', 'danas', '1991-05-27', 86, 88, 20000, '09083142803', 'elizabethdanas@yahoo.com', 2, 1),
(38, 'genevive', 'abuyen', 'quiza', '1991-03-20', 87, 90, 18000, '09278182812', 'geneviveabuyen@yahoo.com', 2, 1),
(39, 'vic', 'cablao', 'cruz', '1991-11-10', 86, 88, 20000, '09083142803', 'vicjaysoncablao@yahoo.com', 2, 1),
(40, 'jinky', 'marasigan', 'verzosa', '1992-07-29', 87, 90, 18000, '09083142803', 'jinkyverzosa@yahoo.com', 2, 0),
(41, 'violady', 'cascayan', 'quino', '1991-04-11', 88, 90, 18000, '09083142803', 'jingquino@yahoo.com', 2, 1),
(42, 'loncey', 'marasigan', 'molina', '1991-12-14', 87, 90, 18000, '09123456565', 'lon_z14@yahoo.com', 2, 1),
(43, 'marlon', 'naing', 'PADULLON', '1991-01-15', 87, 90, 20000, '09123456565', 'horsyyow@yahoo.com', 2, 1),
(44, 'HIGINA VINA', 'LIMBOY', 'CABLAO', '1992-03-25', 87, 90, 20000, '09083142803', 'vinacablao@yahoo.com', 2, 1),
(45, 'james', 'garcia', 'macapugas', '1992-02-24', 86, 88, 20000, '09107365795', 'jamesmacapugas@yahoo.com', 2, 1),
(46, 'manilyn', 'palce', 'ty', '1991-04-10', 86, 90, 18000, '09278182812', 'manilynp@yahoo.com', 2, 1),
(47, 'rey joseph', 'bandoy', 'espinosa', '1992-05-02', 89, 88, 18000, '09107365795', 'reyjosephe@yahoo.com', 2, 1),
(48, 'reymund', 'bacha', 'canlu', '1991-07-20', 98, 97, 160000, '24345654', 'reymund@yahoo.com', 1, 1),
(49, 'eugene', 'jiruyo', 'tarumba', '1991-07-29', 98, 98, 170000, '3455654325', 'eugene@yahoo.com', 1, 1),
(50, 'jiona', 'viruna', 'canlas', '1990-06-28', 80, 85, 190000, '876544567876543456', 'canlas@yahoo.om', 3, 1),
(51, 'geomelyn', 'garuna', 'bernal', '1990-01-28', 87, 86, 190000, '123456756543454', 'garuna@yahoo.com', 2, 1),
(52, 'karla', 'loste', 'garcia', '1992-12-12', 93, 92, 190000, '09083142803', 'roniel_44@yahoo.com', 1, 1),
(53, 'Santino', 'dantes', 'marello', '1995-08-15', 89, 87, 180000, '09278182812', 'roniel_44@yahoo.com', 2, 0),
(54, 'Santino', 'dantes', 'marello', '1995-08-15', 89, 87, 180000, '09278182812', 'roniel_44@yahoo.com', 2, 0),
(55, 'ronelyn', 'bandoy', 'dagamina', '1990-07-14', 88, 88, 200000, '09107887567', 'ronelynbandoy@yahoo.com', 2, 0),
(56, 'ronelyn', 'bandoy', 'dagamina', '1990-07-14', 88, 88, 200000, '09107887567', 'ronelynbandoy@yahoo.com', 2, 1),
(57, 'faith', 'SY', 'Luna', '1991-02-01', 85, 89, 130000, '09187664556', 'faithluna@yahoo.com', 2, 1);

-- --------------------------------------------------------

--
-- Table structure for table `progclass_tbl`
--

CREATE TABLE IF NOT EXISTS `progclass_tbl` (
  `PROGCLASS_ID` int(3) NOT NULL AUTO_INCREMENT,
  `PROGCLASS_NAM` varchar(30) NOT NULL,
  `PROGCLASS_DESC` varchar(65) NOT NULL,
  PRIMARY KEY (`PROGCLASS_ID`)
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

CREATE TABLE IF NOT EXISTS `program_tbl` (
  `PROG_ID` int(11) NOT NULL AUTO_INCREMENT,
  `PROG_CODE` varchar(20) NOT NULL,
  `PROG_NAM` longtext NOT NULL,
  `PROGCLASS_ID` int(3) NOT NULL,
  `PROG_YRS` int(1) NOT NULL,
  `PROG_DISC` varchar(50) NOT NULL,
  PRIMARY KEY (`PROG_ID`)
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

CREATE TABLE IF NOT EXISTS `schoolyr_tbl` (
  `schoolyr_id` tinyint(4) NOT NULL AUTO_INCREMENT,
  `schoolyr_yr` varchar(10) NOT NULL,
  PRIMARY KEY (`schoolyr_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=33 ;

--
-- Dumping data for table `schoolyr_tbl`
--

INSERT INTO `schoolyr_tbl` (`schoolyr_id`, `schoolyr_yr`) VALUES
(1, '2005-2006'),
(2, '2006-2007'),
(5, '2007-2008'),
(7, '2009-2010'),
(20, '2010-2011'),
(21, '2011-2012'),
(29, '2012-2013'),
(30, '2013-2014'),
(31, '2014-2015'),
(32, '2015-2016');

-- --------------------------------------------------------

--
-- Table structure for table `sitemap_tbl`
--

CREATE TABLE IF NOT EXISTS `sitemap_tbl` (
  `sitemap_ID` int(3) NOT NULL AUTO_INCREMENT,
  `sitemap_PHOTO` varchar(65) NOT NULL,
  PRIMARY KEY (`sitemap_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `sponsor_tbl`
--

CREATE TABLE IF NOT EXISTS `sponsor_tbl` (
  `sponsor_ID` int(8) NOT NULL AUTO_INCREMENT,
  `sponsor_title` varchar(30) NOT NULL,
  `sponsor_nam1` varchar(35) NOT NULL,
  `sponsor_nam2` varchar(35) NOT NULL,
  `sponsor_nam3` varchar(35) NOT NULL,
  `org_nam` varchar(65) NOT NULL,
  PRIMARY KEY (`sponsor_ID`)
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

CREATE TABLE IF NOT EXISTS `stufap` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `first_name` varchar(100) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `last_name` varchar(100) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `HEI_NAM` varchar(65) COLLATE utf8_unicode_ci NOT NULL,
  `PROG_NAM` varchar(65) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(200) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `GRANT_STARTDATE` datetime NOT NULL,
  `Example` varchar(34) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
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

CREATE TABLE IF NOT EXISTS `sysadmin` (
  `adminID` int(1) NOT NULL AUTO_INCREMENT,
  `adminUsername` varchar(30) DEFAULT NULL,
  `adminPassword` varchar(30) DEFAULT NULL,
  `adminFullname` varchar(65) NOT NULL,
  PRIMARY KEY (`adminID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `sysadmin`
--

INSERT INTO `sysadmin` (`adminID`, `adminUsername`, `adminPassword`, `adminFullname`) VALUES
(1, 'admin', '1', 'Roniel');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
