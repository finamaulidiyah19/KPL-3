-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 29, 2021 at 08:04 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `registrasi`
--

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(300) NOT NULL,
  `level` varchar(50) NOT NULL,
  `email` varchar(255) NOT NULL,
  `verified` tinyint(4) NOT NULL,
  `token` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `level`, `email`, `verified`, `token`) VALUES
(1, 'admin', '$2y$10$z32K169.vhCs.9r37.UYCeevWdJZtlfsYalTP4oE8GhPZmQgOPL6q', 'admin', 'finanabila19060@gmail.com', 0, ''),
(2, 'nabila', '$2y$10$APt8dZfiTfHnc/TdoN8rB.DBvelOsIgI.6ZObJrqbzCbg0dB4Tos.', 'admin', '', 0, ''),
(3, 'finamnabila', '$2y$10$L/FvwVrWXMYPNP6Y2rzDR..6jqEquqfOSs69Wnn01tE9JXrVc.m9q', 'user', 'finanabila@gmail.com', 0, ''),
(4, 'yuna', '$2y$10$o1P2can5hlFy3EnvwvDhvuTSamjmWp111fQia82QgWF3kvU5RAmFO', 'user', 'finamnabila@gmail.com', 0, '05a735e7648b96263e95885100560985'),
(5, 'fina', '$2y$10$mbyHMyNOiLOkmH7QO9J42u8bLsTRp6kiEwJY5oVB80xs5SAGJej.u', 'user', 'finanabila1906@gmail.com', 1, '4eb544060a977bd905a6dacce9361d06');

-- --------------------------------------------------------

--
-- Table structure for table `user_log`
--

CREATE TABLE `user_log` (
  `id_log` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `waktu` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_log`
--

INSERT INTO `user_log` (`id_log`, `username`, `waktu`) VALUES
(1, 'fina', '2021-09-26 17:02:19'),
(2, 'dunia', '2021-09-26 17:03:26'),
(3, 'dia', '2021-09-26 17:03:39'),
(4, 'fina', '2021-09-26 18:09:43'),
(5, 'fina', '2021-09-26 18:10:45'),
(6, 'fina', '2021-09-26 18:11:48'),
(7, 'fina', '2021-09-26 18:12:30'),
(8, 'fina', '2021-09-26 18:16:04'),
(9, 'fina', '2021-09-26 18:37:00'),
(10, 'fina', '2021-09-26 18:43:20'),
(11, '234', '2021-09-27 10:32:44'),
(12, 'fina', '2021-09-27 12:39:40'),
(13, 'fina', '2021-09-27 12:50:36'),
(14, 'fina', '2021-09-27 12:51:41'),
(15, 'fina', '2021-09-27 12:54:19'),
(16, 'fina', '2021-09-27 12:57:41'),
(17, 'fina', '2021-09-27 12:59:56'),
(18, 'fina', '2021-09-27 13:03:39'),
(19, 'yuni', '2021-09-27 13:09:02'),
(20, 'fina', '2021-09-27 13:11:57'),
(21, 'fina', '2021-09-28 02:20:35'),
(22, 'nabila', '2021-09-28 02:21:59'),
(23, 'fina', '2021-09-28 03:08:23'),
(24, 'finamnabila', '2021-09-28 03:49:41'),
(25, 'finamnabila', '2021-09-28 07:05:16'),
(26, 'finamnabila', '2021-09-28 14:15:47'),
(27, 'finamnabila', '2021-09-28 14:21:45'),
(28, 'finamnabila', '2021-09-28 14:28:43'),
(29, 'yuni', '2021-09-28 14:40:49'),
(30, 'yuni', '2021-09-28 14:42:17'),
(31, 'yuni', '2021-09-28 14:43:53'),
(32, 'yuni', '2021-09-28 14:52:34'),
(33, 'yuni', '2021-09-28 14:56:34'),
(34, 'yuni', '2021-09-28 14:58:33'),
(35, 'yuni', '2021-09-28 15:00:07'),
(36, 'yuni', '2021-09-28 15:03:38'),
(37, 'yuni', '2021-09-28 15:05:04'),
(38, 'yuni', '2021-09-28 15:10:36'),
(39, 'yuni', '2021-09-28 16:26:25'),
(40, 'yuni', '2021-09-28 16:27:56'),
(41, 'yuni', '2021-09-28 16:29:19'),
(42, 'yuni', '2021-09-28 16:34:45'),
(43, 'yuni', '2021-09-28 16:42:37'),
(44, 'yuni', '2021-09-28 16:43:15'),
(45, 'yuni', '2021-09-28 16:44:38'),
(46, 'yuni', '2021-09-28 16:55:39'),
(47, '', '2021-09-28 16:57:08'),
(48, '', '2021-09-28 17:02:27'),
(49, 'yuna', '2021-09-29 02:17:35'),
(50, 'fina', '2021-09-29 02:24:05'),
(51, 'fina', '2021-09-29 02:30:57'),
(52, 'fina', '2021-09-29 02:33:54'),
(53, 'yuna', '2021-09-29 02:51:15'),
(54, 'yuna', '2021-09-29 02:52:26'),
(55, 'yuna', '2021-09-29 03:41:31'),
(56, 'yuna', '2021-09-29 03:43:44'),
(57, 'yuna', '2021-09-29 03:46:11'),
(58, 'yuna', '2021-09-29 03:47:05'),
(59, 'yuna', '2021-09-29 03:52:38'),
(60, 'yuna', '2021-09-29 03:54:08'),
(61, 'yuna', '2021-09-29 04:22:14'),
(62, 'yuna', '2021-09-29 04:23:28'),
(63, 'yuna', '2021-09-29 04:27:19'),
(64, 'yuna', '2021-09-29 04:30:22'),
(65, 'yuna', '2021-09-29 04:41:45'),
(66, 'yuna', '2021-09-29 04:51:02'),
(67, 'yuna', '2021-09-29 04:54:43'),
(68, 'yuna', '2021-09-29 04:56:36'),
(69, 'yuna', '2021-09-29 05:00:00'),
(70, 'yuna', '2021-09-29 05:03:30'),
(71, 'yuna', '2021-09-29 05:16:34'),
(72, 'yuna', '2021-09-29 09:00:23'),
(73, 'yuna', '2021-09-29 09:05:53'),
(74, 'yuna', '2021-09-29 09:09:47'),
(75, 'yuna', '2021-09-29 09:12:39'),
(76, 'fina', '2021-09-29 09:15:17'),
(77, 'fina', '2021-09-29 09:32:31'),
(78, 'fina', '2021-09-29 09:38:32'),
(79, 'fina', '2021-09-29 09:48:31'),
(80, 'fina', '2021-09-29 09:49:14'),
(81, 'fina', '2021-09-29 09:51:11'),
(82, 'fina', '2021-09-29 10:08:38'),
(83, 'yuna', '2021-09-29 10:32:37'),
(84, 'fina', '2021-09-29 10:38:11'),
(85, 'fina', '2021-09-29 10:38:46'),
(86, 'fina', '2021-09-29 15:13:13'),
(87, 'fina', '2021-09-29 15:19:27'),
(88, 'fina', '2021-09-29 15:21:38'),
(89, 'fina', '2021-09-29 15:23:24'),
(90, 'fina', '2021-09-29 15:54:56'),
(91, 'fina', '2021-09-29 16:03:05'),
(92, 'fina', '2021-09-29 16:12:59'),
(93, 'fina', '2021-09-29 16:15:30'),
(94, 'fina', '2021-09-29 16:42:25'),
(95, 'fina', '2021-09-29 17:41:24'),
(96, 'fina', '2021-09-29 17:48:43'),
(97, 'fina', '2021-09-29 17:52:27');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `user_log`
--
ALTER TABLE `user_log`
  ADD PRIMARY KEY (`id_log`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=72;

--
-- AUTO_INCREMENT for table `user_log`
--
ALTER TABLE `user_log`
  MODIFY `id_log` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=98;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
