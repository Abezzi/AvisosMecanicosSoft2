-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 21, 2018 at 08:26 PM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `soft2`
--

-- --------------------------------------------------------

--
-- Table structure for table `anuncio`
--

CREATE TABLE `anuncio` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_usuario` int(10) UNSIGNED DEFAULT NULL,
  `id_categoria` int(10) UNSIGNED DEFAULT NULL,
  `titulo` varchar(60) NOT NULL,
  `descripcion` varchar(150) NOT NULL,
  `precio` float NOT NULL,
  `estado` enum('PUBLICADO','SINPUBLICAR') NOT NULL DEFAULT 'SINPUBLICAR',
  `comuna` varchar(60) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `imagen` varchar(191) NOT NULL,
  `region` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `anuncio`
--

INSERT INTO `anuncio` (`id`, `id_usuario`, `id_categoria`, `titulo`, `descripcion`, `precio`, `estado`, `comuna`, `created_at`, `updated_at`, `imagen`, `region`) VALUES
(11, 1, 1, 'asda', 'asd', 234567, 'SINPUBLICAR', '1', '2018-10-08 04:49:14', '2018-10-08 04:49:14', '', ''),
(12, 1, 1, 'cxv', 'xcvxcv', 134, 'SINPUBLICAR', '1', '2018-10-08 04:50:33', '2018-10-08 04:50:33', '', ''),
(13, 1, 1, 'asd', 'asdasdasd', 12345, 'SINPUBLICAR', '2', '2018-10-08 04:57:51', '2018-10-08 04:57:51', '', ''),
(14, 1, 1, 'asdasas', 'asdasdad', 2345680, 'SINPUBLICAR', '2', '2018-10-08 04:58:45', '2018-10-08 04:58:45', '', ''),
(15, 1, 1, 'asdasd', 'asdasd', 98765, 'SINPUBLICAR', '1', '2018-10-08 05:00:01', '2018-10-08 05:00:01', '', ''),
(16, 1, 1, 'bvnn', 'vbnvbn', 567, 'SINPUBLICAR', 'Providencia', '2018-10-08 05:02:45', '2018-10-08 05:02:45', '', ''),
(17, 1, 1, 'asdasd', 'jhkln', 7847, 'SINPUBLICAR', 'Providencia', '2018-10-08 05:07:34', '2018-10-08 05:07:34', '', ''),
(18, 1, 1, 'asda', 'asdasd', 119, 'PUBLICADO', '1', '2018-10-08 05:17:43', '2018-10-08 05:17:43', 'salamanca.png', ''),
(19, 1, 1, 'xcvxcv', 'xcvxcv', 8761, 'PUBLICADO', '1', '2018-10-08 05:18:30', '2018-10-08 05:18:30', 'salamanca.png', ''),
(20, 1, 1, 'asdad', 'asdasd', 54, 'PUBLICADO', '1', '2018-10-08 05:29:20', '2018-10-08 05:29:20', 'illapel.png', ''),
(21, 1, 1, 'asdasda', 'asdasd', 33, 'PUBLICADO', '2', '2018-10-08 05:31:08', '2018-10-08 05:31:08', 'illapel.png', ''),
(22, 1, 1, 'xcv', 'cxvxcv', 345, 'PUBLICADO', 'Providencia', '2018-10-08 05:53:25', '2018-10-08 05:53:25', 'illapel.png', ''),
(23, 1, 1, 'nbmvbn', 'vbnvbn', 8765, 'PUBLICADO', '1', '2018-10-08 05:54:29', '2018-10-08 05:54:29', 'salamanca.png', ''),
(24, 2, 1, 'dfgdf', 'dfgdf', 13120, 'SINPUBLICAR', '1', '2018-10-08 08:11:45', '2018-10-08 08:11:45', 'slider_006.png', ''),
(25, 1, 1, 'zzz', 'zzzzz', 12312, 'SINPUBLICAR', 'Providencia', '2018-10-16 22:24:58', '2018-10-16 22:24:58', 'imagen.png', ''),
(26, 1, 1, 'Titulozzzzzz', 'descripxzzzzz', 23123, 'SINPUBLICAR', 'Providencia', '2018-10-16 22:48:26', '2018-10-16 22:48:26', 'imagen.png', ''),
(27, 1, 1, 'modal test', 'modal test', 123213, 'SINPUBLICAR', 'Providencia', '2018-10-16 23:02:46', '2018-10-16 23:02:46', 'imagen.png', ''),
(28, 1, 1, 'regiontest', 'descripcion dadas sada sregion test', 123123000, 'SINPUBLICAR', 'Providencia', '2018-10-17 00:19:36', '2018-10-17 00:19:36', 'imagen.png', '13'),
(29, 1, 1, 'titulo aisen', 'dsadasda', 123231000, 'SINPUBLICAR', '2', '2018-10-17 07:38:42', '2018-10-17 07:38:42', 'imagen.png', '11'),
(30, 1, 1, 'vendo droga', 'droga a luca', 3234230, 'PUBLICADO', '2', '2018-10-17 07:41:17', '2018-10-17 07:41:17', 'imagen.png', '11'),
(31, 1, 1, 'aviso maule', 'vxccvxvxv', 465456000, 'SINPUBLICAR', '3', '2018-10-17 07:52:41', '2018-10-17 07:52:41', 'imagen.png', '7');

-- --------------------------------------------------------

--
-- Table structure for table `categoria`
--

CREATE TABLE `categoria` (
  `id` int(10) UNSIGNED NOT NULL,
  `nombre` varchar(64) NOT NULL,
  `descripcion` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `categoria`
--

INSERT INTO `categoria` (`id`, `nombre`, `descripcion`) VALUES
(1, 'Transporte', 'gruas a todo destino ');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(8, '2014_10_12_000000_create_users_table', 1),
(9, '2014_10_12_100000_create_password_resets_table', 1),
(10, '2018_09_22_020133_entrust_setup_tables', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `permission_role`
--

CREATE TABLE `permission_role` (
  `permission_id` int(10) UNSIGNED NOT NULL,
  `role_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `display_name`, `description`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'ADMINISTRADOR', 'admini', NULL, NULL),
(2, 'revisor', 'REVISOR', 'revisa anuncio', NULL, NULL),
(3, 'cliente', 'CLIENTE', 'cliente', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `role_user`
--

CREATE TABLE `role_user` (
  `user_id` int(10) UNSIGNED NOT NULL,
  `role_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `role_user`
--

INSERT INTO `role_user` (`user_id`, `role_id`) VALUES
(1, 1),
(3, 3);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tipo` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'gratis',
  `color` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT 'skin-blue',
  `foto` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `role`, `tipo`, `color`, `foto`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'admin@admin.com', '$2y$10$y027Jaezcfbi.jYqZ38GU.LwqnNBu.4oKcdH6YXJP.xGmo8Bmcu3i', '1', '', 'skin-yellow', NULL, '1pGESLwMag4UzoMuhehPWLdyloEf0VAu7u3X8usI65rn6gou7x9m9bj14fwu', '2017-05-31 03:50:39', '2018-09-24 02:54:15'),
(2, 'sdfsdf', 'cliente@cliente.com', '$2y$10$wuUWZuabBJmOxxWBH9Rg3eUku0333MOJqm23GP0l3D.Y59vh90Z3O', '3', 'gratis', 'skin-blue', NULL, NULL, '2018-10-08 08:11:24', '2018-10-08 08:11:24'),
(3, 'Cliente Perez', 'cliente@ucm.cl', '$2y$10$EZc1fpFTCLahRovdytYZ3e9BKZI32A/plcRGMo81zQXEt7dmRdUQS', '3', 'gratis', 'skin-blue', 'user2-160x160.png', 'S1HKuiyyRyUZntx7Tc2J0jUsEaugYgH9jAMDGn0lFt9ToN0F2r5n79Rl8bTQ', '2018-10-16 21:13:57', '2018-10-16 21:13:57');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `anuncio`
--
ALTER TABLE `anuncio`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_usuario` (`id_usuario`),
  ADD KEY `id_categoria` (`id_categoria`);

--
-- Indexes for table `categoria`
--
ALTER TABLE `categoria`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `permissions_name_unique` (`name`);

--
-- Indexes for table `permission_role`
--
ALTER TABLE `permission_role`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `permission_role_role_id_foreign` (`role_id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_name_unique` (`name`);

--
-- Indexes for table `role_user`
--
ALTER TABLE `role_user`
  ADD PRIMARY KEY (`user_id`,`role_id`),
  ADD KEY `role_user_role_id_foreign` (`role_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `anuncio`
--
ALTER TABLE `anuncio`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `categoria`
--
ALTER TABLE `categoria`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `anuncio`
--
ALTER TABLE `anuncio`
  ADD CONSTRAINT `anuncio_ibfk_1` FOREIGN KEY (`id_usuario`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `anuncio_ibfk_2` FOREIGN KEY (`id_categoria`) REFERENCES `categoria` (`id`);

--
-- Constraints for table `permission_role`
--
ALTER TABLE `permission_role`
  ADD CONSTRAINT `permission_role_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `permission_role_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `role_user`
--
ALTER TABLE `role_user`
  ADD CONSTRAINT `role_user_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `role_user_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
