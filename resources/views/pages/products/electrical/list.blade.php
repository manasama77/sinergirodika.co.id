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
            right: 0px;
        }

        .img-card-logo {
            height: 100%;
            width: 35px;
        }

        .img-logo {
            width: auto;
            height: 25px;
            margin-bottom: 10px;
        }

        .badge {
            white-space: normal !important;
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
                    Distribution Transformer Monitoring
                </a>
            </li>
            <li class="nav-item" data-option-value=".temperature-monitoring-ews">
                <a class="nav-link text-2" href="#">
                    Temperature Monitoring / EWS
                </a>
            </li>
        </ul>

        <div class="sort-destination-loader sort-destination-loader-showing mt-4 pt-2">

            <div class="row portfolio-list sort-destination lightbox" data-sort-id="portfolio"
                data-plugin-options="{'delegate': 'a.lightbox-portfolio', 'type': 'image', 'gallery': {'enabled': true}}"
                height="420px;">

                <div class="col-sm-12 isotope-item relay-protection">
                    <h2 class="font-weight-extra-normal text-5 mb-0">
                        <strong class="font-weight-extra-bold">Relay </strong>Protection
                    </h2>
                    <div class="text-center">
                        <img src="{{ asset('img/products/Schneider_Electric-Logo.svg') }}" class="img-logo">
                    </div>
                </div>

                <div class="col-md-6 col-lg-1-5 isotope-item relay-protection">
                    <div class="portfolio-item">
                        <div class="card">
                            <div class="d-flex justify-content-center">
                                <div>
                                    <img src="{{ asset('img/products/Micom P123.jpg') }}" class="img-card">
                                </div>
                            </div>
                            <div class="card-body p-1">
                                <h5 class="font-weight-bold text-dark mb-0">
                                    OC AND GF FAULT PROTECTION RELAY MICOM P123
                                </h5>
                                <div class="badge badge-info badge-sm font-weight-semibold mb-1" style="font-size: 9px;">
                                    Relay
                                    Protection</div>
                                <p class="text-1 mb-0">
                                    3Ph Over current (50/51P), Ground fault (50/51N) Undercurrent (37), Broken
                                    conductor (46BC) Circuit breaker failure (50BF), Autoreclose (79) Modbus
                                    protocol/ DNP3, Cold load pick-up lockout (86), thermal overload protection (49)
                                    Phase undercurrent (37)<br />
                                    Negatif sequence overcurrent (46)<br />
                                    Restricted earth fault (64REF)<br />
                                    Number of inputs 4 current input CT...X/5 A and X/1 A
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-1-5 isotope-item relay-protection">
                    <div class="portfolio-item">
                        <div class="card">
                            <div class="d-flex justify-content-center">
                                <div>
                                    <img src="{{ asset('img/products/Micom P127.jpg') }}" class="img-card">
                                </div>
                            </div>
                            <div class="card-body p-1">
                                <h5 class="font-weight-bold text-dark mb-0">
                                    FEEDER MANAGEMENT RELAY MICOM 127
                                </h5>
                                <div class="badge badge-info badge-sm font-weight-semibold mb-1" style="font-size: 9px;">
                                    Relay
                                    Protection
                                </div>
                                <p class="text-1 mb-0">
                                    3Ph Over current (50/51P), Ground fault (50/51N)<br />
                                    Phase & Ground Fault directional 67(P), 67N
                                    Restricted earth fault (64)<br />
                                    Negative sequence overcurrent (46)<br />
                                    Undercurrent (37), Broken conductor (46BC)<br />
                                    Circuit breaker failure (50BF), Trip Circuit Spv (TCS)
                                    Over/Under voltage (27/59) , Residual over voltage (59N), Autoreclose (79)<br />
                                    Modbus protocol/ DNP3
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-1-5 isotope-item relay-protection">
                    <div class="portfolio-item">
                        <div class="card">
                            <div class="d-flex justify-content-center">
                                <div>
                                    <img src="{{ asset('img/products/Micom P142.jpg') }}" class="img-card">
                                </div>
                            </div>
                            <div class="card-body p-1">
                                <h5 class="font-weight-bold text-dark mb-0">
                                    FEEDER MANAGEMENT RELAY IEC61830 SAS MICOM P142 ,P143
                                </h5>
                                <div class="badge badge-info badge-sm font-weight-semibold mb-1" style="font-size: 9px;">
                                    Relay
                                    Protection
                                </div>
                                <p class="text-1 mb-0">
                                    3Ph Over current (50/51P), Ground fault (50/51N)<br />
                                    Phase & Ground Fault directional 67(P), 67N Restricted earth fault (64)<br />
                                    Negative sequence over current (46)<br />
                                    Undercurrent (37), Broken conductor (46BC)<br />
                                    Circuit breaker failure (50BF), (TCS)
                                    Over/Under voltage (27/59),Residual overvoltage (59N), Auto reclose (79),
                                    IEC 61860 protocol SAS/ DNP3
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-1-5 isotope-item relay-protection">
                    <div class="portfolio-item">
                        <div class="card">
                            <div class="d-flex justify-content-center">
                                <div>
                                    <img src="{{ asset('img/products/Micom P543.png') }}" class="img-card">
                                </div>
                            </div>
                            <div class="card-body p-1">
                                <h5 class="font-weight-bold text-dark mb-0">
                                    LINE CURRENT DIFFERENTIAL RELAY MiCOM P543
                                </h5>
                                <div class="badge badge-info badge-sm font-weight-semibold mb-1" style="font-size: 9px;">
                                    Relay
                                    Protection
                                </div>
                                <p class="text-1 mb-0">
                                    3ph Overcurrent/ Groundfault 50N/51N,
                                    Directional earth fault, Undervoltage (27),
                                    Overvoltage (59), Negative/unbalanced sequence (46)
                                    Directional phase overcurrent,
                                    Thermal overload protection (49RMS)<br />
                                    Watt metric grounding, Synchronization - check (25)
                                    Underfrequency (81L)<br />
                                    Over frequency Number of inputs16 discrete
                                    5 CT current inputs...X/5 A and X/1 A,
                                    4 voltages Number of outputs14 discrete<br />
                                    Communication port protocols DNP3, IEC 61850,
                                    Ethernet, Modbus RTU, Event recording
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-1-5 isotope-item relay-protection">
                    <div class="portfolio-item">
                        <div class="card">
                            <div class="d-flex justify-content-center">
                                <div>
                                    <img src="{{ asset('img/products/Easergy P3P5.jpg') }}" class="img-card">
                                </div>
                            </div>
                            <div class="card-body p-1">
                                <h5 class="font-weight-bold text-dark mb-0">
                                    WITHDRAWABLE PROTECTION RELAY EASERGY P3, P5
                                </h5>
                                <div class="badge badge-info badge-sm font-weight-semibold mb-1" style="font-size: 9px;">
                                    Relay
                                    Protection
                                </div>
                                <p class="text-1 mb-0">
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

            <div class="row portfolio-list sort-destination lightbox" data-sort-id="portfolio"
                data-plugin-options="{'delegate': 'a.lightbox-portfolio', 'type': 'image', 'gallery': {'enabled': true}}">

                <div class="col-sm-12 isotope-item generator-ats-amf-and-ups">
                    <h2 class="font-weight-extra-normal text-5 mb-0">
                        <strong class="font-weight-extra-bold">Generator </strong>ATS AMF and UPS
                    </h2>
                </div>

                <div class="col-md-6 col-lg-4 isotope-item generator-ats-amf-and-ups">
                    <div class="portfolio-item">
                        <div class="card">
                            {{-- <div class="img-card-logo-wrapper">
                                <div class="img-card-logo-item">
                                    <img src="{{ asset('img/products/Schneider_Electric-Logo.svg') }}"
                                        class="img-card-logo">
                                </div>
                            </div> --}}
                            <div class="d-flex justify-content-center">
                                <div>
                                    <img src="{{ asset('img/products/generator-set.png') }}" class="img-card">
                                </div>
                            </div>
                            <div class="card-body p-1">
                                <h5 class="font-weight-bold text-dark mb-0">
                                    GENERATOR SET
                                </h5>
                                <div class="badge badge-info badge-sm font-weight-semibold mb-1" style="font-size: 9px;">
                                    Generator ATS AMF and UPS
                                </div>
                                <p class="text-1 mb-0">
                                    Silent Type, Trailer (option)<br />
                                    Engine : Cummins/Perkins, Alternator : Stamford<br />
                                    Power Output : 50 - 1500 kVA, Phase 3 (Three) 3 (Three) Frequency 50 Hz @1500RPM 50 Hz
                                    @1500RPM Voltage 220 / 380 V 220 / 380 V<br />
                                    High quality, reliable and complete generating sets.<br />
                                    Easy for operation and maintenance.<br />
                                    Compact structure &high-strength chassis.<br />
                                    Base frame design incorporates an intergrade fuel tank for at least 8 hours running (up
                                    to 650KVA).<br />
                                    Anti- vibration pads are mounted between the engine/alternator feet and the base
                                    frame.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4 isotope-item generator-ats-amf-and-ups">
                    <div class="portfolio-item">
                        <div class="card">
                            <div class="img-card-logo-wrapper">
                                <div class="img-card-logo-item">
                                    <img src="{{ asset('img/products/APC Logo.png') }}" class="img-card-logo">
                                </div>
                            </div>
                            <div class="d-flex justify-content-center">
                                <div>
                                    <img src="{{ asset('img/products/UPS APC.png') }}" class="img-card">
                                </div>
                            </div>
                            <div class="card-body p-1">
                                <h5 class="font-weight-bold text-dark mb-0">
                                    UPS
                                </h5>
                                <div class="badge badge-info badge-sm font-weight-semibold mb-1" style="font-size: 9px;">
                                    Generator ATS AMF and UPS
                                </div>
                                <p class="text-1 mb-0">
                                    The UPS provides continuous power from the internal battery until utility power returns
                                    to safe levels or the battery is fully discharged.<br />
                                    Intuitive LCD interface<br />
                                    Capacity 1-30kVA, Predictive replace battery date<br />
                                    Energy meter - Provides actual kilowatt hours of usage for energy conscious users.<br />
                                    Pure sine wave output on battery - Battery failure notification - Provides early-warning
                                    fault analysis on batteries enabling timely preventive maintenance
                                    Serial Connectivity - for Scada application
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4 isotope-item generator-ats-amf-and-ups">
                    <div class="portfolio-item">
                        <div class="card">
                            {{-- <div class="img-card-logo-wrapper">
                                <div class="img-card-logo-item">
                                    <img src="{{ asset('img/products/APC Logo.png') }}" class="img-card-logo">
                                </div>
                            </div> --}}
                            <div class="d-flex justify-content-center">
                                <div>
                                    <img src="{{ asset('img/products/ATS AMF.png') }}" class="img-card">
                                </div>
                            </div>
                            <div class="card-body p-1">
                                <h5 class="font-weight-bold text-dark mb-0">
                                    ATS AMF
                                </h5>
                                <div class="badge badge-info badge-sm font-weight-semibold mb-1" style="font-size: 9px;">
                                    Generator ATS AMF and UPS
                                </div>
                                <p class="text-1 mb-0">
                                    The electronic control unit (AMF) automatically detects the conditions of absence and
                                    return of the mains, managing both the startup and shutdown of the generator, and the
                                    switching of the contactor (ATS).<br />
                                    Powder coating Box Panel Wall mounting (Custom dimension)<br />
                                    COS 4P 160A Transfer switch Motorized<br />
                                    Digital metering Volt Ampere Frequency LED display<br />
                                    Mode Auto - Manual or selector A-O-M<br />
                                    Load indication PLN-Load-Genset dengan pilot lamp<br />
                                    Overcurrent protection MCCB 3P 125A , Setting Close delay dan return delay<br />
                                    Automatic Battery charger 12/24V 5A Under/over voltage Protection phase failure
                                    relay<br />
                                    Modul Automatic Main Failure (AMF), Deepsea ATS controller
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <div class="row portfolio-list sort-destination lightbox" data-sort-id="portfolio"
                data-plugin-options="{'delegate': 'a.lightbox-portfolio', 'type': 'image', 'gallery': {'enabled': true}}">

                <div class="col-sm-12 isotope-item energy-metering">
                    <h2 class="font-weight-extra-normal text-5 mb-0">
                        <strong class="font-weight-extra-bold">Energy </strong>Metering
                    </h2>
                </div>

                <div class="col-md-6 col-lg-3 isotope-item energy-metering">
                    <div class="portfolio-item">
                        <div class="card">
                            <div class="img-card-logo-wrapper">
                                <div class="img-card-logo-item">
                                    <img src="{{ asset('img/products/EDMI-logo.png') }}" class="img-card-logo">
                                </div>
                            </div>
                            <div class="d-flex justify-content-center">
                                <div>
                                    <img src="{{ asset('img/products/Edmi mk6e.png') }}" class="img-card">
                                </div>
                            </div>
                            <div class="card-body p-1">
                                <h5 class="font-weight-bold text-dark mb-0">
                                    KWH METER CLASS 0.2S EDMI MK6E
                                </h5>
                                <div class="badge badge-info badge-sm font-weight-semibold mb-1" style="font-size: 9px;">
                                    Energy Metering
                                </div>
                                <p class="text-1 mb-0">
                                    Class 0.2S (IEC 62053-22, IEC 62052-11)<br />
                                    Nominal Voltage (P-N) 57 to 240 V<br />
                                    Current : CT 1/4 A, 5/20A<br />
                                    Auxiliary Supply : 240V, 110V<br />
                                    Measurement Modes : 3P2W & 3P3W<br />
                                    Communication : RS232/RS485 Modbus protocol
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3 isotope-item energy-metering">
                    <div class="portfolio-item">
                        <div class="card">
                            <div class="img-card-logo-wrapper">
                                <div class="img-card-logo-item">
                                    <img src="{{ asset('img/products/EDMI-logo.png') }}" class="img-card-logo">
                                </div>
                            </div>
                            <div class="d-flex justify-content-center">
                                <div>
                                    <img src="{{ asset('img/products/MK-6N Class 0.5S.png') }}" class="img-card">
                                </div>
                            </div>
                            <div class="card-body p-1">
                                <h5 class="font-weight-bold text-dark mb-0">
                                    KWH METER CLASS 0.5S EDMI MK6N
                                </h5>
                                <div class="badge badge-info badge-sm font-weight-semibold mb-1" style="font-size: 9px;">
                                    Energy Metering
                                </div>
                                <p class="text-1 mb-0">
                                    Class 0.5s (IEC 62053-22, IEC 62052-11)<br />
                                    Nominal Voltage (P-N) : 57-240 V<br />
                                    Current : CT 5(10)A CT<br />
                                    Serial Port RS232 & RS 485<br />
                                    Measurement Modes : 3P2W & 3P3W<br />
                                    Aux Voltage : 100V-240 V AC/DC<br />
                                    Serial ports : RS232 and RS485 Modbus protocol
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3 isotope-item energy-metering">
                    <div class="portfolio-item">
                        <div class="card">
                            <div class="img-card-logo-wrapper">
                                <div class="img-card-logo-item">
                                    <img src="{{ asset('img/products/Chauvin_Arnoux.png') }}" class="img-card-logo">
                                </div>
                            </div>
                            <div class="d-flex justify-content-center">
                                <div>
                                    <img src="{{ asset('img/products/POWER QUALITY METER CHAUVIN ARNOUX MEMO ENERIUM.png') }}"
                                        class="img-card">
                                </div>
                            </div>
                            <div class="card-body p-1">
                                <h5 class="font-weight-bold text-dark mb-0">
                                    POWER QUALITY METER<br /><small>CHAUVIN ARNOUX MEMO / ENERIUM</small>
                                </h5>
                                <div class="badge badge-info badge-sm font-weight-semibold mb-1" style="font-size: 9px;">
                                    Energy Metering
                                </div>
                                <p class="text-1 mb-0">
                                    Accuracy suitable for the most critical MV/LV<br />
                                    Measurements with The operating history and diagnostic tools<br />
                                    Accuracy class (as per IEC 61557-12) 0.5 or 0.2<br />
                                    Number of alarms 16<br />
                                    Time/date-stamped events recorded 64<br />
                                    Power quality, THD / PF / Tan φ<br />
                                    Max. harmonic orders 25/50<br />
                                    Qualimetry as per EN50160<br />
                                    Capture of V, U, I & In waveforms 16<br />
                                    Storage of the last 1,024 time/date-stamped<br />
                                    events (dips, outages, overvoltage)<br />
                                    Inputs / Outputs Max. 8
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3 isotope-item energy-metering">
                    <div class="portfolio-item">
                        <div class="card">
                            {{-- <div class="img-card-logo-wrapper">
                                <div class="img-card-logo-item">
                                    <img src="{{ asset('img/products/Chauvin_Arnoux.png') }}" class="img-card-logo">
                                </div>
                            </div> --}}
                            <div class="d-flex justify-content-center">
                                <div>
                                    <img src="{{ asset('img/products/CEWE ProQ 100.png') }}" class="img-card">
                                </div>
                            </div>
                            <div class="card-body p-1">
                                <h5 class="font-weight-bold text-dark mb-0">
                                    POWER QUALITY ANALYZER<br /><small>CEWE ProQ 100</small>
                                </h5>
                                <div class="badge badge-info badge-sm font-weight-semibold mb-1" style="font-size: 9px;">
                                    Energy Metering
                                </div>
                                <p class="text-1 mb-0">
                                    To Monitor and record Lfl, Pst and Plt flicker, dips/over voltages / outages<br />
                                    Energy Class Accuracy 0.2S<br />
                                    Power Quality Revenue meter<br />
                                    High precision revenue metering<br />
                                    Harmonic analysis for power quality problems<br />
                                    Voltage & current up o 50th harmonic<br />
                                    Power quality events logging for sag, swell, interruption and rapid voltage change (ITIC
                                    Curve)<br />
                                    Transient recording and reporting<br />
                                    Connection types HV4/HV3/LV4<br />
                                    Voltage range 3 x 57.7/100 V….240/415 V (3P4W)<br />
                                    Current range In: 1..5A | Imax: up to 10 A (configurable)
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <div class="row portfolio-list sort-destination lightbox" data-sort-id="portfolio"
                data-plugin-options="{'delegate': 'a.lightbox-portfolio', 'type': 'image', 'gallery': {'enabled': true}}">

                <div class="col-sm-12 isotope-item scada-system">
                    <h2 class="font-weight-extra-normal text-5 mb-0">
                        <strong class="font-weight-extra-bold">Scada </strong>System
                    </h2>
                </div>

                <div class="col-md-6 col-lg-4 isotope-item scada-system">
                    <div class="portfolio-item">
                        <div class="card">
                            <div class="img-card-logo-wrapper">
                                <div class="img-card-logo-item">
                                    <img src="{{ asset('img/products/Inhand Logo.png') }}" class="img-card-logo">
                                </div>
                            </div>
                            <div class="d-flex justify-content-center">
                                <div>
                                    <img src="{{ asset('img/products/INHAND InRouter615-S Series.png') }}"
                                        class="img-card">
                                </div>
                            </div>
                            <div class="card-body p-1">
                                <h5 class="font-weight-bold text-dark mb-0">
                                    INDUSTRIAL LTE ROUTER<br /><small>INHAND InRouter615-S Series</small>
                                </h5>
                                <div class="badge badge-info badge-sm font-weight-semibold mb-1" style="font-size: 9px;">
                                    Scada System
                                </div>
                                <p class="text-1 mb-0">
                                    Supports 4G LTE CAT4 high-speed network, as well LTE CAT1 and CAT-M low-rate
                                    networks<br />
                                    Supports WLAN<br />
                                    5 Ethernet ports, WAN/LAN/VLAN<br />
                                    Multiple VPN functions<br />
                                    Ethernet Port :<br />
                                    1*10/100Mbps fast Ethernet WAN port<br />
                                    4*10/100Mbps fast Ethernet WLAN ports<br />
                                    1.5KV network isolation protection<br />
                                    Power Supply : DC9-26V, 36V expandable<br />
                                    Industrial Serial Port : RS-232/485 x 1<br />
                                    ESD protection: 15KV<br />
                                    SIM Card : Drawer-type card slot x 1<br />
                                    Part models: Drawer-type card slot x 2<br />
                                    Reset Pinhole reset button<br />
                                    Antenna Connector : 3G/4G: SMA x 2, WLAN: RP-SMA x 2
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4 isotope-item scada-system">
                    <div class="portfolio-item">
                        <div class="card">
                            <div class="img-card-logo-wrapper">
                                <div class="img-card-logo-item">
                                    <img src="{{ asset('img/products/SAE IT-SYSTEM LOGO.jpg') }}" class="img-card-logo">
                                </div>
                            </div>
                            <div class="d-flex justify-content-center">
                                <div>
                                    <img src="{{ asset('img/products/SAE fw-5-gate.jpg') }}" class="img-card">
                                </div>
                            </div>
                            <div class="card-body p-1">
                                <h5 class="font-weight-bold text-dark mb-0">
                                    REMOTE TERMINAL UNIT<br /><small>FW-5-GATE</small>
                                </h5>
                                <div class="badge badge-info badge-sm font-weight-semibold mb-1" style="font-size: 9px;">
                                    Scada System
                                </div>
                                <p class="text-1 mb-0">
                                    2 Ethernet LAN TCP/IP connections<br />
                                    2 RS-485 , RS-232/V.24 interface<br />
                                    Temp sensor, -20° to 100° C<br />
                                    Power supply (20 to 72 V DC)<br />
                                    Protocols IEC 61850 IED,<br />
                                    IEC 60870-5-101 IEC 60870-5-103<br />
                                    IEC 60870-5-104, TCP/IP DNP3<br />
                                    IEC 62056-21, Modbus RTU/TCP
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4 isotope-item scada-system">
                    <div class="portfolio-item">
                        <div class="card">
                            <div class="img-card-logo-wrapper">
                                <div class="img-card-logo-item">
                                    <img src="{{ asset('img/products/NORTROLL LOGO.png') }}" class="img-card-logo">
                                </div>
                            </div>
                            <div class="d-flex justify-content-center">
                                <div>
                                    <img src="{{ asset('img/products/NORTROL LINETROL.jpg') }}" class="img-card">
                                </div>
                            </div>
                            <div class="card-body p-1">
                                <h5 class="font-weight-bold text-dark mb-0">
                                    FAULT INDICATOR<br /><small>LineTroll 110EμR</small>
                                </h5>
                                <div class="badge badge-info badge-sm font-weight-semibold mb-1" style="font-size: 9px;">
                                    Scada System
                                </div>
                                <p class="text-1 mb-0">
                                    Distribution Networks (6-50kV)<br />
                                    LineTroll 110EμR conductor mounted<br />
                                    indicator for detection of PtG and<br />
                                    PtP faults in overhead line networks.<br />
                                    A built-in 2.4GHZ radio device communicate with receiver/ RTU/ Scada Master
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <div class="row portfolio-list sort-destination lightbox" data-sort-id="portfolio"
                data-plugin-options="{'delegate': 'a.lightbox-portfolio', 'type': 'image', 'gallery': {'enabled': true}}">

                <div class="col-sm-12 isotope-item dc-power-supply">
                    <h2 class="font-weight-extra-normal text-5 mb-0">
                        <strong class="font-weight-extra-bold">DC </strong>Power Supply
                    </h2>
                </div>

                <div class="col-md-6 col-lg-4 isotope-item dc-power-supply">
                    <div class="portfolio-item">
                        <div class="card">
                            {{-- <div class="img-card-logo-wrapper">
                                <div class="img-card-logo-item">
                                    <img src="{{ asset('img/products/Inhand Logo.png') }}" class="img-card-logo">
                                </div>
                            </div> --}}
                            <div class="d-flex justify-content-center">
                                <div>
                                    <img src="{{ asset('img/products/Rectifier 220 VAC to 48 VDC.jpg') }}"
                                        class="img-card">
                                </div>
                            </div>
                            <div class="card-body p-1">
                                <h5 class="font-weight-bold text-dark mb-0">
                                    RECTIFIERS/BATTERY CHARGER<br /><small>RECTIFIER 220 VAC to 48 VDC</small>
                                </h5>
                                <div class="badge badge-info badge-sm font-weight-semibold mb-1" style="font-size: 9px;">
                                    DC Power Supply
                                </div>
                                <p class="text-1 mb-0">
                                    Automatic voltage control & current limiting Thyristor (SCR) controlled and Suitable for
                                    all industrial Lead acid and Ni-Cd/ Lithium batteries<br />
                                    Capacity : 10 - 200 A<br />
                                    Space Battery : up to 4 batteries<br />
                                    Nominal Input voltage : 220 VAC single phase<br />
                                    Nominal Output voltage : 48 VDC<br />
                                    Output : Load dan battery charge<br />
                                    Type Charging : Boosting, Floating dan Equalizing<br />
                                    Ambient Temperature : 0-40 C<br />
                                    Surge Protector : up to 4 kVA<br />
                                    Overvoltage Protector : up to 500 VAC<br />
                                    Display (Analog/ digital) : Load current, Battery charge<br />
                                    Current, Voltage, Alarm/indicator overload, voltage input and output fail<br />
                                    Communication : RS232, RS485/ Modbus, TCP/IP
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4 isotope-item dc-power-supply">
                    <div class="portfolio-item">
                        <div class="card">
                            {{-- <div class="img-card-logo-wrapper">
                                <div class="img-card-logo-item">
                                    <img src="{{ asset('img/products/Inhand Logo.png') }}" class="img-card-logo">
                                </div>
                            </div> --}}
                            <div class="d-flex justify-content-center">
                                <div>
                                    <img src="{{ asset('img/products/LIFEPO4 BATTERY.jpg') }}" class="img-card">
                                </div>
                            </div>
                            <div class="card-body p-1">
                                <h5 class="font-weight-bold text-dark mb-0">
                                    LIFEPO4 BATTERY
                                    {{-- <br /><small>RECTIFIER 220 VAC to 48 VDC</small> --}}
                                </h5>
                                <div class="badge badge-info badge-sm font-weight-semibold mb-1" style="font-size: 9px;">
                                    DC Power Supply
                                </div>
                                <p class="text-1 mb-0">
                                    Customized dimension based on Panel dimension<br />
                                    Voltage 12/48/110VDC, Capacity 5-30 VA<br />
                                    BMS 60A, maximum charging 30A<br />
                                    Maximum Load 60A<br />
                                    Enclosure Fiberglass sheet + PVC<br />
                                    XT60 connectors<br />
                                    Application<br />
                                    DC power supply, Engine starting battery,<br />
                                    electric bicycle/motorcycle/scooter,<br />
                                    power tools and Solar Lighting
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4 isotope-item dc-power-supply">
                    <div class="portfolio-item">
                        <div class="card">
                            {{-- <div class="img-card-logo-wrapper">
                                <div class="img-card-logo-item">
                                    <img src="{{ asset('img/products/Inhand Logo.png') }}" class="img-card-logo">
                                </div>
                            </div> --}}
                            <div class="d-flex justify-content-center">
                                <div>
                                    <img src="{{ asset('img/products/Inverter 48 VDC to 220 VAC.jpg') }}"
                                        class="img-card">
                                </div>
                            </div>
                            <div class="card-body p-1">
                                <h5 class="font-weight-bold text-dark mb-0">
                                    INVERTER 48 VDC to 220 VAC
                                    {{-- <br /><small>RECTIFIER 220 VAC to 48 VDC</small> --}}
                                </h5>
                                <div class="badge badge-info badge-sm font-weight-semibold mb-1" style="font-size: 9px;">
                                    DC Power Supply
                                </div>
                                <p class="text-1 mb-0">
                                    Capacity : Up to 10A<br />
                                    Nominal Input Voltage : 220 VAC single phase<br />
                                    Nominal Output voltage : 220VAC<br />
                                    Surge Protector : up to 4 kVA<br />
                                    Overvoltage Protector : up to 500 VAC
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <div class="row portfolio-list sort-destination lightbox" data-sort-id="portfolio"
                data-plugin-options="{'delegate': 'a.lightbox-portfolio', 'type': 'image', 'gallery': {'enabled': true}}">

                <div class="col-sm-12 isotope-item transformer-oil-purifier">
                    <h2 class="font-weight-extra-normal text-5 mb-0">
                        <strong class="font-weight-extra-bold">Transformer </strong>Oil Purifier
                    </h2>
                </div>

                <div class="col-md-6 col-lg-3 isotope-item transformer-oil-purifier">
                    <div class="portfolio-item">
                        <div class="card">
                            {{-- <div class="img-card-logo-wrapper">
                                <div class="img-card-logo-item">
                                    <img src="{{ asset('img/products/Inhand Logo.png') }}" class="img-card-logo">
                                </div>
                            </div> --}}
                            <div class="d-flex justify-content-center">
                                <div>
                                    <img src="{{ asset('img/products/purifier-machine.jpg') }}" class="img-card">
                                </div>
                            </div>
                            <div class="card-body p-1">
                                <h5 class="font-weight-bold text-dark mb-0">
                                    PURIFIER MACHINE
                                    {{-- <br /><small>RECTIFIER 220 VAC to 48 VDC</small> --}}
                                </h5>
                                <div class="badge badge-info badge-sm font-weight-semibold mb-1" style="font-size: 9px;">
                                    Transformer Oil Purifier
                                </div>
                                <p class="text-1 mb-0">
                                    Mainly used to improve insulation oil by removing trace water, gas, particulate matters
                                    etc. to boost performance and life time of transformers, circuit breakers, mutual
                                    inductors and cable.<br />
                                    Capacity : 2000, 4000, 6000 liter/hour,<br />
                                    Process : Double stage : heating to remove water from oil, gas (de-gas) and remove tiny
                                    particles (purify) eq. acetylene, hydrogen, methane dan other particles. Trailer
                                    provided mobility.<br />
                                    Key projects : PLN UPK Kapuas, UP3 Ketapang and UP3B Kalbar, UPK Tambora NTB, UPK Maluku
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3 isotope-item transformer-oil-purifier">
                    <div class="portfolio-item">
                        <div class="card">
                            {{-- <div class="img-card-logo-wrapper">
                                <div class="img-card-logo-item">
                                    <img src="{{ asset('img/products/Inhand Logo.png') }}" class="img-card-logo">
                                </div>
                            </div> --}}
                            <div class="d-flex justify-content-center">
                                <div>
                                    <img src="{{ asset('img/products/portable oil set.png') }}" class="img-card">
                                </div>
                            </div>
                            <div class="card-body p-1">
                                <h5 class="font-weight-bold text-dark mb-0">
                                    PORTABLE OIL TEST SET<br /><small>MEGGER OTS80PB</small>
                                </h5>
                                <div class="badge badge-info badge-sm font-weight-semibold mb-1" style="font-size: 9px;">
                                    Transformer Oil Purifier
                                </div>
                                <p class="text-1 mb-0">
                                    Test voltages 60 kV / 80 kV<br />
                                    Lock in precision oil vessel<br />
                                    lockable gap setting<br />
                                    Flat electrode gap gauges<br />
                                    Oil Temperature Measurement<br />
                                    Easy to clean
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <div class="row portfolio-list sort-destination lightbox" data-sort-id="portfolio"
                data-plugin-options="{'delegate': 'a.lightbox-portfolio', 'type': 'image', 'gallery': {'enabled': true}}"
                height="420px;">

                <div class="col-sm-12 isotope-item distribution-transformer-monitoring">
                    <h2 class="font-weight-extra-normal text-5 mb-0">
                        <strong class="font-weight-extra-bold">Distribution </strong>Transformer Monitoring
                    </h2>
                    <div class="row" style="margin-bottom: 20px;">
                        <div class="col-sm-12 col-md-3 text-start mb-2">
                            <div class="img-thumbnail d-block text-center">
                                <img src="{{ asset('img/products/DISTRIBUTION TRANSFORMER MONITORIN SCHEME.png') }}"
                                    class="img-fluid" style="max-height: 200px;">
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-9 text-start mb-2">
                            <div class="text-center">
                                <img src="{{ asset('img/products/DISTRIBUTION TRANSFORMER MONITORIN INSTALATION PHOTO.png') }}"
                                    class="img-fluid" style="height:120px;" />
                                <p class="text-1 mb-2 line-height-1 text-dark font-weight-bold text-center">
                                    INSTALATION PHOTO
                                </p>
                            </div>
                            <p class="text-2 mb-0 line-height-1 text-dark">
                                Meters measure Energy on Distribution transformer incoming and LVSB feeders<br />
                                Energy and electrical parameters are monitored online via Cellular gateway to IoT
                                Energy
                                Management system with Integration of Billing Management and Online Losses
                                Monitoring
                                (OLM)<br />
                                Billing and Energy-Losses reports generated can be accessed by clients through
                                internet
                                connection everywhere
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-12 isotope-item distribution-transformer-monitoring">
                    <div class="text-center">
                        <img src="{{ asset('img/products/ACREL LOGO.png') }}" class="img-logo">
                    </div>
                </div>

                <div class="col-md-6 col-lg-2 isotope-item distribution-transformer-monitoring">
                    <div class="portfolio-item">
                        <div class="card">
                            <div class="d-flex justify-content-center">
                                <div>
                                    <img src="{{ asset('img/products/Acrel-ADW210.png') }}" class="img-card">
                                </div>
                            </div>
                            <div class="card-body p-1">
                                <h5 class="font-weight-bold text-dark mb-0">
                                    4 CHANNEL ENERGY METER ACREL ADW201
                                    {{-- <br /><small>RECTIFIER 220 VAC to 48 VDC</small> --}}
                                </h5>
                                <div class="badge badge-info badge-sm font-weight-semibold mb-1" style="font-size: 9px;">
                                    Distribution Transformer Monitoring
                                </div>

                                <p class="text-1 mb-0">
                                    3P3P, 3P4W, Kwh Cl.1 KVARh Cl 2<br />
                                    3X220/380 V , 3X 5A, 3X 100A<br />
                                    Measure Up to 4 circuit 3 phase<br />
                                    Measure all electric parameters<br />
                                    Split core open loop CTs<br />
                                    External function module<br />
                                    RS485 Modbus RTU Lora/4G routers
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-2 isotope-item distribution-transformer-monitoring">
                    <div class="portfolio-item">
                        <div class="card">
                            <div class="d-flex justify-content-center">
                                <div>
                                    <img src="{{ asset('img/products/Acrel ADW300.png') }}" class="img-card">
                                </div>
                            </div>
                            <div class="card-body p-1">
                                <h5 class="font-weight-bold text-dark mb-0">
                                    BUILT-IN 4G MODEM ENERGY METER ACREL ADW300
                                    {{-- <br /><small>RECTIFIER 220 VAC to 48 VDC</small> --}}
                                </h5>
                                <div class="badge badge-info badge-sm font-weight-semibold mb-1" style="font-size: 9px;">
                                    Distribution Transformer Monitoring
                                </div>

                                <p class="text-1 mb-0">
                                    3P3P, 3P4W, Kwh Cl.1 KVARh Cl 2<br />
                                    3X220/380V, 57.7/100 V<br />
                                    3x1(6)A AC (via CTs)<br />
                                    Communication: 4G LTE, WiFi, LoRa, LoRaWAN, NB-IoT, RS485(MODBUS-RTU)<br />
                                    Application Scenario: Building, Factory, Smart Grids, DB Room etc
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-2 isotope-item distribution-transformer-monitoring">
                    <div class="portfolio-item">
                        <div class="card">
                            <div class="d-flex justify-content-center">
                                <div>
                                    <img src="{{ asset('img/products/Acrel-ADL400.jpg') }}" class="img-card">
                                </div>
                            </div>
                            <div class="card-body p-1">
                                <h5 class="font-weight-bold text-dark mb-0">
                                    ENERGY METER MODBUS RTU ACREL ADL400
                                    {{-- <br /><small>RECTIFIER 220 VAC to 48 VDC</small> --}}
                                </h5>
                                <div class="badge badge-info badge-sm font-weight-semibold mb-1" style="font-size: 9px;">
                                    Distribution Transformer Monitoring
                                </div>

                                <p class="text-1 mb-0">
                                    3P3P, 3P4W, Kwh Cl.0.5 KVARh Cl 2<br />
                                    3X220/380V, 57.7/100 V<br />
                                    3×1(6)A (via CT) ,3×10(80)AC (Direct)<br />
                                    Communication: RS485(MODBUS-RTU)s
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-2 isotope-item distribution-transformer-monitoring">
                    <div class="portfolio-item">
                        <div class="card">
                            <div class="d-flex justify-content-center">
                                <div>
                                    <img src="{{ asset('img/products/acrel AWT100.png') }}" class="img-card">
                                </div>
                            </div>
                            <div class="card-body p-1">
                                <h5 class="font-weight-bold text-dark mb-0">
                                    4G/LORA MODEM ACREL AWT100-4G/LORA
                                    {{-- <br /><small>RECTIFIER 220 VAC to 48 VDC</small> --}}
                                </h5>
                                <div class="badge badge-info badge-sm font-weight-semibold mb-1" style="font-size: 9px;">
                                    Distribution Transformer Monitoring
                                </div>

                                <p class="text-1 mb-0">
                                    Upstream Methods: 4G LTE/ LoRA<br />
                                    Upstream Protocol: MODBUS-TCP, MQTT<br />
                                    Downstream Methods: RS485 Interface<br />
                                    Support: Up to 20~25 Acrel Devices with RS485 (MODBUS-RTU)<br />
                                    Power Supply: 24Vdc
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-2 isotope-item distribution-transformer-monitoring">
                    <div class="portfolio-item">
                        <div class="card">
                            <div class="d-flex justify-content-center">
                                <div>
                                    <img src="{{ asset('img/products/Acrel CT.png') }}" class="img-card">
                                </div>
                            </div>
                            <div class="card-body p-1">
                                <h5 class="font-weight-bold text-dark mb-0">
                                    SPLIT CORE CT
                                    <br /><small>ACREL AKH-0.66/K-φ24-A</small>
                                </h5>
                                <div class="badge badge-info badge-sm font-weight-semibold mb-1" style="font-size: 9px;">
                                    Distribution Transformer Monitoring
                                </div>

                                <p class="text-1 mb-0">
                                    Installation: Split-core type/clamp<br />
                                    Primary Current Input: 150-300A AC<br />
                                    Secondary Current Output: 5A AC<br />
                                    Accuracy: Class 1.0<br />
                                    Standard&Certificate: UL
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-2 isotope-item distribution-transformer-monitoring">
                    <div class="portfolio-item">
                        <div class="card">
                            <div class="d-flex justify-content-center">
                                <div>
                                    <img src="{{ asset('img/products/acrel IoT Energy Management System.jpg') }}"
                                        class="img-card">
                                </div>
                            </div>
                            <div class="card-body p-1">
                                <h5 class="font-weight-bold text-dark mb-0">
                                    IOIT ENERGY MANAGEMENT
                                    {{-- <br /><small>ACREL AKH-0.66/K-φ24-A</small> --}}
                                </h5>
                                <div class="badge badge-info badge-sm font-weight-semibold mb-1" style="font-size: 9px;">
                                    Distribution Transformer Monitoring
                                </div>

                                <p class="text-1 mb-0">
                                    Application Substation, building, telecommunication base station, industrial energy
                                    consumption, intelligent lighthouse, operation and maintenance of power.
                                    Connect to all Acrel devices via 4G, LoRA and MQTT TCP
                                    Energy consumption, billing and forecast
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <div class="row portfolio-list sort-destination lightbox" data-sort-id="portfolio"
                data-plugin-options="{'delegate': 'a.lightbox-portfolio', 'type': 'image', 'gallery': {'enabled': true}}">

                <div class="col-sm-12 isotope-item temperature-monitoring-ews">
                    <h2 class="font-weight-extra-normal text-5 mb-0">
                        <strong class="font-weight-extra-bold">Temperature </strong>Monitoring / EWS
                    </h2>
                    <div class="row" style="margin-bottom: 20px;">
                        <div class="col-sm-12 col-md-3 text-start mb-2">
                            <div class="img-thumbnail d-block">
                                <img src="{{ asset('img/products/temperature-scheme.png') }}" class="img-fluid"
                                    style="max-height: 245px;">
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-9 text-start mb-2">
                            <p class="text-2 mb-0 line-height-1 text-dark">
                                Temperature Monitoring on Critical spots in MV panels of Substation, Sensors installed in
                                CB fingers, busbar, cable termination, cabinets wall both magnetic and strapped attachment
                                and wirelessly monitored by power meter (RTU). When Spot’s temperature raise and reach the
                                pre programmed limit RTU will send notification to Scada masters or IoT application via
                                Internet or cellular as Early warning for users to do further action
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-12 isotope-item distribution-transformer-monitoring">
                    <div class="text-center">
                        <img src="{{ asset('img/products/ACREL LOGO.png') }}" class="img-logo">
                    </div>
                </div>

                <div class="col-sm-8 offset-md-2 isotope-item temperature-monitoring-ews">
                    <div class="row">
                        <div class="col-sm-12 col-md-4">
                            <div class="portfolio-item">
                                <div class="card">
                                    <div class="d-flex justify-content-center">
                                        <div>
                                            <img src="{{ asset('img/products/magnetic-strapped.png') }}"
                                                class="img-card">
                                        </div>
                                    </div>
                                    <div class="card-body p-1">
                                        <h5 class="font-weight-bold text-dark mb-0">
                                            Magnetic and Strapped Battery Power
                                        </h5>
                                        <div class="badge badge-info badge-sm font-weight-semibold mb-1"
                                            style="font-size: 9px;">
                                            Temperature Monitoring / EWS
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-4">
                            <div class="portfolio-item">
                                <div class="card">
                                    <div class="d-flex justify-content-center">
                                        <div>
                                            <img src="{{ asset('img/products/ct-induction.png') }}" class="img-card">
                                        </div>
                                    </div>
                                    <div class="card-body p-1">
                                        <h5 class="font-weight-bold text-dark mb-0">
                                            CT Induction (No Battery)
                                        </h5>
                                        <div class="badge badge-info badge-sm font-weight-semibold mb-1"
                                            style="font-size: 9px;">
                                            Temperature Monitoring / EWS
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-4">
                            <div class="portfolio-item">
                                <div class="card">
                                    <div class="d-flex justify-content-center">
                                        <div>
                                            <img src="{{ asset('img/products/room temperature.png') }}" class="img-card">
                                        </div>
                                    </div>
                                    <div class="card-body p-1">
                                        <h5 class="font-weight-bold text-dark mb-0">
                                            Room Temperature & Humidity
                                        </h5>
                                        <div class="badge badge-info badge-sm font-weight-semibold mb-1"
                                            style="font-size: 9px;">
                                            Temperature Monitoring / EWS
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>


            </div>

        </div>
    </div>
@endsection
