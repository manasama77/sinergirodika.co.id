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
                <h2 class="font-weight-extra-normal text-5 mb-0">
                    <strong class="font-weight-extra-bold">DC </strong>Power Supply
                </h2>

                <div class="row mb-1">
                    <div class="col-md-4 mb-1 mb-md-0 appear-animation animated fadeInLeftShorter appear-animation-visible"
                        data-appear-animation="fadeInLeftShorter" data-appear-animation-delay="300"
                        style="animation-delay: 300ms;">
                        <div class="owl-carousel owl-theme nav-inside nav-inside-edge nav-squared nav-with-transparency nav-dark owl-loaded owl-drag owl-carousel-init"
                            data-plugin-options="{'items': 1, 'margin': 10, 'loop': true, 'nav': true, 'dots': true, 'autoplay': true, 'autoplayTimeout': 5000, 'autoHeight': true}">

                            <div class="owl-stage-outer">
                                <div class="owl-stage">
                                    <div class="owl-item">
                                        <div>
                                            <div class="img-thumbnail border-0 border-radius-0 p-0 d-block">
                                                <img src="{{ asset('img/Rectifier Inverter and Battery PLN UP2D Riau 1.jpg') }}"
                                                    class="img-fluid border-radius-0" alt="">
                                            </div>
                                            <h4 class="font-weight-extra-normal text-2 mb-3 text-center">
                                                Rectifier Inverter and Battery PLN UP2D Riau
                                            </h4>
                                        </div>
                                    </div>
                                    <div class="owl-item">
                                        <div>
                                            <div class="img-thumbnail border-0 border-radius-0 p-0 d-block">
                                                <img src="{{ asset('img/Rectifier Inverter and Battery PLN UP2D Riau 2.jpg') }}"
                                                    class="img-fluid border-radius-0" alt="">
                                            </div>
                                            <h4 class="font-weight-extra-normal text-2 mb-3 text-center">
                                                Rectifier Inverter and Battery PLN UP2D Riau
                                            </h4>
                                        </div>
                                    </div>
                                    <div class="owl-item">
                                        <div>
                                            <div class="img-thumbnail border-0 border-radius-0 p-0 d-block">
                                                <img src="{{ asset('img/Rectifier and Battery PLN UP2B Jateng 1.jpg') }}"
                                                    class="img-fluid border-radius-0" alt="">
                                            </div>
                                            <h4 class="font-weight-extra-normal text-2 mb-3 text-center">
                                                Rectifier and Battery PLN UP2B Jateng
                                            </h4>
                                        </div>
                                    </div>
                                    <div class="owl-item">
                                        <div>
                                            <div class="img-thumbnail border-0 border-radius-0 p-0 d-block">
                                                <img src="{{ asset('img/Rectifier and Battery PLN UP2B Jateng 2.jpg') }}"
                                                    class="img-fluid border-radius-0" alt="">
                                            </div>
                                            <h4 class="font-weight-extra-normal text-2 mb-3 text-center">
                                                Rectifier and Battery PLN UP2B Jateng
                                            </h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="owl-nav">
                                <button type="button" role="presentation" class="owl-prev"></button>
                                <button type="button" role="presentation" class="owl-next disabled"></button>
                            </div>
                            <div class="owl-dots disabled"></div>
                        </div>
                    </div>

                    <div class="col-md-8">
                        <p class="text-2 mb-0 text-dark">
                            <strong>RECTIFIERS AND BATTERIES</strong>
                        </p>
                        <ol class="text-2 text-dark appear-animation animated fadeInUpShorter appear-animation-visible"
                            data-appear-animation="fadeInUpShorter" data-appear-animation-delay="800"
                            style="animation-delay: 800ms;">
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
                </div>

            </div>

        </div>
    </div>
@endsection
