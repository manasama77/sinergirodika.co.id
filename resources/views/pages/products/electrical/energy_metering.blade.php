@extends('template')

@section('css')
    <style>
        table>tbody>tr>td {
            font-size: 0.7rem;
        }

        .table-sm>:not(caption)>*>* {
            padding: 0.10rem 0.10rem;
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
                    <strong class="font-weight-extra-bold">ENERGY METERING</strong>
                </h2>

                <div class="my-3">
                    <div class="row">
                        <div class="col-sm-12 col-md-6 mb-4">
                            <h3 class="font-weight-bold text-4 text-center mb-2">MK6E CLASS 0.2S</h3>
                            <div class="row">
                                <div class="col-sm-12 mb-3">
                                    <div class="row">
                                        <div class="col-12 d-flex justify-content-center">
                                            <img src="{{ asset('img/MK6E CLASS 0.2S.png') }}" alt="MK6E CLASS 0.2S"
                                                style="width: auto; height: 120px;" />
                                        </div>
                                        <div class="col-12 d-flex justify-content-center">
                                            <img src="{{ asset('img/EDMI-logo.png') }}" alt="EDMI logo"
                                                style="width: auto; height: 40px;" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <p class="m-0">Class 0.2S (IEC 62053-22, IEC 62052-11) Nominal Voltage (P-N) 57 to 240 V</p>
                            <table class="table table-borderless table-sm">
                                <tbody>
                                    <tr>
                                        <td>Current</td>
                                        <td>:</td>
                                        <td>CT 1/4 A, 5/20A</td>
                                    </tr>
                                    <tr>
                                        <td>Auxiliary Supply</td>
                                        <td>:</td>
                                        <td>240V, 110V</td>
                                    </tr>
                                    <tr>
                                        <td>Measurement Modes</td>
                                        <td>:</td>
                                        <td>3P2W & 3P3W</td>
                                    </tr>
                                    <tr>
                                        <td>Communication</td>
                                        <td>:</td>
                                        <td>RS232/RS485 Modbus protocol</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="col-sm-12 col-md-6 mb-4">
                            <h3 class="font-weight-bold text-4 text-center mb-2">MK-6N Class 0.5S</h3>
                            <div class="row">
                                <div class="col-sm-12 mb-3">
                                    <div class="row">
                                        <div class="col-12 d-flex justify-content-center">
                                            <img src="{{ asset('img/MK-6N Class 0.5S.png') }}" alt="MK-6N Class 0.5S"
                                                style="width: auto; height: 120px;" />
                                        </div>
                                        <div class="col-12 d-flex justify-content-center">
                                            <img src="{{ asset('img/EDMI-logo.png') }}" alt="EDMI logo"
                                                style="width: auto; height: 40px;" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <p class="m-0">Class 0.5s (IEC 62053-22, IEC 62052-11)</p>
                            <table class="table table-borderless table-sm">
                                <tbody>
                                    <tr>
                                        <td>Nominal Voltage (P-N)</td>
                                        <td>:</td>
                                        <td>57-240 V</td>
                                    </tr>
                                    <tr>
                                        <td>Current</td>
                                        <td>:</td>
                                        <td>CT 5(10)A CT</td>
                                    </tr>
                                    <tr>
                                        <td>Measurement Modes</td>
                                        <td>:</td>
                                        <td>3P2W & 3P3W</td>
                                    </tr>
                                    <tr>
                                        <td>Aux Voltage</td>
                                        <td>:</td>
                                        <td>100V-240 V AC/DC</td>
                                    </tr>
                                    <tr>
                                        <td>Serial ports</td>
                                        <td>:</td>
                                        <td>RS232, RS485, RS232 & RS 485 Modbus protocol</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-12 col-md-6 mb-3 d-flex justify-content-center">
                            <img src="{{ asset('img/POWER QUALITY METER 1.jpg') }}" alt="POWER QUALITY METER"
                                style="width: auto; height: 150px;" />
                        </div>
                        <div class="col-sm-12 col-md-6 mb-3 d-flex justify-content-center">
                            <img src="{{ asset('img/POWER QUALITY METER 2.jpg') }}" alt="POWER QUALITY METER"
                                style="width: auto; height: 150px;" />
                        </div>
                    </div>
                    <h4 class="font-weight-bold text-3 mb-2">POWER QUALITY METER MEMO / ENERIUM</h4>
                    <p class="mb-4">Accuracy suitable for the most critical MV/LV
                        Measurements with The operating history and diagnostic tools
                        Accuracy class (as per IEC 61557-12) 0.5 or 0.2
                        Number of alarms 16
                        Time/date-stamped events recorded 64
                        Power quality
                        THD / PF / Tan φ
                        Max. harmonic orders 25/50
                        Qualimetry as per EN50160
                        Capture of V, U, I & In waveforms 16
                        Storage of the last 1,024 time/date-stamped
                        events (dips, outages, overvoltage)
                        Inputs / Outputs Max. 8</p>

                    <div class="row">
                        <div class="col-sm-12 col-md-4 mb-3 d-flex justify-content-center">
                            <img src="{{ asset('img/MAP COMPACT POWER QUALITY ANALYZER 1.jpg') }}"
                                alt="MAP COMPACT POWER QUALITY ANALYZER" style="width: auto; height: 120px;" />
                        </div>
                        <div class="col-sm-12 col-md-4 mb-3 d-flex justify-content-center">
                            <img src="{{ asset('img/MAP COMPACT POWER QUALITY ANALYZER 2.jpg') }}"
                                alt="MAP COMPACT POWER QUALITY ANALYZER" style="width: auto; height: 120px;" />
                        </div>
                        <div class="col-sm-12 col-md-4 mb-3 d-flex justify-content-center">
                            <img src="{{ asset('img/MAP COMPACT POWER QUALITY ANALYZER 3.jpg') }}"
                                alt="MAP COMPACT POWER QUALITY ANALYZER" style="width: auto; height: 120px;" />
                        </div>
                    </div>
                    <h4 class="font-weight-bold text-3 mb-2">MAP COMPACT POWER QUALITY ANALYZER</h4>
                    <p class="mb-4">Built-in display
                        To Monitor and record Lfl, Pst and Plt flicker, dips
                        /over voltages / outages
                        Measurement compliant with IEC 61000-4-30 Class A
                        Integrated EN50160 report generation
                        Harmonics up to the 50th order
                        Waveform capture with programmable pre-time and post-time
                        Measurement of power and energy values as primary quantities
                        software; Qual-SRTc, Qual-View
                        Voltage input: 3 channels: 0-364/0-630 VRMS
                        Current input: 4 channels, 0-6 A RMS (clip on CT option)
                        Auxiliary power supply: 175-255 Vac (10s power reserve)
                        Communication: RS232 / Current loop / Ethernet port / Mini USB
                    </p>

                </div>

            </div>

        </div>
    </div>
@endsection
