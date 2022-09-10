-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 10-09-2022 a las 05:45:49
-- Versión del servidor: 10.4.24-MariaDB
-- Versión de PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `iac`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `t_alumnos_del_curso`
--

CREATE TABLE `t_alumnos_del_curso` (
  `ID` int(11) NOT NULL,
  `NombreDelUsuario` varchar(30) NOT NULL,
  `Mail` varchar(30) NOT NULL,
  `Codigo_Curso` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `t_alumnos_del_curso`
--

INSERT INTO `t_alumnos_del_curso` (`ID`, `NombreDelUsuario`, `Mail`, `Codigo_Curso`) VALUES
(61, 'gaby', 'gaby@gmail.com', 1),
(65, 'jesus', 'jesus@gmail.com', 1),
(67, 'pincky', 'pincky@gmail.com', 2);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `t_alumnos_del_curso`
--
ALTER TABLE `t_alumnos_del_curso`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `t_alumnos_del_curso`
--
ALTER TABLE `t_alumnos_del_curso`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=68;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
