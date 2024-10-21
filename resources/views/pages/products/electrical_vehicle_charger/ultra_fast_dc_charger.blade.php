@extends('template')

@section('css')
    <style>
        table>tbody>tr>td {
            /* font-size: 0.7rem; */
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
                    <strong class="font-weight-extra-bold">Electric Vehicle Charger (SPKLU)</strong>
                </h2>
                <h3 class="font-weight-extra-normal text-4 mb-3">
                    <strong class="font-weight-extra-bold">Ultra Fast DC Charger</strong>
                </h3>

                <div class="row">
                    <div class="col-sm-12 col-md-6">
                        <img src="{{ asset('img/Ampax.jpg') }}" alt="Ampax" class="mb-3"
                            style="width: auto; height: 250px;" />
                        <p class="mb-4">
                            ULTRA FAST CHARGER
                            60/120/160/180/240/320kW output
                            150-1000 VDC
                            2x 5m CCS charging cable
                            New Enclosure Design with
                            42-inch video screen
                            Modular design with patented INJET PPC,
                            Easy installation and easy maintenance
                            10-inch touch display
                            MID meter
                            OCPP 1.6J (Hubject pre-integration for roaming)
                            Ethernet / 4G module
                            IP54
                        </p>
                    </div>
                    <div class="col-sm-12 col-md-6">
                        <div class="row">
                            <div class="col-sm-12 col-md-6">
                                <img src="{{ asset('img/Ampax-PPM.jpg') }}" alt="Ampax-PPM" class="mb-3"
                                    style="width: auto; height: 250px;" />
                            </div>
                            <div class="col-sm-12 col-md-6">
                                <img src="{{ asset('img/PPM.jpg') }}" alt="PPM" class="mb-3"
                                    style="width: auto; height: 250px;" />
                            </div>
                        </div>
                        <p class="mb-0">
                            INJET Power integrated Charger controller Power Controller consist 5 components:
                        </p>
                        <ol>
                            <li>Power Controller</li>
                            <li>Energy Measuring Unit</li>
                            <li>Display</li>
                            <li>Power Modules</li>
                            <li>Charging Gun(s)</li>
                        </ol>

                        <p class="mb-0">
                            Unique INJET design leads to:
                        </p>
                        <ul>
                            <li>Lower hardware and maintenance costs</li>
                            <li>Higher availability: Charging module separated from control system,
                                stable and safe performance, easy maintenance</li>
                            <li>High Efficiency: Multiple module output modules in parallel
                                with flexible configuration, Constant power module and
                                smart power allocation with high charging efficiency</li>
                        </ul>
                    </div>
                </div>

            </div>

        </div>
    </div>
@endsection
