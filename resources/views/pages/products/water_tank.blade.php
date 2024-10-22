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
                    <strong class="font-weight-extra-bold">WATER TANK</strong>
                </h2>

                <div class="row">
                    <div class="col-sm-12 col-md-4 mb-1">
                        <div class="d-flex justify-content-center">
                            <div>
                                <img src="{{ asset('img/WATER TANK.png') }}" alt="WATER TANK" class="mb-3 img-fluid" />
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-8 mb-1">
                        <p class="mb-3">
                            Zincalume Steel Liner Australian Technology
                            Local Content TKDN 34.89%
                            Long life time (10 years warranty)
                            Harsh condition earth quake and wind resistance 317kmh
                            Easy fast fabrication, delivery and installation
                            Concrete Base or Steel Platform
                            Permanent/ Temporary Installation
                        </p>
                        <h3 class="font-weight-bold text-3 mb-0">
                            APPLICATION
                        </h3>
                        <ol>
                            <li>Potable Water (Drinking water)</li>
                            <li>Raw Water (Deep well/ river)</li>
                            <li>Permeate Water (RO)</li>
                            <li>Hypersaline</li>
                            <li>Waste water / Sewage</li>
                            <li>Aquaculture (Fishery)</li>
                            <li>Agriculture</li>
                            <li>Disaster Quick Respond Facility</li>
                        </ol>
                    </div>

                    <div class="col-sm-12 col-md-4 mb-1">
                        <div class="d-flex justify-content-center">
                            <div>
                                <img src="{{ asset('img/WATER TANK INSIDE.png') }}" alt="WATER TANK INSIDE"
                                    class="mb-3 img-fluid" />
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-8 mb-1">
                        <h3 class="font-weight-bold text-3 mb-0">
                            INSIDE
                        </h3>
                        <ul>
                            <li>Standard PVC Liner 700gsm</li>
                            <li>Puncture Resistance 1022 N</li>
                            <li>Welding strength - 57 N/mm</li>
                            <li>AS4020 potable water</li>
                            <li>Temperature up to 60 degree</li>
                        </ul>
                    </div>

                    <div class="col-sm-12 col-mb-8 mb-1">
                        <h3 class="font-weight-bold text-5 mb-3">
                            Nozzle (Custom)
                        </h3>
                        <img src="{{ asset('img/Nozzle (Custom).png') }}" alt="Nozzle (Custom)" class="mb-3 img-fluid" />
                    </div>
                </div>

            </div>

        </div>
    </div>
@endsection
