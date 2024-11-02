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
            <li class="nav-item" data-option-value=".relay-and-ct-pt-analyzer">
                <a class="nav-link text-2" href="#">
                    RELAY AND CT PT ANALYZER
                </a>
            </li>
            <li class="nav-item" data-option-value=".kwh-meter-error-test">
                <a class="nav-link text-2" href="#">
                    KWH METER ERROR TEST
                </a>
            </li>
            <li class="nav-item" data-option-value=".test-and-measurement">
                <a class="nav-link text-2" href="#">
                    TEST AND MEASUREMENT
                </a>
            </li>
        </ul>

        <div class="sort-destination-loader sort-destination-loader-showing mt-4 pt-2 text-center">

            <div class="row portfolio-list sort-destination lightbox" data-sort-id="portfolio"
                data-plugin-options="{'delegate': 'a.lightbox-portfolio', 'type': 'image', 'gallery': {'enabled': true}}"
                height="420px;">

                <div class="col-sm-12 isotope-item relay-and-ct-pt-analyzer">
                    <h2 class="font-weight-extra-normal text-5 mb-0 text-center">
                        <strong class="font-weight-extra-bold">RELAY </strong>AND CT PT ANALYZER
                    </h2>
                    <div class="text-center">
                        <img src="{{ asset('img/products/hy logo.png') }}" class="img-logo">
                    </div>
                </div>

                <div class="col-md-6 col-lg-3 isotope-item relay-and-ct-pt-analyzer">
                    <div class="portfolio-item">
                        <div class="card">
                            <div class="d-flex justify-content-center">
                                <div>
                                    <img src="{{ asset('img/products/HYVA-405.png') }}" class="img-card">
                                </div>
                            </div>
                            <div class="card-body p-1">
                                <h5 class="font-weight-bold text-dark mb-0">
                                    CT PT Analyzer HYVA-405
                                </h5>
                                <div class="badge badge-info badge-sm font-weight-semibold mb-1" style="font-size: 9px;">
                                    RELAY AND CT PT ANALYZER
                                </div>
                                <p class="text-1 mb-0">
                                    CT Ratio error and phase error test,<br />
                                    excitation curve and knee point test<br />
                                    Winding resistance measurement,<br />
                                    CT polarity test, CT secondary<br />
                                    burden test, CT nameplate deduce<br />
                                    Ratio error and phase error test of VT<br />
                                    VT Excitation curve test and<br />
                                    Secondary burden test<br />
                                    Winding resistance test of VT primary and secondary<br />
                                    VT and CVT ratio error test with<br />
                                    4KV voltage booster<br />
                                    VT induce voltage withstand test
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3 isotope-item relay-and-ct-pt-analyzer">
                    <div class="portfolio-item">
                        <div class="card">
                            <div class="d-flex justify-content-center">
                                <div>
                                    <img src="{{ asset('img/products/HYJB-PC3.png') }}" class="img-card">
                                </div>
                            </div>
                            <div class="card-body p-1">
                                <h5 class="font-weight-bold text-dark mb-0">
                                    3 Phase Relay tester HYJB-PC3
                                </h5>
                                <div class="badge badge-info badge-sm font-weight-semibold mb-1" style="font-size: 9px;">
                                    RELAY AND CT PT ANALYZER
                                </div>
                                <p class="text-1 mb-0">
                                    True color LCD display, tracking ball and optimized keyboard<br />
                                    Voltage and current amplifier<br />
                                    Digital input and output,<br />
                                    Phase current output 0~40A<br />
                                    Output precision 0.2 degree<br />
                                    3 phase parallel current output 0~120A<br />
                                    A long-time phase current 10A<br />
                                    Maxi output power of phase current 420VA
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3 isotope-item relay-and-ct-pt-analyzer">
                    <div class="portfolio-item">
                        <div class="card">
                            <div class="d-flex justify-content-center">
                                <div>
                                    <img src="{{ asset('img/products/Primary Current Injection Tester HYCIT.png') }}"
                                        class="img-card">
                                </div>
                            </div>
                            <div class="card-body p-1">
                                <h5 class="font-weight-bold text-dark mb-0">
                                    Primary Current Injection Tester HYCIT
                                </h5>
                                <div class="badge badge-info badge-sm font-weight-semibold mb-1" style="font-size: 9px;">
                                    RELAY AND CT PT ANALYZER
                                </div>
                                <p class="text-1 mb-0">
                                    A high current to simulate the rated current or fault current in the primary circuit of
                                    power equipment.<br />
                                    Power supply: AC220/ 400V, 45Hz~65Hz.<br />
                                    Typical output current: 500A/1000A / 2000A<br />
                                    Typical output capacity: 3/5/10/15KVA
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3 isotope-item relay-and-ct-pt-analyzer">
                    <div class="portfolio-item">
                        <div class="card">
                            <div class="d-flex justify-content-center">
                                <div>
                                    <img src="{{ asset('img/products/HYGK-306A.png') }}" class="img-card">
                                </div>
                            </div>
                            <div class="card-body p-1">
                                <h5 class="font-weight-bold text-dark mb-0">
                                    Circuit Breaker Analyzer HYGK-306A
                                </h5>
                                <div class="badge badge-info badge-sm font-weight-semibold mb-1" style="font-size: 9px;">
                                    RELAY AND CT PT ANALYZER
                                </div>
                                <p class="text-1 mb-0">
                                    Onsite test the dynamic characteristics of oil/vacuum/ SF6 CB<br />
                                    12 contacts’ closing time and opening time<br />
                                    Reclosing/ Opening/closing’s asynchronism<br />
                                    Clearance between open contacts/gaps,<br />
                                    over-travel, over-shoot and spring back<br />
                                    Speed at instant of contacts touching<br />
                                    Opening (Closing) max/ average speed<br />
                                    Display and Print V-S/ operating curve
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <div class="row portfolio-list sort-destination lightbox" data-sort-id="portfolio"
                data-plugin-options="{'delegate': 'a.lightbox-portfolio', 'type': 'image', 'gallery': {'enabled': true}}">

                <div class="col-sm-12 isotope-item kwh-meter-error-test">
                    <h2 class="font-weight-extra-normal text-5 mb-0 text-center">
                        <strong class="font-weight-extra-bold">KWH </strong>METER ERROR TEST
                    </h2>
                </div>

                <div class="col-md-6 col-lg-3 isotope-item kwh-meter-error-test">
                    <div class="portfolio-item">
                        <div class="card">
                            <div class="img-card-logo-wrapper">
                                <div class="img-card-logo-item">
                                    <img src="{{ asset('img/products/geny-logo.gif') }}" class="img-card-logo">
                                </div>
                            </div>
                            <div class="d-flex justify-content-center">
                                <div>
                                    <img src="{{ asset('img/products/dmt1010.png') }}" class="img-card">
                                </div>
                            </div>
                            <div class="card-body p-1">
                                <h5 class="font-weight-bold text-dark mb-0">
                                    ONLINE SINGLE PHASE METER CALIBRATOR SINOTIE DMT-1010
                                </h5>
                                <div class="badge badge-info badge-sm font-weight-semibold mb-1" style="font-size: 9px;">
                                    KWH METER ERROR TEST
                                </div>
                                <p class="text-1 mb-0">
                                    Compact Size (0.7kg)<br />
                                    Online Test (P2TL)<br />
                                    Error accuracy up to 0.2%<br />
                                    LCD Color & Non-volatile memory<br />
                                    Harmonics record (up to H43)<br />
                                    Waveform and Harmonic Display<br />
                                    RS232 & Wifi interface<br />
                                    Wireless Printer for Quick Report
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3 isotope-item kwh-meter-error-test">
                    <div class="portfolio-item">
                        <div class="card">
                            <div class="img-card-logo-wrapper">
                                <div class="img-card-logo-item">
                                    <img src="{{ asset('img/products/calmet-logo.png') }}" class="img-card-logo">
                                </div>
                            </div>
                            <div class="d-flex justify-content-center">
                                <div>
                                    <img src="{{ asset('img/products/CALMET TS33.jpg') }}" class="img-card">
                                </div>
                            </div>
                            <div class="card-body p-1">
                                <h5 class="font-weight-bold text-dark mb-0">
                                    KWH & CT PT CALIBRATOR WITH POWER SOURCE CALMET TS33 CLASS 0.01
                                </h5>
                                <div class="badge badge-info badge-sm font-weight-semibold mb-1" style="font-size: 9px;">
                                    KWH METER ERROR TEST
                                </div>
                                <p class="text-1 mb-0">
                                    Huge output power and compact<br />
                                    Size 22kg case<br />
                                    Quick measurements of power<br />
                                    quality parameters<br />
                                    Automatic tests meters and PT/CT<br />
                                    3-phase voltages:<b>0.5000-600.00V</b><br />
                                    3-phase currents:<b>1.000mA-120KA</b>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3 isotope-item kwh-meter-error-test">
                    <div class="portfolio-item">
                        <div class="card">
                            <div class="img-card-logo-wrapper">
                                <div class="img-card-logo-item">
                                    <img src="{{ asset('img/products/calmet-logo.png') }}" class="img-card-logo">
                                </div>
                            </div>
                            <div class="d-flex justify-content-center">
                                <div>
                                    <img src="{{ asset('img/products/CALMET TE30.jpg') }}" class="img-card">
                                </div>
                            </div>
                            <div class="card-body p-1">
                                <h5 class="font-weight-bold text-dark mb-0">
                                    ONLINE 3PHASE METER ERROR TEST CALMET TE30 CLASS 0.05
                                </h5>
                                <div class="badge badge-info badge-sm font-weight-semibold mb-1" style="font-size: 9px;">
                                    KWH METER ERROR TEST
                                </div>
                                <p class="text-1 mb-0">
                                    Online Loss Control (P2TL)<br />
                                    Error Accuracy Class 1 & 0.5<br />
                                    Phasor Diagram analysis<br />
                                    Wiring ratio dan CT burden<br />
                                    Primary and secondary current comparison<br />
                                    Power Quality Analyzer<br />
                                    <b>AMP LITEWIRE</b> dan <b>VOLTLITE</b> STICK 20 KV 2000A for online test
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3 isotope-item kwh-meter-error-test">
                    <div class="portfolio-item">
                        <div class="card">
                            <div class="img-card-logo-wrapper">
                                <div class="img-card-logo-item">
                                    <img src="{{ asset('img/products/calmet-logo.png') }}" class="img-card-logo">
                                </div>
                            </div>
                            <div class="d-flex justify-content-center">
                                <div>
                                    <img src="{{ asset('img/products/CALMET TB41.png') }}" class="img-card">
                                </div>
                            </div>
                            <div class="card-body p-1">
                                <h5 class="font-weight-bold text-dark mb-0">
                                    MINI TEST BENCH CALMET TB41
                                </h5>
                                <div class="badge badge-info badge-sm font-weight-semibold mb-1" style="font-size: 9px;">
                                    KWH METER ERROR TEST
                                </div>
                                <p class="text-1 mb-0">
                                    1 ph and 3 ph, CT/VT 4 Positions<br />
                                    PC Software for calibration via USB<br />
                                    3Ph current range 1mA-120A (300VA)<br />
                                    Phase voltage 20-600V (150VA) per channel<br />
                                    Accuracy class 0.02% internal standard meter<br />
                                    Fully automatic Test Procedures/Reports<br />
                                    Simultaneously testing up to 4 meters<br />
                                    Compact module design, size and light weight<br />
                                    Isolation transformers ICT "closed link" meter
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <div class="row portfolio-list sort-destination lightbox" data-sort-id="portfolio"
                data-plugin-options="{'delegate': 'a.lightbox-portfolio', 'type': 'image', 'gallery': {'enabled': true}}">

                <div class="col-sm-12 isotope-item test-and-measurement">
                    <h2 class="font-weight-extra-normal text-5 mb-0 text-center">
                        <strong class="font-weight-extra-bold">TEST </strong>AND MEASUREMENT
                    </h2>
                </div>

                <div class="col-md-6 col-lg-3 isotope-item test-and-measurement">
                    <div class="portfolio-item">
                        <div class="card">
                            <div class="img-card-logo-wrapper">
                                <div class="img-card-logo-item">
                                    <img src="{{ asset('img/products/HIOKI LOGO.png') }}" class="img-card-logo">
                                </div>
                            </div>
                            <div class="d-flex justify-content-center">
                                <div>
                                    <img src="{{ asset('img/products/POWER QUALITY ANALYZER PQ3198, PQ3100.png') }}"
                                        class="img-card">
                                </div>
                            </div>
                            <div class="card-body p-1">
                                <h5 class="font-weight-bold text-dark mb-0">
                                    POWER QUALITY ANALYZER HIOKI PQ3198, PQ3100
                                </h5>
                                <div class="badge badge-info badge-sm font-weight-semibold mb-1" style="font-size: 9px;">
                                    TEST AND MEASUREMENT
                                </div>
                                <p class="text-1 mb-0">
                                    Class A international standards<br />
                                    Basic voltage accuracy of ±0.1%<br />
                                    High-voltage, wideband performance<br />
                                    Two-circuit measurement<br />
                                    GPS time synchronization<br />
                                    Voltage ±0.1% of nominal voltage
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3 isotope-item test-and-measurement">
                    <div class="portfolio-item">
                        <div class="card">
                            <div class="img-card-logo-wrapper">
                                <div class="img-card-logo-item">
                                    <img src="{{ asset('img/products/HIOKI LOGO.png') }}" class="img-card-logo">
                                </div>
                            </div>
                            <div class="d-flex justify-content-center">
                                <div>
                                    <img src="{{ asset('img/products/HI TESTER CM - 3286.png') }}" class="img-card">
                                </div>
                            </div>
                            <div class="card-body p-1">
                                <h5 class="font-weight-bold text-dark mb-0">
                                    CLAMP AMPERE HIOKI HI TESTER CM - 3286
                                </h5>
                                <div class="badge badge-info badge-sm font-weight-semibold mb-1" style="font-size: 9px;">
                                    TEST AND MEASUREMENT
                                </div>
                                <p class="text-1 mb-0">
                                    Check Harmonics and PF<br />
                                    20 -1000 A AC<br />
                                    150 - 600 V AC<br />
                                    3 - 1200 kW<br />
                                    Freq, Reactivity, phase angle<br />
                                    Bluetooth connection
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3 isotope-item test-and-measurement">
                    <div class="portfolio-item">
                        <div class="card">
                            <div class="img-card-logo-wrapper">
                                <div class="img-card-logo-item">
                                    <img src="{{ asset('img/products/FLIR LOGO.png') }}" class="img-card-logo">
                                </div>
                            </div>
                            <div class="d-flex justify-content-center">
                                <div>
                                    <img src="{{ asset('img/products/THERMAL CAMERA FLIR EX.jpg') }}" class="img-card">
                                </div>
                            </div>
                            <div class="card-body p-1">
                                <h5 class="font-weight-bold text-dark mb-0">
                                    THERMAL CAMERA FLIR EX
                                </h5>
                                <div class="badge badge-info badge-sm font-weight-semibold mb-1" style="font-size: 9px;">
                                    TEST AND MEASUREMENT
                                </div>
                                <p class="text-1 mb-0">
                                    Measuring temperatures from -20°C to 550°C<br />
                                    MSX® technology (thermal imaging)<br />
                                    Wi-Fi connectivity Android/ IOS<br />
                                    IR Resolution :<br />
                                    E4 80 × 60 (4,800 pixels)<br />
                                    E5-XT 160 × 120 (19,200 pixels)<br />
                                    E6-XT 240 × 180 (43,200 pixels)<br />
                                    E8-XT 320 × 240 (76,800 pixels)
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3 isotope-item test-and-measurement">
                    <div class="portfolio-item">
                        <div class="card">
                            <div class="img-card-logo-wrapper">
                                <div class="img-card-logo-item">
                                    <img src="{{ asset('img/products/SPX TECHNOLOGY LOGO.jpg') }}" class="img-card-logo">
                                </div>
                            </div>
                            <div class="d-flex justify-content-center">
                                <div>
                                    <img src="{{ asset('img/products/RADIODETECTION RD8200.jpg') }}" class="img-card">
                                </div>
                            </div>
                            <div class="card-body p-1">
                                <h5 class="font-weight-bold text-dark mb-0">
                                    UNDERGROUP CABLE & PIPE LOCATOR RADIODETECTION RD8200
                                </h5>
                                <div class="badge badge-info badge-sm font-weight-semibold mb-1" style="font-size: 9px;">
                                    TEST AND MEASUREMENT
                                </div>
                                <p class="text-1 mb-0">
                                    an essential device used to detect and trace the paths of underground cables and utility
                                    lines, including power lines, telecommunication cables, and pipeline systems.<br />
                                    Performance:<br />
                                    Sensitivity: 6E-15 Tesla; 5µA at 1 meter (33kHz)<br />
                                    Dynamic range: 140dB rms/√Hz<br />
                                    Selectivity: 120dB/Hz<br />
                                    Depth measurement precision1: ± 3%<br />
                                    Locate Functions:<br />
                                    Active Locate Modes Five: Peak; Peak+™ (choice of combined Peak & Guidance or Peak &
                                    Null);
                                    Guidance; Broad Peak™; Null<br />
                                    Gain control: Guidance Mode: Automatic.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <div class="row portfolio-list sort-destination lightbox" data-sort-id="portfolio"
                data-plugin-options="{'delegate': 'a.lightbox-portfolio', 'type': 'image', 'gallery': {'enabled': true}}">

                <div class="col-12 isotope-item test-and-measurement">
                    <div class="d-flex justify-content-center gap-4 flex-wrap">

                        <div class="portfolio-item">
                            <div class="card">
                                <div class="d-flex justify-content-center">
                                    <div>
                                        <img src="{{ asset('img/products/20 kV Amp stick & Volt stick.png') }}"
                                            class="img-card">
                                    </div>
                                </div>
                                <div class="card-body p-1">
                                    <h5 class="font-weight-bold text-dark mb-0">
                                        20 kV Amp stick & Volt stick
                                    </h5>
                                    <div class="badge badge-info badge-sm font-weight-semibold mb-1"
                                        style="font-size: 9px;">
                                        TEST AND MEASUREMENT
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="portfolio-item">
                            <div class="card">
                                <div class="d-flex justify-content-center">
                                    <div>
                                        <img src="{{ asset('img/products/20 kV Voltage Detector.png') }}"
                                            class="img-card">
                                    </div>
                                </div>
                                <div class="card-body p-1">
                                    <h5 class="font-weight-bold text-dark mb-0">
                                        20 kV Voltage Detector
                                    </h5>
                                    <div class="badge badge-info badge-sm font-weight-semibold mb-1"
                                        style="font-size: 9px;">
                                        TEST AND MEASUREMENT
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="portfolio-item">
                            <div class="card">
                                <div class="d-flex justify-content-center">
                                    <div>
                                        <img src="{{ asset('img/products/Grounding sets Telescopic stick.png') }}"
                                            class="img-card">
                                    </div>
                                </div>
                                <div class="card-body p-1">
                                    <h5 class="font-weight-bold text-dark mb-0">
                                        Grounding sets Telescopic stick
                                    </h5>
                                    <div class="badge badge-info badge-sm font-weight-semibold mb-1"
                                        style="font-size: 9px;">
                                        TEST AND MEASUREMENT
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="portfolio-item">
                            <div class="card">
                                <div class="d-flex justify-content-center">
                                    <div>
                                        <img src="{{ asset('img/products/Plastic seals.png') }}" class="img-card">
                                    </div>
                                </div>
                                <div class="card-body p-1">
                                    <h5 class="font-weight-bold text-dark mb-0">
                                        Plastic seals
                                    </h5>
                                    <div class="badge badge-info badge-sm font-weight-semibold mb-1"
                                        style="font-size: 9px;">
                                        TEST AND MEASUREMENT
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="portfolio-item">
                            <div class="card">
                                <div class="d-flex justify-content-center">
                                    <div>
                                        <img src="{{ asset('img/products/Safety Equipment.jpg') }}" class="img-card">
                                    </div>
                                </div>
                                <div class="card-body p-1">
                                    <h5 class="font-weight-bold text-dark mb-0">
                                        Safety Equipment
                                    </h5>
                                    <div class="badge badge-info badge-sm font-weight-semibold mb-1"
                                        style="font-size: 9px;">
                                        TEST AND MEASUREMENT
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
