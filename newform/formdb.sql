-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 09, 2023 at 05:39 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.0.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `formdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(255) NOT NULL,
  `dateofbirth` date NOT NULL,
  `phone` varchar(16) NOT NULL,
  `url` varchar(255) NOT NULL,
  `message` text NOT NULL,
  `gender` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `dateofbirth`, `phone`, `url`, `message`, `gender`) VALUES
(58, 'Ismi Putri', 'ismi@gmail.com', '2023-05-09', '081339662906', 'https://www.scribd.com/document/410650220/Job-Description-Panitia-Dan-Pembimbing-PKL-2019', 'makan', 'female'),
(59, 'Lori unmatche', 'lori@gmail.com', '2023-05-23', '081339662906', 'https://travelmak.000webhostapp.com/', 'mandi', 'male'),
(60, 'Lori empty', 'lori@gmail.com', '2023-05-25', '081339662906', 'https://travelmak.000webhostapp.com/', 'empty ini captchanya', 'male'),
(61, 'lori captcha new', 'lori@gmail.com', '2023-06-01', '081339662906', 'https://travelmak.000webhostapp.com/', 'c ecjer', 'male'),
(62, 'lori error', 'lori@gmail.com', '2023-05-17', '081339662906', 'https://id.pinterest.com/pin/580331101986894636/', ' cvywvc', 'male');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
