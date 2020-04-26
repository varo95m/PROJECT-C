-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 26-04-2020 a las 13:36:33
-- Versión del servidor: 10.4.11-MariaDB
-- Versión de PHP: 7.4.2

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
(1, 'BRIMSTONE', 'El arsenal orbital de Brimstone garantiza que su equipo siempre tenga la ventaja. Su capacidad para brindar utilidad de forma precisa y segura lo convierte en un comandante sin rival.', '#ff7f31', 'Baliza estimulante', 'Crea un área en el suelo en la cual tanto él como sus aliados obtienen mayor cadencia de disparo.', 'Incendiario', 'Lanza una granada que libera fuego sobre el terreno y daña a los enemigos.', 'Cortina de humo', 'Utiliza el mapa para desplegar de manera remota hasta 3 pantallas de humo que impiden la visión. Se puede utilizar en cualquier lugar del mapa.', 'Golpe orbital', 'Utiliza el mapa para seleccionar un área que será bombardeada tras unos segundos. Los enemigos alcanzados por esta habilidad reciben una inmensa cantidad de daño. El bombardeo dura varios segundos.', '<span style=\"color:white;\"><span style=\"color:#ff7f31!important\">B</span>RIMSTONE</span>', '', '', '', '', ''),
(2, 'CYPHER', 'Cypher sería una red de vigilancia que controla todos los movimientos del enemigo dentro de un solo hombre. Ningún secreto está a salvo. Ninguna maniobra pasa desapercibida. Cypher siempre te está observando.', ' #514afa', 'Cable trampa', 'Despliega un cable trampa entre dos paredes. Los enemigos que lo activen serán ralentizados y revelados durante unos segundos. Si la trampa no es destruida, se activa nuevamente para aturdir al enemigo afectado. Las trampas que no sean activadas se pueden recoger y utilizar en lugares diferentes.', 'Prisión cibernética', 'Lanza una trampa de activación remota. Al activarse por el propio jugador, crea una jaula que ralentiza a los enemigos que pasen a través de ella. Puedes mirar hacia la trampa y pulsar el botón “USAR” para detonarla o mantener el botón “ACTIVAR” para detonar todas al mismo tiempo.', 'Cámara espía', 'Despliega una cámara en cualquier lugar. Al activar esta habilidad de nuevo, podrás ver en tiempo real el video que esté captando. Mientras controlas la cámara, utiliza el click izquierdo del ratón para disparar un dardo de seguimiento que revela la posición del enemigo marcado. Este dardo se recarga al ser recogido o matado.', 'Hurto neuronal', 'Extrae información del cadáver de un enemigo para revelar la posición del resto de los enemigos vivos.', '<span style=\"color:white;\"><span style=\"color:#514afa!important\">C</span>YPHER</span>', '', '', '', '', ''),
(3, 'JETT', 'El estilo de lucha ágil y evasivo de Jett le permite correr riesgos que nadie más puede. Fluye como el aire dentro de cada pelea, cortando a los enemigos antes de que sepan de su presencia.', '#68b8ff', 'Borrasca', 'Lanza una nube de niebla que impide la visión al impactar. Puedes mantener el botón de la habilidad para curvar la trayectoria al ser lanzada.', 'Vendaval', 'Tras una breve animación, se propulsa en el aire durante unos momentos.', 'Viento de cola', 'Se propulsa inmediatamente hacia la dirección en la que se esté moviendo.', 'Tormenta de cuchillas', 'Invoca 6 cuchillos arrojadizos que causan daño moderado en el cuerpo y matan de impacto a la cabeza. Cada kill conseguida con los cuchillos los recarga por completo. Con el click izquierdo lanza un solo cuchillo de forma precisa y con el click derecho lanza todos los cuchillos restantes a la vez en un pequeño área.', '<span style=\"color:white;\"><span style=\"color:#68b8ff!important\">J</span>ETT</span>', '', '', '', '', ''),
(4, 'OMEN', 'Omen caza desde las sombras. Ciega, se teletransporta a través del mapa y deja que la paranoia se apodere del lugar mientras los enemigos se apresuran a descubrir dónde podría golpear a continuación.', '#625abd', 'Aparición tenebrosa', 'Tras una animación, se desvanece y se teletransporta una corta distancia.', 'Paranoia', 'Lanza una sombra en línea recta que ciega a los enemigos alcanzados por ella.', 'Velo tenebroso', 'Lanza un orbe de que explota al final del trayecto creando una esfera de sombras que revela a los enemigos que lo toquen. Puede cargarse para ser lanzada más lejos.', 'Desde las sombras', 'Puede seleccionar cualquier lugar del mapa y teletransportarse allí. Una vez completado el teletransporte, aparece en forma de sombra y es invulnerable durante unos momentos. Si muere, regresará a su posición de origen.', '<span style=\"color:white;\"><span style=\"color:#625abd!important\">O</span>MEN</span>', '', '', '', '', ''),
(5, 'PHOENIX', 'El poder de Phoenix brilla a través de su estilo de lucha, encendiendo el campo de batalla con destellos y llamaradas. Tenga apoyo o no, se puede permitir ser agresivo gracias a sus habilidades.', '#fbe949', 'Llamarada', 'Crea un muro de fuego que bloquea la visión y daña a los enemigos que lo atraviesen. El muro puede ser curvado manteniendo el click izquierdo y girando la vista.', 'Bola curva', 'Lanza un orbe que explota en una luz brillante, cegando temporalmente a los enemigos que estén mirando en esa dirección. Con el click izquierdo puede lanzarlo de forma curvada hacia la izquierda y con el click derecho hacia la derecha.', 'Combustión', 'Lanza una bola que explota y prende fuego al terreno. Ese fuego daña a los enemigos que lo pisen y cura a Phoenix.', 'Cenizas', 'Marca tu posición actual. Si mueres durante la duración de esta habilidad o se acaba el tiempo de duración, volverás al lugar marcado previamente con vida completa.', '<span style=\"color:white;\"><span style=\"color:#fbe949!important\">P</span>HOENIX</span>', '', '', '', '', ''),
(6, 'SAGE', 'Sage aporta seguridad. Tanto para ella misma, como para su equipo, donde sea que vaya. Capaz de revivir a aliados caídos y prevenir asaltos agresivos del enemigo, proporciona la calma dentro de un infernal campo de batalla.', '#57efb6', 'Orbe barrera', 'Crea un muro sólido que puede ser destruido. También puedes elevarte con este muro. Al activar la habilidad puedes mantener el click derecho para girar el muro antes de crearlo.', 'Orbe de ralentización', 'Lanza un orbe que explota creando un área en el suelo que ralentiza a los enemigos que la pisen. Las pisadas de los enemigos dentro de ese área también serán más fáciles de escuchar.', 'Orbe de sanación', 'Puedes seleccionar un aliado para curarlo por completo o curarte a ti mismo.', 'Resurrección', 'Selecciona el cadáver de un aliado para revivirlo. Tras una breve animación, dicho aliado reaparecerá en esa misma posición con vida completa.', '<span style=\"color:white;\"><span style=\"color:#57efb6!important\">S</span>ETT</span>', '', '', '', '', ''),
(7, 'SOVA', 'Sova rastrea, encuentra y elimina enemigos con despiadada eficiencia y precisión. Su arco personalizado y sus increíbles habilidades de exploración aseguran que, incluso si corres, no puedes esconderte de él.', '#2955be', 'Dron de reconocimiento', 'Despliega un dron pilotable con cámara. Este dron puede disparar un dardo que marca al enemigo afectado y revela su posición. ', 'Flecha explosiva', 'Dispara una flecha explosiva que emite un pulso de energía que daña a los enemigos.', 'Proyectil de reconocimiento', 'Dispara una flecha que despliega un sonar. El sonar emite pulsos que revelan a los enemigos cercanos que tengan visión directa con el dispositivo. El sonar puede ser destruido antes de que emita el primer pulso.', 'Furia del cazador', 'Dispara tres lanzas de energía que atraviesan todo el mapa y causan gran daño a los enemigos que impacte y los marca.', '<span style=\"color:white;\"><span style=\"color:#2955be!important\">S</span>OVA</span>', '', '', '', '', ''),
(8, 'VIPER', 'Viper despliega una serie de dispositivos químicos venenosos para controlar el campo de batalla y paralizar la visión del enemigo. Si las toxinas no matan a su presa, sus juegos mentales seguramente lo harán.', '#49fb67', 'Veneno de serpiente', 'Dispara un proyectil que explota y crea un área de ácido en el suelo que daña a los enemigos que la pisen.', 'Nube venenosa', 'Lanza un emisor de gas que crea una nube. Puede activarse y desactivarse a costa de combustible. El emisor puede ser recogido y lanzado nuevamente tras unos segundos.', 'Pantalla tóxica', 'Despliega un largo muro de gas que puede activarse y desactivarse a costa de combustible.', 'Pozo de la víbora', 'Emite una gran nube de gas que se mantiene mientras Viper esté dentro de ella. Los enemigos que entren en esta nube serán revelados para Viper y su vida será reducida hasta 1hp.', '<span style=\"color:white;\"><span style=\"color:#49fb67!important\">V</span>IPER</span>', '', '', '', '', ''),
(9, 'BREACH', 'Breach es un personaje ofensivo con herramientas de asalto y cargas explosivas, y su papel en el juego es iniciar ataques, coger puntos y despistar a los enemigos. Estas son sus habilidades.', '#fe7f30', 'Réplica', 'Una carga de fusión que se lanza a través de las paredes y explota lentamente con buen daño.', 'Punto de ignición', 'Carga cegadora que genera una explosión rápida a través de la pared, cegando a los que están mirando', 'Línea de fractura', 'Te equipa con un explosivo sísmico: si mantienes el disparo pulsado aumenta la distancia. Causa un terremoto que desorienta a los jugadores', 'Onda Sísmica', 'Dispara para enviar un terremoto que supera obstáculos y se genera en una zona amplia', '<span style=\"color:white;\"><span style=\"color:#fe7f30!important\">B</span>REACH</span>', '', '', '', '', ''),
(10, 'RAZE', 'Raze es la más reciente incorporación al plantel de agentes de Valorant. Equipada con un lanzacohetes y armada hasta arriba de granadas, Raze es el personaje más explosivo del juego.', '', 'Bot Explosivo', 'Equipa un bot explosivo. Dispara para desplegar el bot y hacer que se desplace en línea recta por el terreno, rebotando por las paredes. El bot explosivo se fijará a los enemigos que encuentre en un cono frontal y los perseguirá. Si los alcanza, explotará e infligirá una gran cantidad de daño. ', 'Fardo Explosivo', 'Lanza instantáneamente un paquete explosivo que se adhiere a las superficies. Reutilice la habilidad para desencadenar la explosión, que duele y desplaza a todos los que quedan atrapados en el aliento', 'Balas de Pintura', 'Equípate con una munición en racimo. Dispara para lanzar una granada. Inflige daño y crea submuniciones que hieren a todos los que están al alcance.', 'Cierratelones', 'Equípate con un lanzacohetes. Dispara para lanzar un cohete que inflige daño de área pesada en el primer contacto.', '<span style=\"color:white;\"><span style=\"color:#68b8ff!important\">R</span>AZE</span>', '', '', '', '', '');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `agentes`
--
ALTER TABLE `agentes`
  ADD PRIMARY KEY (`COD_AGENTE`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
