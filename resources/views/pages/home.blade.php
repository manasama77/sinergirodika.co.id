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
            data-plugin-options="{'responsive': {'0': {'items': 1}, '479': {'items': 1}, '768': {'items': 1}, '979': {'items': 1}, '1199': {'items': 1}}, 'loop': true, 'autoHeight': false, 'margin': 0, 'dots': false, 'dotsVerticalOffset': '-75px', 'nav': true, 'animateIn': 'fadeIn', 'animateOut': 'fadeOut', 'mouseDrag': false, 'touchDrag': true, 'pullDrag': false, 'autoplay': true, 'autoplayTimeout': 30000, 'autoplayHoverPause': true, 'rewind': true}">

            <!-- Carousel Slide 1 -->
            <div class="position-relative overlay overlay-show overlay-op-4"
                data-dynamic-height="['670px','670px','670px','550px','500px']"
                style="background-image: url('img/001_Slide Substation.jpg'); background-size: cover; background-position: center; height: 670px;">

                <div class="container position-relative h-100" style="z-index: 10;">
                    <div class="d-flex flex-column align-items-center justify-content-center" style="height: 140%;">

                        <h1 class="text-color-light
                        font-weight-extra-bold text-12 mb-3 appear-animation h1-custom"
                            data-appear-animation="blurIn" data-plugin-options="{'minWindowWidth': 100}">
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
            <div class="position-relative overlay overlay-show overlay-op-4"
                data-dynamic-height="['670px','670px','670px','550px','500px']"
                style="background-image: url('img/002_Slide EVCharger.jpg'); background-size: cover; background-position: center; height: 670px;">

                <div class="container position-relative h-100" style="z-index: 10;">
                    <div class="d-flex flex-column align-items-center justify-content-center" style="height: 140%;">

                        <h1 class="text-color-light
                        font-weight-extra-bold text-12 mb-3 appear-animation h1-custom"
                            data-appear-animation="blurIn" data-plugin-options="{'minWindowWidth': 0}">
                            ELECTRIC VEHICLE CHARGER (SPKLU)
                        </h1>
                        <a href="#" class="btn btn-dark btn-lg mb-3 appear-animation"
                            data-appear-animation="fadeInDownShorter" data-plugin-options="{'minWindowWidth': -1}">
                            LEARN MORE
                        </a>

                    </div>
                </div>
            </div>

            <!-- Carousel Slide 3 -->
            <div class="position-relative overlay overlay-show overlay-op-4"
                data-dynamic-height="['670px','670px','670px','550px','500px']"
                style="background-image: url('img/003_Slide energy environment Management.jpg'); background-size: cover; background-position: center; height: 670px;">

                <div class="container-fluid position-relative h-100" style="z-index: 10;">
                    <div class="d-flex flex-column align-items-center justify-content-center" style="height: 140%;">

                        <h1 class="text-color-light
                        font-weight-extra-bold text-12 mb-3 appear-animation h1-custom"
                            data-appear-animation="blurIn" data-plugin-options="{'minWindowWidth': '100%'}">
                            ENERGY & ENVIRONMENT MANAGEMENT
                        </h1>
                        <a href="#" class="btn btn-dark btn-lg mb-3 appear-animation"
                            data-appear-animation="fadeInDownShorter" data-plugin-options="{'minWindowWidth': -1}">
                            LEARN MORE
                        </a>

                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection
