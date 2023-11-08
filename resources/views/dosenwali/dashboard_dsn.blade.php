
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SIMONE</title>

    <link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet'>
    <!-- Bootstrap Core CSS -->
    <link href="{{asset('style/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('style/css/bootstrap.css')}}" rel="stylesheet">


    <!-- Custom CSS -->
    <link href="{{asset('style/css/sb-admin.css')}}" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="{{asset('style/css/plugins/morris.css')}}" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="{{asset('style/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css">


    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

    <link href="{{asset('style/css/dsb-dsn.css')}}" rel="stylesheet">
</head>

<body>

    <div id="wrapper">

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

            <!--Top buat logout -->
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
                              <strong>Dosen</strong>
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
                              <strong>Dosen</strong>
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
                    <i class="fa fa-user"></i> Dosen <b class="caret"></b>
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
                        <a href="{{ route('dashboard_dsn') }}"><i class="fa fa-fw fa-dashboard"></i> Dashboard</a>
                    </li>
                    <li >
                        <a class="nav-link custom-nav-link" href="#"><i class="fa fa-fw fa-columns"></i> Verifikasi Progress Studi</a>
                        <ul class="sub-menu">
                        <li>
                            <a class="nav-link custom-nav-link" href="#"><i class="fa fa-fw fa-columns"></i>IRS</a>
                        </li>
                        <li>
                            <a class="nav-link custom-nav-link" href="#"><i class="fa fa-fw fa-columns"></i>KHS</a>
                        </li>
                        <li>
                            <a class="nav-link custom-nav-link" href="#"><i class="fa fa-fw fa-columns"></i>PKL</a>
                        </li>

                    </ul>
                    </li>
                    <li>
                        <a href="#"><i  class="fa fa-fw fa-columns"></i> Pencarian Progress Studi</a>
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
                        <h1 class="page-header">
                            <a href="{{ route('dashboard_mhs') }}" >Dashboard</a>
                        </h1>
                        <ol class="breadcrumb">
                            <li class="active">
                                <a href="{{ route('dashboard_mhs') }}" >Dashboard</a>
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->

                <!-- /.row -->

<div class="row">
    <div class="col-lg-11">
        <section>
        <div class="card1">
            <div class="card ">
                <div class="left-container">
                    <br><br>
                  <img class="imgpr" src="https://media.istockphoto.com/id/1337144146/vector/default-avatar-profile-icon-vector.jpg?s=612x612&w=0&k=20&c=BIbFwuv7FxTWvh5S3vB6bkT0Qv8Vn8N5Ffseq84ClGI=" alt="Profile Image">

                </div>
                <div class="right-container">
  <table>
    <a href="#" class="edit-button btn">
        <i class="fa fa-edit"> Edit</i>
    </a>
    <br>

    <tr>
        <td>Nama</td>
        <td>&nbsp;:&nbsp;</td>
        <td class="value">{{ $attribute->nama }}</td>
      </tr>
      <tr>
        <td>NIP</td>
        <td>&nbsp;: </td>
        <td class="value">{{ $attribute->nip }}</td>
      </tr>
      <tr>
        <td>Email</td>
        <td>&nbsp;: </td>
        <td class="value">{{ $attribute->email }}</td>
      </tr>
  </table>
</div>


        </div>
    </section>

        </div>
    </div>



                    <br>
                        <div class="panel panel-red">
                            <div class="panel-heading">

                                    <div>
                                        <i class="fa fa-fw fa-tasks fa-3x">  </i>
                                    </div>

                            </div>

                                <div class="panel-footer">
                                    <span class="pull-left">Verifikasi Progress Studi</span>
                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                    <br><br>

                                    <div class="container">
                                        <div class="row">
                                            <div class="col-md-2">
                                                <div class="card" style="width: 15rem; height: 4rem;">
                                                    <a href="#" class="btn" role="button" style="width: 15rem; height: 4rem;">IRS</a>
                                                </div>
                                            </div>
                                            <div class="col-md-2">
                                                <div class="card" style="width: 15rem; height: 4rem;">
                                                    <a href="#" class="btn" role="button" style="width: 15rem; height: 4rem;">KHS</a>
                                                </div>
                                            </div>
                                            <div class="col-md-2">
                                                <div class="card" style="width: 15rem; height: 4rem;">
                                                    <a href="#" class="btn" role="button" style="width: 15rem; height: 4rem;">PKL</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
                        <div class="panel panel-red">
                            <div class="panel-heading">
                                    <div>
                                        <i class="fa fa-fw fa-columns fa-3x">  </i>
                                    </div>
                            </div>

                                <div class="panel-footer">
                                    <span class="pull-left">Pencarian Program Studi</span>
                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
                    <br><br>

                </div>

            </div>

                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="{{asset('style/js/jquery.js')}}"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="{{asset('style/js/bootstrap.min.js')}}"></script>

    <!-- Morris Charts JavaScript -->
    <script src="{{asset('style/js/plugins/morris/raphael.min.js')}}"></script>
    <script src="{{asset('style/js/plugins/morris/morris.min.js')}}"></script>
    <script src="{{asset('style/js/plugins/morris/morris-data.js')}}"></script>

</body>

</html>
