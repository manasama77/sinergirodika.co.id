@extends('template')

@section('content')
    <div class="container">
        <div class="row mt-5">
            <div class="col">
                <h4 class="mb-4">About Us</h4>

                <div class="row">
                    <div class="col-lg-4">
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
                        <div class="tab-pane tab-pane-navigation active" id="tabLineOfBusiness">
                            <h4>LINE OF BUSINESS</h4>
                            <p>PT SINERGI RODIKA UTAMA is Mechanical & Electrical contractors and Supplier in a wide variety
                                of commercial and industrial projects :</p>
                            <ul>
                                <li>
                                    <a href="{{ route('solutions.electrical-service') }}">
                                        Substation, Backup power supply, Scada and Automation,
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ route('solutions.electrical-vehicle-charger') }}">
                                        Electric Vehicle Charger (SPKLU) and
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ route('solutions.energy-and-environment-management') }}">
                                        Energy (Electricity, water and gas) & Environment Management.
                                    </a>
                                </li>
                            </ul>
                            <p>PT SINERGI RODIKA UTAMA has become an proven partner of PT PLN (persero) and other commercial
                                industrial sectors handling Substation, Transmission and Distribution projects since 2011
                            </p>
                            <p>Our commitment to professional excellence has enabled us to achieve, often even exceeds, our
                                client expectations. With efficient utilization of human and technical resources has been
                                proven to complete projects within the designated time frame and budgets with speed, safety,
                                cost effectiveness, and professional technicians</p>
                        </div>
                        <div class="tab-pane tab-pane-navigation" id="tabVisionMission">
                            <h4>VISION</h4>
                            <p>“To become a professional, competitive and competent company in the field of electrical and
                                mechanical supply and services with the best and accountable services”.</p>

                            <hr />

                            <h4>MISSION</h4>
                            <p>To provide a good product and Service with excellent technical support
                                Being a good corporate citizen must be given the highest priority.
                                Take a mutual understanding and interest among vendors and clients Developing a business
                                with an efficient, effective and targeted process</p>
                        </div>
                        <div class="tab-pane tab-pane-navigation" id="tabTheManagementAddress">
                            <h4>THE MANAGEMENT</h4>
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

                            <h4>ADDRESS</h4>
                            <table class="table table-borderless table-sm">
                                <tbody>
                                    <tr>
                                        <td>Office</td>
                                        <td>:</td>
                                        <td>Ruko Renata, Jl. Jalur Sutera Timur Kav. 6A No. 16 Alam Sutera
                                            Tangerang BANTEN 15144</td>
                                    </tr>
                                    <tr>
                                        <td>Telp/Fax</td>
                                        <td>:</td>
                                        <td>
                                            <a href="tel:02122352886">
                                                021 22352886
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Email</td>
                                        <td>:</td>
                                        <td>
                                            <a href="mailto:sales@sinergirodika.co.id">
                                                sales@sinergirodika.co.id
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Website</td>
                                        <td>:</td>
                                        <td>
                                            <a href="https://sinergirodika.co.id">
                                                www.sinergirodika.co.id
                                            </a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="tab-pane tab-pane-navigation" id="tabCertificates">
                            <h4>Certificates</h4>
                            <ol type="A">
                                <li class="font-weight-bold text-dark">
                                    Akta Pendirian PT
                                </li>
                                <table class="table table-borderless table-sm">
                                    <tbody>
                                        <tr>
                                            <th style="width: 120px;">Nomor Akta</th>
                                            <td style="width: 10px;">:</td>
                                            <td>20</td>
                                        </tr>
                                        <tr>
                                            <th style="width: 120px;">Tanggal</th>
                                            <td style="width: 10px;">:</td>
                                            <td>23 February 2011</td>
                                        </tr>
                                        <tr>
                                            <th style="width: 120px;">Nama Notaris</th>
                                            <td style="width: 10px;">:</td>
                                            <td>MIRA OKTARIA, S.H, MKn</td>
                                        </tr>
                                    </tbody>
                                </table>

                                <li class="font-weight-bold text-dark">Nomor Induk Berusaha (NIB)</li>
                                <table class="table table-borderless table-sm">
                                    <tbody>
                                        <tr>
                                            <th style="width: 120px;">Nomor</th>
                                            <td style="width: 10px;">:</td>
                                            <td>9120000210357</td>
                                        </tr>
                                        <tr>
                                            <th style="width: 120px;">Tanggal</th>
                                            <td style="width: 10px;">:</td>
                                            <td>03 June 2022</td>
                                        </tr>
                                        <tr>
                                            <th style="width: 120px;">Bidang Usaha</th>
                                            <td style="width: 10px;">:</td>
                                            <td>Pengadaan Barang dan Jasa Mekanikal Elektrikal</td>
                                        </tr>
                                        <tr>
                                            <th style="width: 120px;">Issued by</th>
                                            <td style="width: 10px;">:</td>
                                            <td>Balai Sertifikasi Elektronik</td>
                                        </tr>
                                    </tbody>
                                </table>

                                <li class="font-weight-bold text-dark">
                                    Sertifikat ISO 9001
                                </li>
                                <table class="table table-borderless table-sm">
                                    <tbody>
                                        <tr>
                                            <th style="width: 120px;">No Certificate</th>
                                            <td style="width: 10px;">:</td>
                                            <td>DTQMS1057</td>
                                        </tr>
                                        <tr>
                                            <th style="width: 120px;">Date</th>
                                            <td style="width: 10px;">:</td>
                                            <td>11 Desember 2017</td>
                                        </tr>
                                        <tr>
                                            <th style="width: 120px;">Valid until</th>
                                            <td style="width: 10px;">:</td>
                                            <td>10 Desember 2027</td>
                                        </tr>
                                        <tr>
                                            <th style="width: 120px;">Issued by</th>
                                            <td style="width: 10px;">:</td>
                                            <td>Define Equality Veritas</td>
                                        </tr>
                                    </tbody>
                                </table>

                                <li class="font-weight-bold text-dark">
                                    FINANCE RECOGNATION BY DNB
                                </li>
                                <p class="text-dark">
                                    D&B Rating 3A3<br />
                                    Financial Strength 3A Based on tangible net
                                    worth of IDR 3,600,000,000 to IDR 17,999,999,999
                                    Risk Definition 3 Sufficient capacity for meeting payment liabilities
                                </p>
                                <table class="table table-borderless table-sm">
                                    <tbody>
                                        <tr>
                                            <th style="width: 120px;">Valid until</th>
                                            <td style="width: 10px;">:</td>
                                            <td>30 June 2025</td>
                                        </tr>
                                        <tr>
                                            <th style="width: 120px;">Issued by</th>
                                            <td style="width: 10px;">:</td>
                                            <td>Dun & Bradstreet (DnB)</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </ol>
                        </div>
                        <div class="tab-pane tab-pane-navigation" id="TabSBUJPTLIUJPTLSBUJK">
                            <h4>SBUJPTL, IUJPTL, SBUJK</h4>
                            <ol type="A">
                                <li class="font-weight-bold text-dark">
                                    Sertifikat Badan Usaha Jasa Penunjang Tenaga Listrik (SBUJPTL)
                                </li>
                                <table class="table table-borderless table-sm">
                                    <tbody>
                                        <tr>
                                            <th style="width: 130px;">No Certificate</th>
                                            <td style="width: 10px;">:</td>
                                            <td>329.1.8.211.M.3C.3674.B20</td>
                                        </tr>
                                        <tr>
                                            <th>No Registration</th>
                                            <td>:</td>
                                            <td>0329.02.B20</td>
                                        </tr>
                                        <tr>
                                            <th>Date</th>
                                            <td>:</td>
                                            <td>25 Februari 2020</td>
                                        </tr>
                                        <tr>
                                            <th>Valid until</th>
                                            <td>:</td>
                                            <td>25 Februari 2025</td>
                                        </tr>
                                        <tr>
                                            <th>Issued by</th>
                                            <td>:</td>
                                            <td>PT Sertifikasi Badan Usaha Mandiri</td>
                                        </tr>
                                        <tr>
                                            <th>Jenis Usaha</th>
                                            <td>:</td>
                                            <td>Pembangunan dan Pemasangan Instalasi Penyediaan Tenaga Listrik</td>
                                        </tr>
                                        <tr>
                                            <th>Bidang</th>
                                            <td>:</td>
                                            <td>Transmisi Tenaga Listrik</td>
                                        </tr>
                                        <tr>
                                            <th>Sub Bidang</th>
                                            <td>:</td>
                                            <td>Gardu Induk</td>
                                        </tr>
                                        <tr>
                                            <th>Kualifikasi</th>
                                            <td>:</td>
                                            <td>Menengah</td>
                                        </tr>
                                    </tbody>
                                </table>

                                <li class="font-weight-bold text-dark">Sertifikat Ijin Usaha Jasa Penunjang Tenaga Listrik
                                    (IUJPTL)</li>
                                <table class="table table-borderless table-sm">
                                    <tbody>
                                        <tr>
                                            <th style="width: 120px;">No Certificate</th>
                                            <td style="width: 10px;">:</td>
                                            <td>671.1/04-DESDM.IUJPTL/I/2023</td>
                                        </tr>
                                        <tr>
                                            <th style="width: 120px;">Date</th>
                                            <td style="width: 10px;">:</td>
                                            <td>20 Januari 2023</td>
                                        </tr>
                                        <tr>
                                            <th style="width: 120px;">Valid until</th>
                                            <td style="width: 10px;">:</td>
                                            <td>20 Januari 2028</td>
                                        </tr>
                                        <tr>
                                            <th style="width: 120px;">Issued by</th>
                                            <td style="width: 10px;">:</td>
                                            <td>Dinas Energi dan Sumber Daya Mineral Provinsi Banten</td>
                                        </tr>
                                        <tr>
                                            <th style="width: 120px;">Jenis Usaha</th>
                                            <td style="width: 10px;">:</td>
                                            <td>Pembangunan dan Pemasangan Instalasi Penyediaan Tenaga Listrik</td>
                                        </tr>
                                        <tr>
                                            <th style="width: 120px;">Bidang</th>
                                            <td style="width: 10px;">:</td>
                                            <td>Transmisi Tenaga Listrik</td>
                                        </tr>
                                        <tr>
                                            <th style="width: 120px;">Sub Bidang</th>
                                            <td style="width: 10px;">:</td>
                                            <td>Gardu Induk</td>
                                        </tr>
                                        <tr>
                                            <th style="width: 120px;">Kualifikasi</th>
                                            <td style="width: 10px;">:</td>
                                            <td>Menengah</td>
                                        </tr>
                                    </tbody>
                                </table>

                                <li class="font-weight-bold text-dark">
                                    Sertifikat Badan Usaha Konstruksi (SBUJK)
                                </li>
                                <table class="table table-borderless table-sm">
                                    <tbody>
                                        <tr>
                                            <th style="width: 120px;">No Certificate</th>
                                            <td style="width: 10px;">:</td>
                                            <td>PB-UMKU : 912000021035700070001</td>
                                        </tr>
                                        <tr>
                                            <th style="width: 120px;">Date</th>
                                            <td style="width: 10px;">:</td>
                                            <td>12 September 2023</td>
                                        </tr>
                                        <tr>
                                            <th style="width: 120px;">Valid until</th>
                                            <td style="width: 10px;">:</td>
                                            <td>11 September 2026</td>
                                        </tr>
                                        <tr>
                                            <th style="width: 120px;">Issued by</th>
                                            <td style="width: 10px;">:</td>
                                            <td>Balai Sertifikasi Elektronik</td>
                                        </tr>
                                        <tr>
                                            <th style="width: 120px;">Jenis Usaha</th>
                                            <td style="width: 10px;">:</td>
                                            <td>Pekerjaan Konstruksi</td>
                                        </tr>
                                        <tr>
                                            <th style="width: 120px;">Bidang</th>
                                            <td style="width: 10px;">:</td>
                                            <td>Konstruksi</td>
                                        </tr>
                                        <tr>
                                            <th style="width: 120px;">Sub Bidang</th>
                                            <td style="width: 10px;">:</td>
                                            <td>Konstruksi Bangunan Sipil Elektrikal dan Konstruksi Gedung Lainnya</td>
                                        </tr>
                                        <tr>
                                            <th style="width: 120px;">Kualifikasi</th>
                                            <td style="width: 10px;">:</td>
                                            <td>Kecil</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </ol>
                        </div>
                        <div class="tab-pane tab-pane-navigation" id="tabSMK3CSMSANDAHLIK3">
                            <h4>SMK3, CSMS, AHLI K3</h4>
                            <ol type="A">
                                <li class="font-weight-bold text-dark">
                                    Sertifikat Manajemen Keselamatan dan Kesehatan Kerja (SMK3)
                                </li>
                                <table class="table table-borderless table-sm">
                                    <tbody>
                                        <tr>
                                            <th style="width: 130px;">No Certificate</th>
                                            <td style="width: 10px;">:</td>
                                            <td>SMK3.2020.MAL.SK.968</td>
                                        </tr>
                                        <tr>
                                            <th>Date</th>
                                            <td>:</td>
                                            <td>09 June 2023</td>
                                        </tr>
                                        <tr>
                                            <th>Valid until</th>
                                            <td>:</td>
                                            <td>09 June 2026</td>
                                        </tr>
                                        <tr>
                                            <th>Issued by</th>
                                            <td>:</td>
                                            <td>Kementerian Ketenagakerjaan</td>
                                        </tr>
                                    </tbody>
                                </table>

                                <li class="font-weight-bold text-dark">SERTIFIKAT CONTRACTOR SAFETY MANAGEMENT SYSTEM
                                    (CSMS)</li>
                                <table class="table table-borderless table-sm">
                                    <tbody>
                                        <tr>
                                            <th style="width: 130px;">No Certificate</th>
                                            <td style="width: 10px;">:</td>
                                            <td>001402/DIST/CSMS/IX/2022</td>
                                        </tr>
                                        <tr>
                                            <th>Date</th>
                                            <td>:</td>
                                            <td>23 September 2022</td>
                                        </tr>
                                        <tr>
                                            <th>CSMS Criteria</th>
                                            <td>:</td>
                                            <td>Sangat Tinggi</td>
                                        </tr>
                                        <tr>
                                            <th>Valid until</th>
                                            <td>:</td>
                                            <td>24 September 2025</td>
                                        </tr>
                                        <tr>
                                            <th>Issued by</th>
                                            <td>:</td>
                                            <td>PT PLN (Persero) UP3 Serpong</td>
                                        </tr>
                                    </tbody>
                                </table>

                                <li class="font-weight-bold text-dark">AHLI K3 UMUM</li>
                                <table class="table table-borderless table-sm">
                                    <tbody>
                                        <tr>
                                            <th style="width: 120px;">No Certificate</th>
                                            <td style="width: 10px;">:</td>
                                            <td>0053050923/Q-AK3U/36/IX/2023</td>
                                        </tr>
                                        <tr>
                                            <th style="width: 120px;">Date</th>
                                            <td style="width: 10px;">:</td>
                                            <td>5 September 2023</td>
                                        </tr>
                                        <tr>
                                            <th style="width: 120px;">Atas Nama</th>
                                            <td style="width: 10px;">:</td>
                                            <td>Ansar</td>
                                        </tr>
                                        <tr>
                                            <th style="width: 120px;">Valid until</th>
                                            <td style="width: 10px;">:</td>
                                            <td>5 September 2026</td>
                                        </tr>
                                    </tbody>
                                </table>

                                <li class="font-weight-bold text-dark">AHLI K3 LISTRIK</li>
                                <table class="table table-borderless table-sm">
                                    <tbody>
                                        <tr>
                                            <th style="width: 120px;">No Certificate</th>
                                            <td style="width: 10px;">:</td>
                                            <td>5/1116/AS.02.04/III/2020</td>
                                        </tr>
                                        <tr>
                                            <th style="width: 120px;">Date</th>
                                            <td style="width: 10px;">:</td>
                                            <td>13 March 2020</td>
                                        </tr>
                                        <tr>
                                            <th style="width: 120px;">Atas Nama</th>
                                            <td style="width: 10px;">:</td>
                                            <td>Supratman</td>
                                        </tr>
                                        <tr>
                                            <th style="width: 120px;">Valid until</th>
                                            <td style="width: 10px;">:</td>
                                            <td>21 March 2026</td>
                                        </tr>
                                    </tbody>
                                </table>

                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
