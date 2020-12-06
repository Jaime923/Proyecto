-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 22-05-2020 a las 21:28:01
-- Versión del servidor: 5.7.24
-- Versión de PHP: 7.2.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `markers`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `camps`
--

DROP TABLE IF EXISTS `camps`;
CREATE TABLE IF NOT EXISTS `camps` (
  `IDCamp` int(4) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `direccion` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `ciudad` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `estado` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`IDCamp`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `camps`
--

INSERT INTO `camps` (`IDCamp`, `nombre`, `direccion`, `ciudad`, `estado`) VALUES
(1, 'CBTis 271', 'Parque TecnoTam', 'Ciudad Victoria', 'Tamaulipas'),
(2, 'Colegio Justo Sierra', 'Calzada Gral. Luis Caballero', 'Ciudad Victoria', 'Tamaulipas'),
(3, 'Centro de las Artes', '10 Aldama y Mina', 'Ciudad Victoria', 'Tamaulipas'),
(4, 'Instituto Visión', 'Calle 15 Hidalgo', 'Ciudad Victoria', 'Tamaulipas'),
(5, 'Preescolar Sor Juana Ines', 'Calle 20', 'Queretaro', 'Queretaro'),
(6, 'UANL', 'Centro', 'Monterrey', 'Nuevo León'),
(7, 'Capítulo STEAM Victoria', '21 Zaragoza', 'Ciudad Victoria', 'Tamaulipas'),
(8, 'Capítulo STEAM Pachuca', 'Centro', 'Pachuca', 'Hidalgo'),
(9, 'Capítulo STEAM Huejutla', 'Centro', 'Huejutla', 'Hidalgo');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pedidos`
--

DROP TABLE IF EXISTS `pedidos`;
CREATE TABLE IF NOT EXISTS `pedidos` (
  `IDPedido` int(5) NOT NULL AUTO_INCREMENT,
  `IDProducto` int(5) NOT NULL,
  `nombre` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `estado` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `municipio` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `direccion` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `cp` varchar(6) COLLATE utf8_spanish_ci NOT NULL,
  `pago` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `fecha` date NOT NULL,
  PRIMARY KEY (`IDPedido`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `pedidos`
--

INSERT INTO `pedidos` (`IDPedido`, `IDProducto`, `nombre`, `estado`, `municipio`, `direccion`, `cp`, `pago`, `fecha`) VALUES
(1, 1, 'Jaime Aguilar', 'Tamaulipas', 'Victoria', 'Calle 18 Zona Centro', '87000', 'paypal', '2020-05-20');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

DROP TABLE IF EXISTS `productos`;
CREATE TABLE IF NOT EXISTS `productos` (
  `IDProducto` int(4) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(80) COLLATE utf8_spanish_ci NOT NULL,
  `tipo` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `precio` int(4) NOT NULL,
  PRIMARY KEY (`IDProducto`)
) ENGINE=MyISAM AUTO_INCREMENT=103 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`IDProducto`, `nombre`, `tipo`, `precio`) VALUES
(1, 'Paquete 12 marcadores ', 'Agua, punto fino', 100),
(2, 'Paquete 24 marcadores', 'Agua, punto fino', 160),
(3, 'Paquete 4 marcadores (rojo, azul, verde, negro)', 'Pizarra blanca', 60),
(4, 'Paquete 4 marcadores (rosa, naranja, morado, café)', 'Pizarra blanca', 70),
(5, 'Paquete 36 marcadores', 'Agua, punto fino', 100),
(6, 'Paquete 60 marcadores', 'Agua, punto fino', 160),
(7, 'Paquete 100 marcadores', 'Agua, punto fino', 250),
(8, 'Paquete 12 marcadores', 'Agua, punto medio', 120),
(9, 'Paquete 24 marcadores', 'Agua, punto medio', 150),
(10, 'Paquete 36 marcadores', 'Agua, punto medio', 170),
(11, 'Paquete 60 marcadores', 'Agua, punto medio', 200),
(12, 'Paquete 100 marcadores', 'Agua, punto medio', 300),
(13, 'Paquete 8 marcadores', 'Pizarra blanca', 140),
(14, 'Paquete 12 marcadores', 'Pizarra blanca', 160),
(15, 'Paquete 4 resaltadores (rosa, amarillo, naranja, verde)', 'Resaltadores neón', 30),
(16, 'Paquete 5 resaltadores (rosa, amarillo, naranja, verde)', 'Resaltadores neón', 50),
(17, 'Paquete 4 resaltadores (rosa, aqua, menta, lila)', 'Resaltadores pastel', 35),
(18, 'Paquete 6 resaltadores (roa, aqua, menta, lila, amarillo, melón)', 'Resaltadores pastel', 55),
(19, 'Kit de tinta básico (amarillo, rojo, azul)', 'Agua', 100),
(20, 'Kit de tinta completo (amarillo, rojo, azul, morado, naranja, verde)', 'Agua', 190),
(21, 'Kit de tinta personalizado', 'Agua', 300),
(22, 'Kit de tinta básico (rojo, azul y negro)', 'Pizarra blanca', 120),
(23, 'Kit de tinta completo (rojo, azul, negro, verde, magenta)', 'Pizarra blanca', 160),
(24, 'Kit de tinta personalizado ', 'Pizarra blanca', 320),
(25, 'Kit de tinta básico (amarillo, verde, rosa, naranja)', 'Resaltadores neón', 130),
(26, 'Kit de tinta completo (amarillo, verde, rosa, naranja, azul)', 'Resaltadores neón', 160),
(27, 'Kit de tinta pastel (rosa, lila, menta, aqua, melón)', 'Resaltadores pastel', 155),
(28, 'Paquete 12 marcadores', 'Agua, punto grueso', 70),
(29, 'Paquete 24 marcadores', 'Agua, punto grueso', 180),
(30, 'Paquete 12 marcadores', 'Agua, punto extra fino', 100),
(31, 'Paquete 24 marcadores', 'Agua, punto extra fino', 176),
(32, 'Paquete 50 marcadores', 'Agua, punto extra fino', 200),
(33, 'Paquete 8 marcadores', 'Metálicos', 70),
(34, 'Rellenado 8 marcadores', 'Agua, punto extra fino', 40),
(35, 'Rellenado 12 marcadores', 'Agua, punto extra fino', 60),
(36, 'Rellenado 24 marcadores', 'Agua, punto extra fino', 80),
(37, 'Rellenado 50 marcadores', 'Agua, punto extra fino', 100),
(38, 'Rellenado 12 marcadores', 'Agua, punto fino', 60),
(39, 'Rellenado 24 marcadores', 'Agua, punto fino', 60),
(40, 'Rellenado 36 marcadores', 'Agua, punto fino', 80),
(41, 'Estuche pequeño Nature Markers', 'Especiales', 150),
(42, 'Estuche mediano Nature Markers', 'Especiales', 200),
(43, 'Estuche grande Nature Markers', 'Especiales', 250),
(44, 'Marcador rellenable', 'Permanente, punto grueso', 50),
(45, 'Marcador rellenable', 'Permanente, punto medio', 45),
(46, 'Marcador rellenable', 'Permanente, punto fino', 40),
(47, 'Marcador rellenable', 'Permanente, punto extra fino', 45),
(48, 'Acuarelas 6 colores', 'Acuarela', 40),
(49, 'Acuarelas 8 colores', 'Acuarela', 45),
(50, 'Acuarelas 12 colores', 'Acuarela', 50),
(51, 'Paquete Óleo (6 tubos)', 'Óleo', 100),
(52, 'Playera Nature Markers talla chica', 'Especiales', 100),
(53, 'Playera Nature Markers talla mediana', 'Especiales', 110),
(54, 'Playera Nature Markers talla chica', 'Especiales', 100),
(55, 'Playera Nature Markers talla mediana', 'Especiales', 110),
(56, 'Playera Nature Markers talla grande', 'Especiales', 110),
(57, 'Playera Nature Markers talla xg', 'Especiales', 120),
(58, 'Cuaderno mándalas para colorear', 'Especiales', 25),
(59, 'Cuaderno de hojas recicladas', 'Especiales', 10),
(60, 'Gorra Nature Markers ', 'Especiales', 90),
(61, 'Pulsera Nature Markers', 'Especiales', 20),
(62, 'Termo Nature Markers', 'Especiales', 70),
(63, 'Taza Nature Markers', 'Especiales', 70),
(64, 'Bloc de dibujo', 'Especiales', 50),
(65, 'Manual de lettering', 'Especiales', 150),
(66, 'Títulos bonitos en 3 minutos', 'Especiales', 150),
(67, 'Ideas para tus apuntes', 'Especiales', 50),
(68, 'Lapicera Nature Markers', 'Especiales', 60),
(69, 'Borrador gigante Nature Markers', 'Especiales', 40),
(70, 'Paquete 4 marcadores (Negro, azul, rojo, verde)', 'Permanente, punto fino', 60),
(71, 'Paquete 12 marcadores', 'Permanente, punto fino', 100),
(72, 'Paquete 3 marcadores metálicos (oro, bronce, plata)', 'Permanente, punto fino', 70),
(73, 'Caja sorpresa', 'Especiales', 100),
(74, 'Tinta impresora', 'Impresora', 200),
(75, 'Tinta negra impresora', 'Impresora', 200),
(76, 'Impresora', 'Impresora', 2000),
(77, 'Paquete 5 marcadores con glitter', 'Agua, punto medio', 60);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

DROP TABLE IF EXISTS `usuarios`;
CREATE TABLE IF NOT EXISTS `usuarios` (
  `IDUsuario` int(5) NOT NULL AUTO_INCREMENT,
  `usuario` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `clave` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`IDUsuario`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`IDUsuario`, `usuario`, `clave`) VALUES
(1, 'Bella', 'bella');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
