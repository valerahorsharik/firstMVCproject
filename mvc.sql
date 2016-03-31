-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1
-- Время создания: Мар 31 2016 г., 13:10
-- Версия сервера: 5.6.17
-- Версия PHP: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- База данных: `mvc`
--

-- --------------------------------------------------------

--
-- Структура таблицы `feedback`
--

CREATE TABLE IF NOT EXISTS `feedback` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `author` varchar(50) NOT NULL DEFAULT 'Guest',
  `email` varchar(50) NOT NULL,
  `header` varchar(50) NOT NULL,
  `content` text NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- Дамп данных таблицы `feedback`
--

INSERT INTO `feedback` (`id`, `author`, `email`, `header`, `content`, `date`) VALUES
(1, 'Guest', '', 'Social network', 'I think that best social network is facebook. But i use vk and i dont know why. Can some1 help me with it?', '2016-03-28 16:18:19'),
(4, 'Valera', 'mail@mail.ru', 'About replace', 'Content!!!!!!Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent vitae condimentum risus. Aenean vel sapien posuere, vulputate augue tempor, lacinia risus. Aliquam est sem, maximus nec nulla in, faucibus scelerisque turpis. Donec non sapien commodo, lacinia lectus non, convallis ipsum. Curabitur at nibh feugiat, sollicitudin libero at, placerat felis. Nulla pharetra, arcu a bibendum sagittis, leo neque imperdiet augue, ut gravida dolor mi a odio. Nullam fermentum odio ut odio luctus, at consectetur enim tincidunt. Praesent feugiat blandit dapibus. Phasellus faucibus commodo ex. Nullam ac lacus nec eros ornare rutrum et ut urna. Phasellus eget mi vel justo condimentum tempus. Curabitur tempor venenatis sapien sed facilisis. Vivamus consectetur ante varius rhoncus porttitor.', '2016-03-31 10:12:42'),
(5, 'Valera', 'mail@mail.ru', 'New Article', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent vitae condimentum risus. Aenean vel sapien posuere, vulputate augue tempor, lacinia risus. Aliquam est sem, maximus nec nulla in, faucibus scelerisque turpis. Donec non sapien commodo, lacinia lectus non, convallis ipsum. Curabitur at nibh feugiat, sollicitudin libero at, placerat felis. Nulla pharetra, arcu a bibendum sagittis, leo neque imperdiet augue, ut gravida dolor mi a odio. Nullam fermentum odio ut odio luctus, at consectetur enim tincidunt. Praesent feugiat blandit dapibus. Phasellus faucibus commodo ex. Nullam ac lacus nec eros ornare rutrum et ut urna. Phasellus eget mi vel justo condimentum tempus. Curabitur tempor venenatis sapien sed facilisis. Vivamus consectetur ante varius rhoncus porttitor.', '2016-03-31 11:09:17');

-- --------------------------------------------------------

--
-- Структура таблицы `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=10 ;

--
-- Дамп данных таблицы `user`
--

INSERT INTO `user` (`id`, `email`, `password`, `name`) VALUES
(1, 'mail@mail.ru', 'password', 'Valera'),
(9, 'mai2l@mail.ru', '1233211', 'Igor');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
