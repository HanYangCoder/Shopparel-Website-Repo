Just gonna save some sample SQL queries here in case it's needed soon
Please refer to README.md before executing these queries

create userDB
CREATE TABLE userDB(userID int(5) PRIMARY KEY AUTO_INCREMENT, firstName varchar(25), lastName varchar(25), password varchar(25), contactNumber int(10), email varchar(25), address varchar(25), userType varchar(10));

INSERT INTO `userDB`(`userID`, `firstName`, `lastName`, `password`, `contactNumber`, `email`, `address`, `userType`) VALUES ('100','John','Doe','johndoe','55555','johndoe@email','Manila','buyer');

INSERT INTO `userDB`(`userID`, `firstName`, `lastName`, `password`, `contactNumber`, `email`, `address`, `userType`) VALUES ('101','John','Cena','johncena','44444','johncena@email','Manila','seller');

CREATE TABLE productsDB(productID int(5) PRIMARY KEY AUTO_INCREMENT, productName varchar(25), imageCode varchar(10), price int(10), category varchar(25), userID int(5));