-- phpMyAdmin SQL Dump
-- version 5.2.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Nov 11, 2026 at 11:14 AM
-- Server version: 8.4.3
-- PHP Version: 8.3.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `date_time_tester`
--

-- --------------------------------------------------------

--
-- Table structure for table `professional`
--

CREATE TABLE `professional` (
  `proid` int NOT NULL,
  `role` text NOT NULL,
  `fname` text NOT NULL,
  `sname` text NOT NULL,
  `roomno` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `professional`
--

INSERT INTO `professional` (`proid`, `role`, `fname`, `sname`, `roomno`) VALUES
(1, 'Doctor', 'Joey', 'Bob', '1'),
(2, 'Doctor', 'Bobby', 'Joe', '2'),
(3, 'Doctor', 'Joe', 'Bob', '3'),
(4, 'Nurse', 'Paige', 'Joy', '1'),
(5, 'Nurse', 'Marie', 'Joy', '2'),
(6, 'Nurse', 'Honey', 'Joy', '3'),
(7, 'Doctor', 'Joey', 'Bob', '1'),
(8, 'Doctor', 'Bobby', 'Joe', '2'),
(9, 'Doctor', 'Joe', 'Bob', '3'),
(10, 'Nurse', 'Paige', 'Joy', '1'),
(11, 'Nurse', 'Marie', 'Joy', '2'),
(12, 'Nurse', 'Honey', 'Joy', '3');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `professional`
--
ALTER TABLE `professional`
  ADD PRIMARY KEY (`proid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `professional`
--
ALTER TABLE `professional`
  MODIFY `proid` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
