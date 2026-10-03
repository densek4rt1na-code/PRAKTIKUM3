<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request; 
class LaporanController extends Controller
{
    // 1. Halaman Form Pelaporan
    public function create()
    {
        return view('laporan.create');
    }

    // 2. Memproses data form & menampilkan Halaman Konfirmasi
    public function store(Request $request)
    {
        $nama = $request->input('nama');
        $lokasi = $request->input('lokasi');
        $tinggi = $request->input('tinggi');

        return view('laporan.konfirmasi', compact('nama', 'lokasi', 'tinggi'));
    }

    // 3. Halaman Daftar Laporan (Menggunakan Array Dummy)
    public function index()
    {
        $laporanList = [
            [
                'nama' => 'Budi Santoso',
                'lokasi' => 'Dayeuhkolot',
                'tinggi' => 25 // < 30cm -> Waspada
            ],
            [
                'nama' => 'Siti Aminah',
                'lokasi' => 'Baleendah',
                'tinggi' => 50 // 30-70cm -> Siaga
            ],
            [
                'nama' => 'Asep Kurnia',
                'lokasi' => 'Bojongsoang',
                'tinggi' => 85 // > 70cm -> Awas
            ]
        ];

        return view('laporan.index', compact('laporanList'));
    }
}