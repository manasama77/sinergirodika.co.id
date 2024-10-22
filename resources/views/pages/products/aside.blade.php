@php
    $currentRoute = Route::currentRouteName();
@endphp
<aside class="sidebar" id="sidebar" data-plugin-sticky
    data-plugin-options="{'minWidth': 991, 'containerSelector': '.container', 'padding': {'top': 110}}">

    <h5 class="font-weight-semi-bold">Products</h5>

    <div class="accordion accordion-sm mb-3" id="accordion">
        <div class="card card-default">
            <div class="card-header">
                <h4 class="card-title text-3 m-0">
                    <a class="accordion-toggle"
                        @if (in_array($currentRoute, [
                                'products.electrical.relay-protection',
                                'products.electrical.generator-ats-amf',
                                'products.electrical.energy-metering',
                                'products.electrical.scada-system',
                                'products.electrical.dc-power-supply',
                                'products.electrical.transformer-oil-purifier',
                                'products.electrical.distribution-transformer-monitoring',
                                'products.electrical.temperature-monitoring-ews',
                            ])) data-bs-toggle="collapse" data-bs-parent="#accordion" @endif
                        href="{{ in_array($currentRoute, ['products.electrical.relay-protection', 'products.electrical.generator-ats-amf', 'products.electrical.energy-metering', 'products.electrical.scada-system', 'products.electrical.dc-power-supply', 'products.electrical.transformer-oil-purifier', 'products.electrical.distribution-transformer-monitoring', 'products.electrical.temperature-monitoring-ews']) ? '#collapseElectrical' : route('products.electrical.relay-protection') }}">
                        Electrical
                    </a>
                </h4>
            </div>
            <div id="collapseElectrical" class="collapse">
                <div class="card-body p-0">
                    <ul class="nav nav-list flex-column">
                        <li class="nav-item">
                            <a class="nav-link {{ $currentRoute == 'products.electrical.relay-protection' ? 'active' : '' }}"
                                href="{{ route('products.electrical.relay-protection') }}">
                                Relay Protection
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{ $currentRoute == 'products.electrical.generator-ats-amf' ? 'active' : '' }}"
                                href="{{ route('products.electrical.generator-ats-amf') }}">
                                Generator ATS AMF and UPS
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{ $currentRoute == 'products.electrical.energy-metering' ? 'active' : '' }}"
                                href="{{ route('products.electrical.energy-metering') }}">
                                Energy Metering
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{ $currentRoute == 'products.electrical.scada-system' ? 'active' : '' }}"
                                href="{{ route('products.electrical.scada-system') }}#scada-system">
                                Scada System
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{ $currentRoute == 'products.electrical.dc-power-supply' ? 'active' : '' }}"
                                href="{{ route('products.electrical.dc-power-supply') }}">
                                DC Power Supply
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link {{ $currentRoute == 'products.electrical.transformer-oil-purifier' ? 'active' : '' }}"
                                href="{{ route('products.electrical.transformer-oil-purifier') }}">
                                Transformer Oil Purifier
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link {{ $currentRoute == 'products.electrical.distribution-transformer-monitoring' ? 'active' : '' }}"
                                href="{{ route('products.electrical.distribution-transformer-monitoring') }}#transformer-oil-purifier">
                                Distribution Transformer monitoring
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link {{ $currentRoute == 'products.electrical.temperature-monitoring-ews' ? 'active' : '' }}"
                                href="{{ route('products.electrical.temperature-monitoring-ews') }}">
                                Temperature Monitoring/ EWS
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="card card-default">
            <div class="card-header">
                <h4 class="card-title text-3 m-0">
                    <a class="accordion-toggle"
                        @if (in_array($currentRoute, [
                                'products.electrical-vehicle-charger.ac-and-small-dc-charger',
                                'products.electrical-vehicle-charger.ultra-fast-dc-charger',
                            ])) data-bs-toggle="collapse" data-bs-parent="#accordion" @endif
                        href="{{ in_array($currentRoute, ['products.electrical-vehicle-charger.ac-and-small-dc-charger', 'products.electrical-vehicle-charger.ultra-fast-dc-charger']) ? '#ElectricVehicleCharger' : route('products.electrical-vehicle-charger.ac-and-small-dc-charger') }}">
                        Electric Vehicle Charger (SPKLU)
                    </a>
                </h4>
            </div>
            <div id="ElectricVehicleCharger" class="collapse">
                <div class="card-body p-0">
                    <ul class="nav nav-list flex-column">
                        <li class="nav-item">
                            <a class="nav-link {{ $currentRoute == 'products.electrical-vehicle-charger.ac-and-small-dc-charger' ? 'active' : '' }}"
                                href="{{ route('products.electrical-vehicle-charger.ac-and-small-dc-charger') }}">
                                AC and Small DC Charger
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{ $currentRoute == 'products.electrical-vehicle-charger.ultra-fast-dc-charger' ? 'active' : '' }}"
                                href="{{ route('products.electrical-vehicle-charger.ultra-fast-dc-charger') }}">
                                Ultra Fast DC Charger
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="card card-default">
            <div class="card-header">
                <h4 class="card-title text-3 m-0">
                    <a class="accordion-toggle"
                        @if (in_array($currentRoute, [
                                'products.energy-and-environment-management.energy-meters',
                                'products.energy-and-environment-management.gas-meters',
                                'products.energy-and-environment-management.water-meters',
                                'products.energy-and-environment-management.cyble-nonmag-sensor',
                                'products.energy-and-environment-management.lora-rtu',
                                'products.energy-and-environment-management.cctv-and-electronic-security',
                            ])) data-bs-toggle="collapse" data-bs-parent="#accordion" @endif
                        href="{{ in_array($currentRoute, ['products.energy-and-environment-management.energy-meters', 'products.energy-and-environment-management.gas-meters', 'products.energy-and-environment-management.water-meters', 'products.energy-and-environment-management.cyble-nonmag-sensor', 'products.energy-and-environment-management.lora-rtu', 'products.energy-and-environment-management.cctv-and-electronic-security']) ? '#EnergyAndEnvironmentManagement' : route('products.energy-and-environment-management.energy-meters') }}">
                        Energy And Environment Management
                    </a>
                </h4>
            </div>
            <div id="EnergyAndEnvironmentManagement" class="collapse">
                <div class="card-body p-0">
                    <ul class="nav nav-list flex-column">
                        <li class="nav-item">
                            <a class="nav-link {{ $currentRoute == 'products.energy-and-environment-management.energy-meters' ? 'active' : '' }}"
                                href="{{ route('products.energy-and-environment-management.energy-meters') }}">
                                Energy Meters
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{ $currentRoute == 'products.energy-and-environment-management.gas-meters' ? 'active' : '' }}"
                                href="{{ route('products.energy-and-environment-management.gas-meters') }}">
                                Gas Meters
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{ $currentRoute == 'products.energy-and-environment-management.water-meters' ? 'active' : '' }}"
                                href="{{ route('products.energy-and-environment-management.water-meters') }}">
                                Water Meters
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{ $currentRoute == 'products.energy-and-environment-management.cyble-nonmag-sensor' ? 'active' : '' }}"
                                href="{{ route('products.energy-and-environment-management.cyble-nonmag-sensor') }}">
                                Cybel Nomag Sensor
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{ $currentRoute == 'products.energy-and-environment-management.lora-rtu' ? 'active' : '' }}"
                                href="{{ route('products.energy-and-environment-management.lora-rtu') }}">
                                Lora RTU
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{ $currentRoute == 'products.energy-and-environment-management.cctv-and-electronic-security' ? 'active' : '' }}"
                                href="{{ route('products.energy-and-environment-management.cctv-and-electronic-security') }}">
                                CCTV & Electronic Security
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="card card-default">
            <div class="card-header">
                <h4 class="card-title text-3 m-0">
                    <a class="accordion-toggle" href="{{ route('products.water-tank') }}">
                        Water Tank
                    </a>
                </h4>
            </div>
        </div>
        <div class="card card-default">
            <div class="card-header">
                <h4 class="card-title text-3 m-0">
                    <a class="accordion-toggle" href="{{ route('products.test-and-measurement-tools') }}">
                        Test & Measurement Tools
                    </a>
                </h4>
            </div>
        </div>
    </div>

</aside>
