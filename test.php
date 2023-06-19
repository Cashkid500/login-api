<?php
    include "db_conn.php";
    $pass = $_GET['pass'];

    $password_hash = password_hash($pass, PASSWORD_BCRYPT);

    if (password_verify($pass, $password_hash)) {
        echo "Logged in successfully!";
    } else {
        echo "Incorrect Username or Password";   
    }
?>