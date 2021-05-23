<?php 
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