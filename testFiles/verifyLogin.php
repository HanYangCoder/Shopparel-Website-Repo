<?php
    require ("db_connection.php");
    $username = $_GET['username'];  // passed from index.php
    $password = $_GET['password'];  // also passed from index.php

    // userDB is table of users from the main shopping database
    $usersql = $conn->prepare ("Select * from userDB where userID = '$username' AND password = '$password'");
    $usersql->execute();

    if($user = $usersql->fetch()) {

        $id = $user['userID'];
        echo"
            <script>
                alert ('WELCOME FELLOW SHOPPER!');
            </script>
        ";

        header ("Location: home.php");
    }
    
    else{
        echo"
            <script>
                alert ('INVALID USER');
            </script>
        ";
    
        echo"
            <script>
                window.location.href = 'index.php';
            </script>
        ";
      }
?>