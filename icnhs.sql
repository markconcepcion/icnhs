-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 18, 2020 at 07:12 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `icnhs`
--

-- --------------------------------------------------------

--
-- Table structure for table `user_account`
--

CREATE TABLE `user_account` (
  `user_id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `middlename` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `contact_no` varchar(45) NOT NULL,
  `address` varchar(200) NOT NULL,
  `post_image` varchar(255) DEFAULT NULL,
  `created_on` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `user_level` enum('guidance','registrar','teacher','parent','student') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_account`
--

INSERT INTO `user_account` (`user_id`, `username`, `password`, `firstname`, `middlename`, `lastname`, `contact_no`, `address`, `post_image`, `created_on`, `user_level`) VALUES
(0, 'admin', 'admin', 'admin', 'admin', 'admin', '09324829', 'admin', NULL, '2020-06-24 06:48:45', 'guidance'),
(1, 'admin', 'admin', 'admin', 'admin', 'admin', '09324829', 'admin', NULL, '2020-06-24 06:49:00', 'guidance'),
(0, 'registrar', 'registrar', 'registrar', 'registrar', 'registrar', '093852', 'registrar', NULL, '2020-06-26 12:03:53', 'registrar'),
(0, 'student', 'student', 'student', 'student', 'student', '0943243295', 'student', NULL, '2020-07-02 01:04:27', 'student'),
(0, 'teacher', 'teacher', 'teacher', 'teacher', 'teacher', '085342894', 'teacher', NULL, '2020-07-04 05:10:47', 'teacher'),
(0, 'parent', 'parent', 'parent', 'parent', 'parent', '098353423', 'parent', 'parent', '2020-07-04 05:20:16', 'parent');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
