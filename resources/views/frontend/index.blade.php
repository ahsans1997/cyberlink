<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">

    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta name="description" content="">
    <meta name="author" content="TemplateMo">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap"
        rel="stylesheet">
    <title>CyberLink</title>
    <link rel="stylesheet" href="{{ '/' }}frontend/assets/css/fontawesome.css">
    <link rel="stylesheet" href="{{ '/' }}frontend/assets/css/templatemo-finance-business.css">
    <link rel="icon" href="{{ '/' }}frontend/assets/images/icon.png" />
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

    <!-- Messenger Chat Plugin Code -->
    <div id="fb-root"></div>

    <!-- Your Chat Plugin code -->
    <div id="fb-customer-chat" class="fb-customerchat">
    </div>

    <script>
        var chatbox = document.getElementById('fb-customer-chat');
        chatbox.setAttribute("page_id", "703925983318718");
        chatbox.setAttribute("attribution", "page_inbox");

        window.fbAsyncInit = function () {
            FB.init({
                xfbml: true,
                version: 'v11.0'
            });
        };

        (function (d, s, id) {
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





    <!-- ======= Start Navbar ======= -->
    @include('frontend.partials.header')
    <!--End Navber-->





    <!-- Start Slider -->
    <div class="main-banner header-text" id="top">
        <div class="Modern-Slider">
            <!-- Item -->
            <div class="item item-3">
                <div class="img-fill">
                    <div class="text-content">
                        <h6 style="color:green;">we are ready to help you</h6>
                        <h4 style="color:black;">We Trust To Provide High Performance<br>&amp; Reliable Service</h4>

                        <a href="{{ route('about') }}" ; class="filled-button">Learn more...</a>
                    </div>
                </div>
            </div>
            <!-- // Item -->
            <div class="item item-1">
                <div class="img-fill">
                    <div class="text-content">
                        <h6 style="color:white;">we have a solid background</h6>
                        <h4 style="color:white;" ;>Broadband Internet</h4>
                        <a href="{{ route('about') }}" class="filled-button">Learn more...</a>
                    </div>
                </div>
            </div>

            <!-- // Item -->
            <!-- Item -->
            <div class="item item-2">
                <div class="img-fill">
                    <div class="text-content">
                        <h6 style="color:black;">we are here to support you</h6>
                        <!-- <h4 style="color:black;">IT Solution  &amp; Server Side Solution</h4> -->
                        <p></p>
                        <a href="{{ route('about') }}" class="filled-button">Learn more...</a>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!-- Start Slider -->

    <div style="background-color:#1a9009" ; class="request-form">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <h4>Request a call back right now ?</h4>
                    <span>CyberLink Communication offers customer service, technical support 24×7 help-desk</span>
                </div>
                <div class="col-md-4">
                    <a href="{{ route('contact') }}" class="border-button">Contact Us</a>
                </div>
            </div>
        </div>
    </div>





    <!-- ======= Footer ======= -->
    @include('frontend.partials.footer')
    <!-- End Footer -->

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Bootstrap core JavaScript -->
    <script src="{{ '/' }}frontend/vendor/jquery/jquery.min.js"></script>
    <script src="{{ '/' }}frontend/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="{{ '/' }}frontend/assets/js/custom.js"></script>
    <script src="{{ '/' }}frontend/assets/js/owl.js"></script>
    <script src="{{ '/' }}frontend/assets/js/slick.js"></script>
    <script src="{{ '/' }}frontend/assets/js/accordions.js"></script>

    <script language="text/Javascript">
        cleared[0] = cleared[1] = cleared[2] = 0; //set a cleared flag for each field
        function clearField(t) { //declaring the array outside of the
            if (!cleared[t.id]) { // function makes it static and global
                cleared[t.id] = 1; // you could use true and false, but that's more typing
                t.value = ''; // with more chance of typos
                t.style.color = '#fff';
            }
        }

    </script>


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
