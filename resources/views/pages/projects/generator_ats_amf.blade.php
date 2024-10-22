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
                    <strong class="font-weight-extra-bold">Generator ATS Backup Power Supply</strong>
                </h2>

                <div class="row">
                    <div class="col-sm-12 col-md-7">
                        <ol>
                            <li>Backup Power Supply for Substation</li>
                            <div class="table-responsive">
                                <table class="table table-sm">
                                    <tbody>
                                        <tr>
                                            <td>User</td>
                                            <td>PT PLN UPK Tambora NTB, year 2023-2024</td>
                                        </tr>
                                        <tr>
                                            <td>Project</td>
                                            <td>PENGADAAN GENSET DAN PEMBANGUNAN
                                                RUMAH GENSET TAMBORA</td>
                                        </tr>
                                        <tr>
                                            <td>Installation</td>
                                            <td>11 Generator Cummins 100 kVA and ATS AMF and Cummins 100 kVA in 11
                                                substation in PLN NTB 150 kV System</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>

                            <li>INSTALLATION BACKUP POWER SUPPLY FOR SUBSTATION PT PLN UP3B KALIMANTAN BARAT</li>
                            <div class="table-responsive">
                                <table class="table table-sm">
                                    <tbody>
                                        <tr>
                                            <td>User</td>
                                            <td>PT PLN UP3B Kalimantan Barat, Year 2022</td>
                                        </tr>
                                        <tr>
                                            <td>Project</td>
                                            <td>PENGADAAN DAN PEMASANGAN BACKUP SUPPLY AC GARDU INDUK UP3B KALBAR LOKASI GI
                                                TERSEBAR PT PLN (Persero) UP3B SISTEM KALBAR</td>
                                        </tr>
                                        <tr>
                                            <td>Installation</td>
                                            <td>5 Generator Cummins 100 kVA and ATS AMF and supporting building in 11
                                                substation in PLN NTB 150 kV System</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>

                            <li>SUPPLY GENERATOR SET</li>
                            <div class="table-responsive">
                                <table class="table table-sm">
                                    <tbody>
                                        <tr>
                                            <td>User</td>
                                            <td>PT PLN UP3 Sumbawa, year 2023</td>
                                        </tr>
                                        <tr>
                                            <td>Project</td>
                                            <td>PENGADAAN GENSET UNTUK MENDUKUNG PERSIAPAN PEMILU SERENTAK 2024</td>
                                        </tr>
                                        <tr>
                                            <td>Installation</td>
                                            <td>5 unit Genset Mitzumi 20 kVA</td>
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
                                        <img src="{{ asset('img/Genset AMF PLN Tambora NTB.png') }}"
                                            alt="Genset AMF PLN Tambora NTB" class="img-fluid" style="max-height: 300px;" />
                                    </div>
                                </div>
                                <h4 class="font-weight-extra-normal text-2 mb-3 text-center">
                                    Genset AMF PLN Tambora NTB
                                </h4>
                            </div>
                            <div class="col-sm-12 mb-3">
                                <div class="d-flex justify-content-center">
                                    <div>
                                        <img src="{{ asset('img/Genset AMF PLN UP3B Kalbar.png') }}"
                                            alt="Genset AMF PLN UP3B Kalbar" class="img-fluid" style="max-height: 300px;" />
                                    </div>
                                </div>
                                <h4 class="font-weight-extra-normal text-2 mb-3 text-center">
                                    Genset AMF PLN UP3B Kalbar
                                </h4>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </div>
@endsection
