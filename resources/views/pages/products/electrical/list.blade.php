@extends('template')

@section('css')
    <style>
    </style>
@endsection

@section('content')
    <div class="container py-3">
        <ul class="nav nav-pills sort-source sort-source-style-3 justify-content-center" data-sort-id="portfolio"
            data-option-key="filter" data-plugin-options="{'layoutMode': 'fitRows', 'filter': '*'}">
            <li class="nav-item active" data-option-value="*">
                <a class="nav-link text-2 active" href="#">
                    Show All
                </a>
            </li>
            <li class="nav-item" data-option-value=".relay-protection">
                <a class="nav-link text-2" href="#">
                    Relay Protection
                </a>
            </li>
            <li class="nav-item" data-option-value=".generator-ats-amf-and-ups">
                <a class="nav-link text-2" href="#">
                    Generator ATS AMF and UPS
                </a>
            </li>
            <li class="nav-item" data-option-value=".energy-metering">
                <a class="nav-link text-2" href="#">
                    Energy Metering
                </a>
            </li>
            <li class="nav-item" data-option-value=".medias">
                <a class="nav-link text-2" href="#">
                    Scada System
                </a>
            </li>
            <li class="nav-item" data-option-value=".medias">
                <a class="nav-link text-2" href="#">
                    DC Power Supply
                </a>
            </li>
            <li class="nav-item" data-option-value=".medias">
                <a class="nav-link text-2" href="#">
                    Transformer Oil Purifier
                </a>
            </li>
            <li class="nav-item" data-option-value=".medias">
                <a class="nav-link text-2" href="#">
                    Distribution Transformer monitoring
                </a>
            </li>
            <li class="nav-item" data-option-value=".medias">
                <a class="nav-link text-2" href="#">
                    Temperature Monitoring/ EWS
                </a>
            </li>
        </ul>

        <div class="sort-destination-loader sort-destination-loader-showing mt-4 pt-2">
            <div class="row portfolio-list sort-destination lightbox" data-sort-id="portfolio"
                data-plugin-options="{'delegate': 'a.lightbox-portfolio', 'type': 'image', 'gallery': {'enabled': true}}">

                <div class="col-md-6 col-lg-3 isotope-item relay-protection">
                    <div class="portfolio-item">
                        <span
                            class="thumb-info thumb-info-lighten thumb-info-no-borders thumb-info-bottom-info thumb-info-centered-icons border-radius-0">
                            <span class="thumb-info-wrapper border-radius-0">

                                <span class="owl-carousel owl-theme dots-inside m-0"
                                    data-plugin-options="{'items': 1, 'margin': 20, 'animateOut': 'fadeOut', 'autoplay': true, 'autoplayTimeout': 3000}">
                                    <span>
                                        <img src="{{ asset('img/products/MICOM-P123.png') }}"
                                            class="img-fluid border-radius-0" alt="MICOM P123">
                                    </span>
                                </span>

                                <span class="thumb-info-title">
                                    <span
                                        class="thumb-info-inner line-height-1 font-weight-bold text-dark position-relative top-3">
                                        MICOM P123, 127 FEEDER MANAGEMENT RELAY
                                    </span>
                                    <span class="thumb-info-type">Relay Protection</span>
                                </span>
                                <span class="thumb-info-action">
                                    <a href="{{ route('products.electrical.micom-p123-127-feeder-management-relay') }}">
                                        <span class="thumb-info-action-icon thumb-info-action-icon-primary">
                                            <i class="fas fa-link"></i>
                                        </span>
                                    </a>
                                </span>
                            </span>
                        </span>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3 isotope-item relay-protection">
                    <div class="portfolio-item">
                        <span
                            class="thumb-info thumb-info-lighten thumb-info-no-borders thumb-info-bottom-info thumb-info-centered-icons border-radius-0">
                            <span class="thumb-info-wrapper border-radius-0">

                                <span class="owl-carousel owl-theme dots-inside m-0"
                                    data-plugin-options="{'items': 1, 'margin': 20, 'animateOut': 'fadeOut', 'autoplay': true, 'autoplayTimeout': 3000}">
                                    <span>
                                        <img src="{{ asset('img/products/MICOM-P142.png') }}"
                                            class="img-fluid border-radius-0" alt="">
                                    </span>
                                </span>

                                <span class="thumb-info-title">
                                    <span
                                        class="thumb-info-inner line-height-1 font-weight-bold text-dark position-relative top-3">
                                        MICOM P142 ,P143 FEEDER MANAGEMENT RELAY IEC61830 SAS
                                    </span>
                                    <span class="thumb-info-type">Relay Protection</span>
                                </span>
                                <span class="thumb-info-action">
                                    <a href="{{ route('products.electrical.micom-p123-127-feeder-management-relay') }}">
                                        <span class="thumb-info-action-icon thumb-info-action-icon-primary">
                                            <i class="fas fa-link"></i>
                                        </span>
                                    </a>
                                </span>
                            </span>
                        </span>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3 isotope-item relay-protection">
                    <div class="portfolio-item">
                        <span
                            class="thumb-info thumb-info-lighten thumb-info-no-borders thumb-info-bottom-info thumb-info-centered-icons border-radius-0">
                            <span class="thumb-info-wrapper border-radius-0">

                                <span class="owl-carousel owl-theme dots-inside m-0"
                                    data-plugin-options="{'items': 1, 'margin': 20, 'animateOut': 'fadeOut', 'autoplay': true, 'autoplayTimeout': 3000}">
                                    <span>
                                        <img src="{{ asset('img/products/MICOM-P543.png') }}"
                                            class="img-fluid border-radius-0" alt="">
                                    </span>
                                </span>

                                <span class="thumb-info-title">
                                    <span
                                        class="thumb-info-inner line-height-1 font-weight-bold text-dark position-relative top-3">
                                        MICOM P543 LINE CURRENT DIFFERENTIAL RELAY
                                    </span>
                                    <span class="thumb-info-type">Relay Protection</span>
                                </span>
                                <span class="thumb-info-action">
                                    <a href="{{ route('products.electrical.micom-p123-127-feeder-management-relay') }}">
                                        <span class="thumb-info-action-icon thumb-info-action-icon-primary">
                                            <i class="fas fa-link"></i>
                                        </span>
                                    </a>
                                </span>
                            </span>
                        </span>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3 isotope-item relay-protection">
                    <div class="portfolio-item">
                        <span
                            class="thumb-info thumb-info-lighten thumb-info-no-borders thumb-info-bottom-info thumb-info-centered-icons border-radius-0">
                            <span class="thumb-info-wrapper border-radius-0">

                                <span class="owl-carousel owl-theme dots-inside m-0"
                                    data-plugin-options="{'items': 1, 'margin': 20, 'animateOut': 'fadeOut', 'autoplay': true, 'autoplayTimeout': 3000}">
                                    <span>
                                        <img src="{{ asset('img/products/EASERGY-P3.png') }}"
                                            class="img-fluid border-radius-0" alt="">
                                    </span>
                                    <span>
                                        <img src="{{ asset('img/products/EASERGY-P5.png') }}"
                                            class="img-fluid border-radius-0" alt="">
                                    </span>
                                </span>

                                <span class="thumb-info-title">
                                    <span
                                        class="thumb-info-inner line-height-1 font-weight-bold text-dark position-relative top-3">
                                        EASERGY P3, P5
                                    </span>
                                    <span class="thumb-info-type">Relay Protection</span>
                                </span>
                                <span class="thumb-info-action">
                                    <a href="{{ route('products.electrical.micom-p123-127-feeder-management-relay') }}">
                                        <span class="thumb-info-action-icon thumb-info-action-icon-primary">
                                            <i class="fas fa-link"></i>
                                        </span>
                                    </a>
                                </span>
                            </span>
                        </span>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3 isotope-item generator-ats-amf-and-ups">
                    <div class="portfolio-item">
                        <span
                            class="thumb-info thumb-info-lighten thumb-info-no-borders thumb-info-bottom-info thumb-info-centered-icons border-radius-0">
                            <span class="thumb-info-wrapper border-radius-0">

                                <span class="owl-carousel owl-theme dots-inside m-0"
                                    data-plugin-options="{'items': 1, 'margin': 20, 'animateOut': 'fadeOut', 'autoplay': true, 'autoplayTimeout': 3000}">
                                    <span>
                                        <img src="{{ asset('img/products/generator-cummins.png') }}"
                                            class="img-fluid border-radius-0" alt="">
                                    </span>
                                    <span>
                                        <img src="{{ asset('img/products/generator-perkins.png') }}"
                                            class="img-fluid border-radius-0" alt="">
                                    </span>
                                </span>

                                <span class="thumb-info-title">
                                    <span
                                        class="thumb-info-inner line-height-1 font-weight-bold text-dark position-relative top-3">
                                        GENERATOR SET
                                    </span>
                                    <span class="thumb-info-type">Generator ATS AMF and UPS</span>
                                </span>
                                <span class="thumb-info-action">
                                    <a href="{{ route('products.electrical.micom-p123-127-feeder-management-relay') }}">
                                        <span class="thumb-info-action-icon thumb-info-action-icon-primary">
                                            <i class="fas fa-link"></i>
                                        </span>
                                    </a>
                                </span>
                            </span>
                        </span>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3 isotope-item generator-ats-amf-and-ups">
                    <div class="portfolio-item">
                        <span
                            class="thumb-info thumb-info-lighten thumb-info-no-borders thumb-info-bottom-info thumb-info-centered-icons border-radius-0">
                            <span class="thumb-info-wrapper border-radius-0">

                                <span class="owl-carousel owl-theme dots-inside m-0"
                                    data-plugin-options="{'items': 1, 'margin': 20, 'animateOut': 'fadeOut', 'autoplay': true, 'autoplayTimeout': 3000}">
                                    <span>
                                        <img src="{{ asset('img/products/UPS.png') }}" class="img-fluid border-radius-0"
                                            alt="">
                                    </span>
                                </span>

                                <span class="thumb-info-title">
                                    <span
                                        class="thumb-info-inner line-height-1 font-weight-bold text-dark position-relative top-3">
                                        UPS
                                    </span>
                                    <span class="thumb-info-type">Generator ATS AMF and UPS</span>
                                </span>
                                <span class="thumb-info-action">
                                    <a href="{{ route('products.electrical.micom-p123-127-feeder-management-relay') }}">
                                        <span class="thumb-info-action-icon thumb-info-action-icon-primary">
                                            <i class="fas fa-link"></i>
                                        </span>
                                    </a>
                                </span>
                            </span>
                        </span>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3 isotope-item generator-ats-amf-and-ups">
                    <div class="portfolio-item">
                        <span
                            class="thumb-info thumb-info-lighten thumb-info-no-borders thumb-info-bottom-info thumb-info-centered-icons border-radius-0">
                            <span class="thumb-info-wrapper border-radius-0">

                                <span class="owl-carousel owl-theme dots-inside m-0"
                                    data-plugin-options="{'items': 1, 'margin': 20, 'animateOut': 'fadeOut', 'autoplay': true, 'autoplayTimeout': 3000}">
                                    <span>
                                        <img src="{{ asset('img/products/ATS.png') }}" class="img-fluid border-radius-0"
                                            alt="">
                                    </span>
                                    <span>
                                        <img src="{{ asset('img/products/AMF.png') }}" class="img-fluid border-radius-0"
                                            alt="">
                                    </span>
                                </span>

                                <span class="thumb-info-title">
                                    <span
                                        class="thumb-info-inner line-height-1 font-weight-bold text-dark position-relative top-3">
                                        ATS AMF
                                    </span>
                                    <span class="thumb-info-type">Generator ATS AMF and UPS</span>
                                </span>
                                <span class="thumb-info-action">
                                    <a href="{{ route('products.electrical.micom-p123-127-feeder-management-relay') }}">
                                        <span class="thumb-info-action-icon thumb-info-action-icon-primary">
                                            <i class="fas fa-link"></i>
                                        </span>
                                    </a>
                                </span>
                            </span>
                        </span>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3 isotope-item energy-metering">
                    <div class="portfolio-item">
                        <span
                            class="thumb-info thumb-info-lighten thumb-info-no-borders thumb-info-bottom-info thumb-info-centered-icons border-radius-0">
                            <span class="thumb-info-wrapper border-radius-0">

                                <span class="owl-carousel owl-theme dots-inside m-0"
                                    data-plugin-options="{'items': 1, 'margin': 20, 'animateOut': 'fadeOut', 'autoplay': true, 'autoplayTimeout': 3000}">
                                    <span>
                                        <img src="{{ asset('img/products/MK6E CLASS 0.2S.png') }}"
                                            class="img-fluid border-radius-0" alt="">
                                        {{-- <img src="{{ asset('img/products/Picture1.png') }}"
                                            class="img-fluid border-radius-0" alt=""> --}}
                                    </span>
                                </span>

                                <span class="thumb-info-title">
                                    <span
                                        class="thumb-info-inner line-height-1 font-weight-bold text-dark position-relative top-3">
                                        MK6E CLASS 0.2S
                                    </span>
                                    <span class="thumb-info-type">Energy Metering</span>
                                </span>
                                <span class="thumb-info-action">
                                    <a href="{{ route('products.electrical.micom-p123-127-feeder-management-relay') }}">
                                        <span class="thumb-info-action-icon thumb-info-action-icon-primary">
                                            <i class="fas fa-link"></i>
                                        </span>
                                    </a>
                                </span>
                            </span>
                        </span>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3 isotope-item energy-metering">
                    <div class="portfolio-item">
                        <span
                            class="thumb-info thumb-info-lighten thumb-info-no-borders thumb-info-bottom-info thumb-info-centered-icons border-radius-0">
                            <span class="thumb-info-wrapper border-radius-0">

                                <span class="owl-carousel owl-theme dots-inside m-0"
                                    data-plugin-options="{'items': 1, 'margin': 20, 'animateOut': 'fadeOut', 'autoplay': true, 'autoplayTimeout': 3000}">
                                    <span>
                                        <img src="{{ asset('img/products/MK-6N Class 0.5S.png') }}"
                                            class="img-fluid border-radius-0" alt="">
                                    </span>
                                </span>

                                <span class="thumb-info-title">
                                    <span
                                        class="thumb-info-inner line-height-1 font-weight-bold text-dark position-relative top-3">
                                        MK-6N Class 0.5S
                                    </span>
                                    <span class="thumb-info-type">Energy Metering</span>
                                </span>
                                <span class="thumb-info-action">
                                    <a href="{{ route('products.electrical.micom-p123-127-feeder-management-relay') }}">
                                        <span class="thumb-info-action-icon thumb-info-action-icon-primary">
                                            <i class="fas fa-link"></i>
                                        </span>
                                    </a>
                                </span>
                            </span>
                        </span>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
