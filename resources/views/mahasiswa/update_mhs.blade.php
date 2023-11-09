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
    <meta name="viewport" content="width=device-width, initial-scale=1">

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
                    <li class="nav-item active">
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
                                    <h3 class="font-weight-bold">Update Mahasiswa</h3>
                                    <h6 class="font-weight-normal mb-0">
                                        <a href="{{ route('dashboard_mhs') }}">Dashboard/</a>
                                        <a style="color: black" href="pencarian_dsn">Update Mahasiswa</a>
                                    </h6>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- Nyoba dewek --}}

                    <section>
                        <div class="card">
                            <div class="card-content pr-3">
                                <div class="card-body">
                                    <div class="row " >
                                        <div class="col-md-2" >
                                            <img src="https://sso.undip.ac.id/assets/app/images/user.png" style="max-width: 150px;width: 100%;" alt="foto">
                                            <div class = "round">
                                                <input class=" @error('foto') is-invalid @enderror" type="file" name="foto" id ="foto" accept = ".jpg, .jpeg, .png" onchange="previewImage()">
                                                @error('foto')
                                                    <div class="invalid-feedback">{{ $message }}</div>
                                                @enderror
                                            </div>
                                       </div>

                                        <div class="col-md-3">
                                            <div class="form-group " id="" style="margin: 0px; font-size: 11px; font-weight: bold; ">
                                                <label for="" class=" font-weight-bold " >NIM</label> <span class="grey"><i>*tidak dapat diubah</i></span>
                                                <div class="">
                                                    <input type="text" class="form-control" style="height: 20px" placeholder="{{ $attribute->id }}" id="nim" disabled />
                                                </div>
                                            </div><br>

                                            <div class="form-group" id="" style="margin: 0px; font-size: 11px; font-weight: bold; ">
                                                <label for="" class=" font-weight-bold">Angkatan</label> <span class="grey"><i>*tidak dapat diubah</i></span>
                                                <input type="text" class="form-control" style="height: 20px"  id="angkatan" value="{{ $attribute->angkatan }}" disabled />
                                            </div><br>

                                            <div class="form-group" id="" style="margin: 0px; font-size: 11px; font-weight: bold; ">
                                                <label for="" class="font-weight-bold">Nama</label> <span class="grey"></span>
                                                <input type="text" class="form-control @error('nama') is-invalid @enderror" style="height: 20px" value="{{ $attribute->nama }}"/>
                                                @error('nama')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                                @enderror
                                            </div><br>

                                            <div class="form-group" id="" style="margin: 0px; font-size: 11px; font-weight: bold; ">
                                                <label for="" class="font-weight-bold">Email</label> <span class="grey"></span>
                                                <input type="text" class="form-control @error('email_pribadi') is-invalid @enderror" style="height: 20px" id="email_pribadi" value="{{ $attribute->email_pribadi }}"/>
                                                @error('email_pribadi')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                                @enderror
                                            </div> <br>

                                            <div class="form-group" id="" style="margin: 0px; font-size: 11px; font-weight: bold; ">
                                                <label for="" class="font-weight-bold">No.Telepon</label> <span class="grey"></span>
                                                <input type="text" class="form-control @error('nomor_tlp') is-invalid @enderror" style="height: 20px" id="nomor_tlp" value="{{ $attribute->nomor_tlp }}"/>
                                                @error('nomor_tlp')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                                @enderror
                                            </div> <br>

                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group" id="" style="margin: 0px; font-size: 11px; font-weight: bold; ">
                                                <label for="" class="font-weight-bold">Fakultas</label> <span class="grey"><i>*tidak dapat diubah</i></span>
                                                <input type="text" class="form-control @error('fakultas') is-invalid @enderror" style="height: 20px" id="Fakultas" value="{{ $attribute->fakultas }}" disabled/>
                                                @error('fakultas')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                                @enderror
                                            </div> <br>
                                            <div class="form-group" id="" style="margin: 0px; font-size: 11px; font-weight: bold; ">
                                                <label for="" class="font-weight-bold">Departemen</label> <span class="grey"><i>*tidak dapat diubah</i></span>
                                                <input type="text" class="form-control @error('departemen') is-invalid @enderror" style="height: 20px" id="Departemen" value="{{ $attribute->departemen}}" disabled/>
                                                @error('departemen')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                                @enderror
                                            </div> <br>
                                            <div class="form-group" id="" style="margin: 0px; font-size: 11px; font-weight: bold; ">
                                                <label for="" class="font-weight-bold">Jalur Masuk</label> <span class="grey"></span>
                                                <select class="col-sm-12 form-control @error('jalur_masuk') is-invalid @enderror" style="height: 30px" name="jalur_masuk" id="jalur_masuk">
                                                    <option value="">Pilih Jalur Masuk</option>
                                                    <option value="SBMPTN">SBMPTN</option>
                                                    <option value="SNMPTN">SNMPTN</option>
                                                    <option value="Mandiri">Mandiri</option>
                                                    <option value="SPBUB">SPBUB</option>
                                                </select>
                                                @error('jalur_masuk')
                                                    <div class="invalid-feedback">{{ $message }}</div>
                                                @enderror
                                            </div> <br>
                                            <div class="form-group" id="" style="margin: 0px; font-size: 11px; font-weight: bold; ">
                                                <label for="" class="font-weight-bold">Status</label> <span class="grey"></span>
                                                <select class="col-sm-12 form-control @error('status') is-invalid @enderror" style="height: 30px" name="status" type="status" class="form-control" id="status" value="{{ $attribute->status }}">
                                                    <option value="Aktif">Aktif</option>
                                                    <option value="Cuti">Cuti</option>
                                                    <option value="Mangkir">Mangkir</option>
                                                    <option value="DO">DO</option>
                                                    <option value="Undur Diri">Undur Diri</option>
                                                </select>
                                                @error('status')
                                                    <div class="invalid-feedback">{{ $message }}</div>
                                                @enderror
                                            </div> <br>
                                        </div>

                                        <div class="col-md-4">
                                            <div class="form-group" id="" style="margin: 0px; font-size: 11px; font-weight: bold; ">
                                                <label for="provinsi" class="font-weight-bold">Provinsi</label> <span class="grey"></span>
                                                <select class="col-sm-9 form-control @error('provinsi') is-invalid @enderror" style="height: 30px" name="provinsi" id="provinsi">
                                                    <option  value="">Pilih Provinsi...</option>
                                                    @foreach ($provinces as $provinsi)
                                                        <option value="{{ $provinsi->id }}" >{{ $provinsi->name }}</option>
                                                    @endforeach
                                                </select>
                                                @error('provinsi')
                                                    <div class="invalid-feedback">{{ $message }}</div>
                                                @enderror
                                            </div> <br>
                                            <div class="form-group" id="" style="margin: 0px; font-size: 11px; font-weight: bold; ">
                                                <label for="kabupaten" class="font-weight-bold">Kabupaten</label> <span class="grey"><i>*tidak dapat diubah</i></span>
                                                <select class="col-sm-9 form-control @error('kabupaten') is-invalid @enderror" style="height: 30px" name="kabupaten" id="kabupaten">
                                                    <option  value="">Pilih Kabupaten...</option>
                                                </select>
                                                @error('kabupaten')
                                                    <div class="invalid-feedback">{{ $message }}</div>
                                                @enderror
                                            </div> <br>
                                            <div class="form-group" id="">
                                                <label for="" class="font-weight-bold">Alamat</label> <span class="grey"></span>
                                                <textarea class="col-sm-12 form-control @error('alamat') is-invalid @enderror" name="alamat" name="alamat" class="form-control" id="alamat" cols="30" rows="5" value="{{ $attribute->alamat }}"></textarea>
                                                @error('alamat')
                                                    <div class="invalid-feedback">{{ $message }}</div>
                                                @enderror
                                            </div> <br>
                                            <br><br><br><br><br>
                                            <div class="form-group" id="">
                                                <button type="button" class="col-sm-12 btn btn-primary">Simpan</button>
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




                <!-- partial:partials/_footer.html -->
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
                <!-- partial -->
            </div>
            <!-- main-panel ends -->
        </div>
        <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->

    {{-- KABUPATEN --}}
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <script>
        $(document).ready(function(){
            $.ajaxSetup({
                headers:{
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            })
        });

        $(function (){
            $('#provinsi').on('change', function(){
                let id_provinsi = $('#provinsi').val();

                $.ajax({
                    type : 'POST',
                    url: "{{ route('getKabupaten') }}",
                    data:{
                        id_provinsi:id_provinsi
                    },
                    cache:false,

                    success:function(msg){
                        $('#kabupaten').html(msg);
                    },

                    error:function(data){
                        console.log(data);
                    },
                });
            })
        });
    </script>

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

    <!-- End custom js for this page-->
</body>

</html>
