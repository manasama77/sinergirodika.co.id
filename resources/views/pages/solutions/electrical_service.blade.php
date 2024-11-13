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

    .btn-sm {
        font-size: 0.6rem !important;
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

            <div class="row">
                <div id="relay-protection" class="col-sm-12 col-md-6 my-3">
                    <div class="card">
                        <h5 class="font-weight-bold text-dark mb-2 text-3 text-center">
                            RELAY PROTECTION
                        </h5>
                        <div class="d-flex justify-content-center">
                            <div>
                                <img src="{{ asset('img/solutions/Relay solution.jpg') }}" class="img-card">
                            </div>
                        </div>
                        <div class="card-body p-2">
                            <p class="text-1 mb-0 text-dark">
                                Protection against faults by the quick removal from service of any equipment of a power system when it suffers a short circuit for continuous power utility supply.<br />
                                Substation and Transmission protection : Over current/ Ground Fault, Transformer Differential, Line Current Differential, Distance Relay, Under Frequency Relay<br />
                                Distribution : OC GF Directional Relays, Thermal overload relays, motor protection
                            </p>

                            <div class="d-flex gap-3 mt-3 justify-content-center">
                                <a href="{{ route('products.electrical') }}#relay-protection" class="btn btn-dark btn-sm btn-modern anim-hover-translate-right-10px transition-3ms">
                                    <i class="fas fa-angles-right fa-fw"></i> More Product
                                </a>
                                <a href="{{ route('projects.relay-protection') }}" class="btn btn-dark btn-sm btn-modern anim-hover-translate-right-10px transition-3ms">
                                    <i class="fas fa-angles-right fa-fw"></i> More Project
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div id="energy-metering" class="col-sm-12 col-md-6 my-3">
                    <div class="card">
                        <h5 class="font-weight-bold text-dark mb-2 text-3 text-center">
                            ENERGY METERING
                        </h5>
                        <div class="d-flex justify-content-center">
                            <div>
                                <img src="{{ asset('img/solutions/Metering solution 2 copy.jpg') }}" class="img-card">
                            </div>
                        </div>
                        <div class="card-body p-2">
                            <p class="text-1 mb-0 text-dark">
                                Class 0.5s to 0.2S Energy metering and Power Quality monitoring (Dip/Sag/swell) with ITIC curve analysis to ensure good quality of power supply<br />
                                Energy metering for Substation, Distribution system and utility clients integrated with Automatic Meter reading system via all means of communication (4G, Fiber optic, Internet)
                            </p>

                            <div class="d-flex gap-3 mt-3 justify-content-center">
                                <a href="{{ route('products.electrical') }}#energy-metering" class="btn btn-dark btn-sm btn-modern anim-hover-translate-right-10px transition-3ms">
                                    <i class="fas fa-angles-right fa-fw"></i> More Product
                                </a>
                                <a href="{{ route('projects.energy-metering') }}" class="btn btn-dark btn-sm btn-modern anim-hover-translate-right-10px transition-3ms">
                                    <i class="fas fa-angles-right fa-fw"></i> More Project
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div id="generator-ats-amf-and-ups" class="col-sm-12 col-md-12 my-3">
                    <div class="card">
                        <h5 class="font-weight-bold text-dark mb-2 text-3 text-center">
                            GENSET + AMF BACKUP POWER SUPPLY
                        </h5>
                        <div class="d-flex justify-content-center">
                            <div>
                                <img src="{{ asset('img/solutions/Genset-Scheme.png') }}" class="img-card-genset">
                            </div>
                        </div>
                        <div class="card-body p-2">
                            <p class="text-1 mb-0 text-dark">
                                <strong>Generator set, ATS AMF and UPS</strong> and UPS as Substation backup power when main power
                                disappear, Generator operates automatically controlled by ATS AMF to supply the electricity to
                                Substation
                            </p>
                            <h4 class="font-weight-bold text-1 mb-0">GENERATOR SET</h4>
                            <p class="text-1 text-dark mb-1">
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

                            <h4 class="font-weight-bold text-1 mb-0">ATS & UPS</h4>
                            <p class="text-1 text-dark">
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

                            <div class="d-flex gap-3 mt-3 justify-content-center">
                                <a href="{{ route('products.electrical') }}#generator-ats-amf-and-ups" class="btn btn-dark btn-sm btn-modern anim-hover-translate-right-10px transition-3ms">
                                    <i class="fas fa-angles-right fa-fw"></i> More Product
                                </a>
                                <a href="{{ route('projects.generator-ats-amf') }}" class="btn btn-dark btn-sm btn-modern anim-hover-translate-right-10px transition-3ms">
                                    <i class="fas fa-angles-right fa-fw"></i> More Project
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div id="scada-system" class="col-sm-12 col-md-12 my-3">
                    <div class="card">
                        <h5 class="font-weight-bold text-dark mb-2 text-3 text-center">
                            SCADA SYSTEM
                        </h5>
                        <div class="d-flex justify-content-center">
                            <div>
                                <img src="{{ asset('img/solutions/Scada-Scheme.png') }}" class="img-card-genset">
                            </div>
                        </div>
                        <div class="card-body p-2">
                            <p class="text-1 mb-0 text-dark">
                                To provide installation of Remote Terminal unit (RTU) and modem routers in key points : indoor and Pole mounting switchgears, MV/LV panels, Fault indicators, Thermal and Humidity Sensors (Early warning system) and Distribution Transformer Online Monitoring (Online losses Monitoring)<br />
                                All data sent and monitored by Scada Master/ Energy Management System located in utility company (PLN) with means of communication : Cellular 4G router, fiber optic and Internet.<br />
                                Integration any Modbus/IEC 104/DNP3/IEC61850 protocols IEDs to existing Scada master (Siemens/ Alstom/Survalen)

                            </p>

                            <div class="d-flex gap-3 mt-3 justify-content-center">
                                <a href="{{ route('products.electrical') }}#scada-system" class="btn btn-dark btn-sm btn-modern anim-hover-translate-right-10px transition-3ms">
                                    <i class="fas fa-angles-right fa-fw"></i> More Product
                                </a>
                                <a href="{{ route('projects.scada-system') }}" class="btn btn-dark btn-sm btn-modern anim-hover-translate-right-10px transition-3ms">
                                    <i class="fas fa-angles-right fa-fw"></i> More Project
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div id="dc-power-supply" class="col-sm-12 col-md-6 my-3">
                    <div class="card">
                        <h5 class="font-weight-bold text-dark mb-2 text-3 text-center">
                            DC POWER SUPPLY
                        </h5>
                        <div class="d-flex justify-content-center">
                            <div>
                                <img src="{{ asset('img/solutions/DC power supply copy.jpg') }}" class="img-card">
                            </div>
                        </div>
                        <div class="card-body p-2">
                            <p class="text-1 mb-0 text-dark">
                                To provide DC supply backup to DC powered instruments in Substation (relays, meters, circuit breaker, Scada) and power utilities in case of emergency black out<br />
                                Rectifier 24/48/110 VDC include Battery charger, Inverter DC/220VAC, and BMS-Battery LifePO4 12/24/48/110 VDC
                            </p>

                            <div class="d-flex gap-3 mt-3 justify-content-center">
                                <a href="{{ route('products.electrical') }}#dc-power-supply" class="btn btn-dark btn-sm btn-modern anim-hover-translate-right-10px transition-3ms">
                                    <i class="fas fa-angles-right fa-fw"></i> More Product
                                </a>
                                <a href="{{ route('projects.dc-power-supply') }}" class="btn btn-dark btn-sm btn-modern anim-hover-translate-right-10px transition-3ms">
                                    <i class="fas fa-angles-right fa-fw"></i> More Project
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div id="transformer-oil-purifier" class="col-sm-12 col-md-6 my-3">
                    <div class="card">
                        <h5 class="font-weight-bold text-dark mb-2 text-3 text-center">
                            TRANSFORMER OIL PURIFIER
                        </h5>
                        <div class="d-flex justify-content-center">
                            <div>
                                <img src="{{ asset('img/solutions/Trafo purifier 03.jpg') }}" class="img-card">
                            </div>
                        </div>
                        <div class="card-body p-2">
                            <p class="text-1 mb-0 text-dark">
                                <b>Transformer Oil Purifier</b> to improve insulation oil by removing trace water, gas, particulate matters etc. to boost performance and life time of transformers, circuit breakers, mutual inductors and cable with Capacity : 2000, 4000, 6000 liter/hour for up to 20 MVA power transformer.
                            </p>

                            <div class="d-flex gap-3 mt-3 justify-content-center">
                                <a href="{{ route('products.electrical') }}#transformer-oil-purifier" class="btn btn-dark btn-sm btn-modern anim-hover-translate-right-10px transition-3ms">
                                    <i class="fas fa-angles-right fa-fw"></i> More Product
                                </a>
                                <a href="{{ route('projects.transformer-oil-purifier') }}" class="btn btn-dark btn-sm btn-modern anim-hover-translate-right-10px transition-3ms">
                                    <i class="fas fa-angles-right fa-fw"></i> More Project
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </div>
    @endsection
