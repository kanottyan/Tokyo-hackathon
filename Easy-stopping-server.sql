-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: 2014 年 6 月 15 日 04:30
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

--
-- テーブルの構造 `blank_times`
--

CREATE TABLE IF NOT EXISTS `blank_times` (
  `parking_place_id` int(11) NOT NULL,
  `start_time` datetime NOT NULL,
  `end_time` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- テーブルの構造 `parking_places`
--

CREATE TABLE IF NOT EXISTS `parking_places` (
  `user_email` varchar(50) CHARACTER SET utf8 NOT NULL,
  `parking_place_id` int(11) NOT NULL AUTO_INCREMENT,
  `latitude` varchar(30) CHARACTER SET utf8 NOT NULL,
  `longtitude` varchar(30) CHARACTER SET utf8 NOT NULL,
  `price` int(11) NOT NULL,
  `img_url` text CHARACTER SET utf8 NOT NULL,
  `id` int(11) NOT NULL,
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
  `user_email` varchar(50) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- テーブルの構造 `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_email` varchar(50) CHARACTER SET utf8 NOT NULL,
  `tel_num` varchar(11) CHARACTER SET utf8 NOT NULL,
  `name` varchar(40) CHARACTER SET utf8 NOT NULL,
  `gender` tinyint(1) NOT NULL,
  `age` int(150) NOT NULL,
  `address` varchar(100) CHARACTER SET utf8 NOT NULL,
  `login_password` varchar(100) CHARACTER SET utf8 NOT NULL,
  `is_users` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`user_email`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- テーブルのデータのダンプ `users`
--

INSERT INTO `users` (`user_email`, `tel_num`, `name`, `gender`, `age`, `address`, `login_password`, `is_users`, `id`) VALUES
('gagogjgajlga@gmail.com', '00000000000', 'Daniel Kuristpher', 1, 50, 'aoyama-ku,tokyo,japan', '123456789', 1, 0),
('gagogjgajlga@gmail.comhkj', '00000000000', 'Daniel asdfistpher', 1, 50, 'aoyama-ku,tokyo,japan', '123456789', 1, 1),
('gagogjgajlhkljhklga@gmail.comhkj', '00000000000', 'Ddsfl Kuristpher', 1, 50, 'aoyama-ku,tokyo,japan', '123456789', 1, 2),
('gagogjgjkajlhkljhklga@gmail.comhkj', '00000000000', 'Danfdsl Kuristpher', 1, 50, '????????2-11-17????????3?', '123456789', 1, 3),
('gagogjgjkajljlkj;lhkljhklga@gmail.comhkj', '00000000000', 'Daniel Kuatpher', 1, 50, '東京都港区南青山2-11-17第一法規本社ビル3階', '123456789', 1, 4);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
