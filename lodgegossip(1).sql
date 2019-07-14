-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 23, 2014 at 03:36 PM
-- Server version: 5.6.11
-- PHP Version: 5.5.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `lodgegossip`
--
CREATE DATABASE IF NOT EXISTS `lodgegossip` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `lodgegossip`;

-- --------------------------------------------------------

--
-- Table structure for table `exam_timetable`
--

CREATE TABLE IF NOT EXISTS `exam_timetable` (
  `ID` int(50) NOT NULL AUTO_INCREMENT,
  `Date` varchar(50) NOT NULL,
  `Course` varchar(50) NOT NULL,
  `From` varchar(50) NOT NULL,
  `To` varchar(50) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `exam_timetable`
--

INSERT INTO `exam_timetable` (`ID`, `Date`, `Course`, `From`, `To`) VALUES
(1, 'Wed, 2nd June, 2014.', 'MTH 211', '8', '10'),
(2, 'Wed, 2nd June, 2014.', 'CMP 214', '1', '3');

-- --------------------------------------------------------

--
-- Table structure for table `gpa`
--

CREATE TABLE IF NOT EXISTS `gpa` (
  `ID` int(50) NOT NULL AUTO_INCREMENT,
  `No_Courses` varchar(50) NOT NULL,
  `Toal_Credit_Load` varchar(50) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `gpa`
--

INSERT INTO `gpa` (`ID`, `No_Courses`, `Toal_Credit_Load`) VALUES
(1, '2', '6');

-- --------------------------------------------------------

--
-- Table structure for table `lecture_lecture_timetable`
--

CREATE TABLE IF NOT EXISTS `lecture_lecture_timetable` (
  `ID` int(50) NOT NULL AUTO_INCREMENT,
  `user_phone` text NOT NULL,
  `Day` varchar(50) NOT NULL,
  `Course` varchar(50) NOT NULL,
  `venue` text NOT NULL,
  `FromT` varchar(50) NOT NULL,
  `ToT` varchar(50) NOT NULL,
  `am_pm` varchar(50) NOT NULL,
  `Type` varchar(50) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=30 ;

--
-- Dumping data for table `lecture_lecture_timetable`
--

INSERT INTO `lecture_lecture_timetable` (`ID`, `user_phone`, `Day`, `Course`, `venue`, `FromT`, `ToT`, `am_pm`, `Type`) VALUES
(17, '555', 'wednesday', 'cmp211', 'cnrem', '2', '10', 'AM', 'Lecture'),
(18, '555', 'wednesday', 'reytry', 'tyryt', '4', '6', 'AM', 'Lecture'),
(19, '555', 'friday', 'rttyryer', 'rtytyre', '5', '7', 'AM', 'Lecture');

-- --------------------------------------------------------

--
-- Table structure for table `lecture_reading_timetable`
--

CREATE TABLE IF NOT EXISTS `lecture_reading_timetable` (
  `ID` int(50) NOT NULL AUTO_INCREMENT,
  `Day` varchar(50) NOT NULL,
  `Course` varchar(50) NOT NULL,
  `From` varchar(50) NOT NULL,
  `To` varchar(50) NOT NULL,
  `AM/PM` varchar(50) NOT NULL,
  `Type` varchar(50) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `lecture_reading_timetable`
--

INSERT INTO `lecture_reading_timetable` (`ID`, `Day`, `Course`, `From`, `To`, `AM/PM`, `Type`) VALUES
(1, 'Monday', 'MTH 211', '9', '10', 'AM', 'Exam'),
(2, 'Monday', 'STA 211', '1', '3', 'PM', 'Lecture');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_chat`
--

CREATE TABLE IF NOT EXISTS `tbl_chat` (
  `chat_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` text NOT NULL,
  `recievername` varchar(1000) NOT NULL,
  `message` text NOT NULL,
  `dateOfchat` text NOT NULL,
  `sender_Number` varchar(1000) NOT NULL,
  `reciever_Number` varchar(1000) NOT NULL,
  `status` varchar(100) NOT NULL,
  PRIMARY KEY (`chat_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=313 ;

--
-- Dumping data for table `tbl_chat`
--

INSERT INTO `tbl_chat` (`chat_id`, `name`, `recievername`, `message`, `dateOfchat`, `sender_Number`, `reciever_Number`, `status`) VALUES
(295, 'ngozi', 'kenneth colej', 'desddd', '09/07/2014 16:55:25', '222', '555', 'old'),
(296, 'ngozi', 'kenneth colej', 'sdsddsds', '09/07/2014 16:55:30', '222', '555', 'old'),
(297, 'ngozi', 'kenneth colej', 'sdddsddsddsssssssssssssssssiojifo[iy''ewjrqycyurieytutyuteruit', '09/07/2014 16:55:41', '222', '555', 'old'),
(298, 'ngozi', 'kenneth colej', 'ureyueyrufyuytreufugsjhgfuyegfhsgfytterytfhsghgfhgeryfteyftystgfgtyretfyergfhsgfygtryteytuerfgthgh', '09/07/2014 16:55:56', '222', '555', 'old'),
(299, 'kenneth colej', 'chijioke onukwem', 'hggi', '16/07/2014 06:07:03', '555', '333', 'new'),
(300, 'kenneth colej', 'chijioke onukwem', 'hbjghjk', '16/07/2014 06:07:09', '555', '333', 'new'),
(301, 'kenneth colej', 'chijioke onukwem', 'hhhhhhh', '16/07/2014 06:07:17', '555', '333', 'new'),
(302, 'ngozi', 'kenneth colej', 'd', '19/07/2014 18:32:15', '222', '555', 'old'),
(303, 'kenneth colej', 'ngozi', 'tehgr', '21/07/2014 06:23:36', '555', '222', 'old'),
(304, 'kenneth colej', 'ngozi', 'thtrycrtvythr cewfrrtgercergretgre', '21/07/2014 06:23:42', '555', '222', 'old'),
(305, 'kenneth colej', 'ngozi', 'trrcrtertwe', '21/07/2014 06:23:57', '555', '222', 'old'),
(306, 'kenneth colej', 'ngozi', 'tgegwcewrthertytrwwe', '21/07/2014 06:24:00', '555', '222', 'old'),
(307, 'kenneth colej', 'ngozi', 'ecee4tew4rtqwa', '21/07/2014 06:24:03', '555', '222', 'old'),
(308, 'kenneth colej', 'ngozi', '      ', '21/07/2014 07:28:48', '555', '222', 'old'),
(309, 'kenneth colej', 'dewdwee', ',m,', '22/07/2014 07:23:45', '555', '4444444', 'new'),
(310, 'kenneth colej', 'dewdwee', ' m', '22/07/2014 07:24:06', '555', '4444444', 'new'),
(311, 'kenneth colej', 'dewdwee', '.', '22/07/2014 07:24:13', '555', '4444444', 'new'),
(312, 'kenneth colej', 'dewdwee', 'dffdffddfdffd', '22/07/2014 07:24:18', '555', '4444444', 'new');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_follow`
--

CREATE TABLE IF NOT EXISTS `tbl_follow` (
  `id_follow` int(11) NOT NULL AUTO_INCREMENT,
  `beenFollowed` text NOT NULL,
  `follower` text NOT NULL,
  `count` int(255) NOT NULL,
  PRIMARY KEY (`id_follow`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `tbl_follow`
--

INSERT INTO `tbl_follow` (`id_follow`, `beenFollowed`, `follower`, `count`) VALUES
(11, '555', '222', 0),
(12, '222', '555', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_gossip`
--

CREATE TABLE IF NOT EXISTS `tbl_gossip` (
  `gossip_id` int(11) NOT NULL AUTO_INCREMENT,
  `gossip` text NOT NULL,
  `gossip_owner` text NOT NULL,
  `gossip_lodge` text NOT NULL,
  `gossip_date` text NOT NULL,
  `status` text NOT NULL,
  PRIMARY KEY (`gossip_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=43 ;

--
-- Dumping data for table `tbl_gossip`
--

INSERT INTO `tbl_gossip` (`gossip_id`, `gossip`, `gossip_owner`, `gossip_lodge`, `gossip_date`, `status`) VALUES
(31, 'sedsd', 'kenneth colej', 'Smile More Lodge', '19/05/2014 12:27:20', 'old'),
(32, 'sedsdsdswcw', 'kenneth colej', 'Smile More Lodge', '19/05/2014 12:35:41', 'old'),
(33, 'bjkasjksa', 'kenneth colej', 'Smile More Lodge', '19/05/2014 12:37:59', 'old'),
(34, 'bjkasjksadjiejfhoi', 'kenneth colej', 'Smile More Lodge', '19/05/2014 12:42:13', 'old'),
(35, 'bjkasjksadjiejfhoi', 'kenneth colej', 'Smile More Lodge', '19/05/2014 12:42:35', 'old'),
(36, 'bjkasjksadjiejfhoi', 'kenneth colej', 'Smile More Lodge', '19/05/2014 12:42:37', 'old'),
(37, 'kljsdlis', 'Goodluck', 'Glory Lodge', '30/06/2014 06:20:35', 'old'),
(38, 'efwfdqwdwd', 'ngozi', 'Glory Lodge', '03/07/2014 14:15:43', 'old'),
(39, 'efwfdqwdwdwedqwdwq', 'ngozi', 'Glory Lodge', '03/07/2014 14:15:46', 'old'),
(40, 'efwfdqwdwdwedqwdwqwdwqdqw', 'ngozi', 'Glory Lodge', '03/07/2014 14:15:49', 'old'),
(41, 'efwfdqwdwdwedqwdwqwdwqdqwweddeqwqw', 'ngozi', 'Glory Lodge', '03/07/2014 14:15:52', 'old'),
(42, 'wdadassda', 'kenneth colej', 'Glory Lodge', '03/07/2014 14:16:32', 'old');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_lodge`
--

CREATE TABLE IF NOT EXISTS `tbl_lodge` (
  `lodge_id` int(11) NOT NULL AUTO_INCREMENT,
  `lodge_name` text NOT NULL,
  `school_id` text NOT NULL,
  PRIMARY KEY (`lodge_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=74 ;

--
-- Dumping data for table `tbl_lodge`
--

INSERT INTO `tbl_lodge` (`lodge_id`, `lodge_name`, `school_id`) VALUES
(1, 'Providence Lodge', '1'),
(2, 'Jonh 3:16 Lodge', '1'),
(3, 'Edwards Lodge', '1'),
(4, 'Smile More Lodge', '1'),
(5, 'Getto Lodge', '1'),
(6, 'Jenifers Lodge', '1'),
(7, 'Comfort Suit', '1'),
(8, 'Miami Lodge', '1'),
(9, 'Hypers Lodge', '1'),
(10, 'Sun Shine Lodge', '1'),
(11, 'Heaven Rule Lodge', '1'),
(12, 'Amazing Grace Lodge', '1'),
(13, 'Prison Break Lodge', '1'),
(14, 'God''s Own Lodge', '1'),
(15, 'Meridian Lodge', '1'),
(16, 'Pee-Tee', '1'),
(17, 'Alhpas Dorms Lodge', '1'),
(18, 'Stella Maris Cottage', '1'),
(19, 'Glory Lodge', '1'),
(20, 'Kest Lodge', '1'),
(21, 'Etisalat Lodge', '1'),
(22, 'Comfort Suite', '1'),
(23, 'Pinging Lodge', '1'),
(24, 'Baze Lodge', '1'),
(25, 'Hamilton Lodge', '1'),
(26, 'Presidentail Lodge', '1'),
(27, 'Eddinas Lodge', '1'),
(28, 'The Blessed Lodge', '1'),
(29, 'kate Apartment', '1'),
(30, 'Ajatakiri Lodge', '1'),
(31, 'Slow Island', '1'),
(32, 'Daniel Lodge', '1'),
(33, 'Peniel Lodge', '1'),
(34, 'Winner''s Lodge', '1'),
(35, 'Destiny Lodge', '1'),
(36, 'Bishop Cott', '1'),
(37, 'Dominion Lodge', '1'),
(38, 'Oxford Caribean Hostel', '1'),
(39, 'Inspiration Hall', '1'),
(40, 'New London Lodge', '1'),
(41, 'Kampala Hostel', '1'),
(42, 'Dubai Lodge', '1'),
(43, 'China Lodge', '1'),
(44, 'Robiho Lodge', '1'),
(45, 'Shalom Lodge', '1'),
(46, 'Salen Villa', '1'),
(47, 'Xtain Lodge', '1'),
(48, 'Seed of David Lodge', '1'),
(49, 'favour CN Lodge', '1'),
(50, 'Exellence Lodge', '1'),
(51, 'IBB Hostel', '1'),
(52, 'Female Hostel', '1'),
(53, 'New Hostel(Block A,B,C,D)', '1'),
(54, 'New Hostel Block(E,F,G,H)', '1'),
(55, 'London Barracks Lodge', '1'),
(56, 'Royal Residence Lodge', '1'),
(57, 'Brownson U Lodge', '1'),
(58, 'Lekki Phase 2', '1'),
(59, 'Sage Lodge', '1'),
(60, 'Romance Lodge', '1'),
(61, 'Okorie''s Lodge', '1'),
(62, 'Khalifa Lodge', '1'),
(63, 'Hostel A', '1'),
(64, 'Hostel C', '1'),
(65, 'Hostel D', '1'),
(66, 'Hostel B', '1'),
(67, 'Hostel G', '1'),
(68, 'Hostel B', '1'),
(69, 'Hostel E', '1'),
(70, 'Biafra Lodge', '1'),
(71, 'Nigeria Lodge', '1'),
(72, 'General Lodge', '1'),
(73, 'OTHER LODGES', '1');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_market`
--

CREATE TABLE IF NOT EXISTS `tbl_market` (
  `id_m` int(11) NOT NULL AUTO_INCREMENT,
  `user_number` text NOT NULL,
  `userName` text NOT NULL,
  `p_name` text NOT NULL,
  `p_price` text NOT NULL,
  `p_desc` text NOT NULL,
  `p_Picture` text NOT NULL,
  `pin` text NOT NULL,
  `date` text NOT NULL,
  `userid` text NOT NULL,
  PRIMARY KEY (`id_m`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=72 ;

--
-- Dumping data for table `tbl_market`
--

INSERT INTO `tbl_market` (`id_m`, `user_number`, `userName`, `p_name`, `p_price`, `p_desc`, `p_Picture`, `pin`, `date`, `userid`) VALUES
(64, '555', 'kenneth colej', 'jk', 'gi', 'hjbui', '29046.JPG', '', '', ''),
(65, '555', 'kenneth colej', 'hbh', 'nhj', 'bnhj', '29046.JPG', '', '', ''),
(66, '555', 'kenneth colej', 'hj', 'ui', 'hgu', 'patient.png', '', '', ''),
(67, '555', 'kenneth colej', 'ghy', 'hui', 'hyu', '3da4726be321300a7f3e42bd52dba97c-318865499.jpg', '', '', ''),
(68, '555', 'kenneth colej', 'ih', 'jki', 'io', 'thumb_29026-252510492.jpg', '', '', ''),
(69, '222', 'ngozi', 'hjh', 'jk', 'hj', 'thumb_29026-529118782-1076483039.jpg', '', '19-07-2014', ''),
(70, '222', 'ngozi', 'jnkl', 'iojoi', 'kioi', 'patient-1104066411.png', '', '21-07-2014', ''),
(71, '555', 'kenneth colej', 'efef', 'efe', 'efefe', 'bg.png', '', '22-07-2014', ' 1');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_schools`
--

CREATE TABLE IF NOT EXISTS `tbl_schools` (
  `school_id` int(11) NOT NULL AUTO_INCREMENT,
  `school_name` text NOT NULL,
  `school_state` text NOT NULL,
  PRIMARY KEY (`school_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `tbl_schools`
--

INSERT INTO `tbl_schools` (`school_id`, `school_name`, `school_state`) VALUES
(1, 'MOUAU', 'ABIA STATE'),
(2, 'ABSU', 'ABIA STATE'),
(3, 'ASPOLY', 'ABIA STATE'),
(4, 'RHEMA UNIVERSITY', 'ABIA STATE CAMPUS');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE IF NOT EXISTS `tbl_user` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_number` text NOT NULL,
  `user_full_name` text NOT NULL,
  `user_school` text NOT NULL,
  `user_lodge` text NOT NULL,
  `user_os` text NOT NULL,
  `user_gender` text NOT NULL,
  `user_email` text NOT NULL,
  `user_password` text NOT NULL,
  `status` text NOT NULL,
  `College` text NOT NULL,
  `dept` text NOT NULL,
  `picture` text NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`user_id`, `user_number`, `user_full_name`, `user_school`, `user_lodge`, `user_os`, `user_gender`, `user_email`, `user_password`, `status`, `College`, `dept`, `picture`) VALUES
(1, '555', 'kenneth colej', 'MOUAU', 'Glory Lodge', 'ANDROID', 'MALE', 'akenneth13@gmail.com', '555', 'null', 'COPAS', 'COMPUTER SCIENCE', '3da4726be321300a7f3e42bd52dba97c-318865499.jpg'),
(2, '333', 'chijioke onukwem', 'MOUAU', 'Glory Lodge', 'Black Berry', 'Male', 'cj@yahoo.com', '333', 'Reading mode Activated', 'COPAS', 'COMPUTER SCIENCE', '29026-252510492.jpg'),
(3, '222', 'ngozi', 'aspoly', 'Glory Lodge', 'fvdgddff', 'female', 'dkdlkmldf;', '222', 'hello', 'COPAS', 'COMPUTER SCIENCE', '3da4726be321300a7f3e42bd52dba97c-318865499.jpg'),
(4, '111', 'Goodluck', 'MOUAU', 'Glory Lodge', 'adriod', 'Female', 'ksnlkaslkasjkhj', '111', '', 'Colpas', 'computer', ''),
(5, '444', 'john', 'asploly', 'Glory Lodge', 'windows', 'Famale', 'jbdjfkbjbdssd', '666', 'whats up', 'nbskihsdl', 'acc', '3da4726be321300a7f3e42bd52dba97c-318865499.jpg'),
(6, '444', 'kalu', 'asploly', 'Glory Lodge', 'windows', 'Famale', 'jbdjfkbjbdssd', '666', 'whats up', 'nbskihsdl', 'acc', '3da4726be321300a7f3e42bd52dba97c-318865499.jpg'),
(7, 'ttt', 'tt', 'MOUAU', 'Alhpas Dorms Lodge', '', '', '', 't', '', '', '', ''),
(8, 'rr', 'rrr', 'MOUAU', 'Biafra Lodge', '', '', '', 'r', '', '', '', ''),
(9, 'undefined', 'kk', 'MOUAU', 'Amazing Grace Lodge', '', '', '', 'm', '', '', '', ''),
(10, '999', 'ererfrerer', 'MOUAU', 'Comfort Suite', '', '', '', 'h', '', '', '', ''),
(11, '4444444', 'dewdwee', 'MOUAU', 'Comfort Suit', '', '', '', 'e', '', '', '', ''),
(12, '8757858787', 'cwwfwedwdew', 'MOUAU', 'China Lodge', '', '', '', 'f', '', '', '', ''),
(13, '32424242', 'rfewewrf', 'MOUAU', 'Dominion Lodge', '', 'Male', '', 'r', '', 'CREM', 'fsefsfesw', '');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
