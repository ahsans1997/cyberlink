<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Home Internet - CyberLink</title>
    <meta content="" name="description">
    <meta content="" name="keywords">
    <link rel="icon" href="{{ '/' }}frontend/assets/images/icon.png" />
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Jost:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">
    <link href="{{ '/' }}frontend/assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="{{ '/' }}frontend/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{ '/' }}frontend/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ '/' }}frontend/assets/css/mail_style.css">
    <link href="{{ '/' }}frontend/assets/css/service_style.css" rel="stylesheet">
    <link href="{{ '/' }}frontend/assets/css/style.css" rel="stylesheet">

</head>

<body>




    <!-- ======= Start Navbar ======= -->
    @include('frontend.partials.header')
    <!--End Navber-->





    <!-- ======= Hero Section ======= -->
    <section style="background-image: url(assets/img/homeinternet/home.jpg);" id="hero"
        class="d-flex align-items-center">

        <div class="container">
            <div class="row">
                <div class="col-lg-6 d-flex flex-column justify-content-center pt-4 pt-lg-0 order-2 order-lg-1"
                    data-aos="fade-up" data-aos-delay="200">
                    <h1 style="color:black;"> High-Speed Performance Assured</h1>
                    <div class="d-flex justify-content-center justify-content-lg-start">
                        <p style="color:black;text-align: justify;">
                            Our home internet packages are designed to provide you with the best in entertainment, the
                            fastest broadband speeds and unlimited browsing the internet. Expose yourself or your small
                            business to the world through Triangle Internet. Triangle Offer reliable, flexible, secure
                            and enhance services with cost efficiency for home usages and small entrepreneurs. Our fiber
                            connection to last end makes your connection stable with no interruptions. Our 24/7 help
                            team are with you for speeding up your services.
                        </p>
                    </div>
                </div>
                <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="zoom-in" data-aos-delay="200">
                    <img src="{{ '/' }}frontend/assets/img/homeinternet/hero-img.png" class="img-fluid animated" alt="">
                </div>
            </div>
        </div>

    </section><!-- End Hero -->

    <main id="main">

        <section id="why-us" class="why-us section-bg">
            <div class="container-fluid" data-aos="fade-up">

                <div class="row">

                    <div
                        class="col-lg-7 d-flex flex-column justify-content-center align-items-stretch  order-2 order-lg-1">

                        <div class="content">
                            <h3><strong></strong></h3>
                        </div>

                        <div class="accordion-list">
                            <ul>

                                <li>
                                    <a data-bs-toggle="collapse" class="collapse"
                                        data-bs-target="#accordion-list-1"><span>01</span>Lag Free Gaming<i
                                            class="bx bx-chevron-down icon-show"></i></a>
                                    <div id="accordion-list-1" class="collapse show"
                                        data-bs-parent=".accordion-list">
                                        <p>
                                            Run into the gaming world with CyberLink Internet. Our extra care make our
                                            client’s gaming experience smooth. Our specialty in gaming are Lag free
                                            gaming, optimum latency of all gaming destination, smooth download speed
                                            (like LAN speed) and gathering gamers in a single community. Our special
                                            gaming team keep you always in birds eye view.

                                        </p>
                                    </div>
                                </li>

                                <li>
                                    <a data-bs-toggle="collapse" class="collapse"
                                        data-bs-target="#accordion-list-1"><span>02</span>Buffer Free Streaming<i
                                            class="bx bx-chevron-down icon-show"></i></a>
                                    <div id="accordion-list-1" class="collapse show"
                                        data-bs-parent=".accordion-list">
                                        <p>
                                            Enjoy movie time with friends and family. Make your time special with
                                            CyberLink internet. Our bufferless Youtube Steaming make your time more
                                            enjoyable. We also offer other Steaming Videos bufferless like peer to Peer
                                            steaming, community steaming, Akami/CDN. Make your small screen like a big
                                            home theater with our media server.
                                        </p>
                                    </div>
                                </li>

                            </ul>
                        </div>
                    </div>

                    <div class="col-lg-5 align-items-stretch order-1 order-lg-2 img"
                        style='background-image: url("assets/img/homeinternet/home-network.jpg");' data-aos="zoom-in"
                        data-aos-delay="150">&nbsp;</div>
                </div>

            </div>
        </section><!-- End Why Us Section -->



        <!-- ======= Cta Section ======= -->
        <section id="cta" class="cta">
            <div class="container" data-aos="zoom-in">

                <div class="row">
                    <div class="col-lg-9 text-center text-lg-start">
                        <h3>Please Contact With Us</h3>
                        <p>CyberLink Communication offers customer service, technical support 24×7 help-desk</p>
                    </div>
                    <div class="col-lg-3 cta-btn-container text-center">
                        <a class="cta-btn align-middle" href="contact.html">CONTACT US</a>
                    </div>
                </div>

            </div>
        </section><!-- End Cta Section -->









        <!-- ======= Footer ======= -->
        @include('frontend.partials.footer')
        <!-- End Footer -->

        <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
                class="bi bi-arrow-up-short"></i></a>

        <!-- Vendor JS Files -->
        <script src="{{ '/' }}frontend/assets/vendor/aos/aos.js"></script>
        <script src="{{ '/' }}frontend/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="{{ '/' }}frontend/assets/vendor/glightbox/js/glightbox.min.js"></script>
        <script src="{{ '/' }}frontend/assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
        <script src="{{ '/' }}frontend/assets/vendor/swiper/swiper-bundle.min.js"></script>
        <script src="{{ '/' }}frontend/assets/vendor/waypoints/noframework.waypoints.js"></script>
        <script src="{{ '/' }}frontend/assets/vendor/php-email-form/validate.js"></script>

        <!-- Template Main JS File -->
        <script src="{{ '/' }}frontend/assets/js/service_main.js"></script>


</body>

</html>
