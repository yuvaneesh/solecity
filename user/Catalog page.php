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
        <link rel="stylesheet" href="CSS/catalogpage.css">

        <!--BOX ICONS-->
        <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
        <link href="https://unpkg.com/ionicons@4.5.10-0/dist/css/ionicons.min.css" rel="stylesheet">
        
        <title>SOLECITY - Catalog Page</title>
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



        <!--==== Popular Collection ====-->
        <section id="popular">
            <div class="catalogheading">
                <h1 class="catalogheadingtext">Popular Now</h1>
            </div>

            <div class="container">
                <div class="card">
                    <img class="images" src="img/popularimg/airdior.jpg"style="width:100%">
                    <h1>Air Dior</h1>
                    <p class="price">RM107999</p>
                    <a class="add-cart cart1" href="#."><p><button>Add to Cart</button></p></a>
                </div>
              
                <div class="card">
                    <img class="images" src="img/popularimg/aj1lightsmoke.jpg" style="width:100%">
                    <h1>Smoke Grey</h1>
                    <p class="price">RM950</p>
                    <a class="add-cart cart2" href="#."><p><button>Add to Cart</button></p></a>
                </div>
              
                <div class="card">
                    <img class="images" src="img/popularimg/aj1retrohigh.jpg" style="width:100%">
                    <h1>Retro High</h1>
                    <p class="price">RM1200</p>
                    <a class="add-cart cart3" href="#."><p><button>Add to Cart</button></p></a>
                </div>
                
                <div class="card">
                    <img class="images" src="img/popularimg/cactusjack.jpg" style="width:100%">
                    <h1>Travis Scott Low</h1>
                    <p class="price">RM2000</p>
                    <a class="add-cart cart4" href="#."><p><button>Add to Cart</button></p></a>
                </div>
                
                <div class="card">
                    <img class="images" src="img/popularimg/coverseoffwhite.jpg" style="width:100%">
                    <h1>Converse Off White</h1>
                    <p class="price">RM1299</p>
                    <a class="add-cart cart5" href="#."><p><button>Add to Cart</button></p></a>
                </div>
                
                <div class="card">
                    <img class="images" src="img/popularimg/asadi.jpg" style="width:100%">
                    <h1>Asadi</h1>
                    <p class="price">RM15</p>
                    <a class="add-cart cart6" href="#."><p><button>Add to Cart</button></p></a>
                </div>
              
                <div class="card">
                    <img class="images" src="img/popularimg/ultraboost.jpg" style="width:100%">
                    <h1>Ultraboost</h1>
                    <p class="price">RM750</p>
                    <a class="add-cart cart7" href="#."><p><button>Add to Cart</button></p></a>
                </div>    
            
                <div class="card">
                    <img class="images" src="img/popularimg/offwhitevapor.png" style="width:100%">
                    <h1>Vapormax</h1>
                    <p class="price">RM1299</p>
                    <a class="add-cart cart8" href="#."><p><button>Add to Cart</button></p></a>
                </div> 
            </div>
        </section>
          


        <!--==== Adidas Collection ====-->
        <section id="adidas">
            <div class="catalogheading">
                <h1 class="catalogheadingtext">The Adidas Collection</h1>
            </div>


            <div class="container">
                <div class="card">
                    <img class="images" src="img/Adidas/adilette.jpg"style="width:100%">
                    <h1>Adilette</h1>
                    <p class="price">RM150</p>
                    <a class="add-cart cart9" href="#."><p><button>Add to Cart</button></p></a>
                </div>
              
                <div class="card">
                    <img class="images" src="img/Adidas/deeruptrunner.jpg" alt="Denim Jeans" style="width:100%">
                    <h1>Derupt Runner</h1>
                    <p class="price">RM500</p>
                    <a class="add-cart cart10" href="#."><p><button>Add to Cart</button></p></a>
                </div>
                
                <div class="card">
                    <img class="images" src="img/Adidas/grandcourt.jpg" style="width:100%">
                    <h1>Grand Court</h1>
                    <p class="price">RM350</p>
                    <a class="add-cart cart11" href="#."><p><button>Add to Cart</button></p></a>
                </div>
                
                <div class="card">
                    <img class="images" src="img/Adidas/hurace.jpg" style="width:100%">
                    <h1>Human Race</h1>
                    <p class="price">RM699</p>
                    <a class="add-cart cart12" href="#."><p><button>Add to Cart</button></p></a>
                </div>
              
                <div class="card">
                    <img class="images" src="img/Adidas/nmdr1.jpg" style="width:100%">
                    <h1>Nmd R1</h1>
                    <p class="price">RM650</p>
                    <a class="add-cart cart13" href="#."><p><button>Add to Cart</button></p></a>
                </div>
                
                <div class="card">
                    <img class="images" src="img/Adidas/nmdr1pride.jpg" style="width:100%">
                    <h1>Nmd R1 PRIDE</h1>
                    <p class="price">RM650</p>
                    <a class="add-cart cart14" href="#."><p><button>Add to Cart</button></p></a>
                </div>
              
                <div class="card">
                    <img class="images" src="img/Adidas/stansmith.jpg" style="width:100%">
                    <h1>Stan Smith</h1>
                    <p class="price">RM355</p>
                    <a class="add-cart cart15" href="#."><p><button>Add to Cart</button></p></a>
                </div>    
            
                <div class="card">
                    <img class="images" src="img/Adidas/swiftrun.jpg" style="width:100%">
                    <h1>Swift Run</h1>
                    <p class="price">RM250</p>
                    <a class="add-cart cart16" href="#."><p><button>Add to Cart</button></p></a>
                </div> 
            </div>
        </section>
        
        
        
        
        
        <!--==== Nike Collection ====-->
        <section id="nike">
            <div class="catalogheading">
                <h1 class="catalogheadingtext">The Nike Collection</h1>
            </div>

            <div class="container">
                <div class="card">
                    <img class="images" src="img/nike/Air Force 1.jpg"style="width:100%">
                    <h1>Air Force 1</h1>
                    <p class="price">RM350</p>
                    <a class="add-cart cart17" href="#."><p><button>Add to Cart</button></p></a>
                </div>
              
                <div class="card">
                    <img class="images" src="img/nike/Air Jordan 1.jpg" style="width:100%">
                    <h1>Air Jordan 1</h1>
                    <p class="price">RM450</p>
                    <a class="add-cart cart18" href="#."><p><button>Add to Cart</button></p></a>
                </div>
                
                <div class="card">
                    <img class="images" src="img/nike/airzoom.jpg" style="width:100%">
                    <h1>Air Zoom</h1>
                    <p class="price">RM430</p>
                    <a class="add-cart cart19" href="#."><p><button>Add to Cart</button></p></a>
                </div>
                
                <div class="card">
                    <img class="images" src="img/nike/freern.jpg" style="width:100%">
                    <h1>Free Rn</h1>
                    <p class="price">RM650</p>
                    <a class="add-cart cart20" href="#."><p><button>Add to Cart</button></p></a>
                </div>
              
                <div class="card">
                    <img class="images" src="img/nike/Revolution 5.jpg" style="width:100%">
                    <h1>Revolution 5</h1>
                    <p class="price">RM500</p>
                    <a class="add-cart cart21" href="#."><p><button>Add to Cart</button></p></a>
                </div>
                
                <div class="card">
                    <img class="images" src="img/nike/vapormax.jpg" style="width:100%">
                    <h1>Vapormax</h1>
                    <p class="price">RM750</p>
                    <a class="add-cart cart22" href="#."><p><button>Add to Cart</button></p></a>
                </div>
                
                <div class="card">
                    <img class="images" src="img/nike/zoom.jpg" style="width:100%">
                    <h1>Zoom Pegasus</h1>
                    <p class="price">RM680</p>
                    <a class="add-cart cart23" href="#."><p><button>Add to Cart</button></p></a>
                </div>    
            
                <div class="card">
                    <img class="images" src="img/nike/zoomwinflo.jpg" style="width:100%">
                    <h1>Zoom Winflo</h1>
                    <p class="price">RM380</p>
                    <a class="add-cart cart24" href="#."><p><button>Add to Cart</button></p></a>
                </div> 
            </div>
        </section>
          
        <div class="social-icons">
            <p><a href="#popular">Popular</a></p>
            <p><a href="#adidas">Adidas</a></p>
            <p><a href="#nike">Nike</a></p>
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