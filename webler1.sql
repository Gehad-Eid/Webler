-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: May 14, 2022 at 07:49 PM
-- Server version: 5.7.24
-- PHP Version: 8.0.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `webler1`
--

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `id` int(6) NOT NULL,
  `emp_number` varchar(6) NOT NULL,
  `first_name` varchar(20) NOT NULL,
  `last_name` varchar(20) NOT NULL,
  `job_title` varchar(20) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`id`, `emp_number`, `first_name`, `last_name`, `job_title`, `password`) VALUES
(1, '111111', 'rahaf', 'almoqbel', 'Software Engineer', '$2y$10$LYTb85cyyuYx7wW8Djyfcesb3MZzbFf7ABLMFo3YbpOxTPsccK0gC'),
(2, '222222', 'khloud', 'aldughaim', 'Accountant', '$2y$10$1PZBNemHeltjJh/vyhpKO.HjNXW/7NWgOaixpvlRz5iRldS3alQDu'),
(3, '333333', 'shahad', 'aldebasi', 'Cloud Architect', '$2y$10$jP4gUp0Rxc1c5P7hZRTnVe3EyzT1lP8Hfn02k0R0.tLR9q.y5ZnyK'),
(4, '444444', 'gehad', 'eid', 'Cloud Architect', '$2y$10$Y1qKwmi5Rg2KHRuOthlq1ur.bWAoc4IOIJzvZDPMyWAqwID5j6qz2');

-- --------------------------------------------------------

--
-- Table structure for table `manager`
--

CREATE TABLE `manager` (
  `id` int(6) NOT NULL,
  `first_name` varchar(20) NOT NULL,
  `last_name` varchar(20) NOT NULL,
  `username` varchar(10) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `manager`
--

INSERT INTO `manager` (`id`, `first_name`, `last_name`, `username`, `password`) VALUES
(1, 'danah ', 'omar', 'Danah123', '$2y$10$T4DGCzY84CwzsdDUc3Mq1eXsTd98A7PnstDU/KcfbqUX0chTQ871W');

-- --------------------------------------------------------

--
-- Table structure for table `request`
--

CREATE TABLE `request` (
  `id` int(6) NOT NULL,
  `emp_id` int(6) NOT NULL,
  `service_id` int(6) NOT NULL,
  `description` text NOT NULL,
  `attachment1` varchar(255) NOT NULL,
  `attachment2` varchar(255) NOT NULL,
  `status` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `request`
--

INSERT INTO `request` (`id`, `emp_id`, `service_id`, `description`, `attachment1`, `attachment2`, `status`) VALUES
(1, 1, 1, 'i want to leave early for this entire week due to my kids school', '', '', 'In Progress'),
(2, 1, 2, 'i have been working here since ages, i want a Promotion', '1652625059-624ed830edc38.jpg', '', 'Approved'),
(3, 2, 3, 'i want a paid vacation', '', '', 'Decline'),
(4, 2, 1, 'i want to leave early today', '', '', 'Decline'),
(5, 3, 3, 'i want a vacation . because i have been work very hard lately', '', '', 'In Progress'),
(6, 4, 1, 'I am writing to request one week of vacation leave. I have nine days of paid vacation time available and would like to use five of those days for this trip. I will be gone from Saturday, July 9, to Saturday, July 16. I will return to work Monday, July 18', '1652589659-624ed830ed6f3.pdf', '', 'Approved'),
(7, 2, 1, 'I want to request vacation leave from Monday (September 7th) through Wednesday (September 16th). ', '1652590211-vacation-leave-letter.docx', '', 'In Progress');

-- --------------------------------------------------------

--
-- Table structure for table `service`
--

CREATE TABLE `service` (
  `id` int(6) NOT NULL,
  `type` varchar(9) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `service`
--

INSERT INTO `service` (`id`, `type`) VALUES
(1, 'Leave'),
(2, 'Promotion'),
(3, 'Vacation');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `manager`
--
ALTER TABLE `manager`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `request`
--
ALTER TABLE `request`
  ADD PRIMARY KEY (`id`),
  ADD KEY `emp_id` (`emp_id`),
  ADD KEY `service_id` (`service_id`);

--
-- Indexes for table `service`
--
ALTER TABLE `service`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `manager`
--
ALTER TABLE `manager`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `request`
--
ALTER TABLE `request`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `service`
--
ALTER TABLE `service`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `request`
--
ALTER TABLE `request`
  ADD CONSTRAINT `request_ibfk_1` FOREIGN KEY (`emp_id`) REFERENCES `employee` (`id`),
  ADD CONSTRAINT `request_ibfk_2` FOREIGN KEY (`service_id`) REFERENCES `service` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
