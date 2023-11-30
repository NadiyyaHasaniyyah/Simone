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
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Simone</title>
    <!-- inject:css -->
    <link href="{{ asset('style1/skydash/vendors/ti-icons/css/themify-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('style1/skydash/css/vertical-layout-light/style.css') }}" rel="stylesheet">
    <link href="{{ asset('style1/skydash/css/irs.css') }}" rel="stylesheet">
</head>

<body>
    <div class="container" style="margin-top: 50px;">
        <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <div style="margin: 0 auto; text-align: center; margin-bottom: 40px;">
                            <h3 style="font-weight: bold;">List Mahasiswa belum PKL</h3>
                        </div>

                        <div class="table-responsive">
                            <table class="table table-striped" >
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama</th>
                                        <th>NIM</th>
                                        <th>Angkatan</th>
                                        <th>Nilai</th>
                                    </tr>
                                </thead>
                                    @foreach ($mhs as $item)
                                    <tr>
                                        <td>1</td>
                                        <td>{{ $item->nama }}</td>
                                        <td>{{ $item->id }}</td>
                                        <td>{{ $item->angkatan }}</td>
                                        <td>Belum PKL</td>
                                    </tr>
                                    @endforeach
                                </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
