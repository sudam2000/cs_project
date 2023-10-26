-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 26, 2023 at 06:47 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.1.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project1`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `Id` int(11) NOT NULL,
  `Username` varchar(200) DEFAULT NULL,
  `Email` varchar(200) DEFAULT NULL,
  `Age` int(11) DEFAULT NULL,
  `Password` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`Id`, `Username`, `Email`, `Age`, `Password`) VALUES
(10, 'Sudam', 'sudam1268@gmail.com', 22, 'sudam123'),
(11, 'Nimal', 'jdnvjsdv@gmail.com', 24, 'nimal123');

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `Id` int(11) NOT NULL,
  `job_title` varchar(255) NOT NULL,
  `job_description` text DEFAULT NULL,
  `career_level` varchar(255) NOT NULL,
  `company_name` varchar(255) NOT NULL,
  `job_category` varchar(255) NOT NULL,
  `qualifications` varchar(255) NOT NULL,
  `proposed_salary` decimal(10,2) NOT NULL,
  `required_skills` text NOT NULL,
  `application_deadline` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `jobs`
--

INSERT INTO `jobs` (`Id`, `job_title`, `job_description`, `career_level`, `company_name`, `job_category`, `qualifications`, `proposed_salary`, `required_skills`, `application_deadline`) VALUES
(9, 'Engineer', 'A good engineer', 'manager', 'WSO2', 'Computing and IT', 'al', 30000.00, 'ENgineer', '2023-10-25'),
(10, 'teacher', 'teacher', 'manager', 'ddfg', 'Security,uniformed and protective services', 'al', 20000.00, 'ddfgg', '2023-11-03'),
(15, 'lawyer123', 'jnvjdvjvjbjb', 'manager', 'jdnvjbjadb', 'Human Resources', 'diploma', 2000.00, 'jnvjbjbfjb', '2023-10-26');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `Id` int(11) NOT NULL,
  `Username` varchar(200) DEFAULT NULL,
  `Email` varchar(200) DEFAULT NULL,
  `Age` int(11) DEFAULT NULL,
  `Password` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`Id`, `Username`, `Email`, `Age`, `Password`) VALUES
(9, 'Thilina', 'thilina123@gmail.com', 22, 'thilina123'),
(10, 'Kavindu', 'kavindu123@gmail.com', 24, 'kavindu123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
