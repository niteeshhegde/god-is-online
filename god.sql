-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 27, 2016 at 09:14 PM
-- Server version: 5.7.9
-- PHP Version: 5.6.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `god`
--

-- --------------------------------------------------------

--
-- Table structure for table `pandits`
--

DROP TABLE IF EXISTS `pandits`;
CREATE TABLE IF NOT EXISTS `pandits` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `email` varchar(35) NOT NULL,
  `password` varchar(65) NOT NULL,
  `name` varchar(50) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `location` varchar(20) NOT NULL,
  `MarriageCeremony` varchar(20) NOT NULL,
  `NamingCeremony` varchar(15) NOT NULL,
  `Upanayana` varchar(15) NOT NULL,
  `Gruhapravesh` varchar(20) NOT NULL,
  `SatyanarayanaKatha` varchar(20) NOT NULL,
  `image` varchar(35) NOT NULL DEFAULT 'god1.png',
  `passreset` varchar(65) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `pandits`
--

INSERT INTO `pandits` (`id`, `email`, `password`, `name`, `phone`, `location`, `MarriageCeremony`, `NamingCeremony`, `Upanayana`, `Gruhapravesh`, `SatyanarayanaKatha`, `image`, `passreset`) VALUES
(3, 'niteeshhegde@gmail.com', '$2y$10$xzX0YlRYQY9cmi.bIcG5V.hNit340K3Hgdtpxll2h/EHo4PUnEyQW', 'ganapathi bhat', '123456789', 'Bengaluru', 'MarriageCeremony,', '', 'Upanayana,', '', 'SatyanarayanaKatha', 'god1.png', '0'),
(5, 'hegde@gmail.com', '$2y$10$hOaDhvdtqmFHpCWpfPQnz.aDoaMQc/TLjBJ9Wgv/SOhVlekeANv0a', 'niteesh', '123455788', 'Bengaluru', 'MarriageCeremony,', 'NamingCeremony,', 'Upanayana,', 'Gruhapravesh,', 'SatyanarayanaKatha', 'images/pandits/0164c3f303.png', NULL),
(7, '12@12.com', '$2y$10$MuG1WSCucFYyKlCM6dnjRul9FidwZn3c9.pC0XKhnFRIO14jv4pMO', 'niteesh', '111', 'Bengaluru', '', '', '', 'Gruhapravesh,', 'SatyanarayanaKatha', 'images/pandits/3cf863f46f.jpg', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `poojas109`
--

DROP TABLE IF EXISTS `poojas109`;
CREATE TABLE IF NOT EXISTS `poojas109` (
  `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT,
  `email` varchar(35) NOT NULL,
  `phone` varchar(15) DEFAULT NULL,
  `name` varchar(40) DEFAULT NULL,
  `gotra` varchar(40) DEFAULT NULL,
  `rashi` varchar(40) DEFAULT NULL,
  `nakshatra` varchar(40) DEFAULT NULL,
  `date` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `poojas110`
--

DROP TABLE IF EXISTS `poojas110`;
CREATE TABLE IF NOT EXISTS `poojas110` (
  `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT,
  `pname` varchar(50) DEFAULT NULL,
  `amount` varchar(6) DEFAULT NULL,
  `email` varchar(35) NOT NULL,
  `phone` varchar(15) DEFAULT NULL,
  `name` varchar(40) DEFAULT NULL,
  `gotra` varchar(40) DEFAULT NULL,
  `rashi` varchar(40) DEFAULT NULL,
  `nakshatra` varchar(40) DEFAULT NULL,
  `date` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `poojas110`
--

INSERT INTO `poojas110` (`id`, `pname`, `amount`, `email`, `phone`, `name`, `gotra`, `rashi`, `nakshatra`, `date`) VALUES
(1, 'kumkumarchane', '123@12', '12@12.com', '11', 'niteesh', 'asdf', 'dsa', 'qwe', '2016-06-28'),
(2, 'kumkumarchane', '123@12', '12@12.com', '11', 'niteesh', 'asdf', 'dsa', 'qwe', '2016-06-28'),
(3, 'kumkumarchane', '123@12', 'niteeshhegde@gmail.com', '11', 'niteesh', 'asdf', 'dsa', 'qwe', '2016-07-07'),
(4, 'kumkumarchane', '123@12', 'niteeshhegde@gmail.com', '11', 'niteesh', 'asdf', 'dsa', 'qwe', '2016-07-07'),
(5, 'kumkumarchane', '123@12', 'niteeshhegde@gmail.com', '11', 'niteesh', 'asdf', 'dsa', 'qwe', '2016-07-07');

-- --------------------------------------------------------

--
-- Table structure for table `poojas111`
--

DROP TABLE IF EXISTS `poojas111`;
CREATE TABLE IF NOT EXISTS `poojas111` (
  `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT,
  `pname` varchar(50) DEFAULT NULL,
  `amount` varchar(10) DEFAULT NULL,
  `email` varchar(35) NOT NULL,
  `phone` varchar(15) DEFAULT NULL,
  `name` varchar(40) DEFAULT NULL,
  `gotra` varchar(40) DEFAULT NULL,
  `rashi` varchar(40) DEFAULT NULL,
  `nakshatra` varchar(40) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `code` varchar(15) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `poojas111`
--

INSERT INTO `poojas111` (`id`, `pname`, `amount`, `email`, `phone`, `name`, `gotra`, `rashi`, `nakshatra`, `date`, `code`) VALUES
(1, 'kumkumarchane', 'aaa', 'niteeshhegde@gmail.com', '123456', '123456', '123456', '123456', '123456', '2016-07-05', '837730'),
(2, 'kumkumarchane', 'aaa', 'niteeshhegde@gmail.com', '123456', '123456', '123456', '123456', '123456', '2016-07-05', '428563'),
(3, 'kumkumarchane', 'aaa', 'niteeshhegde@gmail.com', '123456', '123456', '123456', '123456', '123456', '2016-07-05', '744736'),
(4, 'kumkumarchane', 'aaa', 'niteeshhegde@gmail.com', '123456', '123456', '123456', '123456', '123456', '2016-07-05', '665851'),
(5, 'kumkumarchane', 'aaa', 'niteeshhegde@gmail.com', '123456', '123456', '123456', '123456', '123456', '2016-07-05', '980997'),
(6, 'kumkumarchane', 'aaa', 'niteeshhegde@gmail.com', '123456', '123456', '123456', '123456', '123456', '2016-07-05', '987674'),
(7, 'kumkumarchane', 'aaa', 'niteeshhegde@gmail.com', '123456', '123456', '123456', '123456', '123456', '2016-07-05', '400616'),
(8, 'kumkumarchane', 'aaa', 'niteeshhegde@gmail.com', '123456', '123456', '123456', '123456', '123456', '2016-07-05', '993414'),
(9, 'kumkumarchane', 'aaa', 'niteeshhegde@gmail.com', '123456', '123456', '123456', '123456', '123456', '2016-07-05', '372247'),
(10, 'kumkumarchane', 'aaa', 'niteeshhegde@gmail.com', '123456', '123456', '123456', '123456', '123456', '2016-07-05', '670051'),
(11, 'kumkumarchane', 'aaa', 'niteeshhegde@gmail.com', '123456', '123456', '123456', '123456', '123456', '2016-07-05', '73929'),
(12, 'kumkumarchane', 'aaa', 'niteeshhegde@gmail.com', '123456', '123456', '123456', '123456', '123456', '2016-07-05', '854407'),
(13, 'kumkumarchane', 'aaa', 'niteeshhegde@gmail.com', '123456', '123456', '123456', '123456', '123456', '2016-07-05', '685701');

-- --------------------------------------------------------

--
-- Table structure for table `temple93`
--

DROP TABLE IF EXISTS `temple93`;
CREATE TABLE IF NOT EXISTS `temple93` (
  `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(30) NOT NULL,
  `whatitis` varchar(60) DEFAULT NULL,
  `benefits` varchar(60) DEFAULT NULL,
  `amount` varchar(10) DEFAULT NULL,
  `timing` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `temple94`
--

DROP TABLE IF EXISTS `temple94`;
CREATE TABLE IF NOT EXISTS `temple94` (
  `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(30) NOT NULL,
  `whatitis` varchar(60) DEFAULT NULL,
  `benefits` varchar(60) DEFAULT NULL,
  `amount` varchar(10) DEFAULT NULL,
  `timing` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `temple95`
--

DROP TABLE IF EXISTS `temple95`;
CREATE TABLE IF NOT EXISTS `temple95` (
  `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(30) NOT NULL,
  `whatitis` varchar(60) DEFAULT NULL,
  `benefits` varchar(60) DEFAULT NULL,
  `amount` varchar(10) DEFAULT NULL,
  `timing` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `temple96`
--

DROP TABLE IF EXISTS `temple96`;
CREATE TABLE IF NOT EXISTS `temple96` (
  `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(30) NOT NULL,
  `whatitis` varchar(60) DEFAULT NULL,
  `benefits` varchar(60) DEFAULT NULL,
  `amount` varchar(10) DEFAULT NULL,
  `timing` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `temple96`
--

INSERT INTO `temple96` (`id`, `name`, `whatitis`, `benefits`, `amount`, `timing`) VALUES
(1, 'kumkumarchane', 'sss', 'as', 'as', 'as'),
(2, 'sa', 'sc', 'sac', 'sac', 'sac');

-- --------------------------------------------------------

--
-- Table structure for table `temple97`
--

DROP TABLE IF EXISTS `temple97`;
CREATE TABLE IF NOT EXISTS `temple97` (
  `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(30) NOT NULL,
  `whatitis` varchar(60) DEFAULT NULL,
  `benefits` varchar(60) DEFAULT NULL,
  `amount` varchar(10) DEFAULT NULL,
  `timing` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `temple97`
--

INSERT INTO `temple97` (`id`, `name`, `whatitis`, `benefits`, `amount`, `timing`) VALUES
(1, 'kumkumarchane', '11', '111', '1111', '11111'),
(2, 'rudrabhishekha', '1', '11', '111', '11111');

-- --------------------------------------------------------

--
-- Table structure for table `temple98`
--

DROP TABLE IF EXISTS `temple98`;
CREATE TABLE IF NOT EXISTS `temple98` (
  `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(30) NOT NULL,
  `whatitis` varchar(60) DEFAULT NULL,
  `benefits` varchar(60) DEFAULT NULL,
  `amount` varchar(10) DEFAULT NULL,
  `timing` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `temple98`
--

INSERT INTO `temple98` (`id`, `name`, `whatitis`, `benefits`, `amount`, `timing`) VALUES
(1, 'kumkumarchane', 'assssssssssssssssa', 'aaaaaaaaaaaaaaaaaaaaaaaa', '10', 'sssaaaaaaaaaaaaa');

-- --------------------------------------------------------

--
-- Table structure for table `temple99`
--

DROP TABLE IF EXISTS `temple99`;
CREATE TABLE IF NOT EXISTS `temple99` (
  `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(30) NOT NULL,
  `whatitis` varchar(100) DEFAULT NULL,
  `benefits` varchar(100) DEFAULT NULL,
  `amount` varchar(10) DEFAULT NULL,
  `timing` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `temple109`
--

DROP TABLE IF EXISTS `temple109`;
CREATE TABLE IF NOT EXISTS `temple109` (
  `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(30) NOT NULL,
  `whatitis` varchar(100) DEFAULT NULL,
  `benefits` varchar(100) DEFAULT NULL,
  `amount` varchar(10) DEFAULT NULL,
  `timing` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `temple110`
--

DROP TABLE IF EXISTS `temple110`;
CREATE TABLE IF NOT EXISTS `temple110` (
  `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(30) NOT NULL,
  `whatitis` varchar(100) DEFAULT NULL,
  `benefits` varchar(100) DEFAULT NULL,
  `amount` varchar(10) DEFAULT NULL,
  `timing` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `temple110`
--

INSERT INTO `temple110` (`id`, `name`, `whatitis`, `benefits`, `amount`, `timing`) VALUES
(1, 'kumkumarchane', '123@123.com', '123@123.com', '123@12', '123@123.com');

-- --------------------------------------------------------

--
-- Table structure for table `temple111`
--

DROP TABLE IF EXISTS `temple111`;
CREATE TABLE IF NOT EXISTS `temple111` (
  `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(30) NOT NULL,
  `whatitis` varchar(100) DEFAULT NULL,
  `benefits` varchar(100) DEFAULT NULL,
  `amount` varchar(10) DEFAULT NULL,
  `timing` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `temple111`
--

INSERT INTO `temple111` (`id`, `name`, `whatitis`, `benefits`, `amount`, `timing`) VALUES
(1, 'kumkumarchane', 'aaa', 'aaa', 'aaa', 'aaa');

-- --------------------------------------------------------

--
-- Table structure for table `temples`
--

DROP TABLE IF EXISTS `temples`;
CREATE TABLE IF NOT EXISTS `temples` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `email` varchar(35) NOT NULL,
  `password` varchar(65) NOT NULL,
  `name` varchar(65) NOT NULL,
  `location` varchar(65) NOT NULL,
  `locality` varchar(100) NOT NULL,
  `lord` varchar(35) NOT NULL,
  `description` varchar(1000) NOT NULL,
  `history` varchar(500) NOT NULL,
  `timing` varchar(300) NOT NULL,
  `image` varchar(65) DEFAULT 'Iskcon-Bangalore.pjg',
  `poojas` varchar(100) DEFAULT NULL,
  `passreset` varchar(65) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=112 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `temples`
--

INSERT INTO `temples` (`id`, `email`, `password`, `name`, `location`, `locality`, `lord`, `description`, `history`, `timing`, `image`, `poojas`, `passreset`) VALUES
(91, 'nsssssn@gmail.com', '$2y$10$oUcVRkSOFefhYxDNVg4Z.ukgkXrZNafQLhmN3eXXPJ40Pcur63C.W', 'aaaaaa', 'Bengaluru', 'aaaaaaaaaaaaaa', 'ganapati', '1asasad df  dfffffffffffffffff eeeeeeeeeeeeee eeeeeeeeeeeee wwww', '1asff', '1AFSasa', 'images/temples/e27a60a7cd.jpg', NULL, NULL),
(92, 'nnnn111@gmail.com', '$2y$10$CDNqnFZyH/nQgSfLVn27T.EhgeUKQpvVpsSM/YAyFKsXIUSedLfAS', 'niteesh', 'Bengaluru', 'nnnnnnnnnnn', 'ganapati', 'nnnnnnnnn', 'nnnnnnn', 'nnnnnnn', 'images/temples/fb3a5ce765.jpg', NULL, NULL),
(93, 'nnnna111@gmail.com', '$2y$10$B6G30O0e.EhD37JWCl3GteEIrg6/DeJYdfTc9ffuXs7x9bEI6HC0K', 'niteesh', 'Bengaluru', 'nnnnnnnnnnn', 'ganapati', 'nnnnnnnnn', 'nnnnnnn', 'nnnnnnn', 'images/temples/1e21f68758.jpg', NULL, NULL),
(94, 'nsnnna111@gmail.com', '$2y$10$Nh0C7OQUoUwX9rNNguvNAOdk6YvgoWKqDzXTMlR4wOhHXxUit0on6', 'niteesh', 'Bengaluru', 'nnnnnnnnnnn', 'ganapati', 'nnnnnnnnn', 'nnnnnnn', 'nnnnnnn', 'images/temples/56b3203615.jpg', NULL, NULL),
(95, 'aaa@a.com', '$2y$10$s9RAW1cXfZ63plHFEwBhK..O17bIqVlSC4ZRhbDaTSJ8e7FBzFeD6', 'SSS', 'Bengaluru', 'sSS', 'ganapati', 'S', 'S', 'S', 'images/temples/ec1546152a.png', NULL, NULL),
(96, 'aaaa@zz.com', '$2y$10$dt1CcfpxR6qEo0ObdAgBC.waJl4EjgATbM37Ybtg.P4TIjFba2.Fa', '11', 'Bengaluru', '11', 'ganapati', '111', '1111111', '11111111', 'images/temples/4b5a622476.png', NULL, NULL),
(97, '12@12.com', '$2y$10$W7UFzr.z6m/jBvYrein5CeetA6gGazjd1Cgf/0pITfr1b/3bmxNiS', '12@12.comm', 'Bengaluru', '12@12.comm', 'ganapati', '12@12.comm', '12@12.comm', '12@12.comm', 'images/pandits/41570ae5f1.png', 'kumkumarchane rudrabhishekha', NULL),
(98, 'niteeshhegde@gmail.com', '$2y$10$kC10ecyPGrjM4x7dOk/ZTeTG1VfF73cXiToNM.V/xtMuqHQ0yCKfS', 'niteesh', 'mumbai', 'basavanagudi', 'vishnu', '$query = "SELECT id, email, password, name, location, locality, lord ,description, image FROM temples WHERE location = ? ', '$query = "SELECT id, email, password, name, location, locality, lord ,description, im$query = "SELECT id, email, password, name, location, locality, lord ,description, image FROM temples WHERE location = ? age FROM temples WHERE location = ? ', '$query = "SELECT id, email, password, name, location, locality, lord ,description, image FROM temples WHERE location = ? ', 'images/temples/bfbbb958e1.png', ' kumkumarchane', '0'),
(99, '111111@1111.com', '$2y$10$jHzGgHRpLkXi/vRkI0WlJ.3WZcIEUUz5Ej14c.HmOwtLpeum.nB8a', '111111@1111.com', 'Bengaluru', '111111@1111.com', 'ganapati', '111111@1111.com', '111111@1111.com', '111111@1111.com', 'images/temples/1dbeec6a45.jpg', NULL, NULL),
(100, '11@99.com', '$2y$10$n7SDaR6JrV.tjRRVgutwaOjX6nEgJd/qTuj47HaucdQ/JVjYIiXPS', '11@99.com', 'Bengaluru', '11@99.com', 'ganapati', '11@99.com', '11@99.com', '11@99.com', 'images/temples/ebf051b54b.png', NULL, NULL),
(101, '11@22222.com', '$2y$10$tllfM8/AYVlcpKq.KXhjuOjz8AETAx7Y72VeBcTo.9OoGs49qltv6', '11', 'Bengaluru', '11', 'ganapati', '1', '1111', '111111', 'images/temples/dcd312ba07.png', NULL, NULL),
(102, 'aa@000.com', '$2y$10$vaCniRmfw14.wivIkF1XZ.utULPjs5DT1OG40oE4dFQPL3dwjSj/m', 'aa@000.com', 'Bengaluru', 'aa@000.com', 'ganapati', 'aa@000.com', 'aa@000.com', 'aa@000.com', 'images/temples/8f8ba3eec6.jpg', NULL, NULL),
(104, 'aa@000f.com', '$2y$10$1zNbDk0/ZNhuzCVhFsRum.GY9lfnd371sM5g.BDWT9YE/vvrZsGr.', 'aa@000.com', 'Bengaluru', 'aa@000.com', 'ganapati', 'aa@000.com', 'aa@000.com', 'aa@000.com', 'images/temples/e1ec1d337d.jpg', NULL, NULL),
(105, 'aa@0005f.com', '$2y$10$Kr2WtSbIUaFgxhyz3cPtSekmVn16f4HPVhLt6xVggAZQ5yWs1TOba', 'aa@000.com', 'Bengaluru', 'aa@000.com', 'ganapati', 'aa@000.com', 'aa@000.com', 'aa@000.com', 'images/temples/61e54a961f.jpg', NULL, NULL),
(106, 'aa@00d05f.com', '$2y$10$00suNagPLy6nIK2Q6FSYE.3uXkPVs9oXoYlEuVzmEq.F5kp5mng.2', 'aa@000.com', 'Bengaluru', 'aa@000.com', 'ganapati', 'aa@000.com', 'aa@000.com', 'aa@000.com', 'images/temples/6333a0c76b.jpg', NULL, NULL),
(107, 'aax@00d05f.com', '$2y$10$Rq2JLJW3.gyjUIJ5KdI4cO.QGYWu/9bRER3t5HrAP0v.0bUMKpi9e', 'aa@000.com', 'Bengaluru', 'aa@000.com', 'ganapati', 'aa@000.com', 'aa@000.com', 'aa@000.com', 'images/temples/9b4f3ff461.jpg', NULL, NULL),
(109, 'zaax@00d05f.com', '$2y$10$kmYUW4FFlQaMQ5Gw6TKDuuE6/4RS2KXYn0Ibif8Ip/Kj/R.5ei7yK', 'aa@000.com', 'Bengaluru', 'aa@000.com', 'ganapati', 'aa@000.com', 'aa@000.com', 'aa@000.com', 'images/temples/837d422232.jpg', NULL, NULL),
(110, '123@123.com', '$2y$10$lyl7tyHitPkPa6IFWycKLurRm3adHivOZ6Q3DqwN9yy89GQm08VM6', '123@123.com', 'Bengaluru', '123@123.com', 'ganapati', '123@123.com', '123@123.com', '123@123.com', 'images/temples/9f3c58bc54.png', ' kumkumarchane', NULL),
(111, '1112@222.com', '$2y$10$ShkDl.XfgxAvwgd1vvxcP.njPDK1i4gS5tY/cNb93glaGEpjwf3zu', 'aaa', 'Bengaluru', 'aaa', 'ganapati', 'aaa', 'aaa', 'aaa', 'images/temples/082432512f.jpg', ' kumkumarchane', NULL);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
