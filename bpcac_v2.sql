-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 11-04-2023 a las 04:35:13
-- Versión del servidor: 10.4.25-MariaDB
-- Versión de PHP: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `bpcac_v2`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `asunto_event`
--

CREATE TABLE `asunto_event` (
  `id_a` int(11) NOT NULL,
  `asunto` varchar(255) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `asunto_event`
--

INSERT INTO `asunto_event` (`id_a`, `asunto`) VALUES
(1, 'DÃ­a del libro');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `auditorias`
--

CREATE TABLE `auditorias` (
  `id_aud` int(11) NOT NULL,
  `ent_aud` varchar(255) NOT NULL,
  `acc_aud` varchar(255) NOT NULL,
  `usr_aud` int(11) NOT NULL,
  `fec_aud` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `auditorias`
--

INSERT INTO `auditorias` (`id_aud`, `ent_aud`, `acc_aud`, `usr_aud`, `fec_aud`) VALUES
(6, 'Solicitante', 'Creacion de nuevo solicitante', 10, '2023-03-23 00:00:00'),
(7, 'Solicitante', 'Actualizacion de datos del solicitantes solicitante 8120392', 10, '2023-03-23 00:00:00'),
(8, 'Solicitante', 'Actualizacion de datos de contacto del solicitante abreucrafael@gmail.com', 10, '2023-03-23 00:00:00'),
(9, 'Solicitante', 'Actualizacion de datos de ocupacion del solicitante', 10, '2023-03-23 00:00:00'),
(10, 'Libros', 'Creacion de nuevo libro', 10, '2023-03-23 00:00:00'),
(11, 'Libros', 'Actualizado de libro A105', 10, '2023-03-23 00:00:00'),
(12, 'Libros', 'El inventario del libro A105 ha sido actualizada', 10, '2023-03-23 00:00:00'),
(13, 'Prestamo Circulante', 'Creacion de nuevo prestamo', 10, '2023-03-23 00:00:00'),
(14, 'Prestamo Circulante', 'Estatus de prestamo 18 actualizado', 10, '2023-03-23 00:00:00'),
(15, 'Prestamo Circulante', 'El prestamo 18ha sido devuelto', 10, '2023-03-23 00:00:00'),
(16, 'Eventos', 'Creacion de nuevo Evento 5', 10, '2023-03-23 00:00:00'),
(17, 'Eventos', 'Evento Actualizado5', 10, '2023-03-23 00:00:00'),
(18, 'Prestamo Circulante', 'Creacion de nuevo prestamo 19', 10, '2023-03-24 00:00:00'),
(19, 'Prestamo Circulante', 'Creacion de nuevo prestamo 20', 10, '2023-03-24 00:00:00'),
(20, 'Prestamo Circulante', 'Creacion de nuevo prestamo 21', 10, '2023-03-24 00:00:00'),
(21, 'Prestamo Circulante', 'Creacion de nuevo prestamo 22', 10, '2023-03-24 00:00:00'),
(22, 'Eventos', 'Creacion de nuevo Evento 6', 10, '2023-03-24 00:00:00'),
(23, 'Eventos', 'Creacion de nuevo Evento 7', 10, '2023-03-24 00:00:00'),
(24, 'Prestamo Circulante', 'Creacion de nuevo prestamo 23', 10, '2023-03-24 00:00:00'),
(25, 'Prestamo Circulante', 'El prestamo 19 ha sido devuelto', 10, '2023-03-24 00:00:00'),
(26, 'Eventos', 'Evento Actualizado 4', 10, '2023-03-24 00:00:00'),
(27, 'Eventos', 'Evento Actualizado 2', 10, '2023-03-29 00:00:00'),
(28, 'Eventos', 'Evento Actualizado 1', 10, '2023-04-04 00:00:00'),
(29, 'Eventos', 'Evento Actualizado 1', 10, '2023-04-04 00:00:00'),
(30, 'Eventos', 'Evento Actualizado 5', 10, '2023-04-06 00:00:00'),
(31, 'Eventos', 'Evento Actualizado 3', 10, '2023-04-07 00:00:00'),
(32, 'Eventos', 'Evento Actualizado 3', 10, '2023-04-07 00:00:00'),
(33, 'Eventos', 'Evento Actualizado 3', 10, '2023-04-07 00:00:00'),
(34, 'Eventos', 'Evento Actualizado 3', 10, '2023-04-07 00:00:00'),
(35, 'Eventos', 'Evento Actualizado 3', 10, '2023-04-07 00:00:00'),
(36, 'Eventos', 'Evento Actualizado 3', 10, '2023-04-08 00:00:00'),
(37, 'Eventos', 'Evento Actualizado 3', 10, '2023-04-08 00:00:00'),
(38, 'Eventos', 'Evento Actualizado 1', 10, '2023-04-08 00:00:00'),
(39, 'Eventos', 'Evento Actualizado 1', 10, '2023-04-08 00:00:00'),
(40, 'Eventos', 'Evento Actualizado 3', 10, '2023-04-08 00:00:00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `blog`
--

CREATE TABLE `blog` (
  `id_blog` int(11) NOT NULL,
  `title_blog` varchar(255) NOT NULL,
  `author_blog` varchar(255) NOT NULL,
  `content_blog` text NOT NULL,
  `date_blog` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categoria`
--

CREATE TABLE `categoria` (
  `id_c` int(11) NOT NULL COMMENT 'Número identificador de la categoría',
  `nombre_c` varchar(255) COLLATE utf8_unicode_ci NOT NULL COMMENT 'Nombre de la categoría',
  `piso` int(11) NOT NULL COMMENT 'Piso donde se ubica la categoría'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `categoria`
--

INSERT INTO `categoria` (`id_c`, `nombre_c`, `piso`) VALUES
(24, 'Obras generales', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `ubication` int(11) NOT NULL DEFAULT 0,
  `enabled` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `categories`
--

INSERT INTO `categories` (`id`, `name`, `ubication`, `enabled`) VALUES
(1, 'Obras generales', 2, 1),
(2, 'Ciencias Naturales', 1, 1),
(3, 'Religion', 1, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `events`
--

CREATE TABLE `events` (
  `id_event` int(11) NOT NULL,
  `title_event` varchar(255) NOT NULL,
  `info_event` text NOT NULL,
  `organizer_event` varchar(255) NOT NULL,
  `date_realized_event` date NOT NULL,
  `time` time NOT NULL,
  `date_created_event` datetime DEFAULT NULL,
  `place_event` varchar(255) NOT NULL,
  `type_event` varchar(255) NOT NULL,
  `participants_event` int(11) DEFAULT NULL,
  `state_event` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `events`
--

INSERT INTO `events` (`id_event`, `title_event`, `info_event`, `organizer_event`, `date_realized_event`, `time`, `date_created_event`, `place_event`, `type_event`, `participants_event`, `state_event`) VALUES
(1, 'Los chamorrucoss', 'El encuentro de los grandes chamorrucos en el botadero de san vicente xds', '1', '2023-03-21', '07:00:00', '2023-04-08 00:00:00', 'El vertederos', 'Limitado', 12, '1'),
(2, 'Los vatos', 'pa los convives', '1', '2023-03-26', '06:00:00', '2023-03-29 00:00:00', 'La romana', 'Limitado', 8, '1'),
(3, 'Los panas', 'carlos to', '1', '2023-03-24', '06:00:00', '2023-04-08 00:00:00', 'la 28', 'Limitado', 10, '1'),
(4, 'Inauguración', 'Inauguración de la segunda exposición', '1', '2023-04-07', '10:00:00', '2023-03-24 00:00:00', 'Biblioteca', 'Limitado', 20, '1'),
(5, 'Pa la fiesta', 'Pa la fiesta siva', '1', '2023-03-30', '06:00:00', '2023-04-06 00:00:00', 'El vertedero', 'Limitado', 14, '1'),
(6, 'Prueba 1', 'Inauguración de la segunda exposición', '1', '2023-04-30', '06:00:00', '2023-03-24 00:00:00', 'El vertedero', 'Limitado', 12, '2'),
(7, 'Prueba 2', 'carlos to', '1', '2023-04-07', '06:00:00', '2023-03-24 00:00:00', 'El vertedero', 'Limitado', 12, '2');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `event_participant`
--

CREATE TABLE `event_participant` (
  `ID` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_event` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `event_participant`
--

INSERT INTO `event_participant` (`ID`, `id_user`, `id_event`) VALUES
(10, 1, 4),
(11, 1, 1),
(13, 18, 4),
(14, 10, 4);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `inventario`
--

CREATE TABLE `inventario` (
  `id_inv` int(11) NOT NULL,
  `cant_inv` int(11) NOT NULL,
  `total_inv` int(11) NOT NULL,
  `min_inv` int(11) NOT NULL,
  `resto_inv` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `inventario`
--

INSERT INTO `inventario` (`id_inv`, `cant_inv`, `total_inv`, `min_inv`, `resto_inv`) VALUES
(1, 20, 20, 5, 0),
(2, 20, 20, 5, 0),
(3, 15, 15, 5, 0),
(4, 8, 10, 3, 2),
(5, 12, 12, 1, 0),
(6, 12, 12, 1, 0),
(7, 9, 12, 3, 3),
(8, 9, 10, 3, 1),
(9, 4, 4, 2, 0),
(10, 3, 4, 2, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `libros`
--

CREATE TABLE `libros` (
  `id_libro` int(11) NOT NULL,
  `cota` varchar(255) COLLATE utf8_unicode_ci NOT NULL COMMENT 'Código identificador del libro',
  `titulo` varchar(255) COLLATE utf8_unicode_ci NOT NULL COMMENT 'Título del libro',
  `autor` varchar(255) COLLATE utf8_unicode_ci NOT NULL COMMENT 'Autor del libro',
  `categoria` int(11) NOT NULL COMMENT 'Categoría del libro',
  `estado_libro` varchar(255) COLLATE utf8_unicode_ci NOT NULL COMMENT 'Estado del libro',
  `sinopsis` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `cantidad` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `libros`
--

INSERT INTO `libros` (`id_libro`, `cota`, `titulo`, `autor`, `categoria`, `estado_libro`, `sinopsis`, `cantidad`) VALUES
(46, 'A131', 'Mujercitas', 'Louise May Alcott', 3, 'Lectura y prestamo', ' Amy, Jo, Beth y Meg son cuatro hermanas que atraviesan Massachussets con su madre durante la Guerra Civil, unas vacaciones que realizan sin su padre evangelista itinerante. Durante estas vacaciones las adolescentes descubren el amor y la importancia de los lazos familiares.', 4),
(48, 'A101', 'La biblia II', 'Dios Nuestro', 3, 'Disponible para su lectura y prestamo', 'Dios y sus relatos mas', 7),
(49, 'B860', 'Drácula', 'Bram Stoker', 1, 'Disponible para su lectura y prestamo', 'el cuento de dracula', 8),
(51, 'A105', 'La cosa', 'Karl Marx', 1, 'Disponible para su lectura y prestamo', 'Dios y sus relatos', 10);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `news`
--

CREATE TABLE `news` (
  `id_new` int(11) NOT NULL,
  `title_new` varchar(255) NOT NULL,
  `author_new` varchar(255) NOT NULL,
  `content_new` text NOT NULL,
  `date_new` date NOT NULL,
  `id_event` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `news`
--

INSERT INTO `news` (`id_new`, `title_new`, `author_new`, `content_new`, `date_new`, `id_event`) VALUES
(1, 'Carlos se comio un mango', 'Diego', 'Fino', '0000-00-00', NULL),
(3, 'sfasdas', 'dsadas', 'dasdsa', '0000-00-00', NULL),
(5, 'Prueba xd', 'xdssss', 'dsadsa ts', '2023-03-26', NULL),
(13, 'Los panas', 'Sir Lancelot', 'carlos to', '2023-04-08', 3),
(14, 'Los chamorrucoss', 'Sir Lancelot', 'El encuentro de los grandes chamorrucos en el botadero de san vicente xds', '2023-04-09', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `news_image`
--

CREATE TABLE `news_image` (
  `id_new_image` int(11) NOT NULL,
  `url` text DEFAULT NULL,
  `id_new` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `news_image`
--

INSERT INTO `news_image` (`id_new_image`, `url`, `id_new`) VALUES
(11, '/uploads/news_image/6431f9dcc4228.jpg', 13),
(12, '/uploads/news_image/64336cef8024f.png', 13),
(15, '/uploads/news_image/64336dcdedb26.jpg', 14),
(16, '/uploads/news_image/64336dcdee320.jpg', 14);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ocupacion`
--

CREATE TABLE `ocupacion` (
  `id_ocup` int(11) NOT NULL COMMENT 'Número identificador de la ocupación',
  `nom_ocup` varchar(255) COLLATE utf8_spanish_ci NOT NULL COMMENT 'Nombre de la ocupación'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `ocupacion`
--

INSERT INTO `ocupacion` (`id_ocup`, `nom_ocup`) VALUES
(1, 'Trabajador'),
(2, 'Estudiante'),
(3, 'Ninguno');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `organizer`
--

CREATE TABLE `organizer` (
  `id` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `is_actived` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `organizer`
--

INSERT INTO `organizer` (`id`, `id_user`, `is_actived`) VALUES
(1, 1, 0),
(2, 10, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `prestamo`
--

CREATE TABLE `prestamo` (
  `id_p` int(11) NOT NULL COMMENT 'Número identificador del préstamo',
  `numero_carnet2` int(11) NOT NULL COMMENT 'Número de carnet del solicitante',
  `id_libro2` int(11) NOT NULL COMMENT 'Identificador del libro',
  `fecha_entrega` date NOT NULL COMMENT 'Fecha de entrega del libro',
  `fecha_devolucion` date NOT NULL COMMENT 'Fecha de devolución del libro',
  `observaciones_p` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'Comentarios extra sobre el préstamo',
  `pendiente` tinyint(1) NOT NULL COMMENT 'Estado actual del préstamo'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `prestamo`
--

INSERT INTO `prestamo` (`id_p`, `numero_carnet2`, `id_libro2`, `fecha_entrega`, `fecha_devolucion`, `observaciones_p`, `pendiente`) VALUES
(5, 1080, 46, '2023-02-01', '2023-02-24', 'Esta arrugado', 1),
(6, 1080, 46, '2023-03-17', '2023-03-16', 'Fino senores', 1),
(7, 1080, 48, '2023-03-17', '2023-03-17', 'Fino senores', 0),
(13, 1080, 46, '2023-03-17', '2023-03-17', '', 1),
(14, 1080, 46, '2023-03-17', '2023-03-17', '', 1),
(15, 1080, 46, '2023-03-17', '2023-03-17', '', 1),
(16, 1100, 46, '2023-03-22', '2023-03-22', '', 1),
(17, 1100, 49, '2023-03-22', '2023-03-24', 'Fino senores', 1),
(18, 1107, 51, '2023-03-23', '2023-03-25', '', 1),
(19, 1107, 48, '2023-03-24', '2023-03-31', '', 1),
(20, 1095, 48, '2023-03-24', '2023-03-31', '', 0),
(21, 1084, 51, '2023-03-24', '2023-03-25', '', 0),
(22, 1096, 49, '2023-03-24', '2023-04-06', '', 0),
(23, 1080, 46, '2023-03-24', '2023-03-31', '', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `questions`
--

CREATE TABLE `questions` (
  `id` int(11) NOT NULL,
  `question` varchar(50) NOT NULL,
  `answer` text NOT NULL,
  `user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `questions`
--

INSERT INTO `questions` (`id`, `question`, `answer`, `user`) VALUES
(4, '1', '2', 10),
(5, '3', '4', 10),
(6, '5', '6', 10),
(16, '1', 'Mg==', 17),
(17, '3', 'NA==', 17),
(18, '5', 'Ng==', 17),
(19, '1', 'Mg==', 18),
(20, '3', 'NA==', 18),
(21, '5', 'Ng==', 18),
(22, '1', 'MQ==', 19),
(23, '2', 'Mg==', 19),
(24, '3', 'Mw==', 19);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `questions_1`
--

CREATE TABLE `questions_1` (
  `id_que` int(11) NOT NULL,
  `pregunta` varchar(255) NOT NULL,
  `respuesta` varchar(255) NOT NULL,
  `user_que` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `questions_1`
--

INSERT INTO `questions_1` (`id_que`, `pregunta`, `respuesta`, `user_que`) VALUES
(21, 'Â¿CuÃ¡l es la fecha de nacimiento de Vanessa?', '29-12-2000', 67),
(22, 'Â¿CuÃ¡l es el segundo nombre de Vanessa?', 'Ling', 67),
(23, 'Â¿CuÃ¡l es el segundo apellido de Vanessa?', 'Pimentel', 67),
(27, 'Â¿DÃ³nde esta ubicada la biblioteca?', 'la casa de la cultura', 0),
(28, 'Â¿CuÃ¡ntos pisos tiene la biblioteca?', '2', 0),
(29, 'Â¿CuÃ¡l es el objetivo de la biblioteca?', 'fomentar la lectura', 0),
(30, 'Â¿CuÃ¡l es la fecha de nacimiento de Diego?', '27-11-2001', 69),
(31, 'Â¿CuÃ¡l es el segundo apellido de Diego?', 'RodrÃ­guez', 69),
(32, 'Â¿CuÃ¡l es el segundo nombre de Diego?', 'Arbusto', 69),
(33, '5', '6', 75),
(34, '3', '4', 75),
(35, '1', '2', 75),
(36, '1', '2', 75),
(37, '3', '4', 75),
(38, '5', '6', 75);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `roles`
--

CREATE TABLE `roles` (
  `id` int(11) NOT NULL,
  `name` varchar(64) NOT NULL,
  `nivel` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `roles`
--

INSERT INTO `roles` (`id`, `name`, `nivel`) VALUES
(1, 'Lector', 1),
(2, 'Administrador', 10),
(3, 'Bibliotecario', 5),
(4, 'Organizador', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `solicitantes`
--

CREATE TABLE `solicitantes` (
  `id_sol` int(11) NOT NULL COMMENT 'id del solicitante bd',
  `carnet` int(5) NOT NULL COMMENT 'Número de carnet del solicitante',
  `nom_sol` varchar(255) COLLATE utf8_spanish_ci NOT NULL COMMENT 'Nombres',
  `ape_sol` varchar(255) COLLATE utf8_spanish_ci NOT NULL COMMENT 'Apellidos',
  `ced_sol` int(11) NOT NULL COMMENT 'Cédula de identidad',
  `edad_sol` int(11) NOT NULL COMMENT 'Edad',
  `tlf_sol` varchar(11) COLLATE utf8_spanish_ci NOT NULL COMMENT 'Número de teléfono',
  `dir_sol` varchar(255) COLLATE utf8_spanish_ci NOT NULL COMMENT 'Dirección de habitación',
  `corr_sol` varchar(255) COLLATE utf8_spanish_ci NOT NULL COMMENT 'Correo electrónico',
  `sex_sol` varchar(255) COLLATE utf8_spanish_ci NOT NULL COMMENT 'Sexo',
  `ocup_sol` varchar(64) COLLATE utf8_spanish_ci NOT NULL COMMENT 'Ocupación',
  `nom_inst` varchar(255) COLLATE utf8_spanish_ci DEFAULT NULL COMMENT 'Nombre del lugar donde labora o estudia',
  `dir_inst` varchar(255) COLLATE utf8_spanish_ci DEFAULT NULL COMMENT 'Dirección del lugar donde labora o estudia',
  `tel_inst` varchar(255) COLLATE utf8_spanish_ci DEFAULT NULL COMMENT 'Teléfono del lugar donde labora o estudia',
  `estado_s` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `solicitantes`
--

INSERT INTO `solicitantes` (`id_sol`, `carnet`, `nom_sol`, `ape_sol`, `ced_sol`, `edad_sol`, `tlf_sol`, `dir_sol`, `corr_sol`, `sex_sol`, `ocup_sol`, `nom_inst`, `dir_inst`, `tel_inst`, `estado_s`) VALUES
(1080, 1000, 'Rafael', 'Abreu C.', 8120392, 61, '4162470459', 'Barrio El Carmen calle Puerto Nuevo casa #6, Maracay', 'abreucrafael@gmail.com', 'Masculino', 'Trabajador', 'BBVA Provincial', 'Av Boli­var, Maracay', '02432994694', 1),
(1083, 1001, 'Carlos', 'Hinagas', 28249485, 21, '4144595322', 'Santa Ines, Estado Aragua - Venezuela', 'hinagasdiego@hotmail.com', 'Masculino', 'Ninguno', '', '', '', 0),
(1084, 1002, 'Diego', 'asdasd', 28249286, 21, '4144595322', 'Santa Ines, Estado Aragua - Venezuela', 'hinagasdiego@hotmail.com', 'Masculino', 'Ninguno', '', '', '', 1),
(1085, 1003, 'Diego', 'Hinagas', 28249485, 21, '4144595322', 'Santa Ines, Estado Aragua - Venezuela', 'hinagasdiego@hotmail.com', 'Masculino', 'Ninguno', '', '', '', 1),
(1086, 1004, 'Diego', 'Hinagas', 28249485, 21, '4144595322', 'Santa Ines, Estado Aragua - Venezuela', 'hinagasdiego@hotmail.com', 'Masculino', 'Ninguno', '', '', '', 1),
(1087, 1005, 'Diego', 'Hinagas', 28249485, 21, '4144595322', 'Santa Ines, Estado Aragua - Venezuela', 'hinagasdiego@hotmail.com', 'Masculino', 'Ninguno', '', '', '', 1),
(1088, 1006, 'Diego', 'Hinagas', 28249485, 21, '4144595322', 'Santa Ines, Estado Aragua - Venezuela', 'hinagasdiego@hotmail.com', 'Masculino', 'Ninguno', '', '', '', 1),
(1089, 1007, 'Diego', 'Hinagas', 28249286, 21, '4144595322', 'Santa Ines, Estado Aragua - Venezuela', 'hinagasdiego@hotmail.com', 'Masculino', 'Ninguno', '', '', '', 1),
(1090, 1008, 'Diego', 'asdasd', 28249286, 21, '4144595322', 'Santa Ines, Estado Aragua - Venezuela', 'hinagasdiego@hotmail.com', 'Masculino', 'Ninguno', '', '', '', 1),
(1091, 1009, 'Diego', 'asdasd', 28249485, 21, '4144595322', 'Santa Ines, Estado Aragua - Venezuela', 'hinagasdiego@hotmail.com', 'Masculino', 'Ninguno', '', '', '', 1),
(1092, 1010, 'Diego', 'asdasd', 28249211, 21, '4144595000', 'Santa Ines, Estado Aragua - Venezuela', 'hinagas@hotmail.com', 'Masculino', 'Ninguno', '', '', '', 1),
(1093, 1011, 'Miguel', 'Rodriguez', 28249222, 21, '4144595123', 'Santa Ines, Estado Aragua - Venezuela', 'miguel@gmail.com', 'Masculino', 'Ninguno', '', '', '', 1),
(1094, 1012, 'Sierra', 'Leona', 28249010, 21, '414459101', 'Santa Ines, Estado Aragua - Venezuela', 'sierra@gmail.com', 'Femenino', 'Ninguno', '', '', '', 1),
(1095, 1013, 'Marcos', 'Mandela', 27299020, 20, '4144595311', 'Santa Ines, Estado Aragua - Venezuela', 'mandela@gmail.com', 'Masculino', 'Ninguno', '', '', '', 1),
(1096, 1014, 'Sasha', 'Trevor', 28249281, 21, '4144595300', 'Santa Ines, Estado Aragua - Venezuela', 'sasha@gmail.com', 'Masculino', 'Ninguno', '', '', '', 1),
(1097, 1015, 'Santa', 'Marqueza', 28249483, 21, '4144595321', 'Santa Ines, Estado Aragua - Venezuela', 'mer@gmail.com', 'Masculino', 'Ninguno', '', '', '', 1),
(1098, 1016, 'Vanesita ', 'Tse', 28456218, 22, '04121369393', 'Maracay - Edo Aragua', 'tse@gmail.com', 'Femenino', 'Ninguno', '', '', '', 1),
(1099, 1017, 'Miguelito', 'Alejandro', 28249482, 21, '4144595312', 'Carlito Vivienda', 'carlisto@email.com', 'Masculino', 'Ninguno', '', '', '', 1),
(1100, 1018, 'Diego', 'Puerto Rico', 28249488, 21, '04124653879', 'La morita', 'hinagasdiego99@hotmail.com', 'Masculino', 'Trabajador', 'Rialto', 'maracay', '4245146273', 1),
(1101, 1019, 'Azul', 'Marron', 28249400, 21, '04144595322', 'Santa Ines, Estado Aragua - Venezuela', 'marron12@emai.com', 'Masculino', 'Ninguno', '', '', '', 1),
(1102, 1020, 'Azul', 'Marron', 28232123, 21, '4144595021', 'Santa Ines, Estado Aragua - Venezuela', 'azul@hotmail.com', 'Masculino', 'Ninguno', '', '', '', 1),
(1103, 1021, 'Cielo', 'Amarillo', 20321221, 21, '04142132211', 'Santa Ines, Estado Aragua - Venezuela', 'cielo@email.com', 'Masculino', 'Ninguno', '', '', '', 1),
(1104, 1022, 'Marcos', 'Mil', 28249123, 21, '04144595001', 'Santa Ines, Estado Aragua - Venezuela', 'marco11s@test.com', 'Masculino', 'Ninguno', '', '', '', 1),
(1105, 1023, 'Cielo', 'Marron', 21298700, 21, '4144595101', 'Santa Ines, Estado Aragua - Venezuela', 'marron120@emai.com', 'Masculino', 'Ninguno', '', '', '', 1),
(1107, 1024, 'Cielo', 'Marron', 21298744, 21, '4144592121', 'Santa Ines, Estado Aragua - Venezuela', 'marron1120@emai.com', 'Masculino', 'Ninguno', '', '', '', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `user` varchar(64) NOT NULL,
  `role` int(11) NOT NULL,
  `username` varchar(64) NOT NULL,
  `password` text NOT NULL,
  `phone` varchar(20) NOT NULL,
  `email` varchar(64) NOT NULL,
  `enabled` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `user`, `role`, `username`, `password`, `phone`, `email`, `enabled`) VALUES
(1, 'Diegos', 2, 'admin', '$2y$10$HjAlHC7glrx5y0Rc/Np16uFKn391mIelZIx1tXEmu625PCiEgPhh.', '4144595344', 'diego@email.com', 1),
(3, 'alberto', 1, 'admin2', '$2y$10$SLEhjoCWM.TEprbPY5zETe3C1tPGtdxMvgUYYNujgLep6WvcOuf.u', '4144595345', 'alberto@email.com', 1),
(4, 'hinagas', 1, 'admin3', '$2y$10$SLEhjoCWM.TEprbPY5zETe3C1tPGtdxMvgUYYNujgLep6WvcOuf.u', '4144595346', 'hinagas@email.com', 1),
(5, 'messi', 1, 'admin4', '$2y$10$SLEhjoCWM.TEprbPY5zETe3C1tPGtdxMvgUYYNujgLep6WvcOuf.u', '4144595347', 'messi@email.com', 1),
(6, 'Alberto Diego', 2, 'albertdiego', '$2y$10$34dsRuzIPPTe6mK.aScVTOsw/e1PIPQZotAm38H6pjIAZKz1H0HP2', '4144595310', 'albertodiego@email.c', 0),
(7, 'Albert Digo', 2, 'digo', '$2y$10$yzmgiup.eAds6QJNji4Qwu0cM8HOgY2n44NU1FbFUe3YFoFAS2tvy', '4144595392', 'digo@email.com', 1),
(8, 'Prueba', 2, 'prueba', '$2y$10$AW3YrePuu6tBxu9N9XZ5XOfmTIRgAOCQ2qhEqgqYtGn2nV9T/gKAC', '4144595303', 'prueba@email.com', 1),
(9, 'Didalco', 2, 'dida', '$2y$10$vBlaHAt0VvwYzMdu92jRf.7/BXpMjLARcfPRrcu5.ZEguyuAYCeEa', '4144595300', 'dida@email.com', 1),
(10, 'Diego Hinagas R', 2, 'ostia', '$2y$10$6QS8ECW3V018tnO/K6TTnuO2eYK8nk5z4ZEcoIx3QzyOZ/mEoeGdK', '4144595123', 'ostia@email.com', 1),
(17, 'Magenta', 3, 'magenta', '$2y$10$M1x2gqPhwz767OKuFA1IYupoUsyJ0fplrBAk50EgAc1UFxUyja9Nm', '0412465380021', 'magenta@email.com', 1),
(18, 'Marron', 1, 'marron', '$2y$10$HNohCDHR1LUO7bivqvA3WetCY2m7XDIcG8maYDriS72k4qGPWfy0O', '0412465380001', 'marron@emai.com', 1),
(19, 'Diego asdasd', 1, 'lector', '$2y$10$FacG0mocR8ZAECdMQFxNKeen93OslUGQNQFqvhQheoqUGqsPjmC8.', '04123245161', 'o@hotmail.com', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `id_user` int(11) NOT NULL COMMENT 'Número identificador del usuario',
  `name_user` varchar(255) COLLATE utf8_spanish_ci NOT NULL COMMENT 'Nombre completo del usuario',
  `nivel_user` int(11) DEFAULT NULL,
  `email_user` varchar(255) COLLATE utf8_spanish_ci NOT NULL COMMENT 'Usuario para acceder al sistema',
  `passwd_user` varchar(255) COLLATE utf8_spanish_ci NOT NULL COMMENT 'Contraseña',
  `tlf_user` varchar(13) COLLATE utf8_spanish_ci DEFAULT NULL,
  `correo_user` varchar(255) COLLATE utf8_spanish_ci DEFAULT NULL,
  `enabled` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id_user`, `name_user`, `nivel_user`, `email_user`, `passwd_user`, `tlf_user`, `correo_user`, `enabled`) VALUES
(67, 'Vanessa Tse', 10, 'administrador', '$2y$10$SLEhjoCWM.TEprbPY5zETe3C1tPGtdxMvgUYYNujgLep6WvcOuf.u', '04121369393', 'tsevanessa5000@gmail.com', 1),
(69, 'Diego Hinagas', 1, 'usuario', '$2y$10$KVdbigBKPDiIFPe4tJV5cevKXEHXOxBt8Fxw1GcaV9tKe5n3aQwWC', NULL, NULL, 1),
(70, 'eddy velasquez', 1, 'eddyantonio', '$2y$10$pTuk1OMXpTBRdLcQO7P81eV/Nrh0IuwMFi5g/r8TH.JPB8U7debwy', NULL, NULL, 1),
(71, 'Mariana RodrÃ­guez', 1, 'maria', '$2y$10$TbBet6.WBV4JujAt1lKUG.sGk/n1vKQQiZcVaWel/JqK37pROXnX.', NULL, NULL, 1),
(72, 'Ana Cristina Molina', 1, 'acm', '$2y$10$nTeR6dAJIonCE0fwdGLRPeOJL7EYwJwi5la/8m8lgx9T5zpeGGVci', '04141072862', 'anacmolinag@gmail.com', 1),
(73, 'Juan Pacheco', 1, 'jp', '$2y$10$rLwwEswpBBAkJYMuS/gRgODuJKvLKDJ7RVGtPJ2x2Ow84SKVQbzSG', '04146785498', 'juanpacheco807@gmail.com', 1),
(74, 'jose', 1, 'jose', '$2y$10$b38Yx6w4l5Hy4Okvs9YzuudjkPStMWRrnnWYzVDuiBop1Nq2UlP6G', '04145876715', 'eddiantonio@gmail.com', 1),
(75, 'Mariangel custodio', 2, 'mc', '$2y$10$CeaHRm.bH/TT4cIQnBu5JuOvCoySjcbM3MLPHKzCFDWmkzYYCCrSS', '04121393782', 'mariangelcustodio11@gmail.com', 1),
(76, 'Jose Angel Diaz Rengifo ', 1, 'Hejoseangel', '$2y$10$H6otf7BwuHl8SKdumu8d0eQ1Vnkq8GobCCphRZtDRkTwwCncXPNYu', '04243185431', 'Hejoseangel@gmail.com', 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `asunto_event`
--
ALTER TABLE `asunto_event`
  ADD PRIMARY KEY (`id_a`);

--
-- Indices de la tabla `auditorias`
--
ALTER TABLE `auditorias`
  ADD PRIMARY KEY (`id_aud`),
  ADD KEY `usr_aud` (`usr_aud`);

--
-- Indices de la tabla `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`id_blog`);

--
-- Indices de la tabla `categoria`
--
ALTER TABLE `categoria`
  ADD PRIMARY KEY (`id_c`);

--
-- Indices de la tabla `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id_event`);

--
-- Indices de la tabla `event_participant`
--
ALTER TABLE `event_participant`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `id_user` (`id_user`),
  ADD KEY `id_event` (`id_event`);

--
-- Indices de la tabla `inventario`
--
ALTER TABLE `inventario`
  ADD PRIMARY KEY (`id_inv`);

--
-- Indices de la tabla `libros`
--
ALTER TABLE `libros`
  ADD PRIMARY KEY (`id_libro`),
  ADD KEY `categoria` (`categoria`),
  ADD KEY `cantidad` (`cantidad`);

--
-- Indices de la tabla `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id_new`),
  ADD KEY `id_event` (`id_event`);

--
-- Indices de la tabla `news_image`
--
ALTER TABLE `news_image`
  ADD PRIMARY KEY (`id_new_image`),
  ADD KEY `id_new` (`id_new`);

--
-- Indices de la tabla `ocupacion`
--
ALTER TABLE `ocupacion`
  ADD PRIMARY KEY (`id_ocup`);

--
-- Indices de la tabla `organizer`
--
ALTER TABLE `organizer`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `prestamo`
--
ALTER TABLE `prestamo`
  ADD PRIMARY KEY (`id_p`),
  ADD KEY `numero_carnet2` (`numero_carnet2`),
  ADD KEY `id_libro2` (`id_libro2`);

--
-- Indices de la tabla `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `questions_1`
--
ALTER TABLE `questions_1`
  ADD PRIMARY KEY (`id_que`);

--
-- Indices de la tabla `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `solicitantes`
--
ALTER TABLE `solicitantes`
  ADD PRIMARY KEY (`id_sol`),
  ADD UNIQUE KEY `carnet` (`carnet`),
  ADD KEY `ocup_sol` (`ocup_sol`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `asunto_event`
--
ALTER TABLE `asunto_event`
  MODIFY `id_a` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `auditorias`
--
ALTER TABLE `auditorias`
  MODIFY `id_aud` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT de la tabla `blog`
--
ALTER TABLE `blog`
  MODIFY `id_blog` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `categoria`
--
ALTER TABLE `categoria`
  MODIFY `id_c` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Número identificador de la categoría', AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT de la tabla `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `events`
--
ALTER TABLE `events`
  MODIFY `id_event` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `event_participant`
--
ALTER TABLE `event_participant`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT de la tabla `inventario`
--
ALTER TABLE `inventario`
  MODIFY `id_inv` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `libros`
--
ALTER TABLE `libros`
  MODIFY `id_libro` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT de la tabla `news`
--
ALTER TABLE `news`
  MODIFY `id_new` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT de la tabla `news_image`
--
ALTER TABLE `news_image`
  MODIFY `id_new_image` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT de la tabla `ocupacion`
--
ALTER TABLE `ocupacion`
  MODIFY `id_ocup` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Número identificador de la ocupación', AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `organizer`
--
ALTER TABLE `organizer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `prestamo`
--
ALTER TABLE `prestamo`
  MODIFY `id_p` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Número identificador del préstamo', AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT de la tabla `questions`
--
ALTER TABLE `questions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT de la tabla `questions_1`
--
ALTER TABLE `questions_1`
  MODIFY `id_que` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT de la tabla `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `solicitantes`
--
ALTER TABLE `solicitantes`
  MODIFY `id_sol` int(11) NOT NULL AUTO_INCREMENT COMMENT 'id del solicitante bd', AUTO_INCREMENT=1108;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Número identificador del usuario', AUTO_INCREMENT=77;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `auditorias`
--
ALTER TABLE `auditorias`
  ADD CONSTRAINT `auditorias_ibfk_1` FOREIGN KEY (`usr_aud`) REFERENCES `users` (`id`);

--
-- Filtros para la tabla `libros`
--
ALTER TABLE `libros`
  ADD CONSTRAINT `libros_ibfk_1` FOREIGN KEY (`categoria`) REFERENCES `categories` (`id`);

--
-- Filtros para la tabla `news`
--
ALTER TABLE `news`
  ADD CONSTRAINT `news_ibfk_1` FOREIGN KEY (`id_event`) REFERENCES `events` (`id_event`);

--
-- Filtros para la tabla `news_image`
--
ALTER TABLE `news_image`
  ADD CONSTRAINT `news_image_ibfk_1` FOREIGN KEY (`id_new`) REFERENCES `news` (`id_new`);

--
-- Filtros para la tabla `prestamo`
--
ALTER TABLE `prestamo`
  ADD CONSTRAINT `prestamo_ibfk_2` FOREIGN KEY (`id_libro2`) REFERENCES `libros` (`id_libro`),
  ADD CONSTRAINT `prestamo_ibfk_3` FOREIGN KEY (`numero_carnet2`) REFERENCES `solicitantes` (`id_sol`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
