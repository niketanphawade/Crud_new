-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 17, 2023 at 06:31 AM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `crud_new`
--

-- --------------------------------------------------------

--
-- Table structure for table `add_revision`
--

CREATE TABLE `add_revision` (
  `id` int(20) NOT NULL,
  `document_name` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `upload_file` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `revision_number` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `revision_remark` int(20) NOT NULL,
  `revision_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `add_revision`
--

INSERT INTO `add_revision` (`id`, `document_name`, `upload_file`, `revision_number`, `revision_remark`, `revision_date`) VALUES
(1, 'yes ', 'User_Image_115.jpg', '100', 0, '2023-01-17'),
(2, 'hh ', 'User_Image_116.jpg', '50', 0, '2023-01-17');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` int(20) NOT NULL,
  `Name` varchar(20) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `Name`) VALUES
(1, 'swami'),
(2, 'hellooo'),
(3, 'advik'),
(5, 'hello'),
(6, 'hello'),
(7, 'hello');

-- --------------------------------------------------------

--
-- Table structure for table `document`
--

CREATE TABLE `document` (
  `id` int(20) NOT NULL,
  `document_name` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `upload_file` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `revision_number` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `revision_remark` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `revision_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `document`
--

INSERT INTO `document` (`id`, `document_name`, `upload_file`, `revision_number`, `revision_remark`, `revision_date`) VALUES
(1, '', 'User Image.jpg', '', '', '0000-00-00'),
(2, 'hh', 'User_Image6.jpg', '', '', '0000-00-00'),
(3, 'yes', 'User_Image_11.jpg', '3', 'hello', '2023-01-17'),
(4, 'yes', 'User_Image_12.jpg', '3', 'hello', '2023-01-17'),
(5, 'hh', 'User_Image118.jpg', '3', 'hello', '2023-01-18'),
(6, 'hh', 'User_Image119.jpg', '3', 'hello', '2023-01-18'),
(7, 'yes ', 'User_Image_114.jpg', '3', 'hello', '2023-01-17');

-- --------------------------------------------------------

--
-- Table structure for table `email_master`
--

CREATE TABLE `email_master` (
  `id` int(20) NOT NULL,
  `email_id` varchar(20) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `email_master`
--

INSERT INTO `email_master` (`id`, `email_id`) VALUES
(5, '	amolsoundalgekar@gm'),
(6, '	marketing.softechso'),
(7, 'hello');

-- --------------------------------------------------------

--
-- Table structure for table `masteradd`
--

CREATE TABLE `masteradd` (
  `id` int(11) NOT NULL,
  `Name` varchar(20) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `masteradd`
--

INSERT INTO `masteradd` (`id`, `Name`) VALUES
(1, 'hello'),
(3, 'advik'),
(4, 'sai'),
(7, 'helloomr'),
(8, 'advik'),
(9, 'advik'),
(10, 'advik'),
(11, 'advik'),
(12, 'advik'),
(13, 'advik'),
(14, 'advik');

-- --------------------------------------------------------

--
-- Table structure for table `operation_number`
--

CREATE TABLE `operation_number` (
  `id` int(20) NOT NULL,
  `Name` varchar(20) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `operation_number`
--

INSERT INTO `operation_number` (`id`, `Name`) VALUES
(1, 'helloooo'),
(4, 'dkkd');

-- --------------------------------------------------------

--
-- Table structure for table `parts`
--

CREATE TABLE `parts` (
  `id` int(20) NOT NULL,
  `part_number` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `part_description` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `select_customer` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `select_type` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `select_part_family` varchar(20) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `parts`
--

INSERT INTO `parts` (`id`, `part_number`, `part_description`, `select_customer`, `select_type`, `select_part_family`) VALUES
(1, 'h', 'h', 'hellooo', 'hello', 'helloo'),
(2, 'sss', 'hh', 'swami', 'hello', 'add'),
(3, 'eee', 'hh', 'advik', 'hello', 'swami');

-- --------------------------------------------------------

--
-- Table structure for table `part_family`
--

CREATE TABLE `part_family` (
  `id` int(20) NOT NULL,
  `Name` varchar(20) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `part_family`
--

INSERT INTO `part_family` (`id`, `Name`) VALUES
(1, 'swami'),
(2, 'add'),
(3, 'helloo');

-- --------------------------------------------------------

--
-- Table structure for table `part_type`
--

CREATE TABLE `part_type` (
  `id` int(20) NOT NULL,
  `Name` varchar(20) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `part_type`
--

INSERT INTO `part_type` (`id`, `Name`) VALUES
(1, 'hello');

-- --------------------------------------------------------

--
-- Table structure for table `ppap_master`
--

CREATE TABLE `ppap_master` (
  `id` int(11) NOT NULL,
  `Name` varchar(20) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `ppap_master`
--

INSERT INTO `ppap_master` (`id`, `Name`) VALUES
(1, 'advik'),
(4, 'hello'),
(6, 'add');

-- --------------------------------------------------------

--
-- Table structure for table `sign_in`
--

CREATE TABLE `sign_in` (
  `id` int(20) NOT NULL,
  `user_name` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `Email_id` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `Pass` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `roll` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `plant` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `department` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `plant_head` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `drawing_upload` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `drawing_download` varchar(20) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `sign_in`
--

INSERT INTO `sign_in` (`id`, `user_name`, `Email_id`, `Pass`, `roll`, `plant`, `department`, `plant_head`, `drawing_upload`, `drawing_download`) VALUES
(1, '', 'admin@admin.in', 'admin', '', '', '', '', '', ''),
(2, '', 'admin@gmail.in', 'admin', '', '', '', '', '', ''),
(40, 'sss', 's@gmail.com', 'pass', 'Ppap Admin', 'P3', 'D3', 'Yes', 'Yes', 'Yes');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `add_revision`
--
ALTER TABLE `add_revision`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `document`
--
ALTER TABLE `document`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `email_master`
--
ALTER TABLE `email_master`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `masteradd`
--
ALTER TABLE `masteradd`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `operation_number`
--
ALTER TABLE `operation_number`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `parts`
--
ALTER TABLE `parts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `part_family`
--
ALTER TABLE `part_family`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `part_type`
--
ALTER TABLE `part_type`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ppap_master`
--
ALTER TABLE `ppap_master`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sign_in`
--
ALTER TABLE `sign_in`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `add_revision`
--
ALTER TABLE `add_revision`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `document`
--
ALTER TABLE `document`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `email_master`
--
ALTER TABLE `email_master`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `masteradd`
--
ALTER TABLE `masteradd`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `operation_number`
--
ALTER TABLE `operation_number`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `parts`
--
ALTER TABLE `parts`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `part_family`
--
ALTER TABLE `part_family`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `part_type`
--
ALTER TABLE `part_type`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `ppap_master`
--
ALTER TABLE `ppap_master`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `sign_in`
--
ALTER TABLE `sign_in`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
