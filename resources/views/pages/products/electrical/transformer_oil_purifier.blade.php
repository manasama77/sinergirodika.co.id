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
                    <strong class="font-weight-extra-bold">TRANSFORMER OIL PURIFIER</strong>
                </h2>
                <img src="{{ asset('img/TRANSFORMER OIL PURIFIER.png') }}" alt="TRANSFORMER OIL PURIFIER" class="mb-3"
                    style="width: auto; height: 250px;" />

                <h3 class="font-weight-bold text-4 mb-0">
                    PORTABLE OIL TEST SET OTS80PB
                </h3>
                <p class="mb-4">
                    Test voltages 60 kV / 80 kV
                    Lock in precision oil vessel
                    lockable gap setting
                    Flat electrode gap gauges
                    Oil Temperature Measurement
                    Easy to clean
                </p>

                <p class="mb-1">
                    <b>Purifier</b> is mainly used to improve insulation oil by removing trace water, gas, particulate
                    matters etc.
                    to boost performance and life time of transformers, circuit breakers, mutual inductors and cable.
                </p>
                <div class="table-responsive">
                    <table class="table table-borderless table-sm">
                        <tbody>
                            <tr>
                                <td style="min-width: 80px;">Capacity</td>
                                <td>2000, 4000, 6000 liter/hour</td>
                            </tr>
                            <tr>
                                <td>Process</td>
                                <td>Double stage : heating to remove water from oil, gas (de-gas) and remove tiny particles
                                    (purify) eq. acetylene, hydrogen, methane dan other particles. Trailer provided
                                    mobility.</td>
                            </tr>
                            <tr>
                                <td>Key projects</td>
                                <td>PLN UPK Kapuas, UP3 Ketapang and UP3B Kalbar , UPK Tambora NTB</td>
                            </tr>
                        </tbody>
                    </table>
                </div>

            </div>

        </div>
    </div>
@endsection
