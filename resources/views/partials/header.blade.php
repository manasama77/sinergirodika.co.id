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
                                            <a href="{{ route('home') }}"
                                                class="{{ $currentRoute == 'about-us' ? 'active' : '' }}">
                                                About Us
                                            </a>
                                        </li>
                                        <li class="dropdown">
                                            <a class="dropdown-item dropdown-toggle" href="#"
                                                class="{{ in_array($currentRoute, ['solutions.electrical-service', 'solutions.electrical-vehicle-charger', 'solutions.energy-and-environment-management']) ? 'active' : '' }}">
                                                Solutions
                                            </a>
                                            <ul class="dropdown-menu">
                                                <li>
                                                    <a class="dropdown-item"
                                                        href="{{ route('solutions.electrical-service') }}"
                                                        class="{{ $currentRoute == 'solutions.electrical-service' ? 'active' : '' }}">
                                                        Electrical Service
                                                    </a>
                                                </li>
                                                <li>
                                                    <a class="dropdown-item"
                                                        href="{{ route('solutions.electrical-vehicle-charger') }}"
                                                        class="{{ $currentRoute == 'solutions.electrical-vehicle-charger' ? 'active' : '' }}">
                                                        Electric Vehicle Charger (SPKLU)
                                                    </a>
                                                </li>
                                                <li>
                                                    <a class="dropdown-item"
                                                        href="{{ route('solutions.energy-and-environment-management') }}"
                                                        class="{{ $currentRoute == 'solutions.energy-and-environment-management' ? 'active' : '' }}">
                                                        Energy And Environment Management
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="dropdown">
                                            <a class="dropdown-item dropdown-toggle" href="#"
                                                class="{{ in_array($currentRoute, ['products.electrical', 'products.electrical-vehicle-charger', 'products.energy-and-environment-management', 'products.water-tank', 'products.test-and-measurement-tools']) ? 'active' : '' }}">
                                                Products
                                            </a>
                                            <ul class="dropdown-menu">
                                                <li>
                                                    <a class="dropdown-item" href="{{ route('products.electrical') }}"
                                                        class="{{ $currentRoute == 'products.electrical' ? 'active' : '' }}">
                                                        Electrical
                                                    </a>
                                                </li>
                                                <li>
                                                    <a class="dropdown-item"
                                                        href="{{ route('products.electrical-vehicle-charger') }}"
                                                        class="{{ $currentRoute == 'products.electrical-vehicle-charger' ? 'active' : '' }}">
                                                        Electric Vehicle Charger (SPKLU)
                                                    </a>
                                                </li>
                                                <li>
                                                    <a class="dropdown-item"
                                                        href="{{ route('products.energy-and-environment-management') }}"
                                                        class="{{ $currentRoute == 'products.energy-and-environment-management' ? 'active' : '' }}">
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
                                                class="{{ in_array($currentRoute, ['products.electrical', 'products.electrical-vehicle-charger', 'products.energy-and-environment-management', 'products.water-tank', 'products.test-and-measurement-tools']) ? 'active' : '' }}">
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
                                                    <a class="dropdown-item"
                                                        href="{{ route('products.electrical-vehicle-charger') }}">
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
