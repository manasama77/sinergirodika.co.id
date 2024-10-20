@extends('template')

@section('css')
    <style>
        html,
        body {
            scroll-margin-top: 10px;
        }

        #relay-protection {
            scroll-margin-top: 85px;
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
                    <strong class="font-weight-extra-bold">ELECTRICAL</strong>
                </h2>

                <div id="relay-protection" class="my-3">
                    <h3 class="font-weight-bold text-4 mb-2">GENSET AMF BACK UP POWER SUPPLY</h3>

                    <div class="row">
                        <div class="col-sm-12 col-md-6 mb-3">
                            <div class="row">
                                <div class="col-12 d-flex justify-content-center">
                                    <img src="{{ asset('img/generator-cummins.png') }}" alt="generator-cummins"
                                        style="width: auto; height: 120px;" />
                                </div>
                                <div class="col-12 d-flex justify-content-center">
                                    <img src="{{ asset('img/cummins-logo.png') }}" alt="cummins logo"
                                        style="width: auto; height: 50px;" />
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-6 mb-3">
                            <div class="row">
                                <div class="col-12 d-flex justify-content-center">
                                    <img src="{{ asset('img/generator-perkins.jpg') }}" alt="generator-perkins"
                                        style="width: auto; height: 120px;" />
                                </div>
                                <div class="col-12 d-flex justify-content-center">
                                    <img src="{{ asset('img/perkins-logo.png') }}" alt="perkins logo"
                                        style="width: auto; height: 50px;" />
                                </div>
                            </div>
                        </div>
                    </div>
                    <h4 class="font-weight-bold text-3 mb-2">GENERATOR SET</h4>
                    <p class="mb-4">Silent Type, Trailer (option)
                        Engine : Cummins/Perkins
                        Alternator : Stamford
                        Power Output : 50 - 1500 kVA
                        Phase 3 ( Three) 3 ( Three)
                        Frequency 50 Hz @1500RPM 50 Hz @1500RPM
                        Voltage 220 / 380 V 220 / 380 V
                        High quality, reliable and complete generating sets.
                        Easy for operation and maintenance.
                        Compact structure &high-strength chassis.
                        Base frame design incorporates an intergrade fuel tank for at least 8 hours running (up to 650KVA).
                        Anti- vibration pads are mounted between the engine/alternator feet and the base frame.</p>

                    <div class="row">
                        <div class="col-sm-12 mb-3 d-flex justify-content-center">
                            <img src="{{ asset('img/UPS.png') }}" alt="UPS" style="width: auto; height: 150px;" />
                        </div>
                    </div>
                    <h4 class="font-weight-bold text-3 mb-2">UPS</h4>
                    <p>The UPS provides continuous power from the internal battery until utility power
                        returns to safe levels or the battery is fully discharged.</p>
                    <ul class="mb-4">
                        <li>Intuitive LCD interface</li>
                        <li>Capacity 1-30kVA</li>
                        <li>Predictive replace battery date</li>
                        <li>Energy meter - Provides actual kilowatt hours of usage for energy conscious users.</li>
                        <li>Pure sine wave output on battery - Battery failure notification - Provides early-warning fault
                            analysis on batteries enabling timely preventive maintenance</li>
                        <li>Serial Connectivity - for Scada application</li>
                    </ul>

                    <div class="row">
                        <div class="col-sm-12 col-md-6 mb-3 d-flex justify-content-center">
                            <img src="{{ asset('img/ATS.png') }}" alt="ats" style="width: auto; height: 120px;" />
                        </div>
                        <div class="col-sm-12 col-md-6 mb-3 d-flex justify-content-center">
                            <img src="{{ asset('img/AMF.png') }}" alt="AMF" style="width: auto; height: 120px;" />
                        </div>
                    </div>
                    <h4 class="font-weight-bold text-3 mb-2">ATS AMF</h4>
                    <p>The electronic control unit (AMF) automatically detects the conditions of absence and return of the
                        mains, managing both the startup and shutdown of the generator, and the switching of the contactor
                        (ATS).</p>
                    <ul class="mb-4">
                        <li>Powder coating Box Panel Wall mounting (Custom dimension)</li>
                        <li>COS 4P 160A Transfer switch Motorized</li>
                        <li>Digital metering Volt Ampere Frequency LED display</li>
                        <li>Mode Auto - Manual or selector A-O-M</li>
                        <li>Load indication PLN-Load-Genset dengan pilot lamp
                            Overcurrent protection MCCB 3P 125A </li>
                        <li>Setting Close delay dan return delay</li>
                        <li>Automatic Battery charger 12/24V 5A </li>
                        <li>Under/over voltage Protection phase failure relay</li>
                        <li>Modul Automatic Main Failure (AMF)</li>
                        <li>Deepsea ATS controller</li>
                    </ul>

                </div>

            </div>

        </div>
    </div>
@endsection
