<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Mail - CyberLink</title>
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
    <section style="background-color: white;" id="hero" class="d-flex align-items-center">

        <div class="container">
            <div class="row">
                <div class="col-lg-6 d-flex flex-column justify-content-center pt-4 pt-lg-0 order-2 order-lg-1"
                    data-aos="fade-up" data-aos-delay="200">
                    <h1> <span style="color:green;"> Mail</span><span style="color:black;"> Services</span></h1>
                    <div class="d-flex justify-content-center justify-content-lg-start">
                        <p style=" color: black;text-align: justify;">
                            CyebrLink Communication provides sophisticated mail services based on Cpanel, qmail or vesta
                            panels that can be chosen by the user according to their needs. We also provide
                            configurations for dedicated mail servers and customized mail services.
                        </p>
                    </div>
                </div>
                <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="zoom-in" data-aos-delay="200">
                    <img src="{{ '/' }}frontend/assets/img/mail/mail.png" class="img-fluid animated" alt="">
                </div>
            </div>
        </div>

    </section><!-- End Hero -->

    <main id="main">

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
