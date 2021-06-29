<?php
    require ("db_connection.php");

    $sqlstr = 'INSERT INTO userDB (firstName, lastName, password, contactNumber, email, address) 
      VALUES (:firstName, :lastName, :password, :contactNumber, :email, :address)';

    $saveUser = $conn->prepare($sqlstr);

    $saveUser->bindparam(':firstName', $_GET['firstName']);
    $saveUser->bindparam(':lastName', $_GET['lastName']);
    $saveUser->bindparam(':password', $_GET['password']);
    $saveUser->bindparam(':contactNumber', $_GET['contactNumber']);
    $saveUser->bindparam(':email', $_GET['email']);
    $saveUser->bindparam(':address', $_GET['address']);
    
    $saveUser->execute();

	echo "
    <script>
      alert ('New User Added');
    </script>
    ";
    header ("Location: index.php");
?>