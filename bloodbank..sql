/*
SQLyog Community v13.1.2 (64 bit)
MySQL - 10.1.30-MariaDB : Database - bloodbank
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`bloodbank` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `bloodbank`;

/*Table structure for table `advertisement` */

DROP TABLE IF EXISTS `advertisement`;

CREATE TABLE `advertisement` (
  `adv_id` int(100) NOT NULL AUTO_INCREMENT,
  `camp_title` varchar(100) NOT NULL,
  `org_by` varchar(100) NOT NULL,
  `pic` varchar(700) NOT NULL,
  `detail` varchar(900) NOT NULL,
  PRIMARY KEY (`adv_id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

/*Data for the table `advertisement` */

insert  into `advertisement`(`adv_id`,`camp_title`,`org_by`,`pic`,`detail`) values 
(4,'Ramgarhia Engg Collage','Ramgarhia education consial','2.jpg','Blood donation camp Organised by REC.  One who donate get certificate by REC\r\nThat can help you also to gets blood in jeopard time');

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
  `Date` date NOT NULL,
  PRIMARY KEY (`camp_id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

/*Data for the table `camp` */

insert  into `camp`(`camp_id`,`camp_title`,`organised_by`,`state`,`city`,`pic`,`detail`,`Date`) values 
(1,'L D Engg College','Ramgarhia Counsil',1,1,'blood_donation_camp.jpg','A Blood Donation Camp at L D Engg Collage organized by Ramgarhia consial , ahmedabad','2019-03-22'),
(7,'Metas adventist College','surat Bloodbank',1,7,'B.D camp 034.jpg','A Blood Donation Camp at metas adventist college campus.','2019-03-09'),
(8,'Guru Nanak College','Lions Club',1,1,'p36.jpg','A Blood Donation Camp at G.N.C College, Phagwara organized by Lions Club, Phagwara.','0000-00-00'),
(9,'Gujarat Politechnic','Human Welfare Society',1,1,'p38_2.jpg','A Blood Donation Camp at G p, gandhinagar organized by Human Welfare Society, Jalandhar.\r\n ','2019-05-10'),
(10,'rc technical','aayush chauhan',1,1,'audio j.jpg','At R c Technical in community hall ,Sola ,Ahmedabad','2019-03-20');

/*Table structure for table `city` */

DROP TABLE IF EXISTS `city`;

CREATE TABLE `city` (
  `city_id` int(100) NOT NULL AUTO_INCREMENT,
  `city_name` varchar(100) NOT NULL,
  `pin_code` varchar(100) NOT NULL,
  `district` varchar(100) NOT NULL,
  `state` int(100) NOT NULL,
  PRIMARY KEY (`city_id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

/*Data for the table `city` */

insert  into `city`(`city_id`,`city_name`,`pin_code`,`district`,`state`) values 
(1,'Banashkantha','144401','Banashkantha',1),
(4,'Ahmedabad','121001','Ahmedabad',1),
(7,'Surat','144001','surat',1),
(12,'gnadhinagar','7654332','gandhinagar',1);

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

/*Table structure for table `donarregistration` */

DROP TABLE IF EXISTS `donarregistration`;

CREATE TABLE `donarregistration` (
  `donar_id` int(100) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `gender` varchar(100) NOT NULL,
  `age` varchar(100) NOT NULL,
  `mobile` varchar(100) NOT NULL,
  `b_id` int(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `pwd` int(100) NOT NULL,
  `pic` varchar(1000) NOT NULL,
  `address` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  PRIMARY KEY (`donar_id`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=latin1;

/*Data for the table `donarregistration` */

insert  into `donarregistration`(`donar_id`,`name`,`gender`,`age`,`mobile`,`b_id`,`email`,`pwd`,`pic`,`address`,`city`) values 
(3,'neeru','female','20','9463958058',13,'neeru.bawa@yahoo.com',123,'neeru.jpg','ashirvad city ,block b ,89','Ahmedabad'),
(4,'Paras Bhatia','male','21','9888961990',13,'parasbhatia08@gmail.com',123,'11168037_1610636085842033_904443745256932191_n.jpg','vasntnagar ,67/4','Surat'),
(5,'Rakesh','male','22','9876505652',17,'rakesh12@gmil.com',123,'1002679_629448530471361_5912528223898153120_n.jpg','shubnagar ,63/2','banashkantha'),
(6,'Manu','female','20','9779730479',13,'manpreetkaler@yahoo.com',123,'12144826_691191231017304_7118038794667291151_n.jpg','ranchhodrai nagar,87/2','ahmedabad'),
(7,'Sukhwinder','male','22','01823280290',17,'sunnysuyan@gmail.com',123,'p3Penguins.jpg','',''),
(8,'Abhishek','male','20','0123456780',19,'abhi@ymail.com',123,'resizedBlood donation (1).jpg','ranchhodrai nagar,87/2','Surat'),
(9,'Ramanjeet Kaur','female','26','9295769630',15,'rbawa08@yahoo.com',123,'11261437_1624099511137421_8482759699813102898_n.jpg','ranchhodrai nagar,44/2','Bahruch'),
(10,'kuldip Banga','male','26','9878967543',15,'kbanga@yahoo.com',123,'10593057_728311113906338_1063644592728298376_n.jpg','ranchhodrai nagar,7/2','surat'),
(11,'Jaspinder','male','24','9445678765',16,'singhjaspinder12@gmail.com',123,'12038392_969929529729736_1007747926670734265_n (1).jpg','ranchhodrai nagar,87/2','ahmedabad'),
(12,'Sahil','male','20','8591824296',13,'sahildubey@gmail.com',123,'12038380_834746969972073_6382623771453128938_n.jpg','krishnanagar 56','chandlodia'),
(13,'sonu','male','25','9594918765',16,'sonukhana34@gmail.com',123,'11863382_1032998280067097_2552428582935820453_n.jpg','',''),
(14,'Vinny','male','24','01824230721',18,'vinny786@gmail.com',123,'11175046_366978330169273_8044521424217911178_n.jpg','',''),
(15,'Rishav Bhatia','male','19','8781846758',19,'rbhatia@ymail.com',123,'1491626_647476172014342_6155162312561723489_n.jpg','',''),
(16,'Rahul Bangar','male','25','9216291294',20,'raulban@gmail.com',123,'11899909_948967995160204_759838727467883977_n.jpg','',''),
(17,'Prabhjot','male','24','9818134576',20,'prabh786@gmail.com',123,'11899866_690854484348510_8725848025714675727_n.jpg','','');

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
) ENGINE=InnoDB AUTO_INCREMENT=70 DEFAULT CHARSET=latin1;

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
(36,9,'0000-00-00 00:00:00',444,'kjj','neeru.bawa@yahoo.com'),
(65,1,'2019-03-01 04:26:16',15,'in rc technical ','aa@gmail.com'),
(69,10,'2019-01-08 02:20:26',10,'first time ','aa@gmail.com');

/*Table structure for table `gallary` */

DROP TABLE IF EXISTS `gallary`;

CREATE TABLE `gallary` (
  `camp_id` int(100) NOT NULL,
  `pic_id` int(100) NOT NULL AUTO_INCREMENT,
  `title` varchar(400) NOT NULL,
  `pic` varchar(800) NOT NULL,
  PRIMARY KEY (`pic_id`)
) ENGINE=InnoDB AUTO_INCREMENT=39 DEFAULT CHARSET=latin1;

/*Data for the table `gallary` */

insert  into `gallary`(`camp_id`,`pic_id`,`title`,`pic`) values 
(9,15,'pic 1','p48_2.jpg'),
(9,16,'pic 2','p11 (1).jpg'),
(9,17,'pic 3','p141.jpg'),
(9,18,'pic 5','p177_2.jpg'),
(9,19,'pic 6','p279.jpg'),
(8,20,'pic 8','p246.jpg'),
(9,21,'pic 9','p82.jpg'),
(7,22,'pic 2','p82.jpg'),
(7,23,'pic 3','p93.jpg'),
(7,24,'pic 6','p148.jpg'),
(7,25,'pic 7','pamrik@ymail.com1 (2).jpg'),
(7,26,'pic 8','slider4.jpg'),
(7,27,'pic 9','slider7.jpg'),
(1,28,'pic 2','slider8.jpg'),
(1,29,'pic 3','slider3.jpg'),
(1,30,'pic 4','donation.jpg'),
(1,31,'pic 3','Blood-Donation2.jpg'),
(1,32,'pic 4','blood-donation-.jpg'),
(1,33,'pic 6','blood-donation.jpg'),
(8,34,'pic 1','resizedBlood donation (1).jpg'),
(8,35,'pic 2','Blood-donation-camp.jpg'),
(8,36,'pic 4','3.jpg'),
(8,37,'pic 5','4.jpg'),
(8,38,'pic 7','5.jpg');

/*Table structure for table `hosreq` */

DROP TABLE IF EXISTS `hosreq`;

CREATE TABLE `hosreq` (
  `name` varchar(255) DEFAULT NULL,
  `units` int(4) DEFAULT NULL,
  `patients` int(100) DEFAULT NULL,
  `tilldate` date DEFAULT NULL,
  `bg` int(100) DEFAULT NULL,
  `details` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `hosreq` */

insert  into `hosreq`(`name`,`units`,`patients`,`tilldate`,`bg`,`details`) values 
('Sola hospital',12,2,'0000-00-00',2019,'hii'),
('Sola hospital',22,22,'0000-00-00',2019,'please this request '),
('Sola hospital',22,22,'0000-00-00',2019,'please this request '),
('Sola hospital',12,12,'0000-00-00',2019,'yo yo '),
('Sola hospital',12,12,'0000-00-00',2019,'yo yo '),
('Sola hospital',12,12,'2019-01-11',0,'hi'),
('Sola hospital',12,12,'2019-01-11',15,'hi'),
('Sola hospital',22,12,'2019-01-13',15,'hii'),
('Sola hospital',22,12,'2019-01-13',15,'hii'),
('Sola hospital',22,9,'2019-01-01',16,'hh'),
('Sola hospital',22,22,'2019-01-18',19,'hhhh'),
('Sola hospital',22,22,'2019-01-18',19,'hhhh'),
('Sola hospital',22,22,'2019-01-18',19,'hhhh');

/*Table structure for table `news` */

DROP TABLE IF EXISTS `news`;

CREATE TABLE `news` (
  `news_id` int(100) NOT NULL AUTO_INCREMENT,
  `title` varchar(100) NOT NULL,
  `detail` varchar(900) NOT NULL,
  PRIMARY KEY (`news_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

/*Data for the table `news` */

insert  into `news`(`news_id`,`title`,`detail`) values 
(1,'blood donate','give blood give bloodgive blood'),
(2,'blood bank','blooooddddd\n\n');

/*Table structure for table `requestes` */

DROP TABLE IF EXISTS `requestes`;

CREATE TABLE `requestes` (
  `req_id` int(100) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `gender` varchar(100) NOT NULL,
  `age` varchar(100) NOT NULL,
  `mobile` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `bgroup` int(100) NOT NULL,
  `reqdate` datetime NOT NULL,
  `detail` varchar(500) NOT NULL,
  `code` varchar(255) NOT NULL,
  PRIMARY KEY (`req_id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

/*Data for the table `requestes` */

insert  into `requestes`(`req_id`,`name`,`gender`,`age`,`mobile`,`email`,`bgroup`,`reqdate`,`detail`,`code`) values 
(7,'balwant singh','male','22','8427420298','balwant11@gmail.com',19,'2015-01-15 00:00:00','save life','3BBNJFERFF'),
(8,'japleen','female','22','9216291294','jsimran08@gmail.com',13,'2014-01-12 00:00:00','save life','fbvvwffdsdd'),
(9,'Naresh','female','21','8427420291','nareshheer719@gmail.com',17,'2015-01-18 00:00:00','save life','SDVDFVRVBRGREBVRFB'),
(10,'Taran','male','55','7589325050','taran@ymail.com',14,'2012-01-29 00:00:00','HEALTH','ERRVRTBRTNBTGRBNTR'),
(11,'aayush','male','22','9157735517','aaa@gmil.vom',14,'2019-01-01 00:00:00','please','ERRVREBRBRTBTRB'),
(12,'aayush','male','22','9157735517','aaabbbb@gmil.vom',14,'2019-01-01 00:00:00','hello','FBRBRTBRBESDVDFV'),
(13,'Chauhan aayush','male','22','9157735517','aaa@gmil.vom',15,'2019-02-16 00:00:00','qqqq','EVFRVRFBFGGBFDVFD'),
(14,'manu prajapati','male','20','9157535675','aaa@gmil.vom',15,'2019-01-18 00:00:00','sdvddvdfvdvdvdvsdvsdvdsvdvdsvdvds','dvdfvdvdfvvd');

/*Table structure for table `state` */

DROP TABLE IF EXISTS `state`;

CREATE TABLE `state` (
  `state_id` int(100) NOT NULL AUTO_INCREMENT,
  `state_name` varchar(100) NOT NULL,
  PRIMARY KEY (`state_id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

/*Data for the table `state` */

insert  into `state`(`state_id`,`state_name`) values 
(1,'gujarat'),
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
('aayush','aayush','Admin'),
('aayush','aayush','Admin');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
