-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 17-09-2020 a las 00:21:21
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
(1, 'AGROAURORA', 'agroaurora.png', NULL, NULL),
(2, 'AGROLATAM', 'agrolatam.png', NULL, NULL),
(3, 'AGROLMOS', 'agrolmos.png', NULL, NULL),
(4, 'BODYTECH', 'bodytech.png', NULL, NULL),
(5, 'OSORIA SMILE', 'osoria.png', NULL, NULL),
(6, 'AGRICOLA PAMPABAJA S.A.C', 'pampabaja.png', NULL, NULL),
(7, 'BETA - COMPLEJO AGROINDUSTRIAL', 'beta.png', NULL, NULL),
(8, 'VITALINE', 'vitaline.png', NULL, NULL);

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
(1, 'Instalaciones de Gases Medicinales', 'instalaciones-de-gases', 'Nuestro servicio de instalación de gases cumple con los protocolos de seguridad de acuerdo a la necesidad de tu organización.', NULL, 'instalacion-gas-medicinal.jpeg', NULL, NULL),
(2, 'Aire Acondicionado', 'aire-acondicionado', 'Instalación, limpieza y mantenimiento de aire acondicionado.', NULL, 'mantenimiento-aire-acondicionado.jpg', NULL, NULL),
(3, 'Ventilación Interna', 'ventilacion', 'Instalación, mantenimiento, reparación y puesta en marcha de la ventilación que tu empresa u oficina necesita.', NULL, 'ventilacion.jpeg', NULL, NULL),
(4, 'Proyectos Eléctricos e Ingeniería Electromecánica', 'proyectos-electricos', 'Realizamos todo tipo de proyectos electricos y de ingeniería electromecánica', NULL, 'aire-acondicionado-automotriz.jpeg', NULL, NULL),
(5, 'Secadores', 'secadores', 'Instalación, mantenimiento y cambio de secadores.', NULL, 'mantenimiento-secadores.jpg', NULL, NULL),
(6, 'Reparaciones y Mantenimiento', 'reparaciones-y-mantenimiento', 'Aire acondicionado, de subestaciones eléctricas, electrobombas y todo tipo de servicio eléctrico.', NULL, 'reparacion-aire.jpeg', NULL, NULL),
(7, 'Electricidad de Baja tensión', 'electricidad-baja-tension', 'Proyectos eléctricos, climatización extracción y obras eléctricas.', NULL, 'proyecto-baja-media-tension.jpg', NULL, NULL),
(8, 'Electricidad de Media tensión', 'electricidad-media-tension', 'Reparación, mantenimiento y proyectos de subestaciones eléctricas.', NULL, 'proyecto-media-tension.jpg', NULL, NULL),
(9, 'Fabricación de tableros', 'fabricacion-de-tableros', 'Elaboración de tableros eléctricos y de transferencia', NULL, 'fabricacion-tableros.jpeg', NULL, NULL),
(10, 'Tableros eléctricos y de transferencia', 'tableros-electricos-y-de-transferencia', 'Reparación y mantenimiento de tableros eléctricos y de transferencia.', NULL, 'tablero-transferencia.jpg', NULL, NULL),
(11, 'Refrigeración', 'refrigeracion', 'Refrigeración comercial e industrial.', NULL, 'refrigeracion.jpg', NULL, NULL),
(12, 'Mantenimiento de Instalaciones Eléctricas', 'mantenimiento-instalaciones-electricas', 'Mantenimiento y reparación de instalaciones eléctricas con nuestro equipo profesional.', NULL, 'mantenimiento-tableros.jpg', NULL, NULL),
(13, 'Instalaciones de puestas a tierra', 'instalaciones-de-puestas-a-tierras', 'Instalación de puestas a tierra, mayas y parrarayos. Seguridad y confianza.', NULL, 'puesta-a-tierra.jpeg', NULL, NULL);

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
