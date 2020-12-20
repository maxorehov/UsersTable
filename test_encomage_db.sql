-- phpMyAdmin SQL Dump
-- version 4.6.6deb5ubuntu0.5
-- https://www.phpmyadmin.net/
--
-- Хост: localhost:3306
-- Время создания: Дек 20 2020 г., 17:16
-- Версия сервера: 10.1.47-MariaDB-0ubuntu0.18.04.1
-- Версия PHP: 7.2.24-0ubuntu0.18.04.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `test_encomage_db`
--

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `first_name` tinytext NOT NULL,
  `last_name` tinytext NOT NULL,
  `email` tinytext NOT NULL,
  `create_date` datetime NOT NULL,
  `update_date` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `first_name`, `last_name`, `email`, `create_date`, `update_date`) VALUES
(1, 'IvanIvanovich', 'Ivanov', 'ivan@mail.com', '2020-12-17 10:58:59', '2020-12-20 17:15:22'),
(2, 'Petrqwe', 'Petrov', 'petr@mail.con', '2020-12-17 10:56:05', '2020-12-20 16:31:59'),
(3, 'Mike', 'Tyson', 'mike@mail.com', '2020-12-17 10:56:05', '2020-12-17 11:02:48'),
(4, 'Roy', 'JonesJr', 'roy@mail.com', '2020-12-17 10:56:05', '2020-12-17 17:42:00'),
(5, 'Ivan-aaa', 'Ivanov-xxxx', 'ivanqwdeqwe@mail.com', '2020-12-17 10:56:05', '2020-12-17 10:56:05'),
(6, 'Rahim', 'sterling', 'rahim@mail.com', '2020-12-17 10:56:05', '2020-12-17 11:01:47'),
(7, 'Дмитрий', 'Дмитриев', 'dimon@asdf.co', '2020-12-17 13:23:26', '2020-12-20 16:40:52'),
(8, 'Сергей', 'Ск', 'mmm@mmm.co', '2020-12-17 17:40:52', '2020-12-20 16:41:17'),
(9, 'Max', 'More', 'max@mail.ocnm', '2020-12-20 13:06:01', '2020-12-20 13:06:01'),
(17, 'Alex', 'Grow', 'alex@qwe.ox', '2020-12-20 16:09:35', '2020-12-20 16:09:35'),
(18, 'new', 'user', 'user@user.co', '2020-12-20 16:32:20', '2020-12-20 16:32:20'),
(19, 'first', 'second', 'emaail@emal.co', '2020-12-20 17:15:47', '2020-12-20 17:15:47');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
