-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Час створення: Січ 15 2026 р., 09:34
-- Версія сервера: 10.4.32-MariaDB
-- Версія PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База даних: `fishboom`
--

-- --------------------------------------------------------

--
-- Структура таблиці `fishes`
--

CREATE TABLE `fishes` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `weight` decimal(10,2) DEFAULT NULL,
  `price` decimal(10,2) NOT NULL,
  `photo` varchar(255) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Дамп даних таблиці `fishes`
--

INSERT INTO `fishes` (`id`, `name`, `weight`, `price`, `photo`, `description`, `created_at`) VALUES
(1, 'Скумбрія свіжоморожена з головою', 1.00, 145.50, 'skumbriya.jpg', 'Скумбрія атлантична, суха заморозка.', '2026-01-09 08:56:55'),
(2, 'Минтай свіжоморожений без голови', 0.80, 110.00, 'mintay.jpg\r\n', 'Дика риба, високий вміст білка.', '2026-01-09 08:56:55'),
(3, 'Форель стейк охолоджений', 0.50, 480.00, 'trout_steak.jpg\r\n', 'Ніжне м’ясо форелі, ідеально для запікання.', '2026-01-09 08:56:55'),
(4, 'Хек тушка свіжоморожена', 1.00, 135.00, 'hake.jpg', 'Аргентинський хек, без льоду.', '2026-01-09 08:56:55'),
(5, 'Лосось філе на шкурі', 0.30, 650.00, 'salmon_fillet.jpg\r\n', 'Преміальна якість, багатий на Омега-3.', '2026-01-09 08:56:55'),
(6, 'Оселедець слабосолоний', 0.40, 95.00, 'herring.jpg\r\n', 'Класичний смак, вилов у Північному морі.', '2026-01-09 08:56:55');

--
-- Індекси збережених таблиць
--

--
-- Індекси таблиці `fishes`
--
ALTER TABLE `fishes`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для збережених таблиць
--

--
-- AUTO_INCREMENT для таблиці `fishes`
--
ALTER TABLE `fishes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
