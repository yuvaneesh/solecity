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
	require "DBConnection.php";
?>


<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale= 1.0">

		<!--CSS -->
		<link rel="stylesheet" href="CSS/view.css">
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


		<!-- VIEW -->
			
		<div class="catalog__heading">
			<h1 class="heading__text">Update Stock</h1>
		</div>
		<br/>
		
		<table>
			<thead>
				<tr>
					<th>ID</th>
					<th>Image</th>
					<th>Brand</th>
					<th>Model</th>
					<th>Stock</th>
					<th>Price</th>
					<th>Actions</th>
				</tr>
			</thead>

			<tbody>
				<?php
				$sql = "SELECT * FROM `shoes`;";

				$sql_run = $conn->query($sql);

				if($sql_run) {	
					if($sql_run->num_rows > 0) {	
						while($row = $sql_run->fetch_assoc()) {
							?>
				<tr>
					<td><?= $row['id']; ?></td>
					<td><img src="<?= $row['img']; ?>" alt="shoes" width="100" height="100"></td>
					<td><?= $row['brand']; ?></td>
					<td><?= $row['model']; ?></td>
					<td><?= $row['stock']; ?></td>
					<td><?= $row['price']; ?></td>

					<td>
						<button class="upd__button" onclick="document.location.href = 'insert.php?id=<?= $row['id']; ?>'"><span>Update</span></button>
					</td>
				</tr>
				
				
				<?php
						}
					} else {
						echo "No table rows found.";
						?>
				<tr>
					<td colspan="7">No records found.</td>
				</tr>
				<?php
					}
				} else {
				?>
				<tr>
					<td colspan="7">Error retrieving table rows: <?= $conn->error; ?></td>
				</tr>
				<?php
				}
				?>

			</tbody>
		</table>
		<br/><br/><br/><br/>



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





		<script src="main.js"></script>
	</body>

</html>

