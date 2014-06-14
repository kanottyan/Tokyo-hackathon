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

DROP TABLE IF EXISTS `parking_places`,`blank_times`,`reservations`,`users`;

-- --------------------------------------------------------

--
-- テーブルの構造 `parking_places`
--

CREATE TABLE IF NOT EXISTS `parking_places` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `latitude` char(30) NOT NULL,
  `longtitude` char(30) NOT NULL,
  `price` int(11) NOT NULL,
  `img_url` varchar(100) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `user_id` (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

-- --------------------------------------------------------

--
-- テーブルの構造 `blank_time`
--

CREATE TABLE IF NOT EXISTS `blank_times` (
  `parking_place_id` int(11) NOT NULL,
  `start_time` datetime NOT NULL,
  `end_time` datetime NOT NULL,
  UNIQUE KEY `parking_place_id` (`parking_place_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- テーブルの構造 `reservations`
--

CREATE TABLE IF NOT EXISTS `reservations` (
  `parking_place_id` int(11) NOT NULL,
  `starttime` datetime NOT NULL,
  `end_time` datetime NOT NULL,
  `user_id` int(11) NOT NULL,
  UNIQUE KEY `parking_place_id` (`parking_place_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- テーブルの構造 `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tel_num` varchar(11) NOT NULL,
  `name` varchar(40) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `age` int(150) NOT NULL,
  `address` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `login_password` varchar(100) NOT NULL,
--
-- 1ならユーザー、0ならクライアント
--
  `is_users` varchar(100) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- ダンプしたテーブルの制約
--

--
-- テーブルの制約 `parking_end`
--
ALTER TABLE `parking_places`
  ADD CONSTRAINT `parking_places_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- テーブルの制約 `blank_times`
--
ALTER TABLE `blank_times`
  ADD CONSTRAINT `blank_times_ibfk_1` FOREIGN KEY (`parking_place_id`) REFERENCES `parking_places` (`id`);

--
-- テーブルの制約 `parking_start`
--
ALTER TABLE `reservations`
  ADD CONSTRAINT `reservations_ibfk_1` FOREIGN KEY (`parking_place_id`) REFERENCES `parking_places` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
