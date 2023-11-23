-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Nov 23, 2023 at 04:29 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gramac_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `admin_key` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `user_id`, `admin_key`) VALUES
(1, 1, '0123456789'),
(2, 2, '0123456790'),
(3, 3, '0123456791'),
(4, 4, '0123456792'),
(5, 5, '0123456793');

-- --------------------------------------------------------

--
-- Table structure for table `appointments`
--

CREATE TABLE `appointments` (
  `id` int(11) NOT NULL,
  `vehicle_plate_number` varchar(8) NOT NULL,
  `appointment_date` date NOT NULL,
  `time` varchar(20) NOT NULL,
  `drop_off` text NOT NULL,
  `date_added` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `appointments`
--

INSERT INTO `appointments` (`id`, `vehicle_plate_number`, `appointment_date`, `time`, `drop_off`, `date_added`) VALUES
(1, 'J6SJ5R', '2023-11-09', '08:00AM - 10:00AM', 'drop off', '2023-11-23'),
(2, 'ABC123', '2023-11-08', '12:00AM - 02:00AM', 'wait for', '2023-11-23'),
(3, 'B4J11K', '2023-11-09', '08:00AM - 10:00AM', 'wait for', '2023-11-23');

-- --------------------------------------------------------

--
-- Table structure for table `appointment_times`
--

CREATE TABLE `appointment_times` (
  `id` int(11) NOT NULL,
  `admin_id` int(11) DEFAULT NULL,
  `appointment_time` varchar(18) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `appointment_times`
--

INSERT INTO `appointment_times` (`id`, `admin_id`, `appointment_time`) VALUES
(1, 1, '08:00AM - 10:00AM'),
(2, 2, '08:00AM - 10:00AM'),
(3, 3, '10:00AM - 12:00AM'),
(4, 4, '12:00AM - 02:00AM'),
(5, 5, '02:00AM - 04:00AM'),
(6, 5, '04:00AM - 05:00AM');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` int(11) NOT NULL,
  `vehicle_plate_number` varchar(8) NOT NULL,
  `service` text NOT NULL,
  `progress` text NOT NULL,
  `related_appointment_id` int(11) NOT NULL,
  `job_id` int(11) NOT NULL,
  `date_added` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `vehicle_plate_number`, `service`, `progress`, `related_appointment_id`, `job_id`, `date_added`) VALUES
(1, 'J6SJ5R', 'service 1', 'vehicle not available', 1, 10000, '2023-11-23'),
(2, 'J6SJ5R', 'service 2', 'vehicle not available', 1, 10000, '2023-11-23'),
(3, 'J6SJ5R', 'service 3', 'vehicle not available', 1, 10000, '2023-11-23'),
(4, 'ABC123', 'service 1', 'vehicle not available', 2, 10001, '2023-11-23'),
(5, 'ABC123', 'service 14', 'vehicle not available', 2, 10001, '2023-11-23'),
(6, 'ABC123', 'service 15', 'vehicle not available', 2, 10001, '2023-11-23'),
(7, 'ABC123', 'service 16', 'vehicle not available', 2, 10001, '2023-11-23'),
(8, 'B4J11K', 'service 1', 'vehicle not available', 3, 10002, '2023-11-23'),
(9, 'B4J11K', 'service 2', 'vehicle not available', 3, 10002, '2023-11-23'),
(10, 'B4J11K', 'service 6', 'vehicle not available', 3, 10002, '2023-11-23'),
(11, 'B4J11K', 'service 7', 'vehicle not available', 3, 10002, '2023-11-23'),
(12, 'B4J11K', 'service 8', 'vehicle not available', 3, 10002, '2023-11-23');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `user_type` varchar(10) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone_number` text NOT NULL,
  `password` varchar(255) NOT NULL,
  `date_created` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `first_name`, `last_name`, `user_type`, `email`, `phone_number`, `password`, `date_created`) VALUES
(1, 'Mechanic', 'Number1', 'admin', 'mechanicnumber1@example.com', '8760000000', '$2y$10$XoN9oYG9/R7Zr/yn0T0St.9dxyyIY7C6TWqq09l5ICoTvKAFybleK', '2023-11-22'),
(2, 'Mechanic', 'Number2', 'admin', 'mechanicnumber2@example.com', '8760000001', '$2y$10$f6EGCNLY5NZHkVLtg0HLB.2643gkvvFgKRqJbMCkBi2F/aM18Za8a', '2023-11-22'),
(3, 'Mechanic', 'Number3', 'admin', 'mechanicnumber3@example.com', '8760000002', '$2y$10$zEsLZ3tv2ISH6v0//POPQesq1ppif.QWyYelbxef7F7HaiWcIcHr6', '2023-11-22'),
(4, 'Mechanic', 'Number4', 'admin', 'mechanicnumber4@example.com', '8760000003', '$2y$10$c/O0xHPCGoekJqLM97.g2OtesrJY6pYr6P0Z1sOZe.SFgQ099iiUq', '2023-11-22'),
(5, 'Mechanic', 'Number5', 'admin', 'mechanicnumber5@example.com', '8760000004', '$2y$10$BpV24almGBw9brqQ4qpJqOk8X8XZoiQRkz5irgL3brXAJnz.L5NHe', '2023-11-22'),
(6, 'Saaeen', 'Grant', 'customer', 'asdadsds@gmail.com', '8761112222', '$2y$10$pIsQD8CTlL/eieatKeP.AOIw5zIRh3m4AzanMHiDzldvRYXZsEETy', '2023-11-23');

-- --------------------------------------------------------

--
-- Table structure for table `vehicles`
--

CREATE TABLE `vehicles` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `vehicle_plate_number` varchar(8) NOT NULL,
  `year` int(4) NOT NULL,
  `make` varchar(100) NOT NULL,
  `model` varchar(100) NOT NULL,
  `add_model` varchar(100) NOT NULL,
  `processed` text NOT NULL,
  `in_shop` text NOT NULL,
  `date_added` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `vehicles`
--

INSERT INTO `vehicles` (`id`, `user_id`, `vehicle_plate_number`, `year`, `make`, `model`, `add_model`, `processed`, `in_shop`, `date_added`) VALUES
(1, 6, 'J6SJ5R', 2023, 'Honda', 'Civic', 'Type-R', 'no', 'no', '2023-11-23'),
(2, 6, 'ABC123', 2012, 'Toyota', 'Wish', 'base', 'no', 'no', '2023-11-23'),
(3, 6, 'B4J11K', 2006, 'Mazda', 'Speed3', 'Touring', 'no', 'no', '2023-11-23');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `appointments`
--
ALTER TABLE `appointments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `appointment_times`
--
ALTER TABLE `appointment_times`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `vehicles`
--
ALTER TABLE `vehicles`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `appointments`
--
ALTER TABLE `appointments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `appointment_times`
--
ALTER TABLE `appointment_times`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `vehicles`
--
ALTER TABLE `vehicles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
