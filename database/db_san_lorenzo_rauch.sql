-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 03-05-2020 a las 04:51:07
-- Versión del servidor: 10.4.11-MariaDB
-- Versión de PHP: 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `db_san_lorenzo_rauch`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `divisiones`
--

CREATE TABLE `divisiones` (
  `id_division` int(2) NOT NULL,
  `nombre` varchar(15) NOT NULL,
  `edad_limite` int(2) NOT NULL,
  `limite_jugadores_LBF` int(2) NOT NULL,
  `excepciones` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `divisiones`
--

INSERT INTO `divisiones` (`id_division`, `nombre`, `edad_limite`, `limite_jugadores_LBF`, `excepciones`) VALUES
(1, 'PRIMERA', 99, 40, 'En primera divisi?n es libre, no hace falta excepciones.'),
(5, 'QUINTA', 20, 40, 'Se pueden incorporar 2 jugadores de 18 a?os y 2 de 19 a?os. El arquero es libre.'),
(6, 'SEXTA', 16, 40, 'Se pueden incorporar jugadores de divisiones inferiores siempre y cuando no jueguen en el mismo d?a en su divisi?n.'),
(7, 'SEPTIMA', 14, 60, 'Se pueden incorporar jugadores de divisiones inferiores siempre y cuando no jueguen en el mismo d?a en su divisi?n.'),
(8, 'OCTAVA', 12, 60, 'Se pueden incorporar jugadores de divisiones inferiores siempre y cuando no jueguen en el mismo d?a en su divisi?n.'),
(9, 'NOVENA', 11, 60, 'Se pueden incorporar jugadores de divisiones inferiores siempre y cuando no jueguen en el mismo d?a en su divisi?n.'),
(10, 'DECIMA', 10, 60, 'Se pueden incorporar jugadores de divisiones inferiores siempre y cuando no jueguen en el mismo d?a en su divisi?n.');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `jugadores`
--

CREATE TABLE `jugadores` (
  `id_jugador` int(8) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `edad` int(2) NOT NULL,
  `fecha_nac` date NOT NULL,
  `#carnet` varchar(20) NOT NULL,
  `puesto` varchar(15) NOT NULL,
  `club_origen` varchar(30) NOT NULL,
  `telefono` varchar(12) NOT NULL,
  `id_division` int(2) NOT NULL,
  `imagen` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `jugadores`
--

INSERT INTO `jugadores` (`id_jugador`, `nombre`, `edad`, `fecha_nac`, `#carnet`, `puesto`, `club_origen`, `telefono`, `id_division`, `imagen`) VALUES
(41969659, 'Juan Manuel Islas', 20, '0000-00-00', 'SL-006', 'DEFENSOR', 'SAN LORENZO', '2494218547', 5, 'images/jugadores/quico1.jpg'),
(44649537, 'Pablo Gaspar Carluccio', 17, '0000-00-00', 'SL-004', 'VOLANTE', 'SAN LORENZO', '2494019819', 5, 'images/jugadores/jirafales3.jpg'),
(44649542, 'Mateo Faccio ', 17, '0000-00-00', 'SL-001', 'VOLANTE', 'SAN LORENZO', '2494213122', 5, 'images/jugadores/chavo1.jpg'),
(45460169, 'Rocco tisera', 17, '0000-00-00', 'SL-002', 'DEFENSOR', 'SAN LORENZO', '2494312641', 5, 'images/jugadores/chilindrina3.jpg'),
(45460170, 'Fausto Alcetegaray', 16, '0000-00-00', 'SL-005', 'DELANTERO', 'SAN LORENZO', '2494013098', 6, 'images/jugadores/nono1.jpg'),
(48674626, 'Franco Vasconsello Dubland', 11, '0000-00-00', 'SL-003', 'ARQUERO', 'BOTAFOGO', '2494034913', 9, 'images/jugadores/donramon3.jpg');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `divisiones`
--
ALTER TABLE `divisiones`
  ADD PRIMARY KEY (`id_division`);

--
-- Indices de la tabla `jugadores`
--
ALTER TABLE `jugadores`
  ADD PRIMARY KEY (`id_jugador`),
  ADD KEY `id_division` (`id_division`);

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `jugadores`
--
ALTER TABLE `jugadores`
  ADD CONSTRAINT `jugadores_ibfk_1` FOREIGN KEY (`id_division`) REFERENCES `divisiones` (`id_division`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
