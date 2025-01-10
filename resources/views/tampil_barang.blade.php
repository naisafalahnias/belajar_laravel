<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table border="1" cellspacing="0" cellpadding="5" align="center">
        <tr>
            <th>ID</th>
            <th>NAMA BARANG</th>
            <th>MERK</th>
            <th>HARGA</th>
        </tr>
        @foreach($barang as $data)
        <tr>
            <td><p>{{ $data->id }}</p></td>
            <td><p>{{ $data->nama_barang }}</p></td>
            <td><p>{{ $data->merk }}</p></td>
            <td><p>{{ $data->harga }}</p></td>
        </tr>
        @endforeach
    </table>
</body>
</html>