@extends('template')
@section('content')
<body id="update">


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


    </nav>


    {{-- konten --}}
    <div class="container">
        {{-- header --}}
        <div class="col-lg-12">
            <div class="header pt-0">
                <h1 class="page-header update mt-0">
                    <a href="{{ route('update_mhs') }}">Update Data Diri</a>
                </h1>
            </div>
            {{-- path --}}
            <ol class="breadcrumb">
                <li class="active">
                    <a href="{{ route('dashboard_mhs') }}" >Dashboard / </a>
                    <a href="{{ route('update_mhs') }}" style="color: dodgerblue"
                        >Update Data Diri
                    </a>
                </li>
            </ol>
        </div>
    </div>

    <div class="container">
        <div class="card">
            <form action="{{ route('update_mhs') }}" method="POST" enctype="multipart/form-data">
                @method('PUT')
                @csrf
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
            </form>

        </div>
    </div>

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
</body>
@endsection
