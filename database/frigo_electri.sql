-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 14-09-2020 a las 05:10:37
-- Versión del servidor: 10.4.11-MariaDB
-- Versión de PHP: 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `frigo_electri`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clients`
--

CREATE TABLE `clients` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `clients`
--

INSERT INTO `clients` (`id`, `name`, `image`, `created_at`, `updated_at`) VALUES
(1, 'AGROAURORA', 'agroaurora.jpg', NULL, NULL),
(2, 'AGROLATAM', 'agrolatam.jpg', NULL, NULL),
(3, 'AGROLMOS', 'agrolmos.jpg', NULL, NULL),
(4, 'BODYTECH', 'bodytech.jpg', NULL, NULL),
(5, 'OSORIA SMILE', 'osoria.jpg', NULL, NULL),
(6, 'AGRICOLA PAMPABAJA S.A.C', 'pampabaja.jpg', NULL, NULL),
(7, 'BETA - COMPLEJO AGROINDUSTRIAL', 'beta.jpg', NULL, NULL),
(8, 'VITALINE', 'vitaline.jpg', NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `companies`
--

CREATE TABLE `companies` (
  `id` tinyint(3) UNSIGNED NOT NULL,
  `name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ruc` varchar(11) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` char(14) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2020_09_03_125809_create_companies_table', 1),
(2, '2020_09_03_173610_create_services_table', 1),
(3, '2020_09_03_174036_create_orders_table', 1),
(4, '2020_09_03_174609_create_solicitudes_table', 1),
(5, '2020_09_13_165635_create_clients_table', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `orders`
--

CREATE TABLE `orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `service_id` bigint(20) UNSIGNED DEFAULT NULL,
  `name` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` char(14) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(80) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date` date DEFAULT NULL,
  `message` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `services`
--

CREATE TABLE `services` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(80) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `short_description` varchar(300) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `long_description` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `services`
--

INSERT INTO `services` (`id`, `name`, `slug`, `short_description`, `long_description`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Instalaciones de gases', 'instalaciones-de-gases', 'Instalación de sistemas de gases medicinales, oxigeno, vacío, oxido nitroso, aire medicinal', NULL, 'instalacion-gas-medicinal.jpeg', NULL, NULL),
(2, 'Aire acondicionado', 'aire-acondicionado', 'Aire acondicionado industrial y residencial', NULL, 'mantenimiento-aire-acondicionado.jpg', NULL, NULL),
(3, 'Ventilación interna', 'ventilacion', 'Ventilación para oficinas', NULL, 'ventilacion.jpeg', NULL, NULL),
(4, 'Aire acondicionado automotriz', 'aire-acondicionado-automotriz', 'Instalación y mantenimiento de aire acondicionado automotriz', NULL, 'aire-acondicionado-automotriz.jpeg', NULL, NULL),
(5, 'Secadores', 'secadores', 'Instalación y mantenimiento de secadores', NULL, 'mantenimiento-secadores.jpg', NULL, NULL),
(6, 'Reparaciones y mantenimiento', 'reparaciones-y-mantenimiento', 'Reparación, mantenimiento y proyecto de subestaciones eléctricas. Reparación de máquinas de calor', NULL, 'reparacion-aire.jpeg', NULL, NULL),
(7, 'Electicidad de baja tensión', 'electricidad-baja-tension', 'Instalaciones y mantenimiento de electricidad de baja tensión', NULL, 'proyecto-baja-media-tension.jpg', NULL, NULL),
(8, 'Electicidad de media tensión', 'electricidad-media-tension', 'Instalaciones y mantenimiento de electricidad de media tensión', NULL, 'proyecto-media-tension.jpg', NULL, NULL),
(9, 'Fabricación de tableros', 'fabricacion-de-tableros', 'Elaboración de tableros eléctricos y de transferencia', NULL, 'fabricacion-tableros.jpeg', NULL, NULL),
(10, 'Tableros eléctricos y de transferencia', 'tableros-electricos-y-de-transferencia', 'Reparación y mantenimiento de tableros eléctricos y de transferencia', NULL, 'tablero-transferencia.jpg', NULL, NULL),
(11, 'Refrigeración', 'refrigeracion', 'Refrigeración comercial e industrial', NULL, 'refrigeracion.jpg', NULL, NULL),
(12, 'Mantenimiento e instalaciones eléctricas', 'mantenimiento-instalaciones-electricas', 'Mantenimiento e instalaciones eléctricas', NULL, 'mantenimiento-tableros.jpg', NULL, NULL),
(13, 'Instalaciones de puestas a tierra', 'instalaciones-de-puestas-a-tierras', 'Instalación de puestas a tierra, mayas, parrarayos', NULL, 'puesta-a-tierra.jpeg', NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `solicitudes`
--

CREATE TABLE `solicitudes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(80) COLLATE utf8mb4_unicode_ci NOT NULL,
  `business` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(80) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `message` varchar(300) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` char(14) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `clients`
--
ALTER TABLE `clients`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `companies`
--
ALTER TABLE `companies`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `orders_service_id_foreign` (`service_id`);

--
-- Indices de la tabla `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `solicitudes`
--
ALTER TABLE `solicitudes`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `clients`
--
ALTER TABLE `clients`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `companies`
--
ALTER TABLE `companies`
  MODIFY `id` tinyint(3) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `services`
--
ALTER TABLE `services`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT de la tabla `solicitudes`
--
ALTER TABLE `solicitudes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_service_id_foreign` FOREIGN KEY (`service_id`) REFERENCES `services` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
