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


            <!-- Dashboard -->
            <div class="main-panel">
                <div class="content-wrapper">
                    <div class="row">
                        <div class="col-md-12 grid-margin">
                            <div class="row">

                            </div>
                        </div>

                        {{-- Reset Password --}}
                        <div class="col-8 stretch-card" style="margin: auto">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">Reset Password</h4>
                                    <br>
                                  <form class="forms-sample" action="{{ route('reset_password_update') }}" method="POST">
                                    @method('PUT')
                                    @csrf
                                        <div class="form-group">
                                        <label for="password">Password Lama</label>
                                        <input type="password" id="password" name="password" class="form-control @error('password') is-invalid @enderror" required placeholder="Password Lama">
                                        @error('password')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                        </div>

                                        <div class="form-group">
                                        <label for="password_baru">Password Baru</label>
                                        <input type="password" id="password_baru" name="password_baru" class="form-control  @error('password_baru') is-invalid @enderror" required placeholder="Password Baru">
                                        @error('password_baru')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                        </div>

                                        <div class="form-group">
                                            <label for="password_baru_confirmation">Konfirmasi Password Baru</label>
                                            <input type="password" id="password_baru_confirmation" name="password_baru_confirmation" class="form-control @error('password_baru_confimation') is-invalid @enderror" required placeholder="Konfirmasi Password Baru">
                                        @error('password_baru_confirmation')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                        </div>

                                        <button type="submit" class="btn btn-primary mr-2">Simpan</button>
                                  </form>
                                </div>
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
