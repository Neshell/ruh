-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2.1
-- http://www.phpmyadmin.net
--
-- Хост: localhost
-- Время создания: Ноя 10 2020 г., 11:07
-- Версия сервера: 5.7.32-0ubuntu0.16.04.1
-- Версия PHP: 7.3.23-4+ubuntu16.04.1+deb.sury.org+1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `Ruhanka`
--

-- --------------------------------------------------------

--
-- Структура таблицы `bodyPart`
--

CREATE TABLE `bodyPart` (
  `id` int(11) NOT NULL,
  `head` int(11) NOT NULL,
  `body` int(11) NOT NULL,
  `hand` int(11) NOT NULL,
  `leg` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Структура таблицы `part`
--

CREATE TABLE `part` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `name` varchar(50) NOT NULL,
  `age` int(2) NOT NULL,
  `sex` int(1) NOT NULL,
  `robot_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `bodyPart`
--
ALTER TABLE `bodyPart`
  ADD PRIMARY KEY (`id`),
  ADD KEY `head` (`head`),
  ADD KEY `body` (`body`),
  ADD KEY `hand` (`hand`),
  ADD KEY `leg` (`leg`);

--
-- Индексы таблицы `part`
--
ALTER TABLE `part`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `robot_id` (`robot_id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `bodyPart`
--
ALTER TABLE `bodyPart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT для таблицы `part`
--
ALTER TABLE `part`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `bodyPart`
--
ALTER TABLE `bodyPart`
  ADD CONSTRAINT `bodyPart_ibfk_1` FOREIGN KEY (`head`) REFERENCES `part` (`id`),
  ADD CONSTRAINT `bodyPart_ibfk_2` FOREIGN KEY (`body`) REFERENCES `part` (`id`),
  ADD CONSTRAINT `bodyPart_ibfk_3` FOREIGN KEY (`hand`) REFERENCES `part` (`id`),
  ADD CONSTRAINT `bodyPart_ibfk_4` FOREIGN KEY (`leg`) REFERENCES `part` (`id`);

--
-- Ограничения внешнего ключа таблицы `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_ibfk_1` FOREIGN KEY (`robot_id`) REFERENCES `bodyPart` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
