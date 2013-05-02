-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 04-01-2013 a las 15:33:09
-- Versión del servidor: 5.5.24
-- Versión de PHP: 5.3.13

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `appsco_bd`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `preguntas`
--

CREATE TABLE IF NOT EXISTS `preguntas` (
  `id_pregunta` int(11) NOT NULL AUTO_INCREMENT,
  `pre_pregunta` text COLLATE utf8_bin,
  `pre_tipo` char(1) COLLATE utf8_bin DEFAULT NULL,
  PRIMARY KEY (`id_pregunta`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=29 ;

--
-- Volcado de datos para la tabla `preguntas`
--

INSERT INTO `preguntas` (`id_pregunta`, `pre_pregunta`, `pre_tipo`) VALUES
(1, 'La mayoría de los carritos de compras funcionan porque usan _____ para  almacenar información acerca de sus actividades en un sitio Web', 'i'),
(2, 'Cual es la principal característica del protocolo TCP/IP', 'i'),
(3, 'Para que sirve un DNS', 'i'),
(4, '¿Que es FTP?', 'i'),
(5, '¿Que es una URL?', 'i'),
(6, 'Para utilizar imágenes para la Web que tipo de compresión utilizaría Ud?', 'd'),
(7, 'En HTML esta etiqueta le permite hacer saltos de línea', 'd'),
(8, 'En HTML para que se usa la etiqueta <TR>', 'd'),
(9, 'La etiqueta HTML <IMG SRC> se emplea para hacer referencia a una _____ que aparecerá en la página Web.', 'd'),
(10, 'Los 3 tipos de formatos de imágenes que se usan frecuentemente en una pagina Web son:', 'd'),
(11, '¿Cuál es la forma correcta de crear un vínculo? ', 'd'),
(12, '¿Cuál de las siguientes es la principal ventaja de utilizar CSS? ', 'd'),
(13, 'La siguiente forma es válida para definir un color en HTML ', 'd'),
(14, 'Elija la etiqueta que nos dá el título más grande ', 'd'),
(15, '¿Cómo definimos un área de texto? ', 'd'),
(16, '¿Cuál es la sintaxis correcta en HTML para incluir una hoja de estilo? ', 'd'),
(17, 'En Programación Orientada a Objetos un objeto es', 't'),
(18, 'Se denomina clase a', 't'),
(19, '¿Cuál de las siguientes debe ser un atributo de la clase Perro?', 't'),
(20, 'Un método en Programación Orientada a Objetos es', 't'),
(21, '¿Cuál de las siguientes opciones es necesaria para extender una clase?', 't'),
(22, '¿Qué es una excepción?', 't'),
(23, '¿Cuál sentencia SQL puede ser utilizada para agregar un registro en la base de datos?', 't'),
(24, 'En SQL la sentencia JOIN permite', 't'),
(25, '¿En qué lugar se ejecuta generalmente el código Javascript?', 't'),
(26, '¿Cuáles de estas son marcas para la inserción del código Javascript en las páginas HTML?', 't'),
(27, 'La llamada al código Javascript debe colocarse en:', 't'),
(28, '¿Cuál es la instrucción usada para devolver un valor en una función en JavaScript?', 't');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `respuestas`
--

CREATE TABLE IF NOT EXISTS `respuestas` (
  `respuesta_id` int(11) NOT NULL AUTO_INCREMENT,
  `res_respuesta` text COLLATE utf8_bin NOT NULL,
  `res_estado` char(1) COLLATE utf8_bin NOT NULL,
  `res_idPregunta` int(11) NOT NULL,
  `res_valor` float DEFAULT NULL,
  PRIMARY KEY (`respuesta_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=113 ;

--
-- Volcado de datos para la tabla `respuestas`
--

INSERT INTO `respuestas` (`respuesta_id`, `res_respuesta`, `res_estado`, `res_idPregunta`, `res_valor`) VALUES
(1, 'Páginas', 'a', 1, 0),
(2, 'Links', 'a', 1, 0),
(3, 'Servidores', 'a', 1, 0),
(4, 'Cookies', 'a', 1, 4),
(5, 'Resuelve los nombres de dominio', 'a', 2, 0),
(6, 'Establece comunicación por paquetes de datos', 'a', 2, 4),
(7, 'Permite conectarse a unidad de red', 'a', 2, 0),
(8, 'Todas las anteriores', 'a', 2, 0),
(9, 'Resuelve nombres de dominio', 'a', 3, 4),
(10, 'Permite la transferencia de archivos', 'a', 3, 0),
(11, 'Es el protocolo de videoconferencias', 'a', 3, 0),
(12, 'Ninguna de las anteriores', 'a', 3, 0),
(13, 'Permite la transferencia de archivos de gran tamaño', 'a', 4, 4),
(14, 'Es el protocolo para chat', 'a', 4, 0),
(15, 'Son las siglas del creador de Internet', 'a', 4, 0),
(16, 'Ninguna de las anteriores', 'a', 4, 0),
(17, 'Un tipo de lenguaje de programación', 'a', 5, 0),
(18, 'Un acronimo en Inglés: User Response List', 'a', 5, 0),
(19, 'La dirección de un sitio Web o página', 'a', 5, 4),
(20, 'La persona que administra una pagina Web', 'a', 5, 0),
(21, '1200dpi', 'a', 6, 0),
(22, '720dpi', 'a', 6, 0),
(23, '300dpi', 'a', 6, 0),
(24, '72dpi', 'a', 6, 3.5),
(25, '<LINE>', 'a', 7, 0),
(26, '<LI>', 'a', 7, 0),
(27, '<BR>', 'a', 7, 3.5),
(28, '<UL>', 'a', 7, 0),
(29, 'Negrita', 'a', 8, 0),
(30, 'Fila dentro de una tabla', 'a', 8, 3.5),
(31, 'Salto de línea', 'a', 8, 0),
(32, 'Nuevo parrafo', 'a', 8, 0),
(33, 'Foto', 'a', 9, 0),
(34, 'Tabla', 'a', 9, 0),
(35, 'Imagen', 'a', 9, 3.5),
(36, 'Lista', 'a', 9, 0),
(37, 'GIF, BMP,PSD', 'a', 10, 0),
(38, 'PNG, GIF, JPG', 'a', 10, 3.5),
(39, 'JPG, PNG, TIF', 'a', 10, 0),
(40, 'PNG, JPG, PSD', 'a', 10, 0),
(41, '<a target="http://www.unsitio.com">...</a>', 'a', 11, 0),
(42, '<a href="http://www.unsitio.com">...</a>', 'a', 11, 3.5),
(43, '<a url="http://www.unsitio.com">...</a>', 'a', 11, 0),
(44, 'Ninguna de las anteriores', 'a', 11, 0),
(45, 'Permite a una página web ser interactiva', 'a', 12, 0),
(46, 'Permite que un sitio incorpore contenido multimedia', 'a', 12, 0),
(47, 'Simplifica el diseño de múltiples páginas dentro de un sitio web.', 'a', 12, 3.5),
(48, 'Ninguna de las anteriores', 'a', 12, 0),
(49, '<colorbeige>', 'a', 13, 0),
(50, '<color 245,245,220>', 'a', 13, 0),
(51, '#F5F5F5', 'a', 13, 3.5),
(52, 'Todas las anteriores', 'a', 13, 0),
(53, '<h1>', 'a', 14, 3.5),
(54, '<h6>', 'a', 14, 0),
(55, '<head>', 'a', 14, 0),
(56, 'Ninguna de las anteriores', 'a', 14, 0),
(57, '<textarea>', 'a', 15, 5),
(58, '<input type="textarea">', 'a', 15, 0),
(59, '<input type="text">', 'a', 15, 0),
(60, 'Ninguna de las anteriores', 'a', 15, 0),
(61, '<cssrel="estilos.css">', 'a', 16, 0),
(62, '<style src="/estilos.css">', 'a', 16, 0),
(63, '<link src="/stylesheet" name="text/css" href="/estilos.css"> ', 'a', 16, 0),
(64, '<link rel="stylesheet" type="text/css" href="estilos.css">', 'a', 16, 3.5),
(65, 'Una instancia de una clase', 'a', 17, 3.7),
(66, 'Una subclase de una clase primaria', 'a', 17, 0),
(67, 'Una entidad con atributos', 'a', 17, 0),
(68, 'Todas las anteriores', 'a', 17, 0),
(69, 'Una declaración de variables', 'a', 18, 0),
(70, 'Una instancia de un objeto', 'a', 18, 0),
(71, 'La estructura de un objeto que tiene atributos y métodos', 'a', 18, 3.3),
(72, 'Ninguna de las anteriores', 'a', 18, 0),
(73, 'Comer', 'a', 19, 0),
(74, 'Nombre', 'a', 19, 3.3),
(75, 'Perro', 'a', 19, 0),
(76, 'Ninguna de las anteriores', 'a', 19, 0),
(77, 'La forma de actuar y procedimientos de una clase', 'a', 20, 3.3),
(78, 'La forma de proceder un atributo', 'a', 20, 0),
(79, 'Los procedimientos y atributos de objetos', 'a', 20, 0),
(80, 'Todas las anteriores', 'a', 20, 0),
(81, 'Reservando espacio de memoria', 'a', 21, 0),
(82, 'Haciendo una nueva clase', 'a', 21, 0),
(83, 'Creando una instancia adicional de la clase', 'a', 21, 0),
(84, 'Creando una sub clase de una clase padre', 'a', 21, 3.3),
(85, 'Un evento que ocurre durante la ejecución de un programa que produce un error', 'a', 22, 3.3),
(86, 'Flujo normal de las instrucciones', 'a', 22, 0),
(87, 'Un objeto que tiene información del sistema', 'a', 22, 0),
(88, 'Ninguna de las anteriores\n', 'a', 22, 0),
(89, 'ADD', 'a', 23, 0),
(90, 'INSERT', 'a', 23, 3.3),
(91, 'UPDATE', 'a', 23, 0),
(92, 'Ninguna de las anteriores', 'a', 23, 0),
(93, 'Combinar dos cadenas de caracteres en una sola', 'a', 24, 0),
(94, 'Combinar registros de dos o mas tablas relacionadas', 'a', 24, 3.3),
(95, 'Combinar dos o mas vistas en una base de datos relacional', 'a', 24, 0),
(96, 'Ninguna de las anteriores', 'a', 24, 0),
(97, 'En la Web', 'a', 25, 0),
(98, 'En el Servidor', 'a', 25, 0),
(99, 'En el Browser ', 'a', 25, 3.3),
(100, 'Todas las anteriores', 'a', 25, 0),
(101, '<javascript_code> y </javascript_code>', 'a', 26, 0),
(102, '<script> y </script>', 'a', 26, 3.3),
(103, '<?script> y <script?>', 'a', 26, 0),
(104, 'Ninguna de las anteriores', 'a', 26, 0),
(105, 'La sección Body de la página', 'a', 27, 0),
(106, 'Antes de la etiqueta', 'a', 27, 0),
(107, 'Después de la etiqueta', 'a', 27, 0),
(108, 'Puede colocarse en la sección Head o en Body', 'a', 27, 3.3),
(109, 'Send', 'a', 28, 0),
(110, 'Return', 'a', 28, 3.3),
(111, 'Value', 'a', 28, 0),
(112, 'Ninguna de las anteriores', 'a', 28, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `resultados`
--

CREATE TABLE IF NOT EXISTS `resultados` (
  `id_resultados` int(11) NOT NULL AUTO_INCREMENT,
  `res_usuario_id` varchar(100) COLLATE utf8_bin DEFAULT NULL,
  `res_resultado` float DEFAULT NULL,
  `res_gen` float DEFAULT NULL,
  `res_pro` float DEFAULT NULL,
  `res_dis` float DEFAULT NULL,
  PRIMARY KEY (`id_resultados`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=62 ;

--
-- Volcado de datos para la tabla `resultados`
--

INSERT INTO `resultados` (`id_resultados`, `res_usuario_id`, `res_resultado`, `res_gen`, `res_pro`, `res_dis`) VALUES
(44, 'janis.garzon@cymetria.com', 66, 12, 26, 28),
(45, 'jenny.sierra@cymetria.com', 52, 8, 20, 25),
(46, 'diana.acevedo@cymetria.com', 35, 4, 10, 21),
(51, 'electroix@gmail.com', 89.2, 16, 36.7, 36.5);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE IF NOT EXISTS `usuarios` (
  `usuarios_id` int(11) NOT NULL AUTO_INCREMENT,
  `usu_nombre` varchar(150) COLLATE utf8_bin DEFAULT NULL,
  `usu_apellido` varchar(150) COLLATE utf8_bin DEFAULT NULL,
  `usu_correo` varchar(200) COLLATE utf8_bin DEFAULT NULL,
  `usu_profesion` varchar(100) COLLATE utf8_bin DEFAULT NULL,
  `usu_ocupacion` varchar(100) COLLATE utf8_bin DEFAULT NULL,
  `usu_sexo` char(1) COLLATE utf8_bin NOT NULL DEFAULT 'F',
  `usu_departamento` varchar(100) COLLATE utf8_bin DEFAULT NULL,
  `usu_celular` varchar(100) COLLATE utf8_bin DEFAULT NULL,
  `usu_tuiter` varchar(150) COLLATE utf8_bin DEFAULT NULL,
  `usu_blog` varchar(150) COLLATE utf8_bin DEFAULT NULL,
  `usu_google` varchar(150) COLLATE utf8_bin DEFAULT NULL,
  `usu_linkedin` varchar(150) COLLATE utf8_bin DEFAULT NULL,
  `usu_experiencia` varchar(100) COLLATE utf8_bin DEFAULT NULL,
  `usu_aprender` varchar(100) COLLATE utf8_bin DEFAULT NULL,
  `usu_horario` varchar(100) COLLATE utf8_bin DEFAULT NULL,
  `usu_fecha_inicio` date DEFAULT NULL,
  `usu_sector` varchar(100) COLLATE utf8_bin DEFAULT NULL,
  `usu_emprendedor` char(1) COLLATE utf8_bin NOT NULL DEFAULT 'N',
  `usu_invertir` char(1) COLLATE utf8_bin NOT NULL DEFAULT 'N',
  `usu_id_codigo` varchar(200) COLLATE utf8_bin DEFAULT NULL,
  `usu_aprender_2` varchar(100) COLLATE utf8_bin DEFAULT NULL,
  `usu_municipios` varchar(100) COLLATE utf8_bin DEFAULT NULL,
  `usu_telefono` varchar(100) COLLATE utf8_bin DEFAULT NULL,
  `usu_fecha_nacimiento` date DEFAULT NULL,
  `estado` char(1) COLLATE utf8_bin DEFAULT NULL,
  PRIMARY KEY (`usuarios_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=30 ;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`usuarios_id`, `usu_nombre`, `usu_apellido`, `usu_correo`, `usu_profesion`, `usu_ocupacion`, `usu_sexo`, `usu_departamento`, `usu_celular`, `usu_tuiter`, `usu_blog`, `usu_google`, `usu_linkedin`, `usu_experiencia`, `usu_aprender`, `usu_horario`, `usu_fecha_inicio`, `usu_sector`, `usu_emprendedor`, `usu_invertir`, `usu_id_codigo`, `usu_aprender_2`, `usu_municipios`, `usu_telefono`, `usu_fecha_nacimiento`, `estado`) VALUES
(24, 'alejandro', 'lombana', 'daosgava.garcia@gmail.com', 'ingeniero sistemas', 'empleado', 'm', 'BOGOTA DC', '876', '87689', '987', '876', '987', 'Hobby', 'NODEJS', 'mananas', '2013-01-14', '0', 's', 's', '', 'HTML5', 'BOGOTA DC', '654', '2013-01-15', ''),
(25, 'OSCAR', 'DUENAS', 'oscar.duenas@gmail.com', 'ingeniero sistemas', 'empleado', 'm', 'BOGOTA DC', '23434', 'sdfsd', 'sdfdsfdsffsd', 'sdfdsf', 'sdfdsf', 'Hobby', '', 'mananas', '2013-01-31', '0', 's', 's', 'oscar.duenas@gmail.com', '', 'BOGOTA DC', '324', '2013-01-02', 'i'),
(26, 'JANNIS', 'GARZON', 'janis.garzon@cymetria.com', NULL, NULL, 'F', 'BOGOTA DC', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'N', 'N', NULL, NULL, 'BOGOTA DC', NULL, NULL, 'i'),
(27, 'JENNY', 'SIERRA', 'jenny.sierra@cymetria.com', NULL, NULL, 'F', 'BOGOTA DC', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'N', 'N', NULL, NULL, 'BOGOTA DC', NULL, NULL, 'i'),
(28, 'DIANA', 'ACEVEDO', 'diana.acevedo@cymetria.com', NULL, NULL, 'F', 'BOGOTA DC', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'N', 'N', NULL, NULL, 'BOGOTA DC', NULL, NULL, 'i'),
(29, 'juan david ', 'hurtado g ', 'yaazkal@gmail.com ', NULL, NULL, 'm', 'ANTIOQUIA ', NULL, NULL, NULL, NULL, NULL, 'Hobby', NULL, NULL, NULL, NULL, 'N', 'N', NULL, NULL, 'MEDELLÍN ', NULL, NULL, NULL);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
