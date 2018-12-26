-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Dec 26, 2018 at 10:08 AM
-- Server version: 5.7.23
-- PHP Version: 7.2.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `iris_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `incident_reported`
--

CREATE TABLE `incident_reported` (
  `ID` bigint(20) UNSIGNED NOT NULL,
  `ir_id` varchar(55) NOT NULL,
  `user_id` varchar(55) NOT NULL,
  `incident_type` enum('fire','car-crash','medical','manual') NOT NULL,
  `subject` varchar(150) NOT NULL,
  `description` text NOT NULL,
  `ir_photo_id` varchar(55) NOT NULL,
  `lat` varchar(30) NOT NULL,
  `lng` varchar(30) NOT NULL,
  `status` enum('responded','ignored','completed') NOT NULL,
  `created_date` varchar(20) NOT NULL,
  `created_time` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `incident_reported`
--

INSERT INTO `incident_reported` (`ID`, `ir_id`, `user_id`, `incident_type`, `subject`, `description`, `ir_photo_id`, `lat`, `lng`, `status`, `created_date`, `created_time`) VALUES
(1, '1234567890', '1234567', 'fire', 'Car Accident', 'Need help for this incident', 'SDJGSAHDAS344234', '14.137703', '121.1713354', 'responded', '2017-11-14', '12:12 AM'),
(2, 'rasdasdasd', '1234567', 'car-crash', 'Fire Incident', 'Need help for this', 'SDJGSAHDAS344234', '14.1363855', '121.1760325', 'responded', '2017-11-14', '12:12 AM'),
(3, 'dsadas', '1234567', 'medical', 'Fire Incident', 'Need help for this', 'SDJGSAHDAS344234', '14.17501296', '121.22598231', 'responded', '2017-11-14', '12:12 AM'),
(4, 'sddd', '1234567', 'manual', 'Fire Incident', 'Need help for this', 'SDJGSAHDAS344234', '14.15374018', '121.2535172', 'responded', '2017-11-14', '12:12 AM');

-- --------------------------------------------------------

--
-- Table structure for table `incident_reported_attached_photo`
--

CREATE TABLE `incident_reported_attached_photo` (
  `ID` bigint(20) UNSIGNED NOT NULL,
  `ir_id` varchar(55) NOT NULL,
  `photo_url` varchar(255) NOT NULL,
  `created_date` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `incident_reported_attached_photo`
--

INSERT INTO `incident_reported_attached_photo` (`ID`, `ir_id`, `photo_url`, `created_date`) VALUES
(1, '123456789012312312', 'chair.jpg', ''),
(2, '123456789012312312', 'chair.jpg', '');

-- --------------------------------------------------------

--
-- Table structure for table `user_accounts`
--

CREATE TABLE `user_accounts` (
  `ID` bigint(20) UNSIGNED NOT NULL,
  `user_id` varchar(55) NOT NULL,
  `username` varchar(55) NOT NULL,
  `password` varchar(55) NOT NULL,
  `fname` varchar(30) NOT NULL,
  `mname` varchar(30) NOT NULL,
  `lname` varchar(30) NOT NULL,
  `address` text NOT NULL,
  `contact_number` varchar(11) NOT NULL,
  `role` enum('admin','client') NOT NULL,
  `profile_photo` varchar(200) NOT NULL,
  `created_date` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user_accounts`
--

INSERT INTO `user_accounts` (`ID`, `user_id`, `username`, `password`, `fname`, `mname`, `lname`, `address`, `contact_number`, `role`, `profile_photo`, `created_date`) VALUES
(1, '1312312312', 'admin', '1234', 'Admin', 'Admin', 'Admin', 'Manila', '09278977593', 'admin', '', '2018-12-12'),
(2, '1234567', 'mark', '1234', 'mark', 'mark', 'mark', 'Manila', '09278977593', 'client', '', '2018-12-12');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `incident_reported`
--
ALTER TABLE `incident_reported`
  ADD UNIQUE KEY `ID` (`ID`);

--
-- Indexes for table `incident_reported_attached_photo`
--
ALTER TABLE `incident_reported_attached_photo`
  ADD UNIQUE KEY `ID` (`ID`);

--
-- Indexes for table `user_accounts`
--
ALTER TABLE `user_accounts`
  ADD UNIQUE KEY `ID` (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `incident_reported`
--
ALTER TABLE `incident_reported`
  MODIFY `ID` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `incident_reported_attached_photo`
--
ALTER TABLE `incident_reported_attached_photo`
  MODIFY `ID` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user_accounts`
--
ALTER TABLE `user_accounts`
  MODIFY `ID` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
