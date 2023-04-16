-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 08, 2023 at 01:41 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sports`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` varchar(30) COLLATE utf8mb4_unicode_nopad_ci NOT NULL,
  `password` varchar(30) COLLATE utf8mb4_unicode_nopad_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_nopad_ci;

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(10) NOT NULL,
  `name` varchar(30) COLLATE utf8mb4_unicode_nopad_ci NOT NULL,
  `photo` varchar(50) COLLATE utf8mb4_unicode_nopad_ci NOT NULL,
  `description` varchar(100) COLLATE utf8mb4_unicode_nopad_ci NOT NULL,
  `price` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_nopad_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `name`, `photo`, `description`, `price`) VALUES
(1, 'Bat', 'product/vm18jpg.jpg', 'aaa', 700),
(2, 'Bat', 'product/vm17.jpg', 'Fiber Bat', 1500),
(3, 'Basket Ball', 'product/image12.jpg', 'Basket Ball', 1500);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `Name` varchar(30) COLLATE utf8mb4_unicode_nopad_ci NOT NULL,
  `Gender` varchar(10) COLLATE utf8mb4_unicode_nopad_ci NOT NULL,
  `Address` varchar(50) COLLATE utf8mb4_unicode_nopad_ci NOT NULL,
  `DOB` date NOT NULL,
  `E-mail` varchar(50) COLLATE utf8mb4_unicode_nopad_ci NOT NULL,
  `Password` varchar(10) COLLATE utf8mb4_unicode_nopad_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_nopad_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`Name`, `Gender`, `Address`, `DOB`, `E-mail`, `Password`) VALUES
('aaaa', 'male', 'hhhhh', '2002-09-08', 'aaaa@gmail.com', '@1234Aaa'),
('abcd', 'male', 'ahmedabad', '2001-01-01', 'abcd@gmail.com', '1234@Abcd'),
('Tiger', 'male', 'ahmedabad', '2002-03-02', 'huzefamemon0007@gmail.com', 'Huzefa1@');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`Name`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
