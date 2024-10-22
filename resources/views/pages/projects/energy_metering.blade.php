@extends('template')

@section('css')
    <style>
        table>tbody>tr>td {
            font-size: 0.7rem;
        }

        .table-sm>:not(caption)>*>* {
            padding: 0.2rem 0.2rem;
        }
    </style>
@endsection

@section('content')
    <div class="container pt-3 pb-5">
        <div class="row pt-2">
            <div class="col-lg-3 position-relative">
                @include('pages.projects.aside')
            </div>
            <div class="col-lg-9">

                <h2 class="font-weight-extra-normal text-7 mb-3">
                    <strong class="font-weight-extra-bold">ENERGY METERS</strong>
                </h2>

                <div class="row">
                    <div class="col-sm-12 col-md-7">
                        <ol class="text-2">
                            <li>Installation 20 units Energy Meters EDMI MK6E Class 0.2s and supporting devices in 20
                                locations PT PLN Nusantara Power Kapuas Kalimantan Barat , Year 2023-2024</li>
                            <li>Installation Multi channel Meter for Online Losses Monitoring (OLM) Distribution Transformer
                                PT. PLN (Persero) UP3 Bangka, Year 2023</li>
                            <li>Installation 20 unit Kwh meter EDMI MK6E Class 0.2s
                                PT PLN (Persero) UP3B Sistem Kalbar, Year 2021
                            </li>
                            <li>Installation 10 Edmi MK6E MK6N and Schneider ION in Feeders
                                substation PLN Batam, Year : 2022</li>
                        </ol>
                    </div>
                    <div class="col-sm-12 col-md-5">
                        <div class="d-flex justify-content-center">
                            <div>
                                <img src="{{ asset('img/Kwh Class 0.2s PLN UPK Kapuas.png') }}"
                                    alt="Kwh Class 0.2s PLN UPK Kapuas" class="img-fluid" style="max-height: 300px;" />
                            </div>
                        </div>
                        <h4 class="font-weight-extra-normal text-2 mb-3 text-center">
                            Kwh Class 0.2s PLN UPK Kapuas
                        </h4>
                    </div>
                </div>

            </div>

        </div>
    </div>
@endsection
