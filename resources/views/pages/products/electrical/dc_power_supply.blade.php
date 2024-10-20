@extends('template')

@section('css')
    <style>
        table>tbody>tr>td {
            font-size: 0.7rem;
        }

        .table-sm>:not(caption)>*>* {
            padding: 0.10rem 0.10rem;
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
                    <strong class="font-weight-extra-bold">SCADA SYSTEMS</strong>
                </h2>

                <div class="my-3">
                    <div class="row">
                        <div class="col-sm-12 col-md-6 mb-4">
                            <h3 class="font-weight-bold text-4 mb-2">
                                CELLULAR ROUTER<br />
                                <small>ROBUSTEL R3000</small>
                            </h3>
                            <p class="m-0">Industrial Dual SIM Cellular VPN Router
                                2 Eth + 1 USB Host + 2 x RS232 or 1 x RS232
                                + 1 x RS485
                                Cellular router offering state-of-the-art mobile connectivity for machine to machine (M2M)
                                applications.</p>

                            <div class="d-flex flex-column justify-content-center align-items-center">
                                <div>
                                    <img src="{{ asset('img/CELLULAR ROUTER.png') }}" alt="CELLULAR ROUTER"
                                        style="width: auto; height: 180px;" />
                                </div>
                                <div>
                                    <img src="{{ asset('img/ROBUSTEL LOGO.png') }}" alt="ROBUSTEL LOGO"
                                        style="width: auto; height: 50px;" />
                                </div>
                            </div>

                        </div>
                        <div class="col-sm-12 col-md-6 mb-4">
                            <div class="d-flex flex-column">
                                <div>
                                    <h3 class="font-weight-bold text-3 mb-0">Cellular Interface</h3>
                                    <p class="text-2 mb-1">Number of antennas 2 (MAIN + AUX) Connector SMA-K SIM 2 x Mini
                                        SIM
                                        (2FF)
                                    </p>
                                </div>
                                <div>
                                    <h3 class="font-weight-bold text-3 mb-0">Ethernet Interface</h3>
                                    <p class="text-2 mb-1">Number of ports 2 x 10/100 Mbps, 2 x LAN or 1 x LAN + 1 x WAN
                                        Magnet isolation protection 1.5 KV
                                    </p>
                                </div>
                                <div>
                                    <h3 class="font-weight-bold text-3 mb-0">Wi-Fi Interface (Optional)
                                    </h3>
                                    <p class="text-2 mb-1">Number of antennas 1
                                        Connector RP-SMA-K
                                        Standards 802.11 a/b/g/n, supports AP and Client modes
                                        Data speed Up to 150 Mbps

                                    </p>
                                </div>
                                <div>
                                    <h3 class="font-weight-bold text-3 mb-0">Serial Interface</h3>
                                    <p class="text-2 mb-1">Number of ports 2 x RS232 or 1 x RS232 + 1 x RS485
                                        Baud rate 300 bps ~ 230400 bps
                                    </p>
                                </div>
                                <div>
                                    <h3 class="font-weight-bold text-3 mb-0">DI/DO</h3>
                                    <p class="text-2 mb-1">Type 2 x DI (dry contact) + 2 x DO (wet contact),
                                        Connector 7-pin 3.5 mm female socket with lock
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-12 col-md-6 mb-3 d-flex justify-content-center">
                            <div class="row">
                                <div class="col-sm-12 col-md-4 d-flex flex-column justify-content-start align-items-center">
                                    <div>
                                        <img src="{{ asset('img/RTU FW-5-GATE.png') }}" alt="RTU FW-5-GATE"
                                            style="width: auto; height: 120px;" />
                                    </div>
                                    <div>
                                        <img src="{{ asset('img/SAE IT-SYSTEM LOGO.jpg') }}" alt="SAE IT-SYSTEM LOGO"
                                            style="width: auto; height: 50px;" />
                                    </div>
                                </div>
                                <div class="col-sm-12 col-md-8">
                                    <h3 class="font-weight-bold text-3 mb-0">
                                        RTU FW-5-GATE
                                    </h3>
                                    <p>2 Ethernet LAN TCP/IP connections
                                        2 RS-485 , RS-232/V.24 interface
                                        Temp sensor, -20° to 100° C
                                        Power supply (20 to 72 V DC)
                                        Protocols IEC 61850 IED,
                                        IEC 60870-5-101 IEC 60870-5-103
                                        IEC 60870-5-104, TCP/IP DNP3
                                        IEC 62056-21, Modbus RTU/TCP
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-6 mb-3 d-flex justify-content-center">
                            <div class="row">
                                <div class="col-sm-12 col-md-4 d-flex flex-column justify-content-start align-items-center">
                                    <div>
                                        <img src="{{ asset('img/FAULT INDICATOR LineTroll 110EμR.png') }}"
                                            alt="FAULT INDICATOR LineTroll 110EμR" style="width: auto; height: 120px;" />
                                    </div>
                                    <div>
                                        <img src="{{ asset('img/NORTROLL LOGO.png') }}" alt="NORTROLL LOGO"
                                            style="width: auto; height: 50px;" />
                                    </div>
                                </div>
                                <div class="col-sm-12 col-md-8">
                                    <h3 class="font-weight-bold text-3 mb-0">
                                        FAULT INDICATOR LineTroll 110EμR
                                    </h3>
                                    <p>Distribution Networks (6-50kV)
                                        LineTroll 110EμR conductor mounted
                                        indicator for detection of PtG and
                                        PtP faults in overhead line networks.
                                        A built-in 2.4GHZ radio device communicate with receiver/ RTU/ Scada Master
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            </div>

        </div>
    </div>
@endsection
