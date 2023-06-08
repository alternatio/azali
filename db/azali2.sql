-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Июн 08 2023 г., 10:44
-- Версия сервера: 8.0.30
-- Версия PHP: 8.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `azali`
--

-- --------------------------------------------------------

--
-- Структура таблицы `applications`
--

CREATE TABLE `applications` (
  `id` int NOT NULL,
  `userId` int NOT NULL,
  `userEmail` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `message` varchar(255) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Дамп данных таблицы `applications`
--

INSERT INTO `applications` (`id`, `userId`, `userEmail`, `message`) VALUES
(1, 17, '8909890@123', 'i shit myself'),
(2, 17, '8909890@123', 'i shit myself'),
(3, 17, '8909890@123', 'i shit myself'),
(4, 17, '8909890@123', 'i shit myself'),
(5, 17, '8909890@123', 'i have a stick'),
(6, 17, '8909890@123', 'noqwnodqnwfonqwoinqonwelkfn lwenf jnoj weojdjojoifweoifwoeihfoiawef oi weaoifnweoifnweianfeajknlksnfkjwebiof nweojnwaekljbvlkrnflwenfowe fjnwekjfvnskvnslkfnrjkbfowenfklbflksdnvjkdnfklwenvkjfnfkn erv weoivnaivnwefnrjnvsdnvnknfkwenvkjlscmvnkn'),
(7, 17, '8909890@123', 'wwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwww');

-- --------------------------------------------------------

--
-- Структура таблицы `services`
--

CREATE TABLE `services` (
  `id` int NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `price` int NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Дамп данных таблицы `services`
--

INSERT INTO `services` (`id`, `type`, `title`, `description`, `price`, `image`) VALUES
(1, 'танцевальные номера', 'лебеди', 'танец лебедей, 4 танцовщицы', 7000, '/db/images/NY1A4778.jpg'),
(2, 'танцевальные номера', 'халай', 'турецкий танец, 5 танцоров', 7000, '/db/images/IMG_2172.png'),
(3, 'танцевальные номера', 'светящие веера', 'нежный танец, 4 танцовщицы', 8000, '/db/images/DSC01245_1.jpg'),
(4, 'национальные танцы', 'кустар', 'танец лебедей, 5 танцовщиц - 7000 рублей, 7 танцовщиц - 9000 рублей', 9000, '/db/images/NY1A4816.jpg'),
(7, 'национальные танцы', 'кара жорга', 'казахский танец, 5 танцоров 7000 рублей', 7000, '/db/images/139A9179.jpg'),
(8, 'национальные танцы', 'еркем-ай', 'казахский танец, 4 танцора 7000 рублей', 7000, '/db/images/284b07e7-d24d-4a82-8.jfif'),
(11, 'национальные обряды', 'беташар', 'под шаныраком, 4 танцовщицы - 7000 рублей, 8 танцовщиц - 11000 рублей', 7000, '/db/images/IMG_2186.png'),
(12, 'национальные обряды', 'беташар', 'под полотном, 4 танцовщицы - 7000 рублей, 8 танцовщиц - 11000 рублей', 7000, '/db/images/IMG_2186.png'),
(13, 'национальные обряды', 'кыз узату', 'выход невесты, 4 танцовщицы, 7000 рублей', 7000, '/db/images/d570bd50-e739-4ba7-9.png'),
(14, 'дополнительные услуги', 'аренда костюмов', 'аренда костюмов для танцев', 4000, 'db/images/IMG_2157.png'),
(15, 'дополнительные услуги', 'аренда реквизита', 'аренда реквизита для танцев', 6000, 'db/images/IMG_1738_1.jfif'),
(16, 'дополнительные услуги', 'аренда танцевального зала', 'аренда танцевального зала для практики танцев', 8000, 'db/images/WhatsApp_Image_2022-.jpeg');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `surname` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `patronymic` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `numberPhone` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `role` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL DEFAULT 'user'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `name`, `surname`, `patronymic`, `numberPhone`, `email`, `password`, `role`) VALUES
(1, 'admin', 'admin', 'admin', 'admin', 'admin', 'admin', 'admin'),
(3, 'Nikita', 'Shinkar', '', '+79087973004', 'shinkarev0913@mail.ru', '123', 'user'),
(15, 'Nikita', 'Shinkar123', '123', '+79087973004123', 'shinkarev0913@mail.ru123', '123123', 'user'),
(16, '123', '123123', '123', '123', '123123@123', '123123', 'user'),
(17, '123', '123', '123', '890890890', '8909890@123', '123', 'user');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `applications`
--
ALTER TABLE `applications`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `services`
--
ALTER TABLE `services`
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
-- AUTO_INCREMENT для таблицы `applications`
--
ALTER TABLE `applications`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT для таблицы `services`
--
ALTER TABLE `services`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
