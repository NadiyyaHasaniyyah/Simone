<!DOCTYPE html>
<html lang="en">

<head>

    <link rel="shortcut icon" href="{{ asset('style1/skydash/images/logo-mini.svg') }}">
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

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
    <!-- endinject -->
    <link href="{{ asset('style1/generate.css') }}" rel="stylesheet">

</head>

<body>
    <div class="container-scroller">
        <!-- partial:partials/_navbar.html -->
        <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
            <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
                <a class="navbar-brand brand-logo mr-5" href="{{ route('dashboard_opt') }}"><img
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
                            </a>

                        </div>
                    </li>
                    <li class="nav-item nav-profile dropdown">
                        <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" id="profileDropdown">
                            {{ $operator->nama }} <i style="margin-left: 5px" class="fa fa-solid fa-caret-down">
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
            <div class="theme-setting-wrapper">
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
                        <div class="col-lg-12">
                            <h3 class="font-weight-bold">Generate</h3>
                            <a style="color: black" href="{{ route('dashboard_opt') }}">Dashboard/</a><a
                            class="active" href="{{ route('generate') }}">Generate Akun Mahasiswa</a>
                        </div>
                    </div>
                    <br>

                                        {{-- Generate --}}
                                        <div class="col-12 stretch-card" style="margin: auto;">
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
                                                                    </svg><br><span> Csv Generate</span></label></li>
                                                            <li><label for="tab2" role="button"><svg
                                                                        viewBox="0 0 24 24">
                                                                        <path
                                                                            d="M2,10.96C1.5,10.68 1.35,10.07 1.63,9.59L3.13,7C3.24,6.8 3.41,6.66 3.6,6.58L11.43,2.18C11.59,2.06 11.79,2 12,2C12.21,2 12.41,2.06 12.57,2.18L20.47,6.62C20.66,6.72 20.82,6.88 20.91,7.08L22.36,9.6C22.64,10.08 22.47,10.69 22,10.96L21,11.54V16.5C21,16.88 20.79,17.21 20.47,17.38L12.57,21.82C12.41,21.94 12.21,22 12,22C11.79,22 11.59,21.94 11.43,21.82L3.53,17.38C3.21,17.21 3,16.88 3,16.5V10.96C2.7,11.13 2.32,11.14 2,10.96M12,4.15V4.15L12,10.85V10.85L17.96,7.5L12,4.15M5,15.91L11,19.29V12.58L5,9.21V15.91M19,15.91V12.69L14,15.59C13.67,15.77 13.3,15.76 13,15.6V19.29L19,15.91M13.85,13.36L20.13,9.73L19.55,8.72L13.27,12.35L13.85,13.36Z" />
                                                                    </svg><br><span> Generate satu-satu </span></label></li>
                                                        </ul>

                                                        <div class="slider">
                                                            <div class="indicator"></div>
                                                        </div>
                                                        <div class="content">

                                                            <section>
                                                                <h2>Csv Generate</h2>
                                                                <div>
                                                                    <link
                                                                        href="https://fonts.googleapis.com/css?family=Material+Icons|Material+Icons+Outlined"
                                                                        rel="stylesheet">
                                                                    <form action="generate/upload" method="POST" class="form-container"
                                                                        enctype='multipart/form-data'>
                                                                        @csrf
                                                                        <div>
                                                                            <div class="upload-files-container card stretch-card">
                                                                                <span class="cannot-upload-message">
                                                                                    <span class="material-icons-outlined">error</span>
                                                                                    Please select a file first <span
                                                                                        class="material-icons-outlined cancel-alert-button">cancel</span>
                                                                                </span>
                                                                                <div class="file-block">
                                                                                    <div class="file-info">
                                                                                        <span
                                                                                            class="material-icons-outlined file-icon">description</span>
                                                                                        <span class="file-name"></span> | <span
                                                                                            class="file-size"></span>
                                                                                    </div>
                                                                                    <span
                                                                                        class="material-icons remove-file-icon">delete</span>
                                                                                    <div class="progress-bar"></div>
                                                                                </div>
                                                                                <label class="label">
                                                                                    <div class="browse-files">
                                                                                        <input type="file" name="file"
                                                                                            id ="file" accept = ".csv"
                                                                                            onchange="previewImage()">
                                                                                        <div
                                                                                            style="display: flex; align-items: center; justify-content: center;">
                                                                                            <i class="ti-upload btn-icon-prepend"></i> <br>
                                                                                            <p class="browse-files-text browse">select file
                                                                                                from device</p>
                                                                                        </div>

                                                                                    </div>
                                                                                </label>

                                                                                {{-- SUBMIT FILE --}}
                                                                                <button type="submit" name="submit" value="submit"
                                                                                    class="btn btn-inverse-primary btn-fw"
                                                                                    type="button">Submit</button>
                                                                            </div>
                                                                        </div>
                                                                    </form>
                                                                    <br>

                                                                    <div class="page-wrapper col-lg-6" style="margin: auto">
                                                                        <form action="{{ route('import_mhs') }}" method="POST">
                                                                            @csrf
                                                                            {{-- GENERATE --}}
                                                                            <button type="submit" name="submit" value="submit"
                                                                                class="btn btn-primary btn-block"
                                                                                type="button">GENERATE</button>
                                                                        </form>
                                                                    </div>

                                                                    <br>
                                                                    <br>
                                                                </div>

                                                            </section>

                                                            {{-- Manual Generate --}}
                                                            <section>
                                                                <h2>Generate satu-satu</h2>
                                                                <div class="card">
                                                                    <div class="card-body">
                                                                        <form action="{{ route('import_manual') }}" method="POST">
                                                                            @csrf
                                                                            <div class="row">
                                                                                <div class="col-md-6">
                                                                                    {{-- Kolom pertama --}}
                                                                                    {{-- Nama --}}
                                                                                    <div class="form-group row" style="margin: auto">
                                                                                        <label for="nama" class="col-sm-3 col-gen"
                                                                                            name="nama" id="nama"
                                                                                            style="font-size: 13px; font-weight: bold; color: #000; ">
                                                                                            Nama</label>
                                                                                        <div class="col-sm-9">
                                                                                            <input type="text"
                                                                                                class="form-control @error('nama') is-invalid @enderror"
                                                                                                name="nama" id="nama"
                                                                                                value="{{ old('nama') }}">
                                                                                            {{-- <input type="text" class="form-control"
                                                                                                style="height: 60%"> --}}
                                                                                            @error('nama')
                                                                                                <div class="invalid-feedback">
                                                                                                    {{ $message }}</div>
                                                                                            @enderror
                                                                                        </div>
                                                                                    </div>
                                                                                    <br>

                                                                                    {{-- NIM --}}
                                                                                    <div class="form-group row" style="margin: auto">
                                                                                        <label for="id" class="col-sm-3 col-gen"
                                                                                            name="id" id="id"
                                                                                            style="font-size: 13px; font-weight: bold; color: #000;">
                                                                                            NIM</label>
                                                                                        <div class="col-sm-9">
                                                                                            <input type="text"
                                                                                                class="form-control @error('id') is-invalid @enderror"
                                                                                                name="id" id="id"
                                                                                                value="{{ old('id') }}">
                                                                                            {{-- <input type="text" class="form-control"
                                                                                                style="height: 60%"> --}}
                                                                                            @error('id')
                                                                                                <div class="invalid-feedback">
                                                                                                    {{ $message }}</div>
                                                                                            @enderror
                                                                                        </div>
                                                                                    </div>
                                                                                    <br>

                                                                                    {{-- Angkatan --}}

                                                                                </div>



                                                                                <div class="col-md-6">
                                                                                    <div class="form-group row" style="margin: auto">
                                                                                        <label for="angkatan" class="col-sm-3 col-gen"
                                                                                            name="angkatan" id="angkatan"
                                                                                            style="font-size: 13px; font-weight: bold; color: #000;">
                                                                                            Angkatan </label>
                                                                                        <div class="col-sm-9">
                                                                                            <select
                                                                                                class="form-control @error('angkatan') is-invalid @enderror"
                                                                                                name="angkatan" id="angkatan">
                                                                                                <option value="" selected disabled>
                                                                                                    Pilih Angkatan</option>
                                                                                                <option value="2023">2023</option>
                                                                                                <option value="2023">2022</option>
                                                                                                <option value="2021">2021</option>
                                                                                                <option value="2020">2020</option>
                                                                                                <option value="2019">2019</option>
                                                                                                <option value="2018">2018</option>
                                                                                                <option value="2017">2017</option>
                                                                                            </select>
                                                                                            @error('angkatan')
                                                                                                <div class="invalid-feedback">
                                                                                                    {{ $message }}</div>
                                                                                            @enderror
                                                                                        </div>
                                                                                    </div>
                                                                                    <br>
                                                                                    <div class="form-group row" style="margin: auto">
                                                                                        <label for="dsn_id" class="col-sm-3 col-gen"
                                                                                            name="dsn_id" id="dsn_id"
                                                                                            style="font-size: 13px; font-weight: bold; color: #000;">
                                                                                            Dosen ID
                                                                                        </label>
                                                                                        <div class="col-sm-9">
                                                                                            <select
                                                                                                class="form-control @error('dsn_id') is-invalid @enderror"
                                                                                                name="dsn_id" id="dsn_id">
                                                                                                <option value="" selected disabled>
                                                                                                    Pilih Dosen</option>
                                                                                                @foreach ($dosen as $item)
                                                                                                    <option value="{{ $item->id }}">
                                                                                                        {{ $item->nama }}</option>
                                                                                                @endforeach
                                                                                            </select>
                                                                                            @error('dsn_id')
                                                                                                <div class="invalid-feedback">
                                                                                                    {{ $message }}</div>
                                                                                            @enderror
                                                                                        </div>
                                                                                    </div>
                                                                                    <br>

                                                                                    {{-- Email --}}
                                                                                    {{-- <div class="form-group row" style="margin: auto">
                                                                                        <label for="email" class="col-sm-3 col-gen" name="email" id="email"
                                                                                            style="font-size: 13px; font-weight: bold; color: #000;">
                                                                                            Email</label>
                                                                                            <div class="col-sm-9">
                                                                                                <input type="text"
                                                                                                class="form-control @error('email') is-invalid @enderror"
                                                                                                name="email" id="email"
                                                                                                value="{{ old('email') }}"  >
                                                                                            @error('email')
                                                                                                <div class="invalid-feedback">{{ $message }}</div>
                                                                                            @enderror
                                                                                            </div>
                                                                                    </div> --}}

                                                                                    {{-- Password --}}
                                                                                    {{-- <div class="form-group row" style="margin: auto">
                                                                                        <label for="password" class="col-sm-3 col-gen" name="password" id="password"
                                                                                            style="font-size: 13px; font-weight: bold; color: #000;">
                                                                                            Password </label>
                                                                                            <div class="col-sm-9">
                                                                                                <input type="text"
                                                                                                class="form-control @error('password') is-invalid @enderror"
                                                                                                name="password" id="password"
                                                                                                value="{{ old('password') }}"  >

                                                                                            @error('password')
                                                                                                <div class="invalid-feedback">{{ $message }}</div>
                                                                                            @enderror
                                                                                            </div>
                                                                                    </div> --}}

                                                                                    <br><br>
                                                                                    <div class="simpan"
                                                                                        style="margin: auto; margin-right: 15px;">
                                                                                        <button type="simpan" name="simpan"
                                                                                            id="simpan"
                                                                                            class="col-sm-3 btn btn-primary float-right">Simpan</button>
                                                                                    </div>
                                                                                </div>

                                                                            </div>
                                                                            <br>
                                                                            <br>




                                                                        </form>
                                                                    </div>
                                                                </div>
                                                            </section>
                                                        </div>



                                                    </div>

                                                    <br>
                                                </div>



                                                <!-- partial:partials/_footer.html -->

                                                <!-- partial -->
                                            </div>
                                        </div>

                    <br><br>
                    {{-- Tabel Akun Mahasiswa --}}
                    <div class="strecth-card" style="margin: auto">
                        <div class="card">
                            <div class="card-body">



                                <div class="container">


                                    <div class="row">

                                        <div class="col-12">
                                            <h3 class="titulo-tabla"> Akun Mahasiswa</h3>


                                            <table id="ejemplo" class="table" style="width:100%">
                                                <thead>
                                                    <tr>
                                                        <th>Nama</th>
                                                        <th>NIM</th>
                                                        {{-- <th>Email</th> --}}
                                                        <th>Angkatan</th>
                                                        <th>Password</th>
                                                        <th>Dosen ID</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach ($mahasiswa as $item)
                                                        <tr>
                                                            <td>{{ $item->nama }}</td>
                                                            <td>{{ $item->id }}</td>
                                                            {{-- <td>{{ $item->email }}</td> --}}
                                                            <td>{{ $item->angkatan }}</td>
                                                            <td>ini password</td>
                                                            <td>{{ $item->dsn_id }}</td>
                                                        </tr>
                                                    @endforeach
                                                </tbody>


                                            </table>




                                        </div>
                                    </div>






                                </div>

                            </div>

                        </div>

                    </div>
                    <br>
                    <br>



                    <br><br>
                    <footer class="footer">
                        <div class="d-sm-flex justify-content-center justify-content-sm-between">
                            <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Proyek
                                Perangkat Lunak © 2023. All rights reserved.</span>
                            <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Tugas
                                Besar Informatika <i class="ti-heart text-danger ml-1"></i></span>
                        </div>
                        <div class="d-sm-flex justify-content-center justify-content-sm-between">
                            <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Oleh:
                                Alif, Adji, Ririn, Nadiyya</a></span>
                        </div>
                    </footer>
                    <!-- main-panel ends -->
                </div>
                <!-- page-body-wrapper ends -->
            </div>
            <!-- container-scroller -->


            <!-- plugins:js -->
            <script src="vendors/js/vendor.bundle.base.js"></script>
            <script src="{{ asset('style1/skydash/vendors/js/vendor.bundle.base.js') }}"></script>
            <!-- endinject -->
            <!-- Plugin js for this page -->
            <script src="{{ asset('style1/skydash/vendors/chart.js/Chart.min.js') }}"></script>
            <script src="{{ asset('style1/skydash/vendors/datatables.net/jquery.dataTables.js') }}"></script>
            <script src="{{ asset('style1/skydash/vendors/datatables.net-bs4/dataTables.bootstrap4.js') }}"></script>
            <script src="{{ asset('style1/skydash/js/dataTables.select.min.js') }}"></script>
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
            <script>
                function readURL(input) {
                    if (input.files && input.files[0]) {

                        var reader = new FileReader();

                        reader.onload = function(e) {
                            $('.image-upload-wrap').hide();

                            $('.file-upload-image').attr('src', e.target.result);
                            $('.file-upload-content').show();

                            $('.image-title').html(input.files[0].name);
                        };

                        reader.readAsDataURL(input.files[0]);

                    } else {
                        removeUpload();
                    }
                }

                function removeUpload() {
                    $('.file-upload-input').replaceWith($('.file-upload-input').clone());
                    $('.file-upload-content').hide();
                    $('.image-upload-wrap').show();
                }
                $('.image-upload-wrap').bind('dragover', function() {
                    $('.image-upload-wrap').addClass('image-dropping');
                });
                $('.image-upload-wrap').bind('dragleave', function() {
                    $('.image-upload-wrap').removeClass('image-dropping');
                });
            </script>

            <script></script>
            <!-- endinject -->
            <!-- Custom js for this page-->
            <script src="{{ asset('style1/skydash/js/dashboard.js') }}"></script>
            <script src="{{ asset('style1/skydash/js/Chart.roundedBarCharts.js') }}"></script>

            <!-- End custom js for this page-->
            <script>
                var idioma = {
                    sProcessing: "...",
                    sLengthMenu: " MENU ",
                    sZeroRecords: "Tidak Ada ",
                    sEmptyTable: "Kosong",
                    sInfo: " Halaman _START_ dari total  _TOTAL_ Mahasiswa",
                    sInfoEmpty: "Mahasiswa 0 dari 0 total 0 ",
                    sInfoFiltered: "(total  MAX Mahasiswa)",
                    sInfoPostFix: "",
                    sSearch: "Cari:",
                    sUrl: "",
                    sInfoThousands: ",",
                    sLoadingRecords: "...",
                    oPaginate: {
                        sFirst: "First",
                        sLast: "Last",
                        sNext: "Next",
                        sPrevious: "Prev"
                    },
                    oAria: {
                        sSortAscending: ": Ascending",
                        sSortDescending: ": Descending"
                    },
                    buttons: {
                        copyTitle: "Informasi copy",
                        copyKeys: "Use your keyboard or menu to select the copy command",
                        copySuccess: {
                            _: "%d ",
                            1: "1 Berhasil tercopy"
                        },
                        pageLength: {
                            _: "Jumlah filter :  %d"
                        }
                    }
                };

                $(document).ready(function() {
                    $(".dataTables_filter").css("display", "block");
                    $(".dataTables_filter input").css("height", "50%");
                    var table = $("#ejemplo").DataTable({
                        paging: true,
                        lengthChange: true,
                        searching: true,
                        ordering: true,
                        info: true,
                        autoWidth: true,
                        language: idioma,
                        lengthMenu: [
                            [5, 10, 20],
                            [5, 10, 50]
                        ],
                        dom: 'Bfrt<"col-md-6 inline"i> <"col-md-2 inline"p>',
                        buttons: [{
                                extend: "copyHtml5",
                                text: '<i class="fa fa-clipboard"></i>Copy',
                                title: "Generate Akun",
                                titleAttr: "Copy",
                                className: "btn btn-app export barras",
                                exportOptions: {
                                    columns: [0, 1, 2, 3, 4]
                                }
                            },
                            {
                                extend: "pdfHtml5",
                                text: '<i class="fa fa-file-pdf-o"></i>PDF',
                                title: "Generate Akun",
                                titleAttr: "PDF",
                                className: "btn btn-app export pdf",
                                exportOptions: {
                                    columns: [0, 1, 2, 3, 4]
                                },
                                customize: function(doc) {
                                    doc.styles.title = {
                                        color: "#4c8aa0",
                                        fontSize: 30,
                                        alignment: "center"
                                    };
                                    doc.styles["td:nth-child(2)"] = {
                                        width: "100px",
                                        "max-width": "100px"
                                    };
                                    doc.styles.tableHeader = {
                                        fillColor: "#4c8aa0",
                                        color: "white",
                                        alignment: "center"
                                    };
                                    doc.content[1].margin = [100, 0, 100, 0];
                                }
                            },
                            {
                                extend: "excelHtml5",
                                text: '<i class="fa fa-file-excel-o"></i>Excel',
                                title: "Generate Akun ",
                                titleAttr: "Excel",
                                className: "btn btn-app export excel",
                                exportOptions: {
                                    columns: [0, 1, 2, 3, 4]
                                }
                            },
                            {
                                extend: "csvHtml5",
                                text: '<i class="fa fa-file-text-o"></i>CSV',
                                title: "Generate Akun ",
                                titleAttr: "CSV",
                                className: "btn btn-app export csv",
                                exportOptions: {
                                    columns: [0, 1, 2, 3, 4]
                                }
                            },
                            {
                                extend: "print",
                                text: '<i class="fa fa-print"></i>Print',
                                title: "Generate Akun",
                                titleAttr: "Print",
                                className: "btn btn-app export imprimir",
                                exportOptions: {
                                    columns: [0, 1, 2, 3, 4]
                                }
                            },
                            {
                                extend: "pageLength",
                                className: "select"
                            }
                        ]
                    });
                });
            </script>
            <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

            <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.1/js/bootstrap.min.js"></script>
            <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
            <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
            <script src="https://cdn.datatables.net/buttons/1.5.2/js/dataTables.buttons.min.js"></script>
            <script src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.bootstrap4.min.js"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/pdfmake.min.js"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/vfs_fonts.js"></script>
            <script src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.html5.min.js"></script>
            <script src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.print.min.js"></script>
            <script src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.colVis.min.js"></script>
            <link rel="stylesheet" type="text/css"
                href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
            <link rel="stylesheet" type="text/css"
                href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css">
            <link rel="stylesheet" type="text/css"
                href="https://cdn.datatables.net/buttons/1.5.2/css/buttons.bootstrap4.min.css">
            <link rel="stylesheet" type="text/css"
                href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">



</body>

</html>
