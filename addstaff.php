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
		require "staffDBConnection.php";
	
		$sql = "SELECT * FROM `staff` WHERE `id` = " . $_GET['id'] . ";";

		$sql_run = $conn->query($sql);

		if($sql_run){
			if($sql_run->num_rows > 0){
				$record = $sql_run->fetch_assoc();

			}else echo "No record found for ID: " . $_GET['id'];
		}else echo "Error retrieving record: " . $conn->error;


		$title = "Update Stock";
		$form_action = "DBUpdateRecord.php";
	}else{
		$title = "Add Staff";
		$form_action = "DBAddStaff.php";
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
				
					<input type="hidden" name="ID" value="<?=$_GET['id']; ?>">

				<?php
				endif;
				?>

				<label for="Username">Username</label>
				<input type="text" name="Username" id="Username" placeholder="Username" autocomplete="off" <?php
					if (isset($_GET['id'])){
						?> value="<?= $record['Username'];?>"<?php
					}
					?>>

				<label for="Password">Password</label>
				<input type="text" name="Password" id="Password" placeholder="Password" autocomplete="off" <?php
					if (isset($_GET['Password'])){
						?> value="<?= $record['Password'];?>"<?php
					}
					?>>

				<label for="Name">Name</label>
				<input type="text" name="Name" id="Name" placeholder="Name" autocomplete="off" <?php
					if (isset($_GET['name'])){
						?> value="<?= $record['name'];?>"<?php
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