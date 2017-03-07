
/* create database FLIGHTS */
CREATE DATABASE flights;

USE flights;

/*create AirCrafts table*/
CREATE TABLE AirCrafts(
     AcID int primary key,
	 AcNumber varchar(32) not null,
	 Capacity int not null,
	 availability int,
	 Company varchar(128) not null
       );
	   
/*CREATE ROUTE TABLE*/

CREATE TABLE Route(
     RtID int,
     Airport varchar(32) not null,
     Destination varchar(32) not null,
     RouteCode varchar(16) not null unique,
     primary key (RtID) 	 
);

/* create AirFare table*/
CREATE TABLE AirFare(
     AfID int,
	 Route int,
	 Fare decimal(12,3),
	 FSC decimal(12,3),
	 primary key(AfID),
	 constraint fk_Route foreign key (Route) references Route(RtID)
);

/* Create Flight Schedule table*/
CREATE TABLE Flight_Schedule(
 FFID INT,
 FlightDate DATE,
 Departure text,
 Arrival text,
 AirCraft INT,
 NetFare INT,
 PRIMARY KEY(FFID),
 CONSTRAINT fk_AirCraft FOREIGN KEY (AirCraft) REFERENCES AirCrafts(AcID)
/* CONSTRAINT fk_NetFare FOREIGN KEY (NetFare) references AirFare(AfID)*/
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
  
  /*create Country table*/
  CREATE TABLE Countries(
   CtID INT PRIMARY KEY,
   CountryName varchar(32) NOT NULL
   );
   
   /* CREATE States TABLE*/
   CREATE TABLE States(
     StID INT,
	 StateName varchar(32),
	 Country INT,
	 PRIMARY KEY(StID),
	 CONSTRAINT fk_Country FOREIGN KEY (Country) REFERENCES Countries(CtID)
	 );
	 
	 /* CREATE Contact Details TABLE*/
	 CREATE TABLE Contact_Details(
	  CnID INT PRIMARY KEY,
	  Email varchar(16) NOT NULL,
	  Cell varchar(16) NOT NULL,
	  Tel varchar(16),
	  Street varchar(64),
	  SName INT NOT NULL,
	  CONSTRAINT fk_SName foreign key (SName) references States(StID)
	  );
	  
	 /* CREATE Passengers TABLE*/
	 CREATE TABLE Passengers (
	   PsID INT ,
	   Name varchar(32) NOT NULL,
	   Gender varchar(30),
	   Age int not null,
	   Nationality varchar(16) not null
	   /*Contacts int not null,
	   constraint fk_Contacts foreign key (Contacts) references Contact_Details(CnID)*/
	   );
	   
	 
	 /* CREATE Branch TABLE*/
	 CREATE TABLE Branches(
	 BrID INT PRIMARY KEY,
	 Center varchar(16) not null,
     Address varchar(32) not null,
     SName INT,
     constraint fk_StateOfEmployee foreign key (SName) references States(StID)
);
	 
	 /* CREATE Employee TABLE*/
	 CREATE TABLE Employee(
	  EmpID INT PRIMARY KEY,
	  Name varchar(32) not null,
	  Address varchar(32) not null,
	  Branch int not null,
	  Designation varchar(32) not null,
	  Email varchar(16) not null,
	  Tel varchar(16) not null,
	  Ext INT ,
	  constraint fk_Branch foreign key (Branch) references Branches(BrID)
	  );
	  
	  
	 /* CREATE Transactions TABLE*/
	  CREATE TABLE Transactions(
	  TsID int PRIMARY KEY ,
	  BookingDate DATE,
	  DepartureDate DATE,
	  Flight int,
	  Charge int,
	  NumberOfSeats int,
	  emailID varchar(60),
	  status varchar(20)
	  /*constraint fk_Passenger foreign key (Passenger) references Passengers(PsID),
	  constraint fk_Flight  foreign key (Flight) references Flight_Schedule(FFID)
	  constraint fk_Employee foreign key (Employee) references Employee(EmpID),
	  constraint fk_Charges foreign key (Charge) references Charges(ChID),
	  constraint fk_Discount foreign key (Discount) references Discounts(DiID)*/
	  );
	  
	  /*dumping data into aircrafts table*/
	  
	  INSERT INTO AirCrafts values(1110,'9W-7080',150,150,'Jet Airways');
	  insert into AirCrafts values(1111,'SG-422',150,150,'Spicejet');
	  insert into AirCrafts values(1112,'6E-428',150,150,'IndiGo');
	  insert into AirCrafts values(1113,'9W-348',150,150,'Jet Airways');
	  insert into AirCrafts values(1114,'6E-885',120,120,'IndiGo');
	  insert into AirCrafts values(1115,'9W-30',130,130,'Jet Airways');
	  
	  
	  /*dumping data into route table*/
	  insert into Route values(1110,'Hyderabad','Mumbai',1200);
	  insert into Route values(1111,'Hyderabad','Mumbai',1201);
	  insert into Route values(1112,'Mumbai','Hyderabad',1202);
	  insert into Route values(1113,'Mumbai','Hyderabad',1203);
	  insert into Route values(1114,'NewDelhi','Banglore',1204);
	  insert into Route values(1115,'NewDelhi','Banglore',1205);
	  
	  /*dumping data into airfare table
	  insert into AirFare();*/
	  
	  /*dumping data into flight schedule table*/
	  insert into Flight_Schedule values(1234,'2016-10-16','21:30','22:55',1110,1557);
	  insert into Flight_Schedule values(1235,'2016-10-15','21:30','22:55',1110,1557);
	  insert into Flight_Schedule values(1236,'2016-10-18','21:30','22:55',1110,1557);
	  insert into Flight_Schedule values(1237,'2016-10-19','21:30','22:55',1110,1557);
	  insert into Flight_Schedule values(1238,'2016-10-15','11:05','12:35',1111,1542);
      insert into Flight_Schedule values(1239,'2016-10-16','11:05','12:35',1111,1542);
	  insert into Flight_Schedule values(1240,'2016-10-17','11:05','12:35',1111,1542);
	  insert into Flight_Schedule values(1241,'2016-10-19','11:05','12:35',1111,1542);
      insert into Flight_Schedule values(1242,'2016-10-20','11:05','12:35',1111,1542);
	  insert into Flight_Schedule values(1243,'2016-10-15','15:45','17:00',1112,1335);
	  insert into Flight_Schedule values(1244,'2016-10-16','15:45','17:00',1112,1335);
	  insert into Flight_Schedule values(1245,'2016-10-18','15:45','17:00',1112,1335);
	  insert into Flight_Schedule values(1246,'2016-10-20','15:45','17:00',1112,1335);
      insert into Flight_Schedule values(1247,'2016-10-15','03:00','04:15',1113,1435);
	  insert into Flight_Schedule values(1248,'2016-10-16','03:00','04:15',1113,1435);
	  insert into Flight_Schedule values(1249,'2016-10-18','03:00','04:15',1113,1435);
	  insert into Flight_Schedule values(1250,'2016-10-19','03:00','04:15',1113,1435);
	  insert into Flight_Schedule values(1251,'2016-10-14','04:10','06:55',1114,2581);
	  insert into Flight_Schedule values(1252,'2016-10-15','04:10','06:55',1114,2581);
	  insert into Flight_Schedule values(1253,'2016-10-19','04:10','06:55',1114,2581);
	  insert into Flight_Schedule values(1254,'2016-10-18','04:10','06:55',1114,2581);
	  insert into Flight_Schedule values(1255,'2016-10-16','04:10','06:55',1114,2581);
	  insert into Flight_Schedule values(1256,'2016-10-14','15:20','22:00',1115,3435);
      insert into Flight_Schedule values(1257,'2016-10-15','15:20','22:00',1115,3435);
	  insert into Flight_Schedule values(1258,'2016-10-16','15:20','22:00',1115,3435);
	  insert into Flight_Schedule values(1259,'2016-10-18','15:20','22:00',1115,3435);
	  insert into Flight_Schedule values(1260,'2016-10-19','15:20','22:00',1115,3435);
      /*alter table transactions*/
	  Alter table transactions modify TsID int not null AUTO_INCREMENT,AUTO_INCREMENT=11;
	  


	   
	   
	   
	   
	   
	   
	   
	   
	   
	   