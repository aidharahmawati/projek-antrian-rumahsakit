@extends('layouts.app')
@section('title', 'Data Admin')

@section('content')
    <div class="pt-2 pb-4">
        <h3 class="fw-bold mb-3">Data Admin</h3>
    </div>
    <a href="{{ route('admin.create') }}" class="btn btn-primary mb-3"><span class="fa fa-plus">Tambah Admin</span></a>

    <div class="card card-body">
        <div class="table-responsive">
            <table class="table table-hover datatable">
                <thead>
                    <tr>
                        <th>NO</th>
                        <th>Nama Admin</th>
                        <th>Email</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($users as $item)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $item->name }}</td>
                        <td>{{ $item->email }}</td>
                        <td>
                            @if($item->id > 1)
                            <a href="{{ route('admin.edit', $item->id) }}" class="btn btn-link py-0 px-2 text-decoration-none "><span class="fa fa-edit">Edit</span></a>
                            <a href="{{ route('admin.show', $item->id) }}" class="btn text-primary btn-link py-0 px-2 text-decoration-none "><span class="fa fa-eye">Detail</span></a>
                            <a href="#" onclick="actionToDelete('{{ route('admin.destroy', $item->id) }}')" class="btn btn-sm btn-danger"  ><span class="fa fa-trash">Hapus</span></a>
                            @endif
                        </td>
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

@push('scripts')
    <script src="{{ asset('/js/plugin/datatables/datatables.min.js') }}"></script>
    <script src="{{ asset('/js/plugin/sweetalert/sweetalert.min.js') }}"></script>
    <script type="text/javascript">
       $(function() {
            $('.datatable').DataTable();
        });

        function actionToDelete(url) {
        swal({
            title: "Apakah Anda yakin?",
            text: "Data yang dihapus tidak dapat dikembalikan!",
            icon: "warning",
            buttons: true,
            dangerMode: true,
        })
        .then((confirm) => {
            if (confirm) {
                $('#form-delete').attr('action', url);
                $('#form-delete').submit();
            }
        });
    }
    </script>

    @if (session('success'))
    <script>
        swal({
            title: "Sukses",
            text: "{{ session('success') }}",
            icon: "success",
            button: "OK",
        });
    </script>
@endif
@endpush