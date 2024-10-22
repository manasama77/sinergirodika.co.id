@php
    $currentRoute = Route::currentRouteName();
@endphp
<aside class="sidebar" id="sidebar" data-plugin-sticky
    data-plugin-options="{'minWidth': 991, 'containerSelector': '.container', 'padding': {'top': 110}}">

    <h5 class="font-weight-semi-bold">Solutions</h5>

    <div class="accordion accordion-sm mb-3" id="accordion">
        <div class="card card-default">
            <div class="card-header">
                <h4 class="card-title text-3 m-0">
                    <a class="accordion-toggle"
                        @if (in_array($currentRoute, ['solutions.electrical-service'])) data-bs-toggle="collapse" data-bs-parent="#accordion" @endif
                        href="{{ $currentRoute != 'solutions.electrical-service' ? route('solutions.electrical-service') : '#collapseElectricalService' }}">
                        Electrical Service
                    </a>
                </h4>
            </div>
            <div id="collapseElectricalService" class="collapse">
                <div class="card-body p-0">
                    <ul class="nav nav-list flex-column">
                        <li class="nav-item">
                            <a class="nav-link"
                                href="{{ $currentRoute != 'solutions.electrical-service' ? route('solutions.electrical-service') : null }}#relay-protection">
                                Relay Protection
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link"
                                href="{{ $currentRoute != 'solutions.electrical-service' ? route('solutions.electrical-service') : null }}#generator-ats-amf-and-ups">
                                Generator ATS AMF and UPS
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link"
                                href="{{ $currentRoute != 'solutions.electrical-service' ? route('solutions.electrical-service') : null }}#energy-metering">
                                Energy Metering
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link"
                                href="{{ $currentRoute != 'solutions.electrical-service' ? route('solutions.electrical-service') : null }}#scada-system">
                                Scada System
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link"
                                href="{{ $currentRoute != 'solutions.electrical-service' ? route('solutions.electrical-service') : null }}#dc-power-supply">
                                DC Power Supply
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link"
                                href="{{ $currentRoute != 'solutions.electrical-service' ? route('solutions.electrical-service') : null }}#transformer-oil-purifier">
                                Transformer Oil Purifier
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="card card-default">
            <div class="card-header">
                <h4 class="card-title text-3 m-0">
                    <a class="accordion-toggle" href="{{ route('solutions.electrical-vehicle-charger') }}">
                        Electric Vehicle Charger (SPKLU)
                    </a>
                </h4>
            </div>
        </div>
        <div class="card card-default">
            <div class="card-header">
                <h4 class="card-title text-3 m-0">
                    <a class="accordion-toggle"
                        @if (in_array($currentRoute, ['solutions.energy-and-environment-management'])) data-bs-toggle="collapse" data-bs-parent="#accordion" @endif
                        href="{{ $currentRoute != 'solutions.energy-and-environment-management' ? route('solutions.energy-and-environment-management') : '#collapse-energy-and-environment-management' }}">
                        Energy And Environment Management
                    </a>
                </h4>
            </div>
            <div id="collapse-energy-and-environment-management" class="collapse">
                <div class="card-body p-0">
                    <ul class="nav nav-list flex-column">
                        <li class="nav-item">
                            <a class="nav-link"
                                href="{{ $currentRoute != 'solutions.energy-and-environment-management' ? route('solutions.electrical-service') : null }}#energy-monitoring-for-utilities">
                                Energy Monitoring for Utilities
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link"
                                href="{{ $currentRoute != 'solutions.energy-and-environment-management' ? route('solutions.electrical-service') : null }}#street-lighting">
                                Street Lighting
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link"
                                href="{{ $currentRoute != 'solutions.energy-and-environment-management' ? route('solutions.electrical-service') : null }}#cctv">
                                CCTV
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link"
                                href="{{ $currentRoute != 'solutions.energy-and-environment-management' ? route('solutions.electrical-service') : null }}#water-flood-monitoring">
                                Water/ Flood Monitoring
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

</aside>
