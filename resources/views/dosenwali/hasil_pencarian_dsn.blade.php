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
                        <div class="col-lg-12 grid-margin">
                            <div class="row">
                                <div class="col-12 col-xl-8 mb-4 mb-xl-0">
                                    <h3 class="font-weight-bold"> Hasil Pencarian Mahasiswa</h3>
                                    <a style="color: black"  href="{{ route('dashboard_dsn') }}">Dashboard/</a>
                                    <a style="color: black" href="{{ route('pencarian_dsn') }}">Pencarian Mahasiswa/</a>
                                    <a class="active" href=""> Hasil Pencarian Mahasiswa</a>
                                </div>
                            </div>
                        </div>
                    </div>




                    {{-- Pencarian  --}}
                    <div class="col-12 grid-margin stretch-card">
                        <div class="card">
                                <div class="card-body">
                                    {{-- <h4 class="card-title">Mahasiswa</h4> --}}
                                    <div class="row">
                                        {{-- table --}}
                                        <div class="col-md-5">
                                            <h4 class="card-title">Mahasiswa</h4>
                                            <table>
                                                <tr>
                                                    <td class="value">Nama</td>
                                                    <td>&nbsp;&nbsp;&nbsp;:&nbsp;</td>
                                                    <td class="value">{{ $mhs->nama }}</td>
                                                </tr>
                                                <tr>
                                                    <td class="value">NIM</td>
                                                    <td>&nbsp;&nbsp;&nbsp;:&nbsp;</td>
                                                    <td class="value">{{ $mhs->id }}</td>
                                                </tr>
                                                <tr>
                                                    <td class="value">Angkatan</td>
                                                    <td>&nbsp;&nbsp;&nbsp;:&nbsp;</td>
                                                    <td class="value">{{ $mhs->angkatan }}</td>
                                                </tr>
                                                <tr>
                                                    <td class="value">Dosen Wali</td>
                                                    <td>&nbsp;&nbsp;&nbsp;:&nbsp;</td>
                                                    <td class="value">{{ $attribute->nama }}</td>
                                                </tr>
                                            </table>
                                        </div>


                                        {{-- foto --}}
                                        <div class="col-md-7">
                                            <div id="imagePreview">
                                                <img class="rounded float-start" src="{{ $mhs->foto != null ? asset('storage/'.$mhs->foto) : 'https://sso.undip.ac.id/assets/app/images/user.png' }}" alt="{{ $mhs->nama }}" style="width: 120px; height: auto;">
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
                                    @php
                                        $end_flag = 0;
                                    @endphp
                                    @if ($end_flag == 0)
                                        @for ($i = 1; $i <= 5; $i++)
                                        @php
                                        $flag1 = $irs->where('semester', $i)->first()->flag ?? 0;
                                        $flag2 = $khs->where('semester', $i)->first()->flag ?? 0;
                                        $flag3 = $pkl->where('semester', $i)->first()->flag ?? 0;
                                        $flag4 = $skripsi->where('semester', $i)->first()->flag ?? 0;
                                        @endphp

                                            @if ($flag1 == 1)
                                                @if ($flag2 == 1)
                                                    @if ($flag4 == 1)
                                                        @php
                                                            $type='success';
                                                            $smt=$i;
                                                            $end_flag = 1;
                                                        @endphp
                                                    @elseif ($flag3 == 1)
                                                        @php
                                                            $type='warning';
                                                            $smt=$i;
                                                        @endphp
                                                    @else
                                                        @php
                                                            $type='primary';
                                                            $smt=$i;
                                                        @endphp
                                                    @endif
                                                @else
                                                    @php
                                                        $type='info';
                                                        $smt=$i;
                                                    @endphp
                                                @endif
                                            @else
                                                @php
                                                    $type='danger';
                                                    $smt=$i;
                                                @endphp
                                            @endif
                                            @if ($end_flag == 1)
                                                <a href="{{ route('semester_pencarian', ['id'=>$id,'smt'=>$smt]) }}">
                                                    <button type="button" class="open btn btn-{{ $type }} btn-icon-text trigger">{{ $i }}</button>
                                                </a>
                                                @for ($j = $i + 1; $j <= 5; $j++)
                                                    <a href="">
                                                        <button type="button" class="open btn btn-danger btn-icon-text trigger">{{ $j }}</button>
                                                    </a>
                                                    @php
                                                        $last=$j;
                                                    @endphp
                                                @endfor
                                                @break
                                            @else
                                                @if ($type == 'danger')
                                                    <a href="">
                                                        <button type="button" class="open btn btn-{{ $type }} btn-icon-text trigger">{{ $i }}</button>
                                                    </a>
                                                @else
                                                    <a href="{{ route('semester_pencarian', ['id'=>$id,'smt'=>$smt]) }}">
                                                        <button type="button" class="open btn btn-{{ $type }} btn-icon-text trigger">{{ $i }}</button>
                                                    </a>
                                                @endif
                                                
                                            @endif
                                        @endfor
                                    @else
                                        @for ($j = $last + 1; $j <= 5; $j++)
                                            <a href="">
                                                <button type="button" class="open btn btn-danger btn-icon-text trigger">{{ $j }}</button>
                                            </a>
                                        @endfor
                                    @endif

                                </div>

                                <br>

                                <div class="template-demo">
                                    @if ($end_flag == 0)
                                        @for ($i = 6; $i <= 10; $i++)
                                        @php
                                        $flag1 = $irs->where('semester', $i)->first()->flag ?? 0;
                                        $flag2 = $khs->where('semester', $i)->first()->flag ?? 0;
                                        $flag3 = $pkl->where('semester', $i)->first()->flag ?? 0;
                                        $flag4 = $skripsi->where('semester', $i)->first()->flag ?? 0;
                                        @endphp
                                            @if ($flag1 == 1)
                                                @if ($flag2 == 1)
                                                    @if ($flag4 == 1)
                                                        @php
                                                            $type='success';
                                                            $smt=$i;
                                                            $end_flag = 1;
                                                        @endphp
                                                    @elseif ($flag3 == 1)
                                                        @php
                                                            $type='warning';
                                                            $smt=$i;
                                                        @endphp
                                                    @else
                                                        @php
                                                            $type='primary';
                                                            $smt=$i;
                                                        @endphp
                                                    @endif
                                                @else
                                                    @php
                                                        $type='info';
                                                        $smt=$i;
                                                    @endphp
                                                @endif
                                            @else
                                                @php
                                                    $type='danger';
                                                    $smt=$i;
                                                @endphp
                                            @endif
                                            @if ($end_flag == 1)
                                                <a href="{{ route('semester_pencarian', ['id'=>$id,'smt'=>$smt]) }}">
                                                    <button type="button" class="open btn btn-{{ $type }} btn-icon-text trigger">{{ $i }}</button>
                                                </a>
                                                @for ($j = $i + 1; $j <= 10; $j++)
                                                    <a href="">
                                                        <button type="button" class="open btn btn-danger btn-icon-text trigger">{{ $j }}</button>
                                                    </a>
                                                    @php
                                                        $last=$j;
                                                    @endphp
                                                @endfor
                                                @break
                                            @else
                                                @if ($type == 'danger')
                                                    <a href="">
                                                        <button type="button" class="open btn btn-{{ $type }} btn-icon-text trigger">{{ $i }}</button>
                                                    </a>
                                                @else
                                                    <a href="{{ route('semester_pencarian', ['id'=>$id,'smt'=>$smt]) }}">
                                                        <button type="button" class="open btn btn-{{ $type }} btn-icon-text trigger">{{ $i }}</button>
                                                    </a>
                                                @endif
                                            @endif
                                        @endfor
                                    @else
                                        @for ($j = $last + 1; $j <= 10; $j++)
                                            <a href="">
                                                <button type="button" class="open btn btn-danger btn-icon-text trigger">{{ $j }}</button>
                                            </a>
                                        @endfor
                                    @endif
                                </div>
                                <br>


                                <div class="template-demo">
                                    @if ($end_flag == 0)
                                        @for ($i = 11; $i <= 14; $i++)
                                        @php
                                        $flag1 = $irs->where('semester', $i)->first()->flag ?? 0;
                                        $flag2 = $khs->where('semester', $i)->first()->flag ?? 0;
                                        $flag3 = $pkl->where('semester', $i)->first()->flag ?? 0;
                                        $flag4 = $skripsi->where('semester', $i)->first()->flag ?? 0;
                                        @endphp
                                            @if ($flag1 == 1)
                                                @if ($flag2 == 1)
                                                    @if ($flag4 == 1)
                                                        @php
                                                            $type='success';
                                                            $smt=$i;
                                                            $end_flag = 1;
                                                        @endphp
                                                    @elseif ($flag3 == 1)
                                                        @php
                                                            $type='warning';
                                                            $smt=$i;
                                                        @endphp
                                                    @else
                                                        @php
                                                            $type='primary';
                                                            $smt=$i;
                                                        @endphp
                                                    @endif
                                                @else
                                                    @php
                                                        $type='info';
                                                        $smt=$i;
                                                    @endphp
                                                @endif
                                            @else
                                                @php
                                                    $type='danger';
                                                    $smt=$i;
                                                @endphp
                                            @endif
                                            @if ($end_flag == 1)
                                                <a href="{{ route('semester_pencarian', ['id'=>$id,'smt'=>$smt]) }}">
                                                    <button type="button" class="open btn btn-{{ $type }} btn-icon-text trigger">{{ $i }}</button>
                                                </a>
                                                @for ($j = $i + 1; $j <= 14; $j++)
                                                    <a href="">
                                                        <button type="button" class="open btn btn-danger btn-icon-text trigger">{{ $j }}</button>
                                                    </a>
                                                    @php
                                                        $last=$j;
                                                    @endphp
                                                @endfor
                                                @break
                                            @else
                                                @if ($type == 'danger')
                                                <a href="">
                                                    <button type="button" class="open btn btn-{{ $type }} btn-icon-text trigger">{{ $i }}</button>
                                                </a>
                                                @else
                                                    <a href="{{ route('semester_pencarian', ['id'=>$id,'smt'=>$smt]) }}">
                                                        <button type="button" class="open btn btn-{{ $type }} btn-icon-text trigger">{{ $i }}</button>
                                                    </a>
                                                @endif
                                            @endif
                                        @endfor
                                    @else
                                        @for ($j = $last +1; $j <= 14; $j++)
                                            <a href="">
                                                <button type="button" class="open btn btn-danger btn-icon-text trigger">{{ $j }}</button>
                                            </a>
                                        @endfor
                                    @endif

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


                            <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

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
                            {{-- <script>

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

                            </script> --}}
</body>

</html>
