<form action="{{ route('pelanggaran.store') }}" method="post">
    @csrf
    <input type="text" name="nama" id="">
    <button type="submit">Simpan</button>
</form>
