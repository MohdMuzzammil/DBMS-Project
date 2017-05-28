-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 28, 2017 at 01:19 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `school_management`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `user` varchar(50) NOT NULL,
  `password` char(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`user`, `password`) VALUES
('freedom', '0c5295b0ad380fbdfe62a29174b7f7495d10c0ee2dce50688fa13b78206e2217');

-- --------------------------------------------------------

--
-- Table structure for table `attendance`
--

CREATE TABLE `attendance` (
  `student_id` int(11) NOT NULL,
  `English` int(11) NOT NULL,
  `Hindi` int(11) NOT NULL,
  `Kannada` int(11) NOT NULL,
  `GS` int(11) NOT NULL,
  `SS` int(11) NOT NULL,
  `Math` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `attendance`
--

INSERT INTO `attendance` (`student_id`, `English`, `Hindi`, `Kannada`, `GS`, `SS`, `Math`) VALUES
(7, 12, 0, 45, 0, 0, 0),
(9, 0, 0, 0, 0, 0, 0),
(10, 12, 0, 0, 0, 0, 0),
(11, 0, 0, 0, 0, 0, 0),
(12, 0, 0, 0, 0, 0, 0),
(13, 0, 0, 0, 0, 0, 0),
(14, 0, 0, 0, 0, 0, 0),
(15, 0, 0, 0, 0, 0, 0),
(16, 0, 0, 0, 0, 0, 0),
(17, 0, 0, 0, 0, 0, 0),
(18, 0, 0, 0, 0, 0, 0),
(19, 0, 0, 0, 0, 0, 0),
(20, 0, 0, 0, 0, 0, 0),
(21, 0, 0, 0, 0, 0, 0),
(22, 0, 0, 0, 0, 0, 0),
(23, 0, 0, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `faculty`
--

CREATE TABLE `faculty` (
  `faculty_id` int(11) NOT NULL,
  `faculty_name` varchar(50) NOT NULL,
  `faculty_dob` date NOT NULL,
  `faculty_nation` varchar(20) NOT NULL,
  `faculty_qual` varchar(20) NOT NULL,
  `faculty_gender` char(1) NOT NULL,
  `faculty_mob_no` varchar(10) NOT NULL,
  `faculty_email` varchar(60) NOT NULL,
  `faculty_address` varchar(250) NOT NULL,
  `faculty_aadhaar` char(12) NOT NULL,
  `faculty_salary` int(11) NOT NULL,
  `faculty_designation` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `faculty`
--

INSERT INTO `faculty` (`faculty_id`, `faculty_name`, `faculty_dob`, `faculty_nation`, `faculty_qual`, `faculty_gender`, `faculty_mob_no`, `faculty_email`, `faculty_address`, `faculty_aadhaar`, `faculty_salary`, `faculty_designation`) VALUES
(0, 'Unknown', '0000-00-00', 'Unknown', 'Unknown', 'U', '0000000000', 'abc@gmail.com', 'Address', '123456789000', 0, 'Unknown'),
(11, 'Girish', '1989-10-12', 'Indian', 'B.Sc', 'M', '8095139674', 'girish@gmail.com', 'Bangalore', '912827364287', 20000, 'Science Teacher '),
(12, 'Suresh', '1980-12-12', 'Indian', 'B.Sc', 'M', '9036491888', 'suresh@hotmail.com', 'Bangalore', '298347982375', 25000, 'Teacher'),
(13, 'Ramesh', '0000-00-00', 'Indian', 'B.Sc', 'M', '9828165376', 'ramesh@gmail.com', 'Bangalore', '982736498273', 20000, 'Teacher'),
(14, 'Prasanna', '1980-04-04', 'Indian', 'B.Sc', 'M', '9827314823', 'preasanna@yahoo.com', 'Bangalore', '938759287364', 12000, 'Teacher'),
(15, 'Ravi', '1987-03-12', 'Indian', 'B.Sc', 'M', '9872163812', 'ravi@gmail.com', 'Bangalore', '893745982736', 20000, 'Teacher'),
(16, 'Manohar', '1993-08-20', 'Indian', 'B.ed M.phil', 'M', '9979277879', 'mannu@channu.com', 'Shantinagar', '119377789378', 86000, 'Hod'),
(17, 'Harivansh', '1959-05-23', 'Hindu', 'ME', 'M', '5757576776', 'hari@gmail.com', 'Goa', '476767676767', 70009, 'Teacher'),
(18, 'ab deviliers', '2017-05-23', 'indian', 'BE', 'm', '7964686766', 'abd134@gmail.com', ' gandhinagar', '245667787765', 123090, 'Teacher'),
(19, 'Bushan', '1981-05-23', 'Hindu', 'BE', 'M', '5757576776', 'bushan@gmai.com', 'Bihar', '476767676767', 676767, 'Teacher'),
(20, 'Nisha', '1979-12-19', 'Indian', 'Phd', 'F', '7839393992', 'nisha@gmail.con', 'Hyderabad', '784993326638', 45679, 'Teacher'),
(21, 'Divya ', '1993-05-23', 'Australian', 'M.sc', 'F', '88960064', 'divya@aussi.com', 'Mg road', '99736619', 78000, 'Assistant');

-- --------------------------------------------------------

--
-- Table structure for table `parent`
--

CREATE TABLE `parent` (
  `parent_id` int(11) NOT NULL,
  `f_name` varchar(50) NOT NULL,
  `m_name` varchar(50) NOT NULL,
  `address` varchar(250) NOT NULL,
  `mob_no` varchar(10) NOT NULL,
  `income` int(11) NOT NULL,
  `f_occup` varchar(20) NOT NULL,
  `m_occup` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `parent`
--

INSERT INTO `parent` (`parent_id`, `f_name`, `m_name`, `address`, `mob_no`, `income`, `f_occup`, `m_occup`) VALUES
(7, 'Mohammed', 'Mahjabeen', 'Bangalore', '9878639587', 120000, 'others', 'Self'),
(9, 'sjdhfbjn', 'kjdfmsn', 'djnfbmh', '9874653987', 8236487, 'jshfdsmjh', 'kjhsdbvmsn'),
(10, 'Donald', 'Melania', 'Mahismati', '7378374548', 890987, 'President', 'Online shop'),
(11, 'rana choncha', 'rani chonchi', '#26 rajajinagar banglore', '9977865565', 19000, 'freedom fighter', 'house wife'),
(12, 'Mohammed Ashrafi', 'Mahjebeen', 'Bangalore', '9863738677', 12000, 'Others', 'Others'),
(13, 'Big meme', 'Ama meme', ' Banaswadi', '9747282672', 173773738, 'Marketing', 'Home wife'),
(14, 'dj kravo', 'dj momy', 'kormangal', '544445667', 1777788, 'cricketer', 'cricketer'),
(15, 'Mohammed Ashrafi', 'Mahjebeen', 'Bangalore', '9863738677', 12000, 'Others', 'Others'),
(16, 'Sharma', 'Mikka', 'Chandapura', '5757586766', 560, 'Farmer', 'House wife'),
(17, 'Mohammed abbed', 'Begum', 'Bangalore', '7836383882', 12000, 'Others', 'Others'),
(18, 'Klsundar', 'Kl raktu', 'Raichur', '1837739379', 1888786, 'Service mechanic', 'House work'),
(19, 'Dinku', 'Pinki', 'Attibele', '5757586766', 560, 'Farmer', 'House wife'),
(20, 'Ramesh', 'Sundari', 'Hyderabad', '8399936626', 200000, 'Carpenter', 'House wife'),
(21, 'raja', ' rani', 'gandhi nagar', '9956701875', 445555, 'gagagav', 'yuag'),
(22, 'Vijay mallya', 'Shakuntala malya', 'Dubai', '9847736736', 92837262, 'Kingfisher', 'Business'),
(23, 'Uamesh', 'mandari', 'London', '5558399936', 100000, 'Electrition', 'Housewife');

-- --------------------------------------------------------

--
-- Table structure for table `request_table`
--

CREATE TABLE `request_table` (
  `student_id` int(11) NOT NULL,
  `subject` varchar(100) NOT NULL,
  `letter` varchar(250) NOT NULL,
  `request_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `request_table`
--

INSERT INTO `request_table` (`student_id`, `subject`, `letter`, `request_date`) VALUES
(7, 'test', 'test', '2017-05-23');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `student_id` int(11) NOT NULL,
  `student_name` varchar(50) NOT NULL,
  `student_dob` date NOT NULL,
  `student_email` varchar(60) NOT NULL,
  `student_nation` varchar(20) NOT NULL,
  `student_rel` varchar(30) NOT NULL,
  `student_gender` char(1) NOT NULL,
  `student_aadhaar` char(12) NOT NULL,
  `student_photo` varchar(50) NOT NULL,
  `class` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`student_id`, `student_name`, `student_dob`, `student_email`, `student_nation`, `student_rel`, `student_gender`, `student_aadhaar`, `student_photo`, `class`) VALUES
(7, 'Mohammed muzzammil', '1996-01-07', 'muzz@gmail.com', 'Indian', 'Muslim', '', '123456789102', 'images/7.jpg', 1),
(9, 'Mohd Sohail', '1999-01-01', 'jsdbnsm', 'Indian', 'Muslim', 'M', '983765928376', 'images/9.jpg', 2),
(10, 'Bahubali', '1993-05-23', 'Bahu@bali.com', 'Indian', 'Hindu', 'M', '124635637263', 'images/10.jpg', 1),
(11, 'ballala deva', '2017-05-23', 'ball123@gmail.com', 'indian', 'hindu', 'm', '155226626211', 'images/11.jpg', 1),
(12, 'Mohammed Muzzammil', '2010-05-19', 'muzzammil@gmail.com', 'Indian', 'Muslim', 'M', '638839288199', 'images/12.jpg', 1),
(13, 'Memes man', '1992-05-23', 'Memes@man.com', 'African', 'Christan', 'M', '124094398336', 'images/13.jpg', 1),
(14, 'dj bravo', '2017-05-23', 'bravo143@gmail.com', 'indian', 'grach', 'm', '116567488877', 'images/14.jpg', 1),
(15, 'Mohammed sohail', '2010-05-19', 'Sohail@gmail.com', 'Indian', 'Muslim', 'M', '638839288199', 'images/15.jpg', 1),
(16, 'Sonu', '1996-02-07', 'sonu@gmail.com', 'Indian', 'Hindu', 'M', '142536251427', 'images/15.jpg', 1),
(17, 'Mohammed soyal', '2005-05-19', 'Soyal@gmail.com', 'Indian', 'Muslim', 'M', '836738838288', 'images/17.jpg', 1),
(18, 'K l rahul ', '2013-05-24', 'klpal@com.com', 'Karnatakan', 'Hindu', 'M', '883672673633', 'images/18.jpg', 1),
(19, 'Tinku', '1997-05-23', 'Tinku@gmail.com', 'Indian', 'Hindu', 'M', '355666666666', 'images/19.jpg', 1),
(20, 'Manjunath', '1995-05-23', 'manjula@gmail.com', 'Indian', 'Hindu', 'F', '283999927777', 'images/19.jpg', 1),
(21, 'Washington sundar', '2017-05-23', 'washclothes@hmail.com', 'indian', 'hindu', 'm', '112277272772', 'images/21.jpg', 1),
(22, 'Chris Gayle', '2000-02-18', 'Chris@mris.com', 'West indian', 'Christan', 'M', '999387737771', 'images/22.jpg', 1),
(23, 'Anushka', '1983-05-23', 'Anu@gmail.com', 'Indian', 'Hindu', 'F', '568282928399', 'images/22.jpg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `subject`
--

CREATE TABLE `subject` (
  `class` int(11) NOT NULL,
  `subject` varchar(20) NOT NULL,
  `faculty_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subject`
--

INSERT INTO `subject` (`class`, `subject`, `faculty_id`) VALUES
(1, 'English', 11),
(1, 'GS', 12),
(1, 'Hindi', 13),
(1, 'Kannada', 14),
(1, 'Math', 15),
(1, 'SS', 16),
(2, 'English', 0),
(2, 'GS', 0),
(2, 'Hindi', 0),
(2, 'Kannada', 0),
(2, 'Math', 0),
(2, 'SS', 0),
(3, 'English', 0),
(3, 'GS', 0),
(3, 'Hindi', 0),
(3, 'Kannada', 0),
(3, 'Math', 0),
(3, 'SS', 0),
(4, 'English', 0),
(4, 'GS', 0),
(4, 'Hindi', 0),
(4, 'Kannada', 0),
(4, 'Math', 0),
(4, 'SS', 0),
(5, 'English', 0),
(5, 'GS', 0),
(5, 'Hindi', 0),
(5, 'Kannada', 0),
(5, 'Math', 0),
(5, 'SS', 0),
(6, 'English', 11),
(6, 'GS', 0),
(6, 'Hindi', 0),
(6, 'Kannada', 0),
(6, 'Math', 0),
(6, 'SS', 0),
(7, 'English', 0),
(7, 'GS', 0),
(7, 'Hindi', 0),
(7, 'Kannada', 0),
(7, 'Math', 0),
(7, 'SS', 0),
(8, 'English', 0),
(8, 'GS', 0),
(8, 'Hindi', 0),
(8, 'Kannada', 0),
(8, 'Math', 0),
(8, 'SS', 0),
(9, 'English', 0),
(9, 'GS', 0),
(9, 'Hindi', 0),
(9, 'Kannada', 0),
(9, 'Math', 0),
(9, 'SS', 0),
(10, 'English', 0),
(10, 'GS', 0),
(10, 'Hindi', 0),
(10, 'Kannada', 0),
(10, 'Math', 0),
(10, 'SS', 0);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `username` varchar(50) NOT NULL,
  `password` varchar(255) DEFAULT NULL,
  `student_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`username`, `password`, `student_id`) VALUES
('bahubali', '9f86d081884c7d659a2feaa0c55ad015a3bf4f1b2b0b822cd15d6c15b0f00a08', 10),
('ballaldeva', '9f86d081884c7d659a2feaa0c55ad015a3bf4f1b2b0b822cd15d6c15b0f00a08', 11),
('memesman', '9f86d081884c7d659a2feaa0c55ad015a3bf4f1b2b0b822cd15d6c15b0f00a08', 13),
('muzzammil', '9f86d081884c7d659a2feaa0c55ad015a3bf4f1b2b0b822cd15d6c15b0f00a08', 12),
('sohail', '9f86d081884c7d659a2feaa0c55ad015a3bf4f1b2b0b822cd15d6c15b0f00a08', 15),
('sonu', '9f86d081884c7d659a2feaa0c55ad015a3bf4f1b2b0b822cd15d6c15b0f00a08', 16),
('Soyal', '9f86d081884c7d659a2feaa0c55ad015a3bf4f1b2b0b822cd15d6c15b0f00a08', 9),
('test', 'ecd71870d1963316a97e3ac3408c9835ad8cf0f3c1bc703527c30265534f75ae', 7);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`user`);

--
-- Indexes for table `attendance`
--
ALTER TABLE `attendance`
  ADD PRIMARY KEY (`student_id`);

--
-- Indexes for table `faculty`
--
ALTER TABLE `faculty`
  ADD PRIMARY KEY (`faculty_id`);

--
-- Indexes for table `parent`
--
ALTER TABLE `parent`
  ADD PRIMARY KEY (`parent_id`);

--
-- Indexes for table `request_table`
--
ALTER TABLE `request_table`
  ADD PRIMARY KEY (`student_id`,`request_date`),
  ADD UNIQUE KEY `student_id` (`student_id`,`request_date`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`student_id`);

--
-- Indexes for table `subject`
--
ALTER TABLE `subject`
  ADD PRIMARY KEY (`class`,`subject`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`username`),
  ADD UNIQUE KEY `student_id` (`student_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `faculty`
--
ALTER TABLE `faculty`
  MODIFY `faculty_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT for table `parent`
--
ALTER TABLE `parent`
  MODIFY `parent_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `student_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `attendance`
--
ALTER TABLE `attendance`
  ADD CONSTRAINT `attendance_ibfk_1` FOREIGN KEY (`student_id`) REFERENCES `student` (`student_id`) ON DELETE CASCADE;

--
-- Constraints for table `parent`
--
ALTER TABLE `parent`
  ADD CONSTRAINT `parent_ibfk_1` FOREIGN KEY (`parent_id`) REFERENCES `student` (`student_id`) ON DELETE CASCADE;

--
-- Constraints for table `request_table`
--
ALTER TABLE `request_table`
  ADD CONSTRAINT `request_table_ibfk_1` FOREIGN KEY (`student_id`) REFERENCES `student` (`student_id`) ON DELETE CASCADE;

--
-- Constraints for table `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `user_ibfk_1` FOREIGN KEY (`student_id`) REFERENCES `student` (`student_id`) ON DELETE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
