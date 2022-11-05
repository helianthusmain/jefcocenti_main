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
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Finbiz Project details (Business Consultant)</title>
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

    <div class="rts-breadcrumb-area breadcrumb-bg bg_image">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 breadcrumb-1">
                    <h1 class="title">Projects Details</h1>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                    <div class="bread-tag">
                        <a href="index.html">Home</a>
                        <span> / </span>
                        <a href="#" class="active">Projects Details</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php
    
    for ($i=0; $i < count($projectPass) ; $i++) { ?>
        <div class="rts-project-details-area pt--20 pb--20">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="big-bg-porduct-details">
                        <img src="assets/images/projects/<?php echo $projectPass[$i]['pimg'];?>" alt="BCI Campus">
                        <div class="project-info">
                            <div class="info-head">
                                <h5 class="title">Project Information</h5>
                            </div>
                            <div class="info-body">
                                <!-- single info -->
                                <div class="single-info">
                                    <div class="info-ico">
                                        <i class="fas fa-user"></i>
                                    </div>
                                    <div class="info-details">
                                        <span>Company | Client:</span>
                                        <h6 class="name"><?php echo $projectPass[$i]['client'];?></h6>
                                    </div>
                                </div>
                                <!-- end single info -->
                                <!-- single info -->
                                <div class="single-info">
                                    <div class="info-ico">
                                        <i class="fas fa-layer-group"></i>
                                    </div>
                                    <div class="info-details">
                                        <span>Extent of Project:</span>
                                        <h6 class="name"><?php echo $projectPass[$i]['pinfo'];?></h6>
                                    </div>
                                </div>
                                <!-- end single info -->
                                <!-- single info -->
                                <div class="single-info">
                                    <div class="info-ico">
                                        <i class="fas fa-calendar-alt"></i>
                                    </div>
                                    <div class="info-details">
                                        <span>Date:</span>
                                        <h6 class="name"><?php echo $projectPass[$i]['pdate'];?></h6>
                                    </div>
                                </div>
                                <!-- end single info -->
                                <!-- single info -->
                                <div class="single-info">
                                    <div class="info-ico">
                                        <i class="fas fa-map-marker-alt"></i>
                                    </div>
                                    <div class="info-details">
                                        <span>Location:</span>
                                        <h6 class="name"><?php echo $projectPass[$i]['ploc'];?> </h6>
                                    </div>
                                </div>
                                <!-- end single info -->
                            </div>
                        </div>
                    </div>
                </div>      

            </div>
            

        
        </div>
    </div>

    
    <?php
    }
    
    ?>




    

    <!-- rts footer area start -->
    <?php include_once("include/footer.php"); ?>
    <!-- rts footer area end -->


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