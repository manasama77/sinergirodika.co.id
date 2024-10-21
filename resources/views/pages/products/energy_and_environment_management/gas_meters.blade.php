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
                    <strong class="font-weight-extra-bold">Gas Meter</strong>
                </h2>

                <div class="row">
                    <div class="col-sm-12 col-md-4 mb-1">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="d-flex justify-content-center">
                                    <img src="{{ asset('img/Gas Meter 1.png') }}" alt="Gas Meter" class="img-fluid" />
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="d-flex justify-content-center">
                                    <img src="{{ asset('img/Gas Meter 2.jpg') }}" alt="Gas Meter" class="img-fluid" />
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-8 mb-1">
                        <p>
                            Two-pipe Diaphragm gas meter G1.6, G2.5, G4 Cooperated with ZENNER International GmbH & Co. K,
                            Atmos®LoRa Series are credit gas meters employing the Sindcon's advanced technology in IOT to
                            build a reliable wireless communication system for gas meter.
                        </p>
                        <div class="table-responsive">
                            <table class="table table-borderless table-striped table-sm">
                                <tbody>
                                    <tr>
                                        <td class="font-weight-bold">Type</td>
                                        <td>G1.6 / G2.6 / G4</td>
                                    </tr>
                                    <tr>
                                        <td class="font-weight-bold">Norminal flowrate (Qn)</td>
                                        <td>1.6 / 2.5 / 4 (m³/h)</td>
                                    </tr>
                                    <tr>
                                        <td class="font-weight-bold">Maximum flowrate (Qmax)</td>
                                        <td>2.5 / 4 / 6 (m³/h)</td>
                                    </tr>
                                    <tr>
                                        <td class="font-weight-bold">Minimum flowrate (Qmin)</td>
                                        <td>0.016 / 0.0025 / 0.04 (m³/h)</td>
                                    </tr>
                                    <tr>
                                        <td class="font-weight-bold">Maximum operating pressure</td>
                                        <td>0.5 Bar</td>
                                    </tr>
                                    <tr>
                                        <td class="font-weight-bold">Maximum permissible errors</td>
                                        <td>
                                            ±1.5%<br />
                                            0.1Qmax≤Q≤Qmax ±3% / ±3% / ±3%<br />
                                            Qmin≤Q≤0.1Qmin ≤2 / ≤2 / ≤2 (mbar)
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="font-weight-bold">Max pressure loss</td>
                                        <td>
                                            99999.998 m³/h
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="font-weight-bold">Display field max</td>
                                        <td>0.0002 m³/h</td>
                                    </tr>
                                    <tr>
                                        <td class="font-weight-bold">Display field min</td>
                                        <td>1.2 dm³</td>
                                    </tr>
                                    <tr>
                                        <td class="font-weight-bold">Cyclic Volume</td>
                                        <td>1.5 class</td>
                                    </tr>
                                    <tr>
                                        <td class="font-weight-bold">Working voltage</td>
                                        <td>4.5/6 V</td>
                                    </tr>
                                    <tr>
                                        <td class="font-weight-bold">Communication Protocol</td>
                                        <td>Standard LoRaWAN Class A</td>
                                    </tr>
                                    <tr>
                                        <td class="font-weight-bold">Frequency</td>
                                        <td>Can support 470MHz, 916MHz, 923MHz</td>
                                    </tr>
                                    <tr>
                                        <td class="font-weight-bold">TX Power</td>
                                        <td>+20dBm</td>
                                    </tr>
                                    <tr>
                                        <td class="font-weight-bold">RX sensitivity</td>
                                        <td>Down to-137dBm</td>
                                    </tr>
                                    <tr>
                                        <td class="font-weight-bold">Bandwith</td>
                                        <td>125KHz</td>
                                    </tr>
                                    <tr>
                                        <td class="font-weight-bold">Local LCD Display</td>
                                        <td>Yes</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </div>
@endsection
