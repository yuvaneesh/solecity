<?php
	require "staffDBConnection.php";
?>

<?php
session_start();
        if(isset($_SESSION['name']))
        {
        	
        }
        else
        {
        	header('location: stafflogin.php');
        }

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
                        <a href="homepage.php">General Report</a>
                        <a href="homepage.php#salesReport">Sales Report</a>
                        <a href="homepage.php#map">Map</a>
                        <a href="addstaff.php">Add a Staff</a>
                        <a href="staffview.php">View Staffs</a>
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
			<h1 class="heading__text">Staff</h1>
		</div>

		<br/>
		
		<table>
			<thead>
				<tr>
					<th>ID</th>
					<th>Username</th>
					<th>Password</th>
					<th>Name</th>

				</tr>
			</thead>

			<tbody>
				<?php
				$sql = "SELECT * FROM `staff`;";

				$sql_run = $conn->query($sql);

				if($sql_run) {	
					if($sql_run->num_rows > 0) {
						while($row = $sql_run->fetch_assoc()) {
							?>
			
				<tr>
					<td><?= $row['id']; ?></td>
					<td><?= $row['username']; ?></td>
					<td><?= $row['password']; ?></td>
					<td><?= $row['name']; ?></td>
				</tr>
				
				
				<?php
						}
					} else {
						echo "No table rows found.";
						?>
				<tr>
					<td colspan="6">No records found.</td>
				</tr>

				<?php
					}
				} else {
				?>

				<tr>
					<td colspan="6">Error retrieving table rows: <?= $conn->error; ?></td>
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
                    <p class="footer__description">Welcome, Manager</p>
                </div>

                <div class="footer__box">
                    <h3 class="footer__title">EXPLORE</h3>
                    <ul>
                        <li><a href="homepage.php" class="footer__link">General Report</a></li>
                        <li><a href="homepage.php#salesReport" class="footer__link">Sales Report</a></li>
                        <li><a href="homepage.php#map" class="footer__link">Map</a></li>
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

