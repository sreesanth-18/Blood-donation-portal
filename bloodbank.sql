-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Sep 22, 2023 at 01:21 PM
-- Server version: 8.0.31
-- PHP Version: 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bloodbank`
--

-- --------------------------------------------------------

--
-- Table structure for table `donorreg`
--

DROP TABLE IF EXISTS `donorreg`;
CREATE TABLE IF NOT EXISTS `donorreg` (
  `usrname` varchar(50) NOT NULL,
  `pwd` varchar(50) NOT NULL,
  `dname` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `dob` date NOT NULL,
  `bgroup` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `phone` int NOT NULL,
  `email` varchar(50) NOT NULL,
  `district` varchar(30) NOT NULL,
  PRIMARY KEY (`usrname`),
  UNIQUE KEY `usrname` (`usrname`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `donorreg`
--

INSERT INTO `donorreg` (`usrname`, `pwd`, `dname`, `dob`, `bgroup`, `phone`, `email`, `district`) VALUES
('tfdghy', 'htffhyu', 'def', '2023-05-30', 'A1-', 126537, 'hayeh@gamil.com', 'thrissur'),
('', 'd41d8cd98f00b204e9800998ecf8427e', '', '0000-00-00', '', 0, '', ''),
('vicpin', 'fcea920f7412b5da7be0cf42b8c93759', 'Victoria pinacol ', '2002-03-30', 'A+', 126537, 'vici045pin@gmail.com', 'ernakulam'),
('Jamey', 'fcea920f7412b5da7be0cf42b8c93759', 'alpha Jamey', '2002-09-12', 'A+', 126537, 'jameylphy@gmail.com', 'ernakulam'),
('melelan', 'fcea920f7412b5da7be0cf42b8c93759', 'melena Laster ', '1998-06-04', 'A+', 1234567, 'mela23vgjs@gmail.com', 'ernakulam'),
('cinna', 'fcea920f7412b5da7be0cf42b8c93759', 'Cinna camely ', '2000-05-09', 'A+', 1234567, 'cinnavgjs@gmail.com', 'ernakulam'),
('kilo', 'fcea920f7412b5da7be0cf42b8c93759', 'kinder venus ', '1999-09-12', 'A+', 1234567, 'venuskin234js@gmail.com', 'ernakulam'),
('hexa', 'fcea920f7412b5da7be0cf42b8c93759', 'Hexi Lina', '2006-08-12', 'B+', 1235678, 'hexalina@gmail.com', 'ernakulam'),
('beladom', 'fcea920f7412b5da7be0cf42b8c93759', 'Dominic Bela', '1995-02-08', 'B+', 1235678, 'bela56dom@gmail.com', 'wayanad'),
('alihom', 'fcea920f7412b5da7be0cf42b8c93759', 'Ali hola', '1997-06-12', 'B+', 1235678, 'bali45frg@gmail.com', 'kozhikode');

-- --------------------------------------------------------

--
-- Table structure for table `patreg`
--

DROP TABLE IF EXISTS `patreg`;
CREATE TABLE IF NOT EXISTS `patreg` (
  `usrname` varchar(30) NOT NULL,
  `pwd` varchar(30) NOT NULL,
  `pname` varchar(30) NOT NULL,
  `dob` date NOT NULL,
  `bgroup` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` int NOT NULL,
  `district` varchar(30) NOT NULL,
  PRIMARY KEY (`usrname`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `patreg`
--

INSERT INTO `patreg` (`usrname`, `pwd`, `pname`, `dob`, `bgroup`, `email`, `phone`, `district`) VALUES
('', '', '', '0000-00-00', '', '', 0, ''),
('adina', '827ccb0eea8a706c4c34a16891f84e', 'Adina  ', '2007-03-12', 'A+', 'adina27@gmail.com', 1234567, 'ernakulam'),
('billa', '827ccb0eea8a706c4c34a16891f84e', 'Bilana', '2006-07-06', 'A+', 'bilana27@gmail.com', 1234567, 'ernakulam'),
('ree', 'ab56b4d92b40713acc5af89985d4b7', 'riyan', '2006-07-06', 'A+', 'riyana12@gmail.com', 1234567, 'ernakulam');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
