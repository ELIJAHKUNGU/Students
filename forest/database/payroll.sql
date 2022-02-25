-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 30, 2021 at 03:52 PM
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
-- Database: `payroll`
--

-- --------------------------------------------------------

--
-- Table structure for table `employees`
--

CREATE TABLE `employees` (
  `e_id` int(11) NOT NULL,
  `e_name` varchar(255) NOT NULL,
  `e_phone` varchar(255) NOT NULL,
  `e_email` varchar(255) NOT NULL,
  `e_idno` varchar(255) NOT NULL,
  `e_age` int(11) NOT NULL,
  `e_address` varchar(255) NOT NULL,
  `e_loans` int(11) NOT NULL,
  `e_status` varchar(255) NOT NULL,
  `e_salary` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `employees`
--

INSERT INTO `employees` (`e_id`, `e_name`, `e_phone`, `e_email`, `e_idno`, `e_age`, `e_address`, `e_loans`, `e_status`, `e_salary`) VALUES
(2, 'ELIJAH KUNGU', '0743770216', 'elijahkungu100@gmail.com', '7878878', 90, '898', 1000, 'Single', 980),
(3, 'JOSHUA NDELEVA', '0728270626', 'joshuandeleva90@gmail.com', '7878878', 89, '898', 1000, 'Married', 56),
(4, 'JOSHUA NDELEVA', '0728270626', 'joshuandeleva90@gmail.com', '7878878', 89, '898', 1000, 'Single', 100000),
(5, 'ELIJAH KUNGU', '0743770216', 'elijahkungu100@gmail.com', '7878878', 22, 'Nairobi Kenya', 500, 'Others', 1000000),
(6, 'Chris', '0728270626', 'joshuandeleva90@gmail.com', '7878878', 90, '898', 1000, 'Others', 10000),
(7, 'Jogn ', '0743770216', 'elijahkungu100@gmail.com', '987787088', 22, 'Nairobi Kenya', 1000, 'Married', 10000);

-- --------------------------------------------------------

--
-- Table structure for table `payslips`
--

CREATE TABLE `payslips` (
  `pay_id` int(11) NOT NULL,
  `e_name` varchar(255) NOT NULL,
  `e_phone` varchar(255) NOT NULL,
  `e_idno` varchar(255) NOT NULL,
  `e_email` varchar(255) NOT NULL,
  `e_salary` varchar(255) NOT NULL,
  `p_day` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `payslips`
--

INSERT INTO `payslips` (`pay_id`, `e_name`, `e_phone`, `e_idno`, `e_email`, `e_salary`, `p_day`) VALUES
(1, 'JOSHUA NDELEVA', '', '', 'joshuandeleva90@gmail.com', '', '2021-05-28'),
(2, 'JOSHUA NDELEVA', '0728270626', '7878878', 'joshuandeleva90@gmail.com', '', '2021-05-28'),
(3, 'JOSHUA NDELEVA', '0728270626', '7878878', 'joshuandeleva90@gmail.com', '-944', '2021-05-28'),
(4, 'JOSHUA NDELEVA', '0728270626', '7878878', 'joshuandeleva90@gmail.com', '-944', '2021-05-28'),
(5, 'JOSHUA NDELEVA', '0728270626', '7878878', 'joshuandeleva90@gmail.com', '99000', '2021-05-28'),
(6, 'ELIJAH KUNGU', '0743770216', '7878878', 'elijahkungu100@gmail.com', '-20', '2021-05-28'),
(7, 'ELIJAH KUNGU', '0743770216', '7878878', 'elijahkungu100@gmail.com', '999500', '2021-05-28'),
(8, 'ELIJAH KUNGU', '0743770216', '7878878', 'elijahkungu100@gmail.com', '-20', '2021-05-29'),
(9, 'Chris', '0728270626', '7878878', 'joshuandeleva90@gmail.com', '9000', '2021-05-29'),
(10, 'ELIJAH KUNGU', '0743770216', '7878878', 'elijahkungu100@gmail.com', '-20', '2021-05-30'),
(11, 'Jogn ', '0743770216', '987787088', 'elijahkungu100@gmail.com', '9000', '2021-05-30');

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
-- Indexes for table `employees`
--
ALTER TABLE `employees`
  ADD PRIMARY KEY (`e_id`);

--
-- Indexes for table `payslips`
--
ALTER TABLE `payslips`
  ADD PRIMARY KEY (`pay_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `employees`
--
ALTER TABLE `employees`
  MODIFY `e_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `payslips`
--
ALTER TABLE `payslips`
  MODIFY `pay_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
