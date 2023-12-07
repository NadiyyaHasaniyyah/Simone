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
                    {{-- NOTIFIKASI --}}
                    @php
                        $irs = DB::table('irs')->where('mhs_id', $attribute->id)->get();
                        $khs = DB::table('khs')->where('mhs_id', $attribute->id)->get();
                        $pkls = DB::table('pkls')->where('mhs_id', $attribute->id)->get();
                        $skripsis = DB::table('skripsis')->where('mhs_id', $attribute->id)->get();
                    @endphp
                    <li class="nav-item dropdown">
                        <a class="nav-link count-indicator dropdown-toggle" id="notificationDropdown" href="#"
                            data-toggle="dropdown">
                            <i class="icon-bell mx-0"></i>
                            <span class="count"></span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list"
                            aria-labelledby="notificationDropdown">
                            <p class="mb-0 font-weight-normal float-left dropdown-header">Notifications</p>

                            {{-- MULAI DARI SINI --}}

                            {{-- IRS --}}
                            @foreach($irs as $irsItem)
                                @if($irsItem->flag == -1)
                                    <a class="dropdown-item preview-item">
                                        <div class="preview-thumbnail">
                                            <div class="preview-icon bg-info">
                                                <i class="fa fa-tasks mx-0"></i>
                                            </div>
                                        </div>
                                        <div class="preview-item-content">
                                            <h6 class="preview-subject font-weight-normal">IRS</h6>
                                            <p class="font-weight-light small-text mb-0 text-muted">
                                                IRS untuk semester {{ $irsItem->semester }} ditolak.
                                            </p>
                                        </div>
                                    </a>
                                @endif
                            @endforeach

                            {{-- KHS --}}
                            @foreach($khs as $khsItem)
                                @if($khsItem->flag == -1)
                                    <a class="dropdown-item preview-item">
                                        <div class="preview-thumbnail">
                                            <div class="preview-icon bg-primary">
                                                <i class="fa fa-file-text-o  mx-0"></i>
                                            </div>
                                        </div>
                                        <div class="preview-item-content">
                                            <h6 class="preview-subject font-weight-normal">KHS</h6>
                                            <p class="font-weight-light small-text mb-0 text-muted">
                                                KHS untuk semester {{ $khsItem->semester }} ditolak.
                                            </p>
                                        </div>
                                    </a>
                                @endif
                            @endforeach

                            {{-- PKL --}}
                            @foreach($pkls as $pklItem)
                                @if($pklItem->flag == -1)
                                    <a class="dropdown-item preview-item">
                                        <div class="preview-thumbnail">
                                            <div class="preview-icon bg-warning">
                                                <i class="fa fa-tasks mx-0"></i>
                                            </div>
                                        </div>
                                        <div class="preview-item-content">
                                            <h6 class="preview-subject font-weight-normal">PKL</h6>
                                            <p class="font-weight-light small-text mb-0 text-muted">
                                                PKL untuk semester {{ $pklItem->semester }} ditolak.
                                            </p>
                                        </div>
                                    </a>
                                @endif
                            @endforeach

                            {{-- SKRIPSI --}}
                            @foreach($skripsis as $skripsiItem)
                                @if($skripsiItem->flag == -1)
                                    <a class="dropdown-item preview-item">
                                        <div class="preview-thumbnail">
                                            <div class="preview-icon bg-warning">
                                                <i class="fa fa-tasks mx-0"></i>
                                            </div>
                                        </div>
                                        <div class="preview-item-content">
                                            <h6 class="preview-subject font-weight-normal">SKRIPSI</h6>
                                            <p class="font-weight-light small-text mb-0 text-muted">
                                                SKRIPSI untuk semester {{ $skripsiItem->semester }} ditolak.
                                            </p>
                                        </div>
                                    </a>
                                @endif
                            @endforeach
                        </div>
                    </li>
                    <li class="nav-item nav-profile dropdown">
                        <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" id="profileDropdown">
                            {{ $attribute->nama }} <i style="margin-left: 5px" class="fa fa-solid fa-caret-down">
                            </i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right navbar-dropdown"
                            aria-labelledby="profileDropdown">
                            <a class="dropdown-item" href="{{ route('reset_password_mhs') }}">
                                <i class="ti-lock text-primary"></i>
                                Reset Password
                            </a>
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
                        <a class="nav-link" href="{{ route('dashboard_mhs') }}">
                            <i class="icon-grid menu-icon"></i>
                            <span class="menu-title">Dashboard</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="irs">
                            <i class="fa fa-tasks menu-icon"></i>
                            <span class="menu-title">IRS</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="khs">
                            <i class="fa fa-file-text-o menu-icon"></i>
                            <span class="menu-title">KHS</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="pkl">
                            <i class="fa fa-newspaper-o  menu-icon"></i>
                            <span class="menu-title">PKL</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="skripsi">
                            <i class="fa fa-columns menu-icon"></i>
                            <span class="menu-title">Skripsi</span>
                        </a>
                    </li>
                </ul>
            </nav>

            <!-- Dashboard -->
            <div class="main-panel">
                <div class="content-wrapper">
                    <div class="row">
                        <div class="col-md-12 grid-margin">
                            <div class="row">
                                <div class="col-12 col-xl-8 mb-4 mb-xl-0">
                                    <h3 class="font-weight-bold">Praktik Kerja Lapangan</h3>
                                    <a style="color: black" href="{{ route('dashboard_mhs') }}">Dashboard/</a><a
                                         class="active"  href="irs">Praktik Kerja Lapangan</a>

                                </div>
                            </div>
                        </div>
                        {{-- error success --}}
                        <div class="form-group row col-sm-10" style="margin-left: 6px;">
                            @if(session('error'))
                                <div class="alert alert-danger">
                                    {{ session('error') }}
                                </div>
                            @endif

                            @if(session('success'))
                                <div class="alert alert-success">
                                    {{ session('success') }}
                                </div>
                            @endif
                        </div>

                        {{-- IRS --}}
                        <div class="col-11 stretch-card" style="margin: auto">
                            <div class="card">
                                {{-- Verifikasi --}}
                                {{-- <div class=" submit ">
                                    <button name="verif" value="verif"
                                        class="btn btn-primary "
                                        type="button">Verifikasi</button>
                                </div> --}}

                                <div class="card-body">
                                    <div class="tabs">
                                        <input type="radio" id="tab1" name="tab-control" checked>
                                        <input type="radio" id="tab2" name="tab-control">
                                        <ul>
                                            <li title="Features"><label for="tab1" role="button"><svg
                                                        viewBox="0 0 24 24">
                                                        <path
                                                            d="M14,2A8,8 0 0,0 6,10A8,8 0 0,0 14,18A8,8 0 0,0 22,10H20C20,13.32 17.32,16 14,16A6,6 0 0,1 8,10A6,6 0 0,1 14,4C14.43,4 14.86,4.05 15.27,4.14L16.88,2.54C15.96,2.18 15,2 14,2M20.59,3.58L14,10.17L11.62,7.79L10.21,9.21L14,13L22,5M4.93,5.82C3.08,7.34 2,9.61 2,12A8,8 0 0,0 10,20C10.64,20 11.27,19.92 11.88,19.77C10.12,19.38 8.5,18.5 7.17,17.29C5.22,16.25 4,14.21 4,12C4,11.7 4.03,11.41 4.07,11.11C4.03,10.74 4,10.37 4,10C4,8.56 4.32,7.13 4.93,5.82Z" />
                                                    </svg><br><span>Isi PKL</span></label></li>
                                            <li title="Delivery Contents"><label for="tab2" role="button"><svg
                                                        viewBox="0 0 24 24">
                                                        <path
                                                            d="M2,10.96C1.5,10.68 1.35,10.07 1.63,9.59L3.13,7C3.24,6.8 3.41,6.66 3.6,6.58L11.43,2.18C11.59,2.06 11.79,2 12,2C12.21,2 12.41,2.06 12.57,2.18L20.47,6.62C20.66,6.72 20.82,6.88 20.91,7.08L22.36,9.6C22.64,10.08 22.47,10.69 22,10.96L21,11.54V16.5C21,16.88 20.79,17.21 20.47,17.38L12.57,21.82C12.41,21.94 12.21,22 12,22C11.79,22 11.59,21.94 11.43,21.82L3.53,17.38C3.21,17.21 3,16.88 3,16.5V10.96C2.7,11.13 2.32,11.14 2,10.96M12,4.15V4.15L12,10.85V10.85L17.96,7.5L12,4.15M5,15.91L11,19.29V12.58L5,9.21V15.91M19,15.91V12.69L14,15.59C13.67,15.77 13.3,15.76 13,15.6V19.29L19,15.91M13.85,13.36L20.13,9.73L19.55,8.72L13.27,12.35L13.85,13.36Z" />
                                                    </svg><br><span>Hasil PKL</span></label></li>
                                        </ul>

                                        <div class="slider">
                                            <div class="indicator"></div>
                                        </div>
                                        <div class="content">
                                            <section>
                                                <h2>Isi KHS</h2>
                                                <div class="card">
                                                    <div class="card-body">

                                                        {{-- FORM --}}
                                                        {{-- {{dd($valid)}} --}}
                                                        <form action="{{ route('pkl') }}" method="POST" enctype="multipart/form-data">
                                                            @csrf


                                                            {{-- Semester --}}
                                                            <div class="form-group row" style="margin: auto">
                                                                <label for="Status"
                                                                    class="col-sm-3 col-form-label"
                                                                    style="font-size: 16px; font-weight: bold; color: #000;">Semester</label>
                                                                <div class="col-sm-7">
                                                                    <select
                                                                        class="form-control @error('semester') is-invalid @enderror"
                                                                        name="semester" id="semester" {{ $valid ? 'enabled' : 'disabled' }}>
                                                                        <option>pilih semester </option>
                                                                        {{-- <option value="1">1</option>
                                                                        <option value="2">2</option>
                                                                        <option value="3">3</option>
                                                                        <option value="4">4</option>
                                                                        <option value="5">5</option> --}}
                                                                        <option value="6">6</option>
                                                                        <option value="7">7</option>
                                                                        <option value="8">8</option>
                                                                        <option value="9">9</option>
                                                                        <option value="10">10</option>
                                                                        <option value="11">11</option>
                                                                        <option value="12">12</option>
                                                                        <option value="13">13</option>
                                                                        <option value="14">14</option>
                                                                    </select>
                                                                </div>

                                                                @error('semester')
                                                                    <div class="invalid-feedback">{{ $message }}
                                                                    </div>
                                                                @enderror
                                                            </div>

                                                            {{-- Status --}}
                                                            {{-- <div class="form-group row" style="margin: auto">
                                                                <label for="Status"
                                                                    class="col-sm-3 col-form-label"
                                                                    style="font-size: 16px; font-weight: bold; color: #000;">Status</label>
                                                                <div class="col-sm-7">
                                                                    <select name="status" id="status" class="form-control @error('jumlah_sks') is-invalid @enderror" value="{{ old('status') }}">
                                                                        <option value="Lulus">Lulus</option>
                                                                    </select>
                                                                    @error('status')
                                                                        <div class="invalid-feedback">{{ $message }}
                                                                        </div>
                                                                    @enderror
                                                                </div>
                                                            </div> --}}
                                                            <br>
                                                            {{-- Nilai --}}
                                                            <div class="form-group row" style="margin: auto">
                                                              <label for="nilai"
                                                                  class="col-sm-3 col-form-label"
                                                                  style="font-size: 16px; font-weight: bold; color: #000;">Nilai</label>
                                                              <div class="col-sm-7">
                                                                  {{-- <input type="text"
                                                                      class="form-control @error('nilai') is-invalid @enderror"
                                                                      name="nilai" id="nilai"
                                                                      value="{{ old('nilai') }}"  > --}}
                                                                      <select
                                                                        class="form-control @error('nilai') is-invalid @enderror"
                                                                        name="nilai" id="nilai"
                                                                        {{ $valid ? 'enabled' : 'disabled' }}
                                                                        value="{{ old('nilai') }}">
                                                                        <option>pilih nilai </option>
                                                                        <option value="A">A</option>
                                                                        <option value="B">B</option>
                                                                        <option value="C">C</option>
                                                                        <option value="D">D</option>
                                                                        <option value="E">E</option>
                                                                    </select>

                                                                  @error('nilai')
                                                                      <div class="invalid-feedback">{{ $message }}
                                                                      </div>
                                                                  @enderror
                                                              </div>
                                                          </div>
                                                            <br>

                                                            <div class="form-group row" style="margin: auto">
                                                                <label class="col-sm-3"
                                                                    style="font-size: 16px; font-weight: bold; color: #000;">Scan Berita Acara</label>
                                                                <input type="file" name="file_pkl"
                                                                    class="  file-upload-default  @error ('file_pkl') is-invalid @enderror"
                                                                    name="file_pkl" id="file_pkl" accept = ".pdf"
                                                                    value="{{ old('file_pkl') }} "  >
                                                                <div class="input-group col-sm-7">
                                                                    <input type="text"
                                                                        class="form-control file-upload-info" disabled
                                                                        placeholder="Upload">
                                                                    <span class="input-group-append">
                                                                        <button
                                                                            class="file-upload-browse btn btn-primary"
                                                                            type="button"
                                                                            {{ $valid ? 'enabled' : 'disabled' }}>Upload</button>
                                                                    </span>
                                                                </div>
                                                            </div>


                                                            <br>
                                                            <div class=" submit " style="margin-left: 15px">
                                                                <button type="submit" name="submit" value="submit"
                                                                    class="btn btn-primary "
                                                                    type="button">Simpan</button>
                                                            </div>

                                                            <br>

                                                        </form>
                                                    </div>
                                                </div>

                                            </section>
                                            <section>
                                                <h2>IRS</h2>
                                                <div class="grid-margin stretch-card" >
                                                    <div class="card">
                                                        <div class="card-body">
                                                            <h4 class="card-title"> Hasil PKL</h4>
                                                            <p class="card-description">
                                                                {{ $attribute->nama }} - {{ $attribute->id }}
                                                            </p>

                                                            @php
                                                                $datapkl = DB::table('pkls')->where('mhs_id', $attribute->id)->first();
                                                            @endphp

                                                            @if ($datapkl)
                                                                <div class="table-responsive">
                                                                    <table class="table table-hover">
                                                                        <thead>
                                                                            <tr>
                                                                                <th>Semester</th>
                                                                                <th>Nilai</th>
                                                                                <th>File Berita Acara</th>
                                                                                <th>Action</th>
                                                                            </tr>
                                                                        </thead>
                                                                        <tbody>
                                                                            <tr>
                                                                                <td>{{ $datapkl->semester }}</td>
                                                                                <td>{{ $datapkl->nilai }}</td>
                                                                                <td>
                                                                                    <a href="{{ route('view_pdf_pkl', ['semester' => $datapkl->semester]) }}">
                                                                                        <button
                                                                                            class="btn btn-inverse-primary btn-fw trigger" >File</button>
                                                                                    </a>
                                                                                        <span class="overlay"></span>
                                                                                </td>
                                                                                <td>
                                                                                    @if ($datapkl->flag == 0)
                                                                                        <a href="{{ route('pkl_edit', ['semester' => $datapkl->semester]) }}">
                                                                                            <button type="button" class="btn btn-success btn-ico " style="margin-right: 10px">Edit</button>
                                                                                        </a>

                                                                                        <form action="{{ route('pkl_destroy', ['semester' => $datapkl->semester]) }}" method="POST" class="d-inline">
                                                                                            @method('delete')
                                                                                            @csrf
                                                                                            <button type="submit" class="btn btn-inverse-danger btn-icon"> <i class="ti-trash"></i></button>
                                                                                        </form>
                                                                                    @elseif ($datapkl->flag == 1)
                                                                                        <button type="button" class="btn btn-success btn-rounded btn-ico "><i class="ti-check"></i></button>
                                                                                    @elseif ($datapkl->flag == -1)
                                                                                        <button type="button" class="btn btn-danger btn-rounded btn-ico "><i class="ti-close"></i></button>

                                                                                        <a href="{{ route('pkl_edit', ['semester' => $datapkl->semester]) }}">
                                                                                            <button type="button" class="btn btn-success btn-ico " style="margin-right: 10px">Edit</button>
                                                                                        </a>
                                                                                    @endif
                                                                                </td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>
                                                                </div>
                                                            @else
                                                                <h5>Belum mengisi PKL</h5>
                                                            @endif
                                                          </div>
                                                        </div>
                                                      </div>
                                            </section>

                                        </div>
                                        <div class="modal-wrapper"  >
                                            <div class="modal">
                                              <div class="head">
                                                <a class="btn-close trigger" href="#">

                                                </a>
                                              </div>
                                              <div class="content" >
                                                <div class="good-job">
                                                    <br>
                                                    <img src="{{ asset('style1/skydash/images/logoo.png') }}" style="margin:auto; width:60%;">
                                                </div>
                                              </div>
                                            </div>
                                          </div>
                                    </div>

                                </div>





                                <!-- page-body-wrapper ends -->
                            </div>
                            <!-- container-scroller -->


                            <!-- plugins:js -->
                            <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
                            {{-- <script>
                              $(document).ready(function () {
                                $(".trigger").on("click", function () {
                                  $(".modal-wrapper").toggleClass("open");
                                  $(".page-wrapper").toggleClass("blur-it");
                                  return false;
                                });
                              });
                            </script> --}}
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
