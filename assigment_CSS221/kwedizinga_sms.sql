-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 09, 2026 at 04:21 PM
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
-- Database: `kwedizinga_sms`
--

-- --------------------------------------------------------

--
-- Table structure for table `attendance`
--

CREATE TABLE `attendance` (
  `id` int(11) NOT NULL,
  `student_id` int(11) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `status` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `attendance`
--

INSERT INTO `attendance` (`id`, `student_id`, `date`, `status`) VALUES
(1, 1, '2026-06-06', 'Present'),
(2, 2, '2026-06-06', 'Absent'),
(3, 3, '2026-06-06', 'Absent'),
(4, 4, '2026-06-06', 'Present'),
(5, 5, '2026-06-06', 'Absent'),
(6, 7, '2026-06-06', 'Absent'),
(7, 12, '2026-06-06', 'Present'),
(8, 14, '2026-06-08', 'Absent'),
(9, 16, '2026-06-08', 'Present');

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` int(4) NOT NULL,
  `name` varchar(433) NOT NULL,
  `class` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `name`, `class`) VALUES
(1, 'amina', 'form two'),
(2, 'Ester', 'form two'),
(3, 'abdul juma issa', 'form one'),
(4, 'yohana', 'form one'),
(5, 'asha ', 'form two'),
(6, 'asha ', 'form two'),
(7, 'happyness', 'Form Four'),
(8, '', 'Form One'),
(9, '', 'Form One'),
(10, '', 'Form One'),
(11, '', 'Form One'),
(12, 'wema', 'Form Two'),
(13, 'Ester', 'Form One'),
(14, 'yusuf', 'Form Two'),
(15, 'mshefa', 'Form Two'),
(16, 'alberto', 'Form Four');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(50) NOT NULL,
  `username` varchar(56) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`) VALUES
(1, 'asha', '$2y$10$jT1eUKS71gCKBe/bvUZLaOGHXLOhBk7S.6IvV/tAHqHOLoAUClnbO'),
(2, 'asha', '$2y$10$yyZMx4rHfNba8xVmuG3ztuiz/EWSJVbH.29LDO4ul2w/8RB81Je9W'),
(3, '', '$2y$10$mvxFc6E.iq3a3GGZT2aXF.DWuVynZT4/Pn8Qek1IFdpvyalev.3Je'),
(4, '', '$2y$10$4DP4cvKiooR6UtEZP8FCeOkhWAYxvPVyVv7/VHUVPIWb3CJ6WNchC'),
(5, '', '$2y$10$YuEmdY7F5iIYi3t5Z6Vvdeha7SkKO18EejfxznTio/Bt80d0SlyL6'),
(6, '', '$2y$10$SeidzkJrmg4i95700MiUWOTjceVHt0/OPJA7xde4YOBlePcY1KCsS'),
(7, 'ishia', '$2y$10$cB6iyPo2rctaW7UMok375O90/cNDOc6NW21bFHYud4w.DQ3WogBI2'),
(8, 'ishia', '$2y$10$q6SXYaH9Ae2SHf3GTV5QOeKk8XdKPFwgLLcxqJZtV9lVTh0W/Zqem'),
(9, 'aneth', '$2y$10$.nrtgbiHe17nr72NLZW8rOwk2LlpQc9fz3b1tJJT/tEMlDXsC0XkC'),
(10, '', '$2y$10$wqfY95aEU5QrHeWlJemTUuFXXQFoACYEfC8Bbar8BmoBfwluEuLn6'),
(11, '', '$2y$10$8UtA9Yh2lIcxucZS27.UGeAGjU8Ty7P4PvSejya01k6eY/Luv2tje'),
(12, 'juma', '$2y$10$K/W2pC1KlTdJhKcQWfMjVOhg7AR1B6yxQMrx8HAfZ78TIKDF5FX1i'),
(13, 'aneth', '$2y$10$aMWUF.5oJNX5m9G0oAkMb.l3wRtM8EAolgRCv8uTqg1UEF13Zk/XG'),
(14, 'agatha', '$2y$10$YDAOiX2TL25Psdr47zD6oeEsU6K7Yjs2K5CFzvCKQmEHE1875iZu2'),
(15, 'ester', '$2y$10$EVt8ZkH7FXStMcoXC1wfoucdVcxf9Ktv4.2vz62PaKGQCEdQH.jBq'),
(16, 'aneth', '$2y$10$2CxFFMCMLr7lsq51rLUQ2.nfjHBjRQ/RU6AqNhmQm0z2l1eVv9L06'),
(17, 'juma', '$2y$10$RVFZPFPO8xEgSAbIwoeHAuQiDspHj5Gbw.P7CWtrROH7EmlUU/ifO'),
(18, 'juma', '$2y$10$e3dIgHbkyWbjKoTNY.MDIu8bI75.eR7s3nK8J5fFFCI7JvgdG4LgW');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `attendance`
--
ALTER TABLE `attendance`
  ADD PRIMARY KEY (`id`),
  ADD KEY `student_id` (`student_id`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `attendance`
--
ALTER TABLE `attendance`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `attendance`
--
ALTER TABLE `attendance`
  ADD CONSTRAINT `attendance_ibfk_1` FOREIGN KEY (`student_id`) REFERENCES `students` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
