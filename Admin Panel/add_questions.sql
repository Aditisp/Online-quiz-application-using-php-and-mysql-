-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 01, 2021 at 03:58 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mini_project_python`
--

-- --------------------------------------------------------

--
-- Table structure for table `add_questions`
--

CREATE TABLE `add_questions` (
  `id` int(7) NOT NULL,
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

INSERT INTO `add_questions` (`id`, `question_no`, `question`, `iquestion`, `opt1`, `iopt1`, `opt2`, `iopt2`, `opt3`, `iopt3`, `opt4`, `iopt4`, `result`, `iresult`, `subjectid`) VALUES
(69, 2, '', 'q_opt_images/1428e9f68a43f20fbf67c680b7cf0c22Annotation 2020-08-03 125511.png', '', 'q_opt_images/1428e9f68a43f20fbf67c680b7cf0c22Annotation 2020-08-16 131816.png', '', 'q_opt_images/1428e9f68a43f20fbf67c680b7cf0c22Annotation 2020-08-16 164130.png', '', 'q_opt_images/1428e9f68a43f20fbf67c680b7cf0c22Annotation 2020-08-21 103001.png', '', 'q_opt_images/1428e9f68a43f20fbf67c680b7cf0c22Annotation 2020-08-20 222328.png', '', 'q_opt_images/1428e9f68a43f20fbf67c680b7cf0c22Annotation 2020-08-16 131816.png', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `add_questions`
--
ALTER TABLE `add_questions`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `add_questions`
--
ALTER TABLE `add_questions`
  MODIFY `id` int(7) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=71;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
