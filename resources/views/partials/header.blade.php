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
                                            <a href="{{ route('home') }}">
                                                Home
                                            </a>
                                        </li>
                                        <li>
                                            <a href="{{ route('home') }}">
                                                About Us
                                            </a>
                                        </li>
                                        <li class="dropdown">
                                            <a class="dropdown-item dropdown-toggle" href="#">
                                                Solutions
                                            </a>
                                            <ul class="dropdown-menu">
                                                <li>
                                                    <a class="dropdown-item"
                                                        href="{{ route('solutions.electrical-service') }}">
                                                        Electrical Service
                                                    </a>
                                                </li>
                                                <li>
                                                    <a class="dropdown-item"
                                                        href="{{ route('solutions.electrical-vehicle-charger') }}">
                                                        Electric Vehicle Charger (SPKLU)
                                                    </a>
                                                </li>
                                                <li>
                                                    <a class="dropdown-item"
                                                        href="{{ route('solutions.energy-and-environment-management') }}">
                                                        Energy And Environment Management
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="dropdown">
                                            <a class="dropdown-item dropdown-toggle" href="#">
                                                Products
                                            </a>
                                            <ul class="dropdown-menu">
                                                <li>
                                                    <a class="dropdown-item" href="{{ route('products.electrical') }}">
                                                        Electrical
                                                    </a>
                                                </li>
                                                <li>
                                                    <a class="dropdown-item"
                                                        href="{{ route('products.electrical-vehicle-charger') }}">
                                                        Electric Vehicle Charger (SPKLU)
                                                    </a>
                                                </li>
                                                <li>
                                                    <a class="dropdown-item"
                                                        href="{{ route('products.energy-and-environment-management') }}">
                                                        Energy & Environment Management
                                                    </a>
                                                </li>
                                                <li>
                                                    <a class="dropdown-item" href="{{ route('products.water-tank') }}">
                                                        Water Tank
                                                    </a>
                                                </li>
                                                <li>
                                                    <a class="dropdown-item"
                                                        href="{{ route('products.test-and-measurement-tools') }}">
                                                        Test & Measurement Tools
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="dropdown">
                                            <a class="dropdown-item dropdown-toggle" href="#">
                                                Projects
                                            </a>
                                            <ul class="dropdown-menu">
                                                <li>
                                                    <a class="dropdown-item"
                                                        href="{{ route('projects.relay-protection') }}">
                                                        Relay Protection
                                                    </a>
                                                </li>
                                                <li>
                                                    <a class="dropdown-item"
                                                        href="{{ route('products.electrical-vehicle-charger') }}">
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
                                                        href="{{ route('products.electrical-vehicle-charger') }}">
                                                        Scada System
                                                    </a>
                                                </li>
                                                <li>
                                                    <a class="dropdown-item"
                                                        href="{{ route('products.electrical-vehicle-charger') }}">
                                                        DC power Supply
                                                    </a>
                                                </li>
                                                <li>
                                                    <a class="dropdown-item"
                                                        href="{{ route('products.electrical-vehicle-charger') }}">
                                                        Transformer Oil Purifier
                                                    </a>
                                                </li>
                                                <li>
                                                    <a class="dropdown-item"
                                                        href="{{ route('products.electrical-vehicle-charger') }}">
                                                        Street Lamps and Warehouse
                                                    </a>
                                                </li>
                                                <li>
                                                    <a class="dropdown-item"
                                                        href="{{ route('products.electrical-vehicle-charger') }}">
                                                        CCTV and Metal Detectors
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="{{ route('home') }}">
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
