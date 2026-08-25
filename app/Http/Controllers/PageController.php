<?php

namespace App\Http\Controllers;

use App\Mail\PesanKontakMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

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

    public function beritaDetail(string $slug)
    {
        $berita = collect(config('desa.berita'))->firstWhere('slug', $slug);

        abort_if(!$berita, 404);

        return view('berita-detail', [
            'desa'         => config('desa'),
            'berita'       => $berita,
            'aktif'        => 'berita',
            'judulHalaman' => $berita['judul'],
        ]);
    }

    public function layananPublik()
    {
        return view('layanan-publik', [
            'desa'       => config('desa'),
            'aktif'      => 'layanan-publik',
            'judulHalaman' => 'Layanan Publik',
        ]);
    }

    public function galeri()
    {
        return view('galeri', [
            'desa'       => config('desa'),
            'aktif'      => 'galeri',
            'judulHalaman' => 'Galeri Desa',
        ]);
    }

    public function produkHukum()
    {
        return view('produk-hukum', [
            'desa'       => config('desa'),
            'aktif'      => 'produk-hukum',
            'judulHalaman' => 'Produk Hukum Desa',
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

    public function kirimPesanKontak(Request $request)
    {
        $data = $request->validate([
            'nama'  => ['required', 'string', 'max:100'],
            'email' => ['required', 'email', 'max:150'],
            'pesan' => ['required', 'string', 'max:2000'],
            // Honeypot anti-spam sederhana: field tersembunyi ini harus selalu kosong.
            // Bot pengisi form otomatis biasanya mengisi semua input yang ada.
            'website' => ['prohibited'],
        ], [
            'nama.required'  => 'Nama wajib diisi.',
            'email.required' => 'Email wajib diisi.',
            'email.email'    => 'Format email tidak valid.',
            'pesan.required' => 'Pesan tidak boleh kosong.',
        ]);

        Mail::to(config('desa.kontak.email'))->send(
            new PesanKontakMail($data['nama'], $data['email'], $data['pesan'])
        );

        return redirect()
            ->route('kontak')
            ->with('status', 'Pesan kamu berhasil dikirim. Terima kasih, tim desa akan segera merespons.');
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