@extends('template')

@section('css')
    <style>
        table>tbody>tr>td {
            font-size: 0.7rem;
        }

        .table-sm>:not(caption)>*>* {
            padding: 0rem 0rem;
        }
    </style>
@endsection

@section('content')
    <div class="container pt-3 pb-5">
        <div class="row pt-2">
            <div class="col-lg-3 position-relative">
                @include('pages.products.aside')
            </div>
            <div class="col-lg-9">

                <h2 class="font-weight-extra-normal text-7 mb-3">
                    <strong class="font-weight-extra-bold">TEST & MEASUREMENT TOOLS</strong>
                </h2>

                <div class="row">
                    <div class="col-sm-12 col-md-6 mb-1">
                        <div class="d-flex justify-content-center">
                            <div>
                                <img src="{{ asset('img/POWER QUALITY ANALYZER PQ3198, PQ3100.png') }}"
                                    alt="POWER QUALITY ANALYZER PQ3198, PQ3100" class="mb-1 img-fluid" />
                                <h3 class="text-3 font-weight-semi-bold mb-0">POWER QUALITY ANALYZER PQ3198, PQ310</h3>
                                <p class="mb-3">
                                    Class A international standards
                                    Basic voltage accuracy of ±0.1%
                                    High-voltage, wideband performance
                                    Two-circuit measurement
                                    GPS time synchronization
                                    Voltage ±0.1% of nominal voltage
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6 mb-1">
                        <div class="row">
                            <div class="col-5">
                                <div class="d-flex justify-content-center">
                                    <img src="{{ asset('img/HI TESTER CM - 3286.png') }}" alt="HI TESTER CM - 3286"
                                        class="img-fluid" />
                                </div>
                            </div>
                            <div class="col-7">
                                <div class="d-flex justify-content-center">
                                    <img src="{{ asset('img/HIOKI LOGO.png') }}" alt="HIOKI LOGO" class="img-fluid" />
                                </div>
                                <h3 class="text-3 font-weight-semi-bold mb-0">HI TESTER CM - 3286 </h3>
                                <p class="mb-3">
                                    Check Harmonics and PF
                                    20 -1000 A AC
                                    150 - 600 V AC
                                    3 - 1200 kW
                                    Freq, Reactivity, phase angle
                                    Bluetooth connection
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6 mb-1">
                        <div class="row">
                            <div class="col-4">
                                <div class="d-flex justify-content-center">
                                    <img src="{{ asset('img/THERMAL CAMERA FLIR EX.jpg') }}" alt="THERMAL CAMERA FLIR EX"
                                        class="img-fluid" />
                                </div>
                            </div>
                            <div class="col-8">
                                <div class="d-flex justify-content-center">
                                    <img src="{{ asset('img/FLIR LOGO.png') }}" alt="FLIR LOGO" class="img-fluid" />
                                </div>
                                <h3 class="text-3 font-weight-semi-bold mb-0">THERMAL CAMERA FLIR EX </h3>
                                <p class="mb-3">
                                    Measuring temperatures from
                                    -20°C to 550°C
                                    MSX® technology (thermal imaging)
                                    Wi-Fi connectivity Android/ IOS
                                    IR Resolution :
                                    E4 80 × 60 (4,800 pixels)
                                    E5-XT 160 × 120 (19,200 pixels)
                                    E6-XT 240 × 180 (43,200 pixels)
                                    E8-XT 320 × 240 (76,800 pixels)
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6 mb-1">
                        <div class="row">
                            <div class="col-sm-12 col-md-4">
                                <div class="d-flex justify-content-center">
                                    <img src="{{ asset('img/20 kV Amp stick & Volt stick.png') }}"
                                        alt="20 kV Amp stick & Volt stick" class="img-fluid" />
                                </div>
                                <h4 class="text-2 font-weight-semi-bold mb-0 text-center">20 kV Amp stick & Volt stick</h4>
                            </div>
                            <div class="col-sm-12 col-md-4">
                                <div class="d-flex justify-content-center">
                                    <img src="{{ asset('img/20 kV Voltage Detector.png') }}" alt="20 kV Voltage Detector"
                                        class="img-fluid" />
                                </div>
                                <h4 class="text-2 font-weight-semi-bold mb-0 text-center">20 kV Voltage Detector</h4>
                            </div>
                            <div class="col-sm-12 col-md-4">
                                <div class="d-flex justify-content-center">
                                    <img src="{{ asset('img/Grounding sets Telescopic stick.png') }}"
                                        alt="Grounding sets Telescopic stick" class="img-fluid" />
                                </div>
                                <h4 class="text-2 font-weight-semi-bold mb-0 text-center">Grounding sets Telescopic stick
                                </h4>
                            </div>
                            <div class="col-sm-12">
                                <div class="d-flex justify-content-center">
                                    <img src="{{ asset('img/Plastic seals (Segel).png') }}" alt="Plastic seals (Segel)"
                                        class="img-fluid" />
                                </div>
                                <h4 class="text-2 font-weight-semi-bold mb-0 text-center">Plastic seals (Segel)</h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 mb-1">
                        <div class="d-flex justify-content-center">
                            <img src="{{ asset('img/Safety Equipment.jpg') }}" alt="Safety Equipment" class="img-fluid" />
                        </div>
                        <h4 class="text-2 font-weight-semi-bold mb-0 text-center">Safety Equipment</h4>
                    </div>
                </div>

            </div>

        </div>
    </div>
@endsection
