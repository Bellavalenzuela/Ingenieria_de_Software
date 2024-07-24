-- MariaDB dump 10.19  Distrib 10.4.32-MariaDB, for Win64 (AMD64)
--
-- Host: localhost    Database: dbproyecto
-- ------------------------------------------------------
-- Server version	10.4.32-MariaDB

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `carrito`
--

DROP TABLE IF EXISTS `carrito`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `carrito` (
  `IdCarrito` int(11) NOT NULL AUTO_INCREMENT,
  `IdUsuario` int(11) NOT NULL,
  `IdProducto` int(11) NOT NULL,
  `Talla` varchar(50) DEFAULT NULL,
  `Color` varchar(50) DEFAULT NULL,
  `FechaAgregado` timestamp NOT NULL DEFAULT current_timestamp(),
  `CantidadC` int(11) DEFAULT NULL,
  PRIMARY KEY (`IdCarrito`)
) ENGINE=InnoDB AUTO_INCREMENT=35 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `carrito`
--

LOCK TABLES `carrito` WRITE;
/*!40000 ALTER TABLE `carrito` DISABLE KEYS */;
INSERT INTO `carrito` VALUES (8,5,1,'M','azul','2024-07-05 04:21:21',1),(9,1,1,'M','amarillo','2024-07-05 05:10:38',3),(10,1,1,'S','verde','2024-07-05 05:19:15',1),(13,1,1,'M','azul','2024-07-08 00:30:35',3),(14,1,2,'M','morado','2024-07-08 00:33:32',3),(16,5,2,'M',' celeste','2024-07-09 03:24:20',2),(22,5,29,'S','Negro','2024-07-14 19:26:03',1),(23,1,27,'M','Beige','2024-07-14 19:28:29',2),(25,5,24,'M','Negro','2024-07-14 22:23:03',1),(26,5,25,'M',' Canela','2024-07-14 22:36:18',1),(27,5,30,'S','Morado','2024-07-18 02:38:19',2),(29,15,26,'M',' Amarillo','2024-07-22 20:07:14',4),(30,15,26,'M',' Amarillo','2024-07-22 20:08:21',3),(33,15,6,'S',' Verde','2024-07-22 22:20:39',2),(34,5,2,'S','Negro','2024-07-24 14:44:26',2);
/*!40000 ALTER TABLE `carrito` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `categorias`
--

DROP TABLE IF EXISTS `categorias`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `categorias` (
  `IdCategoria` int(11) NOT NULL AUTO_INCREMENT,
  `Nombre` varchar(255) NOT NULL,
  PRIMARY KEY (`IdCategoria`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `categorias`
--

LOCK TABLES `categorias` WRITE;
/*!40000 ALTER TABLE `categorias` DISABLE KEYS */;
INSERT INTO `categorias` VALUES (1,'Prendas de Vestir'),(2,'Accesorios'),(3,'Hogar'),(4,'Hilos y Fibras'),(5,'Productos Especiales');
/*!40000 ALTER TABLE `categorias` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `compra`
--

DROP TABLE IF EXISTS `compra`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `compra` (
  `IdCompra` int(11) NOT NULL AUTO_INCREMENT,
  `id_transaccion` varchar(20) NOT NULL,
  `fecha` datetime NOT NULL,
  `status` varchar(20) NOT NULL,
  `IdUsuario` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `total` decimal(10,2) NOT NULL,
  PRIMARY KEY (`IdCompra`)
) ENGINE=InnoDB AUTO_INCREMENT=51 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `compra`
--

LOCK TABLES `compra` WRITE;
/*!40000 ALTER TABLE `compra` DISABLE KEYS */;
INSERT INTO `compra` VALUES (36,'66940405da487','2024-07-14 11:59:49','Pagado','5','ivanjesus@gmail.com',2137.00),(37,'66940421c789d','2024-07-14 12:00:17','Pendiente','5','ivanjesus@gmail.com',2137.00),(39,'669405e4ea46f','2024-07-14 12:07:48','Pagado','5','ivanjesus@gmail.com',2137.00),(40,'6694267920884','2024-07-14 14:26:49','Pagado','5','ivanjesus@gmail.com',2400.00),(41,'6694270fa6aff','2024-07-14 14:29:19','Pagado','1','angelicabrisayda@gmail.com',3300.00),(42,'66944f5551c9f','2024-07-14 17:21:09','Pagado','5','ivanjesus@gmail.com',2800.00),(43,'66944fcda8fdc','2024-07-14 17:23:09','Pagado','5','ivanjesus@gmail.com',3000.00),(44,'669452f5733e5','2024-07-14 17:36:37','Pagado','5','ivanjesus@gmail.com',2800.00),(45,'6698803b071b9','2024-07-17 21:38:51','Pendiente','5','ivanjesus@gmail.com',3600.00),(46,'6698806418533','2024-07-17 21:39:32','Pendiente','5','ivanjesus@gmail.com',3600.00),(47,'6698814b37e81','2024-07-17 21:43:23','Pagado','5','ivanjesus@gmail.com',3600.00),(48,'669ebd5ed56ee','2024-07-22 15:13:18','Pagado','15','isabelayupanqui@gmail.com',700.00),(49,'669ee41c7671b','2024-07-22 17:58:36','Pagado','15','isabelayupanqui@gmail.com',860.00),(50,'66a1135bcdfe9','2024-07-24 09:44:43','Pagado','5','ivanjesus@gmail.com',3600.00);
/*!40000 ALTER TABLE `compra` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `detalle_compra`
--

DROP TABLE IF EXISTS `detalle_compra`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `detalle_compra` (
  `IdDetalle` int(11) NOT NULL AUTO_INCREMENT,
  `IdCompra` int(11) NOT NULL,
  `IdProducto` int(11) NOT NULL,
  `Cantidad` int(11) NOT NULL,
  PRIMARY KEY (`IdDetalle`),
  KEY `IdCompra` (`IdCompra`),
  KEY `IdProducto` (`IdProducto`),
  CONSTRAINT `detalle_compra_ibfk_1` FOREIGN KEY (`IdCompra`) REFERENCES `compra` (`IdCompra`),
  CONSTRAINT `detalle_compra_ibfk_2` FOREIGN KEY (`IdProducto`) REFERENCES `productos` (`IdProducto`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `detalle_compra`
--

LOCK TABLES `detalle_compra` WRITE;
/*!40000 ALTER TABLE `detalle_compra` DISABLE KEYS */;
/*!40000 ALTER TABLE `detalle_compra` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `productores`
--

DROP TABLE IF EXISTS `productores`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `productores` (
  `IdProductor` int(11) NOT NULL AUTO_INCREMENT,
  `Id` int(11) DEFAULT NULL,
  `Nombres` varchar(255) NOT NULL,
  `Apellidos` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Telefono` varchar(20) DEFAULT NULL,
  `Direccion` varchar(255) DEFAULT NULL,
  `Ciudad` varchar(255) DEFAULT NULL,
  `Pais` varchar(255) DEFAULT NULL,
  `FechaRegistro` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`IdProductor`),
  KEY `Id` (`Id`),
  CONSTRAINT `productores_ibfk_1` FOREIGN KEY (`Id`) REFERENCES `usuarios` (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `productores`
--

LOCK TABLES `productores` WRITE;
/*!40000 ALTER TABLE `productores` DISABLE KEYS */;
INSERT INTO `productores` VALUES (1,3,'Luz Bella','Narvaez','luzbellavalenzuela@gmail.com',NULL,NULL,NULL,NULL,'2024-05-28 05:51:12'),(2,4,'Melany Kiara','Romero Condori','kiaramelany@gmail.com',NULL,NULL,NULL,NULL,'2024-05-28 05:51:12');
/*!40000 ALTER TABLE `productores` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `productos`
--

DROP TABLE IF EXISTS `productos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `productos` (
  `IdProducto` int(11) NOT NULL AUTO_INCREMENT,
  `IdProductor` int(11) DEFAULT NULL,
  `Nombre` varchar(255) NOT NULL,
  `Descripcion` text DEFAULT NULL,
  `Precio` decimal(10,2) DEFAULT NULL,
  `Cantidad` int(11) DEFAULT NULL,
  `IdCategoria` int(11) DEFAULT NULL,
  `Foto` varchar(255) DEFAULT NULL,
  `FechaAgregado` timestamp NOT NULL DEFAULT current_timestamp(),
  `nombreCriador` varchar(255) DEFAULT NULL,
  `duracionCrianza` varchar(50) DEFAULT NULL,
  `alimentacionCuidados` text DEFAULT NULL,
  `fechaRecoleccion` date DEFAULT NULL,
  `recolectorResponsable` varchar(255) DEFAULT NULL,
  `artesanoResponsable` varchar(255) DEFAULT NULL,
  `metodoProcesamiento` enum('Manual','Máquina') DEFAULT NULL,
  `nombreHilador` varchar(255) DEFAULT NULL,
  `fechaHilado` date DEFAULT NULL,
  `tipoHilado` enum('Manual','Automático') DEFAULT NULL,
  `fechaProduccion` date DEFAULT NULL,
  `fechaLanzamiento` date DEFAULT NULL,
  `Tallas` varchar(255) DEFAULT NULL,
  `Colores` varchar(255) DEFAULT NULL,
  `Genero` int(11) DEFAULT NULL,
  PRIMARY KEY (`IdProducto`),
  KEY `IdProductor` (`IdProductor`),
  KEY `IdCategoria` (`IdCategoria`),
  CONSTRAINT `productos_ibfk_1` FOREIGN KEY (`IdProductor`) REFERENCES `usuarios` (`Id`),
  CONSTRAINT `productos_ibfk_2` FOREIGN KEY (`IdCategoria`) REFERENCES `categorias` (`IdCategoria`)
) ENGINE=InnoDB AUTO_INCREMENT=32 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `productos`
--

LOCK TABLES `productos` WRITE;
/*!40000 ALTER TABLE `productos` DISABLE KEYS */;
INSERT INTO `productos` VALUES (2,3,'Abrigo   Femenino','Lana de vicuña',500.00,6,1,'abrigo.jpg','2024-06-06 20:32:40','Sra. Martina Vilcapaza','7meses','Pastos naturales','2019-04-25','Sr. Pepe Wilfredo Mamani Condori','Sra. Julia Saravia Sicos','Manual','Sra. Tomaza Hancca Yupanqui','2020-05-02','Manual','2020-05-25','2020-06-01','S,M,L','Beige,Negro,Canela',2),(6,7,'Ovillo Indiecita ','Lana de Alpaca - Acero Melange',80.00,50,4,'Ovillo_Indiecita_Acero_Melange.png','2024-06-09 10:14:55','Erick Sebastian Mamani Hancco','1 año y 5 meses','Pasto natural y medicamento antiparasitos','2020-02-04','Sr. Aldo Jose Quenta Anco ','Sr. Pedro Ticona Vilca','Máquina','Sra. Tomaza Hancca Yupanqui','2020-03-23','Automático','2020-04-10','2020-05-01','S','Melon, Verde, Violeta azul,Magenta',3),(23,8,'Medias ','Medias hecho de lana de alpaca Huarcaya',150.00,50,5,'calcetin.png','2024-06-24 01:13:44','Sr. Martin Sanchez','1 año y 2 meses','Pasto natural','2023-03-21','Sr. Fernando Vilca Daza','Sr. José Mamani Quispe','Máquina','Sra. Cecilia','2023-05-07','Automático','2023-06-20','2023-07-07','S,M,L','Azul, Marrón, Gravel, Dark',1),(24,3,'Abrigo Maculino','Lana de alpaca',200.00,8,1,'abrigos1.png','2024-06-27 04:54:45','Sra. Ayde Mamani Mamani','1 año','Patos naturales y medicamentos antiparásitos','2021-10-20','Sr. Fernando Guzmán Lázaro','Sra. Josefina Mamani Yupanqui','Máquina','Sr. Juan Phocco Soncco','2021-12-01','Manual','2022-01-15','2022-02-20','S,M,L','Negro, Marrón, Canela',3),(25,3,'Chullo ','Lana de vicuña',200.00,5,2,'chullo.jpg','2024-06-27 05:21:06','Sra. Rosa María Vargas Flores','1 año','Pastos naturales, y uso de medicamentos utilizado para tratar parásitos.','2020-08-03','Sr. Fernando Guzmán Lázaro','Sra. Josefina Mamani Yupanqui','Manual','Sr. Juan Cruz Garcia','2021-02-02','Automático','2021-05-20','2021-07-19','S,M','Celeste, Negro, Blanco, Canela',2),(26,3,'Estola  ','Lana de vicuña',100.00,8,2,'estola.png','2024-06-27 05:29:16','Sr. José Apolinar Condori Condori','1 año y 5 meses','Pastos naturales y medicamentos antiparásitos','2021-02-12','Sr. Aldo Jose Quenta Anco ','Sr. Pedro Ticona Vilca','Máquina','Sra. Josefina Incacutipa','2022-01-01','Manual','2022-02-02','2022-04-04','S,M,L','Morado, Amarillo, Beige',2),(27,4,'Capa ','Capa abigail lana de vicuña',900.00,5,1,'capa_abigail_beige.png','2024-07-14 17:35:44','Sra. Eudocia Sanchez Vilca','1 año y 3 meses','Leche en polvo, pasto natural, medicamento antiparásitos','2023-05-02','Sr. Aldo Jose Quenta Anco ','Sr. Pablo Condori Garcia','Máquina','Sr. Alejandro Mamani Condori','2023-05-20','Automático','2023-06-15','2023-07-05','S,M,L','Beige, Negro',3),(28,4,'Capa Daniela Corta Canela','Capa Daniela Corta Canela de lana de vicuña\r\n',1000.00,6,1,'capa_daniela_corta_canela.png','2024-07-14 17:37:41','Sra. Rosaura Mamani Vilca','1 año y 6 meses','Pasto natural y medicamento antiparásitos','2023-05-10','Sr. Raul Jose Mamani Anco ','Sr. Pablo Condori Garcia','Máquina','Sr. Alejandro Mamani Condori','2023-05-20','Automático','2023-06-14','2023-07-15','S,M,L,XL','Canela, Blanco, Beige',2),(29,7,'Saco de Invierno  ','Lana de alpaca',400.00,6,1,'abrigo_invierno.png','2024-07-14 18:55:47','Sr. Ronaldo Condori Mamani','1 año y 3 meses','Leche en polvo, pasto natural, medicamentos antiparásitos','2022-05-02','Sr. Aldo Jose Quenta Anco ','Sr. Pedro Ticona Vilca','Máquina','Sra. Josefina Incacutipa','2022-05-20','Manual','2022-06-02','2022-07-20','S,M,L,XL','Negro, Oliva, Canela, Granate',1),(30,3,'Ovillo Indiecita morado melange','Lana de alpaca',400.00,30,4,'Ovillo_indiecita_morado_melange.png','2024-07-18 02:31:57','Sra. Brisayda Marina Mamani Zapana','1 año y 4 meses','Pastos naturales y medicamentos antiparásitos','2023-04-12','Sr. Rafael Yupanqui Alguilar','Sr. Wilfredo Vargas Condori','Manual','Sr. Tomas Ticona Pocco','2023-05-24','Automático','2023-05-08','2023-05-28','S','Morado, Plomo, Amarillo, Azul',0),(31,24,'Ovillo Indiecita morado melange ','lana de alpaca',400.00,31,4,'Ovillo_Indiecita_Acero_Melange.png','2024-07-24 14:32:06','Sra. Brisayda Marina Mamani Zapana','1 año y 4 meses','Pasto natural','2020-04-03','Sr. Rafael Yupanqui Alguilar','Sr. Wilfredo Vargas Condori','Máquina','Sr. Tomas Ticona Pocco','2020-05-04','Automático','2020-06-06','2020-04-10','M','plomo, azul',0);
/*!40000 ALTER TABLE `productos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `productos-fail`
--

DROP TABLE IF EXISTS `productos-fail`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `productos-fail` (
  `IdProducto` int(11) NOT NULL AUTO_INCREMENT,
  `IdProductor` int(11) DEFAULT NULL,
  `Nombre` varchar(255) NOT NULL,
  `Descripcion` text DEFAULT NULL,
  `Precio` decimal(10,2) DEFAULT NULL,
  `Cantidad` int(11) DEFAULT NULL,
  `IdCategoria` int(11) DEFAULT NULL,
  `Foto` varchar(255) DEFAULT NULL,
  `FechaAgregado` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`IdProducto`),
  KEY `IdCategoria` (`IdCategoria`)
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `productos-fail`
--

LOCK TABLES `productos-fail` WRITE;
/*!40000 ALTER TABLE `productos-fail` DISABLE KEYS */;
INSERT INTO `productos-fail` VALUES (11,3,'Chompa      ','Hecho de lana de Alpaca',1500.00,80,5,'chompa.jpg','2024-05-29 08:45:54'),(20,2,'Abrigo ','Lana de Vicuña',300.00,50,1,'abrigo.jpg','2024-06-03 08:08:15'),(25,3,'Chullo','Lana de alpaca',200.00,10,2,'chullo.jpg','2024-06-06 09:49:53');
/*!40000 ALTER TABLE `productos-fail` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `usuarios`
--

DROP TABLE IF EXISTS `usuarios`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `usuarios` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Nombres` varchar(255) NOT NULL,
  `Apellidos` varchar(100) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Usuario` varchar(255) NOT NULL,
  `Clave` varchar(255) NOT NULL,
  `RClave` varchar(255) NOT NULL,
  `Tipo_Usuario` enum('cliente','productor') NOT NULL,
  `FechaRegistro` timestamp NOT NULL DEFAULT current_timestamp(),
  `RutaImagen` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `usuarios`
--

LOCK TABLES `usuarios` WRITE;
/*!40000 ALTER TABLE `usuarios` DISABLE KEYS */;
INSERT INTO `usuarios` VALUES (1,'Angelica Brisayda','Narvaez Sanchez','angelicabrisayda@gmail.com','Angi','liam28','liam28','cliente','2024-05-28 02:13:44',NULL),(2,'Juan David','Mendoza Apaza','davidmentoza@gmail.com','Juan Apaza','1234','1234','cliente','2024-05-28 02:15:49',NULL),(3,'Luz Bella','Narvaez','luzbellavalenzuela@gmail.com','Bella','12345','12345','productor','2024-05-28 02:22:52','imagenes_perfiles/fotito.jpg'),(4,'Melany Kiara','Romero Condori','kiaramelany@gmail.com','Melany','melany12','melany12','productor','2024-05-28 04:51:36','imagenes_perfiles/Foto.png'),(5,'Ivan Jesus','Mamani Mendoza','ivanjesus@gmail.com','IvanJ','1234j','1234j','cliente','2024-05-28 07:48:15','imagenes_clientes/chompa.jpg'),(6,'Fernando David','Sanchez Zapana','fernandozapana@gmail.com','Fernando','0987','0987','productor','2024-05-29 08:27:36',NULL),(7,'Erick Sebastian','Mamani Hancco','erickmamani@gmail.com','Erick','erick11','erick11','productor','2024-06-08 20:19:07',NULL),(8,'Lindell Dennis','Vilca Mamani','lindellvilca@gamil.com','Lindell','1234l','1234l','productor','2024-06-24 01:12:45',NULL),(9,'Martha','Miranda Flores','marthaflores@gmail.com','Martha',' $2y$10$s.0GU38yr20eWtbuLYgcfeiEYAdWk4IoLjl40s2IIjUaVM.3VmUpi','123456','productor','2024-07-08 04:04:45',NULL),(10,'Marisol Maria','Torres Condori','marisolcondori@gmail.com','Maria',' $2y$10$B8YrLjMsOXygEOUNVSGojuI/uoXmH1oiSLgevYCNSE3/rCaCEpXxq','1234567','cliente','2024-07-08 04:10:30',NULL),(11,'Gimena','Elizondo Paredes','gimenaparedes@gmail.com','Gimena',' $2y$10$d9rokmHI9vzOK3iq1CY1DurNTuDP52X6UsJJdhc6puXHYmwpOjFpy','0987654','cliente','2024-07-08 04:12:39',NULL),(12,'Sarita Eli','Romero Cáceres','saritaromero@gmail.com','Sarita',' $2y$10$e1Y9UVZT/IpE8sIEQKj.D.f89/eWiWRbiqs4OqqofHyd5kEhGHzSS','23456','cliente','2024-07-08 04:13:41',NULL),(15,'Isabela ','Yupanqui Paredes','isabelayupanqui@gmail.com','Isabela','bela11','bela11','cliente','2024-07-08 04:21:57',NULL),(21,'Macarena Julia','Montalvan Acero','macarenamontalvan@gmail.com','Maca','maca1234','maca1234','cliente','2024-07-10 01:07:32',NULL),(22,'Liam Jhordy','Mamani Narvaez','liamnarvaez@gmail.com','Liam Jhordy','liam135','liam135','productor','2024-07-10 01:08:32',NULL),(24,'diego2','romero2','diegojhoel4@gmail.com','diego2','123456','123456','productor','2024-07-24 14:26:04','ruta/a/imagen/default.jpg'),(26,'Jesus Jose','Mamani Sanchez','jesusjose@gmail.com','jesusjose','jose1234','jose1234','productor','2024-07-24 18:11:05','ruta/a/imagen/default.jpg');
/*!40000 ALTER TABLE `usuarios` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2024-07-24 14:17:30
