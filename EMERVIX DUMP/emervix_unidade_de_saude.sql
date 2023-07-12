-- MariaDB dump 10.19  Distrib 10.4.28-MariaDB, for Win64 (AMD64)
--
-- Host: localhost    Database: emervix
-- ------------------------------------------------------
-- Server version	10.4.28-MariaDB

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `unidade_de_saude`
--

DROP TABLE IF EXISTS `unidade_de_saude`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `unidade_de_saude` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `HOSPITAL` varchar(255) NOT NULL,
  `ENDERECO` varchar(255) NOT NULL,
  `SALAS_DISPONIVEIS` int(11) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `unidade_de_saude`
--

LOCK TABLES `unidade_de_saude` WRITE;
/*!40000 ALTER TABLE `unidade_de_saude` DISABLE KEYS */;
INSERT INTO `unidade_de_saude` VALUES (1,'Hospital Estadual Dr. Jayme Santos Neves\n','Rodovia José Sette, s/n - Carapina, Serra - ES, 29160-011',2),(2,'Hospital Estadual de Urgência e Emergência (HEUE)','Av. Marechal Campos, 1575 - Maruípe, Vitória - ES, 29043-900',3),(3,'Hospital das Clínicas (HC-UFES)','Av. Marechal Campos, 1355 - Maruípe, Vitória - ES, 29043-900',1),(4,'Hospital Evangélico de Vila Velha','Av. Carlos Lindenberg, 3162 - Itapuã, Vila Velha - ES, 29101-911',2),(5,'Pronto Atendimento de Vitória','Av. Dante Michelini, 301 - Jardim da Penha, Vitória - ES, 29060-235',3),(6,'Unidade de Saúde de São Pedro','Av. São Paulo, 505 - São Pedro, Vitória - ES, 29075-150',4),(7,'Unidade de Saúde de Jardim Camburi','Av. Ministro Salgado Filho, 460 - Jardim Camburi, Vitória - ES, 29092-760',8),(8,'Unidade de Saúde de Jardim da Penha','R. João Faria Viana, 65 - Jardim da Penha, Vitória - ES, 29060-360',2),(9,'Hospital Estadual Dr. Jayme Santos Neves','Rodovia José Sette, s/n - Carapina, Serra - ES, 29160-011',3),(10,'Hospital Maternidade Dr. José Maria de Oliveira','R. Avenida Brasil, 51 - Jardim Carapina, Serra - ES, 29161-385',0),(11,'Unidade de Saúde de Jardim Carapina','Av. Brasil, 274 - Jardim Carapina, Serra - ES, 29161-385',3),(12,'Unidade de Saúde de Jacaraípe','R. Rio Amazonas, s/n - Parque Jacaraípe, Serra - ES, 29173-220',3),(13,'Unidade de Pronto Atendimento (UPA) de Carapina','Av. Norte Sul, s/n - Parque Res. Laranjeiras, Serra - ES, 29167-100',9),(14,'Unidade de Pronto Atendimento (UPA) de Serra-Sede','Av. Presidente Vargas, s/n - Serra-Sede, Serra - ES, 29176-040',4),(15,'Hospital Estadual Infantil e Maternidade Alzir Bernardino Alves (Himaba)','R. Castelo Branco, s/n - Centro, Vila Velha - ES, 29100-030',3),(16,'Hospital Praia da Costa','Av. Gil Veloso, 1500 - Praia da Costa, Vila Velha - ES, 29101-011',3),(17,'Unidade de Saúde de Araçás','R. Santa Rosa, 15 - Araçás, Vila Velha - ES, 29108-230',3);
/*!40000 ALTER TABLE `unidade_de_saude` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2023-07-12 15:08:09
