<?php 
// establishes MySQL database connection with your PHP project on XAMPP
// if database connection is not working, try changing serverName to localhost
  $serverName = 'myvirthost';   
  $userName = 'root';
  $password = '';
  $database = 'testDB';

  try {
    $conn = new PDO('mysql:host=' . $serverName . '; dbname=' . $database, $userName, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  } catch (PDOException $e) {
    echo 'Error: ' . $e->getMessage();
  }
?>