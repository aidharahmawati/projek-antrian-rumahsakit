@extends('layouts.app')
@section('content')
    <div class="pt-2 pb-4">
        <h3 class="fw-bold mb-3">Profil Saya</h3> 
    </div>

    <div class="row">
        <div class="col-md-6">
            <form action="{{route('profile.update')}}" method="POST">
                @csrf
                <div class="card">
                    <div class="card-body">
                        @If(session('success'))
                            <div class="alert alert-success mb-2">
                                {{ session('success') }}
                            </div>
                        @endif
                        <div class="form-group mb-2">
                            <label class="form-label">Nama Lengkap</label>
                            <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{ Auth::user()->name }}">

                            @error('name')
                                <span class="invalid-feedback d-block" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group mb-2">
                            <label class="form-label" for="email">Email</label>
                            <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" value="{{ Auth::user()->email }}">
                            
                             @error('email')
                                <span class="invalid-feedback d-block" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                             @enderror
                        </div>

                       <div class="form-group">
                        <button type="submit" class="btn btn-primary mt-3">Simpan</button>
                     </div>
                    </div>

                </div>
            </form>
    </div>
    @endsection