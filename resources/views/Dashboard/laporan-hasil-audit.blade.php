<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">

<head>
    @include('Template.head')
    <title>SPI Navigator - Laporan Hasil Audit</title>
</head>

<body class="vertical-layout vertical-menu 2-columns menu-expanded fixed-navbar" data-open="click"
    data-menu="vertical-menu" data-col="2-columns">

    {{-- Navbar --}}
    <!-- fixed-top-->
    @include('Template.nav')
    {{-- Navbar --}}

    {{-- Side Menu --}}
    @include('Template.side-menu')
    {{-- Side Menu --}}

    <div class="app-content content">
        <div class="content-wrapper">
            <div class="content-header row">
                <div class="content-header-left col-md-8 col-12 mb-2 breadcrumb-new">
                    <h3 class="content-header-title mb-0 d-inline-block">Laporan Hasil Audit</h3>
                    <div class="row breadcrumbs-top d-inline-block">
                        <div class="breadcrumb-wrapper col-12">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="/dashboard">Dashboard</a>
                                </li>
                                <li class="breadcrumb-item active">Laporan Hasil Audit
                                </li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            <div class="content-body">
                <!-- Form Laporan Hasil Audit -->
                <section id="dom">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <button type="button" class="btn btn-primary mr-1" data-toggle="modal" data-target="#tambahLHA">Tambah Laporan</button>
                                </div>
                                <div class="card-content collapse show">
                                    <div class="card-body card-dashboard">
                                        <table class="table table-striped table-bordered dom-jQuery-events">
                                            <thead>
                                                <tr class="text-center">
                                                    <th>No</th>
                                                    <th>Nomor LHA</th>
                                                    <th>Tanggal LHA</th>
                                                    <th>Divisi/Unit</th>
                                                    <th>Judul LHA</th>
                                                    <th>Bentuk Kegiatan</th>
                                                    <th>Aksi</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr class="text-center">
                                                    <td>1</td>
                                                    <td>87291289128</td>
                                                    <td>10/06/2024</td>
                                                    <td>SPI</td>
                                                    <td>Pemeriksaan Lanjut Website SPI</td>
                                                    <td>Pemeriksaan</td>
                                                    <td>
                                                        <div class="btn-group mr-1 mb-1">
                                                            <button type="button" class="btn btn-info" data-toggle="modal" data-target="#large"><i class="fa fa-info"></i>&nbsp; Detail</button>
                                                            <button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                <span class="sr-only">Toggle Dropdown</span>
                                                            </button>
                                                            <div class="dropdown-menu" x-placement="bottom-start" style="position: absolute; transform: translate3d(62px, 40px, 0px); top: 0px; left: 0px; will-change: transform;">
                                                                <a class="dropdown-item" href="/temuan">Temuan</a>
                                                                <a class="dropdown-item" href="/hal-hal-diperhatikan">Hal-hal yang perlu diperhatikan</a>
                                                                <div class="dropdown-divider"></div>
                                                                <a class="dropdown-item" href="/rekomendasi">Rekomendasi</a>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- DOM - jQuery events table -->
                {{-- Detail Data with Modal --}}
                @include('Dashboard.detail-laporan-hasil-audit')
                {{-- Detail Data with Modal --}}
                {{-- Tambah LHA --}}
                @include('Dashboard.create-laporan-hasil-audit')
                {{-- Tambah LHA --}}
            </div>
        </div>
    </div>
    <!-- ////////////////////////////////////////////////////////////////////////////-->

    {{-- Footer --}}
    @include('Template.footer')

    {{-- JS --}}
    @include('Template.js')
    {{-- JS --}}

</body>

</html>
