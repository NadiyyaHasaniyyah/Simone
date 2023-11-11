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

    <!-- profile card -->
    <link rel="stylesheet" href="{{ asset('style1/skydash/css/operator/profile_opt.css') }}">

    <!-- verif doswal -->
    <link href="{{ asset('style1/verifikasi.css') }}" rel="stylesheet">

</head>
<style>
    /* CSS untuk tampilan layar dengan lebar kurang dari 768px */
    @media (max-width: 767px) {
        .row {
            flex-direction: column;
        }

        .col-md-6,
        .col-md-4 {
            width: 100%;
        }
    }

    /* CSS untuk tampilan layar dengan lebar 768px atau lebih */
    @media (min-width: 768px) {
        .row {
            display: flex;
        }

        .col-md-6 {
            width: 50%;
        }

        .col-md-4 {
            width: 33.33%;
        }
    }
</style>

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
                            {{ $attribute->nama }} <i style="margin-left: 5px" class="fa fa-solid fa-caret-down">
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
                        <div class="col-md-12 grid-margin">
                            <div class="row">
                                <div class="col-lg-12 grid-margin">
                                    <div class="row">
                                        <div class="col-12 col-xl-8 mb-4 mb-xl-0">
                                            <h3 class="font-weight-bold"> Verifikasi Progress</h3>
                                            <a class="active" href="{{ route('dashboard_dsn') }}">Verifikasi
                                                Progress</a>
                                        </div>
                                    </div>
                                </div>



                                {{-- IRS --}}
                                <div class="col-12 stretch-card" style="margin: auto">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="tabs">
                                                <input type="radio" id="tab1" name="tab-control" checked>
                                                <input type="radio" id="tab2" name="tab-control">
                                                <input type="radio" id="tab3" name="tab-control">
                                                <input type="radio" id="tab4" name="tab-control">
                                                <ul>
                                                    <li title="IRS"><label for="tab1"
                                                            role="button"><br><span>IRS</span></label></li>
                                                    <li title="KHS"><label for="tab2"
                                                            role="button"><br><span>KHS </span></label></li>
                                                    <li title="PKL"><label for="tab3"
                                                            role="button"><br><span>PKL </span></label></li>
                                                    <li title="Skripsi"><label for="tab4"
                                                            role="button"><br><span>Skripsi </span></label></li>
                                                </ul>

                                                <div class="slider">
                                                    <div class="indicator"></div>
                                                </div>
                                                <div class="content">

                                                    {{-- IRS --}}
                                                    <section>
                                                        <h2>IRS</h2>
                                                        <div class="card">
                                                            <div class="card-body">
                                                                <div class="strecth-card" style="margin: auto">
                                                                    {{-- Pencarian  --}}
                                                                    <div class="row">
                                                                        <div
                                                                            class="col-md-12  stretch-card transparent">
                                                                            <div class="card ">
                                                                                <div class="card-body">
                                                                                    <h4 class="card-title">Cari
                                                                                        Mahasiswa</h4>
                                                                                    <form class="form-group">
                                                                                        <div class="input-group">
                                                                                            <input type="text"
                                                                                                class="form-control"
                                                                                                id="search"
                                                                                                placeholder="Cari nama"
                                                                                                style="height: 70%">

                                                                                        </div>
                                                                                    </form>
                                                                                    <h4 class="card-title">Hasil
                                                                                        Pencarian</h4>
                                                                                    <div class="table-responsive">
                                                                                        <table class="table"
                                                                                            id="TabelMahasiswa">
                                                                                            <thead>
                                                                                                <tr>
                                                                                                    <th>
                                                                                                        No
                                                                                                    </th>
                                                                                                    <th>
                                                                                                        Nama
                                                                                                    </th>
                                                                                                    <th>
                                                                                                        NIM
                                                                                                    </th>
                                                                                                    <th>
                                                                                                        Angkatan
                                                                                                    </th>
                                                                                                    <th>
                                                                                                        Action
                                                                                                    </th>
                                                                                                    <th>
                                                                                                        SKS
                                                                                                    </th>
                                                                                                </tr>
                                                                                            </thead>
                                                                                            <tbody>
                                                                                                <tr>
                                                                                                    <td class="py-1">
                                                                                                        1
                                                                                                    </td>
                                                                                                    <td>
                                                                                                        Jambi
                                                                                                    </td>
                                                                                                    <td>
                                                                                                        20001
                                                                                                    </td>
                                                                                                    <td>
                                                                                                        2021
                                                                                                    </td>
                                                                                                    <td>
                                                                                                        <button
                                                                                                            class="btn btn-primary">
                                                                                                            Action
                                                                                                        </button>
                                                                                                    </td>
                                                                                                    <td>
                                                                                                        20
                                                                                                    </td>
                                                                                                </tr>

                                                                                                <tr>
                                                                                                    <td class="py-1">
                                                                                                        2
                                                                                                    </td>
                                                                                                    <td>
                                                                                                        Natusha
                                                                                                    </td>
                                                                                                    <td>
                                                                                                        20004
                                                                                                    </td>
                                                                                                    <td>
                                                                                                        2022
                                                                                                    </td>
                                                                                                    <td>
                                                                                                        <button
                                                                                                            class="btn btn-primary">
                                                                                                            Action
                                                                                                        </button>
                                                                                                    </td>
                                                                                                    <td>
                                                                                                        20
                                                                                                    </td>
                                                                                                </tr>
                                                                                            </tbody>

                                                                                        </table>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>







                                                                    </div>
                                                                </div>






                                                            </div>
                                                    </section>





                                                    {{-- KHS --}}
                                                    <section>
                                                        <h2>KHS</h2>
                                                        <div class="card">
                                                            <div class="card-body">
                                                                <div class="strecth-card" style="margin: auto">
                                                                    {{-- Pencarian  --}}
                                                                    <div class="row">
                                                                        <div
                                                                            class="col-md-12  stretch-card transparent">
                                                                            <div class="card ">
                                                                                <div class="card-body">
                                                                                    <h4 class="card-title">Cari
                                                                                        Mahasiswa</h4>
                                                                                    <form class="form-group">
                                                                                        <div class="input-group">
                                                                                            <input type="text"
                                                                                                class="form-control"
                                                                                                id="search"
                                                                                                placeholder="Cari nama"
                                                                                                style="height: 70%">

                                                                                        </div>
                                                                                    </form>
                                                                                    <h4 class="card-title">Hasil
                                                                                        Pencarian</h4>
                                                                                    <div class="table-responsive">
                                                                                        <table class="table"
                                                                                            id="TabelMahasiswa">
                                                                                            <thead>
                                                                                                <tr>
                                                                                                    <th>
                                                                                                        No
                                                                                                    </th>
                                                                                                    <th>
                                                                                                        Nama
                                                                                                    </th>
                                                                                                    <th>
                                                                                                        NIM
                                                                                                    </th>
                                                                                                    <th>
                                                                                                        Angkatan
                                                                                                    </th>
                                                                                                    <th>
                                                                                                        Action
                                                                                                    </th>
                                                                                                    <th>
                                                                                                        SKSK
                                                                                                    </th>
                                                                                                </tr>
                                                                                            </thead>
                                                                                            <tbody>
                                                                                                <tr>
                                                                                                    <td class="py-1">
                                                                                                        1
                                                                                                    </td>
                                                                                                    <td>
                                                                                                        Jambi
                                                                                                    </td>
                                                                                                    <td>
                                                                                                        20001
                                                                                                    </td>
                                                                                                    <td>
                                                                                                        2021
                                                                                                    </td>
                                                                                                    <td>
                                                                                                        <button
                                                                                                            class="btn btn-primary">
                                                                                                            Action
                                                                                                        </button>
                                                                                                    </td>
                                                                                                    <td>
                                                                                                        20
                                                                                                    </td>
                                                                                                </tr>

                                                                                                <tr>
                                                                                                    <td class="py-1">
                                                                                                        2
                                                                                                    </td>
                                                                                                    <td>
                                                                                                        Natusha
                                                                                                    </td>
                                                                                                    <td>
                                                                                                        20004
                                                                                                    </td>
                                                                                                    <td>
                                                                                                        2022
                                                                                                    </td>
                                                                                                    <td>
                                                                                                        <button
                                                                                                            class="btn btn-primary">
                                                                                                            Action
                                                                                                        </button>
                                                                                                    </td>
                                                                                                    <td>
                                                                                                        20
                                                                                                    </td>
                                                                                                </tr>
                                                                                            </tbody>

                                                                                        </table>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>







                                                                    </div>
                                                                </div>




                                                    </section>
                                                </div>

                                            </div>

                                        </div>

                                    </div>
                                    <br>
                                    <br>

                                </div>
                            </div>



                        </div>

                    </div>

                    {{-- Card yang pertama campuran --}}









                    <br><br><br><br>

                    <!-- partial:partials/_footer.html -->
                    <footer class="footer">
                        <div class="d-sm-flex justify-content-center justify-content-sm-between">
                            <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Proyek
                                Perangkat Lunak © 2023. All rights reserved.</span>
                            <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Tugas Besar
                                Informatika <i class="ti-heart text-danger ml-1"></i></span>
                        </div>
                        <div class="d-sm-flex justify-content-center justify-content-sm-between">
                            <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Oleh: Alif,
                                Adji, Ririn, Nadiyya</a></span>
                        </div>
                    </footer>
                    <!-- partial -->
                </div>
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

        <!-- endinject -->
        <!-- Custom js for this page-->
        <script src="{{ asset('style1/skydash/js/dashboard.js') }}"></script>
        <script src="{{ asset('style1/skydash/js/Chart.roundedBarCharts.js') }}"></script>

        <!-- Verifikasi -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
        <script>
            $(document).ready(function() {
                $('#search').keyup(function() {
                    search_table($(this).val());
                });

                function search_table(value) {
                    $('#TabelMahasiswa tr').each(function() {
                        var found = 'false';
                        $(this).each(function() {
                            if ($(this).text().toLowerCase().indexOf(value.toLowerCase()) >= 0) {
                                found = 'true';
                            }
                        });
                        if (found == 'true') {
                            $(this).show();
                        } else {
                            $(this).hide();
                        }
                    });
                }
            });
        </script>

</body>

</html>