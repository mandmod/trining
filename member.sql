-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Oct 09, 2012 at 10:37 PM
-- Server version: 5.1.50-community
-- PHP Version: 5.3.14

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `dbtrain`
--

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

DROP TABLE IF EXISTS `member`;
CREATE TABLE IF NOT EXISTS `member` (
  `mem_id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'รหัสสมาชิค',
  `mem_name` varchar(50) NOT NULL COMMENT 'ชื่อสมาชิค',
  `mem_sname` varchar(50) NOT NULL COMMENT 'นามสกุลสมาชิก',
  `mem_sex` varchar(1) NOT NULL COMMENT 'เพศสมาชิค',
  `mem_age` varchar(2) NOT NULL COMMENT 'อายุสมาชิค',
  `mem_add` varchar(50) NOT NULL COMMENT 'ที่อยู่สมาชิค',
  `mem_salary` varchar(7) NOT NULL COMMENT 'เงินเดือนสมาชิค',
  PRIMARY KEY (`mem_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `member`
--

INSERT DELAYED IGNORE INTO `member` (`mem_id`, `mem_name`, `mem_sname`, `mem_sex`, `mem_age`, `mem_add`, `mem_salary`) VALUES
(1, 'นก', 'ใจดี', 'F', '25', 'กรุงเทพ', '15000'),
(2, 'ปลา', 'กล้าหาญ', 'F', '18', 'กรุงเทพ', '18000'),
(3, 'ไก่', 'มีสุข', 'F', '26', 'เชียงใหม่', '25000'),
(4, 'หมู', 'รักเรียน', 'M', '31', 'ระยอง', '2200'),
(5, 'กุ้ง', 'สุธิราช', 'M', '28', 'กรุงเทพ', '40000'),
(6, 'ปิติ', 'รักเรียน', 'M', '26', 'เชียงราย', '24000');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
