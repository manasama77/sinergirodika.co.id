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
                    <strong class="font-weight-extra-bold">Street Lamps and Warehouse</strong>
                </h2>

                <div class="row">
                    <div class="col-sm-12 col-md-7">
                        <ol>
                            <li>Installation Lampu Penerangan jalan Umum (PJU)</li>
                            <div class="table-responsive">
                                <table class="table table-sm">
                                    <tbody>
                                        <tr>
                                            <td>User</td>
                                            <td>Pemda Ogan Ilir Sumatera Selatan, year 2022</td>
                                        </tr>
                                        <tr>
                                            <td>Installation</td>
                                            <td>electrical and civil works PJU</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>

                            <li>Renovation of Oriflame Warehouse - Bogor</li>
                            <div class="table-responsive">
                                <table class="table table-sm">
                                    <tbody>
                                        <tr>
                                            <td>User</td>
                                            <td>PT Orindo alam ayu (oriflame), year 2016</td>
                                        </tr>
                                        <tr>
                                            <td>Installation</td>
                                            <td>Electrical, civil and Chiller for Warehouse</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>

                        </ol>
                    </div>
                    <div class="col-sm-12 col-md-5">
                        <div class="row">
                            <div class="col-sm-12 mb-3">
                                <div class="d-flex justify-content-center">
                                    <div>
                                        <img src="{{ asset('img/PJU dan Solar Cell Pemda.png') }}"
                                            alt="PJU dan Solar Cell Pemda" class="img-fluid" style="max-height: 300px;" />
                                    </div>
                                </div>
                                <h4 class="font-weight-extra-normal text-2 mb-3 text-center">
                                    PJU dan Solar Cell Pemda
                                </h4>
                            </div>
                            <div class="col-sm-12 mb-3">
                                <div class="d-flex justify-content-center">
                                    <div>
                                        <img src="{{ asset('img/Renovation of Warehouse Oriflame Bogor.jpg') }}"
                                            alt="Renovation of Warehouse Oriflame Bogor" class="img-fluid"
                                            style="max-height: 300px;" />
                                    </div>
                                </div>
                                <h4 class="font-weight-extra-normal text-2 mb-3 text-center">
                                    Renovation of Warehouse Oriflame Bogor
                                </h4>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </div>
@endsection
