@extends('index')

@section('content')
    <a href="{{ route('pelanggaran.create') }}">Tabah Data</a>
    <table border="1">
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Status</th>
            <th>Aksi</th>
        </tr>
        @foreach ($data as $item)
            <tr id="index-{{ $item->id }}">
                <td>{{ $loop->iteration }}</td>
                <td>{{ $item->nama_pelanggaran }}</td>
                <td>{{ $item->status }}</td>
                <td>
                    <a href="{{ route('pelanggaran.edit', $item->id) }}">Edit</a>
                    <a href="{{ route('pelanggaran.show', $item->id) }}">Tampilkan</a>
                    <a id="delete" href="javascript:void(0)" data-id="{{ $item->id }}"
                        data-url="{{ route('pelanggaran.destroy', $item->id) }}">Delete</a>
                </td>
            </tr>
        @endforeach
    </table>
@endsection

@push('js')
    <script src="{{ asset('plugins/jquery/jquery.min.js') }}"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            // ketika id delete di klik
            $('table').on('click', '#delete', function() {
                var URL = $(this).data('url'); // ambil url atau route
                var ID = $(this).data('id'); // ambil id dari table
                let token = $("meta[name='csrf-token']").attr("content"); // buat token
                $.ajax({
                    url: URL,
                    type: 'DELETE',
                    data: {
                        '_token': token
                    },
                    success: function(hasil) {
                        if (hasil.success) {
                            $(`#index-${ID}`).remove();
                        }
                    }
                })
            })

        })
    </script>
@endpush
