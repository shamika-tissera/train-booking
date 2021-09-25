-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 25, 2021 at 10:57 AM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ted`
--

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `transaction_id` int(11) NOT NULL,
  `user_id` varchar(20) NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  `amount` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`transaction_id`, `user_id`, `date`, `time`, `amount`) VALUES
(1, '990811130V', '2021-09-22', '27:01:39', 500),
(2, '990811130V', '2021-09-22', '20:03:42', 855),
(3, '990811130V', '2021-09-22', '20:03:42', 700),
(4, '990811130V', '2021-09-22', '20:03:42', 655),
(5, '990811130V', '2021-09-22', '20:03:42', 555),
(6, '990811130V', '2021-09-22', '20:03:42', 85);

-- --------------------------------------------------------

--
-- Table structure for table `schedule`
--

CREATE TABLE `schedule` (
  `train_id` int(11) NOT NULL,
  `Train_Name` varchar(100) DEFAULT NULL,
  `ffrom` varchar(100) DEFAULT NULL,
  `Departure` varchar(100) DEFAULT NULL,
  `tto` varchar(100) DEFAULT NULL,
  `Arrival` varchar(100) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `schedule`
--

INSERT INTO `schedule` (`train_id`, `Train_Name`, `ffrom`, `Departure`, `tto`, `Arrival`) VALUES
(1, 'Podi Menike', 'Colombo Fort', '05:55', 'Badulla', '16:00'),
(2, 'Podi Menike', 'Badulla', '08:50', 'Colombo Fort', '19:30'),
(3, 'Udarata Menike', 'Colombo Fort', '09:45', 'Badulla', '19:45'),
(4, 'Udarata Menike', 'Badulla', '05:45', 'Colombo Fort', '15:40'),
(5, 'Night Mail', 'Colombo Fort', '20:00', 'Badulla', '07:10'),
(6, 'Night Mail', 'Badulla', '18:00', 'Colombo Fort', '05:15'),
(7, 'Express (B)', 'Colombo Fort', '12:40', 'Hatton', '19:52'),
(8, 'Express (A)', 'Colombo Fort', '10:35', 'Matale', '13:52'),
(9, 'Express (B)', 'Matale', '05:15', 'Colombo Fort', '09:45'),
(10, 'Express (A)', 'Kandy', '15:30', 'Colombo Fort', '18:55'),
(11, 'Express (B)', 'Kandy', '10:25', 'Colombo Fort', '13:40'),
(12, 'Express (B)', 'Colombo Fort', '16:35', 'Kandy', '19:42'),
(13, 'Express (B)', 'Matara', '13:10', 'Colombo Fort', '17:14'),
(14, 'Express (B)', 'Colombo Fort', '17:45', 'Kandy', '20:58'),
(15, 'Express (B)', 'Kandy', '05:00', 'Colombo Fort', '08:17'),
(16, 'Intercity Express', 'Colombo Fort', '16:20', 'Vavuniya', '20:57'),
(17, 'Intercity Express', 'Vavuniya', '05:45', 'Colombo Fort', '10:19'),
(18, 'Intercity Express', 'Colombo Fort', '07:00', 'Kandy', '09:34'),
(19, 'Intercity Express', 'Kandy', '15:00', 'Colombo Fort', '17:35'),
(20, 'Intercity Express', 'Colombo Fort', '15:35', 'Kandy', '18:08'),
(21, 'Intercity Express', 'Kandy', '06:25', 'Colombo Fort', '09:00'),
(22, 'Intercity Express', 'Colombo Fort', '19:15', 'Batticaloa', '04:00'),
(23, 'Intercity Express', 'Batticaloa', '20:15', 'Colombo Fort', '04:52'),
(24, 'Uthaya Devi (ICE)', 'Colombo Fort', '10:30', 'Batticaloa', '18:25'),
(25, 'Uthaya Devi (ICE)', 'Batticaloa', '07:45', 'Colombo Fort', '15:40'),
(26, 'Yal Devi (ICE)', 'Colombo Fort', '05:45', 'Vavuniya', '10:07'),
(27, 'Yal Devi (ICE)', 'Vavuniya', '15:30', 'Colombo Fort', '20:35'),
(28, 'Express (B)', 'Colombo Fort', '08:35', 'Matara', '12:27'),
(29, 'Express (B)', 'Colombo Fort', '06:55', 'Matara', '11:17'),
(30, 'Express (B)', 'Matara', '14:05', 'Colombo Fort', '18:45'),
(31, 'Galu Kumari', 'Maradana', '13:40', 'Matara', '18:25'),
(32, 'Galu Kumari', 'Matara', '05:50', 'Maradana', '10:05'),
(33, 'Ruhunu Kumari', 'Maradana', '15:40', 'Matara', '19:15'),
(34, 'Ruhunu Kumari', 'Matara', '05:20', 'Maradana', '09:05'),
(35, 'Samudra Devi', 'Maradana', '17:20', 'Galle', '20:05'),
(36, 'Samudra Devi', 'Galle', '05:00', 'Maradana', '08:06'),
(37, 'Sangarika', 'Maradana', '16:40', 'Matara', '19:13'),
(38, 'Sangarika', 'Matara', '04:20', 'Maradana', '08:20'),
(39, 'Normal (C)', 'Maradana', '17:25', 'Galle', '21:10'),
(40, 'Normal (C)', 'Maradana', '18:45', 'Galle', '22:55'),
(41, 'Normal (C)', 'Galle', '03:30', 'Maradana', '07:07'),
(42, 'Normal (C)', 'Galle', '04:15', 'Maradana', '07:50'),
(43, 'Normal (C)', 'Galle', '09:00', 'Maradana', '13:35'),
(44, 'Normal (B)', 'Maradana', '17:50', 'Matara', '22:07'),
(45, 'Rajarata Rajini', 'Matara', '09:30', 'Colombo Fort', '13:20'),
(46, 'Rajarata Rajini', 'Colombo Fort', '13:45', 'Vavuniya', '20:15'),
(47, 'Rajarata Rajini', 'Vavuniya', '03:15', 'Colombo Fort', '09:55'),
(48, 'Rajarata Rajini', 'Colombo Fort', '10:30', 'Matara', '14:26'),
(49, 'Night Mail', 'Colombo Fort', '22:00', 'Vavuniya', '05:05'),
(50, 'Night Mail', 'Vavuniya', '22:00', 'Colombo Fort', '04:45'),
(51, 'Normal (C)', 'Colombo Fort', '08:45', 'Anuradhapura', '14:10'),
(52, 'Normal (C)', 'Anuradhapura', '08:40', 'Colombo Fort', '14:00'),
(53, 'Express (B)', 'Colombo Fort', '06:05', 'Trincomalee', '13:55'),
(54, 'Express (B)', 'Colombo Fort', '06:05', 'Batticaloa', '15:45'),
(55, 'Express (B)', 'Trincomalee', '10:00', 'Colombo Fort', '19:00'),
(56, 'Express (B)', 'Batticaloa', '05:20', 'Colombo Fort', '15:50'),
(57, 'Night Mail', 'Colombo Fort', '21:00', 'Trincomalee', '05:10'),
(58, 'Night Mail', 'Colombo Fort', '21:00', 'Batticaloa', '08:05'),
(59, 'Night Mail', 'Trincomalee', '19:00', 'Colombo Fort', '04:15'),
(60, 'Night Mail', 'Batticaloa', '17:20', 'Colombo Fort', '04:15'),
(61, 'Muthu Kumari (A)', 'Colombo Fort', '18:05', 'Chilaw', '20:42'),
(62, 'Muthu Kumari (A)', 'Chilaw', '05:20', 'Puttalam', '07:49'),
(63, 'Normal (A)', 'Colombo Fort', '04:00', 'Noor Nagar', '08:27'),
(64, 'Normal (A)', 'Colombo Fort', '07:35', 'Puttalam', '12:10'),
(65, 'Normal (A)', 'Colombo Fort', '11:30', 'Noor Nagar', '15:33'),
(66, 'Normal (A)', 'Colombo Fort', '17:10', 'Puttalam', '20:43'),
(67, 'Normal (A)', 'Colombo Fort', '19:00', 'Puttalam', '23:20'),
(68, 'Normal (A)', 'Puttalam', '04:35', 'Colombo Fort', '08:10'),
(69, 'Normal (A)', 'Noor Nagar', '09:50', 'Colombo Fort', '14:04'),
(70, 'Normal (A)', 'Noor Nagar', '16:40', 'Colombo Fort', '20:55'),
(71, 'Normal (A)', 'Colombo Fort', '08:45', 'Avissawella', '11:31'),
(72, 'Normal (A)', 'Colombo Fort', '16:10', 'Avissawella', '18:46'),
(73, 'Normal (A)', 'Colombo Fort', '17:10', 'Avissawella', '19:50'),
(74, 'Normal (A)', 'Colombo Fort', '17:55', 'Avissawella', '20:36'),
(75, 'Normal (A)', 'Colombo Fort', '20:00', 'Avissawella', '22:38'),
(76, 'Podi Menike', 'Colombo Fort', '05:55', 'Badulla', '16:00'),
(77, 'Podi Menike', 'Badulla', '08:50', 'Colombo Fort', '19:30'),
(78, 'Udarata Menike', 'Colombo Fort', '09:45', 'Badulla', '19:45'),
(79, 'Udarata Menike', 'Badulla', '05:45', 'Colombo Fort', '15:40'),
(80, 'Night Mail', 'Colombo Fort', '20:00', 'Badulla', '07:10'),
(81, 'Night Mail', 'Badulla', '18:00', 'Colombo Fort', '05:15'),
(82, 'Express (B)', 'Colombo Fort', '12:40', 'Hatton', '19:52'),
(83, 'Express (A)', 'Colombo Fort', '10:35', 'Matale', '13:52'),
(84, 'Express (B)', 'Matale', '05:15', 'Colombo Fort', '09:45'),
(85, 'Express (A)', 'Kandy', '15:30', 'Colombo Fort', '18:55'),
(86, 'Express (B)', 'Kandy', '10:25', 'Colombo Fort', '13:40'),
(87, 'Express (B)', 'Colombo Fort', '16:35', 'Kandy', '19:42'),
(88, 'Express (B)', 'Matara', '13:10', 'Colombo Fort', '17:14'),
(89, 'Express (B)', 'Colombo Fort', '17:45', 'Kandy', '20:58'),
(90, 'Express (B)', 'Kandy', '05:00', 'Colombo Fort', '08:17'),
(91, 'Intercity Express', 'Colombo Fort', '16:20', 'Vavuniya', '20:57'),
(92, 'Intercity Express', 'Vavuniya', '05:45', 'Colombo Fort', '10:19'),
(93, 'Intercity Express', 'Colombo Fort', '07:00', 'Kandy', '09:34'),
(94, 'Intercity Express', 'Kandy', '15:00', 'Colombo Fort', '17:35'),
(95, 'Intercity Express', 'Colombo Fort', '15:35', 'Kandy', '18:08'),
(96, 'Intercity Express', 'Kandy', '06:25', 'Colombo Fort', '09:00'),
(97, 'Intercity Express', 'Colombo Fort', '19:15', 'Batticaloa', '04:00'),
(98, 'Intercity Express', 'Batticaloa', '20:15', 'Colombo Fort', '04:52'),
(99, 'Uthaya Devi (ICE)', 'Colombo Fort', '10:30', 'Batticaloa', '18:25'),
(100, 'Uthaya Devi (ICE)', 'Batticaloa', '07:45', 'Colombo Fort', '15:40'),
(101, 'Yal Devi (ICE)', 'Colombo Fort', '05:45', 'Vavuniya', '10:07'),
(102, 'Yal Devi (ICE)', 'Vavuniya', '15:30', 'Colombo Fort', '20:35'),
(103, 'Express (B)', 'Colombo Fort', '08:35', 'Matara', '12:27'),
(104, 'Express (B)', 'Colombo Fort', '06:55', 'Matara', '11:17'),
(105, 'Express (B)', 'Matara', '14:05', 'Colombo Fort', '18:45'),
(106, 'Galu Kumari', 'Maradana', '13:40', 'Matara', '18:25'),
(107, 'Galu Kumari', 'Matara', '05:50', 'Maradana', '10:05'),
(108, 'Ruhunu Kumari', 'Maradana', '15:40', 'Matara', '19:15'),
(109, 'Ruhunu Kumari', 'Matara', '05:20', 'Maradana', '09:05'),
(110, 'Samudra Devi', 'Maradana', '17:20', 'Galle', '20:05'),
(111, 'Samudra Devi', 'Galle', '05:00', 'Maradana', '08:06'),
(112, 'Sangarika', 'Maradana', '16:40', 'Matara', '19:13'),
(113, 'Sangarika', 'Matara', '04:20', 'Maradana', '08:20'),
(114, 'Normal (C)', 'Maradana', '17:25', 'Galle', '21:10'),
(115, 'Normal (C)', 'Maradana', '18:45', 'Galle', '22:55'),
(116, 'Normal (C)', 'Galle', '03:30', 'Maradana', '07:07'),
(117, 'Normal (C)', 'Galle', '04:15', 'Maradana', '07:50'),
(118, 'Normal (C)', 'Galle', '09:00', 'Maradana', '13:35'),
(119, 'Normal (B)', 'Maradana', '17:50', 'Matara', '22:07'),
(120, 'Rajarata Rajini', 'Matara', '09:30', 'Colombo Fort', '13:20'),
(121, 'Rajarata Rajini', 'Colombo Fort', '13:45', 'Vavuniya', '20:15'),
(122, 'Rajarata Rajini', 'Vavuniya', '03:15', 'Colombo Fort', '09:55'),
(123, 'Rajarata Rajini', 'Colombo Fort', '10:30', 'Matara', '14:26'),
(124, 'Night Mail', 'Colombo Fort', '22:00', 'Vavuniya', '05:05'),
(125, 'Night Mail', 'Vavuniya', '22:00', 'Colombo Fort', '04:45'),
(126, 'Normal (C)', 'Colombo Fort', '08:45', 'Anuradhapura', '14:10'),
(127, 'Normal (C)', 'Anuradhapura', '08:40', 'Colombo Fort', '14:00'),
(128, 'Express (B)', 'Colombo Fort', '06:05', 'Trincomalee', '13:55'),
(129, 'Express (B)', 'Colombo Fort', '06:05', 'Batticaloa', '15:45'),
(130, 'Express (B)', 'Trincomalee', '10:00', 'Colombo Fort', '19:00'),
(131, 'Express (B)', 'Batticaloa', '05:20', 'Colombo Fort', '15:50'),
(132, 'Night Mail', 'Colombo Fort', '21:00', 'Trincomalee', '05:10'),
(133, 'Night Mail', 'Colombo Fort', '21:00', 'Batticaloa', '08:05'),
(134, 'Night Mail', 'Trincomalee', '19:00', 'Colombo Fort', '04:15'),
(135, 'Night Mail', 'Batticaloa', '17:20', 'Colombo Fort', '04:15'),
(136, 'Muthu Kumari (A)', 'Colombo Fort', '18:05', 'Chilaw', '20:42'),
(137, 'Muthu Kumari (A)', 'Chilaw', '05:20', 'Puttalam', '07:49'),
(138, 'Normal (A)', 'Colombo Fort', '04:00', 'Noor Nagar', '08:27'),
(139, 'Normal (A)', 'Colombo Fort', '07:35', 'Puttalam', '12:10'),
(140, 'Normal (A)', 'Colombo Fort', '11:30', 'Noor Nagar', '15:33'),
(141, 'Normal (A)', 'Colombo Fort', '17:10', 'Puttalam', '20:43'),
(142, 'Normal (A)', 'Colombo Fort', '19:00', 'Puttalam', '23:20'),
(143, 'Normal (A)', 'Puttalam', '04:35', 'Colombo Fort', '08:10'),
(144, 'Normal (A)', 'Noor Nagar', '09:50', 'Colombo Fort', '14:04'),
(145, 'Normal (A)', 'Noor Nagar', '16:40', 'Colombo Fort', '20:55'),
(146, 'Normal (A)', 'Colombo Fort', '08:45', 'Avissawella', '11:31'),
(147, 'Normal (A)', 'Colombo Fort', '16:10', 'Avissawella', '18:46'),
(148, 'Normal (A)', 'Colombo Fort', '17:10', 'Avissawella', '19:50'),
(149, 'Normal (A)', 'Colombo Fort', '17:55', 'Avissawella', '20:36'),
(150, 'Normal (A)', 'Colombo Fort', '20:00', 'Avissawella', '22:38'),
(151, 'Podi Menike', 'Colombo Fort', '05:55', 'Badulla', '16:00'),
(152, 'Podi Menike', 'Badulla', '08:50', 'Colombo Fort', '19:30'),
(153, 'Udarata Menike', 'Colombo Fort', '09:45', 'Badulla', '19:45'),
(154, 'Udarata Menike', 'Badulla', '05:45', 'Colombo Fort', '15:40'),
(155, 'Night Mail', 'Colombo Fort', '20:00', 'Badulla', '07:10'),
(156, 'Night Mail', 'Badulla', '18:00', 'Colombo Fort', '05:15'),
(157, 'Express (B)', 'Colombo Fort', '12:40', 'Hatton', '19:52'),
(158, 'Express (A)', 'Colombo Fort', '10:35', 'Matale', '13:52'),
(159, 'Express (B)', 'Matale', '05:15', 'Colombo Fort', '09:45'),
(160, 'Express (A)', 'Kandy', '15:30', 'Colombo Fort', '18:55'),
(161, 'Express (B)', 'Kandy', '10:25', 'Colombo Fort', '13:40'),
(162, 'Express (B)', 'Colombo Fort', '16:35', 'Kandy', '19:42'),
(163, 'Express (B)', 'Matara', '13:10', 'Colombo Fort', '17:14'),
(164, 'Express (B)', 'Colombo Fort', '17:45', 'Kandy', '20:58'),
(165, 'Express (B)', 'Kandy', '05:00', 'Colombo Fort', '08:17'),
(166, 'Intercity Express', 'Colombo Fort', '16:20', 'Vavuniya', '20:57'),
(167, 'Intercity Express', 'Vavuniya', '05:45', 'Colombo Fort', '10:19'),
(168, 'Intercity Express', 'Colombo Fort', '07:00', 'Kandy', '09:34'),
(169, 'Intercity Express', 'Kandy', '15:00', 'Colombo Fort', '17:35'),
(170, 'Intercity Express', 'Colombo Fort', '15:35', 'Kandy', '18:08'),
(171, 'Intercity Express', 'Kandy', '06:25', 'Colombo Fort', '09:00'),
(172, 'Intercity Express', 'Colombo Fort', '19:15', 'Batticaloa', '04:00'),
(173, 'Intercity Express', 'Batticaloa', '20:15', 'Colombo Fort', '04:52'),
(174, 'Uthaya Devi (ICE)', 'Colombo Fort', '10:30', 'Batticaloa', '18:25'),
(175, 'Uthaya Devi (ICE)', 'Batticaloa', '07:45', 'Colombo Fort', '15:40'),
(176, 'Yal Devi (ICE)', 'Colombo Fort', '05:45', 'Vavuniya', '10:07'),
(177, 'Yal Devi (ICE)', 'Vavuniya', '15:30', 'Colombo Fort', '20:35'),
(178, 'Express (B)', 'Colombo Fort', '08:35', 'Matara', '12:27'),
(179, 'Express (B)', 'Colombo Fort', '06:55', 'Matara', '11:17'),
(180, 'Express (B)', 'Matara', '14:05', 'Colombo Fort', '18:45'),
(181, 'Galu Kumari', 'Maradana', '13:40', 'Matara', '18:25'),
(182, 'Galu Kumari', 'Matara', '05:50', 'Maradana', '10:05'),
(183, 'Ruhunu Kumari', 'Maradana', '15:40', 'Matara', '19:15'),
(184, 'Ruhunu Kumari', 'Matara', '05:20', 'Maradana', '09:05'),
(185, 'Samudra Devi', 'Maradana', '17:20', 'Galle', '20:05'),
(186, 'Samudra Devi', 'Galle', '05:00', 'Maradana', '08:06'),
(187, 'Sangarika', 'Maradana', '16:40', 'Matara', '19:13'),
(188, 'Sangarika', 'Matara', '04:20', 'Maradana', '08:20'),
(189, 'Normal (C)', 'Maradana', '17:25', 'Galle', '21:10'),
(190, 'Normal (C)', 'Maradana', '18:45', 'Galle', '22:55'),
(191, 'Normal (C)', 'Galle', '03:30', 'Maradana', '07:07'),
(192, 'Normal (C)', 'Galle', '04:15', 'Maradana', '07:50'),
(193, 'Normal (C)', 'Galle', '09:00', 'Maradana', '13:35'),
(194, 'Normal (B)', 'Maradana', '17:50', 'Matara', '22:07'),
(195, 'Rajarata Rajini', 'Matara', '09:30', 'Colombo Fort', '13:20'),
(196, 'Rajarata Rajini', 'Colombo Fort', '13:45', 'Vavuniya', '20:15'),
(197, 'Rajarata Rajini', 'Vavuniya', '03:15', 'Colombo Fort', '09:55'),
(198, 'Rajarata Rajini', 'Colombo Fort', '10:30', 'Matara', '14:26'),
(199, 'Night Mail', 'Colombo Fort', '22:00', 'Vavuniya', '05:05'),
(200, 'Night Mail', 'Vavuniya', '22:00', 'Colombo Fort', '04:45'),
(201, 'Normal (C)', 'Colombo Fort', '08:45', 'Anuradhapura', '14:10'),
(202, 'Normal (C)', 'Anuradhapura', '08:40', 'Colombo Fort', '14:00'),
(203, 'Express (B)', 'Colombo Fort', '06:05', 'Trincomalee', '13:55'),
(204, 'Express (B)', 'Colombo Fort', '06:05', 'Batticaloa', '15:45'),
(205, 'Express (B)', 'Trincomalee', '10:00', 'Colombo Fort', '19:00'),
(206, 'Express (B)', 'Batticaloa', '05:20', 'Colombo Fort', '15:50'),
(207, 'Night Mail', 'Colombo Fort', '21:00', 'Trincomalee', '05:10'),
(208, 'Night Mail', 'Colombo Fort', '21:00', 'Batticaloa', '08:05'),
(209, 'Night Mail', 'Trincomalee', '19:00', 'Colombo Fort', '04:15'),
(210, 'Night Mail', 'Batticaloa', '17:20', 'Colombo Fort', '04:15'),
(211, 'Muthu Kumari (A)', 'Colombo Fort', '18:05', 'Chilaw', '20:42'),
(212, 'Muthu Kumari (A)', 'Chilaw', '05:20', 'Puttalam', '07:49'),
(213, 'Normal (A)', 'Colombo Fort', '04:00', 'Noor Nagar', '08:27'),
(214, 'Normal (A)', 'Colombo Fort', '07:35', 'Puttalam', '12:10'),
(215, 'Normal (A)', 'Colombo Fort', '11:30', 'Noor Nagar', '15:33'),
(216, 'Normal (A)', 'Colombo Fort', '17:10', 'Puttalam', '20:43'),
(217, 'Normal (A)', 'Colombo Fort', '19:00', 'Puttalam', '23:20'),
(218, 'Normal (A)', 'Puttalam', '04:35', 'Colombo Fort', '08:10'),
(219, 'Normal (A)', 'Noor Nagar', '09:50', 'Colombo Fort', '14:04'),
(220, 'Normal (A)', 'Noor Nagar', '16:40', 'Colombo Fort', '20:55'),
(221, 'Normal (A)', 'Colombo Fort', '08:45', 'Avissawella', '11:31'),
(222, 'Normal (A)', 'Colombo Fort', '16:10', 'Avissawella', '18:46'),
(223, 'Normal (A)', 'Colombo Fort', '17:10', 'Avissawella', '19:50'),
(224, 'Normal (A)', 'Colombo Fort', '17:55', 'Avissawella', '20:36'),
(225, 'Normal (A)', 'Colombo Fort', '20:00', 'Avissawella', '22:38');

-- --------------------------------------------------------

--
-- Table structure for table `station`
--

CREATE TABLE `station` (
  `sid` int(5) NOT NULL,
  `stationname` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `station`
--

INSERT INTO `station` (`sid`, `stationname`) VALUES
(1, 'Colombo Fort'),
(2, 'Badulla'),
(3, 'Galle'),
(4, 'Badulla'),
(5, 'Akurassa');

-- --------------------------------------------------------

--
-- Table structure for table `temp_submit`
--

CREATE TABLE `temp_submit` (
  `train_id` int(11) NOT NULL,
  `block_id` int(11) NOT NULL,
  `seat_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `train`
--

CREATE TABLE `train` (
  `train_id` int(11) NOT NULL,
  `Train_Name` varchar(100) DEFAULT NULL,
  `ffrom` varchar(100) DEFAULT NULL,
  `Departure` varchar(100) DEFAULT NULL,
  `tto` varchar(100) DEFAULT NULL,
  `Arrival` varchar(100) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `train`
--

INSERT INTO `train` (`train_id`, `Train_Name`, `ffrom`, `Departure`, `tto`, `Arrival`) VALUES
(1, 'Podi Menike', 'Colombo Fort', '05:55', 'Badulla', '16:00'),
(2, 'Podi Menike', 'Badulla', '08:50', 'Colombo Fort', '19:30'),
(3, 'Udarata Menike', 'Colombo Fort', '09:45', 'Badulla', '19:45'),
(4, 'Udarata Menike', 'Badulla', '05:45', 'Colombo Fort', '15:40'),
(5, 'Night Mail', 'Colombo Fort', '20:00', 'Badulla', '07:10'),
(6, 'Night Mail', 'Badulla', '18:00', 'Colombo Fort', '05:15'),
(7, 'Express (B)', 'Colombo Fort', '12:40', 'Hatton', '19:52'),
(8, 'Express (A)', 'Colombo Fort', '10:35', 'Matale', '13:52'),
(9, 'Express (B)', 'Matale', '05:15', 'Colombo Fort', '09:45'),
(10, 'Express (A)', 'Kandy', '15:30', 'Colombo Fort', '18:55'),
(11, 'Express (B)', 'Kandy', '10:25', 'Colombo Fort', '13:40'),
(12, 'Express (B)', 'Colombo Fort', '16:35', 'Kandy', '19:42'),
(13, 'Express (B)', 'Matara', '13:10', 'Colombo Fort', '17:14'),
(14, 'Express (B)', 'Colombo Fort', '17:45', 'Kandy', '20:58'),
(15, 'Express (B)', 'Kandy', '05:00', 'Colombo Fort', '08:17'),
(16, 'Intercity Express', 'Colombo Fort', '16:20', 'Vavuniya', '20:57'),
(17, 'Intercity Express', 'Vavuniya', '05:45', 'Colombo Fort', '10:19'),
(18, 'Intercity Express', 'Colombo Fort', '07:00', 'Kandy', '09:34'),
(19, 'Intercity Express', 'Kandy', '15:00', 'Colombo Fort', '17:35'),
(20, 'Intercity Express', 'Colombo Fort', '15:35', 'Kandy', '18:08'),
(21, 'Intercity Express', 'Kandy', '06:25', 'Colombo Fort', '09:00'),
(22, 'Intercity Express', 'Colombo Fort', '19:15', 'Batticaloa', '04:00'),
(23, 'Intercity Express', 'Batticaloa', '20:15', 'Colombo Fort', '04:52'),
(24, 'Uthaya Devi (ICE)', 'Colombo Fort', '10:30', 'Batticaloa', '18:25'),
(25, 'Uthaya Devi (ICE)', 'Batticaloa', '07:45', 'Colombo Fort', '15:40'),
(26, 'Yal Devi (ICE)', 'Colombo Fort', '05:45', 'Vavuniya', '10:07'),
(27, 'Yal Devi (ICE)', 'Vavuniya', '15:30', 'Colombo Fort', '20:35'),
(28, 'Express (B)', 'Colombo Fort', '08:35', 'Matara', '12:27'),
(29, 'Express (B)', 'Colombo Fort', '06:55', 'Matara', '11:17'),
(30, 'Express (B)', 'Matara', '14:05', 'Colombo Fort', '18:45'),
(31, 'Galu Kumari', 'Maradana', '13:40', 'Matara', '18:25'),
(32, 'Galu Kumari', 'Matara', '05:50', 'Maradana', '10:05'),
(33, 'Ruhunu Kumari', 'Maradana', '15:40', 'Matara', '19:15'),
(34, 'Ruhunu Kumari', 'Matara', '05:20', 'Maradana', '09:05'),
(35, 'Samudra Devi', 'Maradana', '17:20', 'Galle', '20:05'),
(36, 'Samudra Devi', 'Galle', '05:00', 'Maradana', '08:06'),
(37, 'Sangarika', 'Maradana', '16:40', 'Matara', '19:13'),
(38, 'Sangarika', 'Matara', '04:20', 'Maradana', '08:20'),
(39, 'Normal (C)', 'Maradana', '17:25', 'Galle', '21:10'),
(40, 'Normal (C)', 'Maradana', '18:45', 'Galle', '22:55'),
(41, 'Normal (C)', 'Galle', '03:30', 'Maradana', '07:07'),
(42, 'Normal (C)', 'Galle', '04:15', 'Maradana', '07:50'),
(43, 'Normal (C)', 'Galle', '09:00', 'Maradana', '13:35'),
(44, 'Normal (B)', 'Maradana', '17:50', 'Matara', '22:07'),
(45, 'Rajarata Rajini', 'Matara', '09:30', 'Colombo Fort', '13:20'),
(46, 'Rajarata Rajini', 'Colombo Fort', '13:45', 'Vavuniya', '20:15'),
(47, 'Rajarata Rajini', 'Vavuniya', '03:15', 'Colombo Fort', '09:55'),
(48, 'Rajarata Rajini', 'Colombo Fort', '10:30', 'Matara', '14:26'),
(49, 'Night Mail', 'Colombo Fort', '22:00', 'Vavuniya', '05:05'),
(50, 'Night Mail', 'Vavuniya', '22:00', 'Colombo Fort', '04:45'),
(51, 'Normal (C)', 'Colombo Fort', '08:45', 'Anuradhapura', '14:10'),
(52, 'Normal (C)', 'Anuradhapura', '08:40', 'Colombo Fort', '14:00'),
(53, 'Express (B)', 'Colombo Fort', '06:05', 'Trincomalee', '13:55'),
(54, 'Express (B)', 'Colombo Fort', '06:05', 'Batticaloa', '15:45'),
(55, 'Express (B)', 'Trincomalee', '10:00', 'Colombo Fort', '19:00'),
(56, 'Express (B)', 'Batticaloa', '05:20', 'Colombo Fort', '15:50'),
(57, 'Night Mail', 'Colombo Fort', '21:00', 'Trincomalee', '05:10'),
(58, 'Night Mail', 'Colombo Fort', '21:00', 'Batticaloa', '08:05'),
(59, 'Night Mail', 'Trincomalee', '19:00', 'Colombo Fort', '04:15'),
(60, 'Night Mail', 'Batticaloa', '17:20', 'Colombo Fort', '04:15'),
(61, 'Muthu Kumari (A)', 'Colombo Fort', '18:05', 'Chilaw', '20:42'),
(62, 'Muthu Kumari (A)', 'Chilaw', '05:20', 'Puttalam', '07:49'),
(63, 'Normal (A)', 'Colombo Fort', '04:00', 'Noor Nagar', '08:27'),
(64, 'Normal (A)', 'Colombo Fort', '07:35', 'Puttalam', '12:10'),
(65, 'Normal (A)', 'Colombo Fort', '11:30', 'Noor Nagar', '15:33'),
(66, 'Normal (A)', 'Colombo Fort', '17:10', 'Puttalam', '20:43'),
(67, 'Normal (A)', 'Colombo Fort', '19:00', 'Puttalam', '23:20'),
(68, 'Normal (A)', 'Puttalam', '04:35', 'Colombo Fort', '08:10'),
(69, 'Normal (A)', 'Noor Nagar', '09:50', 'Colombo Fort', '14:04'),
(70, 'Normal (A)', 'Noor Nagar', '16:40', 'Colombo Fort', '20:55'),
(71, 'Normal (A)', 'Colombo Fort', '08:45', 'Avissawella', '11:31'),
(72, 'Normal (A)', 'Colombo Fort', '16:10', 'Avissawella', '18:46'),
(73, 'Normal (A)', 'Colombo Fort', '17:10', 'Avissawella', '19:50'),
(74, 'Normal (A)', 'Colombo Fort', '17:55', 'Avissawella', '20:36'),
(75, 'Normal (A)', 'Colombo Fort', '20:00', 'Avissawella', '22:38');

-- --------------------------------------------------------

--
-- Table structure for table `trip`
--

CREATE TABLE `trip` (
  `id` int(11) NOT NULL,
  `ffrom` varchar(50) NOT NULL,
  `tto` varchar(50) NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  `train_id` int(11) NOT NULL,
  `block_id` int(11) NOT NULL,
  `seat_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `trip`
--

INSERT INTO `trip` (`id`, `ffrom`, `tto`, `date`, `time`, `train_id`, `block_id`, `seat_id`) VALUES
(22, 'Colombo', 'Maradana', '2021-09-07', '12:50:32', 1, 1, 28),
(25, 'Colombo', 'Maradana', '2021-09-07', '12:50:32', 1, 1, 20),
(26, 'Colombo', 'Maradana', '2021-09-07', '12:50:32', 1, 1, 19),
(27, 'Colombo', 'Maradana', '2021-09-07', '12:50:32', 1, 1, 18),
(28, 'Colombo', 'Maradana', '2021-09-07', '12:50:32', 1, 1, 22),
(30, 'Colombo', 'Maradana', '2021-09-07', '12:50:32', 1, 1, 16),
(31, 'Colombo', 'Maradana', '2021-09-07', '12:50:32', 1, 1, 17),
(32, 'Colombo', 'Maradana', '2021-09-07', '12:50:32', 1, 1, 21),
(33, 'Colombo', 'Maradana', '2021-09-07', '12:50:32', 1, 1, 23),
(34, 'Colombo', 'Maradana', '2021-09-07', '12:50:32', 1, 1, 3),
(35, 'Colombo', 'Maradana', '2021-09-07', '12:50:32', 1, 1, 4),
(36, 'Colombo', 'Maradana', '2021-09-07', '12:50:32', 1, 1, 33),
(37, 'Colombo', 'Maradana', '2021-09-07', '12:50:32', 1, 1, 2),
(38, 'Colombo', 'Maradana', '2021-09-07', '12:50:32', 1, 1, 1),
(39, 'Colombo', 'Maradana', '2021-09-07', '12:50:32', 1, 1, 11),
(40, 'Colombo', 'Maradana', '2021-09-07', '12:50:32', 1, 1, 6),
(41, 'Colombo', 'Maradana', '2021-09-07', '12:50:32', 1, 1, 7),
(42, 'Colombo', 'Maradana', '2021-09-07', '12:50:32', 1, 1, 8),
(43, 'Colombo', 'Maradana', '2021-09-07', '12:50:32', 1, 1, 17),
(44, 'Colombo', 'Maradana', '2021-09-07', '12:50:32', 1, 1, 8),
(45, 'Colombo', 'Maradana', '2021-09-07', '12:50:32', 1, 1, 20),
(46, 'Colombo', 'Maradana', '2021-09-25', '13:37:30', 1, 1, 19),
(47, 'Colombo', 'Maradana', '2021-09-25', '13:37:30', 1, 1, 9),
(48, 'Colombo', 'Maradana', '2021-09-25', '13:37:30', 1, 1, 21),
(49, 'Colombo', 'Maradana', '2021-09-25', '13:38:31', 1, 1, 19),
(50, 'Colombo', 'Maradana', '2021-09-25', '13:38:31', 1, 1, 6),
(51, 'Colombo', 'Maradana', '2021-09-25', '13:38:31', 1, 1, 17),
(52, '', '', '2021-09-25', '13:46:32', 1, 1, 26),
(53, '', '', '2021-09-25', '13:46:32', 1, 1, 27),
(54, 'Colombo Fort', 'Badulla', '2021-09-25', '13:59:05', 1, 1, 18),
(55, 'Colombo Fort', 'Badulla', '2021-09-25', '13:59:05', 1, 1, 5),
(56, 'Colombo Fort', 'Badulla', '2021-09-25', '13:59:28', 1, 1, 20),
(57, 'Colombo Fort', 'Badulla', '2021-09-25', '13:59:28', 1, 1, 17);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `nic` varchar(20) NOT NULL,
  `firstname` varchar(30) NOT NULL,
  `lastname` varchar(30) NOT NULL,
  `telephone` int(10) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(20) NOT NULL,
  `balance` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`nic`, `firstname`, `lastname`, `telephone`, `email`, `password`, `balance`) VALUES
('971834521v', 'sanju', 'hashintha', 778563241, 'sanju@gmail.com', '1234', 5165),
('990811130V', 'lasith', 'eranda', 770543422, 'lasitheranga1@gmail.com', '123', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`transaction_id`);

--
-- Indexes for table `schedule`
--
ALTER TABLE `schedule`
  ADD PRIMARY KEY (`train_id`);

--
-- Indexes for table `train`
--
ALTER TABLE `train`
  ADD PRIMARY KEY (`train_id`);

--
-- Indexes for table `trip`
--
ALTER TABLE `trip`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`nic`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `transaction_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `schedule`
--
ALTER TABLE `schedule`
  MODIFY `train_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=226;

--
-- AUTO_INCREMENT for table `train`
--
ALTER TABLE `train`
  MODIFY `train_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=76;

--
-- AUTO_INCREMENT for table `trip`
--
ALTER TABLE `trip`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
