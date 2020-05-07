-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 07-05-2020 a las 21:16:18
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
-- Estructura de tabla para la tabla `equipos`
--

CREATE TABLE `equipos` (
  `ID` int(11) NOT NULL,
  `NOMBRE` varchar(30) COLLATE latin1_spanish_ci NOT NULL,
  `FECHA` date NOT NULL,
  `VICTORIAS` int(11) NOT NULL,
  `DERROTAS` int(11) NOT NULL,
  `PUNTOS` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

--
-- Volcado de datos para la tabla `equipos`
--

INSERT INTO `equipos` (`ID`, `NOMBRE`, `FECHA`, `VICTORIAS`, `DERROTAS`, `PUNTOS`) VALUES
(1, 'Destrello Gaming', '0000-00-00', 120, 12, 1500),
(2, 'Sk Gaming', '0000-00-00', 100, 1, 2300);

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
(1, 0, 'NOTICIA', '12.jpg', 'Alvaro Montero Carmena', '0000-00-00', 'Puede que la tarea que me he impuesto de escribir una historia completa del pueblo romano desde el comienzo mismo de su existencia me recompense por el trabajo invertido en ella, no lo sé con certeza, ni creo que pueda aventurarlo. Porque veo que esta es una práctica común y antiguamente establecida, cada nuevo escritor está siempre persuadido de que ni lograrán mayor certidumbre en las materias de su narración, ni superarán la rudeza de la antigüedad en la excelencia de su estilo. Aunque esto sea así, seguirá siendo una gran satisfacción para mí haber tenido mi parte también en investigar, hasta el máximo de mis capacidades, los anales de la nación más importante del mundo, con un interés más profundo; y si en tal conjunto de escritores mi propia reputación resulta ocultada, me consuelo con la fama y la grandeza de aquellos que eclipsen mi fama. El asunto, además, es uno que exige un inmenso trabajo. Se remonta a más de 700 años atrás y, después de un comienzo modesto y humilde, ha crecido a tal magnitud que empieza a ser abrumador por su grandeza. No me cabe duda, tampoco, que para la mayoría de mis lectores los primeros tiempos y los inmediatamente siguientes, tienen poco atractivo; Se apresurarán a estos tiempos modernos en los que el poderío de una nación principal es desgastado por el deterioro interno. Yo, en cambio, buscaré una mayor recompensa a mis trabajos en poder cerrar los ojos ante los males de que nuestra generación ha sido testigo durante tantos años; tanto tiempo, al menos, como estoy dedicando todo mi pensamiento a reproducir los claros registros, libre de toda la ansiedad que pueden perturbar el historiador de su época, aunque no le puedan deformar la verdad.\r\n\r\nLa tradición de lo que ocurrió antes de la fundación de la ciudad o mientras se estaba construyendo, están más próximas a adornar las creaciones del poeta que las actas...');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `partido_uno`
--

CREATE TABLE `partido_uno` (
  `ID` int(11) NOT NULL,
  `EQUIPO_UNO_ID` int(11) NOT NULL,
  `EQUIPO_DOS_ID` int(11) NOT NULL,
  `RESULTADO_EQUIPO_UNO` int(11) NOT NULL,
  `RESULTADO_EQUIPO_DOS` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

--
-- Volcado de datos para la tabla `partido_uno`
--

INSERT INTO `partido_uno` (`ID`, `EQUIPO_UNO_ID`, `EQUIPO_DOS_ID`, `RESULTADO_EQUIPO_UNO`, `RESULTADO_EQUIPO_DOS`) VALUES
(1, 1, 2, 5, 1);

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

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tournaments`
--

CREATE TABLE `tournaments` (
  `ID` int(11) NOT NULL,
  `NAME` varchar(30) COLLATE latin1_spanish_ci NOT NULL,
  `DAY` varchar(5) COLLATE latin1_spanish_ci NOT NULL,
  `HOUR` varchar(5) COLLATE latin1_spanish_ci NOT NULL,
  `MINUTES` varchar(5) COLLATE latin1_spanish_ci NOT NULL,
  `TEAMS` int(11) NOT NULL,
  `TOTAL_TEAMS` int(11) NOT NULL,
  `PRIZE` int(11) NOT NULL,
  `month` varchar(10) COLLATE latin1_spanish_ci DEFAULT NULL,
  `YEAR` varchar(5) COLLATE latin1_spanish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

--
-- Volcado de datos para la tabla `tournaments`
--

INSERT INTO `tournaments` (`ID`, `NAME`, `DAY`, `HOUR`, `MINUTES`, `TEAMS`, `TOTAL_TEAMS`, `PRIZE`, `month`, `YEAR`) VALUES
(1, 'Valorank Cup 1', '02', '19', '13', 2, 16, 0, '05', '2020'),
(2, 'Valorank Cup 2', '03', '19', '50', 3, 32, 0, '05', '2020');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `ID` int(11) NOT NULL,
  `USERNAME` varchar(30) COLLATE latin1_spanish_ci NOT NULL,
  `PASSWORD` varchar(30) COLLATE latin1_spanish_ci NOT NULL,
  `TEAM` varchar(30) COLLATE latin1_spanish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`ID`, `USERNAME`, `PASSWORD`, `TEAM`) VALUES
(1, 'koke', '123', '1');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `agentes`
--
ALTER TABLE `agentes`
  ADD PRIMARY KEY (`COD_AGENTE`);

--
-- Indices de la tabla `equipos`
--
ALTER TABLE `equipos`
  ADD PRIMARY KEY (`ID`);

--
-- Indices de la tabla `noticias`
--
ALTER TABLE `noticias`
  ADD PRIMARY KEY (`ID`);

--
-- Indices de la tabla `partido_uno`
--
ALTER TABLE `partido_uno`
  ADD PRIMARY KEY (`ID`);

--
-- Indices de la tabla `redactores`
--
ALTER TABLE `redactores`
  ADD PRIMARY KEY (`ID`);

--
-- Indices de la tabla `tournaments`
--
ALTER TABLE `tournaments`
  ADD PRIMARY KEY (`ID`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `equipos`
--
ALTER TABLE `equipos`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `noticias`
--
ALTER TABLE `noticias`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `partido_uno`
--
ALTER TABLE `partido_uno`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `redactores`
--
ALTER TABLE `redactores`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `tournaments`
--
ALTER TABLE `tournaments`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
