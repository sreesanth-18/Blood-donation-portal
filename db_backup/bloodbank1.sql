-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jan 08, 2024 at 03:05 PM
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
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `admin_usr` varchar(50) NOT NULL,
  `admin_password` varchar(512) NOT NULL,
  PRIMARY KEY (`admin_usr`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_usr`, `admin_password`) VALUES
('admin', '21232f297a57a5a743894a0e4a801fc3');

-- --------------------------------------------------------

--
-- Table structure for table `donorreg`
--

DROP TABLE IF EXISTS `donorreg`;
CREATE TABLE IF NOT EXISTS `donorreg` (
  `donusr` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `pwd` varchar(1000) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `dname` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `dob` date NOT NULL,
  `bgroup` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `phone` varchar(15) NOT NULL,
  `email` varchar(50) NOT NULL,
  `district` varchar(30) NOT NULL,
  PRIMARY KEY (`donusr`),
  UNIQUE KEY `usrname` (`donusr`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `donorreg`
--

INSERT INTO `donorreg` (`donusr`, `pwd`, `dname`, `dob`, `bgroup`, `phone`, `email`, `district`) VALUES
('ashwin', '$2y$10$As0jQcojKBrncpNaYIzPneiVkIdvbgqbgmOC1qAz.GS0adbQLuAbe', 'Ashwin', '2000-11-17', 'A+', '8921849996', 'ashwinps122@gmail.com', 'ernakulam'),
('arjun', '$2y$10$18/BMVtamEl7Q3Kt5sT8JuB2SAxzG6xI0HQl4Lq1o2WiWFA7bcc5i', 'Arjun', '2000-12-03', 'A+', '9747751357', 'arjun@gmail.com', 'idukki'),
('anitha', '$2y$10$jrnqgUKdC.drNTvJuAqteuW5t3GXi/TUUNQd0VxhcDELfvS.5hw2m', 'Anitha', '1977-12-12', 'A+', '9539757259', 'anitha@gmail.com', 'ernakulam'),
('saiju', '$2y$10$zKyl1fLrKX/DFJOj1qus0e/cTSQu9nXtmAo8aY7g2vqm6Z9RqFReC', 'Saiju', '1970-07-12', 'A+', '8921042355', 'saiju@gmail.com', 'kottayam'),
('aiswarya', '$2y$10$kt7aBOlotwGBFBCaL1vjw.VWGFv7ss26o5Ws/iXnGpxjJFrRJHyNa', 'Aiswarya', '2003-09-01', 'A+', '9633192216', 'aiswaryabenny003@gmail.com', 'ernakulam'),
('shown', '$2y$10$7sFesu5RI42VuD67iAdG5e6vxtAk3y6M6p7EA3DX3P1V84ov8azT6', 'Shown', '2003-05-20', 'B+', '9645782254', 'shown@gmail.com', 'palakkad'),
('suni', '$2y$10$VoP3oq8prX8cKqtJNbGTA.3ne6TiSup5fQaFO0WWmF5JlVKGKujES', 'Suni', '1990-02-25', 'B-', '7736670456', 'suni@gmail.com', 'pathanamthitta'),
('abinc', '$2y$10$J6dA0DB1vsvm.Wb7YecOHOzZOuaGT1UEHX0kXuyoaLoZoTwzC9Z8O', 'abin', '2017-10-10', 'O+', '1235896210', 'abin@gmail.com', 'pathanamthitta'),
('nhjhjhj', '$2y$10$JqobcXJXO1jHnLHQoW6csOaknhLcSELyy6tMu4InQgGsLZuiIuENy', 'print', '2024-01-24', 'O+', '1234567890', 'addvv@fn.com', 'pathanamthitta');

-- --------------------------------------------------------

--
-- Table structure for table `patreg`
--

DROP TABLE IF EXISTS `patreg`;
CREATE TABLE IF NOT EXISTS `patreg` (
  `patusr` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `pwd` varchar(1000) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `pname` varchar(30) NOT NULL,
  `dob` date NOT NULL,
  `bgroup` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `district` varchar(30) NOT NULL,
  PRIMARY KEY (`patusr`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `patreg`
--

INSERT INTO `patreg` (`patusr`, `pwd`, `pname`, `dob`, `bgroup`, `email`, `phone`, `district`) VALUES
('suneesh', '$2y$10$zEAEvyz/fIW8hKvaIPUEBuP2H7VJbCyZP9/7m10r6Ckg34DGGKMNq', 'Suneesh', '2000-05-09', 'B+', 'suneesh123@gmail.com', '6958123654', 'palakkad'),
('jerin', '$2y$10$JFDUXvwiayZ9Qi2OvQMdveUDTqIZw/JhP6qMrxFbuxJSnFfTF7uNK', 'Jerin', '1995-08-30', 'B+', 'jerin123@gmail.com', '6325891253', 'ernakulam'),
('niva', '$2y$10$C/J0OeYhvL7LQ5Z/cciPE.hZsjOBkqrHsGUpXXNit9V1Kt5hDOpO.', 'Niva', '2000-08-06', 'O+', 'niva123@gmail.com', '7907506231', 'ernakulam'),
('aleena', '$2y$10$DmkJpJfhU5pLDpTc3Wz8OOmF2Jgdtyd08ZB4.MrjdAciZ6er6mUie', 'Aleena', '2000-06-12', 'A+', 'aleena123@gmail.com', '9894562301', 'ernakulam'),
('benna', '$2y$10$7/B2NzeCKPgT8cvU1C9jL.YQ69W9.yB4QuS2pELPYicfJtnK841gC', 'Beena', '1977-06-09', 'AB-', 'benna123@gmail.com', '8089654231', 'kottayam'),
('rosy', '$2y$10$5uaX7d8/jSd3i4pELKMiKequEuIqiOZfVwf0ybnPeWXFE92sHoj0G', 'Rosy', '1997-08-05', 'AB-', 'rosy123@gmail.com', '7796652035', 'kottayam'),
('maria', '$2y$10$zpotGt8iJMZmlfCIJkY14Om4fzQ7enkzfWxPAjMnJlvIhXVvWT5Xq', 'Maria', '1996-06-09', 'A+', 'maria24@gmail.com', '6238978454', 'malappuram'),
('harik', '$2y$10$wGsR2Q5XWt.FBiH35c3ZqeivlCyWcF0Kl.8KrjxI8wkUQ8OtB7QZK', 'Harikrishnan', '2003-08-12', 'O+', 'harik@gmail.com', '6832978454', 'thrissur'),
('jabira', '$2y$10$IRw585pJwhLQTaiSKnwsGOohaSPpNIP.6xv46gma.RR07JibeJz1W', 'jabir', '2024-01-16', 'O+', 'jabir@gmal.com', '1234567890', 'wayanad'),
('krish', '$2y$10$RbKGKUiDUM2QiknygbBFIOFkuRkvghI73oj5P5cUmlSBidHSwZRoa', 'Krish', '2024-01-11', 'O+', 'krish@gmail.com', '6238319787', 'thiruvananthapuram');

-- --------------------------------------------------------

--
-- Table structure for table `request`
--

DROP TABLE IF EXISTS `request`;
CREATE TABLE IF NOT EXISTS `request` (
  `request_id` int NOT NULL AUTO_INCREMENT,
  `patient_id` varchar(50) DEFAULT NULL,
  `donor_id` varchar(50) DEFAULT NULL,
  `status` enum('Pending','Approved','Declined','Cancelled','Completed') DEFAULT 'Pending',
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`request_id`),
  KEY `patient_id` (`patient_id`),
  KEY `donor_id` (`donor_id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `request`
--

INSERT INTO `request` (`request_id`, `patient_id`, `donor_id`, `status`, `created_at`, `updated_at`) VALUES
(1, 'aleena', 'ashwin', 'Approved', '2023-11-14 16:16:01', '2023-11-14 16:22:29'),
(2, 'jerin', 'ashwin', 'Pending', '2023-11-14 16:24:47', '2023-11-14 16:24:47'),
(3, 'niva', 'ashwin', 'Pending', '2023-11-14 16:25:07', '2023-11-14 16:25:07'),
(4, 'krish', 'abinc', 'Cancelled', '2024-01-08 14:22:23', '2024-01-08 14:22:37');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
