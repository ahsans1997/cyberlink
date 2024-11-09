<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Web Design & Development-CyberLink </title>
    <meta content="" name="description">
    <meta content="" name="keywords">
    <link href="{{ '/' }}frontend/assets/img/favicon.png" rel="icon">
    <link href="{{ '/' }}frontend/assets/img/apple-touch-icon.png" rel="apple-touch-icon">
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">
    <link href="{{ '/' }}frontend/assets/vendor/animate.css/animate.min.css" rel="stylesheet">
    <link href="{{ '/' }}frontend/assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="{{ '/' }}frontend/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{ '/' }}frontend/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="{{ '/' }}frontend/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="{{ '/' }}frontend/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="{{ '/' }}frontend/assets/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="{{ '/' }}frontend/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
    <link href="{{ '/' }}frontend/assets/css/style.css" rel="stylesheet">
</head>

<body>




    <!-- ======= Start Navbar ======= -->
    @include('frontend.partials.header')
    <!--End Navber-->





    <main id="main">

        <!-- ======= Breadcrumbs ======= -->
        <section id="breadcrumbs" class="breadcrumbs">
            <div class="container">

                <div class="d-flex justify-content-between align-items-center">
                    <h2>Web Design & Development </h2>
                    <ol>
                        <li>Web Design & Development</li>
                    </ol>
                </div>

            </div>
        </section><!-- End Breadcrumbs -->

        <!-- ======= Testimonials Section ======= -->





        <!-- ======= Portfolio Details Section ======= -->
        <section id="portfolio-details" class="portfolio-details">
            <div class="container" data-aos="fade-up">

                <div class="row gy-4">

                    <div class="col-lg-8">
                        <div class="portfolio-details-slider swiper">
                            <div class="swiper-wrapper align-items-center">

                                <div class="swiper-slide">
                                    <img src="{{ '/' }}frontend/assets/img/webdisign/Web-Design.png" alt="">
                                </div>
                            </div>
                            <div class="swiper-pagination"></div>
                        </div>
                    </div>

                    <div class="col-lg-4">
                        <div class="portfolio-description">
                            <h2> <strong style="color:green;">Web Design </strong> & Development</h2>
                            <p style="text-align: justify;">
                                CyberLink Communication provides web development solutions for corporates or individuals
                                interested in their web design and web application development needs. Driven by values
                                and founded on strong white hat business ethics, GCL has a unique space among hundreds
                                of so-called Professional Web Development and Web Design Companies. Rather than
                                providing just a product or service, we provide the best available solution that fits
                                our client’s financial and functional requirements. Our mission is to provide customized
                                and usable solutions which maximize our client’s return on investment.
                            <details>
                                <summary style="color:green;text-align: justify;"> Read More..</summary>Our Web
                                Developers have expertise in building Enterprise class Web based Application solutions
                                using HTML, CSS, PHP, MYSQL, JAVASCRIPT, AJAX, ASP.NET, ORACLE, JAVA Platforms.

                            </details>

                            </p>
                        </div>
                    </div>

                </div>

            </div>
        </section><!-- End Portfolio Details Section -->

    </main><!-- End #main -->











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
    <script src="{{ '/' }}frontend/assets/js/main.js"></script>

</body>

</html>
