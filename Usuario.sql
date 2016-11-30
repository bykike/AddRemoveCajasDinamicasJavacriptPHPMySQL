-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:8889
-- Tiempo de generación: 25-10-2016 a las 18:32:57
-- Versión del servidor: 5.6.28
-- Versión de PHP: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Base de datos: `Usuario`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Idiomas`
--

CREATE TABLE `Idiomas` (
  `IdiomaBD` varchar(30) NOT NULL,
  `NivelHabladoBD` varchar(30) NOT NULL,
  `NivelEscritoBD` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `Idiomas`
--

INSERT INTO `Idiomas` (`IdiomaBD`, `NivelHabladoBD`, `NivelEscritoBD`) VALUES
('Ingles', 'Medio', 'Alto'),
('Frances', 'Alto', 'Medio');
