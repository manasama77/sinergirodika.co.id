@php
    $currentRoute = Route::currentRouteName();
@endphp
<aside class="sidebar" id="sidebar" data-plugin-sticky
    data-plugin-options="{'minWidth': 991, 'containerSelector': '.container', 'padding': {'top': 110}}">

    <h5 class="font-weight-semi-bold">PROJECT REFERENCE</h5>
    <ul class="nav nav-list flex-column mb-5">
        <li class="nav-item">
            <a class="nav-link {{ $currentRoute == 'projects.relay-protection' ? 'active' : '' }}"
                href="{{ route('projects.relay-protection') }}">
                Relay Protection
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link {{ $currentRoute == 'projects.generator-ats-amf' ? 'active' : '' }}"
                href="{{ route('projects.generator-ats-amf') }}">
                Generator ATS AMF
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link {{ $currentRoute == 'projects.energy-metering' ? 'active' : '' }}"
                href="{{ route('projects.energy-metering') }}">
                Energy Metering
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link {{ $currentRoute == 'projects.scada-system' ? 'active' : '' }}"
                href="{{ route('projects.scada-system') }}">
                Scada System
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link {{ $currentRoute == 'projects.dc-power-supply' ? 'active' : '' }}"
                href="{{ route('projects.dc-power-supply') }}">
                DC power Supply
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link {{ $currentRoute == 'projects.transformer-oil-purifier' ? 'active' : '' }}"
                href="{{ route('projects.transformer-oil-purifier') }}">
                Transformer Oil Purifier
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link {{ $currentRoute == 'projects.street-lamps-and-warehouse' ? 'active' : '' }}"
                href="{{ route('projects.street-lamps-and-warehouse') }}">
                Street Lamps and Warehouse
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link {{ $currentRoute == 'projects.cctv-and-metal-detectors' ? 'active' : '' }}"
                href="{{ route('projects.cctv-and-metal-detectors') }}">
                CCTV and Metal Detectors
            </a>
        </li>
    </ul>

</aside>
