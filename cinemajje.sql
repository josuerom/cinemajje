SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

-- Base de datos: `cinemajje`
-- Date: 10/09/23

CREATE TABLE `cache` (
  `key` varchar(255) NOT NULL,
  `value` mediumtext NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;


CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;


CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2099_12_14_000009_create_personal_access_tokens_table', 1),
(2, '2023_09_10_000000_create_failed_jobs_table', 1),
(3, '2023_09_10_000000_create_users_table', 1),
(4, '2023_09_10_000520_create_peliculas_table', 1),
(5, '2023_09_10_002020_create_permission_tables', 1),
(6, '2023_09_10_040225_pedidos', 1),
(7, '2023_09_10_100000_create_password_resets_table', 1),
(8, '2023_09_10_220534_create_cache_table', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `model_has_permissions`
--

CREATE TABLE `model_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `model_has_roles`
--

CREATE TABLE `model_has_roles` (
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `model_has_roles`
--

INSERT INTO `model_has_roles` (`role_id`, `model_type`, `model_id`) VALUES
(1, 'App\\Models\\User', 1),
(1, 'App\\Models\\User', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `peliculas`
--

CREATE TABLE `peliculas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nombre` varchar(40) NOT NULL,
  `descripcion` varchar(600) NOT NULL,
  `director` varchar(25) NOT NULL,
  `estudio` varchar(35) NOT NULL,
  `genero` varchar(15) NOT NULL,
  `precio` int(8) NOT NULL DEFAULT 0,
  `duracion` varchar(3) NOT NULL,
  `trailer` varchar(60) NOT NULL,
  `portada` varchar(60) NOT NULL,
  `exclusividad` varchar(2) NOT NULL,
  `foto` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `peliculas`
--

INSERT INTO `peliculas` (`id`, `nombre`, `descripcion`, `director`, `estudio`, `genero`, `precio`, `duracion`, `trailer`, `portada`, `exclusividad`, `foto`, `created_at`, `updated_at`) VALUES
(1, 'Avatar: el camino del agua', 'Jake Sully y Ney\'tiri han formado una familia y hacen todo lo posible por permanecer juntos. Sin embargo, deben abandonar su hogar y explorar las regiones de Pandora cuando una antigua amenaza reaparece.', 'James Cameron', 'Walt Disney Studios Motion Pictures', 'Accion', 14000, '130', 'https://www.youtube.com/watch?v=u0hxjdWG84k', '', 'si', '1.jpg', '2023-09-04 07:22:52', '2023-02-12 23:00:50'),
(2, 'Fuera de control', 'El horrendo día de Rachel, madre soltera, se torna una pesadilla infernal cuando toca la bocina a otro conductor. Lo que empieza como una discusión corriente por el tráfico se vuelve, en la cabeza de un psicópata, en una afrenta que merece venganza.', 'Derrick Borte', 'Ingenious Media; Burek Films', 'Accion', 20000, '91', 'https://www.youtube.com/embed/GoqLErZfoq4', '', 'si', '2.jpg', '2023-09-04 07:22:52', '2023-02-14 19:09:54'),
(3, 'Rápidos y Furiosos X', 'Max Barber (Robert de Niro) es un productor de cine de Hollywood de serie B que necesita encontrar un nuevo proyecto que le permita saldar su deuda con un jefe de la mafia local (Morgan Freeman). Decide emprender la producción de una película con escenas de acción de alto riesgo, con el fin de provocar la muerte de su actor protagonista y poder cobrar así el altísimo seguro, solucionando definitivamente sus problemas económicos.', 'Louis Leterrier', 'Universal Studios', 'Acción', 50000, '141', 'https://www.youtube.com/watch?v=4TOpS3cdb3c', '', 'si', '3.jpg', '2023-09-17 06:42:20', '2023-02-12 23:03:41'),
(4, 'Amigos de vacaciones 2', 'Amigos de vacaciones 2 es una película de comedia de amigos estadounidense de 2023 escrita y dirigida por Clay Tarver. Es una secuela de Vacation Friends y está protagonizada por Lil Rel Howery, John Cena, Yvonne Orji, Meredith Hagner, Steve Buscemi, Ronny Chieng y Jamie Hector.', 'Clay Tarver', '20th Century Studios', 'Aventura', 40000, '78', 'https://www.youtube.com/watch?v=iWYso1toNw4', '', 'si', '4.jpg', '2023-09-18 09:24:20', '2023-09-18 09:24:20'),
(48, 'El padre', 'Anthony (Anthony Hopkins), un hombre de 80 años mordaz, algo travieso y que tercamente ha decidido vivir solo, rechaza todos y cada uno de las cuidadoras que su hija Anne', 'Florian Zeller', 'Embankment Films', 'suspense', 19700, '97', 'https://www.youtube.com/embed/4TZb7YfK-JI', '', 'si', '5.jpg', '2023-09-27 19:55:28', '2023-02-12 23:03:50'),
(49, 'Mi niña', 'Heloise es la madre de tres hijos. Jade, su \"hija pequeña\", acaba de cumplir dieciocho años y pronto abandonará el nido para continuar sus estudios en Canadá. A medida que se acerca la partida de Jade, el estrés de Heloise aumenta y recuerda sus momentos compartidos con ella.', 'Lisa Azuelos', 'Pathe Films', 'comedia', 35000, '85', 'https://www.youtube.com/embed/25Nq3Ba6VQg', '', 'si', '6.jpg', '2023-09-27 20:09:44', '2023-02-12 23:04:12'),
(65, 'La chica del brazalete', 'Lise, de 16 años, está acusada de haber asesinado a su mejor amiga. Durante el juicio, sus padres la defienden de manera inquebrantable. Sin embargo, a medida que su vida secreta comienza a desvelarse, la verdad se convierte en algo indiscutible.', 'Stéphane Demoustier', 'France 3', 'drama', 13500, '95', 'https://www.youtube.com/embed/s6f93SQ95kI', '', 'si', '7.jpg', '2023-02-10 05:17:34', '2023-02-10 05:17:34');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `guard_name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `permissions`
--

INSERT INTO `permissions` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'visualizar web', 'web', '2023-09-20 05:43:20', '2023-09-20 05:43:20'),
(2, 'administrar web', 'web', '2023-09-20 05:58:13', '2023-09-20 05:58:13');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `guard_name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `roles`
--

INSERT INTO `roles` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'cliente', 'web', '2023-09-20 05:39:43', '2023-09-20 05:39:43'),
(2, 'administrador', 'web', '2023-09-20 05:57:36', '2023-09-20 05:57:36');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `role_has_permissions`
--

CREATE TABLE `role_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `role_has_permissions`
--

INSERT INTO `role_has_permissions` (`permission_id`, `role_id`) VALUES
(1, 1),
(2, 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Josué Romero', 'admin@cinemajje.com', NULL, '$2y$10$aM0P/lwto5BczsJOfPdnSetj.TST9Q/bKPV.k815PXLUTKJcV6Qtu', NULL, '2023-09-11 08:17:20', '2023-09-11 08:17:20');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `cache`
--
ALTER TABLE `cache`
  ADD UNIQUE KEY `cache_key_unique` (`key`);

--
-- Indices de la tabla `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indices de la tabla `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`model_id`,`model_type`),
  ADD KEY `model_has_permissions_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indices de la tabla `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD PRIMARY KEY (`role_id`,`model_id`,`model_type`),
  ADD KEY `model_has_roles_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indices de la tabla `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indices de la tabla `peliculas`
--
ALTER TABLE `peliculas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `role_has_permissions_role_id_foreign` (`role_id`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `peliculas`
--
ALTER TABLE `peliculas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;

--
-- AUTO_INCREMENT de la tabla `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD CONSTRAINT `model_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD CONSTRAINT `model_has_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD CONSTRAINT `role_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `role_has_permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40909 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40909 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40909 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
