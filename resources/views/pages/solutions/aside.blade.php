@php
    $currentRoute = Route::currentRouteName();
@endphp
<aside class="sidebar" id="sidebar" data-plugin-sticky
    data-plugin-options="{'minWidth': 991, 'containerSelector': '.container', 'padding': {'top': 110}}">

    <h5 class="font-weight-semi-bold">Solutions</h5>
    <ul class="nav nav-list flex-column mb-5">
        <li class="nav-item">
            <a class="nav-link active" href="{{ route('solutions.electrical-service') }}">
                Electrical Service
            </a>
            <ul>
                <li class="nav-item">
                    <a class="nav-link" data-hash-force data-hash-offset="0" data-hash-offset-md="95"
                        href="{{ $currentRoute != 'solutions.electrical-service' ? route('solutions.electrical-service') : null }}#relay-protection">
                        Relay Protection
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-hash data-hash-offset="0" data-hash-offset-lg="95"
                        href="{{ $currentRoute != 'solutions.electrical-service' ? route('solutions.electrical-service') : null }}#generator-ats-amf-and-ups">
                        Generator ATS AMF and UPS
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-hash data-hash-offset="0" data-hash-offset-lg="95"
                        href="{{ $currentRoute != 'solutions.electrical-service' ? route('solutions.electrical-service') : null }}#energy-metering">
                        Energy Metering
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-hash data-hash-offset="0" data-hash-offset-lg="95"
                        href="{{ $currentRoute != 'solutions.electrical-service' ? route('solutions.electrical-service') : null }}#scada-system">
                        Scada System
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-hash data-hash-offset="0" data-hash-offset-lg="95"
                        href="{{ $currentRoute != 'solutions.electrical-service' ? route('solutions.electrical-service') : null }}#dc-power-supply">
                        DC Power Supply
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" data-hash data-hash-offset="0" data-hash-offset-lg="95"
                        href="{{ $currentRoute != 'solutions.electrical-service' ? route('solutions.electrical-service') : null }}#transformer-oil-purifier">
                        Transformer Oil Purifier
                    </a>
                </li>
            </ul>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('solutions.electrical-vehicle-charger') }}">
                ELECTRIC VEHICLE CHARGER (SPKLU)
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-hash data-hash-offset="0" data-hash-offset-lg="95"
                href="{{ route('solutions.energy-and-environment-management') }}">
                Energy And Environment Management
            </a>
            <ul>
                <li class="nav-item">
                    <a class="nav-link" data-hash data-hash-offset="0" data-hash-offset-lg="95"
                        href="{{ $currentRoute != 'solutions.energy-and-environment-management' ? route('solutions.electrical-service') : null }}#energy-monitoring-for-utilities">
                        Energy Monitoring for Utilities
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-hash data-hash-offset="0" data-hash-offset-lg="95"
                        href="{{ $currentRoute != 'solutions.energy-and-environment-management' ? route('solutions.electrical-service') : null }}#street-lighting">
                        Street Lighting
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-hash data-hash-offset="0" data-hash-offset-lg="95"
                        href="{{ $currentRoute != 'solutions.energy-and-environment-management' ? route('solutions.electrical-service') : null }}#cctv">
                        CCTV
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-hash data-hash-offset="0" data-hash-offset-lg="95"
                        href="{{ $currentRoute != 'solutions.energy-and-environment-management' ? route('solutions.electrical-service') : null }}#water-flood-monitoring">
                        Water/ Flood Monitoring
                    </a>
                </li>
            </ul>
        </li>
    </ul>

</aside>
