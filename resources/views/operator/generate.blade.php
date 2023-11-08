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
                      Operator <i style="margin-left: 5px" class="fa fa-solid fa-caret-down">
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
            <a class="nav-link active" href="{{ route('generate') }}">
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
            <div class="col-lg-12">
              <h3 class="font-weight-bold">Generate</h3>
                  <a class="active" href="{{ route('dashboard_opt') }}">Dashboard/</a><a style="color: black" href="{{ route('generate') }}">Generate Akun Mahasiswa</a>

            </div>
          </div>
                <!-- test card --><br>
    <div >
        <link href="https://fonts.googleapis.com/css?family=Material+Icons|Material+Icons+Outlined" rel="stylesheet">
          <form action="{{ route('generate') }}" class="form-container" enctype='multipart/form-data' method="POST">
              @csrf
              <div>
              <div class="upload-files-container card stretch-card"> 
              <div class="drag-file-area card stretch-card">
                  <span class="material-icons-outlined upload-icon"> file_upload </span>
                  <img href="https://assets.dryicons.com/uploads/icon/svg/6234/0a00ab7d-2cf8-432f-8b4e-54ffd56015b2.svg">
                  <h3 class="dynamic-message"> Drag & Drop file here </h3>
              </div>
              <span class="cannot-upload-message">
                  <span class="material-icons-outlined">error</span> Please select a file first <span class="material-icons-outlined cancel-alert-button">cancel</span>
              </span>
              <div class="file-block">
                  <div class="file-info">
                  <span class="material-icons-outlined file-icon">description</span>
                  <span class="file-name"></span> | <span class="file-size"></span>
                  </div>
                  <span class="material-icons remove-file-icon">delete</span>
                  <div class="progress-bar"></div>
              </div>
              <label class="label">
                  <div class="browse-files">
                      <input type="file" name="file" id ="file" accept = ".csv" onchange="previewImage()">
                      <span > select file from device</span>
                  </div>
              </label>
             
              {{-- SUBMIT FILE --}}
              <button type="submit" name="submit" value="submit" class="btn btn-block" type="button">Submit</button>
              </div>
              </div>
          </form>
  <br>
          
            <div class="page-wrapper col-lg-6" style="margin: auto">
          <form action="{{ route('import') }}" method="POST">
              @csrf
              {{-- GENERATE --}}
              <button type="submit" name="submit" value="submit" class="btn btn-primary btn-block" type="button">GENERATE</button>
          </form>
            </div>

        <br>
        <br>
      </div>
          <!-- /.row -->
          <!-- /.row -->
<br><br><br>
         
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
  <script>  function readURL(input) {
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
  $('.image-upload-wrap').bind('dragover', function () {
      $('.image-upload-wrap').addClass('image-dropping');
    });
    $('.image-upload-wrap').bind('dragleave', function () {
      $('.image-upload-wrap').removeClass('image-dropping');
  });
</script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src="{{asset('style1/skydash/js/dashboard.js')}}"></script>
  <script src="{{asset('style1/skydash/js/Chart.roundedBarCharts.js')}}"></script>

  <!-- End custom js for this page-->
</body>

</html>

