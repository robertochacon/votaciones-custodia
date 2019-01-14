/*
SQLyog Community Edition- MySQL GUI v8.05 
MySQL - 5.5.5-10.1.37-MariaDB : Database - votaciones
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

CREATE DATABASE /*!32312 IF NOT EXISTS*/`votaciones` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `votaciones`;

/*Table structure for table `categorias` */

DROP TABLE IF EXISTS `categorias`;

CREATE TABLE `categorias` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(50) DEFAULT NULL,
  `fecha` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

/*Data for the table `categorias` */

/*Table structure for table `megustas` */

DROP TABLE IF EXISTS `megustas`;

CREATE TABLE `megustas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_voto` int(11) NOT NULL,
  `codigo_usuario` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

/*Data for the table `megustas` */

/*Table structure for table `usuarios` */

DROP TABLE IF EXISTS `usuarios`;

CREATE TABLE `usuarios` (
  `id_user` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(30) NOT NULL,
  `email` varchar(30) DEFAULT NULL,
  `clave` varchar(30) DEFAULT NULL,
  `role` enum('admin','user') DEFAULT NULL,
  `fecha` date DEFAULT NULL,
  PRIMARY KEY (`id_user`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=latin1;

/*Data for the table `usuarios` */

insert  into `usuarios`(`id_user`,`nombre`,`email`,`clave`,`role`,`fecha`) values (15,'admin','admin@gmail.com','admin','admin','2019-01-10');

/*Table structure for table `votacion` */

DROP TABLE IF EXISTS `votacion`;

CREATE TABLE `votacion` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `categoria` int(11) DEFAULT NULL,
  `nombre` varchar(60) DEFAULT NULL,
  `evangelizacion` varchar(10) DEFAULT NULL,
  `biografia_logros` text,
  `discografia` text,
  `lugar_servicio_pastoral` varchar(100) DEFAULT NULL,
  `imagen` varchar(60) DEFAULT NULL,
  `correo` varchar(30) DEFAULT NULL,
  `telefono` varchar(20) DEFAULT NULL,
  `megustas` int(11) DEFAULT NULL,
  `status` enum('bloqueado','desbloqueado') DEFAULT NULL,
  `fecha` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=29 DEFAULT CHARSET=latin1;

/*Data for the table `votacion` */

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
