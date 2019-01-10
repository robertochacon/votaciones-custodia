/*
SQLyog Trial v13.1.1 (64 bit)
MySQL - 10.1.37-MariaDB : Database - votaciones
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`votaciones` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `votaciones`;

/*Table structure for table `categorias` */

DROP TABLE IF EXISTS `categorias`;

CREATE TABLE `categorias` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(50) DEFAULT NULL,
  `fecha` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

/*Data for the table `categorias` */

insert  into `categorias`(`id`,`nombre`,`fecha`) values 
(1,'testing','2019-01-10'),
(2,'testing 2','2019-01-10');

/*Table structure for table `megustas` */

DROP TABLE IF EXISTS `megustas`;

CREATE TABLE `megustas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_voto` int(11) NOT NULL,
  `codigo_usuario` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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

insert  into `usuarios`(`id_user`,`nombre`,`email`,`clave`,`role`,`fecha`) values 
(14,'roberto','tito.123chacon@gmail.com','robertico','user','2019-01-10'),
(15,'admin','admin@gmail.com','admin','admin','2019-01-10'),
(16,'hola','hola@gmail.com','hola','admin','2019-01-10'),
(17,'',NULL,NULL,'user',NULL);

/*Table structure for table `votacion` */

DROP TABLE IF EXISTS `votacion`;

CREATE TABLE `votacion` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `categoria` int(11) DEFAULT NULL,
  `nombre` varchar(60) NOT NULL,
  `año_evangelizacion` int(11) DEFAULT NULL,
  `biografia_logros` tinytext,
  `discografia` text,
  `lugar_servicio_pastoral` varchar(100) DEFAULT NULL,
  `imagen` varchar(60) NOT NULL,
  `correo` varchar(30) DEFAULT NULL,
  `telefono` varchar(15) DEFAULT NULL,
  `megustas` int(11) NOT NULL,
  `status` enum('bloqueado','desbloqueado') DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

/*Data for the table `votacion` */

insert  into `votacion`(`id`,`categoria`,`nombre`,`año_evangelizacion`,`biografia_logros`,`discografia`,`lugar_servicio_pastoral`,`imagen`,`correo`,`telefono`,`megustas`,`status`) values 
(1,NULL,'testing',NULL,NULL,NULL,NULL,'uno.jpg',NULL,NULL,0,'desbloqueado'),
(2,NULL,'testing 2',NULL,NULL,NULL,NULL,'dos.jpg',NULL,NULL,0,'bloqueado'),
(3,NULL,'testing 3',NULL,NULL,NULL,NULL,'tres.jpg',NULL,NULL,0,'desbloqueado');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
