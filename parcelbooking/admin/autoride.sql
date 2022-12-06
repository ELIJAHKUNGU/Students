-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Apr 21, 2022 at 01:21 AM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `autoride`
--

-- --------------------------------------------------------

--
-- Table structure for table `people_people`
--

CREATE TABLE `people_people` (
  `request_id` int(11) NOT NULL,
  `user_id` int(20) NOT NULL,
  `idNo` int(11) NOT NULL,
  `username` varchar(200) NOT NULL,
  `pickup_location` varchar(200) NOT NULL,
  `date_m` varchar(200) NOT NULL,
  `time_t` varchar(200) NOT NULL,
  `model` varchar(200) NOT NULL,
  `no_seats` int(20) NOT NULL,
  `seats` varchar(20) NOT NULL DEFAULT '0',
  `status` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `people_people`
--

INSERT INTO `people_people` (`request_id`, `user_id`, `idNo`, `username`, `pickup_location`, `date_m`, `time_t`, `model`, `no_seats`, `seats`, `status`) VALUES
(2, 4, 786868, 'JOHN DOE', 'Mombasa-Nairobi', '5555-09-12', '12:25', 'Easy Coach', 5, '2,4', 1),
(11, 4, 786868, 'JOHN DOE', 'Mombasa-Kisumu', '2022-04-03', '04:55', 'Easy Coach', 2, '0', 0);

-- --------------------------------------------------------

--
-- Table structure for table `people_requests`
--

CREATE TABLE `people_requests` (
  `request_id` int(11) NOT NULL,
  `user_id` varchar(200) NOT NULL,
  `username` varchar(200) NOT NULL,
  `parcel_idno` varchar(200) NOT NULL,
  `pickup_location` varchar(200) NOT NULL,
  `date_m` varchar(200) NOT NULL,
  `time_t` varchar(200) NOT NULL,
  `model` varchar(222) NOT NULL,
  `weight` int(20) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `people_requests`
--

INSERT INTO `people_requests` (`request_id`, `user_id`, `username`, `parcel_idno`, `pickup_location`, `date_m`, `time_t`, `model`, `weight`, `status`) VALUES
(8, '4', 'JOHN DOE', '#hfd3434', 'Mombasa-Nairobi', '2022-06-05', '05:06', 'Easy Coach', 4, 1),
(9, '4', 'JOHN DOE', '#hfd3434', 'Mombasa-Nairobi', '2022-07-08', '09:56', 'Express', 6, 0);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `username` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `phoneNumber` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `username`, `email`, `phoneNumber`, `password`, `status`) VALUES
(4, 'JOHN DOE', 'elijahkungu100@gmail.com', '0743770216', 'b', 0),
(5, 'admin', 'admin@gmail.com', 'admin', 'admin', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `people_people`
--
ALTER TABLE `people_people`
  ADD PRIMARY KEY (`request_id`);

--
-- Indexes for table `people_requests`
--
ALTER TABLE `people_requests`
  ADD PRIMARY KEY (`request_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `people_people`
--
ALTER TABLE `people_people`
  MODIFY `request_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `people_requests`
--
ALTER TABLE `people_requests`
  MODIFY `request_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
