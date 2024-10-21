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
                @include('pages.products.aside')
            </div>
            <div class="col-lg-9">

                <h2 class="font-weight-extra-normal text-7 mb-3">
                    <strong class="font-weight-extra-bold">Water Meter (Dn.15 - Dn.25)</strong>
                </h2>

                <div class="row">
                    <div class="col-sm-12 col-md-4 mb-1">
                        <div class="d-flex justify-content-center">
                            <img src="{{ asset('img/Water Meter (Dn.15 - Dn.25).png') }}" alt="Water Meter (Dn.15 - Dn.25)"
                                class="img-fluid" />
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-8 mb-1">
                        <p>
                            The Mercury®LoRa series LXSGF model is IMPELLER (turbine) water meter with build-in valve, dry
                            type register for residential application with sizes from Dn15 to Dn25. LXSGF model consist of
                            mechanical water meter, electric ball valve, intelligent unit (IU), with LoRaWAN wireless
                            technique and bult-in lithium battery
                        </p>
                    </div>
                </div>

                <div class="table-responsive">
                    <table class="table table-borderless table-striped table-sm">
                        <tbody>
                            <tr>
                                <td class="font-weight-bold">Working voltage</td>
                                <td>3.6V</td>
                            </tr>
                            <tr>
                                <td class="font-weight-bold">Data collecting way</td>
                                <td>Dual Magnetic Sensor</td>
                            </tr>
                            <tr>
                                <td class="font-weight-bold">Communication mode</td>
                                <td>LoRaWAN</td>
                            </tr>
                            <tr>
                                <td class="font-weight-bold">Working frequency</td>
                                <td>
                                    916 --- 919MHz (25mW EIRP with duty cycle of
                                    <= 1% frequency hopping or LBT)<br />
                                    919 --- 923MHz (500mV EIRP)
                                </td>
                            </tr>
                            <tr>
                                <td class="font-weight-bold">Channels</td>
                                <td>8 settable channels with bandwidth of 125kHz</td>
                            </tr>
                            <tr>
                                <td class="font-weight-bold">TX power</td>
                                <td>14dBm</td>
                            </tr>
                            <tr>
                                <td class="font-weight-bold">RX sensitivities</td>
                                <td>Down to - 137dBm</td>
                            </tr>
                            <tr>
                                <td class="font-weight-bold">Communication distance</td>
                                <td>3km to 10km (eyesight distance in open space)</td>
                            </tr>
                            <tr>
                                <td class="font-weight-bold">Data rate</td>
                                <td>980bps ~ 3.125kbps (adaptive data rate)</td>
                            </tr>
                            <tr>
                                <td class="font-weight-bold">Listen Before Talk (LBT)</td>
                                <td>Yes</td>
                            </tr>
                            <tr>
                                <td class="font-weight-bold">Standby current</td>
                                <td>
                                    <= 40uA</td>
                            </tr>
                            <tr>
                                <td class="font-weight-bold">Environment temperature</td>
                                <td>0.1 ~ 50°C</td>
                            </tr>
                            <tr>
                                <td class="font-weight-bold">Number of Data cached when network interrupted</td>
                                <td>10</td>
                            </tr>
                        </tbody>
                    </table>
                </div>

            </div>

        </div>
    </div>
@endsection
