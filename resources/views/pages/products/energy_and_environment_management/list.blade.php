@extends('template')

@section('css')
    <style>
    </style>
@endsection

@section('content')
    <div class="container py-3">
        <ul class="nav nav-pills sort-source sort-source-style-3 justify-content-center" data-sort-id="portfolio"
            data-option-key="filter" data-plugin-options="{'layoutMode': 'fitRows', 'filter': '*'}">
            <li class="nav-item active" data-option-value="*">
                <a class="nav-link text-2 active" href="#">
                    Show All
                </a>
            </li>
            <li class="nav-item" data-option-value=".energy-meters">
                <a class="nav-link text-2" href="#">
                    Energy Meters
                </a>
            </li>
            <li class="nav-item" data-option-value=".gas-meters">
                <a class="nav-link text-2" href="#">
                    Gas Meters
                </a>
            </li>
            <li class="nav-item" data-option-value=".water-meters">
                <a class="nav-link text-2" href="#">
                    Water Meters
                </a>
            </li>
            <li class="nav-item" data-option-value=".cybel-nomag-sensor">
                <a class="nav-link text-2" href="#">
                    Cybel Nomag Sensor
                </a>
            </li>
            <li class="nav-item" data-option-value=".lora-communication-device">
                <a class="nav-link text-2" href="#">
                    Lora Communication Device
                </a>
            </li>
            <li class="nav-item" data-option-value=".cctv-and-electronic-security">
                <a class="nav-link text-2" href="#">
                    CCTV & Electronic Security
                </a>
            </li>
        </ul>

        <div class="sort-destination-loader sort-destination-loader-showing mt-4 pt-2 text-center">

            <div class="row portfolio-list sort-destination lightbox" data-sort-id="portfolio"
                data-plugin-options="{'delegate': 'a.lightbox-portfolio', 'type': 'image', 'gallery': {'enabled': true}}"
                height="420px;">

                <div class="col-sm-12 isotope-item energy-meters">
                    <h2 class="font-weight-extra-normal text-5 mb-0 text-center">
                        <strong class="font-weight-extra-bold">Energy </strong>Meters
                    </h2>
                </div>

                <div class="col-md-6 col-lg-4 offset-lg-2 isotope-item energy-meters">
                    <div class="portfolio-item">
                        <div class="card">
                            <div class="img-card-logo-wrapper">
                                <div class="img-card-logo-item">
                                    <img src="{{ asset('img/products/LoRa_Web_Home_LoRaWAN.png') }}" class="img-card-logo">
                                </div>
                            </div>
                            <div class="d-flex justify-content-center">
                                <div>
                                    <img src="{{ asset('img/products/kwh lora.png') }}" class="img-card">
                                </div>
                            </div>
                            <div class="card-body p-1">
                                <h5 class="font-weight-bold text-dark mb-0">
                                    KWH METER LoRAWAN Built-in modem
                                    <br /><small>CL710K22®LoRaWAN</small>
                                </h5>
                                <div class="badge badge-info badge-sm font-weight-semibold mb-1" style="font-size: 9px;">
                                    Energy Meters
                                </div>
                                <p class="text-1 mb-0">
                                    Built-in LoRaWAN modem allows all the operations can be done remotely from the central
                                    server, including meter billing, consfiguration, credit purchase, alarm events report
                                    etc<br />
                                    Connection Wiring 3P4W L1L1-L2L2-L3L3-NN<br />
                                    Nominal voltage 3*230V/400V<br />
                                    Operating voltage range 70% ~ 130% Un<br />
                                    Basic current 5A<br />
                                    Maximum current 0.25 - 5(100)A<br />
                                    Starting current 0.4‰Ib / 20mA<br />
                                    Frequency 50 Hz ± 5%<br />
                                    Accuracy kWh/kVarh Class 1 / Class 2(IEC), Class B(MID)
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4 isotope-item energy-meters">
                    <div class="portfolio-item">
                        <div class="card">
                            <div class="img-card-logo-wrapper">
                                <div class="img-card-logo-item">
                                    <img src="{{ asset('img/products/hexing-logo.png') }}" class="img-card-logo">
                                </div>
                            </div>
                            <div class="d-flex justify-content-center">
                                <div>
                                    <img src="{{ asset('img/products/KWH METER WITH RS485.png') }}" class="img-card">
                                </div>
                            </div>
                            <div class="card-body p-1">
                                <h5 class="font-weight-bold text-dark mb-0">
                                    KWH METER WITH RS485
                                    <br /><small>HEXING HXE310 3ph, HXF300 3ph CT</small>
                                </h5>
                                <div class="badge badge-info badge-sm font-weight-semibold mb-1" style="font-size: 9px;">
                                    Energy Meters
                                </div>
                                <p class="text-1 mb-0">
                                    Smart electricity has built in smart systems for recording, transmitting and monitoring
                                    electricity usage online.<br />
                                    kWh, kVARh and demand measurement<br />
                                    Remote control for open/close relay<br />
                                    Load profile for 15 minutes, 30 minutes, 1 hour, etc<br />
                                    Alerting system and Tamper detection<br />
                                    Real-time clock and Calendar<br />
                                    Nominal voltage 3×231/400V (HXE310),<br />
                                    3×57.7/100V-3×231/400V (HXF300)<br />
                                    Accuracy kWh/kVarh, Class 1 / Class 2 (IEC) (HXE310)<br />
                                    Class 0.5S / Class 2(IEC) (HXE300)<br />
                                    Communication Mode : RS485 to be connected to<br />
                                    4G modem or LoRA RTU
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <div class="row portfolio-list sort-destination lightbox" data-sort-id="portfolio"
                data-plugin-options="{'delegate': 'a.lightbox-portfolio', 'type': 'image', 'gallery': {'enabled': true}}">

                <div class="col-sm-12 isotope-item gas-meters">
                    <h2 class="font-weight-extra-normal text-5 mb-0 text-center">
                        <strong class="font-weight-extra-bold">Gas </strong>Meters
                    </h2>
                </div>

                <div class="col-md-6 col-lg-8 offset-md-2 isotope-item gas-meters">
                    <div class="portfolio-item">
                        <div class="card">
                            {{-- <div class="img-card-logo-wrapper">
                                <div class="img-card-logo-item">
                                    <img src="{{ asset('img/products/injet-logo.png') }}" class="img-card-logo">
                                </div>
                            </div> --}}
                            <div class="d-flex justify-content-center">
                                <div>
                                    <img src="{{ asset('img/products/gas-meter.png') }}" class="img-card">
                                </div>
                            </div>
                            <div class="card-body p-1">
                                <h5 class="font-weight-bold text-dark mb-0">
                                    GAS METER
                                    <br /><small>G1.6 / G2.6 / G4</small>
                                </h5>
                                <div class="badge badge-info badge-sm font-weight-semibold mb-1" style="font-size: 9px;">
                                    Gas Meters
                                </div>
                                <p class="text-1 mb-0">
                                    Two-pipe Diaphragm gas meter G1.6, G2.5, G4 Cooperated with ZENNER International GmbH &
                                    Co. K, Atmos®LoRa Series are credit gas meters<br />
                                    employing the Sindcon's advanced technology in IOT to build a reliable wireless
                                    communication system for gas meter.<br />
                                    Norminal flowrate (Qn) 1.6 / 2.5 / 4 (m³/h)<br />
                                    Maximum flowrate (Qmax) 2.5 / 4 / 6 (m³/h)<br />
                                    Minimum flowrate (Qmin) 0.016 / 0.0025 / 0.04 (m³/h)<br />
                                    Maximum operating pressure 0.5 Bar<br />
                                    Maximum permissible errors ±1.5%<br />
                                    0.1Qmax≤Q≤Qmax ±3% / ±3% / ±3%<br />
                                    Qmin≤Q≤0.1Qmin ≤2 / ≤2 / ≤2 (mbar)<br />
                                    Max pressure loss 99999.998 m³/h<br />
                                    Display field max 0.0002 m³/h<br />
                                    Display field min 1.2 dm³<br />
                                    Cyclic Volume 1.5 class<br />
                                    Working voltage 4.5/6 V<br />
                                    Communication Protocol Standard LoRaWAN Class A<br />
                                    Frequency support 470MHz, 916MHz, 923MHz<br />
                                    TX Power +20dBm<br />
                                    RX sensitivity Down to-137dBm<br />
                                    Bandwith 125KHz<br />
                                    Local LCD Display Yes
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <div class="row portfolio-list sort-destination lightbox" data-sort-id="portfolio"
                data-plugin-options="{'delegate': 'a.lightbox-portfolio', 'type': 'image', 'gallery': {'enabled': true}}">

                <div class="col-sm-12 isotope-item water-meters">
                    <h2 class="font-weight-extra-normal text-5 mb-0 text-center">
                        <strong class="font-weight-extra-bold">Water </strong>Meters
                    </h2>
                </div>

                <div class="col-md-6 col-lg-8 offset-lg-2 isotope-item water-meters">
                    <div class="portfolio-item">
                        <div class="card">
                            <div class="img-card-logo-wrapper">
                                <div class="img-card-logo-item">
                                    <img src="{{ asset('img/products/LoRa_Web_Home_LoRaWAN.png') }}" class="img-card-logo">
                                </div>
                            </div>
                            <div class="d-flex justify-content-center">
                                <div>
                                    <img src="{{ asset('img/products/Water Meter (Dn.15 - Dn.25).png') }}"
                                        class="img-card">
                                </div>
                            </div>
                            <div class="card-body p-1">
                                <h5 class="font-weight-bold text-dark mb-0">
                                    WATER METER
                                    <br /><small>(Dn.15 - Dn.25) The Mercury®LoRa </small>
                                </h5>
                                <div class="badge badge-info badge-sm font-weight-semibold mb-1" style="font-size: 9px;">
                                    Water Meters
                                </div>
                                <p class="text-1 mb-0">
                                    Series LXSGF model is IMPELLER (turbine) water meter with build-in valve, dry type
                                    register for residential application with sizes from Dn15 to Dn25. LXSGF model consist
                                    of mechanical water meter, electric ball valve, intelligent unit (IU), with LoRaWAN
                                    wireless technique and bult-in lithium battery<br />
                                    Working voltage 3.6V<br />
                                    Data collecting way Dual Magnetic Sensor<br />
                                    Communication mode LoRaWAN<br />
                                    Working frequency 916 --- 919MHz (25mW EIRP with duty cycle of
                                    <= 1% frequency hopping or LBT) 919 --- 923MHz (500mV EIRP)<br />
                                    Channels 8 settable channels with bandwidth of 125kHz<br />
                                    TX power 14dBm<br />
                                    RX sensitivities Down to - 137dBm<br />
                                    Comm. Distance 3km to 10km (eyesight distance in open space)<br />
                                    Data rate 980bps ~ 3.125kbps (adaptive data rate)<br />
                                    Listen Before Talk (LBT) Yes<br />
                                    Standby current
                                    <=40uA<br />
                                    Environment temp 0.1 ~ 50°C
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <div class="row portfolio-list sort-destination lightbox" data-sort-id="portfolio"
                data-plugin-options="{'delegate': 'a.lightbox-portfolio', 'type': 'image', 'gallery': {'enabled': true}}">

                <div class="col-sm-12 isotope-item cybel-nomag-sensor">
                    <h2 class="font-weight-extra-normal text-5 mb-0 text-center">
                        <strong class="font-weight-extra-bold">Cybel </strong>Nomag Sensor
                    </h2>
                </div>

                <div class="col-md-6 col-lg-8 offset-lg-2 isotope-item cybel-nomag-sensor">
                    <div class="portfolio-item">
                        <div class="card">
                            <div class="img-card-logo-wrapper">
                                <div class="img-card-logo-item">
                                    <img src="{{ asset('img/products/LoRa_Web_Home_LoRaWAN.png') }}"
                                        class="img-card-logo">
                                </div>
                            </div>
                            <div class="d-flex justify-content-center">
                                <div>
                                    <img src="{{ asset('img/products/Cyble Nonmag Sensor.png') }}" class="img-card">
                                </div>
                            </div>
                            <div class="card-body p-1">
                                <h5 class="font-weight-bold text-dark mb-0">
                                    Cyble Nonmag Sensor
                                    {{-- <br /><small>(Dn.15 - Dn.25) The Mercury®LoRa </small> --}}
                                </h5>
                                <div class="badge badge-info badge-sm font-weight-semibold mb-1" style="font-size: 9px;">
                                    Cybel Nomag Sensor
                                </div>
                                <p class="text-1 mb-0">
                                    NonMag-Sensor is completely compatible with all Iron water meter
                                    and gas meter pre-equipped with the Cyble target.<br />
                                    Easily retrofitted and installed on meters already on the field.<br />
                                    Working Voltage 3.6V<br />
                                    Data Collecting Way Non-magnetic Transmission<br />
                                    Communication mode LoRaWAN<br />
                                    Working frequency 920MHz - 925MHz<br />
                                    Channels 8 settable channels with bandwith of 125kHz<br />
                                    TX power 14dBm<br />
                                    RX sensitivities Down to -137dBm<br />
                                    Comm distance 3km to 10km (eyesight distance in open space)<br />
                                    Data rate 980bps~3.125Kbps (adaptive data rate)<br />
                                    Listen Before Talk (LBT) Yes<br />
                                    Standby current
                                    <= 40uA<br />
                                    Environment temperature -10°C - 50°C<br />
                                    Data Report Interval 15min | 30min | 1hour | 6 hour | 8 hour | 24 hour<br />
                                    Battery life (year) 5 | 6 | 7 | 8 | 8 | 8
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <div class="row portfolio-list sort-destination lightbox" data-sort-id="portfolio"
                data-plugin-options="{'delegate': 'a.lightbox-portfolio', 'type': 'image', 'gallery': {'enabled': true}}">

                <div class="col-sm-12 isotope-item lora-communication-device">
                    <h2 class="font-weight-extra-normal text-5 mb-0 text-center">
                        <strong class="font-weight-extra-bold">Lora </strong>Communication Device
                    </h2>
                </div>

                <div class="col-md-6 col-lg-4 offset-lg-2 isotope-item lora-communication-device">
                    <div class="portfolio-item">
                        <div class="card">
                            <div class="img-card-logo-wrapper">
                                <div class="img-card-logo-item">
                                    <img src="{{ asset('img/products/LoRa_Web_Home_LoRaWAN.png') }}"
                                        class="img-card-logo">
                                </div>
                            </div>
                            <div class="d-flex justify-content-center">
                                <div>
                                    <img src="{{ asset('img/products/Lora RTU.png') }}" class="img-card">
                                </div>
                            </div>
                            <div class="card-body p-1">
                                <h5 class="font-weight-bold text-dark mb-0">
                                    RS 485 Lora Bridge (RTU)
                                    {{-- <br /><small>(Dn.15 - Dn.25) The Mercury®LoRa </small> --}}
                                </h5>
                                <div class="badge badge-info badge-sm font-weight-semibold mb-1" style="font-size: 9px;">
                                    Lora Communication Device
                                </div>
                                <p class="text-1 mb-0">
                                    RS485-LoRa bridge is a data channel between traditional devices with RS485 output
                                    (Modbus Protocol) and LoRa gateway.<br />
                                    Power Supply -30V DC<br />
                                    Application Indoor<br />
                                    Standby Current 20mA<br />
                                    MCU Arm® 32-bit Cortex®-M0<br />
                                    Frequency 470-510MHz, 863-870MHz, 902-926MHz<br />
                                    TX Power Up to +20dbm<br />
                                    RX Sensitivity Down to -137dBm<br />
                                    Channels 8 settable channels<br />
                                    Data rate Adaptive data rate<br />
                                    Listen Before Talk (LBT)<br />
                                    LoRa Class Both Class A & Class C<br />
                                    Power supply isolated & RS485 interface isolated
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4 isotope-item lora-communication-device">
                    <div class="portfolio-item">
                        <div class="card">
                            <div class="img-card-logo-wrapper">
                                <div class="img-card-logo-item">
                                    <img src="{{ asset('img/products/LoRa_Web_Home_LoRaWAN.png') }}"
                                        class="img-card-logo">
                                </div>
                            </div>
                            <div class="d-flex justify-content-center">
                                <div>
                                    <img src="{{ asset('img/products/LoRA Gateway.png') }}" class="img-card">
                                </div>
                            </div>
                            <div class="card-body p-1">
                                <h5 class="font-weight-bold text-dark mb-0">
                                    LoRA Gateway
                                    {{-- <br /><small>(Dn.15 - Dn.25) The Mercury®LoRa </small> --}}
                                </h5>
                                <div class="badge badge-info badge-sm font-weight-semibold mb-1" style="font-size: 9px;">
                                    Lora Communication Device
                                </div>
                                <p class="text-1 mb-0">
                                    An ideal gateway to support you in your smart city, smart industry or every smart
                                    project, because it combines both the simplicity of installation a unique superior
                                    coverage and operational excellence.<br />
                                    Sniffer for LBT (Listen Before Talk)<br />
                                    Built-in with hight rejection SAW filters<br />
                                    Rx Sensitivity -141 dBm (SF12)<br />
                                    TX Power : configurable from 5dBm to 27dBm<br />
                                    Temp range -40°C +60°C, Humidity 95%<br />
                                    Size 265 x 165 x 100 mm<br />
                                    Weight 1,4kg (mounting kit included)<br />
                                    Spectrum analysis compliant<br />
                                    Backup batteries to allow the clean shut down of applications in case of power cut<br />
                                    Casing IP6 Alu (Black), Polycarbonate (Front), Inox (mounting kit)<br />
                                    Surge protection of the RF LoRa link (option)<br />
                                    CPU ARM Cortex A9, DDRAM 256MB, 8GB eMMC (6GB available for user)
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <div class="row portfolio-list sort-destination lightbox" data-sort-id="portfolio"
                data-plugin-options="{'delegate': 'a.lightbox-portfolio', 'type': 'image', 'gallery': {'enabled': true}}">

                <div class="col-sm-12 isotope-item cctv-and-electronic-security">
                    <h2 class="font-weight-extra-normal text-5 mb-0 text-center">
                        <strong class="font-weight-extra-bold">CCTV </strong>& Electronic Security
                    </h2>
                </div>

                <div class="col-12 isotope-item cctv-and-electronic-security">
                    <div class="d-flex justify-content-center gap-4 flex-wrap">

                        <div class="portfolio-item">
                            <div class="card">
                                <div class="d-flex justify-content-center">
                                    <div>
                                        <img src="{{ asset('img/products/IP cam.png') }}" class="img-card">
                                    </div>
                                </div>
                                <div class="card-body p-1">
                                    <h5 class="font-weight-bold text-dark mb-0">
                                        Indoor IP camera
                                    </h5>
                                    <div class="badge badge-info badge-sm font-weight-semibold mb-1"
                                        style="font-size: 9px;">
                                        CCTV & Electronic Security
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="portfolio-item">
                            <div class="card">
                                <div class="d-flex justify-content-center">
                                    <div>
                                        <img src="{{ asset('img/products/ACCESS CONTROL SCHEME.png') }}"
                                            class="img-card">
                                    </div>
                                </div>
                                <div class="card-body p-1">
                                    <h5 class="font-weight-bold text-dark mb-0">
                                        Access Control
                                    </h5>
                                    <div class="badge badge-info badge-sm font-weight-semibold mb-1"
                                        style="font-size: 9px;">
                                        CCTV & Electronic Security
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="portfolio-item">
                            <div class="card">
                                <div class="d-flex justify-content-center">
                                    <div>
                                        <img src="{{ asset('img/products/BURGLAR ALARM.png') }}" class="img-card">
                                    </div>
                                </div>
                                <div class="card-body p-1">
                                    <h5 class="font-weight-bold text-dark mb-0">
                                        Burglar Alarm
                                    </h5>
                                    <div class="badge badge-info badge-sm font-weight-semibold mb-1"
                                        style="font-size: 9px;">
                                        CCTV & Electronic Security
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="portfolio-item">
                            <div class="card">
                                <div class="d-flex justify-content-center">
                                    <div>
                                        <img src="{{ asset('img/products/Indoor IP Camera.png') }}" class="img-card">
                                    </div>
                                </div>
                                <div class="card-body p-1">
                                    <h5 class="font-weight-bold text-dark mb-0">
                                        Indoor IP camera
                                    </h5>
                                    <div class="badge badge-info badge-sm font-weight-semibold mb-1"
                                        style="font-size: 9px;">
                                        CCTV & Electronic Security
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="portfolio-item">
                            <div class="card">
                                <div class="d-flex justify-content-center">
                                    <div>
                                        <img src="{{ asset('img/products/GUARD TOUR PATROL.png') }}" class="img-card">
                                    </div>
                                </div>
                                <div class="card-body p-1">
                                    <h5 class="font-weight-bold text-dark mb-0">
                                        Guard Tour Patrol
                                    </h5>
                                    <div class="badge badge-info badge-sm font-weight-semibold mb-1"
                                        style="font-size: 9px;">
                                        CCTV & Electronic Security
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="portfolio-item">
                            <div class="card">
                                <div class="d-flex justify-content-center">
                                    <div>
                                        <img src="{{ asset('img/products/CONVEX MIRROR.png') }}" class="img-card">
                                    </div>
                                </div>
                                <div class="card-body p-1">
                                    <h5 class="font-weight-bold text-dark mb-0">
                                        Convex Mirror
                                    </h5>
                                    <div class="badge badge-info badge-sm font-weight-semibold mb-1"
                                        style="font-size: 9px;">
                                        CCTV & Electronic Security
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="portfolio-item">
                            <div class="card">
                                <div class="d-flex justify-content-center">
                                    <div>
                                        <img src="{{ asset('img/products/NVR.jpg') }}" class="img-card">
                                    </div>
                                </div>
                                <div class="card-body p-1">
                                    <h5 class="font-weight-bold text-dark mb-0">
                                        Network Video Recorder
                                    </h5>
                                    <div class="badge badge-info badge-sm font-weight-semibold mb-1"
                                        style="font-size: 9px;">
                                        CCTV & Electronic Security
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="portfolio-item">
                            <div class="card">
                                <div class="d-flex justify-content-center">
                                    <div>
                                        <img src="{{ asset('img/products/TRIPOD AND BARRIER GATE.png') }}"
                                            class="img-card">
                                    </div>
                                </div>
                                <div class="card-body p-1">
                                    <h5 class="font-weight-bold text-dark mb-0">
                                        Tripod and Barrier Gate
                                    </h5>
                                    <div class="badge badge-info badge-sm font-weight-semibold mb-1"
                                        style="font-size: 9px;">
                                        CCTV & Electronic Security
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="portfolio-item">
                            <div class="card">
                                <div class="d-flex justify-content-center">
                                    <div>
                                        <img src="{{ asset('img/products/XRAY AND METAL DETECTOR.png') }}"
                                            class="img-card">
                                    </div>
                                </div>
                                <div class="card-body p-1">
                                    <h5 class="font-weight-bold text-dark mb-0">
                                        XRAY AND METAL DETECTOR
                                    </h5>
                                    <div class="badge badge-info badge-sm font-weight-semibold mb-1"
                                        style="font-size: 9px;">
                                        CCTV & Electronic Security
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

                {{-- <div class="col-md-6 col-lg-1-5 isotope-item cctv-and-electronic-security">
                    <div class="portfolio-item">
                        <div class="card">
                            <div class="d-flex justify-content-center">
                                <div>
                                    <img src="{{ asset('img/products/IP cam.png') }}" class="img-card">
                                </div>
                            </div>
                            <div class="card-body p-1">
                                <h5 class="font-weight-bold text-dark mb-0">
                                    Indoor IP camera
                                </h5>
                                <div class="badge badge-info badge-sm font-weight-semibold mb-1" style="font-size: 9px;">
                                    CCTV & Electronic Security
                                </div>
                            </div>
                        </div>
                    </div>
                </div> --}}

                {{-- <div class="col-md-6 col-lg-1-5 isotope-item cctv-and-electronic-security">
                    <div class="portfolio-item">
                        <div class="card">
                            <div class="d-flex justify-content-center">
                                <div>
                                    <img src="{{ asset('img/products/ACCESS CONTROL SCHEME.png') }}" class="img-card">
                                </div>
                            </div>
                            <div class="card-body p-1">
                                <h5 class="font-weight-bold text-dark mb-0">
                                    Access Control
                                </h5>
                                <div class="badge badge-info badge-sm font-weight-semibold mb-1" style="font-size: 9px;">
                                    CCTV & Electronic Security
                                </div>
                            </div>
                        </div>
                    </div>
                </div> --}}

                {{-- <div class="col-md-6 col-lg-1-5 isotope-item cctv-and-electronic-security">
                    <div class="portfolio-item">
                        <div class="card">
                            <div class="d-flex justify-content-center">
                                <div>
                                    <img src="{{ asset('img/products/BURGLAR ALARM.png') }}" class="img-card">
                                </div>
                            </div>
                            <div class="card-body p-1">
                                <h5 class="font-weight-bold text-dark mb-0">
                                    Burglar Alarm
                                </h5>
                                <div class="badge badge-info badge-sm font-weight-semibold mb-1" style="font-size: 9px;">
                                    CCTV & Electronic Security
                                </div>
                            </div>
                        </div>
                    </div>
                </div> --}}

                {{-- <div class="col-md-6 col-lg-1-5 isotope-item cctv-and-electronic-security">
                    <div class="portfolio-item">
                        <div class="card">
                            <div class="d-flex justify-content-center">
                                <div>
                                    <img src="{{ asset('img/products/Indoor IP Camera.png') }}" class="img-card">
                                </div>
                            </div>
                            <div class="card-body p-1">
                                <h5 class="font-weight-bold text-dark mb-0">
                                    Indoor IP camera
                                </h5>
                                <div class="badge badge-info badge-sm font-weight-semibold mb-1" style="font-size: 9px;">
                                    CCTV & Electronic Security
                                </div>
                            </div>
                        </div>
                    </div>
                </div> --}}

                {{-- <div class="col-md-6 col-lg-1-5 isotope-item cctv-and-electronic-security">
                    <div class="portfolio-item">
                        <div class="card">
                            <div class="d-flex justify-content-center">
                                <div>
                                    <img src="{{ asset('img/products/GUARD TOUR PATROL.png') }}" class="img-card">
                                </div>
                            </div>
                            <div class="card-body p-1">
                                <h5 class="font-weight-bold text-dark mb-0">
                                    Guard Tour Patrol
                                </h5>
                                <div class="badge badge-info badge-sm font-weight-semibold mb-1" style="font-size: 9px;">
                                    CCTV & Electronic Security
                                </div>
                            </div>
                        </div>
                    </div>
                </div> --}}

                {{-- <div class="col-md-6 col-lg-1-5 isotope-item cctv-and-electronic-security">
                    <div class="portfolio-item">
                        <div class="card">
                            <div class="d-flex justify-content-center">
                                <div>
                                    <img src="{{ asset('img/products/CONVEX MIRROR.png') }}" class="img-card">
                                </div>
                            </div>
                            <div class="card-body p-1">
                                <h5 class="font-weight-bold text-dark mb-0">
                                    Convex Mirror
                                </h5>
                                <div class="badge badge-info badge-sm font-weight-semibold mb-1" style="font-size: 9px;">
                                    CCTV & Electronic Security
                                </div>
                            </div>
                        </div>
                    </div>
                </div> --}}

                {{-- <div class="col-md-6 col-lg-1-5 isotope-item cctv-and-electronic-security">
                    <div class="portfolio-item">
                        <div class="card">
                            <div class="d-flex justify-content-center">
                                <div>
                                    <img src="{{ asset('img/products/NVR.jpg') }}" class="img-card">
                                </div>
                            </div>
                            <div class="card-body p-1">
                                <h5 class="font-weight-bold text-dark mb-0">
                                    Network Video Recorder
                                </h5>
                                <div class="badge badge-info badge-sm font-weight-semibold mb-1" style="font-size: 9px;">
                                    CCTV & Electronic Security
                                </div>
                            </div>
                        </div>
                    </div>
                </div> --}}

                {{-- <div class="col-md-6 col-lg-1-5 isotope-item cctv-and-electronic-security">
                    <div class="portfolio-item">
                        <div class="card">
                            <div class="d-flex justify-content-center">
                                <div>
                                    <img src="{{ asset('img/products/TRIPOD AND BARRIER GATE.png') }}" class="img-card">
                                </div>
                            </div>
                            <div class="card-body p-1">
                                <h5 class="font-weight-bold text-dark mb-0">
                                    Tripod and Barrier Gate
                                </h5>
                                <div class="badge badge-info badge-sm font-weight-semibold mb-1" style="font-size: 9px;">
                                    CCTV & Electronic Security
                                </div>
                            </div>
                        </div>
                    </div>
                </div> --}}

                {{-- <div class="col-md-6 col-lg-1-5 isotope-item cctv-and-electronic-security">
                    <div class="portfolio-item">
                        <div class="card">
                            <div class="d-flex justify-content-center">
                                <div>
                                    <img src="{{ asset('img/products/XRAY AND METAL DETECTOR.png') }}" class="img-card">
                                </div>
                            </div>
                            <div class="card-body p-1">
                                <h5 class="font-weight-bold text-dark mb-0">
                                    XRAY AND METAL DETECTOR
                                </h5>
                                <div class="badge badge-info badge-sm font-weight-semibold mb-1" style="font-size: 9px;">
                                    CCTV & Electronic Security
                                </div>
                            </div>
                        </div>
                    </div>
                </div> --}}

            </div>

        </div>
    </div>
@endsection
