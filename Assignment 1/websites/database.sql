-- MariaDB dump 10.17  Distrib 10.4.15-MariaDB, for Linux (x86_64)
--
-- Host: mysql    Database: 
-- ------------------------------------------------------
-- Server version	10.6.4-MariaDB-1:10.6.4+maria~focal

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
-- Current Database: `assignment1`
--

CREATE DATABASE /*!32312 IF NOT EXISTS*/ `assignment1` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;

USE `assignment1`;

--
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `admin` (
  `username` varchar(16) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(500) NOT NULL,
  `firstname` varchar(45) DEFAULT NULL,
  `surname` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `admin`
--

LOCK TABLES `admin` WRITE;
/*!40000 ALTER TABLE `admin` DISABLE KEYS */;
INSERT INTO `admin` VALUES ('AdminTestTest','AdminTestTest@example.com','$2y$10$.fA6fGoS15wYZX5eT.6LgOx22U7dwcVca4CpRJ237EtkYZ/cdxO8u','AdminTest','Test'),('SandyBrick','SandyBrick@NN.com','$2y$10$tNeCh5qkRVmClYLYLzLor.sWGhAYxCG0M/9gcx7EN8IkduqOoTr6a','Sandy','Brick');
/*!40000 ALTER TABLE `admin` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `article`
--

DROP TABLE IF EXISTS `article`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `article` (
  `title` varchar(45) NOT NULL,
  `content` varchar(500) NOT NULL,
  `categoryId` varchar(45) NOT NULL,
  `articleId` int(6) NOT NULL AUTO_INCREMENT,
  `publishDate` date NOT NULL,
  `imageName` longblob NOT NULL,
  PRIMARY KEY (`articleId`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `article`
--

LOCK TABLES `article` WRITE;
/*!40000 ALTER TABLE `article` DISABLE KEYS */;
INSERT INTO `article` VALUES ('Entertainment 1',' lorem ipsum','Entertainment',1,'2019-01-01','content-marketing-entertainment-industry-60743a08d4e48-1520x800.png'),('Health 2',' Lorem Ipsum','Health',2,'2021-11-11','Mental-Health-1024x1024.png'),('Sports 1',' Lorem Ipsum\r\n\r\n Lorem Ipsum\r\n\r\n Lorem Ipsum\r\n\r\n Lorem Ipsum\r\n\r\n Lorem Ipsum\r\n\r\n Lorem Ipsum','Sports',3,'2020-01-01','sportsballs1.png'),('Crime 1','  Lorem Ipsum\r\n\r\n Lorem Ipsum\r\n\r\n Lorem Ipsum\r\n\r\n Lorem Ipsum\r\n\r\n Lorem Ipsum\r\n\r\n Lorem Ipsum','Crime',4,'2019-01-01','860_main_crime_by_the_numbers_0.png'),('Crime 2','  Lorem Ipsum\r\n\r\n Lorem Ipsum\r\n\r\n Lorem Ipsum\r\n\r\n Lorem Ipsum\r\n\r\n Lorem Ipsum\r\n\r\n Lorem Ipsum','Crime',5,'2021-06-05','860_main_crime_by_the_numbers_0.png'),('Crime 3','  Lorem Ipsum\r\n\r\n Lorem Ipsum\r\n\r\n Lorem Ipsum\r\n\r\n Lorem Ipsum\r\n\r\n Lorem Ipsum\r\n\r\n Lorem Ipsum','Crime',6,'2021-11-04','860_main_crime_by_the_numbers_0.png'),('Technology 1','  Lorem Ipsum\r\n\r\n Lorem Ipsum\r\n\r\n Lorem Ipsum\r\n\r\n Lorem Ipsum\r\n\r\n Lorem Ipsum\r\n\r\n Lorem Ipsum','Technology',7,'2021-11-01','download (2).png'),('World 1','  Lorem Ipsum\r\n\r\n Lorem Ipsum\r\n\r\n Lorem Ipsum\r\n\r\n Lorem Ipsum\r\n\r\n Lorem Ipsum\r\n\r\n Lorem Ipsum','World',8,'2021-11-01','globe-taride-maps-1969_original.png'),('World 2','  Lorem Ipsum\r\n\r\n Lorem Ipsum\r\n\r\n Lorem Ipsum\r\n\r\n Lorem Ipsum\r\n\r\n Lorem Ipsum\r\n\r\n Lorem Ipsum','World',9,'2021-11-10','globe-taride-maps-1969_original.png'),('Stocks 2','  Lorem Ipsum\r\n\r\n Lorem Ipsum\r\n\r\n Lorem Ipsum\r\n\r\n Lorem Ipsum\r\n\r\n Lorem Ipsum\r\n\r\n Lorem Ipsum','Stocks',10,'2021-11-08','60f6e198b485a800187a2027.png'),('Stocks 1','  Lorem Ipsum\r\n\r\n Lorem Ipsum\r\n\r\n Lorem Ipsum\r\n\r\n Lorem Ipsum\r\n\r\n Lorem Ipsum\r\n\r\n Lorem Ipsum','Stocks',11,'2021-08-11','60f6e198b485a800187a2027.png'),('Health 1','  Lorem Ipsum\r\n\r\n Lorem Ipsum\r\n\r\n Lorem Ipsum\r\n\r\n Lorem Ipsum\r\n\r\n Lorem Ipsum\r\n\r\n Lorem Ipsum','Health',12,'2019-04-04','Mental-Health-1024x1024.png'),('Tester Image',' image tester','Crime',16,'2021-11-25','sunset-view-on-the-beach-png.png'),('Politics 1',' Politics Test Test','Politics',17,'2021-11-21','chamber2-01.png');
/*!40000 ALTER TABLE `article` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `category`
--

DROP TABLE IF EXISTS `category`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `category` (
  `name` varchar(45) NOT NULL,
  PRIMARY KEY (`name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `category`
--

LOCK TABLES `category` WRITE;
/*!40000 ALTER TABLE `category` DISABLE KEYS */;
INSERT INTO `category` VALUES ('Crime'),('Entertainment'),('Environment'),('Health'),('Politics'),('Sports'),('Stocks'),('Technology'),('World');
/*!40000 ALTER TABLE `category` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `comment`
--

DROP TABLE IF EXISTS `comment`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `comment` (
  `commentID` int(6) NOT NULL AUTO_INCREMENT,
  `commentContent` varchar(45) DEFAULT NULL,
  `articleId` int(6) DEFAULT NULL,
  `username` varchar(45) DEFAULT NULL,
  `email` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`commentID`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `comment`
--

LOCK TABLES `comment` WRITE;
/*!40000 ALTER TABLE `comment` DISABLE KEYS */;
INSERT INTO `comment` VALUES (1,' Test Comment',16,'TestHash@example.com',NULL),(2,' Stock category comment',10,'TestHash@example.com',NULL),(6,' Test comment',2,'TestHash@example.com',NULL);
/*!40000 ALTER TABLE `comment` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `name` varchar(45) NOT NULL,
  `email` varchar(45) NOT NULL,
  `password` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`email`),
  UNIQUE KEY `email_UNIQUE` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES ('AndrewPleb','pleb@test.com','$2y$10$VE9cZcEyAeIDGb/vLLxIX.Qb3GVT52TdLiYGaR785H1hgh5cuqrR.'),('Test','Test@example.com','$2y$10$4d1AEGVmuds8cVkPgGZI9OKeLkmy1/i7OELOEys9sQ8M5QBMc0/SW'),('TestHash','TestHash@example.com','$2y$10$FhfzyrKr7WAU5NA15mV7VOwACeLMXjzMFRxBckxF0F1tILDNrthP.');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Current Database: `mysql`
--

CREATE DATABASE /*!32312 IF NOT EXISTS*/ `mysql` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;

USE `mysql`;

--
-- Table structure for table `column_stats`
--

DROP TABLE IF EXISTS `column_stats`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `column_stats` (
  `db_name` varchar(64) COLLATE utf8mb3_bin NOT NULL,
  `table_name` varchar(64) COLLATE utf8mb3_bin NOT NULL,
  `column_name` varchar(64) COLLATE utf8mb3_bin NOT NULL,
  `min_value` varbinary(255) DEFAULT NULL,
  `max_value` varbinary(255) DEFAULT NULL,
  `nulls_ratio` decimal(12,4) DEFAULT NULL,
  `avg_length` decimal(12,4) DEFAULT NULL,
  `avg_frequency` decimal(12,4) DEFAULT NULL,
  `hist_size` tinyint(3) unsigned DEFAULT NULL,
  `hist_type` enum('SINGLE_PREC_HB','DOUBLE_PREC_HB') COLLATE utf8mb3_bin DEFAULT NULL,
  `histogram` varbinary(255) DEFAULT NULL,
  PRIMARY KEY (`db_name`,`table_name`,`column_name`)
) ENGINE=Aria DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_bin PAGE_CHECKSUM=1 TRANSACTIONAL=0 COMMENT='Statistics on Columns';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `column_stats`
--

LOCK TABLES `column_stats` WRITE;
/*!40000 ALTER TABLE `column_stats` DISABLE KEYS */;
/*!40000 ALTER TABLE `column_stats` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `columns_priv`
--

DROP TABLE IF EXISTS `columns_priv`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `columns_priv` (
  `Host` char(255) COLLATE utf8mb3_bin NOT NULL DEFAULT '',
  `Db` char(64) COLLATE utf8mb3_bin NOT NULL DEFAULT '',
  `User` char(128) COLLATE utf8mb3_bin NOT NULL DEFAULT '',
  `Table_name` char(64) COLLATE utf8mb3_bin NOT NULL DEFAULT '',
  `Column_name` char(64) COLLATE utf8mb3_bin NOT NULL DEFAULT '',
  `Timestamp` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `Column_priv` set('Select','Insert','Update','References') CHARACTER SET utf8mb3 NOT NULL DEFAULT '',
  PRIMARY KEY (`Host`,`Db`,`User`,`Table_name`,`Column_name`)
) ENGINE=Aria DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_bin PAGE_CHECKSUM=1 TRANSACTIONAL=1 COMMENT='Column privileges';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `columns_priv`
--

LOCK TABLES `columns_priv` WRITE;
/*!40000 ALTER TABLE `columns_priv` DISABLE KEYS */;
/*!40000 ALTER TABLE `columns_priv` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `db`
--

DROP TABLE IF EXISTS `db`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `db` (
  `Host` char(255) COLLATE utf8mb3_bin NOT NULL DEFAULT '',
  `Db` char(64) COLLATE utf8mb3_bin NOT NULL DEFAULT '',
  `User` char(128) COLLATE utf8mb3_bin NOT NULL DEFAULT '',
  `Select_priv` enum('N','Y') CHARACTER SET utf8mb3 NOT NULL DEFAULT 'N',
  `Insert_priv` enum('N','Y') CHARACTER SET utf8mb3 NOT NULL DEFAULT 'N',
  `Update_priv` enum('N','Y') CHARACTER SET utf8mb3 NOT NULL DEFAULT 'N',
  `Delete_priv` enum('N','Y') CHARACTER SET utf8mb3 NOT NULL DEFAULT 'N',
  `Create_priv` enum('N','Y') CHARACTER SET utf8mb3 NOT NULL DEFAULT 'N',
  `Drop_priv` enum('N','Y') CHARACTER SET utf8mb3 NOT NULL DEFAULT 'N',
  `Grant_priv` enum('N','Y') CHARACTER SET utf8mb3 NOT NULL DEFAULT 'N',
  `References_priv` enum('N','Y') CHARACTER SET utf8mb3 NOT NULL DEFAULT 'N',
  `Index_priv` enum('N','Y') CHARACTER SET utf8mb3 NOT NULL DEFAULT 'N',
  `Alter_priv` enum('N','Y') CHARACTER SET utf8mb3 NOT NULL DEFAULT 'N',
  `Create_tmp_table_priv` enum('N','Y') CHARACTER SET utf8mb3 NOT NULL DEFAULT 'N',
  `Lock_tables_priv` enum('N','Y') CHARACTER SET utf8mb3 NOT NULL DEFAULT 'N',
  `Create_view_priv` enum('N','Y') CHARACTER SET utf8mb3 NOT NULL DEFAULT 'N',
  `Show_view_priv` enum('N','Y') CHARACTER SET utf8mb3 NOT NULL DEFAULT 'N',
  `Create_routine_priv` enum('N','Y') CHARACTER SET utf8mb3 NOT NULL DEFAULT 'N',
  `Alter_routine_priv` enum('N','Y') CHARACTER SET utf8mb3 NOT NULL DEFAULT 'N',
  `Execute_priv` enum('N','Y') CHARACTER SET utf8mb3 NOT NULL DEFAULT 'N',
  `Event_priv` enum('N','Y') CHARACTER SET utf8mb3 NOT NULL DEFAULT 'N',
  `Trigger_priv` enum('N','Y') CHARACTER SET utf8mb3 NOT NULL DEFAULT 'N',
  `Delete_history_priv` enum('N','Y') CHARACTER SET utf8mb3 NOT NULL DEFAULT 'N',
  PRIMARY KEY (`Host`,`Db`,`User`),
  KEY `User` (`User`)
) ENGINE=Aria DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_bin PAGE_CHECKSUM=1 TRANSACTIONAL=1 COMMENT='Database privileges';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `db`
--

LOCK TABLES `db` WRITE;
/*!40000 ALTER TABLE `db` DISABLE KEYS */;
/*!40000 ALTER TABLE `db` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `event`
--

DROP TABLE IF EXISTS `event`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `event` (
  `db` char(64) CHARACTER SET utf8mb3 COLLATE utf8mb3_bin NOT NULL DEFAULT '',
  `name` char(64) NOT NULL DEFAULT '',
  `body` longblob NOT NULL,
  `definer` varchar(384) CHARACTER SET utf8mb3 COLLATE utf8mb3_bin NOT NULL DEFAULT '',
  `execute_at` datetime DEFAULT NULL,
  `interval_value` int(11) DEFAULT NULL,
  `interval_field` enum('YEAR','QUARTER','MONTH','DAY','HOUR','MINUTE','WEEK','SECOND','MICROSECOND','YEAR_MONTH','DAY_HOUR','DAY_MINUTE','DAY_SECOND','HOUR_MINUTE','HOUR_SECOND','MINUTE_SECOND','DAY_MICROSECOND','HOUR_MICROSECOND','MINUTE_MICROSECOND','SECOND_MICROSECOND') DEFAULT NULL,
  `created` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `modified` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `last_executed` datetime DEFAULT NULL,
  `starts` datetime DEFAULT NULL,
  `ends` datetime DEFAULT NULL,
  `status` enum('ENABLED','DISABLED','SLAVESIDE_DISABLED') NOT NULL DEFAULT 'ENABLED',
  `on_completion` enum('DROP','PRESERVE') NOT NULL DEFAULT 'DROP',
  `sql_mode` set('REAL_AS_FLOAT','PIPES_AS_CONCAT','ANSI_QUOTES','IGNORE_SPACE','IGNORE_BAD_TABLE_OPTIONS','ONLY_FULL_GROUP_BY','NO_UNSIGNED_SUBTRACTION','NO_DIR_IN_CREATE','POSTGRESQL','ORACLE','MSSQL','DB2','MAXDB','NO_KEY_OPTIONS','NO_TABLE_OPTIONS','NO_FIELD_OPTIONS','MYSQL323','MYSQL40','ANSI','NO_AUTO_VALUE_ON_ZERO','NO_BACKSLASH_ESCAPES','STRICT_TRANS_TABLES','STRICT_ALL_TABLES','NO_ZERO_IN_DATE','NO_ZERO_DATE','INVALID_DATES','ERROR_FOR_DIVISION_BY_ZERO','TRADITIONAL','NO_AUTO_CREATE_USER','HIGH_NOT_PRECEDENCE','NO_ENGINE_SUBSTITUTION','PAD_CHAR_TO_FULL_LENGTH','EMPTY_STRING_IS_NULL','SIMULTANEOUS_ASSIGNMENT','TIME_ROUND_FRACTIONAL') NOT NULL DEFAULT '',
  `comment` char(64) CHARACTER SET utf8mb3 COLLATE utf8mb3_bin NOT NULL DEFAULT '',
  `originator` int(10) unsigned NOT NULL,
  `time_zone` char(64) CHARACTER SET latin1 NOT NULL DEFAULT 'SYSTEM',
  `character_set_client` char(32) CHARACTER SET utf8mb3 COLLATE utf8mb3_bin DEFAULT NULL,
  `collation_connection` char(32) CHARACTER SET utf8mb3 COLLATE utf8mb3_bin DEFAULT NULL,
  `db_collation` char(32) CHARACTER SET utf8mb3 COLLATE utf8mb3_bin DEFAULT NULL,
  `body_utf8` longblob DEFAULT NULL,
  PRIMARY KEY (`db`,`name`)
) ENGINE=Aria DEFAULT CHARSET=utf8mb3 PAGE_CHECKSUM=1 TRANSACTIONAL=1 COMMENT='Events';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `func`
--

DROP TABLE IF EXISTS `func`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `func` (
  `name` char(64) COLLATE utf8mb3_bin NOT NULL DEFAULT '',
  `ret` tinyint(1) NOT NULL DEFAULT 0,
  `dl` char(128) COLLATE utf8mb3_bin NOT NULL DEFAULT '',
  `type` enum('function','aggregate') CHARACTER SET utf8mb3 NOT NULL,
  PRIMARY KEY (`name`)
) ENGINE=Aria DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_bin PAGE_CHECKSUM=1 TRANSACTIONAL=1 COMMENT='User defined functions';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `func`
--

LOCK TABLES `func` WRITE;
/*!40000 ALTER TABLE `func` DISABLE KEYS */;
/*!40000 ALTER TABLE `func` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `global_priv`
--

DROP TABLE IF EXISTS `global_priv`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `global_priv` (
  `Host` char(255) COLLATE utf8mb3_bin NOT NULL DEFAULT '',
  `User` char(128) COLLATE utf8mb3_bin NOT NULL DEFAULT '',
  `Priv` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL DEFAULT '{}' CHECK (json_valid(`Priv`)),
  PRIMARY KEY (`Host`,`User`)
) ENGINE=Aria DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_bin PAGE_CHECKSUM=1 TRANSACTIONAL=1 COMMENT='Users and global privileges';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `global_priv`
--

LOCK TABLES `global_priv` WRITE;
/*!40000 ALTER TABLE `global_priv` DISABLE KEYS */;
INSERT INTO `global_priv` VALUES ('localhost','mariadb.sys','{\"access\":0,\"plugin\":\"mysql_native_password\",\"authentication_string\":\"\",\"account_locked\":true,\"password_last_changed\":0}'),('localhost','root','{\"access\":549755813887,\"plugin\":\"mysql_native_password\",\"authentication_string\":\"*6A73561D1E49479B0E89BC6072145D20FA359357\",\"password_last_changed\":1635621039,\"version_id\":100604}'),('%','root','{\"access\":549755813887,\"version_id\":100604,\"plugin\":\"mysql_native_password\",\"authentication_string\":\"*6A73561D1E49479B0E89BC6072145D20FA359357\",\"password_last_changed\":1635621039}'),('%','v.je','{\"access\":549755813887,\"version_id\":100604,\"plugin\":\"mysql_native_password\",\"authentication_string\":\"*6A73561D1E49479B0E89BC6072145D20FA359357\",\"password_last_changed\":1635954974}'),('%','s.je','{\"access\":549755813887,\"version_id\":100604,\"plugin\":\"mysql_native_password\",\"authentication_string\":\"*2721779FE2256C5EDD7F7989590D8E598CB5B068\",\"password_last_changed\":1635954974}'),('%','student','{\"access\":549755813887,\"version_id\":100604,\"plugin\":\"mysql_native_password\",\"authentication_string\":\"*1308E0FCD43112F8D948AB093F54892CB7B220AA\",\"password_last_changed\":1635954974}');
/*!40000 ALTER TABLE `global_priv` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `gtid_slave_pos`
--

DROP TABLE IF EXISTS `gtid_slave_pos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `gtid_slave_pos` (
  `domain_id` int(10) unsigned NOT NULL,
  `sub_id` bigint(20) unsigned NOT NULL,
  `server_id` int(10) unsigned NOT NULL,
  `seq_no` bigint(20) unsigned NOT NULL,
  PRIMARY KEY (`domain_id`,`sub_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='Replication slave GTID position';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `gtid_slave_pos`
--

LOCK TABLES `gtid_slave_pos` WRITE;
/*!40000 ALTER TABLE `gtid_slave_pos` DISABLE KEYS */;
/*!40000 ALTER TABLE `gtid_slave_pos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `help_category`
--

DROP TABLE IF EXISTS `help_category`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `help_category` (
  `help_category_id` smallint(5) unsigned NOT NULL,
  `name` char(64) NOT NULL,
  `parent_category_id` smallint(5) unsigned DEFAULT NULL,
  `url` text NOT NULL,
  PRIMARY KEY (`help_category_id`),
  UNIQUE KEY `name` (`name`)
) ENGINE=Aria DEFAULT CHARSET=utf8mb3 PAGE_CHECKSUM=1 TRANSACTIONAL=0 COMMENT='help categories';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `help_category`
--

LOCK TABLES `help_category` WRITE;
/*!40000 ALTER TABLE `help_category` DISABLE KEYS */;
INSERT INTO `help_category` VALUES (1,'Geographic',0,''),(2,'Polygon Properties',34,''),(3,'WKT',34,''),(4,'Numeric Functions',38,''),(5,'Plugins',35,''),(6,'MBR',34,''),(7,'Control Flow Functions',38,''),(8,'Transactions',35,''),(9,'Help Metadata',35,''),(10,'Account Management',35,''),(11,'Point Properties',34,''),(12,'Encryption Functions',38,''),(13,'LineString Properties',34,''),(14,'Miscellaneous Functions',38,''),(15,'Logical Operators',38,''),(16,'Functions and Modifiers for Use with GROUP BY',35,''),(17,'Information Functions',38,''),(18,'Comparison Operators',38,''),(19,'Bit Functions',38,''),(20,'Table Maintenance',35,''),(21,'User-Defined Functions',35,''),(22,'Data Types',35,''),(23,'Compound Statements',35,''),(24,'Geometry Constructors',34,''),(25,'GeometryCollection Properties',1,''),(26,'Administration',35,''),(27,'Data Manipulation',35,''),(28,'Utility',35,''),(29,'Language Structure',35,''),(30,'Geometry Relations',34,''),(31,'Date and Time Functions',38,''),(32,'WKB',34,''),(33,'Procedures',35,''),(34,'Geographic Features',35,''),(35,'Contents',0,''),(36,'Geometry Properties',34,''),(37,'String Functions',38,''),(38,'Functions',35,''),(39,'Data Definition',35,''),(40,'Sequences',35,''),(41,'JSON Functions',38,''),(42,'Window Functions',38,''),(43,'Spider Functions',38,''),(44,'Dynamic Column Functions',38,'');
/*!40000 ALTER TABLE `help_category` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `help_keyword`
--

DROP TABLE IF EXISTS `help_keyword`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `help_keyword` (
  `help_keyword_id` int(10) unsigned NOT NULL,
  `name` char(64) NOT NULL,
  PRIMARY KEY (`help_keyword_id`),
  UNIQUE KEY `name` (`name`)
) ENGINE=Aria DEFAULT CHARSET=utf8mb3 PAGE_CHECKSUM=1 TRANSACTIONAL=0 COMMENT='help keywords';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `help_keyword`
--

LOCK TABLES `help_keyword` WRITE;
/*!40000 ALTER TABLE `help_keyword` DISABLE KEYS */;
INSERT INTO `help_keyword` VALUES (1,'master_ssl_verify_cert'),(2,'drop prepare'),(3,'work'),(4,'drop'),(5,'returns'),(6,'value'),(7,'nchar'),(8,'repeat'),(9,'columns'),(10,'sql_big_result'),(11,'escape'),(12,'mode'),(13,'schedule'),(14,'starts'),(15,'host'),(16,'row_format');
/*!40000 ALTER TABLE `help_keyword` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `help_relation`
--

DROP TABLE IF EXISTS `help_relation`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `help_relation` (
  `help_topic_id` int(10) unsigned NOT NULL,
  `help_keyword_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`help_keyword_id`,`help_topic_id`),
  KEY `help_topic_id` (`help_topic_id`)
) ENGINE=Aria DEFAULT CHARSET=utf8mb3 PAGE_CHECKSUM=1 TRANSACTIONAL=0 COMMENT='keyword-topic relation';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `help_relation`
--

LOCK TABLES `help_relation` WRITE;
/*!40000 ALTER TABLE `help_relation` DISABLE KEYS */;
INSERT INTO `help_relation` VALUES (95,1),(97,2),(110,3),(120,4),(128,4),(259,4),(647,4),(664,4),(665,4),(666,4),(667,4),(668,4),(669,4),(670,4),(671,4),(672,4),(673,4),(675,4),(676,4),(258,5),(264,6),(317,6),(320,6),(417,6),(433,6),(271,7),(316,8),(621,8),(355,9),(434,10),(603,11),(610,12),(642,13),(652,14),(659,15),(660,16);
/*!40000 ALTER TABLE `help_relation` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `help_topic`
--

DROP TABLE IF EXISTS `help_topic`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `help_topic` (
  `help_topic_id` int(10) unsigned NOT NULL,
  `name` char(64) NOT NULL,
  `help_category_id` smallint(5) unsigned NOT NULL,
  `description` text NOT NULL,
  `example` text NOT NULL,
  `url` text NOT NULL,
  PRIMARY KEY (`help_topic_id`),
  UNIQUE KEY `name` (`name`)
) ENGINE=Aria DEFAULT CHARSET=utf8mb3 PAGE_CHECKSUM=1 TRANSACTIONAL=0 COMMENT='help topics';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `help_topic`
--

LOCK TABLES `help_topic` WRITE;
/*!40000 ALTER TABLE `help_topic` DISABLE KEYS */;
INSERT INTO `help_topic` VALUES (1,'HELP_DATE',9,'This help information was generated from the MariaDB Knowledge Base\non 22 July 2019.','',''),(2,'AREA',2,'A synonym for ST_AREA.\n \n\n \n \n \n \n \n \n \n\nURL:\nhttps://mariadb.com/kb/en/library/polygon-properties-area/','','https://mariadb.com/kb/en/library/polygon-properties-area/'),(3,'CENTROID',2,'A synonym for ST_CENTROID.\n \n\n \n \n \n \n \n \n \n\nURL: https://mariadb.com/kb/en/library/centroid/','','https://mariadb.com/kb/en/library/centroid/'),(4,'ExteriorRing',2,'A synonym for ST_ExteriorRing.\n \n\n \n \n \n \n \n \n \n\nURL:\nhttps://mariadb.com/kb/en/library/polygon-properties-exteriorring/','','https://mariadb.com/kb/en/library/polygon-properties-exteriorring/'),(5,'InteriorRingN',2,'A synonym for ST_InteriorRingN.\n \n\n \n \n \n \n \n \n \n\nURL:\nhttps://mariadb.com/kb/en/library/polygon-properties-interiorringn/','','https://mariadb.com/kb/en/library/polygon-properties-interiorringn/'),(6,'NumInteriorRings',2,'A synonym for ST_NumInteriorRings.\n \n\n \n \n \n \n \n \n \n\nURL:\nhttps://mariadb.com/kb/en/library/polygon-properties-numinteriorrings/','','https://mariadb.com/kb/en/library/polygon-properties-numinteriorrings/'),(7,'ST_AREA',2,'Syntax\n------ \nST_Area(poly)\nArea(poly)\n \nDescription\n----------- \nReturns as a double-precision number the area of the Polygon\nvalue poly, as measured in its spatial reference system.\n \nST_Area() and Area() are synonyms.\n \nExamples\n-------- \nSET @poly = \'Polygon((0 0,0 3,3 0,0 0),(1 1,1 2,2 1,1\n1))\';\n \nSELECT Area(GeomFromText(@poly));\n+---------------------------+\n| Area(GeomFromText(@poly)) |\n+---------------------------+\n| 4 |\n+---------------------------+\n \n\n \n \n \n \n \n \n \n\nURL: https://mariadb.com/kb/en/library/st_area/','','https://mariadb.com/kb/en/library/st_area/'),(8,'ST_CENTROID',2,'Syntax\n------ \nST_Centroid(mpoly)\nCentroid(mpoly)\n \nDescription\n----------- \nReturns a point reflecting the mathematical centroid\n(geometric center) for the MultiPolygon mpoly. The resulting\npoint will not necessarily be on the MultiPolygon. \n \nST_Centroid() and Centroid() are synonyms.\n \nExamples\n-------- \nSET @poly = ST_GeomFromText(\'POLYGON((0 0,20 0,20 20,0 20,0\n0))\');\nSELECT ST_AsText(ST_Centroid(@poly)) AS center;\n \n+--------------+\n| center |\n+--------------+\n| POINT(10 10) |\n+--------------+\n \n\n \n \n \n \n \n \n \n\nURL: https://mariadb.com/kb/en/library/st_centroid/','','https://mariadb.com/kb/en/library/st_centroid/'),(9,'ST_ExteriorRing',2,'Syntax\n------ \nST_ExteriorRing(poly)\nExteriorRing(poly)\n \nDescription\n----------- \nReturns the exterior ring of the Polygon value poly as a\nLineString.\n \nST_ExteriorRing() and ExteriorRing() are synonyms.\n \nExamples\n-------- \nSET @poly = \'Polygon((0 0,0 3,3 3,3 0,0 0),(1 1,1 2,2 2,2\n1,1 1))\';\n \nSELECT AsText(ExteriorRing(GeomFromText(@poly)));\n+-------------------------------------------+\n| AsText(ExteriorRing(GeomFromText(@poly))) |\n+-------------------------------------------+\n| LINESTRING(0 0,0 3,3 3,3 0,0 0) |\n+-------------------------------------------+\n \n\n \n \n \n \n \n \n \n\nURL: https://mariadb.com/kb/en/library/st_exteriorring/','','https://mariadb.com/kb/en/library/st_exteriorring/'),(10,'ST_InteriorRingN',2,'Syntax\n------ \nST_InteriorRingN(poly,N)\nInteriorRingN(poly,N)\n \nDescription\n----------- \nReturns the N-th interior ring for the Polygon value poly as\na LineString. Rings are numbered beginning with 1.\n \nST_InteriorRingN() and InteriorRingN() are synonyms.\n \nExamples\n-------- \nSET @poly = \'Polygon((0 0,0 3,3 3,3 0,0 0),(1 1,1 2,2 2,2\n1,1 1))\';\n \nSELECT AsText(InteriorRingN(GeomFromText(@poly),1));\n+----------------------------------------------+\n| AsText(InteriorRingN(GeomFromText(@poly),1)) |\n+----------------------------------------------+\n| LINESTRING(1 1,1 2,2 2,2 1,1 1) |\n+----------------------------------------------+\n \n\n \n \n \n \n \n \n \n\nURL: https://mariadb.com/kb/en/library/st_interiorringn/','','https://mariadb.com/kb/en/library/st_interiorringn/'),(11,'ST_NumInteriorRings',2,'Syntax\n------ \nST_NumInteriorRings(poly)\nNumInteriorRings(poly)\n \nDescription\n----------- \nReturns an integer containing the number of interior rings\nin the Polygon value poly.\n \nNote that according the the OpenGIS standard, a POLYGON\nshould have exactly one ExteriorRing and all other rings\nshould lie within that ExteriorRing and thus be the\nInteriorRings. Practically, however, some systems, including\nMariaDB\'s, permit polygons to have several\n\'ExteriorRings\'. In the case of there being multiple,\nnon-overlapping exterior rings ST_NumInteriorRings() will\nreturn 1.\n \nST_NumInteriorRings() and NumInteriorRings() are synonyms.\n \nExamples\n-------- \nSET @poly = \'Polygon((0 0,0 3,3 3,3 0,0 0),(1 1,1 2,2 2,2\n1,1 1))\';\n \nSELECT NumInteriorRings(GeomFromText(@poly));\n+---------------------------------------+\n| NumInteriorRings(GeomFromText(@poly)) |\n+---------------------------------------+\n| 1 |\n+---------------------------------------+\n \nNon-overlapping \'polygon\':\n \nSELECT ST_NumInteriorRings(ST_PolyFromText(\'POLYGON((0 0,10\n0,10 10,0 10,0 0),\n (-1 -1,-5 -1,-5 -5,-1 -5,-1 -1))\')) AS NumInteriorRings;\n \n+------------------+\n| NumInteriorRings |\n+------------------+\n| 1 |\n+------------------+\n \n\n \n \n \n \n \n \n \n\nURL: https://mariadb.com/kb/en/library/st_numinteriorrings/','','https://mariadb.com/kb/en/library/st_numinteriorrings/'),(12,'WKT Definition',3,'Description\n----------- \nThe Well-Known Text (WKT) representation of Geometry is\ndesigned to exchange geometry data in ASCII form. Examples\nof the basic geometry types include:\n \nGeometry Types | \n \nPOINT | \n \nLINESTRING | \n \nPOLYGON | \n \nMULTIPOINT | \n \nMULTILINESTRING | \n \nMULTIPOLYGON | \n \nGEOMETRYCOLLECTION | \n \nGEOMETRY | \n \n\n\nURL: https://mariadb.com/kb/en/library/wkt-definition/','','https://mariadb.com/kb/en/library/wkt-definition/'),(13,'AsText',3,'A synonym for ST_AsText().\n \n\n \n \n \n \n \n \n \n\nURL: https://mariadb.com/kb/en/library/wkt-astext/','','https://mariadb.com/kb/en/library/wkt-astext/'),(14,'AsWKT',3,'A synonym for ST_AsText().\n \n\n \n \n \n \n \n \n \n\nURL: https://mariadb.com/kb/en/library/wkt-aswkt/','','https://mariadb.com/kb/en/library/wkt-aswkt/'),(15,'GeomCollFromText',3,'A synonym for ST_GeomCollFromText.\n \n\n \n \n \n \n \n \n \n\nURL: https://mariadb.com/kb/en/library/wkt-geomcollfromtext/','','https://mariadb.com/kb/en/library/wkt-geomcollfromtext/'),(16,'GeometryCollectionFromText',3,'A synonym for ST_GeomCollFromText.\n \n\n \n \n \n \n \n \n \n\nURL:\nhttps://mariadb.com/kb/en/library/geometrycollectionfromtext/','','https://mariadb.com/kb/en/library/geometrycollectionfromtext/'),(17,'GeometryFromText',3,'A synonym for ST_GeomFromText.\n \n\n \n \n \n \n \n \n \n\nURL: https://mariadb.com/kb/en/library/geometryfromtext/','','https://mariadb.com/kb/en/library/geometryfromtext/'),(18,'GeomFromText',3,'A synonym for ST_GeomFromText.\n \n\n \n \n \n \n \n \n \n\nURL: https://mariadb.com/kb/en/library/wkt-geomfromtext/','','https://mariadb.com/kb/en/library/wkt-geomfromtext/'),(19,'LineFromText',3,'A synonym for ST_LineFromText.\n \n\n \n \n \n \n \n \n \n\nURL: https://mariadb.com/kb/en/library/wkt-linefromtext/','','https://mariadb.com/kb/en/library/wkt-linefromtext/'),(20,'LineStringFromText',3,'A synonym for ST_LineFromText.\n \n\n \n \n \n \n \n \n \n\nURL: https://mariadb.com/kb/en/library/linestringfromtext/','','https://mariadb.com/kb/en/library/linestringfromtext/'),(21,'MLineFromText',3,'Syntax\n------ \nMLineFromText(wkt[,srid])\nMultiLineStringFromText(wkt[,srid])\n \nDescription\n----------- \nConstructs a MULTILINESTRING value using its WKT\nrepresentation and SRID.\n \nMLineFromText() and MultiLineStringFromText() are synonyms.\n \nExamples\n-------- \nCREATE TABLE gis_multi_line (g MULTILINESTRING);\nSHOW FIELDS FROM gis_multi_line;\n \nINSERT INTO gis_multi_line VALUES\n (MultiLineStringFromText(\'MULTILINESTRING((10 48,10 21,10\n0),(16 0,16 23,16 48))\')),\n (MLineFromText(\'MULTILINESTRING((10 48,10 21,10 0))\')),\n (MLineFromWKB(AsWKB(MultiLineString(LineString(Point(1, 2),\nPoint(3, 5)), LineString(Point(2, 5), Point(5, 8), Point(21,\n7))))));\n \n\n \n \n \n \n \n \n \n\nURL: https://mariadb.com/kb/en/library/mlinefromtext/','','https://mariadb.com/kb/en/library/mlinefromtext/'),(22,'MPointFromText',3,'Syntax\n------ \nMPointFromText(wkt[,srid])\nMultiPointFromText(wkt[,srid])\n \nDescription\n----------- \nConstructs a MULTIPOINT value using its WKT representation\nand SRID.\n \nMPointFromText() and MultiPointFromText() are synonyms.\n \nExamples\n-------- \nCREATE TABLE gis_multi_point (g MULTIPOINT);\nSHOW FIELDS FROM gis_multi_point;\n \nINSERT INTO gis_multi_point VALUES\n (MultiPointFromText(\'MULTIPOINT(0 0,10 10,10 20,20\n20)\')),\n (MPointFromText(\'MULTIPOINT(1 1,11 11,11 21,21 21)\')),\n (MPointFromWKB(AsWKB(MultiPoint(Point(3, 6), Point(4,\n10)))));\n \n\n \n \n \n \n \n \n \n\nURL: https://mariadb.com/kb/en/library/mpointfromtext/','','https://mariadb.com/kb/en/library/mpointfromtext/'),(23,'MPolyFromText',3,'Syntax\n------ \nMPolyFromText(wkt[,srid])\nMultiPolygonFromText(wkt[,srid])\n \nDescription\n----------- \nConstructs a MULTIPOLYGON value using its WKT representation\nand SRID.\n \nMPolyFromText() and MultiPolygonFromText() are synonyms.\n \nExamples\n-------- \nCREATE TABLE gis_multi_polygon (g MULTIPOLYGON);\nSHOW FIELDS FROM gis_multi_polygon;\n \nINSERT INTO gis_multi_polygon VALUES\n (MultiPolygonFromText(\'MULTIPOLYGON(((28 26,28 0,84 0,84\n42,28 26),(52 18,66 23,73 9,48 6,52 18)),((59 18,67 18,67\n13,59 13,59 18)))\')),\n (MPolyFromText(\'MULTIPOLYGON(((28 26,28 0,84 0,84 42,28\n26),(52 18,66 23,73 9,48 6,52 18)),((59 18,67 18,67 13,59\n13,59 18)))\')),\n (MPolyFromWKB(AsWKB(MultiPolygon(Polygon(LineString(Point(0,\n3), Point(3, 3), Point(3, 0), Point(0, 3)))))));\n \n\n \n \n \n \n \n \n \n\nURL: https://mariadb.com/kb/en/library/mpolyfromtext/','','https://mariadb.com/kb/en/library/mpolyfromtext/'),(24,'MultiLineStringFromText',3,'A synonym for MLineFromText.\n \n\n \n \n \n \n \n \n \n\nURL:\nhttps://mariadb.com/kb/en/library/multilinestringfromtext/','','https://mariadb.com/kb/en/library/multilinestringfromtext/'),(25,'MultiPointFromText',3,'A synonym for MPointFromText.\n \n\n \n \n \n \n \n \n \n\nURL: https://mariadb.com/kb/en/library/multipointfromtext/','','https://mariadb.com/kb/en/library/multipointfromtext/'),(26,'MultiPolygonFromText',3,'A synonym for MPolyFromText.\n \n\n \n \n \n \n \n \n \n\nURL: https://mariadb.com/kb/en/library/multipolygonfromtext/','','https://mariadb.com/kb/en/library/multipolygonfromtext/'),(27,'PointFromText',3,'A synonym for ST_PointFromText.\n \n\n \n \n \n \n \n \n \n\nURL: https://mariadb.com/kb/en/library/wkt-pointfromtext/','','https://mariadb.com/kb/en/library/wkt-pointfromtext/'),(28,'PolyFromText',3,'A synonym for ST_PolyFromText.\n \n\n \n \n \n \n \n \n \n\nURL: https://mariadb.com/kb/en/library/wkt-polyfromtext/','','https://mariadb.com/kb/en/library/wkt-polyfromtext/'),(29,'PolygonFromText',3,'A synonym for ST_PolyFromText.\n \n\n \n \n \n \n \n \n \n\nURL: https://mariadb.com/kb/en/library/polygonfromtext/','','https://mariadb.com/kb/en/library/polygonfromtext/'),(30,'ST_AsText',3,'Syntax\n------ \nST_AsText(g)\nAsText(g)\nST_AsWKT(g)\nAsWKT(g)\n \nDescription\n----------- \nConverts a value in internal geometry format to its WKT\nrepresentation and returns the string result.\n \nST_AsText(), AsText(), ST_AsWKT() and AsWKT() are all\nsynonyms.\n \nExamples\n-------- \nSET @g = \'LineString(1 1,4 4,6 6)\';\n \nSELECT ST_AsText(ST_GeomFromText(@g));\n+--------------------------------+\n| ST_AsText(ST_GeomFromText(@g)) |\n+--------------------------------+\n| LINESTRING(1 1,4 4,6 6) |\n+--------------------------------+\n \n\n \n \n \n \n \n \n \n\nURL: https://mariadb.com/kb/en/library/st_astext/','','https://mariadb.com/kb/en/library/st_astext/');
/*!40000 ALTER TABLE `help_topic` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `index_stats`
--

DROP TABLE IF EXISTS `index_stats`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `index_stats` (
  `db_name` varchar(64) COLLATE utf8mb3_bin NOT NULL,
  `table_name` varchar(64) COLLATE utf8mb3_bin NOT NULL,
  `index_name` varchar(64) COLLATE utf8mb3_bin NOT NULL,
  `prefix_arity` int(11) unsigned NOT NULL,
  `avg_frequency` decimal(12,4) DEFAULT NULL,
  PRIMARY KEY (`db_name`,`table_name`,`index_name`,`prefix_arity`)
) ENGINE=Aria DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_bin PAGE_CHECKSUM=1 TRANSACTIONAL=0 COMMENT='Statistics on Indexes';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `index_stats`
--

LOCK TABLES `index_stats` WRITE;
/*!40000 ALTER TABLE `index_stats` DISABLE KEYS */;
/*!40000 ALTER TABLE `index_stats` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `innodb_index_stats`
--

DROP TABLE IF EXISTS `innodb_index_stats`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `innodb_index_stats` (
  `database_name` varchar(64) COLLATE utf8mb3_bin NOT NULL,
  `table_name` varchar(199) COLLATE utf8mb3_bin NOT NULL,
  `index_name` varchar(64) COLLATE utf8mb3_bin NOT NULL,
  `last_update` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `stat_name` varchar(64) COLLATE utf8mb3_bin NOT NULL,
  `stat_value` bigint(20) unsigned NOT NULL,
  `sample_size` bigint(20) unsigned DEFAULT NULL,
  `stat_description` varchar(1024) COLLATE utf8mb3_bin NOT NULL,
  PRIMARY KEY (`database_name`,`table_name`,`index_name`,`stat_name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_bin STATS_PERSISTENT=0;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `innodb_index_stats`
--

LOCK TABLES `innodb_index_stats` WRITE;
/*!40000 ALTER TABLE `innodb_index_stats` DISABLE KEYS */;
INSERT INTO `innodb_index_stats` VALUES ('assignment1','admin','PRIMARY','2021-11-21 01:01:45','n_diff_pfx01',1,1,'email'),('assignment1','admin','PRIMARY','2021-11-21 01:01:45','n_leaf_pages',1,NULL,'Number of leaf pages in the index'),('assignment1','admin','PRIMARY','2021-11-21 01:01:45','size',1,NULL,'Number of pages in the index'),('assignment1','article','PRIMARY','2021-11-21 03:39:05','n_diff_pfx01',14,1,'articleId'),('assignment1','article','PRIMARY','2021-11-21 03:39:05','n_leaf_pages',1,NULL,'Number of leaf pages in the index'),('assignment1','article','PRIMARY','2021-11-21 03:39:05','size',2,NULL,'Number of pages in the index'),('assignment1','category','PRIMARY','2021-11-20 16:49:39','n_diff_pfx01',8,1,'name'),('assignment1','category','PRIMARY','2021-11-20 16:49:39','n_leaf_pages',1,NULL,'Number of leaf pages in the index'),('assignment1','category','PRIMARY','2021-11-20 16:49:39','size',1,NULL,'Number of pages in the index'),('assignment1','comment','PRIMARY','2021-11-21 04:53:39','n_diff_pfx01',3,1,'commentID'),('assignment1','comment','PRIMARY','2021-11-21 04:53:39','n_leaf_pages',1,NULL,'Number of leaf pages in the index'),('assignment1','comment','PRIMARY','2021-11-21 04:53:39','size',1,NULL,'Number of pages in the index'),('assignment1','users','PRIMARY','2021-11-20 16:49:40','n_diff_pfx01',2,1,'email'),('assignment1','users','PRIMARY','2021-11-20 16:49:40','n_leaf_pages',1,NULL,'Number of leaf pages in the index'),('assignment1','users','PRIMARY','2021-11-20 16:49:40','size',1,NULL,'Number of pages in the index'),('assignment1','users','email_UNIQUE','2021-11-20 16:49:40','n_diff_pfx01',2,1,'email'),('assignment1','users','email_UNIQUE','2021-11-20 16:49:40','n_leaf_pages',1,NULL,'Number of leaf pages in the index'),('assignment1','users','email_UNIQUE','2021-11-20 16:49:40','size',1,NULL,'Number of pages in the index'),('mysql','gtid_slave_pos','PRIMARY','2021-11-20 16:49:40','n_diff_pfx01',0,1,'domain_id'),('mysql','gtid_slave_pos','PRIMARY','2021-11-20 16:49:40','n_diff_pfx02',0,1,'domain_id,sub_id'),('mysql','gtid_slave_pos','PRIMARY','2021-11-20 16:49:40','n_leaf_pages',1,NULL,'Number of leaf pages in the index'),('mysql','gtid_slave_pos','PRIMARY','2021-11-20 16:49:40','size',1,NULL,'Number of pages in the index');
/*!40000 ALTER TABLE `innodb_index_stats` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `innodb_table_stats`
--

DROP TABLE IF EXISTS `innodb_table_stats`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `innodb_table_stats` (
  `database_name` varchar(64) COLLATE utf8mb3_bin NOT NULL,
  `table_name` varchar(199) COLLATE utf8mb3_bin NOT NULL,
  `last_update` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `n_rows` bigint(20) unsigned NOT NULL,
  `clustered_index_size` bigint(20) unsigned NOT NULL,
  `sum_of_other_index_sizes` bigint(20) unsigned NOT NULL,
  PRIMARY KEY (`database_name`,`table_name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_bin STATS_PERSISTENT=0;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `innodb_table_stats`
--

LOCK TABLES `innodb_table_stats` WRITE;
/*!40000 ALTER TABLE `innodb_table_stats` DISABLE KEYS */;
INSERT INTO `innodb_table_stats` VALUES ('assignment1','admin','2021-11-21 01:01:45',1,1,0),('assignment1','article','2021-11-21 03:39:05',14,2,0),('assignment1','category','2021-11-20 16:49:39',8,1,0),('assignment1','comment','2021-11-21 04:53:39',3,1,0),('assignment1','users','2021-11-20 16:49:40',2,1,1),('mysql','gtid_slave_pos','2021-11-20 16:49:40',0,1,0);
