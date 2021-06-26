<?php
    session_start();
    require('db_connection.php');

    function showItemsInCategory($category){
        $test = "This is a variable";
        
        // set $conn to global to be recognized as connection to database
        global $conn;
        $showProductsDbSql = $conn->prepare ("Select * from productsDB WHERE category = '$category';");
        $showProductsDbSql->execute();
        $showProductsDb = $showProductsDbSql->fetchAll();

        /**
         * Used PHP heredoc here to try and use this 
         * to try and make a reusable function that will
         * show items under a category in a webpage
         * like mens' or womens' with number of rows and
         * category of item to be shows as arguments, 
         * currently I can output HTML with heredoc 
         * back to another php file where it was invoked
         * but haven't applied it yet, will try on men2.php
         * using men.php code as proof of concept
         */

        foreach($showProductsDb as $productsList):

            // currently selected product variables
            $productName = $productsList['productName'];
            $imgLocation = "images/" . $productsList['imageCode'] . ".png";
            $price = $productsList['price'];
            $productDetailsRedirect = "product-details.php?id=" . $productsList['productID'];

            echo <<<HTML
            <!-- <h1>HEREDOC TEST WORKS</h1> -->
            <div class="product-box">

             <!--img-->
             <div class="product-img">
                  <!--add-cart-->
             <a href=$productDetailsRedirect class="add-cart">
                 <i class="fas fa-shopping-cart"></i>
             </a>
             <img src=$imgLocation />
             </div>

             <!--details-->
             <div class="product-details">
                 <a href=$productDetailsRedirect class="p-name">$productName</a>
                 <span class="p-price">₱$price</span>
             </div>
            </div>
        HTML;

        endforeach;
    }

?>