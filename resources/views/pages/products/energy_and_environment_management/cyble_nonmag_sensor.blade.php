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
                    <strong class="font-weight-extra-bold">Cyble Nonmag Sensor</strong>
                </h2>

                <div class="row">
                    <div class="col-sm-12 col-md-6 mb-1">
                        <div class="d-flex justify-content-center gap-3">
                            <div>
                                <img src="{{ asset('img/Cyble Nonmag Sensor.png') }}" alt="Cyble Nonmag Sensor"
                                    style="width: auto; height: 100px;" />
                                <p class="text-2 mb-1">Cyble Nonmag Sensor</p>
                            </div>
                            <div class="align-self-center">
                                <img src="{{ asset('img/plus icon.png') }}" alt="plus icon"
                                    style="width: auto; height: 50px;" />
                            </div>
                            <div>
                                <img src="{{ asset('img/Existing Water Meter.png') }}" alt="Existing Water Meter"
                                    style="width: auto; height: 100px;" />
                                <p class="text-2 mb-1">Existing Water Meter</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6 mb-1">
                        <p>
                            NonMag-Sensor is completely compatible with all Itron water meter and gas meter pre-equipped
                            with the Cyble target. Easily retrofitted and installed on meters already on the field.
                        </p>
                    </div>
                </div>

                <div class="table-responsive">
                    <table class="table table-borderless table-striped table-sm">
                        <tbody>
                            <tr>
                                <td class="font-weight-bold">Working Voltage</td>
                                <td>3.6V</td>
                            </tr>
                            <tr>
                                <td class="font-weight-bold">Data Collecting Way</td>
                                <td>Non-magnetic Transmission</td>
                            </tr>
                            <tr>
                                <td class="font-weight-bold">Communication mode</td>
                                <td>LoRaWAN</td>
                            </tr>
                            <tr>
                                <td class="font-weight-bold">Working frequency</td>
                                <td>920MHz - 925MHz</td>
                            </tr>
                            <tr>
                                <td class="font-weight-bold">Channels</td>
                                <td>8 settable channels with bandwith of 125kHz</td>
                            </tr>
                            <tr>
                                <td class="font-weight-bold">TX power</td>
                                <td>14dBm</td>
                            </tr>
                            <tr>
                                <td class="font-weight-bold">RX sensitivities</td>
                                <td>Down to - 137dBm</td>
                            </tr>
                            <tr>
                                <td class="font-weight-bold">Communication distance</td>
                                <td>3km to 10km (eyesight distance in open space)</td>
                            </tr>
                            <tr>
                                <td class="font-weight-bold">Data rate</td>
                                <td>980bps ~ 3.125kbps (adaptive data rate)</td>
                            </tr>
                            <tr>
                                <td class="font-weight-bold">Listen Before Talk (LBT)</td>
                                <td>Yes</td>
                            </tr>
                            <tr>
                                <td class="font-weight-bold">Standby current</td>
                                <td>
                                    <= 40uA</td>
                            </tr>
                            <tr>
                                <td class="font-weight-bold">Environment temperature</td>
                                <td>0.1 ~ 50°C</td>
                            </tr>
                            <tr>
                                <td class="font-weight-bold">Number of Data cached when network interrupted</td>
                                <td>10</td>
                            </tr>
                            <tr>
                                <td class="font-weight-bold">Data Report Interval</td>
                                <td>15min | 30min | 1hour | 6 hour | 8 hour | 24 hour</td>
                            </tr>
                            <tr>
                                <td class="font-weight-bold">Battery life (year)</td>
                                <td>5 | 6 | 7 | 8 | 8 | 8</td>
                            </tr>
                        </tbody>
                    </table>
                </div>

            </div>

        </div>
    </div>
@endsection
