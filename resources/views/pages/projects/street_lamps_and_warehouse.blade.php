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
            <div class="col-lg-9" style="min-height: 52.1vh;">
                <h2 class="font-weight-extra-normal text-5 mb-0">
                    <strong class="font-weight-extra-bold">Street </strong>Lamps and Warehouse
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
                                                <img src="{{ asset('img/PJU dan Solar Cell Pemda 1.jpg') }}"
                                                    class="img-fluid border-radius-0" alt="">
                                            </div>
                                            <h4 class="font-weight-extra-normal text-2 mb-3 text-center">
                                                PJU dan Solar Cell Pemda
                                            </h4>
                                        </div>
                                    </div>
                                    <div class="owl-item">
                                        <div>
                                            <div class="img-thumbnail border-0 border-radius-0 p-0 d-block">
                                                <img src="{{ asset('img/PJU dan Solar Cell Pemda 2.jpg') }}"
                                                    class="img-fluid border-radius-0" alt="">
                                            </div>
                                            <h4 class="font-weight-extra-normal text-2 mb-3 text-center">
                                                PJU dan Solar Cell Pemda
                                            </h4>
                                        </div>
                                    </div>
                                    <div class="owl-item">
                                        <div>
                                            <div class="img-thumbnail border-0 border-radius-0 p-0 d-block">
                                                <img src="{{ asset('img/Renovation of Warehouse Oriflame Bogor.jpg') }}"
                                                    class="img-fluid border-radius-0" alt="">
                                            </div>
                                            <h4 class="font-weight-extra-normal text-2 mb-3 text-center">
                                                Renovation of Warehouse Oriflame Bogor
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
                        <ol class="text-2 text-dark appear-animation animated fadeInUpShorter appear-animation-visible"
                            data-appear-animation="fadeInUpShorter" data-appear-animation-delay="800"
                            style="animation-delay: 800ms;">
                            <li>Installation Lampu Penerangan jalan Umum (PJU)</li>
                            <div class="table-responsive">
                                <table class="table table-sm">
                                    <tbody>
                                        <tr>
                                            <td class="text-dark">User:</td>
                                            <td class="text-dark">Pemda Ogan Ilir Sumatera Selatan, year 2022</td>
                                        </tr>
                                        <tr>
                                            <td class="text-dark">Installation:</td>
                                            <td class="text-dark">electrical and civil works PJU</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>

                            <li>Renovation of Oriflame Warehouse - Bogor</li>
                            <div class="table-responsive">
                                <table class="table table-sm">
                                    <tbody>
                                        <tr>
                                            <td class="text-dark">User:</td>
                                            <td class="text-dark">PT Orindo alam ayu (oriflame), year 2016</td>
                                        </tr>
                                        <tr>
                                            <td class="text-dark">Installation:</td>
                                            <td class="text-dark">Electrical, civil and Chiller for Warehouse</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </ol>
                    </div>
                </div>

            </div>

        </div>
    </div>
@endsection
