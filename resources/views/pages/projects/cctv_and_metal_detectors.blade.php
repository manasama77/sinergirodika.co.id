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
                    <strong class="font-weight-extra-bold">CCTV and Metal Detectors</strong>
                </h2>

                <div class="row">
                    <div class="col-sm-12 col-md-7">
                        <ol>
                            <li>Xray Scanner and Walkthrough Metal Detector</li>
                            <div class="table-responsive">
                                <table class="table table-sm">
                                    <tbody>
                                        <tr>
                                            <td>User</td>
                                            <td>PT Bayer Indonesia, Year 2023</td>
                                        </tr>
                                        <tr>
                                            <td>Projects</td>
                                            <td>Supply and installation 2 units X Ray Scanner and 2 WTMD</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>

                            <li>CCTV and Access Control</li>
                            <div class="table-responsive">
                                <table class="table table-sm">
                                    <tbody>
                                        <tr>
                                            <td>User</td>
                                            <td>PT Adaro Balikpapan, Year 2021</td>
                                        </tr>
                                        <tr>
                                            <td>Projects</td>
                                            <td>Supply and installation CCTV and Access Control for ADARO office and sites
                                                in Balikpapan</td>
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
                                        <img src="{{ asset('img/Xray Scanner and WTMD PT Bayer Indonesia.png') }}"
                                            alt="Xray Scanner and WTMD PT Bayer Indonesia" class="img-fluid"
                                            style="max-height: 300px;" />
                                    </div>
                                </div>
                                <h4 class="font-weight-extra-normal text-2 mb-3 text-center">
                                    Xray Scanner and WTMD PT Bayer Indonesia
                                </h4>
                            </div>
                            <div class="col-sm-12 mb-3">
                                <div class="d-flex justify-content-center">
                                    <div>
                                        <img src="{{ asset('img/CCTV and Access Control PT Adaro Balikpapan.png') }}"
                                            alt="CCTV and Access Control PT Adaro Balikpapan" class="img-fluid"
                                            style="max-height: 300px;" />
                                    </div>
                                </div>
                                <h4 class="font-weight-extra-normal text-2 mb-3 text-center">
                                    CCTV and Access Control PT Adaro Balikpapan
                                </h4>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </div>
@endsection
