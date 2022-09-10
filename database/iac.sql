-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 09-09-2022 a las 13:02:50
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
) ENGINE=InnoDB;

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
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;