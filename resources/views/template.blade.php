<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>

    <!-- Basic -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ config('app.name') }}</title>

    <meta name="keywords" content="Sinergi Rodika" />
    <meta name="description" content="Sinergi Rodika">
    <meta name="author" content="@adampm77">

    <!-- Favicon -->
    <!-- Favicon -->
    <link rel="icon" type="image/png" href="/favicon-48x48.png" sizes="48x48" />
    <link rel="icon" type="image/svg+xml" href="/favicon.svg" />
    <link rel="shortcut icon" href="/favicon.ico" />
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png" />
    <meta name="apple-mobile-web-app-title" content="Sinergi Rodika" />
    <link rel="manifest" href="/site.webmanifest" />

    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1.0, shrink-to-fit=no">

    <!-- Web Fonts  -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">

    <!-- Vendor CSS -->
    <link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="vendor/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="vendor/animate/animate.compat.css">
    <link rel="stylesheet" href="vendor/simple-line-icons/css/simple-line-icons.min.css">
    <link rel="stylesheet" href="vendor/owl.carousel/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="vendor/owl.carousel/assets/owl.theme.default.min.css">
    <link rel="stylesheet" href="vendor/magnific-popup/magnific-popup.min.css">

    <!-- Theme CSS -->
    <link rel="stylesheet" href="css/theme.css">
    <link rel="stylesheet" href="css/theme-elements.css">
    <link rel="stylesheet" href="css/theme-blog.css">
    <link rel="stylesheet" href="css/theme-shop.css">

    <!-- Current Page CSS -->
    <link rel="stylesheet" href="vendor/circle-flip-slideshow/css/component.css">

    <!-- Skin CSS -->
    <link id="skinCSS" rel="stylesheet" href="css/skins/default.css">

    <!-- Head Libs -->
    <script src="vendor/modernizr/modernizr.min.js"></script>

    @vite(['resources/scss/custom.scss'])

</head>

<body data-plugin-page-transition>

    <div class="body">
        @include('partials.header')

        <div role="main" class="main">
            @yield('content')
        </div>

        <footer id="footer" class="bg-color-primary border-top-0">
            <div class="container pt-1">
                <div class="row py-5 text-center text-lg-start">
                    <div class="col-12 col-lg-4">
                        <img src="{{ asset('img/sinergi-logo.png') }}" alt="Logo"
                            class="pe-lg-5 mb-4 mb-lg-0 logo-footer-custom">
                        <p class="text-pt-footer">PT SINERGI RODIKA UTAMA</p>
                        <p class="text-pt-footer-small">Electrical And Scada System Energy And Environment Management
                            Painting
                            System And Water
                            Treatment</p>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="feature-box feature-box-style-2 float-lg-end d-block d-lg-flex mb-4 mb-lg-0">
                            <div class="feature-box-icon">
                                <i class="icon-location-pin icons text-color-light"></i>
                            </div>
                            <div class="feature-box-info ps-1">
                                <h5 class="mb-0 opacity-7 font-weight-light">ADDRESS</h5>
                                <p class="text-color-light font-weight-semibold mb-0">MON - FRI: 10:00am - 6:00pm</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="feature-box feature-box-style-2 float-lg-end d-block d-lg-flex mb-4 mb-lg-0">
                            <div class="feature-box-icon">
                                <i class="icon-call-out icons text-color-light"></i>
                            </div>
                            <div class="feature-box-info ps-1">
                                <h5 class="mb-0 opacity-7 font-weight-light">CALL US NOW</h5>
                                <a href="tel:+8001234567"
                                    class="text-color-light font-weight-semibold text-decoration-none">800-123-4567</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-copyright footer-copyright-style-2">
                <div class="container py-2">
                    <div class="row py-4">
                        <div class="col-lg-8 text-center text-lg-start mb-2 mb-lg-0">
                            <nav id="sub-menu">
                                <ul>
                                    <li><i class="fas fa-angle-right"></i><a href="page-faq.html"
                                            class="ms-1 text-decoration-none"> FAQ's</a></li>
                                    <li><i class="fas fa-angle-right"></i><a href="sitemap.html"
                                            class="ms-1 text-decoration-none"> Sitemap</a></li>
                                    <li><i class="fas fa-angle-right"></i><a href="contact-us.html"
                                            class="ms-1 text-decoration-none"> Contact Us</a></li>
                                </ul>
                            </nav>
                        </div>
                        <div
                            class="col-lg-4 d-flex align-items-center justify-content-center justify-content-lg-end mb-4 mb-lg-0 pt-4 pt-lg-0">
                            <p>© Copyright 2023. All Rights Reserved.</p>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </div>

    <!-- Vendor -->
    <script src="vendor/plugins/js/plugins.min.js"></script>

    <!-- Theme Base, Components and Settings -->
    <script src="js/theme.js"></script>

    <!-- Circle Flip Slideshow Script -->
    <script src="vendor/circle-flip-slideshow/js/jquery.flipshow.min.js"></script>
    <!-- Current Page Views -->
    <script src="js/views/view.home.js"></script>

    <!-- Theme Initialization Files -->
    <script src="js/theme.init.js"></script>

</body>

</html>
