@extends('template')

@section('css')
    <style>
    </style>
@endsection

@section('content')
    <div class="container pt-2 pb-4">

        <div class="row pb-4 mb-2">
            <div class="col-md-3 mb-4 mb-md-0 appear-animation" data-appear-animation="fadeInLeftShorter"
                data-appear-animation-delay="300">

                <div class="owl-carousel owl-theme nav-inside nav-inside-edge nav-squared nav-with-transparency nav-dark mt-3"
                    data-plugin-options="{'items': 1, 'margin': 10, 'loop': true, 'nav': true, 'dots': false}">
                    <div>
                        <div class="img-thumbnail border-0 border-radius-0 p-0 d-block">
                            <img src="{{ asset('img/products/MICOM-P123.png') }}" class="img-fluid border-radius-0"
                                alt="">
                        </div>
                    </div>
                </div>

            </div>

            <div class="col-md-9">
                <div class="overflow-hidden">
                    <h2 class="text-color-dark font-weight-extra-bold text-5 mb-0 appear-animation"
                        data-appear-animation="maskUp" data-appear-animation-delay="600">
                        Relay Protection
                    </h2>
                    <h2 class="text-color-dark font-weight-extra-bold text-4 mb-0 appear-animation"
                        data-appear-animation="maskUp" data-appear-animation-delay="600">
                        MICOM P123, 127 FEEDER MANAGEMENT RELAY
                    </h2>
                </div>
                <p class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="800">
                    3Ph Over current (50/51P), Ground fault (50/51N) Phase & Ground Fault directional 67(P), 67N
                    Restricted earth fault (64)<br />
                    Negative sequence overcurrent (46)<br />
                    Undercurrent (37), Broken conductor (46BC)<br />
                    Circuit breaker failure (50BF), Trip Circuit Spv (TCS)<br />
                    Over/Under voltage (27/59)<br />
                    Residual over voltage (59N), Autoreclose (79) Modbus protocol/ DNP3
                </p>
            </div>

            <div class="col-12 text-center appear-animation" data-appear-animation="fadeInUpShorter"
                data-appear-animation-delay="300">
                <a href="{{ route('products.electrical') }}#relay-protection"1
                    class="btn btn-dark btn-modern btn-rounded btn-px-4 btn-py-2 mt-3">
                    Back
                </a>
            </div>
        </div>

    </div>
@endsection
