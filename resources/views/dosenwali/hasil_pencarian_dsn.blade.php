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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"/>
</head>

<body>
    <div class="container-scroller">
        <!-- partial:partials/_navbar.html -->
        <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
            <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
                <a class="navbar-brand brand-logo mr-5" href="{{ route('dashboard_mhs') }}"><img
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
                            <i style="margin-left: 5px" class="fa fa-solid fa-caret-down">
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
                        <div class="col-lg-12 grid-margin">
                            <div class="row">
                                <div class="col-12 col-xl-8 mb-4 mb-xl-0">
                                    <h3 class="font-weight-bold"> Hasil Pencarian Mahasiswa</h3>
                                    <a style="color: black"  href="{{ route('dashboard_dsn') }}">Dashboard/</a>
                                    <a style="color: black" href="{{ route('pencarian_dsn') }}">Pencarian Mahasiswa/</a>
                                    <a class="active" href="#"> Hasil Pencarian Mahasiswa</a>
                                </div>
                            </div>
                        </div>
                    </div>




                    {{-- Pencarian  --}}
                    <div class="col-12 grid-margin stretch-card">
                        <div class="card">
                          <div class="row">
                            <div class="col-md-5">
                              <div class="card-body">
                                <h4 class="card-title">Mahasiswa</h4>
                                <table>
                                    <tr>
                                        <td class ="value">Nama</td>
                                        <td>&nbsp;&nbsp;&nbsp;:&nbsp;</td>
                                        <td class="value"> {{ $mhs->nama }}</td>
                                    </tr>
                                    <tr>
                                        <td class="value">NIM</td>
                                        <td>&nbsp;&nbsp;&nbsp;:&nbsp;</td>
                                        <td class="value"> {{ $mhs->id }}</td>
                                        <br>
                                    <tr>
                                        <td class="value">Angkatan</td>
                                        <td>&nbsp;&nbsp;&nbsp;: &nbsp;</td>
                                        <td class="value"> {{ $mhs->angkatan }}</td>
                                    </tr>
                                    <tr>
                                        <td class="value">Dosen Wali</td>
                                        <td>&nbsp;&nbsp;&nbsp;:&nbsp; </td>
                                        <td class="value"> {{ $attribute->nama }}</td>
                                    </tr>
                                </table>
                              </div>
                            </div>
                            <div class="col-md-6">
                                <div class="card-body">
                                <h4 class=""></h4>
                                <div class="template-demo">
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                    </div>

                    <br>

                    <div class="row">
                        <div class="col-md-7 grid-margin stretch-card">
                            <div class="card">
                              <div class="card-body">
                                <h4 class="card-title">Semester</h4>

                                <div class="template-demo">
                                    @for ($i = 1; $i <= 5; $i++)
                                        @php
                                        $flag1 = $irs->where('semester', $i)->first()->flag ?? 0;
                                        $flag2 = $khs->where('semester', $i)->first()->flag ?? 0;
                                        $flag3 = $pkl->where('semester', $i)->first()->flag ?? 0;
                                        $flag4 = $skripsi->where('semester', $i)->first()->flag ?? 0;
                                        @endphp

                                        @if ($flag1 == 1 && $flag2 == 1)
                                            @if ($flag4 == 1)
                                                <button type="button" class="open btn btn-success btn-icon-text trigger " data-semester="{{ $i }}" data-url="{{ $i }}">
                                            @elseif ($flag3)
                                                <button type="button" class="open btn btn-warning btn-icon-text trigger" data-semester="{{ $i }}" data-url="{{ $i }}">
                                            @else
                                                <button type="button" class="open btn btn-primary btn-icon-text trigger" data-semester="{{ $i }}" data-url="{{ $i }}">
                                            @endif
                                        @else
                                            <button type="button" class="open btn btn-danger btn-icon-text trigger" data-semester="{{ $i }}" data-url="{{ $i }}">
                                        @endif
                                            {{ $i }}
                                        </button>
                                    @endfor
                                </div>

                                <div class="template-demo">
                                    @for ($i = 6; $i <= 10; $i++)
                                        @php
                                        $flag1 = $irs->where('semester', $i)->first()->flag ?? 0;
                                        $flag2 = $khs->where('semester', $i)->first()->flag ?? 0;
                                        $flag3 = $pkl->where('semester', $i)->first()->flag ?? 0;
                                        $flag4 = $skripsi->where('semester', $i)->first()->flag ?? 0;
                                        @endphp

                                        @if ($flag1 == 1 && $flag2 == 1)
                                            @if ($flag4 == 1)
                                                <button type="button" class="open btn btn-success btn-icon-text trigger" data-semester="{{ $i }}" data-url="{{ $i }}">
                                            @elseif ($flag3)
                                                <button type="button" class="open btn btn-warning btn-icon-text trigger" data-semester="{{ $i }}" data-url="{{ $i }}">
                                            @else
                                                <button type="button" class="open btn btn-primary btn-icon-text trigger" data-semester="{{ $i }}" data-url="{{ $i }}">
                                            @endif
                                        @else
                                            <button type="button" class="open btn btn-danger btn-icon-text trigger" data-semester="{{ $i }}" data-url="{{ $i }}">
                                        @endif
                                            {{ $i }}
                                        </button>
                                    @endfor
                                </div>

                                <div class="template-demo">
                                    @for ($i = 11; $i <= 14; $i++)
                                        @php
                                        $flag1 = $irs->where('semester', $i)->first()->flag ?? 0;
                                        $flag2 = $khs->where('semester', $i)->first()->flag ?? 0;
                                        $flag3 = $pkl->where('semester', $i)->first()->flag ?? 0;
                                        $flag4 = $skripsi->where('semester', $i)->first()->flag ?? 0;
                                        @endphp

                                        @if ($flag1 == 1 && $flag2 == 1)
                                            @if ($flag4 == 1)
                                                <button type="button" class="open btn btn-success btn-icon-text trigger" data-semester="{{ $i }}" data-url="{{ $i }}">
                                            @elseif ($flag3)
                                                <button type="button" class="open btn btn-warning btn-icon-text trigger" data-semester="{{ $i }}" data-url="{{ $i }}">
                                            @else
                                                <button type="button" class="open btn btn-primary btn-icon-text trigger" data-semester="{{ $i }}" data-url="{{ $i }}">
                                            @endif
                                        @else
                                            <button type="button" class="open btn btn-danger btn-icon-text trigger" data-semester="{{ $i }}" data-url="{{ $i }}">
                                        @endif
                                            {{ $i }}
                                        </button>
                                    @endfor

                                </div>

                              </div>
                            </div>
                          </div>

                          <div class="col-md-5 grid-margin stretch-card">
                            <div class="card">
                              <div class="card-body">
                                <h4 class="card-title">Keterangan</h4>
                                <div class="form-group">

                                      <div class="form-check form-check-danger">
                                        <label class="form-check-label">
                                          <input type="radio" class="form-check-input" name="ExampleRadio4" id="ExampleRadio4" checked>
                                          Belum diisikan (IRS dan KHS) atau tidak digunakan
                                        </label>
                                      </div>

                                      <div class="form-check form-check-info">
                                        <label class="form-check-label">
                                          <input type="radio" class="form-check-input" name="ExampleRadio3" id="ExampleRadio3" checked>
                                          Sudah diisikan IRS
                                        </label>
                                      </div>

                                      <div class="form-check form-check-primary">
                                        <label class="form-check-label">
                                          <input type="radio" class="form-check-input" name="ExampleRadio1" id="ExampleRadio1" checked>
                                          Sudah diisikan (IRS dan KHS)
                                        </label>
                                      </div>

                                    <div class="form-check form-check-warning">
                                        <label class="form-check-label">
                                          <input type="radio" class="form-check-input" name="ExampleRadio5" id="ExampleRadio5" checked>
                                          Sudah Lulus PKL (IRS, KHS, dan PKL)
                                        </label>
                                    </div>
                                    <div class="form-check form-check-success">
                                        <label class="form-check-label">
                                          <input type="radio" class="form-check-input" name="ExampleRadio2" id="ExampleRadio2" checked>
                                          Sudah Lulus
                                        </label>
                                    </div>

                                  </div>
                                </div>
                              </div>
                            </div>
                    </div>

                    <div class="modals ">
                        <div class="modal-content ">
                          <div class="card col-md-7">
                            <p>
                                <div class=" stretch-card">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="tabs">
                                                <input type="radio" id="tab1" name="tab-control" checked>
                                                <input type="radio" id="tab2" name="tab-control">
                                                <ul>
                                                    <li ><label for="tab1" role="button"><svg
                                                                viewBox="0 0 24 24">
                                                                <path
                                                                    d="M14,2A8,8 0 0,0 6,10A8,8 0 0,0 14,18A8,8 0 0,0 22,10H20C20,13.32 17.32,16 14,16A6,6 0 0,1 8,10A6,6 0 0,1 14,4C14.43,4 14.86,4.05 15.27,4.14L16.88,2.54C15.96,2.18 15,2 14,2M20.59,3.58L14,10.17L11.62,7.79L10.21,9.21L14,13L22,5M4.93,5.82C3.08,7.34 2,9.61 2,12A8,8 0 0,0 10,20C10.64,20 11.27,19.92 11.88,19.77C10.12,19.38 8.5,18.5 7.17,17.29C5.22,16.25 4,14.21 4,12C4,11.7 4.03,11.41 4.07,11.11C4.03,10.74 4,10.37 4,10C4,8.56 4.32,7.13 4.93,5.82Z" />
                                                            </svg><br><span> IRS</span></label></li>
                                                    <li><label for="tab2" role="button"><svg
                                                                viewBox="0 0 24 24">
                                                                <path
                                                                    d="M2,10.96C1.5,10.68 1.35,10.07 1.63,9.59L3.13,7C3.24,6.8 3.41,6.66 3.6,6.58L11.43,2.18C11.59,2.06 11.79,2 12,2C12.21,2 12.41,2.06 12.57,2.18L20.47,6.62C20.66,6.72 20.82,6.88 20.91,7.08L22.36,9.6C22.64,10.08 22.47,10.69 22,10.96L21,11.54V16.5C21,16.88 20.79,17.21 20.47,17.38L12.57,21.82C12.41,21.94 12.21,22 12,22C11.79,22 11.59,21.94 11.43,21.82L3.53,17.38C3.21,17.21 3,16.88 3,16.5V10.96C2.7,11.13 2.32,11.14 2,10.96M12,4.15V4.15L12,10.85V10.85L17.96,7.5L12,4.15M5,15.91L11,19.29V12.58L5,9.21V15.91M19,15.91V12.69L14,15.59C13.67,15.77 13.3,15.76 13,15.6V19.29L19,15.91M13.85,13.36L20.13,9.73L19.55,8.72L13.27,12.35L13.85,13.36Z" />
                                                            </svg><br><span> KHS </span></label></li>
                                                </ul>

                                                <div class="slider">
                                                    <div class="indicator"></div>
                                                </div>
                                                <div class="content">

                                                    <section>
                                                        <h2>IRS</h2>
                                                        <div>
                                                            @php
                                                            $flag1 = $irs->where('semester', $i)->first()->flag ?? 0;
                                                            $flag2 = $khs->where('semester', $i)->first()->flag ?? 0;
                                                            $flag3 = $pkl->where('semester', $i)->first()->flag ?? 0;
                                                            $flag4 = $skripsi->where('semester', $i)->first()->flag ?? 0;

                                                            // dd($flag1, $flag2, $flag3, $flag4);

                                                            // $semesterData = $irs->where('semester', $i)->first();
                                                            $sks =$irs->jumlah_sks;
                                                            @endphp

                                                            <link
                                                                href="https://fonts.googleapis.com/css?family=Material+Icons|Material+Icons+Outlined"
                                                                rel="stylesheet">
                                                                <p id="modalContent" style="text-align: right; font-weight: bold; font-size: 40px">test</p>
                                                                <br><br>
                                                                <p style="text-align: center; font-weight: bold; font-size: 35px"> {{ $sks }}</p>
                                                                <br>
                                                                <div style="text-align: center;">
                                                                    <button type="button" class="btn btn-primary btn-rounded btn-fw float-center">View Detail</button>
                                                                </div>
                                                            <br>
                                                            <br>
                                                            <br>
                                                        </div>
                                                    </section>


                                                    <section>
                                                        <h2>KHS</h2>
                                                        <div class="card">
                                                            <div class="card-body">
                                                                <form action="{{ route('import_manual') }}" method="POST">
                                                                    @csrf
                                                                    <div class="row">
                                                                        <div class="col-md-12">
                                                                            <p style="text-align: right; font-weight: bold; font-size: 40px">1</p>

                                                                            <table>
                                                                                <tr>
                                                                                    <td style="font-size: 20px">SKS Semester</td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td style="font-size: 20px">IP Semester</td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td style="font-size: 20px">SKS Kumulatif</td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td style="font-size: 20px">IP Kumulatif</td>
                                                                                </tr>
                                                                            </table>

                                                                            <br><br>
                                                                            <div style="text-align: center;">
                                                                                <button type="button" class="btn btn-primary btn-rounded btn-fw float-center">View Detail</button>
                                                                            </div>
                                                                        </div>

                                                                    </div>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </section>
                                                </div>



                                            </div>

                                            <br>
                                        </div>

                                    </div>
                                </div>


</p>
                            <button type="button" class="close btn btn-close position-absolute" style="position: absolute;
                            top: 0;
                            right: 0;" aria-label="Close">x</button>
                          </div>
                        </div>
                      </div>
                </div>
            </div>
                            <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

                            <script>
                                $(document).ready(function () {
                                    $(".trigger").on("click", function () {
                                        var semester = $(this).data("semester");
                                        openModal(semester);
                                        return false;
                                    });

                                    function openModal(semester) {
                                        // Kirim permintaan AJAX ke backend
                                        $.ajax({
                                            type: "GET",
                                            url: "/getMahasiswaBySemester/" + semester, // Ganti dengan URL yang sesuai di Laravel
                                            success: function (data) {
                                                // Manipulasi DOM atau tampilkan data di modal
                                                console.log("Data Mahasiswa Semester " + semester + ":", data);

                                                // Tampilkan modal atau lakukan manipulasi DOM lainnya
                                                $(".modal-wrapper").toggleClass("open");
                                                $(".page-wrapper").toggleClass("blur-it");

                                            },
                                            error: function (error) {
                                                console.error("Error:", error);
                                            }
                                        });
                                    }
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

                            <!-- Modal PDF-->
                            <script>

                            document.addEventListener('DOMContentLoaded', function() {
                                var num = 15;

                                var modalButtons = document.querySelectorAll('.open');
                                var closeBtn = document.querySelector('.close');
                                var modalContainer = document.querySelector('.modals');
                                var holdModals = document.createDocumentFragment();

                                for (var i = 0; i < num; i++) {
                                    var div = document.createElement('div');
                                    div.classList.add('modal-drop');
                                    div.style.top = Math.floor((Math.random() * 100)) + 'vh';
                                    div.style.left = Math.floor((Math.random() * 100)) + 'vw';
                                    div.style.transitionDelay = Math.random() + 's';
                                    holdModals.appendChild(div);
                                }

                                modalButtons.forEach(function(modalBtn) {
                                    modalBtn.addEventListener('click', function() {
                                        modalContainer.style.display = 'block';
                                        window.setTimeout(function() {
                                            modalContainer.classList.add('active');
                                        }, 0.1);
                                    });
                                });

                                closeBtn.addEventListener('click', function() {
                                    modalContainer.classList.remove('active');

                                    window.setTimeout(function() {
                                        modalContainer.style.display = 'none';
                                    }, 3000);
                                });

                                modalContainer.appendChild(holdModals);
                            });

                            </script>
</body>

</html>
