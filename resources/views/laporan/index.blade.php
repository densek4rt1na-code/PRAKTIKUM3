@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Daftar Laporan Banjir</h2>

    {{-- Loop menggunakan @forelse dan memanggil partial @include --}}
    @forelse($laporanList as $item)
        @include('partials.laporan-card', ['item' => $item])
    @empty
        <p style="text-align: center; color: #666;">Belum ada laporan banjir terdaftar.</p>
    @endforelse

    <a href="{{ route('laporan.create') }}" class="btn" style="margin-top: 15px;">Buat Laporan Baru</a>
</div>
@endsection