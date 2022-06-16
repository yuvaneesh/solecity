<?php
    $username = $_POST['username'];
    $password = $_POST['password'];
    $name = $_POST['name'];
   
    // Database connection
    $conn = new mysqli('localhost','root','','solecity');
    if($conn->connect_error){
        echo "$conn->connect_error";
        die("Connection Failed : ". $conn->connect_error);
    } else {
        $stmt = $conn->prepare("insert into staff(username, password, name) values(?, ?, ?)");
        $stmt->bind_param("sss", $username, $password, $name);
        $execval = $stmt->execute();
        echo $execval;
        echo "Added Successfully...";
        $stmt->close();
        $conn->close();
    }
?>