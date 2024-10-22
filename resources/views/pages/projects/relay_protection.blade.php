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

                <h2 class="font-weight-extra-normal text-7 mb-3">
                    <strong class="font-weight-extra-bold">PROTECTION RELAYS</strong>
                </h2>

                <div class="d-flex justify-content-center">
                    <div>
                        <img src="{{ asset('img/Line Differential Relay - UP3B Kalbar.png') }}"
                            alt="Line Differential Relay - UP3B Kalbar" class="mb-3 img-fluid" style="max-height: 300px;" />
                    </div>
                </div>
                <h4 class="font-weight-extra-normal text-2 mb-3">
                    Line Differential Relay - UP3B Kalbar
                </h4>

                <ol>
                    <li>Installation 10 unit LCD relays MICOM P543 for 5 lines of 150 kV Transmission and integration to
                        existing SAS Location GI PARIT BARU, GI SENGGIRING, GI PLTU BENGKAYANG, GI SINGKAWANG
                        PT PLN UP3B Sistem Kalbar, Year : 2021-2022
                    </li>
                    <li>Supply and installation Over Current Relay Micom P143 PT GEO DIPA ENERGI Pengalengan, Year 2023</li>
                    <li>Supply Protection Relay MiCOM P127 Gardu Hubung PT PLN (Persero) UP3 Tanjungpinang, Year 2022</li>
                    <li>Installation 20 unit Relay Proteksi 20 kV MICOM P123 and P127 in 20 location, PT PLN UP2D Riau, Year
                        2021</li>
                    <li>Installation Reverse Power Protection Relay Easergy P5 5 unit User : PT PLN Batam , Year 2021</li>
                </ol>

            </div>

        </div>
    </div>
@endsection
