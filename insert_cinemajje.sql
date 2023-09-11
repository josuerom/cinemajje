-- Estructura de inserción masiva para las tablas

INSERT INTO `model_has_roles` (`role_id`, `model_type`, `model_id`) VALUES
(1, 'App\\Models\\User', 1),
(1, 'App\\Models\\User', 2);


INSERT INTO `peliculas` (`id`, `nombre`, `descripcion`, `director`, `estudio`, `genero`, `precio`, `duracion`, `trailer`, `portada`, `exclusividad`, `foto`, `created_at`, `updated_at`) VALUES
(1, 'Avatar: el camino del agua', 'Jake Sully y Ney\'tiri han formado una familia y hacen todo lo posible por permanecer juntos. Sin embargo, deben abandonar su hogar y explorar las regiones de Pandora cuando una antigua amenaza reaparece.', 'James Cameron', 'Walt Disney Studios Motion Pictures', 'Accion', 14000, '130', 'https://www.youtube.com/watch?v=u0hxjdWG84k', '', 'si', '1.jpg', '2023-09-10 07:22:52', '2023-09-10 23:00:50'),
(2, 'Fuera de control', 'El horrendo día de Rachel, madre soltera, se torna una pesadilla infernal cuando toca la bocina a otro conductor. Lo que empieza como una discusión corriente por el tráfico se vuelve, en la cabeza de un psicópata, en una afrenta que merece venganza.', 'Derrick Borte', 'Ingenious Media; Burek Films', 'Accion', 20000, '91', 'https://www.youtube.com/embed/GoqLErZfoq4', '', 'si', '2.jpg', '2023-09-01 07:22:52', '2023-09-10 19:09:54'),
(3, 'Rápidos y Furiosos X', 'Max Barber (Robert de Niro) es un productor de cine de Hollywood de serie B que necesita encontrar un nuevo proyecto que le permita saldar su deuda con un jefe de la mafia local (Morgan Freeman). Decide emprender la producción de una película con escenas de acción de alto riesgo, con el fin de provocar la muerte de su actor protagonista y poder cobrar así el altísimo seguro, solucionando definitivamente sus problemas económicos.', 'Louis Leterrier', 'Universal Studios', 'Acción', 50000, '141', 'https://www.youtube.com/watch?v=4TOpS3cdb3c', '', 'si', '3.jpg', '2023-09-10 06:42:20', '2023-09-10 23:03:41'),
(4, 'Amigos de vacaciones 2', 'Amigos de vacaciones 2 es una película de comedia de amigos estadounidense de 2023 escrita y dirigida por Clay Tarver. Es una secuela de Vacation Friends y está protagonizada por Lil Rel Howery, John Cena, Yvonne Orji, Meredith Hagner, Steve Buscemi, Ronny Chieng y Jamie Hector.', 'Clay Tarver', '20th Century Studios', 'Aventura', 40000, '78', 'https://www.youtube.com/watch?v=iWYso1toNw4', '', 'si', '4.jpg', '2023-09-10 09:24:20', '2023-09-10 09:24:20'),
(48, 'El padre', 'Anthony (Anthony Hopkins), un hombre de 80 años mordaz, algo travieso y que tercamente ha decidido vivir solo, rechaza todos y cada uno de las cuidadoras que su hija Anne', 'Florian Zeller', 'Embankment Films', 'suspense', 19700, '97', 'https://www.youtube.com/embed/4TZb7YfK-JI', '', 'si', '5.jpg', '2023-09-10 19:55:28', '2023-09-10 23:03:50'),
(49, 'Mi niña', 'Heloise es la madre de tres hijos. Jade, su \"hija pequeña\", acaba de cumplir dieciocho años y pronto abandonará el nido para continuar sus estudios en Canadá. A medida que se acerca la partida de Jade, el estrés de Heloise aumenta y recuerda sus momentos compartidos con ella.', 'Lisa Azuelos', 'Pathe Films', 'comedia', 35000, '85', 'https://www.youtube.com/embed/25Nq3Ba6VQg', '', 'si', '6.jpg', '2023-09-10 20:01:44', '2023-09-10 23:04:12'),
(65, 'La chica del brazalete', 'Lise, de 16 años, está acusada de haber asesinado a su mejor amiga. Durante el juicio, sus padres la defienden de manera inquebrantable. Sin embargo, a medida que su vida secreta comienza a desvelarse, la verdad se convierte en algo indiscutible.', 'Stéphane Demoustier', 'France 3', 'drama', 13500, '95', 'https://www.youtube.com/embed/s6f93SQ95kI', '', 'si', '7.jpg', '2023-09-10 05:17:34', '2023-09-10 05:17:59');


INSERT INTO `permissions` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'visualizar web', 'web', '2023-09-10 05:43:20', '2023-09-10 05:43:20'),
(2, 'administrar web', 'web', '2023-09-10 05:58:13', '2023-09-10 05:58:13');


INSERT INTO `roles` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'cliente', 'web', '2023-09-10 05:39:43', '2023-09-10 05:39:43'),
(2, 'administrador', 'web', '2023-09-10 05:57:36', '2023-09-10 05:57:36');


INSERT INTO `role_has_permissions` (`permission_id`, `role_id`) VALUES
(1, 1),
(2, 2);


INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Josué Romero', 'admin@cinemajje.com', NULL, '$2y$10$aM0P/lwto5BczsJOfPdnSetj.TST9Q/bKPV.k815PXLUTKJcV6Qtu', NULL, '2023-09-10 08:17:20', '2023-09-10 08:17:20');