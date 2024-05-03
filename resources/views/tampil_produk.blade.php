<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>telepon</title>
</head>
<body>
    <h1 align="center">Data Tabel Produk</h1>
    <table border="1" align="center">
        <tr>
            <th>No</th>
            <th>ID</th>
            <th>Nama Produk</th>
            <th>Jumlah</th>
            <th>Tanggal Produk</th>
            <th>ID Merk</th>
            
        </tr>
        @php $no = 1; @endphp
        @foreach ($produk as $data)
        <tr>
            <td>{{ $no++ }}</td>
            <td>{{ $data->id }}</td>
            <td>{{ $data->nama_produk }}</td>
            <td>{{ $data->jumlah }}</td>
            <td>{{ $data->tanggal_produk }}</td>
            <td>{{ $data->merek->nama_merk}}</td> 
        </tr>
        @endforeach
    </table>
</body>
</html>
