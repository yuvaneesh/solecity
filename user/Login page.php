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
        <link rel="stylesheet" href="CSS/loginpage.css">

        <!--ICONS-->
        <script src="https://kit.fontawesome.com/b42d0e65f9.js" crossorigin="anonymous"></script>

        <!--BOX ICONS-->
        <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
        
        <title>SOLECITY - Login Page</title>
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

        
        
        <!--==== LOGIN FORM ====-->   
        <div class="container">

            <div class="panels__container">
                <div class="panel">
                    <div class="panel__content">

                        <h3>New here ?</h3>
                        <p>Sign up today!</p>
                        <br/>
                        <a href="Sign up page.php">
                            <button class="signup__button transparent">Sign up</button>
                        </a>

                        <br/>

                        <p class="social__text">Or Login here if you are an  <a href="../login.php">
                        <button class="signup__button transparent"> Admin</button>
                        </a></p>  

                        <p class="social__text">Or Login here if you are an  <a href="../stafflogin.php">
                        <button class="signup__button transparent"> Staff</button>
                        </a></p>  



                    </div>
                    
                    <br/>
                    <br/>
                    <br/>
                    <br/>
                    <img src="img/shoe.png" class="image" alt="shoe" />
                </div>
            </div>

            
            <div class="login__container">

                <form action="#" class="lognin__form">

                    <h2 class="title">Login</h2>
                            
                    <div class="input__field">
                        <i class="fas fa-user"></i>
                        <input type="text" placeholder="Username" />
                    </div>
                            
                    <div class="input__field">
                        <i class="fas fa-lock"></i>
                        <input type="password" placeholder="Password" />
                    </div>

                    <input type="submit" value="Login" class="login__button" />
                    <p class="social__text">Or Login with social platforms</p>
                        
                    <div class="social__media">
                        <a href="https://www.facebook.com/" class="social__icon">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                                
                        <a href="https://twitter.com/login?lang=en" class="social__icon">
                            <i class="fab fa-twitter"></i>
                        </a>

                        <a href="https://accounts.google.com/signin/v2/identifier?hl=en&continue=https%3A%2F%2Fwww.google.com%2Fwebhp%3Fauthuser%3D0&flowName=GlifWebSignIn&flowEntry=AddSession" class="social__icon">
                            <i class="fab fa-google"></i>
                        </a>

                        <a href="https://www.linkedin.com/login" class="social__icon">
                            <i class="fab fa-linkedin-in"></i>
                        </a>
                    </div>

                    <br/><br/><br/><br/>
                    
                </form>
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




        <!--==== MAIN JS ====-->
        <script src="JS/cart.js"></script>
    </body>

</html>