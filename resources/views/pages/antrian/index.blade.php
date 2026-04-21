@extends('layouts.app')

@section('content')
<div class="pt-2 pb-3">
    <h3 class="fw-bold">Data Antrian</h3>
</div>

<a href="{{ route('antrian.create') }}" class="btn btn-primary mb-3">
    <span class="fa fa-plus"></span> Tambah Antrian
</a>

<div class="card card-body">
    <div class="table-responsive">
        <table class="table table-hover">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nomor Antrian</th>
                    <th>Pasien</th>
                    <th>Dokter</th>
                    <th>Poli</th>
                    <th>Status</th>
                    <th>Aksi</th>
                </tr>
            </thead>

            <tbody>
                @foreach($antrian as $item)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $item->nomor_antrian }}</td>
                    <td>{{ $item->pasien->nama ?? '-' }}</td>
                    <td>{{ $item->dokter->nama_dokter ?? '-' }}</td>
                    <td>{{ $item->poli->nama_poli ?? '-' }}</td>
                    <td>{{ $item->status }}</td>

                    <td>
                        <a href="{{ route('antrian.show', $item->id) }}" class="btn btn-sm btn-info">Detail</a>
                        <a href="{{ route('antrian.edit', $item->id) }}" class="btn btn-sm btn-warning">Edit</a>

                        <form action="{{ route('antrian.destroy', $item->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-sm btn-danger">Hapus</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>

        </table>
    </div>
</div>
@endsection