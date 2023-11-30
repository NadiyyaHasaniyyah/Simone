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
                            <h3 style="font-weight: bold;">Rekap Skripsi per-Angkatan</h3>
                        </div>

                        <div class="table-responsive">
                            <table class="table table-striped" >
                                <thead>
                                    <tr>
                                        <th colspan="2">
                                            2017
                                        </th>
                                        <th colspan="2">
                                            2018
                                        </th>
                                        <th colspan="2">
                                            2019
                                        </th>
                                        <th colspan="2">
                                            2020
                                        </th>
                                        <th colspan="2">
                                            2021
                                        </th>
                                        <th colspan="2">
                                            2022
                                        </th>
                                        <th colspan="2">
                                            2023
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>sudah</td>
                                        <td>belum</td>

                                        <td>sudah</td>
                                        <td>belum</td>

                                        <td>sudah</td>
                                        <td>belum</td>

                                        <td>sudah</td>
                                        <td>belum</td>

                                        <td>sudah</td>
                                        <td>belum</td>

                                        <td>sudah</td>
                                        <td>belum</td>

                                        <td>sudah</td>
                                        <td>belum</td>
                                    </tr>

                                    <tr>
                                        <td>{{ $countsudah['2017'] ?? 0 }}</td>
                                        <td>{{ $countbelum['2017'] ?? 0 }}</td>

                                        <td>{{ $countsudah['2018'] ?? 0 }}</td>
                                        <td>{{ $countbelum['2018'] ?? 0 }}</td>

                                        <td>{{ $countsudah['2019'] ?? 0 }}</td>
                                        <td>{{ $countbelum['2019'] ?? 0 }}</td>

                                        <td>{{ $countsudah['2020'] ?? 0 }}</td>
                                        <td>{{ $countbelum['2020'] ?? 0 }}</td>

                                        <td>{{ $countsudah['2021'] ?? 0 }}</td>
                                        <td>{{ $countbelum['2021'] ?? 0 }}</td>

                                        <td>{{ $countsudah['2022'] ?? 0 }}</td>
                                        <td>{{ $countbelum['2022'] ?? 0 }}</td>

                                        <td>{{ $countsudah['2023'] ?? 0 }}</td>
                                        <td>{{ $countbelum['2023'] ?? 0 }}</td>
                                    </tr>
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
