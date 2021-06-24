Just gonna save some sample SQL queries here in case it's needed soon
Please refer to README.md before executing these queries

create userDB
CREATE TABLE userDB(userID int(5) PRIMARY KEY AUTO_INCREMENT, firstName varchar(25), lastName varchar(25), password varchar(25), contactNumber int(10), email varchar(25), address varchar(25), userType varchar(10));

INSERT INTO `userDB`(`userID`, `firstName`, `lastName`, `password`, `contactNumber`, `email`, `address`, `userType`) VALUES ('100','John','Doe','johndoe','55555','johndoe@email','Manila','buyer');

INSERT INTO `userDB`(`userID`, `firstName`, `lastName`, `password`, `contactNumber`, `email`, `address`, `userType`) VALUES ('101','John','Cena','johncena','44444','johncena@email','Manila','seller');

CREATE TABLE productsDB(productID int(5) PRIMARY KEY AUTO_INCREMENT, productName varchar(25), imageCode varchar(10), price int(10), category varchar(25), userID int(5));

INSERT INTO `productsDB`(`productID`, `productName`, `imageCode`, `price`, `category`, `userID`) VALUES ('1001','Solid Black Cotton Sleeve','m-1','399','mens','101');
INSERT INTO `productsDB`(`productID`, `productName`, `imageCode`, `price`, `category`, `userID`) VALUES ('1002','Skull and Chain Pattern Polo','m-2','449','mens','101');
INSERT INTO `productsDB`(`productID`, `productName`, `imageCode`, `price`, `category`, `userID`) VALUES ('1003','Plant & Stripped Print Polo','m-3','499','mens','101');
INSERT INTO `productsDB`(`productID`, `productName`, `imageCode`, `price`, `category`, `userID`) VALUES ('1004','Patchwork Kangaroo Jacket','m-4','699','mens','101');
INSERT INTO `productsDB`(`productID`, `productName`, `imageCode`, `price`, `category`, `userID`) VALUES ('1005', 'Multi-color Black Jacket','m-5','599','mens','101');
INSERT INTO `productsDB`(`productID`, `productName`, `imageCode`, `price`, `category`, `userID`) VALUES ('1006','Bandana Pattern Pajama','m-6','499','mens','101');
INSERT INTO `productsDB`(`productID`, `productName`, `imageCode`, `price`, `category`, `userID`) VALUES ('1007','Graffiti Chest Polo','m-7','349','mens','101');
INSERT INTO `productsDB`(`productID`, `productName`, `imageCode`, `price`, `category`, `userID`) VALUES ('1008','Letter-Tropical terno','m-8','699','mens','101');