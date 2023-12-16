<style>
    table,
    th,
    td {
        border: 1px solid black;
    }
</style>

<table>
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
