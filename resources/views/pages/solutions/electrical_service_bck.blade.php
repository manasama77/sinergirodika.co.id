@extends('template')

@section('css')
<style>
    #relay-protection,
    #generator-ats-amf-and-ups,
    #energy-metering,
    #scada-system,
    #dc-power-supply,
    #transformer-oil-purifier {
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
                <strong class="font-weight-extra-bold">Electrical </strong>Service
            </h2>

            <div class="row">
                <div class="col-sm-12 col-md-8 offset-md-2">
                    <div class="electrical-service-scheme-container mx-auto">
                        <a href="#relay-protection" class="btn-relay">&nbsp;</a>
                        <a href="#generator-ats-amf-and-ups" class="btn-genset">&nbsp;</a>
                        <a href="#energy-metering" class="btn-energy">&nbsp;</a>
                        <a href="#scada-system" class="btn-scada">&nbsp;</a>
                        <a href="#dc-power-supply" class="btn-dc">&nbsp;</a>
                        <a href="#transformer-oil-purifier" class="btn-transformer">&nbsp;</a>
                        <a href="{{ route('products.test-and-measurement-tools') }}" target="_blank" class="btn-test">&nbsp;</a>

                        <img class="img-fluid" src="{{ asset('img/Solution-Electric-Scheme.png') }}" alt="Solution-Electric-Scheme">
                    </div>
                </div>
            </div>

            <div class="my-3">
                <p id="relay-protection" class="text-2 mb-0 text-dark">
                    <strong>Relay Protection</strong> : Over current/ Ground Fault,
                    Transformer Differential, Line Current Differential,
                    Under Frequency Relay
                </p>
                <div class="d-flex gap-3 mb-3">
                    <a href="{{ route('products.electrical.relay-protection') }}" class="btn btn-dark btn-sm btn-modern anim-hover-translate-right-10px transition-3ms">
                        <i class="fas fa-angles-right fa-fw"></i> More Product
                    </a>
                    <a href="{{ route('projects.relay-protection') }}" class="btn btn-dark btn-sm btn-modern anim-hover-translate-right-10px transition-3ms">
                        <i class="fas fa-angles-right fa-fw"></i> More Project
                    </a>
                </div>

                <hr />

                <p id="generator-ats-amf-and-ups" class="text-2 mb-0 text-dark">
                    <strong>Generator set, ATS AMF and UPS</strong> and UPS as Substation backup power when main power
                    disappear, Generator operates automatically controlled by ATS AMF to supply the electricity to
                    Substation
                </p>
                <img src="{{ asset('img/Genset-Scheme.png') }}" class="img-fluid col-12 col-md-6 offset-md-3 mb-3" alt="Genset Scheme" />
                <div class="row mb-3">
                    <div class="col-sm-12 col-md-6">
                        <h4 class="font-weight-bold text-3 mb-0">GENERATOR SET</h4>
                        <p class="text-2">
                            Supply and New Installation as main or backup power supply, Ranging from 25-2500 kVA,
                            Open or
                            Silent type to Mobile Trailer option.<br />
                            Comprehensive Genset Services: Includes routine maintenance, General Overhaul (GOH), and
                            Top
                            Overhaul (TOH) for ensuring optimal genset performance and lifespan.<br />
                            Customized Repair Solutions: Providing expert repair services for a broad range of
                            genset
                            models, ensuring rapid response and minimized downtime.<br />
                            Energy Consultancy: Offering professional advice on energy management and efficiency,
                            helping
                            businesses optimize their energy use and reduce costs.
                        </p>
                    </div>
                    <div class="col-sm-12 col-md-6">
                        <h4 class="font-weight-bold text-3 mb-0">ATS & UPS</h4>
                        <p class="text-2">
                            Electrical Installations: Comprehensive services for the installation and maintenance of
                            electricity infrastructure, including connections to PLN and necessary installation
                            using
                            Automatic Transfer System ATS AMF with automatic running when the power our from PLN and
                            back to
                            main when back to normal.<br />
                            Wide range of capacity Uninterrupted Power Supply (UPS) to provide continuous power from
                            the
                            internal battery until utility power returns to safe levels or the battery is fully
                            discharged
                            for <b>critical installation</b> like Hospital, IT Servers, Traffic management, Cellular
                            providers BTS, etc
                        </p>
                    </div>
                </div>
                <div class="d-flex gap-3 mb-3">
                    <a href="{{ route('products.electrical.generator-ats-amf') }}" class="btn btn-dark btn-sm btn-modern anim-hover-translate-right-10px transition-3ms">
                        <i class="fas fa-angles-right fa-fw"></i> More Product
                    </a>
                    <a href="{{ route('projects.generator-ats-amf') }}" class="btn btn-dark btn-sm btn-modern anim-hover-translate-right-10px transition-3ms">
                        <i class="fas fa-angles-right fa-fw"></i> More Project
                    </a>
                </div>

                <hr />

                <p id="energy-metering" class="text-2 mb-0 text-dark">
                    <strong>Energy Metering</strong> : Kwh meter Class 0.2s and 0.5, Power Quality monitoring, Voltage
                    dip/Sag/swell
                </p>
                <div class="d-flex gap-3 mb-3">
                    <a href="{{ route('products.electrical.energy-metering') }}" class="btn btn-dark btn-sm btn-modern anim-hover-translate-right-10px transition-3ms">
                        <i class="fas fa-angles-right fa-fw"></i> More Product
                    </a>
                    <a href="{{ route('projects.energy-metering') }}" class="btn btn-dark btn-sm btn-modern anim-hover-translate-right-10px transition-3ms">
                        <i class="fas fa-angles-right fa-fw"></i> More Project
                    </a>
                </div>

                <hr />

                <p id="scada-system" class="text-2 mb-0 text-dark">
                    <strong>Scada System</strong> : Key point control, monitor and analyze via means of media and
                    protocol communication and temperature sensor for early warning system
                </p>
                <img src="{{ asset('img/Scada-Scheme.png') }}" class="img-fluid col-12 col-md-6 offset-md-3 mb-1" alt="Scada Scheme" />
                <ul class="text-dark text-2">
                    <li>To provide installation of Remote Terminal unit (RTU) and modem routers in keypoints : indoor
                        and Pole mounting switchgears, MV/LV panels, Fault indicators, Thermal and Humidity Sensors
                        (Early warning system) and Distribution Transformer Online Monitoring (Online losses Monitoring)
                    </li>
                    <li>All data sent and monitored by Scada Master/ Energy Management System located in utility company
                        (PLN) with means of communication : Cellular 4G router, fiber optic and Internet.</li>
                    <li>Integration any Modbus/IEC 104/DNP3/IEC61850 protocols IEDs to existing Scada master (Siemens/
                        Alstom/Survalen)</li>
                </ul>
                <div class="d-flex gap-3 mb-3">
                    <a href="{{ route('products.electrical.scada-system') }}" class="btn btn-dark btn-sm btn-modern anim-hover-translate-right-10px transition-3ms">
                        <i class="fas fa-angles-right fa-fw"></i> More Product
                    </a>
                    <a href="{{ route('projects.scada-system') }}" class="btn btn-dark btn-sm btn-modern anim-hover-translate-right-10px transition-3ms">
                        <i class="fas fa-angles-right fa-fw"></i> More Project
                    </a>
                </div>

                <hr />

                <p id="dc-power-supply" class="text-2 mb-0 text-dark">
                    <strong>DC power supply</strong> : Rectifier 24/48/110 VDC, Inverter DC/220VAC, Battery LifePO4
                </p>
                <div class="d-flex gap-3 mb-3">
                    <a href="{{ route('products.electrical.dc-power-supply') }}" class="btn btn-dark btn-sm btn-modern anim-hover-translate-right-10px transition-3ms">
                        <i class="fas fa-angles-right fa-fw"></i> More Product
                    </a>
                    <a href="{{ route('projects.dc-power-supply') }}" class="btn btn-dark btn-sm btn-modern anim-hover-translate-right-10px transition-3ms">
                        <i class="fas fa-angles-right fa-fw"></i> More Project
                    </a>
                </div>

                <hr />

                <p id="transformer-oil-purifier" class="text-2 mb-0 text-dark">
                    <strong>Transformer Oil Purifier</strong> to improve insulation oil by removing trace water, gas,
                    particulate matters etc. to boost performance and life time of transformers, circuit breakers,
                    mutual inductors and cable with Capacity : 2000, 4000, 6000 liter/hour based on size of transformer
                </p>
                <div class="d-flex gap-3 mb-3">
                    <a href="{{ route('products.electrical.transformer-oil-purifier') }}" class="btn btn-dark btn-sm btn-modern anim-hover-translate-right-10px transition-3ms">
                        <i class="fas fa-angles-right fa-fw"></i> More Product
                    </a>
                    <a href="{{ route('projects.transformer-oil-purifier') }}" class="btn btn-dark btn-sm btn-modern anim-hover-translate-right-10px transition-3ms">
                        <i class="fas fa-angles-right fa-fw"></i> More Project
                    </a>
                </div>

            </div>

        </div>
    </div>
    @endsection
