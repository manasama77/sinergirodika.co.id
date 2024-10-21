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
                    <strong class="font-weight-extra-bold">LORA COMMUNICATION DEVICE</strong>
                </h2>

                <div class="row">
                    <div class="col-sm-12 col-md-4 mb-1">
                        <div class="d-flex justify-content-center">
                            <div>
                                <img src="{{ asset('img/RS 485 Lora Bridge (RTU).png') }}" alt="RS 485 Lora Bridge (RTU)"
                                    style="width: auto; height: 100px;" class="mb-3" />
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-8 mb-1">
                        <h3 class="font-weight-extra-normal text-5 mb-3">
                            <strong class="font-weight-bold">RS 485 Lora Bridge (RTU)</strong>
                        </h3>
                        <p>
                            RS485-LoRa bridge is a data channel between traditional devices with RS485 output (Modbus
                            Protocol) and LoRa gateway.
                        </p>
                    </div>
                </div>

                <div class="table-responsive">
                    <table class="table table-borderless table-striped table-sm">
                        <tbody>
                            <tr>
                                <td class="font-weight-bold">Power Supply</td>
                                <td>8-30V DC</td>
                            </tr>
                            <tr>
                                <td class="font-weight-bold">Application</td>
                                <td>Indoor</td>
                            </tr>
                            <tr>
                                <td class="font-weight-bold">Standby Current</td>
                                <td>20mA</td>
                            </tr>
                            <tr>
                                <td class="font-weight-bold">MCU</td>
                                <td>Arm® 32-bit Cortex®-M0</td>
                            </tr>
                            <tr>
                                <td class="font-weight-bold">Frequency</td>
                                <td>470-510MHz, 863-870MHz, 902-926MHz</td>
                            </tr>
                            <tr>
                                <td class="font-weight-bold">TX Power</td>
                                <td>Up to +20dbm</td>
                            </tr>
                            <tr>
                                <td class="font-weight-bold">RX Sensitivity</td>
                                <td>Down to - 137dBm</td>
                            </tr>
                            <tr>
                                <td class="font-weight-bold">Channels</td>
                                <td>8 settable channels</td>
                            </tr>
                            <tr>
                                <td class="font-weight-bold">Data rate</td>
                                <td>Adaptive data rate</td>
                            </tr>
                            <tr>
                                <td colspan="2" class="font-weight-bold">Listen Before Talk (LBT)</td>
                            </tr>
                            <tr>
                                <td class="font-weight-bold">LoRa Class</td>
                                <td>Both Class A & Class C</td>
                            </tr>
                            <tr>
                                <td colspan="2">Power supply isolated & RS485 interface isolated</td>
                            </tr>
                            <tr>
                                <td colspan="2">Compatible with IEC 61000-4-2 (ESD): Air 15kV, Contact 8kV</td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <hr />

                <h3 class="font-weight-bold text-5 mb-3">
                    LoRA Gateway
                </h3>

                <div class="row">
                    <div class="col-sm-12 col-md-4 mb-1">
                        <div class="d-flex flex-row flex-md-column justify-content-center align-items-center">
                            <div class="text-center mb-1">
                                <img src="{{ asset('img/LoRA Gateway Outdoor.png') }}" alt="LoRA Gateway Outdoor"
                                    style="width: auto; height: 100px;" class="mb-3" />
                                <h3 class="font-weight-extra-normal text-3 mb-3">
                                    LoRA Gateway Outdoor
                                </h3>
                            </div>
                            <div class="text-center mb-1">
                                <img src="{{ asset('img/LoRA Gateway Indoor.png') }}" alt="LoRA Gateway Indoor"
                                    style="width: auto; height: 100px;" class="mb-3" />
                                <h3 class="font-weight-extra-normal text-3 mb-3">
                                    LoRA Gateway Indoor
                                </h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-8 mb-1">
                        <p>
                            An ideal gateway to support you in your smart city, smart industry or every smart project,
                            because it combines both the simplicity of installation a unique superior coverage and
                            operational excellence.
                        </p>
                        <div class="table-responsive">
                            <table class="table table-borderless table-striped table-sm">
                                <tbody>
                                    <tr>
                                        <td class="font-weight-bold">Listen Before Talk (LBT)</td>
                                        <td>Built-in with hight rejection SAW filters</td>
                                    </tr>
                                    <tr>
                                        <td class="font-weight-bold">Rx Sensitivity</td>
                                        <td>-141 dBm (SF12)</td>
                                    </tr>
                                    <tr>
                                        <td class="font-weight-bold">TX Power</td>
                                        <td>
                                            configurable from 5dBm to 27dBm<br />
                                            Range -40°C +60°C
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="font-weight-bold">Humidity</td>
                                        <td>95%</td>
                                    </tr>
                                    <tr>
                                        <td class="font-weight-bold">Size</td>
                                        <td>265 x 165 x 100 mm</td>
                                    </tr>
                                    <tr>
                                        <td class="font-weight-bold">Weight</td>
                                        <td>
                                            1,4kg (mounting kit included)<br />
                                            Spectrum analysis compliant<br />
                                            Backup batteries to allow the clean shut down of applications in case of power
                                            cut
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="font-weight-bold">Casing</td>
                                        <td>
                                            IP6 Alu (Black), Polycarbonate (Front), Inox (mounting kit)<br />
                                            Surge protection of the RF LoRa link (option)
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="font-weight-bold">CPU</td>
                                        <td>
                                            ARM Cortex A9<br />
                                            DDRAM 256MB<br />
                                            8GB eMMC (6GB available for user)
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </div>
@endsection
