-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 03, 2021 at 07:57 AM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 7.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `chama`
--

-- --------------------------------------------------------

--
-- Table structure for table `group`
--

CREATE TABLE `group` (
  `g_id` int(11) NOT NULL,
  `g_name` varchar(255) NOT NULL,
  `g_m` int(11) NOT NULL,
  `g_t` int(11) NOT NULL,
  `date` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `group`
--

INSERT INTO `group` (`g_id`, `g_name`, `g_m`, `g_t`, `date`) VALUES
(1, 'Hello', 0, 2500, '0000-00-00'),
(3, 'Hello', 2500, 78, '2021-04-27'),
(5, 'Hello', 0, 2500, '0000-00-00'),
(6, 'Hello', 2500, 78, '2021-04-27'),
(7, 'Hello', 0, 2500, '0000-00-00'),
(8, 'Hello', 2500, 78, '2021-04-27'),
(9, 'Hello', 0, 2500, '0000-00-00'),
(10, 'Hello', 2500, 78, '2021-04-27');

-- --------------------------------------------------------

--
-- Table structure for table `loans`
--

CREATE TABLE `loans` (
  `l_id` int(11) NOT NULL,
  `m_name` varchar(255) NOT NULL,
  `dob` varchar(244) NOT NULL,
  `chama` varchar(255) NOT NULL,
  `dor` varchar(255) NOT NULL,
  `da` varchar(255) NOT NULL,
  `loan` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `loans`
--

INSERT INTO `loans` (`l_id`, `m_name`, `dob`, `chama`, `dor`, `da`, `loan`) VALUES
(1, 'Elijah', '2021-01-05', 'Men Awards', '2021-06-03', '2021-06-03', 1000),
(2, 'Elijah', '2021-01-05', 'Men Awards', '2021-06-03', '2021-06-03', 1000),
(3, 'Elijah', '2021-01-05', 'Men Awards', '2021-06-03', '2021-06-03', 1000),
(4, 'Elijah', '2021-01-05', 'Men Awards', '2021-06-03', '2021-06-03', 1000),
(5, 'Elijah', '2021-01-05', 'Men Awards', '2021-06-03', '2021-06-03', 20000),
(6, 'Elijah', '2021-01-05', 'Men Awards', '2021-06-03', '2021-06-03', 10000);

-- --------------------------------------------------------

--
-- Table structure for table `members`
--

CREATE TABLE `members` (
  `m_id` int(11) NOT NULL,
  `m_name` varchar(255) NOT NULL,
  `sex` varchar(255) NOT NULL,
  `dob` varchar(255) NOT NULL,
  `m_county` varchar(255) NOT NULL,
  `m_status` varchar(255) NOT NULL,
  `chama` varchar(255) NOT NULL,
  `dor` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `members`
--

INSERT INTO `members` (`m_id`, `m_name`, `sex`, `dob`, `m_county`, `m_status`, `chama`, `dor`) VALUES
(1, 'Elijah', 'female', '2021-01-05', 'Muranga', 'married', 'Men Awards', '2021-06-03'),
(2, 'Elijah', 'female', '2021-01-05', 'Muranga', 'married', 'Men Awards', '2021-06-03'),
(3, 'Elijah', 'female', '2021-01-05', 'Muranga', 'married', 'Men Awards', '2021-06-03'),
(4, 'Elijah', 'female', '2021-01-05', 'Muranga', 'married', 'Men Awards', '2021-06-03');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `username`, `email`, `password`) VALUES
(1, 'elijahkungu100@gmail.com', 'elijahkungu100@gmail.com', '12345'),
(2, '', 'elijahkungu100@gmail.com', '12345'),
(3, '', 'elijahkungu100@gmail.com', '12345'),
(4, '', 'elijahkungu100@gmail.com', '12345'),
(5, '', 'elijahkungu100@gmail.com', '12345'),
(6, '', '', ''),
(7, '', 'elijahkungu100@gmail.com', '12345'),
(8, 'Admin', 'admin@gmail.com', '12345');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `group`
--
ALTER TABLE `group`
  ADD PRIMARY KEY (`g_id`);

--
-- Indexes for table `loans`
--
ALTER TABLE `loans`
  ADD PRIMARY KEY (`l_id`);

--
-- Indexes for table `members`
--
ALTER TABLE `members`
  ADD PRIMARY KEY (`m_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `group`
--
ALTER TABLE `group`
  MODIFY `g_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `loans`
--
ALTER TABLE `loans`
  MODIFY `l_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `members`
--
ALTER TABLE `members`
  MODIFY `m_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
