-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Mar 08, 2024 at 04:21 AM
-- Server version: 8.2.0
-- PHP Version: 8.2.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db`
--

-- --------------------------------------------------------

--
-- Table structure for table `flights`
--

DROP TABLE IF EXISTS `flights`;
CREATE TABLE IF NOT EXISTS `flights` (
  `flight_number` int NOT NULL,
  `departure_location` text,
  `destination_location` text,
  `departure_time` datetime DEFAULT NULL,
  `arrival_time` datetime DEFAULT NULL,
  `airline` text,
  `price` int DEFAULT NULL,
  `available_seats` int DEFAULT NULL,
  PRIMARY KEY (`flight_number`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `flights`
--

INSERT INTO `flights` (`flight_number`, `departure_location`, `destination_location`, `departure_time`, `arrival_time`, `airline`, `price`, `available_seats`) VALUES
(3, 'madav', 'puttur', '2024-02-28 11:52:00', '2024-02-28 14:52:00', 'indigo', 55000, 23),
(5, 'Guthigaru', 'Puttur', '2024-02-01 10:57:00', '2024-02-16 10:57:00', 'Safari', 55000, 55),
(7, 'madav', 'Puttur', '2024-02-28 15:18:00', '2024-02-28 16:18:00', 'indigo', 55000, 55);

-- --------------------------------------------------------

--
-- Table structure for table `passenger`
--

DROP TABLE IF EXISTS `passenger`;
CREATE TABLE IF NOT EXISTS `passenger` (
  `flight_id` int NOT NULL,
  `username` varchar(30) NOT NULL,
  `firstname` varchar(30) DEFAULT NULL,
  `lastname` varchar(30) DEFAULT NULL,
  `gender` text,
  `age` int DEFAULT NULL,
  `nationality` text,
  `phoneno` bigint DEFAULT NULL,
  `adhaarno` varchar(15) NOT NULL,
  PRIMARY KEY (`adhaarno`,`username`),
  KEY `username` (`username`),
  KEY `task1` (`flight_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `passenger`
--

INSERT INTO `passenger` (`flight_id`, `username`, `firstname`, `lastname`, `gender`, `age`, `nationality`, `phoneno`, `adhaarno`) VALUES
(5, 'shashanka', 'Shashanka', 'B S', 'Male', 20, 'Indian', 6321597456, '54657568687'),
(3, 'catwalk', 'tushar', 'd shetty', 'male', 65, 'hjghg', 244544542342, '98674653442');

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

DROP TABLE IF EXISTS `payment`;
CREATE TABLE IF NOT EXISTS `payment` (
  `flight_id` int NOT NULL,
  `username` varchar(30) DEFAULT NULL,
  `firstname` varchar(30) DEFAULT NULL,
  `lastname` varchar(30) DEFAULT NULL,
  `accountno` varchar(30) DEFAULT NULL,
  `price` int DEFAULT NULL,
  `phoneno` bigint NOT NULL,
  PRIMARY KEY (`flight_id`,`phoneno`),
  KEY `username` (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`flight_id`, `username`, `firstname`, `lastname`, `accountno`, `price`, `phoneno`) VALUES
(3, 'catwalk', 'tushar', 'd shetty', 'hjghghjg', 55000, 244544542342),
(5, 'shashanka', 'Shashanka', 'B S', '57567565866867', 55000, 6321597456);

-- --------------------------------------------------------

--
-- Table structure for table `ticket`
--

DROP TABLE IF EXISTS `ticket`;
CREATE TABLE IF NOT EXISTS `ticket` (
  `ticket_id` int NOT NULL AUTO_INCREMENT,
  `f_no` int DEFAULT NULL,
  `username` varchar(33) DEFAULT NULL,
  `firstname` varchar(30) DEFAULT NULL,
  `lastname` varchar(30) DEFAULT NULL,
  `gender` text,
  `age` int DEFAULT NULL,
  `nationality` text,
  `phoneno` bigint NOT NULL,
  `account` varchar(40) DEFAULT NULL,
  `fromt` text,
  `tot` text,
  `price` int DEFAULT NULL,
  PRIMARY KEY (`ticket_id`,`phoneno`),
  KEY `task` (`f_no`),
  KEY `username` (`username`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `ticket`
--

INSERT INTO `ticket` (`ticket_id`, `f_no`, `username`, `firstname`, `lastname`, `gender`, `age`, `nationality`, `phoneno`, `account`, `fromt`, `tot`, `price`) VALUES
(9, 3, 'catwalk', 'tushar', 'd shetty', 'male', 65, 'hjghg', 244544542342, 'hjghghjg', 'madav', 'puttur', 55000),
(10, 5, 'shashanka', 'Shashanka', 'B S', 'Male', 20, 'Indian', 6321597456, '57567565866867', 'madav', 'puttur', 55000);

-- --------------------------------------------------------

--
-- Table structure for table `userdetails`
--

DROP TABLE IF EXISTS `userdetails`;
CREATE TABLE IF NOT EXISTS `userdetails` (
  `id` int NOT NULL AUTO_INCREMENT,
  `Username` varchar(33) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `Password` varchar(20) DEFAULT NULL,
  `Email` varchar(20) DEFAULT NULL,
  `Firstname` varchar(20) DEFAULT NULL,
  `Lastname` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id`,`Username`),
  KEY `Username` (`Username`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `userdetails`
--

INSERT INTO `userdetails` (`id`, `Username`, `Password`, `Email`, `Firstname`, `Lastname`) VALUES
(2, 'python', 'sdfijsh', 'python@123', 'legend', 'reborn'),
(3, 'catwalk', 'alskflhsd', 'cat@1234', 'dsfkkfdh', 'ksafjljfj'),
(5, 'shashanka', '12345678', 'sbs@gmail.com', 'Shashanka', 'B S'),
(6, 'qqwww', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int NOT NULL AUTO_INCREMENT,
  `full_name` varchar(300) DEFAULT NULL,
  `email` varchar(200) DEFAULT NULL,
  `password` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `full_name`, `email`, `password`) VALUES
(1, 'tushar', 'tusahr@gmail.com', '$2y$10$HczmPIslhSFoMMPs7mOKY.Y00q59.xoXH37IsUnYi95EU8dAJbwta'),
(2, 'tushar', 'tushar@gmail.com', '$2y$10$vMlw6Yyh4MiFAq9aRTneXuKW80Ey.rJfJgPId/oX/ybdSjFkEzHYu'),
(3, 'abc', 'sahnak@gmail.com', '$2y$10$CF3XR4sG7Ool04GwrnNb0OPUmdCIv.B8M7E9keKHKItTrtISd2upS'),
(4, 'skand', 'skand1232@gmail.com', '$2y$10$QItHQ085COveYbY5R5tlTOXpN2Il6qDpmRotK8EWXboOBFK6wenKq'),
(5, 'tiger', 'tiger2@gmail.com', '$2y$10$orcpwnQIAlz8cJbclZAbeuUv6mBQcVGHYXX5lcARL4B.AM3UOjnIy');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `passenger`
--
ALTER TABLE `passenger`
  ADD CONSTRAINT `passenger_ibfk_1` FOREIGN KEY (`username`) REFERENCES `userdetails` (`Username`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `task1` FOREIGN KEY (`flight_id`) REFERENCES `flights` (`flight_number`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `payment`
--
ALTER TABLE `payment`
  ADD CONSTRAINT `payment_ibfk_1` FOREIGN KEY (`flight_id`) REFERENCES `flights` (`flight_number`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `payment_ibfk_2` FOREIGN KEY (`username`) REFERENCES `userdetails` (`Username`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `ticket`
--
ALTER TABLE `ticket`
  ADD CONSTRAINT `task` FOREIGN KEY (`f_no`) REFERENCES `flights` (`flight_number`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `ticket_ibfk_1` FOREIGN KEY (`username`) REFERENCES `userdetails` (`Username`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
