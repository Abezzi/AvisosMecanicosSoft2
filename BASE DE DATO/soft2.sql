-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 01, 2018 at 02:03 PM
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
  `id_comuna` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `imagen` varchar(191) NOT NULL,
  `id_region` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `anuncio`
--

INSERT INTO `anuncio` (`id`, `id_usuario`, `id_categoria`, `titulo`, `descripcion`, `precio`, `estado`, `id_comuna`, `created_at`, `updated_at`, `imagen`, `id_region`) VALUES
(28, 1, 1, 'regiontest', 'descripcion dadas sada sregion test', 123123000, 'SINPUBLICAR', 300, '2018-10-17 00:19:36', '2018-10-17 00:19:36', 'imagen.png', 13),
(29, 1, 1, 'titulo aisen', 'dsadasda', 123231000, 'SINPUBLICAR', 269, '2018-10-17 07:38:42', '2018-10-17 07:38:42', 'imagen.png', 11),
(30, 1, 1, 'vendo droga', 'droga a luca', 3234230, 'PUBLICADO', 270, '2018-10-17 07:41:17', '2018-10-17 07:41:17', 'imagen.png', 11),
(31, 1, 1, 'aviso maule', 'vxccvxvxv', 465456000, 'SINPUBLICAR', 129, '2018-10-17 07:52:41', '2018-10-17 07:52:41', 'imagen.png', 7);

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
-- Table structure for table `comunas`
--

CREATE TABLE `comunas` (
  `id` int(10) UNSIGNED NOT NULL,
  `nombre` varchar(120) NOT NULL,
  `id_region` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comunas`
--

INSERT INTO `comunas` (`id`, `nombre`, `id_region`) VALUES
(1, 'Arica', 1),
(2, 'Camarones', 1),
(3, 'General Lagos', 1),
(4, 'Putre', 1),
(5, 'Alto Hospicio', 2),
(6, 'Iquique', 2),
(7, 'Camiña', 2),
(8, 'Colchane', 2),
(9, 'Huara', 2),
(10, 'Pica', 2),
(11, 'Pozo Almonte', 2),
(12, 'Antofagasta', 3),
(13, 'Mejillones', 3),
(14, 'Sierra Gorda', 3),
(15, 'Taltal', 3),
(16, 'Calama', 3),
(17, 'Ollague', 3),
(18, 'San Pedro de Atacama', 3),
(19, 'María Elena', 3),
(20, 'Tocopilla', 3),
(21, 'Chañaral', 4),
(22, 'Diego de Almagro', 4),
(23, 'Caldera', 4),
(24, 'Copiapó', 4),
(25, 'Tierra Amarilla', 4),
(26, 'Alto del Carmen', 4),
(27, 'Freirina', 4),
(28, 'Huasco', 4),
(29, 'Vallenar', 4),
(30, 'Canela', 5),
(31, 'Illapel', 5),
(32, 'Los Vilos', 5),
(33, 'Salamanca', 5),
(34, 'Andacollo', 5),
(35, 'Coquimbo', 5),
(36, 'La Higuera', 5),
(37, 'La Serena', 5),
(38, 'Paihuaco', 5),
(39, 'Vicuña', 5),
(40, 'Combarbalá', 5),
(41, 'Monte Patria', 5),
(42, 'Ovalle', 5),
(43, 'Punitaqui', 5),
(44, 'Río Hurtado', 5),
(45, 'Isla de Pascua', 6),
(46, 'Calle Larga', 6),
(47, 'Los Andes', 6),
(48, 'Rinconada', 6),
(49, 'San Esteban', 6),
(50, 'La Ligua', 6),
(51, 'Papudo', 6),
(52, 'Petorca', 6),
(53, 'Zapallar', 6),
(54, 'Hijuelas', 6),
(55, 'La Calera', 6),
(56, 'La Cruz', 6),
(57, 'Limache', 6),
(58, 'Nogales', 6),
(59, 'Olmué', 6),
(60, 'Quillota', 6),
(61, 'Algarrobo', 6),
(62, 'Cartagena', 6),
(63, 'El Quisco', 6),
(64, 'El Tabo', 6),
(65, 'San Antonio', 6),
(66, 'Santo Domingo', 6),
(67, 'Catemu', 6),
(68, 'Llaillay', 6),
(69, 'Panquehue', 6),
(70, 'Putaendo', 6),
(71, 'San Felipe', 6),
(72, 'Santa María', 6),
(73, 'Casablanca', 6),
(74, 'Concón', 6),
(75, 'Juan Fernández', 6),
(76, 'Puchuncaví', 6),
(77, 'Quilpué', 6),
(78, 'Quintero', 6),
(79, 'Valparaíso', 6),
(80, 'Villa Alemana', 6),
(81, 'Viña del Mar', 6),
(82, 'Colina', 7),
(83, 'Lampa', 7),
(84, 'Tiltil', 7),
(85, 'Pirque', 7),
(86, 'Puente Alto', 7),
(87, 'San José de Maipo', 7),
(88, 'Buin', 7),
(89, 'Calera de Tango', 7),
(90, 'Paine', 7),
(91, 'San Bernardo', 7),
(92, 'Alhué', 7),
(93, 'Curacaví', 7),
(94, 'María Pinto', 7),
(95, 'Melipilla', 7),
(96, 'San Pedro', 7),
(97, 'Cerrillos', 7),
(98, 'Cerro Navia', 7),
(99, 'Conchalí', 7),
(100, 'El Bosque', 7),
(101, 'Estación Central', 7),
(102, 'Huechuraba', 7),
(103, 'Independencia', 7),
(104, 'La Cisterna', 7),
(105, 'La Granja', 7),
(106, 'La Florida', 7),
(107, 'La Pintana', 7),
(108, 'La Reina', 7),
(109, 'Las Condes', 7),
(110, 'Lo Barnechea', 7),
(111, 'Lo Espejo', 7),
(112, 'Lo Prado', 7),
(113, 'Macul', 7),
(114, 'Maipú', 7),
(115, 'Ñuñoa', 7),
(116, 'Pedro Aguirre Cerda', 7),
(117, 'Peñalolén', 7),
(118, 'Providencia', 7),
(119, 'Pudahuel', 7),
(120, 'Quilicura', 7),
(121, 'Quinta Normal', 7),
(122, 'Recoleta', 7),
(123, 'Renca', 7),
(124, 'San Miguel', 7),
(125, 'San Joaquín', 7),
(126, 'San Ramón', 7),
(127, 'Santiago', 7),
(128, 'Vitacura', 7),
(129, 'El Monte', 7),
(130, 'Isla de Maipo', 7),
(131, 'Padre Hurtado', 7),
(132, 'Peñaflor', 7),
(133, 'Talagante', 7),
(134, 'Codegua', 8),
(135, 'Coínco', 8),
(136, 'Coltauco', 8),
(137, 'Doñihue', 8),
(138, 'Graneros', 8),
(139, 'Las Cabras', 8),
(140, 'Machalí', 8),
(141, 'Malloa', 8),
(142, 'Mostazal', 8),
(143, 'Olivar', 8),
(144, 'Peumo', 8),
(145, 'Pichidegua', 8),
(146, 'Quinta de Tilcoco', 8),
(147, 'Rancagua', 8),
(148, 'Rengo', 8),
(149, 'Requínoa', 8),
(150, 'San Vicente de Tagua Tagua', 8),
(151, 'La Estrella', 8),
(152, 'Litueche', 8),
(153, 'Marchihue', 8),
(154, 'Navidad', 8),
(155, 'Peredones', 8),
(156, 'Pichilemu', 8),
(157, 'Chépica', 8),
(158, 'Chimbarongo', 8),
(159, 'Lolol', 8),
(160, 'Nancagua', 8),
(161, 'Palmilla', 8),
(162, 'Peralillo', 8),
(163, 'Placilla', 8),
(164, 'Pumanque', 8),
(165, 'San Fernando', 8),
(166, 'Santa Cruz', 8),
(167, 'Cauquenes', 9),
(168, 'Chanco', 9),
(169, 'Pelluhue', 9),
(170, 'Curicó', 9),
(171, 'Hualañé', 9),
(172, 'Licantén', 9),
(173, 'Molina', 9),
(174, 'Rauco', 9),
(175, 'Romeral', 9),
(176, 'Sagrada Familia', 9),
(177, 'Teno', 9),
(178, 'Vichuquén', 9),
(179, 'Colbún', 9),
(180, 'Linares', 9),
(181, 'Longaví', 9),
(182, 'Parral', 9),
(183, 'Retiro', 9),
(184, 'San Javier', 9),
(185, 'Villa Alegre', 9),
(186, 'Yerbas Buenas', 9),
(187, 'Constitución', 9),
(188, 'Curepto', 9),
(189, 'Empedrado', 9),
(190, 'Maule', 9),
(191, 'Pelarco', 9),
(192, 'Pencahue', 9),
(193, 'Río Claro', 9),
(194, 'San Clemente', 9),
(195, 'San Rafael', 9),
(196, 'Talca', 9),
(197, 'Arauco', 10),
(198, 'Cañete', 10),
(199, 'Contulmo', 10),
(200, 'Curanilahue', 10),
(201, 'Lebu', 10),
(202, 'Los Álamos', 10),
(203, 'Tirúa', 10),
(204, 'Alto Biobío', 10),
(205, 'Antuco', 10),
(206, 'Cabrero', 10),
(207, 'Laja', 10),
(208, 'Los Ángeles', 10),
(209, 'Mulchén', 10),
(210, 'Nacimiento', 10),
(211, 'Negrete', 10),
(212, 'Quilaco', 10),
(213, 'Quilleco', 10),
(214, 'San Rosendo', 10),
(215, 'Santa Bárbara', 10),
(216, 'Tucapel', 10),
(217, 'Yumbel', 10),
(218, 'Chiguayante', 10),
(219, 'Concepción', 10),
(220, 'Coronel', 10),
(221, 'Florida', 10),
(222, 'Hualpén', 10),
(223, 'Hualqui', 10),
(224, 'Lota', 10),
(225, 'Penco', 10),
(226, 'San Pedro de La Paz', 10),
(227, 'Santa Juana', 10),
(228, 'Talcahuano', 10),
(229, 'Tomé', 10),
(230, 'Bulnes', 10),
(231, 'Chillán', 10),
(232, 'Chillán Viejo', 10),
(233, 'Cobquecura', 10),
(234, 'Coelemu', 10),
(235, 'Coihueco', 10),
(236, 'El Carmen', 10),
(237, 'Ninhue', 10),
(238, 'Ñiquen', 10),
(239, 'Pemuco', 10),
(240, 'Pinto', 10),
(241, 'Portezuelo', 10),
(242, 'Quillón', 10),
(243, 'Quirihue', 10),
(244, 'Ránquil', 10),
(245, 'San Carlos', 10),
(246, 'San Fabián', 10),
(247, 'San Ignacio', 10),
(248, 'San Nicolás', 10),
(249, 'Treguaco', 10),
(250, 'Yungay', 10),
(251, 'Carahue', 11),
(252, 'Cholchol', 11),
(253, 'Cunco', 11),
(254, 'Curarrehue', 11),
(255, 'Freire', 11),
(256, 'Galvarino', 11),
(257, 'Gorbea', 11),
(258, 'Lautaro', 11),
(259, 'Loncoche', 11),
(260, 'Melipeuco', 11),
(261, 'Nueva Imperial', 11),
(262, 'Padre Las Casas', 11),
(263, 'Perquenco', 11),
(264, 'Pitrufquén', 11),
(265, 'Pucón', 11),
(266, 'Saavedra', 11),
(267, 'Temuco', 11),
(268, 'Teodoro Schmidt', 11),
(269, 'Toltén', 11),
(270, 'Vilcún', 11),
(271, 'Villarrica', 11),
(272, 'Angol', 11),
(273, 'Collipulli', 11),
(274, 'Curacautín', 11),
(275, 'Ercilla', 11),
(276, 'Lonquimay', 11),
(277, 'Los Sauces', 11),
(278, 'Lumaco', 11),
(279, 'Purén', 11),
(280, 'Renaico', 11),
(281, 'Traiguén', 11),
(282, 'Victoria', 11),
(283, 'Corral', 12),
(284, 'Lanco', 12),
(285, 'Los Lagos', 12),
(286, 'Máfil', 12),
(287, 'Mariquina', 12),
(288, 'Paillaco', 12),
(289, 'Panguipulli', 12),
(290, 'Valdivia', 12),
(291, 'Futrono', 12),
(292, 'La Unión', 12),
(293, 'Lago Ranco', 12),
(294, 'Río Bueno', 12),
(295, 'Ancud', 13),
(296, 'Castro', 13),
(297, 'Chonchi', 13),
(298, 'Curaco de Vélez', 13),
(299, 'Dalcahue', 13),
(300, 'Puqueldón', 13),
(301, 'Queilén', 13),
(302, 'Quemchi', 13),
(303, 'Quellón', 13),
(304, 'Quinchao', 13),
(305, 'Calbuco', 13),
(306, 'Cochamó', 13),
(307, 'Fresia', 13),
(308, 'Frutillar', 13),
(309, 'Llanquihue', 13),
(310, 'Los Muermos', 13),
(311, 'Maullín', 13),
(312, 'Puerto Montt', 13),
(313, 'Puerto Varas', 13),
(314, 'Osorno', 13),
(315, 'Puero Octay', 13),
(316, 'Purranque', 13),
(317, 'Puyehue', 13),
(318, 'Río Negro', 13),
(319, 'San Juan de la Costa', 13),
(320, 'San Pablo', 13),
(321, 'Chaitén', 13),
(322, 'Futaleufú', 13),
(323, 'Hualaihué', 13),
(324, 'Palena', 13),
(325, 'Aisén', 14),
(326, 'Cisnes', 14),
(327, 'Guaitecas', 14),
(328, 'Cochrane', 14),
(329, 'O\'higgins', 14),
(330, 'Tortel', 14),
(331, 'Coihaique', 14),
(332, 'Lago Verde', 14),
(333, 'Chile Chico', 14),
(334, 'Río Ibáñez', 14),
(335, 'Antártica', 15),
(336, 'Cabo de Hornos', 15),
(337, 'Laguna Blanca', 15),
(338, 'Punta Arenas', 15),
(339, 'Río Verde', 15),
(340, 'San Gregorio', 15),
(341, 'Porvenir', 15),
(342, 'Primavera', 15),
(343, 'Timaukel', 15),
(344, 'Natales', 15),
(345, 'Torres del Paine', 15),
(346, 'Cabildo', 6);

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
-- Table structure for table `regiones`
--

CREATE TABLE `regiones` (
  `id` int(10) UNSIGNED NOT NULL,
  `nombre` varchar(120) NOT NULL,
  `ordinal` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `regiones`
--

INSERT INTO `regiones` (`id`, `nombre`, `ordinal`) VALUES
(1, 'Arica y Parinacota', 'XV'),
(2, 'Tarapacá', 'I'),
(3, 'Antofagasta', 'II'),
(4, 'Atacama', 'III'),
(5, 'Coquimbo', 'IV'),
(6, 'Valparaiso', 'V'),
(7, 'Metropolitana de Santiago', 'RM'),
(8, 'Libertador General Bernardo O\'Higgins', 'VI'),
(9, 'Maule', 'VII'),
(10, 'Biobío', 'VIII'),
(11, 'La Araucanía', 'IX'),
(12, 'Los Ríos', 'XIV'),
(13, 'Los Lagos', 'X'),
(14, 'Aisén del General Carlos Ibáñez del Campo', 'XI'),
(15, 'Magallanes y de la Antártica Chilena', 'XII');

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
(1, 'Admin', 'admin@admin.com', '$2y$10$y027Jaezcfbi.jYqZ38GU.LwqnNBu.4oKcdH6YXJP.xGmo8Bmcu3i', '1', '', 'skin-yellow', NULL, '6zdSw1NhWhGN5eyZaQ5f6cdngDIwSxhTdqNAFGhtW5EshG3EVfnadof5vhMt', '2017-05-31 03:50:39', '2018-09-24 02:54:15'),
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
  ADD KEY `id_categoria` (`id_categoria`),
  ADD KEY `region` (`id_region`),
  ADD KEY `id_region` (`id_region`),
  ADD KEY `id_comuna` (`id_comuna`);

--
-- Indexes for table `categoria`
--
ALTER TABLE `categoria`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comunas`
--
ALTER TABLE `comunas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_region` (`id_region`);

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
-- Indexes for table `regiones`
--
ALTER TABLE `regiones`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT for table `comunas`
--
ALTER TABLE `comunas`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=347;

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
-- AUTO_INCREMENT for table `regiones`
--
ALTER TABLE `regiones`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

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
  ADD CONSTRAINT `anuncio_ibfk_2` FOREIGN KEY (`id_categoria`) REFERENCES `categoria` (`id`),
  ADD CONSTRAINT `anuncio_ibfk_3` FOREIGN KEY (`id_region`) REFERENCES `regiones` (`id`),
  ADD CONSTRAINT `anuncio_ibfk_4` FOREIGN KEY (`id_comuna`) REFERENCES `comunas` (`id`);

--
-- Constraints for table `comunas`
--
ALTER TABLE `comunas`
  ADD CONSTRAINT `comunas_ibfk_1` FOREIGN KEY (`id_region`) REFERENCES `regiones` (`id`);

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
