-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 15, 2022 at 09:33 AM
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
-- Database: `student_info`
--

DELIMITER $$
--
-- Procedures
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_countRecord` ()   SELECT COUNT(*) as ParticipantsCount FROM student$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_getAverageTrainingFee` ()   SELECT AVG(course.training_fee) as average FROM `student` inner join ENROL on student.student_id=enrol.student_id inner join COURSE on course.course_id=enrol.course_id$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_getCourseName` (IN `p_course_name` VARCHAR(50))   Select * from course where course_name = p_course_name$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_getEnrolledStudent` ()   SELECT * FROM `student` inner join ENROL on student.student_id=enrol.student_id inner join COURSE on course.course_id=enrol.course_id$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_getNumberCourses` ()   Select count(course.course_name) as totalCourses from course$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_getTotalTrainingFee` ()   SELECT sum(course.training_fee) as TOTAL FROM `student` inner join ENROL on student.student_id=enrol.student_id inner join COURSE on course.course_id=enrol.course_id$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_insertStudentClass` (IN `p_student_id` INT, IN `p_course_id` INT, IN `p_date` DATE)   INSERT INTO enrol (student_id, course_id, date) VALUES (p_student_id, p_course_id, CURDATE())$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_NumberParticipantsBySex` ()   SELECT COUNT(STUDENT_ID) AS TOTAL, STUDENT_SEX, CONCAT('#',LPAD(CONV(ROUND(RAND()*16777215),10,16),6,0)) as chartColor FROM  `student` GROUP BY STUDENT_SEX$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE `course` (
  `course_id` int(11) NOT NULL,
  `course_name` varchar(50) NOT NULL,
  `training_fee` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`course_id`, `course_name`, `training_fee`) VALUES
(1, 'HTML', 3500),
(2, 'CSS', 3500),
(3, 'JS', 4000),
(4, 'PHP', 5000),
(5, 'SQL', 5000);

-- --------------------------------------------------------

--
-- Table structure for table `enrol`
--

CREATE TABLE `enrol` (
  `enrol_id` int(11) NOT NULL,
  `date` date NOT NULL,
  `student_id` int(11) NOT NULL,
  `course_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `enrol`
--

INSERT INTO `enrol` (`enrol_id`, `date`, `student_id`, `course_id`) VALUES
(1, '2022-12-13', 2, 1),
(2, '2022-12-13', 3, 3),
(3, '2022-12-13', 2, 5),
(4, '2022-12-13', 4, 3),
(5, '2022-12-15', 7, 4);

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `student_id` int(11) NOT NULL,
  `student_name` varchar(50) NOT NULL,
  `student_address` varchar(50) NOT NULL,
  `student_sex` varchar(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`student_id`, `student_name`, `student_address`, `student_sex`) VALUES
(2, 'Dan', 'Cordon', 'Male'),
(3, 'Rose', 'Diffun', 'Female'),
(4, 'Jane', 'Diffun', 'Female'),
(5, ' John ', ' Tuguegarao ', 'Male '),
(6, ' Nina ', ' Cabagan ', 'Female'),
(7, ' Hannah ', ' Cauayan ', 'Female'),
(8, ' Direk ', ' Santiago ', 'Male '),
(9, ' Gael ', ' Bayombong ', 'Male '),
(14, ' ferlin ', ' alicia ', 'Male '),
(16, 'rodel', ' re ', 'Male');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`course_id`);

--
-- Indexes for table `enrol`
--
ALTER TABLE `enrol`
  ADD PRIMARY KEY (`enrol_id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`student_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `course`
--
ALTER TABLE `course`
  MODIFY `course_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `enrol`
--
ALTER TABLE `enrol`
  MODIFY `enrol_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `student_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
