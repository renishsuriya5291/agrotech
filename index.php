<?php
// echo "hello";
require "db/db.php";
$loggedin = true;
session_start();
if(!isset($_SESSION['email'])){
    $loggedin = false;
}else{
    $loggedin = true;
    $online = $_SESSION['online'];
    $email = $_SESSION['email'];
    $id = $_SESSION['id'];
    
    // if($online == "true"){
    //     $online_query = "UPDATE `user_profile` SET `is_online` = '1' WHERE `user_profile`.`id` = $id";
    //     $result_query = mysqli_query($con,$online_query);
    // }else{
    //     $online_query = "UPDATE `user_profile` SET `is_online` = '1' WHERE `user_profile`.`id` = $id";
    //     $result_query = mysqli_query($con,$online_query);
    // }

}
?>


<!doctype html>
<html class="no-js" lang="en">
    
<!-- Mirrored from themebeyond.com/html/agrifram/agrifram/index-3.php by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 05 Aug 2022 02:44:27 GMT -->
<head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Agrotech</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

		<link rel="shortcut icon" type="image/x-icon" href="img/favicon.png">
        <!-- Place favicon.ico in the root directory -->

		<!-- CSS here -->
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/animate.min.css">
        <link rel="stylesheet" href="css/magnific-popup.css">
        <link rel="stylesheet" href="css/fontawesome-all.min.css">
        <link rel="stylesheet" href="css/owl.carousel.min.css">
        <link rel="stylesheet" href="css/odometer.css">
        <link rel="stylesheet" href="css/jquery-ui.css">
        <link rel="stylesheet" href="css/flaticon.css">
        <link rel="stylesheet" href="css/aos.css">
        <link rel="stylesheet" href="css/slick.css">
        <link rel="stylesheet" href="css/default.css">
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/responsive.css">
    </head>
    <body>

        <!-- preloader -->
        <div id="preloader">
            <div id="loading-center">
                <div id="loading-center-absolute">
                    <div class="object" id="object_one"></div>
                    <div class="object" id="object_two"></div>
                    <div class="object" id="object_three"></div>
                </div>
            </div>
        </div>
        <!-- preloader-end -->

		<!-- Scroll-top -->
        <button class="scroll-top scroll-to-target" data-target="html">
            <i class="fas fa-angle-up"></i>
        </button>
        <!-- Scroll-top-end-->

        <!-- header-area -->
        <header class="header-style-three transparent-header">
            <div class="header-top-wrap d-none d-md-block">
                <div class="container custom-container">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="header-top-left-list">
                                <ul>
                                    <li><a href="#"><i class="fas fa-comments"></i>FAQ</a></li>
                                    <li><a href="#"><i class="fas fa-map-marker"></i>Location</a></li>
                                    <li><a href="#"><i class="fas fa-headphones"></i>farming Tips</a></li>
                                </ul>
                            </div>
                        </div>
                        <!-- <div class="col-md-6">
                            <div class="header-top-right-list">
                                <ul>
                                    <li><a href="tel:999222845">CALL+ 999 222 845</a></li>
                                    <li><a href="#">English<i class="fas fa-angle-down"></i></a></li>
                                    <li class="active dropdown"><a href="#">My account</a></li>
                                </ul>
                            </div>
                        </div> -->
                    </div>
                </div>
            </div>
            <div id="sticky-header" class="main-header menu-area">
                <div class="header-bg" data-background="img/bg/header_three_bg.png"></div>
                <div class="container custom-container">
                    <div class="row">
                        <div class="col-12">
                            <div class="mobile-nav-toggler"><i class="fas fa-bars"></i></div>
                            <div class="menu-wrap">
                                <nav class="menu-nav show">
                                    <div class="logo">
                                        <a href="index-2.php">
                                            <img src="img/logo/logo.png" alt="Logo">
                                        </a>
                                    </div>
                                    <div class="navbar-wrap main-menu d-none d-lg-flex">
                                        <ul class="navigation">
                                            <li class="active dropdown"><a href="index-2.php">Home</a>
                                                <ul class="submenu">
                                                    <li><a href="index-2.php">Home One</a></li>
                                                    <li><a href="index-3.php">Home Two</a></li>
                                                    <li class="active"><a href="index-4.html">Home Three</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="about.html">About</a></li>
                                            <li><a href="farming-strategy.html">Farming</a></li>
                                            <li class="dropdown"><a href="#">Pages</a>
                                                <ul class="submenu">
                                                    <li><a href="pricing.html">Pricing Plan</a></li>
                                                    <li><a href="our-project.html">Our Project</a></li>
                                                    <li><a href="project-details.html">Project Details</a></li>
                                                </ul>
                                            </li>
                                            <li class="dropdown"><a href="#">Shop</a>
                                                <ul class="submenu">
                                                    <li><a href="shop.html">Our Shop</a></li>
                                                    <li><a href="shop-details.html">Shop Details</a></li>
                                                </ul>
                                            </li>
                                            <li class="dropdown"><a href="#">Blog</a>
                                                <ul class="submenu">
                                                    <li><a href="blog.html">Our Blog</a></li>
                                                    <li><a href="blog-details.html">Blog Details</a></li>
                                                </ul>
                                            </li>
                                            <!-- <li><a href="contact.html">contacts</a></li> -->

                                            <?php
                                            if(isset($_SESSION['email'])){
                                                ?>

                                            <li class="dropdown"><a href="#"><?php echo $_SESSION['email']; ?></a>
                                                <ul class="submenu">
                                                    <li><a href="#">My account</a></li>
                                                    <li><a href="logout.php">Logout</a></li>
                                                </ul>
                                            </li>
                                                



                                            <?php
                                            }else{
                                                ?>
                                               <li class="dropdown"><a href="#">Login</a>
                                                <ul class="submenu">
                                                    <li><a href="loginfarmer.php">As an farmer</a></li>
                                                    <li><a href="loginworker.php">as an worker</a></li>
                                                    <li><a href="loginyard.php">as an yard</a></li>
                                                </ul>
                                            </li>

                                            

                                            <?php
                                            }
                                            ?>

                                        </ul>
                                    </div>
                                    <!-- <div class="header-action d-none d-md-block"> -->
                                        <!-- <ul> -->
                                            <!-- <li class="header-search-btn"><a href="#" data-toggle="modal" data-target="#search-modal"><i class="fas fa-search"></i></a></li> -->
                                            <!-- <li class="header-shop-cart"><a href="#"><i class="fas fa-shopping-basket"></i><span>0</span></a> -->
                                                <!-- <ul class="minicart">
                                                    <li class="d-flex align-items-start">
                                                        <div class="cart-img">
                                                            <a href="#">
                                                                <img src="img/product/cart_p01.jpg" alt="">
                                                            </a>
                                                        </div>
                                                        <div class="cart-content">
                                                            <h4>
                                                                <a href="#">Charity Nike Brand Yellow T-Shirt</a>
                                                            </h4>
                                                            <div class="cart-price">
                                                                <span class="new">$229.9</span>
                                                                <span>
                                                                    <del>$229.9</del>
                                                                </span>
                                                            </div>
                                                        </div>
                                                        <div class="del-icon">
                                                            <a href="#">
                                                                <i class="far fa-trash-alt"></i>
                                                            </a>
                                                        </div>
                                                    </li>
                                                    <li class="d-flex align-items-start">
                                                        <div class="cart-img">
                                                            <a href="#">
                                                                <img src="img/product/cart_p02.jpg" alt="">
                                                            </a>
                                                        </div>
                                                        <div class="cart-content">
                                                            <h4>
                                                                <a href="#">BackPack For School Student</a>
                                                            </h4>
                                                            <div class="cart-price">
                                                                <span class="new">$229.9</span>
                                                                <span>
                                                                    <del>$229.9</del>
                                                                </span>
                                                            </div>
                                                        </div>
                                                        <div class="del-icon">
                                                            <a href="#">
                                                                <i class="far fa-trash-alt"></i>
                                                            </a>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="total-price">
                                                            <span class="f-left">Total:</span>
                                                            <span class="f-right">$239.9</span>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="checkout-link">
                                                            <a href="#">Shopping Cart</a>
                                                            <a class="red-color" href="#">Checkout</a>
                                                        </div>
                                                    </li>
                                                </ul> -->
                                            <!-- </li> -->
                                        <!-- </ul> -->
                                    <!-- </div> -->
                                </nav>
                                <!-- Modal Search -->
                                <div class="modal fade" id="search-modal" tabindex="-1" role="dialog" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <form>
                                                <input type="text" placeholder="Search here...">
                                                <button><i class="fa fa-search"></i></button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Mobile Menu  -->
                            <div class="mobile-menu">
                                <div class="menu-backdrop"></div>
                                <div class="close-btn"><i class="fas fa-times"></i></div>

                                <nav class="menu-box">
                                    <div class="nav-logo"><a href="index-2.php"><img src="img/logo/w_logo.png" alt="" title=""></a>
                                    </div>
                                    <div class="menu-outer">
                                        <!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header-->
                                    </div>
                                    <div class="social-links">
                                        <ul class="clearfix">
                                            <li><a href="#"><span class="fab fa-twitter"></span></a></li>
                                            <li><a href="#"><span class="fab fa-facebook-square"></span></a></li>
                                            <li><a href="#"><span class="fab fa-pinterest-p"></span></a></li>
                                            <li><a href="#"><span class="fab fa-instagram"></span></a></li>
                                            <li><a href="#"><span class="fab fa-youtube"></span></a></li>
                                        </ul>
                                    </div>
                                </nav>
                            </div>
                            <!-- End Mobile Menu -->
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- header-area-end -->


        <!-- main-area -->
        <main>

            <!-- slider-area -->
            <section class="slider-area home-three-slider">
                <div class="slider-active">
                    <div class="single-slider slider-bg fix" data-background="img/slider/third_slider_bg01.jpg">
                        <div class="container slider-container">
                            <div class="row align-items-center justify-content-between">
                                <div class="col-xl-6 col-lg-7">
                                    <div class="slider-content">
                                        <h5 data-animation="fadeInUp" data-delay=".3s">organic and <span>inorganic</span></h5>
                                        <h2 data-animation="fadeInUp" data-delay=".6s">organic and natural</h2>
                                        <a href="#" class="btn green-btn" data-animation="fadeInUp" data-delay=".9s"><span>+</span> discover more</a>
                                    </div>
                                </div>
                                <div class="col-lg-5 d-none d-lg-block">
                                    <div class="slider-img">
                                        <img src="img/slider/third_slider_img01.png" data-animation="fadeInRight" data-delay="1.1s" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="single-slider slider-bg fix" data-background="img/slider/third_slider_bg02.jpg">
                        <div class="container slider-container">
                            <div class="row align-items-center justify-content-between">
                                <div class="col-xl-6 col-lg-7">
                                    <div class="slider-content">
                                        <h5 data-animation="fadeInUp" data-delay=".3s">fruit and <span>heart</span></h5>
                                        <h2 data-animation="fadeInUp" data-delay=".6s">fruit consumed reduced</h2>
                                        <a href="#" class="btn green-btn" data-animation="fadeInUp" data-delay=".9s"><span>+</span> discover more</a>
                                    </div>
                                </div>
                                <div class="col-lg-5 d-none d-lg-block">
                                    <div class="slider-img">
                                        <img src="img/slider/third_slider_img02.png" data-animation="fadeInRight" data-delay="1.1s" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="single-slider slider-bg fix" data-background="img/slider/third_slider_bg03.jpg">
                        <div class="container slider-container">
                            <div class="row align-items-center justify-content-between">
                                <div class="col-xl-6 col-lg-7">
                                    <div class="slider-content">
                                        <h5 data-animation="fadeInUp" data-delay=".3s">organic and <span>inorganic</h5>
                                        <h2 data-animation="fadeInUp" data-delay=".6s">Fruits such as oranges</h2>
                                        <a href="#" class="btn green-btn" data-animation="fadeInUp" data-delay=".9s"><span>+</span> discover more</a>
                                    </div>
                                </div>
                                <div class="col-lg-5 d-none d-lg-block">
                                    <div class="slider-img">
                                        <img src="img/slider/third_slider_img03.png" data-animation="fadeInRight" data-delay="1.1s" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="slider-bottom-bg" data-background="img/slider/slider_bottom02.png"></div>
            </section>
            <!-- slider-area-end -->

            <!-- features-area -->
            <section class="features-area features-style-three pt-80 pb-90">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-xl-6 col-lg-8">
                            <div class="section-title text-center mb-70">
                                <h6 class="sub-title">WHAT WE DO</h6>
                                <h2 class="title"><span>Welcome</span> to Organic</h2>
                            </div>
                        </div>
                    </div>
                    <div class="row justify-content-center">
                        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-8">
                            <div class="features-item text-center mb-30">
                                <div class="features-thumb">
                                    <img src="img/images/features_img01.png" alt="">
                                    <div class="features-overlay">
                                        <i class="flaticon-cauliflower"></i>
                                    </div>
                                </div>
                                <div class="features-content">
                                    <h4><a href="#">Organic Farm</a></h4>
                                    <p>Agricultural mean crops livestock and livestock products</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-8">
                            <div class="features-item text-center mb-30">
                                <div class="features-thumb">
                                    <img src="img/images/features_img02.png" alt="">
                                    <div class="features-overlay">
                                        <i class="flaticon-cow-head"></i>
                                    </div>
                                </div>
                                <div class="features-content">
                                    <h4><a href="#">DAIRY PRODUCTS</a></h4>
                                    <p>Agricultural mean crops livestock and livestock products</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-8">
                            <div class="features-item text-center mb-30">
                                <div class="features-thumb">
                                    <img src="img/images/features_img03.png" alt="">
                                    <div class="features-overlay">
                                        <i class="flaticon-rooster"></i>
                                    </div>
                                </div>
                                <div class="features-content">
                                    <h4><a href="#">POULTRY PRODUCTS</a></h4>
                                    <p>Agricultural mean crops livestock and livestock products</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-8">
                            <div class="features-item text-center mb-30">
                                <div class="features-thumb">
                                    <img src="img/images/features_img04.png" alt="">
                                    <div class="features-overlay">
                                        <i class="flaticon-heavy-vehicle"></i>
                                    </div>
                                </div>
                                <div class="features-content">
                                    <h4><a href="#">crop harvester</a></h4>
                                    <p>Agricultural mean crops livestock and livestock products</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- features-area-end -->

            <!-- choose-area -->
            <section class="choose-area">
                <div class="choose-bg"></div>
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-6">
                            <div class="section-title white-title mb-45">
                                <h6 class="sub-title">why choose us</h6>
                                <h2 class="title">Organic farming is agricu ltural <span>system</span></h2>
                            </div>
                            <div class="choose-content pr-50">
                                <p>Farming is growing crops or keeping animals by people for food and raw materials. Farming is a part of agriculture.
                                People probably started agriculture Lorem ipsum dolor sit amet, est vide voluptaria exnibh vel.</p>
                                <a href="#" class="arrow-btn">Read more <span></span></a>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="skill-wrap">
                                <div class="single-skill-item">
                                    <h6>Statistics</h6>
                                    <div class="progress">
                                        <div class="progress-bar wow slideInLeft" data-wow-duration="2s" data-wow-delay=".2s" role="progressbar" style="width: 75%;" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                                        <span>75%</span>
                                    </div>
                                </div>
                                <div class="single-skill-item">
                                    <h6>HYDROPONIC</h6>
                                    <div class="progress">
                                        <div class="progress-bar wow slideInLeft" data-wow-duration="2s" data-wow-delay=".4s" role="progressbar" style="width: 90%;" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                                        <span>90%</span>
                                    </div>
                                </div>
                                <div class="single-skill-item">
                                    <h6>ACCESSORIES</h6>
                                    <div class="progress">
                                        <div class="progress-bar wow slideInLeft" data-wow-duration="2s" data-wow-delay=".6s" role="progressbar" style="width: 65%;" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"></div>
                                        <span>65%</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="choose-shape c-shape1"><img src="img/images/choose_shape01.png" alt=""></div>
                <div class="choose-shape c-shape2"><img src="img/images/choose_shape02.png" alt=""></div>
                <div class="choose-shape c-shape3"><img src="img/images/choose_shape03.png" alt=""></div>
            </section>
            <!-- choose-area-end -->

            <!-- project-area -->
            <section class="project-area pt-120 pb-120">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-xl-6 col-lg-8">
                            <div class="section-title text-center mb-70">
                                <h6 class="sub-title">your dream gallery</h6>
                                <h2 class="title"><span>Our</span> Recent Projects</h2>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container-fluid container-full">
                    <div class="row project-active">
                        <div class="col-xl-3">
                            <div class="project-item mb-30">
                                <div class="project-thumb">
                                    <img src="img/images/project_thumb01.jpg" alt="">
                                </div>
                                <div class="project-overlay-content">
                                    <div class="project-tag">
                                        <a href="#">vegetable</a>
                                    </div>
                                    <div class="project-content">
                                        <h4><a href="#">Rice Field</a></h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3">
                            <div class="project-item mb-30">
                                <div class="project-thumb">
                                    <img src="img/images/project_thumb02.jpg" alt="">
                                </div>
                                <div class="project-overlay-content">
                                    <div class="project-tag">
                                        <a href="#">vegetable</a>
                                    </div>
                                    <div class="project-content">
                                        <h4><a href="#">Chicken Field</a></h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3">
                            <div class="project-item mb-30">
                                <div class="project-thumb">
                                    <img src="img/images/project_thumb03.jpg" alt="">
                                </div>
                                <div class="project-overlay-content">
                                    <div class="project-tag">
                                        <a href="#">vegetable</a>
                                    </div>
                                    <div class="project-content">
                                        <h4><a href="#">Rice Field</a></h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3">
                            <div class="project-item mb-30">
                                <div class="project-thumb">
                                    <img src="img/images/project_thumb04.jpg" alt="">
                                </div>
                                <div class="project-overlay-content">
                                    <div class="project-tag">
                                        <a href="#">vegetable</a>
                                    </div>
                                    <div class="project-content">
                                        <h4><a href="#">Rice Field</a></h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3">
                            <div class="project-item mb-30">
                                <div class="project-thumb">
                                    <img src="img/images/project_thumb03.jpg" alt="">
                                </div>
                                <div class="project-overlay-content">
                                    <div class="project-tag">
                                        <a href="#">vegetable</a>
                                    </div>
                                    <div class="project-content">
                                        <h4><a href="#">Rice Field</a></h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- project-area-end -->

            <!-- video-area -->
            <section class="video-area video-bg-two pt-170 pb-170">
                <div class="background" data-background="img/bg/video_bg02.jpg"></div>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-10">
                            <div class="video-wrap">
                                <div class="video-play">
                                    <a href="https://www.youtube.com/watch?v=H1jujj-OTvA" class="popup-video"><i class="fas fa-play"></i></a>
                                </div>
                                <div class="section-title white-title text-center">
                                    <h6 class="sub-title">HELLO AND WELCOME Farm</h6>
                                    <h2 class="title"><span>Your</span> support Farm 24/7</h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- video-area-end -->

            <!-- new-shop-area -->
            <section class="new-shop-area new-shop-bg pt-120 pb-90">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-xl-6 col-lg-8">
                            <div class="section-title text-center mb-70">
                                <h6 class="sub-title">our shop</h6>
                                <h2 class="title"><span>Our</span> new PRODUCTS</h2>
                            </div>
                        </div>
                    </div>
                    <div class="row new-project-active">
                        <div class="col-xl-3">
                            <div class="new-shop-item text-center mb-30">
                                <div class="new-shop-thumb mb-10">
                                    <a href="shop-details.html"><img src="img/shop/new_shop_img01.png" alt=""></a>
                                </div>
                                <div class="new-shop-content">
                                    <h5><a href="shop-details.html">pure forest honey</a></h5>
                                    <h6 class="price">$27.00</h6>
                                    <a href="#" class="new-shop-action"><i class="fas fa-shopping-basket"></i>add to cart</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3">
                            <div class="new-shop-item text-center mb-30">
                                <div class="new-shop-thumb mb-10">
                                    <a href="shop-details.html"><img src="img/shop/new_shop_img02.png" alt=""></a>
                                </div>
                                <div class="new-shop-content">
                                    <h5><a href="shop-details.html">sun flower honey</a></h5>
                                    <h6 class="price">$35.00</h6>
                                    <a href="#" class="new-shop-action"><i class="fas fa-shopping-basket"></i>add to cart</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3">
                            <div class="new-shop-item text-center mb-30">
                                <div class="new-shop-thumb mb-10">
                                    <a href="shop-details.html"><img src="img/shop/new_shop_img03.png" alt=""></a>
                                </div>
                                <div class="new-shop-content">
                                    <h5><a href="shop-details.html">Gelatin pure Fruit</a></h5>
                                    <h6 class="price">$90.00</h6>
                                    <a href="#" class="new-shop-action"><i class="fas fa-shopping-basket"></i>add to cart</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3">
                            <div class="new-shop-item text-center mb-30">
                                <div class="new-shop-thumb mb-10">
                                    <a href="shop-details.html"><img src="img/shop/new_shop_img04.png" alt=""></a>
                                </div>
                                <div class="new-shop-content">
                                    <h5><a href="shop-details.html">Foodism Vegetarian</a></h5>
                                    <h6 class="price">$90.00</h6>
                                    <a href="#" class="new-shop-action"><i class="fas fa-shopping-basket"></i>add to cart</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- new-shop-area-end -->

            <!-- new-testimonial-area -->
            <section class="new-testimonial-area new-testimonial-bg pt-120 pb-120">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-xl-6 col-lg-8">
                            <div class="section-title white-title text-center mb-70">
                                <h6 class="sub-title">Our Feedback</h6>
                                <h2 class="title"><span>What</span> Our Client’s Say</h2>
                            </div>
                        </div>
                    </div>
                    <div class="row new-testimonial-active">
                        <div class="col-12">
                            <div class="new-testimonial-item">
                                <div class="new-testi-thumb">
                                    <i class="fas fa-quote-left"></i>
                                    <img src="img/images/new_testi_avatar.jpg" alt="">
                                </div>
                                <div class="new-testi-content">
                                    <p>“Agriculture is the science and art of cultivating plants and livestock. Agriultu lture was the key development in the
                                    rise of sedentary human civilization,thats whereby farming of domesticated species created food surpluses that enabled
                                    people to live and art of cultivating cities ”</p>
                                    <div class="new-testi-avatar">
                                        <h5>julia roberts</h5>
                                        <span>plant expert</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="new-testimonial-item">
                                <div class="new-testi-thumb">
                                    <i class="fas fa-quote-left"></i>
                                    <img src="img/images/new_testi_avatar.jpg" alt="">
                                </div>
                                <div class="new-testi-content">
                                    <p>“Agriculture is the science and art of cultivating plants and livestock. Agriultu lture was the key development in the
                                    rise of sedentary human civilization,thats whereby farming of domesticated species created food surpluses that enabled
                                    people to live and art of cultivating cities ”</p>
                                    <div class="new-testi-avatar">
                                        <h5>julia roberts</h5>
                                        <span>plant expert</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="new-testimonial-item">
                                <div class="new-testi-thumb">
                                    <i class="fas fa-quote-left"></i>
                                    <img src="img/images/new_testi_avatar.jpg" alt="">
                                </div>
                                <div class="new-testi-content">
                                    <p>“Agriculture is the science and art of cultivating plants and livestock. Agriultu lture was the key development in the
                                    rise of sedentary human civilization,thats whereby farming of domesticated species created food surpluses that enabled
                                    people to live and art of cultivating cities ”</p>
                                    <div class="new-testi-avatar">
                                        <h5>julia roberts</h5>
                                        <span>plant expert</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- new-testimonial-area-end -->

            <!-- blog-area -->
            <section class="blog-area blog-bg pt-120 pb-90" data-background="img/bg/blog_bg.jpg">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-xl-6 col-lg-8">
                            <div class="section-title text-center mb-70">
                                <h6 class="sub-title">our BLOG</h6>
                                <h2 class="title"><span>our</span> BLOG POSTS</h2>
                            </div>
                        </div>
                    </div>
                    <div class="row justify-content-center">
                        <div class="col-lg-4 col-md-6">
                            <div class="blog-post-item mb-30">
                                <div class="blog-post-thumb position-relative">
                                    <a href="blog-details.html"><img src="img/blog/blog_post_thumb01.jpg" alt=""></a>
                                    <a href="#" class="blog-post-tag"><i class="fas fa-tag"></i>Rice Field</a>
                                </div>
                                <div class="blog-post-content">
                                    <div class="blog-post-meta">
                                        <ul>
                                            <li><i class="far fa-user"></i><a href="#">Admin</a></li>
                                            <li><i class="far fa-calendar-alt"></i>OCTOBER 23, 2020</li>
                                        </ul>
                                    </div>
                                    <h4><a href="blog-details.html">The Best Milk in the State</a></h4>
                                    <p>Agricultural mean crops livestock and livestock products Agriculture was development.</p>
                                    <a href="#" class="arrow-btn">Read More <span></span></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="blog-post-item mb-30">
                                <div class="blog-post-thumb position-relative">
                                    <a href="blog-details.html"><img src="img/blog/blog_post_thumb02.jpg" alt=""></a>
                                    <a href="#" class="blog-post-tag"><i class="fas fa-tag"></i>Rice Field</a>
                                </div>
                                <div class="blog-post-content">
                                    <div class="blog-post-meta">
                                        <ul>
                                            <li><i class="far fa-user"></i><a href="#">Admin</a></li>
                                            <li><i class="far fa-calendar-alt"></i>OCTOBER 23, 2020</li>
                                        </ul>
                                    </div>
                                    <h4><a href="blog-details.html">Poultry Farming Husbandry</a></h4>
                                    <p>Agricultural mean crops livestock and livestock products Agriculture was development.</p>
                                    <a href="#" class="arrow-btn">Read More <span></span></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="blog-post-item mb-30">
                                <div class="blog-post-thumb position-relative">
                                    <a href="blog-details.html"><img src="img/blog/blog_post_thumb03.jpg" alt=""></a>
                                    <a href="#" class="blog-post-tag"><i class="fas fa-tag"></i>Rice Field</a>
                                </div>
                                <div class="blog-post-content">
                                    <div class="blog-post-meta">
                                        <ul>
                                            <li><i class="far fa-user"></i><a href="#">Admin</a></li>
                                            <li><i class="far fa-calendar-alt"></i>OCTOBER 23, 2020</li>
                                        </ul>
                                    </div>
                                    <h4><a href="blog-details.html">Cultivating Plants Livestock</a></h4>
                                    <p>Agricultural mean crops livestock and livestock products Agriculture was development..</p>
                                    <a href="#" class="arrow-btn">Read More <span></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- blog-area-end -->

        </main>
        <!-- main-area-end -->


        <!-- footer-area -->
        <footer>
            <div class="footer-top footer-bg fix" data-background="img/bg/footer_bg.jpg">
                <div class="container">
                    <div class="row justify-content-between">
                        <div class="col-xl-3 col-lg-4 col-md-6">
                            <div class="footer-widget mb-50">
                                <div class="footer-logo mb-35">
                                    <a href="index-2.php"><img src="img/logo/w_logo.png" alt=""></a>
                                </div>
                                <div class="footer-text">
                                    <p>Agrifram Farming of relse etras sheets connig passag.</p>
                                    <div class="footer-contact">
                                        <ul>
                                            <li><i class="fas fa-map-marker-alt"></i> <span>Address : </span>PO Box W75 Street
                                                lan West new queens</li>
                                            <li><i class="fas fa-headphones"></i> <span>Phone : </span>+24 1245 654 235</li>
                                            <li><i class="fas fa-envelope-open"></i><span>Email : </span><a href="https://themebeyond.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="0b62656d644b6e736e667b676e25686466">[email&#160;protected]</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-sm-6">
                            <div class="footer-widget mb-50">
                                <div class="fw-title mb-35">
                                    <h5>Products</h5>
                                </div>
                                <div class="fw-link">
                                    <ul>
                                        <li><a href="#">Hydroponic (26)</a></li>
                                        <li><a href="#">Agriculture (11)</a></li>
                                        <li><a href="#">Foods (9)</a></li>
                                        <li><a href="#">Milking (3)</a></li>
                                        <li><a href="#">Nutrition (3)</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-sm-6">
                            <div class="footer-widget mb-50">
                                <div class="fw-title mb-35">
                                    <h5>Need Help?</h5>
                                </div>
                                <div class="footer-blog-post">
                                    <ul>
                                        <li>
                                            <div class="f-blog-post-thumb">
                                                <a href="#"><img src="img/blog/f_blog_thumb01.jpg" alt=""></a>
                                            </div>
                                            <div class="f-blog-post-content">
                                                <h5><a href="#">Agriculture is the science and art of cultivating</a></h5>
                                                <span>Tonoy Pueyo</span>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="f-blog-post-thumb">
                                                <a href="#"><img src="img/blog/f_blog_thumb01.jpg" alt=""></a>
                                            </div>
                                            <div class="f-blog-post-content">
                                                <h5><a href="#">Whereby farming doated species create</a></h5>
                                                <span>Mark Wiens</span>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-md-6">
                            <div class="footer-widget mb-50">
                                <div class="fw-title mb-35">
                                    <h5>Follow us</h5>
                                </div>
                                <div class="footer-social">
                                    <ul>
                                        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fab fa-pinterest-p"></i></a></li>
                                        <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="footer-widget mb-50">
                                <div class="fw-title mb-30">
                                    <h5>newsletter sign up</h5>
                                </div>
                                <div class="footer-newsletter">
                                    <form action="#">
                                        <input type="text" placeholder="Enter your email">
                                        <button><i class="fas fa-rocket"></i></button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="footer-bottom-shape fb-shape1 running"><img src="img/images/footer_vector01.png" alt=""></div>
                <div class="footer-bottom-shape fb-shape2"><img src="img/images/footer_vector02.png" alt=""></div>
                <div class="footer-bottom-shape fb-shape3"><img src="img/images/footer_vector03.png" class="rotateme" alt=""></div>
            </div>
            <div class="copyright-wrap">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 col-md-6">
                            <div class="copyright-text">
                                <p>Copyright © 2020 <a href="#">Agrifram</a> All Rights Reserved.</p>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 d-none d-md-block">
                            <div class="payment-method-list">
                                <ul>
                                    <li><a href="#"><img src="img/icon/visa_2.png" alt=""></a></li>
                                    <li><a href="#"><img src="img/icon/ae_02.png" alt=""></a></li>
                                    <li><a href="#"><img src="img/icon/discover.png" alt=""></a></li>
                                    <li><a href="#"><img src="img/icon/stripe.png" alt=""></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- footer-area-end -->





		<!-- JS here -->
        <script data-cfasync="false" src="../../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="js/vendor/jquery-3.5.0.min.js"></script>
        <script src="js/popper.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/isotope.pkgd.min.js"></script>
        <script src="js/imagesloaded.pkgd.min.js"></script>
        <script src="js/jquery.magnific-popup.min.js"></script>
        <script src="js/owl.carousel.min.js"></script>
        <script src="js/jquery.odometer.min.js"></script>
        <script src="js/jquery.appear.js"></script>
        <script src="js/jquery.countdown.min.js"></script>
        <script src="js/paroller.js"></script>
        <script src="js/slick.min.js"></script>
        <script src="js/ajax-form.js"></script>
        <script src="js/wow.min.js"></script>
        <script src="js/jquery-ui.js"></script>
        <script src="js/aos.js"></script>
        <script src="js/plugins.js"></script>
        <script src="js/main.js"></script>
    </body>

<!-- Mirrored from themebeyond.com/html/agrifram/agrifram/index-3.php by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 05 Aug 2022 02:44:31 GMT -->
</html>