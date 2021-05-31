-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Май 31 2021 г., 21:34
-- Версия сервера: 8.0.19
-- Версия PHP: 7.4.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `new_tts`
--

-- --------------------------------------------------------

--
-- Структура таблицы `advantages`
--

CREATE TABLE `advantages` (
  `id` bigint UNSIGNED NOT NULL,
  `icon` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `advantages`
--

INSERT INTO `advantages` (`id`, `icon`, `content`, `created_at`, `updated_at`) VALUES
(1, 'XE7wDXG530.png', '10 региональных участков охватывают всю территорию Казахстана', '2021-05-27 12:48:34', '2021-05-27 12:48:34'),
(2, '9QhM94YFdB.png', 'В собственности 4 вагоноремонтных депо, 14 цехов текущего отцепочного ремонта вагонов и 1 пункт подготовки вагонов', '2021-05-27 12:49:02', '2021-05-27 12:49:02'),
(3, 'QCjsgEl8sX.png', 'Представители нашей компании присутствуют на 60-ти основных станциях для организации контроля качества ремонта вагонов', '2021-05-27 12:49:13', '2021-05-27 12:49:13'),
(4, 'attxsNBiux.png', 'Имеется более 50-ти специализированных вагонов для перевозки колесных пар и запасных частей', '2021-05-27 12:49:22', '2021-05-27 12:49:22'),
(5, 'SQJn5iMMje.png', 'Имеются материальные базы на всех ВРД РК с широкой номенклатурой комплектующих', '2021-05-27 12:49:34', '2021-05-27 12:49:34'),
(6, 'ULvRwE1eam.png', 'Создан диспетчерский центр, который круглосуточно осуществляет контроль за вагонами на сервисном обслуживании', '2021-05-27 12:49:42', '2021-05-27 12:49:42'),
(7, 'zGciyQPcTk.png', 'Нашими партнерами являются все вагоноремонтные предприятия Республики Казахстана и СНГ в части проведения КР, ДР, ТОР', '2021-05-27 12:49:52', '2021-05-27 12:49:52');

-- --------------------------------------------------------

--
-- Структура таблицы `contacts`
--

CREATE TABLE `contacts` (
  `id` bigint UNSIGNED NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `facebook` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `instagram` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `twitter` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `contacts`
--

INSERT INTO `contacts` (`id`, `phone`, `email`, `address`, `facebook`, `instagram`, `twitter`, `created_at`, `updated_at`) VALUES
(1, '+7 (7172) 61-06-26', 'tts@ttservice.kz', 'Республика Казахстан, г.Нур-Султан, ул.Кунаева 10, 26 этаж.', '#', '#', '#', '2021-05-29 02:16:29', '2021-05-29 02:21:02');

-- --------------------------------------------------------

--
-- Структура таблицы `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `main`
--

CREATE TABLE `main` (
  `id` bigint UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `url_video` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bg` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `main`
--

INSERT INTO `main` (`id`, `title`, `content`, `url_video`, `bg`, `created_at`, `updated_at`) VALUES
(3, 'Темир Транс Сервис', 'ТОО «ТемирТрансСервис» предоставляет полный комплекс услуг по ремонту грузовых вагонов и поставке запасных частей, как на территории Республики Казахстан, так и на территории СНГ.', 'https://www.youtube.com/watch?v=YHf35s1hPZw', 'cD08FB7v4i.png', '2021-05-27 10:57:57', '2021-05-27 11:08:59');

-- --------------------------------------------------------

--
-- Структура таблицы `migrations`
--

CREATE TABLE `migrations` (
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2021_05_27_160211_create_main_table', 1),
(5, '2021_05_27_175727_create_advantages_table', 2),
(6, '2021_05_28_075029_create_services_one_table', 3),
(7, '2021_05_28_084434_create_services_second_table', 4),
(8, '2021_05_28_154924_create_structure_table', 5),
(9, '2021_05_29_062929_create_team_table', 6),
(10, '2021_05_29_081345_create_contact_table', 7);

-- --------------------------------------------------------

--
-- Структура таблицы `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `services_one`
--

CREATE TABLE `services_one` (
  `id` bigint UNSIGNED NOT NULL,
  `icon` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `services_one`
--

INSERT INTO `services_one` (`id`, `icon`, `content`, `created_at`, `updated_at`) VALUES
(1, 'B41CZJwxDE.png', 'Организация работ по ремонтам (деповской, текущий отцепочный ремонт)', '2021-05-28 02:05:38', '2021-05-28 02:05:38'),
(2, 'asQyNoJMrf.png', 'Хранение запасных частей', '2021-05-28 02:05:51', '2021-05-28 02:05:51'),
(3, 'HCVHGdk0Af.png', 'Обеспечение необходимыми запасными частями (колесные пары, литые детали тележек, автосцепки и т.д.)', '2021-05-28 02:06:05', '2021-05-28 02:06:05'),
(4, '7mrxotMjKA.png', 'Круглосуточное слежение за вагонами', '2021-05-28 02:06:46', '2021-05-28 02:06:46'),
(5, 'uslQp12IxB.png', 'Ремонт запасных частей (колесные пары, литые детали тележек, автосцепки и т.д.)', '2021-05-28 02:07:00', '2021-05-28 02:07:00'),
(6, 'Gjwf68AQmP.png', 'Хранение и дальнейший выкуп металлолома у заказчика', '2021-05-28 02:07:11', '2021-05-28 02:07:11'),
(7, 'e0elD9cwdS.png', 'Доставка запасных частей к месту ремонта', '2021-05-28 02:07:25', '2021-05-28 02:07:25'),
(8, 'CgHELlaBI6.png', 'Оплата простоя вагонов в ожидании ремонта на станционных путях', '2021-05-28 02:07:41', '2021-05-28 02:07:41');

-- --------------------------------------------------------

--
-- Структура таблицы `services_second`
--

CREATE TABLE `services_second` (
  `id` bigint UNSIGNED NOT NULL,
  `icon` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `services_second`
--

INSERT INTO `services_second` (`id`, `icon`, `content`, `created_at`, `updated_at`) VALUES
(1, 'QjYRDzzWhn.png', 'Организация передислокации вагонов от станции отцепки до станции ремонта', '2021-05-28 02:59:47', '2021-05-28 02:59:47'),
(2, 'oXXtqEYT5y.png', 'Участие в расследованиях случаев нарушений безопасности движения', '2021-05-28 03:00:03', '2021-05-28 03:00:04'),
(3, 'DcIw3asDrN.png', 'Организация подачи/уборки грузовых вагонов в ремонт', '2021-05-28 03:00:17', '2021-05-28 03:00:17'),
(4, 'q9lx0yfj96.png', 'Оформление и раскредитовка перевозочных документов в системе АСУ ДКР', '2021-05-28 03:00:32', '2021-05-28 03:00:32'),
(5, '3ctvzaTeJp.png', 'Проведение рекламационно-претензионной работы', '2021-05-28 03:00:47', '2021-05-28 03:00:47'),
(6, '5watb6aOwG.png', 'Участие в расследованиях случаев разоборудования и хищения деталей на станционных и подъездных путях', '2021-05-28 03:00:58', '2021-05-28 03:00:58'),
(7, 'zMbHKidIrG.png', 'Обеспечение сохранности вагонов на станционных и подъездных путях', '2021-05-28 03:01:11', '2021-05-28 03:01:11');

-- --------------------------------------------------------

--
-- Структура таблицы `structure`
--

CREATE TABLE `structure` (
  `id` bigint UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `structure`
--

INSERT INTO `structure` (`id`, `title`, `content`, `created_at`, `updated_at`) VALUES
(1, 'ТОО «Вагонный сервис» - дочерняя компания', 'Компания предоставляет полный комплекс услуг по организации текущего отцепочного ремонта грузовых вагонов. В собственности имеется 14 цехов на станциях (Кандыагаш, Тобол, Есиль, Нур-Султан, Караганда-Сортировочная, Карабас, Екибастуз-2, Павлодар, Алматы-1, Алтынколь, Достык, Актогай)', '2021-05-28 09:51:23', '2021-05-28 09:56:17'),
(2, 'ТОО «Торговый Дом ТТС» - дочерняя компания', 'Один из крупных трейдеров-поставщиков в железнодорожной отрасли Республики Казахстан. Основным видом деятельности компании является оказание комплексных услуг по обеспечению запасными частями грузовых вагонов, доставке и ремонту запасных частей с использование собственных материалов', '2021-05-28 09:51:33', '2021-05-28 09:51:33'),
(3, 'ТОО «ITMD» - дочерняя компания', 'Осуществляет автоматизацию и модернизацию устаревших бизнес процессов, модернизацию автоматизированных систем учета вагонов', '2021-05-28 09:51:43', '2021-05-28 09:51:43'),
(4, 'ТОО «Инспекторский Центр на железнодорожном транспорте» - дочерняя компания', 'Осуществляет инспекторскую приемку вагонов и комплектующих, а также оказывает консультационную поддержку по техническим вопросам отечественных товаропроизводителей и вагоноремонтных предприятий', '2021-05-28 09:51:53', '2021-05-28 09:51:53'),
(5, 'ТОО «Первая мультимодальная компания» - дочерняя компания', 'Оказывает полный спектр транспортно-логистических услуг. Осуществляет лучший комплекс транспортно-логистических решений в Казахстане и СНГ. В парке имеется более 3 000 вагонов', '2021-05-28 09:52:02', '2021-05-28 09:52:02');

-- --------------------------------------------------------

--
-- Структура таблицы `teams`
--

CREATE TABLE `teams` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `img` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `teams`
--

INSERT INTO `teams` (`id`, `name`, `role`, `description`, `img`, `created_at`, `updated_at`) VALUES
(1, 'ЗАЙНУЛЛИН Павел Арсланович', 'Генеральный директор', '<p><strong>Образование</strong>:</p>\r\n\r\n<p>Казахский Государственный Национальный университет им. Аль-Фараби, специальность - Правоведение (1996 год)</p>\r\n\r\n<p>Новый Экономический университет имени Т. Рыскулова, специальность - Экономика и бизнес (2015 год)</p>\r\n\r\n<p><strong>Опыт работы</strong>:</p>\r\n\r\n<p>Коммерческие проекты, бизнесмен, собственник компании.</p>', NULL, '2021-05-29 01:42:19', '2021-05-29 02:03:01'),
(2, 'БАЯЗИТОВА Расима Тлеубергеновна', 'Заместитель Генерального директора по корпоративному развитию, MBA, HRM, сертифицированный коуч ICF, сертифицированный менеджер по качеству (TUV) QB, QM', '<p><strong>Образование</strong>:</p>\r\n\r\n<p>Казахский Гуманитарно-Юридический университет, специальность - Правоведение (предпринимательское право) (2002 год)</p>\r\n\r\n<p>Магистратура при НОУ &laquo;Международная академия бизнеса&raquo;, специальность &ndash; Корпоративный менеджмент, (МВА) (2007-2009 гг.)</p>\r\n\r\n<p>Докторант (PHD) образовательной программы &laquo;Актуальные проблемы юриспруденции&raquo; Казахский Гуманитарно-Юридический Инновационный Университет (2020 год)</p>\r\n\r\n<p><strong>Опыт работы</strong>:</p>\r\n\r\n<p>17 лет профессиональной деятельности в государственных корпорациях, национальных компаниях и в частных производственных компаниях.</p>', 'XwhvXrLZwQ.jpg', '2021-05-29 01:46:17', '2021-05-29 02:02:35'),
(3, 'КАЙРЕШЕВА Мира Владимировна', 'Заместитель Генерального директора по финансам, Доктор делового администрирования (DBA), МВА, сертифицированный профессиональный бухгалтер', '<p><strong>Образование</strong>:</p>\r\n\r\n<p>Алма-Атинский институт народного хозяйства, специальность - Экономика (1991 год)</p>\r\n\r\n<p><strong>Опыт работы</strong>:</p>\r\n\r\n<p>28 лет профессиональной деятельности в государственных органах, национальных компаниях и в частных производственных компаниях.</p>', 'jSrqUTUg3x.jpg', '2021-05-29 01:46:42', '2021-05-29 02:04:21'),
(4, 'КУРМАНОВ Аскар Жолдасбекович', 'Заместитель Генерального директора по производству', '<p><strong>Образование</strong>:</p>\r\n\r\n<p>Высший колледж транспорта и коммуникации</p>\r\n\r\n<p>Казахстанский университет путей и сообщения</p>\r\n\r\n<p>Казахстанский Государственный юридический университет</p>\r\n\r\n<p><strong>Опыт работы</strong>:</p>\r\n\r\n<p>Более 15 лет профессиональной деятельности в государственных, производственных и частных компаниях, из них 10 лет в железнодорожной отрасли в области планирования и организации ремонта подвижного состава.</p>', 't5VvXJiOGm.jpg', '2021-05-29 01:47:04', '2021-05-29 02:04:45'),
(5, 'МУСИН Жандос Ерназарович', 'Коммерческий директор', '<p><strong>Образование</strong>:</p>\r\n\r\n<p>Костанайский государственный университет им. А. Байтурсынова, специальность - Инженер транспорта (2011 год)</p>\r\n\r\n<p>Казахская академия транспорта и коммуникаций имени М. Тынышпаева, специальность - Вагонное хозяйство (2013 год)</p>\r\n\r\n<p><strong>Опыт работы</strong>:</p>\r\n\r\n<p>Более 8 лет работы в железнодорожной отрасли</p>', 'rnfXazExzw.jpg', '2021-05-29 01:47:29', '2021-05-29 02:05:09');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'admin@gmail.com', NULL, '$2y$10$1jXhmeR1X0lh7MQfqXwtae1rNTtrXVdN3XaOn1J.CR3WlCRrVqbc6', NULL, '2021-05-27 10:05:49', '2021-05-27 10:05:49');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `advantages`
--
ALTER TABLE `advantages`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Индексы таблицы `main`
--
ALTER TABLE `main`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Индексы таблицы `services_one`
--
ALTER TABLE `services_one`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `services_second`
--
ALTER TABLE `services_second`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `structure`
--
ALTER TABLE `structure`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `teams`
--
ALTER TABLE `teams`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `advantages`
--
ALTER TABLE `advantages`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT для таблицы `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT для таблицы `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `main`
--
ALTER TABLE `main`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблицы `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT для таблицы `services_one`
--
ALTER TABLE `services_one`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT для таблицы `services_second`
--
ALTER TABLE `services_second`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT для таблицы `structure`
--
ALTER TABLE `structure`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT для таблицы `teams`
--
ALTER TABLE `teams`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
