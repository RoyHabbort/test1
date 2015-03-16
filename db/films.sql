-- phpMyAdmin SQL Dump
-- version 4.0.10
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1:3306
-- Время создания: Мар 16 2015 г., 08:43
-- Версия сервера: 5.5.38-log
-- Версия PHP: 5.5.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- База данных: `films`
--

-- --------------------------------------------------------

--
-- Структура таблицы `actors`
--

CREATE TABLE IF NOT EXISTS `actors` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fio` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=12 ;

--
-- Дамп данных таблицы `actors`
--

INSERT INTO `actors` (`id`, `fio`) VALUES
(1, 'Леонардо Ди Каприо'),
(2, 'Джим Керри'),
(3, 'Кейт Бланшетт'),
(4, 'Кейт Уинслет'),
(5, 'Кейт Бекинсейл'),
(6, 'Кэмерон Диаз'),
(7, 'Мора Тирни'),
(8, 'Джон Траволта'),
(9, 'Сэмюэл Л. Джексон'),
(10, 'Брюс Уиллис'),
(11, 'Ума Турман');

-- --------------------------------------------------------

--
-- Структура таблицы `actors_films`
--

CREATE TABLE IF NOT EXISTS `actors_films` (
  `id_films` int(11) NOT NULL,
  `id_actors` int(11) NOT NULL,
  PRIMARY KEY (`id_films`,`id_actors`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `actors_films`
--

INSERT INTO `actors_films` (`id_films`, `id_actors`) VALUES
(1, 1),
(1, 4),
(2, 2),
(2, 6),
(3, 2),
(3, 7),
(4, 1),
(4, 3),
(4, 5),
(5, 8),
(5, 9),
(5, 10),
(5, 11),
(6, 10),
(7, 10);

-- --------------------------------------------------------

--
-- Структура таблицы `films`
--

CREATE TABLE IF NOT EXISTS `films` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=8 ;

--
-- Дамп данных таблицы `films`
--

INSERT INTO `films` (`id`, `title`) VALUES
(1, 'Титаник'),
(2, 'Маска'),
(3, 'Лжец'),
(4, 'Авиатор'),
(5, 'Криминальное чтиво'),
(6, '5 элемент'),
(7, 'Крепкий орешек');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
