-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 11, 2025 at 08:47 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `jorimnet_healthtest`
--

-- --------------------------------------------------------

--
-- Table structure for table `health-test`
--

CREATE TABLE `health-test` (
  `Id` int(11) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `MobileNo` varchar(50) NOT NULL,
  `Password_hash` varchar(255) NOT NULL,
  `timestamp` date DEFAULT NULL,
  `Usertype` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `health-test`
--

INSERT INTO `health-test` (`Id`, `Name`, `Email`, `MobileNo`, `Password_hash`, `timestamp`, `Usertype`) VALUES
(1, 'Durga S', 'durgasofficial@gmail.com', '9242423424', '123', NULL, 0),
(2, 'Rakshita', 'r@gmail.com', '8283432423', '123', NULL, 0),
(3, 'Mahi T', 'durgasofficial@gmail.com', '9242423424', '123', '2023-12-21', 0),
(4, 'Durga S', 'durgasofficial@gmail.com', '9242423424', '123', '2023-12-21', 1),
(5, 'Durga S', 'durgasofficial@gmail.com', '8131231211', '423', '2023-12-21', 1),
(6, 'Durga S', 'durgasd1711@gmail.com', '8131231211', '543', '2023-12-21', 1),
(7, 'Durga S', 'durgasofficial@gmail.com', '6242242424', '$2y$10$amyMa/RaFQV1zP6P0PFAseP.0SBxuvIxVhW1QnauqpN', '2023-12-21', 1),
(8, '', '', '', '$2y$10$h.Js1PQAXZH2TNiLV.1P9.w/8ufHiMPtjdbCmcjUYWl', '2023-12-21', 1),
(9, 'Mahi T', 'durgasofficial@gmail.com', '6242242424', '$2y$10$QW3WoPkRMRqpwESJvgOBmO7uY00JSlBtmXXmR6LRVXx', '2023-12-21', 1),
(10, 'Durga S', 'durgasd2001@gmail.com', '8183612312', '$2y$10$pFtTz35kHgUuZjby74jBAeVpgB7vXDDs9w.dZusrLactklJDrfdYy', '2023-12-21', 1),
(11, 'Raks S', 'pepslindass3106@gmail.com', '9242423424', '$2y$10$hQUc4EWmMp8J6Z05LqKVFO/RL/nlgNNuJE7lalY3udh7BR3vgWlkq', '2023-12-21', 1),
(12, 'Rakshita', 'raks@gmail.com', '62462424244', '$2y$10$FYmpHtVszZg4HixQ8nEtl.dgKucX1h/.DqJFIicJ.3k1e8R/jjfBO', '2023-12-21', 1),
(13, 'test', 'test@gmail.com', '6246242422', '$2y$10$8XtzojXGvFwUWCBpg4779eEy4l8kxKWINk.2uhB5K5htpK4/7XJY2', '2023-12-21', 1),
(14, 'Devi', 'devi@gmail.com', '62831313', '$2y$10$GzrButGf1h5IgjRrwH9OxO39Y8vo/aotfHae.c6MUp3vAIkpE1lSi', '2023-12-21', 1),
(15, 'Testing', 'testing@gmail.com', '6242242424', '$2y$10$q5TBB9JHDy4w2QiY4jktze58KlyCrBzYRz0tlne.dRem9iNw7jk.a', '2023-12-21', 1),
(16, 'r', 'rl@gmail.com', '9242423424', '$2y$10$.qbRwQBlv8TSbxgTlK5eZe6SzqO3UMUCl0WP8c4bX2L1hFmU7ZExe', '2023-12-21', 1),
(17, 'Durga S', 'durgasd21@gmail.com', '73342442424', '$2y$10$9gnc.HXVxr90xzOGEnsh6.awxTRI5Ebz58Ly1z/hP4Y4rSWlLu6Ji', '2023-12-21', 1),
(18, 'dd', 'dd@gmail.com', '9242423424', '$2y$10$AQvzQyY6g/AvIZRQjEezDucmqeiUWp42HAqBiOJTa.4i.YDQ8bKAC', '2023-12-22', 1),
(19, 'Abarna', 'Abarna@gmail.com', '123456789', '$2y$10$jEh52oQExnjWmn3qOaCImOrIalt.HXqARFDgE7l9vFQwJMPVvH5/2', '2024-11-27', 1),
(20, 'login-test', 'login@gmail.com', '2442424242424', '$2y$10$mAR6Z5k4CBDgkiDCuMQFMOcvRRizQ9S3U/vMBH6JAPm8n.MkLYPfq', '2024-11-27', 1),
(21, '2ndLoginTest', 'test.jorimts@gmail.com', '1234567890', '$2y$10$b0viBJImlM1v7YbZ0grXxeLVC69cuyOUpqSjjckutf50rz03jb6mW', '2024-11-27', 1),
(22, 'Divya', 'divya@gmail.com', '8242489823', '$2y$10$kFT2bhWCl73Nra7xb9D9k.zRjghIZ6TVKjnUtSQhSSHZN3pfYW7pm', '2025-04-11', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `health-test`
--
ALTER TABLE `health-test`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `health-test`
--
ALTER TABLE `health-test`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
