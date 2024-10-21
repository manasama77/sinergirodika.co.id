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
                    <strong class="font-weight-extra-bold">AC and Small Commercial DC Charger</strong>
                </h3>

                <div class="row">
                    <div class="col-sm-12 col-md-6">
                        <img src="{{ asset('img/Swift.jpg') }}" alt="Swift" class="mb-3"
                            style="width: auto; height: 250px;" />
                        <h4 class="font-weight-extra-bold text-3 mb-1">
                            SWIFT 2.0
                        </h4>
                        <p class="mb-4">
                            HOME & WALLBOX CHARGER
                            with Case B & Case C versions
                            RFID reader / LEDs
                            4-inch display(colour)
                            software meter
                            Premium metal enclosure &
                            glass-front-panel
                            OCPP 1.6J
                            Ethernet, wifi, 4G
                            RS485 / ModBus TCP
                            6mA+30mA
                            AC&DC leakage
                            protection IP65
                        </p>
                    </div>
                    <div class="col-sm-12 col-md-6">
                        <img src="{{ asset('img/HUB.jpg') }}" alt="HUB" class="mb-3"
                            style="width: auto; height: 250px;" />
                        <h4 class="font-weight-extra-bold text-3 mb-0">
                            HUB
                        </h4>
                        <h5 class="font-weight-extra-normal mb-1">
                            SMALL COMMERCIAL DC CHARGER
                        </h5>
                        <p class="mb-4">
                            HOME & WALLBOX CHARGER
                            with Case B & Case C versions
                            RFID reader / LEDs
                            4-inch display(colour)
                            software meter
                            Premium metal enclosure &
                            glass-front-panel
                            OCPP 1.6J
                            Ethernet, wifi, 4G
                            RS485 / ModBus TCP
                            6mA+30mA
                            AC&DC leakage
                            protection IP65
                        </p>
                    </div>
                </div>

            </div>

        </div>
    </div>
@endsection
