-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Время создания: Дек 14 2020 г., 22:57
-- Версия сервера: 10.4.14-MariaDB
-- Версия PHP: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `forum`
--

-- --------------------------------------------------------

--
-- Структура таблицы `comments`
--

CREATE TABLE `comments` (
  `id` int(11) NOT NULL,
  `topic_id` int(11) NOT NULL,
  `person_id` int(11) NOT NULL,
  `comment` text NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `comments`
--

INSERT INTO `comments` (`id`, `topic_id`, `person_id`, `comment`, `date`) VALUES
(1, 1, 1, 'Очень ждал выхода, чудом успел оплатить предзаказ. Радуюсь как ребенок! Последняя приставка которая была - сюбор, почти 30 лет назад)) Дизайн очень привлекательный, как по мне. Размер не напрягает, ожидал худшего наслушавшись обзоров. Приобретением доволен на 100%. По поводу высоких цен на игры: не знаю, я купил нового паука, прошел и продал на 350 грн дешевле. Разве это дорого? В черную пятницу взял ПС плюс на год за 970 грн а там 20 игр в коллекции и по 3-4 каждый месяц. К локдауну готов))\r\n', '2020-12-14 02:02:10'),
(2, 2, 2, '1 Donald Trump on Monday could suffer a withering blow to his increasingly hopeless effort to overturn the results of the US presidential election when 538 members of the electoral college will cast their ballots and formally send Joe Biden to the White House.', '2020-12-14 02:02:10'),
(3, 1, 3, '2 Очень ждал выхода, чудом успел оплатить предзаказ. Радуюсь как ребенок! Последняя приставка которая была - сюбор, почти 30 лет назад)) Дизайн очень привлекательный, как по мне. Размер не напрягает, ожидал худшего наслушавшись обзоров. Приобретением доволен на 100%. По поводу высоких цен на игры: не знаю, я купил нового паука, прошел и продал на 350 грн дешевле. Разве это дорого? В черную пятницу взял ПС плюс на год за 970 грн а там 20 игр в коллекции и по 3-4 каждый месяц. К локдауну готов))\r\n', '2020-12-14 02:02:10'),
(4, 2, 2, '2 Donald Trump on Monday could suffer a withering blow to his increasingly hopeless effort to overturn the results of the US presidential election when 538 members of the electoral college will cast their ballots and formally send Joe Biden to the White House.', '2020-12-14 02:02:10'),
(5, 1, 4, 'Очень ждал выхода, чудом успел оплатить предзаказ. Радуюсь как ребенок! Последняя приставка которая была - сюбор, почти 30 лет назад)) Дизайн очень привлекательный, как по мне. Размер не напрягает, ожидал худшего наслушавшись обзоров. Приобретением доволен на 100%. По поводу высоких цен на игры: не знаю, я купил нового паука, прошел и продал на 350 грн дешевле. Разве это дорого? В черную пятницу взял ПС плюс на год за 970 грн а там 20 игр в коллекции и по 3-4 каждый месяц. К локдауну готов))\r\n', '2020-12-14 02:02:10'),
(18, 2, 4, '1 Donald Trump on Monday could suffer a withering blow to his increasingly hopeless effort to overturn the results of the US presidential election when 538 members of the electoral college will cast their ballots and formally send Joe Biden to the White House.', '2020-12-14 18:11:15');

-- --------------------------------------------------------

--
-- Структура таблицы `topics`
--

CREATE TABLE `topics` (
  `id` int(11) NOT NULL,
  `person_id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `description` varchar(255) NOT NULL,
  `img` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `topics`
--

INSERT INTO `topics` (`id`, `person_id`, `title`, `description`, `img`) VALUES
(1, 1, 'PlayStation 5', 'PlayStation 5 (яп. プレイステーション5, официальное сокр. PS5) — игровая приставка, разработанная и выпускаемая японской компанией Sony Interactive Entertainment.\r\n\r\nPlayStation 5 является представителем семейства игровых консолей PlayStation и преемницей PlayStat', 'assets/img/ps5.jpg'),
(2, 2, 'USA Elections', 'Президентские выборы в США определяют, кто станет президентом Соединённых Штатов Америки на ближайшие четыре года.\r\n\r\nВыборы проводятся в первый вторник, следующий за первым понедельником ноября, раз в четыре года', 'assets/img/elections.jpg');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(250) NOT NULL,
  `fullname` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `photo` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `fullname`, `email`, `phone`, `photo`) VALUES
(1, 'Iryna', 'Iryna', 'Iryna Knysh', 'iryna@edu.ua', '', ''),
(2, 'Iosif', 'Iosif', 'Iosif Isachko', 'iosif@edu.ua', '', ''),
(3, 'Dima', 'Dima', 'Dima Gavriluk', 'dima@edu.ua', '', ''),
(4, 'Zhenya', 'Zhenya', 'Zhenya Zadniprov', 'zhenya@edu.ua', '', '');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `topics`
--
ALTER TABLE `topics`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT для таблицы `topics`
--
ALTER TABLE `topics`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
