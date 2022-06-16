<?php
    if($_SERVER['REQUEST_METHOD'] == "POST"){
        require "DBConnection.php";

        $sql = "UPDATE `shoes` SET `img` = ?, `brand` = ?, `model` = ?, `stock` =?, `price` = ?  WHERE `id` = ?;";

        $stmt = $conn->prepare($sql);

        if($stmt){
            $in_id = intval($_POST['in_id']);
            $in_stock = intval($_POST['in_stock']);

            $stmt -> bind_param("sssisi", $_POST['in_image'], $_POST['in_brand'], $_POST['in_model'], $in_stock, $_POST['in_price'], $in_id);

            if($stmt->execute()){
                echo "Updated record with ID: " . $_POST['in_id'];
            }else echo "Error updating record: " . $_POST['in_id'] . "to table: ". $stmt->error;

        }else echo "Unable to prepare statement: " . $conn->error;

        $conn->close();

    }

    header("Location: view.php");