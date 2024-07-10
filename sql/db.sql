SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

-- Database: `wad`
DROP DATABASE IF EXISTS `wad`;
CREATE DATABASE IF NOT EXISTS `wad` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `wad`;

-- Table structure for table `users`

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `userId` bigint(12) NOT NULL AUTO_INCREMENT,
  `fullname` varchar(50) NOT NULL DEFAULT '',
  `email` varchar(50) NOT NULL DEFAULT '',
  `username` varchar(50) NOT NULL DEFAULT '',
  `password` varchar(60) NOT NULL DEFAULT '',
  `genderId` int(1) NOT NULL DEFAULT 0,
  `roleId` int(1) NOT NULL DEFAULT 0,
  `datecreated` datetime NOT NULL DEFAULT current_timestamp(),
  `dateupdated` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`userId`),
  UNIQUE KEY `email` (`email`),
  UNIQUE KEY `username` (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

TRUNCATE TABLE `users`;

--messages
DROP TABLE IF EXISTS `messages`;
CREATE TABLE IF NOT EXISTS `messages` (
  `messageId` int(1) NOT NULL AUTO_INCREMENT,
  `sender_name` varchar(60) NOT NULL DEFAULT '',
  `sender_email` varchar(60) NOT NULL DEFAULT '',
  `subject_line` text DEFAULT NULL,
  `message` text DEFAULT NULL,
  `datecreated` datetime NOT NULL DEFAULT current_timestamp(),
  `dateupdated` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`messageId`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Truncate table before insert `messages`
--

TRUNCATE TABLE `messages`;
--
-- Dumping data for table `messages`

-- Table structure for table Bookings

DROP TABLE IF EXISTS `bookings`;
CREATE TABLE IF NOT EXISTS `users` (
  `userId` bigint(11) NOT NULL AUTO_INCREMENT,
  `fullname` varchar(50) NOT NULL DEFAULT '',
  `email` varchar(50) NOT NULL DEFAULT '',
  `username` varchar(50) NOT NULL DEFAULT '',
  `password` varchar(60) NOT NULL DEFAULT '',
  `datecreated` datetime NOT NULL DEFAULT current_timestamp(),
  `dateupdated` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`userId`),
  UNIQUE KEY `email` (`email`),
  UNIQUE KEY `username` (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

TRUNCATE TABLE `bookings`;
