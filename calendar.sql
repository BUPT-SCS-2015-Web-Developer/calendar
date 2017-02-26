-- phpMyAdmin SQL Dump
-- version phpStudy 2014
-- http://www.phpmyadmin.net
--
-- 主机: localhost
-- 生成日期: 2017 年 02 月 16 日 17:51
-- 服务器版本: 5.5.47
-- PHP 版本: 5.3.29

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- 数据库: `calendar`
--

-- --------------------------------------------------------

--
-- 表的结构 `matters`
--

CREATE TABLE IF NOT EXISTS `matters` (
  `ID` int(11) NOT NULL,
  `datetime` datetime NOT NULL,
  `name` varchar(128) NOT NULL,
  `type` enum('blue','orange','red','green') NOT NULL,
  `detail` mediumtext NOT NULL,
  `images` varchar(32) NOT NULL,
  `locate` varchar(255) NOT NULL,
  `SID` int(11) NOT NULL,
  `QRcode` varchar(128) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- 表的结构 `notice`
--

CREATE TABLE IF NOT EXISTS `notice` (
  `NID` int(11) NOT NULL AUTO_INCREMENT,
  `ID` int(11) NOT NULL,
  `Ndetail` varchar(2048) NOT NULL,
  PRIMARY KEY (`NID`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `organizers`
--

CREATE TABLE IF NOT EXISTS `organizers` (
  `SID` int(11) NOT NULL,
  `Oname` varchar(255) NOT NULL,
  `Otype` enum('main','assist') NOT NULL,
  PRIMARY KEY (`SID`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- 表的结构 `series`
--

CREATE TABLE IF NOT EXISTS `series` (
  `SID` int(11) NOT NULL AUTO_INCREMENT,
  `Sname` varchar(255) NOT NULL,
  PRIMARY KEY (`SID`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `subscribe`
--

CREATE TABLE IF NOT EXISTS `subscribe` (
  `pkey` int(11) NOT NULL AUTO_INCREMENT,
  `userID` varchar(64) NOT NULL,
  `type` enum('notice','matters') NOT NULL,
  `ID` int(11) NOT NULL,
  PRIMARY KEY (`pkey`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
