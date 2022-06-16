<?php
    require "DBConnection.php";


    $sql = "CREATE DATABASE solecity";
    if ($conn->query($sql) === TRUE) {
        echo "Database created successfully";
    } else {
        echo "Error creating database: " . $conn->error;
    }

    $conn->close();
?>