@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Konfirmasi Laporan</h2>

    {{-- Penggunaan Komponen Blade <x-alert> --}}
    <x-alert>
        Laporan banjir berhasil dikirim! Terima kasih atas partisipasi Anda.
    </x-alert>

    <div style="background-color: #f7faff; border: 1.5px solid #90caf9; padding: 16px; border-radius: 10px; margin-bottom: 20px;">
        <p style="margin-bottom: 8px;"><strong>Nama Pelapor:</strong> {{ $nama }}</p>
        <p style="margin-bottom: 8px;"><strong>Lokasi Kejadian:</strong> {{ $lokasi }}</p>
        <p><strong>Tinggi Genangan Air:</strong> {{ $tinggi }} cm</p>
    </div>

    <a href="{{ route('laporan.index') }}" class="btn">Lihat Semua Laporan</a>
</div>
@endsection