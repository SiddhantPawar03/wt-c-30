-- Signup DB
-- Dropping table if exists
Drop table if exists `user_db`;
-- Creating table
CREATE TABLE IF NOT EXISTS user_db (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `email` varchar(30) NOT NULL UNIQUE,
  `password` varchar(15) NOT NULL,
  `curr_Date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=latin1;

ALTER TABLE `user_db`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `user_db`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;

INSERT INTO `user_db`(`id`,`user_id`,`email`,`password`,`curr_Date`)VALUES
(1,1,'admin','admin123','00-00-0000 00:00:00 AM');
INSERT INTO `user_db`(`id`,`user_id`,`email`,`password`,`curr_Date`)VALUES
(2,2,'admin12','admin456','00-00-0000 00:00:00 AM');
INSERT INTO `user_db`(`id`,`user_id`,`email`,`password`,`curr_Date`)VALUES
(3,3,'admin3','admin789','00-00-0000 00:00:00 AM');

update `user_db` set `email`='admin2' where `id`=2;

delete from `user_db` where `id`=3;

-- Doctors Information DB
-- Dropping table if exists
Drop table if exists `doctors`;
-- Creating table
CREATE TABLE IF NOT EXISTS doctors(
    `Doctors_id` int(11) PRIMARY KEY ,
     `name` varchar(10) NOT NULL,
      `Position` varchar(12));

INSERT INTO `doctors`( `Doctors_id`, `name`,`Position`)VALUES
(1,'Admin','Permanent');
INSERT INTO `doctors`( `Doctors_id`, `name`,`Position`)VALUES
(2,'Admin12','Permanent');
INSERT INTO `doctors`( `Doctors_id`, `name`,`Position`)VALUES
(3,'Ram','Permanent');
INSERT INTO `doctors`( `Doctors_id`, `name`,`Position`)VALUES
(4,'Dev','Trainee');
INSERT INTO `doctors`( `Doctors_id`, `name`,`Position`)VALUES
(5,'Neel','Trainee');

-- Contact Us Form DB
-- Dropping table if exists
Drop table if exists `contact_db`;
-- Creating table
CREATE TABLE IF NOT EXISTS contact_db (
  `id` int(10) NOT NULL,
  `user_name` varchar(20) NOT NULL,
  `phone_num` bigint(15) NOT NULL,
  `age` int(3) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `email` varchar(35) NOT NULL,
  `address` varchar(50) NOT NULL,
  `comment` varchar(255) NOT NULL,
  `curr_Date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=latin1;

 ALTER TABLE `contact_db`
   ADD PRIMARY KEY (`id`);

ALTER TABLE `contact_db`
     MODIFY `id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=1;

-- Appointment DB
-- Dropping table if exists
Drop table if exists `makeAppointment`;
-- Creating table
CREATE TABLE makeAppointment (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
name VARCHAR(40) NOT NULL,
phoneNo bigint(12) NOT NULL,
mail VARCHAR(50) NOT NULL,
gender VARCHAR(10) NOT NULL,
doctorName VARCHAR(20) NOT NULL,
problem VARCHAR(20) NOT NULL,
conduct VARCHAR(10) NOT NULL,
date VARCHAR(10) NOT NULL,
timing VARCHAR(20) NOT NULL,
age int(3) NOT NULL,
comments VARCHAR(255),
recieved_at DATETIME DEFAULT CURRENT_TIMESTAMP
)