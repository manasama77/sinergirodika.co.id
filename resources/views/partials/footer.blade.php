@php
$marginTop = '50px';
$currentRoute = Route::currentRouteName();

if ($currentRoute == 'home') {
$marginTop = '0px';
}
@endphp
<footer id="footer" class="bg-color-sinergi border-top-0" style="margin-top: {{ $marginTop }}">
    @if ($currentRoute != 'contact-us')
    <div class="container pt-1">
        <div class="row py-5 text-center text-lg-start">
            <div class="col-sm-12 col-lg-4">
                <img src="{{ asset('img/sinergi-logo.png') }}" alt="Logo" class="pe-lg-5 mb-4 mb-lg-0 logo-footer-custom img-fluid" style="max-width: 300px;">
                <p class="text-pt-footer">PT SINERGI RODIKA UTAMA</p>
                <p class="text-pt-footer-small">Substation and Electrical Services, Electric Vehicle Charger and Energy & Environment Management</p>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-4">
                <div class="feature-box feature-box-style-2 d-block d-lg-flex mb-4 mb-lg-0 justify-content-center">
                    <div class="feature-box-icon">
                        <i class="icon-location-pin icons text-color-light"></i>
                    </div>
                    <div class="feature-box-info ps-1">
                        <h5 class="mb-0 opacity-7 font-weight-light">ADDRESS</h5>
                        <p class="text-color-light font-weight-semibold mb-0">
                            Jl. Jalur Sutera Timur Kav. 6A No. 16 Alam Sutera, Tangerang 15144
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-3">
                <div class="feature-box feature-box-style-2 float-lg-start d-block d-lg-flex mb-4 mb-lg-3">
                    <div class="feature-box-icon">
                        <i class="icon-call-out icons text-color-light"></i>
                    </div>
                    <div class="feature-box-info ps-1">
                        <h5 class="mb-0 opacity-7 font-weight-light">CALL US NOW</h5>
                        <a href="tel:02122352886" class="text-color-light font-weight-semibold text-decoration-none">021-22352886</a>
                    </div>
                </div>
                <div class="feature-box feature-box-style-2 float-lg-start d-block d-lg-flex mb-4 mb-lg-3">
                    <div class="feature-box-icon">
                        <i class="icon-envelope icons text-color-light"></i>
                    </div>
                    <div class="feature-box-info ps-1">
                        <h5 class="mb-0 opacity-7 font-weight-light">EMAIL NOW</h5>
                        <a href="mailto:sales@sinergirodika.co.id" class="text-color-light font-weight-semibold text-decoration-none">sales@sinergirodika.co.id</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endif
    <div class="footer-copyright footer-copyright-style-2">
        <div class="container py-1">
            <div class="row">
                <div class="col-lg-12 d-flex align-items-center justify-content-center justify-content-lg-start mb-4 mb-lg-0 pt-4 pt-lg-0">
                    <p>© Copyright Sinergi Rodika {{ date('Y') }}.</p>
                </div>
            </div>
        </div>
    </div>
</footer>
