-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Oct 04, 2023 at 04:35 AM
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
('sreesanth', '25d55ad283aa400af464c76d713c07ad', 'Sreesanth', '2003-02-07', 'O+', '2147483647', 'sreesanthciby@gmail.com', 'ernakulam'),
('aish', '25d55ad283aa400af464c76d713c07ad', 'Aiswarya', '2023-09-14', 'A+', '2147483647', 'aiswaryabenny003@gmail.com', 'ernakulam'),
('afasf', '$2y$10$g2sI4fkuUiDiyjgP92VeI.hXvJ7Pb.XkwZ.Tnr0GKWQXPDNrSU8OS', 'asdghgsa', '2023-09-28', 'Bombay Blood Group', '0', 'asfsaf@gmail.com', 'thiruvananthapuram'),
('jvuvuyv', '$2y$10$FxlbCeShXmT/IWHVx7XVKOPle7ZQ548na1YA/xSILfnvKaMFoxA2G', 'ZXGSDGSDG', '2023-09-19', 'O+', '0', 'ASgsagasg@jb.vom', 'pathanamthitta'),
('sdfgsgsg', '$2y$10$/EkbdesODH8EUKUFoGB9G.xmR6nwDKxBE4P7xxaARy5JLlNM7MpTW', 'zdfhdh', '2023-09-28', 'B-', '0', 'sdgdsg@gmail.vom', 'thiruvananthapuram'),
('asfasfasf', '$2y$10$H3CQCfcCv4C2cM13TCmxGeT.ZqpM9qFHZoF67hEXP2prqXXv2Hv.W', 'dsgasgg', '2023-09-28', 'B-', '0', 'asfaf@ghdsah.vom', 'wayanad'),
('dsggsdg', '$2y$10$KoPuusIGt9N/mQlZ2kjOH.8BSmucSyHgmzSOUNnJZU1d8/RSryEhK', 'safassa', '2023-09-28', 'Bombay Blood Group', '0', 'sfafsa@gam.vom', 'wayanad'),
('asafgga', '$2y$10$BFXOq3BHGkpdLrzrgF1eEuxp10YmHJ6NfPk1dhIfTH.6p.0rcyHm2', 'fdzxzdhdf', '2023-09-28', 'B-', '51', 'afasfgas@gmail.com', 'pathanamthitta'),
('asdaf', '$2y$10$ATA4N9saryzC2JG1Jf6YNuDHkv/zdGuNGV70RW5tG13GZH7e98j/G', 'afdsf', '2023-10-19', 'B-', '2147483647', 'asa@gmail.com', 'wayanad'),
('assd', '$2y$10$TygUeg06ksaFidU/1Gz81OKlLHDx9niPzFdPaD7OrkEMrQgZxG4ii', 'assd', '2023-10-26', 'B-', '2147483647', 'safaf@gmail.com', 'palakkad'),
('safafgsaf', '$2y$10$Qs458EhI7Mz4F2Zj2Icx/efs7/IX0oVKsEpqY7RlZuIFe52Png91q', 'asfafsaf', '2023-10-01', 'O+', '1234567890', 'asfsaf@gmail.com', 'pathanamthitta'),
('user1', '$2y$10$J5st6XKgplKieDpxE.yZZ.3E5hUXiiff1YBFFsuo7RtZJ9u3MrNz6', 'sree', '2023-10-01', 'B-', '2147483647', 'asfsafaf@ghu.cvom', 'wayanad'),
('asfsafsaf', '$2y$10$Oz0eOLaNhf8oFAdQWCNBFuRnSiPP2MMq47oteb12mSXObYVUpw0Iy', 'asfasfsaf', '2023-10-18', 'B-', '2147483647', 'asfaf@jbkj.com', 'wayanad'),
('asdfghjkl', '$2y$10$JCqMJI01hQpY0M3iiuk6ROy0yCR51ZZmJXA32lLTyFD6eBTrBy3y6', 'zzfgasa', '2023-10-12', 'O+', '6238319787', 'safasfas@giug.com', 'wayanad'),
('harik10', '$2y$10$vbQLnwFT1f85MirUlSRIyOoeQpzYkwqQowQt/TpsQcjR6elJUT1Mq', 'Harikrishanan', '2023-10-02', 'O+', '1234567890', 'hari@gmail.com', 'ernakulam'),
('vishnu', '$2y$10$smJ1iE3RYshI6kxKbaFWmODx2f8T46ABU1018CVhi8JytleonFQGC', 'Vishnu', '2023-10-04', 'O+', '1234567890', 'vishnu@gmail.com', 'ernakulam');

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
('sreesanth', '25f9e794323b453885f5181f1b624d', 'Sreesanth', '2023-08-30', 'O+', 'sreesanthciby@gmail.com', '2147483647', 'ernakulam'),
('ais', 'sdsfsfgf', 'ais', '2023-09-07', 'A+', 'asi@gmail.com', '1234546', 'ekm'),
('shown', '25d55ad283aa400af464c76d713c07', 'shown', '2002-06-04', 'O+', 'shown@gmail.com', '123456498', 'ernakulam'),
('ir7an', '3fab1ba5edb631f263fd9cf64cf087', 'irfan', '2023-09-22', 'O+', 'irfan@gmail.com', '12345678', 'alappuzha'),
('abc', '$2y$10$7QFufY/zzqLmlElf3ddIDOf', 'abc', '2023-09-28', 'O+', 'abc@gmail.c', '123456', 'wayanad'),
('abcd', '$2y$10$vzJ053v1gKPCdE1zMMEH8.sbt3hLn5kVRFSdO1/MZAyG11O9K5BBu', 'aaa', '2023-09-23', 'O+', 'abc@gmail.com', '1234567899', 'thiruvananthapuram'),
('abcde', '$2y$10$tStXAVXMZtE8oBxcrAVXze1cs8v1beT9q8Nyyj24dBsWBxW1L9T.K', 'safgasfg', '2023-09-23', 'B+', 'safasf@gmail.com', '0', 'kottayam'),
('sadfaf', '$2y$10$sBC131T8qrqpcJxUlfg7DeNINbs/m9Woi4ItSvBpqDY4My1AhGCYO', 'hdtjhj', '2023-09-23', 'Bombay Blood Group', 'djdjjg@hnjn.com', '0', 'palakkad'),
('afasfas', '$2y$10$0BaF0rdRYt.VG6rwGaY82u0gyRG8ZlVMkd8H680/uME6PiUXVVrVa', 'sdgsghah', '2023-09-20', 'Bombay Blood Group', 'hash@hnjnb.vom', '1234567891', 'pathanamthitta'),
('asdfasf', '$2y$10$5l4khphqYR2GEkUXvd844uOo/ALIOoGrVj3wN/P60DZNW17RQch8q', 'asffs', '2023-10-01', 'AB+', 'asdas@mn.com', '2147483647', 'wayanad'),
('asdf', '$2y$10$31oh2kCuOBOUKSjvnpu08eLhdhKXnuey44zPCEjw.LvRulx6cdSpO', 'asdfg', '2023-10-02', 'O+', 'asfas@gmail.com', '6238319787', 'thiruvananthapuram'),
('shan', '$2y$10$R6aiPli9TEUsaJLwkFm5p.8rHin7/9805rvs2N/QuKgQsl1QC9TEe', 'shan', '2023-10-02', 'O+', 'shan@gmail.com', '1234567890', 'thrissur'),
('qwert', '$2y$10$F3GTO3puM3jYKdOQwRWIg.tntl5QO.1q51E9R3Ab9SsuLCnvqsIoW', 'qwert', '2023-10-02', 'O-', 'qwet@fgsge.vpm', '1234567890', 'thiruvananthapuram'),
('aishu', '$2y$10$jWutdK7FyCYHSYaVPhQlFO5dxPhSZAZzlHbZxKeltVEkq29wcnB5q', 'Aiswarya', '2003-09-01', 'A+', 'aiswarya@gmail.com', '9633192216', 'ernakulam');

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
) ENGINE=MyISAM AUTO_INCREMENT=24 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `request`
--

INSERT INTO `request` (`request_id`, `patient_id`, `donor_id`, `status`, `created_at`, `updated_at`) VALUES
(1, 'asdf', 'sreesanth', 'Cancelled', '2023-10-02 15:06:14', '2023-10-03 18:28:49'),
(5, 'shan', 'asdfghjkl', 'Approved', '2023-10-02 17:05:45', '2023-10-04 03:39:38'),
(4, 'shan', 'harik10', 'Approved', '2023-10-02 17:01:47', '2023-10-04 03:39:45'),
(6, 'shan', 'asdfghjkl', 'Cancelled', '2023-10-02 17:06:12', '2023-10-04 03:40:02'),
(7, 'shan', 'jvuvuyv', 'Cancelled', '2023-10-02 17:06:32', '2023-10-04 03:40:03'),
(8, 'asdf', 'asdfghjkl', 'Cancelled', '2023-10-02 17:07:29', '2023-10-03 18:28:49'),
(9, 'asdf', 'asdfghjkl', 'Cancelled', '2023-10-02 17:10:10', '2023-10-03 18:28:48'),
(10, 'asdf', 'asdfghjkl', 'Cancelled', '2023-10-02 17:21:29', '2023-10-03 18:28:47'),
(11, 'asdf', 'jvuvuyv', 'Cancelled', '2023-10-02 17:25:31', '2023-10-03 18:28:47'),
(12, 'asdf', 'safafgsaf', 'Cancelled', '2023-10-02 17:25:46', '2023-10-03 18:28:46'),
(13, 'asdf', 'asdfghjkl', 'Cancelled', '2023-10-02 17:26:29', '2023-10-03 18:28:45'),
(14, 'asdf', 'harik10', 'Cancelled', '2023-10-02 17:27:16', '2023-10-03 09:54:29'),
(15, 'asdf', 'aish', 'Approved', '2023-10-02 17:27:23', '2023-10-03 09:54:24'),
(16, 'asdf', 'aish', 'Cancelled', '2023-10-02 17:35:59', '2023-10-03 18:20:30'),
(17, 'asdf', 'aish', 'Declined', '2023-10-03 10:06:50', '2023-10-03 18:20:37'),
(18, 'aishu', 'aish', 'Approved', '2023-10-04 03:42:35', '2023-10-04 03:45:24'),
(19, 'asdf', 'safafgsaf', 'Cancelled', '2023-10-04 03:48:13', '2023-10-04 04:23:13'),
(20, 'asdf', 'sreesanth', 'Pending', '2023-10-04 03:48:19', '2023-10-04 03:48:19'),
(21, 'asdf', 'jvuvuyv', 'Pending', '2023-10-04 04:01:00', '2023-10-04 04:01:00'),
(22, 'asdf', 'safafgsaf', 'Pending', '2023-10-04 04:07:03', '2023-10-04 04:07:03'),
(23, 'asdf', 'vishnu', 'Approved', '2023-10-04 04:22:47', '2023-10-04 04:24:26');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
