-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 02-12-2022 a las 01:53:00
-- Versión del servidor: 10.4.11-MariaDB
-- Versión de PHP: 7.4.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `gg_wp`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detalle_materiales`
--

CREATE TABLE `detalle_materiales` (
  `id_detalle_material` int(11) NOT NULL,
  `materia_principal` varchar(100) DEFAULT NULL,
  `materia_secundario` varchar(100) DEFAULT NULL,
  `id_material` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detalle_ventas`
--

CREATE TABLE `detalle_ventas` (
  `id_detalle_venta` int(11) NOT NULL,
  `cantidad` int(20) DEFAULT NULL,
  `subtotal` float DEFAULT NULL,
  `id_venta` int(11) DEFAULT NULL,
  `id_producto` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `direcciones`
--

CREATE TABLE `direcciones` (
  `id_direccion` int(11) NOT NULL,
  `calle` varchar(100) NOT NULL,
  `numero_direccion` int(15) DEFAULT NULL,
  `localidad` varchar(50) DEFAULT NULL,
  `municipio` varchar(50) DEFAULT NULL,
  `estado` varchar(50) DEFAULT NULL,
  `id_cliente` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `materiales`
--

CREATE TABLE `materiales` (
  `id_material` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `tipo_material` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
(1, '2020_11_11_014033_create__productos_table', 1),
(2, '2020_11_11_014129_create__usuarios_table', 1),
(14, '2020_11_11_014129_create_tb_usuarios_table', 2),
(15, '2020_11_11_014140_create__ventas_table', 2),
(16, '2020_11_11_014211_create__direcciones_table', 2),
(17, '2020_11_11_014256_create__materiales_table', 2),
(21, '2020_11_26_000041_create_tb_productos_table', 3),
(22, '2020_12_07_001517_create_tb_facebook_table', 4),
(23, '2014_10_12_000000_create_users_table', 5),
(24, '2014_10_12_100000_create_password_resets_table', 5),
(25, '2019_08_19_000000_create_failed_jobs_table', 5);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `id_producto` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `img` varchar(50) DEFAULT NULL,
  `precio` float DEFAULT NULL,
  `descripcion` varchar(100) DEFAULT NULL,
  `id_material` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_detalle_material`
--

CREATE TABLE `tb_detalle_material` (
  `id_detalle_meterial` bigint(20) UNSIGNED NOT NULL,
  `material_principal` varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL,
  `material_secundario` varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL,
  `material_id` bigint(20) UNSIGNED NOT NULL,
  `producto_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_direcciones`
--

CREATE TABLE `tb_direcciones` (
  `id_direccion` bigint(20) UNSIGNED NOT NULL,
  `clientes_id` int(11) NOT NULL,
  `calle` varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL,
  `numero_direccion` int(11) NOT NULL,
  `localidad` varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL,
  `municipio` varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL,
  `estado` varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `tb_direcciones`
--

INSERT INTO `tb_direcciones` (`id_direccion`, `clientes_id`, `calle`, `numero_direccion`, `localidad`, `municipio`, `estado`, `created_at`, `updated_at`) VALUES
(1, 1, 'Independencia', 247, 'Santa maria tetitla', 'otzolotepec', 'Estado de mexico', NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_materiales`
--

CREATE TABLE `tb_materiales` (
  `id_material` bigint(20) UNSIGNED NOT NULL,
  `nombre` varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tipo_material` varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `tb_materiales`
--

INSERT INTO `tb_materiales` (`id_material`, `nombre`, `tipo_material`, `created_at`, `updated_at`) VALUES
(1, 'Oro macizo', 'Oro', '2020-12-10 09:01:00', '2020-12-10 09:01:00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_productos`
--

CREATE TABLE `tb_productos` (
  `id_producto` bigint(20) UNSIGNED NOT NULL,
  `img` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nombre_producto` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_existencias` double(10,5) NOT NULL,
  `precio` double(10,5) NOT NULL,
  `descripcion` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `medida` double(10,5) NOT NULL,
  `precio_oferta` double(10,5) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `tb_productos`
--

INSERT INTO `tb_productos` (`id_producto`, `img`, `nombre_producto`, `no_existencias`, `precio`, `descripcion`, `medida`, `precio_oferta`, `created_at`, `updated_at`) VALUES
(2, 'anillo_oro1.jpg', 'Anillo de doran', 20.00000, 4500.00000, 't', 8.00000, 4000.00000, '2020-12-07 04:28:11', '2022-02-27 00:09:49'),
(3, 'anillo_oro2.jpg', 'Espada de doran', 10.00000, 5000.00000, 'te otorga robo de vida', 15.00000, 4999.00000, '2020-12-07 04:30:28', '2021-12-11 04:45:11'),
(4, 'anillo2.jpg', 'Escudo de doran', 19.00000, 6500.00000, 'regeneración de vida', 20.00000, 6000.00000, '2020-12-07 04:32:24', '2021-12-11 04:45:22'),
(5, 'collar_corazon1.jpg', 'Collar de perlas', 2.00000, 12000.00000, 'perlas preciosas extraídas del mar', 30.00000, 11000.00000, '2020-12-07 04:34:35', '2021-12-11 04:45:31'),
(6, 'collar1.jpg', 'Orbe de vida', 25.00000, 900.00000, 'aumenta la vitalidad', 25.00000, 899.00000, '2020-12-07 04:43:09', '2021-12-11 04:45:45'),
(7, 'collar2.jpg', 'Lagrima Azul', 18.00000, 18000.00000, 'tu mana se regenera exponencial mente', 5.00000, 15000.00000, '2020-12-07 04:47:14', '2021-12-11 04:45:57'),
(8, 'collar3.jpg', 'Piedra de mana', 350.00000, 14000.00000, 'piedra preciosa traída del cielo', 20.00000, 13999.00000, '2020-12-07 04:51:25', '2021-12-11 04:46:13'),
(9, 'joyas1.jpg', 'Espátula dorada', 1.00000, 50000.00000, 'Espatula talla en oro por el artesano manatí URF', 20.00000, 49999.00000, '2020-12-07 04:57:04', '2021-12-11 04:46:23'),
(10, 'joyas2.jpg', 'collar ruby', 12.00000, 8500.00000, 'collar con una piedra hermosa', 25.00000, 8499.00000, '2020-12-07 05:54:01', '2020-12-07 05:54:01'),
(11, 'joyas3.jpg', 'anillo de diamantes', 1.00000, 25000.00000, 'anillo de oro con incrustaciones  de diamantes', 9.00000, 23000.00000, '2020-12-07 05:56:51', '2020-12-07 05:56:51'),
(12, 'joyas4.jpg', 'diamante puro', 2.00000, 50000.00000, 'piedra hermosa pureza', 20.00000, 49999.00000, '2020-12-07 06:20:45', '2020-12-07 06:20:45'),
(13, 'joyeria.jpg', 'relog con dimantes', 5.00000, 60000.00000, 'relog de oro rosado con diamantes a los lados', 20.00000, 59999.00000, '2020-12-07 06:28:38', '2020-12-07 06:28:38'),
(14, 'pendientes1.jpg', 'pulsera de oro', 15.00000, 8500.00000, 'pulsera brillante de 14k', 15.00000, 8499.00000, '2020-12-07 06:37:38', '2020-12-07 06:37:38'),
(15, 'pendientes3.jpg', 'pulsera con diamantes', 15.00000, 80000.00000, 'pulsera brillante de 14k con diamantes incrustados', 15.00000, 79999.00000, '2020-12-07 06:48:45', '2020-12-07 06:48:45'),
(16, 'pendientes4.jpg', 'esmeralda de minecraft', 5.00000, 18000.00000, 'priedra hermosa color verde', 10.00000, 17999.00000, '2020-12-07 06:51:09', '2020-12-07 06:51:09'),
(17, 'pulsera2.jpg', 'iphone de oro', 5.00000, 90000.00000, 'iphone 12 bañado en oro', 16.00000, 80000.00000, '2020-12-07 06:54:42', '2020-12-07 06:54:42'),
(18, 'reloj1.jpg', 'salero de oro puro', 1.00000, 80000.00000, 'salero de oro puro de 14k', 6.00000, 79999.00000, '2020-12-07 06:57:16', '2020-12-07 06:57:16'),
(19, 'reloj2.jpg', 'cristo de plata', 5.00000, 12000.00000, 'Cristo hecho de plata', 5.00000, 10000.00000, '2020-12-07 07:02:35', '2020-12-07 07:02:35'),
(20, 'joyas5.jpg', 'rosario de plata', 5.00000, 15000.00000, 'rosario tallado a mano hecho con plata fina', 15.00000, 10000.00000, '2020-12-07 07:05:06', '2020-12-07 07:05:06'),
(29, 'descarga (2).jfif', 'aretes', 25.00000, 140.00000, 'Pequeños color plateado', 25.00000, 90.00000, '2022-04-02 23:36:36', '2022-04-02 23:36:36');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_usuario`
--

CREATE TABLE `tb_usuario` (
  `id_usuario` bigint(20) UNSIGNED NOT NULL,
  `matricula` int(11) DEFAULT NULL,
  `nombre` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `app` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `apm` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fn` date DEFAULT NULL,
  `aviso` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tel` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pass` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `img` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `id_grupo` int(11) DEFAULT NULL,
  `id_tipo` int(11) DEFAULT NULL,
  `activo` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tipo_usuario` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `tb_usuario`
--

INSERT INTO `tb_usuario` (`id_usuario`, `matricula`, `nombre`, `app`, `apm`, `fn`, `aviso`, `tel`, `email`, `pass`, `img`, `id_grupo`, `id_tipo`, `activo`, `tipo_usuario`, `created_at`, `updated_at`) VALUES
(1, 221910938, 'Adminstrador', 'Admin1', 'Admin', '2001-05-22', '0', '7226857447', 'admin@hotmail.com', '123456789', '', 1, 1, '1', 1, NULL, NULL),
(19, 221019758, 'petronila', 'perea', 'perro', '1998-04-30', '1', '7223153628', 'petro@gmail.com', 'XF3p8va7r+gu9kHqv9mk8Q==', 'descarga.jfif', NULL, NULL, NULL, 3, '2022-04-02 10:45:55', '2022-04-02 10:45:55'),
(20, 221910459, 'alex', 'montiel', 'montiel', '2000-02-02', 'on', '7224581366', 'al221910459@gmail.com', 'xKG4Tndw0OQbeDm9IL3ztw==', '51c32aa3a4bb1ee70f2e1bfb23ef3386.png', NULL, NULL, NULL, 3, '2022-04-02 23:09:54', '2022-04-02 23:09:54'),
(22, 221314555, 'Joel', 'Herrera', 'Fernandez', '1998-09-25', 'on', '7225968179', 'usuario@gmail.com', '12345678', 'dobby.jpg', NULL, NULL, NULL, 3, '2022-04-02 23:27:42', '2022-04-02 23:27:42'),
(23, 345678890, 'Alan', 'Nava', 'Perea', '1875-12-25', 'on', '7225968136', 'alan@gmail.com', '112233', '51c32aa3a4bb1ee70f2e1bfb23ef3386.png', NULL, NULL, NULL, 3, '2022-04-02 23:34:38', '2022-04-02 23:34:38'),
(24, 221910457, 'Victor Manuel', 'Perea', 'Lòpez', '2000-04-04', 'on', '7223520398', 'prueba@gmail.com', 'VmPl0404', '51c32aa3a4bb1ee70f2e1bfb23ef3386.png', NULL, NULL, NULL, 3, '2022-04-06 23:18:14', '2022-04-06 23:18:14'),
(25, 221910466, 'esteban', 'reyes', 'mejia', '1998-04-30', 'on', '72223153628', 'este@gmail.com', '123456789', 'descarga.jfif', NULL, NULL, NULL, 3, '2022-04-09 07:59:27', '2022-04-09 07:59:27'),
(26, 221910444, 'Aurora', 'hernandez', 'gonzalez', '1998-04-30', 'on', '7225014011', 'au@gmail.com', '1234567899', 'descarga (6).jfif', NULL, NULL, NULL, 3, '2022-04-09 18:02:28', '2022-04-09 18:02:28'),
(27, 221910465, 'usu', 'perea', 'gonzalez', '2022-05-17', 'on', '7225014011', 'usu@gmail.com', 'usuario12345678', 'images.jfif', NULL, NULL, NULL, 3, '2022-05-28 00:06:22', '2022-05-28 00:06:22'),
(28, 221910465, 'lupito', 'lupito', 'lupito', NULL, '1', '7225014011', 'lupito@gmail.com', '12345678', 'lupito.jpg', NULL, NULL, NULL, NULL, NULL, NULL),
(29, 221910465, 'dominga', 'domin', 'domin', NULL, '1', '7225014011', 'domi@gmail.com', '123456789', 'dominga.jpg', NULL, NULL, NULL, NULL, NULL, NULL),
(30, 221910465, 'dominga', 'domin', 'domin', NULL, '1', '7225014011', 'domi@gmail.com', '123456789', 'dominga.jpg', NULL, NULL, NULL, NULL, NULL, NULL),
(31, 221910466, 'luppe', 'lup', 'lup', NULL, '0', '7225014012', 'lu@gmail.com', '12345678', 'lup.jpg', NULL, NULL, NULL, NULL, NULL, NULL),
(32, 221910444, 'domina', 'domi', 'domi', NULL, '1', '7225041055', 'domi@gmail.com', '123456789', 'domi.jpg', NULL, NULL, NULL, NULL, NULL, NULL),
(33, 221910465, 'Vinicio', 'Vin', 'Vin', NULL, '1', '7225014011', 'vin@gmail.com', '123456789', 'vin.jpg', NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_ventas`
--

CREATE TABLE `tb_ventas` (
  `id_venta` bigint(20) UNSIGNED NOT NULL,
  `monto_total` double(8,2) NOT NULL,
  `direcciones_id` int(11) NOT NULL,
  `clientes_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `tb_ventas`
--

INSERT INTO `tb_ventas` (`id_venta`, `monto_total`, `direcciones_id`, `clientes_id`, `created_at`, `updated_at`) VALUES
(6, 12000.00, 1, 1, '2020-12-12 06:27:46', '2020-12-12 06:27:46'),
(7, 40500.00, 1, 1, '2020-12-12 06:34:45', '2020-12-12 06:34:45');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_usuarios`
--

CREATE TABLE `tipo_usuarios` (
  `id_tipo_usuario` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id_usuario` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `app` varchar(50) NOT NULL,
  `apm` varchar(50) DEFAULT NULL,
  `fn` date DEFAULT NULL,
  `telefono` int(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `pass` varchar(50) NOT NULL,
  `id_tipo_usuario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ventas`
--

CREATE TABLE `ventas` (
  `id_venta` int(11) NOT NULL,
  `monto_total` float DEFAULT NULL,
  `fechaventa` date DEFAULT NULL,
  `id_usuario` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `detalle_materiales`
--
ALTER TABLE `detalle_materiales`
  ADD PRIMARY KEY (`id_detalle_material`),
  ADD KEY `id_material` (`id_material`);

--
-- Indices de la tabla `detalle_ventas`
--
ALTER TABLE `detalle_ventas`
  ADD PRIMARY KEY (`id_detalle_venta`),
  ADD KEY `id_producto` (`id_producto`),
  ADD KEY `id_venta` (`id_venta`);

--
-- Indices de la tabla `direcciones`
--
ALTER TABLE `direcciones`
  ADD PRIMARY KEY (`id_direccion`),
  ADD KEY `id_cliente` (`id_cliente`);

--
-- Indices de la tabla `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indices de la tabla `materiales`
--
ALTER TABLE `materiales`
  ADD PRIMARY KEY (`id_material`);

--
-- Indices de la tabla `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`id_producto`),
  ADD UNIQUE KEY `nombre` (`nombre`),
  ADD KEY `id_material` (`id_material`);

--
-- Indices de la tabla `tb_detalle_material`
--
ALTER TABLE `tb_detalle_material`
  ADD PRIMARY KEY (`id_detalle_meterial`),
  ADD KEY `tb_detalle_material_material_id_foreign` (`material_id`);

--
-- Indices de la tabla `tb_direcciones`
--
ALTER TABLE `tb_direcciones`
  ADD PRIMARY KEY (`id_direccion`);

--
-- Indices de la tabla `tb_materiales`
--
ALTER TABLE `tb_materiales`
  ADD PRIMARY KEY (`id_material`);

--
-- Indices de la tabla `tb_productos`
--
ALTER TABLE `tb_productos`
  ADD PRIMARY KEY (`id_producto`);

--
-- Indices de la tabla `tb_usuario`
--
ALTER TABLE `tb_usuario`
  ADD PRIMARY KEY (`id_usuario`);

--
-- Indices de la tabla `tb_ventas`
--
ALTER TABLE `tb_ventas`
  ADD PRIMARY KEY (`id_venta`);

--
-- Indices de la tabla `tipo_usuarios`
--
ALTER TABLE `tipo_usuarios`
  ADD PRIMARY KEY (`id_tipo_usuario`),
  ADD UNIQUE KEY `nombre` (`nombre`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id_usuario`),
  ADD KEY `id_tipo_usuario` (`id_tipo_usuario`);

--
-- Indices de la tabla `ventas`
--
ALTER TABLE `ventas`
  ADD PRIMARY KEY (`id_venta`),
  ADD KEY `id_usuario` (`id_usuario`);

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
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT de la tabla `tb_detalle_material`
--
ALTER TABLE `tb_detalle_material`
  MODIFY `id_detalle_meterial` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `tb_direcciones`
--
ALTER TABLE `tb_direcciones`
  MODIFY `id_direccion` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `tb_materiales`
--
ALTER TABLE `tb_materiales`
  MODIFY `id_material` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `tb_productos`
--
ALTER TABLE `tb_productos`
  MODIFY `id_producto` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT de la tabla `tb_usuario`
--
ALTER TABLE `tb_usuario`
  MODIFY `id_usuario` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT de la tabla `tb_ventas`
--
ALTER TABLE `tb_ventas`
  MODIFY `id_venta` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `detalle_materiales`
--
ALTER TABLE `detalle_materiales`
  ADD CONSTRAINT `detalle_materiales_ibfk_1` FOREIGN KEY (`id_material`) REFERENCES `materiales` (`id_material`);

--
-- Filtros para la tabla `detalle_ventas`
--
ALTER TABLE `detalle_ventas`
  ADD CONSTRAINT `detalle_ventas_ibfk_1` FOREIGN KEY (`id_producto`) REFERENCES `productos` (`id_producto`),
  ADD CONSTRAINT `detalle_ventas_ibfk_2` FOREIGN KEY (`id_venta`) REFERENCES `ventas` (`id_venta`);

--
-- Filtros para la tabla `direcciones`
--
ALTER TABLE `direcciones`
  ADD CONSTRAINT `direcciones_ibfk_1` FOREIGN KEY (`id_cliente`) REFERENCES `usuarios` (`id_usuario`);

--
-- Filtros para la tabla `productos`
--
ALTER TABLE `productos`
  ADD CONSTRAINT `productos_ibfk_1` FOREIGN KEY (`id_material`) REFERENCES `materiales` (`id_material`);

--
-- Filtros para la tabla `tb_detalle_material`
--
ALTER TABLE `tb_detalle_material`
  ADD CONSTRAINT `tb_detalle_material_material_id_foreign` FOREIGN KEY (`material_id`) REFERENCES `tb_materiales` (`id_material`);

--
-- Filtros para la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD CONSTRAINT `usuarios_ibfk_1` FOREIGN KEY (`id_tipo_usuario`) REFERENCES `tipo_usuarios` (`id_tipo_usuario`);

--
-- Filtros para la tabla `ventas`
--
ALTER TABLE `ventas`
  ADD CONSTRAINT `ventas_ibfk_1` FOREIGN KEY (`id_usuario`) REFERENCES `usuarios` (`id_usuario`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
