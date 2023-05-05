-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 04, 2023 at 10:08 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.0.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `usa_acosta`
--

-- --------------------------------------------------------

--
-- Table structure for table `timed`
--

CREATE TABLE `timed` (
  `username` varchar(225) NOT NULL,
  `email` varchar(225) NOT NULL,
  `phone` bigint(11) NOT NULL,
  `messages` text NOT NULL,
  `date` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `timed`
--

INSERT INTO `timed` (`username`, `email`, `phone`, `messages`, `date`) VALUES
('ahd', 'hs2@gmail.com', 987564536, 'fsh', '2023-05-05'),
('allen', 'allen@gmail.com', 9645342212, 'aaaaaaaaaaaaa', '2023-05-05'),
('anna', 'anna@gmail.com', 9786352631, 'jjjjjjjjj', '2023-05-05'),
('ano', 'ano@gmail.com', 975463213, 'hgfdddjjse', '2023-05-05'),
('caiden', 'caiden@gmail.com', 9787654342, 'hguhsvb', '2023-05-05'),
('franz', 'franz@gmail.com', 9784673274, 'im franz', '2023-05-05'),
('hanna', 'han@gmail.com', 9878467362, 'huihbjwr', '2023-05-05'),
('janice', 'jan@gmail.com', 9564736526, 'bbsbbab', '2023-05-05'),
('jeff', 'jeff@gmail.com', 9653425635, 'hhhhhhhhhh', '2023-05-05'),
('jesi', 'jesi@gmail.com', 9875645362, 'aga', '2023-05-05'),
('jessa', 'jes@gmail.com', 9876566454, 'hi im jessa', '2023-05-05'),
('kaye', 'kaye@gmail.com', 9876545654, 'sagh', '2023-05-05'),
('kayla', 'kayla@gmail.com', 9787654322, 'annyeong', '2023-05-05'),
('kev', 'kev@gmail.com', 9876775434, 'hello', '2023-05-05'),
('kiara', 'kiara@gmail.com', 9899878643, 'hi', '2023-05-05'),
('Mhymy', 'mhy@gmail.com', 9786543423, 'mhy', '2023-05-05'),
('mica', 'mica@gmail.com', 9823214553, 'message', '2023-05-05'),
('olla', 'olla@gmail.com', 9437284532, 'hiiii', '2023-05-05'),
('try', 'try@gmail.com', 9876564534, 'try', '2023-05-05'),
('wella', 'wella@gmail.con', 9878476352, 'tghcfyegf', '2023-05-05');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `timed`
--
ALTER TABLE `timed`
  ADD PRIMARY KEY (`username`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
