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
            <div class="row" style="margin-left: 5px; margin-right: 5px;">
                <form action="{{ route('update_mhs') }}" method="POST" enctype="multipart/form-data">
                    @method('PUT')
                    @csrf
                    {{-- images --}}
                    <div class="col-sm-4 images">
                        <div class="upload">
                            <img src="https://media.istockphoto.com/id/1337144146/vector/default-avatar-profile-icon-vector.jpg?s=612x612&w=0&k=20&c=BIbFwuv7FxTWvh5S3vB6bkT0Qv8Vn8N5Ffseq84ClGI=" alt="" width="220" height="220" class="rounded-circle">

                            <div class = "round">
                                <input class=" @error('foto') is-invalid @enderror" type="file" name="foto" id ="foto" accept = ".jpg, .jpeg, .png" onchange="previewImage()">
                                @error('foto')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <br>
                    </div>

                    <div class="disable col-sm-4 ">
                        <div class="form-floating m-3">
                            <label class="col-sm-4 " for="nim">NIM</label>
                            <input class="col-sm-8" name="mim" type="text" class="form-control" placeholder="{{ $attribute->nim }}" id="nim" disabled>
                        </div>

                        <div class="form-floating mt-3">
                            <label class="col-sm-4 " for="angkatan">Angkatan</label>
                            <input class="col-sm-8" name="angkatan" type="text" class="form-control" id="angkatan" value="{{ $attribute->angkatan }}">
                        </div>

                        <div class="form-floating mb-3">
                            <label class="col-sm-4" for="nama">Nama</label>
                            <input class="col-sm-8 @error('nama') is-invalid @enderror" name="nama" type="text" class="form-control" id="nama" value="{{ $attribute->nama }}">
                            @error('nama')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-floating mb-3">
                            <label class="col-sm-4 " for="email">Email</label>
                            <input class="col-sm-8 @error('email') is-invalid @enderror" name="email" type="email" class="form-control" id="email" value="{{ $attribute->email }}">
                            @error('email')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-floating mb-3">
                            <label class="col-sm-4 " for="fakultas">Fakultas</label>
                            <input class="col-sm-8 @error('fakultas') is-invalid @enderror" name="fakultas" type="fakultas" class="form-control" id="Fakultas" value="{{ $attribute->fakultas }}" disabled>
                            @error('fakultas')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-floating mb-3">
                            <label class="col-sm-4 " for="departemen">Departemen</label>
                            <input class="col-sm-8 @error('departemen') is-invalid @enderror" name="departemen" type="departemen" class="form-control" id="departemen" value="{{ $attribute->departemen }}" disabled>
                            @error('departemen')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                    </div>

                    <div class="able col-sm-4">
                        <div class="form-floating mb-2">
                            <label class="col-sm-4 " for="status">Status</label>
                            <input class="col-sm-8 @error('status') is-invalid @enderror" name="status" type="status" class="form-control" id="status" value="{{ $attribute->status }}">
                            @error('status')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-floating mb-3">
                            <label class="col-sm-4" for="provinsi">Provinsi</label>
                            <select class="col-sm-8 form-control @error('provinsi') is-invalid @enderror" name="provinsi" id="provinsi">
                                <option  value="">Pilih Provinsi...</option>
                                @foreach ($provinces as $provinsi)
                                    <option value="{{ $provinsi->id }}" >{{ $provinsi->name }}</option>
                                @endforeach
                            </select>
                            @error('provinsi')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-floating mb-3">
                            <label class="col-sm-4" for="kabupaten">Kabupaten</label>
                            <select class="col-sm-8 form-control @error('kabupaten') is-invalid @enderror" name="kabupaten" id="kabupaten">
                                <option  value="">Pilih Kabupaten...</option>
                            </select>
                            @error('kabupaten')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-floating mb-3">
                            <label class="col-sm-4 " for="jalur_masuk">Jalur Masuk</label>
                            <input class="col-sm-8 @error('jalur_masuk') is-invalid @enderror" name="jalur_masuk"  class="form-control" id="jalur_masuk" value="{{ $attribute->jalur_masuk }}">
                            @error('jalur_masuk')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-floating mb-3">
                            <label class="col-sm-4 " for="alamat">Alamat</label>
                            <textarea class="col-sm-8 @error('alamat') is-invalid @enderror" name="alamat" name="alamat" class="form-control" id="alamat" cols="30" rows="5" value="{{ $attribute->alamat }}"></textarea>
                            @error('alamat')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <div class="submit col-sm-8 mt-3">
                        <button type="submit" name="submit" value="submit" class="btn btn-primary btn-block" type="button">Simpan</button>
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
