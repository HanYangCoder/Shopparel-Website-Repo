<?php
    session_start();
    require('db_connection.php');

    // $category = "";
    // $numberOfRows;
    
    // if($category != "")
    // {
        
    // }

    function showItemsInCategory(/*$numberOfRows, $category*/){
        
        // $conn undefined variable, search results point to variable not
        // in scope, will look more into it later
        // global $conn;
        // $showProductsDbSql = $conn->prepare ("Select * from productsDB WHERE category = '$category';");
        // $showProductsDbSql->execute();
        // $showProductsDb = $showProductsDbSql->fetchAll();

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
        echo <<<HTML
            <h1>HEREDOC TEST WORKS</h1>
        HTML;
        //return "Hello world";
    }

?>