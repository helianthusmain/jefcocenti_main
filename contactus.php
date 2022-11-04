<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Finbiz Contact Us (Business Consultant)</title>
    <link rel="shortcut icon" type="image/x-icon" href="assets/images/fav.png">
    <link rel="stylesheet" href="assets/css/plugins/swiper.min.css">
    <link rel="stylesheet" href="assets/css/plugins/fontawesome-5.css">
    <link rel="stylesheet" href="assets/css/plugins/animate.min.css">
    <link rel="stylesheet" href="assets/css/plugins/unicons.css">
    <link rel="stylesheet" href="assets/css/vendor/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>
    <!-- start header area -->
    <?php include_once("include/header.php"); ?>
    <!-- ENd Header Area -->

    <!-- start breadcrumb area -->
    <div class="rts-breadcrumb-area breadcrumb-bg bg_image">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 breadcrumb-1">
                    <h1 class="title">Contact Us</h1>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                    <div class="bread-tag">
                        <a href="index.html">Home</a>
                        <span> / </span>
                        <a href="#" class="active">Contact Us</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end breadcrumb area -->


    <!-- contact single area start -->
    <div class="rts-contact-area rts-section-gap">
        <div class="container">
            <div class="row g-5">
                <!-- single contact area -->
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12">
                    <div class="single-contact-one-inner">
                        <div class="thumbnail">
                            <img src="assets/images/contact/01.png" alt="">
                        </div>
                        <div class="content">
                            <div class="icone">
                                <img src="assets/images/contact/shape/01.svg" alt="">
                            </div>
                            <div class="info">
                                <span>Call Us 24/7</span>
                                <a href="tel:+18475555555">
                                    <h5>+584 (25) 21453</h5>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- single contact area end -->
                <!-- single contact area -->
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12">
                    <div class="single-contact-one-inner">
                        <div class="thumbnail">
                            <img src="assets/images/contact/02.png" alt="">
                        </div>
                        <div class="content">
                            <div class="icone">
                                <img src="assets/images/contact/shape/02.svg" alt="">
                            </div>
                            <div class="info">
                                <span>MAke A Quote</span>
                                <a href="mailto:someone@example.com">
                                    <h5>info@finbiz.com</h5>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- single contact area end -->
                <!-- single contact area -->
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12">
                    <div class="single-contact-one-inner">
                        <div class="thumbnail">
                            <img src="assets/images/contact/03.png" alt="">
                        </div>
                        <div class="content">
                            <div class="icone">
                                <img src="assets/images/contact/shape/03.svg" alt="">
                            </div>
                            <div class="info">
                                <span>Service Station</span>
                                <a href="#">
                                    <h5>25 Hilton Street.</h5>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- single contact area end -->
            </div>
        </div>
    </div>
    <!-- conact single area end -->

    <!-- bizup map area start -->
    <div class="rts-contact-map-area">
        <div class="contaciner-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="contact-map-area-fluid">
                        <iframe class="contact-map" src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d14602.288851207937!2d90.47855065!3d23.798243149999998!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sbd!4v1663151706353!5m2!1sen!2sbd" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        <img class="location" src="assets/images/contact/shape/location.svg" alt="Business_map">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- bizup map area end -->


    <!-- conact us form fluid start -->
    <div class="rts-contact-form-area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="rts-contact-fluid rts-section-gap">
                        <div class="rts-title-area contact-fluid text-center mb--50">
                            <p class="pre-title">
                                Get In Touch
                            </p>
                            <h2 class="title">Needs Help? Let’s Get in Touch</h2>
                        </div>
                        <div class="form-wrapper">
                            <div id="form-messages"></div>
                            <form id="contact-form" action="mailer.php" method="post">
                                <div class="name-email">
                                    <input type="text" name="name" placeholder="Your Name" required>
                                    <input type="email" name="email" placeholder="Email Address" required>
                                </div>
                                <input type="text" name="subject" placeholder="Your Subject">
                                <textarea placeholder="Type Your Message" name="message"></textarea>
                                <button type="submit" class="rts-btn btn-primary">Send Message</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- conact us form fluid end -->




    <!-- start header area -->
    <!-- rts footer area start -->
    
    <?php include_once("include/footer.php"); ?>


    <!-- rts footer area end -->
    <!-- ENd Header Area -->

    <!-- start loader -->
    <div class="loader-wrapper">
        <div class="loader">
        </div>
        <div class="loader-section section-left"></div>
        <div class="loader-section section-right"></div>
    </div>
    <!-- End loader -->

    <!-- progress Back to top -->
    <div class="progress-wrap">
        <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
        </svg>
    </div>
    <!-- progress Back to top End -->


    <!-- scripts start form hear -->
    <script src="assets/js/vendor/jquery.min.js"></script>
    <script src="assets/js/vendor/jqueryui.js"></script>
    <script src="assets/js/vendor/waypoint.js"></script>
    <script src="assets/js/plugins/swiper.js"></script>
    <script src="assets/js/plugins/counterup.js"></script>
    <script src="assets/js/plugins/sal.min.js"></script>
    <script src="assets/js/vendor/bootstrap.min.js"></script>
    <script src="assets/js/plugins/contact.form.js"></script>
    <!-- main Js -->
    <script src="assets/js/main.js"></script>
    <!-- scripts end form hear -->
</body>

</html>