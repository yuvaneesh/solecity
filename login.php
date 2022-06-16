<?php
	session_start();

	if(isset($_SESSION['name'])) header("Location: homepage.php");
	

?>


<!DOCTYPE html>
<html lang="en">

	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:400,700">
		<link rel="stylesheet" href="CSS/login.css">
		<title>Manager Login</title>

	</head>

	<body>
		<div id="login">
			<h1 class="title">Login now</h1>

			<?php
				if(isset($_GET['invalid'])):
					?>
			<script>
       			alert('Invalid Login Details.');
    		</script>

			<?php
				endif;
			?>


			<form action="auth.php" method="post" class="form-login" autocomplete="nope">
				<span class="fontawesome-user"></span>
				<input type="text" name="username" id="username" class="user" placeholder="Username" autocomplete="false">

				<span class="fontawesome-lock"></span>
				<input type="password" name="password" id="password" class="pass" placeholder="Password" autocomplete="false">

				<br>
				<input type="submit" value="Login" name="login"><br/><br/>
				<input type="reset" value="Reset" name="reset"><br/><br/><br/>
			
			</form>
				<button onclick="window.location.href='user/Home page.php';">Back</button>
				<br/><br/>

			
		</div>

	</body>

</html>
