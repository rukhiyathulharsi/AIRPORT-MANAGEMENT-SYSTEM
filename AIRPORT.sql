SET  SQL_MODE = "NO_AUTO_VALUE_NO_ZERO";
SET AUTOCOMMIT=0;
START TRANSACTION;
SET time_zone = "+00:00";

------------------------------------------
DROP TABLE IF EXISTS `login1`;
CREATE TABLE IF NOT EXISTS `login1`(
    `Username`  char(20) NOT NULL ,
    `Password` char(10) NOT NULL,
    primary key(`Username`,`Password`)
 )

----------------------------------
INSERT INTO `login1` (`Username`,`Password`) values ('admin','1234');

-------------------------------------------------

DROP TABLE IF EXISTS `airport`;
CREATE TABLE IF NOT EXISTS `airport`(
    `Airport_code`  char(20) NOT NULL ,
    `Airport_name` char(40) NOT NULL,
    `City` char(30) ,
    `State` char(40),
    primary key(`Airport_code`)
 ) ENGINE = MYISAM DEFAULT CAHRSET=latin1;
 COMMIT;

--------------------------------------------
DROP TABLE IF EXISTS `employee`;
CREATE TABLE IF NOT EXISTS `employee`(
    `Employee_id`  char(20) NOT NULL AUTO_INCREMENT,
    `Employee_name` char(40) NOT NULL,
    `Age` int,
    `Address` char(50),
    `Salary` decimal(10,4) ,
    `Phone_Number` double,
    `Airport_code`  char(20
    primary key(`Employee_id`)
    constraint emp_airport_fk FOREIGN key(Airport_code) references airport(Airport_code) on delete cascade
 ) ENGINE = MYISAM DEFAULT CAHRSET=latin1;
 COMMIT;
 ------------------------------------------

DROP TABLE IF EXISTS `flight`;
CREATE TABLE IF NOT EXISTS `flight`(
    `Flight_number`  int NOT NULL AUTO_INCREMENT,
    `Flight_name` char(40) NOT NULL,
    `Src_Dest` char(50),
    `Arrival_time` time,
    `Departure_time` time,
    `Airport_code`  char(20)
    primary key(`Flight_number`)
    constraint flight_airport_fk FOREIGN key(Airport_code) references airport(Airport_code) on delete cascade
 ) ENGINE = MYISAM DEFAULT CAHRSET=latin1;
 COMMIT;
 -----------------------------------------------------
DROP TABLE IF EXISTS `passenger`;
CREATE TABLE IF NOT EXISTS `passenger`(
    `Passenger_id`  int NOT NULL AUTO_INCREMENT,
    `Name` char(40) NOT NULL,
    `Address` char(50),
    `State` char(40),
    `Flight_number`  int,
    `Date_of_Departure` date,
    `No_of_seats` int,
    `Class` varchar(30),
    primary key(`Passenger_id`)
    constraint Passenger_flight_fk FOREIGN key(Flight_number) references flight(Flight_number) on delete cascade
 ) ENGINE = MYISAM DEFAULT CAHRSET=latin1;
 COMMIT;
---------------------------------------