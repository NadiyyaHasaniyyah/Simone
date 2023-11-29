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
                <a class="navbar-brand brand-logo mr-5" href="{{ route('dashboard_opt') }}"><img
                        style="width: 80%; height:1%; " src="{{ asset('style1/skydash/images/logoo.png') }}"
                        class="mr-2" alt="logo" /></a>
                <a class="navbar-brand brand-logo-mini" > <img
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
                        <a class="nav-link" href="{{ route('dashboard_opt') }}">
                            <i class="icon-grid menu-icon"></i>
                            <span class="menu-title">Dashboard</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('generate') }}">
                            <i class="ti-user menu-icon"></i>
                            <span class="menu-title">Generate Akun</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('managemen') }}">
                            <i class="ti-id-badge
                            menu-icon"></i>
                            <span class="menu-title"> Manajemen Akun</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('rekap_pkl_opt') }}">
                            <i class="fa fa-tasks menu-icon"></i>
                            <span class="menu-title"> Rekap PKL</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('rekap_skripsi_opt') }}">
                                <i class="fa fa-newspaper-o  menu-icon"></i>
                                <span class="menu-title"> Rekap Skripsi</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('rekap_mahasiswa_opt') }}">
                                <i class="fa fa-newspaper-o  menu-icon"></i>
                                <span class="menu-title">Rekap Mahasiswa</span>
                            </a>
                        </li>
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
                                    <a style="color: black" href="{{ route('dashboard_dpt') }}">Dashboard/</a><a
                                    class="active"  href="">Rekap Mahasiswa</a>
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
                            <div class="card" id="printableTable">
                              <div class="card-body">
                                <h4 class="card-title" style="text-align: center">Rekap Mahasiswa</h4>
                                <div class="table-responsive pt-3">
                                  <table class="table table-bordered">
                                    <thead class="tahun">
                                        <tr> <th rowspan="2"  style="text-align: center; vertical-align: middle;" >
                                            Status
                                        </th> <th colspan="7" style="text-align: center;">Angkatan</th></tr>

                                        <tr>


                                            <th >
                                                <a href="{{ route('rekap_angkatan_opt', ['angkatan'=>'2017']) }}" class="text-decoration-none">2017</a>
                                            </th>
                                            <th >
                                                <a href="{{ route('rekap_angkatan_opt', ['angkatan'=>'2018']) }}" class="text-decoration-none">2018</a>
                                            </th>
                                            <th >
                                                <a href="{{ route('rekap_angkatan_opt', ['angkatan'=>'2019']) }}" class="text-decoration-none">2019</a>
                                            </th>
                                            <th >
                                                <a href="{{ route('rekap_angkatan_opt', ['angkatan'=>'2020']) }}" class="text-decoration-none">2020</a>
                                            </th>
                                            <th >
                                                <a href="{{ route('rekap_angkatan_opt', ['angkatan'=>'2021']) }}" class="text-decoration-none">2021</a>
                                            </th>
                                            <th >
                                                <a href="{{ route('rekap_angkatan_opt', ['angkatan'=>'2022']) }}" class="text-decoration-none">2022</a>
                                            </th>
                                            <th >
                                                <a href="{{ route('rekap_angkatan_opt', ['angkatan'=>'2023']) }}" class="text-decoration-none">2023</a>
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody class="status">
                                        <tr>
                                            <td  id="aktif">Aktif</td>
                                            <td id="2017">{{ $mhs_count['2017']['aktif'] }}</td>
                                            <td id="2018">{{ $mhs_count['2018']['aktif'] }}</td>
                                            <td id="2019">{{ $mhs_count['2019']['aktif'] }}</td>
                                            <td id="2020">{{ $mhs_count['2020']['aktif'] }}</td>
                                            <td id="2021">{{ $mhs_count['2021']['aktif'] }}</td>
                                            <td id="2022">{{ $mhs_count['2022']['aktif'] }}</td>
                                            <td id="2023">{{ $mhs_count['2023']['aktif'] }}</td>
                                        </tr>
                                        <tr>
                                            <td  id="do">DO</td>
                                            <td id="2017">{{ $mhs_count['2017']['drop out'] }}</td>
                                            <td id="2018">{{ $mhs_count['2018']['drop out'] }}</td>
                                            <td id="2019">{{ $mhs_count['2019']['drop out'] }}</td>
                                            <td id="2020">{{ $mhs_count['2020']['drop out'] }}</td>
                                            <td id="2021">{{ $mhs_count['2021']['drop out'] }}</td>
                                            <td id="2022">{{ $mhs_count['2022']['drop out'] }}</td>
                                            <td id="2023">{{ $mhs_count['2023']['drop out'] }}</td>
                                        </tr>
                                        <tr>
                                            <td  id="meninggal">Mangkir</td>
                                            <td id="2017">{{ $mhs_count['2017']['mangkir'] }}</td>
                                            <td id="2018">{{ $mhs_count['2018']['mangkir'] }}</td>
                                            <td id="2019">{{ $mhs_count['2019']['mangkir'] }}</td>
                                            <td id="2020">{{ $mhs_count['2020']['mangkir'] }}</td>
                                            <td id="2021">{{ $mhs_count['2021']['mangkir'] }}</td>
                                            <td id="2022">{{ $mhs_count['2022']['mangkir'] }}</td>
                                            <td id="2023">{{ $mhs_count['2023']['mangkir'] }}</td>
                                        </tr>
                                        <tr>
                                            <td  id="cuti">Cuti</td>
                                            <td id="2017">{{ $mhs_count['2017']['cuti'] }}</td>
                                            <td id="2018">{{ $mhs_count['2018']['cuti'] }}</td>
                                            <td id="2019">{{ $mhs_count['2019']['cuti'] }}</td>
                                            <td id="2020">{{ $mhs_count['2020']['cuti'] }}</td>
                                            <td id="2021">{{ $mhs_count['2021']['cuti'] }}</td>
                                            <td id="2022">{{ $mhs_count['2022']['cuti'] }}</td>
                                            <td id="2023">{{ $mhs_count['2023']['cuti'] }}</td>
                                        </tr>
                                        <tr>
                                            <td  id="lulus">Lulus</td>
                                            <td id="2017">{{ $mhs_count['2017']['lulus'] }}</td>
                                            <td id="2018">{{ $mhs_count['2018']['lulus'] }}</td>
                                            <td id="2019">{{ $mhs_count['2019']['lulus'] }}</td>
                                            <td id="2020">{{ $mhs_count['2020']['lulus'] }}</td>
                                            <td id="2021">{{ $mhs_count['2021']['lulus'] }}</td>
                                            <td id="2022">{{ $mhs_count['2022']['lulus'] }}</td>
                                            <td id="2023">{{ $mhs_count['2023']['lulus'] }}</td>
                                        </tr>
                                        <tr>
                                            <td  id="cuti">Undur Diri </td>
                                            <td id="2017">{{ $mhs_count['2017']['undur diri'] }}</td>
                                            <td id="2018">{{ $mhs_count['2018']['undur diri'] }}</td>
                                            <td id="2019">{{ $mhs_count['2019']['undur diri'] }}</td>
                                            <td id="2020">{{ $mhs_count['2020']['undur diri'] }}</td>
                                            <td id="2021">{{ $mhs_count['2021']['undur diri'] }}</td>
                                            <td id="2022">{{ $mhs_count['2022']['undur diri'] }}</td>
                                            <td id="2023">{{ $mhs_count['2023']['undur diri'] }}</td>
                                        </tr>
                                        <tr>
                                            <td  id="meninggal">Meninggal</td>
                                            <td id="2017">{{ $mhs_count['2017']['meninggal'] }}</td>
                                            <td id="2018">{{ $mhs_count['2018']['meninggal'] }}</td>
                                            <td id="2019">{{ $mhs_count['2019']['meninggal'] }}</td>
                                            <td id="2020">{{ $mhs_count['2020']['meninggal'] }}</td>
                                            <td id="2021">{{ $mhs_count['2021']['meninggal'] }}</td>
                                            <td id="2022">{{ $mhs_count['2022']['meninggal'] }}</td>
                                            <td id="2023">{{ $mhs_count['2023']['meninggal'] }}</td>
                                        </tr>

                                    </tbody>
                                  </table>
                                </div>
                                {{-- button  --}}
                                <br><br>
                                <button type="button" class="btn btn-primary btn-rounded btn-fw float-right" onclick="printDiv()">Cetak</button>
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
                            <iframe name="print_frame" width="0" height="0" frameborder="0" src="about:blank"></iframe>

                            <script>
                                function printDiv() {
                                    var printFrame = window.frames["print_frame"];
                                    var printDocument = printFrame.document;

                                    // Menyalin HTML tabel ke dalam dokumen di dalam iframe
                                    printDocument.body.innerHTML = document.getElementById("printableTable").outerHTML;

                                    // Menambahkan gaya CSS ke dalam dokumen di dalam iframe
                                    var styleElement = printDocument.createElement("style");
                                    styleElement.innerHTML = `
                                              @import "https://fonts.googleapis.com/css?family=Montserrat:400,700|Raleway:300,400";
                                              html {
                                                width: 100%;
                                                height: 100%;
                                            }
                                            body {
                                                color: #333;
                                                font-family: "Raleway";
                                            }
                                            body h4 {
                                                text-align: center;
                                                color: #428bff;
                                                font-size: 40px;
                                                padding: 0px 0 0px 0;
                                                margin: 0;
                                            }





                                                table {
                                                  border-collapse: collapse;
                                                  width: 100%;
                                                }

                                                th, td {
                                                  border: 1px solid #ddd;
                                                  padding: 8px;
                                                  text-align: left;
                                                }

                                                tr:nth-child(even) {
                                                  background-color: #f2f2f2;
                                                }

                                                th {
                                                  background-color: #4CAF50;
                                                  color: white;
                                                }

                                                td {
                                                  padding: 12px;
                                                }

                                                tr:hover {
                                                  background-color: #f5f5f5;
                                                }
                                              `;
                                    printDocument.head.appendChild(styleElement);

                                    // Fokus dan cetak dokumen di dalam iframe
                                    printFrame.window.focus();
                                    printFrame.window.print();
                                }
                            </script>










</body>

</html>
