@extends('template') @section('content') <div id="wrapper">
    <!-- Navigation -->
  <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" style="display: flex; align-items: center;">
          <a href="{{ route('dashboard_mhs') }}">
              <img style="margin-left: -5px;" src="https://i.ibb.co/yBG6mSK/Simone-4.png" width="50" height="50" alt="">
          </a>
        </a>
    </div>

    {{-- logout --}}
    <ul class="nav navbar-right top-nav">
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">
            <i class="fa fa-envelope"></i>
            <b class="caret"></b>
          </a>
            <ul class="dropdown-menu message-dropdown">
                <li class="message-preview">
                <a href="#">
                    <div class="media">
                    <span class="pull-left">
                        <img class="media-object" src="http://placehold.it/50x50" alt="">
                    </span>
                    <div class="media-body">
                        <h5 class="media-heading">
                        <strong>Mahasiswa</strong>
                        </h5>
                        <p class="small text-muted">
                        <i class="fa fa-clock-o"></i> Yesterday at 4:32 PM
                        </p>
                        <p>Lorem ipsum dolor sit amet, consectetur...</p>
                    </div>
                    </div>
                </a>
                </li>
                <li class="message-preview">
                <a href="#">
                    <div class="media">
                    <span class="pull-left">
                        <img class="media-object" src="http://placehold.it/50x50" alt="">
                    </span>
                    <div class="media-body">
                        <h5 class="media-heading">
                        <strong>Deepartemen</strong>
                        </h5>
                        <p class="small text-muted">
                        <i class="fa fa-clock-o"></i> Yesterday at 4:32 PM
                        </p>
                        <p>Lorem ipsum dolor sit amet, consectetur...</p>
                    </div>
                    </div>
                </a>
                </li>
                <li class="message-preview">
                <a href="#">
                    <div class="media">
                    <span class="pull-left">
                        <img class="media-object" src="http://placehold.it/50x50" alt="">
                    </span>
                    <div class="media-body">
                        <h5 class="media-heading">
                        <strong>Mahasiswa</strong>
                        </h5>
                        <p class="small text-muted">
                        <i class="fa fa-clock-o"></i> Yesterday at 4:32 PM
                        </p>
                        <p>Lorem ipsum dolor sit amet, consectetur...</p>
                    </div>
                    </div>
                </a>
                </li>
                <li class="message-footer">
                <a href="#">Read All New Messages</a>
                </li>
            </ul>

            </li>
            <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                <i class="fa fa-bell"></i>
                <b class="caret"></b>
            </a>
            <ul class="dropdown-menu alert-dropdown">
                <li>
                <a href="#">Alert Name <span class="label label-default">Alert Badge</span>
                </a>
                </li>
                <li>
                <a href="#">Alert Name <span class="label label-primary">Alert Badge</span>
                </a>
                </li>
                <li>
                <a href="#">Alert Name <span class="label label-success">Alert Badge</span>
                </a>
                </li>
                <li>
                <a href="#">Alert Name <span class="label label-info">Alert Badge</span>
                </a>
                </li>
                <li>
                <a href="#">Alert Name <span class="label label-warning">Alert Badge</span>
                </a>
                </li>
                <li>
                <a href="#">Alert Name <span class="label label-danger">Alert Badge</span>
                </a>
                </li>
                <li class="divider"></li>
                <li>
                <a href="#">View All</a>
                </li>
            </ul>
            </li>
            <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                <i class="fa fa-user"></i> {{ $attribute -> nama }} <b class="caret"></b>
            </a>
            <ul class="dropdown-menu">
                <li>
                <a href="/logout">
                    <i class="fa fa-fw fa-power-off"></i> Log Out </a>
                </li>
            </ul>
            </li>
        </ul>

    <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
    <div class="collapse navbar-collapse navbar-ex1-collapse">
      <ul class="nav navbar-nav side-nav">
        <li class="active">
            <a href="{{ route('dashboard_mhs') }}">
                <i class="fa fa-fw fa-dashboard"></i> Dashboard
            </a>
        </li>
        <li>
          <a href="">
            <i class="fa fa-fw fa-columns"></i> IRS </a>
        </li>
        <li>
          <a href="">
            <i class="fa fa-fw fa-file-text-o"></i> KHS </a>
        </li>
        <li>
          <a href="">
            <i class="fa fa-fw fa-tasks"></i> PKL </a>
        </li>
        <li>
          <a href="">
            <i class="fa fa-fw fa-newspaper-o"></i> Skripsi </a>
        </li>
      </ul>
    </div>
    <!-- /.navbar-collapse -->
</nav>
    <div id="page-wrapper">
      <div class="container-fluid">
        <!-- Page Heading -->
        <div class="row">
          <div class="col-lg-12">
            <h1 class="page-header"> Skripsi </h1>
            <ol class="breadcrumb">
              <li class="active">
                <i class="fa fa-dashboard"></i> <a href="{{ route('dashboard_mhs') }}">Dashboard/</a> <i class="fa fa-tasks"></i> <a href="{{ route('generate') }}"></a>Skripsi
              </li>
            </ol>
          </div>
        </div>
        <link href="https://fonts.googleapis.com/css?family=Material+Icons|Material+Icons+Outlined" rel="stylesheet">
        <!-- Page Heading -->

    <link href="https://fonts.googleapis.com/css?family=Material+Icons|Material+Icons+Outlined" rel="stylesheet">
    <div class="row">
        <div class="col-lg-11">
          <section>
            <div class="card1">
              <div class="cardpkl ">
                <div class="left-container1">
                </div>
                <div class="right-container">
                    <form action="">
                        <div class="form-group row">
                            <label for="judulskripsi" class="col-sm-2 col-form-label">Judul:</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="judul" name="judul" style="width: 16cm">
                            </div>
                        </div>
                        <br>
                        {{-- <div class="form-group row">
                            <label for="status" class="col-sm-2 col-form-label">Status Skripsi:</label>
                            <div class="col-sm-10">
                                <select class="form-control" id="status" style="width: 16cm">
                                    <option> </option>
                                    <option value=""></option>
                                    <option value="Belum Ambil">Belum Ambil</option>
                                    <option value="Lulus">Lulus</option>
                                </select>
                            </div>
                        </div>
                        <br> --}}
                        <div class="form-group row">
                            <label for="nilai" class="col-sm-2 col-form-label">Progress:</label>
                            <div class="col-sm-10">
                                <input type="file" class="form-control" id="nilai" style="width: 16cm">
                            </div>
                        </div>
                        <br>
                        <div class="form-group row">
                            <label for="tanggal" class="col-sm-2 col-form-label">Tanggal:</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="tanggal" style="width: 16cm">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="status" class="col-sm-2 col-form-label">Semester:</label>
                            <div class="col-sm-10">
                                <select class="form-control" id="semester" style="width: 16cm">
                                    <option> </option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
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
                        </div>
                        <div class="form-group row">
                            <label for="nilai" class="col-sm-2 col-form-label">Nilai:</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="nilai" style="width: 16cm">
                            </div>
                        </div>
                    </form>
                </div>
                <div class="form-group row">
                    <h2 for="nilai" class="col-sm-2 col-form-label">Belum Diverifikasi</h2>
                </div>
              </div>
          </section>
        </div>
      </div>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
      </div> @endsection
