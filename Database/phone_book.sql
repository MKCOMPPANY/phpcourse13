-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 24, 2023 at 07:11 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `phone_book`
--

-- --------------------------------------------------------

--
-- Table structure for table `call_numbers`
--

CREATE TABLE `call_numbers` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `family` varchar(255) NOT NULL,
  `phone_number` varchar(15) NOT NULL,
  `address` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

--
-- Dumping data for table `call_numbers`
--

INSERT INTO `call_numbers` (`id`, `name`, `family`, `phone_number`, `address`, `email`) VALUES
(2, 'Ali', 'nazari', '09020654398', 'ghafaei', 'aletha@mail.com'),
(3, 'HAMID', 'REAZA', '09020654398', 'GHAFARI', 'h@gmial.com'),
(6, 'Mukhtar', 'nazari', '09020654303', 'ghafari', 'mukhtan290@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `call_numbers`
--
ALTER TABLE `call_numbers`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `call_numbers`
--
ALTER TABLE `call_numbers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
