@extends('template')

@section('css')
    <style>
        table>tbody>tr>td {
            font-size: 0.7rem;
        }

        .table-sm>:not(caption)>*>* {
            padding: 0rem 0rem;
        }
    </style>
@endsection

@section('content')
    <div class="container pt-3 pb-5">
        <div class="row pt-2">
            <div class="col-lg-3 position-relative">
                @include('pages.products.aside')
            </div>
            <div class="col-lg-9">

                <h2 class="font-weight-extra-normal text-7 mb-3">
                    <strong class="font-weight-extra-bold">CCTV & Electronic Security</strong>
                </h2>

                <div class="row">
                    <div class="col-sm-12 col-md-4 mb-1">
                        <div class="d-flex justify-content-center text-center">
                            <div>
                                <img src="{{ asset('img/Indoor IP camera.png') }}" alt="Indoor IP camera"
                                    class="mb-0 img-fluid" />
                                <p class="text-3 mb-3">Indoor IP camera</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-4 mb-1">
                        <div class="d-flex justify-content-center text-center">
                            <div>
                                <img src="{{ asset('img/Indoor-IP-Camera.png') }}" alt="Indoor IP camera"
                                    class="mb-0 img-fluid" />
                                <p class="text-3 mb-3">Indoor IP camera</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-4 mb-1">
                        <div class="d-flex justify-content-center text-center">
                            <div>
                                <img src="{{ asset('img/Network-Video-Recorder.jpg') }}" alt="Network Video Recorder"
                                    class="mb-0 img-fluid" />
                                <p class="text-3 mb-3">Network Video Recorder</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-4 mb-1">
                        <div class="d-flex justify-content-center text-center">
                            <div>
                                <img src="{{ asset('img/ACCESS CONTROL.png') }}" alt="ACCESS CONTROL"
                                    class="mb-0 img-fluid" />
                                <p class="text-3 mb-3">ACCESS CONTROL</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-4 mb-1">
                        <div class="d-flex justify-content-center text-center">
                            <div>
                                <img src="{{ asset('img/GUARD TOUR PATROL.png') }}" alt="GUARD TOUR PATROL"
                                    class="mb-0 img-fluid" />
                                <p class="text-3 mb-3">GUARD TOUR PATROL</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-4 mb-1">
                        <div class="d-flex justify-content-center text-center">
                            <div>
                                <img src="{{ asset('img/TRIPOD & BARRIER GATE.png') }}" alt="TRIPOD & BARRIER GATE"
                                    class="mb-0 img-fluid" />
                                <p class="text-3 mb-3">TRIPOD & BARRIER GATE</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-4 mb-1">
                        <div class="d-flex justify-content-center text-center">
                            <div>
                                <img src="{{ asset('img/BURGLAR ALARM.jpg') }}" alt="BURGLAR ALARM"
                                    class="mb-0 img-fluid" />
                                <p class="text-3 mb-3">BURGLAR ALARM</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-4 mb-1">
                        <div class="d-flex justify-content-center text-center">
                            <div>
                                <img src="{{ asset('img/CONVEX MIRROR.png') }}" alt="CONVEX MIRROR"
                                    class="mb-0 img-fluid" />
                                <p class="text-3 mb-3">CONVEX MIRROR</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-4 mb-1">
                        <div class="d-flex justify-content-center text-center">
                            <div>
                                <img src="{{ asset('img/XRAY AND METAL DETECTOR.png') }}" alt="XRAY AND METAL DETECTOR"
                                    class="mb-0 img-fluid" />
                                <p class="text-3 mb-3">XRAY AND METAL DETECTOR</p>
                            </div>
                        </div>
                    </div>

                </div>

            </div>

        </div>
    </div>
@endsection
