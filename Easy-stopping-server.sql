-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: 2014 年 6 月 14 日 11:17
-- サーバのバージョン： 5.6.16
-- PHP Version: 5.5.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `Easy-stopping-server`
--

-- --------------------------------------------------------

DROP TABLE IF EXISTS `bikes`,`clients`,`parking_ends`,`parking_places`,`parking_starts`,`users`;

--
-- テーブルの構造 `bikes`
--

CREATE TABLE IF NOT EXISTS `bikes` (
  `bike_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `type` varchar(100) NOT NULL,
  `size` varchar(100) NOT NULL,
  PRIMARY KEY (`bike_id`),
  UNIQUE KEY `user_id` (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- テーブルの構造 `clients`
--

CREATE TABLE IF NOT EXISTS `clients` (
  `client_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `age` int(150) NOT NULL,
  `email` varchar(50) NOT NULL,
  `address` varchar(100) NOT NULL,
  `img_url` varchar(100) NOT NULL,
  PRIMARY KEY (`client_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- テーブルの構造 `parking_ends`
--

CREATE TABLE IF NOT EXISTS `parking_ends` (
  `end_time` datetime NOT NULL,
  `time_id` int(11) NOT NULL,
  UNIQUE KEY `time_id` (`time_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- テーブルの構造 `parking_places`
--

CREATE TABLE IF NOT EXISTS `parking_places` (
  `address_id` int(11) NOT NULL AUTO_INCREMENT,
  `client_id` int(11) NOT NULL,
  `space_size` int(11) NOT NULL,
  `nearest_station` varchar(20) NOT NULL,
  `price_perhour` int(11) NOT NULL,
  `address` varchar(100) NOT NULL,
  PRIMARY KEY (`address_id`),
  UNIQUE KEY `client_id` (`client_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- テーブルの構造 `parking_starts`
--

CREATE TABLE IF NOT EXISTS `parking_starts` (
  `starttime` datetime NOT NULL,
  `time_id` int(11) NOT NULL,
  UNIQUE KEY `time_id` (`time_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- テーブルの構造 `parking_time_bikes`
--

CREATE TABLE IF NOT EXISTS `parking_time_bikes` (
  `address_id` int(11) NOT NULL,
  `bike_id` int(11) NOT NULL,
  `time_id` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`time_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- テーブルの構造 `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `tel_num` varchar(11) NOT NULL,
  `name` varchar(40) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `age` int(150) NOT NULL,
  `email` varchar(50) NOT NULL,
  `address` varchar(100) NOT NULL,
  PRIMARY KEY (`user_id`),
  UNIQUE KEY `user_id` (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- ダンプしたテーブルの制約
--

--
-- テーブルの制約 `bikes`
--
ALTER TABLE `bikes`
  ADD CONSTRAINT `bikes_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`);

--
-- テーブルの制約 `parking_end`
--
ALTER TABLE `parking_ends`
  ADD CONSTRAINT `parking_ends_ibfk_1` FOREIGN KEY (`time_id`) REFERENCES `parking_time_bikes` (`time_id`);

--
-- テーブルの制約 `parking_places`
--
ALTER TABLE `parking_places`
  ADD CONSTRAINT `parking_places_ibfk_1` FOREIGN KEY (`client_id`) REFERENCES `clients` (`client_id`);

--
-- テーブルの制約 `parking_start`
--
ALTER TABLE `parking_starts`
  ADD CONSTRAINT `parking_starts_ibfk_1` FOREIGN KEY (`time_id`) REFERENCES `parking_time_bikes` (`time_id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
