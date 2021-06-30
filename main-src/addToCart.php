<?php
    session_start();
    require ("db_connection.php");
    
    if(isset($_SESSION['userID']))
    {
        $userID = $_SESSION['userID'];
        $productID = $_GET['id'];
        $amountPurchased = $_GET['amountPurchased'];

        $productsql = $conn->prepare ("Select * from productsDB where productID='$productID'");
        $productsql->execute();
        $productSelected = $productsql->fetch();

        $price = $productSelected['price'];
        $totalPrice = $amountPurchased * $price;
        $dateOrdered = date('Y-m-d H:i:s');

        $sqlstr = 'INSERT INTO shoppingCartDB (productID, userID, price, amountPurchased, totalPrice, dateOrdered) 
        VALUES (:productID, :userID, :price, :amountPurchased, :totalPrice, :dateOrdered)';

        $saveUser = $conn->prepare($sqlstr);

        $saveUser->bindparam(':productID', $productID);
        $saveUser->bindparam(':userID', $userID);
        $saveUser->bindparam(':price', $price);
        $saveUser->bindparam(':amountPurchased', $amountPurchased);
        $saveUser->bindparam(':totalPrice', $totalPrice);
        $saveUser->bindparam(':dateOrdered', $dateOrdered);
        
        $saveUser->execute();

        echo "
            <script>
            alert ('Added to cart');
            </script>
        ";
        header ("Location: user-profile.php");
    }

    else{
        echo "
            <script>
            alert ('Added to cart');
            </script>
        ";
        header("Location: " . $_SERVER["HTTP_REFERER"]);
    }
    
?>