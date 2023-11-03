-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 03, 2023 at 07:58 AM
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
-- Database: `cte`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_application_documents`
--

CREATE TABLE `tbl_application_documents` (
  `id` int(50) NOT NULL,
  `application_id` varchar(255) NOT NULL,
  `aadhar_card` varchar(500) NOT NULL,
  `ssc_marksheet` varchar(500) NOT NULL,
  `hsc_marksheet` varchar(500) NOT NULL,
  `all_marksheet_till_sem` varchar(500) NOT NULL,
  `transferred_clg_noc` varchar(500) NOT NULL,
  `current_clg_noc` varchar(500) NOT NULL,
  `is_active` int(1) NOT NULL,
  `is_delete` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_college_details`
--

CREATE TABLE `tbl_college_details` (
  `id` int(50) NOT NULL,
  `clg_id` varchar(255) NOT NULL,
  `clg_name` varchar(255) NOT NULL,
  `principle_name` varchar(255) NOT NULL,
  `principle_mobile_number` varchar(200) NOT NULL,
  `principle_email_id` varchar(255) NOT NULL,
  `clg_mobile_number` varchar(200) NOT NULL,
  `clg_pincode` int(6) NOT NULL,
  `clg_city` varchar(255) NOT NULL,
  `clg_dist` varchar(255) NOT NULL,
  `clg_address` varchar(255) NOT NULL,
  `is_active` int(1) NOT NULL,
  `is_delete` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_login`
--

CREATE TABLE `tbl_login` (
  `id` int(50) NOT NULL,
  `email_id` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `user_type` varchar(200) NOT NULL,
  `organization_type` varchar(255) NOT NULL,
  `college_id` varchar(255) NOT NULL,
  `is_active` int(1) NOT NULL,
  `is_delete` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_students`
--

CREATE TABLE `tbl_students` (
  `id` int(50) NOT NULL,
  `enrollment_number` text NOT NULL,
  `first_name` varchar(200) NOT NULL,
  `middle_name` varchar(200) NOT NULL,
  `last_name` varchar(200) NOT NULL,
  `mobile_number` varchar(12) NOT NULL,
  `email_id` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `dob` date NOT NULL,
  `gender` varchar(50) NOT NULL,
  `admission_year` int(10) NOT NULL,
  `religion` varchar(50) NOT NULL,
  `cast` varchar(50) NOT NULL,
  `college_name` varchar(255) NOT NULL,
  `course` varchar(255) NOT NULL,
  `branch` varchar(255) NOT NULL,
  `current_sem` int(2) NOT NULL,
  `is_active` int(1) NOT NULL,
  `is_delete` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_students`
--

INSERT INTO `tbl_students` (`id`, `enrollment_number`, `first_name`, `middle_name`, `last_name`, `mobile_number`, `email_id`, `password`, `dob`, `gender`, `admission_year`, `religion`, `cast`, `college_name`, `course`, `branch`, `current_sem`, `is_active`, `is_delete`) VALUES
(1, '201290116020', 'Rijvan', 'Riyajbhai', 'Juneja', '9586404030', 'avb9924@gmail.com', '123', '2023-11-15', 'male', 2020, 'ISLAM', 'OBC', 'GMIU', 'B.E', 'IT', 5, 1, 0),
(2, '2012', '', '', '', '', '', '', '0000-00-00', '', 0, '', '', '', '', '', 0, 0, 0),
(3, '12', '', '', '', '', '', '', '0000-00-00', '', 0, '', '', '', '', '', 0, 0, 0),
(4, '123456789', '', '', '', '', '', '', '0000-00-00', '', 0, '', '', '', '', '', 0, 0, 0),
(5, '999999999', '', '', '', '', '', '', '0000-00-00', '', 0, '', '', '', '', '', 0, 0, 0),
(6, '9999999998', '', '', '', '', '', '', '0000-00-00', '', 0, '', '', '', '', '', 0, 0, 0),
(7, '11111111111111', '', '', '', '', '', '', '0000-00-00', '', 0, '', '', '', '', '', 0, 0, 0),
(8, '1', '', '', '', '', '', '', '0000-00-00', '', 0, '', '', '', '', '', 0, 0, 0),
(9, '1', '', '', '', '', '', '', '0000-00-00', '', 0, '', '', '', '', '', 0, 0, 0),
(10, '1', '', '', '', '', '', '', '0000-00-00', '', 0, '', '', '', '', '', 0, 0, 0),
(11, '1', '', '', '', '', '', '', '0000-00-00', '', 0, '', '', '', '', '', 0, 0, 0),
(12, '1', '', '', '', '', '', '', '0000-00-00', '', 0, '', '', '', '', '', 0, 0, 0),
(13, '1', '', '', '', '', '', '', '0000-00-00', '', 0, '', '', '', '', '', 0, 0, 0),
(14, '22', '', '', '', '', '', '', '0000-00-00', '', 0, '', '', '', '', '', 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_stu_application`
--

CREATE TABLE `tbl_stu_application` (
  `id` int(50) NOT NULL,
  `application_id` varchar(200) NOT NULL,
  `enrollment_number` varchar(255) NOT NULL,
  `mobile_number_1` varchar(200) NOT NULL,
  `mobile_number_2` varchar(200) NOT NULL,
  `email_id` varchar(255) NOT NULL,
  `current_clg_id` varchar(255) NOT NULL,
  `transferred_clg_id` varchar(255) NOT NULL,
  `transfereed_in_sem` int(2) NOT NULL,
  `current_backlog` int(2) NOT NULL,
  `current_kt` int(2) NOT NULL,
  `previous_sem_spi` int(2) NOT NULL,
  `cpi_till_now` int(2) NOT NULL,
  `stu_has_ufm` int(1) NOT NULL COMMENT '(0,1)',
  `stu_detained` int(1) NOT NULL COMMENT '(0,1)',
  `admission_category` varchar(200) NOT NULL,
  `all_terms_and_condition` int(1) NOT NULL COMMENT '(0,1)',
  `current_clg_approved` int(1) NOT NULL COMMENT '(0,1) present clg request',
  `current_clg_time_stamp` date NOT NULL DEFAULT current_timestamp(),
  `transferred_clg_approved` int(1) NOT NULL COMMENT '(0,1) transferred clg request',
  `transferred_clg_time_stamp` date NOT NULL DEFAULT current_timestamp(),
  `cte_approved` int(11) NOT NULL COMMENT '(0,1) CTE request',
  `cte_time_stamp` date NOT NULL DEFAULT current_timestamp(),
  `current_clg_reject_reason` varchar(500) NOT NULL,
  `transferred_clg_reject_reason` varchar(500) NOT NULL,
  `cte_reject_reason` varchar(500) NOT NULL,
  `app_status` varchar(255) NOT NULL COMMENT 'approved,cancle,reject,pending etc..',
  `is_active` int(1) NOT NULL,
  `is_delete` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_application_documents`
--
ALTER TABLE `tbl_application_documents`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_college_details`
--
ALTER TABLE `tbl_college_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_login`
--
ALTER TABLE `tbl_login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_students`
--
ALTER TABLE `tbl_students`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_stu_application`
--
ALTER TABLE `tbl_stu_application`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_application_documents`
--
ALTER TABLE `tbl_application_documents`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_college_details`
--
ALTER TABLE `tbl_college_details`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_login`
--
ALTER TABLE `tbl_login`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_students`
--
ALTER TABLE `tbl_students`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `tbl_stu_application`
--
ALTER TABLE `tbl_stu_application`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
