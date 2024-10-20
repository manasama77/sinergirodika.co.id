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
                    <h3 class="font-weight-bold text-4 mb-2">PROTECTION RELAYS</h3>

                    <div class="row">
                        <div class="col-sm-12 col-md-6 mb-3 d-flex justify-content-center">
                            <img src="{{ asset('img/MICOM-P123.jpg') }}" class="img-fluid" alt="MICOM P123" />
                        </div>
                        <div class="col-sm-12 col-md-6 mb-3 d-flex justify-content-center">
                            <img src="{{ asset('img/MICOM-P127.jpg') }}" class="img-fluid" alt="MICOM P127" />
                        </div>
                    </div>
                    <h4 class="font-weight-bold text-3 mb-2">MICOM P123, 127 FEEDER MANAGEMENT RELAY</h4>
                    <p class="mb-4">3Ph Over current (50/51P), Ground fault (50/51N)
                        Phase & Ground Fault directional 67(P), 67N
                        Restricted earth fault (64)
                        Negative sequence overcurrent (46)
                        Undercurrent (37), Broken conductor (46BC)
                        Circuit breaker failure (50BF), Trip Circuit Spv (TCS)
                        Over/Under voltage (27/59)
                        Residual over voltage (59N), Autoreclose (79)
                        Modbus protocol/ DNP3</p>

                    <div class="row">
                        <div class="col-sm-12 mb-3 d-flex justify-content-center">
                            <img src="{{ asset('img/MICOM-P142.jpg') }}" class="img-fluid" alt="MICOM P142" />
                        </div>
                    </div>
                    <h4 class="font-weight-bold text-3 mb-2">MICOM P142 ,P143FEEDER MANAGEMENT RELAY IEC61830 SAS</h4>
                    <p class="mb-4">3Ph Over current (50/51P), Ground fault (50/51N)
                        Phase & Ground Fault directional 67(P), 67N
                        Restricted earth fault (64)
                        Negative sequence over current (46)
                        Undercurrent (37), Broken conductor (46BC)
                        Circuit breaker failure (50BF), (TCS)
                        Over/Under voltage (27/59),Residual overvoltage (59N), Auto reclose (79),
                        IEC 61860 protocol SAS/ DNP3</p>

                    <div class="row">
                        <div class="col-sm-12 mb-3 d-flex justify-content-center">
                            <img src="{{ asset('img/MICOM-P543.jpg') }}" class="img-fluid" alt="MICOM P543" />
                        </div>
                    </div>
                    <h4 class="font-weight-bold text-3 mb-2">MICOM P543 LINE CURRENT DIFFERENTIAL RELAY</h4>
                    <p class="mb-4">3ph Overcurrent/ Groundfault 50N/51N, Directional earth fault
                        Undervoltage ANSI Code: 27, Overvoltage ANSI Code: 59
                        Negative/unbalanced sequence ANSI code: 46
                        Directional phase overcurrent, Thermal overload protection ANSI code: 49RMS
                        Watt metric grounding, Synchronization - check ANSI code: 25
                        Underfrequency ANSI Code: 81L
                        Over frequency Number of inputs16 discrete
                        5 CT current inputs...X/5 A and X/1 A, 4 voltages Number of outputs14 discrete
                        Communication port protocols DNP3, IEC 61850,
                        Ethernet, Modbus RTU, Event recording</p>

                    <div class="row">
                        <div class="col-sm-12 mb-3 d-flex justify-content-center">
                            <img src="{{ asset('img/EASERGY-P3-P5.jpg') }}" class="img-fluid" alt="EASERGY P3 P5" />
                        </div>
                    </div>
                    <h4 class="font-weight-bold text-3 mb-2">EASERGY P3, P5</h4>
                    <p class="mb-4">Built-in arc flash protection
                        Advanced cybersecurity compliant to IEC 62443
                        Intuitive withdrawable design with backup memory
                        Plug and play hardware expansion
                        EF, Dir OCR, Dir EF, UFR, OVR, 32 Reverse Power 10DI
                        + 8DO + Back Up Memory Protocol IEC 61850 for SAS and DNP 3 serial for
                        DCC Simultaneous</p>
                </div>

            </div>

        </div>
    </div>
@endsection
