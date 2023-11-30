<!DOCTYPE html>
<html lang="en">

<head>
    <style>
        body {
            font-family:'Raleway','arial';
        }
        .card {
            background-color: white;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .card-body {
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .table {
            width: 100%;
            border-collapse: collapse;
        }

        .table th,
        .table td {
            padding: 10px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        .table th {
            background-color: #f2f2f2;
            font-weight: bold;
        }

        .table tr:nth-child(even) {
            background-color: #f2f2f2;
        }
    </style>
</head>

<body>
    <div class="container" style="margin-top: 50px;">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <div style="margin: 0 auto; text-align: center; margin-bottom: 40px;">
                            <h3 style="font-weight: bold;">List Mahasiswa Sudah PKL</h3>
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
                                    @foreach ($mhs as $angkatan => $items)
                                        @php
                                            $pkl = DB::table('pkls')->where('mhs_id', $items->id)->first();
                                        @endphp
                                            <tr>
                                                <td>1</td>
                                                <td>{{ $items->nama }}</td>
                                                <td>{{ $items->id }}</td>
                                                <td>{{ $items->angkatan }}</td>
                                                <td>{{$pkl->nilai }}</td>
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
