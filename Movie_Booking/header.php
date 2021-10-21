<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/all.min.css">
    <link rel="stylesheet" href="assets/css/animate.css">
    <link rel="stylesheet" href="assets/css/flaticon.css">
    <link rel="stylesheet" href="assets/css/magnific-popup.css">
    <link rel="stylesheet" href="assets/css/odometer.css">
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="assets/css/nice-select.css">
    <link rel="stylesheet" href="assets/css/jquery.animatedheadline.css">
    <link rel="stylesheet" href="assets/css/main.css">

    <link rel="shortcut icon" href="assets/images/favicon.png" type="image/x-icon">

    <title>Online Movie Ticket Booking</title>


</head>

<body>
    <!-- ==========Preloader========== -->
    <div class="preloader">
        <div class="preloader-inner">
            <div class="preloader-icon">
                <span></span>
                <span></span>
            </div>
        </div>
    </div>
    <!-- ==========Preloader========== -->
    <!-- ==========Overlay========== -->
    <div class="overlay"></div>
    <a href="#0" class="scrollToTop">
        <i class="fas fa-angle-up"></i>
    </a>
    <!-- ==========Overlay========== -->

    <!-- ==========Header-Section========== -->
    <header class="header-section">
        <div class="container">
            <div class="header-wrapper">
                <div class="logo">
                    <a href="index.php">
                        <img src="assets/images/logo/logo.png" alt="logo">
                    </a>
                </div>
                <ul class="menu">
                    <li>
                        <?php if(basename($_SERVER['PHP_SELF']) == "index.php"){
                            $homeactive = "active";
                        }else{
                            $homeactive = "";
                        }; ?>
                        <a href="index.php" class="<?php echo $homeactive; ?>">Home</a>
                    </li>
                    <li>
                    <?php if(basename($_SERVER['PHP_SELF']) == "movies.php"){
                            $movieactive = "active";
                        }else{
                            $movieactive = "";
                        }; ?>
                        <a href="movies.php" class="<?php echo $movieactive; ?>" >Movies</a>
                    </li>
                    <li>
                    <?php if(basename($_SERVER['PHP_SELF']) == "theater.php"){
                            $theateractive = "active";
                        }else{
                            $theateractive = "";
                        }; ?>
                        <a href="theater.php" class="<?php echo $theateractive; ?>">Theaters</a>
                    </li>
                    <li>
                    <?php if(basename($_SERVER['PHP_SELF']) == "shows.php"){
                            $showsactive = "active";
                        }else{
                            $showsactive = "";
                        }; ?>
                        <a href="shows.php" class="<?php echo $showsactive; ?>">Shows</a>
                    </li>
                    <li>
                    <?php if(basename($_SERVER['PHP_SELF']) == "about.php"){
                            $aboutactive = "active";
                        }else{
                            $aboutactive = "";
                        }; ?>
                        <a href="about.php" class="<?php echo $aboutactive; ?>">About Us</a>
                    </li>
                    <li>
                        <?php if(basename($_SERVER['PHP_SELF']) == "contact.php"){
                            $contactactive = "active";
                        }else{
                            $contactactive = "";
                        }; ?>
                        <a href="contact.php" class="<?php echo $contactactive; ?>">contact</a>
                    </li>
                    <li>
                    <?php if(basename($_SERVER['PHP_SELF']) == "feedbacks.php"){
                            $feedbacksactive = "active";
                        }else{
                            $feedbacksactive = "";
                        }; ?>
                        <a href="feedbacks.php" class="<?php echo $feedbacksactive; ?>">Feedbacks</a>
                    </li>
                    
                    <li class="header-button pr-0">
                        <a href="login.php">Sign In</a>
                    </li>
                </ul>
                <div class="header-bar d-lg-none">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </div>
        </div>
    </header>