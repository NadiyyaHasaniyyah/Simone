<!DOCTYPE html>
<html lang="en">

<head>
  <link rel="shortcut icon"  href="{{asset('style1/skydash/images/logo-mini.svg')}}">
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
  <link href="{{asset('style1/skydash/vendors/feather/feather.css')}}" rel="stylesheet">
  <link href="{{asset('style1/skydash/vendors/ti-icons/css/themify-icons.css')}}" rel="stylesheet">
  <link href="{{asset('style1/skydash/vendors/css/vendor.bundle.base.css')}}" rel="stylesheet">
  <link href="{{asset('style1/skydash/vendors/css/vendor.bundle.base.css')}}" rel="stylesheet">
  <!-- endinject -->
  <!-- endinject -->
  <!-- Plugin css for this page -->
  <link href="{{asset('style1/skydash/vendors/datatables.net-bs4/dataTables.bootstrap4.css')}}" rel="stylesheet">
  <link href="{{asset('style1/skydash/vendors/ti-icons/css/themify-icons.css')}}" rel="stylesheet">
  <link href="{{asset('style1/skydash/js/select.dataTables.min.css')}}" rel="stylesheet" type="text/css">
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link href="{{asset('style1/skydash/vendors/ti-icons/css/themify-icons.css')}}" rel="stylesheet">
  <link href="{{asset('style1/skydash/css/vertical-layout-light/style.css')}}" rel="stylesheet">
 <!-- endinject -->

 <!-- profile card -->
 <link rel="stylesheet" href="{{ asset('style1/skydash/css/operator/profile_opt.css') }}">

 <!-- dashboard_opt -->
 <link rel="stylesheet" href="{{ asset('style1/skydash/css/operator/dashboard_opt.css') }}">

</head>
<body>
  <div class="container-scroller">
    <!-- partial:partials/_navbar.html -->
    <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
      <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
        <a class="navbar-brand brand-logo mr-5" href="index.html"><img src="{{asset('style1/skydash/images/logoo.png')}}" class="mr-2" alt="logo" style="width: 130% ;height:130%"/></a>
        <a class="navbar-brand brand-logo-mini" href="index.html"> <img src="{{asset('style1/skydash/images/logo-mini.svg')}}" alt="logo"/></a>
      </div>
      <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
        <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
          <span class="icon-menu"></span>
        </button>
        <ul class="navbar-nav mr-lg-2">
        </ul>
        <ul class="navbar-nav navbar-nav-right">
          <li class="nav-item dropdown">
            <a class="nav-link count-indicator dropdown-toggle" id="notificationDropdown" href="#" data-toggle="dropdown">
              <i class="icon-bell mx-0"></i>
              <span class="count"></span>
            </a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="notificationDropdown">
              <p class="mb-0 font-weight-normal float-left dropdown-header">Notifications</p>
              <a class="dropdown-item preview-item">
                <div class="preview-thumbnail">
                  <div class="preview-icon bg-success">
                    <i class="ti-info-alt mx-0"></i>
                  </div>
                </div>
                <div class="preview-item-content">
                  <h6 class="preview-subject font-weight-normal">Application Error</h6>
                  <p class="font-weight-light small-text mb-0 text-muted">
                    Just now
                  </p>
                </div>
              </a>
              <a class="dropdown-item preview-item">
                <div class="preview-thumbnail">
                  <div class="preview-icon bg-warning">
                    <i class="ti-settings mx-0"></i>
                  </div>
                </div>
                <div class="preview-item-content">
                  <h6 class="preview-subject font-weight-normal">Settings</h6>
                  <p class="font-weight-light small-text mb-0 text-muted">
                    Private message
                  </p>
                </div>
              </a>
              <a class="dropdown-item preview-item">
                <div class="preview-thumbnail">
                  <div class="preview-icon bg-info">
                    <i class="ti-user mx-0"></i>
                  </div>
                </div>
                <div class="preview-item-content">
                  <h6 class="preview-subject font-weight-normal">New user registration</h6>
                  <p class="font-weight-light small-text mb-0 text-muted">
                    2 days ago
                  </p>
                </div>
              </a>
            </div>
          </li>
          <li class="nav-item nav-profile dropdown">
            <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" id="profileDropdown">
              <img src=" "alt="profile"/>
            </a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="profileDropdown">
              <a class="dropdown-item">
                <i class="ti-settings text-primary"></i>
                Settings
              </a>
              <a class="dropdown-item">
                <i class="ti-power-off text-primary"></i>
                Logout
              </a>
            </div>
          </li>
          <li class="nav-item nav-settings d-none d-lg-flex">
            <a class="nav-link" href="#">
              <i class="icon-ellipsis"></i>
            </a>
          </li>
        </ul>
        <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
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
          <div class="sidebar-bg-options selected" id="sidebar-light-theme"><div class="img-ss rounded-circle bg-light border mr-3"></div>Light</div>
          <div class="sidebar-bg-options" id="sidebar-dark-theme"><div class="img-ss rounded-circle bg-dark border mr-3"></div>Dark</div>
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
        </ul>
        </nav>

     
      <!-- Dashboard -->
      <div class="main-panel">
        <div class="content-wrapper">
           <div class="row">
                        <div class="col-md-12 grid-margin">
                            <div class="row">
                                <div class="col-12 col-xl-8 mb-4 mb-xl-0">
                                    <h3 class="font-weight-bold">Dashboard</h3>
                                    <h6 class="font-weight-normal mb-0">
                                        <a href="{{ route('dashboard_mhs') }}">Dashboard</a>
                                    </h6>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- profile -->
                    <div class="row">
                        <div class="col-md-5 grid-margin ">
                            <div class="cardp">
                                <div class="bannerp">
                                    <svg class="imgpr" viewBox="0 0 100 100" alt="Profile Image">
                                        {{-- PROFILE PICTURE --}}
                                        @if ($attribute->foto != null)
                                            {{-- jika melakukan update foto --}}

                                            <image width="100" height="100"
                                                xlink:href="{{ asset('storage/' . $attribute->foto) }}"
                                                class=" imgpr rounded" alt="{{ $attribute->nama }}">
                                            @else
                                                {{-- jika tdk upadate foto --}}
                                                <image width="100" height="100"
                                                    xlink:href="https://media.istockphoto.com/id/1337144146/vector/default-avatar-profile-icon-vector.jpg?s=612x612&w=0&k=20&c=BIbFwuv7FxTWvh5S3vB6bkT0Qv8Vn8N5Ffseq84ClGI="
                                                    alt="{{ $attribute->nama }}">
                                        @endif
                                    </svg>
                                </div>

                                <div class="menup">
                                    <a href="{{ route('update_mhs') }}">
                                        <div class="openerp"><span></span><span>
                                            </span><span></span></div>
                                    </a>
                                </div>
                                <h2 class="namep value">Operator</h2>
                                <div class="titlep value">{{ $attribute->nama }}</div>
                                <div class="descp">
                                    <tr>
                                        <td class="value">{{ $attribute->nip }}</td><br>
                                        <td class="value">{{ $attribute->email }}</td><br>
                                        <td class="value">{{ $attribute->email_pribadi }} -</td><br>
                                        <td class="value">{{ $attribute->nomor_tlp }}</td>
                                    </tr>
                                </div>
                            </div>
                        </div>
                        <!-- GENERATE-->
                        <!-- GENERATE-->
                        <div class="course " style="height: 150px; margin:auto;">
                            <div class="course-info">

                            </div>
                            <div class="course-progress">
                                <h6>Generate</h6>
                                <h3>Generate Akun Mahasiswa </h3>
                                <i class="fa fa-id-card-o fa-2x" aria-hidden="true"
                                    style="color:#7da0fa"></i><br><br>
                                <a href="{{ route('generate') }}">Mulai <i class="fa fa-chevron-right"></i></a>
                            </div>
                        </div>

            <div class="row">
                <div class="col-md-12 grid-margin">
                  <div class="row">
                    <div class="col-12 col-xl-8 mb-4 mb-xl-0">
                      <h3 class="font-weight-bold">Dashboard</h3>
                      <h6 class="font-weight-normal mb-0">              
                        <ol class="breadcrumb dashboard_opt">
                        <li class="active">
                            <a href="{{ route('dashboard_opt') }}" >Dashboard</a>
                        </li>
                      </ol>
                    </h6>
                    </div>
                  </div>
                </div>
              </div>

              <div class="row">
                <div class="col-md-6 grid-margin stretch-card">
                  <div class="card kotak_profile">
                    <div class="card_profile">
                        <div class="img-avatar">
                            <img src="{{asset('style1/skydash/images/dosen.png')}}" alt=""  class="rounded-circle foto_profile">

                        </div>
                        <div class="card-text">
                          <div class="portada">
                          
                          </div>
                          <div class="title-total">   
                            <div class="edit-button-opt">
                                <a href="#" class="edit-button">
                                    <u>
                                        <i class="fa fa-edit"></i>
                                        ubah
                                    </u>
                                </a>
                            </div>
                            <br>

                            <h4>Operator</h4>
                            <table>
                                <tr>
                                  <td class ="value">Nama</td>
                                  <td>&nbsp;:&nbsp;</td>
                                  <td class="value">{{ $attribute->nama }}</td>
                                </tr>
                                <tr>
                                  <td class="value">NIM</td>
                                  <td>&nbsp;: </td>
                                  <td class="value">{{ $attribute->nip }}</td>
                                </tr>
                                <tr>
                                  <td class="value">Email</td>
                                  <td>&nbsp;: </td>
                                  <td class="value">{{ $attribute->email }}</td>
                                </tr>
                                <tr>
                                    <td><br></td>
                                </tr>
                                <tr>
                                    <td class="value">Email Pribadi</td>
                                    <td>&nbsp;: </td>
                                    <td class="value"> {{ $attribute->email_pribadi }}</td>
                                </tr>
                              </table>
        
                            </div>             
                        </div> 
                      </div>
                  </div>
                </div>
                {{-- <div class="col-md-6 grid-margin stretch-card">
                    <div class="card kotak_profile">
                        <div class="banner"></div>
                        <div class="img-avatar">
                            <img src="{{asset('style1/skydash/images/dosen.png')}}" alt=""  class="rounded-circle foto_profile">
                        </div>
                      
                        <div class="menu">
                          <div class="opener">
                          </div>
                        </div>
                        <p class="value_nama" style="color: #282f3a">{{ $attribute->nama }}</p>
                        <p class="value_operator">Operator</p>
                        <p class="value_nip">{{ $attribute->nip }}</p>
                        <p class="value_email">{{ $attribute->email }}</p>
                        <p class="value_email_pribadi"> {{ $attribute->email_pribadi }}</p>
                        <p class="value_nomor_tlp">{{ $attribute->nomor_tlp }}</p>

                        <div class="edit-button-opt">
                            <button href="#" type="button" class="btn btn-outline-secondary btn-fw">
                                <p class="edit_profile">Edit Profile</p></button>
                        </div>
                                            
                      </div>
                  </div> --}}
                <div class=" col-md-6 grid-margin transparent">
                  <div class="row">
                    <div class="col-md-8 mb-4 stretch-card transparent">
                      <div class="card card-tale">
                        <a href="{{ route('generate') }}">
                        <div class="card-generate">
                            <div class="icon">
                                <i class="ti-user menu-icon fa-4x"></i>
                            </div>
                            <i class="mdi mdi-plus"></i>
                            <hr class="garis">
                            <span class="generate_acc">Generate Account</span>
                        
                        </div>
                        </a>
                      </div>
                    </div>
                  </div>


                  
                </div>

              </div>

              

              
             


<br><br>
         
        <!-- partial:partials/_footer.html -->
        <footer class="footer">
          <div class="d-sm-flex justify-content-center justify-content-sm-between">
            <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Proyek Perangkat Lunak © 2023. All rights reserved.</span>
            <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Tugas Besar Informatika <i class="ti-heart text-danger ml-1"></i></span>
          </div>
          <div class="d-sm-flex justify-content-center justify-content-sm-between">
            <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Oleh: Alif, Adji, Ririn, Nadiyya</a></span> 
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
  <script src="{{asset('style1/skydash/vendors/js/vendor.bundle.base.js')}}"></script>
  <!-- endinject -->
  <!-- Plugin js for this page -->
  <script src="{{asset('style1/skydash/vendors/chart.js/Chart.min.js')}}"></script>
  <script src="{{asset('style1/skydash/vendors/datatables.net/jquery.dataTables.js')}}"></script>
  <script src="{{asset('style1/skydash/vendors/datatables.net-bs4/dataTables.bootstrap4.js')}}"></script>
  <script src="{{asset('style1/skydash/js/dataTables.select.min.js')}}"></script>
  <script src="vendors/chart.js/Chart.min.js"></script>
  <script src="vendors/datatables.net/jquery.dataTables.js"></script>
  <script src="vendors/datatables.net-bs4/dataTables.bootstrap4.js"></script>
  <script src="js/dataTables.select.min.js"></script>

  <!-- End plugin js for this page -->
  <!-- inject:js -->
  <script src="{{asset('style1/skydash/js/off-canvas.js')}}"></script>
  <script src="{{asset('style1/skydash/js/hoverable-collapse.js')}}"></script>
  <script src="{{asset('style1/skydash/js/template.js')}}"></script>
  <script src="{{asset('style1/skydash/js/settings.js')}}"></script>
  <script src="{{asset('style1/skydash/js/todolist.js')}}"></script>

  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src="{{asset('style1/skydash/js/dashboard.js')}}"></script>
  <script src="{{asset('style1/skydash/js/Chart.roundedBarCharts.js')}}"></script>

  <!-- End custom js for this page-->
</body>

</html>