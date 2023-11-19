<head>
    <style>
    </style>
</head>

@extends('template')
@section('content')
<body id="update">


    <!-- Navigation -->
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
        </div>
    </nav>


    <br>
    <br> <br> <br> <br> <br>
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
                                <div class = "round file-input-container">
                                    <input class=" @error('foto') is-invalid @enderror" type="file" name="foto" id ="foto" accept = ".jpg, .jpeg, .png "  onchange="previewImage()">
                                    {{-- <span>No file chosen</span> --}}
                                    @error('foto')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                           </div>

                            <div class="col-md-3">
                                <div class="form-group " id="" style="margin: 0px; font-size: 11px; font-weight: bold; ">
                                    <label for="" class=" font-weight-bold " >NIM</label> <span class="grey"><i>*tidak dapat diubah</i></span>
                                    <div class="">
                                        <input type="text" class="form-control" style="height: 20px" value="{{ $attribute->id }}" id="nim" disabled />
                                    </div>
                                </div><br>

                                <div class="form-group" id="" style="margin: 0px; font-size: 11px; font-weight: bold; ">
                                    <label for="" class=" font-weight-bold">Angkatan</label> <span class="grey"><i>*tidak dapat diubah</i></span>
                                    <input type="text" class="form-control" style="height: 20px"  id="angkatan" value="{{ $attribute->angkatan }}" disabled />
                                </div><br>

                                <div class="form-group" id="" style="margin: 0px; font-size: 11px; font-weight: bold; ">
                                    <label for="" class="font-weight-bold">Nama</label> <span class="grey"></span>
                                    <input type="text" class="form-control @error('nama') is-invalid @enderror" style="height: 20px"  name='nama' id="nama" value="{{ $attribute->nama }}"/>
                                    @error('nama')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div><br>

                                <div class="form-group" id="" style="margin: 0px; font-size: 11px; font-weight: bold; ">
                                    <label for="" class="font-weight-bold">Email</label> <span class="grey"></span>
                                    <input type="text" class="form-control @error('email') is-invalid @enderror" style="height: 20px" name='email' id="email" value="{{ $attribute->email }}"/>
                                    @error('email')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div> <br>

                                <div class="form-group" id="" style="margin: 0px; font-size: 11px; font-weight: bold; ">
                                    <label for="" class="font-weight-bold">No.Telepon</label> <span class="grey"></span>
                                    <input type="text" class="form-control @error('nomor_tlp') is-invalid @enderror" style="height: 20px" name='nomor_tlp' id="nomor_tlp" value="{{ $attribute->nomor_tlp }}"/>
                                    @error('nomor_tlp')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div> <br>

                            </div>
                            <div class="col-md-3">
                                <div class="form-group" id="" style="margin: 0px; font-size: 11px; font-weight: bold; ">
                                    <label for="" class="font-weight-bold">Fakultas</label> <span class="grey"><i>*tidak dapat diubah</i></span>
                                    <input type="text" class="form-control @error('fakultas') is-invalid @enderror" style="height: 20px" name='fakultas'  id="fakultas" value="{{ $attribute->fakultas }}" disabled/>
                                    @error('fakultas')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div> <br>
                                <div class="form-group" id="" style="margin: 0px; font-size: 11px; font-weight: bold; ">
                                    <label for="" class="font-weight-bold">Departemen</label> <span class="grey"><i>*tidak dapat diubah</i></span>
                                    <input type="text" class="form-control @error('departemen') is-invalid @enderror" style="height: 20px" name='departemen' id="departemen" value="{{ $attribute->departemen}}" disabled/>
                                    @error('departemen')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div> <br>

                                {{-- status --}}
                                <div class="form-group" id="" style="margin: 0px; font-size: 11px; font-weight: bold; ">
                                    <label for="" class="font-weight-bold">Status</label> <span class="grey">*tidak dapat diubah</span>
                                    <input type="text" class="col-sm-12 form-control" style="height: 30px" name="status" type="status" class="form-control" id="status" value="{{ $attribute->status }}" disabled>
                                </div> <br>

                                {{-- jalur masuk --}}
                                <div class="form-group" id="" style="margin: 0px; font-size: 11px; font-weight: bold; ">
                                    <label for="" class="font-weight-bold">Jalur Masuk</label> <span class="grey"></span>
                                    <select class="col-sm-12 form-control @error('jalur_masuk') is-invalid @enderror" style="height: 30px" name="jalur_masuk" id="jalur_masuk">
                                        <option value="" selected disabled>Pilih Jalur Masuk</option>
                                        <option value="SBMPTN">SBMPTN</option>
                                        <option value="SNMPTN">SNMPTN</option>
                                        <option value="Mandiri">Mandiri</option>
                                        <option value="SPBUB">SPBUB</option>
                                    </select>
                                    @error('jalur_masuk')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div> <br>
                            </div>

                            <div class="col-md-4">
                                {{-- alamat --}}
                                <div class="form-group" id="">
                                    <label for="" class="font-weight-bold">Alamat</label> <span class="grey"></span>
                                    <textarea class="col-sm-12 form-control @error('alamat') is-invalid @enderror" name="alamat" class="form-control" id="alamat" cols="30" rows="5" value="{{ $attribute->alamat }}"></textarea>
                                    @error('alamat')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                {{-- provinsi --}}
                                <div class="form-group" id="" style="margin: 0px; font-size: 11px; font-weight: bold; ">
                                    <label for="provinsi" class="font-weight-bold">Provinsi</label> <span class="grey"></span>
                                    <select class="col-sm-9 form-control @error('provinsi') is-invalid @enderror" style="height: 30px" name="provinsi" id="provinsi">
                                        <option  value=""selected disabled>Pilih Provinsi...</option>
                                        @foreach ($provinces as $provinsi)
                                            <option value="{{ $provinsi->id }}" >{{ $provinsi->name }}</option>
                                        @endforeach
                                    </select>
                                    @error('provinsi')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div> <br>

                                {{-- kabupaten --}}
                                <div class="form-group" id="" style="margin: 0px; font-size: 11px; font-weight: bold; ">
                                    <label for="kabupaten" class="font-weight-bold">Kabupaten</label> <span class="grey"></span>
                                    <select class="col-sm-9 form-control @error('kabupaten') is-invalid @enderror" style="height: 30px" name="kabupaten" id="kabupaten">
                                        <option  value="" selected disabled>Pilih Kabupaten...</option>
                                    </select>
                                    @error('kabupaten')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div> <br>

                                {{-- simpan --}}
                                <br><br><br><br><br>
                                <div class="form-group" id="">
                                    <button type="submit" name="submit" value="submit" class="btn btn-primary btn-block" type="button">Simpan</button>
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
