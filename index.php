<?php
session_start();
if(!isset($_SESSION['user_token']) AND !isset($_SESSION['email'])){
    header("location: login.php");
    // die();
  }
?>
<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from jobboard.websitelayout.net/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 27 Sep 2022 12:47:24 GMT -->
<head>

    <!-- metas -->
    <meta charset="utf-8">
    <meta name="author" content="Chitrakoot Web" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="keywords" content="Job Portal HTML Template" />
    <meta name="description" content="Job Board - Job Portal HTML Template" />

    <!-- title  -->
    <title>Job Board - Job Portal HTML Template</title>

    <!-- favicon -->
    <link rel="shortcut icon" href="img/logos/favicon.png" />
    <link rel="apple-touch-icon" href="img/logos/apple-touch-icon-57x57.png" />
    <link rel="apple-touch-icon" sizes="72x72" href="img/logos/apple-touch-icon-72x72.png" />
    <link rel="apple-touch-icon" sizes="114x114" href="img/logos/apple-touch-icon-114x114.png" />

    <!-- plugins -->
    <link rel="stylesheet" href="css/plugins.css" />

    <!-- custom css -->
    <link href="css/styles.css" rel="stylesheet">

    <!-- custom css -->
    <link href="css/index.css" rel="stylesheet">

</head>

<body>

    <!-- INTRO
    ================================================== -->
    <section class="full-screen p-0 cover-background bg-primary" style="background-image: url(img/preview/banner-bg.png);">
        <div class="container h-100vh z-index-9 position-relative">
            <div class="h-100 d-table w-100">
                <div class="d-table-cell align-middle">
                    <div class="row justify-content-center mb-sm-15">
                        <div class="col-lg-7 col-xl-6 text-center">
                            <img src="img/logos/logo-white.png" class="logo mb-1-9" alt="...">
                            <h1 class="display-xl-7 fw-bold mb-1-9 mb-md-2-9 text-white">Job Board - Job Portal HTML Template</h1>
                            <div class="row mt-n4">
                                <div class="col-6 col-md-3 mt-4">
                                    <div class="bg-secondary rounded py-3">
                                        <h3 class="text-white h1"><span class="countup">5</span>+</h3>
                                        <p class="mb-0 text-white">Home Pages</p>
                                    </div>
                                </div>
                                <div class="col-6 col-md-3 mt-4">
                                    <div class="bg-secondary rounded py-3">
                                        <h3 class="text-white h1"><span class="countup">85</span>+</h3>
                                        <p class="mb-0 text-white">Inner Pages</p>
                                    </div>
                                </div>
                                <div class="col-6 col-md-3 mt-4">
                                    <div class="bg-secondary rounded py-3">
                                        <h3 class="text-white h1"><span class="countup">15</span>+</h3>
                                        <p class="mb-0 text-white">Job Layouts</p>
                                    </div>
                                </div>
                                <div class="col-6 col-md-3 mt-4">
                                    <div class="bg-secondary rounded py-3">
                                        <h3 class="text-white h1"><span class="countup">75</span>+</h3>
                                        <p class="mb-0 text-white">Elements</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- DEMO
    ================================================== -->
    <section id="demos">
        <div class="container-fluid px-xl-19">
            <div class="row text-center justify-content-center">
                <div class="col-md-8 mb-1-9 mb-md-6 mb-lg-8 text-center position-relative">
                    <div>
                        <h3 class="display-10 display-sm-6 display-lg-2 text-secondary"><span class="countup">5</span>+</h3>
                        <h2 class="h1 fw-bolder w-xxl-60 mx-auto mb-0 title-font">Premade<br> Homepages and Dashboards...</h2>
                    </div>
                </div>
            </div>

            <div class="row text-center mt-n7 justify-content-center">
                <div class="col-lg-4 col-sm-6 mt-7">
                    <a href="index-01.html" target="_blank">
                        <div class="demo-grid">
                            <img src="img/preview/01.jpg" alt="...">
                            <h3>Home 01</h3>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-sm-6 mt-7">
                    <a href="index-02.html" target="_blank">
                        <div class="demo-grid">
                            <img src="img/preview/02.jpg" alt="...">
                            <h3>Home 02</h3>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-sm-6 mt-7">
                    <a href="index-03.html" target="_blank">
                        <div class="demo-grid">
                            <img src="img/preview/03.jpg" alt="...">
                            <h3>Home 03</h3>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-sm-6 mt-7">
                    <a href="index-04.html" target="_blank">
                        <div class="demo-grid">
                            <img src="img/preview/04.jpg" alt="...">
                            <h3>Home 04</h3>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-sm-6 mt-7">
                    <a href="index-05.html" target="_blank">
                        <div class="demo-grid">
                            <img src="img/preview/05.jpg" alt="...">
                            <h3>Home 05</h3>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-sm-6 mt-7">
                    <a href="#!">
                        <div class="demo-grid">
                            <img src="img/preview/24.jpg" alt="...">
                            <h3>More Demos Coming Soon...</h3>
                        </div>
                    </a>
                </div>
            </div>
        </div>
        <div class="bg-secondary p-3 d-sm-inline-block rounded-circle position-absolute top-20 right-10 ani-top-bottom d-none z-index-3"></div>
    </section>

    <!-- DASHBOARD PAGE
    ================================================== -->
    <section class="bg-primary cover-background" style="background-image: url(img/preview/bg.png);">
        <div class="container">
            <div class="row text-center justify-content-center">
                <div class="col-lg-8 col-xl-6 mb-1-9 mb-md-6 text-center position-relative">
                    <h2 class="h1 fw-bolder mb-0 title-font text-white">Candidates and  Employers Dashboard</h2>
                </div>
            </div>
            <div class="row justify-content-center text-center">
                <div class="col-lg-10">
                    <a href="candidate-dashboard.html" target="_blank">
                        <img src="img/preview/dashboard.png" alt="...">
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- INNER PAGE
    ================================================== -->
    <section>
        <div class="container">
            <div class="row text-center justify-content-center">
                <div class="col-lg-8 col-xl-6 mb-1-9 mb-md-6 text-center position-relative">
                    <h2 class="h1 fw-bolder mb-0">Ready-to-use Inner Pages</h2>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="inner-page-slides owl-carousel owl-theme">
                <div class="single-shot">
                    <a href="aboutus.html" target="_blank"><img src="img/preview/06.jpg" alt="..."></a>
                </div>
                <div class="single-shot">
                    <a href="how-it-works.html" target="_blank"><img src="img/preview/07.jpg" alt="..."></a>
                </div>
                <div class="single-shot">
                    <a href="testimonials.html" target="_blank"><img src="img/preview/08.jpg" alt="..."></a>
                </div>
                <div class="single-shot">
                    <a href="pricing-plans.html" target="_blank"><img src="img/preview/09.jpg" alt="..."></a>
                </div>
                <div class="single-shot">
                    <a href="faq.html" target="_blank"><img src="img/preview/10.jpg" alt="..."></a>
                </div>
                <div class="single-shot">
                    <a href="contact-us.html" target="_blank"><img src="img/preview/11.jpg" alt="..."></a>
                </div>
                <div class="single-shot">
                    <a href="privacy-policy.html" target="_blank"><img src="img/preview/12.jpg" alt="..."></a>
                </div>
                <div class="single-shot">
                    <a href="terms-and-conditions.html" target="_blank"><img src="img/preview/13.jpg" alt="..."></a>
                </div>
                <div class="single-shot">
                    <a href="candidate-grid.html" target="_blank"><img src="img/preview/14.jpg" alt="..."></a>
                </div>
                <div class="single-shot">
                    <a href="candidate-list.html" target="_blank"><img src="img/preview/15.jpg" alt="..."></a>
                </div>
                <div class="single-shot">
                    <a href="candidate-details.html" target="_blank"><img src="img/preview/16.jpg" alt="..."></a>
                </div>
                <div class="single-shot">
                    <a href="employers-grid.html" target="_blank"><img src="img/preview/17.jpg" alt="..."></a>
                </div>
                <div class="single-shot">
                    <a href="employers-list.html" target="_blank"><img src="img/preview/18.jpg" alt="..."></a>
                </div>
                <div class="single-shot">
                    <a href="employer-details.html" target="_blank"><img src="img/preview/19.jpg" alt="..."></a>
                </div>
                <div class="single-shot">
                    <a href="blog-grid.html" target="_blank"><img src="img/preview/20.jpg" alt="..."></a>
                </div>
                <div class="single-shot">
                    <a href="blog-list.html" target="_blank"><img src="img/preview/21.jpg" alt="..."></a>
                </div>
                <div class="single-shot">
                    <a href="blog-details.html" target="_blank"><img src="img/preview/22.jpg" alt="..."></a>
                </div>
            </div>
        </div>
    </section>

    <!-- JOB LAYOUTS
    ================================================== -->
    <section class="bg-light">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-7 mb-4 mb-lg-0">
                    <div class="pe-lg-6">
                        <img src="img/preview/job-layout.png" alt="...">
                    </div>
                </div>
                <div class="col-lg-5">
                    <h2 class="display-lg-6 text-secondary fw-bold mb-3"><span class="countup">15</span>+</h2>
                    <h3 class="mb-3 h2 fw-bold">Job Listing Layouts</h3>
                    <p class="lead mb-0">A higher Job Board is out there. We'll assist you discover it. We're your first step to turning into the whole lot you need to be.</p>
                </div>
            </div>
        </div>
        <img src="img/preview/dots.png" alt="..." class="position-absolute top-5 right-5 ani-top-bottom d-none d-sm-block">
    </section>

    <!-- ELEMENTS
    ================================================== -->
    <section class="pb-0">
        <div class="container mb-8 mb-lg-12">
            <div class="row text-center justify-content-center">
                <div class="col-lg-8 col-xl-6 mb-1-9 mb-md-6 text-center position-relative">
                    <h2 class="h1 fw-bolder mb-0">Shortcodes & Elements</h2>
                </div>
            </div>
            <div class="row elements-gallery justify-content-center mt-n4">

                <div class="col-sm-6 col-md-4 col-lg-3 mt-4">
                    <div class="element-block">
                        <a href="accordions.html" target="_blank">
                            <i class="fas fa-sliders-h me-3"></i>Accordions
                        </a>
                    </div>
                </div>

                <div class="col-sm-6 col-md-4 col-lg-3 mt-4">
                    <div class="element-block">
                        <a href="alerts.html" target="_blank">
                            <i class="far fa-bell me-3"></i>Alerts
                        </a>
                    </div>
                </div>

                <div class="col-sm-6 col-md-4 col-lg-3 mt-4">
                    <div class="element-block">
                        <a href="blockquote.html" target="_blank">
                            <i class="fas fa-vector-square me-3"></i>Blockquote
                        </a>
                    </div>
                </div>

                <div class="col-sm-6 col-md-4 col-lg-3 mt-4">
                    <div class="element-block">
                        <a href="buttons.html" target="_blank">
                            <i class="fas fa-link me-3"></i>Buttons
                        </a>
                    </div>
                </div>

                <div class="col-sm-6 col-md-4 col-lg-3 mt-4">
                    <div class="element-block">
                        <a href="call-to-action.html" target="_blank">
                            <i class="far fa-square me-3"></i>Call to Action
                        </a>
                    </div>
                </div>

                <div class="col-sm-6 col-md-4 col-lg-3 mt-4">
                    <div class="element-block">
                        <a href="carousel-slider.html" target="_blank">
                            <i class="far fa-images me-3"></i>Carousel Slider
                        </a>
                    </div>
                </div>

                <div class="col-sm-6 col-md-4 col-lg-3 mt-4">
                    <div class="element-block">
                        <a href="count-down.html" target="_blank">
                            <i class="far fa-flag me-3"></i>Count Down
                        </a>
                    </div>
                </div>

                <div class="col-sm-6 col-md-4 col-lg-3 mt-4">
                    <div class="element-block">
                        <a href="counters.html" target="_blank">
                            <i class="fa-solid fa-bolt me-3"></i>Counters
                        </a>
                    </div>
                </div>

                <div class="col-sm-6 col-md-4 col-lg-3 mt-4">
                    <div class="element-block">
                        <a href="dropcaps.html" target="_blank">
                            <i class="far fa-closed-captioning me-3"></i>Dropcaps
                        </a>
                    </div>
                </div>

                <div class="col-sm-6 col-md-4 col-lg-3 mt-4">
                    <div class="element-block">
                        <a href="form-elements.html" target="_blank">
                            <i class="fas fa-cubes me-3"></i>Form Elements
                        </a>
                    </div>
                </div>

                <div class="col-sm-6 col-md-4 col-lg-3 mt-4">
                    <div class="element-block">
                        <a href="font-icons.html" target="_blank">
                            <i class="far fa-check-square me-3"></i>Font Icons
                        </a>
                    </div>
                </div>

                <div class="col-sm-6 col-md-4 col-lg-3 mt-4">
                    <div class="element-block">
                        <a href="highlights.html" target="_blank">
                            <i class="fas fa-highlighter me-3"></i>Highlights
                        </a>
                    </div>
                </div>

                <div class="col-sm-6 col-md-4 col-lg-3 mt-4">
                    <div class="element-block">
                        <a href="header-style-01.html" target="_blank">
                            <i class="fas fa-compress me-3"></i>Header Style 01
                        </a>
                    </div>
                </div>

                <div class="col-sm-6 col-md-4 col-lg-3 mt-4">
                    <div class="element-block">
                        <a href="header-style-02.html" target="_blank">
                            <i class="fas fa-compress-arrows-alt me-3"></i>Header Style 02
                        </a>
                    </div>
                </div>

                <div class="col-sm-6 col-md-4 col-lg-3 mt-4">
                    <div class="element-block">
                        <a href="icon-with-text.html" target="_blank">
                            <i class="fab fa-fonticons-fi me-3"></i>Icon With Text
                        </a>
                    </div>
                </div>

                <div class="col-sm-6 col-md-4 col-lg-3 mt-4">
                    <div class="element-block">
                        <a href="list-styles.html" target="_blank">
                            <i class="fas fa-list-ul me-3"></i>List Styles
                        </a>
                    </div>
                </div>

                <div class="col-sm-6 col-md-4 col-lg-3 mt-4">
                    <div class="element-block">
                        <a href="media-object.html" target="_blank">
                            <i class="fas fa-photo-video me-3"></i>Media Object
                        </a>
                    </div>
                </div>

                <div class="col-sm-6 col-md-4 col-lg-3 mt-4">
                    <div class="element-block">
                        <a href="modal.html" target="_blank">
                            <i class="fas fa-expand me-3"></i>Modal
                        </a>
                    </div>
                </div>

                <div class="col-sm-6 col-md-4 col-lg-3 mt-4">
                    <div class="element-block">
                        <a href="pagination.html" target="_blank">
                            <i class="far fa-caret-square-right me-3"></i>Pagination
                        </a>
                    </div>
                </div>

                <div class="col-sm-6 col-md-4 col-lg-3 mt-4">
                    <div class="element-block">
                        <a href="progress-bars.html" target="_blank">
                            <i class="fas fa-tasks me-3"></i>Progress Bars
                        </a>
                    </div>
                </div>

                <div class="col-sm-6 col-md-4 col-lg-3 mt-4">
                    <div class="element-block">
                        <a href="tables.html" target="_blank">
                            <i class="fas fa-table me-3"></i>Tables
                        </a>
                    </div>
                </div>

                <div class="col-sm-6 col-md-4 col-lg-3 mt-4">
                    <div class="element-block">
                        <a href="tabs.html" target="_blank">
                            <i class="fa-solid fa-clone me-3"></i>Tabs
                        </a>
                    </div>
                </div>

                <div class="col-sm-6 col-md-4 col-lg-3 mt-4">
                    <div class="element-block">
                        <a href="typography.html" target="_blank">
                            <i class="fas fa-text-height me-3"></i>Typography
                        </a>
                    </div>
                </div>

                <div class="col-sm-6 col-md-4 col-lg-3 mt-4">
                    <div class="element-block">
                        <a href="videos.html" target="_blank">
                            <i class="fas fa-video me-3"></i>Videos
                        </a>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- FOOTER
    ================================================== -->
    <section class="lg pb-0 bg-primary text-center">
        <div class="container-fluid px-md-10 px-lg-14">

            <h2 class="text-white mb-4">Job Board - Job Portal HTML Template</h2>
            <a href="https://wrapbootstrap.com/theme/job-board-job-portal-html-template-WB0S2FC71" target="_blank" class="butn secondary white-hover"><span>Download Now</span></a>
            <p class="text-center text-white mt-6 mb-1-9">&copy; <span class="current-year"></span> Job Board is Powered by <a href="https://www.chitrakootweb.com/" target="_blank" class="primary-hover">Chitrakoot Web</a></p>

        </div>
    </section>

    <!-- SCROLL TO TOP
    ================================================== -->
    <a href="#" class="scroll-to-top"><i class="fas fa-angle-up" aria-hidden="true"></i></a>

    <!-- all js include start -->

    <!-- jQuery -->
    <script src="js/jquery.min.js"></script>

    <!-- popper js -->
    <script src="js/popper.min.js"></script>

    <!-- bootstrap -->
    <script src="js/bootstrap.min.js"></script>

    <!-- owl carousel -->
    <script src="js/owl.carousel.js"></script>

    <!-- jquery.counterup.min -->
    <script src="js/jquery.counterup.min.js"></script>

    <!-- waypoints js -->
    <script src="js/waypoints.min.js"></script>

    <!-- index js -->
    <script src="js/index.js"></script>

    <!-- all js include end -->

</body>


<!-- Mirrored from jobboard.websitelayout.net/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 27 Sep 2022 12:47:31 GMT -->
</html>