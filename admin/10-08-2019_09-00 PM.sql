-- MySQL dump 10.16  Distrib 10.1.25-MariaDB, for Win32 (AMD64)
--
-- Host: localhost    Database: finman
-- ------------------------------------------------------
-- Server version	10.1.25-MariaDB

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
-- Table structure for table `login`
--

DROP TABLE IF EXISTS `login`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `login` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Username` varchar(255) NOT NULL,
  `Password` varchar(255) NOT NULL,
  `permission` varchar(255) NOT NULL,
  `addedby` varchar(255) NOT NULL,
  `date` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `login`
--

LOCK TABLES `login` WRITE;
/*!40000 ALTER TABLE `login` DISABLE KEYS */;
INSERT INTO `login` VALUES (1,'Ishwor','admin','Administrator','','0000-00-00'),(2,'ram','ram','Guest','Ishwor','2019-08-09');
/*!40000 ALTER TABLE `login` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `product`
--

DROP TABLE IF EXISTS `product`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `product` (
  `pid` int(150) NOT NULL AUTO_INCREMENT,
  `pname` varchar(200) NOT NULL,
  `pdes` varchar(200) NOT NULL,
  `quantity` int(100) NOT NULL,
  `updatedate` timestamp(6) NOT NULL DEFAULT CURRENT_TIMESTAMP(6) ON UPDATE CURRENT_TIMESTAMP(6),
  `updatedby` varchar(200) NOT NULL,
  `invoiceno` int(255) NOT NULL,
  `changemadeby` varchar(255) NOT NULL,
  `updatedqn` varchar(255) NOT NULL,
  PRIMARY KEY (`pid`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `product`
--

LOCK TABLES `product` WRITE;
/*!40000 ALTER TABLE `product` DISABLE KEYS */;
INSERT INTO `product` VALUES (5,'Kinderjoy','dsadsad',714,'2019-08-09 13:22:06.000000','Ishwor',1001,'SALES','- 50'),(6,'Snickers','nnn',200,'2019-08-09 13:23:39.000000','Ishwor',1002,'SALES','- 44'),(7,'RedBull','wwerew',449,'2019-08-09 13:24:30.000000','Ishwor',1003,'SALES','- 91'),(8,'Digestive','ghghfn',639,'2019-08-09 12:38:48.000000','Ishwor',554,'PURCHASE','0'),(9,'Vita-Milk','dbsk',400,'2019-08-09 13:24:30.000000','Ishwor',1003,'SALES','- 36'),(10,'Cadbury','kkjjhjv',1291,'2019-08-09 12:40:32.000000','Ishwor',878,'PURCHASE','+ 541');
/*!40000 ALTER TABLE `product` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `purchase`
--

DROP TABLE IF EXISTS `purchase`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `purchase` (
  `pid` int(100) NOT NULL AUTO_INCREMENT,
  `bno` int(100) NOT NULL,
  `pname` varchar(200) NOT NULL,
  `pdetail` varchar(551) NOT NULL,
  `supplier` varchar(200) NOT NULL,
  `pdate` date NOT NULL,
  `quantity` bigint(100) NOT NULL,
  `price` bigint(100) NOT NULL,
  `image` varchar(2000) NOT NULL,
  PRIMARY KEY (`pid`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `purchase`
--

LOCK TABLES `purchase` WRITE;
/*!40000 ALTER TABLE `purchase` DISABLE KEYS */;
INSERT INTO `purchase` VALUES (6,145,'Kinderjoy','hjhjghg','Vishal Group','2019-07-19',800,50,'samir.JPG'),(7,45,'Kinderjoy','asdasd','Vishal Group','2019-08-09',600,60,'Screenshot (1).png'),(8,554,'Digestive','fdsfds','Vishal Group','2019-08-20',220,62,'Screenshot (5).png'),(9,878,'Cadbury','dsfdsf','Vishal Group','2019-08-13',541,55,'Screenshot (2).png');
/*!40000 ALTER TABLE `purchase` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sales`
--

DROP TABLE IF EXISTS `sales`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `sales` (
  `sid` int(100) NOT NULL AUTO_INCREMENT,
  `Pname` varchar(500) NOT NULL,
  `Party` varchar(230) NOT NULL,
  `quantity` int(255) NOT NULL,
  `price` int(255) NOT NULL,
  `pmt` varchar(200) NOT NULL,
  `area` varchar(200) NOT NULL,
  `date` date NOT NULL,
  `sman` varchar(200) NOT NULL,
  `invno` int(255) NOT NULL,
  `enteredby` varchar(255) NOT NULL,
  `entereddate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`sid`)
) ENGINE=InnoDB AUTO_INCREMENT=90 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sales`
--

LOCK TABLES `sales` WRITE;
/*!40000 ALTER TABLE `sales` DISABLE KEYS */;
INSERT INTO `sales` VALUES (1,'Kinderjoy','Retail',400,50,'Cash','Manmaiju','2019-07-26','Samir',0,'','0000-00-00 00:00:00'),(2,'Kinderjoy','Wholesale',100,50,'Credit','Gongabu','2019-07-06','Vishal Group',0,'','0000-00-00 00:00:00'),(3,'Kinderjoy','Wholesale',50,50,'Cheque','Naranthan','2019-07-18','Samir',0,'','0000-00-00 00:00:00'),(4,'Kinderjoy','Retail',400,50,'Cheque','Hattisar','2019-07-18','Samir',0,'','0000-00-00 00:00:00'),(5,'Kinderjoy','Retail',300,55,'Cheque','gkg','2019-07-18','Samir',0,'','0000-00-00 00:00:00'),(6,' Kinderjoy','Ram Stores',10,0,'Cheque','dsadsa','2019-08-07','Samir',0,'','0000-00-00 00:00:00'),(7,' Kinderjoy','ghffgfgh',20,0,'Cheque','hgffgfghfhg','2019-08-08','Samir',0,'','0000-00-00 00:00:00'),(8,' RedBull','ghfghfghf',20,0,'Cheque','hjghgh','2019-08-07','Samir',1111,'','0000-00-00 00:00:00'),(9,' RedBull','WHOLESALE',50,0,'Cheque','ygygygygygjj','2019-08-07','Samir',1111,'','0000-00-00 00:00:00'),(10,' RedBull','WHOLESALE',50,0,'Cheque','jhgjhgjghgvjvj','2019-08-07','Samir',1111,'','0000-00-00 00:00:00'),(61,' Snickers','dgfdgdf',66,52,'Cheque','dsfsdfds','2019-08-09','Samir',1111,'','0000-00-00 00:00:00'),(62,' Kinderjoy','ghhgc',50,0,'Cheque','hkjhkjh','2019-08-08','Samir',1111,'','0000-00-00 00:00:00'),(63,' Kinderjoy','ghhgc',50,0,'Cheque','dgdgfgfd','2019-08-08','Samir',1111,'','0000-00-00 00:00:00'),(64,' Kinderjoy','zxzdsds',100,55,'Cheque','vxcxvcxvcx','2019-08-08','Samir',1111,'','0000-00-00 00:00:00'),(65,' Snickers','zxzdsds',150,40,'Cheque','vxcxvcxvcx','2019-08-08','Samir',1111,'','0000-00-00 00:00:00'),(66,' Kinderjoy','Om Mart',120,57,'Cash','Gongabu','2019-08-15','Samir',2147483647,'','0000-00-00 00:00:00'),(67,' Snickers','Om Mart',240,48,'Cash','Gongabu','2019-08-15','Samir',2147483647,'','0000-00-00 00:00:00'),(68,' RedBull','Om Mart',140,88,'Cash','Gongabu','2019-08-15','Samir',2147483647,'','0000-00-00 00:00:00'),(69,' Kinderjoy','Grace  Mart',88,65,'Cheque','Baniyatar','2019-08-09','Samir',2147483644,'Ishwor','2019-08-08 18:15:00'),(70,' Snickers','Grace  Mart',63,67,'Cheque','Baniyatar','2019-08-09','Samir',2147483644,'Ishwor','2019-08-08 18:15:00'),(71,' Cadbury','Grace  Mart',50,69,'Cheque','Baniyatar','2019-08-09','Samir',2147483644,'Ishwor','2019-08-08 18:15:00'),(72,' Kinderjoy','Sai Mart',44,48,'Cheque','Gongabu','2019-08-08','Samir',2147483647,'Ishwor','2019-08-08 18:15:00'),(73,' Snickers','Sai Mart',20,44,'Cheque','Gongabu','2019-08-08','Samir',2147483647,'Ishwor','2019-08-08 18:15:00'),(78,' Kinderjoy','sadsadsa',5,87,'Cheque','dsadasd','2019-08-08','Samir',1000,'Ishwor','2019-08-09 11:36:15'),(79,' Snickers','sadsadsa',7,88,'Cheque','dsadasd','2019-08-08','Samir',1000,'Ishwor','2019-08-09 11:36:15'),(80,' Kinderjoy','hjgyj',4,45,'Cheque','jygjygyj','2019-08-09','Samir',1000,'Ishwor','2019-08-09 11:44:39'),(81,' Snickers','hjgyj',2,48,'Cheque','jygjygyj','2019-08-09','Samir',1000,'Ishwor','2019-08-09 11:44:39'),(82,' Kinderjoy','fdsfdsfsd',45,54,'Cheque','sdsadas','2019-08-14','Samir',1000,'Ishwor','2019-08-09 12:44:14'),(83,' Snickers','fdsfdsfsd',54,45,'Cheque','sdsadas','2019-08-14','Samir',1000,'Ishwor','2019-08-09 12:44:14'),(86,' Kinderjoy','hjghj',50,48,'Cheque','hjghjghj','2019-08-09','Samir',1001,'Ishwor','2019-08-09 13:22:06'),(87,' Snickers','ppp',44,87,'Cheque','nmbmb','2019-08-16','Samir',1002,'Ishwor','2019-08-09 13:23:39'),(88,' RedBull','vcf',91,54,'Cheque','hjvjhv','2019-08-23','Samir',1003,'Ishwor','2019-08-09 13:24:30'),(89,' Vita-Milk','vcf',36,45,'Cheque','hjvjhv','2019-08-23','Samir',1003,'Ishwor','2019-08-09 13:24:30');
/*!40000 ALTER TABLE `sales` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `salesman`
--

DROP TABLE IF EXISTS `salesman`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `salesman` (
  `sid` int(200) NOT NULL AUTO_INCREMENT,
  `sname` varchar(200) NOT NULL,
  `slast` varchar(200) NOT NULL,
  `sphone` bigint(200) NOT NULL,
  `sdate` date NOT NULL,
  `saddress` varchar(200) NOT NULL,
  `image` varchar(200) NOT NULL,
  PRIMARY KEY (`sid`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `salesman`
--

LOCK TABLES `salesman` WRITE;
/*!40000 ALTER TABLE `salesman` DISABLE KEYS */;
INSERT INTO `salesman` VALUES (1,'Samir ','Subedi',9861282140,'2019-07-10','Gongabu','samir.JPG');
/*!40000 ALTER TABLE `salesman` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `supplier`
--

DROP TABLE IF EXISTS `supplier`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `supplier` (
  `sid` int(100) NOT NULL AUTO_INCREMENT,
  `sname` varchar(200) NOT NULL,
  `semail` varchar(200) NOT NULL,
  `sphone` bigint(255) NOT NULL,
  `saddress` varchar(200) NOT NULL,
  PRIMARY KEY (`sid`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `supplier`
--

LOCK TABLES `supplier` WRITE;
/*!40000 ALTER TABLE `supplier` DISABLE KEYS */;
INSERT INTO `supplier` VALUES (1,'Vishal Group','annsa@gmai.com',98612521470,'wdfdwf');
/*!40000 ALTER TABLE `supplier` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `uname` varchar(255) NOT NULL,
  `pwd` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user`
--

LOCK TABLES `user` WRITE;
/*!40000 ALTER TABLE `user` DISABLE KEYS */;
/*!40000 ALTER TABLE `user` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2019-08-10 21:00:01
