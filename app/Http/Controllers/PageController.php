<?php

namespace App\Http\Controllers;

class PageController extends Controller
{
    public function beranda()
    {
        return view('home', [
            'desa'       => config('desa'),
            'aktif'      => 'beranda',
            'judulHalaman' => 'Beranda',
        ]);
    }

    public function profil()
    {
        return view('profil', [
            'desa'       => config('desa'),
            'aktif'      => 'profil',
            'judulHalaman' => 'Profil Desa',
        ]);
    }

    public function pemerintahan()
    {
        return view('pemerintahan', [
            'desa'       => config('desa'),
            'aktif'      => 'pemerintahan',
            'judulHalaman' => 'Pemerintahan',
        ]);
    }

    public function potensi()
    {
        return view('potensi', [
            'desa'       => config('desa'),
            'aktif'      => 'potensi',
            'judulHalaman' => 'Potensi Desa',
        ]);
    }

    public function berita()
    {
        return view('berita', [
            'desa'       => config('desa'),
            'aktif'      => 'berita',
            'judulHalaman' => 'Berita & Galeri',
        ]);
    }

    public function transparansi()
    {
        return view('transparansi', [
            'desa'       => config('desa'),
            'aktif'      => 'transparansi',
            'judulHalaman' => 'Transparansi Anggaran',
        ]);
    }

    public function kontak()
    {
        return view('kontak', [
            'desa'       => config('desa'),
            'aktif'      => 'kontak',
            'judulHalaman' => 'Kontak Kami',
        ]);
    }

public function kelompok()
{
    return view('kelompok', [
        'desa'         => config('desa'), // Mengambil data lengkap dari file config/desa.php
        'aktif'        => 'kelompok',     // Agar menu navbar terpilih/aktif
        'judulHalaman' => 'Kelompok KKN',
    ]);
}
}