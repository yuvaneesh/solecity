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
        <link rel="stylesheet" href="CSS/homepage.css">
        

        <!--BOX ICONS-->
        <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
        
        <title>SOLECITY - Home Page</title>
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

        

        <!--====HOME====-->
        <section class = "video" id="home">
            <div class = "home__container bd-grid">
                <div class="video-container">
                    <div class="color-overlay"></div>
                    <video autoplay loop muted>
                        <source src="img/videoplayback.mp4" type="video/mp4">
                    </video>
                </div>
                
                <div class = "home__data">
                    <span class = "home__new">New in</span>
                    <h1 class ="home__title">ADIDAS <br> ULTRABOOST</h1>
                    <p class = "home__description">Explore the new collection of Adidas sneakers</p>
                    <a href="Catalog page.php" class="home__button">Explore now</a>
                </div>
                
            </div> 
            
        </section>
        <br/><br/><br/><br/>
    
       

        <!--==== YEAR END SALES  ====-->
        <section>
            <p class="sales__title">YEAR END SALES</p>
            <p class="sales__descriptions">Enjoy Great deals and discounts for a new collection of sneakers.</p>
            <br/><br/><br/>


            <div class="sales__container">
                <div class="pic__1">
                    <img src="img/nikeimg4.jpg" alt="nike">
                    <br/>
                    <a href="Catalog page.php" class="sales__button">Shop now</a>
                  
                </div>
                
                <div class="pic__2">
                    <img src="img/adidasimg5.jpg" alt="adidas">
                    <br/>
                    <a href="Catalog page.php" class="sales__button">Shop now</a>
                  
                </div>
            </div>           
        </section>
        <br/><br/><br/>



       <!--==== INFO  ====-->
       <scetion class="info">
            <div class="grid-container">
                <div class="grid-item">
                    <div class="info__icon">
                        <i class='bx bxs-plane-alt'></i>
                    </div>
                    <h2>Free shipping</h2>
                    <p>Enjoy free shipping discounts on your online purchases today! </p>
                </div>
                
                <div class="grid-item">
                    <div class="info__icon">
                        <i class='bx bx-support'></i>
                    </div>
                    <h2>Customer Care</h2>
                    <p>Need help? While we’re good with smoke signals, there are simpler ways for us to get in touch!  </p>
                </div>
                
                <div class="grid-item">
                    <div class="info__icon">
                        <i class='bx bxs-credit-card'></i>
                    </div>
                    <h2>Secure Payments</h2>
                    <p>Accept all major debit & credit cards. Services is safer, faster and secure.</p>
                </div>
                
            </div>
        </scetion>
              
       
       
        <!--==== COMMING SOON  ====-->
        <section>
            <p class="soon__title">Comming soon</p>
            <br/>
            <div class="soon__container">
                

                <div class="soon__img">
                    <img src ="img/commingsoon.jpg" alt="shoes" >
                    <div class="soon__text">
                        <p>comming soon</p>
                        <h1>SUPERSTAR <br/> RUN-DMC SHOES</h1>
                        <p>A SPECIAL RUN-DMC EDITION</p>
                    </div>
                </div>
            </div>
            
        </section>
        <br/><br/><br/><br/>      


        <!--====Collection====-->
        
        <section name="collection" id="collection">
            <h1 class="collection__title">Collection's</h1><br/><br/>
            <div class="collection__container div bd-grid">
                
                
                <div class="collection__card" id="card1">
                    <div class="collection__data">
                        <h3 class="collection__name">Nike</h3>
                        <p class="collection__description">New Collection 2020</p>
                        <a href="Catalog page.php#nike" class="button-light" id="collection1">Buy Now <i class="bx bx-right-arrow-alt button-icon"></i> </a>
                    </div>

                    <a href="Catalog page.php#nike" alt="Nike">
                        <img src="img/collection1.png" alt="Nike" class="collection__img">
                    </a>
                </div>
                

                <div class="collection__card" id="card2">
                    <div class="collection__data">
                        <h3 class="collection__name">Addidas</h3>
                        <p class="collection__description">New Collection 2020</p>
                        <a href="Catalog page.php#adidas" class="button-light" id="collection2">Buy Now <i class="bx bx-right-arrow-alt button-icon"></i> </a>
                    </div>
                    
                    <a href="Catalog page.php#adidas" alt="Adidas">
                        <img src="img/collection2.png" alt="" class="collection__img">
                    </a>
                </div>
            </div>
        </section>        
        
        
        <!--===== Newsletter =====-->
        <section>
            <div class="newsletter__main">
                <div class="newsletter__img">
                    <img src="img/homeimg2.jpeg" >
                </div>

                
                <div class="newsletter__container ">
                    <div>
                        <h3 class="newsletter__title">Subscribe And Get <br> 10% OFF</h3>
                        <p class="newsletter__description">Get 10% discount for all products</p>
                    </div>

                    <form action="" class="newsletter__subscribe">
                        <input type="text" placeholder="@email.com" class="newsletter__input">
                        <a href="" class="newsletter__button">Subscribe</a>
                    </form>
                </div>

            </div>    
        </section>
        
        
        
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