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
                        </div>
                    </li>
                    <li class="nav-item nav-profile dropdown">
                        <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" id="profileDropdown">
                            {{ $operator->nama }}<i style="margin-left: 5px" class="fa fa-solid fa-caret-down">
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
                                    <h3 class="font-weight-bold">Update Akun Mahasiswa</h3>
                                    <a style="color: black" href="{{ route('dashboard_opt') }}">Dashboard/</a>
                                    <a class="active" href="{{ route('managemen') }}">Manajemen Akun Mahasiswa/</a>
                                    <a href="">Update Akun Mahasiswa</a>
                                </div>
                            </div>
                        </div>
                    </div>
                         {{-- session succes or error --}}
                         <div class="form-group pesan " style="margin-left: 6px;">
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

                    {{-- UPDATE --}}
                    <div class="container" style="margin: 30px;">
                        <div class="row">
                            <div class="col-md-12 grid-margin stretch-card">
                                <div class="card">
                                    <div class="card-body">
                                        <form action="{{ route('updateManagemen',['id'=>$mhs->id]) }}" method="POST">
                                            @csrf
                                            @method('PUT')
                                            <div class="row">
                                                <div class="col-md-6">
                                                    {{-- nama --}}
                                                    <div class="form-group">
                                                        <label for="nama" class="font-weight-bold @error('nama') is-invalid @enderror">Nama</label>
                                                        <input type="text" name="nama" id="nama" class="form-control" value="{{ $mhs->nama }}">
                                                        @error('nama')
                                                            <div class="invalid-feedback">{{ $message }}</div>
                                                        @enderror
                                                    </div>

                                                    {{-- nim --}}
                                                    <div class="form-group">
                                                        <label for="id" class="font-weight-bold @error('id') is-invalid @enderror">NIM</label>
                                                        <input type="text" name="id" id="id" class="form-control" value="{{ $mhs->id }}">
                                                        @error('id')
                                                            <div class="invalid-feedback">{{ $message }}</div>
                                                        @enderror
                                                    </div>

                                                    {{-- email --}}
                                                    <div class="form-group">
                                                        <label for="email" class="font-weight-bold @error('email') is-invalid @enderror">Email</label>
                                                        <input type="text" name="email" id="email" class="form-control" value="{{ $mhs->email }}">
                                                        @error('email')
                                                            <div class="invalid-feedback">{{ $message }}</div>
                                                        @enderror
                                                    </div>
                                                </div>

                                                <div class="col-md-6">
                                                    {{-- nomor telepon --}}
                                                    <div class="form-group">
                                                        <label for="nomor_tlp" class="font-weight-bold @error('nomor_tlp') is-invalid @enderror">Nomor Telepon</label>
                                                        <input type="text" name="nomor_tlp" id="nomor_tlp" class="form-control" value="{{ $mhs->nomor_tlp }}">
                                                        @error('nomor_tlp')
                                                            <div class="invalid-feedback">{{ $message }}</div>
                                                        @enderror
                                                    </div>

                                                    {{-- status --}}
                                                    <div class="form-group @error('status') is-invalid @enderror">
                                                        <label for="status" class="font-weight-bold">Status </label>
                                                        <select class="form-control" name="status" id="status">
                                                            <option value="aktif" {{ $mhs->status == "aktif" ? 'selected' : '' }}>Aktif</option>
                                                            <option value="cuti" {{ $mhs->status == "cuti" ? 'selected' : '' }}>Cuti</option>
                                                            <option value="mangkir" {{ $mhs->status == "mangkir" ? 'selected' : '' }}>Mangkir</option>
                                                            <option value="drop out" {{ $mhs->status == "drop out" ? 'selected' : '' }}>Drop Out</option>
                                                            <option value="meninggal" {{ $mhs->status == "meninggal" ? 'selected' : '' }}>Meninggal</option>
                                                            <option value="undur diri" {{ $mhs->status == "undur diri" ? 'selected' : '' }}>Undur Diri</option>
                                                            <option value="lulus" {{ $mhs->status == "lulus" ? 'selected' : '' }}>Lulus</option>
                                                        </select>
                                                        @error('status')
                                                            <div class="invalid-feedback">{{ $message }}</div>
                                                        @enderror
                                                    </div>

                                                    {{-- button --}}
                                                    <br><br>
                                                    <div class="form-group" id="" >
                                                        <button type="submit" name="submit" value="submit"
                                                            class="btn btn-primary btn-block" type="button">Simpan</button>
                                                    </div>

                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
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

         <script>
        function updateStatus(selectElement, id) {
    $.ajax({
        url: "{{ url('operator/managemen') }}" + '/' + id,
        method: 'PUT',
        data: {
            status: selectElement.value,
            _token: '{{ csrf_token() }}',
        },
        success: function(response) {
            // Tambahkan logika lain yang Anda perlukan di sini
            $('.pesan').html('<div class="alert alert-success">Status berhasil diubah!</div>');
        },

    });
}

    </script>



</body>

</html>
