<?php 

function code_1(){

    return '<!DOCTYPE html>
    <html lang="en">
        <head>
            <meta charset="UTF-8">   
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>AM-Travel</title>
            <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
            <!--font awesome-->
            <link rel="stylesheet" href="../css/all.min.css"/>
            <link rel="shortcut icon" type="image/c-icon" href="../Images/Asset1.png">
            <!--style sheet-->
            <link rel="stylesheet" href="../css/style.css">
            <link rel="stylesheet" href="../css/lightslider.css">
            <!--jscript-->
            <script src="../js/jquery.js"></script>
            <script type="text/javascript" src="../js/lightslider.js" ></script>
            <!--google font-->
            <link rel="preconnect" href="https://fonts.googleapis.com">
            <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
            <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;400;500;600;700&display=swap" rel="stylesheet">
        </head>
    <body>
        <header id="home">
        <nav class="nav-links" id="horizontal">
            <a href="#home" id="logo"><img class="logo" src="../Images/Asset1.png" alt="logo"></a>
            <ul>
                <li><a href="#home">HOME</a></li>
                <li><a href="../includes/logout.php">ABOUT US</a></li>
                <li><a href="#Blog">BLOGS</a></li>
                <li><a href="#contuct">CONTACT</a></li>
            </ul>
            <div>
            <?php
                if(isset($_SESSION["user"])){
                    echo $_SESSION["user"];

                }
                else{
                    ?>
                    <div class="nav-btn"> 
                        <a href="../login.php" id="create-btnlink">Creat Account</a>
                    </div>
                    <?php
                }
            ?>
            </div>
            
            <!-- menu bars -->
            <div class="menu-bars" id="menu-bars">
                <div class="bar1"></div>
                <div class="bar2"></div>
                <div class="bar3"></div>
            </div>
        </nav>
        <!-- overlay -->
        <div class="overlay slide-right" id="overlay">
            <nav id="vertical">
                <ul>
                <li id="nav-1" class="slide-out-1"><a href="#home">Home</a></li>
                <li id="nav-2" class="slide-out-2"><a href="#about">About</a></li>
                <li id="nav-3" class="slide-out-3"><a href="#Blog">Blogs</a></li>
                <li id="nav-4" class="slide-out-4"><a href="#contact">Contact</a></li>
                <li id="nav-5" class="slide-out-5"><a href="#home" id="logo"><img class="logo" src="Images/Asset1.png" alt="logo"></a></li>
                </ul>
            </nav>
        </div>
        <div class="title-box">
            <h1 data-aos="fade-up">Exploring The World <br>
            </h1><h2 data-aos="fade-up" data-text="In_Comfort...">In_Comfort...</h2>
            <p data-aos="fade-right">You do not have the right to remain silent… let us know what it takes to challenge you</p>
            <div class="inbox">
                <div class="search-con">
                    <div class="search">
                        <i class="fa-solid fa-magnifying-glass"></i> 
                        <input type="text" placeholder="searche destination">
                    </div>
                    <div style="background-color:#AFAEB4;width:1px;height: 27px;"></div>
                    <div class="location">
                        <i class="fa-solid fa-location-dot"></i>
                        <input type="text" placeholder="C.location">
                    </div> 
                </div>
                <button class="sub-btn" type="submit">Search</button>
            </div>
        </div>
    </header>';

}


function code_2(){
    return '<!-- footer -->
    <footer id="contuct">
        <!-- promotion  -->
        <div class="offer">
            <div class="pro-text" data-aos="fade-down">
                <h2>Get our pro offers</h2>
                <p>create a visual identity for yor company,and overallbrand</p>
            </div>
            <div class="get-offer">
                <input type="email" name="email" id="email" placeholder="enter your email here">
                <button type="submit">Subscribe</button>
            </div>
        </div>
        <!-- end promotion -->

        <div class="first-contact">
            <!-- logo -->
            <div class="logo-desc">
                <a href="#"><img class="logo" src="../Images/Asset1.png" alt="logo"></a>
            </div>
            <!-- end logo -->
            <div class="lpContainer">
                <div class="links" data-aos="zoom-in-up">
                    <h3>Quick links</h3>
                    <ul>
                        <li><a href="#home">Home</a></li>
                        <li><a href="#about">About Us</a></li>
                        <li><a href="#Guide">City Guide</a></li>
                        <li><a href="#Blog">Blog</a></li>
                    </ul>
                </div>
                <div class="post" data-aos="zoom-in-up">
                    <h3>Recent post</h3>
                    <p>Top 5 HImalayan Treks may 17,2021</p>
                </div>
                <div class="company" data-aos="zoom-in-up">
                    <h3>Agency</h3>
                    <ul>
                        <li><a href="#">contuct us</a></li>
                        <li><a href="#">FAQ</a></li>
                        <li><a href="#">Feed back</a></li>
                    </ul>
                </div>
            </div>
        </div> 
        <!--second contact  -->
        <div class="sndContact" >
            <!-- social media -->
            <div class="social-media"  data-aos-duration="500">
                <div class="facebook">
                    <i class="fa-brands fa-facebook"></i> 
                    <p>facebook</p>
                </div>
                <div class="Twitter">
                    <i class="fa-brands fa-twitter"></i>
                    <p>Twitter</p>
                </div>
                <div class="Linkdin">
                    <i class="fa-brands fa-linkedin-in"></i>
                    <p>Linkdin</p>
                </div>
                <div class="Pintrest">
                    <i class="fa-brands fa-pinterest"></i>
                    <p>Pintrest </p>
                </div> 
            </div>
            <!-- end social media -->
            <div class="copyright">
                <p>Copyright © 2022, AM-Travel.</p>
            </div>
        </div>
        <!-- end of 2 footer > div -->
        <!-- copyright -->
    </footer> 
    <script src="../js/app.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>';
}