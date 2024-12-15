-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 15, 2024 at 02:19 PM
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
-- Database: `login_regiser`
--

-- --------------------------------------------------------

--
-- Table structure for table `chatting`
--

CREATE TABLE `chatting` (
  `user_name` varchar(50) NOT NULL,
  `message` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `chatting`
--

INSERT INTO `chatting` (`user_name`, `message`) VALUES
('Ajit', 'Hi\r\nIm having rashes due to use of pad during periods'),
('doc', 'Hey - i would recommend using menstrual cup for sometime and let me know the response'),
('Ajit', 'i missed my period'),
('doc', 'mm\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `periods`
--

CREATE TABLE `periods` (
  `period_name` varchar(50) NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `periods`
--

INSERT INTO `periods` (`period_name`, `start_date`, `end_date`) VALUES
('period1', '2024-12-09', '2024-12-14'),
('period1', '2024-12-01', '2024-12-03');

-- --------------------------------------------------------

--
-- Table structure for table `pregnancy_note`
--

CREATE TABLE `pregnancy_note` (
  `note` varchar(1000) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pregnancy_note`
--

INSERT INTO `pregnancy_note` (`note`, `date`) VALUES
('baby kick', '2024-12-12');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `full_name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`full_name`, `email`, `password`) VALUES
('ajit', 'ajitmourya012345@gmail.com', '$2y$10$RayLDBPfgeR8RKa05h7xaOqyZ.D4UUKbM4OkitXppJiwc2VDj8NUm'),
('hello', 'hello123@gmail.com', '$2y$10$K9A0nnbapC17z7deAjwnS.YdAhurBO2r0EtFDRpOx5qzUk1vebhRy'),
('ajit', 'ajitmourya012345@gamil.com', '$2y$10$tyoY6Dqo20oRGoj8/c.EsOgsK8Hlov98b8JbZLHEKvJysOl9hglAu'),
('ajit', 'ajitmourya', '$2y$10$PSQ/OVDVEgS1pv0KG7odqeCiU7PPbYoY4EI6iviRNq3lVUt9.deY2'),
('ajit', 'ajit123', '$2y$10$DmUczerPg2GamIuqQPhv2uq/dFrL7l52gVirh2y6mOS6A.8tabR32'),
('Shriya', 'Shriyas', '$2y$10$vNw.L38B3/WqmXXqA9Zcc.WhlIW.su3Ed2nUoHJa2ifwhqkF/kwL.'),
('Prajakta', 'prajvab', '$2y$10$IgT.rb0Ai1Yd96deyxm/tORc6Bn7KHY8W5alQAasuY9Ghqm3HInFq'),
('user1234', 'user1234', '$2y$10$Hmw9uroNRL8ToPOkXDGdgObnt0HMNkXcQjwtjfDsCFAVhv0k6Twzi'),
('sayali vijay pol', 'sayali', '$2y$10$M9WnlBKUEKulYqN1SVHHp.TBPV9ksZ5KUVZnEoGrVBR1JPClArptq'),
('user', 'user', '$2y$10$FwKM.qlcyCO0NnUDBdeNGe9oOFHSoln.NVZLerlDE4GERnpI.0FHm'),
('prann', 'prann', '$2y$10$2iI58ad4DpCsnGqEsSakCOaGxW1ajumXCdjSSRoytTZp.AMGCm.Re');

-- --------------------------------------------------------

--
-- Table structure for table `weight`
--

CREATE TABLE `weight` (
  `weight` int(100) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `weight`
--

INSERT INTO `weight` (`weight`, `date`) VALUES
(68, '2024-12-01');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
