<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>transaksi</title>
</head>
<body>
    <h1 align="center">Data Tabel Transaksi</h1>
    <table border="1" align="center">
        <tr>
            <th>No</th>
            <th>ID</th>
            <th>ID Barang</th>
            <th>ID Pembeli</th>
            <th>Jenis Kelamin</th>
            <th>Jumlah</th>
            <th>Tanggal</th>
            
        </tr>
        @php $no = 1; @endphp
        @foreach ($transaksi as $data)
        <tr>
            <td>{{ $no++ }}</td>
            <td>{{ $data->id }}</td>
            <td>{{ $data->barang2s->nama_barang }}</td>
            <td>{{ $data->pembeli->nama_pembeli }}</td>
            <td>{{ $data->pembeli->jenis_kelamin }}</td> 
            <td>{{ $data->jumlah }}</td>
            <td>{{ $data->tanggal }}</td>
        </tr>
        @endforeach
    </table>
</body>
</html>
