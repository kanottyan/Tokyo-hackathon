-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: 2014 年 6 月 15 日 01:00
-- サーバのバージョン： 5.6.16
-- PHP Version: 5.5.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `New_easy_stopping`
--

-- --------------------------------------------------------

--
-- テーブルの構造 `blank_times`
--

CREATE TABLE IF NOT EXISTS `blank_times` (
  `parking_place_id` int(11) NOT NULL,
  `start_time` int(11) NOT NULL,
  `end_time` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- テーブルの構造 `parking_places`
--

CREATE TABLE IF NOT EXISTS `parking_places` (
  `user_email` int(11) NOT NULL,
  `parking_place_id` int(11) NOT NULL AUTO_INCREMENT,
  `latitude` int(11) NOT NULL,
  `longtitude` varchar(30) NOT NULL,
  `price` varchar(30) NOT NULL,
  `img_url` int(11) NOT NULL,
  PRIMARY KEY (`parking_place_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- テーブルの構造 `reservations`
--

CREATE TABLE IF NOT EXISTS `reservations` (
  `parking_place_id` int(11) NOT NULL,
  `start_time` datetime NOT NULL,
  `end_time` datetime NOT NULL,
  `user_email` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- テーブルの構造 `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `user_email` varchar(50) NOT NULL,
  `tel_num` varchar(11) NOT NULL,
  `name` int(40) NOT NULL,
  `gender` int(10) NOT NULL,
  `age` int(150) NOT NULL,
  `address` int(100) NOT NULL,
  `login_password` int(100) NOT NULL,
  `is_users` tinyint(1) NOT NULL,
  PRIMARY KEY (`user_email`),
  UNIQUE KEY `email` (`user_email`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
