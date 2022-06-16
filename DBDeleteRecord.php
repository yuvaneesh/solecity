<?php
    if(isset($_GET['id'])){
        require "DBConnection.php";

        $sql = "DELETE FROM `shoes` WHERE `id` =?;";

        $stmt = $conn->prepare($sql);

        if($stmt){
            $stmt->bind_param("i", $_GET['id']);

            if($stmt->execute()){

            }else echo "Unable to delete record #". $_GET['id']. ": ". $stmt->error;
        }else echo "Unable to prepare statement: ". $conn->error;
    }

    header("refresh:1; url=view.php");