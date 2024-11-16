@extends('template')

@section('content')
    <div class="container">
        <div class="row mt-0 mt-md-3">
            <div class="col">
                <div class="row">
                    <div class="col-lg-4">
                        <h4 class="mb-4">About Us</h4>
                        <div class="tabs tabs-vertical tabs-right tabs-navigation tabs-navigation-simple">
                            <ul class="nav nav-tabs col-sm-3">
                                <li class="nav-item">
                                    <a class="nav-link active" href="#tabLineOfBusiness" data-bs-toggle="tab">
                                        Line of Business
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#tabVisionMission" data-bs-toggle="tab">
                                        Vision & Mission
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#tabTheManagementAddress" data-bs-toggle="tab">
                                        The Management Address
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#tabCertificates" data-bs-toggle="tab">
                                        Certificates
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#TabSBUJPTLIUJPTLSBUJK" data-bs-toggle="tab">
                                        SBUJPTL, IUJPTL, SBUJK
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#tabSMK3CSMSANDAHLIK3" data-bs-toggle="tab">
                                        SMK3 ,CSMS AND AHLI K3
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <div class="tab-pane tab-pane-navigation active" id="tabLineOfBusiness" style="min-height: 57.1vh;">
                            <h2 class="font-weight-extra-normal text-5 mb-0">
                                <strong class="font-weight-extra-bold">LINE </strong>OF BUSINESS
                            </h2>
                            <p class="text-2 text-dark mb-1">PT SINERGI RODIKA UTAMA is Mechanical & Electrical contractors
                                and Supplier in a wide variety
                                of commercial and industrial projects :</p>
                            <ul class="text-2 text-dark mb-1">
                                <li>
                                    <a href="{{ route('solutions.electrical-service') }}" class="font-weight-bold">
                                        Substation, Backup power supply, Scada and Automation,
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ route('solutions.electrical-vehicle-charger') }}" class="font-weight-bold">
                                        Electric Vehicle Charger (SPKLU) and
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ route('solutions.energy-and-environment-management') }}"
                                        class="font-weight-bold">
                                        Energy (Electricity, water and gas) & Environment Management.
                                    </a>
                                </li>
                            </ul>
                            <p class="text-2 text-dark mb-1">PT SINERGI RODIKA UTAMA has become an proven partner of PT PLN
                                (persero) and other commercial
                                industrial sectors handling Substation, Transmission and Distribution projects since 2011
                            </p>
                            <p class="text-2 text-dark mb-1">Our commitment to professional excellence has enabled us to
                                achieve, often even exceeds, our
                                client expectations. With efficient utilization of human and technical resources has been
                                proven to complete projects within the designated time frame and budgets with speed, safety,
                                cost effectiveness, and professional technicians</p>
                        </div>
                        <div class="tab-pane tab-pane-navigation" id="tabVisionMission" style="min-height: 57.1vh;">
                            <h2 class="font-weight-extra-normal text-5 mb-0">
                                <strong class="font-weight-extra-bold">VISION</strong>
                            </h2>
                            <p class="text-2 text-dark mb-1">“To become a professional, competitive and competent company in
                                the field of electrical and
                                mechanical supply and services with the best and accountable services”.</p>

                            <hr />

                            <h2 class="font-weight-extra-normal text-5 mb-0">
                                <strong class="font-weight-extra-bold">MISSION</strong>
                            </h2>
                            <p class="text-2 text-dark mb-1">To provide a good product and Service with excellent technical
                                support
                                Being a good corporate citizen must be given the highest priority.
                                Take a mutual understanding and interest among vendors and clients Developing a business
                                with an efficient, effective and targeted process</p>
                        </div>
                        <div class="tab-pane tab-pane-navigation" id="tabTheManagementAddress">
                            <h2 class="font-weight-extra-normal text-5 mb-0">
                                <strong class="font-weight-extra-bold">THE </strong>MANAGEMENT
                            </h2>
                            <div class="row pb-4 mb-2">
                                <div class="col-sm-6 mb-4 mb-lg-0 appear-animation"
                                    data-appear-animation="fadeInRightShorter">
                                    <span class="thumb-info thumb-info-hide-wrapper-bg bg-transparent border-radius-0">
                                        <span class="thumb-info-wrapper border-radius-0">
                                            <div>
                                                <img src="{{ asset('img/team.jpg') }}" class="img-fluid border-radius-0"
                                                    alt="">
                                                <span class="thumb-info-title">
                                                    <span class="thumb-info-inner">Mr. Fathoni</span>
                                                    <span class="thumb-info-type">Commissioner</span>
                                                </span>
                                            </div>
                                        </span>
                                    </span>
                                </div>
                                <div class="col-sm-6 mb-4 mb-lg-0 appear-animation"
                                    data-appear-animation="fadeInRightShorter" data-appear-animation-delay="200">
                                    <span class="thumb-info thumb-info-hide-wrapper-bg bg-transparent border-radius-0">
                                        <span class="thumb-info-wrapper border-radius-0">
                                            <div>
                                                <img src="{{ asset('img/team.jpg') }}" class="img-fluid border-radius-0"
                                                    alt="">
                                                <span class="thumb-info-title">
                                                    <span class="thumb-info-inner">Mr. Ikman Tri Putra</span>
                                                    <span class="thumb-info-type">Director</span>
                                                </span>
                                            </div>
                                        </span>
                                    </span>
                                </div>
                            </div>

                            <hr />

                            <h2 class="font-weight-extra-normal text-5 mb-0">
                                <strong class="font-weight-extra-bold">ADDRESS</strong>
                            </h2>
                            <table class="table table-borderless table-sm">
                                <tbody>
                                    <tr>
                                        <td class="text-dark">Office</td>
                                        <td class="text-dark">:</td>
                                        <td class="text-dark">Ruko Renata, Jl. Jalur Sutera Timur Kav. 6A No. 16 Alam Sutera
                                            Tangerang BANTEN 15144</td>
                                    </tr>
                                    <tr>
                                        <td class="text-dark">Telp/Fax</td>
                                        <td class="text-dark">:</td>
                                        <td class="text-dark">
                                            <a href="tel:02122352886">
                                                021 22352886
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-dark">Email</td>
                                        <td class="text-dark">:</td>
                                        <td class="text-dark">
                                            <a href="mailto:sinergi.rodika@gmail.com">
                                                sinergi.rodika@gmail.com
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-dark">Website</td>
                                        <td class="text-dark">:</td>
                                        <td class="text-dark">
                                            <a href="https://sinergirodika.co.id">
                                                www.sinergirodika.co.id
                                            </a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="tab-pane tab-pane-navigation" id="tabCertificates" style="min-height: 57.1vh;">
                            <h2 class="font-weight-extra-normal text-5 mb-0">
                                <strong class="font-weight-extra-bold">Certificates</strong>
                            </h2>
                            <ol type="A" class="text-2">
                                <li class="font-weight-bold text-dark m-0">
                                    Akta Pendirian PT
                                </li>
                                <table class="table table-borderless table-sm table-certificate">
                                    <tbody>
                                        <tr>
                                            <th style="width: 120px;">Nomor Akta</th>
                                            <th style="width: 10px;">:</th>
                                            <th>20</th>
                                        </tr>
                                        <tr>
                                            <th style="width: 120px;">Tanggal</th>
                                            <th style="width: 10px;">:</th>
                                            <th>23 February 2011</th>
                                        </tr>
                                        <tr>
                                            <th style="width: 120px;">Nama Notaris</th>
                                            <th style="width: 10px;">:</th>
                                            <th>MIRA OKTARIA, S.H, MKn</th>
                                        </tr>
                                    </tbody>
                                </table>

                                <li class="font-weight-bold text-dark m-0">Nomor Induk Berusaha (NIB)</li>
                                <table class="table table-borderless table-sm table-certificate">
                                    <tbody>
                                        <tr>
                                            <th style="width: 120px;">Nomor</th>
                                            <th style="width: 10px;">:</td>
                                            <th>9120000210357</td>
                                        </tr>
                                        <tr>
                                            <th style="width: 120px;">Tanggal</th>
                                            <th style="width: 10px;">:</td>
                                            <th>03 June 2022</td>
                                        </tr>
                                        <tr>
                                            <th style="width: 120px;">Bidang Usaha</th>
                                            <th style="width: 10px;">:</td>
                                            <th>Pengadaan Barang dan Jasa Mekanikal Elektrikal</td>
                                        </tr>
                                        <tr>
                                            <th style="width: 120px;">Issued by</th>
                                            <th style="width: 10px;">:</td>
                                            <th>Balai Sertifikasi Elektronik</td>
                                        </tr>
                                    </tbody>
                                </table>

                                <li class="font-weight-bold text-dark">
                                    Sertifikat ISO 9001
                                </li>
                                <table class="table table-borderless table-sm table-certificate">
                                    <tbody>
                                        <tr>
                                            <th style="width: 120px;">No Certificate</th>
                                            <th style="width: 10px;">:</td>
                                            <th>DTQMS1057</td>
                                        </tr>
                                        <tr>
                                            <th style="width: 120px;">Date</th>
                                            <th style="width: 10px;">:</td>
                                            <th>11 Desember 2017</td>
                                        </tr>
                                        <tr>
                                            <th style="width: 120px;">Valid until</th>
                                            <th style="width: 10px;">:</td>
                                            <th>10 Desember 2027</td>
                                        </tr>
                                        <tr>
                                            <th style="width: 120px;">Issued by</th>
                                            <th style="width: 10px;">:</td>
                                            <th>Define Equality Veritas</td>
                                        </tr>
                                    </tbody>
                                </table>

                                <li class="font-weight-bold text-dark">
                                    FINANCE RECOGNATION BY DNB
                                </li>
                                <p class="text-dark mb-1">
                                    D&B Rating 3A3<br />
                                    Financial Strength 3A Based on tangible net
                                    worth of IDR 3,600,000,000 to IDR 17,999,999,999
                                    Risk Definition 3 Sufficient capacity for meeting payment liabilities
                                </p>
                                <table class="table table-borderless table-sm table-certificate">
                                    <tbody>
                                        <tr>
                                            <th style="width: 120px;">Valid until</th>
                                            <th style="width: 10px;">:</th>
                                            <th>30 June 2025</th>
                                        </tr>
                                        <tr>
                                            <th style="width: 120px;">Issued by</th>
                                            <th style="width: 10px;">:</th>
                                            <th>Dun & Bradstreet (DnB)</th>
                                        </tr>
                                    </tbody>
                                </table>
                            </ol>
                        </div>
                        <div class="tab-pane tab-pane-navigation" id="TabSBUJPTLIUJPTLSBUJK" style="min-height: 57.1vh;">
                            <h2 class="font-weight-extra-normal text-5 mb-0">
                                <strong class="font-weight-extra-bold">SBUJPTL, </strong>IUJPTL, SBUJK
                            </h2>
                            <ol type="A" class="text-2">
                                <li class="font-weight-bold text-dark">
                                    Sertifikat Badan Usaha Jasa Penunjang Tenaga Listrik (SBUJPTL)
                                </li>
                                <table class="table table-borderless table-sm table-certificate">
                                    <tbody>
                                        <tr>
                                            <th style="width: 130px;">No Certificate</th>
                                            <th style="width: 10px;">:</th>
                                            <th>329.1.8.211.M.3C.3674.B20</th>
                                        </tr>
                                        <tr>
                                            <th>No Registration</th>
                                            <th>:</th>
                                            <th>0329.02.B20</th>
                                        </tr>
                                        <tr>
                                            <th>Date</th>
                                            <th>:</th>
                                            <th>25 Februari 2020</th>
                                        </tr>
                                        <tr>
                                            <th>Valid until</th>
                                            <th>:</th>
                                            <th>25 Februari 2025</th>
                                        </tr>
                                        <tr>
                                            <th>Issued by</th>
                                            <th>:</th>
                                            <th>PT Sertifikasi Badan Usaha Mandiri</th>
                                        </tr>
                                        <tr>
                                            <th>Jenis Usaha</th>
                                            <th>:</th>
                                            <th>Pembangunan dan Pemasangan Instalasi Penyediaan Tenaga Listrik</th>
                                        </tr>
                                        <tr>
                                            <th>Bidang</th>
                                            <th>:</th>
                                            <th>Transmisi Tenaga Listrik</th>
                                        </tr>
                                        <tr>
                                            <th>Sub Bidang</th>
                                            <th>:</th>
                                            <th>Gardu Induk</th>
                                        </tr>
                                        <tr>
                                            <th>Kualifikasi</th>
                                            <th>:</th>
                                            <th>Menengah</th>
                                        </tr>
                                    </tbody>
                                </table>

                                <li class="font-weight-bold text-dark">Sertifikat Ijin Usaha Jasa Penunjang Tenaga Listrik
                                    (IUJPTL)</li>
                                <table class="table table-borderless table-sm table-certificate">
                                    <tbody>
                                        <tr>
                                            <th style="width: 120px;">No Certificate</th>
                                            <th style="width: 10px;">:</th>
                                            <th>671.1/04-DESDM.IUJPTL/I/2023</th>
                                        </tr>
                                        <tr>
                                            <th style="width: 120px;">Date</th>
                                            <th style="width: 10px;">:</th>
                                            <th>20 Januari 2023</th>
                                        </tr>
                                        <tr>
                                            <th style="width: 120px;">Valid until</th>
                                            <th style="width: 10px;">:</th>
                                            <th>20 Januari 2028</th>
                                        </tr>
                                        <tr>
                                            <th style="width: 120px;">Issued by</th>
                                            <th style="width: 10px;">:</th>
                                            <th>Dinas Energi dan Sumber Daya Mineral Provinsi Banten</th>
                                        </tr>
                                        <tr>
                                            <th style="width: 120px;">Jenis Usaha</th>
                                            <th style="width: 10px;">:</th>
                                            <th>Pembangunan dan Pemasangan Instalasi Penyediaan Tenaga Listrik</th>
                                        </tr>
                                        <tr>
                                            <th style="width: 120px;">Bidang</th>
                                            <th style="width: 10px;">:</th>
                                            <th>Transmisi Tenaga Listrik</th>
                                        </tr>
                                        <tr>
                                            <th style="width: 120px;">Sub Bidang</th>
                                            <th style="width: 10px;">:</th>
                                            <th>Gardu Induk</th>
                                        </tr>
                                        <tr>
                                            <th style="width: 120px;">Kualifikasi</th>
                                            <th style="width: 10px;">:</th>
                                            <th>Menengah</th>
                                        </tr>
                                    </tbody>
                                </table>

                                <li class="font-weight-bold text-dark">
                                    Sertifikat Badan Usaha Konstruksi (SBUJK)
                                </li>
                                <table class="table table-borderless table-sm table-certificate">
                                    <tbody>
                                        <tr>
                                            <th style="width: 120px;">No Certificate</th>
                                            <th style="width: 10px;">:</th>
                                            <th>PB-UMKU : 912000021035700070001</th>
                                        </tr>
                                        <tr>
                                            <th style="width: 120px;">Date</th>
                                            <th style="width: 10px;">:</th>
                                            <th>12 September 2023</th>
                                        </tr>
                                        <tr>
                                            <th style="width: 120px;">Valid until</th>
                                            <th style="width: 10px;">:</th>
                                            <th>11 September 2026</th>
                                        </tr>
                                        <tr>
                                            <th style="width: 120px;">Issued by</th>
                                            <th style="width: 10px;">:</th>
                                            <th>Balai Sertifikasi Elektronik</th>
                                        </tr>
                                        <tr>
                                            <th style="width: 120px;">Jenis Usaha</th>
                                            <th style="width: 10px;">:</th>
                                            <th>Pekerjaan Konstruksi</th>
                                        </tr>
                                        <tr>
                                            <th style="width: 120px;">Bidang</th>
                                            <th style="width: 10px;">:</th>
                                            <th>Konstruksi</th>
                                        </tr>
                                        <tr>
                                            <th style="width: 120px;">Sub Bidang</th>
                                            <th style="width: 10px;">:</th>
                                            <th>Konstruksi Bangunan Sipil Elektrikal dan Konstruksi Gedung Lainnya</th>
                                        </tr>
                                        <tr>
                                            <th style="width: 120px;">Kualifikasi</th>
                                            <th style="width: 10px;">:</th>
                                            <th>Kecil</th>
                                        </tr>
                                    </tbody>
                                </table>
                            </ol>
                        </div>
                        <div class="tab-pane tab-pane-navigation" id="tabSMK3CSMSANDAHLIK3" style="min-height: 57.1vh;">
                            <h2 class="font-weight-extra-normal text-5 mb-0">
                                <strong class="font-weight-extra-bold">SMK3, </strong>CSMS, AHLI K3
                            </h2>
                            <div class="row">
                                <div class="col-sm-12 col-md-8">
                                    <ol type="A" class="text-2">
                                        <li class="font-weight-bold text-dark">
                                            Sertifikat Manajemen Keselamatan dan Kesehatan Kerja (SMK3)
                                        </li>
                                        <table class="table table-borderless table-sm table-certificate">
                                            <tbody>
                                                <tr>
                                                    <th style="width: 130px;">No Certificate</th>
                                                    <th style="width: 10px;">:</th>
                                                    <th>SMK3.2020.MAL.SK.968</th>
                                                </tr>
                                                <tr>
                                                    <th>Date</th>
                                                    <th>:</th>
                                                    <th>09 June 2023</th>
                                                </tr>
                                                <tr>
                                                    <th>Valid until</th>
                                                    <th>:</th>
                                                    <th>09 June 2026</th>
                                                </tr>
                                                <tr>
                                                    <th>Issued by</th>
                                                    <th>:</th>
                                                    <th>Kementerian Ketenagakerjaan</th>
                                                </tr>
                                            </tbody>
                                        </table>

                                        <li class="font-weight-bold text-dark">SERTIFIKAT CONTRACTOR SAFETY MANAGEMENT
                                            SYSTEM
                                            (CSMS)</li>
                                        <table class="table table-borderless table-sm table-certificate">
                                            <tbody>
                                                <tr>
                                                    <th style="width: 130px;">No Certificate</th>
                                                    <th style="width: 10px;">:</td>
                                                    <th>001402/DIST/CSMS/IX/2022</td>
                                                </tr>
                                                <tr>
                                                    <th>Date</th>
                                                    <th>:</td>
                                                    <th>23 September 2022</td>
                                                </tr>
                                                <tr>
                                                    <th>CSMS Criteria</th>
                                                    <th>:</td>
                                                    <th>Sangat Tinggi</td>
                                                </tr>
                                                <tr>
                                                    <th>Valid until</th>
                                                    <th>:</td>
                                                    <th>24 September 2025</td>
                                                </tr>
                                                <tr>
                                                    <th>Issued by</th>
                                                    <th>:</td>
                                                    <th>PT PLN (Persero) UP3 Serpong</td>
                                                </tr>
                                            </tbody>
                                        </table>

                                        <li class="font-weight-bold text-dark">AHLI K3 UMUM</li>
                                        <table class="table table-borderless table-sm table-certificate">
                                            <tbody>
                                                <tr>
                                                    <th style="width: 120px;">No Certificate</th>
                                                    <th style="width: 10px;">:</td>
                                                    <th>0053050923/Q-AK3U/36/IX/2023</td>
                                                </tr>
                                                <tr>
                                                    <th style="width: 120px;">Date</th>
                                                    <th style="width: 10px;">:</td>
                                                    <th>5 September 2023</td>
                                                </tr>
                                                <tr>
                                                    <th style="width: 120px;">Atas Nama</th>
                                                    <th style="width: 10px;">:</td>
                                                    <th>Ansar</td>
                                                </tr>
                                                <tr>
                                                    <th style="width: 120px;">Valid until</th>
                                                    <th style="width: 10px;">:</td>
                                                    <th>5 September 2026</td>
                                                </tr>
                                            </tbody>
                                        </table>

                                        <li class="font-weight-bold text-dark">AHLI K3 LISTRIK</li>
                                        <table class="table table-borderless table-sm table-certificate">
                                            <tbody>
                                                <tr>
                                                    <th style="width: 120px;">No Certificate</th>
                                                    <th style="width: 10px;">:</th>
                                                    <th>5/1116/AS.02.04/III/2020</th>
                                                </tr>
                                                <tr>
                                                    <th style="width: 120px;">Date</th>
                                                    <th style="width: 10px;">:</th>
                                                    <th>13 March 2020</th>
                                                </tr>
                                                <tr>
                                                    <th style="width: 120px;">Atas Nama</th>
                                                    <th style="width: 10px;">:</th>
                                                    <th>Supratman</th>
                                                </tr>
                                                <tr>
                                                    <th style="width: 120px;">Valid until</th>
                                                    <th style="width: 10px;">:</th>
                                                    <th>21 March 2026</th>
                                                </tr>
                                            </tbody>
                                        </table>

                                    </ol>
                                </div>
                                <div class="col-sm-12 col-md-4 p-0">
                                    <div class="d-flex justify-content-center">
                                        <img src="{{ asset('img/PT Sinergi Rodika Field Team.jpg') }}"
                                            class="img-fluid border-radius-0" alt="PT Sinergi Rodika Field Team">
                                    </div>
                                    <h4 class="text-2 font-weight-semi-bold mb-0 text-center">
                                        PT Sinergi Rodika Field Team
                                    </h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
