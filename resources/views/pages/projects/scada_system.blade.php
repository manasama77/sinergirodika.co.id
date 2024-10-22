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
                    <strong class="font-weight-extra-bold">Scada System</strong>
                </h2>

                <div class="row">
                    <div class="col-sm-12 col-md-7">
                        <ol>
                            <li>Installation Gateway and Scada Integration</li>
                            <div class="table-responsive">
                                <table class="table table-sm">
                                    <tbody>
                                        <tr>
                                            <td>User</td>
                                            <td>PT PLN UPK Timor NTT, year 2023</td>
                                        </tr>
                                        <tr>
                                            <td>Project</td>
                                            <td>PENGADAAN SETUP SCADA SYSTEM PLTU BOLOK
                                                PT PLN(PERSERO) UNIT PELAKSANA PEMBANGKITAN TIMOR</td>
                                        </tr>
                                        <tr>
                                            <td>Installation</td>
                                            <td>SCADA Gateway, Dual Master : Unlimited Gateway, Protocol Modbus to IEC 104
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
                                            <td>User</td>
                                            <td>PT PLN (UP2D Riau, year 2023)</td>
                                        </tr>
                                        <tr>
                                            <td>Project</td>
                                            <td>Pengadaan Perbaikan Scada GH Perawang, GH Bintan Center dan GI Garuda Sakti
                                                lokasi PT PLN (Persero) UP2D Riau</td>
                                        </tr>
                                        <tr>
                                            <td>Installation</td>
                                            <td>Remote IO Extender Digital Input output (7 DI 8DO), Extender Digital Output
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
                                            <td>User</td>
                                            <td>PT PLN (Persero) UP2D Lampung, year 2019</td>
                                        </tr>
                                        <tr>
                                            <td>Project</td>
                                            <td>PENGADAAN DAN INTEGRASI MODEM SCADA KEYPOINT TAHAP I 2019, PT PLN
                                                (PERSERO)UNIT PELAKSANA PENGATUR DISTRIBUSI LAMPUNG</td>
                                        </tr>
                                        <tr>
                                            <td>Installation</td>
                                            <td>47 location GSM Modem Router and Integration to existing Scada</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>

                            <li>Installation Keypoint Modem and Scada integration</li>
                            <div class="table-responsive">
                                <table class="table table-sm">
                                    <tbody>
                                        <tr>
                                            <td>User</td>
                                            <td>PT PLN (Persero) UP2D Sulselrabar Makassar, Year 2020</td>
                                        </tr>
                                        <tr>
                                            <td>Project</td>
                                            <td>PENGADAAN MODEM GPRS 39 TITIK KEYPOINT SCADA UP2D MAKASSAR</td>
                                        </tr>
                                        <tr>
                                            <td>Installation</td>
                                            <td>39 location GSM Modem Router and Integration to existing Scada</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>

                            <li>Installation of Multichannel Meter for Distribustion Transformer</li>
                            <div class="table-responsive">
                                <table class="table table-sm">
                                    <tbody>
                                        <tr>
                                            <td>User</td>
                                            <td>PT PLN (Persero) UID Bangka Belitung, Year 2023</td>
                                        </tr>
                                        <tr>
                                            <td>Project</td>
                                            <td>Pengadaan kWhmeter Multichannel untuk perhitungan loses Trafo dan PHBTR</td>
                                        </tr>
                                        <tr>
                                            <td>Installation</td>
                                            <td>Multichannel meter with Online application with Clouds IOT</td>
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
                                        <img src="{{ asset('img/Scada UPK Timor NTT.png') }}" alt="Scada UPK Timor NTT"
                                            class="img-fluid" style="max-height: 300px;" />
                                    </div>
                                </div>
                                <h4 class="font-weight-extra-normal text-2 mb-3 text-center">
                                    Scada UPK Timor NTT
                                </h4>
                            </div>
                            <div class="col-sm-12 mb-3">
                                <div class="d-flex justify-content-center">
                                    <div>
                                        <img src="{{ asset('img/Scada upgrade PLN UP2D Riau.png') }}"
                                            alt="Scada upgrade PLN UP2D Riau" class="img-fluid"
                                            style="max-height: 300px;" />
                                    </div>
                                </div>
                                <h4 class="font-weight-extra-normal text-2 mb-3 text-center">
                                    Scada upgrade PLN UP2D Riau
                                </h4>
                            </div>
                            <div class="col-sm-12 mb-3">
                                <div class="d-flex justify-content-center">
                                    <div>
                                        <img src="{{ asset('img/Modem key point UP2D Makassar.png') }}"
                                            alt="Modem key point UP2D Makassar" class="img-fluid"
                                            style="max-height: 300px;" />
                                    </div>
                                </div>
                                <h4 class="font-weight-extra-normal text-2 mb-3 text-center">
                                    Modem key point UP2D Makassar
                                </h4>
                            </div>
                            <div class="col-sm-12 mb-3">
                                <div class="d-flex justify-content-center">
                                    <div>
                                        <img src="{{ asset('img/Transformer Online monitoring PLN Bangka Belitung.png') }}"
                                            alt="Transformer Online monitoring PLN Bangka Belitung" class="img-fluid"
                                            style="max-height: 300px;" />
                                    </div>
                                </div>
                                <h4 class="font-weight-extra-normal text-2 mb-3 text-center">
                                    Transformer Online monitoring PLN Bangka Belitung
                                </h4>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </div>
@endsection
