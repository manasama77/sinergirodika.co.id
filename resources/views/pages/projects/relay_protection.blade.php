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
                @include('pages.projects.aside')
            </div>
            <div class="col-lg-9">
                <h2 class="font-weight-extra-normal text-5 mb-0">
                    <strong class="font-weight-extra-bold">Protection </strong>Relays
                </h2>

                <div class="row pb-1 mb-1">
                    <div class="col-md-4 mb-3 mb-md-0 appear-animation animated fadeInLeftShorter appear-animation-visible"
                        data-appear-animation="fadeInLeftShorter" data-appear-animation-delay="300"
                        style="animation-delay: 300ms;">
                        <div class="owl-carousel owl-theme nav-inside nav-inside-edge nav-squared nav-with-transparency nav-dark owl-loaded owl-drag owl-carousel-init"
                            data-plugin-options="{'items': 1, 'margin': 10, 'loop': true, 'nav': true, 'dots': true, 'autoplay': true, 'autoplayTimeout': 5000}">

                            <div class="owl-stage-outer">
                                <div class="owl-stage">
                                    <div class="owl-item">
                                        <div>
                                            <div class="img-thumbnail border-0 border-radius-0 p-0 d-block">
                                                <img src="{{ asset('img/Line Differential Relay – UP3B Kalbar 1.jpg') }}"
                                                    class="img-fluid border-radius-0" alt="">
                                            </div>
                                            <h4 class="font-weight-extra-normal text-2 mb-3 text-center">
                                                Line Differential Relay - UP3B Kalbar
                                            </h4>
                                        </div>
                                    </div>
                                    <div class="owl-item">
                                        <div>
                                            <div class="img-thumbnail border-0 border-radius-0 p-0 d-block">
                                                <img src="{{ asset('img/Line Differential Relay – UP3B Kalbar 2.jpg') }}"
                                                    class="img-fluid border-radius-0" alt="">
                                            </div>
                                            <h4 class="font-weight-extra-normal text-2 mb-3 text-center">
                                                Line Differential Relay - UP3B Kalbar
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
                            <li>Installation 10 unit LCD relays MICOM P543 for 5 lines of 150 kV Transmission and
                                integration to
                                existing SAS Location GI PARIT BARU, GI SENGGIRING, GI PLTU BENGKAYANG, GI SINGKAWANG
                                PT PLN UP3B Sistem Kalbar, Year : 2021-2022
                            </li>
                            <li>Supply and installation Over Current Relay Micom P143 PT GEO DIPA ENERGI Pengalengan, Year
                                2023</li>
                            <li>Supply Protection Relay MiCOM P127 Gardu Hubung PT PLN (Persero) UP3 Tanjungpinang, Year
                                2022</li>
                            <li>Installation 20 unit Relay Proteksi 20 kV MICOM P123 and P127 in 20 location, PT PLN UP2D
                                Riau, Year
                                2021</li>
                            <li>Installation Reverse Power Protection Relay Easergy P5 5 unit User : PT PLN Batam , Year
                                2021</li>
                        </ol>
                    </div>
                </div>

            </div>

        </div>
    </div>
@endsection
