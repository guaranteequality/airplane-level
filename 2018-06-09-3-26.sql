/*
SQLyog Trial v12.01 (64 bit)
MySQL - 10.1.32-MariaDB : Database - airpline
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`airpline` /*!40100 DEFAULT CHARACTER SET utf8 */;

USE `airpline`;

/*Table structure for table `aircraft_manu` */

DROP TABLE IF EXISTS `aircraft_manu`;

CREATE TABLE `aircraft_manu` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Name` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

/*Data for the table `aircraft_manu` */

insert  into `aircraft_manu`(`id`,`Name`) values (1,'AAI'),(2,'AAMSA');

/*Table structure for table `aircraft_model` */

DROP TABLE IF EXISTS `aircraft_model`;

CREATE TABLE `aircraft_model` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Name` varchar(50) DEFAULT NULL,
  `AliasName` varchar(20) DEFAULT NULL,
  `Aircraft_type_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

/*Data for the table `aircraft_model` */

insert  into `aircraft_model`(`id`,`Name`,`AliasName`,`Aircraft_type_id`) values (1,'AAI RQ-7 Shadow','AAI RQ-7 ShadowAAI R',1),(2,'A-9B','A-9B',2);

/*Table structure for table `aircraft_type` */

DROP TABLE IF EXISTS `aircraft_type`;

CREATE TABLE `aircraft_type` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Name` varchar(50) DEFAULT NULL,
  `AliasName` varchar(20) DEFAULT NULL,
  `Aircraft_manu_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

/*Data for the table `aircraft_type` */

insert  into `aircraft_type`(`id`,`Name`,`AliasName`,`Aircraft_manu_id`) values (1,'AAI RQ-7 Shadow','AAI RQ-7 Shadow',1),(2,'A9B-M Quail','A9B-M Quail',2);

/*Table structure for table `aircraftcategories` */

DROP TABLE IF EXISTS `aircraftcategories`;

CREATE TABLE `aircraftcategories` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Name` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

/*Data for the table `aircraftcategories` */

insert  into `aircraftcategories`(`id`,`Name`) values (1,'Business Jet'),(2,'Cargo'),(3,'helicopter'),(4,'Lighter than air'),(5,'Small Prop'),(6,'Special Scheme'),(7,'Warbird/vintage');

/*Table structure for table `airline` */

DROP TABLE IF EXISTS `airline`;

CREATE TABLE `airline` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Name` varchar(50) DEFAULT NULL,
  `AliasName` varchar(20) DEFAULT NULL,
  `Airline_category_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

/*Data for the table `airline` */

insert  into `airline`(`id`,`Name`,`AliasName`,`Airline_category_id`) values (1,'Airlines 400','A-400',1),(2,'Fly Tyrol','FTyrol',1),(3,'Airbus Industrie','AirbusIndustrie',2),(4,'BAe Systems','BA_Sys',2);

/*Table structure for table `airline_category` */

DROP TABLE IF EXISTS `airline_category`;

CREATE TABLE `airline_category` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Name` varchar(50) DEFAULT NULL,
  `AliasName` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

/*Data for the table `airline_category` */

insert  into `airline_category`(`id`,`Name`,`AliasName`) values (1,'Airline','Airline'),(2,'Manufacturer','Manu');

/*Table structure for table `airport` */

DROP TABLE IF EXISTS `airport`;

CREATE TABLE `airport` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Name` varchar(50) DEFAULT NULL,
  `AliasName` varchar(20) DEFAULT NULL,
  `Countryid` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

/*Data for the table `airport` */

insert  into `airport`(`id`,`Name`,`AliasName`,`Countryid`) values (1,'Abakan-UNAA','UNAA',1),(2,'Amderma-UOAA','UOAA',1),(3,'Aksu-ZWAK','ZWAK',2),(4,'Beihai-ZGBH','ZGBH',2);

/*Table structure for table `category` */

DROP TABLE IF EXISTS `category`;

CREATE TABLE `category` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8 NOT NULL,
  `post_date` datetime NOT NULL,
  `created_at` date NOT NULL,
  `updated_at` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

/*Data for the table `category` */

insert  into `category`(`id`,`name`,`post_date`,`created_at`,`updated_at`) values (1,'Aviation Videography Forum','2018-06-07 07:00:00','2018-06-04','2018-06-08'),(2,'Aviation Discussion Forum','2018-06-08 02:12:00','2018-06-05','2018-06-08'),(3,'Digital Photo Processing Forum','2018-06-05 11:00:00','2018-06-04','2018-06-08'),(4,'Off Topic Forum','2018-06-03 14:16:28','2018-06-05','2018-06-08');

/*Table structure for table `country` */

DROP TABLE IF EXISTS `country`;

CREATE TABLE `country` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Name` varchar(50) DEFAULT NULL,
  `AliasName` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

/*Data for the table `country` */

insert  into `country`(`id`,`Name`,`AliasName`) values (1,'Russia','RU'),(2,'China','CH');

/*Table structure for table `flight` */

DROP TABLE IF EXISTS `flight`;

CREATE TABLE `flight` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `sub_title` varchar(255) DEFAULT NULL,
  `content` text,
  `detail` text,
  `img_url` varchar(255) DEFAULT NULL,
  `view_count` int(11) DEFAULT NULL,
  `fav_count` int(11) DEFAULT NULL,
  `comment_count` int(11) DEFAULT NULL,
  `created_at` date NOT NULL,
  `updated_at` date NOT NULL,
  `Reg` varchar(50) DEFAULT NULL,
  `AirPort` int(11) DEFAULT NULL,
  `Aircraft` int(11) DEFAULT NULL,
  `Airline` int(11) DEFAULT NULL,
  `Registration` varchar(50) DEFAULT NULL,
  `SerialNumber` varchar(50) DEFAULT NULL,
  `PhotoDate` date DEFAULT NULL,
  `Remarks` text,
  `Categories_photo` varchar(255) DEFAULT NULL,
  `Categories_aircraft` varchar(255) DEFAULT NULL,
  `Camera` int(11) DEFAULT NULL,
  `Lens` int(11) DEFAULT NULL,
  `EnterWhy` text,
  `Comments` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

/*Data for the table `flight` */

insert  into `flight`(`id`,`title`,`sub_title`,`content`,`detail`,`img_url`,`view_count`,`fav_count`,`comment_count`,`created_at`,`updated_at`,`Reg`,`AirPort`,`Aircraft`,`Airline`,`Registration`,`SerialNumber`,`PhotoDate`,`Remarks`,`Categories_photo`,`Categories_aircraft`,`Camera`,`Lens`,`EnterWhy`,`Comments`) values (1,'Orlando Suarez','N370NW','Airbus A320-212','Originally delivered to Northwest Airlines on 28/07/1999...','https://cdn.jetphotos.com/400/5/23739_1492804909.jpg',444,0,0,'2018-06-05','2018-06-08',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(2,'Jon Melo','3B-NBM','Airbus A330-202','Originally delivered to Northwest Airlines on ','https://cdn.jetphotos.com/400/6/50141_1492823870.jpg',300,0,1,'2018-06-03','2018-06-07',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(3,'Vyacheslav Firsov','P4-KCE','P4-KCE','Originally delivered to Northwest Airlines on 28/07/1999...','https://cdn.jetphotos.com/400/6/39032_1492845486.jpg',55,2,0,'2018-06-05','2018-06-08',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(4,'Daniel Nagy','G-GDFU','Airbus A330-202','Originally delivered to Northwest Airlines on ','https://cdn.jetphotos.com/400/6/17992_1492851258.jpg',555,0,1,'2018-06-03','2018-06-07',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(5,'panda','G-GDFU','Airbus A330-202','Originally delivered to Northwest Airlines on ','https://cdn.jetphotos.com/400/6/17992_1492851258.jpg',777,0,1,'2018-06-03','2018-06-07',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(6,'Tiger','G-GDFU','Airbus A330-202','Originally delivered to Northwest Airlines on ','https://cdn.jetphotos.com/400/6/17992_1492851258.jpg',300,0,1,'2018-06-03','2018-06-07',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(7,'Bear','G-GDFU','Airbus A330-202','Originally delivered to Northwest Airlines on ','https://cdn.jetphotos.com/400/6/17992_1492851258.jpg',300,0,1,'2018-06-03','2018-06-07',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(8,'Victory','G-GDFU','Airbus A330-202','Originally delivered to Northwest Airlines on ','https://cdn.jetphotos.com/400/6/17992_1492851258.jpg',300,0,1,'2018-06-03','2018-06-07',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);

/*Table structure for table `forum` */

DROP TABLE IF EXISTS `forum`;

CREATE TABLE `forum` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `category_id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `created_at` date NOT NULL,
  `updated_at` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8;

/*Data for the table `forum` */

insert  into `forum`(`id`,`category_id`,`title`,`content`,`created_at`,`updated_at`) values (1,1,'TUI Airlines Belgium | Embraer ERJ-190STD | Landing and Take-Off at Antwerp Airport','aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa','2018-06-05','2018-06-07'),(2,2,'DL Registration?','bbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbb','2018-06-04','2018-06-08'),(3,1,'DeavesPhotography - Rejection advice','ccccccccccccccccccccccccccccccccccccc','2018-06-05','2018-06-07'),(4,2,'Help with rejection','dddddddddddddddddddddddddddddddddddddddddddddddddddddddd','2018-06-04','2018-06-08'),(5,1,'Antonov An-22 takes-off','eeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeee','2018-06-05','2018-06-07'),(6,2,'Einzelwolf Prescreen','fffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffff','2018-06-04','2018-06-08'),(7,3,'Wrong location','dsfsdfsdfsdfsdfsdfs','2018-06-05','2018-06-07'),(8,4,'New Airbus A330 from LEVEL (TLS)','sfgsfdgsfhsdfgsdfgfgsdfgsfgsdfgsfdg','2018-06-04','2018-06-08'),(9,2,'question about theTaxi speed ?','tttttttttttttttttttttttttttttt','2018-06-05','2018-06-07'),(10,4,'Exporting Images from RAW files to Jpeg','vvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvv','2018-06-04','2018-06-08'),(11,1,'How to upload replicas?','kkkkkkkkkkkkkkkkkkkkkkk','2018-06-05','2018-06-07'),(12,3,'Jack Prebble - rejection help','rrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrr','2018-06-04','2018-06-08'),(13,3,'Changing the photo date','zzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzz','2018-06-05','2018-06-07'),(14,3,'Damp China Eastern A330 landing, YVR','llllllllllllllllllllllllllllllllllllll','2018-06-04','2018-06-08'),(15,1,'Aircraft crash off New York coast','wwwwwwwwwwwwwwwwwwwwwwddddddddddddddddd','2018-06-05','2018-06-07'),(16,2,'pandaadfadsf, YVR','888888888888888888888888888888888888888888888','2018-06-04','2018-06-08');

/*Table structure for table `migrations` */

DROP TABLE IF EXISTS `migrations`;

CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `migrations` */

/*Table structure for table `photocategories` */

DROP TABLE IF EXISTS `photocategories`;

CREATE TABLE `photocategories` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Name` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

/*Data for the table `photocategories` */

insert  into `photocategories`(`id`,`Name`) values (1,'Accident'),(2,'Airport Overview'),(3,'Air to Air'),(4,'Cabin'),(5,'Cockpit'),(6,'Exclude from Flightradar'),(7,'Night Shot'),(8,'Wing View');

/*Table structure for table `users` */

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(254) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(254) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(254) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) CHARACTER SET utf8 DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `users` */

insert  into `users`(`id`,`name`,`email`,`password`,`remember_token`,`created_at`,`updated_at`) values (7,'jinping','jinping1110@gmail.com','$2y$10$GZ2Mi8FTNqNyuQz4qRN1x.Wed3X9Le1KOoj/0BMPx.nRZeZZ0wjIu','OFf1iHpTfCtZtJyUAMstlSMSp1utHrzxTsuLe1dHoHcEPbwzG6r9KH1fMye9',NULL,NULL),(8,'Kostya','shiningdeveloper@hotmail.com','$2y$10$GGARfk6wwoBs0mc6MVvqCupOoJ7.wfDgTfrrnfuB84lqtn.b8jFKa','jhuos019hgZXtswNrwN9F2aDS7xANI7skQsw7IrAYv5Mzqh9WDoF2vN5RrwR','2018-06-09 08:54:46','2018-06-09 08:54:46'),(9,'PopovNikolaev','bengalTiger1106@gmail.com','$2y$10$0zwAPoB.2hTVpLHgvxrDiOe8bsBEpNs1ZorgaoFF5iSAOx7TQ9Age','ogff5JcwAUubPVnRG1ZuYuLvJ3YIPhgS0wrvWsT1WWlCmTYpptM6Mu01rPU7','2018-06-08 16:09:11','2018-06-08 16:09:11');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
