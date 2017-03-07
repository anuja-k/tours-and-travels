CREATE DATABASE user;

USE user;

CREATE TABLE reg(
      `fname` varchar(30) NOT NULL,  
      `lname` varchar(30) NOT NULL,
	  `email` varchar(30) NOT NULL,
	  `password` varchar(150) NOT NULL,
	  `confirm_password` varchar(150) NOT NULL
	  );