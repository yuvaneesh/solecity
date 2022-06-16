<?php
    if($_SERVER['REQUEST_METHOD'] == "POST"){
        require "DBConnection.php";

        $sql = "INSERT INTO `shoes` (`img`, `brand`, `model`, `stock`, `price` ) VALUES (?, ?, ?, ?, ?);";

        $stmt = $conn->prepare($sql);

        if($stmt){
            $in_price = $_POST["in_price"];
            $in_stock = intval($_POST["in_stock"]);

            $stmt -> bind_param("sssis",$_POST['in_image'], $_POST['in_brand'], $_POST['in_model'], $in_stock, $in_price);

            if($stmt->execute()){
                
            }else echo "Error adding record to table: ". $stmt->error;

        }else echo "Unable to prepare statement: " . $conn->error;

        $conn->close();

    }

    header("Location: view.php");
