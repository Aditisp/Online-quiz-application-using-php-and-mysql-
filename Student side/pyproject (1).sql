-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 22, 2021 at 07:21 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pyproject`
--

-- --------------------------------------------------------

--
-- Table structure for table `add_questions`
--

CREATE TABLE `add_questions` (
  `qid` int(7) NOT NULL,
  `question_no` int(5) NOT NULL,
  `question` varchar(1000) NOT NULL,
  `iquestion` varchar(500) NOT NULL,
  `opt1` varchar(1000) NOT NULL,
  `iopt1` varchar(500) NOT NULL,
  `opt2` varchar(1000) NOT NULL,
  `iopt2` varchar(500) NOT NULL,
  `opt3` varchar(1000) NOT NULL,
  `iopt3` varchar(500) NOT NULL,
  `opt4` varchar(1000) NOT NULL,
  `iopt4` varchar(500) NOT NULL,
  `result` varchar(1000) NOT NULL,
  `iresult` varchar(500) NOT NULL,
  `subjectid` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `add_questions`
--

INSERT INTO `add_questions` (`qid`, `question_no`, `question`, `iquestion`, `opt1`, `iopt1`, `opt2`, `iopt2`, `opt3`, `iopt3`, `opt4`, `iopt4`, `result`, `iresult`, `subjectid`) VALUES
(1, 1, 'What is the output for - \'python \' [-3]?', '', '\'o\'', '', '\'t\'', '', '\'h\'', '', 'negative index error', '', '\'h\'', '', 2),
(2, 2, 'In the following options which are python libraries which are used for data analysis and scientific computations?', '', 'numpy', '', 'scipy', '', 'pandas', '', 'all of the above', '', 'all of the above', '', 2),
(4, 1, 'Which of the following is not a keyword in java?', '', 'static', '', 'boolean', '', 'void', '', 'private', '', 'boolean', '', 1),
(5, 2, 'What is polymorphism?', '', 'Polymorphism is a technique to define different objects of same type.', '', 'Polymorphism is the ability of an object to take on many forms', '', ' Polymorphism is a technique to define different methods of same type.', '', 'None of the above.', '', 'Polymorphism is the ability of an object to take on many forms', '', 1),
(6, 1, 'Which of the following is not true about SQL statements?', '', 'SQL statements are not case sensitive.', '', ' SQL statements can be written on one or more lines.', '', 'Keywords cannot be split across lines.', '', 'Clauses must be written on separate lines', '', 'Clauses must be written on separate lines', '', 3),
(7, 2, ' Which of the following is not true about the ON clause?', '', 'ON clause is used to specify conditions or specify columns to join.', '', 'ON clause makes the query easy to understand.', '', 'ON clause does not allow three way joins.', '', ' None of the above.', '', 'ON clause does not allow three way joins.', '', 3),
(8, 3, 'A transaction starts when', '', ' A COMMIT statement is issued', '', ' A COMMIT statement is issued', '', 'A CREATE statement is used', '', ' All of the above\r\n\r\n', '', ' All of the above\r\n\r\n', '', 3),
(9, 4, 'Which of the following is not true about use of a database view?', '', 'It restricts data access.', '', 'It makes queries easy.', '', ' It provides data independence.', '', ' It prevents different views of same data', '', ' It prevents different views of same data', '', 3),
(10, 5, 'Which of the following code would create a role named student_admin?', '', 'CREATE student_admin;', '', 'GRANT student_admin;', '', 'CREATE ROLE student_admin;', '', ' ROLE student_admin;', '', 'CREATE ROLE student_admin;', '', 3);

-- --------------------------------------------------------

--
-- Table structure for table `add_tests`
--

CREATE TABLE `add_tests` (
  `id` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `testname` varchar(200) NOT NULL,
  `testsubject` varchar(200) NOT NULL,
  `difficultylevel` varchar(20) NOT NULL,
  `testtime` varchar(30) NOT NULL,
  `testdate` date NOT NULL,
  `testmarks` int(200) NOT NULL,
  `marksperq` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `add_tests`
--

INSERT INTO `add_tests` (`id`, `total`, `testname`, `testsubject`, `difficultylevel`, `testtime`, `testdate`, `testmarks`, `marksperq`) VALUES
(1, 2, 'Test 1', 'Java', 'Medium', '2:00', '2021-07-31', 10, 5),
(2, 2, 'Entrance ', 'Python', 'High', '10:00', '2021-07-31', 20, 10),
(3, 5, 'sql 1.0', 'DBMS', 'Medium', '1:00', '2021-07-31', 30, 6),
(4, 2, 'Test', 'sample test', 'easy', '2:00', '2021-07-31', 2, 1),
(5, 3, 'test2', 'test sample', 'easy', '6:00', '2021-07-31', 3, 1),
(6, 6, 'test3', 'sample', 'easy', '6:00', '2021-06-16', 6, 1),
(7, 7, 'test 4', 'sample', 'easy', '7:00', '2021-07-29', 7, 1);

-- --------------------------------------------------------

--
-- Table structure for table `history`
--

CREATE TABLE `history` (
  `id` int(11) NOT NULL,
  `email_id` varchar(50) NOT NULL,
  `score` int(11) NOT NULL,
  `level` int(11) NOT NULL,
  `rightans` int(11) NOT NULL,
  `wrong` int(11) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `history`
--

INSERT INTO `history` (`id`, `email_id`, `score`, `level`, `rightans`, `wrong`, `date`) VALUES
(2, 'def@gmail.com', 20, 2, 2, 0, '2021-05-04 16:12:10'),
(1, 'tds@gmail.com', 7, 0, 0, 0, '2021-05-21 09:57:09'),
(1, 'abc@gmail.com', 6, 0, 0, 0, '2021-05-21 09:57:39'),
(2, 'xyz@gmail.com', 16, 0, 0, 0, '2021-05-21 09:58:11'),
(2, 'tds@gmail.com', 12, 0, 0, 0, '2021-05-21 09:58:49'),
(2, 'abc@gmail.com', 12, 0, 0, 0, '2021-05-21 10:05:20'),
(1, 'xyz@gmail.com', 5, 2, 1, 1, '2021-07-20 18:31:07'),
(1, 'abcd@gmail.com', 10, 2, 2, 0, '2021-07-20 19:42:34'),
(3, 'abcd@gmail.com', 0, 4, 0, 4, '2021-07-20 19:43:45'),
(3, 'xyz@gmail.com', 0, 2, 0, 2, '2021-07-21 11:35:07'),
(1, 'parab@abc.com', 5, 2, 1, 1, '2021-07-21 11:37:38'),
(3, 'parab@abc.com', 12, 5, 2, 3, '2021-07-21 12:03:38'),
(2, 'parab@abc.com', 20, 2, 2, 0, '2021-07-21 12:05:04'),
(1, 'adsp@gmail.com', 10, 2, 2, 0, '2021-07-21 13:12:41');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `s_no` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(250) NOT NULL,
  `password` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`s_no`, `name`, `email`, `password`) VALUES
(1, 'Admin', 'admin@gmail.com', 'admin@123');

-- --------------------------------------------------------

--
-- Table structure for table `prof_name`
--

CREATE TABLE `prof_name` (
  `id` int(11) NOT NULL,
  `p_name` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `prof_name`
--

INSERT INTO `prof_name` (`id`, `p_name`, `email`) VALUES
(1, 'Harsh Bhor', ''),
(2, 'Mamta Borle', ''),
(3, 'Prashant Sawant', ''),
(4, 'Reena Lokare', ''),
(5, 'Vaishali Dabholkar', ''),
(6, 'Vaishali Gaikwad', ''),
(7, 'Vijaya Pinjarkar', '');

-- --------------------------------------------------------

--
-- Table structure for table `result`
--

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `s_id` int(20) NOT NULL,
  `name` varchar(60) NOT NULL,
  `branch` varchar(50) NOT NULL,
  `email_id` varchar(40) NOT NULL,
  `phone_no` int(12) NOT NULL,
  `roll_no` int(10) NOT NULL,
  `year` varchar(10) NOT NULL,
  `father_name` varchar(30) NOT NULL,
  `mother_name` varchar(30) NOT NULL,
  `gender` varchar(15) NOT NULL,
  `test_solved` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`s_id`, `name`, `branch`, `email_id`, `phone_no`, `roll_no`, `year`, `father_name`, `mother_name`, `gender`, `test_solved`) VALUES
(320156, 'Alex', 'CS', 'def@gmail.com', 704589635, 44, 'SE', 'Aly', 'xyz', 'Male', 10);

-- --------------------------------------------------------

--
-- Table structure for table `uploaded_files`
--

CREATE TABLE `uploaded_files` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `new_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `uploaded_files`
--



-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`) VALUES
(8, 'Pure Coding', 'purecodingofficial@gmail.com', '0139a3c5cf42394be982e766c93f5ed0'),
(9, 'rohini', 'nehav3425@gmail.com', 'd2f2297d6e829cd3493aa7de4416a18f'),
(14, 'abcd', 'abcd@gmail.com', 'e2fc714c4727ee9395f324cd2e7f331f'),
(15, 'parab', 'parab@abc.com', '551a9901d458a1522f5fb49291c590b1'),
(17, 'adsp', 'adisp@gmail.com', '2b197829d548512d1d4b8bd5c773d6c3');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `add_questions`
--
ALTER TABLE `add_questions`
  ADD PRIMARY KEY (`qid`);

--
-- Indexes for table `add_tests`
--
ALTER TABLE `add_tests`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`s_no`);

--
-- Indexes for table `prof_name`
--
ALTER TABLE `prof_name`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `result`
--
ALTER TABLE `result`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`s_id`);

--
-- Indexes for table `uploaded_files`
--
ALTER TABLE `uploaded_files`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `add_questions`
--
ALTER TABLE `add_questions`
  MODIFY `qid` int(7) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=76;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `s_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `prof_name`
--
ALTER TABLE `prof_name`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `result`
--
ALTER TABLE `result`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `uploaded_files`
--
ALTER TABLE `uploaded_files`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
