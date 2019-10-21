CREATE DATABASE  IF NOT EXISTS `db_contato` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci */;
USE `db_contato`;
-- MySQL dump 10.13  Distrib 8.0.17, for Win64 (x86_64)
--
-- Host: localhost    Database: db_contato
-- ------------------------------------------------------
-- Server version	8.0.17

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `tbl_contato`
--

DROP TABLE IF EXISTS `tbl_contato`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tbl_contato` (
  `codigo` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(55) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `telefone` varchar(15) DEFAULT NULL,
  `celular` varchar(16) NOT NULL,
  `email` varchar(100) NOT NULL,
  `homepage` varchar(500) DEFAULT NULL,
  `linkfacebook` varchar(500) DEFAULT NULL,
  `profissao` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `sexo` varchar(1) NOT NULL,
  `opcaomensagem` varchar(50) NOT NULL,
  `mensagem` varchar(5000) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  PRIMARY KEY (`codigo`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_contato`
--

LOCK TABLES `tbl_contato` WRITE;
/*!40000 ALTER TABLE `tbl_contato` DISABLE KEYS */;
INSERT INTO `tbl_contato` VALUES (1,'wesley','(011) 4789-2762','(011) 98716-8989','wesley.meneghini@outlook.com.br','https://noticias.uol.com.br','https://www.facebook.com','Eletricista','M','sugestao/reclamacao','Funcionando'),(2,'wesley','(011) 4789-2762','(011) 98716-8989','wesley.meneghini@outlook.com.br','https://noticias.uol.com.br','https://www.facebook.com','Eletricista','M','sugestao/reclamacao','Funcionando'),(3,'Luís','','(011) 79709-7979','luis@gamil.com','','','Eletricista','M','sugestao/reclamacao','teste'),(4,'Luís','11987168989','(666) 66666-6666','wesley.meneghini@outlook.com.br','','','artista','M','pedidos/produtos','akshaihdioahio'),(5,'Karolina Meneghini','','(119) 72276-950','karol.meneghini@hotmail.com','','','Ti','F','pedidos/produtos','Teste'),(6,'WESLEY WELLINGTON MENEGHINI','11987168989','11987168989','wesley.meneghini@outlook.com.br','','','Eletricista','M','pedidos/produtos','oi'),(7,'aada','(015) 4454-5454','(054) 54545-4545','wesley.meneghini@outlook.com.br','','','Cantor','M','sugestao/reclamacao','aish'),(8,'WESLEY WELLINGTON MENEGHINI','(011) 9871-6899','(011) 98526-5559','wesley.meneghini@outlook.com.br','','','Eletricista','M','sugestao/reclamacao','kwdhi'),(9,'WESLEY WELLINGTON MENEGHINI','','(666) 66666-6666','wesley.meneghini@outlook.com.br','','','artista','M','sugestao/reclamacao','wdhid'),(10,'Jfí','','(666) 66666-6666','teste@teste.com','','','ti','M','sugestao/reclamacao','iaohfoho'),(11,'re','','(066) 66666-6666','teste@teste.com','https://www.3m.com.br/3M/pt_BR/3m-do-brasil/sobre-a-3m/','','sss','M','sugestao/reclamacao','ssss'),(12,'re','','(066) 66666-6666','teste@teste.com','https://www.3m.com.br/3M/pt_BR/3m-do-brasil/sobre-a-3m/','','sss','M','sugestao/reclamacao','ssss'),(13,'WESLEY WELLINGTON MENEGHINI','11987168989','(011) 98526-5558','wesley.meneghini@outlook.com.br','','','Redes','M','sugestao/reclamacao','qihs'),(14,'WESLEY WELLINGTON MENEGHINI','11987168989','11987168989','wesley.meneghini@outlook.com.br','','','Eletricista','M','sugestao/reclamacao','sojdos'),(15,'wesley','','(066) 66666-6666','teste@teste.com','','','ti','M','sugestao/reclamacao','teste');
/*!40000 ALTER TABLE `tbl_contato` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping events for database 'db_contato'
--

--
-- Dumping routines for database 'db_contato'
--
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2019-09-30 13:08:53
