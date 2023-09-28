-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 28-09-2023 a las 03:37:22
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
(40, 'Eventos', 'Evento Actualizado 3', 10, '2023-04-08 00:00:00'),
(41, 'Eventos', 'Creacion de nuevo Evento 8', 10, '2023-04-18 00:00:00'),
(42, 'Eventos', 'Evento Actualizado 8', 10, '2023-04-18 00:00:00'),
(43, 'Solicitante', 'Actualizacion de datos del solicitantes solicitante 28249485', 10, '2023-04-19 00:00:00'),
(44, 'Solicitante', 'Actualizacion de datos del solicitantes solicitante 28249485', 10, '2023-04-19 00:00:00'),
(45, 'Solicitante', 'Actualizacion de datos del solicitantes solicitante 28249485', 10, '2023-04-19 00:00:00'),
(46, 'Prestamo Circulante', 'El prestamo 22 ha sido devuelto', 10, '2023-04-19 00:00:00'),
(47, 'Libros', 'Actualizado de libro A131', 10, '2023-04-19 00:00:00'),
(48, 'Libros', 'Actualizado de libro A101', 10, '2023-04-19 00:00:00'),
(49, 'Solicitante', 'Actualizacion de datos del solicitantes solicitante 8120392', 17, '2023-04-19 00:00:00'),
(50, 'Solicitante', 'Actualizacion de datos del solicitantes solicitante 8120392', 17, '2023-04-19 00:00:00'),
(51, 'Solicitante', 'Actualizacion de datos del solicitantes solicitante 28249485', 17, '2023-04-19 00:00:00'),
(52, 'Solicitante', 'Creacion de nuevo solicitante 1108', 10, '2023-04-19 00:00:00'),
(53, 'Solicitante', 'Actualizacion de datos del solicitantes solicitante 10012308', 10, '2023-04-19 00:00:00'),
(54, 'Solicitante', 'Actualizacion de datos del solicitantes solicitante 10012308', 10, '2023-04-19 00:00:00'),
(55, 'Solicitante', 'Actualizacion de datos del solicitantes solicitante 10012308', 10, '2023-04-19 00:00:00'),
(56, 'Libros', 'Actualizado de libro G101', 10, '2023-05-09 11:03:20'),
(57, 'Libros', 'Actualizado de libro P105', 10, '2023-05-09 11:04:47'),
(58, 'Libros', 'Actualizado de libro L131', 10, '2023-05-09 11:07:58'),
(59, 'Libros', 'Actualizado de libro P860', 10, '2023-05-09 11:09:21'),
(60, 'Prestamo Circulante', 'El prestamo 7 ha sido devuelto', 10, '2023-05-09 21:29:50'),
(61, 'Prestamo Circulante', 'El prestamo 21 ha sido devuelto', 10, '2023-05-10 18:56:48'),
(62, 'Solicitante', 'Actualizacion de datos del solicitantes solicitante 83946188', 10, '2023-05-10 20:49:50'),
(63, 'Solicitante', 'Actualizacion de datos de contacto del solicitante anadelgado@gmail.com', 10, '2023-05-10 20:50:22'),
(64, 'Prestamo Circulante', 'Creacion de nuevo prestamo 24', 10, '2023-05-10 20:52:57'),
(65, 'Prestamo Circulante', 'Estatus de prestamo 24 actualizado', 10, '2023-05-10 20:53:25'),
(66, 'Libros', 'Creacion de nuevo libro 52', 10, '2023-05-10 20:56:11'),
(67, 'Libros', 'Actualizado de libro O839', 10, '2023-05-10 20:59:30'),
(68, 'Libros', 'El inventario del libro O839 ha sido actualizada', 10, '2023-05-10 20:59:52'),
(69, 'Prestamo Circulante', 'Creacion de nuevo prestamo 25', 10, '2023-05-10 21:00:58'),
(70, 'Prestamo Circulante', 'El prestamo 25 ha sido devuelto', 10, '2023-05-10 21:01:57'),
(71, 'Prestamo Circulante', 'El prestamo 20 ha sido devuelto', 10, '2023-05-10 21:02:36'),
(72, 'Eventos', 'Creacion de nuevo Evento 9', 10, '2023-05-10 21:09:15'),
(73, 'Libros', 'El inventario del libro G101 ha sido actualizada', 10, '2023-05-11 09:41:54'),
(74, 'Libros', 'Actualizado de libro P860', 19, '2023-05-12 15:40:32'),
(75, 'Libros', 'Actualizado de libro P105', 19, '2023-05-12 15:40:50'),
(76, 'Libros', 'Actualizado de libro O839', 19, '2023-05-12 15:41:05'),
(77, 'Libros', 'Actualizado de libro L131', 19, '2023-05-12 15:42:12'),
(78, 'Libros', 'Actualizado de libro G101', 19, '2023-05-12 15:42:42'),
(79, 'Eventos', 'Evento Actualizado 7', 19, '2023-05-12 15:58:17'),
(80, 'Eventos', 'Evento Actualizado 7', 19, '2023-05-12 15:59:52'),
(81, 'Prestamo Circulante', 'Creacion de nuevo prestamo 26', 10, '2023-06-11 00:00:00'),
(82, 'Solicitante', 'Creacion de nuevo solicitante 1109', 10, '2023-06-27 00:00:00'),
(83, 'Libros', 'Creacion de nuevo libro 53', 10, '2023-06-27 00:00:00'),
(84, 'Libros', 'Creacion de nuevo libro 54', 10, '2023-06-27 00:00:00'),
(85, 'Libros', 'Actualizado de libro A101', 10, '2023-06-27 00:00:00'),
(86, 'Libros', 'El inventario del libro A101 ha sido actualizada', 10, '2023-06-27 00:00:00'),
(87, 'Solicitante', 'Creacion de nuevo solicitante 1110', 10, '2023-07-02 00:00:00'),
(88, 'Solicitante', 'Creacion de nuevo solicitante 1111', 10, '2023-07-02 00:00:00'),
(89, 'Solicitante', 'Creacion de nuevo solicitante 1112', 10, '2023-07-02 00:00:00'),
(90, 'Libros', 'Actualizado de libro A101', 10, '2023-07-02 00:00:00'),
(91, 'Libros', 'Actualizado de libro A101', 10, '2023-07-02 00:00:00'),
(92, 'Libros', 'Actualizado de libro A101', 10, '2023-07-02 00:00:00'),
(93, 'Libros', 'El inventario del libro A101 ha sido actualizada', 10, '2023-07-02 00:00:00'),
(94, 'Libros', 'El inventario del libro A101 ha sido actualizada', 10, '2023-07-02 00:00:00'),
(95, 'Libros', 'El inventario del libro A101 ha sido actualizada', 10, '2023-07-02 00:00:00'),
(96, 'Libros', 'El inventario del libro A101 ha sido actualizada', 10, '2023-07-02 00:00:00'),
(97, 'Libros', 'El inventario del libro A101 ha sido actualizada', 10, '2023-07-02 00:00:00'),
(98, 'Libros', 'El inventario del libro A101 ha sido actualizada', 10, '2023-07-02 00:00:00'),
(99, 'Préstamo Circulante', 'Estatus de préstamo 5 actualizado', 10, '2023-07-02 00:00:00'),
(100, 'Préstamo Circulante', 'Estatus de préstamo 5 actualizado', 10, '2023-07-02 00:00:00'),
(101, 'Préstamo Circulante', 'Estatus de préstamo 5 actualizado', 10, '2023-07-02 00:00:00'),
(102, 'Prestamo Circulante', 'El prestamo 26 ha sido devuelto', 10, '2023-07-02 00:00:00'),
(103, 'Eventos', 'Evento Actualizado 9', 10, '2023-07-06 00:00:00'),
(104, 'Libros', 'Actualizado de libro A101', 1, '2023-08-22 00:00:00'),
(105, 'Préstamo Circulante', 'Creacion de nuevo préstamo 27', 1, '2023-08-28 00:00:00'),
(106, 'Prestamo Circulante', 'El prestamo 27 ha sido devuelto', 1, '2023-09-27 00:00:00'),
(107, 'Préstamo Circulante', 'Creacion de nuevo préstamo 28', 1, '2023-09-27 00:00:00'),
(108, 'Prestamo Circulante', 'El prestamo 28 ha sido devuelto', 1, '2023-09-27 00:00:00'),
(109, 'Préstamo Circulante', 'Creacion de nuevo préstamo 29', 1, '2023-09-27 00:00:00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `backup`
--

CREATE TABLE `backup` (
  `id` int(11) NOT NULL,
  `url` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `backup`
--

INSERT INTO `backup` (`id`, `url`) VALUES
(1, './backup/6445d7fa03d77-2023-04-24-db.sql'),
(2, './backup/6445d7fba18da-2023-04-24-db.sql'),
(3, './backup/64604757389fd-2023-05-14-db.sql'),
(4, './backup/6514a719ed6e3-2023-09-28-db.sql');

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
(1, 'Obras generales', 1, 1),
(2, 'Filosofía y Psicología', 1, 1),
(3, 'Religión', 1, 1),
(6, 'Ciencias Sociales', 1, 1),
(7, 'Lingüística', 1, 1),
(8, 'Ciencias Puras', 1, 1),
(10, 'Ciencias Aplicadas', 1, 1),
(11, 'Arte y Recreación', 1, 1),
(12, 'Literatura', 2, 1),
(13, 'Geografía e Historia', 1, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `events`
--

CREATE TABLE `events` (
  `id_event` int(11) NOT NULL,
  `title_event` varchar(255) NOT NULL,
  `info_event` text NOT NULL,
  `organizer_event` int(11) NOT NULL,
  `date_realized_event` date NOT NULL,
  `time` time NOT NULL,
  `date_created_event` datetime DEFAULT NULL,
  `place_event` varchar(255) NOT NULL,
  `type_event` varchar(255) NOT NULL,
  `participants_event` int(11) DEFAULT NULL,
  `state_event` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `event_participant`
--

CREATE TABLE `event_participant` (
  `ID` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_event` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
(14, 10, 10, 3, 0),
(15, 10, 10, 3, 0),
(16, 10, 10, 3, 0),
(17, 10, 10, 3, 0),
(18, 10, 10, 3, 0),
(19, 10, 10, 3, 0),
(20, 10, 10, 3, 0),
(21, 10, 10, 3, 0),
(22, 10, 10, 3, 0),
(23, 10, 10, 3, 0),
(24, 10, 10, 3, 0),
(25, 10, 10, 3, 0),
(26, 10, 10, 3, 0),
(27, 10, 10, 3, 0),
(28, 10, 10, 3, 0),
(29, 10, 10, 3, 0),
(30, 10, 10, 3, 0),
(31, 10, 10, 3, 0),
(32, 10, 10, 3, 0),
(33, 10, 10, 3, 0),
(34, 10, 10, 3, 0),
(35, 10, 10, 3, 0),
(36, 10, 10, 3, 0),
(37, 10, 10, 3, 0),
(38, 10, 10, 3, 0),
(39, 10, 10, 3, 0),
(40, 10, 10, 3, 0),
(41, 10, 10, 3, 0),
(42, 10, 10, 3, 0),
(43, 10, 10, 3, 0),
(44, 10, 10, 3, 0),
(45, 10, 10, 3, 0),
(46, 10, 10, 3, 0),
(47, 10, 10, 3, 0),
(48, 10, 10, 3, 0),
(49, 10, 10, 3, 0),
(50, 10, 10, 3, 0),
(51, 10, 10, 3, 0),
(52, 10, 10, 3, 0),
(54, 10, 10, 3, 0),
(55, 10, 10, 3, 0),
(56, 10, 10, 3, 0),
(57, 10, 10, 3, 0),
(58, 10, 10, 3, 0),
(59, 10, 10, 3, 0),
(60, 10, 10, 3, 0),
(61, 10, 10, 3, 0),
(62, 10, 10, 3, 0),
(63, 10, 10, 3, 0),
(64, 10, 10, 3, 0),
(65, 10, 10, 3, 0),
(66, 10, 10, 3, 0),
(67, 10, 10, 3, 0),
(68, 10, 10, 3, 0),
(69, 10, 10, 3, 0),
(70, 10, 10, 3, 0),
(74, 10, 10, 3, 0),
(75, 10, 10, 3, 0),
(76, 10, 10, 3, 0),
(77, 10, 10, 3, 0),
(78, 10, 10, 3, 0),
(79, 10, 10, 3, 0),
(80, 10, 10, 3, 0),
(81, 10, 10, 3, 0),
(82, 10, 10, 3, 0),
(83, 10, 10, 3, 0),
(84, 10, 10, 3, 0),
(85, 10, 10, 3, 0),
(86, 10, 10, 3, 0),
(87, 10, 10, 3, 0),
(88, 10, 10, 3, 0),
(89, 10, 10, 3, 0),
(90, 10, 10, 3, 0),
(91, 10, 10, 3, 0),
(92, 10, 10, 3, 0),
(93, 10, 10, 3, 0),
(94, 10, 10, 3, 0),
(95, 10, 10, 3, 0),
(96, 10, 10, 3, 0),
(97, 10, 10, 3, 0),
(98, 10, 10, 3, 0),
(99, 10, 10, 3, 0),
(100, 10, 10, 3, 0),
(101, 10, 10, 3, 0),
(102, 10, 10, 3, 0),
(103, 10, 10, 3, 0),
(104, 10, 10, 3, 0),
(105, 10, 10, 3, 0),
(106, 10, 10, 3, 0),
(107, 10, 10, 3, 0),
(108, 10, 10, 3, 0),
(109, 10, 10, 3, 0),
(110, 10, 10, 3, 0),
(111, 10, 10, 3, 0),
(112, 10, 10, 3, 0),
(113, 10, 10, 3, 0),
(114, 10, 10, 3, 0),
(115, 10, 10, 3, 0),
(116, 10, 10, 3, 0),
(117, 10, 10, 3, 0),
(118, 10, 10, 3, 0),
(119, 10, 10, 3, 0),
(120, 10, 10, 3, 0),
(121, 10, 10, 3, 0),
(122, 10, 10, 3, 0),
(123, 10, 10, 3, 0),
(124, 10, 10, 3, 0),
(125, 10, 10, 3, 0),
(126, 10, 10, 3, 0),
(127, 10, 10, 3, 0),
(128, 10, 10, 3, 0),
(129, 10, 10, 3, 0),
(130, 10, 10, 3, 0),
(131, 10, 10, 3, 0),
(132, 10, 10, 3, 0),
(133, 10, 10, 3, 0);

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
(95, 'COTA001', 'Doña Bárbara', 'Rómulo Gallegos', 12, 'Disponible para su lectura y préstamo', 'Una novela clásica de la literatura venezolana que aborda temas de poder y justicia en las zonas rurales de Venezuela.', 14),
(96, 'COTA002', 'Cantaclaro', 'Rómulo Gallegos', 12, 'Disponible para su lectura y préstamo', 'Otra obra importante de Rómulo Gallegos que explora la vida en las zonas rurales de Venezuela.', 15),
(97, 'COTA003', 'Canaima', 'Rómulo Gallegos', 12, 'Disponible para su lectura y préstamo', 'Una novela que reflexiona sobre la relación entre el hombre y la naturaleza en Venezuela.', 16),
(98, 'COTA004', 'Ifigenia', 'Teresa de la Parra', 12, 'Disponible para su lectura y préstamo', 'La historia de una joven venezolana y su lucha por encontrar su identidad en un mundo tradicional.', 17),
(99, 'COTA005', 'Sardinales', 'Aquiles Nazoa', 12, 'Disponible para su lectura y préstamo', 'Una colección de cuentos y crónicas que capturan la esencia de la vida venezolana.', 18),
(100, 'COTA006', 'Los gallos de mi reloj', 'Marco Tulio Socorro', 12, 'Disponible para su lectura y préstamo', 'Relatos que exploran la vida en Venezuela a través de diferentes perspectivas.', 19),
(101, 'COTA007', 'Piedra de mar', 'Francisco Massiani', 12, 'Disponible para su lectura y préstamo', 'Una obra que aborda la vida urbana y las experiencias de la juventud en Venezuela.', 20),
(102, 'COTA008', 'Donde el silencio se rompe', 'Anabella Troconis', 12, 'Disponible para su lectura y préstamo', 'Una novela que examina las complejas relaciones humanas en el contexto venezolano.', 21),
(103, 'COTA009', 'Los astronautas de Yavé', 'Marcio Veloz Maggiolo', 12, 'Disponible para su lectura y préstamo', 'Una obra que mezcla mitología y realidad en Venezuela.', 22),
(104, 'COTA010', 'Oficio de muchachos', 'Marco Tulio Socorro', 12, 'Disponible para su lectura y préstamo', 'Una narrativa que explora la vida de los jóvenes en Venezuela.', 23),
(105, 'COTA011', 'La Trepadora', 'Rómulo Gallegos', 12, 'Disponible para su lectura y préstamo', 'Una obra que aborda temas de ambición y lucha de clases en Venezuela.', 24),
(106, 'COTA012', 'Las memorias de Mamá Blanca', 'Teresa de la Parra', 12, 'Disponible para su lectura y préstamo', 'Una novela que explora la vida y las relaciones familiares en Venezuela.', 25),
(107, 'COTA013', 'Don Juan de los Muertos', 'Tito Monterroso', 12, 'Disponible para su lectura y préstamo', 'Una obra humorística que ofrece una visión única de Venezuela.', 26),
(108, 'COTA014', 'La Casa de los Espíritus', 'Isabel Allende', 12, 'Disponible para su lectura y préstamo', 'Aunque la autora es chilena, parte de la novela se desarrolla en Venezuela.', 27),
(109, 'COTA015', 'Las Aventuras de Juan Planchard', 'Rafael Osío Cabrices', 12, 'Disponible para su lectura y préstamo', 'Una historia contemporánea sobre la vida en Venezuela.', 28),
(110, 'COTA016', 'Días de guardar', 'Carlos Noguera', 12, 'Disponible para su lectura y préstamo', 'Una obra que reflexiona sobre la cultura y la sociedad venezolana.', 29),
(111, 'COTA017', 'Los Renglones Torcidos de Dios', 'Torcuato Luca de Tena', 12, 'Disponible para su lectura y préstamo', 'Aunque el autor es español, la novela se desarrolla en Venezuela.', 30),
(112, 'COTA018', 'Fiebre', 'Miguel Otero Silva', 12, 'Disponible para su lectura y préstamo', 'Una obra que aborda temas políticos y sociales en Venezuela.', 31),
(113, 'COTA019', 'Habana Mágica', 'Karla Suárez', 12, 'Disponible para su lectura y préstamo', 'Aunque la autora es cubana, la novela se desarrolla en Venezuela.', 32),
(114, 'COTA020', 'La Fiesta Ajena', 'Josefina Cadiz', 12, 'Disponible para su lectura y préstamo', 'Una obra que explora la vida urbana en Venezuela y las relaciones humanas.', 33),
(115, 'COTA021', 'Así habló Zaratustra', 'Friedrich Nietzsche', 2, 'Disponible para su lectura y préstamo', 'Una obra fundamental de la filosofía que explora temas de la voluntad de poder y el superhombre.', 33),
(116, 'COTA022', 'Meditaciones', 'Marco Aurelio', 2, 'Disponible para su lectura y préstamo', 'Un texto clásico de la filosofía estoica que ofrece reflexiones sobre la virtud y la ética.', 34),
(117, 'COTA023', 'Crítica de la razón pura', 'Immanuel Kant', 2, 'Disponible para su lectura y préstamo', 'Una obra clave en la filosofía que aborda cuestiones sobre el conocimiento y la metafísica.', 35),
(118, 'COTA024', 'Así habló Zaratustra', 'Friedrich Nietzsche', 2, 'Disponible para su lectura y préstamo', 'Una obra fundamental de la filosofía que explora temas de la voluntad de poder y el superhombre.', 36),
(119, 'COTA025', 'La República', 'Platón', 2, 'Disponible para su lectura y préstamo', 'Un diálogo clásico de la filosofía que discute la justicia y la política.', 37),
(120, 'COTA026', 'Meditaciones', 'Marco Aurelio', 2, 'Disponible para su lectura y préstamo', 'Un texto clásico de la filosofía estoica que ofrece reflexiones sobre la virtud y la ética.', 38),
(121, 'COTA027', 'Crítica de la razón pura', 'Immanuel Kant', 2, 'Disponible para su lectura y préstamo', 'Una obra clave en la filosofía que aborda cuestiones sobre el conocimiento y la metafísica.', 39),
(122, 'COTA028', 'Así habló Zaratustra', 'Friedrich Nietzsche', 2, 'Disponible para su lectura y préstamo', 'Una obra fundamental de la filosofía que explora temas de la voluntad de poder y el superhombre.', 40),
(123, 'COTA029', 'La República', 'Platón', 2, 'Disponible para su lectura y préstamo', 'Un diálogo clásico de la filosofía que discute la justicia y la política.', 41),
(124, 'COTA030', 'Meditaciones', 'Marco Aurelio', 2, 'Disponible para su lectura y préstamo', 'Un texto clásico de la filosofía estoica que ofrece reflexiones sobre la virtud y la ética.', 42),
(125, 'COTA031', 'El arte de amar', 'Erich Fromm', 2, 'Disponible para su lectura y préstamo', 'Un libro clásico que explora la psicología del amor y las relaciones humanas.', 43),
(126, 'COTA032', 'El hombre en busca de sentido', 'Viktor Frankl', 2, 'Disponible para su lectura y préstamo', 'Una obra que relata las experiencias en campos de concentración y la búsqueda de sentido en la vida.', 44),
(127, 'COTA033', 'Psicología de la mentira', 'Paul Ekman', 2, 'Disponible para su lectura y préstamo', 'Un libro que analiza la detección de la mentira desde una perspectiva psicológica.', 45),
(128, 'COTA034', 'El arte de amar', 'Erich Fromm', 2, 'Disponible para su lectura y préstamo', 'Un libro clásico que explora la psicología del amor y las relaciones humanas.', 46),
(129, 'COTA035', 'El hombre en busca de sentido', 'Viktor Frankl', 2, 'Disponible para su lectura y préstamo', 'Una obra que relata las experiencias en campos de concentración y la búsqueda de sentido en la vida.', 47),
(130, 'COTA036', 'Psicología de la mentira', 'Paul Ekman', 2, 'Disponible para su lectura y préstamo', 'Un libro que analiza la detección de la mentira desde una perspectiva psicológica.', 48),
(131, 'COTA037', 'El arte de amar', 'Erich Fromm', 2, 'Disponible para su lectura y préstamo', 'Un libro clásico que explora la psicología del amor y las relaciones humanas.', 49),
(132, 'COTA038', 'El hombre en busca de sentido', 'Viktor Frankl', 2, 'Disponible para su lectura y préstamo', 'Una obra que relata las experiencias en campos de concentración y la búsqueda de sentido en la vida.', 50),
(133, 'COTA039', 'Psicología de la mentira', 'Paul Ekman', 2, 'Disponible para su lectura y préstamo', 'Un libro que analiza la detección de la mentira desde una perspectiva psicológica.', 51),
(134, 'COTA040', 'El arte de amar', 'Erich Fromm', 2, 'Disponible para su lectura y préstamo', 'Un libro clásico que explora la psicología del amor y las relaciones humanas.', 52),
(135, 'COTA041', 'La Biblia', 'Varios Autores', 3, 'Disponible para su lectura y préstamo', 'La Sagrada Escritura de la religión cristiana, compuesta por el Antiguo y el Nuevo Testamento.', 52),
(136, 'COTA042', 'El Corán', 'Varios Autores', 3, 'Disponible para su lectura y préstamo', 'El libro sagrado del islam, que contiene las revelaciones dadas al profeta Mahoma.', 54),
(138, 'COTA044', 'Tao Te Ching', 'Laozi', 3, 'Disponible para su lectura y préstamo', 'Un texto fundamental del taoísmo que presenta enseñanzas sobre el camino (Tao).', 55),
(139, 'COTA045', 'El Libro de Mormón', 'Joseph Smith', 3, 'Disponible para su lectura y préstamo', 'Un libro considerado sagrado por los miembros de la Iglesia de Jesucristo de los Santos de los Últimos Días.', 56),
(140, 'COTA046', 'Las Confesiones', 'San Agustín', 3, 'Disponible para su lectura y préstamo', 'Un libro autobiográfico de San Agustín que expone sus reflexiones religiosas.', 57),
(141, 'COTA047', 'El Arte de Amar a Dios', 'San Francisco de Sales', 3, 'Disponible para su lectura y préstamo', 'Un tratado espiritual que enseña a amar a Dios de manera profunda y sincera.', 58),
(142, 'COTA048', 'La Vida de Buda', 'Buda Gautama', 3, 'Disponible para su lectura y préstamo', 'La biografía de Buda Gautama, el fundador del budismo.', 59),
(143, 'COTA049', 'Los Evangelios', 'Varios Autores', 3, 'Disponible para su lectura y préstamo', 'Los cuatro Evangelios del Nuevo Testamento que narran la vida y enseñanzas de Jesús.', 60),
(144, 'COTA050', 'El Libro de los Muertos', 'Varios Autores', 3, 'Disponible para su lectura y préstamo', 'Un texto egipcio antiguo que guía al difunto en su viaje después de la muerte.', 61),
(145, 'COTA051', 'El Origen de las Especies', 'Charles Darwin', 6, 'Disponible para su lectura y préstamo', 'Un libro fundamental en la biología y la teoría de la evolución.', 61),
(146, 'COTA052', '1984', 'George Orwell', 6, 'Disponible para su lectura y préstamo', 'Una novela distópica que aborda temas de vigilancia y control social.', 62),
(147, 'COTA053', 'El Capital', 'Karl Marx', 6, 'Disponible para su lectura y préstamo', 'Un tratado fundamental en la teoría económica y política.', 63),
(148, 'COTA054', 'La Interpretación de los Sueños', 'Sigmund Freud', 6, 'Disponible para su lectura y préstamo', 'Un libro clave en la psicología que explora el significado de los sueños.', 64),
(149, 'COTA055', 'El Contrato Social', 'Jean-Jacques Rousseau', 6, 'Disponible para su lectura y préstamo', 'Un texto fundamental en la filosofía política y la teoría del contrato social.', 65),
(150, 'COTA056', 'La Estructura de las Revoluciones Científicas', 'Thomas Kuhn', 6, 'Disponible para su lectura y préstamo', 'Un libro que cambió la forma en que entendemos la historia de la ciencia.', 66),
(151, 'COTA057', 'El Choque de Civilizaciones', 'Samuel P. Huntington', 6, 'Disponible para su lectura y préstamo', 'Un libro que examina las tensiones culturales y políticas en el mundo contemporáneo.', 67),
(152, 'COTA058', 'La Mente Sociable', 'Peter L. Berger', 6, 'Disponible para su lectura y préstamo', 'Un libro que explora la sociología del conocimiento y la construcción social de la realidad.', 68),
(153, 'COTA059', 'La Teoría de la Justicia', 'John Rawls', 6, 'Disponible para su lectura y préstamo', 'Un tratado de filosofía política que aborda la justicia y la equidad en la sociedad.', 69),
(154, 'COTA060', 'La Sociedad del Riesgo', 'Ulrich Beck', 6, 'Disponible para su lectura y préstamo', 'Un libro que analiza los desafíos de la sociedad moderna en relación con el riesgo y la tecnología.', 70),
(155, 'COTA061', 'Lenguaje y Comunicación', 'Noam Chomsky', 7, 'Disponible para su lectura y préstamo', 'Un libro que aborda la teoría del lenguaje y la gramática generativa.', 74),
(156, 'COTA062', 'La Aventura del Lenguaje', 'Ludwig Wittgenstein', 7, 'Disponible para su lectura y préstamo', 'Una obra filosófica que examina la naturaleza del lenguaje y su uso.', 75),
(157, 'COTA063', 'Estructuras Sintácticas', 'Noam Chomsky', 7, 'Disponible para su lectura y préstamo', 'Un libro fundamental en la lingüística generativa que explora la sintaxis.', 76),
(158, 'COTA064', 'El Lenguaje de las Flores', 'Kate Greenaway', 7, 'Disponible para su lectura y préstamo', 'Un libro ilustrado que explora el significado de las flores en el lenguaje.', 77),
(159, 'COTA065', 'Gramática Histórica del Español', 'Rafael Lapesa', 7, 'Disponible para su lectura y préstamo', 'Un libro que analiza la evolución histórica de la gramática del español.', 78),
(160, 'COTA066', 'Física para Científicos e Ingenieros', 'Paul A. Tipler', 8, 'Disponible para su lectura y préstamo', 'Un libro de texto esencial para la física en ciencias e ingeniería.', 78),
(161, 'COTA067', 'Cálculo', 'James Stewart', 8, 'Disponible para su lectura y préstamo', 'Un libro de cálculo que cubre temas esenciales en matemáticas.', 79),
(162, 'COTA068', 'Química', 'Raymond Chang', 8, 'Disponible para su lectura y préstamo', 'Un libro de química que aborda principios y conceptos fundamentales.', 80),
(163, 'COTA069', 'Biología', 'Neil A. Campbell', 8, 'Disponible para su lectura y préstamo', 'Un libro de biología que explora la diversidad y la ecología de la vida.', 81),
(164, 'COTA070', 'Álgebra Lineal', 'David C. Lay', 8, 'Disponible para su lectura y préstamo', 'Un libro que aborda conceptos de álgebra lineal y sus aplicaciones.', 82),
(165, 'COTA071', 'Física Moderna', 'Arthur Beiser', 8, 'Disponible para su lectura y préstamo', 'Un libro que cubre los avances en física moderna y teoría cuántica.', 83),
(166, 'COTA072', 'Cálculo Avanzado', 'Michael Spivak', 8, 'Disponible para su lectura y préstamo', 'Un libro avanzado de cálculo para estudiantes de matemáticas.', 84),
(167, 'COTA073', 'Química Orgánica', 'Paula Yurkanis Bruice', 8, 'Disponible para su lectura y préstamo', 'Un libro que aborda la química orgánica y sus aplicaciones.', 85),
(168, 'COTA074', 'Genética', 'Peter J. Russell', 8, 'Disponible para su lectura y préstamo', 'Un libro de genética que explora los principios de la herencia genética.', 86),
(169, 'COTA075', 'Mecánica Cuántica', 'Albert Messiah', 8, 'Disponible para su lectura y préstamo', 'Un libro avanzado que aborda la mecánica cuántica en física.', 87),
(170, 'COTA076', 'Cálculo Multivariable', 'James Stewart', 8, 'Disponible para su lectura y préstamo', 'Un libro que cubre el cálculo en múltiples variables y aplicaciones.', 88),
(171, 'COTA077', 'Química Inorgánica', 'Gary L. Miessler', 8, 'Disponible para su lectura y préstamo', 'Un libro de química inorgánica que aborda los compuestos inorgánicos.', 89),
(172, 'COTA078', 'Biología Celular', 'Bruce Alberts', 8, 'Disponible para su lectura y préstamo', 'Un libro de biología celular que explora la estructura y función de las células.', 90),
(173, 'COTA079', 'Electromagnetismo', 'David J. Griffiths', 8, 'Disponible para su lectura y préstamo', 'Un libro que aborda los conceptos de electromagnetismo en física.', 91),
(174, 'COTA080', 'Estadística', 'Robert S. Witte', 8, 'Disponible para su lectura y préstamo', 'Un libro de estadística que cubre técnicas y análisis estadísticos.', 92),
(175, 'COTA081', 'Introducción a la Ingeniería', 'Paul H. Wright', 10, 'Disponible para su lectura y préstamo', 'Un libro introductorio a los conceptos de la ingeniería y sus aplicaciones.', 94),
(176, 'COTA082', 'Programación en Java', 'Herbert Schildt', 10, 'Disponible para su lectura y préstamo', 'Un libro que enseña programación en Java, un lenguaje de programación ampliamente utilizado.', 95),
(177, 'COTA083', 'Diseño Gráfico Digital', 'David D. Busch', 10, 'Disponible para su lectura y préstamo', 'Un libro que explora las técnicas de diseño gráfico en el entorno digital.', 96),
(178, 'COTA084', 'Mecánica de Materiales', 'Russell C. Hibbeler', 10, 'Disponible para su lectura y préstamo', 'Un libro que aborda los principios de la mecánica de materiales en ingeniería.', 97),
(179, 'COTA085', 'Análisis de Circuitos Eléctricos', 'William H. Hayt', 10, 'Disponible para su lectura y préstamo', 'Un libro que explora el análisis de circuitos eléctricos y electrónicos.', 98),
(180, 'COTA086', 'Economía Empresarial', 'Paul Keat', 10, 'Disponible para su lectura y préstamo', 'Un libro que introduce los conceptos económicos aplicados a la gestión empresarial.', 99),
(181, 'COTA087', 'Desarrollo Web con HTML, CSS y JavaScript', 'Jon Duckett', 10, 'Disponible para su lectura y préstamo', 'Un libro que enseña el desarrollo web utilizando tecnologías fundamentales.', 100),
(182, 'COTA088', 'Diseño de Sistemas Digitales', 'Frank Vahid', 10, 'Disponible para su lectura y préstamo', 'Un libro que aborda el diseño de sistemas digitales y lógica digital.', 101),
(183, 'COTA089', 'Termodinámica', 'Cengel & Boles', 10, 'Disponible para su lectura y préstamo', 'Un libro que explora los principios de la termodinámica en ingeniería y ciencias aplicadas.', 102),
(184, 'COTA090', 'Marketing Estratégico', 'David W. Cravens', 10, 'Disponible para su lectura y préstamo', 'Un libro que analiza estrategias de marketing para empresas y organizaciones.', 103),
(185, 'COTA091', 'Historia del Arte', 'H.W. Janson', 11, 'Disponible para su lectura y préstamo', 'Un libro que recorre la historia del arte desde sus inicios hasta la actualidad.', 104),
(186, 'COTA092', 'El Principito', 'Antoine de Saint-Exupéry', 11, 'Disponible para su lectura y préstamo', 'Una obra clásica que explora temas de la infancia, la amistad y la imaginación.', 105),
(187, 'COTA093', 'El Gran Gatsby', 'F. Scott Fitzgerald', 11, 'Disponible para su lectura y préstamo', 'Una novela que retrata la vida y los excesos de la alta sociedad en los años 20.', 106),
(188, 'COTA094', 'Cien Años de Soledad', 'Gabriel García Márquez', 11, 'Disponible para su lectura y préstamo', 'Una obra maestra de la literatura que narra la historia de la familia Buendía en Macondo.', 107),
(189, 'COTA095', 'La Odisea', 'Homero', 11, 'Disponible para su lectura y préstamo', 'Un épico poema griego que relata las aventuras de Ulises en su viaje de regreso a casa.', 108),
(190, 'COTA096', 'El Gran Arte', 'Ernst Gombrich', 11, 'Disponible para su lectura y préstamo', 'Un libro que analiza la historia y los principios del arte a través de los siglos.', 109),
(191, 'COTA097', 'Música en el Cielo', 'Caryl Phillips', 11, 'Disponible para su lectura y préstamo', 'Una novela que explora la vida y la música de Johann Sebastian Bach.', 110),
(192, 'COTA098', 'Las Aventuras de Sherlock Holmes', 'Arthur Conan Doyle', 11, 'Disponible para su lectura y préstamo', 'Una colección de relatos protagonizados por el famoso detective Sherlock Holmes.', 111),
(193, 'COTA099', 'Poesía Completa', 'Pablo Neruda', 11, 'Disponible para su lectura y préstamo', 'Una recopilación de la poesía completa del destacado poeta chileno.', 112),
(194, 'COTA100', 'El Señor de los Anillos', 'J.R.R. Tolkien', 11, 'Disponible para su lectura y préstamo', 'Una épica trilogía de fantasía que narra la lucha contra el mal en la Tierra Media.', 113),
(195, 'COTA101', 'Historia Universal', 'César Cantú', 13, 'Disponible para su lectura y préstamo', 'Un libro que abarca la historia de la humanidad desde sus orígenes hasta la actualidad.', 105),
(196, 'COTA102', 'Geografía del Mundo', 'Peter Haggett', 13, 'Disponible para su lectura y préstamo', 'Un libro que explora la geografía de diferentes regiones y países en el mundo.', 106),
(197, 'COTA103', 'Historia de América Latina', 'Eduardo Galeano', 13, 'Disponible para su lectura y préstamo', 'Una obra que narra la historia de América Latina desde la época precolombina hasta el presente.', 107),
(198, 'COTA104', 'Atlas Mundial', 'Varios Autores', 13, 'Disponible para su lectura y préstamo', 'Un atlas que proporciona información detallada sobre la geografía de todo el mundo.', 108),
(199, 'COTA105', 'Historia de España', 'Arturo Pérez-Reverte', 13, 'Disponible para su lectura y préstamo', 'Un libro que recorre la historia de España desde los tiempos antiguos hasta la actualidad.', 109),
(200, 'COTA106', 'Geografía Económica', 'Paul Krugman', 13, 'Disponible para su lectura y préstamo', 'Un libro que explora la relación entre la geografía y la economía a nivel global.', 110),
(201, 'COTA107', 'Historia de Asia', 'Milton Osborne', 13, 'Disponible para su lectura y préstamo', 'Una obra que aborda la historia de Asia y sus civilizaciones a lo largo del tiempo.', 111),
(202, 'COTA108', 'Geografía Política', 'Yves Lacoste', 13, 'Disponible para su lectura y préstamo', 'Un libro que analiza las dimensiones políticas de la geografía en el mundo actual.', 112),
(203, 'COTA109', 'Historia Antigua', 'Donald Kagan', 13, 'Disponible para su lectura y préstamo', 'Un libro que se sumerge en la historia de las civilizaciones antiguas en diferentes partes del mundo.', 113),
(204, 'COTA110', 'Geografía Cultural', 'Mike Crang', 13, 'Disponible para su lectura y préstamo', 'Un libro que explora la relación entre la geografía y la cultura en diversas sociedades.', 114),
(205, 'COTA111', 'Antología de Cuentos Clásicos', 'Varios Autores', 1, 'Disponible para su lectura y préstamo', 'Una colección de cuentos clásicos de diversos autores de renombre.', 115),
(206, 'COTA112', 'Pensamientos', 'Marco Aurelio', 1, 'Disponible para su lectura y préstamo', 'Una recopilación de reflexiones y pensamientos del emperador romano Marco Aurelio.', 116),
(207, 'COTA113', 'Obras Completas', 'William Shakespeare', 1, 'Disponible para su lectura y préstamo', 'Una colección de obras completas del célebre dramaturgo inglés.', 117),
(208, 'COTA114', 'Cuentos Cortos', 'Edgar Allan Poe', 1, 'Disponible para su lectura y préstamo', 'Una selección de cuentos cortos del maestro del terror, Edgar Allan Poe.', 118),
(209, 'COTA115', 'Ensayos', 'Michel de Montaigne', 1, 'Disponible para su lectura y préstamo', 'Una recopilación de ensayos del filósofo renacentista Michel de Montaigne.', 119),
(210, 'COTA116', 'Poesía Selecta', 'Emily Dickinson', 1, 'Disponible para su lectura y préstamo', 'Una selección de poemas de la reconocida poetisa estadounidense Emily Dickinson.', 120),
(211, 'COTA117', 'Cuentos Fantásticos', 'Jorge Luis Borges', 1, 'Disponible para su lectura y préstamo', 'Una colección de cuentos que exploran lo fantástico y lo metafísico.', 121),
(212, 'COTA118', 'Diario de Ana Frank', 'Anne Frank', 1, 'Disponible para su lectura y préstamo', 'El conmovedor diario de Anne Frank, una niña judía durante la Segunda Guerra Mundial.', 122),
(213, 'COTA119', 'Obras Selectas', 'Friedrich Nietzsche', 1, 'Disponible para su lectura y préstamo', 'Una selección de obras filosóficas y literarias del filósofo Friedrich Nietzsche.', 123),
(214, 'COTA120', 'Antología de Poesía Moderna', 'Varios Autores', 1, 'Disponible para su lectura y préstamo', 'Una antología que reúne poesía de diversos autores modernos.', 124),
(215, 'COTA121', 'Recetas de la Cocina Venezolana', 'Varios Autores', 11, 'Disponible para su lectura y préstamo', 'Una colección de recetas tradicionales de la cocina venezolana.', 125),
(216, 'COTA122', 'Lugares Turísticos de Venezuela', 'Luis Alberto Crespo', 11, 'Disponible para su lectura y préstamo', 'Un libro que destaca los destinos turísticos más destacados de Venezuela.', 126),
(217, 'COTA123', 'Juegos y Tradiciones Venezolanas', 'Julio Ramos', 11, 'Disponible para su lectura y préstamo', 'Una obra que explora los juegos y las tradiciones populares de Venezuela.', 127),
(218, 'COTA124', 'Arte y Folklore Venezolano', 'Bárbara Landaeta', 11, 'Disponible para su lectura y préstamo', 'Un libro que analiza el arte y el folklore tradicional de Venezuela.', 128),
(219, 'COTA125', 'Música y Danzas Venezolanas', 'Hernán H. Álvarez', 11, 'Disponible para su lectura y préstamo', 'Una obra que presenta la música y las danzas tradicionales de Venezuela.', 129),
(220, 'COTA126', 'Cine Venezolano', 'Carlos Oteyza', 11, 'Disponible para su lectura y préstamo', 'Un libro que examina la historia y la evolución del cine en Venezuela.', 130),
(221, 'COTA127', 'Deportes y Atletas Venezolanos', 'Pedro Trapiello', 11, 'Disponible para su lectura y préstamo', 'Una obra que destaca los logros deportivos y atletas venezolanos.', 131),
(222, 'COTA128', 'Venezuela en Fotografías', 'Juan Crisóstomo Nieto', 11, 'Disponible para su lectura y préstamo', 'Un libro que muestra Venezuela a través de fotografías de diferentes épocas.', 132),
(223, 'COTA129', 'Carnavales y Festivales', 'Luis Pérez-Oramas', 11, 'Disponible para su lectura y préstamo', 'Una obra que celebra los carnavales y festivales de Venezuela.', 133);

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

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `news_image`
--

CREATE TABLE `news_image` (
  `id_new_image` int(11) NOT NULL,
  `url` text DEFAULT NULL,
  `id_new` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
(6, 1, 1);

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
  `pendiente` tinyint(1) NOT NULL COMMENT 'Estado actual del préstamo',
  `calificacion` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

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
(3, 'Bibliotecario', 5);

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
(1526, 7583, 'Srta. Luisa Arriaga Tercero', 'Farías', 13143530, 19, '+34 994-10-', 'Plaça Ángeles, 40, 5º E, 94295, Urías de Lemos', 'franco.mariaangeles@pedroza.com', 'Masculino', 'Ninguno', NULL, NULL, NULL, 1),
(1527, 6925, 'Joel Amaya', 'Gimeno', 26632017, 74, '964-714755', 'Paseo Sergio, 5, 3º E, 36635, L\' Sisneros', 'hbriones@salinas.com', 'Femenino', 'Ninguno', NULL, NULL, NULL, 1),
(1528, 5992, 'David Orosco', 'Paredes', 23861316, 10, '996642209', 'Plaça Roca, 482, 9º E, 58996, Ruiz del Penedès', 'jlaureano@huerta.com', 'Otros', 'Ninguno', NULL, NULL, NULL, 1),
(1529, 1193, 'Dr. Javier Puga', 'Puig', 29614083, 71, '+34 9954089', 'Ronda Ainhoa, 37, 0º E, 43253, Urías del Puerto', 'leyva.alexia@beltran.es', 'Otros', 'Ninguno', NULL, NULL, NULL, 1),
(1530, 7545, 'Sra. Vega Ledesma Segundo', 'Gurule', 32096190, 50, '930 52 5115', 'Carrer Tejada, 80, Bajos, 60593, Vicente del Pozo', 'vega.ros@live.com', 'Femenino', 'Ninguno', NULL, NULL, NULL, 1),
(1531, 1115, 'Jon Aponte', 'Feliciano', 29845088, 69, '934 948486', 'Calle Blanca, 344, 9º 3º, 26785, As Ibáñez del Vallès', 'yago.diez@live.com', 'Otros', 'Ninguno', NULL, NULL, NULL, 1),
(1532, 1098, 'Srta. Carolina Muñoz', 'Leyva', 27459713, 43, '+34 950-73-', 'Paseo Rueda, 79, Ático 3º, 27352, O Ruvalcaba del Pozo', 'nahia35@hispavista.com', 'Otros', 'Ninguno', NULL, NULL, NULL, 1),
(1533, 8743, 'Alexia Deleón', 'Carballo', 7652018, 78, '+34 985-636', 'Plaça Gallegos, 39, 9º, 10291, San Luis', 'fernando.alicea@mayorga.es', 'Masculino', 'Ninguno', NULL, NULL, NULL, 1),
(1534, 9087, 'Raquel Ulloa Tercero', 'Soler', 35476991, 66, '+34 951-336', 'Plaça Chacón, 7, 8º 6º, 84615, As Heredia de Lemos', 'navas.samuel@live.com', 'Femenino', 'Ninguno', NULL, NULL, NULL, 1),
(1535, 3664, 'Olivia Ocampo', 'Vigil', 10574009, 2, '+34 992-472', 'Passeig Valencia, 84, 3º F, 31078, O Pedraza', 'iker.luque@urrutia.com', 'Femenino', 'Ninguno', NULL, NULL, NULL, 1),
(1536, 8451, 'Ing. Miriam Bueno Segundo', 'Muñiz', 13358762, 52, '997 19 8268', 'Calle Francisco Javier, 88, 3º F, 10336, L\' Ibarra Baja', 'alberto10@terra.com', 'Otros', 'Ninguno', NULL, NULL, NULL, 1),
(1537, 3507, 'Patricia Cabán', 'Quiñónez', 39479044, 68, '+34 986-87-', 'Camiño Unai, 4, 76º 3º, 17893, O Heredia Alta', 'izan31@montanez.com', 'Femenino', 'Ninguno', NULL, NULL, NULL, 1),
(1538, 9824, 'Jorge Peláez Segundo', 'Gurule', 9008021, 8, '933-13-2319', 'Rúa Natalia, 4, 7º F, 88683, Rivero del Mirador', 'tsanchez@terra.com', 'Masculino', 'Ninguno', NULL, NULL, NULL, 1),
(1539, 1403, 'Diego Cervantes', 'Terán', 25642099, 3, '+34 909 924', 'Praza Antonio, 7, 7º E, 68985, Sola del Barco', 'bruno.maldonado@yahoo.com', 'Otros', 'Ninguno', NULL, NULL, NULL, 1),
(1540, 7657, 'Teresa Enríquez', 'Aguilera', 20288161, 53, '+34 957-185', 'Plaça Briones, 117, 81º A, 20452, Lucio del Vallès', 'sofia.munguia@terra.com', 'Otros', 'Ninguno', NULL, NULL, NULL, 1),
(1541, 9091, 'Leo Collado', 'Rico', 31181493, 66, '960 49 5259', 'Avenida Meléndez, 38, 9º 9º, 03135, Rincón de la Sierra', 'casas.naia@najera.com', 'Masculino', 'Ninguno', NULL, NULL, NULL, 1),
(1542, 5499, 'Lic. María Dolores Almaráz', 'Solorzano', 28635856, 32, '+34 948-993', 'Travesía Carlota, 17, 7º F, 52299, Los Ibarra del Vallès', 'santos.juana@rojo.es', 'Femenino', 'Ninguno', NULL, NULL, NULL, 1),
(1543, 5651, 'Samuel Noriega', 'Barraza', 12468703, 69, '+34 994-610', 'Travesía Pelayo, 66, 9º 8º, 68308, Narváez del Pozo', 'hector93@latinmail.com', 'Femenino', 'Ninguno', NULL, NULL, NULL, 1),
(1544, 3213, 'D. Unai Colunga', 'Bahena', 28637046, 10, '+34 907 38 ', 'Travessera Alonso, 69, 07º F, 47465, O Villareal', 'ipuga@hotmail.com', 'Femenino', 'Ninguno', NULL, NULL, NULL, 1),
(1545, 3848, 'Lic. Carlota Rueda', 'Cruz', 26945956, 36, '+34 953 63 ', 'Camiño Malak, 77, Bajo 0º, 31608, Orta de San Pedro', 'ypalacios@aguirre.es', 'Masculino', 'Ninguno', NULL, NULL, NULL, 1),
(1546, 3072, 'Leire Villagómez', 'Sáenz', 23017554, 60, '978-213510', 'Ruela Jaime, 96, 7º 5º, 13233, Gómez Baja', 'blanca.cornejo@live.com', 'Otros', 'Ninguno', NULL, NULL, NULL, 1),
(1547, 7584, 'Lic. Óscar Bahena Segundo', 'Bonilla', 38525150, 74, '+34 993-64-', 'Calle Aitana, 4, 8º 9º, 09136, Contreras Medio', 'serna.zoe@meraz.org', 'Otros', 'Ninguno', NULL, NULL, NULL, 1),
(1548, 1335, 'Biel Riera', 'Valentín', 10146749, 52, '970-569433', 'Passeig Soria, 236, 78º C, 19633, Hernádez del Pozo', 'jesus.gonzales@live.com', 'Otros', 'Ninguno', NULL, NULL, NULL, 1),
(1549, 7904, 'Dña Ona Preciado Tercero', 'Escudero', 28131281, 22, '+34 984 70 ', 'Passeig Martín, 5, 03º F, 22771, La Farías', 'francisco56@yahoo.com', 'Otros', 'Ninguno', NULL, NULL, NULL, 1),
(1550, 6825, 'Rafael Arellano', 'Cuenca', 10119779, 36, '+34 9940313', 'Avinguda Isaac, 83, 35º 7º, 01604, San Prieto', 'uparra@lazaro.com', 'Femenino', 'Ninguno', NULL, NULL, NULL, 1),
(1551, 5570, 'Paula Apodaca', 'Carvajal', 35127036, 41, '+34 905-530', 'Calle Raquel, 204, 8º D, 60133, Vall Saldaña Baja', 'alfaro.nayara@jimenez.es', 'Otros', 'Ninguno', NULL, NULL, NULL, 1),
(1552, 3913, 'Lic. Santiago Patiño', 'González', 14849592, 1, '933-664193', 'Praza Olivia, 3, 4º B, 58182, L\' Salcido Alta', 'emilia.ruelas@polo.es', 'Femenino', 'Ninguno', NULL, NULL, NULL, 1),
(1553, 8236, 'Andrea Vera', 'Curiel', 25041813, 64, '972 650304', 'Praza Mateo, 1, 0º D, 16825, Villa Villareal', 'lucero.mar@nino.com', 'Otros', 'Ninguno', NULL, NULL, NULL, 1),
(1554, 3404, 'Srta. Luisa Cornejo Tercero', 'Armijo', 17442928, 34, '946-29-0347', 'Passeig Isabel, 7, 6º B, 86848, Tafoya de las Torres', 'rascon.bruno@hotmail.com', 'Femenino', 'Ninguno', NULL, NULL, NULL, 1),
(1555, 1506, 'Víctor Ulloa', 'Escamilla', 21191593, 51, '910 024045', 'Paseo Medina, 49, 2º A, 59892, Villa Urías', 'roberto34@gastelum.es', 'Masculino', 'Ninguno', NULL, NULL, NULL, 1),
(1556, 1540, 'Marc Montoya Tercero', 'Aragón', 36892477, 24, '989222716', 'Rúa Lebrón, 853, Entre suelo 0º, 03699, Asensio del Mirador', 'pol.cotto@yahoo.es', 'Otros', 'Ninguno', NULL, NULL, NULL, 1),
(1557, 1101, 'Héctor Chávez Hijo', 'Peres', 31437201, 25, '+34 913-45-', 'Camiño Cortés, 9, 47º 3º, 52900, Marrero del Barco', 'hugo87@collado.com', 'Femenino', 'Ninguno', NULL, NULL, NULL, 1),
(1558, 2997, 'Gonzalo Valenzuela', 'Avilés', 37285949, 75, '+34 942-41-', 'Ruela Carlos, 5, 2º C, 48022, A Valdivia del Vallès', 'banuelos.jan@fernandez.net', 'Masculino', 'Ninguno', NULL, NULL, NULL, 1),
(1559, 5872, 'Ing. Lidia Puente', 'Casares', 14246574, 74, '985-21-4175', 'Avenida Muñiz, 187, 6º C, 93423, O Duarte del Mirador', 'malak36@palomo.es', 'Masculino', 'Ninguno', NULL, NULL, NULL, 1),
(1560, 3821, 'D. Jordi Amador', 'Roybal', 19941266, 39, '+34 976 837', 'Calle Cristian, 60, Bajos, 47351, Los Riojas', 'avalos.rodrigo@serrato.es', 'Masculino', 'Ninguno', NULL, NULL, NULL, 1),
(1561, 8206, 'Aurora González', 'Tamayo', 18253707, 32, '+34 912 452', 'Plaça Romero, 2, 45º C, 38505, Delrío Alta', 'torrez.omar@vigil.es', 'Femenino', 'Ninguno', NULL, NULL, NULL, 1),
(1562, 3739, 'Ing. Claudia Avilés Tercero', 'Bahena', 13663994, 5, '945 666916', 'Plaça Bruno, 855, 06º 7º, 94282, Font Alta', 'ysalcedo@hotmail.es', 'Femenino', 'Ninguno', NULL, NULL, NULL, 1),
(1563, 2328, 'Isabel Ballesteros', 'Marcos', 6302301, 22, '+34 974-381', 'Passeig María Ángeles, 738, 17º C, 83777, O Cuellar de Ulla', 'miguel.muro@cavazos.org', 'Masculino', 'Ninguno', NULL, NULL, NULL, 1),
(1564, 1718, 'José Antonio Armijo', 'Tapia', 33036972, 64, '968041222', 'Calle Lorente, 19, 4º F, 56077, Las Arredondo del Puerto', 'ncasanova@portillo.com', 'Femenino', 'Ninguno', NULL, NULL, NULL, 1),
(1565, 5709, 'D. Juan José Vázquez Tercero', 'Quintana', 10665310, 64, '+34 926 747', 'Ruela Esther, 482, 01º B, 44920, Cruz del Pozo', 'pcasanova@valles.com', 'Femenino', 'Ninguno', NULL, NULL, NULL, 1),
(1566, 4974, 'D. Fernando Lebrón Hijo', 'Rodrigo', 10105666, 73, '+34 970 644', 'Carrer Guajardo, 121, 9º C, 92385, Angulo del Bages', 'rincon.aitor@cordova.es', 'Masculino', 'Ninguno', NULL, NULL, NULL, 1),
(1567, 4356, 'Valentina Rosario', 'Roca', 12278702, 25, '+34 957 24 ', 'Carrer Sandra, 7, 78º C, 67902, Delgadillo del Mirador', 'mara33@arias.org', 'Masculino', 'Ninguno', NULL, NULL, NULL, 1),
(1568, 1834, 'Sra. Inmaculada Esquibel', 'Villalobos', 35642248, 67, '908-598943', 'Praza Lucas, 5, Entre suelo 5º, 92878, Oliva del Mirador', 'gserrato@hotmail.es', 'Otros', 'Ninguno', NULL, NULL, NULL, 1),
(1569, 2646, 'Alex Hinojosa Segundo', 'Orta', 29743073, 65, '900 41 9791', 'Avenida Clemente, 1, 71º E, 11659, Los Leyva', 'zbanda@live.com', 'Masculino', 'Ninguno', NULL, NULL, NULL, 1),
(1570, 5088, 'D. Samuel Naranjo', 'Amaya', 18196516, 45, '+34 9843448', 'Avinguda Yaiza, 39, 9º, 15244, A Posada', 'guerra.nadia@castellanos.org', 'Femenino', 'Ninguno', NULL, NULL, NULL, 1),
(1571, 4326, 'Dña Vega Sauceda Hijo', 'Brito', 7627403, 72, '920-29-3217', 'Travessera Valeria, 1, 1º A, 88484, Las Pastor', 'nunez.eduardo@maestas.com', 'Femenino', 'Ninguno', NULL, NULL, NULL, 1),
(1572, 3861, 'Lic. Rayan Castaño', 'Murillo', 22338111, 15, '+34 914 62 ', 'Calle Nazario, 423, 70º C, 21384, Carreón del Penedès', 'erik.armijo@live.com', 'Masculino', 'Ninguno', NULL, NULL, NULL, 1),
(1573, 6441, 'Ing. Álvaro Toledo Segundo', 'Fernández', 31404175, 7, '946 576528', 'Avinguda Gámez, 173, Ático 1º, 12873, Montez de Arriba', 'gonzalo31@renteria.org', 'Otros', 'Ninguno', NULL, NULL, NULL, 1),
(1574, 6268, 'Alejandra Saavedra', 'Abad', 19890355, 30, '962 53 3688', 'Ruela Díaz, 63, 9º, 17017, El Zambrano', 'manzano.biel@luna.org', 'Femenino', 'Ninguno', NULL, NULL, NULL, 1),
(1575, 5417, 'Victoria Gimeno', 'Sedillo', 26492720, 25, '+34 9808720', 'Avinguda Yago, 29, 63º E, 69112, L\' Puig', 'ruelas.pol@gmail.com', 'Otros', 'Ninguno', NULL, NULL, NULL, 1),
(1576, 5740, 'Hugo Bonilla', 'Mendoza', 10797772, 68, '905 833484', 'Calle Emilia, 6, Bajos, 79236, L\' Gallego de las Torres', 'anaisabel.aleman@latinmail.com', 'Femenino', 'Ninguno', NULL, NULL, NULL, 1),
(1577, 4725, 'Ing. África Henríquez Segundo', 'Canales', 24060817, 67, '+34 908 67 ', 'Ronda Ángela, 68, 79º 9º, 61387, O Villar del Puerto', 'dmontoya@gmail.com', 'Femenino', 'Ninguno', NULL, NULL, NULL, 1),
(1578, 7862, 'Roberto Luevano', 'Leiva', 26688388, 58, '+34 954 295', 'Ruela Anaya, 555, Entre suelo 7º, 99998, O Olivo de Arriba', 'ontiveros.gonzalo@hispavista.com', 'Otros', 'Ninguno', NULL, NULL, NULL, 1),
(1579, 5843, 'Dr. Ángeles Vaca Segundo', 'Ávalos', 12852874, 33, '968 37 2025', 'Travessera Javier, 796, 1º D, 05817, L\' Juárez de las Torres', 'nlozano@live.com', 'Otros', 'Ninguno', NULL, NULL, NULL, 1),
(1580, 6664, 'Eric Puig', 'Trujillo', 11606184, 31, '986-467626', 'Plaza Morales, 87, 10º E, 64452, Las Aguilar del Barco', 'martina.duran@live.com', 'Otros', 'Ninguno', NULL, NULL, NULL, 1),
(1581, 6926, 'Hugo Rojo', 'Arteaga', 21210877, 41, '+34 912-46-', 'Calle Vaca, 975, Bajos, 07355, Las Lucio', 'nerea78@sarabia.com.es', 'Femenino', 'Ninguno', NULL, NULL, NULL, 1),
(1582, 5196, 'Ismael Laureano', 'Calvillo', 36529364, 16, '954-70-2401', 'Carrer Manuel, 18, 65º 9º, 46049, As Regalado del Vallès', 'maria.martos@yahoo.com', 'Otros', 'Ninguno', NULL, NULL, NULL, 1),
(1583, 8094, 'Antonia Abreu', 'Pulido', 29568468, 11, '924-270165', 'Travessera Irene, 9, 3º C, 96212, Pedroza del Bages', 'qsimon@terra.com', 'Otros', 'Ninguno', NULL, NULL, NULL, 1),
(1584, 3572, 'Claudia Galván', 'Echevarría', 8332097, 1, '+34 9292711', 'Avenida Roig, 9, 7º, 30651, Escudero de Arriba', 'izan69@yahoo.com', 'Masculino', 'Ninguno', NULL, NULL, NULL, 1),
(1585, 9063, 'Aitor Ontiveros', 'Cuevas', 34219856, 2, '979211732', 'Plaça Sanabria, 2, 6º E, 34586, San Ledesma', 'unai.caban@cano.org', 'Masculino', 'Ninguno', NULL, NULL, NULL, 1),
(1586, 1793, 'Ing. Aitor Vega Tercero', 'Lerma', 16540936, 14, '964574039', 'Calle Sofía, 163, Bajos, 17651, A Carrión Baja', 'isabel.alcala@quintana.org', 'Masculino', 'Ninguno', NULL, NULL, NULL, 1),
(1587, 1628, 'Nahia Portillo', 'Santacruz', 17588709, 51, '923 39 2456', 'Plaça Erik, 14, Entre suelo 3º, 20300, Villa Escobar', 'mbustamante@vanegas.com.es', 'Femenino', 'Ninguno', NULL, NULL, NULL, 1),
(1588, 2732, 'Lucas Rascón', 'Huerta', 31794060, 68, '+34 904 45 ', 'Avinguda José Antonio, 6, 63º C, 23302, Los Ontiveros Alta', 'rochoa@hotmail.es', 'Masculino', 'Ninguno', NULL, NULL, NULL, 1),
(1589, 7833, 'Srta. Clara Llorente Hijo', 'Lerma', 26385864, 55, '+34 9586808', 'Camiño Ramos, 932, 3º D, 63198, La Lorente', 'joel98@gmail.com', 'Masculino', 'Ninguno', NULL, NULL, NULL, 1),
(1590, 1791, 'Naia Ojeda', 'Campos', 21852717, 12, '+34 934-550', 'Carrer Carmen, 83, 7º E, 00711, Los Ulibarri', 'angeles.lerma@paez.com', 'Otros', 'Ninguno', NULL, NULL, NULL, 1),
(1591, 5730, 'Clara Tapia Hijo', 'Benavídez', 24116932, 69, '986-36-6153', 'Plaça Erik, 58, 3º, 69792, Vall Maestas de la Sierra', 'sofia27@hotmail.es', 'Femenino', 'Ninguno', NULL, NULL, NULL, 1),
(1592, 2510, 'Claudia Olivo', 'Lucas', 22826886, 63, '910512234', 'Passeig Pagan, 4, 6º C, 55145, San Montoya del Mirador', 'csalcedo@terra.com', 'Otros', 'Ninguno', NULL, NULL, NULL, 1),
(1593, 8004, 'Úrsula Palomo', 'Cuesta', 23486013, 70, '936 026558', 'Plaza Raquel, 4, 62º F, 04474, As Polo', 'uexposito@herrera.es', 'Femenino', 'Ninguno', NULL, NULL, NULL, 1),
(1594, 7919, 'Lic. Claudia Villarreal', 'Delatorre', 25057772, 49, '934675111', 'Avinguda Jordi, 48, 3º F, 42604, Galarza del Vallès', 'vega99@hotmail.com', 'Femenino', 'Ninguno', NULL, NULL, NULL, 1),
(1595, 6534, 'Mar Ortega', 'Duran', 9235537, 39, '+34 962 33 ', 'Rúa Pol, 5, 4º 3º, 35717, As Sarabia', 'parmenta@yahoo.es', 'Masculino', 'Ninguno', NULL, NULL, NULL, 1),
(1596, 1128, 'Diego Urías', 'Amador', 10608927, 31, '937376510', 'Travesía Javier, 7, 34º A, 43359, Os Tejeda del Mirador', 'arribas.erik@beltran.es', 'Masculino', 'Ninguno', NULL, NULL, NULL, 1),
(1597, 2285, 'Leo López', 'Tapia', 10732376, 26, '993-37-1397', 'Avinguda Gloria, 1, 7º 9º, 94844, Anaya de Arriba', 'juana28@hotmail.es', 'Masculino', 'Ninguno', NULL, NULL, NULL, 1),
(1598, 6134, 'Sra. Lidia Anaya', 'Santillán', 27618788, 60, '+34 938-018', 'Plaça Villegas, 3, Bajo 2º, 06590, Los Redondo', 'noriega.diego@hotmail.es', 'Masculino', 'Ninguno', NULL, NULL, NULL, 1),
(1599, 3799, 'Raúl Fajardo', 'Costa', 28024673, 7, '+34 999 37 ', 'Carrer Alvarado, 44, 41º D, 23493, L\' Salazar de San Pedro', 'alimon@hispavista.com', 'Masculino', 'Ninguno', NULL, NULL, NULL, 1),
(1600, 4851, 'Nora Carbonell', 'López', 9047979, 16, '+34 9217593', 'Calle Gonzalo, 16, 7º D, 09894, Vall Rolón del Bages', 'alucas@mata.es', 'Masculino', 'Ninguno', NULL, NULL, NULL, 1),
(1601, 7654, 'Ing. Marco Antón Segundo', 'Miranda', 36392721, 23, '+34 907 048', 'Rúa Pablo, 158, 42º 2º, 45629, Las Badillo de Arriba', 'pnava@yahoo.com', 'Masculino', 'Ninguno', NULL, NULL, NULL, 1),
(1602, 2405, 'Emilia Trujillo', 'León', 28539231, 35, '+34 935-92-', 'Ruela María Pilar, 12, Bajo 5º, 72229, A Martí del Pozo', 'dcarreon@yahoo.es', 'Otros', 'Ninguno', NULL, NULL, NULL, 1),
(1603, 5706, 'Paola Patiño', 'Cordero', 26305642, 8, '991-54-0520', 'Calle Roybal, 9, 46º E, 08066, Os Robledo', 'yolanda.mendez@yahoo.es', 'Otros', 'Ninguno', NULL, NULL, NULL, 1),
(1604, 2872, 'Srta. Malak Urías Tercero', 'Godoy', 30077224, 39, '901-02-5007', 'Camino Sáenz, 87, 73º 0º, 96585, Casado de la Sierra', 'nil.cantu@yahoo.es', 'Femenino', 'Ninguno', NULL, NULL, NULL, 1),
(1605, 6329, 'Ian Ureña', 'Apodaca', 20623519, 27, '+34 9689204', 'Passeig Zamudio, 74, 6º E, 03042, Montañez de San Pedro', 'enrique15@caraballo.com', 'Otros', 'Ninguno', NULL, NULL, NULL, 1),
(1606, 1962, 'Santiago Carrillo', 'Colunga', 9016694, 21, '+34 950 41 ', 'Ronda Alex, 59, Bajos, 09898, Villarreal del Vallès', 'razo.lucas@hispavista.com', 'Femenino', 'Ninguno', NULL, NULL, NULL, 1),
(1607, 8855, 'Cristian Henríquez', 'Roca', 37617889, 8, '+34 989 33 ', 'Passeig Álvaro, 1, Bajo 0º, 01333, San Ponce de Arriba', 'veronica45@hispavista.com', 'Otros', 'Ninguno', NULL, NULL, NULL, 1),
(1608, 5866, 'Miguel Ángel Atencio', 'Martínez', 28363446, 67, '920 799906', 'Travesía Ainara, 61, 21º C, 96880, Os Sevilla', 'daniel.barroso@guajardo.es', 'Otros', 'Ninguno', NULL, NULL, NULL, 1),
(1609, 3246, 'Mateo Cisneros', 'Escalante', 11239337, 52, '907297418', 'Carrer Erik, 167, 3º C, 10999, Haro de la Sierra', 'noa.villagomez@hotmail.com', 'Otros', 'Ninguno', NULL, NULL, NULL, 1),
(1610, 2399, 'Jordi Valles', 'Casado', 33400040, 1, '959-254017', 'Carrer Ordoñez, 4, 72º C, 26216, Casárez de Ulla', 'tejeda.oscar@yahoo.com', 'Masculino', 'Ninguno', NULL, NULL, NULL, 1),
(1611, 5756, 'Óscar Crespo', 'Aguayo', 18115588, 42, '+34 914 40 ', 'Ronda Baca, 603, 8º F, 73126, A Domingo', 'eelizondo@terra.com', 'Masculino', 'Ninguno', NULL, NULL, NULL, 1),
(1612, 8092, 'D. Adam Ibáñez', 'Escamilla', 36681258, 61, '+34 953-31-', 'Camino Rosario, 344, 8º B, 32876, Salinas del Vallès', 'noelia.carballo@bermejo.net', 'Femenino', 'Ninguno', NULL, NULL, NULL, 1),
(1613, 8145, 'D. Asier Zepeda', 'Acuña', 19335450, 1, '+34 906-80-', 'Plaça Garrido, 172, 06º F, 48882, A Cornejo del Vallès', 'erik56@avalos.es', 'Masculino', 'Ninguno', NULL, NULL, NULL, 1),
(1614, 9233, 'Yeray Olvera Tercero', 'Vargas', 34207625, 32, '+34 9480351', 'Avenida Chapa, 47, 87º A, 78431, As Díaz de la Sierra', 'adelacruz@munoz.es', 'Masculino', 'Ninguno', NULL, NULL, NULL, 1),
(1615, 7450, 'Celia Rolón', 'Cordero', 16965795, 67, '912 272669', 'Ruela Rosa, 98, 9º, 12531, Los Romo Alta', 'lira.valentina@hotmail.com', 'Femenino', 'Ninguno', NULL, NULL, NULL, 1),
(1616, 6050, 'Francisco Deleón', 'Cortés', 8787470, 14, '+34 921-141', 'Passeig Nil, 93, 2º A, 71251, O Lebrón', 'amparo.marquez@latinmail.com', 'Masculino', 'Ninguno', NULL, NULL, NULL, 1),
(1617, 5195, 'Jaime Mota Tercero', 'Benavídez', 29424748, 52, '+34 932-931', 'Camino Arguello, 36, Entre suelo 2º, 16220, Olivares del Vallès', 'adriana.carrero@hispavista.com', 'Otros', 'Ninguno', NULL, NULL, NULL, 1),
(1618, 7855, 'Lic. Jordi Mojica', 'Aragón', 25168078, 42, '+34 914 030', 'Plaça Griego, 2, 0º B, 12136, Villa Romo Alta', 'andrea51@hotmail.com', 'Femenino', 'Ninguno', NULL, NULL, NULL, 1),
(1619, 4159, 'Andrés Toro', 'Contreras', 23380657, 58, '+34 969-93-', 'Camiño Posada, 9, Entre suelo 0º, 28945, L\' Iglesias del Vallès', 'mara21@hotmail.es', 'Femenino', 'Ninguno', NULL, NULL, NULL, 1),
(1620, 4796, 'Ian Alarcón', 'Benavídez', 22043709, 65, '914-327919', 'Avinguda Aurora, 37, 1º D, 83361, Villa Otero', 'calvo.hector@hotmail.com', 'Femenino', 'Ninguno', NULL, NULL, NULL, 1),
(1621, 5914, 'María Pilar Ortega Tercero', 'Muñiz', 13488617, 28, '+34 935-60-', 'Travessera Sepúlveda, 61, Bajos, 15341, A Valdez', 'elena.chacon@domingo.net', 'Masculino', 'Ninguno', NULL, NULL, NULL, 1),
(1622, 7562, 'Ing. Erik Requena', 'Echevarría', 38354237, 13, '+34 964-534', 'Rúa Heredia, 86, 90º 1º, 61838, Sisneros de la Sierra', 'ainara.crespo@hotmail.es', 'Masculino', 'Ninguno', NULL, NULL, NULL, 1),
(1623, 9966, 'Marina Bermejo', 'Villaseñor', 29250336, 14, '920-86-9718', 'Praza Javier, 146, 98º D, 64869, Zepeda de las Torres', 'manuela46@live.com', 'Otros', 'Ninguno', NULL, NULL, NULL, 1),
(1624, 1465, 'Dr. Ana María Sáenz Hijo', 'Velasco', 27667455, 31, '992824351', 'Plaza Alemán, 3, 9º, 20587, O Ballesteros', 'javier.cruz@rojo.com', 'Otros', 'Ninguno', NULL, NULL, NULL, 1),
(1625, 9295, 'Daniel Alfonso', 'Antón', 18593718, 31, '941 224506', 'Ronda Abreu, 749, 59º B, 36801, Las Flores de la Sierra', 'ksauceda@pons.org', 'Otros', 'Ninguno', NULL, NULL, NULL, 1),
(1626, 1456, 'Aina Rivera Tercero', 'Jurado', 32874053, 18, '922074137', 'Travesía Celia, 99, 1º A, 04723, Os Montañez Alta', 'pilar.duran@alarcon.es', 'Otros', 'Ninguno', NULL, NULL, NULL, 1),
(1627, 8736, 'Olga Serrato', 'Concepción', 28649016, 21, '916 501491', 'Travesía Plaza, 9, Bajo 1º, 90043, San Robledo', 'aitana.lucio@franco.org', 'Masculino', 'Ninguno', NULL, NULL, NULL, 1),
(1628, 1636, 'Ian Rodríguez Hijo', 'Salazar', 21507507, 74, '+34 988 342', 'Travesía Vera, 61, 14º F, 06536, Las Galindo del Bages', 'carretero.naia@arredondo.es', 'Femenino', 'Ninguno', NULL, NULL, NULL, 1),
(1629, 6673, 'Dña Alicia Pantoja Hijo', 'Torres', 22300098, 34, '921315352', 'Plaça Carretero, 380, 7º, 51422, Loya del Bages', 'opuig@gmail.com', 'Masculino', 'Ninguno', NULL, NULL, NULL, 1),
(1630, 1370, 'Nicolás Pelayo', 'Olivo', 32349463, 67, '924 131273', 'Travessera Encarnación, 272, 9º, 99587, Villa Limón', 'nino.ainhoa@latinmail.com', 'Otros', 'Ninguno', NULL, NULL, NULL, 1),
(1631, 8362, 'Dña Adriana Aragón Tercero', 'Henríquez', 29579287, 33, '927-55-0132', 'Avenida Ocasio, 357, 96º 2º, 65081, El Chávez', 'carlos.anguiano@latinmail.com', 'Femenino', 'Ninguno', NULL, NULL, NULL, 1),
(1632, 1066, 'Dr. Francisco Javier Costa', 'Colunga', 36345151, 17, '+34 916-470', 'Rúa Macias, 8, 2º C, 89932, El Ríos', 'lucio.juan@loya.es', 'Masculino', 'Ninguno', NULL, NULL, NULL, 1),
(1633, 8763, 'Luna Yáñez', 'Tirado', 9609728, 57, '+34 9996153', 'Plaza Eva, 87, 6º 4º, 67575, El Roybal Alta', 'eric21@urbina.com', 'Femenino', 'Ninguno', NULL, NULL, NULL, 1),
(1634, 8972, 'Nora Zarate', 'Alicea', 10466662, 78, '981-44-5900', 'Travessera Francisco, 2, 30º A, 06847, L\' Laureano', 'zoe.medrano@romero.com', 'Masculino', 'Ninguno', NULL, NULL, NULL, 1),
(1635, 3686, 'Alma Iglesias', 'Mascareñas', 26248825, 13, '921 730034', 'Camiño Franco, 4, 2º A, 53369, Tovar del Penedès', 'nnajera@hotmail.com', 'Otros', 'Ninguno', NULL, NULL, NULL, 1),
(1636, 5715, 'Biel Frías', 'Ruíz', 36843959, 15, '943 10 3004', 'Praza Úrsula, 932, 08º A, 16148, A Castillo de Ulla', 'miguelangel.valenzuela@garibay.com', 'Femenino', 'Ninguno', NULL, NULL, NULL, 1),
(1637, 7488, 'Francisco Javier Cornejo Hijo', 'Escalante', 11171399, 38, '905-106921', 'Ronda Ponce, 375, 12º E, 13090, Los Prado de San Pedro', 'bnino@yahoo.es', 'Femenino', 'Ninguno', NULL, NULL, NULL, 1),
(1638, 9529, 'Marc Gallardo', 'Quintero', 25344963, 5, '982-26-3945', 'Calle Ríos, 2, Bajos, 46899, Vall Delarosa', 'mmurillo@latinmail.com', 'Otros', 'Ninguno', NULL, NULL, NULL, 1),
(1639, 4997, 'Verónica De la Fuente', 'Rivero', 8516014, 51, '+34 906-12-', 'Praza Mara, 9, Entre suelo 1º, 25473, O Vásquez del Mirador', 'salcedo.ines@live.com', 'Masculino', 'Ninguno', NULL, NULL, NULL, 1),
(1640, 9344, 'Pedro Dávila', 'Noriega', 9200764, 54, '930505806', 'Rúa Campos, 701, 2º C, 98443, Rascón del Vallès', 'javier.guevara@bueno.com', 'Masculino', 'Ninguno', NULL, NULL, NULL, 1),
(1641, 2323, 'Raúl Grijalva Hijo', 'Hidalgo', 16134289, 28, '925-40-1638', 'Plaza Barrios, 870, Entre suelo 0º, 17655, Os Ornelas de Arriba', 'tvalverde@macias.org', 'Otros', 'Ninguno', NULL, NULL, NULL, 1),
(1642, 3672, 'Sergio Villarreal', 'Montez', 14595943, 36, '+34 981 71 ', 'Camiño Domínquez, 642, 3º E, 16493, Bermejo de Ulla', 'antonio.ozuna@latinmail.com', 'Masculino', 'Ninguno', NULL, NULL, NULL, 1),
(1643, 9359, 'Josefa Valle', 'Casado', 25843637, 74, '903232577', 'Plaza Encarnación, 9, 22º F, 07556, Los Roldán Alta', 'elsa36@yahoo.com', 'Otros', 'Ninguno', NULL, NULL, NULL, 1),
(1644, 9795, 'Lic. José Manuel Puente', 'Puig', 6721894, 69, '948-41-4136', 'Plaza Murillo, 77, Ático 2º, 50616, Vall Bermúdez del Pozo', 'irene.puig@zarate.es', 'Otros', 'Ninguno', NULL, NULL, NULL, 1),
(1645, 9752, 'Fátima Villaseñor Hijo', 'Tapia', 25707979, 34, '+34 928-099', 'Travesía Cabrera, 15, 35º B, 63290, Alva del Bages', 'arribas.olivia@paez.net', 'Masculino', 'Ninguno', NULL, NULL, NULL, 1),
(1646, 3405, 'Dr. Alejandro Terrazas', 'Castillo', 38281095, 4, '973-933270', 'Plaza María Dolores, 2, 29º F, 21935, Robles del Pozo', 'ana.angulo@botello.es', 'Femenino', 'Ninguno', NULL, NULL, NULL, 1),
(1647, 4830, 'Srta. Inmaculada Rosales Segundo', 'Almaráz', 13802146, 75, '988783854', 'Passeig Meza, 7, 0º D, 37228, As Saavedra', 'bonilla.raul@gmail.com', 'Femenino', 'Ninguno', NULL, NULL, NULL, 1),
(1648, 9601, 'Ing. Daniela Concepción Segundo', 'Calvo', 25204468, 66, '937 59 3966', 'Calle Arellano, 59, 44º F, 14059, Vall Moreno', 'dleal@aviles.org', 'Masculino', 'Ninguno', NULL, NULL, NULL, 1),
(1649, 9158, 'Iker Palomino', 'Serrano', 25671142, 44, '+34 9440017', 'Rúa Villanueva, 70, 82º E, 76269, Los Esparza', 'yamaya@live.com', 'Otros', 'Ninguno', NULL, NULL, NULL, 1),
(1650, 7182, 'D. Andrés Garay', 'Rubio', 36747936, 10, '+34 980-162', 'Avenida Montez, 631, Bajos, 33817, San Caldera', 'jmartos@villegas.es', 'Femenino', 'Ninguno', NULL, NULL, NULL, 1),
(1651, 7631, 'Nadia Nava', 'Chávez', 12735422, 13, '+34 9934245', 'Ruela Montaño, 179, 89º 3º, 85310, Castaño del Puerto', 'ndelarosa@martin.com', 'Otros', 'Ninguno', NULL, NULL, NULL, 1),
(1652, 4789, 'Ismael Lugo', 'Pardo', 29502385, 68, '949-102920', 'Praza Nayara, 1, Bajos, 29115, Villa Barrios', 'guillermo.barela@hotmail.es', 'Femenino', 'Ninguno', NULL, NULL, NULL, 1),
(1653, 7044, 'Óscar Casado', 'Delapaz', 28202938, 58, '+34 938 77 ', 'Rúa Valentina, 115, 83º E, 60994, Los Costa del Vallès', 'ursula75@trejo.net', 'Femenino', 'Ninguno', NULL, NULL, NULL, 1),
(1654, 5173, 'Jaime Soto', 'Correa', 17964493, 59, '999 80 8102', 'Praza Córdoba, 167, 0º D, 46720, O Jurado de San Pedro', 'bahena.carmen@yahoo.com', 'Otros', 'Ninguno', NULL, NULL, NULL, 1),
(1655, 7419, 'Silvia Cabello', 'Villanueva', 13914320, 31, '987-771726', 'Rúa Francisco, 95, 47º E, 43825, Aguado de Arriba', 'oriol39@hotmail.es', 'Masculino', 'Ninguno', NULL, NULL, NULL, 1),
(1656, 4729, 'Dr. Carolina Juan', 'Gastélum', 13855608, 19, '+34 941 916', 'Rúa Avilés, 35, 9º F, 04599, Zapata de las Torres', 'madrigal.marco@cordoba.es', 'Masculino', 'Ninguno', NULL, NULL, NULL, 1),
(1657, 4648, 'María Roldán', 'Mireles', 26292378, 7, '+34 9226585', 'Ronda Enrique, 4, 5º F, 76504, L\' Mejía Alta', 'cristina94@quintanilla.com', 'Otros', 'Ninguno', NULL, NULL, NULL, 1),
(1658, 5812, 'Unai Jurado', 'Pozo', 10794011, 26, '+34 925-695', 'Passeig Saldivar, 842, 0º C, 36679, Flórez del Bages', 'lovato.luis@hispavista.com', 'Femenino', 'Ninguno', NULL, NULL, NULL, 1),
(1659, 9144, 'Nahia Alba Hijo', 'Cazares', 39926081, 71, '957 491468', 'Calle Naiara, 9, Bajos, 09549, Los Gutiérrez', 'roberto.escobar@reyna.com', 'Masculino', 'Ninguno', NULL, NULL, NULL, 1),
(1660, 6347, 'Dr. María Ángeles Colón Tercero', 'Sepúlveda', 26887889, 32, '+34 947-44-', 'Avenida Esteban, 27, 86º C, 85466, As Caraballo del Penedès', 'asier.merino@dominguez.es', 'Femenino', 'Ninguno', NULL, NULL, NULL, 1),
(1661, 6039, 'Raúl Heredia', 'Guevara', 23022756, 38, '+34 989-007', 'Plaza Nájera, 2, 79º 8º, 86844, Aponte del Pozo', 'teresa.nino@betancourt.com', 'Otros', 'Ninguno', NULL, NULL, NULL, 1),
(1662, 4716, 'Rocío Huerta', 'Alfaro', 33308160, 21, '906-843515', 'Plaça María, 7, 5º D, 47525, Villa Báez', 'abreu.rosamaria@hotmail.com', 'Masculino', 'Ninguno', NULL, NULL, NULL, 1),
(1663, 8901, 'Sandra Balderas Hijo', 'Rangel', 28191146, 15, '+34 906 887', 'Camino Juana, 2, 2º A, 53475, Cárdenas del Bages', 'tlongoria@verdugo.com.es', 'Masculino', 'Ninguno', NULL, NULL, NULL, 1),
(1664, 7223, 'Dr. África Cantú Tercero', 'Berríos', 14173083, 7, '902-06-5828', 'Praza Orellana, 10, 39º F, 09532, Becerra Baja', 'claudia.valenzuela@corral.org', 'Otros', 'Ninguno', NULL, NULL, NULL, 1),
(1665, 3416, 'Daniel Montaño', 'Avilés', 30313383, 1, '981-703738', 'Ronda Héctor, 172, Bajos, 92778, Villa Tapia', 'pelaez.roberto@gmail.com', 'Otros', 'Ninguno', NULL, NULL, NULL, 1),
(1666, 1129, 'Asier Villalpando Hijo', 'Piñeiro', 28646042, 24, '+34 970-57-', 'Calle Mar, 26, 39º D, 41767, As Santillán', 'ayala.diego@ruvalcaba.es', 'Masculino', 'Ninguno', NULL, NULL, NULL, 1),
(1667, 7311, 'Ing. Encarnación Bahena', 'Godoy', 19308998, 1, '946364525', 'Carrer Julia, 3, 3º A, 88203, San Valverde', 'ian01@alejandro.com', 'Masculino', 'Ninguno', NULL, NULL, NULL, 1),
(1668, 7602, 'Ignacio Negrete', 'Casárez', 19862212, 55, '+34 932 404', 'Praza Acevedo, 582, 18º A, 00936, L\' Delarosa', 'anamaria48@guevara.com', 'Femenino', 'Ninguno', NULL, NULL, NULL, 1),
(1669, 6373, 'Ander Laboy', 'Quiñónez', 27159202, 16, '972406897', 'Avinguda Rubén, 246, Bajo 6º, 86714, Leal de San Pedro', 'cesar86@live.com', 'Femenino', 'Ninguno', NULL, NULL, NULL, 1),
(1670, 9716, 'Lic. Erik Olivera Segundo', 'Lucero', 17365069, 48, '949173538', 'Carrer Arribas, 2, 7º F, 72663, Vall Carbonell del Vallès', 'leo.sanabria@marti.com.es', 'Otros', 'Ninguno', NULL, NULL, NULL, 1),
(1671, 3918, 'Elena Arce', 'Pagan', 13873262, 26, '+34 910 649', 'Travessera Rodríquez, 8, 4º D, 79629, As Montez', 'ander45@lorente.com', 'Otros', 'Ninguno', NULL, NULL, NULL, 1),
(1672, 8027, 'Olga Menchaca', 'Caballero', 19497050, 50, '+34 909-68-', 'Rúa Rosa, 60, 2º 1º, 49532, A Rodríquez de Ulla', 'inmaculada20@yahoo.es', 'Otros', 'Ninguno', NULL, NULL, NULL, 1),
(1673, 1557, 'Alicia Carrasco Tercero', 'Solano', 9315446, 33, '+34 9361616', 'Praza Berta, 894, 3º, 15534, Vela del Bages', 'kcortes@martos.es', 'Otros', 'Ninguno', NULL, NULL, NULL, 1),
(1674, 9422, 'Srta. Julia Botello Segundo', 'Trejo', 17509529, 7, '946-59-0886', 'Calle María, 18, 9º E, 76704, L\' Alvarado de Ulla', 'patricia.ceballos@yahoo.com', 'Femenino', 'Ninguno', NULL, NULL, NULL, 1),
(1675, 8202, 'Biel Leal', 'Espino', 33592569, 16, '+34 950-21-', 'Carrer Arriaga, 362, Bajos, 91676, Villa Arenas', 'celia89@jaimes.es', 'Otros', 'Ninguno', NULL, NULL, NULL, 1),
(1676, 7042, 'Miguel Navarro', 'Arroyo', 20954070, 46, '966-663297', 'Praza Rosa María, 86, Bajos, 43933, Ceja del Pozo', 'ian77@live.com', 'Otros', 'Ninguno', NULL, NULL, NULL, 1),
(1677, 6354, 'Ian Mesa', 'Rivero', 33382631, 52, '934 816875', 'Passeig Raúl, 5, 44º 0º, 37202, San Castaño', 'francisco.sarabia@yahoo.es', 'Masculino', 'Ninguno', NULL, NULL, NULL, 1),
(1678, 4592, 'Dr. Guillem Ybarra', 'Duarte', 23219381, 8, '946-349670', 'Avinguda Orta, 73, 02º D, 29417, La Aguayo del Bages', 'lemus.ander@calvillo.es', 'Femenino', 'Ninguno', NULL, NULL, NULL, 1),
(1679, 7606, 'Erik Cabello', 'Suárez', 36977134, 54, '921210652', 'Plaça Macias, 5, 71º B, 59891, Leal de la Sierra', 'parteaga@yahoo.com', 'Masculino', 'Ninguno', NULL, NULL, NULL, 1),
(1680, 5613, 'Dr. Mateo Olivas Tercero', 'Rivero', 27523077, 29, '987617541', 'Camino Bermejo, 26, 3º 9º, 07857, Rodarte de Ulla', 'jgarrido@gmail.com', 'Masculino', 'Ninguno', NULL, NULL, NULL, 1),
(1681, 5867, 'Ariadna Longoria Tercero', 'Ocampo', 33750214, 3, '+34 956 209', 'Avenida Alexandra, 79, 5º E, 42550, El Delatorre', 'herrera.sergio@jasso.com.es', 'Otros', 'Ninguno', NULL, NULL, NULL, 1),
(1682, 2990, 'Alejandro Carrera Tercero', 'Gracia', 10008512, 74, '+34 9937295', 'Travessera Juan, 956, 77º A, 44998, Los Soriano', 'david56@hotmail.es', 'Otros', 'Ninguno', NULL, NULL, NULL, 1),
(1683, 4251, 'Bruno Vallejo', 'Castellanos', 20237582, 13, '+34 972-82-', 'Camiño Vaca, 219, 6º, 72340, Villa Rojas', 'hugo.lazaro@rosales.es', 'Otros', 'Ninguno', NULL, NULL, NULL, 1),
(1684, 4163, 'Dr. Mireia Lorenzo Tercero', 'Badillo', 28422167, 70, '994 44 9961', 'Calle Iglesias, 460, 36º B, 08629, As Vallejo de Ulla', 'valle.unai@hispavista.com', 'Femenino', 'Ninguno', NULL, NULL, NULL, 1),
(1685, 8625, 'Jan Estévez', 'Verduzco', 7940457, 6, '977-61-0071', 'Rúa Miguel, 222, 67º A, 12160, Villa Girón', 'nerea79@gmail.com', 'Femenino', 'Ninguno', NULL, NULL, NULL, 1),
(1686, 6579, 'Encarnación Ávila', 'Ávalos', 17789968, 11, '+34 912 25 ', 'Avenida Delvalle, 558, 5º B, 41363, Los Bahena Baja', 'fierro.gael@hispavista.com', 'Masculino', 'Ninguno', NULL, NULL, NULL, 1),
(1687, 5699, 'María Pilar Sauceda', 'Cintrón', 9923945, 24, '+34 9193220', 'Ronda Yeray, 102, 8º 7º, 17856, Los Carrillo', 'aitana.beltran@fonseca.es', 'Masculino', 'Ninguno', NULL, NULL, NULL, 1),
(1688, 7251, 'D. Asier Roldán Hijo', 'Arreola', 29956120, 31, '+34 961-047', 'Avinguda Ybarra, 649, 00º B, 30538, Henríquez del Penedès', 'aaron.huerta@hispavista.com', 'Femenino', 'Ninguno', NULL, NULL, NULL, 1),
(1689, 1140, 'Lic. Carla Huerta', 'Valenzuela', 31735107, 76, '983 303227', 'Travesía Ozuna, 1, 8º, 42806, Las Luján', 'lucas19@yahoo.es', 'Otros', 'Ninguno', NULL, NULL, NULL, 1),
(1690, 4848, 'Dr. Unai Costa', 'Armenta', 30596946, 70, '+34 983-15-', 'Rúa Emilia, 384, 5º E, 85056, L\' Salazar', 'villalpando.ariadna@delagarza.com', 'Otros', 'Ninguno', NULL, NULL, NULL, 1),
(1691, 2431, 'Carla Farías', 'Blasco', 37476018, 71, '+34 995 981', 'Ruela Lola, 524, Entre suelo 5º, 91255, Villa Bustamante', 'grivas@patino.com', 'Femenino', 'Ninguno', NULL, NULL, NULL, 1),
(1692, 7697, 'Sergio Ponce Tercero', 'Batista', 19956069, 47, '908-83-1323', 'Paseo José, 71, Bajos, 18922, O González', 'enrique.garza@requena.net', 'Masculino', 'Ninguno', NULL, NULL, NULL, 1),
(1693, 2740, 'Oliver Puga', 'Mata', 18386206, 33, '+34 987-749', 'Praza Adam, 465, Bajo 1º, 43137, Calderón del Barco', 'emilia.mascarenas@yahoo.com', 'Masculino', 'Ninguno', NULL, NULL, NULL, 1),
(1694, 8946, 'Guillermo Romero Segundo', 'Tafoya', 13410720, 60, '+34 956-399', 'Carrer Alejandra, 50, Bajos, 15859, Os Laboy', 'gcastano@huerta.org', 'Masculino', 'Ninguno', NULL, NULL, NULL, 1),
(1695, 5134, 'Gonzalo Saucedo', 'Trejo', 37018074, 19, '+34 991 855', 'Passeig Alba, 24, 75º C, 01192, Quiñones Alta', 'uolmos@live.com', 'Femenino', 'Ninguno', NULL, NULL, NULL, 1),
(1696, 1604, 'Paola Robledo', 'Paredes', 14497921, 31, '975-71-4670', 'Carrer Carla, 765, 6º 6º, 97642, Villa Rodarte del Vallès', 'ypineda@cuevas.es', 'Femenino', 'Ninguno', NULL, NULL, NULL, 1),
(1697, 4588, 'Luna Cuellar', 'Santana', 25998019, 39, '954 513840', 'Camino Julia, 88, 5º C, 27480, Arias de la Sierra', 'rascon.ander@guajardo.com', 'Otros', 'Ninguno', NULL, NULL, NULL, 1),
(1698, 5398, 'Martina Sauceda Segundo', 'Armendáriz', 36291365, 79, '+34 944-207', 'Passeig Véliz, 3, 7º 1º, 66123, Meza de las Torres', 'natalia.chapa@yahoo.es', 'Femenino', 'Ninguno', NULL, NULL, NULL, 1),
(1699, 3089, 'Ing. Inés Almaráz', 'Aragón', 29684846, 20, '+34 935-462', 'Paseo Naiara, 42, Ático 0º, 76932, Valenzuela de San Pedro', 'javier.porras@hispavista.com', 'Femenino', 'Ninguno', NULL, NULL, NULL, 1),
(1700, 1183, 'Martín Sánchez', 'Corona', 35060660, 14, '+34 925-27-', 'Plaza Fátima, 941, 8º, 69385, Las Salas del Barco', 'aleix.hidalgo@armijo.es', 'Otros', 'Ninguno', NULL, NULL, NULL, 1),
(1701, 1094, 'Silvia Lebrón', 'Benavídez', 15504111, 50, '+34 973 397', 'Plaça Julia, 50, 40º E, 33521, López del Bages', 'ona.salvador@yahoo.com', 'Femenino', 'Ninguno', NULL, NULL, NULL, 1),
(1702, 9906, 'Marta Deleón Segundo', 'Toledo', 31736836, 54, '+34 906-94-', 'Plaça Casanova, 1, 75º F, 76253, Vicente de Ulla', 'isaac20@mora.com', 'Masculino', 'Ninguno', NULL, NULL, NULL, 1),
(1703, 5141, 'Nicolás Rendón Hijo', 'Paredes', 25323689, 6, '+34 987-262', 'Paseo Óscar, 595, Entre suelo 9º, 99732, La Plaza del Pozo', 'gonzalo89@najera.com', 'Masculino', 'Ninguno', NULL, NULL, NULL, 1),
(1704, 7818, 'Srta. Julia Barragán Hijo', 'Ybarra', 37818729, 56, '927 36 7927', 'Ronda Nerea, 6, 0º 7º, 55473, L\' Zúñiga de la Sierra', 'ismael.jaimes@hispavista.com', 'Masculino', 'Ninguno', NULL, NULL, NULL, 1),
(1705, 4319, 'Isabel Carranza', 'Montoya', 12311768, 25, '937 50 5314', 'Camiño Rojo, 2, 26º E, 48164, El Valles del Vallès', 'lperes@hidalgo.com', 'Masculino', 'Ninguno', NULL, NULL, NULL, 1),
(1706, 3702, 'Juan José Véliz Segundo', 'Arribas', 12840597, 68, '+34 910 488', 'Passeig Izan, 239, 3º, 59075, A Nieto', 'villegas.gonzalo@hotmail.com', 'Femenino', 'Ninguno', NULL, NULL, NULL, 1),
(1707, 7733, 'Dr. Jon Armendáriz Hijo', 'Maestas', 12667247, 45, '+34 925-47-', 'Praza Meraz, 10, Bajos, 31285, Os Cárdenas', 'adam14@ferrer.com', 'Otros', 'Ninguno', NULL, NULL, NULL, 1),
(1708, 2440, 'Cristian Escudero', 'Carmona', 9678774, 72, '+34 949 432', 'Paseo Peres, 82, 2º A, 40591, Ramón del Vallès', 'juan98@yahoo.com', 'Femenino', 'Ninguno', NULL, NULL, NULL, 1),
(1709, 9483, 'Ángela Aguayo', 'Jaramillo', 22653148, 24, '+34 9107505', 'Calle Fernando, 92, 3º, 53585, Vall Ortega del Mirador', 'mateo.limon@yahoo.es', 'Otros', 'Ninguno', NULL, NULL, NULL, 1),
(1710, 8277, 'Rosa Acevedo', 'Duarte', 7121554, 42, '+34 938-15-', 'Carrer Enrique, 47, 31º 3º, 66068, Pineda de Arriba', 'gallegos.miguelangel@montes.es', 'Femenino', 'Ninguno', NULL, NULL, NULL, 1),
(1711, 6477, 'Sra. Juana Meléndez Hijo', 'Ledesma', 7034566, 45, '+34 979-27-', 'Carrer Colunga, 973, 31º B, 30746, As Núñez Alta', 'bruno90@hispavista.com', 'Masculino', 'Ninguno', NULL, NULL, NULL, 1),
(1712, 5590, 'Leo Merino', 'Carreón', 15591805, 72, '+34 9673039', 'Paseo Vila, 1, 88º C, 56786, Os Grijalva', 'marcos31@hotmail.es', 'Otros', 'Ninguno', NULL, NULL, NULL, 1),
(1713, 7624, 'Marcos Lira Segundo', 'Matos', 36646654, 51, '944750668', 'Ruela Granados, 443, 8º C, 28934, A Corral', 'esther18@gmail.com', 'Masculino', 'Ninguno', NULL, NULL, NULL, 1),
(1714, 8276, 'Marcos Vila Tercero', 'Tórrez', 10806656, 71, '+34 994-36-', 'Avinguda David, 8, Bajo 0º, 13594, A Alaniz', 'ainara.esteban@terra.com', 'Masculino', 'Ninguno', NULL, NULL, NULL, 1),
(1715, 9226, 'Marta Arellano', 'Alfonso', 13434224, 15, '+34 974-668', 'Travesía Sosa, 10, 88º F, 74280, La Segura del Mirador', 'teresa.plaza@villa.net', 'Otros', 'Ninguno', NULL, NULL, NULL, 1),
(1716, 4402, 'Alex Martos Hijo', 'Godoy', 18851426, 11, '+34 923-82-', 'Praza Robles, 27, 2º A, 01402, Os Rivero Baja', 'cmartin@godinez.com.es', 'Otros', 'Ninguno', NULL, NULL, NULL, 1),
(1717, 3460, 'Irene Raya Segundo', 'Cedillo', 14582294, 54, '+34 921-891', 'Travesía Lucía, 83, 79º F, 27599, Ochoa del Vallès', 'antonio79@melendez.org', 'Otros', 'Ninguno', NULL, NULL, NULL, 1),
(1718, 7921, 'Sergio Porras', 'Delao', 25352241, 43, '+34 915-895', 'Passeig Salazar, 377, 45º F, 30189, Ponce de Arriba', 'valentina55@hotmail.es', 'Femenino', 'Ninguno', NULL, NULL, NULL, 1),
(1719, 7413, 'Samuel Angulo', 'Valdez', 10701330, 22, '+34 948 38 ', 'Carrer Oliver, 9, 5º C, 62996, Villa Uribe', 'pantoja.enrique@gmail.com', 'Masculino', 'Ninguno', NULL, NULL, NULL, 1),
(1720, 3426, 'Lorena Aguado Hijo', 'Rendón', 8209630, 33, '980-579541', 'Avinguda Saavedra, 3, 8º C, 93465, El Manzanares', 'waguayo@hotmail.com', 'Otros', 'Ninguno', NULL, NULL, NULL, 1),
(1721, 2523, 'Rayan Moral', 'Cepeda', 28114450, 61, '964 629456', 'Carrer Guillen, 83, 92º F, 40039, Peña del Pozo', 'sergio.puig@delvalle.es', 'Femenino', 'Ninguno', NULL, NULL, NULL, 1),
(1722, 9312, 'Úrsula Samaniego', 'Marcos', 19192604, 7, '+34 964 62 ', 'Travesía Hernádez, 620, 7º 7º, 11577, Los Saldaña Medio', 'bmoreno@mena.es', 'Masculino', 'Ninguno', NULL, NULL, NULL, 1),
(1723, 7024, 'Mateo Pedroza', 'Castellanos', 25134883, 48, '+34 938 340', 'Camiño Córdova, 3, Bajo 0º, 26223, Villa Ochoa', 'ngaitan@mares.es', 'Femenino', 'Ninguno', NULL, NULL, NULL, 1),
(1724, 6531, 'Oliver Gaitán', 'Fajardo', 14396770, 50, '964 847961', 'Travesía Gael, 409, Entre suelo 3º, 79854, Los Espino', 'bruno.nino@olvera.org', 'Otros', 'Ninguno', NULL, NULL, NULL, 1),
(1725, 1445, 'Lic. Rafael Izquierdo Segundo', 'Gracia', 13483623, 51, '923-632441', 'Ronda Cintrón, 1, Ático 2º, 31621, Los Rosas', 'qoliver@yahoo.es', 'Femenino', 'Ninguno', NULL, NULL, NULL, 1),
(1726, 3815, 'Sr. Mario Hernández Segundo', 'Jaramillo', 22701185, 60, '965 525205', 'Calle Quiñónez, 2, Ático 2º, 04077, Arriaga del Vallès', 'luna.nevarez@latinmail.com', 'Masculino', 'Ninguno', NULL, NULL, NULL, 1),
(1727, 2110, 'Yaiza Arenas', 'Ulibarri', 25520243, 43, '+34 935 59 ', 'Avinguda Carlos, 601, 4º B, 46634, O Almaráz de la Sierra', 'raquel.pascual@abad.es', 'Femenino', 'Ninguno', NULL, NULL, NULL, 1),
(1728, 6056, 'Ainhoa Puente', 'Henríquez', 7703299, 36, '965-825098', 'Avenida Celia, 2, 7º F, 73404, Miguel de Arriba', 'florez.eduardo@medina.com.es', 'Femenino', 'Ninguno', NULL, NULL, NULL, 1),
(1729, 5569, 'Jordi Partida', 'Villalba', 14623857, 39, '945 04 1897', 'Carrer Francisco, 86, 7º B, 00491, Vall Bermúdez', 'franciscojavier04@hotmail.es', 'Femenino', 'Ninguno', NULL, NULL, NULL, 1),
(1730, 8626, 'Miguel Roldán', 'Tejeda', 10045015, 60, '+34 977-13-', 'Plaza Marc, 30, Bajos, 58870, O Carrión', 'qgamez@narvaez.net', 'Femenino', 'Ninguno', NULL, NULL, NULL, 1),
(1731, 8153, 'Gabriel Blasco', 'Barajas', 15543821, 67, '+34 957-35-', 'Avinguda Chávez, 93, 8º C, 45905, Las Riojas', 'unai82@urrutia.es', 'Masculino', 'Ninguno', NULL, NULL, NULL, 1),
(1732, 3428, 'Enrique Ochoa', 'Mata', 27857921, 62, '+34 9131379', 'Plaza Valdez, 840, 8º, 06120, Vall Valencia', 'qlopez@caldera.es', 'Femenino', 'Ninguno', NULL, NULL, NULL, 1),
(1733, 6069, 'Malak Noriega', 'Otero', 15429558, 66, '+34 983 753', 'Paseo Guzmán, 4, 32º E, 17018, As Crespo', 'matias.fernando@arevalo.net', 'Femenino', 'Ninguno', NULL, NULL, NULL, 1),
(1734, 1189, 'Alex Valverde', 'Orozco', 8069195, 11, '+34 992 99 ', 'Ronda Castañeda, 655, 84º A, 40670, Abreu del Penedès', 'veronica20@latinmail.com', 'Masculino', 'Ninguno', NULL, NULL, NULL, 1),
(1735, 2511, 'Nuria Soler', 'Delacrúz', 19333863, 24, '913 47 4721', 'Passeig Aguilar, 7, 1º, 37582, Hernando del Mirador', 'carla57@lucero.com', 'Otros', 'Ninguno', NULL, NULL, NULL, 1),
(1736, 5223, 'D. Isaac Cedillo Hijo', 'Barrios', 27037082, 3, '923495270', 'Rúa Guerrero, 363, 3º B, 96724, Cisneros de las Torres', 'amparo03@elizondo.com', 'Otros', 'Ninguno', NULL, NULL, NULL, 1),
(1737, 5840, 'Dr. Luis Mena', 'Sanabria', 25176673, 63, '+34 941-35-', 'Camiño Adrián, 103, Bajo 6º, 71776, San Almonte', 'tenriquez@hotmail.com', 'Femenino', 'Ninguno', NULL, NULL, NULL, 1),
(1738, 4390, 'Roberto Robledo', 'Gálvez', 20083904, 19, '+34 9127115', 'Travessera Marrero, 2, 0º A, 73187, Vall Banda del Penedès', 'ortiz.nicolas@live.com', 'Otros', 'Ninguno', NULL, NULL, NULL, 1),
(1739, 7154, 'Miriam Parra', 'Lucas', 28562214, 78, '+34 921-811', 'Paseo Camacho, 7, 38º F, 08728, O Colón de Arriba', 'dvillar@hispavista.com', 'Femenino', 'Ninguno', NULL, NULL, NULL, 1),
(1740, 8306, 'Dr. Oriol Llorente Tercero', 'Garza', 38921979, 35, '904537348', 'Plaza Olga, 579, 9º F, 80991, La Carrasquillo del Puerto', 'hinojosa.aina@ortega.net', 'Masculino', 'Ninguno', NULL, NULL, NULL, 1),
(1741, 9551, 'Nuria Corrales Tercero', 'Badillo', 23539947, 68, '937-247096', 'Avinguda Huerta, 83, Bajo 0º, 06217, L\' Zamora del Puerto', 'bgimenez@yahoo.es', 'Femenino', 'Ninguno', NULL, NULL, NULL, 1),
(1742, 1976, 'Abril Pastor', 'Altamirano', 12457455, 73, '+34 977 79 ', 'Travessera Serna, 3, 46º A, 50815, As Domínquez del Penedès', 'lucia64@gmail.com', 'Femenino', 'Ninguno', NULL, NULL, NULL, 1),
(1743, 8108, 'Jimena Flórez', 'Esquivel', 10593207, 68, '963-152712', 'Camiño Izan, 434, 3º A, 97638, Vall Griego', 'alcantar.juan@hotmail.com', 'Masculino', 'Ninguno', NULL, NULL, NULL, 1),
(1744, 6507, 'Sr. Manuel Burgos', 'Pacheco', 32039210, 23, '985444688', 'Ruela Cristina, 48, 42º C, 36175, La Flórez', 'ainara.acuna@gmail.com', 'Femenino', 'Ninguno', NULL, NULL, NULL, 1),
(1745, 4975, 'Ing. Amparo Rodríquez', 'Santacruz', 29604427, 68, '981 45 9700', 'Ruela Jaime, 72, Bajo 4º, 56747, Lucio Baja', 'alba00@sauceda.com', 'Femenino', 'Ninguno', NULL, NULL, NULL, 1),
(1746, 8784, 'Dr. Alonso Martí', 'Sotelo', 21122053, 46, '905 63 2969', 'Plaza Pol, 1, 3º E, 03056, El Martos', 'ivan.sancho@hispavista.com', 'Femenino', 'Ninguno', NULL, NULL, NULL, 1),
(1747, 1840, 'María Ángeles Tamez', 'Cazares', 22904157, 45, '+34 937-030', 'Ronda Asier, 2, 87º F, 78046, As Pardo del Bages', 'vosorio@hispavista.com', 'Femenino', 'Ninguno', NULL, NULL, NULL, 1),
(1748, 7037, 'Olga Delatorre', 'Olmos', 23226782, 36, '+34 965 793', 'Ronda Hidalgo, 934, 1º, 39579, Las Varela', 'rgaitan@dominquez.es', 'Masculino', 'Ninguno', NULL, NULL, NULL, 1),
(1749, 6023, 'Isabel Perea', 'Alonso', 30434324, 72, '+34 987 472', 'Camiño Balderas, 171, 08º A, 42425, Las Lozano', 'gael35@lugo.com.es', 'Masculino', 'Ninguno', NULL, NULL, NULL, 1),
(1750, 7795, 'Zoe Tapia', 'Herrera', 32202829, 20, '+34 983-74-', 'Ronda Nahia, 900, 6º B, 63345, Pardo Baja', 'apadilla@mesa.org', 'Masculino', 'Ninguno', NULL, NULL, NULL, 1),
(1751, 3001, 'María Ángeles Rocha', 'Orta', 11454568, 4, '+34 946 83 ', 'Paseo Lázaro, 515, 6º B, 67102, San Salgado', 'hidalgo.olga@melendez.org', 'Masculino', 'Ninguno', NULL, NULL, NULL, 1),
(1752, 6932, 'Lic. Amparo Araña Segundo', 'Santacruz', 22711328, 70, '949 98 2987', 'Travesía Marco, 460, 55º E, 56383, A Toledo', 'santiago46@hispavista.com', 'Masculino', 'Ninguno', NULL, NULL, NULL, 1),
(1753, 7565, 'Nayara Partida', 'Perea', 39737110, 20, '+34 9927501', 'Plaza Rodrigo, 4, 87º D, 48333, Villa Menéndez del Mirador', 'marco98@carrion.es', 'Otros', 'Ninguno', NULL, NULL, NULL, 1),
(1754, 2002, 'Sra. Zoe Corral Hijo', 'Luevano', 25586097, 13, '+34 972-20-', 'Calle Aleix, 33, 2º 9º, 10752, El Zarate', 'pablo.godoy@irizarry.com', 'Masculino', 'Ninguno', NULL, NULL, NULL, 1),
(1755, 4149, 'Carlota Esteban Tercero', 'Maestas', 35687073, 43, '988506780', 'Plaça Cuenca, 47, 6º F, 79139, Caraballo de San Pedro', 'roig.alvaro@mayorga.es', 'Otros', 'Ninguno', NULL, NULL, NULL, 1),
(1756, 6348, 'Dr. Verónica Gámez Segundo', 'Camarillo', 13964345, 51, '932-23-7106', 'Travesía Blanca, 73, Bajo 1º, 88269, Padilla del Barco', 'alfonso.pol@terra.com', 'Femenino', 'Ninguno', NULL, NULL, NULL, 1),
(1757, 4676, 'Oriol Pardo', 'Corral', 36266384, 29, '971-64-4094', 'Camino Vázquez, 97, 92º B, 61397, Vigil del Vallès', 'ruben11@barreto.es', 'Femenino', 'Ninguno', NULL, NULL, NULL, 1),
(1758, 4733, 'Alba Urías', 'Espinal', 12378369, 33, '964512438', 'Paseo Dario, 13, Bajos, 27699, A Apodaca', 'cbarrera@terra.com', 'Masculino', 'Ninguno', NULL, NULL, NULL, 1),
(1759, 8907, 'Zoe Oquendo', 'Calero', 32252674, 10, '+34 931-95-', 'Camino Delagarza, 18, 98º A, 96251, Vallejo del Barco', 'fcrespo@hispavista.com', 'Femenino', 'Ninguno', NULL, NULL, NULL, 1),
(1760, 6099, 'Cristian Escribano', 'Toro', 9487576, 26, '971-820306', 'Avinguda Marc, 17, Entre suelo 4º, 99917, La Valero', 'yago10@sandoval.com', 'Otros', 'Ninguno', NULL, NULL, NULL, 1),
(1761, 7081, 'Sr. Jesús Marrero Segundo', 'Bustos', 31377974, 42, '912626619', 'Plaça Rodrigo, 4, 28º D, 16815, Casado de Ulla', 'daniela65@jaquez.org', 'Otros', 'Ninguno', NULL, NULL, NULL, 1),
(1762, 3500, 'Ing. Naiara Puga', 'Galarza', 25058764, 37, '+34 959 070', 'Praza Marco, 257, 03º B, 24822, L\' Gurule de las Torres', 'dario70@yahoo.com', 'Masculino', 'Ninguno', NULL, NULL, NULL, 1),
(1763, 6962, 'Lic. Encarnación Quintero', 'Alfaro', 6524419, 79, '+34 975-517', 'Rúa Riera, 83, 7º E, 80992, A Gómez del Penedès', 'lara62@live.com', 'Femenino', 'Ninguno', NULL, NULL, NULL, 1),
(1764, 8481, 'Sra. Sara Cabrera Segundo', 'Treviño', 30908169, 39, '921 79 9131', 'Calle Olivares, 1, 9º C, 88107, Peralta de Ulla', 'qzarate@villareal.org', 'Otros', 'Ninguno', NULL, NULL, NULL, 1),
(1765, 6402, 'Abril Bustos', 'Alba', 36740595, 26, '+34 9278432', 'Plaza Nayara, 59, 1º D, 40787, As Tafoya Alta', 'hector68@latinmail.com', 'Femenino', 'Ninguno', NULL, NULL, NULL, 1),
(1766, 8430, 'Rayan Alanis', 'Sáenz', 13797594, 70, '+34 936 704', 'Rúa Marc, 516, 9º, 50701, Villa Arguello', 'iker.jaime@hispavista.com', 'Masculino', 'Ninguno', NULL, NULL, NULL, 1),
(1767, 3990, 'Gonzalo Rubio', 'Toro', 18486545, 2, '912 452429', 'Camino Guzmán, 68, 92º E, 88885, O Lemus del Bages', 'miguelangel97@hotmail.com', 'Otros', 'Ninguno', NULL, NULL, NULL, 1),
(1768, 1440, 'Gael Balderas', 'Martín', 35203202, 63, '963-05-3817', 'Passeig Mascareñas, 435, 3º F, 95761, A Feliciano Alta', 'jmontano@collado.es', 'Otros', 'Ninguno', NULL, NULL, NULL, 1),
(1769, 6814, 'Lic. Rosa Venegas Tercero', 'Llorente', 9625249, 3, '908-589133', 'Paseo Henríquez, 58, 5º C, 68305, El Carvajal de la Sierra', 'sergio65@yahoo.com', 'Femenino', 'Ninguno', NULL, NULL, NULL, 1),
(1770, 5636, 'Erik Vélez Segundo', 'Jaimes', 10243857, 10, '913-450719', 'Carrer Olivas, 2, 62º F, 66121, As Espinal', 'dario67@yahoo.es', 'Masculino', 'Ninguno', NULL, NULL, NULL, 1),
(1771, 4112, 'Guillermo Godínez', 'Centeno', 35951150, 58, '962 304609', 'Paseo Alejandra, 447, Ático 5º, 84657, San Delagarza de la Sierra', 'pedroza.mateo@hotmail.com', 'Otros', 'Ninguno', NULL, NULL, NULL, 1),
(1772, 8148, 'Srta. Inmaculada Reyna', 'Reséndez', 15691928, 75, '+34 959-56-', 'Ruela Sancho, 3, 8º F, 75733, Luján del Vallès', 'helena88@cortez.com', 'Otros', 'Ninguno', NULL, NULL, NULL, 1),
(1773, 5280, 'Blanca Gracia', 'Quezada', 38273916, 64, '+34 977-983', 'Ronda Beatriz, 20, 9º 6º, 39786, Vall Agosto del Puerto', 'qpaz@hotmail.es', 'Otros', 'Ninguno', NULL, NULL, NULL, 1),
(1774, 5672, 'Carolina Murillo', 'Rentería', 38306576, 67, '941-33-3698', 'Rúa Castro, 2, Bajo 3º, 41772, Hernádez de San Pedro', 'zsaldana@hotmail.es', 'Femenino', 'Ninguno', NULL, NULL, NULL, 1),
(1775, 4722, 'Marco Deleón', 'Saucedo', 27962299, 23, '995-27-3542', 'Ruela Tafoya, 42, 97º E, 66903, El Bautista', 'lazaro.nil@hispavista.com', 'Masculino', 'Ninguno', NULL, NULL, NULL, 1),
(1776, 2578, 'Jimena Lázaro', 'Galarza', 19363570, 60, '996-419399', 'Paseo Paola, 5, 46º F, 16422, As Arreola de la Sierra', 'centeno.jordi@hotmail.es', 'Masculino', 'Ninguno', NULL, NULL, NULL, 1),
(1777, 4371, 'Lic. Blanca Domínquez', 'Arroyo', 12182680, 2, '980-53-3283', 'Travesía Luna, 73, 7º F, 53295, A Roybal', 'juan72@moran.org', 'Femenino', 'Ninguno', NULL, NULL, NULL, 1),
(1778, 1831, 'Adrián Navarrete', 'Escamilla', 16103823, 46, '+34 961 90 ', 'Plaza Unai, 80, 65º 1º, 16574, A Duran Baja', 'iosorio@latinmail.com', 'Otros', 'Ninguno', NULL, NULL, NULL, 1),
(1779, 3577, 'Miguel Lozada', 'Zaragoza', 36707843, 66, '950 107670', 'Plaza José, 5, 0º F, 36425, A Zepeda del Barco', 'ybarra.alonso@galvan.com', 'Otros', 'Ninguno', NULL, NULL, NULL, 1),
(1780, 7788, 'Miriam Sola', 'Toledo', 19544908, 33, '906373353', 'Passeig Medina, 66, 98º C, 25355, Roca del Penedès', 'ona01@esteve.com', 'Masculino', 'Ninguno', NULL, NULL, NULL, 1),
(1781, 7722, 'Silvia Anaya', 'Haro', 30285497, 54, '+34 9374447', 'Avinguda Armas, 37, 30º E, 34396, Vall Rocha del Bages', 'hugo.pichardo@live.com', 'Otros', 'Ninguno', NULL, NULL, NULL, 1),
(1782, 4742, 'Lic. Marc Villalpando', 'Prado', 14119264, 8, '+34 913 59 ', 'Praza Pablo, 9, Bajo 4º, 51567, Mojica de la Sierra', 'mariapilar09@terra.com', 'Masculino', 'Ninguno', NULL, NULL, NULL, 1);
INSERT INTO `solicitantes` (`id_sol`, `carnet`, `nom_sol`, `ape_sol`, `ced_sol`, `edad_sol`, `tlf_sol`, `dir_sol`, `corr_sol`, `sex_sol`, `ocup_sol`, `nom_inst`, `dir_inst`, `tel_inst`, `estado_s`) VALUES
(1783, 1677, 'Lic. Alejandra Solorio Tercero', 'Serrato', 33000961, 3, '930-14-8220', 'Avenida Luna, 52, 4º, 41383, Pons de Lemos', 'regalado.nerea@hotmail.com', 'Masculino', 'Ninguno', NULL, NULL, NULL, 1),
(1784, 2852, 'Andrea Hernández', 'Castañeda', 22546335, 68, '919-826581', 'Avinguda Inés, 27, 0º E, 13535, San Gimeno Medio', 'jcastellano@almonte.com', 'Otros', 'Ninguno', NULL, NULL, NULL, 1),
(1785, 4391, 'Aaron Arellano Tercero', 'Melgar', 36180570, 61, '920 48 4761', 'Ronda Luisa, 494, 6º, 90233, Las Vega de Lemos', 'jordi00@terra.com', 'Masculino', 'Ninguno', NULL, NULL, NULL, 1),
(1786, 9209, 'Lic. Hugo Villanueva Segundo', 'Duarte', 8670130, 63, '932 627123', 'Paseo Gloria, 5, 1º D, 33162, L\' Giménez', 'leo07@ordonez.es', 'Otros', 'Ninguno', NULL, NULL, NULL, 1),
(1787, 9153, 'Ona Robledo', 'Almonte', 10174166, 50, '+34 900 79 ', 'Ronda Ceja, 621, Ático 0º, 18831, Vall Rendón', 'franciscojavier.carbajal@gmail.com', 'Masculino', 'Ninguno', NULL, NULL, NULL, 1),
(1788, 2248, 'Joel Amador', 'Ozuna', 28662959, 76, '912 93 3074', 'Passeig Lola, 9, 9º E, 21545, Vall Sandoval Alta', 'ornelas.fernando@delrio.com', 'Otros', 'Ninguno', NULL, NULL, NULL, 1),
(1789, 7735, 'África Pozo', 'Pozo', 8990455, 19, '+34 904 573', 'Camiño Baca, 385, 7º A, 96454, Candelaria de Lemos', 'ctafoya@hotmail.es', 'Femenino', 'Ninguno', NULL, NULL, NULL, 1),
(1790, 7466, 'Natalia Crespo', 'Conde', 23917226, 69, '919 462062', 'Paseo Espino, 2, 6º 0º, 84460, Las Delafuente', 'treyes@gmail.com', 'Otros', 'Ninguno', NULL, NULL, NULL, 1),
(1791, 2391, 'Lic. Diego Magaña Segundo', 'Ávalos', 34337639, 27, '992312507', 'Travesía Guillem, 975, 9º F, 90354, San Juan', 'ivan15@aranda.com', 'Femenino', 'Ninguno', NULL, NULL, NULL, 1),
(1792, 8121, 'Ing. Juana Roque', 'Leiva', 34802249, 62, '+34 9116967', 'Avinguda Iker, 833, 50º 8º, 41345, La Calero de Ulla', 'psauceda@valladares.org', 'Femenino', 'Ninguno', NULL, NULL, NULL, 1),
(1793, 4653, 'Rosa María Morales', 'Arias', 15669983, 19, '973894512', 'Carrer Eva, 511, 57º A, 61320, As Berríos del Puerto', 'angel.nazario@mondragon.es', 'Otros', 'Ninguno', NULL, NULL, NULL, 1),
(1794, 2967, 'Gloria Soler', 'Berríos', 18819583, 33, '+34 951 14 ', 'Passeig Alexandra, 18, 20º C, 03601, O Jiménez', 'samuel.parra@torrez.es', 'Femenino', 'Ninguno', NULL, NULL, NULL, 1),
(1795, 5594, 'Helena Córdoba', 'Linares', 8754308, 79, '978 64 8582', 'Paseo Fernando, 11, 79º D, 84761, Vall Galindo', 'oconcepcion@terra.com', 'Masculino', 'Ninguno', NULL, NULL, NULL, 1),
(1796, 8372, 'Jon Rendón Segundo', 'Esteve', 7167194, 47, '953109285', 'Avinguda Lomeli, 484, 33º E, 72528, Os Cabán', 'raul.quinonez@live.com', 'Masculino', 'Ninguno', NULL, NULL, NULL, 1),
(1797, 7586, 'Lic. Aitana Mojica Hijo', 'Rangel', 25231610, 52, '973 59 9499', 'Carrer Marcos, 6, Entre suelo 7º, 84978, Villa Santana Alta', 'jmontanez@santiago.org', 'Otros', 'Ninguno', NULL, NULL, NULL, 1),
(1798, 9052, 'Gerard Gaitán', 'Ceballos', 34631488, 78, '+34 9979290', 'Passeig Montalvo, 7, 50º C, 49431, El Carballo', 'nunez.miguelangel@clemente.com', 'Masculino', 'Ninguno', NULL, NULL, NULL, 1),
(1799, 1918, 'Víctor Berríos', 'Ruvalcaba', 16770433, 33, '956-23-4390', 'Ronda Aponte, 4, Entre suelo 8º, 27008, As Portillo Medio', 'mara25@aguirre.com', 'Otros', 'Ninguno', NULL, NULL, NULL, 1),
(1800, 1735, 'Izan Corrales Hijo', 'Montemayor', 38970136, 33, '+34 976-72-', 'Calle Guillem, 5, Bajo 9º, 44252, Segovia del Puerto', 'elena.haro@hotmail.com', 'Femenino', 'Ninguno', NULL, NULL, NULL, 1),
(1801, 8810, 'Alexia Atencio Tercero', 'Montemayor', 13140725, 53, '990 87 7906', 'Avinguda Tejada, 38, 4º C, 56054, Chapa del Barco', 'victor09@angulo.org', 'Femenino', 'Ninguno', NULL, NULL, NULL, 1),
(1802, 8749, 'Miriam Alarcón', 'Collado', 15012224, 42, '920 479495', 'Ronda Antonio, 853, 01º B, 48962, Los Ruvalcaba', 'miguel14@rubio.com', 'Otros', 'Ninguno', NULL, NULL, NULL, 1),
(1804, 9186, 'Lic. Juan José Guzmán Hijo', 'Esparza', 23023883, 4, '+34 934 90 ', 'Praza Luevano, 56, Bajo 3º, 96137, Verduzco Medio', 'nnoriega@yahoo.com', 'Masculino', 'Ninguno', NULL, NULL, NULL, 1),
(1805, 2675, 'D. Jorge Jaime', 'Quintana', 25045701, 23, '971 486889', 'Passeig Gloria, 81, 92º F, 61667, El Flores', 'jordi49@carreon.es', 'Masculino', 'Ninguno', NULL, NULL, NULL, 1),
(1806, 7951, 'Sr. Aleix Vidal', 'Estévez', 24286400, 19, '+34 928-732', 'Passeig Haro, 18, Ático 4º, 25491, Os Arriaga Medio', 'medrano.diego@live.com', 'Femenino', 'Ninguno', NULL, NULL, NULL, 1),
(1807, 2939, 'Sra. Paula Bustamante Segundo', 'Esparza', 35418690, 15, '906 528112', 'Plaza Claudia, 655, 70º E, 24767, Vall Riera', 'david20@casarez.com.es', 'Femenino', 'Ninguno', NULL, NULL, NULL, 1),
(1808, 2094, 'Aaron Morán', 'Ochoa', 24375058, 67, '+34 960 52 ', 'Plaça Inés, 1, Bajo 0º, 07509, As Bueno', 'bernal.jan@yahoo.com', 'Femenino', 'Ninguno', NULL, NULL, NULL, 1),
(1809, 7248, 'Srta. Candela Cintrón Tercero', 'Padrón', 37772748, 47, '971-417357', 'Carrer Ruelas, 3, 64º F, 72872, O Altamirano', 'gonzalo.palomo@gmail.com', 'Masculino', 'Ninguno', NULL, NULL, NULL, 1),
(1810, 9675, 'Encarnación Montes Tercero', 'Ocasio', 39039102, 58, '+34 925 54 ', 'Avinguda Peralta, 9, 0º 2º, 99635, Los Vicente de Ulla', 'aaron06@live.com', 'Femenino', 'Ninguno', NULL, NULL, NULL, 1),
(1811, 3024, 'Isabel Barroso', 'Rocha', 21417640, 67, '+34 956 49 ', 'Rúa Esther, 50, 5º E, 33401, Villa Corral', 'wsoto@yahoo.com', 'Femenino', 'Ninguno', NULL, NULL, NULL, 1),
(1812, 6672, 'Lic. Enrique Barragán', 'Redondo', 29355839, 7, '+34 9274415', 'Rúa Rodarte, 8, 74º C, 69230, Las Casárez del Puerto', 'angela.barragan@abad.org', 'Masculino', 'Ninguno', NULL, NULL, NULL, 1),
(1813, 1245, 'Malak Ocasio', 'Torres', 36231082, 39, '+34 9965737', 'Plaça Salvador, 530, 8º B, 61892, La Bravo', 'xbernal@portillo.es', 'Otros', 'Ninguno', NULL, NULL, NULL, 1),
(1814, 2179, 'Jesús Terrazas Tercero', 'Garay', 38813417, 13, '901 301304', 'Ruela Santiago, 57, 6º A, 14339, Rolón de Lemos', 'ncavazos@cornejo.com', 'Femenino', 'Ninguno', NULL, NULL, NULL, 1),
(1815, 5053, 'Rodrigo Candelaria', 'Saldaña', 26058616, 16, '996-59-7879', 'Rúa Guajardo, 88, 54º 4º, 97055, A Franco del Mirador', 'qacuna@hispavista.com', 'Masculino', 'Ninguno', NULL, NULL, NULL, 1),
(1816, 9299, 'D. Alonso Garibay', 'Matías', 13348421, 18, '992288553', 'Avenida Arredondo, 7, 1º E, 75122, El Torres', 'itapia@terra.com', 'Otros', 'Ninguno', NULL, NULL, NULL, 1),
(1817, 3978, 'Srta. Elsa Santiago Segundo', 'Chapa', 25751364, 9, '+34 948-44-', 'Plaza Alma, 87, 3º B, 78069, Valles de San Pedro', 'lidia.feliciano@lujan.com', 'Masculino', 'Ninguno', NULL, NULL, NULL, 1),
(1818, 6505, 'Leo Fierro', 'Delarosa', 27193670, 62, '957 37 6987', 'Plaça Ángel, 66, Ático 0º, 01132, Jiménez del Barco', 'patricia.cano@yahoo.es', 'Otros', 'Ninguno', NULL, NULL, NULL, 1),
(1819, 2777, 'Dr. Óscar Rivas Tercero', 'Ornelas', 22747571, 19, '910 79 8986', 'Camiño Alicia, 6, Entre suelo 7º, 59551, Los Orta del Pozo', 'gsalcido@hotmail.com', 'Otros', 'Ninguno', NULL, NULL, NULL, 1),
(1821, 7331, 'Sergio Carballo', 'Ayala', 25528588, 2, '970-657570', 'Avenida Casillas, 4, 13º D, 35380, Garay del Bages', 'ruben43@godinez.org', 'Otros', 'Ninguno', NULL, NULL, NULL, 1),
(1822, 4863, 'Dr. Candela Olivárez', 'Zapata', 38952408, 13, '952 126642', 'Plaza Echevarría, 453, Entre suelo 7º, 45703, Rolón de Lemos', 'miguel.chavarria@hurtado.com', 'Masculino', 'Ninguno', NULL, NULL, NULL, 1),
(1823, 7899, 'Omar Rosario', 'Ulibarri', 19933744, 7, '+34 981 56 ', 'Calle Jan, 798, 48º E, 05489, Ocasio del Puerto', 'veronica36@ferrer.com', 'Otros', 'Ninguno', NULL, NULL, NULL, 1),
(1824, 5255, 'Pol Estrada', 'Briones', 14529487, 33, '+34 910-081', 'Plaça Medina, 79, Ático 6º, 61990, O Galindo Baja', 'sanz.santiago@uribe.es', 'Otros', 'Ninguno', NULL, NULL, NULL, 1),
(1825, 4051, 'Verónica Pineda', 'Carrasco', 23496652, 64, '+34 957 64 ', 'Plaza Pedro, 3, 1º 6º, 16290, A Partida de Ulla', 'ezayas@munguia.net', 'Masculino', 'Ninguno', NULL, NULL, NULL, 1),
(1826, 8173, 'Naia Oliver', 'Sepúlveda', 18340479, 52, '+34 970 222', 'Avenida Bermejo, 76, 88º B, 34871, A Silva', 'adrian.zepeda@yahoo.es', 'Femenino', 'Ninguno', NULL, NULL, NULL, 1),
(1827, 7102, 'Juan De Jesús', 'Bahena', 37121926, 17, '989 598338', 'Camino Nuria, 42, 41º 7º, 55116, Os Morales', 'aguayo.ana@terra.com', 'Otros', 'Ninguno', NULL, NULL, NULL, 1),
(1828, 9199, 'Celia Aguayo', 'Alfonso', 15382899, 40, '+34 921 98 ', 'Plaza Irene, 2, 12º A, 79690, Rueda de San Pedro', 'pedro.vega@carvajal.org', 'Masculino', 'Ninguno', NULL, NULL, NULL, 1),
(1829, 9426, 'Lic. Isaac Cortez Segundo', 'Olivares', 22209270, 31, '+34 977-10-', 'Ronda Blanco, 48, 90º D, 60920, San Estévez', 'borrego.oliver@magana.com', 'Femenino', 'Ninguno', NULL, NULL, NULL, 1),
(1830, 8387, 'Andrés Jurado', 'Martos', 36030831, 48, '+34 989-41-', 'Praza Adam, 971, Entre suelo 7º, 91343, As Rueda Baja', 'gvaca@trujillo.net', 'Masculino', 'Ninguno', NULL, NULL, NULL, 1),
(1831, 8268, 'Francisco Adorno', 'Orosco', 35600780, 46, '980 670723', 'Avenida Olga, 15, 6º 8º, 34214, El Esquibel', 'alicea.lara@olvera.com', 'Otros', 'Ninguno', NULL, NULL, NULL, 1),
(1832, 6338, 'Alejandra Manzano', 'Amaya', 19411372, 21, '+34 951 23 ', 'Ruela Rubén, 613, 5º B, 68210, El Ortíz de Ulla', 'altamirano.jimena@live.com', 'Otros', 'Ninguno', NULL, NULL, NULL, 1),
(1833, 6277, 'Alma Deleón', 'Cepeda', 39356494, 44, '953585525', 'Avinguda Ojeda, 45, 0º E, 64356, Los Badillo', 'montero.arnau@hispavista.com', 'Otros', 'Ninguno', NULL, NULL, NULL, 1),
(1834, 7073, 'Cristian Delagarza', 'Bueno', 32794099, 27, '+34 927 99 ', 'Passeig Arias, 9, 71º F, 88059, A Carmona', 'jaimes.ainhoa@torres.es', 'Femenino', 'Ninguno', NULL, NULL, NULL, 1),
(1835, 8371, 'Santiago Roque Hijo', 'Aponte', 16040030, 78, '937 173215', 'Paseo Santiago, 76, 5º B, 57438, Villagómez del Mirador', 'hnaranjo@guevara.es', 'Femenino', 'Ninguno', NULL, NULL, NULL, 1),
(1836, 6103, 'Jorge Cabrera Tercero', 'Becerra', 37264891, 5, '960880563', 'Praza Alarcón, 43, Bajo 4º, 89071, Villa Treviño del Pozo', 'marcos70@jaquez.org', 'Femenino', 'Ninguno', NULL, NULL, NULL, 1),
(1837, 2154, 'Andrea González', 'Carreón', 15283518, 14, '+34 9228791', 'Praza Terrazas, 80, 6º C, 47405, Sepúlveda del Penedès', 'irene.guerrero@hotmail.com', 'Otros', 'Ninguno', NULL, NULL, NULL, 1),
(1838, 2756, 'Saúl Girón Hijo', 'Narváez', 7903842, 78, '+34 981 088', 'Ronda Leiva, 8, 33º A, 85092, Almanza del Pozo', 'chavez.gerard@live.com', 'Femenino', 'Ninguno', NULL, NULL, NULL, 1),
(1839, 7806, 'Dr. Andrés Esquivel Hijo', 'Carreón', 33585721, 30, '972 00 6734', 'Plaza Margarita, 4, Bajo 9º, 87791, San Villa', 'uarroyo@yahoo.es', 'Otros', 'Ninguno', NULL, NULL, NULL, 1),
(1840, 1426, 'Luisa Pascual', 'Dueñas', 35907299, 8, '+34 998 70 ', 'Camino Otero, 6, 73º A, 86115, L\' Zaragoza', 'gael82@terra.com', 'Masculino', 'Ninguno', NULL, NULL, NULL, 1),
(1841, 6993, 'Gael Aguilera Hijo', 'Coronado', 24278071, 66, '+34 9556080', 'Praza Iván, 6, Entre suelo 7º, 46930, Alba de San Pedro', 'elsa62@yahoo.es', 'Femenino', 'Ninguno', NULL, NULL, NULL, 1),
(1842, 4334, 'Lucía Solís', 'Puente', 30785785, 57, '+34 972 83 ', 'Travessera Nájera, 46, 55º A, 27119, El Campos', 'bruno88@tafoya.org', 'Femenino', 'Ninguno', NULL, NULL, NULL, 1),
(1843, 8560, 'Rafael Prado', 'Chavarría', 9123435, 65, '+34 986-78-', 'Calle Pineda, 14, 29º F, 29555, Olivárez de la Sierra', 'enrique.aleman@orozco.org', 'Otros', 'Ninguno', NULL, NULL, NULL, 1),
(1844, 1928, 'Asier Escamilla', 'Arguello', 6939792, 60, '+34 904 96 ', 'Plaza Carla, 28, 9º A, 58242, Melgar de Arriba', 'pau07@yahoo.es', 'Masculino', 'Ninguno', NULL, NULL, NULL, 1),
(1845, 8425, 'Jesús Narváez', 'Solorzano', 18414169, 48, '917 46 2168', 'Travesía Araña, 10, 62º B, 42886, San Morán del Bages', 'bvila@marquez.org', 'Masculino', 'Ninguno', NULL, NULL, NULL, 1),
(1846, 2207, 'Yago Soriano Tercero', 'Córdova', 19649410, 12, '904408180', 'Ruela Verduzco, 11, 4º F, 28228, O Ávalos del Puerto', 'nicolas.zapata@covarrubias.com', 'Femenino', 'Ninguno', NULL, NULL, NULL, 1),
(1848, 3139, 'Ing. Gael Sepúlveda', 'Orozco', 23129077, 75, '+34 955-154', 'Passeig César, 4, 26º 5º, 62262, La Cabello de San Pedro', 'jmadrid@valles.net', 'Otros', 'Ninguno', NULL, NULL, NULL, 1),
(1849, 1502, 'Ángeles Farías', 'Sosa', 12136177, 24, '+34 986-091', 'Ruela Carballo, 2, 11º B, 82535, Mesa Alta', 'sandra62@bonilla.es', 'Masculino', 'Ninguno', NULL, NULL, NULL, 1),
(1850, 8468, 'Manuela Santana', 'Benito', 23534148, 9, '945 12 0178', 'Avinguda Unai, 5, Entre suelo 7º, 34413, Vall Fuentes de Lemos', 'dgrijalva@yahoo.es', 'Femenino', 'Ninguno', NULL, NULL, NULL, 1),
(1851, 5018, 'Candela Cerda Hijo', 'Pagan', 16186478, 76, '+34 943-756', 'Travessera Francisca, 45, 90º E, 17518, Villegas de Arriba', 'jesus.montalvo@yahoo.es', 'Otros', 'Ninguno', NULL, NULL, NULL, 1),
(1852, 9300, 'Cristina Navarro Segundo', 'Sevilla', 37597278, 47, '+34 987-342', 'Ruela Alexandra, 34, 53º E, 04459, A Aguayo de la Sierra', 'teresa96@latinmail.com', 'Masculino', 'Ninguno', NULL, NULL, NULL, 1),
(1853, 2650, 'Francisco Villareal Tercero', 'Barraza', 16018115, 49, '+34 978 05 ', 'Ronda Guillem, 182, 4º D, 32960, Os Concepción del Bages', 'tbecerra@ledesma.org', 'Femenino', 'Ninguno', NULL, NULL, NULL, 1),
(1854, 5218, 'Gael Gurule', 'Sandoval', 7191104, 52, '946336127', 'Travessera Marcos, 369, 23º F, 70365, Ybarra Baja', 'elizondo.vera@pina.net', 'Otros', 'Ninguno', NULL, NULL, NULL, 1),
(1855, 1378, 'Dr. Sofía Gálvez', 'Posada', 28073081, 38, '981 480632', 'Carrer Garrido, 6, 14º D, 93857, Toro de Lemos', 'lybarra@olivares.es', 'Otros', 'Ninguno', NULL, NULL, NULL, 1),
(1856, 2896, 'Dr. María Orosco', 'Martín', 27671888, 41, '973-530844', 'Carrer Nadia, 3, 8º F, 58350, Lucas Medio', 'diana.gamez@gmail.com', 'Otros', 'Ninguno', NULL, NULL, NULL, 1),
(1857, 1081, 'María Pilar Sosa Hijo', 'Hernando', 36859750, 41, '920-42-3025', 'Avenida Covarrubias, 109, 23º D, 09034, L\' Clemente de la Sierra', 'juan98@aragon.org', 'Masculino', 'Ninguno', NULL, NULL, NULL, 1),
(1858, 2661, 'Sr. Jaime Espino Segundo', 'Benítez', 26484618, 15, '955011695', 'Rúa Eduardo, 66, Bajos, 73233, As Viera del Vallès', 'ainara.valadez@hotmail.es', 'Otros', 'Ninguno', NULL, NULL, NULL, 1),
(1859, 7757, 'Ona Jimínez', 'Zamudio', 34442658, 24, '+34 929-82-', 'Praza Julia, 43, 0º D, 71529, Villa Cano', 'eric17@rincon.es', 'Femenino', 'Ninguno', NULL, NULL, NULL, 1),
(1860, 7283, 'Dr. Yaiza Lugo', 'Santacruz', 22404848, 38, '969-877281', 'Ronda Castaño, 22, 79º 9º, 43108, Villalba del Barco', 'alejandra29@hotmail.com', 'Otros', 'Ninguno', NULL, NULL, NULL, 1),
(1861, 2962, 'Juan José Juan', 'Rubio', 18063747, 35, '+34 981-69-', 'Calle Romero, 87, 3º, 80873, O Cisneros', 'lucas01@delgado.es', 'Masculino', 'Ninguno', NULL, NULL, NULL, 1),
(1862, 5334, 'David Peláez Segundo', 'Cabello', 18595333, 42, '+34 938 92 ', 'Ronda Quezada, 45, 5º, 54892, O Arce', 'chavarria.luisa@hotmail.com', 'Otros', 'Ninguno', NULL, NULL, NULL, 1),
(1863, 4932, 'Alba Rincón', 'Arteaga', 12662623, 78, '969925548', 'Ruela Alcántar, 8, 33º A, 69817, Álvarez del Penedès', 'claudia.roman@hotmail.com', 'Otros', 'Ninguno', NULL, NULL, NULL, 1),
(1864, 1332, 'D. Asier Zúñiga', 'Zelaya', 30312855, 25, '959-06-2371', 'Travesía Aaron, 38, 2º 6º, 20502, La Bautista Alta', 'juan.cisneros@yahoo.es', 'Otros', 'Ninguno', NULL, NULL, NULL, 1),
(1865, 2715, 'Dr. Gloria Apodaca', 'Cabán', 25118463, 20, '+34 9542091', 'Plaça David, 44, 22º D, 73750, L\' Blasco del Pozo', 'flores.mariapilar@avalos.net', 'Otros', 'Ninguno', NULL, NULL, NULL, 1),
(1866, 5726, 'Sofía Mateos', 'Lorenzo', 39850982, 61, '+34 958 644', 'Ruela Izan, 820, Entre suelo 6º, 43374, San Contreras', 'barragan.biel@yahoo.com', 'Masculino', 'Ninguno', NULL, NULL, NULL, 1),
(1867, 1997, 'Laura Valles', 'Villarreal', 16423019, 75, '+34 985 008', 'Plaça Vega, 39, 03º B, 39080, Alva de Ulla', 'qvaca@lucero.es', 'Otros', 'Ninguno', NULL, NULL, NULL, 1),
(1868, 1085, 'Lic. Fernando Montemayor', 'Colunga', 14737412, 39, '979354963', 'Praza Leo, 33, 8º D, 07566, As Yáñez de Arriba', 'kblazquez@estevez.com', 'Femenino', 'Ninguno', NULL, NULL, NULL, 1),
(1870, 1324, 'Manuel Betancourt', 'Olmos', 36866093, 40, '+34 927 807', 'Carrer Loera, 185, 9º E, 23048, As Lerma', 'cedillo.eduardo@villasenor.com', 'Femenino', 'Ninguno', NULL, NULL, NULL, 1),
(1871, 4782, 'Manuel De la Torre Hijo', 'Medrano', 11158066, 78, '+34 9462298', 'Calle Zaragoza, 630, 0º 6º, 12879, Puga del Pozo', 'gfajardo@badillo.com', 'Femenino', 'Ninguno', NULL, NULL, NULL, 1),
(1872, 2727, 'Sr. Santiago Jaime', 'Manzano', 21525174, 23, '+34 968-972', 'Avenida Delrío, 91, 35º C, 41437, O Ruelas', 'mariaangeles.lorenzo@cazares.es', 'Otros', 'Ninguno', NULL, NULL, NULL, 1),
(1873, 4425, 'Lic. Olga Muñiz Tercero', 'Aponte', 16051169, 4, '951-840018', 'Avenida África, 77, Entre suelo 3º, 95860, Os Vásquez de Arriba', 'ainhoa31@hispavista.com', 'Femenino', 'Ninguno', NULL, NULL, NULL, 1),
(1874, 6639, 'Ing. Diana Adame', 'Riojas', 31969089, 3, '977783813', 'Camiño Eric, 739, Ático 9º, 94787, As Casanova', 'agosto.alonso@terra.com', 'Otros', 'Ninguno', NULL, NULL, NULL, 1),
(1875, 9323, 'Juana Rojo', 'Cedillo', 12344551, 62, '+34 908 967', 'Rúa Oliver, 22, 5º C, 53416, Rico del Bages', 'grios@hotmail.com', 'Femenino', 'Ninguno', NULL, NULL, NULL, 1),
(1876, 4614, 'Saúl Medina', 'Montez', 24762903, 14, '+34 990 609', 'Avenida Marcos, 1, 7º C, 21229, Crespo del Mirador', 'javier36@hispavista.com', 'Otros', 'Ninguno', NULL, NULL, NULL, 1),
(1877, 7395, 'Ing. Adam Solorio Hijo', 'Navarrete', 38161754, 10, '997-42-8206', 'Camiño Lidia, 3, 45º B, 70709, La Marco del Vallès', 'wlucero@covarrubias.org', 'Masculino', 'Ninguno', NULL, NULL, NULL, 1),
(1878, 9171, 'Manuel Escribano', 'Canales', 18352297, 14, '949 147568', 'Ronda Prado, 51, 1º, 26837, Villa Alemán de Ulla', 'yeray.montero@hotmail.com', 'Femenino', 'Ninguno', NULL, NULL, NULL, 1),
(1879, 6748, 'Lic. Paola Hernádez', 'Zelaya', 6193066, 36, '998-426972', 'Carrer Oliver, 116, 7º A, 11983, Naranjo del Bages', 'carolina.berrios@arribas.es', 'Femenino', 'Ninguno', NULL, NULL, NULL, 1),
(1880, 2602, 'Jorge Oliva', 'Echevarría', 37981976, 8, '912-48-1057', 'Travessera Mar, 4, 0º B, 57054, L\' Valle del Vallès', 'banda.clara@hispavista.com', 'Femenino', 'Ninguno', NULL, NULL, NULL, 1),
(1881, 4294, 'D. Pol Castillo', 'Miranda', 27802142, 35, '950-163850', 'Camino Valdés, 612, 82º F, 17447, A Carvajal', 'npichardo@terra.com', 'Otros', 'Ninguno', NULL, NULL, NULL, 1),
(1882, 3430, 'Ángela Valladares', 'Santacruz', 30860466, 79, '+34 9847084', 'Camiño Mateo, 18, 6º E, 53290, Los Martín', 'victor.juan@orta.com', 'Femenino', 'Ninguno', NULL, NULL, NULL, 1),
(1883, 8593, 'Antonio Rico Tercero', 'Rocha', 14523449, 78, '973698669', 'Passeig Ana, 30, 4º, 66613, Gastélum de San Pedro', 'gabriel73@bueno.com', 'Otros', 'Ninguno', NULL, NULL, NULL, 1),
(1884, 9256, 'Ing. Gerard Morales Tercero', 'Laureano', 12828624, 27, '+34 997-152', 'Ruela Samuel, 5, Ático 2º, 31854, Vall Echevarría del Pozo', 'narenas@yahoo.es', 'Femenino', 'Ninguno', NULL, NULL, NULL, 1),
(1885, 5845, 'Rafael Carmona Hijo', 'Alicea', 35041641, 40, '993-83-3795', 'Avenida Nerea, 119, 6º C, 44088, Tamayo de la Sierra', 'pelaez.mariapilar@gmail.com', 'Otros', 'Ninguno', NULL, NULL, NULL, 1),
(1886, 9660, 'Ángela Girón', 'Arce', 20126662, 71, '951-35-5412', 'Calle Casillas, 36, 14º E, 11468, O Andrés de la Sierra', 'esquibel.abril@jiminez.com', 'Otros', 'Ninguno', NULL, NULL, NULL, 1),
(1887, 5026, 'Lic. Asier Ceja', 'Mateo', 13999251, 41, '982-074948', 'Calle Ana María, 214, 9º F, 44435, Galindo del Pozo', 'adrian50@terra.com', 'Femenino', 'Ninguno', NULL, NULL, NULL, 1),
(1888, 7085, 'Ona Perea', 'Sáez', 32489001, 50, '947-52-4834', 'Carrer Pedroza, 34, Bajo 2º, 24022, San Miranda de Arriba', 'salma82@varela.es', 'Otros', 'Ninguno', NULL, NULL, NULL, 1),
(1889, 2407, 'David Salinas', 'Frías', 18295089, 61, '945-14-9299', 'Praza Sierra, 2, 8º F, 24975, La Tirado de las Torres', 'kzamora@terra.com', 'Femenino', 'Ninguno', NULL, NULL, NULL, 1),
(1891, 5659, 'D. Adam Herrera', 'Barrios', 25738036, 33, '967-79-8736', 'Carrer Melgar, 3, 71º D, 39205, San Candelaria del Puerto', 'cardenas.alonso@yahoo.com', 'Femenino', 'Ninguno', NULL, NULL, NULL, 1),
(1892, 8852, 'Pau Prieto', 'Castañeda', 14720069, 49, '977-861698', 'Travessera Rubén, 4, 72º 8º, 99285, Os Arroyo de las Torres', 'helena44@pelayo.es', 'Masculino', 'Ninguno', NULL, NULL, NULL, 1),
(1894, 6502, 'Pol Valdés Hijo', 'Jaramillo', 39293122, 39, '909022609', 'Avinguda Silvia, 9, 99º 8º, 75788, El Oliva', 'regalado.ariadna@saldana.es', 'Otros', 'Ninguno', NULL, NULL, NULL, 1),
(1895, 6650, 'Víctor Herrero', 'Perea', 39910648, 76, '+34 953-070', 'Calle Jimena, 434, Bajos, 24726, As Valles Alta', 'jgodinez@gmail.com', 'Femenino', 'Ninguno', NULL, NULL, NULL, 1),
(1896, 4846, 'D. Francisco Javier Rosa Segundo', 'Alaniz', 13618659, 10, '975-10-0375', 'Travessera Ceballos, 28, 2º C, 97691, Balderas de Lemos', 'xteran@ibanez.com', 'Femenino', 'Ninguno', NULL, NULL, NULL, 1),
(1897, 1420, 'Alexandra Blasco', 'Centeno', 20833067, 33, '989202045', 'Praza Abeyta, 9, 06º 7º, 12984, Villa Banda', 'adriana98@hotmail.com', 'Otros', 'Ninguno', NULL, NULL, NULL, 1),
(1898, 1923, 'Lucas Rolón', 'De la Cruz', 28515356, 75, '973 175975', 'Avinguda Natalia, 46, 2º, 41988, Los Lucio', 'juan48@hotmail.es', 'Otros', 'Ninguno', NULL, NULL, NULL, 1),
(1899, 3364, 'Dr. Arnau De Jesús Hijo', 'Delatorre', 14176901, 32, '+34 9468537', 'Avinguda Antón, 4, 8º C, 86533, Los Millán del Puerto', 'brodriguez@hotmail.es', 'Femenino', 'Ninguno', NULL, NULL, NULL, 1),
(1900, 6780, 'Carmen Prado', 'Peres', 26111504, 60, '+34 902-019', 'Travessera Valentina, 37, Entre suelo 6º, 83942, As Burgos Baja', 'xnevarez@pereira.com.es', 'Femenino', 'Ninguno', NULL, NULL, NULL, 1),
(1901, 7059, 'Jimena Olivera', 'Arriaga', 14960961, 41, '+34 909-622', 'Camino Olga, 4, 0º, 19607, La Delafuente', 'jaimes.asier@yahoo.es', 'Femenino', 'Ninguno', NULL, NULL, NULL, 1),
(1902, 1977, 'Ing. Gabriel Guzmán Hijo', 'Peláez', 15720271, 26, '+34 930 567', 'Passeig Eric, 872, 19º A, 93286, Vall Bermejo', 'ian.santiago@munguia.es', 'Masculino', 'Ninguno', NULL, NULL, NULL, 1),
(1903, 4321, 'David Barrios', 'Antón', 10502265, 39, '934-999795', 'Camino Aurora, 23, 23º E, 39937, Villaseñor de las Torres', 'qarriaga@yahoo.com', 'Otros', 'Ninguno', NULL, NULL, NULL, 1),
(1904, 3435, 'Amparo Noriega', 'Roldán', 6743270, 42, '984-448381', 'Ruela Bautista, 435, 7º F, 16633, El Leal de la Sierra', 'eadame@valencia.com', 'Otros', 'Ninguno', NULL, NULL, NULL, 1),
(1905, 1641, 'Dario Fonseca Hijo', 'Asensio', 30404588, 73, '988 60 0526', 'Carrer Santos, 280, 8º D, 84952, La Narváez del Mirador', 'oscar46@yahoo.es', 'Masculino', 'Ninguno', NULL, NULL, NULL, 1),
(1906, 1323, 'Bruno Saiz', 'Delrío', 26638967, 9, '+34 901 50 ', 'Carrer Aitana, 915, Ático 5º, 40317, Galán de Ulla', 'manzano.ainara@yahoo.com', 'Femenino', 'Ninguno', NULL, NULL, NULL, 1),
(1907, 6375, 'Ariadna Alarcón Hijo', 'Hurtado', 10551867, 27, '+34 964-019', 'Rúa Noriega, 6, 90º C, 30097, Clemente del Bages', 'joel.gallardo@hotmail.es', 'Masculino', 'Ninguno', NULL, NULL, NULL, 1),
(1908, 9267, 'Pablo Olivas Tercero', 'Báez', 28209411, 74, '927-874919', 'Passeig Pereira, 4, 88º C, 26938, Murillo Alta', 'anaisabel71@yahoo.com', 'Masculino', 'Ninguno', NULL, NULL, NULL, 1),
(1909, 9419, 'Jesús Andreu', 'Moral', 15976296, 22, '906 13 1723', 'Ronda Carrasquillo, 948, Ático 0º, 89456, Os Polanco', 'aleix22@ceja.com', 'Masculino', 'Ninguno', NULL, NULL, NULL, 1),
(1910, 2228, 'Dr. Manuel Plaza', 'Rocha', 32945520, 62, '+34 945 78 ', 'Plaça Miguel Ángel, 65, 5º 2º, 99924, Valero del Barco', 'naranjo.erik@live.com', 'Otros', 'Ninguno', NULL, NULL, NULL, 1),
(1911, 4313, 'D. Miguel Barrios', 'López', 9521928, 61, '992-110663', 'Plaza Alma, 21, Ático 2º, 93643, San Montalvo de las Torres', 'asier.cazares@iglesias.es', 'Femenino', 'Ninguno', NULL, NULL, NULL, 1),
(1912, 4304, 'Lic. Fernando Alfaro Segundo', 'Cordero', 38582654, 78, '+34 921-63-', 'Avinguda Jan, 71, 71º B, 54244, Alfaro del Bages', 'rmontemayor@reina.com', 'Masculino', 'Ninguno', NULL, NULL, NULL, 1),
(1913, 4365, 'Victoria Abeyta Tercero', 'Dueñas', 11519694, 56, '+34 939 456', 'Plaça Ainhoa, 90, Bajo 4º, 15312, Vall Solorio', 'blanca94@hotmail.es', 'Otros', 'Ninguno', NULL, NULL, NULL, 1),
(1914, 7471, 'Sra. Encarnación Cedillo Hijo', 'Hurtado', 8413443, 53, '+34 9172590', 'Ruela Gamboa, 1, 01º A, 73347, A Solorio', 'montemayor.natalia@terra.com', 'Masculino', 'Ninguno', NULL, NULL, NULL, 1),
(1915, 3879, 'Fátima Zaragoza', 'Palomo', 35835835, 56, '+34 916 434', 'Plaza Villalba, 616, Entre suelo 9º, 33024, Leiva del Pozo', 'diego.irizarry@castellano.es', 'Otros', 'Ninguno', NULL, NULL, NULL, 1),
(1916, 1466, 'Juan José Espino', 'Lorenzo', 12724655, 5, '+34 912 910', 'Avinguda Víctor, 64, 29º B, 79730, As Elizondo de Lemos', 'tdelafuente@anaya.com.es', 'Masculino', 'Ninguno', NULL, NULL, NULL, 1),
(1917, 7764, 'Ing. Mario Páez', 'Montenegro', 13803464, 50, '+34 966 052', 'Avinguda Cuellar, 753, 99º D, 47834, L\' Baeza', 'cesar45@latinmail.com', 'Otros', 'Ninguno', NULL, NULL, NULL, 1),
(1918, 5996, 'Paula Garica', 'Barajas', 17821500, 72, '+34 926 55 ', 'Calle Blázquez, 37, 44º B, 62519, A Orellana', 'fespinosa@live.com', 'Femenino', 'Ninguno', NULL, NULL, NULL, 1),
(1919, 8657, 'Carlos Sancho', 'Alba', 11250008, 76, '+34 913-47-', 'Camiño Eric, 50, 3º F, 31625, As Solorio', 'carlos.leal@hispavista.com', 'Masculino', 'Ninguno', NULL, NULL, NULL, 1),
(1920, 2991, 'Erik Terán', 'Saucedo', 21649966, 7, '+34 9002204', 'Travesía Naia, 83, 7º B, 46585, A Urías Alta', 'ocampo.adrian@yahoo.com', 'Otros', 'Ninguno', NULL, NULL, NULL, 1),
(1921, 3604, 'Laia Castellano', 'Alfaro', 8977104, 57, '940 77 7217', 'Plaça Quintana, 221, 7º 4º, 11857, La Más', 'hugo.alejandro@live.com', 'Femenino', 'Ninguno', NULL, NULL, NULL, 1),
(1922, 6372, 'Gonzalo Mercado', 'Aponte', 29607746, 75, '+34 9889198', 'Travessera Barrera, 31, 14º A, 96409, Noriega de la Sierra', 'roque.ariadna@montoya.com.es', 'Otros', 'Ninguno', NULL, NULL, NULL, 1),
(1923, 9183, 'Miguel Lara', 'Alonso', 34616520, 20, '925-15-4470', 'Ruela Rosa, 879, Ático 1º, 74055, Valadez Medio', 'barroso.juana@jurado.es', 'Femenino', 'Ninguno', NULL, NULL, NULL, 1),
(1924, 6108, 'Olga Ros', 'Rojo', 39603050, 71, '971 93 6571', 'Paseo Francisco, 53, 60º 6º, 04283, Os Lozada Baja', 'xmelgar@hotmail.es', 'Masculino', 'Ninguno', NULL, NULL, NULL, 1),
(1925, 3297, 'Iván Gil', 'Roque', 23495969, 73, '+34 986-223', 'Calle Gutiérrez, 6, Entre suelo 5º, 39164, Nava del Penedès', 'barraza.zoe@arreola.com', 'Femenino', 'Ninguno', NULL, NULL, NULL, 1),
(1926, 2565, 'Sra. Teresa Tamez Segundo', 'Pereira', 16159539, 47, '965 016575', 'Plaza Zambrano, 3, 62º E, 98037, Los Vallejo del Pozo', 'dfeliciano@carbajal.es', 'Masculino', 'Ninguno', NULL, NULL, NULL, 1),
(1927, 8567, 'Ing. Eric Salazar', 'Méndez', 19264447, 57, '946 25 5090', 'Avinguda Lola, 47, 11º D, 31731, Andrés de Ulla', 'ovaldez@huerta.com', 'Otros', 'Ninguno', NULL, NULL, NULL, 1),
(1928, 9698, 'Adam Gálvez', 'Padrón', 7479406, 25, '955160183', 'Avinguda Biel, 785, 6º 5º, 74092, La Negrete de Arriba', 'eduardo.arguello@yahoo.com', 'Femenino', 'Ninguno', NULL, NULL, NULL, 1),
(1929, 6873, 'Ing. Ana Isabel Amaya', 'Vásquez', 17972516, 78, '+34 934 81 ', 'Avenida Gonzalo, 34, 27º 4º, 74302, Villa Vélez Alta', 'mhernandes@gimeno.es', 'Femenino', 'Ninguno', NULL, NULL, NULL, 1),
(1930, 7650, 'Guillermo Madrid', 'Perea', 30173927, 42, '995-918710', 'Avenida Peralta, 47, 52º F, 76508, Los Carballo', 'miguel.africa@aranda.org', 'Femenino', 'Ninguno', NULL, NULL, NULL, 1),
(1931, 5119, 'Rocío Gallegos Tercero', 'Rojo', 10281108, 16, '+34 9908367', 'Plaça Roberto, 21, 9º, 20843, Los Ojeda', 'josemanuel.tamez@live.com', 'Otros', 'Ninguno', NULL, NULL, NULL, 1),
(1932, 9321, 'Malak Arias', 'Becerra', 31081594, 64, '+34 917 19 ', 'Calle César, 26, 17º B, 80777, Villa Romo del Mirador', 'nmontenegro@villanueva.com', 'Femenino', 'Ninguno', NULL, NULL, NULL, 1),
(1933, 3748, 'Srta. Margarita Quesada', 'Adorno', 16733434, 39, '+34 984-041', 'Avinguda Pablo, 5, 21º 6º, 66423, As Valle Medio', 'aina.lorenzo@madrid.com', 'Otros', 'Ninguno', NULL, NULL, NULL, 1),
(1934, 9617, 'Gloria Serrato Hijo', 'Chavarría', 12731634, 18, '+34 925-13-', 'Ronda Rincón, 45, 37º C, 52815, El Galván del Barco', 'luis.delrio@latinmail.com', 'Otros', 'Ninguno', NULL, NULL, NULL, 1),
(1935, 7439, 'Dr. Jon Castaño', 'Ruvalcaba', 16599218, 29, '+34 938-345', 'Passeig Paredes, 84, 93º D, 77028, O Salinas', 'rendon.ignacio@hotmail.es', 'Femenino', 'Ninguno', NULL, NULL, NULL, 1),
(1936, 2417, 'Srta. Rosario Portillo', 'Jaime', 15086363, 29, '926474432', 'Paseo Eduardo, 49, 3º B, 20787, Carbonell del Penedès', 'sandoval.angeles@hotmail.com', 'Femenino', 'Ninguno', NULL, NULL, NULL, 1),
(1937, 3044, 'Alex Aranda', 'Esteve', 35763680, 51, '+34 956-01-', 'Rúa Orta, 4, 7º F, 71111, Carmona Alta', 'sofia28@gmail.com', 'Masculino', 'Ninguno', NULL, NULL, NULL, 1),
(1938, 5905, 'Rodrigo Solano', 'Del Río', 29822480, 76, '982 330143', 'Calle Noa, 6, 0º D, 93242, A Villalobos de Lemos', 'asoto@alvarado.org', 'Otros', 'Ninguno', NULL, NULL, NULL, 1),
(1939, 1905, 'Srta. Valentina Santiago', 'Méndez', 31645380, 48, '+34 929 15 ', 'Plaza Antonio, 8, 9º, 10191, Garibay Medio', 'uhernando@preciado.com', 'Otros', 'Ninguno', NULL, NULL, NULL, 1),
(1940, 4577, 'Rosa María Paredes', 'Carreón', 32294741, 57, '+34 923-84-', 'Passeig Escobedo, 9, 3º B, 71779, Bañuelos del Barco', 'xcarrero@yahoo.com', 'Otros', 'Ninguno', NULL, NULL, NULL, 1),
(1941, 9813, 'Ing. Francisca Olivas Tercero', 'Téllez', 6373026, 8, '+34 977 138', 'Praza Silvia, 5, 5º B, 82597, Zaragoza del Pozo', 'gamboa.jaime@hispavista.com', 'Femenino', 'Ninguno', NULL, NULL, NULL, 1),
(1942, 4055, 'Esther Tello', 'Navarrete', 21706315, 25, '+34 979 531', 'Avenida Luisa, 8, 5º B, 36645, Las Bermejo de Ulla', 'acosta.pablo@anton.com', 'Otros', 'Ninguno', NULL, NULL, NULL, 1),
(1943, 6101, 'Luis Naranjo', 'Cintrón', 29979207, 48, '+34 960 01 ', 'Rúa Iván, 932, 8º, 14351, Pantoja del Vallès', 'carla37@yahoo.com', 'Femenino', 'Ninguno', NULL, NULL, NULL, 1),
(1944, 8448, 'Dr. Lara Gimeno', 'Moral', 35095687, 11, '963-374636', 'Paseo Garay, 4, 3º F, 22705, San Delao', 'chavarria.irene@soliz.com', 'Masculino', 'Ninguno', NULL, NULL, NULL, 1),
(1945, 6846, 'Sr. Joel Solano', 'Llorente', 22349754, 78, '950 49 8352', 'Ronda Valentina, 977, 28º C, 01935, San Maldonado', 'ialanis@live.com', 'Otros', 'Ninguno', NULL, NULL, NULL, 1),
(1946, 5766, 'Omar Díez', 'Córdova', 15246083, 45, '+34 997-46-', 'Paseo Gabriel, 355, 26º F, 98209, As Orozco', 'antonio63@live.com', 'Masculino', 'Ninguno', NULL, NULL, NULL, 1),
(1947, 4420, 'Yeray Armijo', 'Calderón', 22359602, 25, '923 12 6465', 'Paseo Ramón, 826, 92º B, 96350, Vall Garay', 'jesus72@hispavista.com', 'Masculino', 'Ninguno', NULL, NULL, NULL, 1),
(1949, 3526, 'Juan José Reyes', 'Olivera', 16389202, 23, '+34 912 578', 'Paseo Juana, 8, 7º B, 05670, Ochoa Medio', 'isaac16@ornelas.com', 'Femenino', 'Ninguno', NULL, NULL, NULL, 1),
(1951, 7816, 'Raquel Iglesias', 'Muro', 11276297, 52, '902-843924', 'Carrer Nadia, 36, 1º 3º, 74874, El Muro de la Sierra', 'utamayo@live.com', 'Masculino', 'Ninguno', NULL, NULL, NULL, 1),
(1952, 9116, 'Adriana Alcala Segundo', 'Escobar', 35578652, 18, '+34 993-578', 'Avenida Oliver, 849, 3º B, 46687, El Luevano', 'oscar97@calderon.org', 'Otros', 'Ninguno', NULL, NULL, NULL, 1),
(1953, 6912, 'Sr. Asier Delarosa', 'Ruelas', 31419753, 21, '+34 989-453', 'Camiño Andrés, 65, 64º E, 68949, Villa Escalante', 'david.camacho@gmail.com', 'Masculino', 'Ninguno', NULL, NULL, NULL, 1),
(1954, 9271, 'Gael Loera', 'Jáquez', 15564113, 38, '986 079766', 'Calle Santiago, 248, 91º B, 56220, Ceballos del Mirador', 'casas.teresa@cruz.org', 'Femenino', 'Ninguno', NULL, NULL, NULL, 1),
(1955, 9276, 'Joel Uribe', 'Iglesias', 30065623, 45, '980-24-9378', 'Avenida Francisca, 5, 93º C, 50430, Riojas del Pozo', 'mariapilar24@yahoo.com', 'Otros', 'Ninguno', NULL, NULL, NULL, 1),
(1956, 6980, 'Ana Isabel Sisneros', 'León', 11578883, 70, '+34 952-388', 'Travessera Sara, 6, 63º 7º, 87450, Villa Quezada', 'ainhoa.tafoya@baca.es', 'Masculino', 'Ninguno', NULL, NULL, NULL, 1),
(1957, 8182, 'Francisco Javier Arellano', 'Alfonso', 22840604, 79, '+34 970 92 ', 'Carrer Daniel, 539, 5º D, 74718, A Alarcón', 'arellano.mario@valladares.com', 'Femenino', 'Ninguno', NULL, NULL, NULL, 1),
(1958, 5063, 'Nerea Velázquez', 'Briseño', 7710487, 58, '+34 967 15 ', 'Ruela Laia, 28, Bajos, 34779, A Pabón', 'enrique64@yahoo.com', 'Femenino', 'Ninguno', NULL, NULL, NULL, 1),
(1960, 1208, 'Rayan Guardado', 'Negrete', 39940742, 10, '+34 909 039', 'Rúa Bruno, 650, 36º 9º, 41968, Os Castillo', 'valdes.mireia@latinmail.com', 'Femenino', 'Ninguno', NULL, NULL, NULL, 1),
(1961, 2363, 'Salma Galván', 'Serrano', 34294440, 3, '967-017863', 'Praza Terrazas, 78, 2º B, 70548, Zapata Medio', 'rdelrio@velasquez.org', 'Femenino', 'Ninguno', NULL, NULL, NULL, 1),
(1962, 2862, 'Carmen Cortés', 'Brito', 14935422, 56, '965 199242', 'Ronda Saldivar, 12, 5º C, 79365, A Peña del Mirador', 'kcenteno@camacho.com.es', 'Masculino', 'Ninguno', NULL, NULL, NULL, 1),
(1963, 3339, 'Pilar Luna Segundo', 'Tirado', 39111789, 63, '933-48-7965', 'Rúa Ceja, 5, Bajos, 77878, A Juan Baja', 'villasenor.naiara@hispavista.com', 'Femenino', 'Ninguno', NULL, NULL, NULL, 1),
(1964, 8495, 'José Mateos', 'Escobar', 17210454, 19, '+34 923 57 ', 'Plaza De la Cruz, 24, 9º A, 18210, Os Garrido del Pozo', 'asier88@live.com', 'Otros', 'Ninguno', NULL, NULL, NULL, 1),
(1965, 6107, 'Sandra Pacheco', 'Calvo', 15258225, 53, '953461166', 'Calle Teresa, 982, 3º F, 34505, O Castellano', 'mroca@gmail.com', 'Otros', 'Ninguno', NULL, NULL, NULL, 1),
(1966, 2486, 'Andrés Fernández', 'Rosario', 6109774, 78, '+34 920 21 ', 'Camino Ángeles, 436, 6º F, 61266, O Vásquez', 'lorena57@latinmail.com', 'Femenino', 'Ninguno', NULL, NULL, NULL, 1),
(1967, 9333, 'Diego Deleón', 'Pedroza', 37830707, 13, '+34 928 257', 'Plaça Marta, 643, 76º F, 08392, Os Jaramillo', 'alexia70@hotmail.es', 'Masculino', 'Ninguno', NULL, NULL, NULL, 1),
(1968, 3758, 'Lucía Más', 'Clemente', 37666491, 16, '904 39 8377', 'Plaza Enrique, 85, 3º D, 21934, Villa Leyva del Bages', 'aitor53@pedraza.es', 'Femenino', 'Ninguno', NULL, NULL, NULL, 1),
(1969, 3818, 'D. Aitor Roca Hijo', 'Colunga', 16535386, 36, '+34 958-868', 'Ruela Luna, 93, 09º 1º, 22235, Villa Costa', 'ander.bustamante@delatorre.net', 'Femenino', 'Ninguno', NULL, NULL, NULL, 1),
(1970, 8135, 'Samuel Bravo Segundo', 'Marín', 32183360, 33, '944337790', 'Calle Santiago, 83, Bajo 2º, 45648, Barroso Alta', 'biel.cabrera@hotmail.es', 'Masculino', 'Ninguno', NULL, NULL, NULL, 1),
(1971, 3451, 'Dr. Inmaculada Castro Segundo', 'Loera', 10687848, 34, '926-573339', 'Camiño Carla, 52, Entre suelo 5º, 24354, La Delao', 'alejandro70@hispavista.com', 'Otros', 'Ninguno', NULL, NULL, NULL, 1),
(1972, 2597, 'Nahia Tejada', 'Apodaca', 36288613, 50, '+34 972 95 ', 'Travesía Arroyo, 66, 86º D, 22008, A Tejeda del Vallès', 'abeyta.helena@hotmail.com', 'Masculino', 'Ninguno', NULL, NULL, NULL, 1),
(1973, 1356, 'Leo Mares', 'Téllez', 12338335, 27, '+34 969 15 ', 'Camino Carvajal, 441, Bajos, 21369, Villa Tamayo', 'biel.sancho@live.com', 'Masculino', 'Ninguno', NULL, NULL, NULL, 1),
(1974, 8489, 'Ing. Emilia Ríos Segundo', 'Ojeda', 26511364, 41, '986276812', 'Camiño Velásquez, 7, 56º B, 13896, La Salinas del Vallès', 'gabreu@yahoo.es', 'Otros', 'Ninguno', NULL, NULL, NULL, 1),
(1975, 3149, 'Roberto Vélez', 'Luque', 23101399, 12, '+34 974 429', 'Avenida Centeno, 67, Ático 6º, 02914, Os Puente del Mirador', 'pau02@latinmail.com', 'Otros', 'Ninguno', NULL, NULL, NULL, 1),
(1976, 5587, 'Izan Riojas', 'Delacrúz', 29491083, 55, '+34 918 654', 'Carrer Abad, 8, 2º 2º, 24199, Burgos del Vallès', 'leiva.javier@crespo.es', 'Masculino', 'Ninguno', NULL, NULL, NULL, 1),
(1977, 5520, 'Dr. Ignacio Pozo Segundo', 'Campos', 31892753, 20, '914 577743', 'Carrer Olivera, 6, Bajo 9º, 69356, O Roig', 'uborrego@live.com', 'Femenino', 'Ninguno', NULL, NULL, NULL, 1),
(1978, 3957, 'Gerard Alonzo', 'Nevárez', 24712655, 9, '964-743313', 'Avinguda Mendoza, 8, 9º 4º, 84085, L\' Zambrano', 'zmercado@baca.es', 'Masculino', 'Ninguno', NULL, NULL, NULL, 1),
(1979, 4604, 'Sra. Vera Godoy', 'Preciado', 6503860, 78, '965-93-6394', 'Rúa Alberto, 116, 9º B, 01351, Villa Pacheco', 'omadera@escamilla.org', 'Femenino', 'Ninguno', NULL, NULL, NULL, 1),
(1980, 2271, 'Jorge Valladares', 'Prado', 12803270, 47, '+34 958 20 ', 'Praza Menéndez, 4, 4º D, 86788, Vall Abrego del Barco', 'jmadera@zamudio.com', 'Femenino', 'Ninguno', NULL, NULL, NULL, 1),
(1981, 6059, 'Andrea Viera', 'Román', 34089662, 8, '918737579', 'Avenida Moral, 256, 8º D, 23452, A Cazares Alta', 'pol.collazo@arce.com', 'Masculino', 'Ninguno', NULL, NULL, NULL, 1),
(1982, 1815, 'Daniel Gámez', 'Serrato', 32859283, 44, '+34 949-777', 'Camiño Gabriel, 13, 3º B, 92476, San Aponte Medio', 'jesus.crespo@barragan.org', 'Masculino', 'Ninguno', NULL, NULL, NULL, 1),
(1983, 3137, 'Dr. Isabel Padilla', 'Andreu', 26892866, 71, '976 373567', 'Praza Ana Isabel, 15, 80º A, 85606, San Marrero', 'olga13@fonseca.com', 'Otros', 'Ninguno', NULL, NULL, NULL, 1),
(1984, 7147, 'Antonia Medina Hijo', 'Escribano', 39062447, 24, '+34 936 63 ', 'Avenida Ainara, 783, 1º B, 00787, As Solorzano Baja', 'ibanez.adriana@yahoo.es', 'Masculino', 'Ninguno', NULL, NULL, NULL, 1),
(1985, 1619, 'Rubén De la Cruz', 'Pascual', 35732647, 65, '975-10-7414', 'Camino Marina, 315, 73º 7º, 17151, Cerda Medio', 'campos.abril@hotmail.com', 'Otros', 'Ninguno', NULL, NULL, NULL, 1),
(1986, 9982, 'Lara Baca', 'Hernández', 25637656, 54, '939 012200', 'Passeig Ainhoa, 47, 3º C, 81160, Galarza de las Torres', 'villalba.luis@yahoo.com', 'Femenino', 'Ninguno', NULL, NULL, NULL, 1),
(1987, 9484, 'Lic. Juan Carrero Tercero', 'Casares', 15845256, 4, '+34 974-615', 'Paseo Sergio, 3, 5º B, 98262, Vall Salcedo del Mirador', 'angela.olivo@negrete.es', 'Femenino', 'Ninguno', NULL, NULL, NULL, 1),
(1988, 8144, 'Srta. Lorena Benavídez', 'Carmona', 25627819, 29, '+34 9436940', 'Passeig Vallejo, 4, 7º E, 57513, Villa Valles Baja', 'gabriel89@hotmail.com', 'Femenino', 'Ninguno', NULL, NULL, NULL, 1),
(1989, 9351, 'Dr. Yeray Rojas', 'Álvarez', 20473678, 43, '+34 9554271', 'Avinguda Cuellar, 82, Bajos, 63628, Valdés Medio', 'david.jaramillo@live.com', 'Otros', 'Ninguno', NULL, NULL, NULL, 1),
(1990, 5482, 'Lucía Bermejo', 'De la Torre', 34526326, 66, '+34 914-395', 'Rúa Arnau, 7, 9º, 96454, Camacho del Pozo', 'karias@hotmail.com', 'Otros', 'Ninguno', NULL, NULL, NULL, 1),
(1991, 8150, 'Nahia Briones', 'Tello', 23756018, 65, '+34 947 22 ', 'Avenida Ángela, 167, Entre suelo 4º, 38028, Os Roca', 'romero.mario@esteban.com.es', 'Masculino', 'Ninguno', NULL, NULL, NULL, 1),
(1992, 6506, 'Carlota Sarabia', 'Rivero', 28509582, 29, '+34 919-20-', 'Carrer Gámez, 845, Entre suelo 3º, 29119, Estrada del Vallès', 'laura83@yahoo.com', 'Femenino', 'Ninguno', NULL, NULL, NULL, 1),
(1993, 7952, 'Jordi Villalpando', 'Cantú', 18138497, 16, '+34 9196201', 'Carrer Alba, 966, 07º B, 96851, El Alfaro', 'upantoja@terra.com', 'Femenino', 'Ninguno', NULL, NULL, NULL, 1),
(1994, 3937, 'Juan José Alcala', 'Correa', 12487800, 5, '+34 9162943', 'Rúa Reséndez, 20, 9º, 02306, Vall Segovia', 'castellano.jaime@gmail.com', 'Femenino', 'Ninguno', NULL, NULL, NULL, 1),
(1995, 9749, 'Valentina Menéndez', 'Rico', 14042038, 11, '+34 935 677', 'Carrer Gaona, 1, 07º F, 58900, Vall Domingo del Pozo', 'sedillo.unai@rincon.com', 'Femenino', 'Ninguno', NULL, NULL, NULL, 1),
(1996, 3627, 'Ariadna Varela', 'Delvalle', 39382510, 55, '926-53-8582', 'Carrer Dario, 229, 8º 3º, 76568, León de las Torres', 'jquintero@giron.com', 'Femenino', 'Ninguno', NULL, NULL, NULL, 1),
(1997, 5028, 'Lic. Paola Noriega Hijo', 'Zayas', 28767987, 22, '963-33-6761', 'Calle Medina, 404, 2º F, 92689, Valentín Alta', 'fernando.cepeda@concepcion.com', 'Masculino', 'Ninguno', NULL, NULL, NULL, 1),
(1998, 8562, 'Alexandra Matías', 'Gurule', 21970970, 70, '+34 961-467', 'Carrer Santiago, 249, 56º B, 80452, O Navas', 'unai.deanda@arguello.com.es', 'Masculino', 'Ninguno', NULL, NULL, NULL, 1),
(1999, 6800, 'Encarnación Montenegro Segundo', 'Hernádez', 32119886, 4, '+34 921 88 ', 'Camino Jaime, 72, 3º 5º, 33332, Vidal de Lemos', 'oesquivel@zavala.es', 'Masculino', 'Ninguno', NULL, NULL, NULL, 1),
(2000, 7526, 'Berta Cuesta', 'Marco', 35629850, 78, '+34 9546682', 'Ronda Frías, 4, 51º A, 26943, La Lebrón Medio', 'pol.cotto@live.com', 'Masculino', 'Ninguno', NULL, NULL, NULL, 1),
(2001, 4986, 'Aitor Herrera Segundo', 'Orozco', 22853671, 47, '+34 906 731', 'Ruela María Pilar, 47, Bajos, 16955, Vall Arteaga', 'olga45@hotmail.com', 'Masculino', 'Ninguno', NULL, NULL, NULL, 1),
(2002, 2709, 'Antonia Mateo', 'Contreras', 24988260, 78, '966 659866', 'Plaza Eric, 485, 85º 6º, 48476, Garica del Penedès', 'aitana.plaza@live.com', 'Masculino', 'Ninguno', NULL, NULL, NULL, 1),
(2003, 3185, 'Lidia Uribe', 'Valero', 31376732, 28, '+34 9541540', 'Ronda Vera, 52, 89º B, 74908, Lorente del Barco', 'oliver.mesa@hidalgo.com.es', 'Otros', 'Ninguno', NULL, NULL, NULL, 1),
(2004, 8538, 'Lucía Más Tercero', 'Leyva', 18764346, 65, '+34 953-904', 'Carrer Aleix, 316, 2º, 83476, L\' Rivero', 'noa51@terra.com', 'Otros', 'Ninguno', NULL, NULL, NULL, 1),
(2005, 3013, 'Juana Godoy', 'Fernández', 13879330, 76, '+34 973 249', 'Avinguda Vidal, 869, 37º B, 78427, A Andrés del Barco', 'padron.lidia@botello.es', 'Otros', 'Ninguno', NULL, NULL, NULL, 1),
(2006, 3112, 'D. Alejandro Iglesias Segundo', 'Marrero', 16660223, 54, '999 947056', 'Carrer Rentería, 5, Bajos, 75887, Mota del Pozo', 'ocerda@rojo.es', 'Femenino', 'Ninguno', NULL, NULL, NULL, 1),
(2007, 4278, 'Rafael Ornelas', 'Acosta', 21075198, 46, '+34 948 488', 'Camino Lira, 4, 87º E, 73653, A Rivero del Puerto', 'jose.veliz@heredia.es', 'Masculino', 'Ninguno', NULL, NULL, NULL, 1),
(2008, 9287, 'Sr. Alonso Sevilla Tercero', 'Tapia', 25976787, 50, '993137945', 'Rúa Roberto, 39, 73º F, 66602, A Burgos', 'guillermo64@live.com', 'Otros', 'Ninguno', NULL, NULL, NULL, 1),
(2009, 2815, 'Luisa Pacheco', 'Granado', 21028174, 14, '964 548510', 'Camino Fuentes, 798, 38º E, 33386, Os Alcaráz', 'lucia.escobedo@marti.com', 'Femenino', 'Ninguno', NULL, NULL, NULL, 1),
(2010, 6797, 'Salma Adorno', 'Cortés', 33412135, 54, '966-06-6225', 'Plaça Vela, 64, 7º B, 73094, O Carretero de Ulla', 'isabel43@ibanez.es', 'Femenino', 'Ninguno', NULL, NULL, NULL, 1),
(2011, 3049, 'Ing. Saúl Marín', 'Almaráz', 28859983, 77, '991 37 2699', 'Ruela Alcántar, 9, Entre suelo 5º, 14346, Madrigal de Ulla', 'beatriz.cordova@hispavista.com', 'Otros', 'Ninguno', NULL, NULL, NULL, 1),
(2012, 3400, 'Paola Delgadillo', 'Baca', 23407709, 44, '983 61 6086', 'Travesía Lira, 630, 14º C, 49342, Los Cotto del Penedès', 'ycuesta@hispavista.com', 'Femenino', 'Ninguno', NULL, NULL, NULL, 1),
(2013, 8698, 'Valentina Delafuente Segundo', 'Nieto', 23156763, 68, '938-86-7639', 'Plaça Castillo, 11, 1º 3º, 36469, Los Jaime', 'carla84@esteve.es', 'Masculino', 'Ninguno', NULL, NULL, NULL, 1),
(2014, 2465, 'María Carmen Mateos', 'Ureña', 33900822, 74, '+34 942-761', 'Camino Jimena, 91, 03º A, 01299, Las Jaime del Vallès', 'rvillalba@lovato.org', 'Masculino', 'Ninguno', NULL, NULL, NULL, 1),
(2015, 6364, 'Cristina Cuesta', 'Riera', 6546043, 28, '935-758691', 'Carrer Rocío, 5, 45º A, 37558, Jaramillo del Mirador', 'resendez.miguel@live.com', 'Otros', 'Ninguno', NULL, NULL, NULL, 1),
(2016, 6684, 'Lic. Jorge Fonseca Hijo', 'Nieto', 38166314, 59, '+34 9310929', 'Camino Valdés, 8, Bajos, 30968, Las Castañeda del Mirador', 'szarate@hispavista.com', 'Femenino', 'Ninguno', NULL, NULL, NULL, 1),
(2017, 1603, 'Dña Ana Salinas Segundo', 'Ferrer', 30136696, 46, '+34 958-322', 'Praza María Pilar, 92, Entre suelo 4º, 32100, O Sarabia del Puerto', 'rodriguez.jordi@live.com', 'Otros', 'Ninguno', NULL, NULL, NULL, 1),
(2018, 9069, 'Verónica Santacruz', 'Cabán', 37899724, 20, '+34 9357668', 'Praza Víctor, 22, 0º D, 77021, Estrada del Bages', 'rosamaria.ozuna@hotmail.es', 'Otros', 'Ninguno', NULL, NULL, NULL, 1),
(2020, 8458, 'Rosa Lorente', 'Correa', 28180023, 60, '950-25-8530', 'Camiño Campos, 9, 9º C, 12713, Los Linares de Ulla', 'cardenas.raquel@baca.com', 'Masculino', 'Ninguno', NULL, NULL, NULL, 1),
(2021, 1459, 'D. Ignacio Uribe', 'Carrera', 7700532, 52, '+34 921-24-', 'Avinguda Herrero, 1, 3º F, 04368, Mojica Medio', 'bermejo.nadia@yahoo.es', 'Masculino', 'Ninguno', NULL, NULL, NULL, 1),
(2022, 6090, 'Antonio Regalado Tercero', 'Gaytán', 33231513, 40, '976-75-8675', 'Calle Alcántar, 163, 46º A, 48401, San Cerda', 'faleman@pulido.com', 'Femenino', 'Ninguno', NULL, NULL, NULL, 1),
(2023, 2882, 'Teresa Leal Tercero', 'Ordoñez', 24011435, 68, '+34 916-34-', 'Camino Ignacio, 37, 5º 7º, 22936, A Báez', 'erik85@hotmail.es', 'Femenino', 'Ninguno', NULL, NULL, NULL, 1),
(2024, 6129, 'María Carmen Quezada', 'Luna', 37401863, 59, '931-88-6508', 'Praza Nájera, 14, 6º, 09544, Quintanilla del Bages', 'mata.daniela@hotmail.es', 'Femenino', 'Ninguno', NULL, NULL, NULL, 1),
(2025, 6309, 'Nicolás Salcedo Tercero', 'Monroy', 18135659, 76, '919 720185', 'Camiño Solorzano, 825, 4º F, 97776, Vall Sáez del Bages', 'alma.venegas@navarro.com', 'Femenino', 'Ninguno', NULL, NULL, NULL, 1),
(2028, 5498, 'Verónica Valle', 'Pabón', 15332154, 65, '929-017726', 'Calle Luque, 6, 36º F, 93190, La Abrego del Puerto', 'carla.sanabria@menendez.com', 'Otros', 'Ninguno', NULL, NULL, NULL, 1),
(2029, 2542, 'Sofía Rico', 'Sola', 19202552, 44, '967 98 7827', 'Avenida Oriol, 27, 6º F, 62050, Puente de las Torres', 'nandres@meza.com', 'Masculino', 'Ninguno', NULL, NULL, NULL, 1),
(2030, 2683, 'Malak Espinoza', 'Delao', 24129209, 80, '+34 994-289', 'Camiño Natalia, 7, 4º D, 45292, Urrutia de las Torres', 'qdavila@aparicio.org', 'Otros', 'Ninguno', NULL, NULL, NULL, 1),
(2031, 6593, 'Luis Longoria', 'Piñeiro', 9122025, 66, '+34 972-94-', 'Rúa Abril, 6, 5º A, 09843, Villa Ochoa de la Sierra', 'palicea@pons.com', 'Femenino', 'Ninguno', NULL, NULL, NULL, 1),
(2032, 2350, 'Carmen Montañez', 'Santillán', 33337402, 4, '926475139', 'Paseo Lucía, 330, 30º B, 84162, El Guevara', 'lbermejo@terra.com', 'Otros', 'Ninguno', NULL, NULL, NULL, 1),
(2033, 6209, 'Rubén Piña Segundo', 'Padilla', 26297266, 22, '943 554708', 'Ruela Olivia, 324, 59º B, 75386, El Valero', 'unai07@caban.org', 'Femenino', 'Ninguno', NULL, NULL, NULL, 1),
(2035, 6833, 'D. Jorge Flórez', 'Miranda', 35069153, 46, '974-624633', 'Plaça Granados, 47, 3º F, 52742, Las Trujillo de Ulla', 'carlota77@aragon.es', 'Femenino', 'Ninguno', NULL, NULL, NULL, 1),
(2036, 9969, 'Laia Hernándes', 'Sandoval', 25674796, 39, '+34 902 04 ', 'Carrer Cantú, 98, 1º E, 29055, El Baeza Baja', 'ian12@yahoo.com', 'Masculino', 'Ninguno', NULL, NULL, NULL, 1),
(2037, 1274, 'Roberto Saucedo', 'Dueñas', 27548712, 3, '976 19 4586', 'Carrer Ornelas, 8, Ático 3º, 11511, Las Banda', 'ocalderon@banuelos.es', 'Femenino', 'Ninguno', NULL, NULL, NULL, 1),
(2038, 3322, 'Dario Verdugo', 'Aragón', 26509269, 27, '983975684', 'Passeig Quezada, 4, 6º 6º, 34196, Los Alemán del Vallès', 'faleman@terra.com', 'Otros', 'Ninguno', NULL, NULL, NULL, 1),
(2039, 2691, 'Inmaculada De la Fuente', 'Rivas', 38264659, 60, '+34 921-832', 'Plaça Adriana, 9, Bajos, 85982, Roybal del Barco', 'ursula.godoy@hispavista.com', 'Otros', 'Ninguno', NULL, NULL, NULL, 1),
(2040, 6714, 'Gabriela Abad', 'Echevarría', 15303600, 1, '+34 905 225', 'Ruela Gaytán, 61, 1º E, 38985, L\' Oliva', 'rayan60@aguilar.org', 'Otros', 'Ninguno', NULL, NULL, NULL, 1),
(2041, 8205, 'Sofía Bermejo', 'Lorenzo', 38024389, 20, '+34 999-29-', 'Carrer Mendoza, 232, 1º, 46634, O Calvo', 'jon55@yahoo.com', 'Otros', 'Ninguno', NULL, NULL, NULL, 1),
(2042, 1105, 'Miguel Delagarza', 'Salcido', 29001812, 62, '+34 955 802', 'Travesía Miranda, 947, Ático 9º, 43490, Rojo de la Sierra', 'lovato.guillermo@cervantez.com', 'Femenino', 'Ninguno', NULL, NULL, NULL, 1),
(2043, 6977, 'Sra. Isabel Santos', 'Guerra', 29010715, 31, '+34 959 08 ', 'Camiño Pastor, 68, 9º B, 68868, Vall Rentería del Pozo', 'mario.grijalva@cortes.com.es', 'Masculino', 'Ninguno', NULL, NULL, NULL, 1),
(2044, 1421, 'Lic. Santiago Galán Hijo', 'Díez', 25699550, 54, '927-45-1492', 'Travessera Rojo, 80, Entre suelo 8º, 58668, El Cardona Medio', 'romo.andres@ocampo.com.es', 'Masculino', 'Ninguno', NULL, NULL, NULL, 1),
(2045, 8880, 'Javier Tamez Hijo', 'Figueroa', 11092374, 34, '+34 959-257', 'Calle Guillermo, 89, 39º F, 58039, A Alva de la Sierra', 'candela.burgos@yahoo.com', 'Femenino', 'Ninguno', NULL, NULL, NULL, 1),
(2046, 8200, 'Ing. Francisca Henríquez Hijo', 'Galindo', 34698670, 4, '934 914465', 'Plaza Matías, 24, 1º B, 62926, Os Mata', 'sisneros.guillem@yahoo.es', 'Otros', 'Ninguno', NULL, NULL, NULL, 1),
(2047, 7520, 'Jorge Ozuna', 'Castellano', 8203381, 54, '+34 943 113', 'Travesía Sergio, 6, 04º E, 10125, Tijerina de las Torres', 'claudia63@figueroa.org', 'Masculino', 'Ninguno', NULL, NULL, NULL, 1),
(2048, 4862, 'Miguel Ángel Ordoñez Tercero', 'Hernando', 26648312, 5, '968-412974', 'Rúa Berta, 167, 1º B, 41801, Os Velasco del Puerto', 'aitor43@acosta.es', 'Otros', 'Ninguno', NULL, NULL, NULL, 1),
(2049, 5743, 'Diana Acosta', 'Piña', 33417031, 72, '+34 932-975', 'Paseo Esquibel, 74, 7º C, 56160, Salgado del Bages', 'mrios@contreras.com', 'Masculino', 'Ninguno', NULL, NULL, NULL, 1),
(2050, 5620, 'Sr. Álvaro Riera', 'Rosado', 26869720, 71, '926 693068', 'Carrer Escobedo, 817, 5º F, 20932, La Juan de San Pedro', 'rcoronado@paredes.com', 'Femenino', 'Ninguno', NULL, NULL, NULL, 1),
(2051, 2130, 'Sofía Rincón', 'Puga', 19069231, 74, '917-112056', 'Travessera Patricia, 38, 5º E, 37689, L\' Cordero del Mirador', 'ruben94@gmail.com', 'Otros', 'Ninguno', NULL, NULL, NULL, 1),
(2052, 5061, 'Juan Batista', 'Gutiérrez', 25086637, 19, '+34 920-28-', 'Ronda Antonio, 617, 16º A, 10275, Vall Haro Baja', 'rolon.natalia@hotmail.es', 'Otros', 'Ninguno', NULL, NULL, NULL, 1),
(2053, 2648, 'Dña Lola Batista', 'Franco', 32144915, 58, '980 76 8666', 'Rúa Cabán, 981, 3º 0º, 22371, As Hernádez', 'ana.pabon@hotmail.es', 'Otros', 'Ninguno', NULL, NULL, NULL, 1);
INSERT INTO `solicitantes` (`id_sol`, `carnet`, `nom_sol`, `ape_sol`, `ced_sol`, `edad_sol`, `tlf_sol`, `dir_sol`, `corr_sol`, `sex_sol`, `ocup_sol`, `nom_inst`, `dir_inst`, `tel_inst`, `estado_s`) VALUES
(2054, 6678, 'Laia Arguello Tercero', 'Rodrigo', 10194586, 41, '+34 985 36 ', 'Calle Rico, 30, Ático 1º, 26395, L\' Téllez de Ulla', 'juanjose.cardenas@hotmail.es', 'Otros', 'Ninguno', NULL, NULL, NULL, 1),
(2056, 7462, 'Alexandra Anguiano Segundo', 'Burgos', 7669138, 24, '+34 9907026', 'Ronda Valverde, 373, 7º F, 11261, Toro del Penedès', 'kposada@yahoo.com', 'Otros', 'Ninguno', NULL, NULL, NULL, 1),
(2057, 1751, 'Ing. Unai Mayorga Tercero', 'Parra', 30234878, 25, '919 56 2745', 'Calle Elena, 561, 51º 8º, 75055, Lázaro de Lemos', 'dcardenas@garrido.es', 'Femenino', 'Ninguno', NULL, NULL, NULL, 1),
(2058, 6687, 'Naia Toledo', 'Calderón', 36891471, 13, '907 549521', 'Ruela Casárez, 541, 8º C, 98402, Las Montes', 'joseantonio.amaya@latinmail.com', 'Otros', 'Ninguno', NULL, NULL, NULL, 1),
(2059, 1061, 'Ing. César Antón Segundo', 'Meraz', 26237178, 16, '+34 923-935', 'Calle Rocha, 117, 2º, 63860, Los Angulo', 'idelagarza@benavidez.com', 'Otros', 'Ninguno', NULL, NULL, NULL, 1),
(2060, 4551, 'Jan Nazario', 'Peres', 28077339, 55, '938 71 1699', 'Camiño Vera, 46, Bajos, 24593, Villa Feliciano', 'yblasco@samaniego.org', 'Otros', 'Ninguno', NULL, NULL, NULL, 1),
(2062, 7588, 'Lic. Gerard Flores', 'Jaime', 6628528, 24, '+34 985-112', 'Travessera Urrutia, 20, 5º F, 44422, Os Simón del Puerto', 'anaisabel.luque@diez.com', 'Femenino', 'Ninguno', NULL, NULL, NULL, 1),
(2063, 8893, 'Claudia Gastélum', 'Ruvalcaba', 31776239, 28, '987 03 8370', 'Travessera Ozuna, 8, 20º E, 32577, Los Ros del Barco', 'nmiguel@yahoo.com', 'Masculino', 'Ninguno', NULL, NULL, NULL, 1),
(2066, 7231, 'José Antonio Ledesma Hijo', 'Fonseca', 27045196, 44, '997 95 6774', 'Praza Gabriela, 300, 5º C, 77946, San Sarabia Baja', 'rosario.almanza@hotmail.com', 'Masculino', 'Ninguno', NULL, NULL, NULL, 1),
(2067, 5337, 'Ainhoa Valle', 'Cuevas', 17333314, 49, '986 139728', 'Avinguda De Anda, 11, Entre suelo 8º, 60897, As Valdivia de San Pedro', 'yaiza.collado@gmail.com', 'Masculino', 'Ninguno', NULL, NULL, NULL, 1),
(2068, 6557, 'Alonso Cuesta Tercero', 'Castañeda', 11063978, 32, '981249929', 'Ruela Laura, 9, Ático 3º, 26407, San Serra del Pozo', 'cristian.tejeda@yahoo.com', 'Femenino', 'Ninguno', NULL, NULL, NULL, 1),
(2069, 9039, 'Rocío Collado', 'Vázquez', 30156165, 44, '+34 924 827', 'Passeig Pedro, 476, 5º F, 61682, Los Bernal', 'galcantar@sotelo.net', 'Otros', 'Ninguno', NULL, NULL, NULL, 1),
(2070, 4844, 'Antonia Ocasio', 'Garay', 18584678, 50, '+34 984-40-', 'Camino Barajas, 31, 3º 9º, 62086, As Rosado de San Pedro', 'villanueva.alexia@armenta.com', 'Masculino', 'Ninguno', NULL, NULL, NULL, 1),
(2071, 5101, 'Ona Tamez', 'Rodarte', 8717425, 27, '+34 967 886', 'Plaza Alma, 72, 6º D, 96850, Villa Barrera', 'bestevez@live.com', 'Otros', 'Ninguno', NULL, NULL, NULL, 1),
(2074, 2243, 'Ainhoa Altamirano', 'Farías', 16893235, 13, '996-06-9483', 'Camino Adam, 7, 5º A, 59433, La Fernández', 'miguel.galan@riera.com', 'Masculino', 'Ninguno', NULL, NULL, NULL, 1),
(2075, 5635, 'Srta. Emilia Jaimes', 'Luevano', 19337540, 2, '+34 901 37 ', 'Avinguda Adriana, 5, Bajos, 91347, Mota del Vallès', 'montez.anamaria@yahoo.com', 'Otros', 'Ninguno', NULL, NULL, NULL, 1),
(2076, 3325, 'Ignacio Ibáñez Segundo', 'Terrazas', 14211474, 48, '+34 920-991', 'Calle Brito, 931, 14º A, 49304, De Jesús de San Pedro', 'qcarrera@oquendo.es', 'Femenino', 'Ninguno', NULL, NULL, NULL, 1),
(2077, 4736, 'Rafael Covarrubias', 'Ornelas', 29340569, 64, '922 98 1314', 'Praza Leo, 28, 5º C, 28557, Palacios del Pozo', 'barroso.franciscojavier@hispavista.com', 'Femenino', 'Ninguno', NULL, NULL, NULL, 1),
(2078, 5801, 'Sonia Cortez', 'Rico', 7928073, 35, '936 852555', 'Rúa Vásquez, 6, 2º A, 75617, Roque del Vallès', 'oliver.quinones@yahoo.es', 'Femenino', 'Ninguno', NULL, NULL, NULL, 1),
(2079, 9759, 'Miguel Ángel Almonte', 'Cabán', 10574473, 76, '918 97 1736', 'Rúa Antonio, 1, 2º A, 69878, Villa Vergara', 'jaime.barrientos@terra.com', 'Femenino', 'Ninguno', NULL, NULL, NULL, 1),
(2080, 2637, 'Francisca Escobedo', 'Vicente', 17708333, 39, '+34 917-349', 'Passeig Rosa, 776, 92º E, 05133, Leal del Barco', 'mvenegas@llamas.com', 'Masculino', 'Ninguno', NULL, NULL, NULL, 1),
(2081, 4993, 'Candela Botello', 'Melgar', 28001707, 52, '+34 9320130', 'Avenida Solís, 11, 88º E, 36922, Jaime de las Torres', 'juana83@yahoo.es', 'Masculino', 'Ninguno', NULL, NULL, NULL, 1),
(2083, 6750, 'Sra. Vera Soria Hijo', 'Delgado', 13357425, 51, '936-903874', 'Travessera Villalobos, 85, Bajo 0º, 26203, Gaytán del Barco', 'carla67@yahoo.com', 'Otros', 'Ninguno', NULL, NULL, NULL, 1),
(2085, 5835, 'Unai Romero Hijo', 'Gámez', 10816388, 60, '974 32 8433', 'Rúa Erik, 468, Ático 2º, 59952, Los Fonseca', 'robles.pedro@live.com', 'Otros', 'Ninguno', NULL, NULL, NULL, 1),
(2086, 4693, 'Aitor Caro', 'Fuentes', 8756510, 44, '+34 923-18-', 'Plaça Alma, 212, 1º D, 05938, Ruvalcaba del Penedès', 'banaya@live.com', 'Masculino', 'Ninguno', NULL, NULL, NULL, 1),
(2087, 2158, 'Paola Granados', 'Delrío', 14615144, 71, '+34 999 312', 'Paseo Arnau, 91, Bajo 8º, 39339, A Munguía de San Pedro', 'medrano.mariaangeles@terra.com', 'Masculino', 'Ninguno', NULL, NULL, NULL, 1),
(2088, 1733, 'Alejandra Valdés Tercero', 'Luján', 31182252, 56, '+34 977-068', 'Travessera Fuentes, 4, 41º D, 97792, Armendáriz de las Torres', 'yago.salcedo@yahoo.es', 'Masculino', 'Ninguno', NULL, NULL, NULL, 1),
(2089, 8029, 'Guillermo Carmona', 'Marcos', 14600733, 55, '926649910', 'Ronda Manuel, 10, 1º C, 59017, O Agosto', 'munoz.alberto@villarreal.com.es', 'Otros', 'Ninguno', NULL, NULL, NULL, 1),
(2090, 9102, 'Ing. Martina Sepúlveda', 'Chavarría', 16452214, 30, '928-30-8218', 'Carrer Lucía, 5, Bajos, 52523, O Márquez', 'lara.reynoso@live.com', 'Otros', 'Ninguno', NULL, NULL, NULL, 1),
(2091, 1999, 'Lorena Ávila Hijo', 'Delgado', 30020600, 70, '903989034', 'Avenida Luis, 27, 8º E, 71512, El Lemus del Bages', 'ontiveros.luis@villalba.org', 'Femenino', 'Ninguno', NULL, NULL, NULL, 1),
(2092, 8498, 'Lorena Castro', 'Bustamante', 15399423, 64, '+34 987 867', 'Camino César, 631, 69º 4º, 70353, L\' Valle del Puerto', 'prodarte@herrera.org', 'Masculino', 'Ninguno', NULL, NULL, NULL, 1),
(2093, 5857, 'Biel Casas Segundo', 'Méndez', 26288145, 75, '976-371469', 'Ronda Adam, 8, Bajo 5º, 44491, Las Cardona Alta', 'biel.malave@live.com', 'Femenino', 'Ninguno', NULL, NULL, NULL, 1),
(2094, 6637, 'Paola Bueno', 'Carmona', 12295779, 68, '928 018635', 'Rúa Lidia, 575, Entre suelo 4º, 42512, Pagan de Arriba', 'lucia.aguayo@patino.com', 'Masculino', 'Ninguno', NULL, NULL, NULL, 1),
(2095, 3033, 'Gonzalo Carrera', 'Gaytán', 26301988, 29, '+34 920-743', 'Plaça Varela, 337, 7º D, 76061, Los Echevarría', 'samuel.vila@live.com', 'Otros', 'Ninguno', NULL, NULL, NULL, 1),
(2096, 6733, 'Juan Nieves Hijo', 'Mireles', 12114133, 65, '+34 901-958', 'Ruela Jaime, 1, 46º F, 53551, Los Hinojosa', 'nahia.burgos@prado.com', 'Masculino', 'Ninguno', NULL, NULL, NULL, 1),
(2097, 6171, 'Raquel Torres', 'Polo', 35221310, 47, '+34 988-67-', 'Carrer Vera, 50, 26º F, 50906, A Estévez del Pozo', 'oriol42@hotmail.es', 'Femenino', 'Ninguno', NULL, NULL, NULL, 1),
(2098, 7062, 'Laura Guevara', 'Pardo', 35290316, 57, '+34 973-04-', 'Calle José Manuel, 11, 16º B, 76658, Oquendo del Bages', 'tzambrano@yahoo.com', 'Femenino', 'Ninguno', NULL, NULL, NULL, 1);

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
(1, 'Diego Hinagas', 2, 'admin', '$2y$10$HjAlHC7glrx5y0Rc/Np16uFKn391mIelZIx1tXEmu625PCiEgPhh.', '4144595344', 'hinagasrodriguez@gmail.com', 1),
(10, 'Yureima Alcantara', 2, 'yureima', '$2y$10$6QS8ECW3V018tnO/K6TTnuO2eYK8nk5z4ZEcoIx3QzyOZ/mEoeGdK', '4144595123', 'yureima13_@gmail.com', 1),
(17, 'Alejandra Ramirez', 3, 'alejandra', '$2y$10$M1x2gqPhwz767OKuFA1IYupoUsyJ0fplrBAk50EgAc1UFxUyja9Nm', '4129874280', 'alejandra00_@gmail.com', 1),
(18, 'Miguel Hernandez', 1, 'miguel', '$2y$10$HNohCDHR1LUO7bivqvA3WetCY2m7XDIcG8maYDriS72k4qGPWfy0O', '4243494860', 'miguel2006@gmail.com', 1),
(19, 'Santiago Fermin', 1, 'lector', '$2y$10$FacG0mocR8ZAECdMQFxNKeen93OslUGQNQFqvhQheoqUGqsPjmC8.', '4161728821', 'santiago23@hotmail.com', 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `auditorias`
--
ALTER TABLE `auditorias`
  ADD PRIMARY KEY (`id_aud`),
  ADD KEY `usr_aud` (`usr_aud`);

--
-- Indices de la tabla `backup`
--
ALTER TABLE `backup`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `auditorias`
--
ALTER TABLE `auditorias`
  MODIFY `id_aud` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=110;

--
-- AUTO_INCREMENT de la tabla `backup`
--
ALTER TABLE `backup`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT de la tabla `events`
--
ALTER TABLE `events`
  MODIFY `id_event` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `event_participant`
--
ALTER TABLE `event_participant`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT de la tabla `inventario`
--
ALTER TABLE `inventario`
  MODIFY `id_inv` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=134;

--
-- AUTO_INCREMENT de la tabla `libros`
--
ALTER TABLE `libros`
  MODIFY `id_libro` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=224;

--
-- AUTO_INCREMENT de la tabla `news`
--
ALTER TABLE `news`
  MODIFY `id_new` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT de la tabla `news_image`
--
ALTER TABLE `news_image`
  MODIFY `id_new_image` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT de la tabla `organizer`
--
ALTER TABLE `organizer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `prestamo`
--
ALTER TABLE `prestamo`
  MODIFY `id_p` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Número identificador del préstamo', AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT de la tabla `questions`
--
ALTER TABLE `questions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT de la tabla `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `solicitantes`
--
ALTER TABLE `solicitantes`
  MODIFY `id_sol` int(11) NOT NULL AUTO_INCREMENT COMMENT 'id del solicitante bd', AUTO_INCREMENT=2100;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

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
