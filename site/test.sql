-- phpMyAdmin SQL Dump
-- version 4.0.10.10
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1:3306
-- Время создания: Дек 22 2016 г., 11:04
-- Версия сервера: 5.5.45
-- Версия PHP: 5.6.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- База данных: `test`
--

-- --------------------------------------------------------

--
-- Структура таблицы `test`
--

CREATE TABLE IF NOT EXISTS `test` (
  `ID` int(100) NOT NULL AUTO_INCREMENT,
  `name` varchar(30) NOT NULL,
  `mobile` varchar(10) NOT NULL,
  `address` varchar(50) NOT NULL,
  `email` varchar(30) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=33 ;

--
-- Дамп данных таблицы `test`
--

INSERT INTO `test` (`ID`, `name`, `mobile`, `address`, `email`) VALUES
(2, 'Сергей', '2147483647', 'Korolenko', 'paramonov1999-2100@mail.ru'),
(3, 'Дима', '8951037766', 'PO BOX 1688', '@mail.ru'),
(8, 'Мила', '8912748108', '', ''),
(9, 'Миха', '2', '', ''),
(10, 'Рома', '5', '', ''),
(11, 'Жека', '10', '', ''),
(12, 'Вася', '87654', 'Ижевск', '@gmail.ru'),
(15, 'Кирилл', '3', '', ''),
(17, 'Андрей', '9', 'Калинина', 'bobrosoft@ya'),
(18, 'Сеня', 'Киров', '', ''),
(21, '123', '123', '123', '123'),
(26, 'Сергей1', '1234', '', ''),
(27, 'ad', '1', 'Глазов', ''),
(28, 'Sergey', '98', '', ''),
(29, 'Игорь', '12', '', ''),
(30, 'Саша', '564', '', ''),
(31, 'R', '54561665', '', ''),
(32, 'TEst', 'Test', '123', '');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
