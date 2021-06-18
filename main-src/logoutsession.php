<?php
    session_unset();

    echo "Session has logged out.";
    print_r($_SESSION["userID"]);
?>