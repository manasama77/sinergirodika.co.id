@extends('template')

@section('content')
    <div class="owl-carousel-wrapper position-relative" style="height: 670px">
        <div class="owl-carousel-loader">
            <div class="bounce-loader">
                <div class="bounce1"></div>
                <div class="bounce2"></div>
                <div class="bounce3"></div>
            </div>
        </div>
        <div class="owl-carousel dots-inside dots-horizontal-center show-dots-hover nav-inside nav-inside-plus nav-dark nav-md nav-font-size-md show-nav-hover mb-0"
            data-plugin-options="{'responsive': {'0': {'items': 1}, '479': {'items': 1}, '768': {'items': 1}, '979': {'items': 1}, '1199': {'items': 1}}, 'loop': true, 'autoHeight': false, 'margin': 0, 'dots': false, 'dotsVerticalOffset': '-75px', 'nav': true, 'animateIn': 'fadeIn', 'animateOut': 'fadeOut', 'mouseDrag': false, 'touchDrag': true, 'pullDrag': false, 'autoplay': true, 'autoplayTimeout': 9000, 'autoplayHoverPause': true, 'rewind': true}">

            <!-- Carousel Slide 1 -->
            <div class="position-relative" data-dynamic-height="['670px','670px','670px','550px','500px']"
                style="background-image: url('img/001_Slide Substation.jpg'); background-size: cover; background-position: center; height: 670px; background-color: black; filter: grayscale(20%);">

                <div class="container position-relative h-100" style="z-index: 10;">
                    <div class="d-flex flex-column align-items-center justify-content-center" style="height: 140%;">

                        <h1 class="text-color-light
                        font-weight-extra-bold text-12 mb-3 appear-animation h1-custom"
                            data-appear-animation="blurIn" data-plugin-options="{'minWindowWidth': 0}"
                            style="-webkit-text-stroke: 2px rgba(0,0,0,0.7);">
                            SUBSTATION AND ELECTRICAL SERVICES
                        </h1>
                        <a href="#" class="btn btn-dark btn-lg mb-3 appear-animation"
                            data-appear-animation="fadeInDownShorter" data-plugin-options="{'minWindowWidth': -1}">
                            LEARN MORE
                        </a>

                    </div>
                </div>
            </div>

            <!-- Carousel Slide 2 -->
            <div class="position-relative overlay overlay-show overlay-op-8"
                data-dynamic-height="['670px','670px','670px','550px','500px']"
                style="background-image: url(img/slides/slide-bg-2.jpg); background-size: cover; background-position: center; height: 670px;">
                <div class="container position-relative z-index-3 h-100">
                    <div class="row justify-content-center align-items-center h-100">
                        <div class="col-lg-6">
                            <div class="d-flex flex-column align-items-center">
                                <h3 class="position-relative text-color-light text-5 line-height-5 font-weight-medium px-4 mb-2 appear-animation"
                                    data-appear-animation="fadeInDownShorter" data-plugin-options="{'minWindowWidth': 0}">
                                    <span class="position-absolute right-100pct top-50pct transform3dy-n50 opacity-3">
                                        <img src="img/slides/slide-title-border.png" class="w-auto appear-animation"
                                            data-appear-animation="fadeInLeftShorter" data-appear-animation-delay="250"
                                            data-plugin-options="{'minWindowWidth': 0}" alt="" />
                                    </span>
                                    WE WORK HARD AND PORTO HAS
                                    <span class="position-absolute left-100pct top-50pct transform3dy-n50 opacity-3">
                                        <img src="img/slides/slide-title-border.png" class="w-auto appear-animation"
                                            data-appear-animation="fadeInRightShorter" data-appear-animation-delay="250"
                                            data-plugin-options="{'minWindowWidth': 0}" alt="" />
                                    </span>
                                </h3>
                                <h2 class="text-color-light font-weight-extra-bold text-12 mb-3 appear-animation"
                                    data-appear-animation="blurIn" data-appear-animation-delay="500"
                                    data-plugin-options="{'minWindowWidth': 0}">THE BEST DESIGN</h2>
                                <p class="text-4 text-color-light font-weight-light opacity-7 text-center mb-0"
                                    data-plugin-animated-letters
                                    data-plugin-options="{'startDelay': 1000, 'minWindowWidth': 0, 'animationSpeed': 30}">
                                    Trusted by over <strong class="text-color-light">40,000</strong> satisfied
                                    users, Porto is a huge success in the one of largest world's MarketPlace</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Carousel Slide 3 -->
            <div class="position-relative overlay overlay-color-primary overlay-show overlay-op-8"
                data-dynamic-height="['670px','670px','670px','550px','500px']"
                style="background-image: url(img/slides/slide-bg-6.jpg); background-size: cover; background-position: center; height: 670px;">
                <div class="container position-relative z-index-3 h-100">
                    <div class="row justify-content-center align-items-center h-100">
                        <div class="col-lg-6">
                            <div class="d-flex flex-column align-items-center">
                                <h3 class="position-relative text-color-light text-4 line-height-5 font-weight-medium px-4 mb-2 appear-animation"
                                    data-appear-animation="fadeInDownShorter" data-plugin-options="{'minWindowWidth': 0}">
                                    <span class="position-absolute right-100pct top-50pct transform3dy-n50 opacity-3">
                                        <img src="img/slides/slide-title-border.png" class="w-auto appear-animation"
                                            data-appear-animation="fadeInLeftShorter" data-appear-animation-delay="250"
                                            data-plugin-options="{'minWindowWidth': 0}" alt="" />
                                    </span>
                                    WE CREATE DESIGNS, WE ARE
                                    <span class="position-absolute left-100pct top-50pct transform3dy-n50 opacity-3">
                                        <img src="img/slides/slide-title-border.png" class="w-auto appear-animation"
                                            data-appear-animation="fadeInRightShorter" data-appear-animation-delay="250"
                                            data-plugin-options="{'minWindowWidth': 0}" alt="" />
                                    </span>
                                </h3>
                                <h2 class="porto-big-title text-color-light font-weight-extra-bold mb-3"
                                    data-plugin-animated-letters
                                    data-plugin-options="{'startDelay': 1000, 'minWindowWidth': 0, 'animationSpeed': 300, 'animationName': 'fadeInRightShorterOpacity', 'letterClass': 'd-inline-block'}">
                                    PORTO</h2>
                                <p class="text-4 text-color-light font-weight-light text-center mb-0"
                                    data-plugin-animated-letters
                                    data-plugin-options="{'startDelay': 2000, 'minWindowWidth': 0}">The best
                                    choice for your new website</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection
