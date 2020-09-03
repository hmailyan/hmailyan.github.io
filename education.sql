-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 25, 2020 at 12:21 PM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `education`
--

-- --------------------------------------------------------

--
-- Table structure for table `teachers`
--

CREATE TABLE `teachers` (
  `id` int(11) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `age` int(3) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `profession` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `teachers`
--

INSERT INTO `teachers` (`id`, `fname`, `lname`, `age`, `email`, `status`, `profession`) VALUES
(1, 'Suren', 'Knyazyan', 40, 'suren.knyazyan@mail.ru', 1, 'English'),
(2, 'Elina', 'Minasyan', 36, 'minasyan.elina@gmail.com', 1, 'Russian'),
(3, 'Haykaz', 'Emilyan', 55, 'emilyan@mail.ru', 1, 'Armenian');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) UNSIGNED NOT NULL,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `age` int(3) NOT NULL,
  `gender` enum('male','female') NOT NULL DEFAULT 'male',
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `email` varchar(255) DEFAULT NULL COMMENT 'This email just for examp',
  `b_day` date NOT NULL,
  `study` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `fname`, `lname`, `age`, `gender`, `status`, `email`, `b_day`, `study`) VALUES
(24, 'Karen', 'Markosyan', 14, 'male', 1, 'karenchik14@mail.ru', '2006-11-14', 'English'),
(25, 'Luiza', 'Avagyan', 11, 'female', 1, 'luiz@mail.ru', '2009-04-24', 'Russian'),
(26, 'Alina', 'Ispiryan', 13, 'female', 1, 'alina.ispiryan2007@mail.ru', '2007-12-05', 'Armenian'),
(28, 'Vazgen', 'Soxomonyan', 10, 'male', 1, 'vazgen@mail.ru', '2010-04-11', 'Armenian'),
(29, 'Andranik', 'Hovhanisyan', 14, 'male', 1, 'hovhanisyan.andranik@mail.ru', '2006-05-15', 'English');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `teachers`
--
ALTER TABLE `teachers`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `teachers`
--
ALTER TABLE `teachers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
