Just gonna save some sample SQL queries here in case it's needed soon
Please refer to README.md before executing these queries

CREATING DATABASES/TABLES

create userDB

CREATE TABLE userDB(userID int(5) PRIMARY KEY AUTO_INCREMENT, firstName varchar(25), lastName varchar(25), password varchar(25), contactNumber int(10), email varchar(25), address varchar(25), userType varchar(10));

CREATE TABLE productsDB(productID int(5) PRIMARY KEY AUTO_INCREMENT, productName varchar(25), imageCode varchar(10), price int(10), category varchar(25), userID int(5));

CREATE TABLE shoppingCartDB(itemID int(5) PRIMARY KEY AUTO_INCREMENT, productID int(5), userID int(5), price int(10), amountPurchased int(50), totalPrice int(50), dateOrdered datetime());

INSERTING VALUES INTO TABLES

INSERT INTO `userDB`(`userID`, `firstName`, `lastName`, `password`, `contactNumber`, `email`, `address`, `userType`) VALUES ('100','John','Doe','johndoe','55555','johndoe@email','Manila','buyer');

INSERT INTO `userDB`(`userID`, `firstName`, `lastName`, `password`, `contactNumber`, `email`, `address`, `userType`) VALUES ('101','John','Cena','johncena','44444','johncena@email','Manila','seller');

INSERT INTO `productsDB`(`productID`, `productName`, `imageCode`, `price`, `category`, `userID`) VALUES ('1001','Solid Black Cotton Sleeve','m-1','399','mens','101');
INSERT INTO `productsDB`(`productID`, `productName`, `imageCode`, `price`, `category`, `userID`) VALUES ('1002','Skull and Chain Pattern Polo','m-2','449','mens','101');
INSERT INTO `productsDB`(`productID`, `productName`, `imageCode`, `price`, `category`, `userID`) VALUES ('1003','Plant & Stripped Print Polo','m-3','499','mens','101');
INSERT INTO `productsDB`(`productID`, `productName`, `imageCode`, `price`, `category`, `userID`) VALUES ('1004','Patchwork Kangaroo Jacket','m-4','699','mens','101');
INSERT INTO `productsDB`(`productID`, `productName`, `imageCode`, `price`, `category`, `userID`) VALUES ('1005', 'Multi-color Black Jacket','m-5','599','mens','101');
INSERT INTO `productsDB`(`productID`, `productName`, `imageCode`, `price`, `category`, `userID`) VALUES ('1006','Bandana Pattern Pajama','m-6','499','mens','101');
INSERT INTO `productsDB`(`productID`, `productName`, `imageCode`, `price`, `category`, `userID`) VALUES ('1007','Graffiti Chest Polo','m-7','349','mens','101');
INSERT INTO `productsDB`(`productID`, `productName`, `imageCode`, `price`, `category`, `userID`) VALUES ('1008','Letter-Tropical terno','m-8','699','mens','101');

INSERT INTO `productsDB`(`productID`, `productName`, `imageCode`, `price`, `category`, `userID`) VALUES 
('1009','Topman Ovesized t-shirt','p-1','299','trends','101'),
('1010','Basic Tees for kids','p-2','189','trends','101'),
('1011','Baby Plum Tree','p-3','220','trends','101'),
('1012','Hooded Bomber Jacket','p-4','899','trends','101'),
('1013','Hourglass flare Jeans','p-5','799','trends','101'),
('1014','Floral Sleeve Shirt','p-6','399','trends','101'),
('1015','Flippy Mini Dress','p-7','499','trends','101'),
('1016','Cargo track Pants','p-8','999','trends','101'),

('1017','Ripped Denim Jeans','w-1','399','womens','101'),
('1018','Trendy Prom Dress','w-2','649','womens','101'),
('1019','Jeans In White Denim','w-3','599','womens','101'),
('1020','Carole Eden Beige Tee','w-4','499','womens','101'),
('1021','Stretched Corduroy Outfit','w-5','259','womens','101'),
('1022','Rita Yosemite Tee','w-6','399','womens','101'),
('1023','"Worst-Behavior" Sweater','w-7','699','womens','101'),
('1024','Women Casual Shirt','w-8','599','womens','101'),

('1025','Off Shoulder Button','k-1','499','kids','101'),
('1026','Girls Top','feaure-c','599','kids','101'),
('1027','Yellow Seersucker dress','k-3','499','kids','101'),
('1028','Kids Boy Fashion','k-4','599','kids','101'),
('1029','H&M Fashion','k-5','349','kids','101'),
('1030','Maks el niño que','k-6','599','kids','101'),
('1031','Lookbook Johnny','k-7','449','kids','101'),
('1032','Robot Jersey Tee','k-8','499','kids','101'),

('1033','Lucuna Off-Shoulder Dress','d-1','499','dresses','101'),
('1034','Women\'s Wrap Dress','d-2','599','dresses','101'),
('1035','Waist Pleat Royal Dress','d-3','499','dresses','101'),
('1036','Floral-print Spaghetti Dress','d-4','599','dresses','101'),
('1037','Chiffon Dress New','d-5','349','dresses','101'),
('1038','High Slit Maxi Dress','feature-b','599','dresses','101'),
('1039','Dark Green Dress','d-7','449','dresses','101'),
('1040','Venda de Vestidos','d-8','499','dresses','101'),

('1041','Red-dotted Long Sleeve','s-1','599','shirts','101'),
('1042','Black Symbian Suit','s-2','799','shirts','101'),
('1043','Stripe Long Sleeve','m-24','599','shirts','101'),
('1044','Straight-Line print sleeve','s-4','599','shirts','101'),
('1045','Dotted Semi-Fit Long Sleeve','s-5','399','shirts','101'),
('1046','Stylish Blue Polo','m-21','399','shirts','101'),
('1047','Semi-fit Shirt','s-7','299','shirts','101'),
('1048','Stylized Oversized T-shirt','s-8','299','shirts','101'),

('1049','Leather Jacket Design','j-1','599','jackets','101'),
('1050','Korean Style Jacket','j-2','799','jackets','101'),
('1051','Designer Jacket','j-3','849','jackets','101'),
('1052','Green Army Dress Jacket','j-4','599','jackets','101'),
('1053','Waterproof Grey Jacket','j-5','390','jackets','101'),
('1054','Funny Patchwork Double Jacket','j-6','599','jackets','101'),
('1055','Faux Twinset Hoodie','j-7','699','jackets','101'),
('1056','Patchwork Hoodie','j-8','969','jackets','101'),

('1057','Jayden Skinny Pants','pp-1','799','pants','101'),
('1058','Plus Size Jeans','pp-2','499','pants','101'),
('1059','Spring Men Fashion','pp-3','499','pants','101'),
('1060','Black Cargo Pants','pp-4','799','pants','101'),
('1061','Fashion Breathing Pants','pp-5','399','pants','101'),
('1062','Elastic Waist Grid,','k-15','499','pants','101'),
('1063','Dark Greenmen Cargo Pants','m-23','699','pants','101'),
('1064','Short and Thick Legs','pp-8','499','pants','101');