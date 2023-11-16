/*
SQLyog Ultimate v10.00 Beta1
MySQL - 5.5.5-10.4.22-MariaDB : Database - deleciousfoodrecipe
*********************************************************************
*/


/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`deleciousfoodrecipe` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;

USE `deleciousfoodrecipe`;

/*Table structure for table `users` */

CREATE TABLE `users` (
  `userid` int(6) unsigned NOT NULL AUTO_INCREMENT,
  `firstname` varchar(30) NOT NULL,
  `lastname` varchar(30) NOT NULL,
  `email` varchar(100) DEFAULT NULL,
  `password` varchar(100) NOT NULL,
  `contact` varchar(100) NOT NULL,
  `createdat` timestamp NOT NULL DEFAULT current_timestamp(),
  `updatedat` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `status` int(1) DEFAULT NULL,
  PRIMARY KEY (`userid`)
);


CREATE TABLE `appointments` (
  `appointmentid` INT(6) UNSIGNED NOT NULL AUTO_INCREMENT,
  `userid` INT(6),
  `firstname` VARCHAR(30) NOT NULL,
  `lastname` VARCHAR(30) NOT NULL,
  `email` VARCHAR(100) DEFAULT NULL,
  `message` VARCHAR(1000) DEFAULT NULL,
  `purpose` VARCHAR(300) DEFAULT NULL,
  `contact` VARCHAR(100) NOT NULL,
  `appointmenttime` TIMESTAMP NOT NULL
  `createdat` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP(),
  `updatedat` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP() ON UPDATE CURRENT_TIMESTAMP(),
  PRIMARY KEY (`appointmentid`)
);

CREATE TABLE `products` (
  `productid` INT(6) UNSIGNED NOT NULL AUTO_INCREMENT,
  `userid` INT(6),
  `name` VARCHAR(50) NOT NULL,
  `category` VARCHAR(50) NOT NULL,
  `image` VARCHAR(100) DEFAULT NULL,
  `description` VARCHAR(700) DEFAULT NULL,
  `status` INT(1),
  `createdat` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP(),
  `updatedat` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP() ON UPDATE CURRENT_TIMESTAMP(),
  PRIMARY KEY (`productid`)
);