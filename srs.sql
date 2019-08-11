-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 11, 2019 at 06:28 AM
-- Server version: 10.1.39-MariaDB
-- PHP Version: 7.1.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `srs`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_user_db`
--

CREATE TABLE `admin_user_db` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_user_db`
--

INSERT INTO `admin_user_db` (`id`, `username`, `password`, `name`) VALUES
(1, 'admin', 'gpn12345', 'ABC');

-- --------------------------------------------------------

--
-- Table structure for table `student_user_db`
--

CREATE TABLE `student_user_db` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `rollno` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `department` varchar(50) NOT NULL,
  `created_by` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student_user_db`
--

INSERT INTO `student_user_db` (`id`, `name`, `rollno`, `email`, `password`, `department`, `created_by`) VALUES
(1, 'Suraj Ahire', 176101, 'surajahire@gpnashik.ac.in', 'suraj12345', 'Computer Technology', 'ABC'),
(5, 'Saurabh Bhalerao', 176103, 'saurabhbhalerao@gpnashik.ac.in', 'saurabh12345', 'Computer Technology', 'ABC');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_user_db`
--
ALTER TABLE `admin_user_db`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student_user_db`
--
ALTER TABLE `student_user_db`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_user_db`
--
ALTER TABLE `admin_user_db`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `student_user_db`
--
ALTER TABLE `student_user_db`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
