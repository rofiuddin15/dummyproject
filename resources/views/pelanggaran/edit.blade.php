<form action="{{ route('pelanggaran.update', $data->id) }}" method="post">
    @method('PUT')
    @csrf
    <input value="{{ $data->nama_pelanggaran }}" type="text" name="nama" id="">
    <select name="status" id="">
        <option value="{{ $data->status }}">{{ $data->status }}</option>
        @if ($data->status == 'aktif')
            <option value="nonaktif">Tidak Aktif</option>
        @else
            <option value="aktif">Aktif</option>
        @endif
    </select>
    <button type="submit">Simpan</button>
</form>
