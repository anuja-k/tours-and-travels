/* create database BUS */
CREATE DATABASE bus;

USE bus;

/*create Buses table*/
CREATE TABLE Buses(
     BusID int primary key,
	 BusNumber varchar(32) not null,
	 Availability int, 
	 Capacity int not null,
	 Company varchar(128) not null,
	 TypeOfBus varchar(60) not null
       );
	   
/*CREATE ROUTE TABLE*/

CREATE TABLE Route(
     RtID int,
     BusStation varchar(32) not null,
     Destination varchar(32) not null,
     RouteCode varchar(16) not null unique,
     primary key (RtID) 	 
);

/* Create Bus Schedule table*/
CREATE TABLE Bus_Schedule(
 BSID INT,
 TripDate DATE,
 Departure text,
 Arrival text,
 Bus INT,
 NetFare INT,
 PRIMARY KEY(BSID),
 CONSTRAINT fk_Buses FOREIGN KEY (Bus) REFERENCES Buses(BusID)
);
/* Create Discounts table*/
CREATE TABLE Discounts(
  DiID INT PRIMARY KEY,
  Title varchar(32),
  Amount INT,
  Description varchar(35)
  );
  
  /* Create Charges table*/
  CREATE TABLE Charges(
  ChID INT PRIMARY KEY,
  Title varchar(32),
  Amount INT,
  Description varchar(255)
  );
   	  
	 /* CREATE Passengers TABLE*/
	 CREATE TABLE Passengers (
	   PsID INT PRIMARY KEY,
	   Name varchar(32) NOT NULL,
	   gender varchar(30),
	   Age int not null,
	   Nationality varchar(16) not null
	   );
	   
	 /* CREATE Transactions TABLE*/
	  CREATE TABLE Transactions(
	  TsID int PRIMARY KEY,
	  BookingDate DATE,
	  DepartureDate DATE,
	  Bus int,
	  Charge int,
	  NumberOfSeats int,
	  emailid varchar(60),
	  status varchar(40)	
	  );
	  
	  /*dumping data into buses table*/
	  INSERT INTO Buses values(1345,'MH05G1234',45,45,'King Travels','A/C Sleeper');
	  INSERT INTO Buses values(1346,'MH05G3456',40,40,'Paolo Travels','Non A/C Sleeper');
	  INSERT INTO Buses values(1347,'MH05G0987',42,42,'Unity Travels','Volvo A/C Sleeper');
	  INSERT INTO Buses values(1348,'MH05G0986',36,36,'Global Travels','Volvo A/C Multi Axle Sleeper');
	  INSERT INTO Buses values(1349,'TS09Z0876',48,48,'VRL Travels','Volvo A/C Multi Axle Sleeper');
	  INSERT INTO Buses values(1350,'TS09A0457',35,35,'Mahavat Tours and Travels','A/C Sleeper');
	  INSERT INTO Buses values(1351,'TS08G1235',41,41,'Kesineni Travels','Volvo A/C Multi Axle Sleeper');
	  INSERT INTO Buses values(1352,'TS08A2367',43,43,'Kesineni Travels','Volvo A/C Multi Axle Sleeper');
	  INSERT INTO Buses values(1353,'KN10E2134',38,38,'Kesineni Travels','Volvo A/C Multi Axle Sleeper');
	  INSERT INTO Buses values(1354,'KN09D3421',35,35,'Kaveri Travels','Scania A/C Multi Axle Sleeper');
	  INSERT INTO Buses values(1355,'KS05W2109',40,40,'Orange Tour Travels','Volvo A/C Multi Axle Sleeper');
	  INSERT INTO Buses values(1356,'KS06W3456',44,44,'Aeon Connect','Scania A/C Multi Axle Sleeper');
	  
	  /*dumping data into route table*/
	  INSERT INTO Route values(1345,'SURAT','MUMBAI',1234);
	  INSERT INTO Route values(1346,'SURAT','MUMBAI',1235);
	  INSERT INTO Route values(1347,'MUMBAI','SURAT',1236);
	  INSERT INTO Route values(1348,'MUMBAI','SURAT',1237);
	  INSERT INTO Route values(1349,'HYDERABAD','SURAT',1238);
	  INSERT INTO Route values(1350,'HYDERABAD','SURAT',1239);
	  INSERT INTO Route values(1351,'HYDERABAD','BANGALORE',1240);
	  INSERT INTO Route values(1352,'HYDERABAD','BANGALORE',1241);
	  INSERT INTO Route values(1353,'BANGALORE','HYDERABAD',1242);
	  INSERT INTO Route values(1354,'BANGALORE','HYDERABAD',1243);
	  INSERT INTO Route values(1355,'COCHIN','HYDERABAD',1244);
	  INSERT INTO Route values(1356,'HYDERABAD','COCHIN',1245);
	  
	  
	  /*dumping data into busSchedule table*/
	  INSERT INTO Bus_Schedule values(111,'2016-10-15','22:45','04:15',1345,550);
	  INSERT INTO Bus_Schedule values(112,'2016-10-16','22:45','04:15',1345,550);
	  INSERT INTO Bus_Schedule values(113,'2016-10-17','22:45','04:15',1345,550);
	  INSERT INTO Bus_Schedule values(114,'2016-10-18','22:45','04:15',1345,550);
	  INSERT INTO Bus_Schedule values(115,'2016-10-14','22:45','04:15',1345,550);
	  INSERT INTO Bus_Schedule values(116,'2016-10-15','22:00','04:00',1346,550);
	  INSERT INTO Bus_Schedule values(117,'2016-10-16','22:00','04:00',1346,550);
	  INSERT INTO Bus_Schedule values(118,'2016-10-17','22:00','04:00',1346,550);
	  INSERT INTO Bus_Schedule values(119,'2016-10-18','22:00','04:00',1346,550);
	  INSERT INTO Bus_Schedule values(120,'2016-10-15','22:15','05:00',1347,700);
	  INSERT INTO Bus_Schedule values(121,'2016-10-16','22:15','05:00',1347,700);
	  INSERT INTO Bus_Schedule values(122,'2016-10-17','22:15','05:00',1347,700);
	  INSERT INTO Bus_Schedule values(123,'2016-10-18','22:15','05:00',1347,700);
	  INSERT INTO Bus_Schedule values(124,'2016-10-14','22:15','05:00',1347,700);
	  INSERT INTO Bus_Schedule values(125,'2016-10-15','20:15','02:40',1348,849);
      INSERT INTO Bus_Schedule values(126,'2016-10-16','20:15','02:40',1348,849);	
      INSERT INTO Bus_Schedule values(127,'2016-10-17','20:15','02:40',1348,849);	
      INSERT INTO Bus_Schedule values(128,'2016-10-18','20:15','02:40',1348,849);
      INSERT INTO Bus_Schedule values(129,'2016-10-14','20:15','02:40',1348,849);	  
	  INSERT INTO Bus_Schedule values(130,'2016-10-15','16:00','09:30',1349,1600);
	  INSERT INTO Bus_Schedule values(131,'2016-10-16','16:00','09:30',1349,1600);
	  INSERT INTO Bus_Schedule values(132,'2016-10-17','16:00','09:30',1349,1600);
	  INSERT INTO Bus_Schedule values(133,'2016-10-18','16:00','09:30',1349,1600);
	  INSERT INTO Bus_Schedule values(134,'2016-10-14','16:00','09:30',1349,1600);
	  INSERT INTO Bus_Schedule values(135,'2016-10-14','17:30','11:20',1350,2450);
	  INSERT INTO Bus_Schedule values(136,'2016-10-15','17:30','11:20',1350,2450);
	  INSERT INTO Bus_Schedule values(137,'2016-10-16','17:30','11:20',1350,2450);
	  INSERT INTO Bus_Schedule values(138,'2016-10-17','17:30','11:20',1350,2450);
	  INSERT INTO Bus_Schedule values(139,'2016-10-18','17:30','11:20',1350,2450);
	  INSERT INTO Bus_Schedule values(140,'2016-10-14','21:45','06:00',1351,1100);
	  INSERT INTO Bus_Schedule values(141,'2016-10-15','21:45','06:00',1351,1100);
	  INSERT INTO Bus_Schedule values(142,'2016-10-16','21:45','06:00',1351,1100);
	  INSERT INTO Bus_Schedule values(143,'2016-10-17','21:45','06:00',1351,1100);
	  INSERT INTO Bus_Schedule values(144,'2016-10-18','21:45','06:00',1351,1100);
	  INSERT INTO Bus_Schedule values(145,'2016-10-14','22:30','07:00',1352,1100);
	  INSERT INTO Bus_Schedule values(146,'2016-10-15','22:30','07:00',1352,1100);
	  INSERT INTO Bus_Schedule values(147,'2016-10-16','22:30','07:00',1352,1100);
	  INSERT INTO Bus_Schedule values(148,'2016-10-20','22:30','07:00',1352,1100);
	  INSERT INTO Bus_Schedule values(149,'2016-10-14','20:45','05:00',1353,1500);
	  INSERT INTO Bus_Schedule values(150,'2016-10-15','20:45','05:00',1353,1500);
	  INSERT INTO Bus_Schedule values(151,'2016-10-16','20:45','05:00',1353,1500);
	  INSERT INTO Bus_Schedule values(152,'2016-10-17','20:45','05:00',1353,1500);
	  INSERT INTO Bus_Schedule values(153,'2016-10-20','20:45','05:00',1353,1500);
	  INSERT INTO Bus_Schedule values(154,'2016-10-14','23:00','06:30',1354,1400);
	  INSERT INTO Bus_Schedule values(155,'2016-10-15','23:00','06:30',1354,1400);
	  INSERT INTO Bus_Schedule values(156,'2016-10-16','23:00','06:30',1354,1400);
	  INSERT INTO Bus_Schedule values(157,'2016-10-18','23:00','06:30',1354,1400);
	  INSERT INTO Bus_Schedule values(158,'2016-10-19','23:00','06:30',1354,1400);
	  INSERT INTO Bus_Schedule values(159,'2016-10-14','18:45','13:45',1355,2050);
	  INSERT INTO Bus_Schedule values(160,'2016-10-15','18:45','13:45',1355,2050);
	  INSERT INTO Bus_Schedule values(161,'2016-10-16','18:45','13:45',1355,2050);
	  INSERT INTO Bus_Schedule values(162,'2016-10-17','18:45','13:45',1355,2050);
	  INSERT INTO Bus_Schedule values(163,'2016-10-21','18:45','13:45',1355,2050);
	  INSERT INTO Bus_Schedule values(164,'2016-10-14','13:45','07:45',1356,2000);
	  INSERT INTO Bus_Schedule values(165,'2016-10-15','13:45','07:45',1356,2000);
	  INSERT INTO Bus_Schedule values(166,'2016-10-18','13:45','07:45',1356,2000);
	  INSERT INTO Bus_Schedule values(167,'2016-10-19','13:45','07:45',1356,2000);
	  /*alter table transactions*/
	  Alter table transactions modify TsID int not null AUTO_INCREMENT,AUTO_INCREMENT=11;