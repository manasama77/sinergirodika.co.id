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
                <h2 class="font-weight-extra-normal text-5 mb-0">
                    <strong class="font-weight-extra-bold">Generator </strong>ATS Backup Power Supply
                </h2>

                <div class="row mb-1">
                    <div class="col-md-5 mb-1 mb-md-0 appear-animation animated fadeInLeftShorter appear-animation-visible"
                        data-appear-animation="fadeInLeftShorter" data-appear-animation-delay="300"
                        style="animation-delay: 300ms;">
                        <div class="owl-carousel owl-theme nav-inside nav-inside-edge nav-squared nav-with-transparency nav-dark owl-loaded owl-drag owl-carousel-init"
                            data-plugin-options="{'items': 1, 'margin': 10, 'loop': true, 'nav': true, 'dots': true, 'autoplay': true, 'autoplayTimeout': 5000, 'autoHeight': true}">

                            <div class="owl-stage-outer">
                                <div class="owl-stage">
                                    <div class="owl-item">
                                        <div>
                                            <div class="img-thumbnail border-0 border-radius-0 p-0 d-block">
                                                <img src="{{ asset('img/Genset AMF PLN Tambora NTB 1.jpg') }}"
                                                    class="img-fluid border-radius-0" alt="">
                                            </div>
                                            <h4 class="font-weight-extra-normal text-2 mb-3 text-center">
                                                Genset AMF PLN Tambora NTB
                                            </h4>
                                        </div>
                                    </div>
                                    <div class="owl-item">
                                        <div>
                                            <div class="img-thumbnail border-0 border-radius-0 p-0 d-block">
                                                <img src="{{ asset('img/Genset AMF PLN Tambora NTB 2.jpg') }}"
                                                    class="img-fluid border-radius-0" alt="">
                                            </div>
                                            <h4 class="font-weight-extra-normal text-2 mb-3 text-center">
                                                Genset AMF PLN Tambora NTB
                                            </h4>
                                        </div>
                                    </div>
                                    <div class="owl-item">
                                        <div>
                                            <div class="img-thumbnail border-0 border-radius-0 p-0 d-block">
                                                <img src="{{ asset('img/Genset AMF PLN UP3B Kalbar 1.png') }}"
                                                    class="img-fluid border-radius-0" alt="">
                                            </div>
                                            <h4 class="font-weight-extra-normal text-2 mb-3 text-center">
                                                Genset AMF PLN UP3B Kalbar
                                            </h4>
                                        </div>
                                    </div>
                                    <div class="owl-item">
                                        <div>
                                            <div class="img-thumbnail border-0 border-radius-0 p-0 d-block">
                                                <img src="{{ asset('img/Genset AMF PLN UP3B Kalbar 2.png') }}"
                                                    class="img-fluid border-radius-0" alt="">
                                            </div>
                                            <h4 class="font-weight-extra-normal text-2 mb-3 text-center">
                                                Genset AMF PLN UP3B Kalbar
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

                    <div class="col-md-7">
                        <ol class="text-2 text-dark appear-animation animated fadeInUpShorter appear-animation-visible"
                            data-appear-animation="fadeInUpShorter" data-appear-animation-delay="800"
                            style="animation-delay: 800ms;">
                            <li>Backup Power Supply for Substation</li>
                            <div class="table-responsive">
                                <table class="table table-sm">
                                    <tbody>
                                        <tr>
                                            <td class="text-dark">User:</td>
                                            <td class="text-dark">PT PLN UPK Tambora NTB, year 2023-2024</td>
                                        </tr>
                                        <tr>
                                            <td class="text-dark">Project:</td>
                                            <td class="text-dark">Pengadaan Genset Dan Pembangunan
                                                Rumah Genset Tambora</td>
                                        </tr>
                                        <tr>
                                            <td class="text-dark">Installation:</td>
                                            <td class="text-dark">11 Generator Cummins 100 kVA and ATS AMF and Cummins 100
                                                kVA in 11
                                                substation in PLN NTB 150 kV System</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>

                            <li>Installation Backup Power Supply For Substation PT PLN UP3B Kalimantan Barat</li>
                            <div class="table-responsive">
                                <table class="table table-sm">
                                    <tbody>
                                        <tr>
                                            <td class="text-dark">User:</td>
                                            <td class="text-dark">PT PLN UP3B Kalimantan Barat, Year 2022</td>
                                        </tr>
                                        <tr>
                                            <td class="text-dark">Project:</td>
                                            <td class="text-dark">Pengadaan Dan Pemasangan Backup Supply AC Gardu Induk UP3B
                                                Kalbar Lokasi Di
                                                Tersebar PT PLN (Persero) UP3B Sistem Kalbar</td>
                                        </tr>
                                        <tr>
                                            <td class="text-dark">Installation:</td>
                                            <td class="text-dark">5 Generator Cummins 100 kVA and ATS AMF and supporting
                                                building in 11
                                                substation in PLN NTB 150 kV System</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>

                            <li>Supply Generator Set</li>
                            <div class="table-responsive">
                                <table class="table table-sm">
                                    <tbody>
                                        <tr>
                                            <td class="text-dark">User:</td>
                                            <td class="text-dark">PT PLN UP3 Sumbawa, year 2023</td>
                                        </tr>
                                        <tr>
                                            <td class="text-dark">Project:</td>
                                            <td class="text-dark">Pengadaan Genset Untuk Mendukung Persiapan Pemilu Serentak
                                                2024</td>
                                        </tr>
                                        <tr>
                                            <td class="text-dark">Installation:</td>
                                            <td class="text-dark">5 unit Genset Mitzumi 20 kVA</td>
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
