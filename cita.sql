-- phpMyAdmin SQL Dump
-- version 4.0.4.2
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1
-- Время создания: Мар 06 2017 г., 23:52
-- Версия сервера: 5.6.13
-- Версия PHP: 5.4.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- База данных: `cita`
--
CREATE DATABASE IF NOT EXISTS `cita` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `cita`;

-- --------------------------------------------------------

--
-- Структура таблицы `table_q`
--

CREATE TABLE IF NOT EXISTS `table_q` (
  `id_quotes` int(11) NOT NULL AUTO_INCREMENT,
  `quote` text NOT NULL,
  `likes` int(11) NOT NULL,
  `author` varchar(200) NOT NULL,
  `user` varchar(20) NOT NULL,
  `date` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_quotes`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=79 ;

--
-- Дамп данных таблицы `table_q`
--

INSERT INTO `table_q` (`id_quotes`, `quote`, `likes`, `author`, `user`, `date`) VALUES
(73, 'my first quote', 66, 'me', 'mishka', '2017-03-06 22:02:51'),
(74, 'second quote', 13, 'still me', 'mishka', '2017-03-06 23:19:35'),
(75, 'quote3', 2, 'author3', 'second', '2017-03-06 23:50:23'),
(76, 'quote4', 1, 'author4', 'second', '2017-03-06 23:50:34'),
(77, 'quote5', 2, 'author5', 'second', '2017-03-06 23:50:43'),
(78, 'quote6', 1, 'author6', 'second', '2017-03-06 23:50:56');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `login` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=24 ;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`login`, `password`, `id`) VALUES
('mishka', 'zakipniy', 21),
('second', 'user123', 23);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
