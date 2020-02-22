-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Versión del servidor:         10.1.9-MariaDB - mariadb.org binary distribution
-- SO del servidor:              Win32
-- HeidiSQL Versión:             9.2.0.4947
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

-- Volcando estructura de base de datos para pruebas
CREATE DATABASE IF NOT EXISTS `pruebas` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `pruebas`;


-- Volcando estructura para tabla pruebas.evidencia
CREATE TABLE IF NOT EXISTS `evidencia` (
  `id_evi` int(11) NOT NULL AUTO_INCREMENT,
  `fech` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `imagen` varchar(100) DEFAULT NULL,
  `tiempo` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id_evi`)
) ENGINE=InnoDB AUTO_INCREMENT=31 DEFAULT CHARSET=latin1;

-- Volcando datos para la tabla pruebas.evidencia: ~9 rows (aproximadamente)
/*!40000 ALTER TABLE `evidencia` DISABLE KEYS */;
INSERT INTO `evidencia` (`id_evi`, `fech`, `imagen`, `tiempo`) VALUES
	(5, '2020-02-15 21:28:38', 'imagenes/proceso.jpg', 'Inicio'),
	(9, '2020-02-15 18:30:45', 'imagenes/proceso.jpg', 'Estado actual'),
	(13, '2020-02-15 21:17:57', 'imagenes/vetas.png', 'Inicio'),
	(14, '2020-02-15 21:18:02', 'imagenes/mmmjhjjk.png', 'Inicio'),
	(15, '2020-02-14 23:34:52', 'imagenes/mmmjhjjk.png', 'Aceptado'),
	(25, '2020-02-15 11:24:13', 'imagenes/vetas.png', 'Aceptado'),
	(28, '2020-02-15 21:18:07', 'imagenes/proceso.jpg', 'Inicio'),
	(29, '2020-02-15 21:19:27', 'imagenes/MandamientosDelPadawan.jpg', 'En proceso'),
	(30, '2020-02-15 21:08:32', 'imagenes/proceso.jpg', 'Trabajo terminado');
/*!40000 ALTER TABLE `evidencia` ENABLE KEYS */;


-- Volcando estructura para tabla pruebas.mantenimiento
CREATE TABLE IF NOT EXISTS `mantenimiento` (
  `id_man` int(11) NOT NULL AUTO_INCREMENT,
  `folio_st` varchar(50) DEFAULT NULL,
  `folio_fat` varchar(50) DEFAULT NULL,
  `edificio` varchar(50) DEFAULT NULL,
  `solicitante` varchar(50) DEFAULT NULL,
  `fecha_solicitud` date DEFAULT NULL,
  `fecha_respuesta` date DEFAULT NULL,
  `fat` varchar(50) DEFAULT NULL,
  `estatus` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id_man`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

-- Volcando datos para la tabla pruebas.mantenimiento: ~3 rows (aproximadamente)
/*!40000 ALTER TABLE `mantenimiento` DISABLE KEYS */;
INSERT INTO `mantenimiento` (`id_man`, `folio_st`, `folio_fat`, `edificio`, `solicitante`, `fecha_solicitud`, `fecha_respuesta`, `fat`, `estatus`) VALUES
	(1, 'as', 'as', 'sa', 'as', '2020-02-14', '2020-02-02', 'sa', 'Aceptado'),
	(2, 'l', 'l', 'l', 'l', '2020-02-05', '2020-02-14', 'jj', 'Aceptado'),
	(3, 'hklk', 'h', 'h', 'h', '2020-02-06', '2020-02-07', '0913124', 'Aceptado');
/*!40000 ALTER TABLE `mantenimiento` ENABLE KEYS */;


-- Volcando estructura para tabla pruebas.t_persona
CREATE TABLE IF NOT EXISTS `t_persona` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(50) DEFAULT NULL,
  `appat` varchar(50) DEFAULT NULL,
  `apmat` varchar(50) DEFAULT NULL,
  `nss` varchar(50) DEFAULT NULL,
  `telefono` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=279 DEFAULT CHARSET=latin1;

-- Volcando datos para la tabla pruebas.t_persona: ~1 rows (aproximadamente)
/*!40000 ALTER TABLE `t_persona` DISABLE KEYS */;
INSERT INTO `t_persona` (`id`, `nombre`, `appat`, `apmat`, `nss`, `telefono`) VALUES
	(271, 'juanaaasklklkl', 'lopez', 'gÃ³mezz k', 'OUJHJGG56y', '1234567890y'),
	(278, 'p', 'p', 'p', 'pt', '23');
/*!40000 ALTER TABLE `t_persona` ENABLE KEYS */;


-- Volcando estructura para tabla pruebas.usuarios
CREATE TABLE IF NOT EXISTS `usuarios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(50) DEFAULT NULL,
  `apellido` varchar(50) DEFAULT NULL,
  `usuario` varchar(50) DEFAULT NULL,
  `password` tinytext,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- Volcando datos para la tabla pruebas.usuarios: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `usuarios` DISABLE KEYS */;
INSERT INTO `usuarios` (`id`, `nombre`, `apellido`, `usuario`, `password`) VALUES
	(1, 'arimas', 'gomez', 'user1', '40bd001563085fc35165329ea1ff5c5ecbdbbeef'),
	(2, 'arimas', 'gomez', 'ari', '40bd001563085fc35165329ea1ff5c5ecbdbbeef');
/*!40000 ALTER TABLE `usuarios` ENABLE KEYS */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
