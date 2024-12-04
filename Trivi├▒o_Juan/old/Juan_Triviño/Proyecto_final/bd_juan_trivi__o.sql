-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 07-11-2024 a las 22:36:22
-- Versión del servidor: 8.0.17
-- Versión de PHP: 7.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `bd_juan_triviño`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `id` int(6) UNSIGNED NOT NULL,
  `nombre` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id`, `nombre`, `email`) VALUES
(11, '\r\n     Juan Perez ', 'juan@example .com '),
(12, '\r\n     Maria Lopez ', 'maria@example .com '),
(13, '\r\n     Carlos Gomez ', 'carlos@example .com '),
(14, '\r\n     Ana Martinez ', 'ana@example .com '),
(15, '\r\n     Pedro Sanchez ', 'pedro@example .com '),
(16, '\r\n     Juan Perez', 'juan@example .com'),
(17, '\r\n     Maria Lopez', 'maria@example .com'),
(18, '\r\n     Carlos Gomez', 'carlos@example .com'),
(19, '\r\n     Ana Martinez', 'ana@example .com'),
(20, '\r\n     Pedro Sanchez', 'pedro@example .com'),
(21, '\r\n     Juan Perez', 'juan@example .com'),
(22, '\r\n     Maria Lopez', 'maria@example .com'),
(23, '\r\n     Carlos Gomez', 'carlos@example .com'),
(24, '\r\n     Ana Martinez', 'ana@example .com'),
(25, '\r\n     Pedro Sanchez', 'pedro@example .com'),
(26, '\r\n     Juan Perez', 'juan@example .com'),
(27, '\r\n     Maria Lopez', 'maria@example .com'),
(28, '\r\n     Carlos Gomez', 'carlos@example .com'),
(29, '\r\n     Ana Martinez', 'ana@example .com'),
(30, '\r\n     Pedro Sanchez', 'pedro@example .com'),
(31, '\r\n     Juan Perez', 'juan@example .com'),
(32, '\r\n     Maria Lopez', 'maria@example .com'),
(33, '\r\n     Carlos Gomez', 'carlos@example .com'),
(34, '\r\n     Ana Martinez', 'ana@example .com'),
(35, '\r\n     Pedro Sanchez', 'pedro@example .com'),
(36, '\r\n     ', 'juan@example .com'),
(37, '\r\n     ', 'maria@example .com'),
(38, '\r\n     ', 'carlos@example .com'),
(39, '\r\n     ', 'ana@example .com'),
(40, '\r\n     ', 'pedro@example .com'),
(41, '\r\n     ', 'juan@example .com'),
(42, '\r\n     ', 'maria@example .com'),
(43, '\r\n     ', 'carlos@example .com'),
(44, '\r\n     ', 'ana@example .com'),
(45, '\r\n     ', 'pedro@example .com'),
(46, '\r\n     ', 'juan@example .com'),
(47, '\r\n     ', 'maria@example .com'),
(48, '\r\n     ', 'carlos@example .com'),
(49, '\r\n     ', 'ana@example .com'),
(50, '\r\n     ', 'pedro@example .com'),
(51, '\r\n     ', 'juan@example .com'),
(52, '\r\n     ', 'maria@example .com'),
(53, '\r\n     ', 'carlos@example .com'),
(54, '\r\n     ', 'ana@example .com'),
(55, '\r\n     ', 'pedro@example .com'),
(56, '\r\n     ', 'juan@example .com'),
(57, '\r\n     ', 'maria@example .com'),
(58, '\r\n     ', 'carlos@example .com'),
(59, '\r\n     ', 'ana@example .com'),
(60, '\r\n     ', 'pedro@example .com'),
(61, '\r\n     ', 'juan@example .com'),
(62, '\r\n     ', 'maria@example .com'),
(63, '\r\n     ', 'carlos@example .com'),
(64, '\r\n     ', 'ana@example .com'),
(65, '\r\n     ', 'pedro@example .com'),
(66, '\r\n     ', 'juan@example .com'),
(67, '\r\n     ', 'maria@example .com'),
(68, '\r\n     ', 'carlos@example .com'),
(69, '\r\n     ', 'ana@example .com'),
(70, '\r\n     ', 'pedro@example .com'),
(71, '\r\n     ', 'juan@example .com'),
(72, '\r\n     ', 'maria@example .com'),
(73, '\r\n     ', 'carlos@example .com'),
(74, '\r\n     ', 'ana@example .com'),
(75, '\r\n     ', 'pedro@example .com'),
(76, '\r\n     ', 'juan@example .com'),
(77, '\r\n     ', 'maria@example .com'),
(78, '\r\n     ', 'carlos@example .com'),
(79, '\r\n     ', 'ana@example .com'),
(80, '\r\n     ', 'pedro@example .com'),
(81, '\r\n     ', 'juan@example .com'),
(82, '\r\n     ', 'maria@example .com'),
(83, '\r\n     ', 'carlos@example .com'),
(84, '\r\n     ', 'ana@example .com'),
(85, '\r\n     ', 'pedro@example .com'),
(86, '\r\n     ', 'juan@example .com'),
(87, '\r\n     ', 'maria@example .com'),
(88, '\r\n     ', 'carlos@example .com'),
(89, '\r\n     ', 'ana@example .com'),
(90, '\r\n     ', 'pedro@example .com'),
(91, '\r\n     ', 'juan@example .com'),
(92, '\r\n     ', 'maria@example .com'),
(93, '\r\n     ', 'carlos@example .com'),
(94, '\r\n     ', 'ana@example .com'),
(95, '\r\n     ', 'pedro@example .com'),
(96, '\r\n     ', 'juan@example .com'),
(97, '\r\n     ', 'maria@example .com'),
(98, '\r\n     ', 'carlos@example .com'),
(99, '\r\n     ', 'ana@example .com'),
(100, '\r\n     ', 'pedro@example .com'),
(101, '\r\n     ', 'juan@example .com'),
(102, '\r\n     ', 'maria@example .com'),
(103, '\r\n     ', 'carlos@example .com'),
(104, '\r\n     ', 'ana@example .com'),
(105, '\r\n     ', 'pedro@example .com'),
(106, '\r\n     ', 'juan@example .com'),
(107, '\r\n     ', 'maria@example .com'),
(108, '\r\n     ', 'carlos@example .com'),
(109, '\r\n     ', 'ana@example .com'),
(110, '\r\n     ', 'pedro@example .com'),
(111, '\r\n     ', 'juan@example .com'),
(112, '\r\n     ', 'maria@example .com'),
(113, '\r\n     ', 'carlos@example .com'),
(114, '\r\n     ', 'ana@example .com'),
(115, '\r\n     ', 'pedro@example .com'),
(116, '\r\n     ', 'juan@example .com'),
(117, '\r\n     ', 'maria@example .com'),
(118, '\r\n     ', 'carlos@example .com'),
(119, '\r\n     ', 'ana@example .com'),
(120, '\r\n     ', 'pedro@example .com'),
(121, '\r\n     ', 'juan@example .com'),
(122, '\r\n     ', 'maria@example .com'),
(123, '\r\n     ', 'carlos@example .com'),
(124, '\r\n     ', 'ana@example .com'),
(125, '\r\n     ', 'pedro@example .com'),
(126, '\r\n     ', 'juan@example .com'),
(127, '\r\n     ', 'maria@example .com'),
(128, '\r\n     ', 'carlos@example .com'),
(129, '\r\n     ', 'ana@example .com'),
(130, '\r\n     ', 'pedro@example .com'),
(131, '\r\n     ', 'juan@example .com'),
(132, '\r\n     ', 'maria@example .com'),
(133, '\r\n     ', 'carlos@example .com'),
(134, '\r\n     ', 'ana@example .com'),
(135, '\r\n     ', 'pedro@example .com'),
(136, '\r\n     ', 'juan@example .com'),
(137, '\r\n     ', 'maria@example .com'),
(138, '\r\n     ', 'carlos@example .com'),
(139, '\r\n     ', 'ana@example .com'),
(140, '\r\n     ', 'pedro@example .com'),
(141, '\r\n     ', 'juan@example .com'),
(142, '\r\n     ', 'maria@example .com'),
(143, '\r\n     ', 'carlos@example .com'),
(144, '\r\n     ', 'ana@example .com'),
(145, '\r\n     ', 'pedro@example .com'),
(146, '\r\n     ', 'juan@example .com'),
(147, '\r\n     ', 'maria@example .com'),
(148, '\r\n     ', 'carlos@example .com'),
(149, '\r\n     ', 'ana@example .com'),
(150, '\r\n     ', 'pedro@example .com');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=151;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
