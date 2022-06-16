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

<?php
    require "staffDBConnection.php";
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale= 1.0">

        <!--CSS-->
        <link rel="stylesheet" href="CSS/index1.css">
        <link rel="stylesheet" href="CSS/home.css">

        <!--BOX ICONS-->
        <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
        
        <title>SOLECITY - Staff Page</title>
    </head>
    
    <body>

        <!--==== HEADER ====-->
        <header class="header1">
            <div class="bd-grid">
                <nav class="topnav">
                    
                    <a href="staffhomepage.php" class="nav__logo">SOLECITY</a>
                        
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
            
    

        <!--==== SIDE NAVBAR ====-->
        <div class="sidebar">
            <br/><br/><br/>
            <div class="card">
                <img src="https://img.icons8.com/bubbles/2x/user-male.png" alt="admin">
                <h1>Samearr Nair</h1>
                <p class="card__title">Staff of</p>
                <p>Solecity</p>
                
            </div>
            <hr><br/>

            <p class="sidebar__title">DASHBOARD</p>
            <a href="insert.php">Add</a>
            <a href="update.php">Update</a>
            <a href="delete.php">Delete</a>
            <a href="view.php">View</a>
            <a href="logout.php">Log out</a>
            <br/>

        </div>



    
        <!--====FOOTER====-->
        <br/>
        <br/>
        <br/>
        <br/>
        <br/>
        <br/>
        <br/>
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


        <!--==== MAIN JS ====-->
        <script src="JS/main.js"></script>
    </body>

</html>