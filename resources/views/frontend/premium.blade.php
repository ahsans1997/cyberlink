<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&display=swap"
        rel="stylesheet">
    <link href="{{ '/' }}frontend/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
        integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ '/' }}frontend/assets/css/templatemo2-chain-app-dev.css">
    <link rel="stylesheet" href="{{ '/' }}frontend/assets/css/animated.css">
    <link rel="stylesheet" href="{{ '/' }}frontend/assets/css/owl2.css">



    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>Price - CyberLink</title>
    <link href="{{ '/' }}frontend/assets/img/favicon.png" rel="icon">
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










    <!-- ***** Preloader Start ***** -->
    <div id="js-preloader" class="js-preloader">
        <div class="preloader-inner">
            <span class="dot"></span>
            <div class="dots">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>
    </div>


    <div id="services" class="services section">
        <div id="pricing" class="pricing-tables">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 offset-lg-2">
                    </div>


                    <div class="container">
                        <div class="row">
                            <div class="col-lg-8 offset-lg-2">
                                <div class="section-heading  wow fadeInDown" data-wow-duration="1s"
                                    data-wow-delay="0.5s">
                                    <h4>Amazing <em>Services &amp; Features</em> for you</h4>
                                    <img src="assets/images/heading-line-dec.png" alt="">
                                    <h4 style="color:#1bbd36;">Premium Package</h4>
                                </div>
                            </div>
                        </div>
                    </div>

                    @foreach ($packages as $package)
                        <div style="margin-top: 5%;cursor: pointer;" class="col-lg-4">
                            <div class="pricing-item-pro">
                                <span class="price">{{ $package->price }} <i style="color:black;font-size:20px;">Tk / Month</i> </span>
                                <h4> </h4>
                                <div class="icon">
                                    <img src="{{ asset('/images/' . $package->image) }}" alt="">
                                </div>
                                <ul>
                                    <li>
                                        <p> <span style="font-weight: bold;color: {{ ($package->is_featured) ? 'red' : 'black' }};font-size:60px;">{{ $package->speed }}</span> <span
                                                style="font-style:italic;font-size:35px;">Mbps </span> </p>
                                    </li>
                                    <li>Bufferless Youtube</li>
                                    <li>Bufferless FaceBook</li>
                                    <li>80 Mbps BDIX & FTP</li>
                                    <li>Free IPTV</li>
                                    <li>Lag Free Gaming</li>
                                    <li>24/7 Customer Support</li>
                                </ul>
                                <div class="border-button">
                                    <button type="button" data-id="{{ $package->id }}" class="purchaseButton">Purchase This Plan
                                        Now</button>
                                </div>
                            </div>
                        </div>
                    @endforeach

                </div>
            </div>
        </div>

    </div>

    <!-- Modal HTML -->
    <div class="modal fade" id="packageModal" tabindex="-1" aria-labelledby="exampleModalLabel">
        <div class="modal-dialog modal-dialog-centered modal-dialog-corner">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Premium Package</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('purchase.store') }}" method="POST">
                        <div class="text-center">
                            <h3>Package : <span class="packageName"></span></h3>
                        </div>
                        @csrf
                        <input type="hidden" name="package_id" class="packageid">
                        <div class="form-group">
                            <label>Name<span class="text-danger">*</span></label>
                            <input type="text" class="form-control" id="name" name="name" required>
                        </div>
                        <div class="form-group">
                            <label>Telephone/Mobile<span class="text-danger">*</span></label>
                            <input type="number" class="form-control" id="mobile" name="mobile" required>
                        </div>
                        <div class="form-group">
                            <label>Email<span class="text-danger">*</span></label>
                            <input type="email" class="form-control" id="email" name="email" required>
                        </div>
                        <div class="form-group">
                            <label>District<span class="text-danger">*</span></label>
                            <input type="text" class="form-control" id="district" name="district" required>
                        </div>
                        <div class="form-group">
                            <label>Address/Area<span class="text-danger">*</span></label>
                            <input type="text" class="form-control" id="address" name="address" required>
                        </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Purchase</button>
                </div>
            </form>
            </div>
        </div>
    </div>







    <footer id="newsletter">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <div class="section-heading">
                        <h4>Join our mailing list to receive the news &amp; latest trends</h4>
                    </div>
                </div>
                <div class="col-lg-6 offset-lg-3">
                    <form id="search" action="#" method="GET">
                        <div class="row">
                            <div class="col-lg-6 col-sm-6">
                                <fieldset>
                                    <input type="address" name="address" class="email"
                                        placeholder="Email Address..." autocomplete="on" required>
                                </fieldset>
                            </div>
                            <div class="col-lg-6 col-sm-6">
                                <fieldset>
                                    <button type="submit" class="main-button">Subscribe Now <i
                                            class="fa fa-angle-right"></i></button>
                                </fieldset>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </footer>


    <!-- Scripts -->



    <script src="{{ '/' }}frontend/vendor/jquery/jquery.min.js"></script>
    <script src="{{ '/' }}frontend/assets/js/owl-carousel.js"></script>
    <script src="{{ '/' }}frontend/assets/js/animation.js"></script>
    <script src="{{ '/' }}frontend/assets/js/imagesloaded.js"></script>
    <script src="{{ '/' }}frontend/assets/js/popup.js"></script>
    <script src="{{ '/' }}frontend/assets/js/custom2.js"></script>
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
    <script>
        $(document).ready(function() {
            $('.purchaseButton').on('click', function() {
                let packageId = $(this).data('id');
                $.ajax({
                    url: '{{ route('packageinfo', ':id') }}'.replace(':id', packageId),
                    type: 'GET',
                    success: function(response) {
                        $('.packageName').text(response.name);
                        $('.packageid').val(response.id);
                        $('#packageModal').modal('show');
                    }
                });
            });
        });
    </script>
</body>

</html>
