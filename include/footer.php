<a href="http://api.whatsapp.com/send?phone=94773710299&text=I want to know more details" class="open-button" target="_blank"></a>
<div class="rts-footer-area footer-one bg-footer-one">
        <div class="container bg-shape-f1">
            <!-- rts footer area -->
            <div class="row pt--50 pt_sm--80 pb--80 pb_sm--40">
                <div class="col-sm">
                    <div class="footer-one-single-wized">
                        <div class="wized-title">
                            <h5 class="title">Quick Links</h5>
                            <img src="assets/images/footer/under-title.png" alt="finbiz_footer">
                        </div>
                        <div class="quick-link-inner">
                            <ul class="links">
                                <li><a href="our-service.php"><i class="far fa-arrow-right"></i> Services</a></li>
                                <li><a href="project-details-xml.php"><i class="far fa-arrow-right"></i> Projects</a></li>
                                <li><a href="products.php"><i class="far fa-arrow-right"></i> Products</a></li>
                                <li><a href="about-us.php"><i class="far fa-arrow-right"></i> About Us</a></li>
                                <li><a href="contactus.php"><i class="far fa-arrow-right"></i> Contact Us</a></li>
                            </ul>
                        
                        </div>
                    </div>
                </div>
                <!-- footer mid area -->
                <div class="col-sm">
                    <div class="footer-one-single-wized mid-bg">
                        <div class="wized-title">
                            <h5 class="title">Opening Hours</h5>
                            <img src="assets/images/footer/under-title.png" alt="finbiz_footer">
                        </div>
                        <div class="opening-time-inner">
                            <div class="single-opening">
                                <p class="day">Week Days</p>
                                <p class="time">09.00 - 24:00</p>
                            </div>
                            <div class="single-opening">
                                <p class="day">Saturday</p>
                                <p class="time">08:00 - 03.00</p>
                            </div>
                            <div class="single-opening mb--30 mb_sm--10">
                                <p class="day">Sunday</p>
                                <p class="time">Day Off</p>
                            </div>
                            <a href="contactus.php" class="rts-btn btn-primary contact-us">Contact Us</a>
                        </div>
                    </div>
                </div>
                <!-- footer mid area end -->

                <!-- footer end area post -->
                <div class="col-sm">
                    <div class="footer-one-single-wized margin-left-65">
                        <div class="wized-title">
                            <h5 class="title">Latest Projects</h5>
                            <img src="assets/images/footer/under-title.png" alt="finbiz_footer">
                        </div>
                        <div class="post-wrapper">
                            <!-- single post -->
                            

                            <?php  for ($i=0; $i < 2 ; $i++) { ?>

                            <div class="single-footer-post mb--30">
                                <div class="left-thumbnail">
                                    <img src="assets/images/projects/<?php echo $projectPass[$i]['pimg'];?>" alt="finbiz_business-post">
                                </div>
                                <div class="post-right">
                                    <p> <i class="fal fa-clock"></i> <?php echo $projectPass[$i]['pdate'];?></p>
                                    <a href="project-details-xml.php">
                                        <h6 class="title"><?php echo $projectPass[$i]['client'];?></h6>
                                    </a>
                                    <a class="red-more" href="project-details-xml.php">Read More<i class="far fa-arrow-right"></i></a>
                                </div>
                            </div>

                                
                            <?php }  ?>

                            <!-- single post End -->
                            <!-- single post -->
                            
                            <!-- single post End -->
                        </div>
                    </div>
                </div>
                <!-- footer end area post end-->
            </div>
            <!-- rts footer area End -->
        </div>
        <!-- copyright area start -->
        <div class="rts-copyright-area">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="text-center">
                            <p> © <?php echo date('Y'); ?>. All rights reserved.Concept, Design & Development by Helianthus.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- copyright area end -->
    </div>