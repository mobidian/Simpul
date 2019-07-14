-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 25, 2014 at 01:26 AM
-- Server version: 5.5.27
-- PHP Version: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `student`
--

-- --------------------------------------------------------

--
-- Table structure for table `chat_table`
--

CREATE TABLE IF NOT EXISTS `chat_table` (
  `sender_username` text NOT NULL,
  `sender_phone` text NOT NULL,
  `sender_location` text NOT NULL,
  `reciever_username` text NOT NULL,
  `reciever_phone` text NOT NULL,
  `reciever_location` text NOT NULL,
  `chat_msg` text NOT NULL,
  `time` text NOT NULL,
  `prev_chat` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `chat_table`
--

INSERT INTO `chat_table` (`sender_username`, `sender_phone`, `sender_location`, `reciever_username`, `reciever_phone`, `reciever_location`, `chat_msg`, `time`, `prev_chat`) VALUES
('Manufacturer', '07036946335', '56 M', 'Daniel', '07036946336', '343 M', 'Hi daniel !!', '5 pm', 'Daniel : hi cj\n\nManufacturer: Am fine dan\n\nManufacturer: Hw is sckul ?\n\nDaniel: Skul is fine ooo, later..'),
('Daniel', '07036946336', '34 M', 'Manufacturer', '07036946335', '34 M', 'Am fine CJ.', '7 AM', 'Daniel : hi cj\r\n\r\nManufacturer: Am fine dan\r\n\r\nManufacturer: Hw is sckul ?\r\n\r\nDaniel: Skul is fine ooo, later..'),
('Uche', '07036946337', 'Umuahia', 'cj', '07036946335', 'PH', 'i sent u a message u dont wanr to reply yy??', 'yesterday', 'xvvdsvds'),
('', '', 'Asender_locate', '', '', 'Areciever_locate', '', 'Atyme', 'Aprev_chatt'),
('', '', 'Asender_locate', '', '', 'Areciever_locate', '', 'Atyme', 'Aprev_chatt'),
('dvdsvds', 'dxcvdxv', 'cvvfx', 'dfbdfvbdf', 'dvdfxv', 'cffcfx', 'dfvdvd', 'vfvdfvdv', 'dfvdfv'),
('dvdsvds', '07036946335', 'cvvfx', 'dfbdfvbdf', 'dvdfxv', 'cffcfx', 'dfvdvd', 'vfvdfvdv', 'dfvdfv'),
('dan', '07036946336', 'cvvfx', 'dfbdfvbdf', 'dvdfxv', 'cffcfx', 'dfvdvd', 'vfvdfvdv', 'dfvdfv'),
('dan', '07036946336', 'cvvfx', 'cj', '07036946335', 'cffcfx', 'kjn,j', 'vfvdfvdv', 'dfvdfv'),
('cj', '07036946335', '', 'dan', '07036946336', 'cffcfx', 'kjn,j', 'ko', 'dfvdfv'),
('cj', '07036946335', '', 'dan', '07036946336', 'cffcfx', 'kjn,j', 'ko', 'dfvdfv'),
('cj', '07036946335', 'kppo', 'dan', '07036946336', 'cffcfx', 'kjn,j', 'ko', 'dfvdfv'),
('tara', '07036946338', 'kppo', 'uche', '07036946337', '', 'message', 'ko', ''),
('dan', '07036946336', 'kppo', 'cj', '07036946335', '', 'message', 'ko', ''),
('uche', '07036946337', 'kppo', 'tara', '07036946338', 'oki', 'message', 'ko', 'jk'),
('dan', '07036946336', 'kppo', 'cj', '07036946335', 'oki', 'message', 'ko', 'jk'),
('dan', '07036946336', 'kppo', 'cj', '07036946335', 'oki', 'dan : hi cj              cuurent time', 'ko', 'jk'),
('uche', '07036946337', 'kppo', 'cj', '07036946335', 'oki', 'uche : cj u no wan teach me web design abii ?              cuurent time', 'ko', 'jk'),
('cj', '07036946335', 'kppo', 'uche', '07036946337', 'oki', 'cj : no bi like dat na              cuurent time', 'ko', 'jk'),
('uche', '07036946337', 'kppo', 'cj', '07036946335', 'oki', 'uche : ok na like how na ?              cuurent time', 'ko', 'jk'),
('dan', '07036946336', 'kppo', 'cj', '07036946335', 'oki', 'dan : hi dan whats up ?              cuurent time', '', 'jk'),
('dan', '07036946336', 'kppo', 'cj', '07036946335', 'oki', 'dan : sorry hi cj whats up ?              cuurent time', 'ko', 'jk'),
('tara', '07036946338', 'kppo', 'cj', '07036946335', 'oki', 'tara : hi cj              cuurent time', 'ko', 'jk'),
('tara', '07036946338', 'kppo', 'dan', '07036946336', 'oki', 'tara : hi dan am tara              cuurent time', 'ko', 'jk'),
('dan', '07036946336', 'kppo', 'tara', '07036946338', 'oki', 'dan : hi tara miracle wants to speak with u              cuurent time', 'ko', 'jk'),
('dan', '07036946336', 'kppo', 'cj', '07036946335', 'oki', 'ans naaaa', 'ko', 'jk'),
('uche', '07036946337', 'kppo', 'tara', '07036946338', 'oki', 'hi tara am uche', 'ko', 'jk'),
('uche', '07036946337', 'kppo', 'tara', '07036946338', 'oki', 'form which country ?', 'ko', 'jk'),
('dan', '07036946336', 'kppo', 'cj', '07036946335', 'oki', 'sup dan, was not with my phone', 'ko', 'jk'),
('dan', '07036946336', 'kppo', 'cj', '07036946335', 'oki', 'hi', 'ko', 'jk'),
('dan', '07036946336', 'kppo', 'cj', '07036946335', 'oki', 'talk na', 'ko', 'jk'),
('cj', '07036946335', 'kppo', 'dan', '07036946336', 'oki', 'sup daniel how romania ?', 'ko', 'jk'),
('cj', '07036946335', 'kppo', 'dan', '07036946336', 'oki', 'was not wif ma phone o dan', 'ko', 'jk'),
('dan', '07036946336', 'kppo', 'cj', '07036946335', 'oki', 'okkk oo', 'ko', 'jk'),
('dan', '07036946336', 'kppo', 'cj', '07036946335', 'oki', 'bye !!', 'ko', 'jk'),
('dan', '07036946336', 'kppo', 'cj', '07036946335', 'oki', 'hun ??', 'ko', 'jk'),
('dan', '07036946336', 'kppo', 'cj', '07036946335', 'oki', 'bbhbh', 'ko', 'jk'),
('dan', '07036946336', 'kppo', 'cj', '07036946335', 'oki', 'hi', 'ko', 'jk'),
('cj', '07036946335', 'kppo', 'cj', '07036946335', 'oki', 'hi cj', 'ko', 'jk'),
('dan', '07036946336', 'kppo', 'cj', '07036946335', 'oki', 'hi', 'ko', 'jk'),
('cj', '07036946335', 'kppo', 'undefined', '07036946336', 'oki', 'hih', 'ko', 'jk'),
('1', '07036946339', 'kppo', 'cj', '07036946335', 'oki', 'fgfi', 'ko', 'jk'),
('cj', '07036946335', 'kppo', '1', '07036946339', 'oki', 'f up', 'ko', 'jk'),
('cj', '07036946335', 'kppo', '1', '07036946339', 'oki', 'hi am cj', 'ko', 'jk'),
('cj', '07036946335', 'kppo', 'dan', '07036946336', 'oki', 'sup dan my brother', 'ko', 'jk'),
('cj', '07036946335', 'kppo', 'uche', '07036946337', 'oki', 'sup uche', 'ko', 'jk'),
('cj', '07036946335', 'kppo', '1', '07036946339', 'oki', 'cj : hi number one its cj              cuurent time', 'ko', 'jk'),
('cj', '07036946335', 'kppo', '1', '07036946339', 'oki', 'cj : whsts d meaning of ur name, "1" ?              cuurent time', 'ko', 'jk'),
('cj', '07036946335', 'kppo', '1', '07036946339', 'oki', 'me : talk na ??              ...         curent time</font>', 'ko', 'jk'),
('cj', '07036946335', 'kppo', '1', '07036946339', 'oki', 'me : new out fit am cj              ...         curent time</font>', 'ko', 'jk'),
('cj', '07036946335', 'kppo', 'dan', '07036946336', 'oki', 'me : this message is from cj to dan              ...         curent time</font>', 'ko', 'jk'),
('dan', '07036946336', 'kppo', 'cj', '07036946335', 'oki', 'me : this mess is from daniel to chijioke              ...         curent time</font>', 'ko', 'jk'),
('cj', '07036946335', 'kppo', 'dan', '07036946336', 'oki', 'me : hi dan              ...         curent time</font>', 'ko', 'jk'),
('dan', '07036946336', 'kppo', 'cj', '07036946335', 'oki', 'me : hi cj whats up               ...         curent time</font>', 'ko', 'jk'),
('cj', '07036946335', 'kppo', 'dan', '07036946336', 'oki', 'me : am fine bro... and u ?              ...         curent time</font>', 'ko', 'jk'),
('dan', '07036946336', 'kppo', 'cj', '07036946335', 'oki', 'me : cj how far?              ...         curent time</font>', 'ko', 'jk'),
('dan', '07036946336', 'kppo', 'cj', '07036946335', 'oki', 'me : how Nigeria ?              ...         curent time</font>', 'ko', 'jk'),
('cj', '07036946335', 'kppo', 'dan', '07036946336', 'oki', 'me : fine ooo              ...         curent time</font>', 'ko', 'jk'),
('tara', '07036946338', 'kppo', 'cj', '07036946335', 'oki', 'me : whats up cj ???              ...         curent time</font>', 'ko', 'jk'),
('cj', '07036946335', 'kppo', 'tara', '07036946338', 'oki', 'me : am fine tara u ?              ...         curent time</font>', 'ko', 'jk'),
('tara', '07036946338', 'kppo', 'cj', '07036946335', 'oki', 'me : am gud              ...         curent time</font>', 'ko', 'jk'),
('cj', '07036946335', 'kppo', 'tara', '07036946338', 'oki', 'me : how is london ?              ...         curent time</font>', 'ko', 'jk'),
('tara', '07036946338', 'kppo', 'cj', '07036946335', 'oki', 'me : great              ...         curent time</font>', 'ko', 'jk'),
('cj', '07036946335', 'kppo', 'tara', '07036946338', 'oki', 'me : hi tara              ...         curent time</font>', 'ko', 'jk'),
('tara', '07036946338', 'kppo', 'cj', '07036946335', 'oki', 'me : hi cj how is miracle?              ...         curent time</font>', 'ko', 'jk'),
('cj', '07036946335', 'kppo', 'tara', '07036946338', 'oki', 'me : miracle is fine oo              ...         curent time</font>', 'ko', 'jk'),
('tara', '07036946338', 'kppo', 'dan', '07036946336', 'oki', 'me : oh dan u know miracle ?              ...         curent time</font>', 'ko', 'jk'),
('dan', '07036946336', 'kppo', 'tara', '07036946338', 'oki', 'me : yea              ...         curent time</font>', 'ko', 'jk'),
('tara', '07036946338', 'kppo', 'cj', '07036946335', 'oki', 'me : ok              ...         curent time</font>', 'ko', 'jk'),
('cj', '07036946335', 'kppo', 'tara', '07036946338', 'oki', 'me : k gud nite              ...         curent time</font>', 'ko', 'jk'),
('1', '07036946339', 'kppo', 'cj', '07036946335', 'oki', 'me : hi              ...         curent time</font>', 'ko', 'jk'),
('tara', '07036946338', 'kppo', 'cj', '07036946335', 'oki', 'me : hi              ...         curent time</font>', 'ko', 'jk'),
('cj', '07036946335', 'kppo', 'tara', '07036946338', 'oki', 'sup              ...         07/60/2014  12:34 PM', 'ko', 'jk'),
('cj', '07036946335', 'kppo', 'tara', '07036946338', 'oki', 'gud nite\n              ...         07/60/2014  12:34 PM', 'ko', 'jk'),
('uche', '07036946337', 'kppo', 'cj', '07036946335', 'oki', 'cj how far              ...         07/60/2014  12:34 PM', 'ko', 'jk'),
('cj', '07036946335', 'kppo', 'uche', '07036946337', 'oki', 'am fine ooo              ...         07/60/2014  12:34 PM', 'ko', 'jk'),
('uche', '07036946337', 'kppo', 'cj', '07036946335', 'oki', 'ok              ...         07/60/2014  12:34 PM', 'ko', 'jk'),
('dan', '07036946336', 'kppo', 'cj', '07036946335', 'oki', 'sup cj              ...         07/60/2014  12:34 PM', 'ko', 'jk'),
('dan', '07036946336', 'kppo', 'cj', '07036946335', 'oki', 'u there ?              ...         07/60/2014  12:34 PM', 'ko', 'jk'),
('cj', '07036946335', 'kppo', 'dan', '07036946336', 'oki', 'yea bro              ...         07/60/2014  12:34 PM', 'ko', 'jk'),
('cj', '07036946335', 'kppo', 'dan', '07036946336', 'oki', 'sup bro              ...         07/60/2014  12:34 PM', 'ko', 'jk'),
('dan', '07036946336', 'kppo', 'cj', '07036946335', 'oki', 'fine              ...         07/60/2014  12:34 PM', 'ko', 'jk'),
('tara', '07036946338', 'kppo', 'cj', '07036946335', 'oki', 'hi               ...         07/60/2014  12:34 PM', 'ko', 'jk'),
('cj', '07036946335', 'kppo', 'tara', '07036946338', 'oki', 'am fine u?              ...         07/60/2014  12:34 PM', 'ko', 'jk'),
('tara', '07036946338', 'kppo', 'cj', '07036946335', 'oki', 'am gud\nhw is nigeria today and what time is it in Nigeria now ?              ...         07/60/2014  12:34 PM', 'ko', 'jk'),
('cj', '07036946335', 'kppo', 'tara', '07036946338', 'oki', 'naija is fine ooo... how is uk na ?              ...         07/60/2014  12:34 PM', 'ko', 'jk'),
('tara', '07036946338', 'kppo', 'cj', '07036946335', 'oki', 'its kull there              ...         07/60/2014  12:34 PM', 'ko', 'jk'),
('tara', '07036946338', 'kppo', 'cj', '07036946335', 'oki', '*dear              ...         07/60/2014  12:34 PM', 'ko', 'jk'),
('cj', '07036946335', 'kppo', 'dan', '07036946336', 'oki', 'hi dan              ...         07/60/2014  12:34 PM', 'ko', 'jk'),
('dan', '07036946336', 'kppo', 'cj', '07036946335', 'oki', 'kkk              ...         07/60/2014  12:34 PM', 'ko', 'jk'),
('dan', '07036946336', 'kppo', 'tara', '07036946338', 'oki', 'bvv               ...         07/60/2014  12:34 PM', 'ko', 'jk');

-- --------------------------------------------------------

--
-- Table structure for table `timetable`
--

CREATE TABLE IF NOT EXISTS `timetable` (
  `user_id` text NOT NULL,
  `table_type` text NOT NULL,
  `day` text NOT NULL,
  `course_code` text NOT NULL,
  `from` text NOT NULL,
  `fromT` text NOT NULL,
  `to` text NOT NULL,
  `checkT` text NOT NULL,
  `check` text NOT NULL,
  `venue` text NOT NULL,
  `exam_date` text NOT NULL,
  `am_pm` text NOT NULL,
  `exam_time` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `timetable`
--

INSERT INTO `timetable` (`user_id`, `table_type`, `day`, `course_code`, `from`, `fromT`, `to`, `checkT`, `check`, `venue`, `exam_date`, `am_pm`, `exam_time`) VALUES
('07036946335', 'Lecture', 'wednesday', 'Nw one', '4', '5', '5', '', '', 'new', 'null', 'AM', ''),
('07036946335', 'Reading', 'monday', 'mth 444', '4', '3', '5', '', '', 'sbmt 2', '', 'AM', ''),
('07036946335', 'Lecture', 'thursday', 'phy 111', '', '3', '4', '', '', 'imo', '4th june', '', '3 am'),
('07036946335', 'Exam', 'thursday', 'CMP 211', '', '4', '5 ', '', '', 'ABC 3', 'July 3rd, 2014', '', '4 AM- 2PM'),
('07036946335', 'Lecture', 'monday', 'Only me 33', '3', '2', '4', '', '', 'henesy', '', 'AM', ''),
('07036946336', 'Lecture', 'monday', 'mfg 33', '3', '5', '4', '', '', 'henesy', '', 'AM', ''),
('07036946338', 'Exam', 'thursday', 'undefined', '', '4', '5', '', '', 'my house', 'dont ask me !', '', 'tommporw'),
('07036946335', 'Reading', 'monday', 'mth 555', '4', '8', '5', '', '', 'ab', '', 'AM', ''),
('07036946336', 'Lecture', 'monday', 'rrr444', '3', '3', '5', '', '', 'aba', '', 'PM', ''),
('07036946339', 'Lecture', 'monday', 'sss444', '5', '2', '6', '', '', 'aba', '', 'AM', ''),
('07036946335', 'Lecture', 'wednesday', 'wed 3333', '1', '1', '5', '', '', 'none', '', 'AM', ''),
('07036946339', 'Lecture', 'wednesday', 'mass', '1', '3', '2', '', '', 'uuu', '', 'AM', ''),
('07036946339', 'Reading', 'wednesday', 'read4', '4', '5', '5', '', '', '', '', 'PM', ''),
('07036946337', 'Reading', 'friday', 'ddd', 'd', '1', 'g', '', '', '', '', '', ''),
('07036946335', 'Reading', 'wednesday', 'vvvvv', '2', '6', 'r', '', '', '2', '', '', ''),
('07036946339', 'Reading', 'friday', 'ggg', '4', '3', '5', '', '', '', '', 'AM', ''),
('07036946336', 'Exam', 'friday', 'exam', '', '1', '2', '', '', 'dcsd', 'dfvdfvd', '', 'dfvdf'),
('07036946337', 'Exam', 'thursday', 'exam', '', '5', '7', '', '', 'sc', 'dscv', '', 'cdsc'),
('07036946336', 'Reading', 'friday', 'readmon', 'ds', '7', 's', '', '', '', '', '', ''),
('07036946336', 'Lecture', 'tuesday', 'exam today', '', '2', '3', '', '', 'dfd', '4', '', '3'),
('07036946338', 'Exam', 'monday', 'exam finis', '', '6', '7', '', '', 'scs', 'dv', '', 'dvd'),
('07036946339', 'Exam', 'thursday', 'com www', '', '1', '2', '', '', 'ddd', 'dfv', '', 'dfv'),
('07036946337', 'Lecture', 'wednesday', 'CMP 222', 'gf', '5', 'ew', '', '', 'sd', '', 'PM', ''),
('07036946338', 'Lecture', 'wednesday', 'GSS 1222', 'ww', 'ww', 'ws', '', '', 'df', '', 'AM', ''),
('07036946337', 'Exam', 'friday', 'new 33', '', '2', '3', '', '', 'aba', '5th march 2014', '', '5 pm - 7 p'),
('07036946337', 'Exam', 'monday', 'new exam 3', '', '3', '4', '', '', 'aria ria m', '45th june 2015', '', '7 am to 10'),
('07036946335', 'Lecture', 'tuesday', 'ddd', '10', '2', '5', '', '', 'adxa', '', 'AM', ''),
('07036946336', 'Lecture', 'thursday', 'gbg', '4', '11', '7', '', '', 'hv', '', 'AM', ''),
('07036946338', 'Lecture', 'tuesday', 'sdcsd', '3', '2', '4', '', '', 'scsd', '', 'AM', ''),
('07036946336', 'Lecture', 'tuesday', 'ghgf', '', '4', '5', '', '', 'sdds', '4545', '', 'dfd'),
('07036946336', 'Exam', 'wednesday', 'dfvd', '', '5', '6', '', '', 'dfd', 'er54554', '', 'dfvf'),
('07036946336', 'Exam', 'thursday', 'jb,jkn', '', '5', '7', '', '', 'jn.knkj', 'kn.nkj', '', 'kjmlnjkj'),
('07036946335', 'Exam', 'friday', 'fgg333', '', '7', '8', '', '', 'achebe', '34st may 2014', '', '5 pm'),
('07036946336', 'Exam', 'tuesday', 'last exam', '', '8', '9', '', '', 'english ha', '3rd may, 2014', '', '8 pm'),
('07036946338', 'Reading', 'thursday', 'MTH 333', 'sc', '3', 'tt', '', '', '', '', '', ''),
('07036946336', 'Lecture', 'wednesday', 'free day 4', '4', '3', '6', '', '', 'abioan hall', '', 'PM', '');

-- --------------------------------------------------------

--
-- Table structure for table `user_profile`
--

CREATE TABLE IF NOT EXISTS `user_profile` (
  `name` text NOT NULL,
  `username` text NOT NULL,
  `password` text NOT NULL,
  `status_msg` text NOT NULL,
  `location` text NOT NULL,
  `sex` text NOT NULL,
  `school` text NOT NULL,
  `department` text NOT NULL,
  `phone` text NOT NULL,
  `level` text NOT NULL,
  `img` binary(50) NOT NULL,
  `img_url` text NOT NULL,
  `online_status` text NOT NULL,
  `distance` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_profile`
--

INSERT INTO `user_profile` (`name`, `username`, `password`, `status_msg`, `location`, `sex`, `school`, `department`, `phone`, `level`, `img`, `img_url`, `online_status`, `distance`) VALUES
('chijioke onukem', 'cj', 'cj', 'Mind_Of_A_Boss', 'poth harcourt', 'Male', 'michael okpara university', 'computer science', '07036946335', '200 Level', '\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0', 'picture/07036946335.jpg', 'online', '4100 M'),
('Ogbuja Daniel', 'dan', 'dan', 'coasting on a low key...', 'costanta romania', 'Male', 'Constanta', 'marine engineer', '07036946336', '200 Level', '\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0', 'picture/07036946336.png', 'online', '500 M'),
('Uche Obi', 'uche', 'uche', 'i am uche obi', 'ABA', 'Male', 'Aspoly', 'Computer Engineer', '07036946337', 'ND 1', '\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0', 'picture/07036946337.jpg', 'offline', '34 m'),
('Tara Ubani', 'tara', 'tara', 'hi my name is tara', 'UK', 'Female', 'UK University', 'Business Administration', '07036946338', '400 LEVEL', '\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0', 'picture/07036946338.jpg', 'offline', '232 M'),
('Admin', '1', '1', '1', '111', 'Male', '1', '1', '07036946339', '1', '\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0', 'picture/07036946339.jpg', 'offline', '1 m');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
