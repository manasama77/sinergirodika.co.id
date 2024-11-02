@extends('template')

@section('css')
    <style>

    </style>
@endsection

@section('content')
    <div class="container py-0 py-lg-5">
        <div class="row pb-4 mb-2">
            <div class="col-md-4 mb-4 mb-md-0 appear-animation animated fadeInRightShorter appear-animation-visible"
                data-appear-animation="fadeInRightShorter" data-appear-animation-delay="300" style="animation-delay: 300ms;">

                <div class="owl-carousel owl-theme nav-inside nav-inside-edge nav-squared nav-with-transparency nav-dark mt-3 owl-loaded owl-drag owl-carousel-init"
                    data-plugin-options="{'items': 1, 'margin': 10, 'loop': true, 'nav': true, 'dots': true, 'autoplay': true, 'autoplayTimeout': 3000}"
                    style="height: auto;">

                    <div class="owl-stage-outer">
                        <div class="owl-stage">
                            <div class="owl-item">
                                <div>
                                    <div class="img-thumbnail border-0 border-radius-0 p-0 d-block">
                                        <img src="{{ asset('img/products/Concrete Base.jpg') }}"
                                            class="img-fluid border-radius-0" alt="">
                                        <p class="text-center font-weight-bold text-4 text-dark mt-1">Concrete Base</p>
                                    </div>
                                </div>
                            </div>
                            <div class="owl-item">
                                <div>
                                    <div class="img-thumbnail border-0 border-radius-0 p-0 d-block">
                                        <img src="{{ asset('img/products/Steel Platform.jpg') }}"
                                            class="img-fluid border-radius-0" alt="">
                                        <p class="text-center font-weight-bold text-4 text-dark mt-1">Steel Platform</p>
                                    </div>
                                </div>
                            </div>
                            <div class="owl-item">
                                <div>
                                    <div class="img-thumbnail border-0 border-radius-0 p-0 d-block">
                                        <img src="{{ asset('img/products/Inside the Tank.jpg') }}"
                                            class="img-fluid border-radius-0" alt="">
                                        <p class="text-center font-weight-bold text-4 text-dark mt-1">Inside the Tank</p>
                                    </div>
                                </div>
                            </div>
                            <div class="owl-item">
                                <div>
                                    <div class="img-thumbnail border-0 border-radius-0 p-0 d-block">
                                        <img src="{{ asset('img/products/DN100 Outlet.jpg') }}"
                                            class="img-fluid border-radius-0" alt="">
                                        <p class="text-center font-weight-bold text-4 text-dark mt-1">Nozzle (Custom)</p>
                                    </div>
                                </div>
                            </div>
                            <div class="owl-item">
                                <div>
                                    <div class="img-thumbnail border-0 border-radius-0 p-0 d-block">
                                        <img src="{{ asset('img/products/DN150.jpg') }}" class="img-fluid border-radius-0"
                                            alt="">
                                        <p class="text-center font-weight-bold text-4 text-dark mt-1">Nozzle (Custom)</p>
                                    </div>
                                </div>
                            </div>
                            <div class="owl-item">
                                <div>
                                    <div class="img-thumbnail border-0 border-radius-0 p-0 d-block">
                                        <img src="{{ asset('img/products/DN200.jpg') }}" class="img-fluid border-radius-0"
                                            alt="">
                                        <p class="text-center font-weight-bold text-4 text-dark mt-1">Nozzle (Custom)</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="owl-nav"><button type="button" role="presentation" class="owl-prev"></button><button
                            type="button" role="presentation" class="owl-next disabled"></button></div>
                    <div class="owl-dots disabled"></div>
                </div>

            </div>
            <div class="col-md-8">
                <h2 class="font-weight-extra-normal text-5 mb-0">
                    <strong class="font-weight-extra-bold">Water </strong>Tank
                </h2>

                <div class="row">
                    <div class="col-sm-12 col-md-6">
                        <p class="font-weight-bold text-2 mb-0 text-dark">
                            Zincalume Steel Liner Water Tank
                        </p>
                        <p class="font-weight-normal text-2 mb-0 text-dark">
                            Australian Technology<br />
                            Capacity 18.000 to 2 mio litter<br />
                            Customed diameter and hight<br />
                            Local Content TKDN 34.89%<br />
                            Long life time (10 years warranty)<br />
                            Harsh condition earth quake and wind resistance 317kmh<br />
                            Easy fast fabrication, delivery and installation<br />
                            Concrete Base or Steel Platform<br />
                            Permanent/ Temporary Installation
                        </p>

                        <p class="font-weight-bold text-2 mb-0 mt-3 text-dark">
                            Application
                        </p>
                        <ol class="font-weight-normal text-2 mb-0 text-dark" style="padding-left: 1rem;">
                            <li>Potable Water (Drinking water)</li>
                            <li>Raw Water (Deep well/ river)</li>
                            <li>Permeate Water (RO)</li>
                            <li>Hypersaline</li>
                            <li>Waste water / Sewage</li>
                            <li>Aquaculture (Fishery)</li>
                            <li>Agriculture</li>
                            <li>Disaster Quick Respond Facility</li>
                        </ol>
                    </div>
                    <div class="col-sm-12 col-md-6">
                        <p class="font-weight-bold text-2 mb-0 text-dark">
                            Inside
                        </p>
                        <ol class="font-weight-normal text-2 mb-0 text-dark" style="padding-left: 1rem;">
                            <li>Standard PVC Liner 700gsm</li>
                            <li>Puncture Resistance 1022 N</li>
                            <li>Welding strength - 57 N/mm</li>
                            <li>AS4020 potable water</li>
                            <li>Temperature up to 60 degree</li>
                        </ol>

                        <p class="font-weight-bold text-2 mb-0 mt-3 text-dark">
                            Customed Nozzel
                        </p>
                        <ol class="font-weight-normal text-2 mb-0 text-dark" style="padding-left: 1rem;">
                            <li>DN100 Outlet</li>
                            <li>DN150 from Voltex</li>
                            <li>DN200 Outlet</li>
                        </ol>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
