-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Время создания: Ноя 07 2023 г., 19:21
-- Версия сервера: 10.4.25-MariaDB
-- Версия PHP: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `crm`
--

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `UserID` varchar(25) NOT NULL,
  `FIO` varchar(75) NOT NULL,
  `Phone` varchar(20) NOT NULL,
  `Manzil` varchar(75) NOT NULL,
  `Tkun` varchar(15) NOT NULL,
  `Type` varchar(15) NOT NULL,
  `Username` varchar(70) NOT NULL,
  `Password` varchar(150) NOT NULL,
  `Tanish` varchar(70) NOT NULL,
  `TanishPhone` varchar(20) NOT NULL,
  `About` varchar(150) NOT NULL,
  `Haqimizda` varchar(70) NOT NULL,
  `Tech_Musahasis` varchar(70) NOT NULL,
  `Tech_About` varchar(70) NOT NULL,
  `InsertData` timestamp NOT NULL DEFAULT current_timestamp(),
  `UpdateData` timestamp NOT NULL DEFAULT current_timestamp(),
  `MenegerID` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `UserID`, `FIO`, `Phone`, `Manzil`, `Tkun`, `Type`, `Username`, `Password`, `Tanish`, `TanishPhone`, `About`, `Haqimizda`, `Tech_Musahasis`, `Tech_About`, `InsertData`, `UpdateData`, `MenegerID`) VALUES
(1, '856584852', 'Elshod Musurmonov', '+998 99 666 5522', 'Qarshi shaxar', '07-11-2023', 'admin', 'Admin123', '202cb962ac59075b964b07152d234b70', '', '', '', '', '', '', '2023-11-07 16:38:36', '2023-11-07 16:38:36', '856584852');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
