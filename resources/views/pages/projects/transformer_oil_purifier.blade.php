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
                    <strong class="font-weight-extra-bold">Transformer </strong>Oil Purifier
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
                                                <img src="{{ asset('img/PLN Maluku 2019 1.png') }}"
                                                    class="img-fluid border-radius-0" alt="">
                                            </div>
                                            <h4 class="font-weight-extra-normal text-2 mb-3 text-center">
                                                PLN Maluku 2019
                                            </h4>
                                        </div>
                                    </div>
                                    <div class="owl-item">
                                        <div>
                                            <div class="img-thumbnail border-0 border-radius-0 p-0 d-block">
                                                <img src="{{ asset('img/PLN Maluku 2019 2.jpg') }}"
                                                    class="img-fluid border-radius-0" alt="">
                                            </div>
                                            <h4 class="font-weight-extra-normal text-2 mb-3 text-center">
                                                PLN Maluku 2019
                                            </h4>
                                        </div>
                                    </div>
                                    <div class="owl-item">
                                        <div>
                                            <div class="img-thumbnail border-0 border-radius-0 p-0 d-block">
                                                <img src="{{ asset('img/PLN NTB 2018.jpg') }}"
                                                    class="img-fluid border-radius-0" alt="">
                                            </div>
                                            <h4 class="font-weight-extra-normal text-2 mb-3 text-center">
                                                PLN NTB 2018
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
                            <li>Transformer Oil Purifier for Substation 2000 LH and 4000 LH</li>
                            <div class="table-responsive">
                                <table class="table table-sm">
                                    <tbody>
                                        <tr>
                                            <td class="text-dark">User:</td>
                                            <td class="text-dark">PT PLN (Persero) UP2K Maluku, year 2019</td>
                                        </tr>
                                        <tr>
                                            <td class="text-dark">Project:</td>
                                            <td class="text-dark">Supply and commissioning Mesin Treatment Oli Trafo (Oil
                                                Purifikasi)</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>

                            <li>Transformer Oil Purifier 4000 LH</li>
                            <div class="table-responsive">
                                <table class="table table-sm">
                                    <tbody>
                                        <tr>
                                            <td class="text-dark">User:</td>
                                            <td class="text-dark">PT PLN (Persero) UPDK Tambora NTB, year 2018</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>

                            <li>Transformer Oil Purifier 4000 LH</li>
                            <div class="table-responsive">
                                <table class="table table-sm">
                                    <tbody>
                                        <tr>
                                            <td class="text-dark">User:</td>
                                            <td class="text-dark">PT PLN (Persero) APDP Sistem Kalbar, year 2013</td>
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
