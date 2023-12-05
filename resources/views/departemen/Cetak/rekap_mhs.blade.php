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
                            <h3 style="font-weight: bold;">Rekap Mahasiswa</h3>
                        </div>

                        <div class="table-responsive">
                            <table class="table table-striped" >
                                <thead>
                                    <tr>
                                        <th rowspan="2"  style="text-align: center; vertical-align: middle;">Status</th>
                                        <th colspan="7" style="text-align: center;">Angkatan</th>
                                    </tr>
                                    <tr>
                                        <th>2017</th>
                                        <th>2018</th>
                                        <th>2019</th>
                                        <th>2020</th>
                                        <th>2021</th>
                                        <th>2022</th>
                                        <th>2023</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Aktif</td>
                                        <td>{{ $mhs_count['2017']['aktif'] }}</td>
                                        <td>{{ $mhs_count['2018']['aktif'] }}</td>
                                        <td>{{ $mhs_count['2019']['aktif'] }}</td>
                                        <td>{{ $mhs_count['2020']['aktif'] }}</td>
                                        <td>{{ $mhs_count['2021']['aktif'] }}</td>
                                        <td>{{ $mhs_count['2022']['aktif'] }}</td>
                                        <td>{{ $mhs_count['2023']['aktif'] }}</td>
                                    </tr>

                                    <tr>
                                        <td>DO</td>
                                        <td>{{ $mhs_count['2017']['drop out'] }}</td>
                                        <td>{{ $mhs_count['2018']['drop out'] }}</td>
                                        <td>{{ $mhs_count['2019']['drop out'] }}</td>
                                        <td>{{ $mhs_count['2020']['drop out'] }}</td>
                                        <td>{{ $mhs_count['2021']['drop out'] }}</td>
                                        <td>{{ $mhs_count['2022']['drop out'] }}</td>
                                        <td>{{ $mhs_count['2023']['drop out'] }}</td>
                                    </tr>

                                    <tr>
                                        <td>Mangkir</td>
                                        <td>{{ $mhs_count['2017']['mangkir'] }}</td>
                                        <td>{{ $mhs_count['2018']['mangkir'] }}</td>
                                        <td>{{ $mhs_count['2019']['mangkir'] }}</td>
                                        <td>{{ $mhs_count['2020']['mangkir'] }}</td>
                                        <td>{{ $mhs_count['2021']['mangkir'] }}</td>
                                        <td>{{ $mhs_count['2022']['mangkir'] }}</td>
                                        <td>{{ $mhs_count['2023']['mangkir'] }}</td>
                                    </tr>

                                    <tr>
                                        <td>Cuti</td>
                                        <td>{{ $mhs_count['2017']['cuti'] }}</td>
                                        <td>{{ $mhs_count['2018']['cuti'] }}</td>
                                        <td>{{ $mhs_count['2019']['cuti'] }}</td>
                                        <td>{{ $mhs_count['2020']['cuti'] }}</td>
                                        <td>{{ $mhs_count['2021']['cuti'] }}</td>
                                        <td>{{ $mhs_count['2022']['cuti'] }}</td>
                                        <td>{{ $mhs_count['2023']['cuti'] }}</td>
                                    </tr>

                                    <tr>
                                        <td>Lulus</td>
                                        <td>{{ $mhs_count['2017']['lulus'] }}</td>
                                        <td>{{ $mhs_count['2018']['lulus'] }}</td>
                                        <td>{{ $mhs_count['2019']['lulus'] }}</td>
                                        <td>{{ $mhs_count['2020']['lulus'] }}</td>
                                        <td>{{ $mhs_count['2021']['lulus'] }}</td>
                                        <td>{{ $mhs_count['2022']['lulus'] }}</td>
                                        <td>{{ $mhs_count['2023']['lulus'] }}</td>
                                    </tr>

                                    <tr>
                                        <td>Undur Diri</td>
                                        <td>{{ $mhs_count['2017']['undur diri'] }}</td>
                                        <td>{{ $mhs_count['2018']['undur diri'] }}</td>
                                        <td>{{ $mhs_count['2019']['undur diri'] }}</td>
                                        <td>{{ $mhs_count['2020']['undur diri'] }}</td>
                                        <td>{{ $mhs_count['2021']['undur diri'] }}</td>
                                        <td>{{ $mhs_count['2022']['undur diri'] }}</td>
                                        <td>{{ $mhs_count['2023']['undur diri'] }}</td>
                                    </tr>

                                    <tr>
                                        <td>Meninggal</td>
                                        <td>{{ $mhs_count['2017']['meninggal'] }}</td>
                                        <td>{{ $mhs_count['2018']['meninggal'] }}</td>
                                        <td>{{ $mhs_count['2019']['meninggal'] }}</td>
                                        <td>{{ $mhs_count['2020']['meninggal'] }}</td>
                                        <td>{{ $mhs_count['2021']['meninggal'] }}</td>
                                        <td>{{ $mhs_count['2022']['meninggal'] }}</td>
                                        <td>{{ $mhs_count['2023']['meninggal'] }}</td>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
