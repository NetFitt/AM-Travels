<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">   
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>AM-Travel</title>
        <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
        <!--font awesome-->
        <link rel="stylesheet" href="css/all.min.css"/>
        <link rel="shortcut icon" type="image/c-icon" href="Images/Asset1.png">
        <!--style sheet-->
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/lightslider.css">
        <script src="js/jquery.js"></script>
        <!--jscript-->
        <script src="js/jquery.js"></script>
        <script type="text/javascript" src="js/lightslider.js" ></script>
        <!--google font-->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;400;500;600;700&display=swap" rel="stylesheet">
    </head>
<body>    
    <header id="home">
        <nav class="nav-links" id="horizontal">
            <a href="#home" id="logo"><img class="logo" src="Images/Asset1.png" alt="logo"></a>
            <ul>
                <li><a href="#home">HOME</a></li>
                <li><a href="#about">ABOUT US</a></li>
                <li><a href="#Blog">BLOGS</a></li>
                <li><a href="#contuct">CONTACT</a></li>
            </ul>
            <div class="nav-btn"> <a href="login.php" id="create-btnlink">Create Account</a></div>
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
    </header>
    <main>
        <!-- first section -->
        <section class="first" id="home">
            <div class="container">
                <div class="titre" data-aos="fade-up" data-aos-duration="500">
                    <h1>We Provide Best</h1>
                    <p>Take high quality online courses from the best online instrictors <br>
                        around the world & develop your skills.
                    </p>
                </div>
                <div class="trips">
                    <div class="trip" data-aos="fade-right" data-aos-delay="1000">
                        <img src="Images/trip1.png" alt="trip1">
                        <div class="text-trip">
                            <h2>Select Destination</h2>
                            <p>At first choose the place you wanted to go</p>
                        </div>
                    </div>
                    <div class="trip" data-aos="fade-up" data-aos-delay="1400">
                        <img src="Images/trip2.png" alt="trip2">
                        <div></div>
                        <div class="text-trip">
                            <h2>Book a Trip</h2>
                            <p>book your tip form our exclusive offers</p>
                        </div>
                    </div>
                    <div class="trip" data-aos="fade-left" data-aos-delay="1600">
                        <img src="Images/trip3.png" alt="trip3">
                        <div></div>
                        <div class="text-trip">
                            <h2>Take your flight</h2>
                            <p>Take your flight on selected date and joy</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- second section -->
        <section class="second" id="blog"> 
            <div class="container">
                <div class="descript" data-aos="zoom-in-right" data-aos-delay="500">
                    <div class="descript-title" >
                        <h3 style="color: #4141A5;">TOP CITYS </h3>
                        <h1>Explore all corners of <br>
                            the world with us.
                        </h1>
                    </div>
                    <div class="descript-p">
                        <p>These exercises ran in parallel with a series of focus groups comprising of parents. <br> These exercises ran in parallel with a series of focus groups comprising of parents.</p>
                    </div>
                </div>
                <div class="pics">
                    <div class="normal" data-aos="flip-left" data-aos-delay="500">
                        <img src="Images/boat.png" alt="">
                        <div></div>
                        <h2>Nanjing, China</h2>
                        <p>These exercises ran in parallel with a series of focus groups comprising of parents. These exercises ran in parallel with a series.</p>
                    </div>
                    <div class="slide">
                        <div class="box" data-aos="zoom-in-right" data-aos-delay="1400">
                            <img id="last-clone" src="Images/gate.png" alt="gate"> 
                            <img src="Images/speed.png" alt="speed">
                            <img src="Images/mosque.png" alt="mosque">
                            <img src="Images/gate.png" alt="gate">
                            <img id="first-clone" src="Images/speed.png" alt="speed">
                        </div>
                        <div class="buttons">
                            <button id="prevBtn" class="btn"><i class="fa-solid fa-arrow-left"></i></button>
                            <button id="nextBtn" class="btn"><i class="fa-solid fa-arrow-right"></i></button>
                        </div>
                    </div>    
                </div>
            </div>
        </section>
            <!-- 3rd section-  -->
        <section class="third" id="Guide">
            <div class="container">
                <div class="titre" data-aos="fade-down">
                    <h1>Best places</h1>
                    <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration.
                    </p>
                </div>
                <div class="trips">
                    <div class="trip" data-aos="fade-up" data-aos-anchor-placement="top-bottom">
                        <img src="Images/spain.png" alt="place1" class="places">
                        <h2>spain</h2> 
                        <!-- font awsome icon here -->
                        <div class="info-container">
                            <i class="fa-regular fa-clock"></i>
                            <p>7 days/6</p>
                            <span>$544.0</span>
                        </div>    
                    </div>
                    <div class="trip" data-aos="fade-up" data-aos-anchor-placement="top-bottom">
                        <img src="Images/japan.png" alt="place2" class="places">
                        <h2>japan</h2> 
                        <!-- font awsome icon here -->
                        <div class="info-container">
                            <i class="fa-regular fa-clock"></i>
                            <p>7 days/6</p>
                            <span>$544.0</span>
                        </div>
                    </div>
                    <div class="trip" data-aos="fade-up" data-aos-anchor-placement="top-bottom">
                        <img src="Images/london.png" alt="place3" class="places">
                        <h2>London</h2> 
                        <!-- font awsome icon here -->
                        <div class="info-container">
                            <i class="fa-regular fa-clock"></i>
                            <p>7 days/6</p>
                            <span>$544.0</span>
                        </div>    
                    </div>
                    <div class="trip" data-aos="fade-up" data-aos-anchor-placement="top-bottom">
                        <span><img src="Images/canada.png" alt="place4" class="places"></span>
                        <h2>Canada</h2> 
                        <!-- font awsome icon here -->
                        <div class="info-container">
                            <i class="fa-regular fa-clock"></i>
                            <p>7 days/6</p>
                            <span>$544.0</span>
                        </div>
                    </div>   
                </div>
            </div>
        </section>
        <!-- section 4 -->
        <section class="four">
            <div class="titre" data-aos="fade-up"
            data-aos-duration="500">
                <h1>Our Tour Partner</h1>
                <p>There are many variations of passages available, but the majority have suffered alteration.</p>
            </div>
            <!-- animated partners -->
            <div class="partners">
                <div class="partners-logos">
                    <div class="marque-container" style="--pause-on-hover:running; --pause-on-click:running;">
                        <div class="Overlay" style="--gradient-color:rgba(255, 255, 255, 1), rgba(255, 283, 255, 0); --gradient-width:200px;"></div>
                        <div class="marque" style="--play:running; --direction:normal; --duration:54.5532s; --delay:0s; --iteration-count:infinite;">
                            <img class="logos" src="Images/1.png" alt="">
                            <img class="logos" src="Images/2.png" alt="">
                            <img class="logos" src="Images/3.png" alt="">
                            <img class="logos" src="Images/4.png" alt="">
                            <img class="logos" src="Images/5.png" alt="">
                            <img class="logos" src="Images/6.png" alt="">
                        </div>
                    </div>                         
                </div>
            </div>
        </section>
        <!-- end of section -->
        <section class="six" id="about">
            <div class="container">
                <div class="descript-title" data-aos="fade-up"
                data-aos-duration="500">
                    <h3 style="color: #4141A5;">TESTIMONIALS </h3>
                    <h1>
                        What our client say.
                    </h1>
                    <p>Create a visual identity for your company, and an overall brand</p>
                </div>
                <div class="reviews">
                    <div class="review">
                        <img src="Images/face1.jpg" alt="">
                        <div class="review-t">
                            <h2>John Smith</h2>
                            <p>Product designer</p>
                        </div>
                        <div class="star"><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star-half"></i></div>
                        <p>Before we define any approach, we need to define the brands' overall goal.
                                We then need to dive.</p>
                    </div>
                    <div class="review">
                        <img src="Images/j.jpg" alt="">
                        <div class="review-t">
                            <h2>John Smith</h2>
                            <p>Product designer</p>
                        </div>
                        <div class="star"><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star-half"></i></div>
                        <p>Before we define any approach, we need to define the brands' overall goal.
                                We then need to dive.</p>
                    </div>
                    <div class="review">
                        <img src="Images/face2.jpg" alt="">
                        <div class="review-t">
                            <h2>John Smith</h2>
                            <p>Product designer</p>
                        </div>
                        <div class="star"><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star-half"></i></div>
                        <p>Before we define any approach, we need to define the brands' overall goal.
                                We then need to dive.</p>
                    </div>   
                    <div class="review">
                        <img src="Images/jeg.jpg" alt="">
                        <div class="review-t">
                            <h2>John Smith</h2>
                            <p>Product designer</p>
                        </div>
                        <div class="star"><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star-half"></i></div>
                        <p>Before we define any approach, we need to define the brands' overall goal. 
                            We then need to dive.</p>
                    </div>
                </div>
            </div>
        </section>
        <!-- part seven -->
        <section class="seven" id="Blog">
            <div class="container">
                <div class="descript-title" data-aos="fade-up">
                    <h3 style="color: #4141A5;">TOP CITYS  </h3>
                    <h1>
                        Our popular cities.
                    </h1>
                    <p>We're a team of humans with the strategy,  tools, <br>and solutions and digital products.</p>
                </div>
                <ul id="autoWidth" class="cs-hidden">
                    <!-- 1 -->
                    <li class="item-a" data-aos="flip-left">
                        <!-- img box-->
                        <div class="slide-img" >
                            
                            <img src="Images/dubai.png" class="model" alt="">
                            <div class="layer">
                                <h3>EXPLORE NOW!</h3>
                            </div>
                        </div>
                    </li> 
                    <!-- 2 -->
                    <li class="item-b" data-aos="flip-left" data-aos-duration="100">
                        <!-- img box-->
                        <div class="slide-img" >
                            <img src="Images/bali.png" class="model" alt="">
                            <div class="layer">
                                <h3>EXPLORE NOW!</h3>
                            </div>
                        </div>
                    </li> 
                    <!-- 3 -->
                    <li class="item-c" data-aos="flip-left" data-aos-duration="200">
                        <!-- img box-->
                        <div class="slide-img" >
                            <img src="Images/spain copy.png" class="model" alt="beaty places">
                            <div class="layer">
                                <h3>EXPLORE NOW!</h3>
                            </div>
                        </div>
                    </li> 
                    <!-- 4 -->
                    <li class="item-d" data-aos="flip-left" data-aos-duration="300">
                        <!-- img box-->
                        <div class="slide-img" >
                            <img src="Images/qatar.png" class="model" alt="">
                            <div class="layer">
                                <h3>EXPLORE NOW!</h3>
                            </div>
                        </div>
                    </li> 

                    <!-- 5 -->
                    <li class="item-e" data-aos="flip-left" data-aos-duration="400">
                        <!-- img box-->
                        <div class="slide-img" >
                            <img src="Images/romania.png" class="model" alt="">
                            <div class="layer">
                                <h3>EXPLORE NOW!</h3>
                            </div>
                        </div>
                    </li> 
                    <!-- 6 -->
                    <li class="item-f" data-aos="flip-left" data-aos-duration="500">
                        <!-- img box-->
                        <div class="slide-img" >
                            <img src="Images/emarat.png" class="model" alt="">
                            <div class="layer">
                                <h3>EXPLORE NOW!</h3>
                            </div>
                        </div>
                    </li> 
                </ul>
            </div>  
        </section>
    </main> 

    <!-- footer -->
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
                <a href="#"><img class="logo" src="Images/Asset1.png" alt="logo"></a>
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
    <script src="js/app.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();

    
    </script>
</body>
</html>
