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
                    <strong class="font-weight-extra-bold">Energy Meters</strong>
                </h2>

                <h3 class="font-weight-extra-bold text-5 mb-3">
                    Kwh meter LoRAWAN Built-in modem
                </h3>

                <div class="row">
                    <div class="col-sm-12 col-md-4 mb-1">
                        <div class="d-flex justify-content-center">
                            <img src="{{ asset('img/Kwh meter LoRAWAN Built-in modem.png') }}"
                                alt="Kwh meter LoRAWAN Built-in modem" class="img-fluid" />
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-8 mb-1">
                        <p>
                            CL710K22®LoRaWAN Single phase smart energy meter is the latest developed products in Venus meter
                            series. Certificated with MID and DLMS/COSEM, it provides an excellent and stable accuracy and
                            performance. With built-in LoRaW AN communication module, all the operations can be done
                            remotely from the central server, including meter billing, conguration, credit purchase, alarm
                            events report etc
                        </p>
                    </div>
                    <div class="col-sm-12 mb-3">
                        <div class="table-responsive">
                            <table class="table table-borderless table-striped table-sm">
                                <tbody>
                                    <tr>
                                        <td class="font-weight-bold">Connection Wiring</td>
                                        <td>3P4W L1L1-L2L2-L3L3-NN</td>
                                    </tr>
                                    <tr>
                                        <td class="font-weight-bold">Nominal voltage</td>
                                        <td>3*230V/400V</td>
                                    </tr>
                                    <tr>
                                        <td class="font-weight-bold">Operating voltage range</td>
                                        <td>70% ~ 130% Un</td>
                                    </tr>
                                    <tr>
                                        <td class="font-weight-bold">Basic current</td>
                                        <td>5A</td>
                                    </tr>
                                    <tr>
                                        <td class="font-weight-bold">Maximum current</td>
                                        <td>0.25 - 5(100)A</td>
                                    </tr>
                                    <tr>
                                        <td class="font-weight-bold">Starting current</td>
                                        <td>0.4‰Ib / 20mA</td>
                                    </tr>
                                    <tr>
                                        <td class="font-weight-bold">Frequency</td>
                                        <td>50 Hz ± 5%</td>
                                    </tr>
                                    <tr>
                                        <td class="font-weight-bold">Accuracy kWh/kVarh</td>
                                        <td>Class 1 / Class 2(IEC), Class B(MID)</td>
                                    </tr>
                                    <tr>
                                        <td class="font-weight-bold">Pulse constant</td>
                                        <td>1000 imp/kWh, 1000 imp/kVarh</td>
                                    </tr>
                                    <tr>
                                        <td class="font-weight-bold">Power consumption V</td>
                                        <td>
                                            <=0.75W; <=1.2VA(for each phase)</td>
                                    </tr>
                                    <tr>
                                        <td class="font-weight-bold">Power consumption I</td>
                                        <td>
                                            <=0.1VA(for each phase)</td>
                                    </tr>
                                    <tr>
                                        <td class="font-weight-bold">Max power consumption in voltage circuit with PLC
                                            module</td>
                                        <td>5W</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                <hr />

                <h3 class="font-weight-extra-bold text-5 mb-3">
                    Kwh meter with RS 485
                </h3>

                <div class="row">
                    <div class="col-sm-12 col-md-4 mb-1">
                        <div class="d-flex justify-content-center">
                            <img src="{{ asset('img/HXF300.png') }}" alt="HXF300" class="img-fluid" />
                            <img src="{{ asset('img/HXE310.png') }}" alt="HXE310" class="img-fluid" />
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-8 mb-1">
                        <h4 class="font-weight-bold text-3 mb-0">
                            Electricity meter HXE310 3ph, HXF300 3ph CT
                        </h4>
                        <p>
                            Smart electricity has built in smart systems for recording, transmitting and monitoring
                            electricity usage online.
                            kWh, kVARh and demand measurement
                            Remote control for open/close relay
                            Load profile for 15 minutes, 30 minutes, 1 hour, etc
                            Alerting system and Tamper detection
                            Real-time clock and Calendar
                            Nominal voltage 3×231/400V <b>(HXE310)</b>, 3×57.7/100V-3×231/400V <b>(HXF300)</b>
                            Accuracy kWh/kVarh, Class 1 / Class 2 (IEC) (HXE310)
                            Class 0.5S / Class 2(IEC) (HXE300)
                            Limit operating temperature range -40℃- 70℃
                            Communication Mode : RS485 to be connected to 4G modem or LoRA RTU
                        </p>
                    </div>
                </div>

            </div>

        </div>
    </div>
@endsection
