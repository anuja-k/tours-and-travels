/* create database Train */
CREATE DATABASE Trains;

USE Trains;

/*create station table*/
CREATE TABLE Station(
     StationID varchar(8) primary key,
	 StationName varchar(25)
	
);

/*inserting values into Station*/
INSERT INTO Station VALUES ('ADI','Ahmedabad') ; 
INSERT INTO Station VALUES ('MAS','Chennai') ;
INSERT INTO Station VALUES ('RJT','Rajkot') ; 
INSERT INTO Station VALUES ('SC','Secunderabad') ;
INSERT INTO Station VALUES ('BCT','Mumbai-Central') ; 
INSERT INTO Station VALUES ('BVI','Borivali') ; 
INSERT INTO Station VALUES ('VAPI','Vapi') ; 
INSERT INTO Station VALUES ('ST','Surat') ; 
INSERT INTO Station VALUES ('BH','Bharuch Jn') ; 
INSERT INTO Station VALUES ('BRC','Vadodara Jn') ; 
INSERT INTO Station VALUES ('ANND','Anand Jn') ;
INSERT INTO Station VALUES ('ND','Nadiad Jn') ; 
INSERT INTO Station VALUES ('AKV','Ankleshwar Jn') ; 
INSERT INTO Station VALUES ('NDB','Nandurbar') ; 
INSERT INTO Station VALUES ('AN','Amalner') ; 
INSERT INTO Station VALUES ('BSL','Bhusaval Jn') ; 
INSERT INTO Station VALUES ('NN','Nandurbar') ; 
INSERT INTO Station VALUES ('MZR','Murtajapur') ;
INSERT INTO Station VALUES ('WRR','Warora') ;
INSERT INTO Station VALUES ('SKZR','Sirpur Kagazngr') ;
INSERT INTO Station VALUES ('WL','Warangal') ;
INSERT INTO Station VALUES ('KMT','Khammam') ;
INSERT INTO Station VALUES ('BZA','Vijayawada Jn') ;
INSERT INTO Station VALUES ('TEL','Tenali Jn') ;
INSERT INTO Station VALUES ('OGL','Ongole') ;
INSERT INTO Station VALUES ('NLR','Nellore') ;
 
 
 

 
 

 
 
 





 



 


/*create Trains table*/
CREATE TABLE Train(
     TrainID int not null,
	 TrainName varchar(50) not null,
	 TrainType varchar(50) not null, 
	 SourceStation varchar(50) not null,
	 DestinationStation varchar(50) not null,
	 SourceID varchar(8) not null,
	 DestinationID varchar(8) not null,
	 primary key(TrainID),
	 constraint source_key foreign key(SourceID) references Station(StationID) on update cascade on delete cascade,
	 constraint destination_key foreign key(DestinationID) references Station(StationID) on update cascade on delete cascade
	 ); 
	 

/*inserting values into Train */
INSERT INTO Train VALUES (12655,'Navjeevan SF Express','SuperFast','Ahmedabad','Chennai','ADI','MAS') ;
INSERT INTO Train VALUES (12656,'Navjeevan SF Express','SuperFast','Chennai','Ahmedabad','MAS','ADI') ;
INSERT INTO Train VALUES (17017,'Rajkot-Secunderabad Express','Express','Rajkot','Secunderabad','RJT','SC') ;
INSERT INTO Train VALUES (17018,'Secunderabad-Rajkot Express','Express','Secunderabad','Rajkot','SC','RJT') ;
INSERT INTO Train VALUES (12010,'Ahmedabad-Mumbai Central Shatabdi Express','Express','Ahmedabad','Mumbai-Central','ADI','BCT') ;
INSERT INTO Train VALUES (12009,'Mumbai Central-Ahmedabad Shatabdi Express','Express','Mumbai-Central','Ahmedabad','BCT','ADI') ;


	 
/*create Train classes table*/
CREATE TABLE Train_Class(
     TrainID int not null,
	 FareClass1 int not null,
	 SeatClass1 int not null,
	 FareClass2 int not null,
	 SeatClass2 int not null,
	 FareClass3 int not null,
	 SeatClass3 int not null,
	 primary key(TrainID)
);


INSERT INTO Train_Class VALUES  (12655,180,7200,180,120,300,0) ;
INSERT INTO Train_Class VALUES  (12656,180,7200,180,120,300,0) ;
INSERT INTO Train_Class VALUES  (17017,180,7200,180,120,300,0) ;
INSERT INTO Train_Class VALUES  (17018,180,7200,180,120,300,0) ;
INSERT INTO Train_Class VALUES  (12010,180,7200,180,120,180,60) ;
INSERT INTO Train_Class VALUES  (12009,180,7200,180,120,180,60) ;

 
/*create days_available table*/
CREATE TABLE Days_Available(
     TrainID int not null,
	 AvailableDays varchar(50),
	 primary key(TrainID)
);

/*inserting values in Days_Available */
INSERT INTO Days_Available VALUES (12655,'SUN MON TUE WED THU FRI SAT');
INSERT INTO Days_Available VALUES (12656,'SUN MON TUE WED THU FRI SAT');
INSERT INTO Days_Available VALUES (17017,'MON WED THU');
INSERT INTO Days_Available VALUES (17018,'MON TUE SAT');
INSERT INTO Days_Available VALUES (12010,'MON TUE WED THU FRI SAT');
INSERT INTO Days_Available VALUES (12009,'MON TUE WED THU FRI SAT');





/*create passenger table*/
CREATE TABLE Passenger(
       PNR int(25) not null,
	   SeatNumber int not null,
	   PassengerName varchar(30) not null,
	   Age int not null,
	   Gender varchar(8) not null,
	   TrainID int not null,
	   foreign key(TrainID) references Train(TrainID)on update cascade on delete cascade,
	   primary key(PNR,SeatNumber)
);

/*ALTER TABLE Passenger
 MODIFY  SeatNumber int not null AUTO_INCREMENT,AUTO_INCREMENT= 1;*/
 
/*create passenger_ticket table*/
CREATE TABLE Passenger_ticket(
        PNR int(25) not null,
		SourceID varchar(8)not null,
		DestinationID varchar(8) not null,
		Class_type varchar(50) not null,
		ReservationStatus varchar(25) not null,
		TrainID int not null,
		EmailID varchar(60) not null,
		price int not null,
		foreign key(TrainID) references Train(TrainID)on update cascade on delete cascade,
		primary key(PNR)
);
ALTER TABLE Passenger_ticket
 MODIFY  PNR int(25) not null AUTO_INCREMENT,AUTO_INCREMENT= 120;
 
/*create train status table*/
CREATE TABLE Train_Status(
       TrainID int not null,
	   AvailableDate date not null,
	   BookedSeats1 int,
	   WaitingSeats1 int,
	   AvailableSeats1 int,
	   BookedSeats2 int,
	   WaitingSeats2 int,
	   AvailableSeats2 int,
	   BookedSeats3 int ,
	   WaitingSeats3 int,
	   AvailableSeats3 int,
	   BookedSeats4 int,
	   WaitingSeats4 int,
	   AvailableSeats4 int,
	   BookedSeats5 int,
	   WaitingSeats5 int,
	   AvailableSeats5 int,
	   BookedSeats6 int,
	   WaitingSeats6 int,
	   AvailableSeats6 int,
	   primary key(TrainID,AvailableDate),
	   foreign key(TrainID) references Train(TrainID) on update cascade on delete cascade
);

/* insert values into Train_Status */


/*create reservation table*/
CREATE TABLE Reservation(
       TrainID int not null,
	   AvailableDate date not null,
	   EmailID varchar(60) not null,
	   PNR int(20) not null,
	   ReservationDate date not null,
	   ReservationStatus varchar(20),
	   primary key(TrainID,AvailableDate,EmailID,PNR),
	   foreign key(TrainID,AvailableDate) references Train_Status(TrainID,AvailableDate) on update cascade on delete cascade
	   /*foreign key(EmailID) references Passenger_ticket(EmailID) on update cascade on delete cascade*/
	   
);



/*create route table*/
CREATE TABLE route(
       TrainID int not null,
	   StopNumber int not null,
	   StationID varchar(8) not null,
	   ArrivalTime text not null,
	   DepartureTime text not null,
	   Days int not null,
	   SourceDistance int not null,
	   primary key(TrainID,StopNumber),
	   foreign key(TrainID) references Train(TrainID) on update cascade on delete cascade
);

/*inserting values into route table*/
INSERT INTO route VALUES (12009,1,'BCT','Starts','06:25',1,0);
INSERT INTO route VALUES (12009,2,'BVI','06:57','06:59',1,30);
INSERT INTO route VALUES (12009,3,'VAPI','08:28','08:30',1,170);
INSERT INTO route VALUES (12009,4,'ST','09:40','09:45',1,263);
INSERT INTO route VALUES (12009,5,'BH','10:24','10:26',1,322);
INSERT INTO route VALUES (12009,6,'BRC','11:15','11:20',1,392);
INSERT INTO route VALUES (12009,7,'ANND','11:50','11:52',1,427);
INSERT INTO route VALUES (12009,8,'ND','12:07','12:09',1,446);
INSERT INTO route VALUES (12009,9,'ADI','13:10','Ends',1,491);

INSERT INTO route VALUES (12010,1,'ADI','Starts','14:30',1,0);
INSERT INTO route VALUES (12010,2,'ND','15:08','15:10',1,46);
INSERT INTO route VALUES (12010,3,'ANND','15:28','15:30',1,64);
INSERT INTO route VALUES (12010,4,'BRC','16:12','16:17',1,100);
INSERT INTO route VALUES (12010,5,'BH','17:01','17:03',1,170);
INSERT INTO route VALUES (12010,6,'ST','17:55','18:02',1,229);
INSERT INTO route VALUES (12010,7,'VAPI','19:00','19:02',1,322);
INSERT INTO route VALUES (12010,8,'BVI','20:43','20:45',1,462);
INSERT INTO route VALUES (12010,9,'BCT','21:35','Ends',1,491);

INSERT INTO route VALUES (12655,1,'ADI','Starts','06:40',1,0);
INSERT INTO route VALUES (12655,2,'ND','07:22','07:24',1,46);
INSERT INTO route VALUES (12655,3,'ANND','07:42','07:44',1,64);
INSERT INTO route VALUES (12655,4,'BRC','08:25','08:30',1,100);
INSERT INTO route VALUES (12655,5,'AKV','09:29','09:31',1,180);
INSERT INTO route VALUES (12655,6,'ST','10:25','10:35',1,229);
INSERT INTO route VALUES (12655,7,'NDB','13:15','13:20',1,389);
INSERT INTO route VALUES (12655,8,'AN','15:52','15:54',1,485);
INSERT INTO route VALUES (12655,9,'BSL','17:25','17:35',1,564);
INSERT INTO route VALUES (12655,10,'NN','18:48','18:50',1,642);
INSERT INTO route VALUES (12655,11,'MZR','20:13','20:15',1,742);
INSERT INTO route VALUES (12655,12,'WRR','23:39','23:41',1,950);
INSERT INTO route VALUES (12655,13,'SKZR','02:03','02:05',2,1080);
INSERT INTO route VALUES (12655,14,'WL','04:35','04:40',2,1253);
INSERT INTO route VALUES (12655,15,'KMT','06:04','06:06',2,1360);
INSERT INTO route VALUES (12655,16,'BZA','08:45','09:00',2,1461);
INSERT INTO route VALUES (12655,17,'TEL','09:26','09:28',2,1493);
INSERT INTO route VALUES (12655,18,'OGL','10:55','10:57',2,1600);
INSERT INTO route VALUES (12655,19,'NLR','12:15','12:17',2,1716);
INSERT INTO route VALUES (12655,20,'MAS','16:05','Ends',2,1891);

INSERT INTO route VALUES (12656,1,'MAS','Starts','09:35',1,1891);
INSERT INTO route VALUES (12656,2,'NLR','11:50','12:00',1,1716);
INSERT INTO route VALUES (12656,3,'OGL','13:56','13:57',1,1600);
INSERT INTO route VALUES (12656,4,'TEL','15:13','15:14',1,1493);
INSERT INTO route VALUES (12656,5,'BZA','16:30','16:45',1,1461);
INSERT INTO route VALUES (12656,6,'KMT','17:54','17:56',1,1360);
INSERT INTO route VALUES (12656,7,'WL','20:15','20:20',1,1253);
INSERT INTO route VALUES (12656,8,'SKZR','22:29','22:30',1,1080);
INSERT INTO route VALUES (12656,9,'WRR','02:31','02:34',2,950);
INSERT INTO route VALUES (12656,10,'MZR','04:48','04:50',2,742);
INSERT INTO route VALUES (12656,11,'NN','06:09','06:10',2,642);
INSERT INTO route VALUES (12656,12,'BSL','07:50','08:05',2,564);
INSERT INTO route VALUES (12656,13,'AN','10:00','10:02',2,485);
INSERT INTO route VALUES (12656,14,'NDB','11:35','11:40',2,389);
INSERT INTO route VALUES (12656,15,'ST','14:52','15:02',2,229);
INSERT INTO route VALUES (12656,16,'AKV','15:37','15:38',2,180);
INSERT INTO route VALUES (12656,17,'BRC','16:45','16:50',2,100);
INSERT INTO route VALUES (12656,18,'ANND','17:21','17:22',2,64);
INSERT INTO route VALUES (12656,19,'ND','17:38','17:39',2,46);
INSERT INTO route VALUES (12656,20,'ADI','19:00','Ends',2,0);
















/*create route_has_station table*/
CREATE TABLE route_has_station(
       TrainID int not null,
	   StationID varchar(20) not null,
	   StopNumber int not null,
	   primary key(TrainID,StationID)
);