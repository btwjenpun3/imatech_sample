<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <div class="row">
        <div class="col-md-6">
            <table class="table table-border">
                <tr>
                    <th>Nomor Nota</th>
                    <th>ID Barang</th>
                    <th>Harga Jual</th>
                </tr>
                @foreach ($all as $a)
                    <tr>
                        <td>{{ $a->n_nota }}</td>
                        <td>{{ $a->id_baran }}</td>
                        <td>{{ $a->hrg_jual }}</td>
                    </tr>
                @endforeach
            </table>
        </div>
        <div class="col-md-6">
            <a href="#">Laporan Penjualan</a>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
        integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous">
    </script>
</body>

</html>
