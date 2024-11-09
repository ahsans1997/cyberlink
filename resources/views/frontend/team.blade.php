<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Management - CyberLink </title>
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




    <!-- Messenger Chat Plugin Code -->
    <div id="fb-root"></div>

    <!-- Your Chat Plugin code -->
    <div id="fb-customer-chat" class="fb-customerchat">
    </div>

    <script>
        var chatbox = document.getElementById('fb-customer-chat');
        chatbox.setAttribute("page_id", "703925983318718");
        chatbox.setAttribute("attribution", "page_inbox");

        window.fbAsyncInit = function() {
            FB.init({
                xfbml: true,
                version: 'v11.0'
            });
        };

        (function(d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) return;
            js = d.createElement(s);
            js.id = id;
            js.src = 'https://connect.facebook.net/en_US/sdk/xfbml.customerchat.js';
            fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));
    </script>

    <!-- ***** Preloader Start ***** -->
    <div id="preloader">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>
    <!-- ***** Preloader End ***** -->











    <main id="main">

        <!-- ======= Breadcrumbs ======= -->
        <section id="breadcrumbs" class="breadcrumbs">
            <div class="container">

                <div class="d-flex justify-content-between align-items-center">
                    <h2>Team</h2>
                    <ol>
                        <li><a href="index.html">Home</a></li>
                        <li>Team</li>
                    </ol>
                </div>

            </div>
        </section><!-- End Breadcrumbs -->





        <!-- ======= Our TManagement Section ======= -->
        <section id="team" class="team section-bg">
            <div class="container">

                <div class="section-title" data-aos="fade-up">
                    <h2> <span style="color:black;">Our </span> <span style="color:green;">Management</span></h2>
                    <p> </p>
                </div>

                <div class="row">

                    <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
                        <div class="member" data-aos="fade-up">
                            <div class="member-img">
                                <img src="assets/img/team/team-1.jpg" class="img-fluid" alt="">
                                <div class="social">
                                    <a href=""><i class="bi bi-twitter"></i></a>
                                    <a href=""><i class="bi bi-facebook"></i></a>
                                    <a href=""><i class="bi bi-instagram"></i></a>
                                    <a href=""><i class="bi bi-linkedin"></i></a>
                                </div>
                            </div>
                            <div class="member-info">
                                <h4>Md Nuruzzaman</h4>
                                <span>Managing Director</span>
                                <a title="Click To Call Managing Director" style="color: grey;"
                                    href="tel:+8801728115026"> Call: +880 1728 115 026 </a><br>
                                <span> <a title=" Send Mail Managing Director" style="color:grey;"
                                        href="mailto:support@cyberlinkltd.com?subject= ">Email:
                                        support@cyberlinkltd.com</a><br>
                                </span>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
                        <div class="member" data-aos="fade-up" data-aos-delay="100">
                            <div class="member-img">
                                <img src="assets/img/team/team-2.jpg" class="img-fluid" alt="">
                                <div class="social">
                                    <a href=""><i class="bi bi-twitter"></i></a>
                                    <a href=""><i class="bi bi-facebook"></i></a>
                                    <a href=""><i class="bi bi-instagram"></i></a>
                                    <a href=""><i class="bi bi-linkedin"></i></a>
                                </div>
                            </div>
                            <div class="member-info">
                                <h4>Md Arif Khan</h4>
                                <span>Director</span>
                                <a title="Click To Call Managing Director" style="color: grey;"
                                    href="tel:+8801958425651"> Call: +880 1958 425 651 </a><br>
                                <span> <a title=" Send Mail Managing Director" style="color:grey;"
                                        href="mailto:arif@cyberlinkltd.com?subject= ">Email:
                                        arif@cyberlinkltd.com</a><br>
                                </span>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
                        <div class="member" data-aos="fade-up" data-aos-delay="200">
                            <div class="member-img">
                                <img src="assets/img/team/team-3.jpg" class="img-fluid" alt="">
                                <div class="social">
                                    <a href=""><i class="bi bi-twitter"></i></a>
                                    <a href=""><i class="bi bi-facebook"></i></a>
                                    <a href=""><i class="bi bi-instagram"></i></a>
                                    <a href=""><i class="bi bi-linkedin"></i></a>
                                </div>
                            </div>
                            <div class="member-info">
                                <h4>#</h4>
                                <span>Marketing</span>
                                <a title="Click To Call Managing Director" style="color: grey;"
                                    href="tel:+8801728115026"> Call: +880 1728 115 026 </a><br>
                                <span> <a title=" Send Mail Managing Director" style="color:grey;"
                                        href="mailto:support@cyberlinkltd.com?subject= ">Email:
                                        support@cyberlinkltd.com</a><br>
                                </span>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
                        <div class="member" data-aos="fade-up" data-aos-delay="300">
                            <div class="member-img">
                                <img src="assets/img/team/team-4.jpg" class="img-fluid" alt="">
                                <div class="social">
                                    <a href=""><i class="bi bi-twitter"></i></a>
                                    <a href=""><i class="bi bi-facebook"></i></a>
                                    <a href=""><i class="bi bi-instagram"></i></a>
                                    <a href=""><i class="bi bi-linkedin"></i></a>
                                </div>
                            </div>
                            <div class="member-info">
                                <h4>$</h4>
                                <span>Accountant</span>
                                <a title="Click To Call Managing Director" style="color: grey;"
                                    href="tel:+8801728115026"> Call: +880 1728 115 026 </a><br>
                                <span> <a title=" Send Mail Managing Director" style="color:grey;"
                                        href="mailto:support@cyberlinkltd.com?subject= ">Email:
                                        support@cyberlinkltd.com</a><br>
                                </span>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </section><!-- End Management Section -->


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
