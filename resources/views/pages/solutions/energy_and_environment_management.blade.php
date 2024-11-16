@extends('template')

@section('css')
    <style>
        #energy-monitoring-for-utilities,
        #street-lighting,
        #cctv,
        #water-flood-monitoring {
            scroll-margin-top: 95px;
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
                <h2 class="font-weight-extra-normal text-5 mb-0 text-center">
                    <strong class="font-weight-extra-bold">Energy </strong>And Environment Management
                </h2>

                <div id="energy-monitoring-for-utilities" class="my-3">
                    <h3 class="font-weight-bold text-2 mb-2 text-center">
                        Public Utilities Monitoring (Electricity, Gas, Water)
                    </h3>
                    <div class="card">
                        <div class="card-body p-2">
                            <img class="img-fluid col-12 col-md-6 offset-md-3 mb-1"
                                src="{{ asset('img/Utility-Scheme.png') }}" alt="Utility Scheme">
                            <p class="text-2 text-dark mb-2">Electricity, gas and water meters with built-in LoRA modem or
                                connect
                                to
                                LoRA RTU with Serial comm
                                RS232/RS485. LoRAWAN Gateway can read the signal from LoRA RTU with 2 km with gaps from
                                urban
                                buildings and 5 km on open space. LoRAWAN Gateway connect to IOT Platform via internet or
                                cellular
                                networks. End users application both PC and mobile apps provide comprehensive data on online
                                monitor
                                and control and billing management</p>
                            <div class="d-flex justify-content-center gap-3">
                                <a href="{{ route('products.energy-and-environment-management.energy-meters') }}"
                                    class="btn btn-dark btn-sm btn-modern anim-hover-translate-right-10px transition-3ms">
                                    <i class="fas fa-angles-right fa-fw"></i> More Product
                                </a>
                                <a href="{{ route('projects.energy-metering') }}"
                                    class="btn btn-dark btn-sm btn-modern anim-hover-translate-right-10px transition-3ms">
                                    <i class="fas fa-angles-right fa-fw"></i> More Project
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <hr>
                <div id="street-lighting" class="my-3">
                    <h3 class="font-weight-bold text-2 mb-2 text-center">Street Lighting</h3>

                    <div class="card mb-2">
                        <div class="card-body p-2">

                            <div class="d-flex justify-content-center gap-1">
                                <div>
                                    <img class="img-fluid m-3" src="{{ asset('img/Streetlamp-Scheme.png') }}"
                                        alt="Utility Scheme" style="height: 240px;">
                                </div>
                            </div>

                            <p class="text-2 text-dark mb-1">Complete solution for energy billing, scheduling timer and
                                ON/OFF,
                                light intensity and
                                Alarm of Street Lighting Exposed sectors : Residential/Commercial/Industrial estates, Local
                                Government (PEMDA)</p>

                            <div class="row mb-2">
                                <div class="col-sm-12 col-md-4">
                                    <h3 class="font-weight-bold text-2 mb-2">Monitoring</h3>
                                    <p class="text-2 text-dark mb-1">To know the current condition of the lamps by sending
                                        data
                                        parameters via application
                                        online 24/7 </p>
                                </div>
                                <div class="col-sm-12 col-md-4">
                                    <h3 class="font-weight-bold text-2 mb-2">Controlling</h3>
                                    <p class="text-2 text-dark mb-1">Done by remote to reach efficiency and speed of service
                                    </p>
                                </div>
                                <div class="col-sm-12 col-md-4">
                                    <h3 class="font-weight-bold text-2 mb-2">Good for Money</h3>
                                    <p class="text-2 text-dark mb-1">By performing efficient and man-free operation to save
                                        more
                                        money in Energy
                                        consumption and man power</p>
                                </div>
                            </div>

                            <div class="d-flex justify-content-center gap-3">
                                <a href="{{ route('projects.street-lamps-and-warehouse') }}"
                                    class="btn btn-dark btn-sm btn-modern anim-hover-translate-right-10px transition-3ms">
                                    <i class="fas fa-angles-right fa-fw"></i> More Project
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="text-center col-sm-12 col-md-4 mb-2">
                            <div class="card">
                                <div class="card-body p-2">
                                    <img class="img-fluid" src="{{ asset('img/solutions/Smart Lamp.png') }}"
                                        alt="Smart Lamp" style="height: 70px;">
                                    <p class="font-weight-bold text-1 mb-0 text-dark">Smart Lamp</p>
                                </div>
                            </div>
                        </div>
                        <div class="text-center col-sm-12 col-md-4">
                            <div class="card">
                                <div class="card-body p-2">
                                    <img class="img-fluid" src="{{ asset('img/solutions/Nema Controller.png') }}"
                                        alt="Nema Controller" style="height: 70px;">
                                    <p class="font-weight-bold text-1 mb-0 text-dark">Nema Controller</p>
                                </div>
                            </div>
                        </div>
                        <div class="text-center col-sm-12 col-md-4">
                            <div class="card">
                                <div class="card-body p-2">
                                    <img class="img-fluid" src="{{ asset('img/solutions/Internal Single Light.jpg') }}"
                                        alt="Internal Single Light Controller" style="height: 70px;">
                                    <p class="font-weight-bold text-1 mb-0 text-dark">Internal Single Light
                                        Controller
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <hr>
                <div id="cctv" class="my-3">
                    <h3 class="font-weight-bold text-2 mb-2 text-center">CCTV</h3>

                    <div class="card mb-2">
                        <div class="card-body p-2">

                            <div class="d-flex justify-content-center gap-1">
                                <div>
                                    <img class="img-fluid m-3" src="{{ asset('img/CCTV-Scheme.png') }}" alt="CCTV Scheme"
                                        style="height: 240px;">
                                </div>
                            </div>

                            <p class="text-2 text-dark mb-1">
                                WIFI/ Ethernet IP cameras are monitored by Network Video Recorder (NVR)<br />
                                Local client can access cameras and sensors via LAN/ WIFI while Remote clients access via
                                internet
                                connection<br />
                                All footages recorded digitally
                            </p>

                            <div class="d-flex justify-content-center gap-3">
                                <a href="{{ route('products.energy-and-environment-management.cctv-and-electronic-security') }}"
                                    class="btn btn-dark btn-sm btn-modern anim-hover-translate-right-10px transition-3ms">
                                    <i class="fas fa-angles-right fa-fw"></i> More Product
                                </a>
                                <a href="{{ route('projects.cctv-and-metal-detectors') }}"
                                    class="btn btn-dark btn-sm btn-modern anim-hover-translate-right-10px transition-3ms">
                                    <i class="fas fa-angles-right fa-fw"></i> More Project
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="text-center col-sm-12 col-md-4 mb-2">
                            <div class="card">
                                <div class="card-body p-2">
                                    <img class="img-fluid" src="{{ asset('img/Outdoor-IP-Camera.png') }}"
                                        alt="Outdoor IP Camera" style="height: 70px;">
                                    <p class="font-weight-bold text-1 mb-0 text-dark">Outdoor IP Camera</p>
                                </div>
                            </div>
                        </div>
                        <div class="text-center col-sm-12 col-md-4">
                            <div class="card">
                                <div class="card-body p-2">
                                    <img class="img-fluid" src="{{ asset('img/Indoor-IP-Camera.png') }}"
                                        alt="Indoor IP Camera" style="height: 70px;">
                                    <p class="font-weight-bold text-1 mb-0 text-dark">Indoor IP Camera</p>
                                </div>
                            </div>
                        </div>
                        <div class="text-center col-sm-12 col-md-4">
                            <div class="card">
                                <div class="card-body p-2">
                                    <img class="img-fluid" src="{{ asset('img/Network-Video-Recorder.jpg') }}"
                                        alt="Network Video Recorder" style="height: 70px;">
                                    <p class="font-weight-bold text-1 mb-0 text-dark">Network Video Recorder</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <hr>

                <div id="water-flood-monitoring" class="my-3">
                    <h3 class="font-weight-bold text-2 mb-2 text-center">Water/ Flood Monitoring</h3>

                    <div class="card mb-2">
                        <div class="card-body p-2">

                            <div class="d-flex justify-content-center gap-1">
                                <div>
                                    <img class="img-fluid m-3" src="{{ asset('img/Flood-Monitor.png') }}"
                                        alt="WATER/ FLOOD MONITORING" style="height: 240px;">
                                </div>
                            </div>

                            <p class="text-2 text-dark mb-1">
                                Monitoring water level with IoT sensor to monitor the river water level due to flood.
                                Submersible
                                sensors and Ultrasonic sensors for Water level and flow
                            </p>

                        </div>
                    </div>

                    <div class="row">
                        <div class="text-center col-sm-12 col-md-4 mb-2">
                            <div class="card">
                                <div class="card-body p-2">
                                    <div class="d-flex justify-content-center">
                                        <img src="{{ asset('img/Water-Level-Sensor.png') }}" alt="Water Level Sensor"
                                            style="height: 100px;">
                                    </div>
                                    <h3 class="font-weight-bold text-1 mb-1 text-dark text-center">Water Level Sensor</h3>
                                    <p class="text-2 text-dark mb-1">
                                        The ultrasonic level sensor is a low-cost, non-contact and easy-to-install
                                        measurement device. It is able to meet the every-day needs of commercial production
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="text-center col-sm-12 col-md-4">
                            <div class="card">
                                <div class="card-body p-2">
                                    <div class="d-flex justify-content-center">
                                        <img src="{{ asset('img/Radar-Flow-Meter.png') }}" alt="Radar Flow Meter"
                                            style="height: 100px;">
                                    </div>
                                    <h3 class="font-weight-bold text-1 mb-1 text-dark text-center">RADAR FLOW METER</h3>
                                    <p class="text-2 text-dark mb-1">
                                        A radar sensor that can assist in reading liquid/solids levels up to a
                                        height of 20 meters. This sensor is designed using DSP technology
                                        and advances phyTrack fluid velocity detection and tracking
                                        algorithms specifically for open channel surface velocity and flow.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="text-center col-sm-12 col-md-4">
                            <div class="card">
                                <div class="card-body p-2">
                                    <div class="d-flex justify-content-center">
                                        <img src="{{ asset('img/Ultrasonic-Silt-Level-Sensor.png') }}"
                                            alt="Ultrasonic Silt Level Sensor" style="height: 100px;">
                                    </div>
                                    <h3 class="font-weight-bold text-1 mb-1 text-dark text-center">ULTRASONIC SILT LEVEL
                                        SENSOR
                                    </h3>
                                    <p class="text-2 text-dark mb-1">
                                        Ultrasonic sludge interface meter, also known as ultrasonic silt level meter, is a
                                        contact-type, high reliability, easy-to-install and maintain solid-liquid interface
                                        monitoring instrument.
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
