-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 13-09-2020 a las 18:42:04
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
-- Estructura de tabla para la tabla `brands`
--

CREATE TABLE `brands` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `img` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(2, '2020_09_03_125949_create_brands_table', 1),
(3, '2020_09_03_173610_create_services_table', 1),
(4, '2020_09_03_174036_create_orders_table', 1),
(5, '2020_09_03_174609_create_solicitudes_table', 1);

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
-- Estructura de tabla para la tabla `password_resets`
--
-- Error leyendo la estructura de la tabla frigo_electri.password_resets: #1146 - Tabla 'frigo_electri.password_resets' no existe
-- Error leyendo datos de la tabla frigo_electri.password_resets: #1064 - Algo está equivocado en su sintax cerca 'FROM `frigo_electri`.`password_resets`' en la linea 1

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
(1, 'Instalaciones de gases', 'instalaciones-de-gases', 'Instalación de sistemas de gases medicinales, oxigeno, vacío, oxido nitroso, aire medicinal', NULL, NULL, NULL, NULL),
(2, 'Aire acondicionado', 'aire-acondicionado', 'Aire acondicionado automotriz, industrial y residencial', NULL, NULL, NULL, NULL),
(3, 'Reparaciones y mantenimiento', 'reparaciones-y-mantenimiento', 'Reparación, mantenimiento y proyecto de subestaciones eléctricas. Reparación de máquinas de calor', NULL, NULL, NULL, NULL),
(4, 'Proyectos eléctricos', 'proyectos-electricos', 'Proyectos eléctricos, climatización extracción y obras eléctricas', NULL, NULL, NULL, NULL),
(5, 'Soldadura', 'soldadura', 'Soldadura eléctrica, autógena, tig, soldadura en aluminio', NULL, NULL, NULL, NULL),
(6, 'Electicidad', 'electricidad', 'Electricidad industrial, electricidad media y baja tensión, instalaciones eléctricas', NULL, NULL, NULL, NULL),
(7, 'Transformadores', 'transformadores', 'Instalación de trasformadores, transformix seccionadores', NULL, NULL, NULL, NULL),
(8, 'Refrigeración', 'refrigeracion', 'Refrigeración comercial e industrial', NULL, NULL, NULL, NULL),
(9, 'Tableros eléctricos y de transferencia', 'tableros-electricos-y-de-transferencia', 'Elaboración de tableros eléctricos y de transferencia', NULL, NULL, NULL, NULL),
(10, 'Rebobinados de motores', 'rebobinados-de-motores', 'Rebobinados de motores eléctricos, generadores', NULL, NULL, NULL, NULL),
(11, 'Calderos y autoclaves de vapor', 'calderos-y-autoclaves-de-valor', 'Calderos de vapor. Autoclaves de vapor. Marmitas. Tavolas caldas', NULL, NULL, NULL, NULL),
(12, 'Instalación de plantas de tratamiento de agua', 'instalacion-de-plantas-de-tratamiento-de-agua', 'Instalación de plantas de tratamiento de agua residuales, agua de mesa, ablandadores de agua', NULL, NULL, NULL, NULL),
(13, 'Venta de osmosis inversa', 'venta-de-osmosis-inversa', 'Venta de osmosis inversa. Torres de enfriamiento', NULL, NULL, NULL, NULL),
(14, 'Instalaciones de puestas a tierra', 'instalaciones-de-puestas-a-tierras', 'Instalación de puestas a tierra, mayas, parrarayos', NULL, NULL, NULL, NULL),
(15, 'Automatización de plantas', 'automatizacion-de-plantas', 'Automatización de plantas, instalación de variadores de frecuencia, PLC Y sensores', NULL, NULL, NULL, NULL),
(16, 'Venta de motores', 'venta-de-motores', 'Venta de motores eléctricos, electrobombas, rodamientos, paneles, refrigerantes', NULL, NULL, NULL, NULL),
(17, 'Conductores y Compresores', 'conductores-y-compresores', 'Aires acondicionados, extractores de aire. Conductores eléctricos, llaves térmicas, variadores de frecuencia, interruptores térmicos, contactares. Compresores', NULL, NULL, NULL, NULL);

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

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--
-- Error leyendo la estructura de la tabla frigo_electri.users: #1146 - Tabla 'frigo_electri.users' no existe
-- Error leyendo datos de la tabla frigo_electri.users: #1064 - Algo está equivocado en su sintax cerca 'FROM `frigo_electri`.`users`' en la linea 1

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `brands`
--
ALTER TABLE `brands`
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
-- AUTO_INCREMENT de la tabla `brands`
--
ALTER TABLE `brands`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

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
