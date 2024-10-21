@php
    $currentRoute = Route::currentRouteName();
@endphp
<aside class="sidebar" id="sidebar" data-plugin-sticky
    data-plugin-options="{'minWidth': 991, 'containerSelector': '.container', 'padding': {'top': 110}}">

    <h5 class="font-weight-semi-bold">Products</h5>
    <ul class="nav nav-list flex-column mb-5">
        <li class="nav-item">
            <a class="nav-link {{ in_array($currentRoute, ['products.electrical.relay-protection', 'products.electrical.generator-ats-amf', 'products.electrical.energy-metering', 'products.electrical.scada-system', 'products.electrical.dc-power-supply', 'products.electrical.transformer-oil-purifier', 'products.electrical.distribution-transformer-monitoring', 'products.electrical.temperature-monitoring-ews']) ? 'active' : '' }}"
                href="#">
                Electrical
            </a>
            <ul>
                <li class="nav-item">
                    <a class="nav-link {{ $currentRoute == 'products.electrical.relay-protection' ? 'active' : '' }}"
                        data-hash-force data-hash-offset="0" data-hash-offset-md="95"
                        href="{{ route('products.electrical.relay-protection') }}">
                        Relay Protection
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ $currentRoute == 'products.electrical.generator-ats-amf' ? 'active' : '' }}"
                        data-hash data-hash-offset="0" data-hash-offset-lg="95"
                        href="{{ route('products.electrical.generator-ats-amf') }}">
                        Generator ATS AMF and UPS
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ $currentRoute == 'products.electrical.energy-metering' ? 'active' : '' }}"
                        data-hash data-hash-offset="0" data-hash-offset-lg="95"
                        href="{{ route('products.electrical.energy-metering') }}">
                        Energy Metering
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ $currentRoute == 'products.electrical.scada-system' ? 'active' : '' }}"
                        data-hash data-hash-offset="0" data-hash-offset-lg="95"
                        href="{{ route('products.electrical.scada-system') }}#scada-system">
                        Scada System
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ $currentRoute == 'products.electrical.dc-power-supply' ? 'active' : '' }}"
                        data-hash data-hash-offset="0" data-hash-offset-lg="95"
                        href="{{ route('products.electrical.dc-power-supply') }}">
                        DC Power Supply
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link {{ $currentRoute == 'products.electrical.transformer-oil-purifier' ? 'active' : '' }}"
                        data-hash data-hash-offset="0" data-hash-offset-lg="95"
                        href="{{ route('products.electrical.transformer-oil-purifier') }}">
                        Transformer Oil Purifier
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link {{ $currentRoute == 'products.electrical.distribution-transformer-monitoring' ? 'active' : '' }}"
                        data-hash data-hash-offset="0" data-hash-offset-lg="95"
                        href="{{ route('products.electrical.distribution-transformer-monitoring') }}#transformer-oil-purifier">
                        Distribution Transformer monitoring
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link {{ $currentRoute == 'products.electrical.temperature-monitoring-ews' ? 'active' : '' }}"
                        data-hash data-hash-offset="0" data-hash-offset-lg="95"
                        href="{{ route('products.electrical.temperature-monitoring-ews') }}">
                        Temperature Monitoring/ EWS
                    </a>
                </li>
            </ul>
        </li>
        <li class="nav-item">
            <a class="nav-link {{ in_array($currentRoute, ['products.electrical-vehicle-charger.ac-and-small-dc-charger', 'products.electrical-vehicle-charger.ultra-fast-dc-charger']) ? 'active' : '' }}"
                href="{{ route('products.electrical-vehicle-charger.ac-and-small-dc-charger') }}">
                ELECTRIC VEHICLE CHARGER (SPKLU)
            </a>
            <ul>
                <li class="nav-item">
                    <a class="nav-link {{ $currentRoute == 'products.electrical-vehicle-charger.ac-and-small-dc-charger' ? 'active' : '' }}"
                        data-hash-force data-hash-offset="0" data-hash-offset-md="95"
                        href="{{ route('products.electrical-vehicle-charger.ac-and-small-dc-charger') }}">
                        AC and Small DC Charger
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ $currentRoute == 'products.electrical-vehicle-charger.ultra-fast-dc-charger' ? 'active' : '' }}"
                        data-hash-force data-hash-offset="0" data-hash-offset-md="95"
                        href="{{ route('products.electrical-vehicle-charger.ultra-fast-dc-charger') }}">
                        Ultra Fast DC Charger
                    </a>
                </li>
            </ul>
        </li>
        <li class="nav-item">
            <a class="nav-link {{ in_array($currentRoute, ['products.energy-and-environment-management.energy-meters']) ? 'active' : '' }}"
                href="{{ route('products.energy-and-environment-management.energy-meters') }}" data-hash
                data-hash-offset="0" data-hash-offset-lg="95">
                Energy And Environment Management
            </a>
            <ul>
                <li class="nav-item">
                    <a class="nav-link {{ $currentRoute == 'products.energy-and-environment-management.energy-meters' ? 'active' : '' }}"
                        data-hash data-hash-offset="0" data-hash-offset-lg="95"
                        href="{{ route('products.energy-and-environment-management.energy-meters') }}">
                        Energy Meters
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-hash data-hash-offset="0" data-hash-offset-lg="95"
                        href="{{ $currentRoute != 'solutions.energy-and-environment-management' ? route('solutions.electrical-service') : null }}#street-lighting">
                        Gas Meters
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-hash data-hash-offset="0" data-hash-offset-lg="95"
                        href="{{ $currentRoute != 'solutions.energy-and-environment-management' ? route('solutions.electrical-service') : null }}#cctv">
                        Water Meters
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-hash data-hash-offset="0" data-hash-offset-lg="95"
                        href="{{ $currentRoute != 'solutions.energy-and-environment-management' ? route('solutions.electrical-service') : null }}#water-flood-monitoring">
                        Cybel Nomag Sensor
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-hash data-hash-offset="0" data-hash-offset-lg="95"
                        href="{{ $currentRoute != 'solutions.energy-and-environment-management' ? route('solutions.electrical-service') : null }}#water-flood-monitoring">
                        Lora RTU
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-hash data-hash-offset="0" data-hash-offset-lg="95"
                        href="{{ $currentRoute != 'solutions.energy-and-environment-management' ? route('solutions.electrical-service') : null }}#water-flood-monitoring">
                        CCTV & Electronic Security
                    </a>
                </li>
            </ul>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('solutions.electrical-vehicle-charger') }}">
                WATER TANK
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('solutions.electrical-vehicle-charger') }}">
                TEST & MEASUREMENT TOOLS
            </a>
        </li>
    </ul>

</aside>
