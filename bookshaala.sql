-- phpMyAdmin SQL Dump
-- version 4.7.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jun 11, 2018 at 09:36 AM
-- Server version: 5.7.19
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bookshaala`
--

-- --------------------------------------------------------

--
-- Table structure for table `book`
--

CREATE TABLE `book` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `author` varchar(30) NOT NULL,
  `subject` varchar(20) NOT NULL,
  `price` float NOT NULL,
  `dest` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `book`
--

INSERT INTO `book` (`id`, `name`, `author`, `subject`, `price`, `dest`) VALUES
(1234, 'Advanced Engineering-II', 'H.K.DASS', 'Maths', 450, 'hp.jpg'),
(2222, 'Concepts of Physics', 'H C Verma', 'Physics', 386, 'hp.jpg'),
(4444, 'Optics', 'Ajoy Ghatak', 'Physics', 690, 'hp.jpg'),
(6182, 'Power Systems Protection', 'Badri Ram', 'CS', 991, 'hp.jpg'),
(6761, 'The 8051 Microcontroller and Embedded Systems', 'Muhammad Ali Mazidi', 'ECE', 465, 'hp.jpg'),
(8189, 'Memory : A psychological view', 'J K Simmons', 'Psychology', 461, 'hp.jpg'),
(9786, 'Programming with JAVA', 'E Balagurusamy', 'CS', 372, 'hp.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` int(4) NOT NULL,
  `name` varchar(30) NOT NULL,
  `author` varchar(30) NOT NULL,
  `price` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`id`, `name`, `author`, `price`) VALUES
(1234, 'Advanced Engineering-II', 'H.K.DASS', 450),
(8189, 'Memory : A psychological view', 'J K Simmons', 461),
(9786, 'Programming with JAVA', 'E Balagurusamy', 372);

-- --------------------------------------------------------

--
-- Table structure for table `request`
--

CREATE TABLE `request` (
  `name` varchar(50) NOT NULL,
  `author` varchar(30) NOT NULL,
  `subject` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `request`
--

INSERT INTO `request` (`name`, `author`, `subject`) VALUES
('', 'aut1', 'sub1'),
('Book1', 'Authorr1', 'Subject1'),
('New Book', 'ABX Author', 'Some subject'),
('Book 213 ', 'author 1231231', 'sinoasdnkads');

-- --------------------------------------------------------

--
-- Table structure for table `sell`
--

CREATE TABLE `sell` (
  `name` varchar(30) NOT NULL,
  `author` varchar(30) NOT NULL,
  `subject` varchar(20) NOT NULL,
  `price` int(6) NOT NULL,
  `contactname` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sell`
--

INSERT INTO `sell` (`name`, `author`, `subject`, `price`, `contactname`, `email`) VALUES
('book1', 'authorrr', 'sub1', 300, 'Prakhar Vaish', 'vaish.prakhar@gmail.com'),
('some book', 'some author', 'some s', 1, 'wadsa', 'das');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `book`
--
ALTER TABLE `book`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
