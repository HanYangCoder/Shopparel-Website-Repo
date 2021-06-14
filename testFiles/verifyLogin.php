<?php
    require ("db_connection.php");
    $userID = $_GET['userID'];  // passed from index.php
    $password = $_GET['password'];  // also passed from index.php

    // changed username to userID because we'll be using numbers
    // userDB is table of users from the main shopping database
    $usersql = $conn->prepare ("Select * from userDB where userID = '$userID' AND password = '$password'");
    $usersql->execute();

    if($user = $usersql->fetch()) {

        $id = $user['userID'];
        echo"
            <script>
                alert ('WELCOME VALUED SHOPPER!');
            </script>
        ";

        header ("Location: main-src/index.php");
    }
    
    else{
        echo"
            <script>
                alert ('Invalid username or password, please try again.');
            </script>
        ";
    
        echo"
            <script>
                window.location.href = 'main-src/index.php';
            </script>
        ";
      }
?>