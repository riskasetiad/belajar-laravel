<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>pengguna</title>
</head>
<body>
    <table border="1" align="center">
        <tr>
            <th>No</th>
            <th>ID</th>
            <th>Nama</th>
            
        </tr>
        @php $no = 1; @endphp
        @foreach ($pengguna as $data)
        <tr>
            <td>{{ $no++ }}</td>
            <td>{{ $data->id }}</td>
            <td>{{ $data->nama }}</td>
        </tr>
        @endforeach
    </table>
</body>
</html>