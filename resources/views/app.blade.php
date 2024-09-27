<!doctype html>
<html lang="en">

    <head>
        <title>Turtle Beach Hotel</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <link href="https://fonts.googleapis.com/css?family=Mukta+Mahee:200,300,400|Playfair+Display:400,700" rel="stylesheet">

        <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
        <link rel="stylesheet" href="{{ asset('css/animate.css') }}">
        <link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css') }}">
        <link rel="stylesheet" href="{{ asset('css/aos.css') }}">

        <link rel="stylesheet" href="{{ asset('fonts/ionicons/css/ionicons.min.css') }}">
        <link rel="stylesheet" href="{{ asset('fonts/fontawesome/css/font-awesome.min.css') }}">

        <!-- Theme Style -->
        <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    </head>

    <body>
        <header class="site-header">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-4 site-logo" data-aos="fade"></div>
                    <div class="col-8">
                        <div class="site-menu-toggle js-site-menu-toggle" data-aos="fade">
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                        <!-- END menu-toggle -->

                        <div class="site-navbar js-site-navbar">
                            <nav role="navigation">
                                <div class="container">
                                    <div class="row full-height align-items-center">
                                        <div class="col-md-6">
                                            <ul class="list-unstyled menu">
                                                <li><a href="{{ route('home') }}">Home</a></li>
                                                <li><a href="{{ route('hotel') }}">Hotel</a></li>
                                                {{-- <li><a href="about.html">About</a></li>
                                                <li><a href="contact.html">Contact</a></li> --}}
                                            </ul>
                                        </div>
                                        <div class="col-md-6 extra-info">
                                            <div class="row">
                                                <div class="col-md-6 mb-5">
                                                    <h3>Contact Info</h3>
                                                    <p>Gili Indah, Pemenang, North Lombok Regency <br> West Nusa Tenggara 83352</p>
                                                </div>
                                                <div class="col-md-6">
                                                    <h3>Connect With Us</h3>
                                                    <ul class="list-unstyled">
                                                        <li><a href="#">Twitter</a></li>
                                                        <li><a href="#">Facebook</a></li>
                                                        <li><a href="#">Instagram</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        @yield('content')
        <footer class="section footer-section">
            <div class="container">
                <div class="row mb-4">
                    <div class="col-md-3 mb-5">
                        <ul class="list-unstyled link">
                            <li><a href="#">About Us</a></li>
                            <li><a href="#">Terms &amp; Conditions</a></li>
                            <li><a href="#">Privacy Policy</a></li>
                            <li><a href="#">Help</a></li>
                            <li><a href="#">Rooms</a></li>
                        </ul>
                    </div>
                    <div class="col-md-3 mb-5">
                        <ul class="list-unstyled link">
                            <li><a href="#">Our Location</a></li>
                            <li><a href="#">The Hosts</a></li>
                            <li><a href="#">About</a></li>
                            <li><a href="#">Contact</a></li>
                            <li><a href="#">Restaurant</a></li>
                        </ul>
                    </div>
                    <div class="col-md-3 mb-5 pr-md-5 contact-info">
                        <p><span class="d-block">Address:</span> <span> Gili Indah, Pemenang, North Lombok Regency West Nusa Tenggara 83352</span></p>
                        <p><span class="d-block">Phone:</span> <span> (0370) 624322</span></p>
                        <p><span class="d-block">Email:</span> <span> info@yourdomain.com</span></p>
                    </div>
                </div>
                <div class="row bordertop pt-5">
                    <p class="col-md-6 text-left"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        Copyright &copy;
                        <script>
                            document.write(new Date().getFullYear());
                        </script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i>
                        by <a href="https://colorlib.com" target="_blank">Colorlib</a>
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    </p>

                    <p class="col-md-6 text-right social">
                        <a href="#"><span class="fa fa-tripadvisor"></span></a>
                        <a href="#"><span class="fa fa-facebook"></span></a>
                        <a href="#"><span class="fa fa-twitter"></span></a>
                    </p>
                </div>
            </div>
        </footer>

        <script src="{{ asset('js/jquery-3.2.1.min.js') }}"></script>
        <script src="{{ asset('js/popper.min.js') }}"></script>
        <script src="{{ asset('js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('js/owl.carousel.min.js') }}"></script>
        <script src="{{ asset('js/aos.js') }}"></script>
        <script src="{{ asset('js/main.js') }}"></script>
    </body>

</html>
