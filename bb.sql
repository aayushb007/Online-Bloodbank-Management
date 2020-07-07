/*
SQLyog Community v13.1.2 (64 bit)
MySQL - 10.1.30-MariaDB : Database - bb
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`bb` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `bb`;

/*Table structure for table `bloodgroup` */

DROP TABLE IF EXISTS `bloodgroup`;

CREATE TABLE `bloodgroup` (
  `bg_id` int(100) NOT NULL AUTO_INCREMENT,
  `bg_name` varchar(100) NOT NULL,
  PRIMARY KEY (`bg_id`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=latin1;

/*Data for the table `bloodgroup` */

insert  into `bloodgroup`(`bg_id`,`bg_name`) values 
(13,'o+'),
(14,'o-'),
(15,'AB+'),
(16,'AB-'),
(17,'A+'),
(18,'A-'),
(19,'B+'),
(20,'B-');

/*Table structure for table `camp` */

DROP TABLE IF EXISTS `camp`;

CREATE TABLE `camp` (
  `camp_id` int(100) NOT NULL AUTO_INCREMENT,
  `camp_title` varchar(500) NOT NULL,
  `organised_by` varchar(500) NOT NULL,
  `state` int(100) NOT NULL,
  `city` int(100) NOT NULL,
  `pic` varchar(900) NOT NULL,
  `detail` varchar(1000) NOT NULL,
  PRIMARY KEY (`camp_id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

/*Data for the table `camp` */

insert  into `camp`(`camp_id`,`camp_title`,`organised_by`,`state`,`city`,`pic`,`detail`) values 
(1,'Ramgarhia Engg Collage','Ramgarhia Counsil',1,1,'blood_donation_camp.jpg','A Blood Donation Camp at Ramgarhia Engg Collage organized by Ramgarhia consial , Phagwara.'),
(7,' Lovely Professional University','Lovely Professional University',1,7,'B.D camp 034.jpg','A Blood Donation Camp at Lovely Professional University organized by Lovely Professional University , Jalandhar.'),
(8,'Guru Nanak College','Lions Club',1,1,'p36.jpg','A Blood Donation Camp at G.N.C College, Phagwara organized by Lions Club, Phagwara.'),
(9,'Apee Jay College','Human Welfare Society',1,1,'p38_2.jpg','A Blood Donation Camp at Apee-Jay College, Jalandhar organized by Human Welfare Society, Jalandhar.\n ');

/*Table structure for table `city` */

DROP TABLE IF EXISTS `city`;

CREATE TABLE `city` (
  `city_id` int(100) NOT NULL AUTO_INCREMENT,
  `city_name` varchar(100) NOT NULL,
  `pin_code` varchar(100) NOT NULL,
  `district` varchar(100) NOT NULL,
  `state` int(100) NOT NULL,
  PRIMARY KEY (`city_id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

/*Data for the table `city` */

insert  into `city`(`city_id`,`city_name`,`pin_code`,`district`,`state`) values 
(1,'phagwara','144401','kapurthala',1),
(4,'faridabad','121001','Gurgaon',2),
(7,'jalandhar','144001','jalandhar',1);

/*Table structure for table `contacts` */

DROP TABLE IF EXISTS `contacts`;

CREATE TABLE `contacts` (
  `row_id` int(100) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `mobile` varchar(100) NOT NULL,
  `subj` varchar(700) NOT NULL,
  PRIMARY KEY (`row_id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

/*Data for the table `contacts` */

insert  into `contacts`(`row_id`,`name`,`email`,`mobile`,`subj`) values 
(1,'nannu','bawa12@ymail.com','98889619909','save life'),
(2,'manu','manukaler@yahoo.com','9888889765','save life'),
(3,'neeru','neeru45@gmail.com','9463958058','give blooooooood'),
(4,'paras','bhatia34@gmail.com','9216291294','save life'),
(10,'herry','herry@ymaol.com','8790675438','give me a blood');

/*Table structure for table `donation` */

DROP TABLE IF EXISTS `donation`;

CREATE TABLE `donation` (
  `donation_id` int(100) NOT NULL AUTO_INCREMENT,
  `camp_id` int(100) NOT NULL,
  `ddate` datetime NOT NULL,
  `units` int(100) NOT NULL,
  `detail` varchar(800) NOT NULL,
  `email` varchar(100) NOT NULL,
  PRIMARY KEY (`donation_id`)
) ENGINE=InnoDB AUTO_INCREMENT=37 DEFAULT CHARSET=latin1;

/*Data for the table `donation` */

insert  into `donation`(`donation_id`,`camp_id`,`ddate`,`units`,`detail`,`email`) values 
(28,1,'2014-09-14 00:00:00',20,'A Blood Donation Camp at Ramgarhia Engg Collage organized by Ramgarhia consial , Phagwara.','parasbhatia08@gmail.com'),
(29,7,'2015-05-11 00:00:00',30,'A Blood Donation Camp at Lovely Professional University organized by Lovely Professional University , Jalandhar.','parasbhatia08@gmail.com'),
(30,8,'2014-11-04 00:00:00',25,'A Blood Donation Camp at G.N.C College, Phagwara organized by Lions Club, Phagwara.','parasbhatia08@gmail.com'),
(31,9,'2014-12-18 00:00:00',22,'A Blood Donation Camp at Apee-Jay College, Jalandhar organized by Human Welfare Society, Jalandhar.\r\n ','parasbhatia08@gmail.com'),
(32,7,'2010-06-19 00:00:00',27,'A Blood Donation Camp at Lovely Professional Unive...','preet22@yahoo.com'),
(33,8,'2010-08-20 00:00:00',17,'save life','manpreetkaler@yahoo.com'),
(34,9,'2009-06-05 00:00:00',10,'give blood','manpreetkaler@yahoo.com'),
(35,1,'2012-09-13 00:00:00',22,'save life','sahildubey@gmail.com'),
(36,9,'0000-00-00 00:00:00',444,'kjj','neeru.bawa@yahoo.com');

/*Table structure for table `fb` */

DROP TABLE IF EXISTS `fb`;

CREATE TABLE `fb` (
  `name` text NOT NULL,
  `email` varchar(20) NOT NULL,
  `msg` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `fb` */

insert  into `fb`(`name`,`email`,`msg`) values 
('','',''),
('','',''),
('abhi@ymail.com','AA@gmail.com','rc technical');

/*Table structure for table `hospital` */

DROP TABLE IF EXISTS `hospital`;

CREATE TABLE `hospital` (
  `hospital_id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `donation_date` date NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`hospital_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `hospital` */

insert  into `hospital`(`hospital_id`,`name`,`address`,`donation_date`,`password`) values 
('1345','Sola hospital','Sola,ahmedabad,nr Gujarat highcourt','2019-04-10','sola123'),
('321','V S hospital','ahmedabad','2019-03-12','vs123');

/*Table structure for table `login` */

DROP TABLE IF EXISTS `login`;

CREATE TABLE `login` (
  `mail` varchar(255) NOT NULL,
  `pwd` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `login` */

insert  into `login`(`mail`,`pwd`) values 
('aa@gmail.com',12345),
('aa@gmail.com',12345),
('aa@gmail.com',12345),
('aa@gmail.com',12345),
('aa@gmail.com',12345),
('aa@gmail.com',12345),
('aa@gmail.com',12345),
('aa@gmail.com',12345),
('aa@gmail.com',12345),
('aa@gmail.com',12345),
('aa@gmail.com',12345),
('aa@gmail.com',12345),
('aa@gmail.com',12345),
('aa@gmail.com',12345),
('aa@gmail.com',12345),
('aa@gmail.com',12345),
('aa@gmail.com',12345),
('aa@gmail.com',12345),
('aa@gmail.com',12345),
('aa@gmail.com',12345),
('aa@gmail.com',12345),
('aa@gmail.com',12345),
('aa@gmail.com',12345),
('aa@gmail.com',12345),
('aa@gmail.com',12345),
('aa@gmail.com',12345),
('aa@gmail.com',12345),
('aa@gmail.com',12345),
('aa@gmail.com',12345),
('aa@gmail.com',12345),
('aa@gmail.com',12345),
('ab@gmail.com',0),
('aa@gmail.com',12345),
('aa@gmail.com',123),
('aa@gmail.com',123),
('aa@gmail.com',123);

/*Table structure for table `patientregistration` */

DROP TABLE IF EXISTS `patientregistration`;

CREATE TABLE `patientregistration` (
  `patient_id` int(100) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `gender` varchar(100) NOT NULL,
  `bdate` date NOT NULL,
  `mobile` varchar(100) NOT NULL,
  `b_id` int(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `pwd` int(100) NOT NULL,
  `pic` varchar(1000) NOT NULL,
  PRIMARY KEY (`patient_id`)
) ENGINE=InnoDB AUTO_INCREMENT=28 DEFAULT CHARSET=latin1;

/*Data for the table `patientregistration` */

insert  into `patientregistration`(`patient_id`,`name`,`gender`,`bdate`,`mobile`,`b_id`,`email`,`pwd`,`pic`) values 
(23,'aayush chauham','','2019-03-23','9157735517',17,'aaa@gmil.vom',0,'audio j.jpg'),
(24,'aayush chauham','','2019-03-21','9157735517',19,'aaa@gmil.vom',12345,'b.jpg'),
(25,'vishal bapu','','2019-03-13','9157735517',15,'aaa8697@gmil.vom',12345,'2.jpg'),
(26,'aayushb','','2019-03-09','9157735517',20,'aaa@gmil.vom',12345,'2.jpg'),
(27,'aayushb','','2019-03-09','9157735517',20,'aaa@gmil.vom',12345,'2.jpg');

/*Table structure for table `reg` */

DROP TABLE IF EXISTS `reg`;

CREATE TABLE `reg` (
  `name` varchar(20) NOT NULL,
  `phone` bigint(14) NOT NULL,
  `mail` varchar(50) NOT NULL,
  `pwd` varchar(50) NOT NULL,
  `cpwd` varchar(50) NOT NULL,
  `gender` varchar(7) NOT NULL,
  `bg` varchar(3) NOT NULL,
  `add` varchar(120) NOT NULL,
  `city` varchar(50) NOT NULL,
  `bdate` date NOT NULL,
  `bid` varchar(8) NOT NULL,
  PRIMARY KEY (`bid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `reg` */

insert  into `reg`(`name`,`phone`,`mail`,`pwd`,`cpwd`,`gender`,`bg`,`add`,`city`,`bdate`,`bid`) values 
('aayush',9157535671,'aa@gmail.com','123','12345','male','b+','qwerty','ahmedabad','2001-03-05','aa@123'),
('vishal chauhan',3455657623,'ab@gmail.com','asdfg','asdfg','male','B+','qsdwdd45','Ahmedabad','2019-03-24','bbmmm'),
('  vissu bapu',1234567890,'aavi@gmail.com','123456','123456','male','B+','12/6,qwer','Banaskantha','2019-03-10','vissu');

/*Table structure for table `requestes` */

DROP TABLE IF EXISTS `requestes`;

CREATE TABLE `requestes` (
  `req_id` int(100) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `gender` varchar(100) NOT NULL,
  `age` varchar(100) NOT NULL,
  `mobile` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `bgroup` varchar(6) NOT NULL,
  `reqdate` datetime NOT NULL,
  `detail` varchar(500) NOT NULL,
  `p_id` int(100) NOT NULL,
  `hos_id` varchar(255) NOT NULL,
  PRIMARY KEY (`req_id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

/*Data for the table `requestes` */

insert  into `requestes`(`req_id`,`name`,`gender`,`age`,`mobile`,`email`,`bgroup`,`reqdate`,`detail`,`p_id`,`hos_id`) values 
(7,'balwant singh','male','22','8427420298','balwant11@gmail.com','B+','2015-01-15 00:00:00',' i am cancer patient in zydus  hospital',1023,'qwer234'),
(8,'japleen','female','22','9216291294','jsimran08@gmail.com','0-','2014-01-12 00:00:00','accident',1065,'bgdrtg'),
(9,'Naresh','female','21','8427420291','nareshheer719@gmail.com','B-','2015-01-18 00:00:00','hard injury ',65748,'nhefcn'),
(10,'Taran','male','55','7589325050','taran@ymail.com','14','2012-01-29 00:00:00','i am patient in sola',10495,' vbfgfgg');

/*Table structure for table `state` */

DROP TABLE IF EXISTS `state`;

CREATE TABLE `state` (
  `state_id` int(100) NOT NULL AUTO_INCREMENT,
  `state_name` varchar(100) NOT NULL,
  PRIMARY KEY (`state_id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

/*Data for the table `state` */

insert  into `state`(`state_id`,`state_name`) values 
(1,'punjab'),
(2,'delhi'),
(3,'Andhra Pradesh'),
(4,'Bihar'),
(5,'Assam');

/*Table structure for table `users` */

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `username` varchar(100) NOT NULL,
  `pwd` varchar(100) NOT NULL,
  `typeofuser` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `users` */

insert  into `users`(`username`,`pwd`,`typeofuser`) values 
('manu','manu','Admin'),
('neeru','neeru','General');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
