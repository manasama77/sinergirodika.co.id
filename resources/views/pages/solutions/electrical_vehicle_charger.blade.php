@extends('template')

@section('css')
    <style>
        #electrical-service {
            scroll-margin-top: 180px;
        }

        #relay-protection {
            scroll-margin-top: 80px;
        }
    </style>
@endsection

@section('content')
    <div class="container pt-3 pb-2">
        <div class="row">
            <div class="col-lg-3 position-relative">
                @include('pages.solutions.aside')
            </div>
            <div class="col-lg-9">
                <div class="row">
                    <div class="col-12 col-md-6 d-flex justify-content-center mb-3">
                        <span class="thumb-info thumb-info-hide-wrapper-bg">
                            <span class="thumb-info-wrapper">
                                <img src="{{ asset('img/integrated-EVC.jpg') }}" alt="Integrated EV Charger"
                                    style="width: auto; max-height: 280px;">
                                <span class="thumb-info-title">
                                    <span class="thumb-info-inner">Integrated EV Charger</span>
                                    <a href="{{ route('products.electrical-vehicle-charger') }}"
                                        class="thumb-info-type text-white">More Product</a>
                                </span>
                            </span>
                        </span>
                    </div>
                    <div class="col-12 col-md-6 d-flex justify-content-center mb-3">
                        <span class="thumb-info thumb-info-hide-wrapper-bg">
                            <span class="thumb-info-wrapper">
                                <img src="{{ asset('img/Ultra-Fast.jpg') }}" alt="Ultra Fast  EV Charger up to 320kW"
                                    style="width: auto; max-height: 280px;">
                                <span class="thumb-info-title">
                                    <span class="thumb-info-inner">Ultra Fast EV Charger up to 320kW</span>
                                    <a href="{{ route('products.electrical-vehicle-charger') }}#ultra-fast-dc-charger"
                                        class="thumb-info-type text-white">More Product</a>
                                </span>
                            </span>
                        </span>
                    </div>
                    <div class="col-12 col-md-4 d-flex justify-content-center mb-3">
                        <span class="thumb-info thumb-info-hide-wrapper-bg">
                            <span class="thumb-info-wrapper">
                                <img src="{{ asset('img/Swift.jpg') }}" alt="Home Wallbox Charger SWIFT 2.0AC 7/11/22 kW"
                                    style="width: auto; max-height: 280px;">
                                <span class="thumb-info-title">
                                    <span class="thumb-info-inner">Home Wallbox Charger SWIFT 2.0 AC 7/11/22 kW</span>
                                    <a href="{{ route('products.electrical-vehicle-charger') }}#ac-and-small-commercial-dc-charger"
                                        class="thumb-info-type text-white">More Product</a>
                                </span>
                            </span>
                        </span>
                    </div>
                    <div class="col-12 col-md-4 d-flex justify-content-center mb-3">
                        <span class="thumb-info thumb-info-hide-wrapper-bg">
                            <span class="thumb-info-wrapper">
                                <img src="{{ asset('img/HUB.jpg') }}" alt="Small Commercial HUB DC 20/30/40 kW"
                                    style="width: auto; max-height: 280px;">
                                <span class="thumb-info-title">
                                    <span class="thumb-info-inner">Small Commercial HUB DC 20/30/40 kW</span>
                                    <a href="{{ route('products.electrical-vehicle-charger') }}#ac-and-small-commercial-dc-charger"
                                        class="thumb-info-type text-white">More Product</a>
                                </span>
                            </span>
                        </span>
                    </div>
                    <div class="col-12 col-md-4 d-flex justify-content-center mb-3">
                        <span class="thumb-info thumb-info-hide-wrapper-bg">
                            <span class="thumb-info-wrapper">
                                <img src="{{ asset('img/Ampax.jpg') }}"
                                    alt="Ultra Fast Charger AMPAX 60/120/160/180/240/ 320 kw"
                                    style="width: auto; max-height: 280px;">
                                <span class="thumb-info-title">
                                    <span class="thumb-info-inner">
                                        Ultra Fast Charger AMPAX 60/120/160/180/240/ 320 kw
                                    </span>
                                    <a href="{{ route('products.electrical-vehicle-charger') }}#ultra-fast-dc-charger"
                                        class="thumb-info-type text-white">More Product</a>
                                </span>
                            </span>
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
