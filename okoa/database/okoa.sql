-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 02, 2021 at 06:41 PM
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
-- Database: `okoa`
--

-- --------------------------------------------------------

--
-- Table structure for table `refugees`
--

CREATE TABLE `refugees` (
  `r_id` int(11) NOT NULL,
  `c_id` int(11) NOT NULL,
  `r_name` varchar(255) NOT NULL,
  `sex` varchar(255) NOT NULL,
  `dob` varchar(255) NOT NULL,
  `r_status` varchar(255) NOT NULL,
  `r_nationality` varchar(255) NOT NULL,
  `disability` varchar(255) NOT NULL,
  `reason` varchar(255) NOT NULL,
  `r_date` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `refugees`
--

INSERT INTO `refugees` (`r_id`, `c_id`, `r_name`, `sex`, `dob`, `r_status`, `r_nationality`, `disability`, `reason`, `r_date`) VALUES
(1, 3453, 'ELIJAH KUNGU', 'female', '2021-06-02', 'single', 'uganda', 'no', 'Political Instability', '2021-06-01'),
(8, 3453, 'Dan Kipruto', 'male', '2002-02-25', 'single', 'uganda', 'others', 'Political Instability', '2021-06-01'),
(9, 3453, 'Dan Kipruto', 'male', '2010-06-14', 'married', 'kenya', 'yes', 'born at camp', '2021-06-02');

-- --------------------------------------------------------

--
-- Table structure for table `report_refugee`
--

CREATE TABLE `report_refugee` (
  `report_id` int(11) NOT NULL,
  `camp_id` int(11) NOT NULL,
  `re_name` varchar(255) NOT NULL,
  `tent_name` varchar(255) NOT NULL,
  `r_date` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `report_refugee`
--

INSERT INTO `report_refugee` (`report_id`, `camp_id`, `re_name`, `tent_name`, `r_date`) VALUES
(1, 1, 'Hello  World', 'Tent A', '2021-06-01'),
(3, 3453, 'ELIJAH KUNGU', 'Tent C', '2021-06-01'),
(7, 3453, 'ELIJAH KUNGU', 'Tent B', '2021-06-01'),
(8, 3453, 'Dan Kipruto', 'Tent A', '2021-06-01'),
(9, 3453, 'Dan Kipruto', 'Tent B', '2021-06-02');

-- --------------------------------------------------------

--
-- Table structure for table `report_supplier`
--

CREATE TABLE `report_supplier` (
  `sr_id` int(11) NOT NULL,
  `sc_id` int(11) NOT NULL,
  `s_name` varchar(255) NOT NULL,
  `s_item` varchar(255) NOT NULL,
  `s_quantity` varchar(255) NOT NULL,
  `tent_name` varchar(255) NOT NULL,
  `date_d` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `report_supplier`
--

INSERT INTO `report_supplier` (`sr_id`, `sc_id`, `s_name`, `s_item`, `s_quantity`, `tent_name`, `date_d`) VALUES
(4, 87987, 'ELIJAH KKK', 'RICE', '400', 'Tent B', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `suppliers`
--

CREATE TABLE `suppliers` (
  `s_id` int(11) NOT NULL,
  `sc_id` varchar(11) NOT NULL,
  `s_name` varchar(255) NOT NULL,
  `s_item` varchar(255) NOT NULL,
  `s_quantity` varchar(255) NOT NULL,
  `s_day` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `suppliers`
--

INSERT INTO `suppliers` (`s_id`, `sc_id`, `s_name`, `s_item`, `s_quantity`, `s_day`) VALUES
(7, '87987', 'MANJI LTD', 'Cabbage', '400', '0000-00-00'),
(8, '87987', 'ELIJAH KKK', 'RICE', '400', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `tent`
--

CREATE TABLE `tent` (
  `t_id` int(11) NOT NULL,
  `te_id` int(11) NOT NULL,
  `t_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tent`
--

INSERT INTO `tent` (`t_id`, `te_id`, `t_name`) VALUES
(1, 845867, 't_name'),
(2, 7687676, 'Hello'),
(3, 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `names` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `names`, `email`, `password`) VALUES
(1, 'Admin', 'admin@gmail.com', 'admin'),
(2, 'ELIJAH KUNGU', 'elijahkungu100@gmail.com', '123'),
(3, 'payroll', 'payroll@mail.com', '123'),
(4, 'Athman', 'makoti@gmail.cm', '1234'),
(5, 'Athman', 'makoti@gmail.cm', '123'),
(6, 'Athman', 'makoti@gmail.cm', '1234');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `refugees`
--
ALTER TABLE `refugees`
  ADD PRIMARY KEY (`r_id`);

--
-- Indexes for table `report_refugee`
--
ALTER TABLE `report_refugee`
  ADD PRIMARY KEY (`report_id`);

--
-- Indexes for table `report_supplier`
--
ALTER TABLE `report_supplier`
  ADD PRIMARY KEY (`sr_id`);

--
-- Indexes for table `suppliers`
--
ALTER TABLE `suppliers`
  ADD PRIMARY KEY (`s_id`);

--
-- Indexes for table `tent`
--
ALTER TABLE `tent`
  ADD PRIMARY KEY (`t_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `refugees`
--
ALTER TABLE `refugees`
  MODIFY `r_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `report_refugee`
--
ALTER TABLE `report_refugee`
  MODIFY `report_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `report_supplier`
--
ALTER TABLE `report_supplier`
  MODIFY `sr_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `suppliers`
--
ALTER TABLE `suppliers`
  MODIFY `s_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tent`
--
ALTER TABLE `tent`
  MODIFY `t_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
