@extends('template')

@section('css')
    <style>
        table>tbody>tr>td {
            font-size: 0.7rem;
        }

        .table-sm>:not(caption)>*>* {
            padding: 0.2rem 0.2rem;
            line-height: 18px;
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
                    <strong class="font-weight-extra-bold">Transformer Oil Purifier</strong>
                </h2>

                <div class="row">
                    <div class="col-sm-12 col-md-8">
                        <ol class="text-2">
                            <li>Transformer Oil Purifier for Substation 2000 LH and 4000 LH</li>
                            <div class="table-responsive">
                                <table class="table table-sm">
                                    <tbody>
                                        <tr>
                                            <td>User</td>
                                            <td>PT PLN (Persero) UP2K Maluku, year 2019</td>
                                        </tr>
                                        <tr>
                                            <td>Project</td>
                                            <td>Supply and commissioning Mesin Treatment Oli Trafo (Oil Purifikasi)</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>

                            <li>Transformer Oil Purifier 4000 LH</li>
                            <div class="table-responsive">
                                <table class="table table-sm">
                                    <tbody>
                                        <tr>
                                            <td>User</td>
                                            <td>PT PLN (Persero) UPDK Tambora NTB, year 2018</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>

                            <li>Transformer Oil Purifier 4000 LH</li>
                            <div class="table-responsive">
                                <table class="table table-sm">
                                    <tbody>
                                        <tr>
                                            <td>User</td>
                                            <td>PT PLN (Persero) APDP Sistem Kalbar, year 2013</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>

                        </ol>
                    </div>
                    <div class="col-sm-12 col-md-4">
                        <div class="row">
                            <div class="col-sm-12 mb-3">
                                <div class="d-flex justify-content-center">
                                    <div>
                                        <img src="{{ asset('img/PLN Maluku 2019.png') }}" alt="PLN Maluku 2019"
                                            class="img-fluid" />
                                    </div>
                                </div>
                                <h4 class="font-weight-extra-normal text-2 mb-3 text-center">
                                    PLN Maluku 2019
                                </h4>
                            </div>
                            <div class="col-sm-12 mb-3">
                                <div class="d-flex justify-content-center">
                                    <div>
                                        <img src="{{ asset('img/PLN NTB 2018.jpg') }}" alt="PLN NTB 2018"
                                            class="img-fluid" />
                                    </div>
                                </div>
                                <h4 class="font-weight-extra-normal text-2 mb-3 text-center">
                                    PLN NTB 2018
                                </h4>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </div>
@endsection
