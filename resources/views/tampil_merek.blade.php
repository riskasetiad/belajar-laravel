<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>merk</title>
</head>
<body>
    <table border="1" align="center">
        <tr>
            <th>No</th>
            <th>ID</th>
            <th>Nama Merk</th>
        </tr>
        @php $no = 1; @endphp
        @foreach ($merek as $data)
        <tr>
            <td>{{ $no++ }}</td>
            <td>{{ $data->id }}</td>
            <td>{{ $data->nama_merk }}</td>
        </tr>
        @endforeach
    </table>
</body>
</html>