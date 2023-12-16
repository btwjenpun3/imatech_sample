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
    <div class="col-md-12 m-3">
        <form action="/laporan" method="post">
            @csrf
            <label for="tanggal_mulai">Tanggal Mulai:</label>
            <input type="date" name="tanggal_mulai">

            <label for="tanggal_akhir">Tanggal Akhir:</label>
            <input type="date" name="tanggal_akhir">

            <button type="submit">Cari</button>
        </form>
        <p><a href="/laporan">Kembali ke Laporan</a>
    </div>
    <div class="row">
        <div class="col-md-12">
            <table class="table table-border">
                <tr>
                    <th>Nomor Nota</th>
                    <th>Tanggal</th>
                    <th>Customer</th>
                    <th>Alamat</th>
                    <th>Memo</th>
                </tr>
                @foreach ($results as $d)
                    <tr>
                        <td>{{ $d->nota }}</td>
                        <td>{{ $d->tgl }}</td>
                        <td>{{ $d->kpd }}</td>
                        <td>{{ $d->almt }}</td>
                        <td>{{ $d->memo }}</td>
                    </tr>
                @endforeach
            </table>
        </div>
        {{-- <div class="col-md-6">
            <a href="#">Laporan Penjualan</a>
        </div> --}}
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
        integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous">
    </script>
</body>

</html>
