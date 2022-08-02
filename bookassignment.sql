-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 02, 2022 at 07:11 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bookassignment`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(10) NOT NULL,
  `username` varchar(10) NOT NULL,
  `password` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `storeone`
--

CREATE TABLE `storeone` (
  `id` int(100) NOT NULL,
  `bookid` varchar(100) NOT NULL,
  `bookname` varchar(100) NOT NULL,
  `inventory` varchar(100) NOT NULL,
  `cover` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `storeone`
--

INSERT INTO `storeone` (`id`, `bookid`, `bookname`, `inventory`, `cover`) VALUES
(33, 'wmnuDwAAQBAJ', 'It Ends with Us', '5', ''),
(34, 'u6ZZmAEACAAJ', 'As a Man Thinketh', '3', ''),
(35, 'VYrTDwAAQBAJ', 'The Power of Your Subconscious Mind', '5', ''),
(38, 'MDksDwAAQBAJ', 'Ikigai', '0', '');

-- --------------------------------------------------------

--
-- Table structure for table `storethree`
--

CREATE TABLE `storethree` (
  `id` int(100) NOT NULL,
  `bookid` varchar(100) NOT NULL,
  `bookname` varchar(100) NOT NULL,
  `inventory` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `storethree`
--

INSERT INTO `storethree` (`id`, `bookid`, `bookname`, `inventory`) VALUES
(1, 'QfxKCgAAQBAJ', 'Treasure Island', 5),
(3, 'vb5IAwAAQBAJ', 'The Adventures of Sherlock Holmes', 4),
(4, 'KTn8DwAAQBAJ', 'Peaky Blinders Cocktail Book', 0),
(5, 'ppZiDwAAQBAJ', 'From Habitability to Life on Mars', 4);

-- --------------------------------------------------------

--
-- Table structure for table `storetwo`
--

CREATE TABLE `storetwo` (
  `id` int(100) NOT NULL,
  `bookid` varchar(100) NOT NULL,
  `bookname` varchar(100) NOT NULL,
  `inventory` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `storetwo`
--

INSERT INTO `storetwo` (`id`, `bookid`, `bookname`, `inventory`) VALUES
(1, 'VSD1uPGk72cC', 'Understanding Engineering Mathematics', 3),
(2, '9OfIDQAAQBAJ', 'Introducing Web Development', 6),
(4, 'XXdyQgAACAAJ', 'The C Book, Featuring the ANSI C Standard', 0),
(8, 'omivDQAAQBAJ', 'Deep Learning', 0),
(9, 'FTUJNA4lLdAC', 'Database Management System (DBMS)A Practical Approach', 2),
(10, 'QSrfDwAAQBAJ', 'The AI Book', 3);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(11) NOT NULL,
  `password` varchar(23) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`) VALUES
(1, 'user1', 'user'),
(3, 'name', 'name'),
(5, 'name', 'name'),
(18, 'user', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `storeone`
--
ALTER TABLE `storeone`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `storethree`
--
ALTER TABLE `storethree`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `storetwo`
--
ALTER TABLE `storetwo`
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
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `storeone`
--
ALTER TABLE `storeone`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `storethree`
--
ALTER TABLE `storethree`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `storetwo`
--
ALTER TABLE `storetwo`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
