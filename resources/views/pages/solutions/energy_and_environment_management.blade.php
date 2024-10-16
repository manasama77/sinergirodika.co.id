@extends('template')

@section('css')
    <style>
        html,
        body {
            scroll-margin-top: 10px;
        }

        #relay-protection {
            scroll-margin-top: 85px;
        }
    </style>
@endsection

@section('content')
    <div class="container pt-3 pb-5">
        <div class="row pt-2">
            <div class="col-lg-3 position-relative">
                @include('pages.solutions.aside')
            </div>
            <div class="col-lg-9">

                <h2 class="font-weight-extra-normal text-7 mb-3">
                    <strong class="font-weight-extra-bold">ENERGY </strong> AND ENVIRONMENT MANAGEMENT
                </h2>

                <div id="energy-monitoring-for-utilities" class="my-3">
                    <h3 class="font-weight-bold text-4 mb-2">PUBLIC UTILITIES MONITORING (Electricity, Gas, Water)</h3>
                    <img class="img-fluid col-12 col-md-6 offset-md-3 my-3" src="{{ asset('img/Utility-Scheme.png') }}"
                        alt="Utility Scheme">
                    <p>Electricity, gas and water meters with built-in LoRA modem or connect to LoRA RTU with Serial comm
                        RS232/RS485. LoRAWAN Gateway can read the signal from LoRA RTU with 2 km with gaps from urban
                        buildings and 5 km on open space. LoRAWAN Gateway connect to IOT Platform via internet or cellular
                        networks. End users application both PC and mobile apps provide comprehensive data on online monitor
                        and control and billing management</p>
                    <div class="d-flex gap-3">
                        <a href="#"
                            class="btn btn-dark btn-sm btn-modern anim-hover-translate-right-10px transition-3ms">
                            <i class="fas fa-angles-right fa-fw"></i> More Project
                        </a>
                        <a href="#"
                            class="btn btn-dark btn-sm btn-modern anim-hover-translate-right-10px transition-3ms">
                            <i class="fas fa-angles-right fa-fw"></i> More Product
                        </a>
                    </div>
                </div>

                <hr>
                <div id="street-lighting" class="my-3">
                    <h3 class="font-weight-bold text-4 mb-2">STREET LIGHTING</h3>

                    <div class="row">
                        <div class="col-sm-12 col-md-9">
                            <div class="d-flex justify-content-center">
                                <img class="img-fluid m-3" src="{{ asset('img/Streetlamp-Scheme.png') }}"
                                    alt="Utility Scheme">
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-3">
                            <div class="row">
                                <div class="col-sm-4 col-md-12 text-center">
                                    <img class="img-fluid" src="{{ asset('img/Smart-Lamp.png') }}" alt="Smart Lamp">
                                    <p class="font-weight-bold text-2 mb-2">Smart Lamp</p>
                                </div>
                                <div class="col-sm-4 col-md-12 text-center">
                                    <img class="img-fluid" src="{{ asset('img/Nema-Controller.png') }}"
                                        alt="Nema Controller">
                                    <p class="font-weight-bold text-2 mb-2">Nema Controller</p>
                                </div>
                                <div class="col-sm-4 col-md-12 text-center">
                                    <img class="img-fluid" src="{{ asset('img/Internal-Single-Light-Controller.png') }}"
                                        alt="Internal Single Light Controller">
                                    <p class="font-weight-bold text-2 mb-2">Internal Single Light Controller</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <p class="mb-3">Complete solution for energy billing, scheduling timer and ON/OFF, light intensity and
                        Alarm of Street Lighting Exposed sectors : Residential/Commercial/Industrial estates, Local
                        Government (PEMDA)</p>

                    <h3 class="font-weight-bold text-3 mb-2">Monitoring</h3>
                    <p class="mb-3">To know the current condition of the lamps by sending data parameters via application
                        online 24/7 </p>

                    <h3 class="font-weight-bold text-3 mb-2">Controlling</h3>
                    <p class="mb-3">Done by remote to reach efficiency and speed of service</p>

                    <h3 class="font-weight-bold text-3 mb-2">Good for Money</h3>
                    <p class="mb-3">By performing efficient and man-free operation to save more money in Energy
                        consumption and man power</p>

                    <div class="d-flex gap-3">
                        <a href="#"
                            class="btn btn-dark btn-sm btn-modern anim-hover-translate-right-10px transition-3ms">
                            <i class="fas fa-angles-right fa-fw"></i> More Project
                        </a>
                        <a href="#"
                            class="btn btn-dark btn-sm btn-modern anim-hover-translate-right-10px transition-3ms">
                            <i class="fas fa-angles-right fa-fw"></i> More Product
                        </a>
                    </div>
                </div>

                <hr>
                <div id="cctv" class="my-3">
                    <h3 class="font-weight-bold text-4 mb-2">CCTV</h3>

                    <div class="row">
                        <div class="col-sm-12 col-md-8">
                            <div class="d-flex justify-content-center">
                                <img class="img-fluid m-3" src="{{ asset('img/CCTV-Scheme.png') }}" alt="CCTV Scheme">
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-4">
                            <div
                                class="d-flex flex-wrap flex-row flex-md-column justify-content-center align-items-center gap-5">
                                <div class="">
                                    <img class="img-fluid" src="{{ asset('img/Outdoor-IP-Camera.png') }}"
                                        alt="Outdoor IP Camera">
                                    <p class="font-weight-bold text-2 mb-2">Outdoor IP Camera</p>
                                </div>
                                <div class="">
                                    <img class="img-fluid" src="{{ asset('img/Indoor-IP-Camera.png') }}"
                                        alt="Indoor IP Camera">
                                    <p class="font-weight-bold text-2 mb-2">Indoor IP Camera</p>
                                </div>
                                <div class="">
                                    <img class="img-fluid" src="{{ asset('img/Network-Video-Recorder.jpg') }}"
                                        alt="Network Video Recorder">
                                    <p class="font-weight-bold text-2 mb-2">Network Video Recorder</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <p class="mb-3">
                        WIFI/ Ethernet IP cameras are monitored by Network Video Recorder (NVR)<br />
                        Local client can access cameras and sensors via LAN/ WIFI while Remote clients access via internet
                        connection<br />
                        All footages recorded digitally
                    </p>

                    <div class="d-flex gap-3">
                        <a href="#"
                            class="btn btn-dark btn-sm btn-modern anim-hover-translate-right-10px transition-3ms">
                            <i class="fas fa-angles-right fa-fw"></i> More Project
                        </a>
                        <a href="#"
                            class="btn btn-dark btn-sm btn-modern anim-hover-translate-right-10px transition-3ms">
                            <i class="fas fa-angles-right fa-fw"></i> More Product
                        </a>
                    </div>
                </div>

                <hr>
                <div id="water-flood-monitoring" class="my-3">
                    <h3 class="font-weight-bold text-4 mb-2">WATER/ FLOOD MONITORING</h3>
                    <div class="col-12 col-md-6 offset-md-3 my-3">
                        <img class="img-fluid m-3" src="{{ asset('img/Flood-Monitor.png') }}" alt="WATER/ FLOOD MONITORING">
                    </div>
                    <p class="mb-4">
                        Monitoring water level with IoT sensor to monitor the river water level due to flood. Submersible
                        sensors and Ultrasonic sensors for Water level and flow
                    </p>

                    <div class="row">
                        <div class="col-sm-12 col-md-4">
                            <div class="d-flex justify-content-center">
                                <img src="{{ asset('img/Water-Level-Sensor.png') }}" alt="Water Level Sensor"
                                    style="height: 120px;">
                            </div>
                            <h3 class="font-weight-bold text-3 mb-2 text-center">Water Level Sensor</h3>
                            <p class="mb-2">
                                The ultrasonic level sensor is a low-cost, non-contact and easy-to-install
                                measurement device. It is able to meet the every-day needs of commercial production
                            </p>
                        </div>
                        <div class="col-sm-12 col-md-4">
                            <div class="d-flex justify-content-center">
                                <img src="{{ asset('img/Radar-Flow-Meter.png') }}" alt="Radar Flow Meter"
                                    style="height: 120px;">
                            </div>
                            <h3 class="font-weight-bold text-3 mb-2 text-center">RADAR FLOW METER</h3>
                            <p class="mb-2">
                                A radar sensor that can assist in reading liquid/solids levels up to a
                                height of 20 meters. This sensor is designed using DSP technology
                                and advances phyTrack fluid velocity detection and tracking
                                algorithms specifically for open channel surface velocity and flow.
                            </p>
                        </div>
                        <div class="col-sm-12 col-md-4">
                            <div class="d-flex justify-content-center">
                                <img src="{{ asset('img/Ultrasonic-Silt-Level-Sensor.png') }}"
                                    alt="Ultrasonic Silt Level Sensor" style="height: 120px;">
                            </div>
                            <h3 class="font-weight-bold text-3 mb-2 text-center">ULTRASONIC SILT LEVEL SENSOR</h3>
                            <p class="mb-2">
                                Ultrasonic sludge interface meter, also known as ultrasonic silt level meter, is a
                                contact-type, high reliability, easy-to-install and maintain solid-liquid interface
                                monitoring instrument.
                            </p>
                        </div>
                    </div>

                    <div class="d-flex gap-3 mt-3">
                        <a href="#"
                            class="btn btn-dark btn-sm btn-modern anim-hover-translate-right-10px transition-3ms">
                            <i class="fas fa-angles-right fa-fw"></i> More Project
                        </a>
                        <a href="#"
                            class="btn btn-dark btn-sm btn-modern anim-hover-translate-right-10px transition-3ms">
                            <i class="fas fa-angles-right fa-fw"></i> More Product
                        </a>
                    </div>
                </div>

            </div>

        </div>
    </div>
@endsection
