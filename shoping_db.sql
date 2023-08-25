-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 11, 2023 at 05:07 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shoping_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `best`
--

CREATE TABLE `best` (
  `image` varchar(50) NOT NULL,
  `product_name` varchar(30) NOT NULL,
  `price` varchar(10) NOT NULL,
  `product_code` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `best`
--

INSERT INTO `best` (`image`, `product_name`, `price`, `product_code`) VALUES
('image/nike_retro5.jpg', 'nike retro5', '3000', 'H005'),
('image/nike_retro6.jpg', 'nike retro6', '3000', 'H006'),
('image/nike_retro7.jpg', 'nike retro7', '3200', 'H007'),
('image/nike_retro8.jpg', 'nike retro8', '4000', 'H008');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `image` varchar(50) NOT NULL,
  `product_name` varchar(30) NOT NULL,
  `price` varchar(30) NOT NULL,
  `product_code` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`image`, `product_name`, `price`, `product_code`) VALUES
('image/nike_retro1.jpg', 'nike retro1', '2500', 'H001'),
('image/nike_retro2.jpg', 'nike retro2', '2500', 'H002'),
('image/nike_retro3.jpg', 'nike retro3', '3000', 'H003'),
('image/nike_retro4.jpg', 'nike retro4', '3000', 'H004');

-- --------------------------------------------------------

--
-- Table structure for table `register_data`
--

CREATE TABLE `register_data` (
  `frstname` varchar(20) NOT NULL,
  `lstname` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `user_id` varchar(30) NOT NULL,
  `password` varchar(20) NOT NULL,
  `contact` varchar(20) DEFAULT NULL,
  `address` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `register_data`
--

INSERT INTO `register_data` (`frstname`, `lstname`, `email`, `user_id`, `password`, `contact`, `address`) VALUES
('Abhay', ' Rawat', 'abhay12@gmail.com', ' abhay123', 'abhay123', '7878787878', 'delhi, India'),
('Mohit', 'Joshi', 'mohit32@gmail.com', 'Mohit23', 'mohit123', '9874521345', 'delhi, India'),
('Riya', 'Verma', 'riya33@gmail.com', 'Riya121', 'riya123', '8994554554', 'delhi, India'),
('Saurabh', 'Chauhan', 'saurabhch34@gmail.com', 'saurabh24', 'saurabh123', '9310878961', 'Plot no 2and3 , sidhatri enclave, Uttam Nagar New Delhi 1100');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `best`
--
ALTER TABLE `best`
  ADD PRIMARY KEY (`product_code`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`price`,`product_code`);

--
-- Indexes for table `register_data`
--
ALTER TABLE `register_data`
  ADD PRIMARY KEY (`user_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
