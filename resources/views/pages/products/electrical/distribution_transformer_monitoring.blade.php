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
                    <strong class="font-weight-extra-bold">DISTRIBUTION TRANSFORMER MONITORING</strong>
                </h2>
                <img src="{{ asset('img/DISTRIBUTION TRANSFORMER MONITORING.png') }}"
                    alt="DISTRIBUTION TRANSFORMER MONITORING" class="mb-3" style="width: auto; height: 250px;" />

                <p class="mb-4">
                    Meters measure Energy on Distribution transformer incoming and LVSB feeders
                    Energy and electrical parameters are monitored online via Cellular gateway to IoT Energy Management
                    system
                    Billing and Energy-Losses reports generated can be accessed by clients through internet connection
                    everywhere
                </p>

                <div class="row">
                    <div class="col-sm-12 col-md-4 text-center">
                        <img src="{{ asset('img/DISTRIBUTION TRANSFORMER MONITORING INSTALATION PHOTO.png') }}"
                            class="img-fluid" alt="DISTRIBUTION TRANSFORMER MONITORING INSTALATION PHOTO">
                        <p class="text-2 font-weight-semi-bold">INSTALATION PHOTO</p>
                    </div>
                    <div class="col-sm-12 col-md-4 text-center">
                        <img src="{{ asset('img/ADW300 3ph meter.png') }}" class="img-fluid"
                            alt="ADW300 3ph meter w/ Built-in 4G modem">
                        <p class="text-2 font-weight-semi-bold">ADW300 3ph meter w/ Built-in 4G modem</p>
                    </div>
                    <div class="col-sm-12 col-md-4 text-center">
                        <img src="{{ asset('img/ADW201 4 Channel.jpg') }}" class="img-fluid"
                            alt="ADW201 4 Channel 3ph Cl. 1 meters">
                        <p class="text-2 font-weight-semi-bold">ADW201 4 Channel 3ph Cl. 1 meters</p>
                    </div>
                    <div class="col-sm-12 col-md-4 text-center">
                        <img src="{{ asset('img/ADL400 Cl. 1.png') }}" class="img-fluid" alt="ADL400 Cl. 1  3ph meter ">
                        <p class="text-2 font-weight-semi-bold">ADL400 Cl. 1 3ph meter </p>
                    </div>
                    <div class="col-sm-12 col-md-4 text-center">
                        <img src="{{ asset('img/IoT Energy Management System.png') }}" class="img-fluid"
                            alt="IoT Energy Management System">
                        <p class="text-2 font-weight-semi-bold">IoT Energy Management System</p>
                    </div>
                    <div class="col-sm-12 col-md-4 text-center">
                        <img src="{{ asset('img/AWT100 4G.jpg') }}" class="img-fluid" alt="AWT100 4G Gateway Modem">
                        <p class="text-2 font-weight-semi-bold">AWT100 4G Gateway Modem</p>
                    </div>
                </div>

            </div>

        </div>
    </div>
@endsection
