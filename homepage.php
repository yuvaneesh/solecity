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

        <!--CSS-->
        <link rel="stylesheet" href="CSS/index1.css">
        <link rel="stylesheet" href="CSS/home.css">

        <!--BOX ICONS-->
        <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
        
        <title>SOLECITY - Home Page</title>
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


        <!--==== SIDE NAVBAR ====-->
        <div class="sidebar">
            <br/><br/><br/>
            <div class="card">
                <img src="https://img.icons8.com/bubbles/2x/user-male.png" alt="admin">
                <h1>Yuvaneesh</h1>
                <p class="card__title">Manager of</p>
                <p>Solecity</p>
                
            </div>
            <hr><br/>


            <p class="sidebar__title">DASHBOARD</p>
            <a href="homepage.php">General Report</a>
            <a href="homepage.php#salesReport">Sales Report</a>
            <a href="homepage.php#map">Map</a>
            <a href="addstaff.php">Add a Staff</a>

            
            <a href="logout.php">Log out </a>
            <br/>

        </div>



        <!--====HOME====-->
        <div class="content">

            <br/><br/><br/><br/>

            <h1>Welcome back, Manager!</h1>
            

            <!--====GENERAL REPORT====-->
            <section class="general">
                <h2>General Report</h2>  

                <div class="general__container">

                    <div class="general__item">

                        <div class="general__icon">
                            <i class='bx bxs-cart'></i>
                        </div>
                        
                        <div class="arrow__up">
                            <i class='bx bxs-up-arrow'></i>
                        </div>

                        <h2>3000</h2>
                        <p>Items Sales</p>
                        
                    </div>


                    <div class="general__item">
                        <div class="general__icon">
                            <i class='bx bxs-basket'></i>
                        </div>

                        <div class="arrow__down">
                            <i class='bx bxs-down-arrow'></i>
                        </div>

                        <h2>3500</h2>
                        <p>New Orders</p>
                    </div>


                    <div class="general__item">
                        <div class="general__icon">
                            <i class='bx bx-package'></i>
                        </div>

                        <div class="arrow__up">
                            <i class='bx bxs-up-arrow'></i>
                        </div>

                        <h2>7000</h2>
                        <p>Total Stocks</p>
                    </div> 


                    <div class="general__item">
                        <div class="general__icon">
                            <i class='bx bxs-user' ></i>
                        </div>

                        <div class="arrow__up">
                            <i class='bx bxs-up-arrow'></i>
                        </div>

                        <h2>1500</h2>
                        <p>Unique Visitors</p>
                    </div>

                </div>
            </section>
            <br/><br/>
            
        

            <!--====SALES REPORT====-->
            <section class="sales__report" id="salesReport">
                <h2>Sales Report</h2>

                <div class="sales__container">

                    <div class="sales__item">
                        <h3>Sales past 24 hours</h3><br/>
                        <img src="img/chart1.png" class="statistics" alt="chart">
                    </div>

                    <div class="sales__item">
                        <h3>Daily sales</h3><br/>
                        <img src="img/chart2.png" class="statistics" alt="chart">
                    </div>

                    <div class="sales__item">
                        <h3>Monthly sales</h3><br/>
                        <img src="img/chart3.png" class="statistics" alt="chart">
                    </div>  

                </div>
            </section>
            


            <!--====MAP====-->
            <section class="map" id="map">
                <h2>MAP</h2>
                <div class="map__container">
                    <div class="map__pic">
                        <img src="img/map2.png" alt="map">
                    </div>

                    <table class="top__table">
                        <tr>
                            <th colspan="3">
                                <h3>Weekly Top Products&nbsp;<i class='bx bxs-crown crown__icon'></i></h3>
                            </th>
                        </tr>

                        <tr>
                            <th>Products</th>
                            <th>Name</th>
                            <th>Sold</th>
                        </tr>

                        <tr>
                            <td><img src="img/popularimg/airdior.jpg"></td>
                            <td>Air Dior</td>
                            <td>389</td>
                        </tr>

                        <tr>
                            <td><img src="img/Adidas/stansmith.jpg"></td>
                            <td>Stan Smith</td>
                            <td>450</td>
                        </tr>
                    </table>
                </div>
            </section>
            


            <!--====REGISTERED USERS BASED ON COUNTRY====-->
            <section class="users">
                <h2>Registered Users</h2><br/>
                <div class="users__container">
                    <table class="users__table">
                        <tr>
                            <th></th>
                            <th>Country</th>
                            <th>Users</th>
                            <th>Online</th>
                            <th>Performance</th>
                        </tr>


                        <tr>
                            <td>
                                <div class="flag__icon">
                                    <img src="img/flag/usflag.png" alt="USA">
                                </div>
                            </td>
                            <td>USA</td>
                            <td>4500</td>
                            <td>2500</td>
                            <td>
                                <div class="bar__container">
                                    <div class="bar__performance most"></div>
                                </div>
                            </td>
                        </tr>


                        <tr>
                            <td>
                                <div class="flag__icon">
                                    <img src="img/flag/ukflag.jpg" alt="UK">
                                </div>
                            </td>
                            <td>UK</td>
                            <td>3300</td>
                            <td>1500</td>
                            <td>
                                <div class="bar__container">
                                    <div class="bar__performance more"></div>
                                </div>
                            </td>
                        </tr>


                        <tr>
                            <td>
                                <div class="flag__icon">
                                    <img src="img/flag/chinaflag.jpg" alt="China">
                                </div>
                            </td>
                            <td>China</td>
                            <td>4657</td>
                            <td>3345</td>
                            <td>
                                <div class="bar__container">
                                    <div class="bar__performance most"></div>
                                </div>
                            </td>
                        </tr>


                        <tr>
                            <td>
                                <div class="flag__icon">
                                    <img src="img/flag/russiaflag.jpg" alt="Russia">
                                </div>
                            </td>
                            <td>Russia</td>
                            <td>1320</td>
                            <td>789</td>
                            <td>
                                <div class="bar__container">
                                    <div class="bar__performance less"></div>
                                </div>
                            </td>
                        </tr>


                        <tr>
                            <td>
                                <div class="flag__icon">
                                    <img src="img/flag/ausflag.png" alt="Aus">
                                </div>
                            </td>
                            <td>Australia</td>
                            <td>3200</td>
                            <td>916</td>
                            <td>
                                <div class="bar__container">
                                    <div class="bar__performance medium"></div>
                                </div>
                            </td>
                        </tr>


                        <tr>
                            <td>
                                <div class="flag__icon">
                                    <img src="img/flag/japanflag.jpg" alt="Japan">
                                </div>
                            </td>
                            <td>Japan</td>
                            <td>2539</td>
                            <td>1501</td>
                            <td>
                                <div class="bar__container">
                                    <div class="bar__performance more"></div>
                                </div>
                            </td>
                        </tr>


                        <tr>
                            <td>
                                <div class="flag__icon">
                                    <img src="img/flag/koreaflag.png" alt="Korea">
                                </div>
                            </td>
                            <td>Korea</td>
                            <td>3400</td>
                            <td>460</td>
                            <td>
                                <div class="bar__container">
                                    <div class="bar__performance less"></div>
                                </div>
                            </td>
                        </tr>


                        <tr>
                            <td>
                                <div class="flag__icon">
                                    <img src="img/flag/malaysiaflag.jpg" alt="malaysia">
                                </div>
                            </td>
                            <td>Malaysia</td>
                            <td>3989</td>
                            <td>2100</td>
                            <td>
                                <div class="bar__container">
                                    <div class="bar__performance more"></div>
                                </div>
                            </td>
                        </tr>


                        <tr>
                            <td>
                                <div class="flag__icon">
                                    <img src="img/flag/singaporeflag.png" alt="Singapore">
                                </div>
                            </td>
                            <td>Singapore</td>
                            <td>4231</td>
                            <td>2137</td>
                            <td>
                                <div class="bar__container">
                                    <div class="bar__performance most"></div>
                                </div>
                            </td>
                        </tr>

                    </table>


                    <!--==SOCIAL MEDIA==-->
                    <table class="social__table">
                        <tr>
                            <td colspan="2">
                                <div class="social__img">
                                    <img src="img/fb.png" alt="facebook">
                                </div>
                            </td>
                        </tr>
                        
                        <tr>
                            <td>256k Friends</td>
                            <td>359 Feeds</td>
                        </tr>
                        
                        
                        <tr>
                            <td colspan="2">
                                <div class="social__img">
                                    <img src="img/twitter.png" alt="twitter">
                                </div>
                            </td>
                        </tr>
                        
                        <tr>
                            <td>1562k Followers</td>
                            <td>2562 Tweets</td>
                        </tr>
                        
                        <tr>
                            <td colspan="2">
                                <div class="social__img">
                                    <img src="img/gplus.jpg" alt="google plus">
                                </div>
                            </td>
                        </tr>
                        
                        <tr>
                            <td>962 Followers</td>
                            <td>456 Circles</td>
                        </tr>
                        
                    </table>
                </div>
            </section>
        
        
        
        
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


        <!--==== MAIN JS ====-->
        <script src="JS/main.js"></script>
    </body>

</html>