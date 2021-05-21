# Shopparel E-commerce Website

**Shopparel** is a web-based E-commerce platform that we have created in compliance for our software engineeering subject.
This website will focus on allowing small-time clothes retailers to sell clothes online to other people here in the Philippines.

## Scope of the development

The development of this project will focus on being able to develop a website that would serve as a platform for people to buy and sell clothes only.
The project will only be limited to a website to be able to be target a big user base since most if not all desktop and mobile operating systems have a web browser.


## Development requirements

### Development tools and environment

Since the development of the app will be limited to using a web browser, to develop the app the contributor must at least have knowledge in HTML, CSS, and JavaScript for the client side (front-end) and PHP for the server side (back-end).
The use of MySQL and XAMPP will also be needed for the server side since this site will be probably run in a localhost and will not deployed through the web.
The website will be coded and tested through a mix of Windows 10 and Ubuntu Linux environments.

### How to run the project
To run this project, clone the repository to your local machine and start your XAMPP Apache and MySQL server and run this in the browser through localhost.

### File organizations
The starting file in the project is at index.php which will probably be the login page.
There will be an assests folder for the images and the main-src folder will contain the rest of the main project.
There is also the test folder for testing out different files/scripts than can be applied to the system.

### Database tables

Utilizing MySQL for database hosting will require a relational database model with the following databases below, the developers have decided to use this design to be able to meet the expected functionalities of the site. UserDB will have 2 types of user accounts, a buyer and a seller, you can always choose to upgrade your account if you have something to sell. Follow this database structure and you'll probably be fine, will keep updating this to keep you updated.

Note: PK = Primary Key and FK = Foreign Key

Databases and columns:
1. UserDB `(userID (PK), firstName, lastName, contactNumber, email, address, userType (Buyer/Seller))`
2. ProductsDB `(productID (PK), productName, price, stock, category, productDescription, userID (FK))`
3. AdminDB `(adminID (PK), firstName, lastName, contactNumber, email, address)`
4. ShoppingCartDB `(itemID (PK), userID (FK), productID (FK), price, amount, partialSummary)`
5. SalesListDB `(soldItemCode (PK), invoiceNumber, productID (FK), amount, price, totalPurchasePrice, userID - Buyer (FK), userID - Seller (FK))`

### Website module components

The website development will be divided into the folowing 14 modules according to this sequence below to accomodate the limited time period which will probably be due by the end of June 2021 which is just a little over 2 months at the time of this writing.

1. Login module
2. Display items
3. Sign up module
4. View more details
5. View my account
6. Virtual shopping cart
7. Login to admin
8. Admin dashboard (sales report and user database)
9. Create an admin account
10. Navigate to different stores
11. Filter choices
12. Checkout, vouchers, and discount
13. Upgrade account to seller
14. Upload a product
