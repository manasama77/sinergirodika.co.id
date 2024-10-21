@php
    $currentRoute = Route::currentRouteName();
@endphp
<header id="header"
    data-plugin-options="{'stickyEnabled': true, 'stickyEnableOnBoxed': true, 'stickyEnableOnMobile': false, 'stickyChangeLogo': false, 'stickyStartAt': 0}">
    <div class="header-body border-top-0">
        <div class="header-container container">
            <div class="header-row">
                <div class="header-column">
                    <div class="header-row">
                        <div class="header-logo">
                            <a href="{{ route('home') }}">
                                <img alt="{{ config('app.name') }}" width="150" data-sticky-width="82"
                                    data-sticky-height="40" src="{{ asset('img/sinergi-logo.png') }}">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="header-column justify-content-end">
                    <div class="header-row">
                        <div class="header-nav header-nav-links order-2 order-lg-1">
                            <div
                                class="header-nav-main header-nav-main-square header-nav-main-effect-2 header-nav-main-sub-effect-1">
                                <nav class="collapse">
                                    <ul class="nav nav-pills" id="mainNav">
                                        <li>
                                            <a href="{{ route('home') }}"
                                                class="{{ $currentRoute == 'home' ? 'active' : '' }}">
                                                Home
                                            </a>
                                        </li>
                                        <li>
                                            <a href="{{ route('about-us') }}"
                                                class="{{ $currentRoute == 'about-us' ? 'active' : '' }}">
                                                About Us
                                            </a>
                                        </li>
                                        <li class="dropdown">
                                            <a class="dropdown-item dropdown-toggle {{ in_array($currentRoute, ['solutions.electrical-service', 'solutions.electrical-vehicle-charger', 'solutions.energy-and-environment-management']) ? 'active' : '' }}"
                                                href="#">
                                                Solutions
                                            </a>
                                            <ul class="dropdown-menu">
                                                <li>
                                                    <a class="dropdown-item {{ $currentRoute == 'solutions.electrical-service' ? 'active' : '' }}"
                                                        href="{{ route('solutions.electrical-service') }}">
                                                        Electrical Service
                                                    </a>
                                                </li>
                                                <li>
                                                    <a class="dropdown-item {{ $currentRoute == 'solutions.electrical-vehicle-charger' ? 'active' : '' }}"
                                                        href="{{ route('solutions.electrical-vehicle-charger') }}">
                                                        Electric Vehicle Charger (SPKLU)
                                                    </a>
                                                </li>
                                                <li>
                                                    <a class="dropdown-item {{ $currentRoute == 'solutions.energy-and-environment-management' ? 'active' : '' }}"
                                                        href="{{ route('solutions.energy-and-environment-management') }}">
                                                        Energy And Environment Management
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="dropdown">
                                            <a class="dropdown-item dropdown-toggle {{ in_array($currentRoute, ['products.electrical.relay-protection', 'products.electrical.generator-ats-amf', 'products.electrical.energy-metering', 'products.electrical.scada-system', 'products.electrical.dc-power-supply', 'products.electrical.transformer-oil-purifier', 'products.electrical.distribution-transformer-monitoring', 'products.electrical.temperature-monitoring-ews', 'products.electrical-vehicle-charger.ac-and-small-dc-charger', 'products.electrical-vehicle-charger.ultra-fast-dc-charger', 'products.energy-and-environment-management.energy-meters', 'products.energy-and-environment-management.gas-meters', 'products.energy-and-environment-management.water-meters', 'products.energy-and-environment-management.cyble-nonmag-sensor', 'products.energy-and-environment-management.lora-rtu', 'products.energy-and-environment-management.cctv-and-electronic-security']) ? 'active' : '' }}"
                                                href="#">
                                                Products
                                            </a>
                                            <ul class="dropdown-menu">
                                                <li>
                                                    <a class="dropdown-item {{ in_array($currentRoute, ['products.electrical.relay-protection', 'products.electrical.generator-ats-amf', 'products.electrical.energy-metering', 'products.electrical.scada-system', 'products.electrical.dc-power-supply', 'products.electrical.transformer-oil-purifier', 'products.electrical.distribution-transformer-monitoring', 'products.electrical.temperature-monitoring-ews']) ? 'active' : '' }}"
                                                        href="{{ route('products.electrical.relay-protection') }}">
                                                        Electrical
                                                    </a>
                                                </li>
                                                <li>
                                                    <a class="dropdown-item {{ in_array($currentRoute, ['products.electrical-vehicle-charger.ac-and-small-dc-charger', 'products.electrical-vehicle-charger.ultra-fast-dc-charger']) ? 'active' : '' }}"
                                                        href="{{ route('products.electrical-vehicle-charger.ac-and-small-dc-charger') }}">
                                                        Electric Vehicle Charger (SPKLU)
                                                    </a>
                                                </li>
                                                <li>
                                                    <a class="dropdown-item {{ in_array($currentRoute, ['products.energy-and-environment-management.energy-meters', 'products.energy-and-environment-management.gas-meters', 'products.energy-and-environment-management.water-meters', 'products.energy-and-environment-management.cyble-nonmag-sensor', 'products.energy-and-environment-management.lora-rtu', 'products.energy-and-environment-management.cctv-and-electronic-security']) ? 'active' : '' }}"
                                                        href="{{ route('products.energy-and-environment-management.energy-meters') }}">
                                                        Energy & Environment Management
                                                    </a>
                                                </li>
                                                <li>
                                                    <a class="dropdown-item" href="{{ route('products.water-tank') }}"
                                                        class="{{ $currentRoute == 'products.water-tank' ? 'active' : '' }}">
                                                        Water Tank
                                                    </a>
                                                </li>
                                                <li>
                                                    <a class="dropdown-item"
                                                        href="{{ route('products.test-and-measurement-tools') }}"
                                                        class="{{ $currentRoute == 'products.test-and-measurement-tools' ? 'active' : '' }}">
                                                        Test & Measurement Tools
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="dropdown">
                                            <a class="dropdown-item dropdown-toggle" href="#"
                                                class="{{ in_array($currentRoute, []) ? 'active' : '' }}">
                                                Projects
                                            </a>
                                            <ul class="dropdown-menu">
                                                <li>
                                                    <a class="dropdown-item"
                                                        href="{{ route('projects.relay-protection') }}"
                                                        class="{{ $currentRoute == 'projects.relay-protection' ? 'active' : '' }}">
                                                        Relay Protection
                                                    </a>
                                                </li>
                                                <li>
                                                    <a class="dropdown-item"
                                                        href="{{ route('projects.generator-ats-amf') }}"
                                                        class="{{ $currentRoute == 'projects.generator-ats-amf' ? 'active' : '' }}">
                                                        Generator ATS AMF
                                                    </a>
                                                </li>
                                                <li>
                                                    <a class="dropdown-item" href="{{ route('home') }}">
                                                        Energy Metering
                                                    </a>
                                                </li>
                                                <li>
                                                    <a class="dropdown-item"
                                                        href="{{ route('projects.scada-system') }}"
                                                        class="{{ $currentRoute == 'projects.scada-system' ? 'active' : '' }}">
                                                        Scada System
                                                    </a>
                                                </li>
                                                <li>
                                                    <a class="dropdown-item"
                                                        href="{{ route('projects.dc-power-supply') }}"
                                                        class="{{ $currentRoute == 'projects.dc-power-supply' ? 'active' : '' }}">
                                                        DC power Supply
                                                    </a>
                                                </li>
                                                <li>
                                                    <a class="dropdown-item"
                                                        href="{{ route('projects.transformer-oil-purifier') }}"
                                                        class="{{ $currentRoute == 'projects.transformer-oil-purifier' ? 'active' : '' }}">
                                                        Transformer Oil Purifier
                                                    </a>
                                                </li>
                                                <li>
                                                    <a class="dropdown-item"
                                                        href="{{ route('projects.street-lamps-and-warehouse') }}"
                                                        class="{{ $currentRoute == 'projects.street-lamps-and-warehouse' ? 'active' : '' }}">
                                                        Street Lamps and Warehouse
                                                    </a>
                                                </li>
                                                <li>
                                                    <a class="dropdown-item"
                                                        href="{{ route('projects.cctv-and-metal-detectors') }}"
                                                        class="{{ $currentRoute == 'projects.cctv-and-metal-detectors' ? 'active' : '' }}">
                                                        CCTV and Metal Detectors
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="{{ route('contact-us') }}"
                                                class="{{ $currentRoute == 'contact-us' ? 'active' : '' }}">
                                                Contact Us
                                            </a>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                            <button class="btn header-btn-collapse-nav" data-bs-toggle="collapse"
                                data-bs-target=".header-nav-main nav">
                                <i class="fas fa-bars"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
