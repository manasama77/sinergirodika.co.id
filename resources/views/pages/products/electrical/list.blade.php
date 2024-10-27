@extends('template')

@section('css')
    <style>
        .portfolio-item>.card {
            padding: 0.3rem 0.2rem;
            border: 1px solid #dadada;
        }
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
            <li class="nav-item" data-option-value=".scada-system">
                <a class="nav-link text-2" href="#">
                    Scada System
                </a>
            </li>
            <li class="nav-item" data-option-value=".dc-power-supply">
                <a class="nav-link text-2" href="#">
                    DC Power Supply
                </a>
            </li>
            <li class="nav-item" data-option-value=".transformer-oil-purifier">
                <a class="nav-link text-2" href="#">
                    Transformer Oil Purifier
                </a>
            </li>
            <li class="nav-item" data-option-value=".distribution-transformer-monitoring">
                <a class="nav-link text-2" href="#">
                    Distribution Transformer monitoring
                </a>
            </li>
            <li class="nav-item" data-option-value=".temperature-monitoring-ews">
                <a class="nav-link text-2" href="#">
                    Temperature Monitoring/ EWS
                </a>
            </li>
        </ul>

        <div class="sort-destination-loader sort-destination-loader-showing mt-4 pt-2">
            <div class="row portfolio-list sort-destination lightbox" data-sort-id="portfolio"
                data-plugin-options="{'delegate': 'a.lightbox-portfolio', 'type': 'image', 'gallery': {'enabled': true}}">

                <div class="col-12 mb-3">

                    <div class="row">

                        <div class="col-sm-12 isotope-item relay-protection">
                            <h2 class="font-weight-extra-normal text-5 mb-0">
                                <strong class="font-weight-extra-bold">Relay </strong>Protection
                            </h2>
                        </div>

                        <div class="col-md-6 col-lg-3 mb-3 isotope-item relay-protection">
                            <div class="portfolio-item">
                                <div class="card">
                                    <div class="d-flex justify-content-center">
                                        <div>
                                            <img src="{{ asset('img/products/MICOM-P123.png') }}" class="card-img-top"
                                                style="height: 120px;">
                                        </div>
                                    </div>
                                    <div class="card-body p-1">
                                        <h5 class="line-height-1 font-weight-bold text-dark mb-0" style="font-size: 12px;">
                                            MICOM P123, 127 FEEDER MANAGEMENT RELAY
                                        </h5>
                                        <div class="badge badge-info badge-sm font-weight-semibold mb-1"
                                            style="font-size: 9px;">
                                            Relay
                                            Protection</div>
                                        <p class="font-weight-light text-1 mb-0" style="font-size: 10px;">
                                            3Ph Over current (50/51P), Ground fault (50/51N) Phase & Ground Fault
                                            directional 67(P), 67N
                                            Restricted earth fault (64)<br />
                                            Negative sequence overcurrent (46)<br />
                                            Undercurrent (37), Broken conductor (46BC)<br />
                                            Circuit breaker failure (50BF), Trip Circuit Spv (TCS)<br />
                                            Over/Under voltage (27/59)<br />
                                            Residual over voltage (59N), Autoreclose (79) Modbus protocol/ DNP3
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6 col-lg-3 mb-3 isotope-item relay-protection">
                            <div class="portfolio-item">
                                <div class="card">
                                    <div class="d-flex justify-content-center">
                                        <div>
                                            <img src="{{ asset('img/products/MICOM-P142.png') }}" class="card-img-top"
                                                style="height: 120px;">
                                        </div>
                                    </div>
                                    <div class="card-body p-1">
                                        <h5 class="line-height-1 font-weight-bold text-dark mb-0" style="font-size: 12px;">
                                            MICOM P142 ,P143 FEEDER MANAGEMENT RELAY IEC61830 SAS
                                        </h5>
                                        <div class="badge badge-info badge-sm font-weight-semibold mb-1"
                                            style="font-size: 9px;">
                                            Relay
                                            Protection
                                        </div>
                                        <p class="font-weight-light text-1 mb-0" style="font-size: 10px;">
                                            3Ph Over current (50/51P), Ground fault (50/51N)<br />
                                            Phase & Ground Fault directional 67(P), 67N Restricted earth fault (64)<br />
                                            Negative sequence over current (46)<br />
                                            Undercurrent (37), Broken conductor (46BC)<br />
                                            Circuit breaker failure (50BF), (TCS) Over/Under voltage (27/59),Residual
                                            overvoltage (59N),
                                            Auto reclose (79), IEC 61860 protocol SAS/ DNP3
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6 col-lg-3 mb-3 isotope-item relay-protection">
                            <div class="portfolio-item">
                                <div class="card">
                                    <div class="d-flex justify-content-center">
                                        <div>
                                            <img src="{{ asset('img/products/MICOM-P543.png') }}" class="card-img-top"
                                                style="height: 120px;">
                                        </div>
                                    </div>
                                    <div class="card-body p-1">
                                        <h5 class="line-height-1 font-weight-bold text-dark mb-0" style="font-size: 12px;">
                                            MICOM P543 LINE CURRENT DIFFERENTIAL RELAY
                                        </h5>
                                        <div class="badge badge-info badge-sm font-weight-semibold mb-1"
                                            style="font-size: 9px;">
                                            Relay
                                            Protection
                                        </div>
                                        <p class="font-weight-light text-1 mb-0" style="font-size: 10px;">
                                            3ph Overcurrent/ Groundfault 50N/51N, Directional earth fault<br />
                                            Undervoltage ANSI Code: 27, Overvoltage ANSI Code: 59<br />
                                            Negative/unbalanced sequence ANSI code: 46<br />
                                            Directional phase overcurrent, Thermal overload protection ANSI code:
                                            49RMS<br />
                                            Watt metric grounding, Synchronization - check ANSI code: 25<br />
                                            Underfrequency ANSI Code: 81L<br />
                                            Over frequency Number of inputs16 discrete<br />
                                            5 CT current inputs...X/5 A and X/1 A, 4 voltages Number of outputs14
                                            discrete<br />
                                            Communication port protocols DNP3, IEC 61850, Ethernet, Modbus RTU, Event
                                            recording
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6 col-lg-3 mb-3 isotope-item relay-protection">
                            <div class="portfolio-item">
                                <div class="card">
                                    <div class="d-flex justify-content-center">
                                        <div>
                                            <img src="{{ asset('img/products/EASERGY-P3.png') }}" class="card-img-top"
                                                style="height: 120px;">
                                        </div>
                                    </div>
                                    <div class="card-body p-1">
                                        <h5 class="line-height-1 font-weight-bold text-dark mb-0"
                                            style="font-size: 12px;">
                                            EASERGY P3, P5
                                        </h5>
                                        <div class="badge badge-info badge-sm font-weight-semibold mb-1"
                                            style="font-size: 9px;">
                                            Relay
                                            Protection
                                        </div>
                                        <p class="font-weight-light text-1 mb-0" style="font-size: 10px;">
                                            Built-in arc flash protection<br />
                                            Advanced cybersecurity compliant to IEC 62443<br />
                                            Intuitive withdrawable design with backup memory<br />
                                            Plug and play hardware expansion<br />
                                            EF, Dir OCR, Dir EF, UFR, OVR, 32 Reverse Power 10DI + 8DO + Back Up Memory
                                            Protocol IEC
                                            61850 for SAS and DNP 3 serial for DCC Simultaneous
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="col-md-6 col-lg-3 isotope-item generator-ats-amf-and-ups">
                    <div class="portfolio-item">
                        <span
                            class="thumb-info thumb-info-lighten thumb-info-no-borders thumb-info-bottom-info thumb-info-centered-icons border-radius-0">
                            <span class="thumb-info-wrapper border-radius-0">

                                <img src="{{ asset('img/products/generator-cummins.png') }}"
                                    class="img-fluid border-radius-0" alt="">

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

                                <img src="{{ asset('img/products/UPS.png') }}" class="img-fluid border-radius-0"
                                    alt="">

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

                                <img src="{{ asset('img/products/AMF.png') }}" class="img-fluid border-radius-0"
                                    alt="">

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

                                <img src="{{ asset('img/products/MK6E CLASS 0.2S.png') }}"
                                    class="img-fluid border-radius-0" alt="">

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

                                <img src="{{ asset('img/products/MK-6N Class 0.5S.png') }}"
                                    class="img-fluid border-radius-0" alt="">

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
