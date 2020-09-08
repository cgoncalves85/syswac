-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 08-09-2020 a las 22:30:49
-- Versión del servidor: 10.4.11-MariaDB
-- Versión de PHP: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `prueba_wac`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categorias`
--

CREATE TABLE `categorias` (
  `id` int(11) NOT NULL,
  `categoria` varchar(255) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 ROW_FORMAT=DYNAMIC;

--
-- Volcado de datos para la tabla `categorias`
--

INSERT INTO `categorias` (`id`, `categoria`) VALUES
(1, 'Arte'),
(2, 'Cultura'),
(3, 'Estilo de Vida'),
(4, 'Deportes'),
(5, 'Música');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `formatos`
--

CREATE TABLE `formatos` (
  `id` int(11) NOT NULL,
  `formato` varchar(255) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `formatos`
--

INSERT INTO `formatos` (`id`, `formato`) VALUES
(1, 'Texto');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `idiomas`
--

CREATE TABLE `idiomas` (
  `id` int(11) NOT NULL,
  `idioma` varchar(255) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 ROW_FORMAT=DYNAMIC;

--
-- Volcado de datos para la tabla `idiomas`
--

INSERT INTO `idiomas` (`id`, `idioma`) VALUES
(1, 'Español'),
(2, 'Inglés'),
(3, 'Francés');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `paises`
--

CREATE TABLE `paises` (
  `id` int(11) NOT NULL,
  `pais` varchar(255) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 ROW_FORMAT=DYNAMIC;

--
-- Volcado de datos para la tabla `paises`
--

INSERT INTO `paises` (`id`, `pais`) VALUES
(1, 'Colombia'),
(2, 'Venezuela'),
(3, 'Chile'),
(4, 'Estados Unidos'),
(5, 'Perú'),
(6, 'Uruguay'),
(7, 'Argentina'),
(8, 'Ecuador');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pedidos`
--

CREATE TABLE `pedidos` (
  `id` int(11) NOT NULL,
  `formato` int(11) NOT NULL DEFAULT 0,
  `tipo` int(11) NOT NULL DEFAULT 0,
  `categoria` varchar(255) NOT NULL DEFAULT '',
  `modalidad` varchar(255) NOT NULL DEFAULT '',
  `nombre_proyecto` varchar(255) NOT NULL DEFAULT '',
  `proposito` varchar(255) NOT NULL DEFAULT '',
  `ext_palabras` varchar(255) NOT NULL DEFAULT '',
  `paises` text NOT NULL,
  `idioma` int(11) NOT NULL DEFAULT 0,
  `seo` varchar(2) NOT NULL DEFAULT '',
  `palabras_claves` varchar(255) NOT NULL DEFAULT '',
  `palabras_secundarias` varchar(255) NOT NULL DEFAULT '',
  `descripcion` text NOT NULL,
  `archivo_adjunto` varchar(255) DEFAULT '',
  `grabacion` varchar(255) DEFAULT '',
  `publico` text NOT NULL,
  `perspectiva` varchar(255) NOT NULL DEFAULT '',
  `opcion_perspectiva` varchar(255) DEFAULT '',
  `fecha_entrega` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `pedidos`
--

INSERT INTO `pedidos` (`id`, `formato`, `tipo`, `categoria`, `modalidad`, `nombre_proyecto`, `proposito`, `ext_palabras`, `paises`, `idioma`, `seo`, `palabras_claves`, `palabras_secundarias`, `descripcion`, `archivo_adjunto`, `grabacion`, `publico`, `perspectiva`, `opcion_perspectiva`, `fecha_entrega`) VALUES
(2, 1, 1, 'Arte|Deportes|Música', 'Concurso', 'Prueba WAC', 'Contenido de Blog', '250 a 499', 'Colombia|Venezuela|Chile', 1, 'Si', 'sdsdsd', 'sdsd', 'sdsds', '', '', 'sdsdsd', 'Primera persona del singular (yo, mí, mi)', '', '2020-09-08'),
(3, 1, 1, 'Arte|Deportes|Música', 'Concurso', 'Prueba WAC', 'Contenido de Blog', '250 a 499', 'Colombia|Venezuela|Chile', 1, 'Si', 'sdsdsd', 'sdsd', 'sdsds', '', '', 'sdsdsd', 'Primera persona del singular (yo, mí, mi)', '', '2020-09-08');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipos`
--

CREATE TABLE `tipos` (
  `id` int(11) NOT NULL,
  `descripcion` varchar(255) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 ROW_FORMAT=DYNAMIC;

--
-- Volcado de datos para la tabla `tipos`
--

INSERT INTO `tipos` (`id`, `descripcion`) VALUES
(1, 'Texto Especializado');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `categorias`
--
ALTER TABLE `categorias`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `formatos`
--
ALTER TABLE `formatos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `idiomas`
--
ALTER TABLE `idiomas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `paises`
--
ALTER TABLE `paises`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `pedidos`
--
ALTER TABLE `pedidos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `formato` (`formato`),
  ADD KEY `tipo` (`tipo`),
  ADD KEY `idioma` (`idioma`);

--
-- Indices de la tabla `tipos`
--
ALTER TABLE `tipos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `categorias`
--
ALTER TABLE `categorias`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `formatos`
--
ALTER TABLE `formatos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `idiomas`
--
ALTER TABLE `idiomas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `paises`
--
ALTER TABLE `paises`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `pedidos`
--
ALTER TABLE `pedidos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `tipos`
--
ALTER TABLE `tipos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `pedidos`
--
ALTER TABLE `pedidos`
  ADD CONSTRAINT `pedidos_ibfk_1` FOREIGN KEY (`formato`) REFERENCES `formatos` (`id`),
  ADD CONSTRAINT `pedidos_ibfk_2` FOREIGN KEY (`tipo`) REFERENCES `tipos` (`id`),
  ADD CONSTRAINT `pedidos_ibfk_5` FOREIGN KEY (`idioma`) REFERENCES `idiomas` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
