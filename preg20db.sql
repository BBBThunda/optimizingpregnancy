-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 14, 2012 at 03:33 PM
-- Server version: 5.5.16
-- PHP Version: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `preg20`
--

-- --------------------------------------------------------

--
-- Table structure for table `baby`
--

CREATE TABLE IF NOT EXISTS `baby` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `patient_id` int(11) NOT NULL,
  `outcome` int(11) NOT NULL,
  `conceive_date` date NOT NULL,
  `deliver_date` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `factors`
--

CREATE TABLE IF NOT EXISTS `factors` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Name` varchar(30) DEFAULT NULL,
  `Description` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `factors`
--

INSERT INTO `factors` (`id`, `Name`, `Description`) VALUES
(1, 'Ethnicity', 'belonging to a social group that has a common national or cultural tradition.'),
(2, 'Age', 'Patients age'),
(3, 'Conditions', 'Mother has a chronic condition'),
(4, 'Meds', 'Medications taken by Mother'),
(5, 'Tobacco', 'Usage of tobacco'),
(6, 'Exercise', 'Frequency of exercise'),
(7, 'Care', 'Care during pregnancy');

-- --------------------------------------------------------

--
-- Table structure for table `factor_values`
--

CREATE TABLE IF NOT EXISTS `factor_values` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `factor_id` int(11) DEFAULT NULL,
  `value` varchar(20) DEFAULT NULL,
  `name` varchar(50) NOT NULL,
  `description` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=24 ;

--
-- Dumping data for table `factor_values`
--

INSERT INTO `factor_values` (`id`, `factor_id`, `value`, `name`, `description`) VALUES
(1, 1, ' American Indian or ', '', ' American Indian or Alaska Native'),
(2, 1, 'asian', 'Asian', 'Mother is Asian'),
(3, 1, 'pacific', 'Native Hawaiian or Other Pacific Islander', 'Mother is Native Hawaiian or Other Pacific Islander'),
(4, 1, 'african', 'Black or African American', 'Mother is Black or African American'),
(6, 3, 'diabetes1', 'Diabetes - Type 1', 'Diabetes - Type 1 (Insulin-dependent)'),
(5, 1, 'white', 'White/Caucasian', 'Mothe is White/Caucasian'),
(8, 3, 'diabetes2', 'Diabetes - Type 2', 'Diabetes - Type 2 (Non-insulin-dependent)'),
(9, 3, 'diabetesg', 'Diabetes - Gestational', 'Diabetes - Gestational (pregnancy-triggered)'),
(10, 3, 'hypothyroid', 'Hypothyroidism', 'Hypothyroidism'),
(11, 3, 'depression', 'Depression', 'Depression'),
(12, 4, 'Insulin', 'Insulin', 'Insulin'),
(13, 4, 'Synthroid', 'Synthroid', 'Synthroid'),
(14, 4, 'Zoloft', 'Zoloft', 'Zoloft'),
(15, 4, 'Paxil', 'Paxil', 'Paxil'),
(16, 5, 'never', 'Never', 'Never Used Tobacco'),
(17, 5, 'preconceive', 'Stopped before conceiving', 'Used Tobacco, stopped before conceiving'),
(18, 5, 'firsttrimester', 'Used in first trimester', 'Used Tobacco in first trimester'),
(19, 5, 'throughout', 'Throughout Pregnancy', 'Used Tobacco for duration of pregnancy'),
(20, 7, 'prenatal', 'Prenatal Consultation', 'Prenatal Consultation'),
(21, 7, 'genetictest', 'Genetic Testing', 'Genetic Testing'),
(22, 7, 'hivshot', 'HIV Shot', 'HIV Shot'),
(23, 7, 'flushot', 'Flu Shot', 'Influenza Shot');

-- --------------------------------------------------------

--
-- Table structure for table `kb_elemement_to_search_term`
--

CREATE TABLE IF NOT EXISTS `kb_elemement_to_search_term` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `kb_element_id` int(11) DEFAULT NULL,
  `search_term` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `kb_elemement_to_search_term`
--

INSERT INTO `kb_elemement_to_search_term` (`id`, `kb_element_id`, `search_term`) VALUES
(1, 1, 'tobacco'),
(2, 2, 'tobacco');

-- --------------------------------------------------------

--
-- Table structure for table `knowledgbase`
--

CREATE TABLE IF NOT EXISTS `knowledgbase` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `element` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `knowledgbase`
--

INSERT INTO `knowledgbase` (`id`, `element`) VALUES
(1, 'Smoking during the first trimester increases the chances of birth defects by 30 percent'),
(2, 'In 2004, 11.9% of babies born to smokers had low birthweight as compared to only 7.2% of babies born to nonsmokers. ');

-- --------------------------------------------------------

--
-- Table structure for table `patient`
--

CREATE TABLE IF NOT EXISTS `patient` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `lname` varchar(30) DEFAULT NULL,
  `fname` varchar(30) DEFAULT NULL,
  `username` varchar(30) DEFAULT NULL,
  `country` varchar(30) DEFAULT NULL COMMENT 'Store the ISO Code for Country',
  `zipcode` varchar(5) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `patient`
--

INSERT INTO `patient` (`id`, `lname`, `fname`, `username`, `country`, `zipcode`) VALUES
(1, 'Julie', 'Smith', 'jsmithmommy', 'USA', '02014'),
(2, '', 'Nina', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `patient_factors`
--

CREATE TABLE IF NOT EXISTS `patient_factors` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `patient_id` int(11) NOT NULL,
  `factor_values_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `patient_factors`
--

INSERT INTO `patient_factors` (`id`, `patient_id`, `factor_values_id`) VALUES
(1, 1, 5),
(2, 1, 8),
(3, 1, 11),
(4, 1, 12),
(5, 1, 14),
(6, 1, 16),
(7, 1, 20),
(8, 1, 5);

-- --------------------------------------------------------

--
-- Table structure for table `question`
--

CREATE TABLE IF NOT EXISTS `question` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `patient_id` int(11) NOT NULL,
  `questtion` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
