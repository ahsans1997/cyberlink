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
    <section id="hero" class="d-flex align-items-center">

        <div class="container">
            <div class="row">
                <div class="col-lg-6 d-flex flex-column justify-content-center pt-4 pt-lg-0 order-2 order-lg-1"
                    data-aos="fade-up" data-aos-delay="200">
                    <h1> MONITORING & MAINTENANCE</h1>
                    <div class="d-flex justify-content-center justify-content-lg-start">
                        <p style="color:white;text-align: justify;">
                            As managed service, we provide you with a team of certified & skilled engineers so you can
                            benefit from 24-hour monitoring that’s more comprehensive and cost-effective than an onsite
                            IT staff. Our trained & certified engineers can watch over your network such as every
                            workstation, server, and firewall— anything with an IP address— regardless of location.
                        </p>
                    </div>
                </div>
                <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="zoom-in" data-aos-delay="200">
                    <img src="{{ '/' }}frontend/assets/img/maintanence/maintanence1.png" class="img-fluid animated" alt="">
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
                                        data-bs-target="#accordion-list-1"><span>01</span> Monitoring<i
                                            class="bx bx-chevron-down icon-show"></i></a>
                                    <div id="accordion-list-1" class="collapse show"
                                        data-bs-parent=".accordion-list">
                                        <p style="text-align: justify;">
                                            We use monitoring software to keep a vigilant eye on IT systems, paying
                                            careful attention to network hard drives, the most mechanical components and
                                            the ones most likely to fail. The first sign of a bad block, circuit board
                                            failure, memory shortage or logic problem will trigger a predictive failure
                                            e-mail message allowing enough time for remedial action. Other problems,
                                            such as malware infiltrations, work station malfunctions, accidental
                                            configuration changes and cable disconnects can also easily be detected and
                                            fixed via remote network monitoring.
                                        </p>
                                        <p style="text-align:justify;"> <strong>Service includes:</strong><br>
                                            <strong style="color:green;">1. </strong> a single point of contact for all
                                            IT issues <br>
                                            <strong style="color:green;">2. </strong> on-site hardware and
                                            software/application support <br>
                                            <strong style="color:green;">3. </strong> System administration (help
                                            resetting passwords, creating user accounts, etc.) <br>
                                        </p>
                                    </div>
                                </li>

                                <li>
                                    <a data-bs-toggle="collapse" class="collapse"
                                        data-bs-target="#accordion-list-1"><span>02</span> Maintenance<i
                                            class="bx bx-chevron-down icon-show"></i></a>
                                    <div id="accordion-list-1" class="collapse show"
                                        data-bs-parent=".accordion-list">
                                        <p style="text-align:justify;">
                                            We continuously perform preventive maintenance that keeps your network up
                                            and running which is diametrically opposed to the purely reactive
                                            “break/fix” method, which isn’t as cost-effective because by the time a
                                            problem is recognized, productivity has already closed down. The advantage
                                            of managed services is that it is predictive and thus an effectively
                                            proactive measure.
                                        </p>
                                    </div>
                                </li>

                            </ul>
                        </div>
                    </div>

                    <div class="col-lg-5 align-items-stretch order-1 order-lg-2 img"
                        style='background-image: url("assets/img/maintanence/maintanence2.png");' data-aos="zoom-in"
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
