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

        .text-1 {
            line-height: 1rem;
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

                <h2 class="font-weight-extra-bold text-5 mb-0 p-0" style="line-height: 1rem;">
                    ELECTRICAL
                </h2>

                <div id="relay-protection" class="mb-0">
                    <h3 class="font-weight-bold text-3 mb-0">PROTECTION RELAYS</h3>

                    <div class="row">
                        <div class="col-sm-12 col-md-4">
                            <div class="row">
                                <div class="col-sm-12 col-md-6 mb-1 d-flex justify-content-center">
                                    <img src="{{ asset('img/MICOM-P123.jpg') }}" class="img-fluid" alt="MICOM P123" />
                                </div>
                                <div class="col-sm-12 col-md-6 mb-1 d-flex justify-content-center">
                                    <img src="{{ asset('img/MICOM-P127.jpg') }}" class="img-fluid" alt="MICOM P127" />
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-8">
                            <h4 class="font-weight-bold text-2 mb-0">MICOM P123, 127 FEEDER MANAGEMENT RELAY</h4>
                            <p class="mb-1 text-1">
                                3Ph Over current (50/51P), Ground fault (50/51N) Phase & Ground Fault directional 67(P), 67N
                                Restricted earth fault (64)<br />
                                Negative sequence overcurrent (46)<br />
                                Undercurrent (37), Broken conductor (46BC)<br />
                                Circuit breaker failure (50BF), Trip Circuit Spv (TCS)<br />
                                Over/Under voltage (27/59)<br />
                                Residual over voltage (59N), Autoreclose (79) Modbus protocol/ DNP3
                            </p>
                        </div>

                        <div class="col-sm-12 col-md-4">
                            <div class="row">
                                <div class="col-sm-12 mb-1 d-flex justify-content-center">
                                    <img src="{{ asset('img/MICOM-P142.jpg') }}" class="img-fluid" alt="MICOM P142" />
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-8">
                            <h4 class="font-weight-bold text-2 mb-0">MICOM P142 ,P143FEEDER MANAGEMENT RELAY IEC61830 SAS
                            </h4>
                            <p class="mb-1 text-1">
                                3Ph Over current (50/51P), Ground fault (50/51N)<br />
                                Phase & Ground Fault directional 67(P), 67N Restricted earth fault (64)<br />
                                Negative sequence over current (46)<br />
                                Undercurrent (37), Broken conductor (46BC)<br />
                                Circuit breaker failure (50BF), (TCS) Over/Under voltage (27/59),Residual overvoltage (59N),
                                Auto reclose (79), IEC 61860 protocol SAS/ DNP3
                            </p>
                        </div>

                        <div class="col-sm-12 col-md-4">
                            <div class="row">
                                <div class="col-sm-12 mb-1 d-flex justify-content-center">
                                    <img src="{{ asset('img/MICOM-P543.jpg') }}" class="img-fluid" alt="MICOM P543" />
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-8">
                            <h4 class="font-weight-bold text-2 mb-0">MICOM P543 LINE CURRENT DIFFERENTIAL RELAY</h4>
                            <p class="mb-1 text-1">
                                3ph Overcurrent/ Groundfault 50N/51N, Directional earth fault<br />
                                Undervoltage ANSI Code: 27, Overvoltage ANSI Code: 59<br />
                                Negative/unbalanced sequence ANSI code: 46<br />
                                Directional phase overcurrent, Thermal overload protection ANSI code: 49RMS<br />
                                Watt metric grounding, Synchronization - check ANSI code: 25<br />
                                Underfrequency ANSI Code: 81L<br />
                                Over frequency Number of inputs16 discrete<br />
                                5 CT current inputs...X/5 A and X/1 A, 4 voltages Number of outputs14 discrete<br />
                                Communication port protocols DNP3, IEC 61850, Ethernet, Modbus RTU, Event recording
                            </p>
                        </div>

                        <div class="col-sm-12 col-md-4">
                            <div class="row">
                                <div class="col-sm-12 mb-1 d-flex justify-content-center">
                                    <img src="{{ asset('img/EASERGY-P3-P5.jpg') }}" class="img-fluid" alt="EASERGY P3 P5" />
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-8">
                            <h4 class="font-weight-bold text-2 mb-0">EASERGY P3, P5</h4>
                            <p class="mb-1 text-1">
                                Built-in arc flash protection<br />
                                Advanced cybersecurity compliant to IEC 62443<br />
                                Intuitive withdrawable design with backup memory<br />
                                Plug and play hardware expansion<br />
                                EF, Dir OCR, Dir EF, UFR, OVR, 32 Reverse Power 10DI + 8DO + Back Up Memory Protocol IEC
                                61850 for SAS and DNP 3 serial for DCC Simultaneous
                            </p>
                        </div>
                    </div>

                </div>

            </div>

        </div>
    </div>
@endsection
