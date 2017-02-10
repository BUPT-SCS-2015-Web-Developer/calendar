-- phpMyAdmin SQL Dump
-- version phpStudy 2014
-- http://www.phpmyadmin.net
--
-- 主机: localhost
-- 生成日期: 2017 年 02 月 10 日 11:40
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
  `date` date NOT NULL,
  `name` varchar(128) NOT NULL,
  `type` enum('blue','orange','red','green') NOT NULL,
  `detail` mediumtext NOT NULL,
  `images` varchar(32) NOT NULL,
  `organizer` varchar(255) NOT NULL,
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
-- 表的结构 `subscribe`
--

CREATE TABLE IF NOT EXISTS `subscribe` (
  `userID` varchar(64) NOT NULL,
  `ID` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
