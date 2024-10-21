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
                    <strong class="font-weight-extra-bold">DC POWER SUPPLY</strong>
                </h2>

                <h3 class="font-weight-bold text-4 mb-0">
                    RECTIFIERS, INVERTER BATTERY CHARGER
                </h3>
                <p class="mb-4">
                    Automatic voltage control & current limiting Thyristor (SCR) controlled and Suitable
                    for all industrial Lead acid and Ni-Cd/ Lithium batteries
                </p>

                <div class="row">
                    <div class="col-sm-12 col-md-6 mb-3">
                        <div class="row">
                            <div class="col-sm-12">
                                <h3 class="font-weight-bold text-3 mb-3">
                                    Rectifier 220 VAC to 48 VDC
                                </h3>
                                <img src="{{ asset('img/Rectifier 220 VAC to 48 VDC.jpg') }}"
                                    alt="Rectifier 220 VAC to 48 VDC" class="mb-3" style="width: auto; height: 150px;" />
                                <div class="table-responsive">
                                    <table class="table table-borderless table-sm">
                                        <tbody>
                                            <tr>
                                                <td>Capacity</td>
                                                <td>10 - 200 A</td>
                                            </tr>
                                            <tr>
                                                <td>Space Battery</td>
                                                <td>up to 4 batteries</td>
                                            </tr>
                                            <tr>
                                                <td>Nominal lnput voltage</td>
                                                <td>220 VAC single phase</td>
                                            </tr>
                                            <tr>
                                                <td>Nominal Output voltage</td>
                                                <td>48 VDC</td>
                                            </tr>
                                            <tr>
                                                <td>Output</td>
                                                <td>Load dan battery charge</td>
                                            </tr>
                                            <tr>
                                                <td>Type Charging</td>
                                                <td>Boosting, Floating dan Equalizing</td>
                                            </tr>
                                            <tr>
                                                <td>Ambient Temperatur</td>
                                                <td>0-40 C</td>
                                            </tr>
                                            <tr>
                                                <td>Surge Protector</td>
                                                <td>up to 4 kVA</td>
                                            </tr>
                                            <tr>
                                                <td>Overvoltage Protector</td>
                                                <td>up to 500 VAC</td>
                                            </tr>
                                            <tr>
                                                <td>Display (Analog atau digital)</td>
                                                <td>Load current, Battery charge Current, Voltage</td>
                                            </tr>
                                            <tr>
                                                <td>Alarm/indicator</td>
                                                <td>overload, voltage input dan output fail</td>
                                            </tr>
                                            <tr>
                                                <td>Communication</td>
                                                <td>RS232, RS485/ Modbus, TCP/IP</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6 mb-3">
                        <div class="row">
                            <div class="col-sm-12">
                                <h3 class="font-weight-bold text-3 mb-3">
                                    Inverter 48 VDC to 220 VAC
                                </h3>
                                <img src="{{ asset('img/Inverter 48 VDC to 220 VAC.jpg') }}"
                                    alt="Inverter 48 VDC to 220 VAC" style="width: auto; height: 150px;" class="mb-3" />
                                <div class="table-responsive">
                                    <table class="table table-borderless table-sm">
                                        <tbody>
                                            <tr>
                                                <td>Capacity</td>
                                                <td>Up to 10A</td>
                                            </tr>
                                            <tr>
                                                <td>Nominal Input Voltage</td>
                                                <td>220 VAC single phase</td>
                                            </tr>
                                            <tr>
                                                <td>Nominal Output voltage</td>
                                                <td>220VAC</td>
                                            </tr>
                                            <tr>
                                                <td>Surge Protector</td>
                                                <td>up to 4 kVA</td>
                                            </tr>
                                            <tr>
                                                <td>Overvoltage Protector</td>
                                                <td>up to 500 VAC</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <h3 class="font-weight-bold text-4 mb-0">
                    LIFEPO4 BATTERY
                </h3>
                <img src="{{ asset('img/LIFEPO4 BATTERY.jpg') }}" alt="LIFEPO4 BATTERY" class="mb-3"
                    style="width: auto; height: 150px;" />
                <p class="mb-4">
                    Customized dimension
                    based on Panel dimension
                    Voltage 12/48/110VDC
                    Capacity 5-30 VA
                    BMS 60A, maximum charging 30A
                    Maximum Load 60A
                    Enclosure Fiberglass sheet + PVC
                    XT60 connectors
                    Application
                    DC power supply, Engine starting battery, electric bicycle/motorcycle/scooter,
                    power tools and Solar Lighting
                </p>

            </div>

        </div>
    </div>
@endsection
