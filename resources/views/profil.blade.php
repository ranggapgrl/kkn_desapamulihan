@extends('layouts.app')

@section('content')

{{-- Ubah pt-40 menjadi pt-24 atau pt-28 agar jaraknya tidak terlalu jauh --}}
<section class="bg-ink relative overflow-hidden pt-24 pb-12 lg:pt-28 lg:pb-16">
    <div class="absolute inset-0 text-paper/5 bg-topo"></div>
    <div data-reveal class="relative max-w-7xl mx-auto px-5 lg:px-10 text-center">
        <p class="text-gold font-mono text-xs tracking-[0.2em] uppercase mb-3">Profil Desa</p>
        <h1 class="font-display text-paper text-3xl lg:text-4xl font-semibold">Mengenal {{ $desa['nama_desa'] }}</h1>
    </div>
</section>

<section class="max-w-5xl mx-auto px-5 lg:px-10 py-16 lg:py-24">
    <div data-reveal>
    <h2 class="font-display text-2xl lg:text-3xl font-semibold text-ink mb-6">Sejarah Singkat</h2>
    <div class="text-inktext/75 leading-relaxed space-y-4 text-base lg:text-lg">
        @foreach (explode("\n\n", $desa['profil']['sejarah']) as $paragraf)
            <p>{{ $paragraf }}</p>
        @endforeach
    </div>
    </div>

    <div data-reveal style="transition-delay: 120ms" class="grid grid-cols-1 sm:grid-cols-3 gap-6 mt-12">
        <div class="bg-paper-alt border border-ink/10 rounded-xl p-6 text-center">
            <p class="text-xs uppercase tracking-wide text-inktext/50 mb-2">Tahun Berdiri</p>
            <p class="font-display text-2xl font-semibold text-ink">{{ $desa['profil']['tahun_berdiri'] }}</p>
        </div>
        <div class="bg-paper-alt border border-ink/10 rounded-xl p-6 text-center">
            <p class="text-xs uppercase tracking-wide text-inktext/50 mb-2">Kepala Desa</p>
            <p class="font-display text-2xl font-semibold text-ink">{{ $desa['profil']['kepala_desa'] }}</p>
        </div>
        <div class="bg-paper-alt border border-ink/10 rounded-xl p-6 text-center">
            <p class="text-xs uppercase tracking-wide text-inktext/50 mb-2">Klasifikasi</p>
            <p class="font-display text-lg font-semibold text-ink">{{ $desa['profil']['klasifikasi'] }}</p>
        </div>
    </div>
</section>

@include('partials.divider')

<section class="bg-paper-alt border-y border-ink/10">
    <div class="max-w-5xl mx-auto px-5 lg:px-10 py-16 lg:py-24 grid grid-cols-1 md:grid-cols-2 gap-10">
        <div data-reveal>
            <p class="text-sawah font-semibold text-sm tracking-wide uppercase mb-3">Arah Pembangunan</p>
            <h2 class="font-display text-2xl lg:text-3xl font-semibold text-ink mb-4">Visi</h2>
            <p class="text-inktext/75 leading-relaxed text-base lg:text-lg">{{ $desa['profil']['visi'] }}</p>
        </div>
        <div data-reveal style="transition-delay: 120ms">
            <p class="text-sawah font-semibold text-sm tracking-wide uppercase mb-3">Langkah Nyata</p>
            <h2 class="font-display text-2xl lg:text-3xl font-semibold text-ink mb-4">Misi</h2>
            <ol class="space-y-3">
                @foreach ($desa['profil']['misi'] as $i => $misi)
                    <li class="flex gap-3">
                        <span class="font-mono text-gold-dark shrink-0">{{ str_pad($i + 1, 2, '0', STR_PAD_LEFT) }}</span>
                        <span class="text-inktext/75 leading-relaxed">{{ $misi }}</span>
                    </li>
                @endforeach
            </ol>
        </div>
    </div>
</section>
{{-- Tambahkan ini di bagian bawah konten profil.blade.php --}}
<section class="max-w-4xl mx-auto px-5 py-16">
    <div class="bg-ink rounded-3xl p-8 lg:p-12 text-center text-paper">
        <h3 class="font-display text-2xl lg:text-3xl font-bold mb-4">Ingin Mengenal Tim KKN Kami?</h3>
        <p class="text-paper/70 mb-8">Lihat daftar mahasiswa pengabdi dari kelompok Pamulihan 1, 2, dan 3.</p>
        <a href="{{ route('kelompok') }}" class="inline-block bg-gold hover:bg-gold-dark text-ink font-bold px-8 py-3 rounded-full transition-all">
            Lihat Anggota Kelompok
        </a>
    </div>
</section>

@endsection