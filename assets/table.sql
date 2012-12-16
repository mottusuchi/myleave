/*
SQLyog Enterprise - MySQL GUI v6.14
MySQL - 5.0.96-community-log : Database - mydatabase
*********************************************************************
*/ 
/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

create database if not exists `mydatabase`;

USE `mydatabase`;

/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

/*Table structure for table `myleave` */

DROP TABLE IF EXISTS `myleave`;

CREATE TABLE `myleave` (
  `leaveID` double NOT NULL auto_increment,
  `employeeID` double default NULL,
  `employeeName` char(50) default NULL,
  `employeePassword` char(50) default NULL,
  `leavehtml` text,
  `lastupdate` char(20) default NULL,
  `status` char(1) default 'N',
  PRIMARY KEY  (`leaveID`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;


/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
