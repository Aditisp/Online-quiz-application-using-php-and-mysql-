-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 02, 2021 at 02:05 PM
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
-- Table structure for table `add_tests`
--

CREATE TABLE `add_tests` (
  `id` int(5) NOT NULL,
  `testname` varchar(200) NOT NULL,
  `testsubject` varchar(200) NOT NULL,
  `testtime` int(20) NOT NULL,
  `testdate` varchar(200) NOT NULL,
  `testmarks` varchar(200) NOT NULL,
  `testdifficulty` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `add_tests`
--

INSERT INTO `add_tests` (`id`, `testname`, `testsubject`, `testtime`, `testdate`, `testmarks`, `testdifficulty`) VALUES
(2, 'Test 1', 'DSA', 60, '02 May, 2021', '80', 'HARD');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `add_tests`
--
ALTER TABLE `add_tests`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `add_tests`
--
ALTER TABLE `add_tests`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
