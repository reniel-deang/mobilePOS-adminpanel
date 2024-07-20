-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 13, 2024 at 11:08 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_testdatabase`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_cardhomepage`
--

CREATE TABLE `tb_cardhomepage` (
  `id` int(11) NOT NULL,
  `img` varchar(500) NOT NULL,
  `title` varchar(500) NOT NULL,
  `caption` varchar(500) NOT NULL,
  `ToHome` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_cardhomepage`
--

INSERT INTO `tb_cardhomepage` (`id`, `img`, `title`, `caption`, `ToHome`) VALUES
(32, 'nel2.png', 'Nelliel', 'Sexy Nelliel', 1),
(33, 'Power3.png', 'Power', 'Power', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tb_contenthomepage`
--

CREATE TABLE `tb_contenthomepage` (
  `id` int(11) NOT NULL,
  `sizes` int(11) NOT NULL,
  `title` varchar(500) NOT NULL,
  `caption` varchar(500) NOT NULL,
  `color` varchar(500) NOT NULL,
  `ToHome` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_contenthomepage`
--

INSERT INTO `tb_contenthomepage` (`id`, `sizes`, `title`, `caption`, `color`, `ToHome`) VALUES
(19, 4, 'Announcement', 'Di pa kame tapos depota', '#db0000', 1),
(20, 4, 'Ang Gago', 'Ayaw kona', '#ffffff', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tb_courses`
--

CREATE TABLE `tb_courses` (
  `course_id` int(255) NOT NULL,
  `course_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tb_coverphotohomepage`
--

CREATE TABLE `tb_coverphotohomepage` (
  `id` int(11) NOT NULL,
  `img` varchar(500) NOT NULL,
  `title` varchar(500) NOT NULL,
  `caption` varchar(500) NOT NULL,
  `ToHome` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_coverphotohomepage`
--

INSERT INTO `tb_coverphotohomepage` (`id`, `img`, `title`, `caption`, `ToHome`) VALUES
(49, 'Power2.jpg', 'Power', 'Hehe', 1),
(50, 'Power3.png', 'Power', 'Hehe', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tb_grades`
--

CREATE TABLE `tb_grades` (
  `grades_id` int(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `instructor` varchar(255) NOT NULL,
  `course` varchar(255) NOT NULL,
  `year` varchar(255) NOT NULL,
  `prelim` double NOT NULL,
  `midterm` double NOT NULL,
  `finals` double NOT NULL,
  `average` double NOT NULL,
  `remarks` varchar(255) NOT NULL,
  `user_id` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tb_messages`
--

CREATE TABLE `tb_messages` (
  `messageid` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp(),
  `subject` varchar(255) NOT NULL,
  `message` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tb_profile`
--

CREATE TABLE `tb_profile` (
  `id` int(11) NOT NULL,
  `img` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tb_schedule`
--

CREATE TABLE `tb_schedule` (
  `shed_id` int(255) NOT NULL,
  `date` varchar(255) NOT NULL,
  `day` varchar(255) NOT NULL,
  `start_time` varchar(255) NOT NULL,
  `end_time` varchar(255) NOT NULL,
  `slot` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tb_schoolprofile`
--

CREATE TABLE `tb_schoolprofile` (
  `id` int(11) NOT NULL,
  `SchoolName` varchar(500) NOT NULL,
  `Lokation` varchar(500) NOT NULL,
  `Email` varchar(500) NOT NULL,
  `MobileNumber` varchar(15) NOT NULL,
  `TelephoneNumber` varchar(15) NOT NULL,
  `Discription` varchar(500) NOT NULL,
  `ToHome` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_schoolprofile`
--

INSERT INTO `tb_schoolprofile` (`id`, `SchoolName`, `Lokation`, `Email`, `MobileNumber`, `TelephoneNumber`, `Discription`, `ToHome`) VALUES
(1, 'HEHE', 'Sta. Lucia, Sta. Ana, Pampanga', 'sample@gmail.Ccom', '0942498798', '09488170896', 'Preliminary Exam', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tb_studentinfo`
--

CREATE TABLE `tb_studentinfo` (
  `student_id` int(100) NOT NULL,
  `username` varchar(255) NOT NULL,
  `appointment_date` varchar(255) NOT NULL,
  `time` varchar(255) NOT NULL,
  `elem` varchar(255) NOT NULL,
  `elem_year` varchar(255) NOT NULL,
  `jhs` varchar(255) NOT NULL,
  `jhs_year` varchar(255) NOT NULL,
  `shs` varchar(255) NOT NULL,
  `shs_year` varchar(255) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `mname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `course` varchar(255) NOT NULL,
  `year` varchar(255) NOT NULL,
  `section` varchar(255) NOT NULL,
  `birthday` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `num` varchar(255) NOT NULL,
  `guardian` varchar(255) NOT NULL,
  `guardian_number` varchar(255) NOT NULL,
  `guardian_address` varchar(255) NOT NULL,
  `status` tinyint(1) NOT NULL,
  `user_id` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tb_subject`
--

CREATE TABLE `tb_subject` (
  `subject_id` int(255) NOT NULL,
  `subjectname` varchar(255) NOT NULL,
  `course` varchar(255) NOT NULL,
  `instructor` varchar(255) NOT NULL,
  `years` varchar(255) NOT NULL,
  `numhours` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tb_userdata`
--

CREATE TABLE `tb_userdata` (
  `user_id` int(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `pass` varchar(100) NOT NULL,
  `email` varchar(255) NOT NULL,
  `verified` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_userdata`
--

INSERT INTO `tb_userdata` (`user_id`, `username`, `pass`, `email`, `verified`) VALUES
(1, 'Admin@admin', 'admin', '', 3);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_cardhomepage`
--
ALTER TABLE `tb_cardhomepage`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_contenthomepage`
--
ALTER TABLE `tb_contenthomepage`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_courses`
--
ALTER TABLE `tb_courses`
  ADD PRIMARY KEY (`course_id`);

--
-- Indexes for table `tb_coverphotohomepage`
--
ALTER TABLE `tb_coverphotohomepage`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_grades`
--
ALTER TABLE `tb_grades`
  ADD PRIMARY KEY (`grades_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `tb_messages`
--
ALTER TABLE `tb_messages`
  ADD PRIMARY KEY (`messageid`);

--
-- Indexes for table `tb_profile`
--
ALTER TABLE `tb_profile`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_schedule`
--
ALTER TABLE `tb_schedule`
  ADD PRIMARY KEY (`shed_id`);

--
-- Indexes for table `tb_schoolprofile`
--
ALTER TABLE `tb_schoolprofile`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_studentinfo`
--
ALTER TABLE `tb_studentinfo`
  ADD PRIMARY KEY (`student_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `tb_subject`
--
ALTER TABLE `tb_subject`
  ADD PRIMARY KEY (`subject_id`);

--
-- Indexes for table `tb_userdata`
--
ALTER TABLE `tb_userdata`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_cardhomepage`
--
ALTER TABLE `tb_cardhomepage`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `tb_contenthomepage`
--
ALTER TABLE `tb_contenthomepage`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `tb_courses`
--
ALTER TABLE `tb_courses`
  MODIFY `course_id` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_coverphotohomepage`
--
ALTER TABLE `tb_coverphotohomepage`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT for table `tb_grades`
--
ALTER TABLE `tb_grades`
  MODIFY `grades_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `tb_messages`
--
ALTER TABLE `tb_messages`
  MODIFY `messageid` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tb_profile`
--
ALTER TABLE `tb_profile`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tb_schedule`
--
ALTER TABLE `tb_schedule`
  MODIFY `shed_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tb_schoolprofile`
--
ALTER TABLE `tb_schoolprofile`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tb_studentinfo`
--
ALTER TABLE `tb_studentinfo`
  MODIFY `student_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `tb_subject`
--
ALTER TABLE `tb_subject`
  MODIFY `subject_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `tb_userdata`
--
ALTER TABLE `tb_userdata`
  MODIFY `user_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tb_grades`
--
ALTER TABLE `tb_grades`
  ADD CONSTRAINT `tb_grades_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `tb_studentinfo` (`user_id`);

--
-- Constraints for table `tb_studentinfo`
--
ALTER TABLE `tb_studentinfo`
  ADD CONSTRAINT `tb_studentinfo_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `tb_userdata` (`user_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
