-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 14-05-2019 a las 13:49:41
-- Versión del servidor: 5.7.26-0ubuntu0.18.10.1
-- Versión de PHP: 7.2.17-0ubuntu0.18.10.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `nisa_db`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Usuario`
--

CREATE TABLE `Usuario` (
  `id` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `apellido` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `contrasena` char(60) NOT NULL,
  `pregunta_seg` varchar(100) NOT NULL,
  `respuesta_seg` varchar(100) NOT NULL,
  `esAdmin` tinyint(1) NOT NULL DEFAULT '0',
  `avatar` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `Usuario`
--

INSERT INTO `Usuario` (`id`, `nombre`, `apellido`, `email`, `contrasena`, `pregunta_seg`, `respuesta_seg`, `esAdmin`, `avatar`) VALUES
(1, 'Mariano', 'Chilano', 'mchilano86@gmail.com', '$2y$10$CYpp6XGnXcAn612jvXWsCu6qYVJWTuXJyDWfO23kAPQdiGE6Atdoi', '1', 'Emaus', 1, ''),
(2, 'Kevin', 'Waker', 'waker.kevin@gmail.com', '$2y$10$7siSiNk5phNS7E2DQ25Nh.HRI1xZTj95NyZbaQvwrbsxQsf87oKNW', '3', 'japon', 1, ''),
(4, 'pepe', 'pepito', '123@123.com', '$2y$10$Yf/5BSso6RneYztUNF5OXusjgCOaUJhNaN/6fh5CyZ8YRZ97D0PMG', '1', 'Emaus', 0, 'avatars/123@123.com.png');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `Usuario`
--
ALTER TABLE `Usuario`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `Usuario`
--
ALTER TABLE `Usuario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
