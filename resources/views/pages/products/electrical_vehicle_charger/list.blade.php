@extends('template')

@section('css')
    <style>
        .portfolio-item>.card {
            padding: 0.3rem 0.2rem;
            border: 1px solid #dadada;
        }

        @media (max-width: 576px) {
            .portfolio-list .portfolio-item {
                margin-bottom: 10px !important;
            }

            .portfolio-item>.card>.card-body {
                min-height: auto !important;
            }
        }

        .portfolio-item>.card>.card-body {
            /* min-height: 255px; */
            min-height: auto;
        }

        img.img-card {
            width: auto !important;
            max-height: 100px !important;
        }

        .portfolio-item>.card>.card-body h5 {
            font-size: 11px !important;
            line-height: .8rem;
            text-transform: none;
        }

        .portfolio-item>.card>.card-body p.text-1 {
            font-size: 9px !important;
            line-height: .8rem;
            color: #212529 !important;
            font-weight: 400 !important;
        }

        .img-card-logo-wrapper {
            position: relative;
        }

        .img-card-logo-item {
            position: absolute;
            top: 0px;
            right: 1px;
        }

        .img-card-logo {
            width: 100%;
            height: 20px;
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
            <li class="nav-item" data-option-value=".ac-and-small-commercial-dc-charger">
                <a class="nav-link text-2" href="#">
                    AC and Small Commercial DC Charger
                </a>
            </li>
            <li class="nav-item" data-option-value=".ultra-fast-dc-charger">
                <a class="nav-link text-2" href="#">
                    Ultra Fast DC Charger
                </a>
            </li>
        </ul>

        <div class="sort-destination-loader sort-destination-loader-showing mt-4 pt-2">

            <div class="row portfolio-list sort-destination lightbox" data-sort-id="portfolio"
                data-plugin-options="{'delegate': 'a.lightbox-portfolio', 'type': 'image', 'gallery': {'enabled': true}}"
                height="420px;">

                <div class="col-sm-12 isotope-item ac-and-small-commercial-dc-charger">
                    <h2 class="font-weight-extra-normal text-5 mb-0">
                        <strong class="font-weight-extra-bold">AC </strong>and Small Commercial DC Charger
                    </h2>
                </div>

                <div class="col-md-6 col-lg-1-5 isotope-item ac-and-small-commercial-dc-charger">
                    <div class="portfolio-item">
                        <div class="card">
                            <div class="img-card-logo-wrapper">
                                <div class="img-card-logo-item">
                                    <img src="{{ asset('img/products/injet-logo.png') }}" class="img-card-logo">
                                </div>
                            </div>
                            <div class="d-flex justify-content-center">
                                <div>
                                    <img src="{{ asset('img/products/Swift.jpg') }}" class="img-card">
                                </div>
                            </div>
                            <div class="card-body p-1">
                                <h5 class="font-weight-bold text-dark mb-0">
                                    HOME & WALLBOX CHARGER INJET SWIFT 2.0
                                </h5>
                                <div class="badge badge-info badge-sm font-weight-semibold mb-1" style="font-size: 9px;">
                                    AC and Small Commercial DC Charger
                                </div>
                                <p class="text-1 mb-0">
                                    with Case B & Case C versions<br />
                                    RFID reader / LEDs<br />
                                    4-inch display(colour)<br />
                                    software meter<br />
                                    Premium metal enclosure & glass-front-panel<br />
                                    OCPP 1.6J<br />
                                    Ethernet, wifi, 4G, RS485 / ModBus TCP<br />
                                    6mA+30mA AC&DC leakage<br />
                                    protection IP65
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-1-5 isotope-item ac-and-small-commercial-dc-charger">
                    <div class="portfolio-item">
                        <div class="card">
                            <div class="img-card-logo-wrapper">
                                <div class="img-card-logo-item">
                                    <img src="{{ asset('img/products/injet-logo.png') }}" class="img-card-logo">
                                </div>
                            </div>
                            <div class="d-flex justify-content-center">
                                <div>
                                    <img src="{{ asset('img/products/HUB.jpg') }}" class="img-card">
                                </div>
                            </div>
                            <div class="card-body p-1">
                                <h5 class="font-weight-bold text-dark mb-0">
                                    SMALL COMMERCIAL DC CHARGER INJET HUB
                                </h5>
                                <div class="badge badge-info badge-sm font-weight-semibold mb-1" style="font-size: 9px;">
                                    AC and Small Commercial DC Charger
                                </div>
                                <p class="text-1 mb-0">
                                    20/30/40kW output, 200-1000VDC<br />
                                    5m CCS2 charging cable<br />
                                    Modular design with replaceable power-modules<br />
                                    and easy one-man installation<br />
                                    7-inch touch display, MID meter<br />
                                    OCPP 1.6J (Hubject pre-integration for roaming)<br />
                                    Ethernet / 4G module
                                    IP54
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <div class="row portfolio-list sort-destination lightbox" data-sort-id="portfolio"
                data-plugin-options="{'delegate': 'a.lightbox-portfolio', 'type': 'image', 'gallery': {'enabled': true}}">

                <div class="col-sm-12 isotope-item ultra-fast-dc-charger">
                    <h2 class="font-weight-extra-normal text-5 mb-0">
                        <strong class="font-weight-extra-bold">Ultra </strong>Fast DC Charger
                    </h2>
                </div>

                <div class="col-md-6 col-lg-1-5 isotope-item ultra-fast-dc-charger">
                    <div class="portfolio-item">
                        <div class="card">
                            <div class="img-card-logo-wrapper">
                                <div class="img-card-logo-item">
                                    <img src="{{ asset('img/products/injet-logo.png') }}" class="img-card-logo">
                                </div>
                            </div>
                            <div class="d-flex justify-content-center">
                                <div>
                                    <img src="{{ asset('img/products/Ampax.jpg') }}" class="img-card">
                                </div>
                            </div>
                            <div class="card-body p-1">
                                <h5 class="font-weight-bold text-dark mb-0">
                                    ULTRA FAST CHARGER INJET AMPAX
                                </h5>
                                <div class="badge badge-info badge-sm font-weight-semibold mb-1" style="font-size: 9px;">
                                    Ultra Fast DC Charger
                                </div>
                                <p class="text-1 mb-0">
                                    60/120/160/180/240/320kW output<br />
                                    150-1000 VDC<br />
                                    2x 5m CCS charging cable<br />
                                    New Enclosure Design with 42-inch video screen<br />
                                    Modular design with patented INJET PPC,<br />
                                    Easy installation and easy maintenance<br />
                                    10-inch touch display, MID meter<br />
                                    OCPP 1.6J (Hubject pre-integration for roaming)<br />
                                    Ethernet / 4G module, Enclosure IP54
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-1-5 isotope-item ultra-fast-dc-charger">
                    <div class="portfolio-item">
                        <div class="card">
                            <div class="img-card-logo-wrapper">
                                <div class="img-card-logo-item">
                                    <img src="{{ asset('img/products/injet-logo.png') }}" class="img-card-logo">
                                </div>
                            </div>
                            <div class="d-flex justify-content-center">
                                <div>
                                    <img src="{{ asset('img/products/Ampax-PPM.png') }}" class="img-card">
                                </div>
                            </div>
                            <div class="card-body p-1">
                                <h5 class="font-weight-bold text-dark mb-0">
                                    PATENTED INJET PPC (OEM)
                                    <br /><small>INJET POWER INTEGRATED CHARGER CONTROLLER </small>
                                </h5>
                                <div class="badge badge-info badge-sm font-weight-semibold mb-1" style="font-size: 9px;">
                                    Ultra Fast DC Charger
                                </div>
                                <p class="text-1 mb-0">
                                    Power Controller consist 5 components:<br />
                                    1.) Power Controller<br />
                                    2.) Energy Measuring Unit<br />
                                    3.) Display<br />
                                    4.) Power Modules<br />
                                    5.) Charging Gun(s)<br />
                                    Unique INJET design leads to:<br />
                                    • Lower hardware and maintenance costs<br />
                                    • Higher availability: Charging module separated from control system,
                                    stable and safe performance, easy maintenance<br />
                                    • High Efficiency: Multiple module output modules in parallel
                                    with flexible configuration, Constant power module and
                                    smart power allocation with high charging efficiency
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </div>
@endsection
