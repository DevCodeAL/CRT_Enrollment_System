-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 29, 2024 at 02:21 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `guest`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `user` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `user`, `password`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `admin-gapan`
--

CREATE TABLE `admin-gapan` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin-gapan`
--

INSERT INTO `admin-gapan` (`id`, `username`, `password`) VALUES
(0, 'gapan', 'gapan');

-- --------------------------------------------------------

--
-- Table structure for table `admin-guimba`
--

CREATE TABLE `admin-guimba` (
  `id` int(11) NOT NULL,
  `user` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin-guimba`
--

INSERT INTO `admin-guimba` (`id`, `user`, `password`) VALUES
(0, 'guimba', 'guimba');

-- --------------------------------------------------------

--
-- Table structure for table `admin-sanjose`
--

CREATE TABLE `admin-sanjose` (
  `id` int(11) NOT NULL,
  `user` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin-sanjose`
--

INSERT INTO `admin-sanjose` (`id`, `user`, `password`) VALUES
(0, 'sanjose', 'sanjose');

-- --------------------------------------------------------

--
-- Table structure for table `college`
--

CREATE TABLE `college` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `Classified` varchar(100) NOT NULL,
  `year_status` varchar(100) NOT NULL,
  `course` varchar(100) NOT NULL,
  `enrollment_status` varchar(100) NOT NULL,
  `student_number` varchar(100) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `middle_name` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `name_extension` varchar(100) NOT NULL,
  `date_birth` varchar(100) NOT NULL,
  `house_number` varchar(100) NOT NULL,
  `barangay` varchar(100) NOT NULL,
  `municipal` varchar(100) NOT NULL,
  `province` varchar(100) NOT NULL,
  `zipcode` varchar(100) NOT NULL,
  `sex` varchar(100) NOT NULL,
  `religion` varchar(100) NOT NULL,
  `height` varchar(100) NOT NULL,
  `weigth` varchar(100) NOT NULL,
  `civil_status` varchar(100) NOT NULL,
  `cellhone_number` varchar(100) NOT NULL,
  `facebook_account` varchar(100) NOT NULL,
  `TotalAnnualGrossIncome` varchar(100) NOT NULL,
  `elementary` varchar(100) NOT NULL,
  `year_graduated` varchar(100) NOT NULL,
  `high_school` varchar(100) NOT NULL,
  `year_graduated_hs` varchar(100) NOT NULL,
  `collegiate` varchar(100) NOT NULL,
  `admission` varchar(100) NOT NULL,
  `parent` varchar(100) NOT NULL,
  `contact_number_parent` varchar(100) NOT NULL,
  `branch` varchar(100) NOT NULL,
  `date_time` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `college`
--

INSERT INTO `college` (`id`, `username`, `password`, `email`, `Classified`, `year_status`, `course`, `enrollment_status`, `student_number`, `firstname`, `middle_name`, `lastname`, `name_extension`, `date_birth`, `house_number`, `barangay`, `municipal`, `province`, `zipcode`, `sex`, `religion`, `height`, `weigth`, `civil_status`, `cellhone_number`, `facebook_account`, `TotalAnnualGrossIncome`, `elementary`, `year_graduated`, `high_school`, `year_graduated_hs`, `collegiate`, `admission`, `parent`, `contact_number_parent`, `branch`, `date_time`) VALUES
(16, 'user', '$2y$10$Ow5mARQDQb8TVcwJXfJWeOxb9uHK7o6qmftKuZl4C6cLcoqLpHb6G', 'abadleomar875@gmail.com', 'New Student', '2nd Year College', 'BS in Information Technology', 'Regular Student', 'N/A', 'Leomar', 'Tigolo', 'Abad', 'Leomar Abad', '2024-04-28', '05628', 'Salagusog', 'Cuyapo', 'Nueva Ecija', '3117', 'Regular Student', 'Roman Catholic ', '5\'9', '68', '1st Year College', '09169323242', 'cfdvdvdvvd', '32432344', 'Salagusog', '2006', 'Salagusog', '2013', 'CRT', '2024', 'Jane Doe', '09169323242', 'Guimba', '2024-04-28T20:22'),
(17, 'user', '$2y$10$AF4Tfb1ESTMLwwygr2e6SuJkCBaMpkdTi.RIR2XJwjYkS1WDq/prS', 'marquezamalia05@gmail.com', 'New Student', '1st Year College', 'BS in Information Technology', 'Regular Student', 'N/A', 'Leomar', 'Tigolo', 'Abad', 'Leomar Abad', '2024-04-28', '05628', 'Salagusog', 'Cuyapo', 'Nueva Ecija', '3117', 'Regular Student', 'Roman Catholic ', '5', '68', '1st Year College', '09169323242', 'cfdvdvdvvd', '32432344', 'Salagusog', '2006', 'Salagusog', '2013', 'CRT', '2024', 'Jane Doe', '09169323242', 'Guimba', '2024-04-28T20:25');

-- --------------------------------------------------------

--
-- Table structure for table `shs_db`
--

CREATE TABLE `shs_db` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `LRN_number` varchar(100) NOT NULL,
  `date_birth` varchar(100) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `middle_name` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `name_extension` varchar(100) NOT NULL,
  `grade` varchar(100) NOT NULL,
  `branch` varchar(100) NOT NULL,
  `strand` varchar(100) NOT NULL,
  `mothers_name` varchar(100) NOT NULL,
  `fathers_name` varchar(100) NOT NULL,
  `parent_contact_number` varchar(100) NOT NULL,
  `last_school_attendent` varchar(100) NOT NULL,
  `house_number` varchar(100) NOT NULL,
  `barangay` varchar(100) NOT NULL,
  `municipal` varchar(100) NOT NULL,
  `province` varchar(100) NOT NULL,
  `zipcode` varchar(100) NOT NULL,
  `sex` varchar(100) NOT NULL,
  `religion` varchar(100) NOT NULL,
  `civil_status` varchar(100) NOT NULL,
  `cellphone_number` varchar(100) NOT NULL,
  `fb_account_name` varchar(100) NOT NULL,
  `parent` varchar(100) NOT NULL,
  `date_time` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `college`
--
ALTER TABLE `college`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `shs_db`
--
ALTER TABLE `shs_db`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `college`
--
ALTER TABLE `college`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `shs_db`
--
ALTER TABLE `shs_db`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
