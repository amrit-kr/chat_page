-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 25, 2018 at 12:17 PM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 7.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
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
-- Table structure for table `chat`
--

CREATE TABLE `chat` (
  `text` varchar(1000) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `chat`
--

INSERT INTO `chat` (`text`, `email`) VALUES
('Are muuna chal raha h', 'Abhishek Anand'),
('Hii', 'Abhishek Anand'),
('Hii', 'Abhishek Anand'),
('new chat', 'AMRIT'),
('What''s You doing bro', 'Arpit Choudhary'),
('What''s You doing bro', 'Arpit Choudhary'),
('Nothing man', 'Amrit Kumar'),
('When will you come here', 'Amrit Kumar'),
('probably at 4pm', 'Arpit Choudhary'),
('I''m going to bed', 'Arpit Choudhary'),
('Hey bro', 'Arpit Choudhary'),
('hey', 'Amrit Kumar'),
('what''s up', 'Amrit Kumar'),
('mera nam joker', 'Arpit Choudhary');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(15) NOT NULL,
  `name` varchar(45) NOT NULL,
  `address` varchar(100) NOT NULL,
  `email` varchar(30) NOT NULL,
  `phone` int(15) NOT NULL,
  `password` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `address`, `email`, `phone`, `password`) VALUES
(2, 'arpan', 'bihar', 'arpankumar23@gmail.com', 651894652, '3154824'),
(3, 'kjhsj', 'jhjksdh', 'dshvs@vbj.cdsj', 54545, 'lmllcx'),
(4, 'Abhishek Anand', 'Bihar', 'crazyavi49@gmail.com', 2147483647, '9430'),
(5, 'raj', 'mritkumar963@gmail.acom', 'mritkumar963@gmail.acom', 1698799462, 'asdf'),
(6, 'Azad Singh', '', 'azad12@gmail.com', 2147483647, 'azasd'),
(7, 'Arpit Choudhary', 'Raipur', 'arpit@gmail.com', 876592456, 'arpit'),
(8, 'Amrit Kumar', 'Nit Raipur', 'amritkumar963@gmail.com', 2147483647, 'amrit');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
