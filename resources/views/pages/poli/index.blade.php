@extends('layouts.app')

@section('content')
<h3>Data Poli</h3>

<a href="{{ route('poli.create') }}" class="btn btn-primary mb-3">
    Tambah Poli
</a>

<table class="table">
    <thead>
        <tr>
            <th>No</th>
            <th>Nama Poli</th>
            <th>Keterangan</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        @foreach($poli as $item)
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $item->nama_poli }}</td>
            <td>{{ $item->keterangan ?? '-' }}</td>
            <td>
                <a href="{{ route('poli.edit', $item->id) }}">Edit</a>
                <a href="{{ route('poli.show', $item->id) }}">Detail</a>
                <form action="{{ route('poli.destroy', $item->id) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Hapus</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection