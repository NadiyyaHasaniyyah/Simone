<!DOCTYPE html>
<html lang="en">

<head>

    <link rel="shortcut icon" href="{{ asset('style1/skydash/images/logo-mini.svg') }}">
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description">
    <meta name="author">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/p5.js/1.8.0/p5.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/p5.js/1.8.0/addons/p5.sound.min.js"></script>

    <title>Simone</title>
    <!-- plugins:css -->
    <link href="{{ asset('style1/skydash/vendors/feather/feather.css') }}" rel="stylesheet">
    <link href="{{ asset('style1/skydash/vendors/ti-icons/css/themify-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('style1/skydash/vendors/css/vendor.bundle.base.css') }}" rel="stylesheet">
    <link href="{{ asset('style1/skydash/vendors/css/vendor.bundle.base.css') }}" rel="stylesheet">
    <!-- endinject -->
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link href="{{ asset('style1/skydash/vendors/datatables.net-bs4/dataTables.bootstrap4.css') }}" rel="stylesheet">
    <link href="{{ asset('style1/skydash/vendors/ti-icons/css/themify-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('style1/skydash/js/select.dataTables.min.css') }}" rel="stylesheet" type="text/css">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link href="{{ asset('style1/skydash/vendors/ti-icons/css/themify-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('style1/skydash/css/vertical-layout-light/style.css') }}" rel="stylesheet">
    <!-- dashboard css -->
    <link href="{{ asset('style1/skydash/css/profile.css') }}" rel="stylesheet">
    <!-- irs tabcss -->
    <link href="{{ asset('style1/skydash/css/irs.css') }}" rel="stylesheet">
    <link href="{{ asset('style1/skydash/css/rekap.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"/>

    {{-- Diagram bulet --}}
    <link href="{{ asset('style1/skydash/js/chart.js') }}" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

</head>

<body>
    <div class="container-scroller">
        <!-- partial:partials/_navbar.html -->
        <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
            <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
                <a class="navbar-brand brand-logo mr-5" href="{{ route('dashboard_dpt') }}"><img
                        style="width: 80%; height:1%; " src="{{ asset('style1/skydash/images/logoo.png') }}"
                        class="mr-2" alt="logo" /></a>
                <a class="navbar-brand brand-logo-mini" href="index.html"> <img
                        src="{{ asset('style1/skydash/images/logo-mini.svg') }}" alt="logo" /></a>
            </div>
            <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
                <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
                    <span class="icon-menu"></span>
                </button>
                <ul class="navbar-nav mr-lg-2">

                </ul>
                <ul class="navbar-nav navbar-nav-right">
                    <li class="nav-item dropdown">
                        <a class="nav-link count-indicator dropdown-toggle" id="notificationDropdown" href="#"
                            data-toggle="dropdown">
                            <i class="icon-bell mx-0"></i>
                            <span class="count"></span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list"
                            aria-labelledby="notificationDropdown">
                            <p class="mb-0 font-weight-normal float-left dropdown-header">Notifications</p>
                            <a class="dropdown-item preview-item">
                                <div class="preview-thumbnail">
                                    <div class="preview-icon bg-success">
                                        <i class="fa fa-tasks mx-0"></i>
                                    </div>
                                </div>
                                <div class="preview-item-content">
                                    <h6 class="preview-subject font-weight-normal">IRS</h6>
                                    <p class="font-weight-light small-text mb-0 text-muted">
                                        IRS sudah diverifikasi
                                    </p>
                                </div>
                            </a>
                            <a class="dropdown-item preview-item">
                                <div class="preview-thumbnail">
                                    <div class="preview-icon bg-info">
                                        <i class="fa fa-file-text-o  mx-0"></i>
                                    </div>
                                </div>
                                <div class="preview-item-content">
                                    <h6 class="preview-subject font-weight-normal"> KHS</h6>
                                    <p class="font-weight-light small-text mb-0 text-muted">
                                        Harap Isi KHS
                                    </p>
                                </div>
                            </a>
                            <a class="dropdown-item preview-item">
                                <div class="preview-thumbnail">
                                    <div class="preview-icon bg-warning">
                                        <i class="fa fa-tasks mx-0"></i>
                                    </div>
                                </div>
                                <div class="preview-item-content">
                                    <h6 class="preview-subject font-weight-normal">IRS</h6>
                                    <p class="font-weight-light small-text mb-0 text-muted">
                                        Harap Isi IRS
                                    </p>
                                </div>
                            </a>

                        </div>
                    </li>
                    <li class="nav-item nav-profile dropdown">
                        <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" id="profileDropdown">
                            {{-- {{ $attribute->nama }}  --}}
                            {{ $attribute->nama }}<i style="margin-left: 5px" class="fa fa-solid fa-caret-down">
                            </i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right navbar-dropdown"
                            aria-labelledby="profileDropdown">
                            <a class="dropdown-item" href="/logout">
                                <i class="ti-power-off text-primary"></i>
                                Logout
                            </a>
                        </div>
                    </li>
                </ul>
                <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button"
                    data-toggle="offcanvas">
                    <span class="icon-menu"></span>
                </button>
            </div>
        </nav>
        <!-- partial -->
        <div class="container-fluid page-body-wrapper">
            <!-- partial:partials/_settings-panel.html -->
            <div class="theme-setting-wraper">
                <div id="settings-trigger"><i class="ti-settings"></i></div>
                <div id="theme-settings" class="settings-panel">
                    <i class="settings-close ti-close"></i>
                    <p class="settings-heading">SIDEBAR SKINS</p>
                    <div class="sidebar-bg-options selected" id="sidebar-light-theme">
                        <div class="img-ss rounded-circle bg-light border mr-3"></div>Light
                    </div>
                    <div class="sidebar-bg-options" id="sidebar-dark-theme">
                        <div class="img-ss rounded-circle bg-dark border mr-3"></div>Dark
                    </div>
                    <p class="settings-heading mt-2">HEADER SKINS</p>
                    <div class="color-tiles mx-0 px-4">
                        <div class="tiles success"></div>
                        <div class="tiles warning"></div>
                        <div class="tiles danger"></div>
                        <div class="tiles info"></div>
                        <div class="tiles dark"></div>
                        <div class="tiles default"></div>
                    </div>
                </div>
            </div>

            <!-- partial -->
            <!-- partial:partials/_sidebar.html -->

            {{-- nanti --}}
            <nav class="sidebar sidebar-offcanvas" id="sidebar">
                <ul class="nav">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('dashboard_dsn') }}">
                            <i class="icon-grid menu-icon"></i>
                            <span class="menu-title">Dashboard</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('verifikasi_dsn') }}">
                            <i class="fa fa-tasks menu-icon"></i>
                            <span class="menu-title">Verifikasi Progress</span>
                        </a>

                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('rekap_pkl_dsn') }}">
                        <i class="fa fa-tasks menu-icon"></i>
                        <span class="menu-title"> Rekap PKL</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('rekap_skripsi_dsn') }}">
                            <i class="fa fa-newspaper-o  menu-icon"></i>
                            <span class="menu-title"> Rekap Skripsi</span>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('rekap_mhs_dsn') }}">
                            <i class="fa fa-newspaper-o  menu-icon"></i>
                            <span class="menu-title"> Rekap Mahasiswa</span>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('pencarian_dsn') }}">
                            <i class="fa fa-user menu-icon"></i>
                            <span class="menu-title">Pencarian</span>
                        </a>
                    </li>
                </ul>
            </nav>


            <!-- Dashboard -->
            <div class="main-panel">
                <div class="content-wrapper">
                    <div class="row">
                        <div class="col-lg-9 grid-margin">
                            <div class="row">
                                <div class="col-12 col-xl-8 mb-4 mb-xl-0">
                                    <h3 class="font-weight-bold">Rekap Mahasiswa</h3>
                                    <a class="active" href="{{ route('dashboard_dsn') }}">Dashboard/</a><a
                                        style="color: black" href="">Rekap Mahasiswa</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    {{-- Diagram Bulet --}}
                    <div class="col-lg-12 grid-margin text-center">
                        <div class="card mx-auto" style="width: 40rem;">
                            <div class="card-body">
                                <h4 class="card-title">Angkatan Keseluruhan</h4>
                                <canvas id="doughnutChart"></canvas>
                            </div>
                        </div>
                    </div>

                    <script>
                        var doughnutPieData = {
                            datasets: [{
                                data: [{{ $status_count['aktif'] ?? 0 }}, {{ $status_count['mangkir'] }}, {{ $status_count['cuti'] }}, {{ $status_count['drop out'] }}, {{ $status_count['lulus'] }}, {{ $status_count['undur diri'] }}, {{ $status_count['meninggal']  }}],
                                backgroundColor: [
                                    'rgba(0, 255, 0, 0.5)',   // Warna hijau untuk Aktif
                                    'rgba(255, 255, 0, 0.5)', // Warna kuning untuk Mangkir
                                    'rgba(255, 165, 0, 0.5)', // Warna oren untuk Cuti
                                    'rgba(255, 0, 0, 0.5)',   // Warna merah untuk DO
                                    'rgba(139, 69, 19, 0.5)', // Warna coklat untuk Lulus
                                    'rgba(128, 0, 128, 0.5)', // Warna ungu untuk Undur Diri
                                    'rgba(0, 0, 255, 0.5)'    // Warna biru untuk Meninggal
                                ],
                                borderColor: [
                                    'rgba(0, 255, 0, 1)',
                                    'rgba(255, 255, 0, 1)',
                                    'rgba(255, 165, 0, 1)',
                                    'rgba(255, 0, 0, 1)',
                                    'rgba(139, 69, 19, 1)',
                                    'rgba(128, 0, 128, 1)',
                                    'rgba(0, 0, 255, 1)'
                                ],
                            }],

                            labels: [
                                'Aktif',
                                'Mangkir',
                                'Cuti',
                                'DO',
                                'Lulus',
                                'Undur Diri',
                                'Meninggal',
                            ]
                        };

                        var doughnutPieOptions = {
                            responsive: true,
                            animation: {
                                animateScale: true,
                                animateRotate: true
                            }
                        };

                        $(document).ready(function () {
                            if ($("#doughnutChart").length) {
                                var doughnutChartCanvas = $("#doughnutChart").get(0).getContext("2d");
                                var doughnutChart = new Chart(doughnutChartCanvas, {
                                    type: 'doughnut',
                                    data: doughnutPieData,
                                    options: doughnutPieOptions
                                });
                            }
                        });
                    </script>


                    {{-- Rekap Mahasiswa  --}}
                    <div class="row">
                        <div class="col-lg-12 grid-margin stretch-card">
                            <div class="card">
                              <div class="card-body">
                                <h4 class="card-title" style="text-align: center">Angkatan</h4>
                                <div class="table-responsive pt-3">
                                  <table class="table table-bordered">
                                    <thead class="tahun">
                                        <tr>
                                            <th>
                                                Status
                                            </th>

                                            <th >
                                                <a href="{{ route('rekap_angkatan_dsn', ['angkatan'=>$angkatanList[6]]) }}" class="text-decoration-none">{{ $angkatanList[6] }}</a>
                                            </th>
                                            <th >
                                                <a href="{{ route('rekap_angkatan_dsn', ['angkatan'=>$angkatanList[5]]) }}" class="text-decoration-none">{{ $angkatanList[5] }}</a>
                                            </th>
                                            <th >
                                                <a href="{{ route('rekap_angkatan_dsn', ['angkatan'=>$angkatanList[4]]) }}" class="text-decoration-none">{{ $angkatanList[4] }}</a>
                                            </th>
                                            <th >
                                                <a href="{{ route('rekap_angkatan_dsn', ['angkatan'=>$angkatanList[3]]) }}" class="text-decoration-none">{{ $angkatanList[3] }}</a>
                                            </th>
                                            <th >
                                                <a href="{{ route('rekap_angkatan_dsn', ['angkatan'=>$angkatanList[2]]) }}" class="text-decoration-none">{{ $angkatanList[2] }}</a>
                                            </th>
                                            <th >
                                                <a href="{{ route('rekap_angkatan_dsn', ['angkatan'=>$angkatanList[1]]) }}" class="text-decoration-none">{{ $angkatanList[1] }}</a>
                                            </th>
                                            <th >
                                                <a href="{{ route('rekap_angkatan_dsn', ['angkatan'=>$angkatanList[0]]) }}" class="text-decoration-none">{{ $angkatanList[0] }}</a>
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody class="status">
                                        <tr>
                                            <td id="aktif"><a href="{{ route('rekap_status_dsn', ['status'=>'aktif']) }}" class="text-decoration-none">Aktif</a></td>
                                            <td id="2017"><a href="{{ route('rekap_tahun_status_dsn', ['angkatan'=>$angkatanList[6], 'status'=>'aktif']) }}" class="text-decoration-none">{{ $mhs_count[$angkatanList[6]]['aktif'] }}</a></td>
                                            <td id="2018"><a href="{{ route('rekap_tahun_status_dsn', ['angkatan'=>$angkatanList[5], 'status'=>'aktif']) }}" class="text-decoration-none">{{ $mhs_count[$angkatanList[5]]['aktif'] }}</a></td>
                                            <td id="2019"><a href="{{ route('rekap_tahun_status_dsn', ['angkatan'=>$angkatanList[4], 'status'=>'aktif']) }}" class="text-decoration-none">{{ $mhs_count[$angkatanList[4]]['aktif'] }}</a></td>
                                            <td id="2020"><a href="{{ route('rekap_tahun_status_dsn', ['angkatan'=>$angkatanList[3], 'status'=>'aktif']) }}" class="text-decoration-none">{{ $mhs_count[$angkatanList[3]]['aktif'] }}</a></td>
                                            <td id="2021"><a href="{{ route('rekap_tahun_status_dsn', ['angkatan'=>$angkatanList[2], 'status'=>'aktif']) }}" class="text-decoration-none">{{ $mhs_count[$angkatanList[2]]['aktif'] }}</a></td>
                                            <td id="2022"><a href="{{ route('rekap_tahun_status_dsn', ['angkatan'=>$angkatanList[1], 'status'=>'aktif']) }}" class="text-decoration-none">{{ $mhs_count[$angkatanList[1]]['aktif'] }}</a></td>
                                            <td id="2023"><a href="{{ route('rekap_tahun_status_dsn', ['angkatan'=>$angkatanList[0], 'status'=>'aktif']) }}" class="text-decoration-none">{{ $mhs_count[$angkatanList[0]]['aktif'] }}</a></td>
                                        </tr>
                                        <tr>
                                            <td id="do"><a href="{{ route('rekap_status_dsn', ['status'=>'drop out']) }}" class="text-decoration-none">DO</a></td>
                                            <td id="2017"><a href="{{ route('rekap_tahun_status_dsn', ['angkatan'=>$angkatanList[6], 'status'=>'drop out']) }}" class="text-decoration-none">{{ $mhs_count[$angkatanList[6]]['drop out'] }}</a></td>
                                            <td id="2018"><a href="{{ route('rekap_tahun_status_dsn', ['angkatan'=>$angkatanList[5], 'status'=>'drop out']) }}" class="text-decoration-none">{{ $mhs_count[$angkatanList[5]]['drop out'] }}</a></td>
                                            <td id="2019"><a href="{{ route('rekap_tahun_status_dsn', ['angkatan'=>$angkatanList[4], 'status'=>'drop out']) }}" class="text-decoration-none">{{ $mhs_count[$angkatanList[4]]['drop out'] }}</a></td>
                                            <td id="2020"><a href="{{ route('rekap_tahun_status_dsn', ['angkatan'=>$angkatanList[3], 'status'=>'drop out']) }}" class="text-decoration-none">{{ $mhs_count[$angkatanList[3]]['drop out'] }}</a></td>
                                            <td id="2021"><a href="{{ route('rekap_tahun_status_dsn', ['angkatan'=>$angkatanList[2], 'status'=>'drop out']) }}" class="text-decoration-none">{{ $mhs_count[$angkatanList[2]]['drop out'] }}</a></td>
                                            <td id="2022"><a href="{{ route('rekap_tahun_status_dsn', ['angkatan'=>$angkatanList[1], 'status'=>'drop out']) }}" class="text-decoration-none">{{ $mhs_count[$angkatanList[1]]['drop out'] }}</a></td>
                                            <td id="2023"><a href="{{ route('rekap_tahun_status_dsn', ['angkatan'=>$angkatanList[0], 'status'=>'drop out']) }}" class="text-decoration-none">{{ $mhs_count[$angkatanList[0]]['drop out'] }}</a></td>
                                        </tr>
                                        <tr>
                                            <td id="mangkir"><a href="{{ route('rekap_status_dsn', ['status'=>'mangkir']) }}" class="text-decoration-none">Mangkir</a></td>
                                            <td id="2017"><a href="{{ route('rekap_tahun_status_dsn', ['angkatan'=>$angkatanList[6], 'status'=>'mangkir']) }}" class="text-decoration-none">{{ $mhs_count[$angkatanList[6]]['mangkir'] }}</a></td>
                                            <td id="2018"><a href="{{ route('rekap_tahun_status_dsn', ['angkatan'=>$angkatanList[5], 'status'=>'mangkir']) }}" class="text-decoration-none">{{ $mhs_count[$angkatanList[5]]['mangkir'] }}</a></td>
                                            <td id="2019"><a href="{{ route('rekap_tahun_status_dsn', ['angkatan'=>$angkatanList[4], 'status'=>'mangkir']) }}" class="text-decoration-none">{{ $mhs_count[$angkatanList[4]]['mangkir'] }}</a></td>
                                            <td id="2020"><a href="{{ route('rekap_tahun_status_dsn', ['angkatan'=>$angkatanList[3], 'status'=>'mangkir']) }}" class="text-decoration-none">{{ $mhs_count[$angkatanList[3]]['mangkir'] }}</a></td>
                                            <td id="2021"><a href="{{ route('rekap_tahun_status_dsn', ['angkatan'=>$angkatanList[2], 'status'=>'mangkir']) }}" class="text-decoration-none">{{ $mhs_count[$angkatanList[2]]['mangkir'] }}</a></td>
                                            <td id="2022"><a href="{{ route('rekap_tahun_status_dsn', ['angkatan'=>$angkatanList[1], 'status'=>'mangkir']) }}" class="text-decoration-none">{{ $mhs_count[$angkatanList[1]]['mangkir'] }}</a></td>
                                            <td id="2023"><a href="{{ route('rekap_tahun_status_dsn', ['angkatan'=>$angkatanList[0], 'status'=>'mangkir']) }}" class="text-decoration-none">{{ $mhs_count[$angkatanList[0]]['mangkir'] }}</a></td>
                                        </tr>
                                        <tr>
                                            <td id="cuti"><a href="{{ route('rekap_status_dsn', ['status'=>'cuti']) }}" class="text-decoration-none">Cuti</a></td>
                                            <td id="2017"><a href="{{ route('rekap_tahun_status_dsn', ['angkatan'=>$angkatanList[6], 'status'=>'cuti']) }}" class="text-decoration-none">{{ $mhs_count[$angkatanList[6]]['cuti'] }}</a></td>
                                            <td id="2018"><a href="{{ route('rekap_tahun_status_dsn', ['angkatan'=>$angkatanList[5], 'status'=>'cuti']) }}" class="text-decoration-none">{{ $mhs_count[$angkatanList[5]]['cuti'] }}</a></td>
                                            <td id="2019"><a href="{{ route('rekap_tahun_status_dsn', ['angkatan'=>$angkatanList[4], 'status'=>'cuti']) }}" class="text-decoration-none">{{ $mhs_count[$angkatanList[4]]['cuti'] }}</a></td>
                                            <td id="2020"><a href="{{ route('rekap_tahun_status_dsn', ['angkatan'=>$angkatanList[3], 'status'=>'cuti']) }}" class="text-decoration-none">{{ $mhs_count[$angkatanList[3]]['cuti'] }}</a></td>
                                            <td id="2021"><a href="{{ route('rekap_tahun_status_dsn', ['angkatan'=>$angkatanList[2], 'status'=>'cuti']) }}" class="text-decoration-none">{{ $mhs_count[$angkatanList[2]]['cuti'] }}</a></td>
                                            <td id="2022"><a href="{{ route('rekap_tahun_status_dsn', ['angkatan'=>$angkatanList[1], 'status'=>'cuti']) }}" class="text-decoration-none">{{ $mhs_count[$angkatanList[1]]['cuti'] }}</a></td>
                                            <td id="2023"><a href="{{ route('rekap_tahun_status_dsn', ['angkatan'=>$angkatanList[0], 'status'=>'cuti']) }}" class="text-decoration-none">{{ $mhs_count[$angkatanList[0]]['cuti'] }}</a></td>
                                        </tr>
                                        <tr>
                                            <td id="lulus"><a href="{{ route('rekap_status_dsn', ['status'=>'lulus']) }}" class="text-decoration-none">Lulus</a></td>
                                            <td id="2017"><a href="{{ route('rekap_tahun_status_dsn', ['angkatan'=>$angkatanList[6], 'status'=>'lulus']) }}" class="text-decoration-none">{{ $mhs_count[$angkatanList[6]]['lulus'] }}</a></td>
                                            <td id="2018"><a href="{{ route('rekap_tahun_status_dsn', ['angkatan'=>$angkatanList[5], 'status'=>'lulus']) }}" class="text-decoration-none">{{ $mhs_count[$angkatanList[5]]['lulus'] }}</a></td>
                                            <td id="2019"><a href="{{ route('rekap_tahun_status_dsn', ['angkatan'=>$angkatanList[4], 'status'=>'lulus']) }}" class="text-decoration-none">{{ $mhs_count[$angkatanList[4]]['lulus'] }}</a></td>
                                            <td id="2020"><a href="{{ route('rekap_tahun_status_dsn', ['angkatan'=>$angkatanList[3], 'status'=>'lulus']) }}" class="text-decoration-none">{{ $mhs_count[$angkatanList[3]]['lulus'] }}</a></td>
                                            <td id="2021"><a href="{{ route('rekap_tahun_status_dsn', ['angkatan'=>$angkatanList[2], 'status'=>'lulus']) }}" class="text-decoration-none">{{ $mhs_count[$angkatanList[2]]['lulus'] }}</a></td>
                                            <td id="2022"><a href="{{ route('rekap_tahun_status_dsn', ['angkatan'=>$angkatanList[1], 'status'=>'lulus']) }}" class="text-decoration-none">{{ $mhs_count[$angkatanList[1]]['lulus'] }}</a></td>
                                            <td id="2023"><a href="{{ route('rekap_tahun_status_dsn', ['angkatan'=>$angkatanList[0], 'status'=>'lulus']) }}" class="text-decoration-none">{{ $mhs_count[$angkatanList[0]]['lulus'] }}</a></td>
                                        </tr>
                                        <tr>
                                            <td id="undur diri"><a href="{{ route('rekap_status_dsn', ['status'=>'undur diri']) }}" class="text-decoration-none">Undur Diri</a></td>
                                            <td id="2017"><a href="{{ route('rekap_tahun_status_dsn', ['angkatan'=>$angkatanList[6], 'status'=>'undur diri']) }}" class="text-decoration-none">{{ $mhs_count[$angkatanList[6]]['undur diri'] }}</a></td>
                                            <td id="2018"><a href="{{ route('rekap_tahun_status_dsn', ['angkatan'=>$angkatanList[5], 'status'=>'undur diri']) }}" class="text-decoration-none">{{ $mhs_count[$angkatanList[5]]['undur diri'] }}</a></td>
                                            <td id="2019"><a href="{{ route('rekap_tahun_status_dsn', ['angkatan'=>$angkatanList[4], 'status'=>'undur diri']) }}" class="text-decoration-none">{{ $mhs_count[$angkatanList[4]]['undur diri'] }}</a></td>
                                            <td id="2020"><a href="{{ route('rekap_tahun_status_dsn', ['angkatan'=>$angkatanList[3], 'status'=>'undur diri']) }}" class="text-decoration-none">{{ $mhs_count[$angkatanList[3]]['undur diri'] }}</a></td>
                                            <td id="2021"><a href="{{ route('rekap_tahun_status_dsn', ['angkatan'=>$angkatanList[2], 'status'=>'undur diri']) }}" class="text-decoration-none">{{ $mhs_count[$angkatanList[2]]['undur diri'] }}</a></td>
                                            <td id="2022"><a href="{{ route('rekap_tahun_status_dsn', ['angkatan'=>$angkatanList[1], 'status'=>'undur diri']) }}" class="text-decoration-none">{{ $mhs_count[$angkatanList[1]]['undur diri'] }}</a></td>
                                            <td id="2023"><a href="{{ route('rekap_tahun_status_dsn', ['angkatan'=>$angkatanList[0], 'status'=>'undur diri']) }}" class="text-decoration-none">{{ $mhs_count[$angkatanList[0]]['undur diri'] }}</a></td>
                                        </tr>
                                        <tr>
                                            <td id="meninggal"><a href="{{ route('rekap_status_dsn', ['status'=>'meninggal']) }}" class="text-decoration-none">Meninggal</a></td>
                                            <td id="2017"><a href="{{ route('rekap_tahun_status_dsn', ['angkatan'=>$angkatanList[6], 'status'=>'meninggal']) }}" class="text-decoration-none">{{ $mhs_count[$angkatanList[6]]['meninggal'] }}</a></td>
                                            <td id="2018"><a href="{{ route('rekap_tahun_status_dsn', ['angkatan'=>$angkatanList[5], 'status'=>'meninggal']) }}" class="text-decoration-none">{{ $mhs_count[$angkatanList[5]]['meninggal'] }}</a></td>
                                            <td id="2019"><a href="{{ route('rekap_tahun_status_dsn', ['angkatan'=>$angkatanList[4], 'status'=>'meninggal']) }}" class="text-decoration-none">{{ $mhs_count[$angkatanList[4]]['meninggal'] }}</a></td>
                                            <td id="2020"><a href="{{ route('rekap_tahun_status_dsn', ['angkatan'=>$angkatanList[3], 'status'=>'meninggal']) }}" class="text-decoration-none">{{ $mhs_count[$angkatanList[3]]['meninggal'] }}</a></td>
                                            <td id="2021"><a href="{{ route('rekap_tahun_status_dsn', ['angkatan'=>$angkatanList[2], 'status'=>'meninggal']) }}" class="text-decoration-none">{{ $mhs_count[$angkatanList[2]]['meninggal'] }}</a></td>
                                            <td id="2022"><a href="{{ route('rekap_tahun_status_dsn', ['angkatan'=>$angkatanList[1], 'status'=>'meninggal']) }}" class="text-decoration-none">{{ $mhs_count[$angkatanList[1]]['meninggal'] }}</a></td>
                                            <td id="2023"><a href="{{ route('rekap_tahun_status_dsn', ['angkatan'=>$angkatanList[0], 'status'=>'meninggal']) }}" class="text-decoration-none">{{ $mhs_count[$angkatanList[0]]['meninggal'] }}</a></td>
                                        </tr>

                                    </tbody>
                                  </table>
                                </div>
                                {{-- button  --}}
                                <br><br>
                                <a href="{{ route('cetakMhs_dsn') }}">
                                    <button type="button" class="btn btn-primary btn-rounded btn-fw float-right">Cetak</button>
                                </a>
                              </div>
                            </div>
                          </div>
                    </div>


                    {{-- List Mahasiswa --}}
                        <br><br>
                    <div class="row">
                        <div class="col-md-12 grid-margin stretch-card">
                            <div class="card">
                              {{-- <div class="card-body"> --}}
                                {{-- <h4 class="card-title">List Mahasiswa</h4> --}}
                                {{-- <p class="card-description">
                                  nama <code>.(mahasiswa)</code>
                                </p> --}}
                                <div class="table-responsive">
                                  <table class="table table-striped" id=TabelMahasiswa>

                                </div>
                                </div>
                            </div>
                    </div>








                                <!-- page-body-wrapper ends -->
                            </div>
                            <!-- container-scroller -->


                            <!-- plugins:js -->
                            <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
                            <script>
                              $(document).ready(function () {
                                $(".trigger").on("click", function () {
                                  $(".modal-wrapper").toggleClass("open");
                                  $(".page-wrapper").toggleClass("blur-it");
                                  return false;
                                });
                              });
                            </script>
                            <script src="vendors/js/vendor.bundle.base.js"></script>
                            <script src="{{ asset('style1/skydash/vendors/js/vendor.bundle.base.js') }}"></script>
                            <!-- endinject -->
                            <!-- Plugin js for this page -->
                            <script src="{{ asset('style1/skydash/vendors/chart.js/Chart.min.js') }}"></script>
                            <script src="{{ asset('style1/skydash/vendors/datatables.net/jquery.dataTables.js') }}"></script>
                            <script src="{{ asset('style1/skydash/vendors/datatables.net-bs4/dataTables.bootstrap4.js') }}"></script>
                            <script src="{{ asset('style1/skydash/js/file-upload.js') }}"></script>
                            <script src="vendors/chart.js/Chart.min.js"></script>
                            <script src="vendors/datatables.net/jquery.dataTables.js"></script>
                            <script src="vendors/datatables.net-bs4/dataTables.bootstrap4.js"></script>
                            <script src="js/dataTables.select.min.js"></script>

                            <!-- End plugin js for this page -->
                            <!-- inject:js -->
                            <script src="{{ asset('style1/skydash/js/off-canvas.js') }}"></script>
                            <script src="{{ asset('style1/skydash/js/hoverable-collapse.js') }}"></script>
                            <script src="{{ asset('style1/skydash/js/template.js') }}"></script>
                            <script src="{{ asset('style1/skydash/js/settings.js') }}"></script>
                            <script src="{{ asset('style1/skydash/js/todolist.js') }}"></script>

                            <!-- endinject -->
                            <!-- Custom js for this page-->
                            <script src="{{ asset('style1/skydash/js/dashboard.js') }}"></script>
                            <script src="{{ asset('style1/skydash/js/Chart.roundedBarCharts.js') }}"></script>

                            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>









</body>

</html>