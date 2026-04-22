@extends('layouts.user.app')

@section('content')

<div class="antrian-card text-center shadow p-4 mx-auto">

    <h5 class="antrian-title">Nomor Antrian Anda</h5>

    <h1 class="nomor-antrian">
        {{ $antrian->nomor_antrian }}
    </h1>

    <div class="divider"></div>

    <p class="antrian-info"><span>Nama:</span> {{ $antrian->pasien->nama_pasien }}</p>
    <p class="antrian-info"><span>Poli:</span> {{ $antrian->poli->nama_poli }}</p>
    <p class="antrian-info"><span>Dokter:</span> {{ $antrian->dokter->nama_dokter }}</p>

    <a href="{{ route('form-pasien.create') }}" class="btn btn-primary btn-antrian mt-3">
        Ambil Antrian Lagi
    </a>

</div>

@endsection