<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Contact - CyberLink</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="{{ '/' }}frontend/assets/img/favicon.png" rel="icon">
    <link href="{{ '/' }}frontend/assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ '/' }}frontend/assets/vendor/animate.css/animate.min.css" rel="stylesheet">
    <link href="{{ '/' }}frontend/assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="{{ '/' }}frontend/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{ '/' }}frontend/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="{{ '/' }}frontend/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="{{ '/' }}frontend/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="{{ '/' }}frontend/assets/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="{{ '/' }}frontend/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Template Main CSS File -->
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
                    <h2>Contact</h2>
                    <ol>
                        <li><a href="{{ route('home') }}">Home</a></li>
                        <li>Contact</li>
                    </ol>
                </div>

            </div>
        </section><!-- End Breadcrumbs -->

        <section id="contact" class="contact">
            <div class="container">

                <div class="row justify-content-center" data-aos="fade-up">

                    <div class="col-lg-10">

                        <div class="info-wrap">
                            <div class="row">
                                <div class="col-lg-4 info">
                                    <i class="bi bi-geo-alt"></i>
                                    <h4>Location:</h4>
                                    <p style="cursor: pointer;">Hariken Bus Stand,Degerchala Road,<br>
                                        National University,Gazipur - 1704,<br>
                                        Bangladesh.<br>
                                    </p>
                                </div>

                                <div class="col-lg-4 info mt-4 mt-lg-0">
                                    <i class="bi bi-envelope"></i>
                                    <h4>Email:</h4>
                                    <p style="cursor: pointer;">
                                        <a title=" Send Mail Managing Director" style="color:black;"
                                            href="mailto:support@cyberlinkltd.com?subject= ">support@cyberlinkltd.com</a>
                                        <br>
                                        <a title=" Send Mail Managing Director" style="color:black;"
                                            href="mailto:zaman526266i@gmail.com?subject= ">zaman526266i@gmail.com</a><br>
                                    </p>
                                </div>

                                <div class="col-lg-4 info mt-4 mt-lg-0">
                                    <i class="bi bi-phone"></i>
                                    <h4>Call:</h4><br>
                                    <a title="Click To Call Managing Director " style="color:black;"
                                        href="tel:+8801728115026">+880 1728 115 026 </a><br>
                                    <a title="Click To Call General Manager " style="color:black;"
                                        href="tel:+8801958425651">+880 1958 425 651 </a><br>
                                    <a title="Click To Call Technical Person " style="color:black;"
                                        href="tel:+8801959466001">+880 1959 466 001</a><br>
                                    <a title="Click To Call Technical Person " style="color:black;"
                                        href="tel:+8801958425653">+880 1958 425 653 </a><br>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>

                <div class="row mt-5 justify-content-center" data-aos="fade-up">
                    <div class="col-lg-10">
                        <form action="mailto:zaman526266i@gmail.com?subject=Message" method="post"
                            enctype="text/plain">
                            <div class="row">
                                <div class="col-md-6 form-group">
                                    <input type="text" Name="name" class="form-control" id="name"
                                        placeholder="Your Name" required>
                                </div>
                                <div class="col-md-6 form-group mt-3 mt-md-0">
                                    <input type="Phone" class="form-control" name="Phone" id="email"
                                        placeholder="Your Phone" required>
                                </div>
                            </div>
                            <div class="form-group mt-3">
                                <input type="text" class="form-control" name="Address" id="address"
                                    placeholder="Address" required>
                            </div>
                            <div class="form-group mt-3">
                                <textarea class="form-control" name="Message" rows="5" placeholder="Message" required></textarea>
                            </div>
                            <div class="text-center"><button type="submit"
                                    style="border-width: 3px;border-color: #1bbd36; background-color: #1bbd36;border-radius:8px;color: white;margin-top: 5px;font-size: initial;">Send
                                    Message</button></div>
                        </form>
                    </div>

                </div>

            </div>
        </section><!-- End Contact Section -->
        <!-- ======= Contact Section ======= -->
        <div class="map-section">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2061.4898597941547!2d90.38814277601485!3d23.965255201016138!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755db0beb17e57f%3A0x17688d7cf6b9f539!2sCyberLink%20Communication!5e1!3m2!1sen!2sbg!4v1669388444908!5m2!1sen!2sbg"
                width="100%" height="500" style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>


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
