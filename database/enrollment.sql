-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 16, 2024 at 08:46 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `enrollment`
--

-- --------------------------------------------------------

--
-- Table structure for table `downpayment`
--

CREATE TABLE `downpayment` (
  `id` int(11) NOT NULL,
  `student_id` int(10) NOT NULL,
  `amount` decimal(10,0) NOT NULL,
  `pay_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `downpayment`
--

INSERT INTO `downpayment` (`id`, `student_id`, `amount`, `pay_date`) VALUES
(1, 1, 0, '0000-00-00'),
(2, 0, 0, '0000-00-00'),
(3, 2, 0, '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `id` int(20) NOT NULL,
  `firstname` varchar(200) NOT NULL,
  `middlename` varchar(200) NOT NULL,
  `lastname` varchar(200) NOT NULL,
  `suffix` varchar(10) NOT NULL,
  `gender` enum('male','female') NOT NULL,
  `age` int(10) NOT NULL,
  `address` varchar(200) NOT NULL,
  `contact` varchar(13) NOT NULL,
  `birthdate` date NOT NULL,
  `birthplace` varchar(200) NOT NULL,
  `nationality` varchar(30) NOT NULL,
  `religion` varchar(30) NOT NULL,
  `father_name` varchar(100) NOT NULL,
  `father_occupation` varchar(100) NOT NULL,
  `father_contact` int(13) NOT NULL,
  `mother_name` varchar(100) NOT NULL,
  `mother_occupation` varchar(100) NOT NULL,
  `mother_contact` int(13) NOT NULL,
  `guardian_name` varchar(100) NOT NULL,
  `guardian_contact` int(13) NOT NULL,
  `es_name` varchar(30) NOT NULL,
  `es_address` varchar(20) NOT NULL,
  `ey_graduate` varchar(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `grade_lvl` varchar(20) NOT NULL,
  `lrn` int(14) NOT NULL,
  `del_status` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`id`, `firstname`, `middlename`, `lastname`, `suffix`, `gender`, `age`, `address`, `contact`, `birthdate`, `birthplace`, `nationality`, `religion`, `father_name`, `father_occupation`, `father_contact`, `mother_name`, `mother_occupation`, `mother_contact`, `guardian_name`, `guardian_contact`, `es_name`, `es_address`, `ey_graduate`, `email`, `grade_lvl`, `lrn`, `del_status`) VALUES
(1, 'Angel May', 'Aguilar', 'Peñaflor', 'female', 'female', 22, 'Fatima, Uhay, General Santos City', '2147483647', '2002-04-15', 'Fitima Uhaw', 'filipino', 'born agian', '', '', 0, '', '', 0, 'Chris', 0, 'Uhaw Elementary School', 'uhaw', '2017-2018', 'angel@gmail.com', '7', 1312334564, 'active'),
(2, 'Chris', 'Gonzaga', 'Rafael', '', 'male', 23, 'Mabuhay', '09203384540', '2001-11-23', 'Niki Lious Lagao GCS', 'filipino', 'Catholic', 'Romel Tiñador', 'Farmer', 2147483647, 'Theresa Rafael', 'House Wife', 2147483647, 'Theresa Rafael', 920334656, 'New Mabuhay Elementart school', 'Mabuhay', '2017-2018', 'chrisjohn@gmail.com', '8', 21012324, 'active'),
(3, 'Cjay', '', 'Payo', '', 'male', 20, 'lagao', '09203384540', '2005-12-12', 'lagao', 'filipino', 'catholic', '', '', 0, '', '', 0, 'gardian', 923523423, 'west elementay school', 'west lagao', '2020-2021', '', '9', 2147483647, 'active');

-- --------------------------------------------------------

--
-- Table structure for table `subject`
--

CREATE TABLE `subject` (
  `id` int(11) NOT NULL,
  `subject` varchar(20) NOT NULL,
  `subject_code` varchar(20) NOT NULL,
  `grade_lvl` int(11) NOT NULL,
  `del_status` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `subject`
--

INSERT INTO `subject` (`id`, `subject`, `subject_code`, `grade_lvl`, `del_status`) VALUES
(1, 'Mathematic', 'Math101', 7, '');

-- --------------------------------------------------------

--
-- Table structure for table `teacher`
--

CREATE TABLE `teacher` (
  `id` int(11) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `middle_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `suffix` varchar(10) NOT NULL,
  `gender` enum('male','female','','') NOT NULL,
  `email` varchar(225) NOT NULL,
  `contact` varchar(12) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `del_status` varchar(9) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `teacher`
--

INSERT INTO `teacher` (`id`, `first_name`, `middle_name`, `last_name`, `suffix`, `gender`, `email`, `contact`, `username`, `password`, `del_status`) VALUES
(1, 'Angel May', '', 'Penaflor', '', 'female', 'angel@gmail.com', '09061601982', 'angel@gmail.com', 'angel maypenaflor877', 'active');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(220) NOT NULL,
  `username` varchar(200) NOT NULL,
  `role` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `del_status` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `username`, `role`, `password`, `del_status`) VALUES
(1, 'Chris Neil John Rafael', 'chrisrafael', 'admin', '123', ''),
(2, 'Angel May Peñaflor', 'angelmea', 'user', '123', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `downpayment`
--
ALTER TABLE `downpayment`
  ADD PRIMARY KEY (`id`),
  ADD KEY `student_id` (`student_id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subject`
--
ALTER TABLE `subject`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `teacher`
--
ALTER TABLE `teacher`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `downpayment`
--
ALTER TABLE `downpayment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `subject`
--
ALTER TABLE `subject`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `teacher`
--
ALTER TABLE `teacher`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
