<?php
	require "../DBConnection.php";
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale= 1.0">

        <!--CSS-->
        <link rel="stylesheet" href="CSS/index.css">
        <link rel="stylesheet" href="CSS/cartpage.css">

        <!--BOX ICONS-->
        <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
        <link href="https://unpkg.com/ionicons@4.5.10-0/dist/css/ionicons.min.css" rel="stylesheet">
        
        <title>SOLECITY - Shopping Cart</title>
    </head>
    
    <body>

        <!--==== HEADER ====-->
        <header class="header1">
            <div class="bd-grid">
                <nav class="topnav">
                    
                    <a href="Home page.php" class="nav__logo">SOLECITY</a>
                        
                    <div class="topnav__right">
                        
                        <a href="Home page.php" class="nav__link">Home</a>
                        <a href="Home page.php#collection" class="nav__link">Collection</a>
                        <a href="Catalog page.php" class="nav__link">Catalog</a>
                        <a href="Login page.php" class="nav__link">Login/Sign up</a>
                        <a href="Cart page.php">
                            <div class="cart">
                                <i class='bx bx-shopping-bag'></i><span>0</span>
                            </div>
                        </a>
                        
                    </div>

                </nav>
            </div>
        </header>
        <br/>
        <br/>


        <!--==== SHOPPING CART ====-->
        <div class="cart__container"> 
            <div class="products-container">
                <div class="product-header">
                    <h5 class="product-title">PRODUCT</h5>
                    <h5 class="price">PRICE</h5>
                    <h5 class="quantity">QUANTITY</h5>
                    <h5 class="total">TOTAL</h5>
                </div>
                
                <div class="products"></div>
            
            </div>
            
            <div>
                <button onclick="document.location='Checkout page.php'" class="common-btn">Checkout</button>
            </div>
        </div>
        

        <!--====FOOTER====-->
        <br/>
        <br/>
        <footer>
            <div class="footer__container bd-grid">
                <div class="footer__box">
                    <h3 class="footer__title">SOLECITY</h3>
                    <p class="footer__description">Founded in 2020. Solecity offers a variety of the latest sneakers, 
                        not only the trendiest but also the real and finest quality. </p>
                </div>

                <div class="footer__box">
                    <h3 class="footer__title">EXPLORE</h3>
                    <ul>
                        <li><a href="Home page.php" class="footer__link">Home</a></li>
                        <li><a href="Home page.php#collection" class="footer__link">Collection</a></li>
                        <li><a href="Catalog page.php" class="footer__link">Catalog</a></li>
                        <li><a href="Cart page.php" class="footer__link">Cart</a></li>
                    </ul>
                </div>

                <div class="footer__box">
                    <h3 class="footer__title">SUPPORT</h3>
                    <ul>
                        <li><a href="#" class="footer__link">Product Help</a></li>
                        <li><a href="#" class="footer__link">Customer Care</a></li>
                        <li><a href="#" class="footer__link">Authorized service</a></li>
                    </ul>
                </div>

                <div class="footer__box">
                    <h3 class="footer__title">CONTACT US</h3>
                    <ul>
                        <li><a href="#" class="footer__link">solecity@gmail.com</a></li>
                        <li><a href="#" class="footer__link">+6012-3456789</a></li>
                        <li><a href="#" class="footer__link">Broome St, NY 10002,California, USA.</a></li>
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
        



        <!--==== JS ====-->
        <script src="JS/cart.js"></script>
        <script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>
    </body>
</html>

