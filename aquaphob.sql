-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Время создания: Дек 09 2018 г., 10:16
-- Версия сервера: 10.1.37-MariaDB
-- Версия PHP: 7.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `aquaphob`
--

-- --------------------------------------------------------

--
-- Структура таблицы `aquaphob`
--

CREATE TABLE `aquaphob` (
  `my_order` bigint(20) NOT NULL,
  `goods` varchar(12) COLLATE utf8_unicode_ci NOT NULL,
  `price` int(12) NOT NULL,
  `name` varchar(12) CHARACTER SET utf8 NOT NULL,
  `phone` int(12) NOT NULL,
  `index_` int(12) NOT NULL,
  `address` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(12) COLLATE utf8_unicode_ci NOT NULL,
  `quantity` int(12) NOT NULL,
  `summa` int(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Дамп данных таблицы `aquaphob`
--

INSERT INTO `aquaphob` (`my_order`, `goods`, `price`, `name`, `phone`, `index_`, `address`, `email`, `quantity`, `summa`) VALUES
(2180000000, '5 BOTTLES', 1945, 'Денис Жирный', 2147483647, 5555, 'cvvc', 'ing2758@gmai', 1, 1945),
(2180000001, '1 BOTTLE', 1945, 'Денис Жирный', 2147483647, 5555, 'cvvc', 'ing2758@gmai', 7, 13615),
(2180000002, '5 BOTTLES', 1945, '', 2147483647, 2, 'ffff', 'ing2758@gmai', 1, 1945),
(2180000003, '5 BOTTLES', 1945, '', 2147483647, 2, 'ffff', 'ing2758@gmai', 1, 1945),
(2180000004, '5 BOTTLES', 1945, '', 2147483647, 2, 'ffff', 'ing2758@gmai', 1, 1945),
(2180000005, '5 BOTTLES', 1945, 'Денис Жирный', 962781198, 5, 'xvxv', 'ing2758@gmai', 1, 1945),
(2180000006, '5 BOTTLES', 1945, 'Денис Жирный', 962781198, 5, 'xvxv', 'ing2758@gmai', 1, 1945),
(2180000007, '5 BOTTLES', 1945, 'Денис Жирный', 962781198, 5, 'xvxv', 'ing2758gmail', 1, 1945),
(2180000008, '5 BOTTLES', 1945, 'Денис Жирный', 77777, 3, '', 'ing2758@gmai', 1, 1945),
(2180000009, '5 BOTTLES', 1945, 'Денис Жирный', 962781198, 5555, ' vb', 'ing2758@gmai', 1, 1945);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `aquaphob`
--
ALTER TABLE `aquaphob`
  ADD PRIMARY KEY (`my_order`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `aquaphob`
--
ALTER TABLE `aquaphob`
  MODIFY `my_order` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2147483647;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
