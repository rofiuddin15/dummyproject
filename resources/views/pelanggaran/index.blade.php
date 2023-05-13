<a href="{{ route('pelanggaran.create') }}">Tabah Data</a>
<table border="1">
    <tr>
        <th>No</th>
        <th>Nama</th>
        <th>Status</th>
        <th>Aksi</th>
    </tr>
    @foreach ($data as $item)
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $item->nama_pelanggaran }}</td>
            <td>{{ $item->status }}</td>
            <td>
                <a href="{{ route('pelanggaran.edit', $item->id) }}">Edit</a>
                <a href="{{ route('pelanggaran.show', $item->id) }}">Tampilkan</a>
            </td>
        </tr>
    @endforeach
</table>
