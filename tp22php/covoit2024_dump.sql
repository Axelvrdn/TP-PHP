-- MySQL dump 10.19  Distrib 10.3.39-MariaDB, for debian-linux-gnu (x86_64)
--
-- Host: localhost    Database: covoit2024
-- ------------------------------------------------------
-- Server version	10.3.39-MariaDB-0+deb10u1

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
-- Table structure for table `CovoitUser`
--

DROP TABLE IF EXISTS `CovoitUser`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `CovoitUser` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(30) NOT NULL,
  `prenom` varchar(25) NOT NULL,
  `tel` char(10) NOT NULL,
  `mail` varchar(50) NOT NULL,
  `mdp` varchar(64) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `CovoitUser`
--

LOCK TABLES `CovoitUser` WRITE;
/*!40000 ALTER TABLE `CovoitUser` DISABLE KEYS */;
INSERT INTO `CovoitUser` VALUES (2,'Martin','Sophie','0123456790','sophie.martin@example.com','$2y$10$81WQPVGIKRyLFs7DiIw0.ebyDleRB4C3yCOq2VmB01WmryESboSIS'),(3,'Durand','Luc','0123456791','luc.durand@example.com','$2y$10$va4mbUaos1zOMeujni3Tjuop7FnDoV7gswO2HO9m8l2kuPxhR5S9W'),(4,'Petit','Marie','0123456792','marie.petit@example.com','$2y$10$hlaLzcatWxX025MD4ghBeu8VxrWyZyIEkqrpHkmBRrgCiieL7/zVy'),(5,'Leroy','Paul','0123456793','paul.leroy@example.com','$2y$10$dteqiLhSk4xwJ4gCWXvZk.DRjC8EguRMGHlewwpJGnEMJKonzOjXa'),(6,'Moreau','Claire','0123456794','claire.moreau@example.com','$2y$10$HA3sWY4oqDSWH8A1wdXcku0ONsCe6TZ7qIHj02cG74lASiHcw17.O'),(7,'Simon','Marc','0123456795','marc.simon@example.com','$2y$10$W/jRdXfeQPOhiPheuNW2ZuP0cnBMZESCt0OIKl18IVQ50m.2OxPqW'),(8,'Michel','Anne','0123456796','anne.michel@example.com','$2y$10$KIBegzwulFzOwJUMaOqCkOuazeJOxWbrjQ6KYZlMIKF5zqt.dt9uC'),(9,'Bernard','Pierre','0123456797','pierre.bernard@example.com','$2y$10$qnhfiZIr7Ah83QW2rxdwWu1JTMmNkNrj8oKuAeInp366JCGvSpRwG'),(10,'Dufour','Lucie','0123456798','lucie.dufour@example.com','$2y$10$GhWrn.UxgEgmr6u/7XP/de1sH.BQUUhRMZvdhLkp41sCF2emCZ20G'),(11,'Carpentier','Julien','0123456799','julien.carpentier@example.com','$2y$10$WmtmEGi2RwuR1eokpWof3eS0ysCedu8ANr5X9eaHsmhSL/08QFKk6'),(12,'Giraud','Emma','0123456700','emma.giraud@example.com','$2y$10$.nnBeZHIjh9NHgHQeRZfBO3jMyBE4/0y30b3C37/1BBtlnEITk536');
/*!40000 ALTER TABLE `CovoitUser` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `OffreCovoit`
--

DROP TABLE IF EXISTS `OffreCovoit`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `OffreCovoit` (
  `id` int(11) NOT NULL,
  `jour` enum('lundi','mardi','mercredi','jeudi','vendredi') NOT NULL,
  `heure` time NOT NULL,
  `date` date NOT NULL,
  `lieu` varchar(40) NOT NULL,
  `chauffeur` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `OffreCovoit`
--

LOCK TABLES `OffreCovoit` WRITE;
/*!40000 ALTER TABLE `OffreCovoit` DISABLE KEYS */;
/*!40000 ALTER TABLE `OffreCovoit` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2024-10-11 10:07:56
