<?php
session_start();
        if(isset($_SESSION['name']))
        {
        	
        }
        else
        {
        	header('location: login.php');
        }

?>


<?php
	if(isset($_GET['id'])){
		require "DBConnection.php";
	
		$sql = "SELECT * FROM `shoes` WHERE `id` = " . $_GET['id'] . ";";

		$sql_run = $conn->query($sql);

		if($sql_run){
			if($sql_run->num_rows > 0){
				$record = $sql_run->fetch_assoc();

			}else echo "No record found for ID: " . $_GET['id'];
		}else echo "Error retrieving record: " . $conn->error;


		$title = "Update Stock";
		$form_action = "DBUpdateRecord.php";
	}else{
		$title = "Insert New Products";
		$form_action = "DBInsertRecord.php";
	}
?>




<!DOCTYPE html>
<html lang="en">

	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title><?= $title;?></title>

		<!--CSS -->
		<link rel="stylesheet" href="CSS/insert.css">
		<link rel="stylesheet" href="CSS/index1.css">
		
		<!--BOX ICONS-->
		<link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
		<link href="https://unpkg.com/ionicons@4.5.10-0/dist/css/ionicons.min.css" rel="stylesheet">
	</head>

	<body>

		<!--==== HEADER ====-->
        <header class="header1">
            <div class="bd-grid">
                <nav class="topnav">
                    
                    <a href="homepage.php" class="nav__logo">SOLECITY</a>
                        
                    <div class="topnav__right">
					    <a href="./user/Home page.php" class="nav__link">Customer Home Page</a>
                        <a href="insert.php" class="nav__link">Add</a>
                        <a href="update.php" class="nav__link">Update</a>
                        <a href="delete.php" class="nav__link">Delete</a>
                        <a href="view.php" class="nav__link">View</a>
                        <a href="logout.php" class="nav__link">Log out</a>
                        </a>
                        
                    </div>

                </nav>
            </div>
        </header>
        <br/>
		<br/>
		<br/>
		<br/>


		<!--==== INSERT FORM ====-->
		<h1><?= $title;?></h1>

		<div id="form">
			<form action="<?= $form_action;?>" method="post" autocomplete="nope">
				<?php
				
				if(isset($_GET['id'])) :
					?>
					<p> ID: <?= $_GET['id']; ?></p>
				
					<input type="hidden" name="in_id" value="<?=$_GET['id']; ?>">

				<?php
				endif;
				?>

				
				<label for=" in_img">Image</label>
				<i class='bx bxs-image-add' ></i>
				<input type="text" name="in_image" id="in_image" placeholder="Insert url here" autocomplete="off" <?php
					if (isset($_GET['id'])){
						?> value="<?= $record['img'];?>"<?php
					}
					?>>


				<label for="in_brand">Brand</label>
				<i class='bx bxs-purchase-tag' ></i>
				<input type="text" name="in_brand" id="in_brand" placeholder="Brand" autocomplete="off" <?php
					if (isset($_GET['id'])){
						?> value="<?= $record['brand'];?>"<?php
					}
					?>>
                
				<label for="in_model">Model</label>
				<i class='bx bx-closet'></i>
				<input type="text" name="in_model" id="in_model" placeholder="Model" autocomplete="off" <?php
					if (isset($_GET['id'])){
						?> value="<?= $record['model'];?>"<?php
					}
					?>>

				<label for=" in_stock">Stock</label>
				<i class='bx bxs-package'></i>
				<input type="text" name="in_stock" id="in_stock" placeholder="Stock" autocomplete="off" <?php
					if (isset($_GET['id'])){
						?> value="<?= $record['stock'];?>"<?php
					}
					?>>
				
				
				<label for="in_price">Price</label>
				<i class='bx bxs-coin-stack'></i>
				<input type="text" step="any" value="0.00" min="0.00" name="in_price" id="in_price" placeholder="Price" autocomplete="off" <?php
					if (isset($_GET['id'])){
						?> value="<?= $record['price'];?>"<?php
					}
					?>>

                  
				<br><br>

				<input type="submit" value="Submit">
				<input type="reset" value="Reset">
			</form>
		</div>

		<br><br><br><br><br><br>
		



		<!--====FOOTER====-->
        <br/>
        <br/>
        <footer>
            <div class="footer__container bd-grid">
                <div class="footer__box">
                    <h3 class="footer__title">SOLECITY</h3>
                    <p class="footer__description">Welcome, admin</p>
                </div>

                <div class="footer__box">
                    <h3 class="footer__title">EXPLORE</h3>
                    <ul>
                        <li><a href="insert.php" class="footer__link">Add</a></li>
                        <li><a href="update.php" class="footer__link">Update</a></li>
                        <li><a href="delete.php" class="footer__link">Delete</a></li>
                        <li><a href="view.php" class="footer__link">View</a></li>
                    </ul>
                </div>

                <div class="footer__box">
                    <a href="" class="footer__social"><i class='bx bxl-facebook'></i></a>
                    <a href="" class="footer__social"><i class='bx bxl-instagram'></i></a>
                    <a href="" class="footer__social"><i class='bx bxl-twitter'></i></a>
                    <a href="" class="footer__social"><i class='bx bxl-google'></i></a>
                </div>

            </div>

            <p class="footer__copy">&#169; 2020 Solecity. All rights reserved</p>
		</footer>
		
		<script src="JS/inputformat.js"></script>
	</body>

</html>