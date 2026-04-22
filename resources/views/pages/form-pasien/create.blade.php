
@extends('layouts.app')

@section('title', 'Form Antrian')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">

            <div class="card">
                <div class="card-body p-5">

                    <h3 class="text-center fw-bold mb-4">Form Antrian Rumah Sakit</h3>

                    <form method="POST" action="{{ route('antrian.store') }}">
                        @csrf

                        {{-- Nomor Antrian --}}
                        <div class="form-group mb-3">
                            <label>Nomor Antrian</label>
                            @error('nomor_antrian')
                                <span class="invalid-feedback">{{ $message }}</span>
                            @enderror
                        </div>

                        {{-- Pasien --}}
                          <div class="form-group mb-3">
                        <label for="spesialis" class="form-label">Pasien</label>
                        <input type="text" name="pasien_id" value="{{ old('pasien_id') }}" class="form-control @error('pasien_id') is-invalid @enderror" placeholder="Masukkan pasien">
                        @error('pasien_id')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                        {{-- Dokter --}}
                        <div class="form-group mb-3">
                            <label>Dokter</label>
                            <select name="dokter_id"
                                class="form-control @error('dokter_id') is-invalid @enderror">
                                <option value="">-- Pilih Dokter --</option>
                                @foreach($dokter as $d)
                                    <option value="{{ $d->id }}"
                                        {{ old('dokter_id') == $d->id ? 'selected' : '' }}>
                                        {{ $d->nama_dokter }}
                                    </option>
                                @endforeach
                            </select>

                            @error('dokter_id')
                                <span class="invalid-feedback">{{ $message }}</span>
                            @enderror
                        </div>

                        {{-- Poli --}}
                        <div class="form-group mb-3">
                            <label>Poli</label>
                            <select name="poli_id"
                                class="form-control @error('poli_id') is-invalid @enderror">
                                <option value="">-- Pilih Poli --</option>
                                @foreach($poli as $p)
                                    <option value="{{ $p->id }}"
                                        {{ old('poli_id') == $p->id ? 'selected' : '' }}>
                                        {{ $p->nama_poli }}
                                    </option>
                                @endforeach
                            </select>

                            @error('poli_id')
                                <span class="invalid-feedback">{{ $message }}</span>
                            @enderror
                        </div>

                        {{-- Status --}}
                        <div class="form-group mb-4">
                            <label>Status</label>
                            <select name="status"
                                class="form-control @error('status') is-invalid @enderror">
                                <option value="">-- Pilih Status --</option>
                                <option value="menunggu" {{ old('status') == 'menunggu' ? 'selected' : '' }}>Menunggu</option>
                                <option value="dipanggil" {{ old('status') == 'dipanggil' ? 'selected' : '' }}>Dipanggil</option>
                                <option value="selesai" {{ old('status') == 'selesai' ? 'selected' : '' }}>Selesai</option>
                            </select>

                            @error('status')
                                <span class="invalid-feedback">{{ $message }}</span>
                            @enderror
                        </div>

                        {{-- Button --}}
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary w-100">
                                Simpan Antrian
                            </button>
                        </div>

                    </form>

                </div>
            </div>

        </div>
    </div>
</div>
@endsection