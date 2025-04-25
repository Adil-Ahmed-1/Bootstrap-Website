/*
SQLyog Ultimate v12.5.0 (64 bit)
MySQL - 10.4.28-MariaDB : Database - blog_managent_system
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`blog_managent_system` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci */;

USE `blog_managent_system`;

/*Table structure for table `messages` */

DROP TABLE IF EXISTS `messages`;

CREATE TABLE `messages` (
  `user_name` varchar(100) DEFAULT NULL,
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `message` text NOT NULL,
  `Last_seen` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`user_id`),
  KEY `user_name` (`user_name`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

/*Data for the table `messages` */

/*Table structure for table `online_user` */

DROP TABLE IF EXISTS `online_user`;

CREATE TABLE `online_user` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `status` enum('online','offline') DEFAULT 'online',
  PRIMARY KEY (`user_id`),
  UNIQUE KEY `username` (`username`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

/*Data for the table `online_user` */

insert  into `online_user`(`user_id`,`username`,`password`,`status`) values 
(1,'Adil','1234','online'),
(2,'hadi','$2y$10$tVhSjH9NFATr1qHikw3XmO8WyTwdB1aJAwBAbHVTtvCoSIKIM/85S','offline'),
(3,'samreen','$2y$10$dPa7UCqokpquzRIr5aPICuHe4ZaPP26MSph.8qrcM096Sr8KWMXpi','offline'),
(4,'Ikhtiar','$2y$10$Ew3O6a8Hc0rB9.4zIMqAlu43DEuTw4sEChZyStLHXez39.G1MKF5m','online');

/*Table structure for table `posts` */

DROP TABLE IF EXISTS `posts`;

CREATE TABLE `posts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(100) DEFAULT NULL,
  `summary` longtext DEFAULT NULL,
  `description` longtext DEFAULT NULL,
  `image` longtext DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=38 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

/*Data for the table `posts` */

insert  into `posts`(`id`,`title`,`summary`,`description`,`image`) values 
(27,'Hyderabad ','Hyderabad Quotes','Fill this city of mine with people as,\nYou filled the river with fishes O Lord.\r\nHyderabad, my soulmate\r\n\r\nLove blooming in Hyderabad\r\n\r\nHyderabad, my eternal love\r\n\r\nCherishing every moment in Hyderabad ','1.jpg'),
(33,'Karachi ','Karachi, where the city of lights meets the rhythm of Sindh. ✨','This is my third visit to Karachi, my fourth to Sindh. Most importantly, this is the first time I\'ve visited the area OUTSIDE of summer.','2.jpg'),
(34,'Jamshoro','The city is a hub for the university and its campus, with a history rooted in the region\'s cultural and agricultural significance.','Exploring Jamshoro, the heart of Sindh\'s educational landscape.\"\n\"Jamshoro: Where history, culture, and learning converge.\"\n\"A city with a story to tell, a place of academia and tradition.\"\n\"Discovering the beauty of Jamshoro, a vibrant part of Sindh.','3.jpg'),
(35,'Moro City','Where culture and modernity blend seamlessly.','Living the vibrant energy of Moro City.','4.jpg'),
(36,'Nawabshah','Capturing memories in Nawabshah. #nawabshah #memories #travelphotography','????✨ Nawabshah – The Soul of Sindh ✨????\r\n\r\nIn the heart of Sindh lies Nawabshah, a city rich in culture, warmth, and timeless beauty.\r\nFrom golden sunsets over vast fields to the rhythm of local traditions, this city tells a story of peace and pride.','5.jpg'),
(37,'No More Canals','???? No More Canals in the Indus River... ????','The mighty Indus, once the lifeline of our lands, now whispers with silence.\r\nWhere canals once flowed with life—feeding fields, quenching thirst, sustaining generations—now lies a dry memory.\r\n\r\n???? A nation built on its rivers can’t afford to let them vanish.\r\n????️ Save the Indus. Save Sindh. Save our future.\r\n\r\n#SaveIndus #NoMoreCanals #SindhUnderThreat #WaterIsLife #IndusRiverCrisis #VoiceForIndus #ProtectSindh #EcoJustice','6.jpg');

/*Table structure for table `users` */

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `user_role_type` enum('admin','editor','user') DEFAULT 'user',
  `gender` enum('Male','Female','Other') DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

/*Data for the table `users` */

insert  into `users`(`id`,`name`,`email`,`password`,`user_role_type`,`gender`) values 
(1,'adil','','1212','user','Male'),
(4,'adil','aaadi5362@gmail.com','1234','user','Male'),
(5,'adil','adil_12@gmail.com','1234','user','Male'),
(6,'Ambreen koondhar','koondhar_ambr12@gmail.com','1111','admin','Female'),
(7,'Salim ','salim12@gmail.com','2222','user','Male'),
(8,'Samreen koondhar','samreen_koondhar@gmail.com','1111','admin','Male'),
(9,'ikhtiar ali ','ikhitarali110@gmail.com','2323','user','Male');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
