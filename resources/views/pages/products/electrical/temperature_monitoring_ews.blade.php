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
                    <strong class="font-weight-extra-bold">TEMPERATURE MONITORING/ EARLY WARNING SYSTEM</strong>
                </h2>
                <img src="{{ asset('img/TEMPERATURE MONITORING EARLY WARNING SYSTEM.png') }}"
                    alt="TEMPERATURE MONITORING EARLY WARNING SYSTEM" class="mb-3" style="width: auto; height: 250px;" />

                <p class="mb-4">
                    Temperature Monitoring on Critical spots in MV panels of Substation
                    Sensors installed in CB fingers, busbar, cable termination, cabinets wall both magnetic and strapped
                    attachment and wirelessly monitored by power meter (RTU)
                    When Spot's temperature raise and reach the pre programmed limit RTU will send notification to Scada
                    masters or IoT application via Internet or cellular as Early warning for users to do further action
                </p>

                <div class="row">
                    <div class="col-sm-12 col-md-4 text-center">
                        <img src="{{ asset('img/Magnetic and Strapped Battery power.jpg') }}"
                            style="width: auto; height: 200px;" alt="Magnetic and Strapped Battery power">
                        <p class="text-2 font-weight-semi-bold">Magnetic and Strapped Battery power</p>
                    </div>
                    <div class="col-sm-12 col-md-4 text-center">
                        <img src="{{ asset('img/CT Induction (No Battery).png') }}" style="width: auto; height: 200px;"
                            alt="CT Induction  (No Battery)">
                        <p class="text-2 font-weight-semi-bold">CT Induction (No Battery)</p>
                    </div>
                    <div class="col-sm-12 col-md-4 text-center">
                        <img src="{{ asset('img/Room Temperature & Humidity.png') }}" style="width: auto; height: 200px;"
                            alt="Room Temperature & Humidity">
                        <p class="text-2 font-weight-semi-bold">Room Temperature & Humidity </p>
                    </div>
                </div>

            </div>

        </div>
    </div>
@endsection
