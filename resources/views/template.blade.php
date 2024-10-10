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

        <footer id="footer" class="footer-texts-more-lighten">
            <div class="container">
                <div class="row py-4 my-5">
                    <div class="col-md-6 col-lg-3 mb-5 mb-lg-0">
                        <h5 class="text-4 text-color-light mb-3">CONTACT INFO</h5>
                        <ul class="list list-unstyled">
                            <li class="pb-1 mb-2">
                                <span class="d-block font-weight-normal line-height-1 text-color-light">ADDRESS</span>
                                1234 Street Name, City, State, USA
                            </li>
                            <li class="pb-1 mb-2">
                                <span class="d-block font-weight-normal line-height-1 text-color-light">PHONE</span>
                                <a href="tel:+1234567890">Toll Free (123) 456-7890</a>
                            </li>
                            <li class="pb-1 mb-2">
                                <span class="d-block font-weight-normal line-height-1 text-color-light">EMAIL</span>
                                <a href="mailto:mail@example.com">mail@example.com</a>
                            </li>
                            <li class="pb-1 mb-2">
                                <span class="d-block font-weight-normal line-height-1 text-color-light">WORKING
                                    DAYS/HOURS </span>
                                Mon - Sun / 9:00AM - 8:00PM
                            </li>
                        </ul>
                        <ul class="social-icons social-icons-clean-with-border social-icons-medium">
                            <li class="social-icons-instagram">
                                <a href="http://www.instagram.com/" class="no-footer-css" target="_blank"
                                    title="Instagram"><i class="fab fa-instagram"></i></a>
                            </li>
                            <li class="social-icons-twitter mx-2">
                                <a href="http://www.twitter.com/" class="no-footer-css" target="_blank"
                                    title="Twitter"><i class="fab fa-twitter"></i></a>
                            </li>
                            <li class="social-icons-facebook">
                                <a href="http://www.facebook.com/" class="no-footer-css" target="_blank"
                                    title="Facebook"><i class="fab fa-facebook-f"></i></a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-6 col-lg-2 mb-5 mb-lg-0">
                        <h5 class="text-4 text-color-light mb-3">USEFUL LINKS</h5>
                        <ul class="list list-unstyled mb-0">
                            <li class="mb-0"><a href="contact-us-1.html">Help Center</a></li>
                            <li class="mb-0"><a href="about-us.html">About Us</a></li>
                            <li class="mb-0"><a href="contact-us.html">Contact Us</a></li>
                            <li class="mb-0"><a href="page-careers.html">Careers</a></li>
                            <li class="mb-0"><a href="blog-grid-4-columns.html">Blog</a></li>
                            <li class="mb-0"><a href="#">Our Location</a></li>
                            <li class="mb-0"><a href="#">Privacy Policy</a></li>
                            <li class="mb-0"><a href="sitemap.html">Sitemap</a></li>
                        </ul>
                    </div>
                    <div class="col-md-6 col-lg-4 mb-5 mb-md-0">
                        <h5 class="text-4 text-color-light mb-3">RECENT NEWS</h5>
                        <article class="mb-3">
                            <a href="blog-post.html" class="text-color-light text-3-5">Why should I buy a Web
                                Template?</a>
                            <p class="line-height-2 mb-0"><a href="#">Nov 25, 2020</a> in <a
                                    href="#">Design,</a> <a href="#">Coding</a></p>
                        </article>
                        <article class="mb-3">
                            <a href="blog-post.html" class="text-color-light text-3-5">Creating Amazing Website with
                                Porto</a>
                            <p class="line-height-2 mb-0"><a href="#">Nov 25, 2020</a> in <a
                                    href="#">Design,</a> <a href="#">Coding</a></p>
                        </article>
                        <article>
                            <a href="blog-post.html" class="text-color-light text-3-5">Best Practices for Top UI
                                Design</a>
                            <p class="line-height-2 mb-0"><a href="#">Nov 25, 2020</a> in <a
                                    href="#">Design,</a> <a href="#">Coding</a></p>
                        </article>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <h5 class="text-4 text-color-light mb-3">SUBSCRIBE NEWSLETTER</h5>
                        <p class="mb-2">Get all the latest information on events, sales and offers. Sign up for
                            newsletter:</p>
                        <div class="alert alert-success d-none" id="newsletterSuccess">
                            <strong>Success!</strong> You've been added to our email list.
                        </div>
                        <div class="alert alert-danger d-none" id="newsletterError"></div>
                        <form id="newsletterForm" class="form-style-5 opacity-10"
                            action="php/newsletter-subscribe.php" method="POST">
                            <div class="row">
                                <div class="form-group col">
                                    <input class="form-control" placeholder="Email Address" name="newsletterEmail"
                                        id="newsletterEmail" type="text" />
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col">
                                    <button class="btn btn-primary btn-rounded btn-px-4 btn-py-2 font-weight-bold"
                                        type="submit">SUBSCRIBE</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="footer-copyright footer-copyright-style-2 pt-4 pb-5">
                    <div class="row">
                        <div class="col-12 text-center">
                            <p class="mb-0">Porto Template © 2023. All Rights Reserved</p>
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
