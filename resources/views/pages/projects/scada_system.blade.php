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
                    <strong class="font-weight-extra-bold">Scada </strong>System
                </h2>

                <div class="row mb-1">
                    <div class="col-md-4 mb-1 mb-md-0 appear-animation animated fadeInLeftShorter appear-animation-visible"
                        data-appear-animation="fadeInLeftShorter" data-appear-animation-delay="300"
                        style="animation-delay: 300ms;">
                        <div class="owl-carousel owl-theme nav-inside nav-inside-edge nav-squared nav-with-transparency nav-dark owl-loaded owl-drag owl-carousel-init"
                            data-plugin-options="{'items': 1, 'margin': 0, 'loop': true, 'nav': true, 'dots': true, 'autoplay': true, 'autoplayTimeout': 5000, 'autoHeight': true}">

                            <div class="owl-stage-outer">
                                <div class="owl-stage">
                                    <div class="owl-item">
                                        <div>
                                            <div class="img-thumbnail border-0 border-radius-0 p-0 d-block">
                                                <img src="{{ asset('img/Scada UPK Timor NTT 1.png') }}"
                                                    class="img-fluid border-radius-0" alt="">
                                            </div>
                                            <h4 class="font-weight-extra-normal text-2 mb-3 text-center">
                                                Scada UPK Timor NTT
                                            </h4>
                                        </div>
                                    </div>
                                    <div class="owl-item">
                                        <div>
                                            <div class="img-thumbnail border-0 border-radius-0 p-0 d-block">
                                                <img src="{{ asset('img/Scada UPK Timor NTT 2.png') }}"
                                                    class="img-fluid border-radius-0" alt="">
                                            </div>
                                            <h4 class="font-weight-extra-normal text-2 mb-3 text-center">
                                                Scada UPK Timor NTT
                                            </h4>
                                        </div>
                                    </div>
                                    <div class="owl-item">
                                        <div>
                                            <div class="img-thumbnail border-0 border-radius-0 p-0 d-block">
                                                <img src="{{ asset('img/Scada upgrade PLN UP2D Riau 1.png') }}"
                                                    class="img-fluid border-radius-0" alt="">
                                            </div>
                                            <h4 class="font-weight-extra-normal text-2 mb-3 text-center">
                                                Scada upgrade PLN UP2D Riau
                                            </h4>
                                        </div>
                                    </div>
                                    <div class="owl-item">
                                        <div>
                                            <div class="img-thumbnail border-0 border-radius-0 p-0 d-block">
                                                <img src="{{ asset('img/Scada upgrade PLN UP2D Riau 2.png') }}"
                                                    class="img-fluid border-radius-0" alt="">
                                            </div>
                                            <h4 class="font-weight-extra-normal text-2 mb-3 text-center">
                                                Scada upgrade PLN UP2D Riau
                                            </h4>
                                        </div>
                                    </div>
                                    <div class="owl-item">
                                        <div>
                                            <div class="img-thumbnail border-0 border-radius-0 p-0 d-block">
                                                <img src="{{ asset('img/Modem key point UP2D Makassar 1.png') }}"
                                                    class="img-fluid border-radius-0" alt="">
                                            </div>
                                            <h4 class="font-weight-extra-normal text-2 mb-3 text-center">
                                                Modem key point UP2D Makassar
                                            </h4>
                                        </div>
                                    </div>
                                    <div class="owl-item">
                                        <div>
                                            <div class="img-thumbnail border-0 border-radius-0 p-0 d-block">
                                                <img src="{{ asset('img/Modem key point UP2D Makassar 2.png') }}"
                                                    class="img-fluid border-radius-0" alt="">
                                            </div>
                                            <h4 class="font-weight-extra-normal text-2 mb-3 text-center">
                                                Modem key point UP2D Makassar
                                            </h4>
                                        </div>
                                    </div>
                                    <div class="owl-item">
                                        <div>
                                            <div class="img-thumbnail border-0 border-radius-0 p-0 d-block">
                                                <img src="{{ asset('img/Transformer Online monitoring PLN Bangka Belitung 1.png') }}"
                                                    class="img-fluid border-radius-0" alt="">
                                            </div>
                                            <h4 class="font-weight-extra-normal text-2 mb-3 text-center">
                                                Transformer Online monitoring PLN Bangka Belitung
                                            </h4>
                                        </div>
                                    </div>
                                    <div class="owl-item">
                                        <div>
                                            <div class="img-thumbnail border-0 border-radius-0 p-0 d-block">
                                                <img src="{{ asset('img/Transformer Online monitoring PLN Bangka Belitung 2.png') }}"
                                                    class="img-fluid border-radius-0" alt="">
                                            </div>
                                            <h4 class="font-weight-extra-normal text-2 mb-3 text-center">
                                                Transformer Online monitoring PLN Bangka Belitung
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
                            <li>Installation Gateway and Scada Integration</li>
                            <div class="table-responsive">
                                <table class="table table-sm">
                                    <tbody>
                                        <tr>
                                            <td class="text-dark">User:</td>
                                            <td class="text-dark">PT PLN UPK Timor NTT, year 2023</td>
                                        </tr>
                                        <tr>
                                            <td class="text-dark">Project:</td>
                                            <td class="text-dark">PENGADAAN SETUP SCADA SYSTEM PLTU BOLOK
                                                PT PLN(PERSERO) UNIT PELAKSANA PEMBANGKITAN TIMOR</td>
                                        </tr>
                                        <tr>
                                            <td class="text-dark">Installation:</td>
                                            <td class="text-dark">SCADA Gateway, Dual Master : Unlimited Gateway, Protocol
                                                Modbus to IEC 104
                                                and Setting & Parameterization Modbus TCP/IP to IEC-104, Gateway
                                                Configuration & Data Mapping on existing Scada Master</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>

                            <li>Upgrade Scada System</li>
                            <div class="table-responsive">
                                <table class="table table-sm">
                                    <tbody>
                                        <tr>
                                            <td class="text-dark">User:</td>
                                            <td class="text-dark">PT PLN (UP2D Riau, year 2023)</td>
                                        </tr>
                                        <tr>
                                            <td class="text-dark">Project:</td>
                                            <td class="text-dark">Pengadaan Perbaikan Scada GH Perawang, GH Bintan Center
                                                dan GI Garuda Sakti
                                                lokasi PT PLN (Persero) UP2D Riau</td>
                                        </tr>
                                        <tr>
                                            <td class="text-dark">Installation:</td>
                                            <td class="text-dark">Remote IO Extender Digital Input output (7 DI 8DO),
                                                Extender Digital Output
                                                (8 DO) and supporting accessories</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>

                            <li>Installation Keypoint Modem and Scada integration</li>
                            <div class="table-responsive">
                                <table class="table table-sm">
                                    <tbody>
                                        <tr>
                                            <td class="text-dark">User:</td>
                                            <td class="text-dark">PT PLN (Persero) UP2D Lampung, year 2019</td>
                                        </tr>
                                        <tr>
                                            <td class="text-dark">Project:</td>
                                            <td class="text-dark">PENGADAAN DAN INTEGRASI MODEM SCADA KEYPOINT TAHAP I 2019,
                                                PT PLN
                                                (PERSERO)UNIT PELAKSANA PENGATUR DISTRIBUSI LAMPUNG</td>
                                        </tr>
                                        <tr>
                                            <td class="text-dark">Installation:</td>
                                            <td class="text-dark">47 location GSM Modem Router and Integration to existing
                                                Scada</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>

                            <li>Installation Keypoint Modem and Scada integration</li>
                            <div class="table-responsive">
                                <table class="table table-sm">
                                    <tbody>
                                        <tr>
                                            <td class="text-dark">User:</td>
                                            <td class="text-dark">PT PLN (Persero) UP2D Sulselrabar Makassar, Year 2020
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-dark">Project:</td>
                                            <td class="text-dark">PENGADAAN MODEM GPRS 39 TITIK KEYPOINT SCADA UP2D
                                                MAKASSAR</td>
                                        </tr>
                                        <tr>
                                            <td class="text-dark">Installation:</td>
                                            <td class="text-dark">39 location GSM Modem Router and Integration to existing
                                                Scada</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>

                            <li>Installation of Multichannel Meter for Distribustion Transformer</li>
                            <div class="table-responsive">
                                <table class="table table-sm">
                                    <tbody>
                                        <tr>
                                            <td class="text-dark">User:</td>
                                            <td class="text-dark">PT PLN (Persero) UID Bangka Belitung, Year 2023</td>
                                        </tr>
                                        <tr>
                                            <td class="text-dark">Project:</td>
                                            <td class="text-dark">Pengadaan kWhmeter Multichannel untuk perhitungan loses
                                                Trafo dan PHBTR</td>
                                        </tr>
                                        <tr>
                                            <td class="text-dark">Installation:</td>
                                            <td class="text-dark">Multichannel meter with Online application with Clouds
                                                IOT</td>
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
