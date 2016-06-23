-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jun 21, 2016 at 02:01 AM
-- Server version: 5.1.53
-- PHP Version: 5.3.4

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `cdimex`
--

-- --------------------------------------------------------

--
-- Table structure for table `dathang`
--

CREATE TABLE IF NOT EXISTS `dathang` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `mamh` int(11) NOT NULL,
  `makh` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `tensach` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `dongia` int(11) NOT NULL,
  `soluong` int(11) NOT NULL,
  `thanhtien` int(11) NOT NULL,
  `ngaydat` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  KEY `mamh` (`mamh`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

--
-- Dumping data for table `dathang`
--


-- --------------------------------------------------------

--
-- Table structure for table `dathangvanglai`
--

CREATE TABLE IF NOT EXISTS `dathangvanglai` (
  `id` int(11) NOT NULL,
  `ten` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `diachi` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `sdt` int(11) NOT NULL,
  `mamh` int(11) NOT NULL,
  `tensach` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `dongia` int(11) NOT NULL,
  `soluong` int(11) NOT NULL,
  `thanhtien` int(11) NOT NULL,
  `ngaydat` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  KEY `mamh` (`mamh`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dathangvanglai`
--


-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE IF NOT EXISTS `menu` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tenmenu` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id` (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=3 ;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`id`, `tenmenu`) VALUES
(1, 'Sách Chuyên Khảo'),
(2, 'Sách Tiếng Anh');

-- --------------------------------------------------------

--
-- Table structure for table `menu_detail`
--

CREATE TABLE IF NOT EXISTS `menu_detail` (
  `tenmenu` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `menu_id` int(11) NOT NULL,
  PRIMARY KEY (`tenmenu`),
  KEY `menu_id` (`menu_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `menu_detail`
--

INSERT INTO `menu_detail` (`tenmenu`, `menu_id`) VALUES
('Agriculture', 1),
('Business', 1),
('Computer Science', 1),
('Design', 1),
('Economics', 1),
('Education', 1),
('Engineering & Technology', 1),
('Environmental Science', 1),
('Finance & Accounting', 1),
('Management', 1),
('Marketing', 1),
('Materials Science', 1),
('Medicine', 1),
('Sciences', 1),
('Social Sciences', 1),
('Statistics', 1);

-- --------------------------------------------------------

--
-- Table structure for table `phieunhap`
--

CREATE TABLE IF NOT EXISTS `phieunhap` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `mahang` int(11) NOT NULL,
  `soluong` int(11) NOT NULL,
  `ngaynhap` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`,`mahang`),
  KEY `mahang` (`mahang`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

--
-- Dumping data for table `phieunhap`
--


-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE IF NOT EXISTS `products` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tensach` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `dongia` int(11) NOT NULL,
  `soluong` int(11) NOT NULL,
  `nhaxb` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `tacgia` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `namxb` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `hinhanh` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `detail_id` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `menu_id` int(11) NOT NULL,
  `luotmua` int(11) NOT NULL DEFAULT '0',
  `giamgia` int(11) NOT NULL DEFAULT '0',
  `ceo` text COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  KEY `detail_id` (`detail_id`),
  KEY `menu_id` (`menu_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

--
-- Dumping data for table `products`
--


-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(100) CHARACTER SET utf8 NOT NULL,
  `ten` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `diachi` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `sdt` int(11) NOT NULL,
  `hinhanh` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `level` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=40 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `ten`, `diachi`, `email`, `sdt`, `hinhanh`, `level`) VALUES
(34, 'hunganot', 'dd28e50635038e9cf3a648c2dd17ad0a', 'Phan Ngọc Hưng', '429/43 Lê Văn Sỹ', 'ngochung861@gmail.com', 0, 'image/avatar/Mr-Bean.png', '0'),
(33, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'admin', 'admin', 'admin', 0, 'image/avatar/Transparent_Troll_Face.png', '1');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `dathang`
--
ALTER TABLE `dathang`
  ADD CONSTRAINT `dathang_ibfk_1` FOREIGN KEY (`mamh`) REFERENCES `products` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `menu_detail`
--
ALTER TABLE `menu_detail`
  ADD CONSTRAINT `menu_detail_ibfk_1` FOREIGN KEY (`menu_id`) REFERENCES `menu` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `phieunhap`
--
ALTER TABLE `phieunhap`
  ADD CONSTRAINT `phieunhap_ibfk_1` FOREIGN KEY (`mahang`) REFERENCES `products` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_ibfk_1` FOREIGN KEY (`detail_id`) REFERENCES `menu_detail` (`tenmenu`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `products_ibfk_2` FOREIGN KEY (`menu_id`) REFERENCES `menu_detail` (`menu_id`) ON DELETE CASCADE ON UPDATE CASCADE;
