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
            <div class="col-lg-9" style="min-height: 52.1vh;">
                <h2 class="font-weight-extra-normal text-5 mb-0">
                    <strong class="font-weight-extra-bold">Energy </strong>Meters
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
                                                <img src="{{ asset('img/Kwh Class 0.2s PLN UPK Kapuas 1.jpg') }}"
                                                    class="img-fluid border-radius-0" alt="">
                                            </div>
                                            <h4 class="font-weight-extra-normal text-2 mb-3 text-center">
                                                Kwh Class 0.2s PLN UPK Kapuas
                                            </h4>
                                        </div>
                                    </div>
                                    <div class="owl-item">
                                        <div>
                                            <div class="img-thumbnail border-0 border-radius-0 p-0 d-block">
                                                <img src="{{ asset('img/Kwh Class 0.2s PLN UPK Kapuas 2.jpg') }}"
                                                    class="img-fluid border-radius-0" alt="">
                                            </div>
                                            <h4 class="font-weight-extra-normal text-2 mb-3 text-center">
                                                Kwh Class 0.2s PLN UPK Kapuas
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
                </div>

            </div>

        </div>
    </div>
@endsection
