<?php
	require "../DBConnection.php";
?>



<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        
        <!--CSS-->
        <link rel="stylesheet" href="CSS/checkout.css">
        <link rel="stylesheet" href="CSS/index.css">


        <!--BOX ICONS-->
        <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
        <link href="https://unpkg.com/ionicons@4.5.10-0/dist/css/ionicons.min.css" rel="stylesheet">

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



        <!--====CHECKOUT PAGE====-->
        <h2>Checkout</h2>
        <p>Please enter your personal details below:</p>
        <div class="row">
            <div class="col-75">
                <div class="container">
                    <form action="#">
      
                        <div class="row">

                            <div class="col-50">

                                <h3>Billing Address</h3>
                                <label for="fname"><i class="fa fa-user"></i> Full Name</label>
                                <input type="text" id="fname" name="firstname">

                                <label for="email"><i class="fa fa-envelope"></i> Email</label>
                                <input type="email" id="email" name="email">

                                <label for="adr"><i class="fa fa-address-card-o"></i> Address</label>
                                <input type="text" id="adr" name="address">

                                <label for="city"><i class="fa fa-institution"></i> City</label>
                                <input type="text" id="city" name="city">

                                <div class="row">
                                    <div class="col-50">
                                        <label for="state">State</label>
                                        <input type="text" id="state" name="state" >
                                    </div>
              
                                    <div class="col-50">
                                        <label for="zip">Postcode</label>
                                        <input type="text" id="zip" name="zip">
                                    </div>
                                </div>

                            </div>

                            <div class="col-50">
                                <h3>Payment</h3>
                                <label for="fname">Accepted Cards</label>
                                    
                                <div class="icon-container">
                                    <i class="fa fa-cc-visa navy"></i>
                                    <i class="fa fa-cc-amex blue" ></i>
                                    <i class="fa fa-cc-mastercard red" ></i>
                                    <i class="fa fa-cc-discover orange" ></i>
                                </div>

                                <label for="cname">Name on Card</label>
                                <input type="text" id="cname" name="cardname">

                                <label for="ccnum">Credit card number</label>
                                <input type="text" id="ccnum" name="cardnumber" placeholder="1111-2222-3333-4444">

                                <label for="expmonth">Exp Month</label>
                                    <select name="expmonth">
                                        <option value="01">January</option>
                                        <option value="02">February</option>
                                        <option value="03">March</option>
                                        <option value="04">April</option>
                                        <option value="05">May</option>
                                        <option value="06">June</option>
                                        <option value="07">July</option>
                                        <option value="08">August</option>
                                        <option value="09">September</option>
                                        <option value="10">October</option>
                                        <option value="11">November</option>
                                        <option value="12">December</option>
                                    </select> 
            
                                <div class="row">
                                    <div class="col-50">
                                        <label for="expyear">Exp Year</label>
                                        <select name="expyear">
                                            <option value="2002">2030</option>
                                            <option value="2001">2029</option>
                                            <option value="2000">2028</option>
                                            <option value="1999">2027</option>
                                            <option value="1998">2026</option>
                                            <option value="1997">2025</option>
                                            <option value="1996">2024</option>
                                            <option value="1995">2023</option>
                                            <option value="1994">2022</option>
                                            <option value="1993">2021</option>
                                            <option value="1992">2020</option>
                                       </select>
                                    </div>
              
                                    <div class="col-50">
                                        <label for="cvv">CVV</label>
                                        <input type="password" id="cvv" name="cvv">
                                    </div>
                                </div>
                            </div>
          
                        </div>
                        
                        <label>
                            <input type="checkbox" checked="checked" name="sameadr"> Shipping address same as billing
                        </label>

                        <br>
                        <br>

                        <input type="submit" value="Continue to checkout" class="btn">
                    </form>
                </div>
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



        <script src="JS/cart.js"></script>
    </body>
</html>
