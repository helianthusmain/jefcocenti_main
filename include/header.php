<?php

$xmlData = simplexml_load_file("projects.xml");

foreach ($xmlData -> children() as $value) {
    $projectPass[]= array('client'=>$value->client,
    'pinfo'=>$value->pinfo,
    'pdate'=>$value->pdate,
    'ploc'=>$value->ploc,
    'pimg'=>$value->pimg);
}



?>

<header class="header--sticky header-one ">
        <div class="header-top header-top-one bg-1">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 d-xl-block d-none">
                        <div class="left">
                            <div class="mail">
                                <a ><i class="fal fa-envelope"></i> info@jefcocenti.com | gamini@jefcocenti.com</a>
                                
                            </div>
                            <div class="working-time">
                                <p><i class="fal fa-clock"></i> Working: 8.00am - 5.00pm</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 d-xl-block d-none">
                        <div class="right">
                            <ul class="top-nav">
                                <li><a href="about-us.php">About</a></li>
                                <li><a href="our-service.php">Services</a></li>
                                <li><a href="project-details-xml.php">Projects</a></li>
                            </ul>
                            <ul class="social-wrapper-one">
                                <li><a href=""><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                <li><a class="mr--0" href="#"><i class="fab fa-linkedin-in"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="header-main-one bg-white">
            <div class="container">
                <div class="row">
                    <div id="logoblock" class="col-xl-3 col-lg-4 col-md-4 col-sm-4 col-4">
                        <div class="thumbnail">
                            <a href="index.php" style="padding: 0px;">
                                <img src="assets/images/logo/logo-1.jpg" alt="Jefco-logo">
                            </a>
                        </div>
                    </div>
                    <div id="navblock" class=" col-xl-9 col-lg-8 col-md-8 col-sm-8 col-8">
                        <div class="main-header">
                            <nav class="nav-main mainmenu-nav d-none d-xl-block">
                                <ul class="mainmenu">
                                    <li><a href="index.php">Home</a></li>
                                    <li><a href="about-us.php">About Us</a></li>
                                    <li><a  href="our-service.php">Services</a> </li>
                                    <li><a  href="project-details-xml.php">Project</a></li>
                                    <li><a  href="products.php">Product & Parts</a></li>
                                    <li><a href="contactus.php">Contact</a></li>
                                </ul>
                            </nav>
                            <div class="button-area">
                                <!-- <button id="search" class="rts-btn btn-primary-alta"><i class="far fa-search"></i></button>
                                  <div class="search-input-area">
                                    <div class="container">
                                        <div class="search-input-inner">
                                            <div class="input-div">
                                                <input id="searchInput1" class="search-input" type="text" placeholder="Search by keyword or #">
                                                <button><i class="far fa-search"></i></button>
                                            </div>
                                            <div id="close" class="search-close-icon"><i class="far fa-times"></i></div>
                                        </div>
                                    </div>
                                </div>-->
                                <a href="contactus.php" class="rts-btn btn-primary ml--20 ml_sm--5 header-one-btn quote-btn">Contact Us</a>
                                <button id="menu-btn" class="menu rts-btn btn-primary-alta ml--20 ml_sm--5">
                                    <img class="menu-dark" src="assets/images/icon/menu.png" alt="Menu-icon">
                                    <img class="menu-light" src="assets/images/icon/menu-light.png" alt="Menu-icon">
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- End header area -->

    <div id="side-bar" class="side-bar">
        <button class="close-icon-menu"><i class="far fa-times"></i></button>
        <!-- inner menu area desktop start -->
        <div class="rts-sidebar-menu-desktop">
            <a class="logo-1" href="index.php"><img class="logo" src="assets/images/logo/logo.png" alt="finbiz_logo"></a>
            <a class="logo-2" href="index.php"><img class="logo" src="assets/images/logo/logo.png" alt="finbiz_logo"></a>
            <a class="logo-3" href="index.php"><img class="logo" src="assets/images/logo/logo.png" alt="finbiz_logo"></a>
            <a class="logo-4" href="index.php"><img class="logo" src="assets/images/logo/logo.png" alt="finbiz_logo"></a>
            <div class="body d-none d-xl-block">
                <p class="disc">
                To be the leading mechanical & electronic engineering company in Sri Lanka

                </p>
                <div class="get-in-touch">
                    <!-- title -->
                    <div class="h6 title">Get In Touch</div>
                    <!-- title End -->
                    <div class="wrapper">
                        <!-- single -->
                        <div class="single">
                            <i class="fas fa-phone-alt"></i>
                            <a href="#">077 726 08509</a>
                        </div>
                        <!-- single ENd -->
                        <!-- single -->
                        <div class="single">
                            <i class="fas fa-envelope"></i>
                            <a href="mailto:info@jefcocenti.com">info@jefcocenti.com</a>
                        </div>
                        <div class="single">
                            <i class="fas fa-envelope"></i>
                            <a herf="mailto:gamini@jefcocenti.com">gamini@jefcocenti.com</a>
                        </div>
                        <!-- single ENd -->
                        <!-- single -->
                        <div class="single">
                            <i class="fas fa-globe"></i>
                            <a href="#">www.jefcocenti.com</a>
                        </div>
                        <!-- single ENd -->
                        <!-- single -->
                        <div class="single">
                            <i class="fas fa-map-marker-alt"></i>
                            <a href="#">No 515/4 TB Jaya mawatha , Colombo, Sri Lanka</a>
                        </div>
                        <!-- single ENd -->
                    </div>
                    <div class="social-wrapper-two menu">
                        <a href="https://www.facebook.com/profile.php?id=100065064349236"><i class="fab fa-facebook-f"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                        <a href="#"><i class="fab fa-whatsapp"></i></a>
                        <!-- <a href="#"><i class="fab fa-linkedin"></i></a> -->
                    </div>
                </div>
            </div>
            <div class="body-mobile d-block d-xl-none">
                <nav class="nav-main mainmenu-nav">
                    <ul class="mainmenu">
                        <li><a href="index.php">Home</a></li>
                        <li><a href="about-us.php">About Us</a></li>
                        <li><a href="our-service.php">Services</a></li>
                        <li><a href="project-details.php">Project</a></li>
                        <li><a href="products.php">Products</a></li> 
                        <li><a href="contactus.php">Contact</a></li>
                    </ul>
                </nav>
                <div class="social-wrapper-two menu mobile-menu">
                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                    <a href="#"><i class="fab fa-twitter"></i></a>
                    <a href="#"><i class="fab fa-instagram"></i></a>
                    <a href="#"><i class="fab fa-whatsapp"></i></a>
                    <!-- <a href="#"><i class="fab fa-linkedin"></i></a> -->
                </div>
                <a href="#" class="rts-btn btn-primary ml--20 ml_sm--5 header-one-btn quote-btnmenu">Get Quote</a>
            </div>
        </div>
        <!-- inner menu area desktop End -->
    </div>

    <div id="anywhere-home"></div>
    <!-- ENd Header Area -->