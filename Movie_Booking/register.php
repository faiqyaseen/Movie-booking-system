<?php
include "config.php";

if (isset($_POST['submit'])) {

    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $pass = md5($_POST['password']);
    $confpass = md5($_POST['confirmpass']);

    $sql = "SELECT user_email FROM user WHERE user_email = '{$email}'";
    $result = mysqli_query($conn, $sql) or die("Query Failed");
    if (mysqli_num_rows($result) > 0) {
        echo "<p style='color:red; text-align:center; margin:10px 0;'>already exists </p>";
    } else {
        if ($pass == $confpass) {
            $sql1 = "INSERT INTO user(user_name, user_email, user_phone, user_password) VALUES ('$name','$email','$phone','$pass')";
            if (mysqli_query($conn, $sql1)) {
                header("Location:{$hostname}/login.php");
            }
        } else {
            echo "<p style='color:red; text-align:center; margin:10px 0;'> Password didn't Match</p>";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from pixner.net/boleto/demo/sign-up.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 19 Jul 2021 16:53:32 GMT -->

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

    <!-- ==========Sign-In-Section========== -->
    <section class="account-section bg_img" data-background="assets/images/account/account-bg.jpg">
        <div class="container">
            <div class="padding-top padding-bottom">
                <div class="account-area">
                    <div class="section-header-3">
                        <span class="cate">welcome</span>
                        <h2 class="title">to Register</h2>
                    </div>
                    <form class="account-form" method="POST">
                        <div class="form-group">
                            <label for="name1">Full Name<span>*</span></label>
                            <input type="text" name="name" placeholder="Enter Your Full Name" id="" required>
                        </div>
                        <div class="form-group">
                            <label for="email1">Email<span>*</span></label>
                            <input type="email" name="email" placeholder="Enter Your Email" id="" required>
                        </div>
                        <div class="form-group">
                            <label for="">Phone<span>*</span></label>
                            <input type="tel" name="phone" placeholder="Enter Your Phone" id="" required>
                        </div>
                        <div class="form-group">
                            <label for="pass1">Password<span>*</span></label>
                            <input type="password" name="password" placeholder="Password" id="pass1" required>
                        </div>
                        <div class="form-group">
                            <label for="pass2">Confirm Password<span>*</span></label>
                            <input type="password" name="confirmpass" placeholder="Confirm Password" id="pass2" required>
                        </div>
                        <!-- <div class="form-group checkgroup">
                            <input type="checkbox" id="bal" required checked>
                            <label for="bal">I agree to the <a href="#0">Terms, Privacy Policy</a> and <a href="#0">Fees</a></label>
                        </div> -->
                        <div class="form-group text-center">
                            <input type="submit" name="submit" value="Sign Up">
                        </div>
                    </form>
                    <div class="option">
                        Already have an account? <a href="login.php">Login</a>
                    </div>
                    <div class="or"><span>Or</span></div>
                    <ul class="social-icons">
                        <li>
                            <a href="#0">
                                <i class="fab fa-facebook-f"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#0" class="active">
                                <i class="fab fa-twitter"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#0">
                                <i class="fab fa-google"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- ==========Sign-In-Section========== -->


    <script src="assets/js/jquery-3.3.1.min.js"></script>
    <script src="assets/js/modernizr-3.6.0.min.js"></script>
    <script src="assets/js/plugins.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/isotope.pkgd.min.js"></script>
    <script src="assets/js/magnific-popup.min.js"></script>
    <script src="assets/js/owl.carousel.min.js"></script>
    <script src="assets/js/wow.min.js"></script>
    <script src="assets/js/countdown.min.js"></script>
    <script src="assets/js/odometer.min.js"></script>
    <script src="assets/js/viewport.jquery.js"></script>
    <script src="assets/js/nice-select.js"></script>
    <script src="assets/js/main.js"></script>
</body>


<!-- Mirrored from pixner.net/boleto/demo/sign-up.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 19 Jul 2021 16:53:32 GMT -->

</html>