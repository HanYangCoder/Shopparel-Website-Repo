Just gonna save some queries here in case needed soon

create userDB
CREATE TABLE userDB(userID int(5) PRIMARY KEY AUTO_INCREMENT, firstName varchar(25), lastName varchar(25), password varchar(25), contactNumber int(10), email varchar(25), address varchar(25), userType varchar(10));

INSERT INTO `userDB`(`userID`, `firstName`, `lastName`, `password`, `contactNumber`, `email`, `address`, `userType`) VALUES ('100','John','Doe','johndoe','55555','johndoe@email','Manila','buyer');