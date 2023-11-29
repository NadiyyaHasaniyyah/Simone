@extends('template')
@section('content')

    <head>
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300" rel="stylesheet">
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"
            integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    </head>

    <body>


        <!-- Navigation -->
        <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
            <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
                <a class="navbar-brand brand-logo mr-5" href="{{ route('dashboard_mhs') }}"><img
                        style="width: 80%; height:1%; " src="{{ asset('style1/skydash/images/logoo.png') }}" class="mr-2"
                        alt="logo" /></a>
                <a class="navbar-brand brand-logo-mini" href="index.html"> <img
                        src="{{ asset('style1/skydash/images/logo-mini.svg') }}" alt="logo" /></a>
            </div>
            <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
                <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
                    <span class="icon-menu"></span>
                </button>
                <ul class="navbar-nav mr-lg-2">

                </ul>
                <ul class="navbar-nav navbar-npav-right">
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
                        <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="profileDropdown">
                            <a class="dropdown-item" href="{{ route('reset_password_mhs') }}">
                                <i class="ti-lock text-primary"></i>
                                Reset Password
                            </a>
                            <a class="dropdown-item" href="/logout">
                                <i class="ti-power-off text-primary"></i>
                                Logout
                            </a>
                        </div>
                    </li>
                </ul>
                {{-- <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button"
                data-toggle="offcanvas">
                <span class="icon-menu"></span>
            </button> --}}
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
                            <div class="row ">
                                <div class="col-md-2">
                                    <div class="avatar-upload">
                                        <div class="avatar-edit file-input-container">
                                            <input id="imageUpload" class=" @error('foto') is-invalid @enderror"
                                                type="file" name="foto" id ="foto" accept = ".jpg, .jpeg, .png, .gif"
                                                onchange="previewImage()" />
                                            <label for="imageUpload"></label>
                                            @error('foto')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="avatar-preview">
                                            <div id="imagePreview" style="
                                            @if ($attribute->foto != null)
                                                background-image: url({{ asset('storage/' . $attribute->foto) }});
                                            @else
                                                background-image: url(https://sso.undip.ac.id/assets/app/images/user.png);
                                            @endif ">
                                                {{-- style="background-image: url(https://sso.undip.ac.id/assets/app/images/user.png);"> --}}
                                            </div>

                                            {{-- <div id="imagePreview"
                                            style="background-image: url(https://sso.undip.ac.id/assets/app/images/user.png);">
                                        </div> --}}
                                        </div>
                                    </div>



                                    {{-- <img src="https://sso.undip.ac.id/assets/app/images/user.png" style="max-width: 150px;width: 100%;" alt="foto">
                                <div class = "round file-input-container">
                                    <input class=" @error('foto') is-invalid @enderror" type="file" name="foto" id ="foto" accept = ".jpg, .jpeg, .png "  onchange="previewImage()">

                                    @error('foto')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div> --}}
                                </div>

                                <div class="col-md-3">
                                    <div class="form-group " id=""
                                        style="margin: 0px; font-size: 11px; font-weight: bold; ">
                                        <label for="" class=" font-weight-bold ">NIM</label> <span
                                            class="grey"><i>*tidak dapat diubah</i></span>
                                        <div class="">
                                            <input type="text" class="form-control" style="height: 20px"
                                                value="{{ $attribute->id }}" id="nim" disabled />
                                        </div>
                                    </div><br>

                                    <div class="form-group" id=""
                                        style="margin: 0px; font-size: 11px; font-weight: bold; ">
                                        <label for="" class=" font-weight-bold">Angkatan</label> <span
                                            class="grey"><i>*tidak dapat diubah</i></span>
                                        <input type="text" class="form-control" style="height: 20px" id="angkatan"
                                            value="{{ $attribute->angkatan }}" disabled />
                                    </div><br>

                                    <div class="form-group" id=""
                                        style="margin: 0px; font-size: 11px; font-weight: bold; ">
                                        <label for="" class="font-weight-bold">Nama</label> <span
                                            class="grey"></span>
                                        <input type="text" class="form-control @error('nama') is-invalid @enderror"
                                            style="height: 20px" name='nama' id="nama"
                                            value="{{ $attribute->nama }}" />
                                        @error('nama')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div><br>

                                    <div class="form-group" id=""
                                        style="margin: 0px; font-size: 11px; font-weight: bold; ">
                                        <label for="" class="font-weight-bold">Email</label> <span
                                            class="grey"></span>
                                        <input type="text" class="form-control @error('email') is-invalid @enderror"
                                            style="height: 20px" name='email' id="email"
                                            value="{{ $attribute->email }}" />
                                        @error('email')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div> <br>

                                    <div class="form-group" id=""
                                        style="margin: 0px; font-size: 11px; font-weight: bold; ">
                                        <label for="" class="font-weight-bold">No.Telepon</label> <span
                                            class="grey"></span>
                                        <input type="text"
                                            class="form-control @error('nomor_tlp') is-invalid @enderror"
                                            style="height: 20px" name='nomor_tlp' id="nomor_tlp"
                                            value="{{ $attribute->nomor_tlp }}" />
                                        @error('nomor_tlp')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div> <br>

                                </div>
                                <div class="col-md-3">
                                    <div class="form-group" id=""
                                        style="margin: 0px; font-size: 11px; font-weight: bold; ">
                                        <label for="" class="font-weight-bold">Fakultas</label> <span
                                            class="grey"><i>*tidak dapat diubah</i></span>
                                        <input type="text" class="form-control @error('fakultas') is-invalid @enderror"
                                            style="height: 20px" name='fakultas' id="fakultas"
                                            value="{{ $attribute->fakultas }}" disabled />
                                        @error('fakultas')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div> <br>
                                    <div class="form-group" id=""
                                        style="margin: 0px; font-size: 11px; font-weight: bold; ">
                                        <label for="" class="font-weight-bold">Departemen</label> <span
                                            class="grey"><i>*tidak dapat diubah</i></span>
                                        <input type="text"
                                            class="form-control @error('departemen') is-invalid @enderror"
                                            style="height: 20px" name='departemen' id="departemen"
                                            value="{{ $attribute->departemen }}" disabled />
                                        @error('departemen')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div> <br>

                                    {{-- status --}}
                                    <div class="form-group" id=""
                                        style="margin: 0px; font-size: 11px; font-weight: bold; ">
                                        <label for="" class="font-weight-bold">Status</label> <span
                                            class="grey">*tidak dapat diubah</span>
                                        <input type="text" class="col-sm-12 form-control" style="height: 30px"
                                            name="status" type="status" class="form-control" id="status"
                                            value="{{ $attribute->status }}" disabled>
                                    </div> <br>

                                    {{-- jalur masuk --}}
                                    <div class="form-group" id=""
                                        style="margin: 0px; font-size: 11px; font-weight: bold; ">
                                        <label for="" class="font-weight-bold">Jalur Masuk</label> <span
                                            class="grey"></span>
                                        {{-- <select class="col-sm-12 form-control @error('jalur_masuk') is-invalid @enderror"
                                            style="height: 30px" name="jalur_masuk" id="jalur_masuk">
                                            <option value="" selected disabled>Pilih Jalur Masuk</option>
                                            <option value="SBMPTN">SBMPTN</option>
                                            <option value="SNMPTN">SNMPTN</option>
                                            <option value="Mandiri">Mandiri</option>
                                            <option value="SPBUB">SPBUB</option>
                                        </select> --}}
                                        <select class="form-control @error('jalur_masuk') is-invalid @enderror"
                                            style="height: 30px" name="jalur_masuk" id="jalur_masuk">
                                            <option value="" selected disabled>Pilih Jalur Masuk</option>
                                            <option value="SBMPTN"
                                                {{ $attribute->jalur_masuk == 'SBMPTN' ? 'selected' : '' }}>SBMPTN</option>
                                            <option value="SNMPTN"
                                                {{ $attribute->jalur_masuk == 'SNMPTN' ? 'selected' : '' }}>SNMPTN</option>
                                            <option value="Mandiri"
                                                {{ $attribute->jalur_masuk == 'Mandiri' ? 'selected' : '' }}>Mandiri
                                            </option>
                                            <option value="SPBUB"
                                                {{ $attribute->jalur_masuk == 'SPBUB' ? 'selected' : '' }}>SPBUB</option>
                                        </select>
                                        @error('jalur_masuk')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div> <br>
                                </div>

                                <div class="col-md-4">
                                    {{-- alamat --}}
                                    <div class="form-group" id="">
                                        <label for="" class="font-weight-bold">Alamat</label> <span
                                            class="grey"></span>
                                        <textarea class="col-sm-12 form-control @error('alamat') is-invalid @enderror" name="alamat" class="form-control"
                                            id="alamat" cols="30" rows="5" value="{{ $attribute->alamat }}"> {{ $attribute->alamat }} </textarea>
                                        @error('alamat')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    {{-- provinsi --}}
                                    <div class="form-group" id=""
                                        style="margin: 0px; font-size: 11px; font-weight: bold; ">
                                        <label for="provinsi" class="font-weight-bold">Provinsi</label> <span
                                            class="grey"></span>
                                        <select class="col-sm-9 form-control @error('provinsi') is-invalid @enderror"
                                            style="height: 30px" name="provinsi" id="provinsi">



                                            <option value="" selected disabled>Pilih Provinsi...</option>

                                            {{-- yang lama --}}
                                            {{-- @foreach ($provinces as $provinsi)
                                                <option value="{{ $provinsi->id }}">{{ $provinsi->name }}</option>
                                            @endforeach --}}

                                            {{-- modifikasi --}}
                                            @foreach ($provinces as $provinsi)
                                            <option value="{{ $provinsi->id }}" {{ $attribute->provinsi == $provinsi->name ? 'selected' : '' }}>
                                                {{ $provinsi->name }}
                                            </option>
                                            @endforeach


                                        </select>
                                        @error('provinsi')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div> <br>

                                    {{-- kabupaten --}}
                                    <div class="form-group" id=""
                                        style="margin: 0px; font-size: 11px; font-weight: bold; ">
                                        <label for="kabupaten" class="font-weight-bold">Kabupaten</label> <span
                                            class="grey"></span>
                                        <select class="col-sm-9 form-control @error('kabupaten') is-invalid @enderror"
                                            style="height: 30px" name="kabupaten" id="kabupaten">

                                             <option value="" selected disabled>Pilih Kabupaten...</option>


                                        </select>

                                        @error('kabupaten')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div> <br>

                                    {{-- simpan --}}
                                    <br><br><br><br><br>
                                    <div class="form-group" id="">
                                        <button type="submit" name="submit" value="submit"
                                            class="btn btn-primary btn-block" type="button">Simpan</button>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </form>

            </div>
        </div>

        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

        {{-- <script>
            $(document).ready(function() {
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                })
            });

            $(function() {
                $('#provinsi').on('change', function() {
                    let id_provinsi = $('#provinsi').val();

                    $.ajax({
                        type: 'POST',
                        url: "{{ route('getKabupaten') }}",
                        data: {
                            id_provinsi: id_provinsi
                        },
                        cache: false,

                        success: function(msg) {
                            $('#kabupaten').html(msg);
                        },

                        error: function(data) {
                            console.log(data);
                        },
                    });
                })
            });
        </script> --}}
        <script>
            $(document).ready(function() {
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });

                // Periksa apakah value provinsi telah terisi saat halaman dimuat
                if ($('#provinsi').val()) {
                    updateKabupaten($('#provinsi').val());
                }

                // Tanggapi saat value provinsi berubah
                $('#provinsi').on('change', function() {
                    let id_provinsi = $(this).val();
                    updateKabupaten(id_provinsi);
                });

                // Tanggapi saat elemen provinsi diklik
                $('#provinsi').on('click', function() {
                    // Logika yang ingin Anda lakukan saat elemen provinsi diklik
                });

                // Fungsi untuk memperbarui kabupaten
                function updateKabupaten(id_provinsi) {
                    $.ajax({
                        type: 'POST',
                        url: "{{ route('getKabupaten') }}",
                        data: {
                            id_provinsi: id_provinsi
                        },
                        cache: false,

                        success: function(msg) {
                            $('#kabupaten').html(msg);
                        },

                        error: function(data) {
                            console.log(data);
                        },
                    });
                }
            });
        </script>






        <script>
            function readURL(input) {
                if (input.files && input.files[0]) {
                    var reader = new FileReader();
                    reader.onload = function(e) {
                        $('#imagePreview').css('background-image', 'url(' + e.target.result + ')');
                        $('#imagePreview').hide();
                        $('#imagePreview').fadeIn(650);
                    }
                    reader.readAsDataURL(input.files[0]);
                }
            }
            $("#imageUpload").change(function() {
                readURL(this);
            });
        </script>
        <style>
            .avatar-upload {
                position: relative;
                max-width: 205px;

            }

            .avatar-upload .avatar-edit {
                position: absolute;
                right: 12px;
                z-index: 1;
                top: 10px;
            }

            .avatar-upload .avatar-edit input {
                display: none;
            }

            .avatar-upload .avatar-edit input+label {
                display: inline-block;
                width: 34px;
                height: 34px;
                margin-bottom: 0;
                border-radius: 100%;
                /* background: #514c8f; */
                background: #ffffff;
                border: 1px solid transparent;
                box-shadow: 0px 2px 4px 0px rgba(0, 0, 0, 0.12);
                cursor: pointer;
                font-weight: normal;
                transition: all 0.2s ease-in-out;
            }

            .avatar-upload .avatar-edit input+label:hover {
                background: #f1f1f1;
                border-color: #d6d6d6;
            }

            .avatar-upload .avatar-edit input+label:after {
                content: "\f040";
                font-family: "FontAwesome";
                color: #757575;
                /* color:white; */
                position: absolute;
                top: 10px;
                left: 0;
                right: 0;
                text-align: center;
                margin: auto;
            }

            .avatar-upload .avatar-preview {
                width: 142px;
                height: 142px;
                position: relative;
                border-radius: 100%;
                border: 6px solid #f8f8f8;
                box-shadow: 0px 2px 4px 0px rgba(0, 0, 0, 0.1);
            }

            .avatar-upload .avatar-preview>div {
                width: 100%;
                height: 100%;
                border-radius: 100%;
                background-size: cover;
                background-repeat: no-repeat;
                background-position: center;
            }
        </style>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    </body>
@endsection
