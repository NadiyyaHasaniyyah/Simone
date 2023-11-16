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
                            <span class="menu-title">Verifikasi Progress Studi</span>
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
                                    <a class="active" href="{{ route('dashboard_dsn') }}">Dashboard/</a>
                                    <a style="color: black" href="pencarian_dsn">Pencarian Mahasiswa/</a>
                                    <a style="color: black" href="hasil_pencarian_dsn"> Hasil Pencarian Mahasiswa</a>
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
                                    {{-- Bagian foto --}}
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
                                                <button type="button" class="btn btn-success btn-icon-text">
                                            @elseif ($flag3)
                                                <button type="button" class="btn btn-warning btn-icon-text">
                                            @else
                                                <button type="button" class="btn btn-primary btn-icon-text">
                                            @endif
                                        @else
                                            <button type="button" class="btn btn-danger btn-icon-text">
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
                                                <button type="button" class="btn btn-success btn-icon-text">
                                            @elseif ($flag3)
                                                <button type="button" class="btn btn-warning btn-icon-text">
                                            @else
                                                <button type="button" class="btn btn-primary btn-icon-text">
                                            @endif
                                        @else
                                            <button type="button" class="btn btn-danger btn-icon-text">
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
                                                <button type="button" class="btn btn-success btn-icon-text">
                                            @elseif ($flag3)
                                                <button type="button" class="btn btn-warning btn-icon-text">
                                            @else
                                                <button type="button" class="btn btn-primary btn-icon-text">
                                            @endif
                                        @else
                                            <button type="button" class="btn btn-danger btn-icon-text">
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
                                          <input type="checkbox" class="form-check-input" checked>
                                          Belum diisikan (IRS dan KHS) atau tidak digunakan
                                        </label>
                                      </div>
                                    <div class="form-check form-check-primary">
                                      <label class="form-check-label">
                                        <input type="checkbox" class="form-check-input" checked>
                                        Sudah diisikan (IRS dan KHS)
                                      </label>
                                    </div>
                                    <div class="form-check form-check-warning">
                                        <label class="form-check-label">
                                          <input type="checkbox" class="form-check-input" checked>
                                          Sudah Lulus PKL (IRS, KHS, dan PKL)
                                        </label>
                                      </div>
                                    <div class="form-check form-check-success">
                                      <label class="form-check-label">
                                        <input type="checkbox" class="form-check-input" checked>
                                        Sudah Lulus
                                      </label>
                                    </div>

                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                    </div>




                        <!-- content-wrapper ends -->
                        <!-- partial:../../partials/_footer.html -->
                        <footer class="footer">
                          <div class="d-sm-flex justify-content-center justify-content-sm-between">
                            <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright © 2021.  Premium <a href="https://www.bootstrapdash.com/" target="_blank">Bootstrap admin template</a> from BootstrapDash. All rights reserved.</span>
                            <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Hand-crafted & made with <i class="ti-heart text-danger ml-1"></i></span>
                          </div>
                        </footer>
                        <!-- partial -->








                </div>


            </div>


                                <!-- page-body-wrapper ends -->
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

                            <!-- Modal PDF-->



</body>

</html>

