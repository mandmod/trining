-- phpMyAdmin SQL Dump
-- version 3.2.1
-- http://www.phpmyadmin.net
--
-- โฮสต์: localhost
-- เวลาในการสร้าง: 
-- รุ่นของเซิร์ฟเวอร์: 5.1.37
-- รุ่นของ PHP: 5.2.10

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- ฐานข้อมูล: `dbtrain`
--
CREATE DATABASE `dbtrain` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `dbtrain`;

-- --------------------------------------------------------

--
-- โครงสร้างตาราง `customer`
--

CREATE TABLE IF NOT EXISTS `customer` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `surname` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- dump ตาราง `customer`
--

INSERT INTO `customer` (`id`, `name`, `surname`) VALUES
(1, 'ปิติ', 'รักเรียน'),
(2, 'ชูใจ', 'กล้าหาญ');

-- --------------------------------------------------------

--
-- โครงสร้างตาราง `department`
--

CREATE TABLE IF NOT EXISTS `department` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `header` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- dump ตาราง `department`
--

INSERT INTO `department` (`id`, `name`, `header`) VALUES
(1, 'บัญชี', 'สมศรี'),
(2, 'ขนส่ง', 'สมชาย'),
(3, 'IT', 'สมปอง');

-- --------------------------------------------------------

--
-- โครงสร้างตาราง `member`
--

CREATE TABLE IF NOT EXISTS `member` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `surname` varchar(255) NOT NULL,
  `sex` varchar(1) NOT NULL,
  `age` int(11) NOT NULL,
  `address` varchar(255) NOT NULL,
  `salary` double NOT NULL,
  `dept` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=13 ;

--
-- dump ตาราง `member`
--

INSERT INTO `member` (`id`, `name`, `surname`, `sex`, `age`, `address`, `salary`, `dept`) VALUES
(1, 'ปิติ', 'ใจกล้า', 'M', 25, 'กรุงเทพ', 18000, 1),
(2, 'นก', 'ตั้งใจเรียน', 'F', 17, 'กรุงเทพ', 9000, 2),
(4, 'david', 'beckham', 'M', 30, 'usa', 50000, 1),
(3, 'ไก่', 'มีสุข', 'F', 30, 'เชียงใหม่', 28000, 1),
(5, 'นัท', 'มีเรีย', 'F', 27, 'ระยอง', 34000, 3),
(7, 'ปลา', 'เก่งงาน', 'F', 23, 'เชียงใหม่', 25000, 3),
(8, 'ปู', 'สายเสมอ', 'F', 17, 'กรุงเทพ', 22000, 2),
(9, 'กุ้ง', 'เก่งงาน', 'M', 24, 'ระยอง', 23000, 1),
(10, 'กิต', 'เรียนดี', 'M', 38, 'เชียงใหม่', 40000, 1),
(6, 'กอลฟ์', 'ใจดี', 'M', 16, 'กรุงเทพ', 8000, 2),
(12, 'มานะ', 'ตั้งใจเรียน', 'M', 18, 'กรุงเทพ', 20000, 3);
