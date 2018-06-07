-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3306
-- Tiempo de generación: 07-06-2018 a las 05:05:21
-- Versión del servidor: 5.7.19
-- Versión de PHP: 7.2.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `codegea`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ec_users`
--

CREATE TABLE `ec_users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `username` varchar(40) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(128) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `ec_users`
--

INSERT INTO `ec_users` (`id`, `name`, `username`, `email`) VALUES
(1, 'Clare Luettgen', 'jessy47', 'becker.deborah@example.org'),
(2, 'Arden Feest', 'melissa97', 'molly63@example.net'),
(3, 'Justyn Malone', 'kevin.ilene', 'safsafsafsafsa@example.net'),
(4, 'Kevin Dolphin', 'carl9345', 'fsafsaf@example.net'),
(5, 'Carl Wolf', 'oconnell.carl', 'gdsgdsgds@example.net'),
(6, 'Bryan Mendoza', 'fetlas.ilene', 'dgdsgdsgds@example.net'),
(7, 'Keshaun Braun V', 'conn.ike', 'gdsgdsgdsgds@example.net');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `ec_users`
--
ALTER TABLE `ec_users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `ec_users`
--
ALTER TABLE `ec_users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
