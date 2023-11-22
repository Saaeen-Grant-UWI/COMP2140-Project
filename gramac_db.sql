-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Nov 22, 2023 at 10:26 AM
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
(1, 'J6SJKR', '2023-11-02', '12:00AM - 02:00AM', 'wait for', '2023-11-22'),
(2, 'ABC123', '2023-11-23', '10:00AM - 12:00AM', 'wait for', '2023-11-22');

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
(1, 'J6SJKR', 'service 1', 'vehicle not available', 1, 10000, '2023-11-22'),
(2, 'J6SJKR', 'service 2', 'vehicle not available', 1, 10000, '2023-11-22'),
(3, 'J6SJKR', 'service 3', 'vehicle not available', 1, 10000, '2023-11-22'),
(4, 'J6SJKR', 'service 4', 'vehicle not available', 1, 10000, '2023-11-22'),
(5, 'ABC123', 'service 14', 'vehicle not available', 2, 10001, '2023-11-22'),
(6, 'ABC123', 'service 15', 'vehicle not available', 2, 10001, '2023-11-22'),
(7, 'ABC123', 'service 16', 'vehicle not available', 2, 10001, '2023-11-22');

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
(1, 'Saaeen', 'Grant', 'customer', 'saaeengrant.uwi@gmail.com', '8760000000', '$2y$10$39N0x6FBhhEnL2v8JgKNYuQV8t7/4CcsCkRjJB/sRecpUIDKpFWX2', '2023-11-21'),
(2, 'Saaeen', 'Grant', 'admin', 'official.saaeengrant@gmail.com', '8760000001', '$2y$10$i7q1DnfpbuCUY/OM7f3NSumbKqBccFfZ/C1bF78zBeJ5vlJsnOMYS', '2023-11-21');

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
(1, 2, 'J6SJKR', 2023, 'Honda', 'Civic', 'Type-R', 'no', 'no', '2023-11-22'),
(2, 2, 'ABC123', 2012, 'Toyota', 'Wish', 'base', 'no', 'no', '2023-11-22');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `appointments`
--
ALTER TABLE `appointments`
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
-- AUTO_INCREMENT for table `appointments`
--
ALTER TABLE `appointments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `vehicles`
--
ALTER TABLE `vehicles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
