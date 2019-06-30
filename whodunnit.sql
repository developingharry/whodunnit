-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 30, 2019 at 05:48 PM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `whodunnit`
--

-- --------------------------------------------------------

--
-- Table structure for table `detectives`
--

CREATE TABLE `detectives` (
  `id` int(11) NOT NULL,
  `username` varchar(25) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(32) NOT NULL,
  `signUpDate` datetime NOT NULL,
  `profilePic` varchar(500) NOT NULL,
  `currentPick` int(11) NOT NULL,
  `streak` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `detectives`
--

INSERT INTO `detectives` (`id`, `username`, `email`, `password`, `signUpDate`, `profilePic`, `currentPick`, `streak`) VALUES
(1, 'UncleGabby', 'harry.hunt@gmail.com', '8a4ffa74ed5e34e70c67fea81d243a5f', '2019-06-30 00:00:00', 'assets/images/profile-pics/defaultpfp.jpg', 0, 0),
(2, 'UncleGabby2', 'harry.hunt@gmail.com', '338d811d532553557ca33be45b6bde55', '2019-06-30 00:00:00', 'assets/images/profile-pics/defaultpfp.jpg', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `suspects`
--

CREATE TABLE `suspects` (
  `id` int(11) NOT NULL,
  `forename` varchar(50) NOT NULL,
  `surname` varchar(50) NOT NULL,
  `alive` tinyint(1) NOT NULL DEFAULT 0,
  `guilt` tinyint(1) NOT NULL DEFAULT 0,
  `alivepic` varchar(255) NOT NULL,
  `deadpic` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `suspects`
--

INSERT INTO `suspects` (`id`, `forename`, `surname`, `alive`, `guilt`, `alivepic`, `deadpic`) VALUES
(1, 'Mary', 'Arbuthnot', 1, 0, 'assets/images/alivepic.gif', 'assets/images/deadpic.gif'),
(2, 'Colonel', 'MacQueen', 0, 0, 'assets/images/alivepic.gif', 'assets/images/deadpic.gif'),
(3, 'Hector', 'Dragomiroff', 1, 1, 'assets/images/alivepic.gif', 'assets/images/deadpic.gif'),
(4, 'Princess', 'Hubbard', 1, 0, 'assets/images/alivepic.gif', 'assets/images/deadpic.gif'),
(5, 'Mrs', 'Ohisson', 1, 0, 'assets/images/alivepic.gif', 'assets/images/deadpic.gif'),
(6, 'Greta', 'Michel', 1, 0, 'assets/images/alivepic.gif', 'assets/images/deadpic.gif'),
(7, 'Pierre', 'Andrenyi', 1, 0, 'assets/images/alivepic.gif', 'assets/images/deadpic.gif'),
(8, 'Count', 'Schmidt', 1, 0, 'assets/images/alivepic.gif', 'assets/images/deadpic.gif'),
(9, 'Hildegarde', 'Foscarelli', 1, 0, 'assets/images/alivepic.gif', 'assets/images/deadpic.gif'),
(10, 'Antonio', 'Masterman', 1, 0, 'assets/images/alivepic.gif', 'assets/images/deadpic.gif'),
(11, 'Edward', 'Hardman', 1, 0, 'assets/images/alivepic.gif', 'assets/images/deadpic.gif'),
(12, 'Cyrus', 'Debenham', 1, 0, 'assets/images/alivepic.gif', 'assets/images/deadpic.gif');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `detectives`
--
ALTER TABLE `detectives`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `suspects`
--
ALTER TABLE `suspects`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `detectives`
--
ALTER TABLE `detectives`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `suspects`
--
ALTER TABLE `suspects`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
