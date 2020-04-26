-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 25-04-2020 a las 23:14:07
-- Versión del servidor: 10.1.36-MariaDB
-- Versión de PHP: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `valorantesp`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `agentes`
--

CREATE TABLE `agentes` (
  `COD_AGENTE` int(11) NOT NULL,
  `NOM_AGENTE` varchar(100) NOT NULL,
  `DES_AGENTE` text NOT NULL,
  `HIST_AGENTE` text NOT NULL,
  `NOM_HABILIDAD1` varchar(50) NOT NULL,
  `DES_HABILIDAD1` text NOT NULL,
  `NOM_HABILIDAD2` varchar(50) NOT NULL,
  `DES_HABILIDAD2` text NOT NULL,
  `NOM_HABILIDAD3` varchar(50) NOT NULL,
  `DES_HABILIDAD3` text NOT NULL,
  `NOM_HABILIDAD4` varchar(50) NOT NULL,
  `DES_HABILIDAD4` text NOT NULL,
  `IMG_AGENTE` varchar(200) NOT NULL,
  `IMG_OVERLAY_AGENTE` varchar(200) NOT NULL,
  `IMG_HABILIDAD1` varchar(200) NOT NULL,
  `IMG_HABILIDAD2` varchar(200) NOT NULL,
  `IMG_HABILIDAD3` varchar(200) NOT NULL,
  `IMG_HABILIDAD4` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `agentes`
--

INSERT INTO `agentes` (`COD_AGENTE`, `NOM_AGENTE`, `DES_AGENTE`, `HIST_AGENTE`, `NOM_HABILIDAD1`, `DES_HABILIDAD1`, `NOM_HABILIDAD2`, `DES_HABILIDAD2`, `NOM_HABILIDAD3`, `DES_HABILIDAD3`, `NOM_HABILIDAD4`, `DES_HABILIDAD4`, `IMG_AGENTE`, `IMG_OVERLAY_AGENTE`, `IMG_HABILIDAD1`, `IMG_HABILIDAD2`, `IMG_HABILIDAD3`, `IMG_HABILIDAD4`) VALUES
(1, 'BRIMSTONE', 'El arsenal orbital de Brimstone garantiza que su equipo siempre tenga la ventaja. Su capacidad para brindar utilidad de forma precisa y segura lo convierte en un comandante sin rival.', '', 'Baliza estimulante', 'Crea un área en el suelo en la cual tanto él como sus aliados obtienen mayor cadencia de disparo.', 'Incendiario', 'Lanza una granada que libera fuego sobre el terreno y daña a los enemigos.', 'Cortina de humo', 'Utiliza el mapa para desplegar de manera remota hasta 3 pantallas de humo que impiden la visión. Se puede utilizar en cualquier lugar del mapa.', 'Golpe orbital', 'Utiliza el mapa para seleccionar un área que será bombardeada tras unos segundos. Los enemigos alcanzados por esta habilidad reciben una inmensa cantidad de daño. El bombardeo dura varios segundos.', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `noticias`
--

CREATE TABLE `noticias` (
  `ID` int(11) NOT NULL,
  `TIPO` int(11) NOT NULL,
  `TITULAR` text COLLATE latin1_spanish_ci NOT NULL,
  `FOTO` text COLLATE latin1_spanish_ci NOT NULL,
  `ESCRITOR` varchar(50) COLLATE latin1_spanish_ci DEFAULT NULL,
  `FECHA` date DEFAULT NULL,
  `NOTICIA` varchar(20000) COLLATE latin1_spanish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

--
-- Volcado de datos para la tabla `noticias`
--

INSERT INTO `noticias` (`ID`, `TIPO`, `TITULAR`, `FOTO`, `ESCRITOR`, `FECHA`, `NOTICIA`) VALUES
(1, 0, 'NOTICIA', '12.jpg', 'Alvaro Montero Carmena', '0000-00-00', '<p>CUERPO NOTICIA</p>');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `redactores`
--

CREATE TABLE `redactores` (
  `ID` int(11) NOT NULL,
  `NOMBRE` varchar(30) COLLATE latin1_spanish_ci NOT NULL,
  `APELLIDO_UNO` varchar(50) COLLATE latin1_spanish_ci DEFAULT NULL,
  `APELLIDO_DOS` varchar(50) COLLATE latin1_spanish_ci DEFAULT NULL,
  `FOTO` varchar(10000) COLLATE latin1_spanish_ci NOT NULL,
  `user` varchar(20) COLLATE latin1_spanish_ci DEFAULT NULL,
  `password` varchar(20) COLLATE latin1_spanish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

--
-- Volcado de datos para la tabla `redactores`
--

INSERT INTO `redactores` (`ID`, `NOMBRE`, `APELLIDO_UNO`, `APELLIDO_DOS`, `FOTO`, `user`, `password`) VALUES
(1, 'Alvaro', 'Montero', 'Carmena', '', 'koke', '123');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `agentes`
--
ALTER TABLE `agentes`
  ADD PRIMARY KEY (`COD_AGENTE`);

--
-- Indices de la tabla `noticias`
--
ALTER TABLE `noticias`
  ADD PRIMARY KEY (`ID`);

--
-- Indices de la tabla `redactores`
--
ALTER TABLE `redactores`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `noticias`
--
ALTER TABLE `noticias`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `redactores`
--
ALTER TABLE `redactores`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
