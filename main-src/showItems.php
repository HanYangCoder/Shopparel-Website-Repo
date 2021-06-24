<?php
    session_start();
    require('db_connection.php');

    $category = "";
    $numberOfRows;
    
    if($category != "")
    {
        
    }

    function showItemsInCategory($numberOfRows){
        
        // $conn undefined variable, search results point to variable not
        // in scope, will look more into it later
        $showProductsDbSql = $conn->prepare ("Select * from productsDB");
        $showProductsDbSql->execute();
        $showProductsDb = $showProductsDbSql->fetchAll();
    }

?>