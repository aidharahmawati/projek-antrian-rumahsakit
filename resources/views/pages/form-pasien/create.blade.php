@extends('layouts.blank')

@section('title', 'Form Pasien')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header"></div>

                <div class="card-body p-5">
                    <h3 class="text-center fw-bold mb-5">Form Pasien</h3>

                    <form method="POST" action="{{ route('form-pasien.store') }}">
                        @csrf

                        <div class="form-group">
                            <label for="nama">Nama</label>
                            <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" name="nama" value="{{ old('nama') }}" >

                            @error('nama')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="row">
                             <div class="form-group">
                            <label for="nomor_telepon">Nomor Telepon</label>
                            <input id="telp" type="text" class="form-control @error('telp') is-invalid @enderror" id="telp" name="telp" value="{{ old('telp') }}" >

                            @error('telp')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        
                        </div>

                        <div class="col-md-6">
                             <div class="form-group">
                            <label for="email">Email</label>
                            <input id="email" type="text" class="form-control @error('email') is-invalid @enderror" id="email" name="email" value="{{ old('email') }}" >

                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        </div>

                        <div class="form-group">
                            <label for="alamat">Alamat</label>
                            <input type="text" class="form-control @error('alamat') is-invalid @enderror" id="alamat" name="alamat" value="{{ old('alamat') }}" >

                            @error('alamat')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror 
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                            <label for="asal_instansi">Asal Instansi</label>
                            <input type="text" class="form-control @error('asal_instansi') is-invalid @enderror" id="asal_instansi" name="asal_instansi" value="{{ old('asal_instansi') }}" >

                            @error('asal_instansi')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                            </div>
                        </div>

                          <div class="form-group">
                            <label for="keperluan">Keperluan</label>
                            <input type="text" class="form-control @error('keperluan') is-invalid @enderror" id="keperluan" name="keperluan" value="{{ old('keperluan') }}" >

                            @error('keperluan')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <div class="grid-gap-2">
                                <button type="submit" class="btn btn-primary d-block">Submit</button>
                            </div>
                        </div>
                    
                    </form>


                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@push('scripts')
    <script src="{{ asset('/js/plugin/select2/select2.full.min.js') }}"></script>
    <script src="{{ asset('/js/plugin/sweetalert/sweetalert.min.js') }}"></script>
    <script>
        $(document).ready(function() {
            $('.select2').select2();
        });
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
