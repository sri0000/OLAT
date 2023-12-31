-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 11, 2021 at 11:44 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `qution`
--

-- --------------------------------------------------------

--
-- Table structure for table `html`
--

CREATE TABLE `html` (
  `id` int(11) NOT NULL,
  `question` varchar(500) NOT NULL,
  `choice_1` text NOT NULL,
  `choice_2` text NOT NULL,
  `choice_3` text NOT NULL,
  `choice_4` text NOT NULL,
  `answer` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `html`
--

INSERT INTO `html` (`id`, `question`, `choice_1`, `choice_2`, `choice_3`, `choice_4`, `answer`) VALUES
(1, 'HTML is stand for _________', 'Hyper Text Markup Language', ' Holistick Technical Method Library', 'Hyper Tax Makes Line', 'None of the above', 1),
(2, '2+2=?', '6', '8', '10', '4', 4),
(3, 'Highest Mountain in the World.', 'Mt. Carmel', 'Mt. Liza', 'Mt. Everest', 'Mt. John', 3),
(4, 'Latest version of Microsoft Windows?', 'Window XP', 'Windows 10', 'Windows 11', 'Windows 95', 3)
(5, 'HTML is a subset of ______',' SGMD','SGML','SGMH','None of the above', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `html`
--
ALTER TABLE `html`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `html`
--
ALTER TABLE `html`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
