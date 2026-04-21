@extends('layouts.app')
@section('title', 'Data Dokter')

@section('content')
<div class="pt-2 pb-4">
    <h3 class="fw-bold mb-3">Data Dokter</h3>
</div>

<a href="{{ route('dokter.create') }}" class="btn btn-primary mb-3">
    <i class="fa fa-plus"></i> Tambah Dokter
</a>

<div class="card card-body">
    <div class="table-responsive">
        <table class="table table-hover datatable">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Dokter</th>
                    <th>Spesialis</th>
                    <th>Poli</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach($dokter as $item)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $item->nama_dokter }}</td>
                    <td>{{ $item->spesialis }}</td>
                    <td>{{ $item->poli->nama_poli ?? 'N/A' }}</td>
                    <td>
                        <a href="{{ route('dokter.edit', $item->id) }}" class="btn btn-sm btn-warning">Edit</a>
                        <a href="{{ route('dokter.show', $item->id) }}" class="btn btn-sm btn-info">Detail</a>
                        <button onclick="actionToDelete('{{ route('dokter.destroy', $item->id) }}')" class="btn btn-sm btn-danger">
                            Hapus
                        </button>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

<form action="" method="POST" id="form-delete">
    @csrf
    @method('DELETE')
</form>
@endsection