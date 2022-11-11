-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Ноя 11 2022 г., 11:19
-- Версия сервера: 5.7.38
-- Версия PHP: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `ap`
--

-- --------------------------------------------------------

--
-- Структура таблицы `house`
--

CREATE TABLE `house` (
  `id` int(11) NOT NULL,
  `County` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Country` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Town` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `DisplayableAddress` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `Image` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `Thumbnail` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `Latitude` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Longitude` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `NumberofBedrooms` int(11) NOT NULL,
  `NumberofBathrooms` int(11) NOT NULL,
  `Price` float NOT NULL,
  `PropertyDescription` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `house`
--
ALTER TABLE `house`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `house`
--
ALTER TABLE `house`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
