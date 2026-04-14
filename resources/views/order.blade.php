<h1>Data Order</h1>

<table border="1">
    <tr>
        <th>ID</th>
        <th>Nama</th>
        <th>Tanggal</th>
        <th>Jumlah</th>
        <th>Status</th>
    </tr>

    @foreach($data as $item)
    <tr>
        <td>{{ $item['id'] }}</td>
        <td>{{ $item['nama'] }}</td>
        <td>{{ $item['tanggal'] }}</td>
        <td>{{ $item['jumlah'] }}</td>
        <td>{{ $item['status'] }}</td>
    </tr>
    @endforeach
</table>