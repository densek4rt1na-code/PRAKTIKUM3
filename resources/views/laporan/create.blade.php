@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Form Pelaporan Banjir</h2>

    <form action="{{ route('laporan.store') }}" method="POST">
        @csrf

        <div class="form-group">
            <label for="nama">Nama Pelapor:</label>
            <input type="text" id="nama" name="nama" placeholder="Masukkan nama Anda" required>
        </div>

        <div class="form-group">
            <label for="lokasi">Lokasi Kejadian:</label>
            <input type="text" id="lokasi" name="lokasi" placeholder="Masukkan lokasi kejadian" required>
        </div>

        <div class="form-group">
            <label for="tinggi">Tinggi Genangan Air (cm):</label>
            <input type="number" id="tinggi" name="tinggi" placeholder="Contoh: 50" required>
        </div>

        <button type="submit" class="btn">Kirim Laporan</button>
    </form>
</div>
@endsection