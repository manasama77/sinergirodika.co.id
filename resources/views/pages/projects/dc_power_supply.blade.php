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
                    <strong class="font-weight-extra-bold">DC power Supply</strong>
                </h2>

                <div class="row">
                    <div class="col-sm-12 col-md-7">
                        <h3 class="font-weight-extra-normal text-5 mb-3">
                            <strong class="font-weight-extra-bold">RECTIFIERS AND BATTERIES</strong>
                        </h3>
                        <ol class="text-2">
                            <li>Installation 20 Set Rectifier 48 VDC, Inverter 220 VAC and
                                Battery Enermild in 20 GH, PT PLN UP2D RIAU, Year : 2023
                            </li>
                            <li>Replacement Rectifier 48 VDC GI Mangkunegaran dan
                                GI Kebasem, PT. PLN (Persero) UP2B Jateng & DIY, Year 2023</li>
                            <li>Installation of Rectifier 80 A GITET Pedan Battery and UPS 2000VA
                                PT. PLN (Persero) UP2B Jateng & DIY, Year 2023</li>
                            <li>Supply and installation Rectifier 48 VDC PT PLN (Persero) UP2B Sistem Minahasa, Year 2023
                            </li>
                            <li>Supply Battery LiFePO4 for Keypoint LBS PT PLN (Persero) UP2D Makassar Year 2023</li>
                            <li>Supply Battery LiFEPO4 for Keypoint PT PLN (Persero) UP2D
                                Lampung, Year 2023</li>

                        </ol>
                    </div>
                    <div class="col-sm-12 col-md-5">
                        <div class="row">
                            <div class="col-sm-12 mb-3">
                                <div class="d-flex justify-content-center">
                                    <div>
                                        <img src="{{ asset('img/Rectifier Inverter and Battery PLN UP2D Riau.png') }}"
                                            alt="Rectifier Inverter and Battery PLN UP2D Riau" class="img-fluid"
                                            style="max-height: 300px;" />
                                    </div>
                                </div>
                                <h4 class="font-weight-extra-normal text-2 mb-3 text-center">
                                    Rectifier Inverter and Battery PLN UP2D Riau
                                </h4>
                            </div>
                            <div class="col-sm-12 mb-3">
                                <div class="d-flex justify-content-center">
                                    <div>
                                        <img src="{{ asset('img/Rectifier and Battery PLN UP2B Jateng.png') }}"
                                            alt="Rectifier and Battery PLN UP2B Jateng" class="img-fluid"
                                            style="max-height: 300px;" />
                                    </div>
                                </div>
                                <h4 class="font-weight-extra-normal text-2 mb-3 text-center">
                                    Rectifier and Battery PLN UP2B Jateng
                                </h4>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </div>
@endsection
